(function() {
  var __webpack_modules__ = {
    537: function() {},
    723: function(__unused_webpack___webpack_module__, __unused_webpack___webpack_exports__, __webpack_require__) {
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
      const modules_flsModules = {};
      function functions_getHash() {
        if (location.hash) return location.hash.replace("#", "");
      }
      function setHash(hash) {
        hash = hash ? `#${hash}` : window.location.href.split("#")[0];
        history.pushState("", "", hash);
      }
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
      function tabs() {
        const tabs = document.querySelectorAll("[data-tabs]");
        let tabsActiveHash = [];
        if (tabs.length > 0) {
          const hash = functions_getHash();
          if (hash && hash.startsWith("tab-")) tabsActiveHash = hash.replace("tab-", "").split("-");
          tabs.forEach(((tabsBlock, index) => {
            tabsBlock.classList.add("_tab-init");
            tabsBlock.setAttribute("data-tabs-index", index);
            tabsBlock.addEventListener("click", setTabsAction);
            initTabs(tabsBlock);
          }));
          let mdQueriesArray = dataMediaQueries(tabs, "tabs");
          if (mdQueriesArray && mdQueriesArray.length) mdQueriesArray.forEach((mdQueriesItem => {
            mdQueriesItem.matchMedia.addEventListener("change", (function() {
              setTitlePosition(mdQueriesItem.itemsArray, mdQueriesItem.matchMedia);
            }));
            setTitlePosition(mdQueriesItem.itemsArray, mdQueriesItem.matchMedia);
          }));
        }
        function setTitlePosition(tabsMediaArray, matchMedia) {
          tabsMediaArray.forEach((tabsMediaItem => {
            tabsMediaItem = tabsMediaItem.item;
            let tabsTitles = tabsMediaItem.querySelector("[data-tabs-titles]");
            let tabsTitleItems = tabsMediaItem.querySelectorAll("[data-tabs-title]");
            let tabsContent = tabsMediaItem.querySelector("[data-tabs-body]");
            let tabsContentItems = tabsMediaItem.querySelectorAll("[data-tabs-item]");
            tabsTitleItems = Array.from(tabsTitleItems).filter((item => item.closest("[data-tabs]") === tabsMediaItem));
            tabsContentItems = Array.from(tabsContentItems).filter((item => item.closest("[data-tabs]") === tabsMediaItem));
            tabsContentItems.forEach(((tabsContentItem, index) => {
              if (matchMedia.matches) {
                tabsContent.append(tabsTitleItems[index]);
                tabsContent.append(tabsContentItem);
                tabsMediaItem.classList.add("_tab-spoller");
              } else {
                tabsTitles.append(tabsTitleItems[index]);
                tabsMediaItem.classList.remove("_tab-spoller");
              }
            }));
          }));
        }
        function initTabs(tabsBlock) {
          let tabsTitles = tabsBlock.querySelectorAll("[data-tabs-titles]>*");
          let tabsContent = tabsBlock.querySelectorAll("[data-tabs-body]>*");
          const tabsBlockIndex = tabsBlock.dataset.tabsIndex;
          const tabsActiveHashBlock = tabsActiveHash[0] == tabsBlockIndex;
          if (tabsActiveHashBlock) {
            const tabsActiveTitle = tabsBlock.querySelector("[data-tabs-titles]>._tab-active");
            tabsActiveTitle ? tabsActiveTitle.classList.remove("_tab-active") : null;
          }
          if (tabsContent.length) {
            tabsContent = Array.from(tabsContent).filter((item => item.closest("[data-tabs]") === tabsBlock));
            tabsTitles = Array.from(tabsTitles).filter((item => item.closest("[data-tabs]") === tabsBlock));
            tabsContent.forEach(((tabsContentItem, index) => {
              tabsTitles[index].setAttribute("data-tabs-title", "");
              tabsContentItem.setAttribute("data-tabs-item", "");
              if (tabsActiveHashBlock && index == tabsActiveHash[1]) tabsTitles[index].classList.add("_tab-active");
              tabsContentItem.hidden = !tabsTitles[index].classList.contains("_tab-active");
            }));
          }
        }
        function setTabsStatus(tabsBlock) {
          let tabsTitles = tabsBlock.querySelectorAll("[data-tabs-title]");
          let tabsContent = tabsBlock.querySelectorAll("[data-tabs-item]");
          const tabsBlockIndex = tabsBlock.dataset.tabsIndex;
          function isTabsAnamate(tabsBlock) {
            if (tabsBlock.hasAttribute("data-tabs-animate")) return tabsBlock.dataset.tabsAnimate > 0 ? Number(tabsBlock.dataset.tabsAnimate) : 500;
          }
          const tabsBlockAnimate = isTabsAnamate(tabsBlock);
          if (tabsContent.length > 0) {
            const isHash = tabsBlock.hasAttribute("data-tabs-hash");
            tabsContent = Array.from(tabsContent).filter((item => item.closest("[data-tabs]") === tabsBlock));
            tabsTitles = Array.from(tabsTitles).filter((item => item.closest("[data-tabs]") === tabsBlock));
            tabsContent.forEach(((tabsContentItem, index) => {
              if (tabsTitles[index].classList.contains("_tab-active")) {
                if (tabsBlockAnimate) _slideDown(tabsContentItem, tabsBlockAnimate); else tabsContentItem.hidden = false;
                if (isHash && !tabsContentItem.closest(".popup")) setHash(`tab-${tabsBlockIndex}-${index}`);
              } else if (tabsBlockAnimate) _slideUp(tabsContentItem, tabsBlockAnimate); else tabsContentItem.hidden = true;
            }));
          }
        }
        function setTabsAction(e) {
          const el = e.target;
          if (el.closest("[data-tabs-title]")) {
            const tabTitle = el.closest("[data-tabs-title]");
            const tabsBlock = tabTitle.closest("[data-tabs]");
            if (!tabTitle.classList.contains("_tab-active") && !tabsBlock.querySelector("._slide")) {
              let tabActiveTitle = tabsBlock.querySelectorAll("[data-tabs-title]._tab-active");
              tabActiveTitle.length ? tabActiveTitle = Array.from(tabActiveTitle).filter((item => item.closest("[data-tabs]") === tabsBlock)) : null;
              tabActiveTitle.length ? tabActiveTitle[0].classList.remove("_tab-active") : null;
              tabTitle.classList.add("_tab-active");
              setTabsStatus(tabsBlock);
            }
            e.preventDefault();
          }
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
      function functions_FLS(message) {
        setTimeout((() => {
          if (window.FLS) console.log(message);
        }), 0);
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
      class Popup {
        constructor(options) {
          let config = {
            logging: true,
            init: true,
            attributeOpenButton: "data-popup",
            attributeCloseButton: "data-close",
            fixElementSelector: "[data-lp]",
            youtubeAttribute: "data-popup-youtube",
            youtubePlaceAttribute: "data-popup-youtube-place",
            setAutoplayYoutube: true,
            classes: {
              popup: "popup",
              popupContent: "popup__content",
              popupActive: "popup_show",
              bodyActive: "popup-show"
            },
            focusCatch: true,
            closeEsc: true,
            bodyLock: true,
            hashSettings: {
              location: true,
              goHash: true
            },
            on: {
              beforeOpen: function() {},
              afterOpen: function() {},
              beforeClose: function() {},
              afterClose: function() {}
            }
          };
          this.youTubeCode;
          this.isOpen = false;
          this.targetOpen = {
            selector: false,
            element: false
          };
          this.previousOpen = {
            selector: false,
            element: false
          };
          this.lastClosed = {
            selector: false,
            element: false
          };
          this._dataValue = false;
          this.hash = false;
          this._reopen = false;
          this._selectorOpen = false;
          this.lastFocusEl = false;
          this._focusEl = [ "a[href]", 'input:not([disabled]):not([type="hidden"]):not([aria-hidden])', "button:not([disabled]):not([aria-hidden])", "select:not([disabled]):not([aria-hidden])", "textarea:not([disabled]):not([aria-hidden])", "area[href]", "iframe", "object", "embed", "[contenteditable]", '[tabindex]:not([tabindex^="-"])' ];
          this.options = {
            ...config,
            ...options,
            classes: {
              ...config.classes,
              ...null === options || void 0 === options ? void 0 : options.classes
            },
            hashSettings: {
              ...config.hashSettings,
              ...null === options || void 0 === options ? void 0 : options.hashSettings
            },
            on: {
              ...config.on,
              ...null === options || void 0 === options ? void 0 : options.on
            }
          };
          this.bodyLock = false;
          this.options.init ? this.initPopups() : null;
        }
        initPopups() {
          this.popupLogging(`Проснулся`);
          this.eventsPopup();
        }
        eventsPopup() {
          document.addEventListener("click", function(e) {
            const buttonOpen = e.target.closest(`[${this.options.attributeOpenButton}]`);
            if (buttonOpen) {
              e.preventDefault();
              this._dataValue = buttonOpen.getAttribute(this.options.attributeOpenButton) ? buttonOpen.getAttribute(this.options.attributeOpenButton) : "error";
              this.youTubeCode = buttonOpen.getAttribute(this.options.youtubeAttribute) ? buttonOpen.getAttribute(this.options.youtubeAttribute) : null;
              if ("error" !== this._dataValue) {
                if (!this.isOpen) this.lastFocusEl = buttonOpen;
                this.targetOpen.selector = `${this._dataValue}`;
                this._selectorOpen = true;
                this.open();
                return;
              } else this.popupLogging(`Ой ой, не заполнен атрибут у ${buttonOpen.classList}`);
              return;
            }
            const buttonClose = e.target.closest(`[${this.options.attributeCloseButton}]`);
            if (buttonClose || !e.target.closest(`.${this.options.classes.popupContent}`) && this.isOpen) {
              e.preventDefault();
              this.close();
              return;
            }
          }.bind(this));
          document.addEventListener("keydown", function(e) {
            if (this.options.closeEsc && 27 == e.which && "Escape" === e.code && this.isOpen) {
              e.preventDefault();
              this.close();
              return;
            }
            if (this.options.focusCatch && 9 == e.which && this.isOpen) {
              this._focusCatch(e);
              return;
            }
          }.bind(this));
          if (this.options.hashSettings.goHash) {
            window.addEventListener("hashchange", function() {
              if (window.location.hash) this._openToHash(); else this.close(this.targetOpen.selector);
            }.bind(this));
            window.addEventListener("load", function() {
              if (window.location.hash) this._openToHash();
            }.bind(this));
          }
        }
        open(selectorValue) {
          if (bodyLockStatus) {
            this.bodyLock = document.documentElement.classList.contains("lock") ? true : false;
            if (selectorValue && "string" === typeof selectorValue && "" !== selectorValue.trim()) {
              this.targetOpen.selector = selectorValue;
              this._selectorOpen = true;
            }
            if (this.isOpen) {
              this._reopen = true;
              this.close();
            }
            if (!this._selectorOpen) this.targetOpen.selector = this.lastClosed.selector;
            if (!this._reopen) this.previousActiveElement = document.activeElement;
            this.targetOpen.element = document.querySelector(this.targetOpen.selector);
            if (this.targetOpen.element) {
              if (this.youTubeCode) {
                const codeVideo = this.youTubeCode;
                const urlVideo = `https://www.youtube.com/embed/${codeVideo}?rel=0&showinfo=0&autoplay=1`;
                const iframe = document.createElement("iframe");
                iframe.setAttribute("allowfullscreen", "");
                const autoplay = this.options.setAutoplayYoutube ? "autoplay;" : "";
                iframe.setAttribute("allow", `${autoplay}; encrypted-media`);
                iframe.setAttribute("src", urlVideo);
                if (!this.targetOpen.element.querySelector(`[${this.options.youtubePlaceAttribute}]`)) {
                  this.targetOpen.element.querySelector(".popup__text").setAttribute(`${this.options.youtubePlaceAttribute}`, "");
                }
                this.targetOpen.element.querySelector(`[${this.options.youtubePlaceAttribute}]`).appendChild(iframe);
              }
              if (this.options.hashSettings.location) {
                this._getHash();
                this._setHash();
              }
              this.options.on.beforeOpen(this);
              document.dispatchEvent(new CustomEvent("beforePopupOpen", {
                detail: {
                  popup: this
                }
              }));
              this.targetOpen.element.classList.add(this.options.classes.popupActive);
              document.documentElement.classList.add(this.options.classes.bodyActive);
              if (!this._reopen) !this.bodyLock ? bodyLock() : null; else this._reopen = false;
              this.targetOpen.element.setAttribute("aria-hidden", "false");
              this.previousOpen.selector = this.targetOpen.selector;
              this.previousOpen.element = this.targetOpen.element;
              this._selectorOpen = false;
              this.isOpen = true;
              setTimeout((() => {
                this._focusTrap();
              }), 50);
              this.options.on.afterOpen(this);
              document.dispatchEvent(new CustomEvent("afterPopupOpen", {
                detail: {
                  popup: this
                }
              }));
              this.popupLogging(`Открыл попап`);
            } else this.popupLogging(`Ой ой, такого попапа нет.Проверьте корректность ввода. `);
          }
        }
        close(selectorValue) {
          if (selectorValue && "string" === typeof selectorValue && "" !== selectorValue.trim()) this.previousOpen.selector = selectorValue;
          if (!this.isOpen || !bodyLockStatus) return;
          this.options.on.beforeClose(this);
          document.dispatchEvent(new CustomEvent("beforePopupClose", {
            detail: {
              popup: this
            }
          }));
          if (this.youTubeCode) if (this.targetOpen.element.querySelector(`[${this.options.youtubePlaceAttribute}]`)) this.targetOpen.element.querySelector(`[${this.options.youtubePlaceAttribute}]`).innerHTML = "";
          this.previousOpen.element.classList.remove(this.options.classes.popupActive);
          this.previousOpen.element.setAttribute("aria-hidden", "true");
          if (!this._reopen) {
            document.documentElement.classList.remove(this.options.classes.bodyActive);
            !this.bodyLock ? bodyUnlock() : null;
            this.isOpen = false;
          }
          this._removeHash();
          if (this._selectorOpen) {
            this.lastClosed.selector = this.previousOpen.selector;
            this.lastClosed.element = this.previousOpen.element;
          }
          this.options.on.afterClose(this);
          document.dispatchEvent(new CustomEvent("afterPopupClose", {
            detail: {
              popup: this
            }
          }));
          setTimeout((() => {
            this._focusTrap();
          }), 50);
          this.popupLogging(`Закрыл попап`);
        }
        _getHash() {
          if (this.options.hashSettings.location) this.hash = this.targetOpen.selector.includes("#") ? this.targetOpen.selector : this.targetOpen.selector.replace(".", "#");
        }
        _openToHash() {
          let classInHash = document.querySelector(`.${window.location.hash.replace("#", "")}`) ? `.${window.location.hash.replace("#", "")}` : document.querySelector(`${window.location.hash}`) ? `${window.location.hash}` : null;
          const buttons = document.querySelector(`[${this.options.attributeOpenButton} = "${classInHash}"]`) ? document.querySelector(`[${this.options.attributeOpenButton} = "${classInHash}"]`) : document.querySelector(`[${this.options.attributeOpenButton} = "${classInHash.replace(".", "#")}"]`);
          if (buttons && classInHash) this.open(classInHash);
        }
        _setHash() {
          history.pushState("", "", this.hash);
        }
        _removeHash() {
          history.pushState("", "", window.location.href.split("#")[0]);
        }
        _focusCatch(e) {
          const focusable = this.targetOpen.element.querySelectorAll(this._focusEl);
          const focusArray = Array.prototype.slice.call(focusable);
          const focusedIndex = focusArray.indexOf(document.activeElement);
          if (e.shiftKey && 0 === focusedIndex) {
            focusArray[focusArray.length - 1].focus();
            e.preventDefault();
          }
          if (!e.shiftKey && focusedIndex === focusArray.length - 1) {
            focusArray[0].focus();
            e.preventDefault();
          }
        }
        _focusTrap() {
          const focusable = this.previousOpen.element.querySelectorAll(this._focusEl);
          if (!this.isOpen && this.lastFocusEl) this.lastFocusEl.focus(); else focusable[0].focus();
        }
        popupLogging(message) {
          this.options.logging ? functions_FLS(`[Попапос]: ${message}`) : null;
        }
      }
      modules_flsModules.popup = new Popup({});
      let formValidate = {
        getErrors(form) {
          let error = 0;
          let formRequiredItems = form.querySelectorAll("*[data-required]");
          if (formRequiredItems.length) formRequiredItems.forEach((formRequiredItem => {
            if ((null !== formRequiredItem.offsetParent || "SELECT" === formRequiredItem.tagName) && !formRequiredItem.disabled) error += this.validateInput(formRequiredItem);
          }));
          return error;
        },
        validateInput(formRequiredItem) {
          let error = 0;
          if ("email" === formRequiredItem.dataset.required) {
            formRequiredItem.value = formRequiredItem.value.replace(" ", "");
            if (this.emailTest(formRequiredItem)) {
              this.addError(formRequiredItem);
              error++;
            } else this.removeError(formRequiredItem);
          } else if ("checkbox" === formRequiredItem.type && !formRequiredItem.checked) {
            this.addError(formRequiredItem);
            error++;
          } else if (!formRequiredItem.value) {
            this.addError(formRequiredItem);
            error++;
          } else this.removeError(formRequiredItem);
          return error;
        },
        addError(formRequiredItem) {
          formRequiredItem.classList.add("_form-error");
          formRequiredItem.parentElement.classList.add("_form-error");
          let inputError = formRequiredItem.parentElement.querySelector(".form__error");
          if (inputError) formRequiredItem.parentElement.removeChild(inputError);
          if (formRequiredItem.dataset.error) formRequiredItem.parentElement.insertAdjacentHTML("beforeend", `<div class="form__error">${formRequiredItem.dataset.error}</div>`);
        },
        removeError(formRequiredItem) {
          formRequiredItem.classList.remove("_form-error");
          formRequiredItem.parentElement.classList.remove("_form-error");
          if (formRequiredItem.parentElement.querySelector(".form__error")) formRequiredItem.parentElement.removeChild(formRequiredItem.parentElement.querySelector(".form__error"));
        },
        formClean(form) {
          form.reset();
          setTimeout((() => {
            let inputs = form.querySelectorAll("input,textarea");
            for (let index = 0; index < inputs.length; index++) {
              const el = inputs[index];
              el.parentElement.classList.remove("_form-focus");
              el.classList.remove("_form-focus");
              formValidate.removeError(el);
            }
            let checkboxes = form.querySelectorAll(".checkbox__input");
            if (checkboxes.length > 0) for (let index = 0; index < checkboxes.length; index++) {
              const checkbox = checkboxes[index];
              checkbox.checked = false;
            }
            if (modules_flsModules.select) {
              let selects = form.querySelectorAll(".select");
              if (selects.length) for (let index = 0; index < selects.length; index++) {
                const select = selects[index].querySelector("select");
                modules_flsModules.select.selectBuild(select);
              }
            }
          }), 0);
        },
        emailTest(formRequiredItem) {
          return !/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,8})+$/.test(formRequiredItem.value);
        }
      };
      class SelectConstructor {
        constructor(props) {
          let data = arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : null;
          let defaultConfig = {
            init: true,
            logging: true
          };
          this.config = Object.assign(defaultConfig, props);
          this.selectClasses = {
            classSelect: "select",
            classSelectBody: "select__body",
            classSelectTitle: "select__title",
            classSelectValue: "select__value",
            classSelectLabel: "select__label",
            classSelectInput: "select__input",
            classSelectText: "select__text",
            classSelectLink: "select__link",
            classSelectOptions: "select__options",
            classSelectOptionsScroll: "select__scroll",
            classSelectOption: "select__option",
            classSelectContent: "select__content",
            classSelectRow: "select__row",
            classSelectData: "select__asset",
            classSelectDisabled: "_select-disabled",
            classSelectTag: "_select-tag",
            classSelectOpen: "_select-open",
            classSelectActive: "_select-active",
            classSelectFocus: "_select-focus",
            classSelectMultiple: "_select-multiple",
            classSelectCheckBox: "_select-checkbox",
            classSelectOptionSelected: "_select-selected",
            classSelectPseudoLabel: "_select-pseudo-label"
          };
          this._this = this;
          if (this.config.init) {
            const selectItems = data ? document.querySelectorAll(data) : document.querySelectorAll("select");
            if (selectItems.length) {
              this.selectsInit(selectItems);
              this.setLogging(`Проснулся, построил селектов: (${selectItems.length})`);
            } else this.setLogging("Сплю, нет ни одного select zzZZZzZZz");
          }
        }
        getSelectClass(className) {
          return `.${className}`;
        }
        getSelectElement(selectItem, className) {
          return {
            originalSelect: selectItem.querySelector("select"),
            selectElement: selectItem.querySelector(this.getSelectClass(className))
          };
        }
        selectsInit(selectItems) {
          selectItems.forEach(((originalSelect, index) => {
            this.selectInit(originalSelect, index + 1);
          }));
          document.addEventListener("click", function(e) {
            this.selectsActions(e);
          }.bind(this));
          document.addEventListener("keydown", function(e) {
            this.selectsActions(e);
          }.bind(this));
          document.addEventListener("focusin", function(e) {
            this.selectsActions(e);
          }.bind(this));
          document.addEventListener("focusout", function(e) {
            this.selectsActions(e);
          }.bind(this));
        }
        selectInit(originalSelect, index) {
          const _this = this;
          let selectItem = document.createElement("div");
          selectItem.classList.add(this.selectClasses.classSelect);
          originalSelect.parentNode.insertBefore(selectItem, originalSelect);
          selectItem.appendChild(originalSelect);
          originalSelect.hidden = true;
          index ? originalSelect.dataset.id = index : null;
          if (this.getSelectPlaceholder(originalSelect)) {
            originalSelect.dataset.placeholder = this.getSelectPlaceholder(originalSelect).value;
            if (this.getSelectPlaceholder(originalSelect).label.show) {
              const selectItemTitle = this.getSelectElement(selectItem, this.selectClasses.classSelectTitle).selectElement;
              selectItemTitle.insertAdjacentHTML("afterbegin", `<span class="${this.selectClasses.classSelectLabel}">${this.getSelectPlaceholder(originalSelect).label.text ? this.getSelectPlaceholder(originalSelect).label.text : this.getSelectPlaceholder(originalSelect).value}</span>`);
            }
          }
          selectItem.insertAdjacentHTML("beforeend", `<div class="${this.selectClasses.classSelectBody}"><div hidden class="${this.selectClasses.classSelectOptions}"></div></div>`);
          this.selectBuild(originalSelect);
          originalSelect.dataset.speed = originalSelect.dataset.speed ? originalSelect.dataset.speed : "150";
          originalSelect.addEventListener("change", (function(e) {
            _this.selectChange(e);
          }));
        }
        selectBuild(originalSelect) {
          const selectItem = originalSelect.parentElement;
          selectItem.dataset.id = originalSelect.dataset.id;
          selectItem.classList.add(originalSelect.getAttribute("class") ? `select_${originalSelect.getAttribute("class")}` : "");
          originalSelect.multiple ? selectItem.classList.add(this.selectClasses.classSelectMultiple) : selectItem.classList.remove(this.selectClasses.classSelectMultiple);
          originalSelect.hasAttribute("data-checkbox") && originalSelect.multiple ? selectItem.classList.add(this.selectClasses.classSelectCheckBox) : selectItem.classList.remove(this.selectClasses.classSelectCheckBox);
          this.setSelectTitleValue(selectItem, originalSelect);
          this.setOptions(selectItem, originalSelect);
          originalSelect.hasAttribute("data-search") ? this.searchActions(selectItem) : null;
          originalSelect.hasAttribute("data-open") ? this.selectAction(selectItem) : null;
          this.selectDisabled(selectItem, originalSelect);
        }
        selectsActions(e) {
          const targetElement = e.target;
          const targetType = e.type;
          if (targetElement.closest(this.getSelectClass(this.selectClasses.classSelect)) || targetElement.closest(this.getSelectClass(this.selectClasses.classSelectTag))) {
            const selectItem = targetElement.closest(".select") ? targetElement.closest(".select") : document.querySelector(`.${this.selectClasses.classSelect}[data-id="${targetElement.closest(this.getSelectClass(this.selectClasses.classSelectTag)).dataset.selectId}"]`);
            const originalSelect = this.getSelectElement(selectItem).originalSelect;
            if ("click" === targetType) {
              if (!originalSelect.disabled) if (targetElement.closest(this.getSelectClass(this.selectClasses.classSelectTag))) {
                const targetTag = targetElement.closest(this.getSelectClass(this.selectClasses.classSelectTag));
                const optionItem = document.querySelector(`.${this.selectClasses.classSelect}[data-id="${targetTag.dataset.selectId}"] .select__option[data-value="${targetTag.dataset.value}"]`);
                this.optionAction(selectItem, originalSelect, optionItem);
              } else if (targetElement.closest(this.getSelectClass(this.selectClasses.classSelectTitle))) this.selectAction(selectItem); else if (targetElement.closest(this.getSelectClass(this.selectClasses.classSelectOption))) {
                const optionItem = targetElement.closest(this.getSelectClass(this.selectClasses.classSelectOption));
                this.optionAction(selectItem, originalSelect, optionItem);
              }
            } else if ("focusin" === targetType || "focusout" === targetType) {
              if (targetElement.closest(this.getSelectClass(this.selectClasses.classSelect))) "focusin" === targetType ? selectItem.classList.add(this.selectClasses.classSelectFocus) : selectItem.classList.remove(this.selectClasses.classSelectFocus);
            } else if ("keydown" === targetType && "Escape" === e.code) this.selectsСlose();
          } else this.selectsСlose();
        }
        "selectsСlose"(selectOneGroup) {
          const selectsGroup = selectOneGroup ? selectOneGroup : document;
          const selectActiveItems = selectsGroup.querySelectorAll(`${this.getSelectClass(this.selectClasses.classSelect)}${this.getSelectClass(this.selectClasses.classSelectOpen)}`);
          if (selectActiveItems.length) selectActiveItems.forEach((selectActiveItem => {
            this.selectСlose(selectActiveItem);
          }));
        }
        "selectСlose"(selectItem) {
          const originalSelect = this.getSelectElement(selectItem).originalSelect;
          const selectOptions = this.getSelectElement(selectItem, this.selectClasses.classSelectOptions).selectElement;
          if (!selectOptions.classList.contains("_slide")) {
            selectItem.classList.remove(this.selectClasses.classSelectOpen);
            _slideUp(selectOptions, originalSelect.dataset.speed);
          }
        }
        selectAction(selectItem) {
          const originalSelect = this.getSelectElement(selectItem).originalSelect;
          const selectOptions = this.getSelectElement(selectItem, this.selectClasses.classSelectOptions).selectElement;
          if (originalSelect.closest("[data-one-select]")) {
            const selectOneGroup = originalSelect.closest("[data-one-select]");
            this.selectsСlose(selectOneGroup);
          }
          if (!selectOptions.classList.contains("_slide")) {
            selectItem.classList.toggle(this.selectClasses.classSelectOpen);
            _slideToggle(selectOptions, originalSelect.dataset.speed);
          }
        }
        setSelectTitleValue(selectItem, originalSelect) {
          const selectItemBody = this.getSelectElement(selectItem, this.selectClasses.classSelectBody).selectElement;
          const selectItemTitle = this.getSelectElement(selectItem, this.selectClasses.classSelectTitle).selectElement;
          if (selectItemTitle) selectItemTitle.remove();
          selectItemBody.insertAdjacentHTML("afterbegin", this.getSelectTitleValue(selectItem, originalSelect));
        }
        getSelectTitleValue(selectItem, originalSelect) {
          let selectTitleValue = this.getSelectedOptionsData(originalSelect, 2).html;
          if (originalSelect.multiple && originalSelect.hasAttribute("data-tags")) {
            selectTitleValue = this.getSelectedOptionsData(originalSelect).elements.map((option => `<span role="button" data-select-id="${selectItem.dataset.id}" data-value="${option.value}" class="_select-tag">${this.getSelectElementContent(option)}</span>`)).join("");
            if (originalSelect.dataset.tags && document.querySelector(originalSelect.dataset.tags)) {
              document.querySelector(originalSelect.dataset.tags).innerHTML = selectTitleValue;
              if (originalSelect.hasAttribute("data-search")) selectTitleValue = false;
            }
          }
          selectTitleValue = selectTitleValue.length ? selectTitleValue : originalSelect.dataset.placeholder ? originalSelect.dataset.placeholder : "";
          let pseudoAttribute = "";
          let pseudoAttributeClass = "";
          if (originalSelect.hasAttribute("data-pseudo-label")) {
            pseudoAttribute = originalSelect.dataset.pseudoLabel ? ` data-pseudo-label="${originalSelect.dataset.pseudoLabel}"` : ` data-pseudo-label="Заполните атрибут"`;
            pseudoAttributeClass = ` ${this.selectClasses.classSelectPseudoLabel}`;
          }
          this.getSelectedOptionsData(originalSelect).values.length ? selectItem.classList.add(this.selectClasses.classSelectActive) : selectItem.classList.remove(this.selectClasses.classSelectActive);
          if (originalSelect.hasAttribute("data-search")) return `<div class="${this.selectClasses.classSelectTitle}"><span${pseudoAttribute} class="${this.selectClasses.classSelectValue}"><input autocomplete="off" type="text" placeholder="${selectTitleValue}" data-placeholder="${selectTitleValue}" class="${this.selectClasses.classSelectInput}"></span></div>`; else {
            const customClass = this.getSelectedOptionsData(originalSelect).elements.length && this.getSelectedOptionsData(originalSelect).elements[0].dataset.class ? ` ${this.getSelectedOptionsData(originalSelect).elements[0].dataset.class}` : "";
            return `<button type="button" class="${this.selectClasses.classSelectTitle}"><span${pseudoAttribute} class="${this.selectClasses.classSelectValue}${pseudoAttributeClass}"><span class="${this.selectClasses.classSelectContent}${customClass}">${selectTitleValue}</span></span></button>`;
          }
        }
        getSelectElementContent(selectOption) {
          const selectOptionData = selectOption.dataset.asset ? `${selectOption.dataset.asset}` : "";
          const selectOptionDataHTML = selectOptionData.indexOf("img") >= 0 ? `<img src="${selectOptionData}" alt="">` : selectOptionData;
          let selectOptionContentHTML = ``;
          selectOptionContentHTML += selectOptionData ? `<span class="${this.selectClasses.classSelectRow}">` : "";
          selectOptionContentHTML += selectOptionData ? `<span class="${this.selectClasses.classSelectData}">` : "";
          selectOptionContentHTML += selectOptionData ? selectOptionDataHTML : "";
          selectOptionContentHTML += selectOptionData ? `</span>` : "";
          selectOptionContentHTML += selectOptionData ? `<span class="${this.selectClasses.classSelectText}">` : "";
          selectOptionContentHTML += selectOption.textContent;
          selectOptionContentHTML += selectOptionData ? `</span>` : "";
          selectOptionContentHTML += selectOptionData ? `</span>` : "";
          return selectOptionContentHTML;
        }
        getSelectPlaceholder(originalSelect) {
          const selectPlaceholder = Array.from(originalSelect.options).find((option => !option.value));
          if (selectPlaceholder) return {
            value: selectPlaceholder.textContent,
            show: selectPlaceholder.hasAttribute("data-show"),
            label: {
              show: selectPlaceholder.hasAttribute("data-label"),
              text: selectPlaceholder.dataset.label
            }
          };
        }
        getSelectedOptionsData(originalSelect, type) {
          let selectedOptions = [];
          if (originalSelect.multiple) selectedOptions = Array.from(originalSelect.options).filter((option => option.value)).filter((option => option.selected)); else selectedOptions.push(originalSelect.options[originalSelect.selectedIndex]);
          return {
            elements: selectedOptions.map((option => option)),
            values: selectedOptions.filter((option => option.value)).map((option => option.value)),
            html: selectedOptions.map((option => this.getSelectElementContent(option)))
          };
        }
        getOptions(originalSelect) {
          let selectOptionsScroll = originalSelect.hasAttribute("data-scroll") ? `data-simplebar` : "";
          let selectOptionsScrollHeight = originalSelect.dataset.scroll ? `style="max-height:${originalSelect.dataset.scroll}px"` : "";
          let selectOptions = Array.from(originalSelect.options);
          if (selectOptions.length > 0) {
            let selectOptionsHTML = ``;
            if (this.getSelectPlaceholder(originalSelect) && !this.getSelectPlaceholder(originalSelect).show || originalSelect.multiple) selectOptions = selectOptions.filter((option => option.value));
            selectOptionsHTML += selectOptionsScroll ? `<div ${selectOptionsScroll} ${selectOptionsScrollHeight} class="${this.selectClasses.classSelectOptionsScroll}">` : "";
            selectOptions.forEach((selectOption => {
              selectOptionsHTML += this.getOption(selectOption, originalSelect);
            }));
            selectOptionsHTML += selectOptionsScroll ? `</div>` : "";
            return selectOptionsHTML;
          }
        }
        getOption(selectOption, originalSelect) {
          const selectOptionSelected = selectOption.selected && originalSelect.multiple ? ` ${this.selectClasses.classSelectOptionSelected}` : "";
          const selectOptionHide = selectOption.selected && !originalSelect.hasAttribute("data-show-selected") && !originalSelect.multiple ? `hidden` : ``;
          const selectOptionClass = selectOption.dataset.class ? ` ${selectOption.dataset.class}` : "";
          const selectOptionLink = selectOption.dataset.href ? selectOption.dataset.href : false;
          const selectOptionLinkTarget = selectOption.hasAttribute("data-href-blank") ? `target="_blank"` : "";
          let selectOptionHTML = ``;
          selectOptionHTML += selectOptionLink ? `<a ${selectOptionLinkTarget} ${selectOptionHide} href="${selectOptionLink}" data-value="${selectOption.value}" class="${this.selectClasses.classSelectOption}${selectOptionClass}${selectOptionSelected}">` : `<button ${selectOptionHide} class="${this.selectClasses.classSelectOption}${selectOptionClass}${selectOptionSelected}" data-value="${selectOption.value}" type="button">`;
          selectOptionHTML += this.getSelectElementContent(selectOption);
          selectOptionHTML += selectOptionLink ? `</a>` : `</button>`;
          return selectOptionHTML;
        }
        setOptions(selectItem, originalSelect) {
          const selectItemOptions = this.getSelectElement(selectItem, this.selectClasses.classSelectOptions).selectElement;
          selectItemOptions.innerHTML = this.getOptions(originalSelect);
        }
        optionAction(selectItem, originalSelect, optionItem) {
          if (originalSelect.multiple) {
            optionItem.classList.toggle(this.selectClasses.classSelectOptionSelected);
            const originalSelectSelectedItems = this.getSelectedOptionsData(originalSelect).elements;
            originalSelectSelectedItems.forEach((originalSelectSelectedItem => {
              originalSelectSelectedItem.removeAttribute("selected");
            }));
            const selectSelectedItems = selectItem.querySelectorAll(this.getSelectClass(this.selectClasses.classSelectOptionSelected));
            selectSelectedItems.forEach((selectSelectedItems => {
              originalSelect.querySelector(`option[value="${selectSelectedItems.dataset.value}"]`).setAttribute("selected", "selected");
            }));
          } else {
            if (!originalSelect.hasAttribute("data-show-selected")) {
              if (selectItem.querySelector(`${this.getSelectClass(this.selectClasses.classSelectOption)}[hidden]`)) selectItem.querySelector(`${this.getSelectClass(this.selectClasses.classSelectOption)}[hidden]`).hidden = false;
              optionItem.hidden = true;
            }
            originalSelect.value = optionItem.hasAttribute("data-value") ? optionItem.dataset.value : optionItem.textContent;
            this.selectAction(selectItem);
          }
          this.setSelectTitleValue(selectItem, originalSelect);
          this.setSelectChange(originalSelect);
        }
        selectChange(e) {
          const originalSelect = e.target;
          this.selectBuild(originalSelect);
          this.setSelectChange(originalSelect);
        }
        setSelectChange(originalSelect) {
          if (originalSelect.hasAttribute("data-validate")) formValidate.validateInput(originalSelect);
          if (originalSelect.hasAttribute("data-submit") && originalSelect.value) {
            let tempButton = document.createElement("button");
            tempButton.type = "submit";
            originalSelect.closest("form").append(tempButton);
            tempButton.click();
            tempButton.remove();
          }
          const selectItem = originalSelect.parentElement;
          this.selectCallback(selectItem, originalSelect);
        }
        selectDisabled(selectItem, originalSelect) {
          if (originalSelect.disabled) {
            selectItem.classList.add(this.selectClasses.classSelectDisabled);
            this.getSelectElement(selectItem, this.selectClasses.classSelectTitle).selectElement.disabled = true;
          } else {
            selectItem.classList.remove(this.selectClasses.classSelectDisabled);
            this.getSelectElement(selectItem, this.selectClasses.classSelectTitle).selectElement.disabled = false;
          }
        }
        searchActions(selectItem) {
          this.getSelectElement(selectItem).originalSelect;
          const selectInput = this.getSelectElement(selectItem, this.selectClasses.classSelectInput).selectElement;
          const selectOptions = this.getSelectElement(selectItem, this.selectClasses.classSelectOptions).selectElement;
          const selectOptionsItems = selectOptions.querySelectorAll(`.${this.selectClasses.classSelectOption}`);
          const _this = this;
          selectInput.addEventListener("input", (function() {
            selectOptionsItems.forEach((selectOptionsItem => {
              if (selectOptionsItem.textContent.toUpperCase().indexOf(selectInput.value.toUpperCase()) >= 0) selectOptionsItem.hidden = false; else selectOptionsItem.hidden = true;
            }));
            true === selectOptions.hidden ? _this.selectAction(selectItem) : null;
          }));
        }
        selectCallback(selectItem, originalSelect) {
          document.dispatchEvent(new CustomEvent("selectCallback", {
            detail: {
              select: originalSelect
            }
          }));
        }
        setLogging(message) {
          this.config.logging ? functions_FLS(`[select]: ${message}`) : null;
        }
      }
      modules_flsModules.select = new SelectConstructor({});
      var just_validate_es = __webpack_require__(11);
      if (document.getElementById("form-subscribe")) {
        const validationSubscribe = new just_validate_es.Z("#form-subscribe", {
          errorFieldCssClass: "is-invalid"
        });
        validationSubscribe.addField("#input-email", [ {
          rule: "required",
          errorMessage: "Обязательное поле!"
        }, {
          rule: "email",
          errorMessage: "Неверный Email!"
        } ]);
      }
      if (document.getElementById("form-registration")) {
        const validationSubscribe = new just_validate_es.Z("#form-registration", {
          errorFieldCssClass: "is-invalid"
        });
        validationSubscribe.addField("#input-email", [ {
          rule: "required",
          errorMessage: "Обязательное поле!"
        }, {
          rule: "email",
          errorMessage: "Неверный Email!"
        } ]).addField("#input-password", [ {
          rule: "required",
          errorMessage: "Обязательное поле!"
        } ]).addField("#input-repeat-password", [ {
          validator: (value, fields) => {
            if (fields["#input-password"] && fields["#input-password"].elem) {
              const repeatPasswordValue = fields["#input-password"].elem.value;
              return value === repeatPasswordValue;
            }
            return true;
          },
          errorMessage: "Пароли должны быть одинаковыми!"
        }, {
          rule: "required",
          errorMessage: "Обязательное поле!"
        } ]);
      }
      if (document.getElementById("form-login")) {
        const validationSubscribe = new just_validate_es.Z("#form-login", {
          errorFieldCssClass: "is-invalid"
        });
        validationSubscribe.addField("#input-email", [ {
          rule: "required",
          errorMessage: "Обязательное поле!"
        }, {
          rule: "email",
          errorMessage: "Неверный Email!"
        } ]).addField("#input-password", [ {
          rule: "required",
          errorMessage: "Обязательное поле!"
        } ]);
      }
      if (document.getElementById("form-order")) {
        const validationOrder = new just_validate_es.Z("#form-order", {
          errorFieldCssClass: "is-invalid"
        });
        validationOrder.addField("#input-email", [ {
          rule: "required",
          errorMessage: "Обязательное поле!"
        }, {
          rule: "email",
          errorMessage: "Неверный Email!"
        } ]).addField("#input-first-name", [ {
          rule: "required",
          errorMessage: "Обязательное поле!"
        } ]).addField("#input-last-name", [ {
          rule: "required",
          errorMessage: "Обязательное поле!"
        } ]).addField("#input-phone", [ {
          rule: "required",
          errorMessage: "Обязательное поле!"
        } ]).addField("#input-street", [ {
          rule: "required",
          errorMessage: "Обязательное поле!"
        } ]).addField("#input-home-number", [ {
          rule: "required",
          errorMessage: "Обязательное поле!"
        } ]).addField("#input-apartment-number", [ {
          rule: "required",
          errorMessage: "Обязательное поле!"
        } ]).addField("#select-country", [ {
          rule: "required",
          errorMessage: "Обязательное поле!"
        } ]).addField("#select-city", [ {
          rule: "required",
          errorMessage: "Обязательное поле!"
        } ]);
      }
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
          },
          on: {
            init: function() {
              const numberOfSlides = this.slides.length;
              if (numberOfSlides <= 3) {
                this.navigation.prevEl.hidden = true;
                this.navigation.nextEl.hidden = true;
              }
            }
          }
        });
        if (document.querySelector(".thumbs-images")) {
          const thumbsSwiper = new swiper_esm.ZP(".thumbs-images", {
            modules: [ swiper_esm.oM, swiper_esm.o3 ],
            direction: "vertical",
            slidesPerView: "auto",
            spaceBetween: 12,
            speed: 500,
            loop: false,
            preloadImages: false,
            lazy: {
              loadPrevNext: true
            },
            breakpoints: {}
          });
          new swiper_esm.ZP(".images-product__slider", {
            modules: [ swiper_esm.oM, swiper_esm.o3 ],
            grabCursor: true,
            slidesPerView: 1,
            speed: 500,
            thumbs: {
              swiper: thumbsSwiper
            },
            loop: false,
            preloadImages: false,
            lazy: {
              loadPrevNext: true
            },
            breakpoints: {}
          });
        }
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
      let addWindowScrollEvent = false;
      setTimeout((() => {
        if (addWindowScrollEvent) {
          let windowScroll = new Event("windowScroll");
          window.addEventListener("scroll", (function(e) {
            document.dispatchEvent(windowScroll);
          }));
        }
      }), 0);
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
        const subMenuButtonClose = targetElement.classList.contains("submenu__close") || targetElement.classList.contains("i-close");
        const searchButtonClose = targetElement.classList.contains("search__close") || targetElement.classList.contains("i-close-search");
        const searchForm = document.querySelector(`.header__search`);
        if (targetElement.closest("[data-parent]") || subMenuButtonClose) {
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
            if (searchForm) searchForm.classList.remove("search-open");
          }
          if (subMenuButtonClose) {
            activeButton.classList.remove("submenu-active");
            activeSubMenu.classList.remove("submenu-open");
          }
          e.preventDefault();
        }
        if (targetElement.closest("#searchButton") || searchButtonClose) {
          const activeButton = document.querySelector(".submenu-active");
          const activeSubMenu = document.querySelector(".submenu-open");
          if (searchForm) {
            searchForm.classList.toggle("search-open");
            if (activeSubMenu) {
              activeButton.classList.remove("submenu-active");
              activeSubMenu.classList.remove("submenu-open");
            }
          }
          if (searchButtonClose) document.querySelector(`.header__search`).classList.remove("search-open");
          e.preventDefault();
        }
        if (targetElement.closest(".cart-menu__close") || targetElement.closest(".cart-menu__btn-close") || targetElement.closest("body") && !targetElement.closest(".cart-menu")) {
          bodyUnlock();
          document.querySelector("html").classList.remove("cart-menu-open");
        }
        if (targetElement.closest(".menu-icons__item_cart")) {
          bodyLock();
          document.querySelector("html").classList.add("cart-menu-open");
        }
      }
      (() => {
        document.location.pathname;
      })();
      document.querySelectorAll(".cart-tip");
      document.querySelector(".summary");
      document.querySelector(".total_discount");
      document.getElementById("form-order");
      document.querySelector("select[name=f_DeliveryDate]");
      window["FLS"] = false;
      menuInit();
      spollers();
      tabs();
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
    return __webpack_require__(723);
  }));
  __webpack_exports__ = __webpack_require__.O(__webpack_exports__);
})();