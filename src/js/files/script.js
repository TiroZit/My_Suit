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
