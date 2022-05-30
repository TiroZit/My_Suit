/*
Документация по работе в шаблоне: 
Документация слайдера: https://swiperjs.com/
Сниппет(HTML): swiper
*/

// Подключаем слайдер Swiper из node_modules
// При необходимости подключаем дополнительные модули слайдера, указывая их в {} через запятую
// Пример: { Navigation, Autoplay }
import Swiper, { Navigation, Scrollbar, Lazy, A11y, Thumbs } from 'swiper'
/*
Основниые модули слайдера:
Navigation, Pagination, Autoplay, 
EffectFade, Lazy, Manipulation
Подробнее смотри https://swiperjs.com/
*/

// Стили Swiper
// Базовые стили
// import '../../../assets/scss/base/swiper.scss'
// Полный набор стилей из scss/libs/swiper.scss
// import "../../scss/libs/swiper.scss";
// Полный набор стилей из node_modules
// import 'swiper/scss'
// import 'swiper/css/scrollbar'
function bildSliders() {
  //BildSlider
  let sliders = document.querySelectorAll(
    '[class*="__swiper"]:not(.swiper-wrapper)'
  )
  if (sliders) {
    sliders.forEach(slider => {
      slider.parentElement.classList.add('swiper')
      slider.classList.add('swiper-wrapper')
      for (const slide of slider.children) {
        slide.classList.add('swiper-slide')
      }
    })
  }
}
// Инициализация слайдеров
function initSliders() {
  bildSliders()
  // Перечень слайдеров
  // Проверяем, есть ли слайдер на стронице
  if (document.querySelector('.current-models__slider')) {
    new Swiper('.current-models__slider', {
      // Подключаем модули слайдера
      // для конкретного случая
      modules: [Navigation, Scrollbar, Lazy, A11y],
      /*
			effect: 'fade',
			autoplay: {
				delay: 3000,
				disableOnInteraction: false,
			},
			*/
      a11y: {
        prevSlideMessage: 'Предыдущий слайд',
        nextSlideMessage: 'Следующий слайд',
      },
      // observer: true,
      // observeParents: true,
      slidesPerView: 'auto',
      spaceBetween: 10,
      // autoHeight: true,
      speed: 500,
      //touchRatio: 0,
      //simulateTouch: false,
      loop: false,
      preloadImages: false,
      lazy: {
        loadPrevNext: true,
      },
      scrollbar: {
        el: '.current-models__scrollbar',
        draggable: true,
      },
      // Arrows
      navigation: {
        nextEl: '.current-models__button-next',
        prevEl: '.current-models__button-prev',
      },
      breakpoints: {
        1110: {
          slidesPerView: 3,
          spaceBetween: 30,
        },
      },
      // on: {

      // }
    })
  }
  if (document.querySelector('.thumbs-images')) {
    const thumbsSwiper = new Swiper('.thumbs-images', {
      // Подключаем модули слайдера
      // для конкретного случая
      modules: [Lazy, Thumbs],
      /*
			effect: 'fade',
			autoplay: {
				delay: 3000,
				disableOnInteraction: false,
			},
			*/
      // observer: true,
      // observeParents: true,
      direction: 'vertical',
      slidesPerView: 'auto',
      spaceBetween: 12,
      // autoHeight: true,
      speed: 500,
      //touchRatio: 0,
      //simulateTouch: false,
      loop: false,
      preloadImages: false,
      lazy: {
        loadPrevNext: true,
      },
      breakpoints: {},
      // on: {

      // }
    })
    new Swiper('.images-product__slider', {
      // Подключаем модули слайдера
      // для конкретного случая
      modules: [Lazy, Thumbs],
      /*
			effect: 'fade',
			autoplay: {
				delay: 3000,
				disableOnInteraction: false,
			},
			*/
      // observer: true,
      // observeParents: true,
      grabCursor: true,
      slidesPerView: 1,
      // autoHeight: true,
      speed: 500,
      //touchRatio: 0,
      //simulateTouch: false,
      thumbs: {
        swiper: thumbsSwiper,
      },
      loop: false,
      preloadImages: false,
      lazy: {
        loadPrevNext: true,
      },
      breakpoints: {},
      // on: {

      // }
    })
  }
}
// Скролл на базе слайдера (по классу swiper_scroll для оболочки слайдера)
function initSlidersScroll() {
  bildSliders()
  let sliderScrollItems = document.querySelectorAll('.swiper_scroll')
  if (sliderScrollItems.length > 0) {
    for (let index = 0; index < sliderScrollItems.length; index++) {
      const sliderScrollItem = sliderScrollItems[index]
      const sliderScrollBar =
        sliderScrollItem.querySelector('.swiper-scrollbar')
      const sliderScroll = new Swiper(sliderScrollItem, {
        observer: true,
        observeParents: true,
        direction: 'vertical',
        slidesPerView: 'auto',
        freeMode: {
          enabled: true,
        },
        scrollbar: {
          el: sliderScrollBar,
          draggable: true,
          snapOnRelease: false,
        },
        mousewheel: {
          releaseOnEdges: true,
        },
      })
      sliderScroll.scrollbar.updateSize()
    }
  }
}

window.addEventListener('load', function (e) {
  // Запуск инициализации слайдеров
  initSliders()
  // Запуск инициализации скролла на базе слайдера (по классу swiper_scroll)
  //initSlidersScroll();
})
