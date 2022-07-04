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
}

// Объект – состояние
const state = {
  isCart: (() => document.location.pathname === '/cart/')(),
  strCart: null,
}

/**
 * Варианты кол-ва товаров
 * 7 дней, 14 дней, 28 дней
 */
const qtyValues = [7, 14, 28]

// Темплейт пустой корзины
const emptyCartMock = `
    <h1 class="h1">Корзина пуста</h1>
    <p>Невозможно оформить заказ, поскольку корзина пуста. Перейдите в <a href="/katalog/">каталог</a></p>
`

/**
 * Элементы страницы
 * 1) Селекторы кол-ва товаров в корзине
 * 2) Корзина. Итого
 * 3) Корзина. Сумма скидок
 * 4) Форма заказа
 */
const cartSelectors = document.querySelectorAll('.cart-tip')
const summarySelector = document.querySelector('.summary')
const totalDiscountSelector = document.querySelector('.total_discount')
const formOrder = document.getElementById('form-order')
const deliveryDaysSelector = document.querySelector(
  'select[name=f_DeliveryDate]'
)

// Обновление корзины на сервере
async function updateCart(form) {
  const { action, method } = form

  const response = await fetch(action, {
    method,
    headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
    body: $(form).serialize() + '&json=1',
  })

  const { TotalCount } = await response.json()

  updateCartQty(TotalCount)

  if (state.isCart) {
    const cartState = await getCartState('none', 'none')
    const itemCardList = Array.from(
      document.querySelectorAll('form.catalog__el')
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

        const originalPriceSelector = item.querySelector('.original-price')
        const totalPriceSelector = item.querySelector('.total-price')

        originalPriceSelector.querySelector('span').innerText = totalPrice
        totalPriceSelector.querySelector('span').innerText = totalDiscountPrice

        if (!totalDiscountPrice) {
          originalPriceSelector.classList.remove('crossed-out')
          totalPriceSelector.style.display = 'none'
        } else {
          originalPriceSelector.classList.add('crossed-out')
          totalPriceSelector.style.display = 'block'
        }
      }
    }

    summarySelector.querySelector('span').innerText =
      cartState.totalDiscount || cartState.totalCost
    totalDiscountSelector.querySelector('span').innerText = cartState.discount

    if (!cartState.discount) totalDiscountSelector.classList.add('d-none')
    else totalDiscountSelector.classList.remove('d-none')

    state.strCart = cartState.strCart ?? null

    if (formOrder && state.strCart) {
      formOrder.querySelector('input[name="f_Items"]').value = state.strCart
      formOrder.querySelector('input[name="f_TotalCount"]').value =
        cartState.totalCount
      formOrder.querySelector('input[name="f_TotalCost"]').value =
        cartState.totalCost
      formOrder.querySelector('input[name="f_TotalDiscountCost"]').value =
        cartState.totalDiscount
      formOrder.querySelector('input[name="f_Promocode"]').value =
        cartState.promocode
    }
  }

  return TotalCount
}

// Получить информацию о корзине
// TODO: Проверить использование с аргументами, выпилили когда то
async function getCartState(classId, messageId) {
  const response = await fetch('/zaprosy/getCartState/?isNaked=1', {
    method: 'POST',
    mode: 'cors',
    cache: 'no-cache',
    headers: { 'Content-Type': 'application/json' },
    body: JSON.stringify({ classId, messageId }),
  })

  return await response.json()
}

// Запрос на получение данных о товаре при смене варианта товара
async function getProductDataById(classId, messageId) {
  const response = await fetch('/zaprosy/getProductDataById/?isNaked=1', {
    method: 'POST',
    mode: 'cors',
    cache: 'no-cache',
    headers: { 'Content-Type': 'application/json' },
    body: JSON.stringify({ classId, messageId }),
  })

  return await response.json()
}

// Обновить кол-во товаров на странице
function updateCartQty(totalCount) {
  const isEmptyCart = !Boolean(totalCount)

  Array.from(cartSelectors).forEach(item => {
    const qty = item.querySelector('.header__cart-count')
    qty.innerText = totalCount

    if (isEmptyCart) item.classList.add('is--empty-cart')
    else item.classList.remove('is--empty-cart')
  })
}

