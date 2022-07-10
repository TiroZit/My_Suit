// Подключение функционала
import { isMobile, bodyLockToggle, bodyLock, bodyUnlock } from './functions.js'
// Подключение списка активных модулей
import { flsModules } from './modules.js'

document.addEventListener('click', documentActions)

function documentActions(e) {
  const targetElement = e.target
  const subMenuButtonClose =
    targetElement.classList.contains('submenu__close') ||
    targetElement.classList.contains('i-close')
  const searchButtonClose =
    targetElement.classList.contains('search__close') ||
    targetElement.classList.contains('i-close-search')
  const searchForm = document.querySelector(`.header__search`)
  if (targetElement.closest('[data-parent]') || subMenuButtonClose) {
    const subMenuId = targetElement.dataset.parent
      ? targetElement.dataset.parent
      : null
    const subMenu = document.querySelector(`[data-submenu='${subMenuId}']`)
    const activeButton = document.querySelector('.submenu-active')
    const activeSubMenu = document.querySelector('.submenu-open')

    if (subMenu) {
      if (activeButton && activeButton !== targetElement) {
        activeButton.classList.remove('submenu-acitve')
        activeSubMenu.classList.remove('submenu-open')
      }

      targetElement.classList.toggle('submenu-active')
      subMenu.classList.toggle('submenu-open')
      if (searchForm) searchForm.classList.remove('search-open')
    }
    if (subMenuButtonClose) {
      activeButton.classList.remove('submenu-active')
      activeSubMenu.classList.remove('submenu-open')
    }
    e.preventDefault()
  }

  if (targetElement.closest('#searchButton') || searchButtonClose) {
    const activeButton = document.querySelector('.submenu-active')
    const activeSubMenu = document.querySelector('.submenu-open')
    if (searchForm) {
      searchForm.classList.toggle('search-open')
      if (activeSubMenu) {
        activeButton.classList.remove('submenu-active')
        activeSubMenu.classList.remove('submenu-open')
      }
    }

    if (searchButtonClose) {
      document.querySelector(`.header__search`).classList.remove('search-open')
    }
    e.preventDefault()
  }
  if (
    targetElement.closest('.cart-menu__close') ||
    targetElement.closest('.cart-menu__btn-close') ||
    (targetElement.closest('body') && !targetElement.closest('.cart-menu'))
  ) {
    bodyUnlock()
    document.querySelector('html').classList.remove('cart-menu-open')
  }
  if (targetElement.closest('.menu-icons__item_cart')) {
    bodyLock()
    document.querySelector('html').classList.add('cart-menu-open')
  }
  if (targetElement.closest('.info-product__btn_cart')) {
    addItemInCart(event)
  }
}

const state = {
  isCart: (() => document.location.pathname === '/cart/')(),
  strCart: null,
}

// Темплейт пустой корзины
const emptyCartMock = `
    <div class="cart__wrapper-empty">
        <div class="cart__title-empty">У вас в корзине нет товаров</div>
        <a class="cart__btn-empty btn btn_black" href="/catalog/all">
            Перейти в каталог
        </a>
    </div>
`

const cartSelectors = document.querySelectorAll('#cartCount')
const summarySelector = document.querySelector('.cart-total__price')
const totalDiscountSelector = document.querySelector('.total_discount')

const normalPrice = str => {
  return String(str).replace(/(\d)(?=(\d\d\d)+([^\d]|$))/g, '$1 ')
}

// Обновление корзины на сервере
async function updateCart(form) {
  const { action, method } = form

  const response = await fetch(action, {
    method,
    headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
    body: $(form).serialize() + '&json=1',
  })

  const { TotalItemCount } = await response.json()

  updateCartQty(TotalItemCount)

  if (state.isCart) {
    const cartState = await getCartState('none', 'none')
    const itemCardList = Array.from(
      document.querySelectorAll('form.cart__product')
    )

    if (itemCardList.length <= 0 || Object.keys(cartState).length <= 0) return

    for (const item of itemCardList) {
      const [classId, messageId] = item
        .querySelector('input[name="items[]"]')
        .value.toString()
        .split(':')

      const idx = cartState.items.findIndex(({ id }) => id === messageId)

      if (idx > -1) {
        const { totalPrice, totalDiscountPrice } = cartState.items[idx]

        const originalPriceSelector = item.querySelector('.cart-product__price')
        const totalPriceSelector = item.querySelector('.cart-product__price')

        originalPriceSelector.querySelector('span').innerText =
          normalPrice(totalPrice)
      }
    }

    summarySelector.querySelector('span').innerText = normalPrice(
      cartState.totalCost
    )
    //totalDiscountSelector.querySelector('span').innerText = cartState.discount

    //if (!cartState.discount) totalDiscountSelector.classList.add('d-none')
    //else totalDiscountSelector.classList.remove('d-none')

    state.strCart = cartState.strCart ?? null
  }

  return TotalItemCount
}

