import LazyLoad from 'vanilla-lazyload'

// Работает с объектами с класом ._lazy
const lazyMedia = new LazyLoad({
  elements_selector: '[data-src],[data-srcset],[data-bg-multi],[bg-multi]',
  class_loaded: '_lazy-loaded',
  use_native: false,
})

// Обновить модуль
// lazyMedia.update()