// Получить карточку товара (form) над которой производятся изменения
function getItemCard(cardID) {
  if (!cardID) return null

  return document.querySelector(`form[data-parent-id="${cardID}"]`)
}

// Обработчик смены варианта товара (через select)
async function changeVariantItemHandle(event) {
  const { id: selectedItemId, element } = event.params.data
  const { messageId: formattedItemId, parentId } = element.dataset

  const itemCard = getItemCard(parentId)

  if (!itemCard) {
    console.error('Item card does not exist')
    return
  }

  const classId = itemCard.querySelector('input[name="classId"]').value
  const productData = await getProductDataById(classId, selectedItemId)

  if (!productData) {
    console.error('Product data is undefined')
    return
  }

  const priceSelector = itemCard.querySelector('.price')
  const weightSelector = itemCard.querySelector('.weight')
  const kCalSelector = itemCard.querySelector('.kcal')
  const btnAddToCart = itemCard.querySelector('.btn-add-to-cart')

  const itemsSelector = itemCard.querySelector('input[name="items[]"]')
  const qtySelector = itemCard.querySelector('input[name="qty"]')
  const countSelector = itemCard.querySelector('[data-type="count"]')

  // Обновление данных в карточке товара
  priceSelector.innerHTML = productData.defaultPrice + ' ₽'
  weightSelector.innerHTML = productData.weight
  kCalSelector.innerHTML = productData.kCal
  countSelector.innerHTML = `${productData.qty || 0} дней`

  if (productData.qty) btnAddToCart.classList.add('is-hidden')
  else btnAddToCart.classList.remove('is-hidden')

  // Обновление данных формы
  itemsSelector.value = formattedItemId
  qtySelector.value = productData.qty || 0
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
  let prevQtyValue = Number(qty.value)

  const qtyIndex = qtyValues.findIndex(value => value === currQtyValue)

  switch (btnActType) {
    case 'inc': {
      currQtyValue =
        qtyIndex < 0
          ? qtyValues[0]
          : qtyIndex === qtyValues.length - 1
          ? qtyValues[qtyIndex]
          : qtyValues[qtyIndex + 1]

      if (currQtyValue >= 0)
        itemCard.querySelector('.btn-add-to-cart').classList.add('is-hidden')

      if (currQtyValue >= qtyValues[1])
        itemCard.querySelector('.count__minus').classList.remove('is-disabled')

      if (currQtyValue === qtyValues[qtyValues.length - 1])
        itemCard.querySelector('.count__plus').classList.add('is-disabled')

      break
    }
    case 'dec': {
      currQtyValue =
        qtyIndex > 0
          ? qtyValues[qtyIndex - 1]
          : qtyIndex === 0
          ? 0
          : qtyValues[0]

      if (state.isCart && currQtyValue <= qtyValues[0]) {
        currQtyValue = qtyValues[0]
        itemCard.querySelector('.count__minus').classList.add('is-disabled')
      }

      if (currQtyValue <= 0)
        itemCard.querySelector('.btn-add-to-cart').classList.remove('is-hidden')

      itemCard.querySelector('.count__plus').classList.remove('is-disabled')

      break
    }
  }

  if (prevQtyValue === currQtyValue) return

  qty.value = currQtyValue
  countSelector.innerText = `${currQtyValue} дней`

  itemCard.dataset.disabled = true

  await updateCart(itemCard)

  delete itemCard.dataset.disabled
}

// Удалить товар из корзины
async function removeItemFromCart(e) {
  const target = e.target
  const itemCard = getItemCard(target.dataset.parentId)
  const qty = itemCard.querySelector('input[name="qty"]')

  qty.value = 0

  itemCard.dataset.disabled = true

  const totalCount = await updateCart(itemCard)

  itemCard.remove()

  if (!totalCount)
    document.querySelector('.page-catalog .container').innerHTML = emptyCartMock
}
