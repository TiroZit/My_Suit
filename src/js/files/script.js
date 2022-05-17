// Подключение функционала
import { isMobile } from './functions.js'
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
    }
    if (subMenuButtonClose) {
      activeButton.classList.remove('submenu-active')
      activeSubMenu.classList.remove('submenu-open')
    }
    e.preventDefault()
  }

  if (targetElement.closest('#searchButton') || searchButtonClose) {
    const searchForm = document.querySelector(`.header__search`)

    if (searchForm) {
      searchForm.classList.toggle('search-open')
    }

    if (searchButtonClose) {
      document.querySelector(`.header__search`).classList.remove('search-open')
    }
    e.preventDefault()
  }
}