// Получить информацию о корзине
async function getCartState(classId, messageId) {
  const response = await fetch('/requests/getCartState.php', {
    method: 'POST',
    mode: 'cors',
    cache: 'no-cache',
    headers: { 'Content-Type': 'application/json' },
    body: JSON.stringify({ classId, messageId }),
  })

  return await response.json()
}

// Обновить кол-во товаров на странице
function updateCartQty(TotalItemCount) {
  cartSelectors.forEach(element => {
    element.innerHTML = TotalItemCount
  })
}

// Получить карточку товара (form) над которой производятся изменения
function getItemCard(cardID) {
  if (!cardID) return null

  return document.querySelector(`form[data-parent-id="${cardID}"]`)
}

// Смена кол-ва ед. товара
async function changeCount(e) {
  const btn = e.target
  const btnActType = btn.dataset.type
  const itemCard = getItemCard(btn.dataset.parentId)
  const qty = itemCard.querySelector('input[name="qty"]')
  const countSelector = itemCard.querySelector('[data-type="count"]')

  if (itemCard.dataset.disabled) return

  let currQtyValue = Number(qty.value)

  switch (btnActType) {
    case 'inc': {
      currQtyValue += 1

      break
    }
    case 'dec': {
      currQtyValue > 1 ? (currQtyValue -= 1) : null

      break
    }
  }

  qty.value = currQtyValue
  countSelector.innerText = currQtyValue

  itemCard.dataset.disabled = true

  await updateCart(itemCard)

  delete itemCard.dataset.disabled
}

// Добавить товар в корзину
async function addItemInCart(e) {
  const target = e.target
  const itemCard = getItemCard(target.dataset.parentId)
  const itemCardId = itemCard.querySelector(`[name="items[]"]`).value

  const response = await fetch('/netcat/modules/netshop/actions/cart.php', {
    method: 'POST',
    headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
    body: $(itemCard).serialize() + '&json=1',
  })
  const data = await response.json()

  const itemCardTemplate = `
    <form class="cart-menu__product"  method="post" action="<?= $netshop->get_add_to_cart_url() ?>" data-parent-id="${data.Items[itemCardId].Message_ID}">
      <input type="hidden" name="qty" value="${data.Items[itemCardId].Qty}">
      <input type="hidden" name="items[]" value="${data.Items[itemCardId]}">
      <input type="hidden" name="json" value="1">
      <input type="hidden" name="class_id" value="${data.Items[itemCardId].Class_ID}">
      <img class="cart-menu__img" src="${data.Items[itemCardId].Image}" alt="${data.Items[itemCardId].FullName}" loading="lazy" width="63" height="68">
      <div class="cart-menu__product-info">
        <div class="cart-menu__product-title">${data.Items[itemCardId].Name}</div>
        <div class="cart-menu__product-price">${data.TotalItemPriceF} RUB</div>
      </div>
      <button class="cart-menu__remove" type="button" data-parent-id="${data.Items[itemCardId].Message_ID}" onclick="removeItemFromCart(event)" aria-label="удалить товар">
        <svg class="i-close" aria-hidden="true">
          <use xlink:href="/netcat_template/template/my_suit/img/icons/icons.svg#svg-close"></use>
        </svg>
      </button>
    </form>
  `
  const itemCardList = document.querySelector('.cart-menu__products')

  itemCardList.insertAdjacentHTML('beforeend', itemCardTemplate)
}

// Удалить товар из корзины
async function removeItemFromCart(e) {
  const target = e.target
  const itemCard = getItemCard(target.dataset.parentId)
  const qty = itemCard.querySelector('input[name="qty"]')

  qty.value = 0

  itemCard.dataset.disabled = true

  const totalItemCount = await updateCart(itemCard)

  itemCard.remove()

  if (!totalItemCount)
    document.querySelector('.cart__container').innerHTML = emptyCartMock
}
