/*
Документация по работе в шаблоне: 
Документация слайдера: https://swiperjs.com/
Сниппет(HTML): swiper
*/

// Подключаем слайдер Swiper из node_modules
// При необходимости подключаем дополнительные модули слайдера, указывая их в {} через запятую
// Пример: { Navigation, Autoplay }
import Swiper, {
  Navigation,
  Scrollbar,
  Lazy,
  A11y,
  Thumbs,
  Manipulation,
} from 'swiper'
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
  const thumbsSwiper = new Swiper('.thumbs-images', {
    // Подключаем модули слайдера
    // для конкретного случая
    modules: [Lazy, Thumbs, Manipulation],
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
  const imagesSwiper = new Swiper('.images-product__slider', {
    // Подключаем модули слайдера
    // для конкретного случая
    modules: [Lazy, Thumbs, Manipulation],
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
      on: {
        init: function () {
          const numberOfSlides = this.slides.length
          if (numberOfSlides <= 3) {
            this.navigation.prevEl.hidden = true
            this.navigation.nextEl.hidden = true
          }
        },
      },
    })
  }
  thumbsSwiper.appendSlide(`<div class="thumbs-images__slide-ibg">
              <img class="lazy" src="123" alt="" loading="lazy">
            </div>`)
  thumbsSwiper.updateSlides()
  bildSliders()
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
  if (document.querySelector('.page_product')) {
    const pageProduct = document.querySelector('.page_product')
    const product = document.querySelector('.product__main')

    const slider = document.querySelector('.images-product__swiper')
    const thumbs = document.querySelector('.thumbs-images__swiper')
    const title = document.querySelector('.info-product__title')
    const price = document.getElementById('price')
    const inputItems = document.querySelector('#inputItems')

    const componentId = pageProduct.dataset.componentId
    const subClassId = pageProduct.dataset.subClassId

    document.addEventListener('click', documentActions)
    function documentActions(e) {
      const targetElement = e.target

      if (targetElement.closest('.info-product__color-item')) {
        document
          .querySelectorAll('.info-product__color-item_active')
          .forEach(element => {
            element.classList.remove('info-product__color-item_active')
            element.previousElementSibling.removeAttribute('checked')
          })
        const colorId = targetElement.parentElement.dataset.colorId
        targetElement.parentElement.classList.add(
          'info-product__color-item_active'
        )
        targetElement.parentElement.previousElementSibling.setAttribute(
          'checked',
          ''
        )
        getVariants('getVariantsByColor', colorId)
        e.preventDefault()
        thumbsSwiper.update()
        thumbsSwiper.updateSlides()
        thumbsSwiper.updateSlidesClasses()
        imagesSwiper.update()
        imagesSwiper.updateSlides()
        imagesSwiper.updateSlidesClasses()
      }
      if (targetElement.closest('.info-product__size-item')) {
        document
          .querySelectorAll('.info-product__size-item_active')
          .forEach(element => {
            element.classList.remove('info-product__size-item_active')
            element.previousElementSibling.removeAttribute('checked')
          })

        const inputItemsSize =
          targetElement.parentElement.previousElementSibling
        const size = targetElement.parentElement.textContent
        const sizeId = targetElement.parentElement.dataset.sizeId
        targetElement.parentElement.classList.add(
          'info-product__size-item_active'
        )
        inputItemsSize.setAttribute('checked', '')
        getVariants('getVariantsBySize', size, sizeId)
        e.preventDefault()
        thumbsSwiper.update()
        thumbsSwiper.updateSlides()
        thumbsSwiper.updateSlidesClasses()
        imagesSwiper.update()
        imagesSwiper.updateSlides()
        imagesSwiper.updateSlidesClasses()
      }
    }
    async function getVariants(action, variantId, sizeId) {
      if (action === 'getVariantsByColor') {
        const response = await fetch('/requests/goodsVariants.php', {
          method: 'POST',
          body: JSON.stringify({
            action: action,
            classId: componentId,
            subClassId: subClassId,
            color: variantId,
          }),
        })
        const data = await response.json()
        const sizeList = document.querySelector('.info-product__size-list')
        sizeList.innerHTML = ''
        for (let i = 0; i < data.length; i++) {
          const sizeTemplate = `
        <input id="inputItemsSize" type="radio" name="items[]" value="${componentId}:${data[i].Message_ID}" hidden="true" />
        <li class="info-product__size-item" data-size-id="${data[i].Message_ID}">
          <button class="info-product__btn-size btn btn_white">
            ${data[i].Property_Size}
          </button>
        </li>
        `
          sizeList.insertAdjacentHTML('beforeend', sizeTemplate)
        }
        document
          .querySelector('.info-product__size-item')
          .classList.add('info-product__size-item_active')
        document.querySelector('#inputItemsSize').setAttribute('checked', '')

        const messageIds = document.querySelectorAll('[data-message-id]')

        let imageList = []
        thumbs.innerHTML = ''
        slider.innerHTML = ''
        // TODO: Добавить в data Image нормальный путь
        if (data[0].Image) {
          imageList.push(data[0].Image)
        }
        data[0].Slider.forEach(slide => {
          imageList.push(slide)
        })
        imageList.forEach(image => {
          const thumbTemplate = `
            <div class="thumbs-images__slide-ibg">
              <img class="lazy" src="${image}" alt="${data[0].Name},${data[0].VariantName}" loading="lazy">
            </div>
          `
          const slideTemplate = `
            <div class="images-product__slide-ibg">
              <img class="lazy" src="${image}" alt="${data[0].Name},${data[0].VariantName}" loading="lazy">
            </div>
          `
          thumbsSwiper.appendSlide(thumbTemplate)
          imagesSwiper.appendSlide(slideTemplate)
        })

        let priceFormatted = normalPrice(data[0].Price)
        // TODO: Добавить в data PriceDiscount
        if (data[0].PriceDiscount) {
          let priceDiscountFormatted = normalPrice(data[0].Price)
          const priceDiscount = document.getElementById('priceDiscount')
          price.innerHTML = `${priceFormatted} RUB`
          priceDiscount.innerHTML = `${priceDiscountFormatted} RUB`
        } else price.innerHTML = `${priceFormatted} RUB`

        title.innerHTML = data[0].Name

        inputItems.value = `${componentId}:${data[0].Message_ID}`

        messageIds.forEach(
          element => (element.dataset.messageId = data[0].Message_ID)
        )
      } else {
        const response = await fetch('/requests/goodsVariants.php', {
          method: 'POST',
          body: JSON.stringify({
            action: action,
            classId: componentId,
            subClassId: subClassId,
            size: variantId,
          }),
        })
        const data = await response.json()

        const messageIds = document.querySelectorAll('[data-message-id]')
        let sizeIds = []
        for (let i = 0; i < data.length; i++) {
          sizeIds.push(data[i].Message_ID)

          const sizeIndex = sizeIds.indexOf(sizeId)
          if (sizeId === data[i].Message_ID) {
            messageIds.forEach(element => (element.dataset.messageId = sizeId))
            inputItems.value = `${componentId}:${sizeId}`
            console.log(inputItems.value)
            let priceFormatted = normalPrice(data[sizeIndex].Price)
            if (data[sizeIndex].PriceDiscount) {
              let priceDiscountFormatted = normalPrice(data[sizeIndex].Price)
              const priceDiscount = document.getElementById('priceDiscount')
              price.innerHTML = `${priceFormatted} RUB`
              priceDiscount.innerHTML = `${priceDiscountFormatted} RUB`
            } else price.innerHTML = `${priceFormatted} RUB`
          }
        }
      }
      thumbsSwiper.update()
      thumbsSwiper.updateSlides()
      thumbsSwiper.updateSlidesClasses()
      imagesSwiper.update()
      imagesSwiper.updateSlides()
      imagesSwiper.updateSlidesClasses()
    }
    // history.pushState(null, null, `/tovar_${data[0].Message_ID}.html`)
  }
})
