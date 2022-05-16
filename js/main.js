(function() {
  var __webpack_modules__ = {
    537: function() {},
    666: function(__unused_webpack___webpack_module__, __unused_webpack___webpack_exports__, __webpack_require__) {
      "use strict";
      var injectStylesIntoStyleTag = __webpack_require__(379);
      var injectStylesIntoStyleTag_default = __webpack_require__.n(injectStylesIntoStyleTag);
      var styleDomAPI = __webpack_require__(795);
      var styleDomAPI_default = __webpack_require__.n(styleDomAPI);
      var insertBySelector = __webpack_require__(569);
      var insertBySelector_default = __webpack_require__.n(insertBySelector);
      var setAttributesWithoutAttributes = __webpack_require__(565);
      var setAttributesWithoutAttributes_default = __webpack_require__.n(setAttributesWithoutAttributes);
      var insertStyleElement = __webpack_require__(216);
      var insertStyleElement_default = __webpack_require__.n(insertStyleElement);
      var styleTagTransform = __webpack_require__(589);
      var styleTagTransform_default = __webpack_require__.n(styleTagTransform);
      var style = __webpack_require__(537);
      var style_default = __webpack_require__.n(style);
      var options = {};
      options.styleTagTransform = styleTagTransform_default();
      options.setAttributes = setAttributesWithoutAttributes_default();
      options.insert = insertBySelector_default().bind(null, "head");
      options.domAPI = styleDomAPI_default();
      options.insertStyleElement = insertStyleElement_default();
      injectStylesIntoStyleTag_default()(style_default(), options);
      style_default() && style_default().locals && style_default().locals;
      let _slideUp = function(target) {
        let duration = arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : 500;
        let showmore = arguments.length > 2 && void 0 !== arguments[2] ? arguments[2] : 0;
        if (!target.classList.contains("_slide")) {
          target.classList.add("_slide");
          target.style.transitionProperty = "height, margin, padding";
          target.style.transitionDuration = duration + "ms";
          target.style.height = `${target.offsetHeight}px`;
          target.offsetHeight;
          target.style.overflow = "hidden";
          target.style.height = showmore ? `${showmore}px` : `0px`;
          target.style.paddingTop = 0;
          target.style.paddingBottom = 0;
          target.style.marginTop = 0;
          target.style.marginBottom = 0;
          window.setTimeout((() => {
            target.hidden = !showmore ? true : false;
            !showmore ? target.style.removeProperty("height") : null;
            target.style.removeProperty("padding-top");
            target.style.removeProperty("padding-bottom");
            target.style.removeProperty("margin-top");
            target.style.removeProperty("margin-bottom");
            !showmore ? target.style.removeProperty("overflow") : null;
            target.style.removeProperty("transition-duration");
            target.style.removeProperty("transition-property");
            target.classList.remove("_slide");
            document.dispatchEvent(new CustomEvent("slideUpDone", {
              detail: {
                target: target
              }
            }));
          }), duration);
        }
      };
      let _slideDown = function(target) {
        let duration = arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : 500;
        let showmore = arguments.length > 2 && void 0 !== arguments[2] ? arguments[2] : 0;
        if (!target.classList.contains("_slide")) {
          target.classList.add("_slide");
          target.hidden = target.hidden ? false : null;
          showmore ? target.style.removeProperty("height") : null;
          let height = target.offsetHeight;
          target.style.overflow = "hidden";
          target.style.height = showmore ? `${showmore}px` : `0px`;
          target.style.paddingTop = 0;
          target.style.paddingBottom = 0;
          target.style.marginTop = 0;
          target.style.marginBottom = 0;
          target.offsetHeight;
          target.style.transitionProperty = "height, margin, padding";
          target.style.transitionDuration = duration + "ms";
          target.style.height = height + "px";
          target.style.removeProperty("padding-top");
          target.style.removeProperty("padding-bottom");
          target.style.removeProperty("margin-top");
          target.style.removeProperty("margin-bottom");
          window.setTimeout((() => {
            target.style.removeProperty("height");
            target.style.removeProperty("overflow");
            target.style.removeProperty("transition-duration");
            target.style.removeProperty("transition-property");
            target.classList.remove("_slide");
            document.dispatchEvent(new CustomEvent("slideDownDone", {
              detail: {
                target: target
              }
            }));
          }), duration);
        }
      };
      let _slideToggle = function(target) {
        let duration = arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : 500;
        if (target.hidden) return _slideDown(target, duration); else return _slideUp(target, duration);
      };
      let bodyLockStatus = true;
      let bodyLockToggle = function() {
        let delay = arguments.length > 0 && void 0 !== arguments[0] ? arguments[0] : 500;
        if (document.documentElement.classList.contains("lock")) bodyUnlock(delay); else bodyLock(delay);
      };
      let bodyUnlock = function() {
        let delay = arguments.length > 0 && void 0 !== arguments[0] ? arguments[0] : 500;
        let body = document.querySelector("body");
        if (bodyLockStatus) {
          let lock_padding = document.querySelectorAll("[data-lp]");
          setTimeout((() => {
            for (let index = 0; index < lock_padding.length; index++) {
              const el = lock_padding[index];
              el.style.paddingRight = "0px";
            }
            body.style.paddingRight = "0px";
            document.documentElement.classList.remove("lock");
          }), delay);
          bodyLockStatus = false;
          setTimeout((function() {
            bodyLockStatus = true;
          }), delay);
        }
      };
      let bodyLock = function() {
        let delay = arguments.length > 0 && void 0 !== arguments[0] ? arguments[0] : 500;
        let body = document.querySelector("body");
        if (bodyLockStatus) {
          let lock_padding = document.querySelectorAll("[data-lp]");
          for (let index = 0; index < lock_padding.length; index++) {
            const el = lock_padding[index];
            el.style.paddingRight = window.innerWidth - document.querySelector(".wrapper").offsetWidth + "px";
          }
          body.style.paddingRight = window.innerWidth - document.querySelector(".wrapper").offsetWidth + "px";
          document.documentElement.classList.add("lock");
          bodyLockStatus = false;
          setTimeout((function() {
            bodyLockStatus = true;
          }), delay);
        }
      };
      function spollers() {
        const spollersArray = document.querySelectorAll("[data-spollers]");
        if (spollersArray.length > 0) {
          const spollersRegular = Array.from(spollersArray).filter((function(item, index, self) {
            return !item.dataset.spollers.split(",")[0];
          }));
          if (spollersRegular.length) initSpollers(spollersRegular);
          let mdQueriesArray = dataMediaQueries(spollersArray, "spollers");
          if (mdQueriesArray && mdQueriesArray.length) mdQueriesArray.forEach((mdQueriesItem => {
            mdQueriesItem.matchMedia.addEventListener("change", (function() {
              initSpollers(mdQueriesItem.itemsArray, mdQueriesItem.matchMedia);
            }));
            initSpollers(mdQueriesItem.itemsArray, mdQueriesItem.matchMedia);
          }));
          function initSpollers(spollersArray) {
            let matchMedia = arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : false;
            spollersArray.forEach((spollersBlock => {
              spollersBlock = matchMedia ? spollersBlock.item : spollersBlock;
              if (matchMedia.matches || !matchMedia) {
                spollersBlock.classList.add("_spoller-init");
                initSpollerBody(spollersBlock);
                spollersBlock.addEventListener("click", setSpollerAction);
              } else {
                spollersBlock.classList.remove("_spoller-init");
                initSpollerBody(spollersBlock, false);
                spollersBlock.removeEventListener("click", setSpollerAction);
              }
            }));
          }
          function initSpollerBody(spollersBlock) {
            let hideSpollerBody = arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : true;
            let spollerTitles = spollersBlock.querySelectorAll("[data-spoller]");
            if (spollerTitles.length) {
              spollerTitles = Array.from(spollerTitles).filter((item => item.closest("[data-spollers]") === spollersBlock));
              spollerTitles.forEach((spollerTitle => {
                if (hideSpollerBody) {
                  if (!spollerTitle.classList.contains("_spoller-active")) spollerTitle.nextElementSibling.hidden = true;
                } else spollerTitle.nextElementSibling.hidden = false;
              }));
            }
          }
          function setSpollerAction(e) {
            const el = e.target;
            if (el.closest("[data-spoller]")) {
              const spollerTitle = el.closest("[data-spoller]");
              const spollersBlock = spollerTitle.closest("[data-spollers]");
              const oneSpoller = spollersBlock.hasAttribute("data-one-spoller");
              const spollerSpeed = spollersBlock.dataset.spollersSpeed ? parseInt(spollersBlock.dataset.spollersSpeed) : 500;
              if (!spollersBlock.querySelectorAll("._slide").length) {
                if (oneSpoller && !spollerTitle.classList.contains("_spoller-active")) hideSpollersBody(spollersBlock);
                spollerTitle.classList.toggle("_spoller-active");
                _slideToggle(spollerTitle.nextElementSibling, spollerSpeed);
              }
              e.preventDefault();
            }
          }
          function hideSpollersBody(spollersBlock) {
            const spollerActiveTitle = spollersBlock.querySelector("[data-spoller]._spoller-active");
            const spollerSpeed = spollersBlock.dataset.spollersSpeed ? parseInt(spollersBlock.dataset.spollersSpeed) : 500;
            if (spollerActiveTitle && !spollersBlock.querySelectorAll("._slide").length) {
              spollerActiveTitle.classList.remove("_spoller-active");
              _slideUp(spollerActiveTitle.nextElementSibling, spollerSpeed);
            }
          }
          const spollersClose = document.querySelectorAll("[data-spoller-close]");
          if (spollersClose.length) document.addEventListener("click", (function(e) {
            const el = e.target;
            if (!el.closest("[data-spollers]")) spollersClose.forEach((spollerClose => {
              const spollersBlock = spollerClose.closest("[data-spollers]");
              const spollerSpeed = spollersBlock.dataset.spollersSpeed ? parseInt(spollersBlock.dataset.spollersSpeed) : 500;
              spollerClose.classList.remove("_spoller-active");
              _slideUp(spollerClose.nextElementSibling, spollerSpeed);
            }));
          }));
        }
      }
      function menuInit() {
        if (document.querySelector(".burger")) document.addEventListener("click", (function(e) {
          if (bodyLockStatus && e.target.closest(".burger")) {
            bodyLockToggle();
            document.documentElement.classList.toggle("menu-open");
          }
        }));
      }
      function uniqArray(array) {
        return array.filter((function(item, index, self) {
          return self.indexOf(item) === index;
        }));
      }
      function dataMediaQueries(array, dataSetValue) {
        const media = Array.from(array).filter((function(item, index, self) {
          if (item.dataset[dataSetValue]) return item.dataset[dataSetValue].split(",")[0];
        }));
        if (media.length) {
          const breakpointsArray = [];
          media.forEach((item => {
            const params = item.dataset[dataSetValue];
            const breakpoint = {};
            const paramsArray = params.split(",");
            breakpoint.value = paramsArray[0];
            breakpoint.type = paramsArray[1] ? paramsArray[1].trim() : "max";
            breakpoint.item = item;
            breakpointsArray.push(breakpoint);
          }));
          let mdQueries = breakpointsArray.map((function(item) {
            return "(" + item.type + "-width: " + item.value + "px)," + item.value + "," + item.type;
          }));
          mdQueries = uniqArray(mdQueries);
          const mdQueriesArray = [];
          if (mdQueries.length) {
            mdQueries.forEach((breakpoint => {
              const paramsArray = breakpoint.split(",");
              const mediaBreakpoint = paramsArray[1];
              const mediaType = paramsArray[2];
              const matchMedia = window.matchMedia(paramsArray[0]);
              const itemsArray = breakpointsArray.filter((function(item) {
                if (item.value === mediaBreakpoint && item.type === mediaType) return true;
              }));
              mdQueriesArray.push({
                itemsArray: itemsArray,
                matchMedia: matchMedia
              });
            }));
            return mdQueriesArray;
          }
        }
      }
      __webpack_require__(944);
      var swiper_esm = __webpack_require__(930);
      function bildSliders() {
        let sliders = document.querySelectorAll('[class*="__swiper"]:not(.swiper-wrapper)');
        if (sliders) sliders.forEach((slider => {
          slider.parentElement.classList.add("swiper");
          slider.classList.add("swiper-wrapper");
          for (const slide of slider.children) slide.classList.add("swiper-slide");
        }));
      }
      function initSliders() {
        bildSliders();
        if (document.querySelector(".current-models__slider")) new swiper_esm.ZP(".current-models__slider", {
          modules: [ swiper_esm.W_, swiper_esm.LW, swiper_esm.oM, swiper_esm.s5 ],
          a11y: {
            prevSlideMessage: "Предыдущий слайд",
            nextSlideMessage: "Следующий слайд"
          },
          slidesPerView: "auto",
          spaceBetween: 10,
          speed: 500,
          loop: false,
          preloadImages: false,
          lazy: {
            loadPrevNext: true
          },
          scrollbar: {
            el: ".current-models__scrollbar",
            draggable: true
          },
          navigation: {
            nextEl: ".current-models__button-next",
            prevEl: ".current-models__button-prev"
          },
          breakpoints: {
            1110: {
              slidesPerView: 3,
              spaceBetween: 30
            }
          }
        });
      }
      window.addEventListener("load", (function(e) {
        initSliders();
      }));
      var lazyload_min = __webpack_require__(585);
      new lazyload_min({
        elements_selector: ".lazy",
        class_loaded: "_lazy-loaded",
        use_native: false
      });
      function DynamicAdapt(type) {
        this.type = type;
      }
      DynamicAdapt.prototype.init = function() {
        const _this = this;
        this.оbjects = [];
        this.daClassname = "_dynamic_adapt_";
        this.nodes = document.querySelectorAll("[data-da]");
        for (let i = 0; i < this.nodes.length; i++) {
          const node = this.nodes[i];
          const data = node.dataset.da.trim();
          const dataArray = data.split(",");
          const оbject = {};
          оbject.element = node;
          оbject.parent = node.parentNode;
          оbject.destination = document.querySelector(dataArray[0].trim());
          оbject.breakpoint = dataArray[1] ? dataArray[1].trim() : "767";
          оbject.place = dataArray[2] ? dataArray[2].trim() : "last";
          оbject.index = this.indexInParent(оbject.parent, оbject.element);
          this.оbjects.push(оbject);
        }
        this.arraySort(this.оbjects);
        this.mediaQueries = Array.prototype.map.call(this.оbjects, (function(item) {
          return "(" + this.type + "-width: " + item.breakpoint + "em)," + item.breakpoint;
        }), this);
        this.mediaQueries = Array.prototype.filter.call(this.mediaQueries, (function(item, index, self) {
          return Array.prototype.indexOf.call(self, item) === index;
        }));
        for (let i = 0; i < this.mediaQueries.length; i++) {
          const media = this.mediaQueries[i];
          const mediaSplit = String.prototype.split.call(media, ",");
          const matchMedia = window.matchMedia(mediaSplit[0]);
          const mediaBreakpoint = mediaSplit[1];
          const оbjectsFilter = Array.prototype.filter.call(this.оbjects, (function(item) {
            return item.breakpoint === mediaBreakpoint;
          }));
          matchMedia.addListener((function() {
            _this.mediaHandler(matchMedia, оbjectsFilter);
          }));
          this.mediaHandler(matchMedia, оbjectsFilter);
        }
      };
      DynamicAdapt.prototype.mediaHandler = function(matchMedia, оbjects) {
        if (matchMedia.matches) for (let i = 0; i < оbjects.length; i++) {
          const оbject = оbjects[i];
          оbject.index = this.indexInParent(оbject.parent, оbject.element);
          this.moveTo(оbject.place, оbject.element, оbject.destination);
        } else for (let i = оbjects.length - 1; i >= 0; i--) {
          const оbject = оbjects[i];
          if (оbject.element.classList.contains(this.daClassname)) this.moveBack(оbject.parent, оbject.element, оbject.index);
        }
      };
      DynamicAdapt.prototype.moveTo = function(place, element, destination) {
        element.classList.add(this.daClassname);
        if ("last" === place || place >= destination.children.length) {
          destination.insertAdjacentElement("beforeend", element);
          return;
        }
        if ("first" === place) {
          destination.insertAdjacentElement("afterbegin", element);
          return;
        }
        destination.children[place].insertAdjacentElement("beforebegin", element);
      };
      DynamicAdapt.prototype.moveBack = function(parent, element, index) {
        element.classList.remove(this.daClassname);
        if (void 0 !== parent.children[index]) parent.children[index].insertAdjacentElement("beforebegin", element); else parent.insertAdjacentElement("beforeend", element);
      };
      DynamicAdapt.prototype.indexInParent = function(parent, element) {
        const array = Array.prototype.slice.call(parent.children);
        return Array.prototype.indexOf.call(array, element);
      };
      DynamicAdapt.prototype.arraySort = function(arr) {
        if ("min" === this.type) Array.prototype.sort.call(arr, (function(a, b) {
          if (a.breakpoint === b.breakpoint) {
            if (a.place === b.place) return 0;
            if ("first" === a.place || "last" === b.place) return -1;
            if ("last" === a.place || "first" === b.place) return 1;
            return a.place - b.place;
          }
          return a.breakpoint - b.breakpoint;
        })); else {
          Array.prototype.sort.call(arr, (function(a, b) {
            if (a.breakpoint === b.breakpoint) {
              if (a.place === b.place) return 0;
              if ("first" === a.place || "last" === b.place) return 1;
              if ("last" === a.place || "first" === b.place) return -1;
              return b.place - a.place;
            }
            return b.breakpoint - a.breakpoint;
          }));
          return;
        }
      };
      const da = new DynamicAdapt("max");
      da.init();
      document.addEventListener("click", documentActions);
      function documentActions(e) {
        const targetElement = e.target;
        const buttonClose = targetElement.classList.contains("submenu__close") || targetElement.classList.contains("i-close");
        if (targetElement.closest("[data-parent]") || buttonClose) {
          const subMenuId = targetElement.dataset.parent ? targetElement.dataset.parent : null;
          const subMenu = document.querySelector(`[data-submenu='${subMenuId}']`);
          const activeButton = document.querySelector(".submenu-active");
          const activeSubMenu = document.querySelector(".submenu-open");
          if (subMenu) {
            if (activeButton && activeButton !== targetElement) {
              activeButton.classList.remove("submenu-acitve");
              activeSubMenu.classList.remove("submenu-open");
            }
            targetElement.classList.toggle("submenu-active");
            subMenu.classList.toggle("submenu-open");
          }
          if (buttonClose) {
            activeButton.classList.remove("submenu-active");
            activeSubMenu.classList.remove("submenu-open");
          }
          e.preventDefault();
        }
      }
      window["FLS"] = false;
      menuInit();
      spollers();
    }
  };
  var __webpack_module_cache__ = {};
  function __webpack_require__(moduleId) {
    var cachedModule = __webpack_module_cache__[moduleId];
    if (void 0 !== cachedModule) return cachedModule.exports;
    var module = __webpack_module_cache__[moduleId] = {
      exports: {}
    };
    __webpack_modules__[moduleId].call(module.exports, module, module.exports, __webpack_require__);
    return module.exports;
  }
  __webpack_require__.m = __webpack_modules__;
  !function() {
    var deferred = [];
    __webpack_require__.O = function(result, chunkIds, fn, priority) {
      if (chunkIds) {
        priority = priority || 0;
        for (var i = deferred.length; i > 0 && deferred[i - 1][2] > priority; i--) deferred[i] = deferred[i - 1];
        deferred[i] = [ chunkIds, fn, priority ];
        return;
      }
      var notFulfilled = 1 / 0;
      for (i = 0; i < deferred.length; i++) {
        chunkIds = deferred[i][0];
        fn = deferred[i][1];
        priority = deferred[i][2];
        var fulfilled = true;
        for (var j = 0; j < chunkIds.length; j++) if ((priority & 1 === 0 || notFulfilled >= priority) && Object.keys(__webpack_require__.O).every((function(key) {
          return __webpack_require__.O[key](chunkIds[j]);
        }))) chunkIds.splice(j--, 1); else {
          fulfilled = false;
          if (priority < notFulfilled) notFulfilled = priority;
        }
        if (fulfilled) {
          deferred.splice(i--, 1);
          var r = fn();
          if (void 0 !== r) result = r;
        }
      }
      return result;
    };
  }();
  !function() {
    __webpack_require__.n = function(module) {
      var getter = module && module.__esModule ? function() {
        return module["default"];
      } : function() {
        return module;
      };
      __webpack_require__.d(getter, {
        a: getter
      });
      return getter;
    };
  }();
  !function() {
    __webpack_require__.d = function(exports, definition) {
      for (var key in definition) if (__webpack_require__.o(definition, key) && !__webpack_require__.o(exports, key)) Object.defineProperty(exports, key, {
        enumerable: true,
        get: definition[key]
      });
    };
  }();
  !function() {
    __webpack_require__.o = function(obj, prop) {
      return Object.prototype.hasOwnProperty.call(obj, prop);
    };
  }();
  !function() {
    var installedChunks = {
      179: 0
    };
    __webpack_require__.O.j = function(chunkId) {
      return 0 === installedChunks[chunkId];
    };
    var webpackJsonpCallback = function(parentChunkLoadingFunction, data) {
      var chunkIds = data[0];
      var moreModules = data[1];
      var runtime = data[2];
      var moduleId, chunkId, i = 0;
      if (chunkIds.some((function(id) {
        return 0 !== installedChunks[id];
      }))) {
        for (moduleId in moreModules) if (__webpack_require__.o(moreModules, moduleId)) __webpack_require__.m[moduleId] = moreModules[moduleId];
        if (runtime) var result = runtime(__webpack_require__);
      }
      if (parentChunkLoadingFunction) parentChunkLoadingFunction(data);
      for (;i < chunkIds.length; i++) {
        chunkId = chunkIds[i];
        if (__webpack_require__.o(installedChunks, chunkId) && installedChunks[chunkId]) installedChunks[chunkId][0]();
        installedChunks[chunkId] = 0;
      }
      return __webpack_require__.O(result);
    };
    var chunkLoadingGlobal = self["webpackChunkgulp_webpack"] = self["webpackChunkgulp_webpack"] || [];
    chunkLoadingGlobal.forEach(webpackJsonpCallback.bind(null, 0));
    chunkLoadingGlobal.push = webpackJsonpCallback.bind(null, chunkLoadingGlobal.push.bind(chunkLoadingGlobal));
  }();
  !function() {
    __webpack_require__.nc = void 0;
  }();
  var __webpack_exports__ = __webpack_require__.O(void 0, [ 216 ], (function() {
    return __webpack_require__(666);
  }));
  __webpack_exports__ = __webpack_require__.O(__webpack_exports__);
})();