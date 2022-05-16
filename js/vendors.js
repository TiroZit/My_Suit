(self["webpackChunkgulp_webpack"] = self["webpackChunkgulp_webpack"] || []).push([ [ 216 ], {
  944: function() {
    (function(global, factory) {
      true ? factory() : 0;
    })(0, (function() {
      "use strict";
      function applyFocusVisiblePolyfill(scope) {
        var hadKeyboardEvent = true;
        var hadFocusVisibleRecently = false;
        var hadFocusVisibleRecentlyTimeout = null;
        var inputTypesAllowlist = {
          text: true,
          search: true,
          url: true,
          tel: true,
          email: true,
          password: true,
          number: true,
          date: true,
          month: true,
          week: true,
          time: true,
          datetime: true,
          "datetime-local": true
        };
        function isValidFocusTarget(el) {
          if (el && el !== document && "HTML" !== el.nodeName && "BODY" !== el.nodeName && "classList" in el && "contains" in el.classList) return true;
          return false;
        }
        function focusTriggersKeyboardModality(el) {
          var type = el.type;
          var tagName = el.tagName;
          if ("INPUT" === tagName && inputTypesAllowlist[type] && !el.readOnly) return true;
          if ("TEXTAREA" === tagName && !el.readOnly) return true;
          if (el.isContentEditable) return true;
          return false;
        }
        function addFocusVisibleClass(el) {
          if (el.classList.contains("focus-visible")) return;
          el.classList.add("focus-visible");
          el.setAttribute("data-focus-visible-added", "");
        }
        function removeFocusVisibleClass(el) {
          if (!el.hasAttribute("data-focus-visible-added")) return;
          el.classList.remove("focus-visible");
          el.removeAttribute("data-focus-visible-added");
        }
        function onKeyDown(e) {
          if (e.metaKey || e.altKey || e.ctrlKey) return;
          if (isValidFocusTarget(scope.activeElement)) addFocusVisibleClass(scope.activeElement);
          hadKeyboardEvent = true;
        }
        function onPointerDown(e) {
          hadKeyboardEvent = false;
        }
        function onFocus(e) {
          if (!isValidFocusTarget(e.target)) return;
          if (hadKeyboardEvent || focusTriggersKeyboardModality(e.target)) addFocusVisibleClass(e.target);
        }
        function onBlur(e) {
          if (!isValidFocusTarget(e.target)) return;
          if (e.target.classList.contains("focus-visible") || e.target.hasAttribute("data-focus-visible-added")) {
            hadFocusVisibleRecently = true;
            window.clearTimeout(hadFocusVisibleRecentlyTimeout);
            hadFocusVisibleRecentlyTimeout = window.setTimeout((function() {
              hadFocusVisibleRecently = false;
            }), 100);
            removeFocusVisibleClass(e.target);
          }
        }
        function onVisibilityChange(e) {
          if ("hidden" === document.visibilityState) {
            if (hadFocusVisibleRecently) hadKeyboardEvent = true;
            addInitialPointerMoveListeners();
          }
        }
        function addInitialPointerMoveListeners() {
          document.addEventListener("mousemove", onInitialPointerMove);
          document.addEventListener("mousedown", onInitialPointerMove);
          document.addEventListener("mouseup", onInitialPointerMove);
          document.addEventListener("pointermove", onInitialPointerMove);
          document.addEventListener("pointerdown", onInitialPointerMove);
          document.addEventListener("pointerup", onInitialPointerMove);
          document.addEventListener("touchmove", onInitialPointerMove);
          document.addEventListener("touchstart", onInitialPointerMove);
          document.addEventListener("touchend", onInitialPointerMove);
        }
        function removeInitialPointerMoveListeners() {
          document.removeEventListener("mousemove", onInitialPointerMove);
          document.removeEventListener("mousedown", onInitialPointerMove);
          document.removeEventListener("mouseup", onInitialPointerMove);
          document.removeEventListener("pointermove", onInitialPointerMove);
          document.removeEventListener("pointerdown", onInitialPointerMove);
          document.removeEventListener("pointerup", onInitialPointerMove);
          document.removeEventListener("touchmove", onInitialPointerMove);
          document.removeEventListener("touchstart", onInitialPointerMove);
          document.removeEventListener("touchend", onInitialPointerMove);
        }
        function onInitialPointerMove(e) {
          if (e.target.nodeName && "html" === e.target.nodeName.toLowerCase()) return;
          hadKeyboardEvent = false;
          removeInitialPointerMoveListeners();
        }
        document.addEventListener("keydown", onKeyDown, true);
        document.addEventListener("mousedown", onPointerDown, true);
        document.addEventListener("pointerdown", onPointerDown, true);
        document.addEventListener("touchstart", onPointerDown, true);
        document.addEventListener("visibilitychange", onVisibilityChange, true);
        addInitialPointerMoveListeners();
        scope.addEventListener("focus", onFocus, true);
        scope.addEventListener("blur", onBlur, true);
        if (scope.nodeType === Node.DOCUMENT_FRAGMENT_NODE && scope.host) scope.host.setAttribute("data-js-focus-visible", ""); else if (scope.nodeType === Node.DOCUMENT_NODE) {
          document.documentElement.classList.add("js-focus-visible");
          document.documentElement.setAttribute("data-js-focus-visible", "");
        }
      }
      if ("undefined" !== typeof window && "undefined" !== typeof document) {
        window.applyFocusVisiblePolyfill = applyFocusVisiblePolyfill;
        var event;
        try {
          event = new CustomEvent("focus-visible-polyfill-ready");
        } catch (error) {
          event = document.createEvent("CustomEvent");
          event.initCustomEvent("focus-visible-polyfill-ready", false, false, {});
        }
        window.dispatchEvent(event);
      }
      if ("undefined" !== typeof document) applyFocusVisiblePolyfill(document);
    }));
  },
  585: function(module) {
    !function(n, t) {
      true ? module.exports = t() : 0;
    }(0, (function() {
      "use strict";
      function n() {
        return n = Object.assign || function(n) {
          for (var t = 1; t < arguments.length; t++) {
            var e = arguments[t];
            for (var o in e) Object.prototype.hasOwnProperty.call(e, o) && (n[o] = e[o]);
          }
          return n;
        }, n.apply(this, arguments);
      }
      var t = "undefined" != typeof window, e = t && !("onscroll" in window) || "undefined" != typeof navigator && /(gle|ing|ro)bot|crawl|spider/i.test(navigator.userAgent), o = t && "IntersectionObserver" in window, i = t && "classList" in document.createElement("p"), a = t && window.devicePixelRatio > 1, r = {
        elements_selector: ".lazy",
        container: e || t ? document : null,
        threshold: 300,
        thresholds: null,
        data_src: "src",
        data_srcset: "srcset",
        data_sizes: "sizes",
        data_bg: "bg",
        data_bg_hidpi: "bg-hidpi",
        data_bg_multi: "bg-multi",
        data_bg_multi_hidpi: "bg-multi-hidpi",
        data_bg_set: "bg-set",
        data_poster: "poster",
        class_applied: "applied",
        class_loading: "loading",
        class_loaded: "loaded",
        class_error: "error",
        class_entered: "entered",
        class_exited: "exited",
        unobserve_completed: !0,
        unobserve_entered: !1,
        cancel_on_exit: !0,
        callback_enter: null,
        callback_exit: null,
        callback_applied: null,
        callback_loading: null,
        callback_loaded: null,
        callback_error: null,
        callback_finish: null,
        callback_cancel: null,
        use_native: !1,
        restore_on_error: !1
      }, c = function(t) {
        return n({}, r, t);
      }, u = function(n, t) {
        var e, o = "LazyLoad::Initialized", i = new n(t);
        try {
          e = new CustomEvent(o, {
            detail: {
              instance: i
            }
          });
        } catch (n) {
          (e = document.createEvent("CustomEvent")).initCustomEvent(o, !1, !1, {
            instance: i
          });
        }
        window.dispatchEvent(e);
      }, l = "src", s = "srcset", f = "sizes", d = "poster", _ = "llOriginalAttrs", g = "data", v = "loading", b = "loaded", p = "applied", m = "error", h = "native", E = "data-", I = "ll-status", y = function(n, t) {
        return n.getAttribute(E + t);
      }, k = function(n) {
        return y(n, I);
      }, A = function(n, t) {
        return function(n, t, e) {
          var o = "data-ll-status";
          null !== e ? n.setAttribute(o, e) : n.removeAttribute(o);
        }(n, 0, t);
      }, w = function(n) {
        return A(n, null);
      }, L = function(n) {
        return null === k(n);
      }, O = function(n) {
        return k(n) === h;
      }, x = [ v, b, p, m ], C = function(n, t, e, o) {
        n && (void 0 === o ? void 0 === e ? n(t) : n(t, e) : n(t, e, o));
      }, N = function(n, t) {
        i ? n.classList.add(t) : n.className += (n.className ? " " : "") + t;
      }, M = function(n, t) {
        i ? n.classList.remove(t) : n.className = n.className.replace(new RegExp("(^|\\s+)" + t + "(\\s+|$)"), " ").replace(/^\s+/, "").replace(/\s+$/, "");
      }, z = function(n) {
        return n.llTempImage;
      }, T = function(n, t) {
        if (t) {
          var e = t._observer;
          e && e.unobserve(n);
        }
      }, R = function(n, t) {
        n && (n.loadingCount += t);
      }, G = function(n, t) {
        n && (n.toLoadCount = t);
      }, j = function(n) {
        for (var t, e = [], o = 0; t = n.children[o]; o += 1) "SOURCE" === t.tagName && e.push(t);
        return e;
      }, D = function(n, t) {
        var e = n.parentNode;
        e && "PICTURE" === e.tagName && j(e).forEach(t);
      }, V = function(n, t) {
        j(n).forEach(t);
      }, F = [ l ], B = [ l, d ], J = [ l, s, f ], P = [ g ], S = function(n) {
        return !!n[_];
      }, U = function(n) {
        return n[_];
      }, $ = function(n) {
        return delete n[_];
      }, q = function(n, t) {
        if (!S(n)) {
          var e = {};
          t.forEach((function(t) {
            e[t] = n.getAttribute(t);
          })), n[_] = e;
        }
      }, H = function(n, t) {
        if (S(n)) {
          var e = U(n);
          t.forEach((function(t) {
            !function(n, t, e) {
              e ? n.setAttribute(t, e) : n.removeAttribute(t);
            }(n, t, e[t]);
          }));
        }
      }, K = function(n, t, e) {
        N(n, t.class_applied), A(n, p), e && (t.unobserve_completed && T(n, t), C(t.callback_applied, n, e));
      }, Q = function(n, t, e) {
        N(n, t.class_loading), A(n, v), e && (R(e, 1), C(t.callback_loading, n, e));
      }, W = function(n, t, e) {
        e && n.setAttribute(t, e);
      }, X = function(n, t) {
        W(n, f, y(n, t.data_sizes)), W(n, s, y(n, t.data_srcset)), W(n, l, y(n, t.data_src));
      }, Y = {
        IMG: function(n, t) {
          D(n, (function(n) {
            q(n, J), X(n, t);
          })), q(n, J), X(n, t);
        },
        IFRAME: function(n, t) {
          q(n, F), W(n, l, y(n, t.data_src));
        },
        VIDEO: function(n, t) {
          V(n, (function(n) {
            q(n, F), W(n, l, y(n, t.data_src));
          })), q(n, B), W(n, d, y(n, t.data_poster)), W(n, l, y(n, t.data_src)), n.load();
        },
        OBJECT: function(n, t) {
          q(n, P), W(n, g, y(n, t.data_src));
        }
      }, Z = [ "IMG", "IFRAME", "VIDEO", "OBJECT" ], nn = function(n, t) {
        !t || function(n) {
          return n.loadingCount > 0;
        }(t) || function(n) {
          return n.toLoadCount > 0;
        }(t) || C(n.callback_finish, t);
      }, tn = function(n, t, e) {
        n.addEventListener(t, e), n.llEvLisnrs[t] = e;
      }, en = function(n, t, e) {
        n.removeEventListener(t, e);
      }, on = function(n) {
        return !!n.llEvLisnrs;
      }, an = function(n) {
        if (on(n)) {
          var t = n.llEvLisnrs;
          for (var e in t) {
            var o = t[e];
            en(n, e, o);
          }
          delete n.llEvLisnrs;
        }
      }, rn = function(n, t, e) {
        !function(n) {
          delete n.llTempImage;
        }(n), R(e, -1), function(n) {
          n && (n.toLoadCount -= 1);
        }(e), M(n, t.class_loading), t.unobserve_completed && T(n, e);
      }, cn = function(n, t, e) {
        var o = z(n) || n;
        on(o) || function(n, t, e) {
          on(n) || (n.llEvLisnrs = {});
          var o = "VIDEO" === n.tagName ? "loadeddata" : "load";
          tn(n, o, t), tn(n, "error", e);
        }(o, (function(i) {
          !function(n, t, e, o) {
            var i = O(t);
            rn(t, e, o), N(t, e.class_loaded), A(t, b), C(e.callback_loaded, t, o), i || nn(e, o);
          }(0, n, t, e), an(o);
        }), (function(i) {
          !function(n, t, e, o) {
            var i = O(t);
            rn(t, e, o), N(t, e.class_error), A(t, m), C(e.callback_error, t, o), e.restore_on_error && H(t, J), 
            i || nn(e, o);
          }(0, n, t, e), an(o);
        }));
      }, un = function(n, t, e) {
        !function(n) {
          return Z.indexOf(n.tagName) > -1;
        }(n) ? function(n, t, e) {
          !function(n) {
            n.llTempImage = document.createElement("IMG");
          }(n), cn(n, t, e), function(n) {
            S(n) || (n[_] = {
              backgroundImage: n.style.backgroundImage
            });
          }(n), function(n, t, e) {
            var o = y(n, t.data_bg), i = y(n, t.data_bg_hidpi), r = a && i ? i : o;
            r && (n.style.backgroundImage = 'url("'.concat(r, '")'), z(n).setAttribute(l, r), 
            Q(n, t, e));
          }(n, t, e), function(n, t, e) {
            var o = y(n, t.data_bg_multi), i = y(n, t.data_bg_multi_hidpi), r = a && i ? i : o;
            r && (n.style.backgroundImage = r, K(n, t, e));
          }(n, t, e), function(n, t, e) {
            var o = y(n, t.data_bg_set);
            if (o) {
              var i = o.split("|"), a = i.map((function(n) {
                return "image-set(".concat(n, ")");
              }));
              n.style.backgroundImage = a.join(), "" === n.style.backgroundImage && (a = i.map((function(n) {
                return "-webkit-image-set(".concat(n, ")");
              })), n.style.backgroundImage = a.join()), K(n, t, e);
            }
          }(n, t, e);
        }(n, t, e) : function(n, t, e) {
          cn(n, t, e), function(n, t, e) {
            var o = Y[n.tagName];
            o && (o(n, t), Q(n, t, e));
          }(n, t, e);
        }(n, t, e);
      }, ln = function(n) {
        n.removeAttribute(l), n.removeAttribute(s), n.removeAttribute(f);
      }, sn = function(n) {
        D(n, (function(n) {
          H(n, J);
        })), H(n, J);
      }, fn = {
        IMG: sn,
        IFRAME: function(n) {
          H(n, F);
        },
        VIDEO: function(n) {
          V(n, (function(n) {
            H(n, F);
          })), H(n, B), n.load();
        },
        OBJECT: function(n) {
          H(n, P);
        }
      }, dn = function(n, t) {
        (function(n) {
          var t = fn[n.tagName];
          t ? t(n) : function(n) {
            if (S(n)) {
              var t = U(n);
              n.style.backgroundImage = t.backgroundImage;
            }
          }(n);
        })(n), function(n, t) {
          L(n) || O(n) || (M(n, t.class_entered), M(n, t.class_exited), M(n, t.class_applied), 
          M(n, t.class_loading), M(n, t.class_loaded), M(n, t.class_error));
        }(n, t), w(n), $(n);
      }, _n = [ "IMG", "IFRAME", "VIDEO" ], gn = function(n) {
        return n.use_native && "loading" in HTMLImageElement.prototype;
      }, vn = function(n, t, e) {
        n.forEach((function(n) {
          return function(n) {
            return n.isIntersecting || n.intersectionRatio > 0;
          }(n) ? function(n, t, e, o) {
            var i = function(n) {
              return x.indexOf(k(n)) >= 0;
            }(n);
            A(n, "entered"), N(n, e.class_entered), M(n, e.class_exited), function(n, t, e) {
              t.unobserve_entered && T(n, e);
            }(n, e, o), C(e.callback_enter, n, t, o), i || un(n, e, o);
          }(n.target, n, t, e) : function(n, t, e, o) {
            L(n) || (N(n, e.class_exited), function(n, t, e, o) {
              e.cancel_on_exit && function(n) {
                return k(n) === v;
              }(n) && "IMG" === n.tagName && (an(n), function(n) {
                D(n, (function(n) {
                  ln(n);
                })), ln(n);
              }(n), sn(n), M(n, e.class_loading), R(o, -1), w(n), C(e.callback_cancel, n, t, o));
            }(n, t, e, o), C(e.callback_exit, n, t, o));
          }(n.target, n, t, e);
        }));
      }, bn = function(n) {
        return Array.prototype.slice.call(n);
      }, pn = function(n) {
        return n.container.querySelectorAll(n.elements_selector);
      }, mn = function(n) {
        return function(n) {
          return k(n) === m;
        }(n);
      }, hn = function(n, t) {
        return function(n) {
          return bn(n).filter(L);
        }(n || pn(t));
      }, En = function(n, e) {
        var i = c(n);
        this._settings = i, this.loadingCount = 0, function(n, t) {
          o && !gn(n) && (t._observer = new IntersectionObserver((function(e) {
            vn(e, n, t);
          }), function(n) {
            return {
              root: n.container === document ? null : n.container,
              rootMargin: n.thresholds || n.threshold + "px"
            };
          }(n)));
        }(i, this), function(n, e) {
          t && window.addEventListener("online", (function() {
            !function(n, t) {
              var e;
              (e = pn(n), bn(e).filter(mn)).forEach((function(t) {
                M(t, n.class_error), w(t);
              })), t.update();
            }(n, e);
          }));
        }(i, this), this.update(e);
      };
      return En.prototype = {
        update: function(n) {
          var t, i, a = this._settings, r = hn(n, a);
          G(this, r.length), !e && o ? gn(a) ? function(n, t, e) {
            n.forEach((function(n) {
              -1 !== _n.indexOf(n.tagName) && function(n, t, e) {
                n.setAttribute("loading", "lazy"), cn(n, t, e), function(n, t) {
                  var e = Y[n.tagName];
                  e && e(n, t);
                }(n, t), A(n, h);
              }(n, t, e);
            })), G(e, 0);
          }(r, a, this) : (i = r, function(n) {
            n.disconnect();
          }(t = this._observer), function(n, t) {
            t.forEach((function(t) {
              n.observe(t);
            }));
          }(t, i)) : this.loadAll(r);
        },
        destroy: function() {
          this._observer && this._observer.disconnect(), pn(this._settings).forEach((function(n) {
            $(n);
          })), delete this._observer, delete this._settings, delete this.loadingCount, delete this.toLoadCount;
        },
        loadAll: function(n) {
          var t = this, e = this._settings;
          hn(n, e).forEach((function(n) {
            T(n, t), un(n, e, t);
          }));
        },
        restoreAll: function() {
          var n = this._settings;
          pn(n).forEach((function(t) {
            dn(t, n);
          }));
        }
      }, En.load = function(n, t) {
        var e = c(t);
        un(n, e);
      }, En.resetStatus = function(n) {
        w(n);
      }, t && function(n, t) {
        if (t) if (t.length) for (var e, o = 0; e = t[o]; o += 1) u(n, e); else u(n, t);
      }(En, window.lazyLoadOptions), En;
    }));
  },
  379: function(module) {
    "use strict";
    var stylesInDOM = [];
    function getIndexByIdentifier(identifier) {
      var result = -1;
      for (var i = 0; i < stylesInDOM.length; i++) if (stylesInDOM[i].identifier === identifier) {
        result = i;
        break;
      }
      return result;
    }
    function modulesToDom(list, options) {
      var idCountMap = {};
      var identifiers = [];
      for (var i = 0; i < list.length; i++) {
        var item = list[i];
        var id = options.base ? item[0] + options.base : item[0];
        var count = idCountMap[id] || 0;
        var identifier = "".concat(id, " ").concat(count);
        idCountMap[id] = count + 1;
        var indexByIdentifier = getIndexByIdentifier(identifier);
        var obj = {
          css: item[1],
          media: item[2],
          sourceMap: item[3],
          supports: item[4],
          layer: item[5]
        };
        if (-1 !== indexByIdentifier) {
          stylesInDOM[indexByIdentifier].references++;
          stylesInDOM[indexByIdentifier].updater(obj);
        } else {
          var updater = addElementStyle(obj, options);
          options.byIndex = i;
          stylesInDOM.splice(i, 0, {
            identifier: identifier,
            updater: updater,
            references: 1
          });
        }
        identifiers.push(identifier);
      }
      return identifiers;
    }
    function addElementStyle(obj, options) {
      var api = options.domAPI(options);
      api.update(obj);
      var updater = function updater(newObj) {
        if (newObj) {
          if (newObj.css === obj.css && newObj.media === obj.media && newObj.sourceMap === obj.sourceMap && newObj.supports === obj.supports && newObj.layer === obj.layer) return;
          api.update(obj = newObj);
        } else api.remove();
      };
      return updater;
    }
    module.exports = function(list, options) {
      options = options || {};
      list = list || [];
      var lastIdentifiers = modulesToDom(list, options);
      return function update(newList) {
        newList = newList || [];
        for (var i = 0; i < lastIdentifiers.length; i++) {
          var identifier = lastIdentifiers[i];
          var index = getIndexByIdentifier(identifier);
          stylesInDOM[index].references--;
        }
        var newLastIdentifiers = modulesToDom(newList, options);
        for (var _i = 0; _i < lastIdentifiers.length; _i++) {
          var _identifier = lastIdentifiers[_i];
          var _index = getIndexByIdentifier(_identifier);
          if (0 === stylesInDOM[_index].references) {
            stylesInDOM[_index].updater();
            stylesInDOM.splice(_index, 1);
          }
        }
        lastIdentifiers = newLastIdentifiers;
      };
    };
  },
  569: function(module) {
    "use strict";
    var memo = {};
    function getTarget(target) {
      if ("undefined" === typeof memo[target]) {
        var styleTarget = document.querySelector(target);
        if (window.HTMLIFrameElement && styleTarget instanceof window.HTMLIFrameElement) try {
          styleTarget = styleTarget.contentDocument.head;
        } catch (e) {
          styleTarget = null;
        }
        memo[target] = styleTarget;
      }
      return memo[target];
    }
    function insertBySelector(insert, style) {
      var target = getTarget(insert);
      if (!target) throw new Error("Couldn't find a style target. This probably means that the value for the 'insert' parameter is invalid.");
      target.appendChild(style);
    }
    module.exports = insertBySelector;
  },
  216: function(module) {
    "use strict";
    function insertStyleElement(options) {
      var element = document.createElement("style");
      options.setAttributes(element, options.attributes);
      options.insert(element, options.options);
      return element;
    }
    module.exports = insertStyleElement;
  },
  565: function(module, __unused_webpack_exports, __webpack_require__) {
    "use strict";
    function setAttributesWithoutAttributes(styleElement) {
      var nonce = true ? __webpack_require__.nc : 0;
      if (nonce) styleElement.setAttribute("nonce", nonce);
    }
    module.exports = setAttributesWithoutAttributes;
  },
  795: function(module) {
    "use strict";
    function apply(styleElement, options, obj) {
      var css = "";
      if (obj.supports) css += "@supports (".concat(obj.supports, ") {");
      if (obj.media) css += "@media ".concat(obj.media, " {");
      var needLayer = "undefined" !== typeof obj.layer;
      if (needLayer) css += "@layer".concat(obj.layer.length > 0 ? " ".concat(obj.layer) : "", " {");
      css += obj.css;
      if (needLayer) css += "}";
      if (obj.media) css += "}";
      if (obj.supports) css += "}";
      var sourceMap = obj.sourceMap;
      if (sourceMap && "undefined" !== typeof btoa) css += "\n/*# sourceMappingURL=data:application/json;base64,".concat(btoa(unescape(encodeURIComponent(JSON.stringify(sourceMap)))), " */");
      options.styleTagTransform(css, styleElement, options.options);
    }
    function removeStyleElement(styleElement) {
      if (null === styleElement.parentNode) return false;
      styleElement.parentNode.removeChild(styleElement);
    }
    function domAPI(options) {
      var styleElement = options.insertStyleElement(options);
      return {
        update: function update(obj) {
          apply(styleElement, options, obj);
        },
        remove: function remove() {
          removeStyleElement(styleElement);
        }
      };
    }
    module.exports = domAPI;
  },
  589: function(module) {
    "use strict";
    function styleTagTransform(css, styleElement) {
      if (styleElement.styleSheet) styleElement.styleSheet.cssText = css; else {
        while (styleElement.firstChild) styleElement.removeChild(styleElement.firstChild);
        styleElement.appendChild(document.createTextNode(css));
      }
    }
    module.exports = styleTagTransform;
  },
  930: function(__unused_webpack___webpack_module__, __webpack_exports__, __webpack_require__) {
    "use strict";
    __webpack_require__.d(__webpack_exports__, {
      s5: function() {
        return A11y;
      },
      oM: function() {
        return Lazy;
      },
      W_: function() {
        return Navigation;
      },
      LW: function() {
        return Scrollbar;
      },
      ZP: function() {
        return core;
      }
    });
    function ssr_window_esm_isObject(obj) {
      return null !== obj && "object" === typeof obj && "constructor" in obj && obj.constructor === Object;
    }
    function extend(target = {}, src = {}) {
      Object.keys(src).forEach((key => {
        if ("undefined" === typeof target[key]) target[key] = src[key]; else if (ssr_window_esm_isObject(src[key]) && ssr_window_esm_isObject(target[key]) && Object.keys(src[key]).length > 0) extend(target[key], src[key]);
      }));
    }
    const ssrDocument = {
      body: {},
      addEventListener() {},
      removeEventListener() {},
      activeElement: {
        blur() {},
        nodeName: ""
      },
      querySelector() {
        return null;
      },
      querySelectorAll() {
        return [];
      },
      getElementById() {
        return null;
      },
      createEvent() {
        return {
          initEvent() {}
        };
      },
      createElement() {
        return {
          children: [],
          childNodes: [],
          style: {},
          setAttribute() {},
          getElementsByTagName() {
            return [];
          }
        };
      },
      createElementNS() {
        return {};
      },
      importNode() {
        return null;
      },
      location: {
        hash: "",
        host: "",
        hostname: "",
        href: "",
        origin: "",
        pathname: "",
        protocol: "",
        search: ""
      }
    };
    function ssr_window_esm_getDocument() {
      const doc = "undefined" !== typeof document ? document : {};
      extend(doc, ssrDocument);
      return doc;
    }
    const ssrWindow = {
      document: ssrDocument,
      navigator: {
        userAgent: ""
      },
      location: {
        hash: "",
        host: "",
        hostname: "",
        href: "",
        origin: "",
        pathname: "",
        protocol: "",
        search: ""
      },
      history: {
        replaceState() {},
        pushState() {},
        go() {},
        back() {}
      },
      CustomEvent: function CustomEvent() {
        return this;
      },
      addEventListener() {},
      removeEventListener() {},
      getComputedStyle() {
        return {
          getPropertyValue() {
            return "";
          }
        };
      },
      Image() {},
      Date() {},
      screen: {},
      setTimeout() {},
      clearTimeout() {},
      matchMedia() {
        return {};
      },
      requestAnimationFrame(callback) {
        if ("undefined" === typeof setTimeout) {
          callback();
          return null;
        }
        return setTimeout(callback, 0);
      },
      cancelAnimationFrame(id) {
        if ("undefined" === typeof setTimeout) return;
        clearTimeout(id);
      }
    };
    function ssr_window_esm_getWindow() {
      const win = "undefined" !== typeof window ? window : {};
      extend(win, ssrWindow);
      return win;
    }
    function makeReactive(obj) {
      const proto = obj.__proto__;
      Object.defineProperty(obj, "__proto__", {
        get() {
          return proto;
        },
        set(value) {
          proto.__proto__ = value;
        }
      });
    }
    class Dom7 extends Array {
      constructor(items) {
        if ("number" === typeof items) super(items); else {
          super(...items || []);
          makeReactive(this);
        }
      }
    }
    function arrayFlat(arr = []) {
      const res = [];
      arr.forEach((el => {
        if (Array.isArray(el)) res.push(...arrayFlat(el)); else res.push(el);
      }));
      return res;
    }
    function arrayFilter(arr, callback) {
      return Array.prototype.filter.call(arr, callback);
    }
    function arrayUnique(arr) {
      const uniqueArray = [];
      for (let i = 0; i < arr.length; i += 1) if (-1 === uniqueArray.indexOf(arr[i])) uniqueArray.push(arr[i]);
      return uniqueArray;
    }
    function qsa(selector, context) {
      if ("string" !== typeof selector) return [ selector ];
      const a = [];
      const res = context.querySelectorAll(selector);
      for (let i = 0; i < res.length; i += 1) a.push(res[i]);
      return a;
    }
    function dom7_esm_$(selector, context) {
      const window = ssr_window_esm_getWindow();
      const document = ssr_window_esm_getDocument();
      let arr = [];
      if (!context && selector instanceof Dom7) return selector;
      if (!selector) return new Dom7(arr);
      if ("string" === typeof selector) {
        const html = selector.trim();
        if (html.indexOf("<") >= 0 && html.indexOf(">") >= 0) {
          let toCreate = "div";
          if (0 === html.indexOf("<li")) toCreate = "ul";
          if (0 === html.indexOf("<tr")) toCreate = "tbody";
          if (0 === html.indexOf("<td") || 0 === html.indexOf("<th")) toCreate = "tr";
          if (0 === html.indexOf("<tbody")) toCreate = "table";
          if (0 === html.indexOf("<option")) toCreate = "select";
          const tempParent = document.createElement(toCreate);
          tempParent.innerHTML = html;
          for (let i = 0; i < tempParent.childNodes.length; i += 1) arr.push(tempParent.childNodes[i]);
        } else arr = qsa(selector.trim(), context || document);
      } else if (selector.nodeType || selector === window || selector === document) arr.push(selector); else if (Array.isArray(selector)) {
        if (selector instanceof Dom7) return selector;
        arr = selector;
      }
      return new Dom7(arrayUnique(arr));
    }
    dom7_esm_$.fn = Dom7.prototype;
    function addClass(...classes) {
      const classNames = arrayFlat(classes.map((c => c.split(" "))));
      this.forEach((el => {
        el.classList.add(...classNames);
      }));
      return this;
    }
    function removeClass(...classes) {
      const classNames = arrayFlat(classes.map((c => c.split(" "))));
      this.forEach((el => {
        el.classList.remove(...classNames);
      }));
      return this;
    }
    function toggleClass(...classes) {
      const classNames = arrayFlat(classes.map((c => c.split(" "))));
      this.forEach((el => {
        classNames.forEach((className => {
          el.classList.toggle(className);
        }));
      }));
    }
    function hasClass(...classes) {
      const classNames = arrayFlat(classes.map((c => c.split(" "))));
      return arrayFilter(this, (el => classNames.filter((className => el.classList.contains(className))).length > 0)).length > 0;
    }
    function attr(attrs, value) {
      if (1 === arguments.length && "string" === typeof attrs) {
        if (this[0]) return this[0].getAttribute(attrs);
        return;
      }
      for (let i = 0; i < this.length; i += 1) if (2 === arguments.length) this[i].setAttribute(attrs, value); else for (const attrName in attrs) {
        this[i][attrName] = attrs[attrName];
        this[i].setAttribute(attrName, attrs[attrName]);
      }
      return this;
    }
    function removeAttr(attr) {
      for (let i = 0; i < this.length; i += 1) this[i].removeAttribute(attr);
      return this;
    }
    function transform(transform) {
      for (let i = 0; i < this.length; i += 1) this[i].style.transform = transform;
      return this;
    }
    function transition(duration) {
      for (let i = 0; i < this.length; i += 1) this[i].style.transitionDuration = "string" !== typeof duration ? `${duration}ms` : duration;
      return this;
    }
    function on(...args) {
      let [eventType, targetSelector, listener, capture] = args;
      if ("function" === typeof args[1]) {
        [eventType, listener, capture] = args;
        targetSelector = void 0;
      }
      if (!capture) capture = false;
      function handleLiveEvent(e) {
        const target = e.target;
        if (!target) return;
        const eventData = e.target.dom7EventData || [];
        if (eventData.indexOf(e) < 0) eventData.unshift(e);
        if (dom7_esm_$(target).is(targetSelector)) listener.apply(target, eventData); else {
          const parents = dom7_esm_$(target).parents();
          for (let k = 0; k < parents.length; k += 1) if (dom7_esm_$(parents[k]).is(targetSelector)) listener.apply(parents[k], eventData);
        }
      }
      function handleEvent(e) {
        const eventData = e && e.target ? e.target.dom7EventData || [] : [];
        if (eventData.indexOf(e) < 0) eventData.unshift(e);
        listener.apply(this, eventData);
      }
      const events = eventType.split(" ");
      let j;
      for (let i = 0; i < this.length; i += 1) {
        const el = this[i];
        if (!targetSelector) for (j = 0; j < events.length; j += 1) {
          const event = events[j];
          if (!el.dom7Listeners) el.dom7Listeners = {};
          if (!el.dom7Listeners[event]) el.dom7Listeners[event] = [];
          el.dom7Listeners[event].push({
            listener: listener,
            proxyListener: handleEvent
          });
          el.addEventListener(event, handleEvent, capture);
        } else for (j = 0; j < events.length; j += 1) {
          const event = events[j];
          if (!el.dom7LiveListeners) el.dom7LiveListeners = {};
          if (!el.dom7LiveListeners[event]) el.dom7LiveListeners[event] = [];
          el.dom7LiveListeners[event].push({
            listener: listener,
            proxyListener: handleLiveEvent
          });
          el.addEventListener(event, handleLiveEvent, capture);
        }
      }
      return this;
    }
    function off(...args) {
      let [eventType, targetSelector, listener, capture] = args;
      if ("function" === typeof args[1]) {
        [eventType, listener, capture] = args;
        targetSelector = void 0;
      }
      if (!capture) capture = false;
      const events = eventType.split(" ");
      for (let i = 0; i < events.length; i += 1) {
        const event = events[i];
        for (let j = 0; j < this.length; j += 1) {
          const el = this[j];
          let handlers;
          if (!targetSelector && el.dom7Listeners) handlers = el.dom7Listeners[event]; else if (targetSelector && el.dom7LiveListeners) handlers = el.dom7LiveListeners[event];
          if (handlers && handlers.length) for (let k = handlers.length - 1; k >= 0; k -= 1) {
            const handler = handlers[k];
            if (listener && handler.listener === listener) {
              el.removeEventListener(event, handler.proxyListener, capture);
              handlers.splice(k, 1);
            } else if (listener && handler.listener && handler.listener.dom7proxy && handler.listener.dom7proxy === listener) {
              el.removeEventListener(event, handler.proxyListener, capture);
              handlers.splice(k, 1);
            } else if (!listener) {
              el.removeEventListener(event, handler.proxyListener, capture);
              handlers.splice(k, 1);
            }
          }
        }
      }
      return this;
    }
    function trigger(...args) {
      const window = ssr_window_esm_getWindow();
      const events = args[0].split(" ");
      const eventData = args[1];
      for (let i = 0; i < events.length; i += 1) {
        const event = events[i];
        for (let j = 0; j < this.length; j += 1) {
          const el = this[j];
          if (window.CustomEvent) {
            const evt = new window.CustomEvent(event, {
              detail: eventData,
              bubbles: true,
              cancelable: true
            });
            el.dom7EventData = args.filter(((data, dataIndex) => dataIndex > 0));
            el.dispatchEvent(evt);
            el.dom7EventData = [];
            delete el.dom7EventData;
          }
        }
      }
      return this;
    }
    function transitionEnd(callback) {
      const dom = this;
      function fireCallBack(e) {
        if (e.target !== this) return;
        callback.call(this, e);
        dom.off("transitionend", fireCallBack);
      }
      if (callback) dom.on("transitionend", fireCallBack);
      return this;
    }
    function dom7_esm_outerWidth(includeMargins) {
      if (this.length > 0) {
        if (includeMargins) {
          const styles = this.styles();
          return this[0].offsetWidth + parseFloat(styles.getPropertyValue("margin-right")) + parseFloat(styles.getPropertyValue("margin-left"));
        }
        return this[0].offsetWidth;
      }
      return null;
    }
    function dom7_esm_outerHeight(includeMargins) {
      if (this.length > 0) {
        if (includeMargins) {
          const styles = this.styles();
          return this[0].offsetHeight + parseFloat(styles.getPropertyValue("margin-top")) + parseFloat(styles.getPropertyValue("margin-bottom"));
        }
        return this[0].offsetHeight;
      }
      return null;
    }
    function offset() {
      if (this.length > 0) {
        const window = ssr_window_esm_getWindow();
        const document = ssr_window_esm_getDocument();
        const el = this[0];
        const box = el.getBoundingClientRect();
        const body = document.body;
        const clientTop = el.clientTop || body.clientTop || 0;
        const clientLeft = el.clientLeft || body.clientLeft || 0;
        const scrollTop = el === window ? window.scrollY : el.scrollTop;
        const scrollLeft = el === window ? window.scrollX : el.scrollLeft;
        return {
          top: box.top + scrollTop - clientTop,
          left: box.left + scrollLeft - clientLeft
        };
      }
      return null;
    }
    function styles() {
      const window = ssr_window_esm_getWindow();
      if (this[0]) return window.getComputedStyle(this[0], null);
      return {};
    }
    function css(props, value) {
      const window = ssr_window_esm_getWindow();
      let i;
      if (1 === arguments.length) if ("string" === typeof props) {
        if (this[0]) return window.getComputedStyle(this[0], null).getPropertyValue(props);
      } else {
        for (i = 0; i < this.length; i += 1) for (const prop in props) this[i].style[prop] = props[prop];
        return this;
      }
      if (2 === arguments.length && "string" === typeof props) {
        for (i = 0; i < this.length; i += 1) this[i].style[props] = value;
        return this;
      }
      return this;
    }
    function each(callback) {
      if (!callback) return this;
      this.forEach(((el, index) => {
        callback.apply(el, [ el, index ]);
      }));
      return this;
    }
    function filter(callback) {
      const result = arrayFilter(this, callback);
      return dom7_esm_$(result);
    }
    function html(html) {
      if ("undefined" === typeof html) return this[0] ? this[0].innerHTML : null;
      for (let i = 0; i < this.length; i += 1) this[i].innerHTML = html;
      return this;
    }
    function dom7_esm_text(text) {
      if ("undefined" === typeof text) return this[0] ? this[0].textContent.trim() : null;
      for (let i = 0; i < this.length; i += 1) this[i].textContent = text;
      return this;
    }
    function is(selector) {
      const window = ssr_window_esm_getWindow();
      const document = ssr_window_esm_getDocument();
      const el = this[0];
      let compareWith;
      let i;
      if (!el || "undefined" === typeof selector) return false;
      if ("string" === typeof selector) {
        if (el.matches) return el.matches(selector);
        if (el.webkitMatchesSelector) return el.webkitMatchesSelector(selector);
        if (el.msMatchesSelector) return el.msMatchesSelector(selector);
        compareWith = dom7_esm_$(selector);
        for (i = 0; i < compareWith.length; i += 1) if (compareWith[i] === el) return true;
        return false;
      }
      if (selector === document) return el === document;
      if (selector === window) return el === window;
      if (selector.nodeType || selector instanceof Dom7) {
        compareWith = selector.nodeType ? [ selector ] : selector;
        for (i = 0; i < compareWith.length; i += 1) if (compareWith[i] === el) return true;
        return false;
      }
      return false;
    }
    function index() {
      let child = this[0];
      let i;
      if (child) {
        i = 0;
        while (null !== (child = child.previousSibling)) if (1 === child.nodeType) i += 1;
        return i;
      }
      return;
    }
    function eq(index) {
      if ("undefined" === typeof index) return this;
      const length = this.length;
      if (index > length - 1) return dom7_esm_$([]);
      if (index < 0) {
        const returnIndex = length + index;
        if (returnIndex < 0) return dom7_esm_$([]);
        return dom7_esm_$([ this[returnIndex] ]);
      }
      return dom7_esm_$([ this[index] ]);
    }
    function append(...els) {
      let newChild;
      const document = ssr_window_esm_getDocument();
      for (let k = 0; k < els.length; k += 1) {
        newChild = els[k];
        for (let i = 0; i < this.length; i += 1) if ("string" === typeof newChild) {
          const tempDiv = document.createElement("div");
          tempDiv.innerHTML = newChild;
          while (tempDiv.firstChild) this[i].appendChild(tempDiv.firstChild);
        } else if (newChild instanceof Dom7) for (let j = 0; j < newChild.length; j += 1) this[i].appendChild(newChild[j]); else this[i].appendChild(newChild);
      }
      return this;
    }
    function prepend(newChild) {
      const document = ssr_window_esm_getDocument();
      let i;
      let j;
      for (i = 0; i < this.length; i += 1) if ("string" === typeof newChild) {
        const tempDiv = document.createElement("div");
        tempDiv.innerHTML = newChild;
        for (j = tempDiv.childNodes.length - 1; j >= 0; j -= 1) this[i].insertBefore(tempDiv.childNodes[j], this[i].childNodes[0]);
      } else if (newChild instanceof Dom7) for (j = 0; j < newChild.length; j += 1) this[i].insertBefore(newChild[j], this[i].childNodes[0]); else this[i].insertBefore(newChild, this[i].childNodes[0]);
      return this;
    }
    function next(selector) {
      if (this.length > 0) {
        if (selector) {
          if (this[0].nextElementSibling && dom7_esm_$(this[0].nextElementSibling).is(selector)) return dom7_esm_$([ this[0].nextElementSibling ]);
          return dom7_esm_$([]);
        }
        if (this[0].nextElementSibling) return dom7_esm_$([ this[0].nextElementSibling ]);
        return dom7_esm_$([]);
      }
      return dom7_esm_$([]);
    }
    function nextAll(selector) {
      const nextEls = [];
      let el = this[0];
      if (!el) return dom7_esm_$([]);
      while (el.nextElementSibling) {
        const next = el.nextElementSibling;
        if (selector) {
          if (dom7_esm_$(next).is(selector)) nextEls.push(next);
        } else nextEls.push(next);
        el = next;
      }
      return dom7_esm_$(nextEls);
    }
    function prev(selector) {
      if (this.length > 0) {
        const el = this[0];
        if (selector) {
          if (el.previousElementSibling && dom7_esm_$(el.previousElementSibling).is(selector)) return dom7_esm_$([ el.previousElementSibling ]);
          return dom7_esm_$([]);
        }
        if (el.previousElementSibling) return dom7_esm_$([ el.previousElementSibling ]);
        return dom7_esm_$([]);
      }
      return dom7_esm_$([]);
    }
    function prevAll(selector) {
      const prevEls = [];
      let el = this[0];
      if (!el) return dom7_esm_$([]);
      while (el.previousElementSibling) {
        const prev = el.previousElementSibling;
        if (selector) {
          if (dom7_esm_$(prev).is(selector)) prevEls.push(prev);
        } else prevEls.push(prev);
        el = prev;
      }
      return dom7_esm_$(prevEls);
    }
    function dom7_esm_parent(selector) {
      const parents = [];
      for (let i = 0; i < this.length; i += 1) if (null !== this[i].parentNode) if (selector) {
        if (dom7_esm_$(this[i].parentNode).is(selector)) parents.push(this[i].parentNode);
      } else parents.push(this[i].parentNode);
      return dom7_esm_$(parents);
    }
    function parents(selector) {
      const parents = [];
      for (let i = 0; i < this.length; i += 1) {
        let parent = this[i].parentNode;
        while (parent) {
          if (selector) {
            if (dom7_esm_$(parent).is(selector)) parents.push(parent);
          } else parents.push(parent);
          parent = parent.parentNode;
        }
      }
      return dom7_esm_$(parents);
    }
    function closest(selector) {
      let closest = this;
      if ("undefined" === typeof selector) return dom7_esm_$([]);
      if (!closest.is(selector)) closest = closest.parents(selector).eq(0);
      return closest;
    }
    function find(selector) {
      const foundElements = [];
      for (let i = 0; i < this.length; i += 1) {
        const found = this[i].querySelectorAll(selector);
        for (let j = 0; j < found.length; j += 1) foundElements.push(found[j]);
      }
      return dom7_esm_$(foundElements);
    }
    function children(selector) {
      const children = [];
      for (let i = 0; i < this.length; i += 1) {
        const childNodes = this[i].children;
        for (let j = 0; j < childNodes.length; j += 1) if (!selector || dom7_esm_$(childNodes[j]).is(selector)) children.push(childNodes[j]);
      }
      return dom7_esm_$(children);
    }
    function remove() {
      for (let i = 0; i < this.length; i += 1) if (this[i].parentNode) this[i].parentNode.removeChild(this[i]);
      return this;
    }
    const noTrigger = "resize scroll".split(" ");
    function shortcut(name) {
      function eventHandler(...args) {
        if ("undefined" === typeof args[0]) {
          for (let i = 0; i < this.length; i += 1) if (noTrigger.indexOf(name) < 0) if (name in this[i]) this[i][name](); else dom7_esm_$(this[i]).trigger(name);
          return this;
        }
        return this.on(name, ...args);
      }
      return eventHandler;
    }
    shortcut("click");
    shortcut("blur");
    shortcut("focus");
    shortcut("focusin");
    shortcut("focusout");
    shortcut("keyup");
    shortcut("keydown");
    shortcut("keypress");
    shortcut("submit");
    shortcut("change");
    shortcut("mousedown");
    shortcut("mousemove");
    shortcut("mouseup");
    shortcut("mouseenter");
    shortcut("mouseleave");
    shortcut("mouseout");
    shortcut("mouseover");
    shortcut("touchstart");
    shortcut("touchend");
    shortcut("touchmove");
    shortcut("resize");
    shortcut("scroll");
    const Methods = {
      addClass: addClass,
      removeClass: removeClass,
      hasClass: hasClass,
      toggleClass: toggleClass,
      attr: attr,
      removeAttr: removeAttr,
      transform: transform,
      transition: transition,
      on: on,
      off: off,
      trigger: trigger,
      transitionEnd: transitionEnd,
      outerWidth: dom7_esm_outerWidth,
      outerHeight: dom7_esm_outerHeight,
      styles: styles,
      offset: offset,
      css: css,
      each: each,
      html: html,
      text: dom7_esm_text,
      is: is,
      index: index,
      eq: eq,
      append: append,
      prepend: prepend,
      next: next,
      nextAll: nextAll,
      prev: prev,
      prevAll: prevAll,
      parent: dom7_esm_parent,
      parents: parents,
      closest: closest,
      find: find,
      children: children,
      filter: filter,
      remove: remove
    };
    Object.keys(Methods).forEach((methodName => {
      Object.defineProperty(dom7_esm_$.fn, methodName, {
        value: Methods[methodName],
        writable: true
      });
    }));
    var dom = dom7_esm_$;
    function deleteProps(obj) {
      const object = obj;
      Object.keys(object).forEach((key => {
        try {
          object[key] = null;
        } catch (e) {}
        try {
          delete object[key];
        } catch (e) {}
      }));
    }
    function utils_nextTick(callback, delay) {
      if (void 0 === delay) delay = 0;
      return setTimeout(callback, delay);
    }
    function utils_now() {
      return Date.now();
    }
    function utils_getComputedStyle(el) {
      const window = ssr_window_esm_getWindow();
      let style;
      if (window.getComputedStyle) style = window.getComputedStyle(el, null);
      if (!style && el.currentStyle) style = el.currentStyle;
      if (!style) style = el.style;
      return style;
    }
    function utils_getTranslate(el, axis) {
      if (void 0 === axis) axis = "x";
      const window = ssr_window_esm_getWindow();
      let matrix;
      let curTransform;
      let transformMatrix;
      const curStyle = utils_getComputedStyle(el, null);
      if (window.WebKitCSSMatrix) {
        curTransform = curStyle.transform || curStyle.webkitTransform;
        if (curTransform.split(",").length > 6) curTransform = curTransform.split(", ").map((a => a.replace(",", "."))).join(", ");
        transformMatrix = new window.WebKitCSSMatrix("none" === curTransform ? "" : curTransform);
      } else {
        transformMatrix = curStyle.MozTransform || curStyle.OTransform || curStyle.MsTransform || curStyle.msTransform || curStyle.transform || curStyle.getPropertyValue("transform").replace("translate(", "matrix(1, 0, 0, 1,");
        matrix = transformMatrix.toString().split(",");
      }
      if ("x" === axis) if (window.WebKitCSSMatrix) curTransform = transformMatrix.m41; else if (16 === matrix.length) curTransform = parseFloat(matrix[12]); else curTransform = parseFloat(matrix[4]);
      if ("y" === axis) if (window.WebKitCSSMatrix) curTransform = transformMatrix.m42; else if (16 === matrix.length) curTransform = parseFloat(matrix[13]); else curTransform = parseFloat(matrix[5]);
      return curTransform || 0;
    }
    function utils_isObject(o) {
      return "object" === typeof o && null !== o && o.constructor && "Object" === Object.prototype.toString.call(o).slice(8, -1);
    }
    function isNode(node) {
      if ("undefined" !== typeof window && "undefined" !== typeof window.HTMLElement) return node instanceof HTMLElement;
      return node && (1 === node.nodeType || 11 === node.nodeType);
    }
    function utils_extend() {
      const to = Object(arguments.length <= 0 ? void 0 : arguments[0]);
      const noExtend = [ "__proto__", "constructor", "prototype" ];
      for (let i = 1; i < arguments.length; i += 1) {
        const nextSource = i < 0 || arguments.length <= i ? void 0 : arguments[i];
        if (void 0 !== nextSource && null !== nextSource && !isNode(nextSource)) {
          const keysArray = Object.keys(Object(nextSource)).filter((key => noExtend.indexOf(key) < 0));
          for (let nextIndex = 0, len = keysArray.length; nextIndex < len; nextIndex += 1) {
            const nextKey = keysArray[nextIndex];
            const desc = Object.getOwnPropertyDescriptor(nextSource, nextKey);
            if (void 0 !== desc && desc.enumerable) if (utils_isObject(to[nextKey]) && utils_isObject(nextSource[nextKey])) if (nextSource[nextKey].__swiper__) to[nextKey] = nextSource[nextKey]; else utils_extend(to[nextKey], nextSource[nextKey]); else if (!utils_isObject(to[nextKey]) && utils_isObject(nextSource[nextKey])) {
              to[nextKey] = {};
              if (nextSource[nextKey].__swiper__) to[nextKey] = nextSource[nextKey]; else utils_extend(to[nextKey], nextSource[nextKey]);
            } else to[nextKey] = nextSource[nextKey];
          }
        }
      }
      return to;
    }
    function utils_setCSSProperty(el, varName, varValue) {
      el.style.setProperty(varName, varValue);
    }
    function animateCSSModeScroll(_ref) {
      let {swiper: swiper, targetPosition: targetPosition, side: side} = _ref;
      const window = ssr_window_esm_getWindow();
      const startPosition = -swiper.translate;
      let startTime = null;
      let time;
      const duration = swiper.params.speed;
      swiper.wrapperEl.style.scrollSnapType = "none";
      window.cancelAnimationFrame(swiper.cssModeFrameID);
      const dir = targetPosition > startPosition ? "next" : "prev";
      const isOutOfBound = (current, target) => "next" === dir && current >= target || "prev" === dir && current <= target;
      const animate = () => {
        time = (new Date).getTime();
        if (null === startTime) startTime = time;
        const progress = Math.max(Math.min((time - startTime) / duration, 1), 0);
        const easeProgress = .5 - Math.cos(progress * Math.PI) / 2;
        let currentPosition = startPosition + easeProgress * (targetPosition - startPosition);
        if (isOutOfBound(currentPosition, targetPosition)) currentPosition = targetPosition;
        swiper.wrapperEl.scrollTo({
          [side]: currentPosition
        });
        if (isOutOfBound(currentPosition, targetPosition)) {
          swiper.wrapperEl.style.overflow = "hidden";
          swiper.wrapperEl.style.scrollSnapType = "";
          setTimeout((() => {
            swiper.wrapperEl.style.overflow = "";
            swiper.wrapperEl.scrollTo({
              [side]: currentPosition
            });
          }));
          window.cancelAnimationFrame(swiper.cssModeFrameID);
          return;
        }
        swiper.cssModeFrameID = window.requestAnimationFrame(animate);
      };
      animate();
    }
    let support;
    function calcSupport() {
      const window = ssr_window_esm_getWindow();
      const document = ssr_window_esm_getDocument();
      return {
        smoothScroll: document.documentElement && "scrollBehavior" in document.documentElement.style,
        touch: !!("ontouchstart" in window || window.DocumentTouch && document instanceof window.DocumentTouch),
        passiveListener: function checkPassiveListener() {
          let supportsPassive = false;
          try {
            const opts = Object.defineProperty({}, "passive", {
              get() {
                supportsPassive = true;
              }
            });
            window.addEventListener("testPassiveListener", null, opts);
          } catch (e) {}
          return supportsPassive;
        }(),
        gestures: function checkGestures() {
          return "ongesturestart" in window;
        }()
      };
    }
    function getSupport() {
      if (!support) support = calcSupport();
      return support;
    }
    let deviceCached;
    function calcDevice(_temp) {
      let {userAgent: userAgent} = void 0 === _temp ? {} : _temp;
      const support = getSupport();
      const window = ssr_window_esm_getWindow();
      const platform = window.navigator.platform;
      const ua = userAgent || window.navigator.userAgent;
      const device = {
        ios: false,
        android: false
      };
      const screenWidth = window.screen.width;
      const screenHeight = window.screen.height;
      const android = ua.match(/(Android);?[\s\/]+([\d.]+)?/);
      let ipad = ua.match(/(iPad).*OS\s([\d_]+)/);
      const ipod = ua.match(/(iPod)(.*OS\s([\d_]+))?/);
      const iphone = !ipad && ua.match(/(iPhone\sOS|iOS)\s([\d_]+)/);
      const windows = "Win32" === platform;
      let macos = "MacIntel" === platform;
      const iPadScreens = [ "1024x1366", "1366x1024", "834x1194", "1194x834", "834x1112", "1112x834", "768x1024", "1024x768", "820x1180", "1180x820", "810x1080", "1080x810" ];
      if (!ipad && macos && support.touch && iPadScreens.indexOf(`${screenWidth}x${screenHeight}`) >= 0) {
        ipad = ua.match(/(Version)\/([\d.]+)/);
        if (!ipad) ipad = [ 0, 1, "13_0_0" ];
        macos = false;
      }
      if (android && !windows) {
        device.os = "android";
        device.android = true;
      }
      if (ipad || iphone || ipod) {
        device.os = "ios";
        device.ios = true;
      }
      return device;
    }
    function getDevice(overrides) {
      if (void 0 === overrides) overrides = {};
      if (!deviceCached) deviceCached = calcDevice(overrides);
      return deviceCached;
    }
    let browser;
    function calcBrowser() {
      const window = ssr_window_esm_getWindow();
      function isSafari() {
        const ua = window.navigator.userAgent.toLowerCase();
        return ua.indexOf("safari") >= 0 && ua.indexOf("chrome") < 0 && ua.indexOf("android") < 0;
      }
      return {
        isSafari: isSafari(),
        isWebView: /(iPhone|iPod|iPad).*AppleWebKit(?!.*Safari)/i.test(window.navigator.userAgent)
      };
    }
    function getBrowser() {
      if (!browser) browser = calcBrowser();
      return browser;
    }
    function Resize(_ref) {
      let {swiper: swiper, on: on, emit: emit} = _ref;
      const window = ssr_window_esm_getWindow();
      let observer = null;
      let animationFrame = null;
      const resizeHandler = () => {
        if (!swiper || swiper.destroyed || !swiper.initialized) return;
        emit("beforeResize");
        emit("resize");
      };
      const createObserver = () => {
        if (!swiper || swiper.destroyed || !swiper.initialized) return;
        observer = new ResizeObserver((entries => {
          animationFrame = window.requestAnimationFrame((() => {
            const {width: width, height: height} = swiper;
            let newWidth = width;
            let newHeight = height;
            entries.forEach((_ref2 => {
              let {contentBoxSize: contentBoxSize, contentRect: contentRect, target: target} = _ref2;
              if (target && target !== swiper.el) return;
              newWidth = contentRect ? contentRect.width : (contentBoxSize[0] || contentBoxSize).inlineSize;
              newHeight = contentRect ? contentRect.height : (contentBoxSize[0] || contentBoxSize).blockSize;
            }));
            if (newWidth !== width || newHeight !== height) resizeHandler();
          }));
        }));
        observer.observe(swiper.el);
      };
      const removeObserver = () => {
        if (animationFrame) window.cancelAnimationFrame(animationFrame);
        if (observer && observer.unobserve && swiper.el) {
          observer.unobserve(swiper.el);
          observer = null;
        }
      };
      const orientationChangeHandler = () => {
        if (!swiper || swiper.destroyed || !swiper.initialized) return;
        emit("orientationchange");
      };
      on("init", (() => {
        if (swiper.params.resizeObserver && "undefined" !== typeof window.ResizeObserver) {
          createObserver();
          return;
        }
        window.addEventListener("resize", resizeHandler);
        window.addEventListener("orientationchange", orientationChangeHandler);
      }));
      on("destroy", (() => {
        removeObserver();
        window.removeEventListener("resize", resizeHandler);
        window.removeEventListener("orientationchange", orientationChangeHandler);
      }));
    }
    function Observer(_ref) {
      let {swiper: swiper, extendParams: extendParams, on: on, emit: emit} = _ref;
      const observers = [];
      const window = ssr_window_esm_getWindow();
      const attach = function(target, options) {
        if (void 0 === options) options = {};
        const ObserverFunc = window.MutationObserver || window.WebkitMutationObserver;
        const observer = new ObserverFunc((mutations => {
          if (1 === mutations.length) {
            emit("observerUpdate", mutations[0]);
            return;
          }
          const observerUpdate = function observerUpdate() {
            emit("observerUpdate", mutations[0]);
          };
          if (window.requestAnimationFrame) window.requestAnimationFrame(observerUpdate); else window.setTimeout(observerUpdate, 0);
        }));
        observer.observe(target, {
          attributes: "undefined" === typeof options.attributes ? true : options.attributes,
          childList: "undefined" === typeof options.childList ? true : options.childList,
          characterData: "undefined" === typeof options.characterData ? true : options.characterData
        });
        observers.push(observer);
      };
      const init = () => {
        if (!swiper.params.observer) return;
        if (swiper.params.observeParents) {
          const containerParents = swiper.$el.parents();
          for (let i = 0; i < containerParents.length; i += 1) attach(containerParents[i]);
        }
        attach(swiper.$el[0], {
          childList: swiper.params.observeSlideChildren
        });
        attach(swiper.$wrapperEl[0], {
          attributes: false
        });
      };
      const destroy = () => {
        observers.forEach((observer => {
          observer.disconnect();
        }));
        observers.splice(0, observers.length);
      };
      extendParams({
        observer: false,
        observeParents: false,
        observeSlideChildren: false
      });
      on("init", init);
      on("destroy", destroy);
    }
    var events_emitter = {
      on(events, handler, priority) {
        const self = this;
        if (!self.eventsListeners || self.destroyed) return self;
        if ("function" !== typeof handler) return self;
        const method = priority ? "unshift" : "push";
        events.split(" ").forEach((event => {
          if (!self.eventsListeners[event]) self.eventsListeners[event] = [];
          self.eventsListeners[event][method](handler);
        }));
        return self;
      },
      once(events, handler, priority) {
        const self = this;
        if (!self.eventsListeners || self.destroyed) return self;
        if ("function" !== typeof handler) return self;
        function onceHandler() {
          self.off(events, onceHandler);
          if (onceHandler.__emitterProxy) delete onceHandler.__emitterProxy;
          for (var _len = arguments.length, args = new Array(_len), _key = 0; _key < _len; _key++) args[_key] = arguments[_key];
          handler.apply(self, args);
        }
        onceHandler.__emitterProxy = handler;
        return self.on(events, onceHandler, priority);
      },
      onAny(handler, priority) {
        const self = this;
        if (!self.eventsListeners || self.destroyed) return self;
        if ("function" !== typeof handler) return self;
        const method = priority ? "unshift" : "push";
        if (self.eventsAnyListeners.indexOf(handler) < 0) self.eventsAnyListeners[method](handler);
        return self;
      },
      offAny(handler) {
        const self = this;
        if (!self.eventsListeners || self.destroyed) return self;
        if (!self.eventsAnyListeners) return self;
        const index = self.eventsAnyListeners.indexOf(handler);
        if (index >= 0) self.eventsAnyListeners.splice(index, 1);
        return self;
      },
      off(events, handler) {
        const self = this;
        if (!self.eventsListeners || self.destroyed) return self;
        if (!self.eventsListeners) return self;
        events.split(" ").forEach((event => {
          if ("undefined" === typeof handler) self.eventsListeners[event] = []; else if (self.eventsListeners[event]) self.eventsListeners[event].forEach(((eventHandler, index) => {
            if (eventHandler === handler || eventHandler.__emitterProxy && eventHandler.__emitterProxy === handler) self.eventsListeners[event].splice(index, 1);
          }));
        }));
        return self;
      },
      emit() {
        const self = this;
        if (!self.eventsListeners || self.destroyed) return self;
        if (!self.eventsListeners) return self;
        let events;
        let data;
        let context;
        for (var _len2 = arguments.length, args = new Array(_len2), _key2 = 0; _key2 < _len2; _key2++) args[_key2] = arguments[_key2];
        if ("string" === typeof args[0] || Array.isArray(args[0])) {
          events = args[0];
          data = args.slice(1, args.length);
          context = self;
        } else {
          events = args[0].events;
          data = args[0].data;
          context = args[0].context || self;
        }
        data.unshift(context);
        const eventsArray = Array.isArray(events) ? events : events.split(" ");
        eventsArray.forEach((event => {
          if (self.eventsAnyListeners && self.eventsAnyListeners.length) self.eventsAnyListeners.forEach((eventHandler => {
            eventHandler.apply(context, [ event, ...data ]);
          }));
          if (self.eventsListeners && self.eventsListeners[event]) self.eventsListeners[event].forEach((eventHandler => {
            eventHandler.apply(context, data);
          }));
        }));
        return self;
      }
    };
    function updateSize() {
      const swiper = this;
      let width;
      let height;
      const $el = swiper.$el;
      if ("undefined" !== typeof swiper.params.width && null !== swiper.params.width) width = swiper.params.width; else width = $el[0].clientWidth;
      if ("undefined" !== typeof swiper.params.height && null !== swiper.params.height) height = swiper.params.height; else height = $el[0].clientHeight;
      if (0 === width && swiper.isHorizontal() || 0 === height && swiper.isVertical()) return;
      width = width - parseInt($el.css("padding-left") || 0, 10) - parseInt($el.css("padding-right") || 0, 10);
      height = height - parseInt($el.css("padding-top") || 0, 10) - parseInt($el.css("padding-bottom") || 0, 10);
      if (Number.isNaN(width)) width = 0;
      if (Number.isNaN(height)) height = 0;
      Object.assign(swiper, {
        width: width,
        height: height,
        size: swiper.isHorizontal() ? width : height
      });
    }
    function updateSlides() {
      const swiper = this;
      function getDirectionLabel(property) {
        if (swiper.isHorizontal()) return property;
        return {
          width: "height",
          "margin-top": "margin-left",
          "margin-bottom ": "margin-right",
          "margin-left": "margin-top",
          "margin-right": "margin-bottom",
          "padding-left": "padding-top",
          "padding-right": "padding-bottom",
          marginRight: "marginBottom"
        }[property];
      }
      function getDirectionPropertyValue(node, label) {
        return parseFloat(node.getPropertyValue(getDirectionLabel(label)) || 0);
      }
      const params = swiper.params;
      const {$wrapperEl: $wrapperEl, size: swiperSize, rtlTranslate: rtl, wrongRTL: wrongRTL} = swiper;
      const isVirtual = swiper.virtual && params.virtual.enabled;
      const previousSlidesLength = isVirtual ? swiper.virtual.slides.length : swiper.slides.length;
      const slides = $wrapperEl.children(`.${swiper.params.slideClass}`);
      const slidesLength = isVirtual ? swiper.virtual.slides.length : slides.length;
      let snapGrid = [];
      const slidesGrid = [];
      const slidesSizesGrid = [];
      let offsetBefore = params.slidesOffsetBefore;
      if ("function" === typeof offsetBefore) offsetBefore = params.slidesOffsetBefore.call(swiper);
      let offsetAfter = params.slidesOffsetAfter;
      if ("function" === typeof offsetAfter) offsetAfter = params.slidesOffsetAfter.call(swiper);
      const previousSnapGridLength = swiper.snapGrid.length;
      const previousSlidesGridLength = swiper.slidesGrid.length;
      let spaceBetween = params.spaceBetween;
      let slidePosition = -offsetBefore;
      let prevSlideSize = 0;
      let index = 0;
      if ("undefined" === typeof swiperSize) return;
      if ("string" === typeof spaceBetween && spaceBetween.indexOf("%") >= 0) spaceBetween = parseFloat(spaceBetween.replace("%", "")) / 100 * swiperSize;
      swiper.virtualSize = -spaceBetween;
      if (rtl) slides.css({
        marginLeft: "",
        marginBottom: "",
        marginTop: ""
      }); else slides.css({
        marginRight: "",
        marginBottom: "",
        marginTop: ""
      });
      if (params.centeredSlides && params.cssMode) {
        utils_setCSSProperty(swiper.wrapperEl, "--swiper-centered-offset-before", "");
        utils_setCSSProperty(swiper.wrapperEl, "--swiper-centered-offset-after", "");
      }
      const gridEnabled = params.grid && params.grid.rows > 1 && swiper.grid;
      if (gridEnabled) swiper.grid.initSlides(slidesLength);
      let slideSize;
      const shouldResetSlideSize = "auto" === params.slidesPerView && params.breakpoints && Object.keys(params.breakpoints).filter((key => "undefined" !== typeof params.breakpoints[key].slidesPerView)).length > 0;
      for (let i = 0; i < slidesLength; i += 1) {
        slideSize = 0;
        const slide = slides.eq(i);
        if (gridEnabled) swiper.grid.updateSlide(i, slide, slidesLength, getDirectionLabel);
        if ("none" === slide.css("display")) continue;
        if ("auto" === params.slidesPerView) {
          if (shouldResetSlideSize) slides[i].style[getDirectionLabel("width")] = ``;
          const slideStyles = getComputedStyle(slide[0]);
          const currentTransform = slide[0].style.transform;
          const currentWebKitTransform = slide[0].style.webkitTransform;
          if (currentTransform) slide[0].style.transform = "none";
          if (currentWebKitTransform) slide[0].style.webkitTransform = "none";
          if (params.roundLengths) slideSize = swiper.isHorizontal() ? slide.outerWidth(true) : slide.outerHeight(true); else {
            const width = getDirectionPropertyValue(slideStyles, "width");
            const paddingLeft = getDirectionPropertyValue(slideStyles, "padding-left");
            const paddingRight = getDirectionPropertyValue(slideStyles, "padding-right");
            const marginLeft = getDirectionPropertyValue(slideStyles, "margin-left");
            const marginRight = getDirectionPropertyValue(slideStyles, "margin-right");
            const boxSizing = slideStyles.getPropertyValue("box-sizing");
            if (boxSizing && "border-box" === boxSizing) slideSize = width + marginLeft + marginRight; else {
              const {clientWidth: clientWidth, offsetWidth: offsetWidth} = slide[0];
              slideSize = width + paddingLeft + paddingRight + marginLeft + marginRight + (offsetWidth - clientWidth);
            }
          }
          if (currentTransform) slide[0].style.transform = currentTransform;
          if (currentWebKitTransform) slide[0].style.webkitTransform = currentWebKitTransform;
          if (params.roundLengths) slideSize = Math.floor(slideSize);
        } else {
          slideSize = (swiperSize - (params.slidesPerView - 1) * spaceBetween) / params.slidesPerView;
          if (params.roundLengths) slideSize = Math.floor(slideSize);
          if (slides[i]) slides[i].style[getDirectionLabel("width")] = `${slideSize}px`;
        }
        if (slides[i]) slides[i].swiperSlideSize = slideSize;
        slidesSizesGrid.push(slideSize);
        if (params.centeredSlides) {
          slidePosition = slidePosition + slideSize / 2 + prevSlideSize / 2 + spaceBetween;
          if (0 === prevSlideSize && 0 !== i) slidePosition = slidePosition - swiperSize / 2 - spaceBetween;
          if (0 === i) slidePosition = slidePosition - swiperSize / 2 - spaceBetween;
          if (Math.abs(slidePosition) < 1 / 1e3) slidePosition = 0;
          if (params.roundLengths) slidePosition = Math.floor(slidePosition);
          if (index % params.slidesPerGroup === 0) snapGrid.push(slidePosition);
          slidesGrid.push(slidePosition);
        } else {
          if (params.roundLengths) slidePosition = Math.floor(slidePosition);
          if ((index - Math.min(swiper.params.slidesPerGroupSkip, index)) % swiper.params.slidesPerGroup === 0) snapGrid.push(slidePosition);
          slidesGrid.push(slidePosition);
          slidePosition = slidePosition + slideSize + spaceBetween;
        }
        swiper.virtualSize += slideSize + spaceBetween;
        prevSlideSize = slideSize;
        index += 1;
      }
      swiper.virtualSize = Math.max(swiper.virtualSize, swiperSize) + offsetAfter;
      if (rtl && wrongRTL && ("slide" === params.effect || "coverflow" === params.effect)) $wrapperEl.css({
        width: `${swiper.virtualSize + params.spaceBetween}px`
      });
      if (params.setWrapperSize) $wrapperEl.css({
        [getDirectionLabel("width")]: `${swiper.virtualSize + params.spaceBetween}px`
      });
      if (gridEnabled) swiper.grid.updateWrapperSize(slideSize, snapGrid, getDirectionLabel);
      if (!params.centeredSlides) {
        const newSlidesGrid = [];
        for (let i = 0; i < snapGrid.length; i += 1) {
          let slidesGridItem = snapGrid[i];
          if (params.roundLengths) slidesGridItem = Math.floor(slidesGridItem);
          if (snapGrid[i] <= swiper.virtualSize - swiperSize) newSlidesGrid.push(slidesGridItem);
        }
        snapGrid = newSlidesGrid;
        if (Math.floor(swiper.virtualSize - swiperSize) - Math.floor(snapGrid[snapGrid.length - 1]) > 1) snapGrid.push(swiper.virtualSize - swiperSize);
      }
      if (0 === snapGrid.length) snapGrid = [ 0 ];
      if (0 !== params.spaceBetween) {
        const key = swiper.isHorizontal() && rtl ? "marginLeft" : getDirectionLabel("marginRight");
        slides.filter(((_, slideIndex) => {
          if (!params.cssMode) return true;
          if (slideIndex === slides.length - 1) return false;
          return true;
        })).css({
          [key]: `${spaceBetween}px`
        });
      }
      if (params.centeredSlides && params.centeredSlidesBounds) {
        let allSlidesSize = 0;
        slidesSizesGrid.forEach((slideSizeValue => {
          allSlidesSize += slideSizeValue + (params.spaceBetween ? params.spaceBetween : 0);
        }));
        allSlidesSize -= params.spaceBetween;
        const maxSnap = allSlidesSize - swiperSize;
        snapGrid = snapGrid.map((snap => {
          if (snap < 0) return -offsetBefore;
          if (snap > maxSnap) return maxSnap + offsetAfter;
          return snap;
        }));
      }
      if (params.centerInsufficientSlides) {
        let allSlidesSize = 0;
        slidesSizesGrid.forEach((slideSizeValue => {
          allSlidesSize += slideSizeValue + (params.spaceBetween ? params.spaceBetween : 0);
        }));
        allSlidesSize -= params.spaceBetween;
        if (allSlidesSize < swiperSize) {
          const allSlidesOffset = (swiperSize - allSlidesSize) / 2;
          snapGrid.forEach(((snap, snapIndex) => {
            snapGrid[snapIndex] = snap - allSlidesOffset;
          }));
          slidesGrid.forEach(((snap, snapIndex) => {
            slidesGrid[snapIndex] = snap + allSlidesOffset;
          }));
        }
      }
      Object.assign(swiper, {
        slides: slides,
        snapGrid: snapGrid,
        slidesGrid: slidesGrid,
        slidesSizesGrid: slidesSizesGrid
      });
      if (params.centeredSlides && params.cssMode && !params.centeredSlidesBounds) {
        utils_setCSSProperty(swiper.wrapperEl, "--swiper-centered-offset-before", `${-snapGrid[0]}px`);
        utils_setCSSProperty(swiper.wrapperEl, "--swiper-centered-offset-after", `${swiper.size / 2 - slidesSizesGrid[slidesSizesGrid.length - 1] / 2}px`);
        const addToSnapGrid = -swiper.snapGrid[0];
        const addToSlidesGrid = -swiper.slidesGrid[0];
        swiper.snapGrid = swiper.snapGrid.map((v => v + addToSnapGrid));
        swiper.slidesGrid = swiper.slidesGrid.map((v => v + addToSlidesGrid));
      }
      if (slidesLength !== previousSlidesLength) swiper.emit("slidesLengthChange");
      if (snapGrid.length !== previousSnapGridLength) {
        if (swiper.params.watchOverflow) swiper.checkOverflow();
        swiper.emit("snapGridLengthChange");
      }
      if (slidesGrid.length !== previousSlidesGridLength) swiper.emit("slidesGridLengthChange");
      if (params.watchSlidesProgress) swiper.updateSlidesOffset();
      if (!isVirtual && !params.cssMode && ("slide" === params.effect || "fade" === params.effect)) {
        const backFaceHiddenClass = `${params.containerModifierClass}backface-hidden`;
        const hasClassBackfaceClassAdded = swiper.$el.hasClass(backFaceHiddenClass);
        if (slidesLength <= params.maxBackfaceHiddenSlides) {
          if (!hasClassBackfaceClassAdded) swiper.$el.addClass(backFaceHiddenClass);
        } else if (hasClassBackfaceClassAdded) swiper.$el.removeClass(backFaceHiddenClass);
      }
    }
    function updateAutoHeight(speed) {
      const swiper = this;
      const activeSlides = [];
      const isVirtual = swiper.virtual && swiper.params.virtual.enabled;
      let newHeight = 0;
      let i;
      if ("number" === typeof speed) swiper.setTransition(speed); else if (true === speed) swiper.setTransition(swiper.params.speed);
      const getSlideByIndex = index => {
        if (isVirtual) return swiper.slides.filter((el => parseInt(el.getAttribute("data-swiper-slide-index"), 10) === index))[0];
        return swiper.slides.eq(index)[0];
      };
      if ("auto" !== swiper.params.slidesPerView && swiper.params.slidesPerView > 1) if (swiper.params.centeredSlides) swiper.visibleSlides.each((slide => {
        activeSlides.push(slide);
      })); else for (i = 0; i < Math.ceil(swiper.params.slidesPerView); i += 1) {
        const index = swiper.activeIndex + i;
        if (index > swiper.slides.length && !isVirtual) break;
        activeSlides.push(getSlideByIndex(index));
      } else activeSlides.push(getSlideByIndex(swiper.activeIndex));
      for (i = 0; i < activeSlides.length; i += 1) if ("undefined" !== typeof activeSlides[i]) {
        const height = activeSlides[i].offsetHeight;
        newHeight = height > newHeight ? height : newHeight;
      }
      if (newHeight || 0 === newHeight) swiper.$wrapperEl.css("height", `${newHeight}px`);
    }
    function updateSlidesOffset() {
      const swiper = this;
      const slides = swiper.slides;
      for (let i = 0; i < slides.length; i += 1) slides[i].swiperSlideOffset = swiper.isHorizontal() ? slides[i].offsetLeft : slides[i].offsetTop;
    }
    function updateSlidesProgress(translate) {
      if (void 0 === translate) translate = this && this.translate || 0;
      const swiper = this;
      const params = swiper.params;
      const {slides: slides, rtlTranslate: rtl, snapGrid: snapGrid} = swiper;
      if (0 === slides.length) return;
      if ("undefined" === typeof slides[0].swiperSlideOffset) swiper.updateSlidesOffset();
      let offsetCenter = -translate;
      if (rtl) offsetCenter = translate;
      slides.removeClass(params.slideVisibleClass);
      swiper.visibleSlidesIndexes = [];
      swiper.visibleSlides = [];
      for (let i = 0; i < slides.length; i += 1) {
        const slide = slides[i];
        let slideOffset = slide.swiperSlideOffset;
        if (params.cssMode && params.centeredSlides) slideOffset -= slides[0].swiperSlideOffset;
        const slideProgress = (offsetCenter + (params.centeredSlides ? swiper.minTranslate() : 0) - slideOffset) / (slide.swiperSlideSize + params.spaceBetween);
        const originalSlideProgress = (offsetCenter - snapGrid[0] + (params.centeredSlides ? swiper.minTranslate() : 0) - slideOffset) / (slide.swiperSlideSize + params.spaceBetween);
        const slideBefore = -(offsetCenter - slideOffset);
        const slideAfter = slideBefore + swiper.slidesSizesGrid[i];
        const isVisible = slideBefore >= 0 && slideBefore < swiper.size - 1 || slideAfter > 1 && slideAfter <= swiper.size || slideBefore <= 0 && slideAfter >= swiper.size;
        if (isVisible) {
          swiper.visibleSlides.push(slide);
          swiper.visibleSlidesIndexes.push(i);
          slides.eq(i).addClass(params.slideVisibleClass);
        }
        slide.progress = rtl ? -slideProgress : slideProgress;
        slide.originalProgress = rtl ? -originalSlideProgress : originalSlideProgress;
      }
      swiper.visibleSlides = dom(swiper.visibleSlides);
    }
    function updateProgress(translate) {
      const swiper = this;
      if ("undefined" === typeof translate) {
        const multiplier = swiper.rtlTranslate ? -1 : 1;
        translate = swiper && swiper.translate && swiper.translate * multiplier || 0;
      }
      const params = swiper.params;
      const translatesDiff = swiper.maxTranslate() - swiper.minTranslate();
      let {progress: progress, isBeginning: isBeginning, isEnd: isEnd} = swiper;
      const wasBeginning = isBeginning;
      const wasEnd = isEnd;
      if (0 === translatesDiff) {
        progress = 0;
        isBeginning = true;
        isEnd = true;
      } else {
        progress = (translate - swiper.minTranslate()) / translatesDiff;
        isBeginning = progress <= 0;
        isEnd = progress >= 1;
      }
      Object.assign(swiper, {
        progress: progress,
        isBeginning: isBeginning,
        isEnd: isEnd
      });
      if (params.watchSlidesProgress || params.centeredSlides && params.autoHeight) swiper.updateSlidesProgress(translate);
      if (isBeginning && !wasBeginning) swiper.emit("reachBeginning toEdge");
      if (isEnd && !wasEnd) swiper.emit("reachEnd toEdge");
      if (wasBeginning && !isBeginning || wasEnd && !isEnd) swiper.emit("fromEdge");
      swiper.emit("progress", progress);
    }
    function updateSlidesClasses() {
      const swiper = this;
      const {slides: slides, params: params, $wrapperEl: $wrapperEl, activeIndex: activeIndex, realIndex: realIndex} = swiper;
      const isVirtual = swiper.virtual && params.virtual.enabled;
      slides.removeClass(`${params.slideActiveClass} ${params.slideNextClass} ${params.slidePrevClass} ${params.slideDuplicateActiveClass} ${params.slideDuplicateNextClass} ${params.slideDuplicatePrevClass}`);
      let activeSlide;
      if (isVirtual) activeSlide = swiper.$wrapperEl.find(`.${params.slideClass}[data-swiper-slide-index="${activeIndex}"]`); else activeSlide = slides.eq(activeIndex);
      activeSlide.addClass(params.slideActiveClass);
      if (params.loop) if (activeSlide.hasClass(params.slideDuplicateClass)) $wrapperEl.children(`.${params.slideClass}:not(.${params.slideDuplicateClass})[data-swiper-slide-index="${realIndex}"]`).addClass(params.slideDuplicateActiveClass); else $wrapperEl.children(`.${params.slideClass}.${params.slideDuplicateClass}[data-swiper-slide-index="${realIndex}"]`).addClass(params.slideDuplicateActiveClass);
      let nextSlide = activeSlide.nextAll(`.${params.slideClass}`).eq(0).addClass(params.slideNextClass);
      if (params.loop && 0 === nextSlide.length) {
        nextSlide = slides.eq(0);
        nextSlide.addClass(params.slideNextClass);
      }
      let prevSlide = activeSlide.prevAll(`.${params.slideClass}`).eq(0).addClass(params.slidePrevClass);
      if (params.loop && 0 === prevSlide.length) {
        prevSlide = slides.eq(-1);
        prevSlide.addClass(params.slidePrevClass);
      }
      if (params.loop) {
        if (nextSlide.hasClass(params.slideDuplicateClass)) $wrapperEl.children(`.${params.slideClass}:not(.${params.slideDuplicateClass})[data-swiper-slide-index="${nextSlide.attr("data-swiper-slide-index")}"]`).addClass(params.slideDuplicateNextClass); else $wrapperEl.children(`.${params.slideClass}.${params.slideDuplicateClass}[data-swiper-slide-index="${nextSlide.attr("data-swiper-slide-index")}"]`).addClass(params.slideDuplicateNextClass);
        if (prevSlide.hasClass(params.slideDuplicateClass)) $wrapperEl.children(`.${params.slideClass}:not(.${params.slideDuplicateClass})[data-swiper-slide-index="${prevSlide.attr("data-swiper-slide-index")}"]`).addClass(params.slideDuplicatePrevClass); else $wrapperEl.children(`.${params.slideClass}.${params.slideDuplicateClass}[data-swiper-slide-index="${prevSlide.attr("data-swiper-slide-index")}"]`).addClass(params.slideDuplicatePrevClass);
      }
      swiper.emitSlidesClasses();
    }
    function updateActiveIndex(newActiveIndex) {
      const swiper = this;
      const translate = swiper.rtlTranslate ? swiper.translate : -swiper.translate;
      const {slidesGrid: slidesGrid, snapGrid: snapGrid, params: params, activeIndex: previousIndex, realIndex: previousRealIndex, snapIndex: previousSnapIndex} = swiper;
      let activeIndex = newActiveIndex;
      let snapIndex;
      if ("undefined" === typeof activeIndex) {
        for (let i = 0; i < slidesGrid.length; i += 1) if ("undefined" !== typeof slidesGrid[i + 1]) {
          if (translate >= slidesGrid[i] && translate < slidesGrid[i + 1] - (slidesGrid[i + 1] - slidesGrid[i]) / 2) activeIndex = i; else if (translate >= slidesGrid[i] && translate < slidesGrid[i + 1]) activeIndex = i + 1;
        } else if (translate >= slidesGrid[i]) activeIndex = i;
        if (params.normalizeSlideIndex) if (activeIndex < 0 || "undefined" === typeof activeIndex) activeIndex = 0;
      }
      if (snapGrid.indexOf(translate) >= 0) snapIndex = snapGrid.indexOf(translate); else {
        const skip = Math.min(params.slidesPerGroupSkip, activeIndex);
        snapIndex = skip + Math.floor((activeIndex - skip) / params.slidesPerGroup);
      }
      if (snapIndex >= snapGrid.length) snapIndex = snapGrid.length - 1;
      if (activeIndex === previousIndex) {
        if (snapIndex !== previousSnapIndex) {
          swiper.snapIndex = snapIndex;
          swiper.emit("snapIndexChange");
        }
        return;
      }
      const realIndex = parseInt(swiper.slides.eq(activeIndex).attr("data-swiper-slide-index") || activeIndex, 10);
      Object.assign(swiper, {
        snapIndex: snapIndex,
        realIndex: realIndex,
        previousIndex: previousIndex,
        activeIndex: activeIndex
      });
      swiper.emit("activeIndexChange");
      swiper.emit("snapIndexChange");
      if (previousRealIndex !== realIndex) swiper.emit("realIndexChange");
      if (swiper.initialized || swiper.params.runCallbacksOnInit) swiper.emit("slideChange");
    }
    function updateClickedSlide(e) {
      const swiper = this;
      const params = swiper.params;
      const slide = dom(e).closest(`.${params.slideClass}`)[0];
      let slideFound = false;
      let slideIndex;
      if (slide) for (let i = 0; i < swiper.slides.length; i += 1) if (swiper.slides[i] === slide) {
        slideFound = true;
        slideIndex = i;
        break;
      }
      if (slide && slideFound) {
        swiper.clickedSlide = slide;
        if (swiper.virtual && swiper.params.virtual.enabled) swiper.clickedIndex = parseInt(dom(slide).attr("data-swiper-slide-index"), 10); else swiper.clickedIndex = slideIndex;
      } else {
        swiper.clickedSlide = void 0;
        swiper.clickedIndex = void 0;
        return;
      }
      if (params.slideToClickedSlide && void 0 !== swiper.clickedIndex && swiper.clickedIndex !== swiper.activeIndex) swiper.slideToClickedSlide();
    }
    var update = {
      updateSize: updateSize,
      updateSlides: updateSlides,
      updateAutoHeight: updateAutoHeight,
      updateSlidesOffset: updateSlidesOffset,
      updateSlidesProgress: updateSlidesProgress,
      updateProgress: updateProgress,
      updateSlidesClasses: updateSlidesClasses,
      updateActiveIndex: updateActiveIndex,
      updateClickedSlide: updateClickedSlide
    };
    function getSwiperTranslate(axis) {
      if (void 0 === axis) axis = this.isHorizontal() ? "x" : "y";
      const swiper = this;
      const {params: params, rtlTranslate: rtl, translate: translate, $wrapperEl: $wrapperEl} = swiper;
      if (params.virtualTranslate) return rtl ? -translate : translate;
      if (params.cssMode) return translate;
      let currentTranslate = utils_getTranslate($wrapperEl[0], axis);
      if (rtl) currentTranslate = -currentTranslate;
      return currentTranslate || 0;
    }
    function setTranslate(translate, byController) {
      const swiper = this;
      const {rtlTranslate: rtl, params: params, $wrapperEl: $wrapperEl, wrapperEl: wrapperEl, progress: progress} = swiper;
      let x = 0;
      let y = 0;
      const z = 0;
      if (swiper.isHorizontal()) x = rtl ? -translate : translate; else y = translate;
      if (params.roundLengths) {
        x = Math.floor(x);
        y = Math.floor(y);
      }
      if (params.cssMode) wrapperEl[swiper.isHorizontal() ? "scrollLeft" : "scrollTop"] = swiper.isHorizontal() ? -x : -y; else if (!params.virtualTranslate) $wrapperEl.transform(`translate3d(${x}px, ${y}px, ${z}px)`);
      swiper.previousTranslate = swiper.translate;
      swiper.translate = swiper.isHorizontal() ? x : y;
      let newProgress;
      const translatesDiff = swiper.maxTranslate() - swiper.minTranslate();
      if (0 === translatesDiff) newProgress = 0; else newProgress = (translate - swiper.minTranslate()) / translatesDiff;
      if (newProgress !== progress) swiper.updateProgress(translate);
      swiper.emit("setTranslate", swiper.translate, byController);
    }
    function minTranslate() {
      return -this.snapGrid[0];
    }
    function maxTranslate() {
      return -this.snapGrid[this.snapGrid.length - 1];
    }
    function translateTo(translate, speed, runCallbacks, translateBounds, internal) {
      if (void 0 === translate) translate = 0;
      if (void 0 === speed) speed = this.params.speed;
      if (void 0 === runCallbacks) runCallbacks = true;
      if (void 0 === translateBounds) translateBounds = true;
      const swiper = this;
      const {params: params, wrapperEl: wrapperEl} = swiper;
      if (swiper.animating && params.preventInteractionOnTransition) return false;
      const minTranslate = swiper.minTranslate();
      const maxTranslate = swiper.maxTranslate();
      let newTranslate;
      if (translateBounds && translate > minTranslate) newTranslate = minTranslate; else if (translateBounds && translate < maxTranslate) newTranslate = maxTranslate; else newTranslate = translate;
      swiper.updateProgress(newTranslate);
      if (params.cssMode) {
        const isH = swiper.isHorizontal();
        if (0 === speed) wrapperEl[isH ? "scrollLeft" : "scrollTop"] = -newTranslate; else {
          if (!swiper.support.smoothScroll) {
            animateCSSModeScroll({
              swiper: swiper,
              targetPosition: -newTranslate,
              side: isH ? "left" : "top"
            });
            return true;
          }
          wrapperEl.scrollTo({
            [isH ? "left" : "top"]: -newTranslate,
            behavior: "smooth"
          });
        }
        return true;
      }
      if (0 === speed) {
        swiper.setTransition(0);
        swiper.setTranslate(newTranslate);
        if (runCallbacks) {
          swiper.emit("beforeTransitionStart", speed, internal);
          swiper.emit("transitionEnd");
        }
      } else {
        swiper.setTransition(speed);
        swiper.setTranslate(newTranslate);
        if (runCallbacks) {
          swiper.emit("beforeTransitionStart", speed, internal);
          swiper.emit("transitionStart");
        }
        if (!swiper.animating) {
          swiper.animating = true;
          if (!swiper.onTranslateToWrapperTransitionEnd) swiper.onTranslateToWrapperTransitionEnd = function transitionEnd(e) {
            if (!swiper || swiper.destroyed) return;
            if (e.target !== this) return;
            swiper.$wrapperEl[0].removeEventListener("transitionend", swiper.onTranslateToWrapperTransitionEnd);
            swiper.$wrapperEl[0].removeEventListener("webkitTransitionEnd", swiper.onTranslateToWrapperTransitionEnd);
            swiper.onTranslateToWrapperTransitionEnd = null;
            delete swiper.onTranslateToWrapperTransitionEnd;
            if (runCallbacks) swiper.emit("transitionEnd");
          };
          swiper.$wrapperEl[0].addEventListener("transitionend", swiper.onTranslateToWrapperTransitionEnd);
          swiper.$wrapperEl[0].addEventListener("webkitTransitionEnd", swiper.onTranslateToWrapperTransitionEnd);
        }
      }
      return true;
    }
    var translate = {
      getTranslate: getSwiperTranslate,
      setTranslate: setTranslate,
      minTranslate: minTranslate,
      maxTranslate: maxTranslate,
      translateTo: translateTo
    };
    function setTransition(duration, byController) {
      const swiper = this;
      if (!swiper.params.cssMode) swiper.$wrapperEl.transition(duration);
      swiper.emit("setTransition", duration, byController);
    }
    function transitionEmit(_ref) {
      let {swiper: swiper, runCallbacks: runCallbacks, direction: direction, step: step} = _ref;
      const {activeIndex: activeIndex, previousIndex: previousIndex} = swiper;
      let dir = direction;
      if (!dir) if (activeIndex > previousIndex) dir = "next"; else if (activeIndex < previousIndex) dir = "prev"; else dir = "reset";
      swiper.emit(`transition${step}`);
      if (runCallbacks && activeIndex !== previousIndex) {
        if ("reset" === dir) {
          swiper.emit(`slideResetTransition${step}`);
          return;
        }
        swiper.emit(`slideChangeTransition${step}`);
        if ("next" === dir) swiper.emit(`slideNextTransition${step}`); else swiper.emit(`slidePrevTransition${step}`);
      }
    }
    function transitionStart(runCallbacks, direction) {
      if (void 0 === runCallbacks) runCallbacks = true;
      const swiper = this;
      const {params: params} = swiper;
      if (params.cssMode) return;
      if (params.autoHeight) swiper.updateAutoHeight();
      transitionEmit({
        swiper: swiper,
        runCallbacks: runCallbacks,
        direction: direction,
        step: "Start"
      });
    }
    function transitionEnd_transitionEnd(runCallbacks, direction) {
      if (void 0 === runCallbacks) runCallbacks = true;
      const swiper = this;
      const {params: params} = swiper;
      swiper.animating = false;
      if (params.cssMode) return;
      swiper.setTransition(0);
      transitionEmit({
        swiper: swiper,
        runCallbacks: runCallbacks,
        direction: direction,
        step: "End"
      });
    }
    var core_transition = {
      setTransition: setTransition,
      transitionStart: transitionStart,
      transitionEnd: transitionEnd_transitionEnd
    };
    function slideTo(index, speed, runCallbacks, internal, initial) {
      if (void 0 === index) index = 0;
      if (void 0 === speed) speed = this.params.speed;
      if (void 0 === runCallbacks) runCallbacks = true;
      if ("number" !== typeof index && "string" !== typeof index) throw new Error(`The 'index' argument cannot have type other than 'number' or 'string'. [${typeof index}] given.`);
      if ("string" === typeof index) {
        const indexAsNumber = parseInt(index, 10);
        const isValidNumber = isFinite(indexAsNumber);
        if (!isValidNumber) throw new Error(`The passed-in 'index' (string) couldn't be converted to 'number'. [${index}] given.`);
        index = indexAsNumber;
      }
      const swiper = this;
      let slideIndex = index;
      if (slideIndex < 0) slideIndex = 0;
      const {params: params, snapGrid: snapGrid, slidesGrid: slidesGrid, previousIndex: previousIndex, activeIndex: activeIndex, rtlTranslate: rtl, wrapperEl: wrapperEl, enabled: enabled} = swiper;
      if (swiper.animating && params.preventInteractionOnTransition || !enabled && !internal && !initial) return false;
      const skip = Math.min(swiper.params.slidesPerGroupSkip, slideIndex);
      let snapIndex = skip + Math.floor((slideIndex - skip) / swiper.params.slidesPerGroup);
      if (snapIndex >= snapGrid.length) snapIndex = snapGrid.length - 1;
      if ((activeIndex || params.initialSlide || 0) === (previousIndex || 0) && runCallbacks) swiper.emit("beforeSlideChangeStart");
      const translate = -snapGrid[snapIndex];
      swiper.updateProgress(translate);
      if (params.normalizeSlideIndex) for (let i = 0; i < slidesGrid.length; i += 1) {
        const normalizedTranslate = -Math.floor(100 * translate);
        const normalizedGrid = Math.floor(100 * slidesGrid[i]);
        const normalizedGridNext = Math.floor(100 * slidesGrid[i + 1]);
        if ("undefined" !== typeof slidesGrid[i + 1]) {
          if (normalizedTranslate >= normalizedGrid && normalizedTranslate < normalizedGridNext - (normalizedGridNext - normalizedGrid) / 2) slideIndex = i; else if (normalizedTranslate >= normalizedGrid && normalizedTranslate < normalizedGridNext) slideIndex = i + 1;
        } else if (normalizedTranslate >= normalizedGrid) slideIndex = i;
      }
      if (swiper.initialized && slideIndex !== activeIndex) {
        if (!swiper.allowSlideNext && translate < swiper.translate && translate < swiper.minTranslate()) return false;
        if (!swiper.allowSlidePrev && translate > swiper.translate && translate > swiper.maxTranslate()) if ((activeIndex || 0) !== slideIndex) return false;
      }
      let direction;
      if (slideIndex > activeIndex) direction = "next"; else if (slideIndex < activeIndex) direction = "prev"; else direction = "reset";
      if (rtl && -translate === swiper.translate || !rtl && translate === swiper.translate) {
        swiper.updateActiveIndex(slideIndex);
        if (params.autoHeight) swiper.updateAutoHeight();
        swiper.updateSlidesClasses();
        if ("slide" !== params.effect) swiper.setTranslate(translate);
        if ("reset" !== direction) {
          swiper.transitionStart(runCallbacks, direction);
          swiper.transitionEnd(runCallbacks, direction);
        }
        return false;
      }
      if (params.cssMode) {
        const isH = swiper.isHorizontal();
        const t = rtl ? translate : -translate;
        if (0 === speed) {
          const isVirtual = swiper.virtual && swiper.params.virtual.enabled;
          if (isVirtual) {
            swiper.wrapperEl.style.scrollSnapType = "none";
            swiper._immediateVirtual = true;
          }
          wrapperEl[isH ? "scrollLeft" : "scrollTop"] = t;
          if (isVirtual) requestAnimationFrame((() => {
            swiper.wrapperEl.style.scrollSnapType = "";
            swiper._swiperImmediateVirtual = false;
          }));
        } else {
          if (!swiper.support.smoothScroll) {
            animateCSSModeScroll({
              swiper: swiper,
              targetPosition: t,
              side: isH ? "left" : "top"
            });
            return true;
          }
          wrapperEl.scrollTo({
            [isH ? "left" : "top"]: t,
            behavior: "smooth"
          });
        }
        return true;
      }
      swiper.setTransition(speed);
      swiper.setTranslate(translate);
      swiper.updateActiveIndex(slideIndex);
      swiper.updateSlidesClasses();
      swiper.emit("beforeTransitionStart", speed, internal);
      swiper.transitionStart(runCallbacks, direction);
      if (0 === speed) swiper.transitionEnd(runCallbacks, direction); else if (!swiper.animating) {
        swiper.animating = true;
        if (!swiper.onSlideToWrapperTransitionEnd) swiper.onSlideToWrapperTransitionEnd = function transitionEnd(e) {
          if (!swiper || swiper.destroyed) return;
          if (e.target !== this) return;
          swiper.$wrapperEl[0].removeEventListener("transitionend", swiper.onSlideToWrapperTransitionEnd);
          swiper.$wrapperEl[0].removeEventListener("webkitTransitionEnd", swiper.onSlideToWrapperTransitionEnd);
          swiper.onSlideToWrapperTransitionEnd = null;
          delete swiper.onSlideToWrapperTransitionEnd;
          swiper.transitionEnd(runCallbacks, direction);
        };
        swiper.$wrapperEl[0].addEventListener("transitionend", swiper.onSlideToWrapperTransitionEnd);
        swiper.$wrapperEl[0].addEventListener("webkitTransitionEnd", swiper.onSlideToWrapperTransitionEnd);
      }
      return true;
    }
    function slideToLoop(index, speed, runCallbacks, internal) {
      if (void 0 === index) index = 0;
      if (void 0 === speed) speed = this.params.speed;
      if (void 0 === runCallbacks) runCallbacks = true;
      const swiper = this;
      let newIndex = index;
      if (swiper.params.loop) newIndex += swiper.loopedSlides;
      return swiper.slideTo(newIndex, speed, runCallbacks, internal);
    }
    function slideNext(speed, runCallbacks, internal) {
      if (void 0 === speed) speed = this.params.speed;
      if (void 0 === runCallbacks) runCallbacks = true;
      const swiper = this;
      const {animating: animating, enabled: enabled, params: params} = swiper;
      if (!enabled) return swiper;
      let perGroup = params.slidesPerGroup;
      if ("auto" === params.slidesPerView && 1 === params.slidesPerGroup && params.slidesPerGroupAuto) perGroup = Math.max(swiper.slidesPerViewDynamic("current", true), 1);
      const increment = swiper.activeIndex < params.slidesPerGroupSkip ? 1 : perGroup;
      if (params.loop) {
        if (animating && params.loopPreventsSlide) return false;
        swiper.loopFix();
        swiper._clientLeft = swiper.$wrapperEl[0].clientLeft;
      }
      if (params.rewind && swiper.isEnd) return swiper.slideTo(0, speed, runCallbacks, internal);
      return swiper.slideTo(swiper.activeIndex + increment, speed, runCallbacks, internal);
    }
    function slidePrev(speed, runCallbacks, internal) {
      if (void 0 === speed) speed = this.params.speed;
      if (void 0 === runCallbacks) runCallbacks = true;
      const swiper = this;
      const {params: params, animating: animating, snapGrid: snapGrid, slidesGrid: slidesGrid, rtlTranslate: rtlTranslate, enabled: enabled} = swiper;
      if (!enabled) return swiper;
      if (params.loop) {
        if (animating && params.loopPreventsSlide) return false;
        swiper.loopFix();
        swiper._clientLeft = swiper.$wrapperEl[0].clientLeft;
      }
      const translate = rtlTranslate ? swiper.translate : -swiper.translate;
      function normalize(val) {
        if (val < 0) return -Math.floor(Math.abs(val));
        return Math.floor(val);
      }
      const normalizedTranslate = normalize(translate);
      const normalizedSnapGrid = snapGrid.map((val => normalize(val)));
      let prevSnap = snapGrid[normalizedSnapGrid.indexOf(normalizedTranslate) - 1];
      if ("undefined" === typeof prevSnap && params.cssMode) {
        let prevSnapIndex;
        snapGrid.forEach(((snap, snapIndex) => {
          if (normalizedTranslate >= snap) prevSnapIndex = snapIndex;
        }));
        if ("undefined" !== typeof prevSnapIndex) prevSnap = snapGrid[prevSnapIndex > 0 ? prevSnapIndex - 1 : prevSnapIndex];
      }
      let prevIndex = 0;
      if ("undefined" !== typeof prevSnap) {
        prevIndex = slidesGrid.indexOf(prevSnap);
        if (prevIndex < 0) prevIndex = swiper.activeIndex - 1;
        if ("auto" === params.slidesPerView && 1 === params.slidesPerGroup && params.slidesPerGroupAuto) {
          prevIndex = prevIndex - swiper.slidesPerViewDynamic("previous", true) + 1;
          prevIndex = Math.max(prevIndex, 0);
        }
      }
      if (params.rewind && swiper.isBeginning) {
        const lastIndex = swiper.params.virtual && swiper.params.virtual.enabled && swiper.virtual ? swiper.virtual.slides.length - 1 : swiper.slides.length - 1;
        return swiper.slideTo(lastIndex, speed, runCallbacks, internal);
      }
      return swiper.slideTo(prevIndex, speed, runCallbacks, internal);
    }
    function slideReset(speed, runCallbacks, internal) {
      if (void 0 === speed) speed = this.params.speed;
      if (void 0 === runCallbacks) runCallbacks = true;
      const swiper = this;
      return swiper.slideTo(swiper.activeIndex, speed, runCallbacks, internal);
    }
    function slideToClosest(speed, runCallbacks, internal, threshold) {
      if (void 0 === speed) speed = this.params.speed;
      if (void 0 === runCallbacks) runCallbacks = true;
      if (void 0 === threshold) threshold = .5;
      const swiper = this;
      let index = swiper.activeIndex;
      const skip = Math.min(swiper.params.slidesPerGroupSkip, index);
      const snapIndex = skip + Math.floor((index - skip) / swiper.params.slidesPerGroup);
      const translate = swiper.rtlTranslate ? swiper.translate : -swiper.translate;
      if (translate >= swiper.snapGrid[snapIndex]) {
        const currentSnap = swiper.snapGrid[snapIndex];
        const nextSnap = swiper.snapGrid[snapIndex + 1];
        if (translate - currentSnap > (nextSnap - currentSnap) * threshold) index += swiper.params.slidesPerGroup;
      } else {
        const prevSnap = swiper.snapGrid[snapIndex - 1];
        const currentSnap = swiper.snapGrid[snapIndex];
        if (translate - prevSnap <= (currentSnap - prevSnap) * threshold) index -= swiper.params.slidesPerGroup;
      }
      index = Math.max(index, 0);
      index = Math.min(index, swiper.slidesGrid.length - 1);
      return swiper.slideTo(index, speed, runCallbacks, internal);
    }
    function slideToClickedSlide() {
      const swiper = this;
      const {params: params, $wrapperEl: $wrapperEl} = swiper;
      const slidesPerView = "auto" === params.slidesPerView ? swiper.slidesPerViewDynamic() : params.slidesPerView;
      let slideToIndex = swiper.clickedIndex;
      let realIndex;
      if (params.loop) {
        if (swiper.animating) return;
        realIndex = parseInt(dom(swiper.clickedSlide).attr("data-swiper-slide-index"), 10);
        if (params.centeredSlides) if (slideToIndex < swiper.loopedSlides - slidesPerView / 2 || slideToIndex > swiper.slides.length - swiper.loopedSlides + slidesPerView / 2) {
          swiper.loopFix();
          slideToIndex = $wrapperEl.children(`.${params.slideClass}[data-swiper-slide-index="${realIndex}"]:not(.${params.slideDuplicateClass})`).eq(0).index();
          utils_nextTick((() => {
            swiper.slideTo(slideToIndex);
          }));
        } else swiper.slideTo(slideToIndex); else if (slideToIndex > swiper.slides.length - slidesPerView) {
          swiper.loopFix();
          slideToIndex = $wrapperEl.children(`.${params.slideClass}[data-swiper-slide-index="${realIndex}"]:not(.${params.slideDuplicateClass})`).eq(0).index();
          utils_nextTick((() => {
            swiper.slideTo(slideToIndex);
          }));
        } else swiper.slideTo(slideToIndex);
      } else swiper.slideTo(slideToIndex);
    }
    var slide = {
      slideTo: slideTo,
      slideToLoop: slideToLoop,
      slideNext: slideNext,
      slidePrev: slidePrev,
      slideReset: slideReset,
      slideToClosest: slideToClosest,
      slideToClickedSlide: slideToClickedSlide
    };
    function loopCreate() {
      const swiper = this;
      const document = ssr_window_esm_getDocument();
      const {params: params, $wrapperEl: $wrapperEl} = swiper;
      const $selector = $wrapperEl.children().length > 0 ? dom($wrapperEl.children()[0].parentNode) : $wrapperEl;
      $selector.children(`.${params.slideClass}.${params.slideDuplicateClass}`).remove();
      let slides = $selector.children(`.${params.slideClass}`);
      if (params.loopFillGroupWithBlank) {
        const blankSlidesNum = params.slidesPerGroup - slides.length % params.slidesPerGroup;
        if (blankSlidesNum !== params.slidesPerGroup) {
          for (let i = 0; i < blankSlidesNum; i += 1) {
            const blankNode = dom(document.createElement("div")).addClass(`${params.slideClass} ${params.slideBlankClass}`);
            $selector.append(blankNode);
          }
          slides = $selector.children(`.${params.slideClass}`);
        }
      }
      if ("auto" === params.slidesPerView && !params.loopedSlides) params.loopedSlides = slides.length;
      swiper.loopedSlides = Math.ceil(parseFloat(params.loopedSlides || params.slidesPerView, 10));
      swiper.loopedSlides += params.loopAdditionalSlides;
      if (swiper.loopedSlides > slides.length) swiper.loopedSlides = slides.length;
      const prependSlides = [];
      const appendSlides = [];
      slides.each(((el, index) => {
        const slide = dom(el);
        if (index < swiper.loopedSlides) appendSlides.push(el);
        if (index < slides.length && index >= slides.length - swiper.loopedSlides) prependSlides.push(el);
        slide.attr("data-swiper-slide-index", index);
      }));
      for (let i = 0; i < appendSlides.length; i += 1) $selector.append(dom(appendSlides[i].cloneNode(true)).addClass(params.slideDuplicateClass));
      for (let i = prependSlides.length - 1; i >= 0; i -= 1) $selector.prepend(dom(prependSlides[i].cloneNode(true)).addClass(params.slideDuplicateClass));
    }
    function loopFix() {
      const swiper = this;
      swiper.emit("beforeLoopFix");
      const {activeIndex: activeIndex, slides: slides, loopedSlides: loopedSlides, allowSlidePrev: allowSlidePrev, allowSlideNext: allowSlideNext, snapGrid: snapGrid, rtlTranslate: rtl} = swiper;
      let newIndex;
      swiper.allowSlidePrev = true;
      swiper.allowSlideNext = true;
      const snapTranslate = -snapGrid[activeIndex];
      const diff = snapTranslate - swiper.getTranslate();
      if (activeIndex < loopedSlides) {
        newIndex = slides.length - 3 * loopedSlides + activeIndex;
        newIndex += loopedSlides;
        const slideChanged = swiper.slideTo(newIndex, 0, false, true);
        if (slideChanged && 0 !== diff) swiper.setTranslate((rtl ? -swiper.translate : swiper.translate) - diff);
      } else if (activeIndex >= slides.length - loopedSlides) {
        newIndex = -slides.length + activeIndex + loopedSlides;
        newIndex += loopedSlides;
        const slideChanged = swiper.slideTo(newIndex, 0, false, true);
        if (slideChanged && 0 !== diff) swiper.setTranslate((rtl ? -swiper.translate : swiper.translate) - diff);
      }
      swiper.allowSlidePrev = allowSlidePrev;
      swiper.allowSlideNext = allowSlideNext;
      swiper.emit("loopFix");
    }
    function loopDestroy() {
      const swiper = this;
      const {$wrapperEl: $wrapperEl, params: params, slides: slides} = swiper;
      $wrapperEl.children(`.${params.slideClass}.${params.slideDuplicateClass},.${params.slideClass}.${params.slideBlankClass}`).remove();
      slides.removeAttr("data-swiper-slide-index");
    }
    var loop = {
      loopCreate: loopCreate,
      loopFix: loopFix,
      loopDestroy: loopDestroy
    };
    function setGrabCursor(moving) {
      const swiper = this;
      if (swiper.support.touch || !swiper.params.simulateTouch || swiper.params.watchOverflow && swiper.isLocked || swiper.params.cssMode) return;
      const el = "container" === swiper.params.touchEventsTarget ? swiper.el : swiper.wrapperEl;
      el.style.cursor = "move";
      el.style.cursor = moving ? "grabbing" : "grab";
    }
    function unsetGrabCursor() {
      const swiper = this;
      if (swiper.support.touch || swiper.params.watchOverflow && swiper.isLocked || swiper.params.cssMode) return;
      swiper["container" === swiper.params.touchEventsTarget ? "el" : "wrapperEl"].style.cursor = "";
    }
    var grab_cursor = {
      setGrabCursor: setGrabCursor,
      unsetGrabCursor: unsetGrabCursor
    };
    function closestElement(selector, base) {
      if (void 0 === base) base = this;
      function __closestFrom(el) {
        if (!el || el === ssr_window_esm_getDocument() || el === ssr_window_esm_getWindow()) return null;
        if (el.assignedSlot) el = el.assignedSlot;
        const found = el.closest(selector);
        return found || __closestFrom(el.getRootNode().host);
      }
      return __closestFrom(base);
    }
    function onTouchStart(event) {
      const swiper = this;
      const document = ssr_window_esm_getDocument();
      const window = ssr_window_esm_getWindow();
      const data = swiper.touchEventsData;
      const {params: params, touches: touches, enabled: enabled} = swiper;
      if (!enabled) return;
      if (swiper.animating && params.preventInteractionOnTransition) return;
      if (!swiper.animating && params.cssMode && params.loop) swiper.loopFix();
      let e = event;
      if (e.originalEvent) e = e.originalEvent;
      let $targetEl = dom(e.target);
      if ("wrapper" === params.touchEventsTarget) if (!$targetEl.closest(swiper.wrapperEl).length) return;
      data.isTouchEvent = "touchstart" === e.type;
      if (!data.isTouchEvent && "which" in e && 3 === e.which) return;
      if (!data.isTouchEvent && "button" in e && e.button > 0) return;
      if (data.isTouched && data.isMoved) return;
      const swipingClassHasValue = !!params.noSwipingClass && "" !== params.noSwipingClass;
      if (swipingClassHasValue && e.target && e.target.shadowRoot && event.path && event.path[0]) $targetEl = dom(event.path[0]);
      const noSwipingSelector = params.noSwipingSelector ? params.noSwipingSelector : `.${params.noSwipingClass}`;
      const isTargetShadow = !!(e.target && e.target.shadowRoot);
      if (params.noSwiping && (isTargetShadow ? closestElement(noSwipingSelector, e.target) : $targetEl.closest(noSwipingSelector)[0])) {
        swiper.allowClick = true;
        return;
      }
      if (params.swipeHandler) if (!$targetEl.closest(params.swipeHandler)[0]) return;
      touches.currentX = "touchstart" === e.type ? e.targetTouches[0].pageX : e.pageX;
      touches.currentY = "touchstart" === e.type ? e.targetTouches[0].pageY : e.pageY;
      const startX = touches.currentX;
      const startY = touches.currentY;
      const edgeSwipeDetection = params.edgeSwipeDetection || params.iOSEdgeSwipeDetection;
      const edgeSwipeThreshold = params.edgeSwipeThreshold || params.iOSEdgeSwipeThreshold;
      if (edgeSwipeDetection && (startX <= edgeSwipeThreshold || startX >= window.innerWidth - edgeSwipeThreshold)) if ("prevent" === edgeSwipeDetection) event.preventDefault(); else return;
      Object.assign(data, {
        isTouched: true,
        isMoved: false,
        allowTouchCallbacks: true,
        isScrolling: void 0,
        startMoving: void 0
      });
      touches.startX = startX;
      touches.startY = startY;
      data.touchStartTime = utils_now();
      swiper.allowClick = true;
      swiper.updateSize();
      swiper.swipeDirection = void 0;
      if (params.threshold > 0) data.allowThresholdMove = false;
      if ("touchstart" !== e.type) {
        let preventDefault = true;
        if ($targetEl.is(data.focusableElements)) {
          preventDefault = false;
          if ("SELECT" === $targetEl[0].nodeName) data.isTouched = false;
        }
        if (document.activeElement && dom(document.activeElement).is(data.focusableElements) && document.activeElement !== $targetEl[0]) document.activeElement.blur();
        const shouldPreventDefault = preventDefault && swiper.allowTouchMove && params.touchStartPreventDefault;
        if ((params.touchStartForcePreventDefault || shouldPreventDefault) && !$targetEl[0].isContentEditable) e.preventDefault();
      }
      if (swiper.params.freeMode && swiper.params.freeMode.enabled && swiper.freeMode && swiper.animating && !params.cssMode) swiper.freeMode.onTouchStart();
      swiper.emit("touchStart", e);
    }
    function onTouchMove(event) {
      const document = ssr_window_esm_getDocument();
      const swiper = this;
      const data = swiper.touchEventsData;
      const {params: params, touches: touches, rtlTranslate: rtl, enabled: enabled} = swiper;
      if (!enabled) return;
      let e = event;
      if (e.originalEvent) e = e.originalEvent;
      if (!data.isTouched) {
        if (data.startMoving && data.isScrolling) swiper.emit("touchMoveOpposite", e);
        return;
      }
      if (data.isTouchEvent && "touchmove" !== e.type) return;
      const targetTouch = "touchmove" === e.type && e.targetTouches && (e.targetTouches[0] || e.changedTouches[0]);
      const pageX = "touchmove" === e.type ? targetTouch.pageX : e.pageX;
      const pageY = "touchmove" === e.type ? targetTouch.pageY : e.pageY;
      if (e.preventedByNestedSwiper) {
        touches.startX = pageX;
        touches.startY = pageY;
        return;
      }
      if (!swiper.allowTouchMove) {
        if (!dom(e.target).is(data.focusableElements)) swiper.allowClick = false;
        if (data.isTouched) {
          Object.assign(touches, {
            startX: pageX,
            startY: pageY,
            currentX: pageX,
            currentY: pageY
          });
          data.touchStartTime = utils_now();
        }
        return;
      }
      if (data.isTouchEvent && params.touchReleaseOnEdges && !params.loop) if (swiper.isVertical()) {
        if (pageY < touches.startY && swiper.translate <= swiper.maxTranslate() || pageY > touches.startY && swiper.translate >= swiper.minTranslate()) {
          data.isTouched = false;
          data.isMoved = false;
          return;
        }
      } else if (pageX < touches.startX && swiper.translate <= swiper.maxTranslate() || pageX > touches.startX && swiper.translate >= swiper.minTranslate()) return;
      if (data.isTouchEvent && document.activeElement) if (e.target === document.activeElement && dom(e.target).is(data.focusableElements)) {
        data.isMoved = true;
        swiper.allowClick = false;
        return;
      }
      if (data.allowTouchCallbacks) swiper.emit("touchMove", e);
      if (e.targetTouches && e.targetTouches.length > 1) return;
      touches.currentX = pageX;
      touches.currentY = pageY;
      const diffX = touches.currentX - touches.startX;
      const diffY = touches.currentY - touches.startY;
      if (swiper.params.threshold && Math.sqrt(diffX ** 2 + diffY ** 2) < swiper.params.threshold) return;
      if ("undefined" === typeof data.isScrolling) {
        let touchAngle;
        if (swiper.isHorizontal() && touches.currentY === touches.startY || swiper.isVertical() && touches.currentX === touches.startX) data.isScrolling = false; else if (diffX * diffX + diffY * diffY >= 25) {
          touchAngle = 180 * Math.atan2(Math.abs(diffY), Math.abs(diffX)) / Math.PI;
          data.isScrolling = swiper.isHorizontal() ? touchAngle > params.touchAngle : 90 - touchAngle > params.touchAngle;
        }
      }
      if (data.isScrolling) swiper.emit("touchMoveOpposite", e);
      if ("undefined" === typeof data.startMoving) if (touches.currentX !== touches.startX || touches.currentY !== touches.startY) data.startMoving = true;
      if (data.isScrolling) {
        data.isTouched = false;
        return;
      }
      if (!data.startMoving) return;
      swiper.allowClick = false;
      if (!params.cssMode && e.cancelable) e.preventDefault();
      if (params.touchMoveStopPropagation && !params.nested) e.stopPropagation();
      if (!data.isMoved) {
        if (params.loop && !params.cssMode) swiper.loopFix();
        data.startTranslate = swiper.getTranslate();
        swiper.setTransition(0);
        if (swiper.animating) swiper.$wrapperEl.trigger("webkitTransitionEnd transitionend");
        data.allowMomentumBounce = false;
        if (params.grabCursor && (true === swiper.allowSlideNext || true === swiper.allowSlidePrev)) swiper.setGrabCursor(true);
        swiper.emit("sliderFirstMove", e);
      }
      swiper.emit("sliderMove", e);
      data.isMoved = true;
      let diff = swiper.isHorizontal() ? diffX : diffY;
      touches.diff = diff;
      diff *= params.touchRatio;
      if (rtl) diff = -diff;
      swiper.swipeDirection = diff > 0 ? "prev" : "next";
      data.currentTranslate = diff + data.startTranslate;
      let disableParentSwiper = true;
      let resistanceRatio = params.resistanceRatio;
      if (params.touchReleaseOnEdges) resistanceRatio = 0;
      if (diff > 0 && data.currentTranslate > swiper.minTranslate()) {
        disableParentSwiper = false;
        if (params.resistance) data.currentTranslate = swiper.minTranslate() - 1 + (-swiper.minTranslate() + data.startTranslate + diff) ** resistanceRatio;
      } else if (diff < 0 && data.currentTranslate < swiper.maxTranslate()) {
        disableParentSwiper = false;
        if (params.resistance) data.currentTranslate = swiper.maxTranslate() + 1 - (swiper.maxTranslate() - data.startTranslate - diff) ** resistanceRatio;
      }
      if (disableParentSwiper) e.preventedByNestedSwiper = true;
      if (!swiper.allowSlideNext && "next" === swiper.swipeDirection && data.currentTranslate < data.startTranslate) data.currentTranslate = data.startTranslate;
      if (!swiper.allowSlidePrev && "prev" === swiper.swipeDirection && data.currentTranslate > data.startTranslate) data.currentTranslate = data.startTranslate;
      if (!swiper.allowSlidePrev && !swiper.allowSlideNext) data.currentTranslate = data.startTranslate;
      if (params.threshold > 0) if (Math.abs(diff) > params.threshold || data.allowThresholdMove) {
        if (!data.allowThresholdMove) {
          data.allowThresholdMove = true;
          touches.startX = touches.currentX;
          touches.startY = touches.currentY;
          data.currentTranslate = data.startTranslate;
          touches.diff = swiper.isHorizontal() ? touches.currentX - touches.startX : touches.currentY - touches.startY;
          return;
        }
      } else {
        data.currentTranslate = data.startTranslate;
        return;
      }
      if (!params.followFinger || params.cssMode) return;
      if (params.freeMode && params.freeMode.enabled && swiper.freeMode || params.watchSlidesProgress) {
        swiper.updateActiveIndex();
        swiper.updateSlidesClasses();
      }
      if (swiper.params.freeMode && params.freeMode.enabled && swiper.freeMode) swiper.freeMode.onTouchMove();
      swiper.updateProgress(data.currentTranslate);
      swiper.setTranslate(data.currentTranslate);
    }
    function onTouchEnd(event) {
      const swiper = this;
      const data = swiper.touchEventsData;
      const {params: params, touches: touches, rtlTranslate: rtl, slidesGrid: slidesGrid, enabled: enabled} = swiper;
      if (!enabled) return;
      let e = event;
      if (e.originalEvent) e = e.originalEvent;
      if (data.allowTouchCallbacks) swiper.emit("touchEnd", e);
      data.allowTouchCallbacks = false;
      if (!data.isTouched) {
        if (data.isMoved && params.grabCursor) swiper.setGrabCursor(false);
        data.isMoved = false;
        data.startMoving = false;
        return;
      }
      if (params.grabCursor && data.isMoved && data.isTouched && (true === swiper.allowSlideNext || true === swiper.allowSlidePrev)) swiper.setGrabCursor(false);
      const touchEndTime = utils_now();
      const timeDiff = touchEndTime - data.touchStartTime;
      if (swiper.allowClick) {
        const pathTree = e.path || e.composedPath && e.composedPath();
        swiper.updateClickedSlide(pathTree && pathTree[0] || e.target);
        swiper.emit("tap click", e);
        if (timeDiff < 300 && touchEndTime - data.lastClickTime < 300) swiper.emit("doubleTap doubleClick", e);
      }
      data.lastClickTime = utils_now();
      utils_nextTick((() => {
        if (!swiper.destroyed) swiper.allowClick = true;
      }));
      if (!data.isTouched || !data.isMoved || !swiper.swipeDirection || 0 === touches.diff || data.currentTranslate === data.startTranslate) {
        data.isTouched = false;
        data.isMoved = false;
        data.startMoving = false;
        return;
      }
      data.isTouched = false;
      data.isMoved = false;
      data.startMoving = false;
      let currentPos;
      if (params.followFinger) currentPos = rtl ? swiper.translate : -swiper.translate; else currentPos = -data.currentTranslate;
      if (params.cssMode) return;
      if (swiper.params.freeMode && params.freeMode.enabled) {
        swiper.freeMode.onTouchEnd({
          currentPos: currentPos
        });
        return;
      }
      let stopIndex = 0;
      let groupSize = swiper.slidesSizesGrid[0];
      for (let i = 0; i < slidesGrid.length; i += i < params.slidesPerGroupSkip ? 1 : params.slidesPerGroup) {
        const increment = i < params.slidesPerGroupSkip - 1 ? 1 : params.slidesPerGroup;
        if ("undefined" !== typeof slidesGrid[i + increment]) {
          if (currentPos >= slidesGrid[i] && currentPos < slidesGrid[i + increment]) {
            stopIndex = i;
            groupSize = slidesGrid[i + increment] - slidesGrid[i];
          }
        } else if (currentPos >= slidesGrid[i]) {
          stopIndex = i;
          groupSize = slidesGrid[slidesGrid.length - 1] - slidesGrid[slidesGrid.length - 2];
        }
      }
      let rewindFirstIndex = null;
      let rewindLastIndex = null;
      if (params.rewind) if (swiper.isBeginning) rewindLastIndex = swiper.params.virtual && swiper.params.virtual.enabled && swiper.virtual ? swiper.virtual.slides.length - 1 : swiper.slides.length - 1; else if (swiper.isEnd) rewindFirstIndex = 0;
      const ratio = (currentPos - slidesGrid[stopIndex]) / groupSize;
      const increment = stopIndex < params.slidesPerGroupSkip - 1 ? 1 : params.slidesPerGroup;
      if (timeDiff > params.longSwipesMs) {
        if (!params.longSwipes) {
          swiper.slideTo(swiper.activeIndex);
          return;
        }
        if ("next" === swiper.swipeDirection) if (ratio >= params.longSwipesRatio) swiper.slideTo(params.rewind && swiper.isEnd ? rewindFirstIndex : stopIndex + increment); else swiper.slideTo(stopIndex);
        if ("prev" === swiper.swipeDirection) if (ratio > 1 - params.longSwipesRatio) swiper.slideTo(stopIndex + increment); else if (null !== rewindLastIndex && ratio < 0 && Math.abs(ratio) > params.longSwipesRatio) swiper.slideTo(rewindLastIndex); else swiper.slideTo(stopIndex);
      } else {
        if (!params.shortSwipes) {
          swiper.slideTo(swiper.activeIndex);
          return;
        }
        const isNavButtonTarget = swiper.navigation && (e.target === swiper.navigation.nextEl || e.target === swiper.navigation.prevEl);
        if (!isNavButtonTarget) {
          if ("next" === swiper.swipeDirection) swiper.slideTo(null !== rewindFirstIndex ? rewindFirstIndex : stopIndex + increment);
          if ("prev" === swiper.swipeDirection) swiper.slideTo(null !== rewindLastIndex ? rewindLastIndex : stopIndex);
        } else if (e.target === swiper.navigation.nextEl) swiper.slideTo(stopIndex + increment); else swiper.slideTo(stopIndex);
      }
    }
    function onResize() {
      const swiper = this;
      const {params: params, el: el} = swiper;
      if (el && 0 === el.offsetWidth) return;
      if (params.breakpoints) swiper.setBreakpoint();
      const {allowSlideNext: allowSlideNext, allowSlidePrev: allowSlidePrev, snapGrid: snapGrid} = swiper;
      swiper.allowSlideNext = true;
      swiper.allowSlidePrev = true;
      swiper.updateSize();
      swiper.updateSlides();
      swiper.updateSlidesClasses();
      if (("auto" === params.slidesPerView || params.slidesPerView > 1) && swiper.isEnd && !swiper.isBeginning && !swiper.params.centeredSlides) swiper.slideTo(swiper.slides.length - 1, 0, false, true); else swiper.slideTo(swiper.activeIndex, 0, false, true);
      if (swiper.autoplay && swiper.autoplay.running && swiper.autoplay.paused) swiper.autoplay.run();
      swiper.allowSlidePrev = allowSlidePrev;
      swiper.allowSlideNext = allowSlideNext;
      if (swiper.params.watchOverflow && snapGrid !== swiper.snapGrid) swiper.checkOverflow();
    }
    function onClick(e) {
      const swiper = this;
      if (!swiper.enabled) return;
      if (!swiper.allowClick) {
        if (swiper.params.preventClicks) e.preventDefault();
        if (swiper.params.preventClicksPropagation && swiper.animating) {
          e.stopPropagation();
          e.stopImmediatePropagation();
        }
      }
    }
    function onScroll() {
      const swiper = this;
      const {wrapperEl: wrapperEl, rtlTranslate: rtlTranslate, enabled: enabled} = swiper;
      if (!enabled) return;
      swiper.previousTranslate = swiper.translate;
      if (swiper.isHorizontal()) swiper.translate = -wrapperEl.scrollLeft; else swiper.translate = -wrapperEl.scrollTop;
      if (0 === swiper.translate) swiper.translate = 0;
      swiper.updateActiveIndex();
      swiper.updateSlidesClasses();
      let newProgress;
      const translatesDiff = swiper.maxTranslate() - swiper.minTranslate();
      if (0 === translatesDiff) newProgress = 0; else newProgress = (swiper.translate - swiper.minTranslate()) / translatesDiff;
      if (newProgress !== swiper.progress) swiper.updateProgress(rtlTranslate ? -swiper.translate : swiper.translate);
      swiper.emit("setTranslate", swiper.translate, false);
    }
    let dummyEventAttached = false;
    function dummyEventListener() {}
    const events = (swiper, method) => {
      const document = ssr_window_esm_getDocument();
      const {params: params, touchEvents: touchEvents, el: el, wrapperEl: wrapperEl, device: device, support: support} = swiper;
      const capture = !!params.nested;
      const domMethod = "on" === method ? "addEventListener" : "removeEventListener";
      const swiperMethod = method;
      if (!support.touch) {
        el[domMethod](touchEvents.start, swiper.onTouchStart, false);
        document[domMethod](touchEvents.move, swiper.onTouchMove, capture);
        document[domMethod](touchEvents.end, swiper.onTouchEnd, false);
      } else {
        const passiveListener = "touchstart" === touchEvents.start && support.passiveListener && params.passiveListeners ? {
          passive: true,
          capture: false
        } : false;
        el[domMethod](touchEvents.start, swiper.onTouchStart, passiveListener);
        el[domMethod](touchEvents.move, swiper.onTouchMove, support.passiveListener ? {
          passive: false,
          capture: capture
        } : capture);
        el[domMethod](touchEvents.end, swiper.onTouchEnd, passiveListener);
        if (touchEvents.cancel) el[domMethod](touchEvents.cancel, swiper.onTouchEnd, passiveListener);
      }
      if (params.preventClicks || params.preventClicksPropagation) el[domMethod]("click", swiper.onClick, true);
      if (params.cssMode) wrapperEl[domMethod]("scroll", swiper.onScroll);
      if (params.updateOnWindowResize) swiper[swiperMethod](device.ios || device.android ? "resize orientationchange observerUpdate" : "resize observerUpdate", onResize, true); else swiper[swiperMethod]("observerUpdate", onResize, true);
    };
    function attachEvents() {
      const swiper = this;
      const document = ssr_window_esm_getDocument();
      const {params: params, support: support} = swiper;
      swiper.onTouchStart = onTouchStart.bind(swiper);
      swiper.onTouchMove = onTouchMove.bind(swiper);
      swiper.onTouchEnd = onTouchEnd.bind(swiper);
      if (params.cssMode) swiper.onScroll = onScroll.bind(swiper);
      swiper.onClick = onClick.bind(swiper);
      if (support.touch && !dummyEventAttached) {
        document.addEventListener("touchstart", dummyEventListener);
        dummyEventAttached = true;
      }
      events(swiper, "on");
    }
    function detachEvents() {
      const swiper = this;
      events(swiper, "off");
    }
    var core_events = {
      attachEvents: attachEvents,
      detachEvents: detachEvents
    };
    const isGridEnabled = (swiper, params) => swiper.grid && params.grid && params.grid.rows > 1;
    function setBreakpoint() {
      const swiper = this;
      const {activeIndex: activeIndex, initialized: initialized, loopedSlides: loopedSlides = 0, params: params, $el: $el} = swiper;
      const breakpoints = params.breakpoints;
      if (!breakpoints || breakpoints && 0 === Object.keys(breakpoints).length) return;
      const breakpoint = swiper.getBreakpoint(breakpoints, swiper.params.breakpointsBase, swiper.el);
      if (!breakpoint || swiper.currentBreakpoint === breakpoint) return;
      const breakpointOnlyParams = breakpoint in breakpoints ? breakpoints[breakpoint] : void 0;
      const breakpointParams = breakpointOnlyParams || swiper.originalParams;
      const wasMultiRow = isGridEnabled(swiper, params);
      const isMultiRow = isGridEnabled(swiper, breakpointParams);
      const wasEnabled = params.enabled;
      if (wasMultiRow && !isMultiRow) {
        $el.removeClass(`${params.containerModifierClass}grid ${params.containerModifierClass}grid-column`);
        swiper.emitContainerClasses();
      } else if (!wasMultiRow && isMultiRow) {
        $el.addClass(`${params.containerModifierClass}grid`);
        if (breakpointParams.grid.fill && "column" === breakpointParams.grid.fill || !breakpointParams.grid.fill && "column" === params.grid.fill) $el.addClass(`${params.containerModifierClass}grid-column`);
        swiper.emitContainerClasses();
      }
      const directionChanged = breakpointParams.direction && breakpointParams.direction !== params.direction;
      const needsReLoop = params.loop && (breakpointParams.slidesPerView !== params.slidesPerView || directionChanged);
      if (directionChanged && initialized) swiper.changeDirection();
      utils_extend(swiper.params, breakpointParams);
      const isEnabled = swiper.params.enabled;
      Object.assign(swiper, {
        allowTouchMove: swiper.params.allowTouchMove,
        allowSlideNext: swiper.params.allowSlideNext,
        allowSlidePrev: swiper.params.allowSlidePrev
      });
      if (wasEnabled && !isEnabled) swiper.disable(); else if (!wasEnabled && isEnabled) swiper.enable();
      swiper.currentBreakpoint = breakpoint;
      swiper.emit("_beforeBreakpoint", breakpointParams);
      if (needsReLoop && initialized) {
        swiper.loopDestroy();
        swiper.loopCreate();
        swiper.updateSlides();
        swiper.slideTo(activeIndex - loopedSlides + swiper.loopedSlides, 0, false);
      }
      swiper.emit("breakpoint", breakpointParams);
    }
    function getBreakpoint(breakpoints, base, containerEl) {
      if (void 0 === base) base = "window";
      if (!breakpoints || "container" === base && !containerEl) return;
      let breakpoint = false;
      const window = ssr_window_esm_getWindow();
      const currentHeight = "window" === base ? window.innerHeight : containerEl.clientHeight;
      const points = Object.keys(breakpoints).map((point => {
        if ("string" === typeof point && 0 === point.indexOf("@")) {
          const minRatio = parseFloat(point.substr(1));
          const value = currentHeight * minRatio;
          return {
            value: value,
            point: point
          };
        }
        return {
          value: point,
          point: point
        };
      }));
      points.sort(((a, b) => parseInt(a.value, 10) - parseInt(b.value, 10)));
      for (let i = 0; i < points.length; i += 1) {
        const {point: point, value: value} = points[i];
        if ("window" === base) {
          if (window.matchMedia(`(min-width: ${value}px)`).matches) breakpoint = point;
        } else if (value <= containerEl.clientWidth) breakpoint = point;
      }
      return breakpoint || "max";
    }
    var breakpoints = {
      setBreakpoint: setBreakpoint,
      getBreakpoint: getBreakpoint
    };
    function prepareClasses(entries, prefix) {
      const resultClasses = [];
      entries.forEach((item => {
        if ("object" === typeof item) Object.keys(item).forEach((classNames => {
          if (item[classNames]) resultClasses.push(prefix + classNames);
        })); else if ("string" === typeof item) resultClasses.push(prefix + item);
      }));
      return resultClasses;
    }
    function addClasses() {
      const swiper = this;
      const {classNames: classNames, params: params, rtl: rtl, $el: $el, device: device, support: support} = swiper;
      const suffixes = prepareClasses([ "initialized", params.direction, {
        "pointer-events": !support.touch
      }, {
        "free-mode": swiper.params.freeMode && params.freeMode.enabled
      }, {
        autoheight: params.autoHeight
      }, {
        rtl: rtl
      }, {
        grid: params.grid && params.grid.rows > 1
      }, {
        "grid-column": params.grid && params.grid.rows > 1 && "column" === params.grid.fill
      }, {
        android: device.android
      }, {
        ios: device.ios
      }, {
        "css-mode": params.cssMode
      }, {
        centered: params.cssMode && params.centeredSlides
      }, {
        "watch-progress": params.watchSlidesProgress
      } ], params.containerModifierClass);
      classNames.push(...suffixes);
      $el.addClass([ ...classNames ].join(" "));
      swiper.emitContainerClasses();
    }
    function removeClasses() {
      const swiper = this;
      const {$el: $el, classNames: classNames} = swiper;
      $el.removeClass(classNames.join(" "));
      swiper.emitContainerClasses();
    }
    var classes = {
      addClasses: addClasses,
      removeClasses: removeClasses
    };
    function loadImage(imageEl, src, srcset, sizes, checkForComplete, callback) {
      const window = ssr_window_esm_getWindow();
      let image;
      function onReady() {
        if (callback) callback();
      }
      const isPicture = dom(imageEl).parent("picture")[0];
      if (!isPicture && (!imageEl.complete || !checkForComplete)) if (src) {
        image = new window.Image;
        image.onload = onReady;
        image.onerror = onReady;
        if (sizes) image.sizes = sizes;
        if (srcset) image.srcset = srcset;
        if (src) image.src = src;
      } else onReady(); else onReady();
    }
    function preloadImages() {
      const swiper = this;
      swiper.imagesToLoad = swiper.$el.find("img");
      function onReady() {
        if ("undefined" === typeof swiper || null === swiper || !swiper || swiper.destroyed) return;
        if (void 0 !== swiper.imagesLoaded) swiper.imagesLoaded += 1;
        if (swiper.imagesLoaded === swiper.imagesToLoad.length) {
          if (swiper.params.updateOnImagesReady) swiper.update();
          swiper.emit("imagesReady");
        }
      }
      for (let i = 0; i < swiper.imagesToLoad.length; i += 1) {
        const imageEl = swiper.imagesToLoad[i];
        swiper.loadImage(imageEl, imageEl.currentSrc || imageEl.getAttribute("src"), imageEl.srcset || imageEl.getAttribute("srcset"), imageEl.sizes || imageEl.getAttribute("sizes"), true, onReady);
      }
    }
    var core_images = {
      loadImage: loadImage,
      preloadImages: preloadImages
    };
    function checkOverflow() {
      const swiper = this;
      const {isLocked: wasLocked, params: params} = swiper;
      const {slidesOffsetBefore: slidesOffsetBefore} = params;
      if (slidesOffsetBefore) {
        const lastSlideIndex = swiper.slides.length - 1;
        const lastSlideRightEdge = swiper.slidesGrid[lastSlideIndex] + swiper.slidesSizesGrid[lastSlideIndex] + 2 * slidesOffsetBefore;
        swiper.isLocked = swiper.size > lastSlideRightEdge;
      } else swiper.isLocked = 1 === swiper.snapGrid.length;
      if (true === params.allowSlideNext) swiper.allowSlideNext = !swiper.isLocked;
      if (true === params.allowSlidePrev) swiper.allowSlidePrev = !swiper.isLocked;
      if (wasLocked && wasLocked !== swiper.isLocked) swiper.isEnd = false;
      if (wasLocked !== swiper.isLocked) swiper.emit(swiper.isLocked ? "lock" : "unlock");
    }
    var check_overflow = {
      checkOverflow: checkOverflow
    };
    var defaults = {
      init: true,
      direction: "horizontal",
      touchEventsTarget: "wrapper",
      initialSlide: 0,
      speed: 300,
      cssMode: false,
      updateOnWindowResize: true,
      resizeObserver: true,
      nested: false,
      createElements: false,
      enabled: true,
      focusableElements: "input, select, option, textarea, button, video, label",
      width: null,
      height: null,
      preventInteractionOnTransition: false,
      userAgent: null,
      url: null,
      edgeSwipeDetection: false,
      edgeSwipeThreshold: 20,
      autoHeight: false,
      setWrapperSize: false,
      virtualTranslate: false,
      effect: "slide",
      breakpoints: void 0,
      breakpointsBase: "window",
      spaceBetween: 0,
      slidesPerView: 1,
      slidesPerGroup: 1,
      slidesPerGroupSkip: 0,
      slidesPerGroupAuto: false,
      centeredSlides: false,
      centeredSlidesBounds: false,
      slidesOffsetBefore: 0,
      slidesOffsetAfter: 0,
      normalizeSlideIndex: true,
      centerInsufficientSlides: false,
      watchOverflow: true,
      roundLengths: false,
      touchRatio: 1,
      touchAngle: 45,
      simulateTouch: true,
      shortSwipes: true,
      longSwipes: true,
      longSwipesRatio: .5,
      longSwipesMs: 300,
      followFinger: true,
      allowTouchMove: true,
      threshold: 0,
      touchMoveStopPropagation: false,
      touchStartPreventDefault: true,
      touchStartForcePreventDefault: false,
      touchReleaseOnEdges: false,
      uniqueNavElements: true,
      resistance: true,
      resistanceRatio: .85,
      watchSlidesProgress: false,
      grabCursor: false,
      preventClicks: true,
      preventClicksPropagation: true,
      slideToClickedSlide: false,
      preloadImages: true,
      updateOnImagesReady: true,
      loop: false,
      loopAdditionalSlides: 0,
      loopedSlides: null,
      loopFillGroupWithBlank: false,
      loopPreventsSlide: true,
      rewind: false,
      allowSlidePrev: true,
      allowSlideNext: true,
      swipeHandler: null,
      noSwiping: true,
      noSwipingClass: "swiper-no-swiping",
      noSwipingSelector: null,
      passiveListeners: true,
      maxBackfaceHiddenSlides: 10,
      containerModifierClass: "swiper-",
      slideClass: "swiper-slide",
      slideBlankClass: "swiper-slide-invisible-blank",
      slideActiveClass: "swiper-slide-active",
      slideDuplicateActiveClass: "swiper-slide-duplicate-active",
      slideVisibleClass: "swiper-slide-visible",
      slideDuplicateClass: "swiper-slide-duplicate",
      slideNextClass: "swiper-slide-next",
      slideDuplicateNextClass: "swiper-slide-duplicate-next",
      slidePrevClass: "swiper-slide-prev",
      slideDuplicatePrevClass: "swiper-slide-duplicate-prev",
      wrapperClass: "swiper-wrapper",
      runCallbacksOnInit: true,
      _emitClasses: false
    };
    function moduleExtendParams(params, allModulesParams) {
      return function extendParams(obj) {
        if (void 0 === obj) obj = {};
        const moduleParamName = Object.keys(obj)[0];
        const moduleParams = obj[moduleParamName];
        if ("object" !== typeof moduleParams || null === moduleParams) {
          utils_extend(allModulesParams, obj);
          return;
        }
        if ([ "navigation", "pagination", "scrollbar" ].indexOf(moduleParamName) >= 0 && true === params[moduleParamName]) params[moduleParamName] = {
          auto: true
        };
        if (!(moduleParamName in params && "enabled" in moduleParams)) {
          utils_extend(allModulesParams, obj);
          return;
        }
        if (true === params[moduleParamName]) params[moduleParamName] = {
          enabled: true
        };
        if ("object" === typeof params[moduleParamName] && !("enabled" in params[moduleParamName])) params[moduleParamName].enabled = true;
        if (!params[moduleParamName]) params[moduleParamName] = {
          enabled: false
        };
        utils_extend(allModulesParams, obj);
      };
    }
    const prototypes = {
      eventsEmitter: events_emitter,
      update: update,
      translate: translate,
      transition: core_transition,
      slide: slide,
      loop: loop,
      grabCursor: grab_cursor,
      events: core_events,
      breakpoints: breakpoints,
      checkOverflow: check_overflow,
      classes: classes,
      images: core_images
    };
    const extendedDefaults = {};
    class Swiper {
      constructor() {
        let el;
        let params;
        for (var _len = arguments.length, args = new Array(_len), _key = 0; _key < _len; _key++) args[_key] = arguments[_key];
        if (1 === args.length && args[0].constructor && "Object" === Object.prototype.toString.call(args[0]).slice(8, -1)) params = args[0]; else [el, params] = args;
        if (!params) params = {};
        params = utils_extend({}, params);
        if (el && !params.el) params.el = el;
        if (params.el && dom(params.el).length > 1) {
          const swipers = [];
          dom(params.el).each((containerEl => {
            const newParams = utils_extend({}, params, {
              el: containerEl
            });
            swipers.push(new Swiper(newParams));
          }));
          return swipers;
        }
        const swiper = this;
        swiper.__swiper__ = true;
        swiper.support = getSupport();
        swiper.device = getDevice({
          userAgent: params.userAgent
        });
        swiper.browser = getBrowser();
        swiper.eventsListeners = {};
        swiper.eventsAnyListeners = [];
        swiper.modules = [ ...swiper.__modules__ ];
        if (params.modules && Array.isArray(params.modules)) swiper.modules.push(...params.modules);
        const allModulesParams = {};
        swiper.modules.forEach((mod => {
          mod({
            swiper: swiper,
            extendParams: moduleExtendParams(params, allModulesParams),
            on: swiper.on.bind(swiper),
            once: swiper.once.bind(swiper),
            off: swiper.off.bind(swiper),
            emit: swiper.emit.bind(swiper)
          });
        }));
        const swiperParams = utils_extend({}, defaults, allModulesParams);
        swiper.params = utils_extend({}, swiperParams, extendedDefaults, params);
        swiper.originalParams = utils_extend({}, swiper.params);
        swiper.passedParams = utils_extend({}, params);
        if (swiper.params && swiper.params.on) Object.keys(swiper.params.on).forEach((eventName => {
          swiper.on(eventName, swiper.params.on[eventName]);
        }));
        if (swiper.params && swiper.params.onAny) swiper.onAny(swiper.params.onAny);
        swiper.$ = dom;
        Object.assign(swiper, {
          enabled: swiper.params.enabled,
          el: el,
          classNames: [],
          slides: dom(),
          slidesGrid: [],
          snapGrid: [],
          slidesSizesGrid: [],
          isHorizontal() {
            return "horizontal" === swiper.params.direction;
          },
          isVertical() {
            return "vertical" === swiper.params.direction;
          },
          activeIndex: 0,
          realIndex: 0,
          isBeginning: true,
          isEnd: false,
          translate: 0,
          previousTranslate: 0,
          progress: 0,
          velocity: 0,
          animating: false,
          allowSlideNext: swiper.params.allowSlideNext,
          allowSlidePrev: swiper.params.allowSlidePrev,
          touchEvents: function touchEvents() {
            const touch = [ "touchstart", "touchmove", "touchend", "touchcancel" ];
            const desktop = [ "pointerdown", "pointermove", "pointerup" ];
            swiper.touchEventsTouch = {
              start: touch[0],
              move: touch[1],
              end: touch[2],
              cancel: touch[3]
            };
            swiper.touchEventsDesktop = {
              start: desktop[0],
              move: desktop[1],
              end: desktop[2]
            };
            return swiper.support.touch || !swiper.params.simulateTouch ? swiper.touchEventsTouch : swiper.touchEventsDesktop;
          }(),
          touchEventsData: {
            isTouched: void 0,
            isMoved: void 0,
            allowTouchCallbacks: void 0,
            touchStartTime: void 0,
            isScrolling: void 0,
            currentTranslate: void 0,
            startTranslate: void 0,
            allowThresholdMove: void 0,
            focusableElements: swiper.params.focusableElements,
            lastClickTime: utils_now(),
            clickTimeout: void 0,
            velocities: [],
            allowMomentumBounce: void 0,
            isTouchEvent: void 0,
            startMoving: void 0
          },
          allowClick: true,
          allowTouchMove: swiper.params.allowTouchMove,
          touches: {
            startX: 0,
            startY: 0,
            currentX: 0,
            currentY: 0,
            diff: 0
          },
          imagesToLoad: [],
          imagesLoaded: 0
        });
        swiper.emit("_swiper");
        if (swiper.params.init) swiper.init();
        return swiper;
      }
      enable() {
        const swiper = this;
        if (swiper.enabled) return;
        swiper.enabled = true;
        if (swiper.params.grabCursor) swiper.setGrabCursor();
        swiper.emit("enable");
      }
      disable() {
        const swiper = this;
        if (!swiper.enabled) return;
        swiper.enabled = false;
        if (swiper.params.grabCursor) swiper.unsetGrabCursor();
        swiper.emit("disable");
      }
      setProgress(progress, speed) {
        const swiper = this;
        progress = Math.min(Math.max(progress, 0), 1);
        const min = swiper.minTranslate();
        const max = swiper.maxTranslate();
        const current = (max - min) * progress + min;
        swiper.translateTo(current, "undefined" === typeof speed ? 0 : speed);
        swiper.updateActiveIndex();
        swiper.updateSlidesClasses();
      }
      emitContainerClasses() {
        const swiper = this;
        if (!swiper.params._emitClasses || !swiper.el) return;
        const cls = swiper.el.className.split(" ").filter((className => 0 === className.indexOf("swiper") || 0 === className.indexOf(swiper.params.containerModifierClass)));
        swiper.emit("_containerClasses", cls.join(" "));
      }
      getSlideClasses(slideEl) {
        const swiper = this;
        if (swiper.destroyed) return "";
        return slideEl.className.split(" ").filter((className => 0 === className.indexOf("swiper-slide") || 0 === className.indexOf(swiper.params.slideClass))).join(" ");
      }
      emitSlidesClasses() {
        const swiper = this;
        if (!swiper.params._emitClasses || !swiper.el) return;
        const updates = [];
        swiper.slides.each((slideEl => {
          const classNames = swiper.getSlideClasses(slideEl);
          updates.push({
            slideEl: slideEl,
            classNames: classNames
          });
          swiper.emit("_slideClass", slideEl, classNames);
        }));
        swiper.emit("_slideClasses", updates);
      }
      slidesPerViewDynamic(view, exact) {
        if (void 0 === view) view = "current";
        if (void 0 === exact) exact = false;
        const swiper = this;
        const {params: params, slides: slides, slidesGrid: slidesGrid, slidesSizesGrid: slidesSizesGrid, size: swiperSize, activeIndex: activeIndex} = swiper;
        let spv = 1;
        if (params.centeredSlides) {
          let slideSize = slides[activeIndex].swiperSlideSize;
          let breakLoop;
          for (let i = activeIndex + 1; i < slides.length; i += 1) if (slides[i] && !breakLoop) {
            slideSize += slides[i].swiperSlideSize;
            spv += 1;
            if (slideSize > swiperSize) breakLoop = true;
          }
          for (let i = activeIndex - 1; i >= 0; i -= 1) if (slides[i] && !breakLoop) {
            slideSize += slides[i].swiperSlideSize;
            spv += 1;
            if (slideSize > swiperSize) breakLoop = true;
          }
        } else if ("current" === view) for (let i = activeIndex + 1; i < slides.length; i += 1) {
          const slideInView = exact ? slidesGrid[i] + slidesSizesGrid[i] - slidesGrid[activeIndex] < swiperSize : slidesGrid[i] - slidesGrid[activeIndex] < swiperSize;
          if (slideInView) spv += 1;
        } else for (let i = activeIndex - 1; i >= 0; i -= 1) {
          const slideInView = slidesGrid[activeIndex] - slidesGrid[i] < swiperSize;
          if (slideInView) spv += 1;
        }
        return spv;
      }
      update() {
        const swiper = this;
        if (!swiper || swiper.destroyed) return;
        const {snapGrid: snapGrid, params: params} = swiper;
        if (params.breakpoints) swiper.setBreakpoint();
        swiper.updateSize();
        swiper.updateSlides();
        swiper.updateProgress();
        swiper.updateSlidesClasses();
        function setTranslate() {
          const translateValue = swiper.rtlTranslate ? -1 * swiper.translate : swiper.translate;
          const newTranslate = Math.min(Math.max(translateValue, swiper.maxTranslate()), swiper.minTranslate());
          swiper.setTranslate(newTranslate);
          swiper.updateActiveIndex();
          swiper.updateSlidesClasses();
        }
        let translated;
        if (swiper.params.freeMode && swiper.params.freeMode.enabled) {
          setTranslate();
          if (swiper.params.autoHeight) swiper.updateAutoHeight();
        } else {
          if (("auto" === swiper.params.slidesPerView || swiper.params.slidesPerView > 1) && swiper.isEnd && !swiper.params.centeredSlides) translated = swiper.slideTo(swiper.slides.length - 1, 0, false, true); else translated = swiper.slideTo(swiper.activeIndex, 0, false, true);
          if (!translated) setTranslate();
        }
        if (params.watchOverflow && snapGrid !== swiper.snapGrid) swiper.checkOverflow();
        swiper.emit("update");
      }
      changeDirection(newDirection, needUpdate) {
        if (void 0 === needUpdate) needUpdate = true;
        const swiper = this;
        const currentDirection = swiper.params.direction;
        if (!newDirection) newDirection = "horizontal" === currentDirection ? "vertical" : "horizontal";
        if (newDirection === currentDirection || "horizontal" !== newDirection && "vertical" !== newDirection) return swiper;
        swiper.$el.removeClass(`${swiper.params.containerModifierClass}${currentDirection}`).addClass(`${swiper.params.containerModifierClass}${newDirection}`);
        swiper.emitContainerClasses();
        swiper.params.direction = newDirection;
        swiper.slides.each((slideEl => {
          if ("vertical" === newDirection) slideEl.style.width = ""; else slideEl.style.height = "";
        }));
        swiper.emit("changeDirection");
        if (needUpdate) swiper.update();
        return swiper;
      }
      mount(el) {
        const swiper = this;
        if (swiper.mounted) return true;
        const $el = dom(el || swiper.params.el);
        el = $el[0];
        if (!el) return false;
        el.swiper = swiper;
        const getWrapperSelector = () => `.${(swiper.params.wrapperClass || "").trim().split(" ").join(".")}`;
        const getWrapper = () => {
          if (el && el.shadowRoot && el.shadowRoot.querySelector) {
            const res = dom(el.shadowRoot.querySelector(getWrapperSelector()));
            res.children = options => $el.children(options);
            return res;
          }
          return $el.children(getWrapperSelector());
        };
        let $wrapperEl = getWrapper();
        if (0 === $wrapperEl.length && swiper.params.createElements) {
          const document = ssr_window_esm_getDocument();
          const wrapper = document.createElement("div");
          $wrapperEl = dom(wrapper);
          wrapper.className = swiper.params.wrapperClass;
          $el.append(wrapper);
          $el.children(`.${swiper.params.slideClass}`).each((slideEl => {
            $wrapperEl.append(slideEl);
          }));
        }
        Object.assign(swiper, {
          $el: $el,
          el: el,
          $wrapperEl: $wrapperEl,
          wrapperEl: $wrapperEl[0],
          mounted: true,
          rtl: "rtl" === el.dir.toLowerCase() || "rtl" === $el.css("direction"),
          rtlTranslate: "horizontal" === swiper.params.direction && ("rtl" === el.dir.toLowerCase() || "rtl" === $el.css("direction")),
          wrongRTL: "-webkit-box" === $wrapperEl.css("display")
        });
        return true;
      }
      init(el) {
        const swiper = this;
        if (swiper.initialized) return swiper;
        const mounted = swiper.mount(el);
        if (false === mounted) return swiper;
        swiper.emit("beforeInit");
        if (swiper.params.breakpoints) swiper.setBreakpoint();
        swiper.addClasses();
        if (swiper.params.loop) swiper.loopCreate();
        swiper.updateSize();
        swiper.updateSlides();
        if (swiper.params.watchOverflow) swiper.checkOverflow();
        if (swiper.params.grabCursor && swiper.enabled) swiper.setGrabCursor();
        if (swiper.params.preloadImages) swiper.preloadImages();
        if (swiper.params.loop) swiper.slideTo(swiper.params.initialSlide + swiper.loopedSlides, 0, swiper.params.runCallbacksOnInit, false, true); else swiper.slideTo(swiper.params.initialSlide, 0, swiper.params.runCallbacksOnInit, false, true);
        swiper.attachEvents();
        swiper.initialized = true;
        swiper.emit("init");
        swiper.emit("afterInit");
        return swiper;
      }
      destroy(deleteInstance, cleanStyles) {
        if (void 0 === deleteInstance) deleteInstance = true;
        if (void 0 === cleanStyles) cleanStyles = true;
        const swiper = this;
        const {params: params, $el: $el, $wrapperEl: $wrapperEl, slides: slides} = swiper;
        if ("undefined" === typeof swiper.params || swiper.destroyed) return null;
        swiper.emit("beforeDestroy");
        swiper.initialized = false;
        swiper.detachEvents();
        if (params.loop) swiper.loopDestroy();
        if (cleanStyles) {
          swiper.removeClasses();
          $el.removeAttr("style");
          $wrapperEl.removeAttr("style");
          if (slides && slides.length) slides.removeClass([ params.slideVisibleClass, params.slideActiveClass, params.slideNextClass, params.slidePrevClass ].join(" ")).removeAttr("style").removeAttr("data-swiper-slide-index");
        }
        swiper.emit("destroy");
        Object.keys(swiper.eventsListeners).forEach((eventName => {
          swiper.off(eventName);
        }));
        if (false !== deleteInstance) {
          swiper.$el[0].swiper = null;
          deleteProps(swiper);
        }
        swiper.destroyed = true;
        return null;
      }
      static extendDefaults(newDefaults) {
        utils_extend(extendedDefaults, newDefaults);
      }
      static get extendedDefaults() {
        return extendedDefaults;
      }
      static get defaults() {
        return defaults;
      }
      static installModule(mod) {
        if (!Swiper.prototype.__modules__) Swiper.prototype.__modules__ = [];
        const modules = Swiper.prototype.__modules__;
        if ("function" === typeof mod && modules.indexOf(mod) < 0) modules.push(mod);
      }
      static use(module) {
        if (Array.isArray(module)) {
          module.forEach((m => Swiper.installModule(m)));
          return Swiper;
        }
        Swiper.installModule(module);
        return Swiper;
      }
    }
    Object.keys(prototypes).forEach((prototypeGroup => {
      Object.keys(prototypes[prototypeGroup]).forEach((protoMethod => {
        Swiper.prototype[protoMethod] = prototypes[prototypeGroup][protoMethod];
      }));
    }));
    Swiper.use([ Resize, Observer ]);
    var core = Swiper;
    function create_element_if_not_defined_createElementIfNotDefined(swiper, originalParams, params, checkProps) {
      const document = ssr_window_esm_getDocument();
      if (swiper.params.createElements) Object.keys(checkProps).forEach((key => {
        if (!params[key] && true === params.auto) {
          let element = swiper.$el.children(`.${checkProps[key]}`)[0];
          if (!element) {
            element = document.createElement("div");
            element.className = checkProps[key];
            swiper.$el.append(element);
          }
          params[key] = element;
          originalParams[key] = element;
        }
      }));
      return params;
    }
    function Navigation(_ref) {
      let {swiper: swiper, extendParams: extendParams, on: on, emit: emit} = _ref;
      extendParams({
        navigation: {
          nextEl: null,
          prevEl: null,
          hideOnClick: false,
          disabledClass: "swiper-button-disabled",
          hiddenClass: "swiper-button-hidden",
          lockClass: "swiper-button-lock"
        }
      });
      swiper.navigation = {
        nextEl: null,
        $nextEl: null,
        prevEl: null,
        $prevEl: null
      };
      function getEl(el) {
        let $el;
        if (el) {
          $el = dom(el);
          if (swiper.params.uniqueNavElements && "string" === typeof el && $el.length > 1 && 1 === swiper.$el.find(el).length) $el = swiper.$el.find(el);
        }
        return $el;
      }
      function toggleEl($el, disabled) {
        const params = swiper.params.navigation;
        if ($el && $el.length > 0) {
          $el[disabled ? "addClass" : "removeClass"](params.disabledClass);
          if ($el[0] && "BUTTON" === $el[0].tagName) $el[0].disabled = disabled;
          if (swiper.params.watchOverflow && swiper.enabled) $el[swiper.isLocked ? "addClass" : "removeClass"](params.lockClass);
        }
      }
      function update() {
        if (swiper.params.loop) return;
        const {$nextEl: $nextEl, $prevEl: $prevEl} = swiper.navigation;
        toggleEl($prevEl, swiper.isBeginning && !swiper.params.rewind);
        toggleEl($nextEl, swiper.isEnd && !swiper.params.rewind);
      }
      function onPrevClick(e) {
        e.preventDefault();
        if (swiper.isBeginning && !swiper.params.loop && !swiper.params.rewind) return;
        swiper.slidePrev();
      }
      function onNextClick(e) {
        e.preventDefault();
        if (swiper.isEnd && !swiper.params.loop && !swiper.params.rewind) return;
        swiper.slideNext();
      }
      function init() {
        const params = swiper.params.navigation;
        swiper.params.navigation = create_element_if_not_defined_createElementIfNotDefined(swiper, swiper.originalParams.navigation, swiper.params.navigation, {
          nextEl: "swiper-button-next",
          prevEl: "swiper-button-prev"
        });
        if (!(params.nextEl || params.prevEl)) return;
        const $nextEl = getEl(params.nextEl);
        const $prevEl = getEl(params.prevEl);
        if ($nextEl && $nextEl.length > 0) $nextEl.on("click", onNextClick);
        if ($prevEl && $prevEl.length > 0) $prevEl.on("click", onPrevClick);
        Object.assign(swiper.navigation, {
          $nextEl: $nextEl,
          nextEl: $nextEl && $nextEl[0],
          $prevEl: $prevEl,
          prevEl: $prevEl && $prevEl[0]
        });
        if (!swiper.enabled) {
          if ($nextEl) $nextEl.addClass(params.lockClass);
          if ($prevEl) $prevEl.addClass(params.lockClass);
        }
      }
      function destroy() {
        const {$nextEl: $nextEl, $prevEl: $prevEl} = swiper.navigation;
        if ($nextEl && $nextEl.length) {
          $nextEl.off("click", onNextClick);
          $nextEl.removeClass(swiper.params.navigation.disabledClass);
        }
        if ($prevEl && $prevEl.length) {
          $prevEl.off("click", onPrevClick);
          $prevEl.removeClass(swiper.params.navigation.disabledClass);
        }
      }
      on("init", (() => {
        init();
        update();
      }));
      on("toEdge fromEdge lock unlock", (() => {
        update();
      }));
      on("destroy", (() => {
        destroy();
      }));
      on("enable disable", (() => {
        const {$nextEl: $nextEl, $prevEl: $prevEl} = swiper.navigation;
        if ($nextEl) $nextEl[swiper.enabled ? "removeClass" : "addClass"](swiper.params.navigation.lockClass);
        if ($prevEl) $prevEl[swiper.enabled ? "removeClass" : "addClass"](swiper.params.navigation.lockClass);
      }));
      on("click", ((_s, e) => {
        const {$nextEl: $nextEl, $prevEl: $prevEl} = swiper.navigation;
        const targetEl = e.target;
        if (swiper.params.navigation.hideOnClick && !dom(targetEl).is($prevEl) && !dom(targetEl).is($nextEl)) {
          if (swiper.pagination && swiper.params.pagination && swiper.params.pagination.clickable && (swiper.pagination.el === targetEl || swiper.pagination.el.contains(targetEl))) return;
          let isHidden;
          if ($nextEl) isHidden = $nextEl.hasClass(swiper.params.navigation.hiddenClass); else if ($prevEl) isHidden = $prevEl.hasClass(swiper.params.navigation.hiddenClass);
          if (true === isHidden) emit("navigationShow"); else emit("navigationHide");
          if ($nextEl) $nextEl.toggleClass(swiper.params.navigation.hiddenClass);
          if ($prevEl) $prevEl.toggleClass(swiper.params.navigation.hiddenClass);
        }
      }));
      Object.assign(swiper.navigation, {
        update: update,
        init: init,
        destroy: destroy
      });
    }
    function Scrollbar(_ref) {
      let {swiper: swiper, extendParams: extendParams, on: on, emit: emit} = _ref;
      const document = ssr_window_esm_getDocument();
      let isTouched = false;
      let timeout = null;
      let dragTimeout = null;
      let dragStartPos;
      let dragSize;
      let trackSize;
      let divider;
      extendParams({
        scrollbar: {
          el: null,
          dragSize: "auto",
          hide: false,
          draggable: false,
          snapOnRelease: true,
          lockClass: "swiper-scrollbar-lock",
          dragClass: "swiper-scrollbar-drag"
        }
      });
      swiper.scrollbar = {
        el: null,
        dragEl: null,
        $el: null,
        $dragEl: null
      };
      function setTranslate() {
        if (!swiper.params.scrollbar.el || !swiper.scrollbar.el) return;
        const {scrollbar: scrollbar, rtlTranslate: rtl, progress: progress} = swiper;
        const {$dragEl: $dragEl, $el: $el} = scrollbar;
        const params = swiper.params.scrollbar;
        let newSize = dragSize;
        let newPos = (trackSize - dragSize) * progress;
        if (rtl) {
          newPos = -newPos;
          if (newPos > 0) {
            newSize = dragSize - newPos;
            newPos = 0;
          } else if (-newPos + dragSize > trackSize) newSize = trackSize + newPos;
        } else if (newPos < 0) {
          newSize = dragSize + newPos;
          newPos = 0;
        } else if (newPos + dragSize > trackSize) newSize = trackSize - newPos;
        if (swiper.isHorizontal()) {
          $dragEl.transform(`translate3d(${newPos}px, 0, 0)`);
          $dragEl[0].style.width = `${newSize}px`;
        } else {
          $dragEl.transform(`translate3d(0px, ${newPos}px, 0)`);
          $dragEl[0].style.height = `${newSize}px`;
        }
        if (params.hide) {
          clearTimeout(timeout);
          $el[0].style.opacity = 1;
          timeout = setTimeout((() => {
            $el[0].style.opacity = 0;
            $el.transition(400);
          }), 1e3);
        }
      }
      function setTransition(duration) {
        if (!swiper.params.scrollbar.el || !swiper.scrollbar.el) return;
        swiper.scrollbar.$dragEl.transition(duration);
      }
      function updateSize() {
        if (!swiper.params.scrollbar.el || !swiper.scrollbar.el) return;
        const {scrollbar: scrollbar} = swiper;
        const {$dragEl: $dragEl, $el: $el} = scrollbar;
        $dragEl[0].style.width = "";
        $dragEl[0].style.height = "";
        trackSize = swiper.isHorizontal() ? $el[0].offsetWidth : $el[0].offsetHeight;
        divider = swiper.size / (swiper.virtualSize + swiper.params.slidesOffsetBefore - (swiper.params.centeredSlides ? swiper.snapGrid[0] : 0));
        if ("auto" === swiper.params.scrollbar.dragSize) dragSize = trackSize * divider; else dragSize = parseInt(swiper.params.scrollbar.dragSize, 10);
        if (swiper.isHorizontal()) $dragEl[0].style.width = `${dragSize}px`; else $dragEl[0].style.height = `${dragSize}px`;
        if (divider >= 1) $el[0].style.display = "none"; else $el[0].style.display = "";
        if (swiper.params.scrollbar.hide) $el[0].style.opacity = 0;
        if (swiper.params.watchOverflow && swiper.enabled) scrollbar.$el[swiper.isLocked ? "addClass" : "removeClass"](swiper.params.scrollbar.lockClass);
      }
      function getPointerPosition(e) {
        if (swiper.isHorizontal()) return "touchstart" === e.type || "touchmove" === e.type ? e.targetTouches[0].clientX : e.clientX;
        return "touchstart" === e.type || "touchmove" === e.type ? e.targetTouches[0].clientY : e.clientY;
      }
      function setDragPosition(e) {
        const {scrollbar: scrollbar, rtlTranslate: rtl} = swiper;
        const {$el: $el} = scrollbar;
        let positionRatio;
        positionRatio = (getPointerPosition(e) - $el.offset()[swiper.isHorizontal() ? "left" : "top"] - (null !== dragStartPos ? dragStartPos : dragSize / 2)) / (trackSize - dragSize);
        positionRatio = Math.max(Math.min(positionRatio, 1), 0);
        if (rtl) positionRatio = 1 - positionRatio;
        const position = swiper.minTranslate() + (swiper.maxTranslate() - swiper.minTranslate()) * positionRatio;
        swiper.updateProgress(position);
        swiper.setTranslate(position);
        swiper.updateActiveIndex();
        swiper.updateSlidesClasses();
      }
      function onDragStart(e) {
        const params = swiper.params.scrollbar;
        const {scrollbar: scrollbar, $wrapperEl: $wrapperEl} = swiper;
        const {$el: $el, $dragEl: $dragEl} = scrollbar;
        isTouched = true;
        dragStartPos = e.target === $dragEl[0] || e.target === $dragEl ? getPointerPosition(e) - e.target.getBoundingClientRect()[swiper.isHorizontal() ? "left" : "top"] : null;
        e.preventDefault();
        e.stopPropagation();
        $wrapperEl.transition(100);
        $dragEl.transition(100);
        setDragPosition(e);
        clearTimeout(dragTimeout);
        $el.transition(0);
        if (params.hide) $el.css("opacity", 1);
        if (swiper.params.cssMode) swiper.$wrapperEl.css("scroll-snap-type", "none");
        emit("scrollbarDragStart", e);
      }
      function onDragMove(e) {
        const {scrollbar: scrollbar, $wrapperEl: $wrapperEl} = swiper;
        const {$el: $el, $dragEl: $dragEl} = scrollbar;
        if (!isTouched) return;
        if (e.preventDefault) e.preventDefault(); else e.returnValue = false;
        setDragPosition(e);
        $wrapperEl.transition(0);
        $el.transition(0);
        $dragEl.transition(0);
        emit("scrollbarDragMove", e);
      }
      function onDragEnd(e) {
        const params = swiper.params.scrollbar;
        const {scrollbar: scrollbar, $wrapperEl: $wrapperEl} = swiper;
        const {$el: $el} = scrollbar;
        if (!isTouched) return;
        isTouched = false;
        if (swiper.params.cssMode) {
          swiper.$wrapperEl.css("scroll-snap-type", "");
          $wrapperEl.transition("");
        }
        if (params.hide) {
          clearTimeout(dragTimeout);
          dragTimeout = utils_nextTick((() => {
            $el.css("opacity", 0);
            $el.transition(400);
          }), 1e3);
        }
        emit("scrollbarDragEnd", e);
        if (params.snapOnRelease) swiper.slideToClosest();
      }
      function events(method) {
        const {scrollbar: scrollbar, touchEventsTouch: touchEventsTouch, touchEventsDesktop: touchEventsDesktop, params: params, support: support} = swiper;
        const $el = scrollbar.$el;
        const target = $el[0];
        const activeListener = support.passiveListener && params.passiveListeners ? {
          passive: false,
          capture: false
        } : false;
        const passiveListener = support.passiveListener && params.passiveListeners ? {
          passive: true,
          capture: false
        } : false;
        if (!target) return;
        const eventMethod = "on" === method ? "addEventListener" : "removeEventListener";
        if (!support.touch) {
          target[eventMethod](touchEventsDesktop.start, onDragStart, activeListener);
          document[eventMethod](touchEventsDesktop.move, onDragMove, activeListener);
          document[eventMethod](touchEventsDesktop.end, onDragEnd, passiveListener);
        } else {
          target[eventMethod](touchEventsTouch.start, onDragStart, activeListener);
          target[eventMethod](touchEventsTouch.move, onDragMove, activeListener);
          target[eventMethod](touchEventsTouch.end, onDragEnd, passiveListener);
        }
      }
      function enableDraggable() {
        if (!swiper.params.scrollbar.el) return;
        events("on");
      }
      function disableDraggable() {
        if (!swiper.params.scrollbar.el) return;
        events("off");
      }
      function init() {
        const {scrollbar: scrollbar, $el: $swiperEl} = swiper;
        swiper.params.scrollbar = create_element_if_not_defined_createElementIfNotDefined(swiper, swiper.originalParams.scrollbar, swiper.params.scrollbar, {
          el: "swiper-scrollbar"
        });
        const params = swiper.params.scrollbar;
        if (!params.el) return;
        let $el = dom(params.el);
        if (swiper.params.uniqueNavElements && "string" === typeof params.el && $el.length > 1 && 1 === $swiperEl.find(params.el).length) $el = $swiperEl.find(params.el);
        let $dragEl = $el.find(`.${swiper.params.scrollbar.dragClass}`);
        if (0 === $dragEl.length) {
          $dragEl = dom(`<div class="${swiper.params.scrollbar.dragClass}"></div>`);
          $el.append($dragEl);
        }
        Object.assign(scrollbar, {
          $el: $el,
          el: $el[0],
          $dragEl: $dragEl,
          dragEl: $dragEl[0]
        });
        if (params.draggable) enableDraggable();
        if ($el) $el[swiper.enabled ? "removeClass" : "addClass"](swiper.params.scrollbar.lockClass);
      }
      function destroy() {
        disableDraggable();
      }
      on("init", (() => {
        init();
        updateSize();
        setTranslate();
      }));
      on("update resize observerUpdate lock unlock", (() => {
        updateSize();
      }));
      on("setTranslate", (() => {
        setTranslate();
      }));
      on("setTransition", ((_s, duration) => {
        setTransition(duration);
      }));
      on("enable disable", (() => {
        const {$el: $el} = swiper.scrollbar;
        if ($el) $el[swiper.enabled ? "removeClass" : "addClass"](swiper.params.scrollbar.lockClass);
      }));
      on("destroy", (() => {
        destroy();
      }));
      Object.assign(swiper.scrollbar, {
        updateSize: updateSize,
        setTranslate: setTranslate,
        init: init,
        destroy: destroy
      });
    }
    function Lazy(_ref) {
      let {swiper: swiper, extendParams: extendParams, on: on, emit: emit} = _ref;
      extendParams({
        lazy: {
          checkInView: false,
          enabled: false,
          loadPrevNext: false,
          loadPrevNextAmount: 1,
          loadOnTransitionStart: false,
          scrollingElement: "",
          elementClass: "swiper-lazy",
          loadingClass: "swiper-lazy-loading",
          loadedClass: "swiper-lazy-loaded",
          preloaderClass: "swiper-lazy-preloader"
        }
      });
      swiper.lazy = {};
      let scrollHandlerAttached = false;
      let initialImageLoaded = false;
      function loadInSlide(index, loadInDuplicate) {
        if (void 0 === loadInDuplicate) loadInDuplicate = true;
        const params = swiper.params.lazy;
        if ("undefined" === typeof index) return;
        if (0 === swiper.slides.length) return;
        const isVirtual = swiper.virtual && swiper.params.virtual.enabled;
        const $slideEl = isVirtual ? swiper.$wrapperEl.children(`.${swiper.params.slideClass}[data-swiper-slide-index="${index}"]`) : swiper.slides.eq(index);
        const $images = $slideEl.find(`.${params.elementClass}:not(.${params.loadedClass}):not(.${params.loadingClass})`);
        if ($slideEl.hasClass(params.elementClass) && !$slideEl.hasClass(params.loadedClass) && !$slideEl.hasClass(params.loadingClass)) $images.push($slideEl[0]);
        if (0 === $images.length) return;
        $images.each((imageEl => {
          const $imageEl = dom(imageEl);
          $imageEl.addClass(params.loadingClass);
          const background = $imageEl.attr("data-background");
          const src = $imageEl.attr("data-src");
          const srcset = $imageEl.attr("data-srcset");
          const sizes = $imageEl.attr("data-sizes");
          const $pictureEl = $imageEl.parent("picture");
          swiper.loadImage($imageEl[0], src || background, srcset, sizes, false, (() => {
            if ("undefined" === typeof swiper || null === swiper || !swiper || swiper && !swiper.params || swiper.destroyed) return;
            if (background) {
              $imageEl.css("background-image", `url("${background}")`);
              $imageEl.removeAttr("data-background");
            } else {
              if (srcset) {
                $imageEl.attr("srcset", srcset);
                $imageEl.removeAttr("data-srcset");
              }
              if (sizes) {
                $imageEl.attr("sizes", sizes);
                $imageEl.removeAttr("data-sizes");
              }
              if ($pictureEl.length) $pictureEl.children("source").each((sourceEl => {
                const $source = dom(sourceEl);
                if ($source.attr("data-srcset")) {
                  $source.attr("srcset", $source.attr("data-srcset"));
                  $source.removeAttr("data-srcset");
                }
              }));
              if (src) {
                $imageEl.attr("src", src);
                $imageEl.removeAttr("data-src");
              }
            }
            $imageEl.addClass(params.loadedClass).removeClass(params.loadingClass);
            $slideEl.find(`.${params.preloaderClass}`).remove();
            if (swiper.params.loop && loadInDuplicate) {
              const slideOriginalIndex = $slideEl.attr("data-swiper-slide-index");
              if ($slideEl.hasClass(swiper.params.slideDuplicateClass)) {
                const originalSlide = swiper.$wrapperEl.children(`[data-swiper-slide-index="${slideOriginalIndex}"]:not(.${swiper.params.slideDuplicateClass})`);
                loadInSlide(originalSlide.index(), false);
              } else {
                const duplicatedSlide = swiper.$wrapperEl.children(`.${swiper.params.slideDuplicateClass}[data-swiper-slide-index="${slideOriginalIndex}"]`);
                loadInSlide(duplicatedSlide.index(), false);
              }
            }
            emit("lazyImageReady", $slideEl[0], $imageEl[0]);
            if (swiper.params.autoHeight) swiper.updateAutoHeight();
          }));
          emit("lazyImageLoad", $slideEl[0], $imageEl[0]);
        }));
      }
      function load() {
        const {$wrapperEl: $wrapperEl, params: swiperParams, slides: slides, activeIndex: activeIndex} = swiper;
        const isVirtual = swiper.virtual && swiperParams.virtual.enabled;
        const params = swiperParams.lazy;
        let slidesPerView = swiperParams.slidesPerView;
        if ("auto" === slidesPerView) slidesPerView = 0;
        function slideExist(index) {
          if (isVirtual) {
            if ($wrapperEl.children(`.${swiperParams.slideClass}[data-swiper-slide-index="${index}"]`).length) return true;
          } else if (slides[index]) return true;
          return false;
        }
        function slideIndex(slideEl) {
          if (isVirtual) return dom(slideEl).attr("data-swiper-slide-index");
          return dom(slideEl).index();
        }
        if (!initialImageLoaded) initialImageLoaded = true;
        if (swiper.params.watchSlidesProgress) $wrapperEl.children(`.${swiperParams.slideVisibleClass}`).each((slideEl => {
          const index = isVirtual ? dom(slideEl).attr("data-swiper-slide-index") : dom(slideEl).index();
          loadInSlide(index);
        })); else if (slidesPerView > 1) {
          for (let i = activeIndex; i < activeIndex + slidesPerView; i += 1) if (slideExist(i)) loadInSlide(i);
        } else loadInSlide(activeIndex);
        if (params.loadPrevNext) if (slidesPerView > 1 || params.loadPrevNextAmount && params.loadPrevNextAmount > 1) {
          const amount = params.loadPrevNextAmount;
          const spv = slidesPerView;
          const maxIndex = Math.min(activeIndex + spv + Math.max(amount, spv), slides.length);
          const minIndex = Math.max(activeIndex - Math.max(spv, amount), 0);
          for (let i = activeIndex + slidesPerView; i < maxIndex; i += 1) if (slideExist(i)) loadInSlide(i);
          for (let i = minIndex; i < activeIndex; i += 1) if (slideExist(i)) loadInSlide(i);
        } else {
          const nextSlide = $wrapperEl.children(`.${swiperParams.slideNextClass}`);
          if (nextSlide.length > 0) loadInSlide(slideIndex(nextSlide));
          const prevSlide = $wrapperEl.children(`.${swiperParams.slidePrevClass}`);
          if (prevSlide.length > 0) loadInSlide(slideIndex(prevSlide));
        }
      }
      function checkInViewOnLoad() {
        const window = ssr_window_esm_getWindow();
        if (!swiper || swiper.destroyed) return;
        const $scrollElement = swiper.params.lazy.scrollingElement ? dom(swiper.params.lazy.scrollingElement) : dom(window);
        const isWindow = $scrollElement[0] === window;
        const scrollElementWidth = isWindow ? window.innerWidth : $scrollElement[0].offsetWidth;
        const scrollElementHeight = isWindow ? window.innerHeight : $scrollElement[0].offsetHeight;
        const swiperOffset = swiper.$el.offset();
        const {rtlTranslate: rtl} = swiper;
        let inView = false;
        if (rtl) swiperOffset.left -= swiper.$el[0].scrollLeft;
        const swiperCoord = [ [ swiperOffset.left, swiperOffset.top ], [ swiperOffset.left + swiper.width, swiperOffset.top ], [ swiperOffset.left, swiperOffset.top + swiper.height ], [ swiperOffset.left + swiper.width, swiperOffset.top + swiper.height ] ];
        for (let i = 0; i < swiperCoord.length; i += 1) {
          const point = swiperCoord[i];
          if (point[0] >= 0 && point[0] <= scrollElementWidth && point[1] >= 0 && point[1] <= scrollElementHeight) {
            if (0 === point[0] && 0 === point[1]) continue;
            inView = true;
          }
        }
        const passiveListener = "touchstart" === swiper.touchEvents.start && swiper.support.passiveListener && swiper.params.passiveListeners ? {
          passive: true,
          capture: false
        } : false;
        if (inView) {
          load();
          $scrollElement.off("scroll", checkInViewOnLoad, passiveListener);
        } else if (!scrollHandlerAttached) {
          scrollHandlerAttached = true;
          $scrollElement.on("scroll", checkInViewOnLoad, passiveListener);
        }
      }
      on("beforeInit", (() => {
        if (swiper.params.lazy.enabled && swiper.params.preloadImages) swiper.params.preloadImages = false;
      }));
      on("init", (() => {
        if (swiper.params.lazy.enabled) if (swiper.params.lazy.checkInView) checkInViewOnLoad(); else load();
      }));
      on("scroll", (() => {
        if (swiper.params.freeMode && swiper.params.freeMode.enabled && !swiper.params.freeMode.sticky) load();
      }));
      on("scrollbarDragMove resize _freeModeNoMomentumRelease", (() => {
        if (swiper.params.lazy.enabled) if (swiper.params.lazy.checkInView) checkInViewOnLoad(); else load();
      }));
      on("transitionStart", (() => {
        if (swiper.params.lazy.enabled) if (swiper.params.lazy.loadOnTransitionStart || !swiper.params.lazy.loadOnTransitionStart && !initialImageLoaded) if (swiper.params.lazy.checkInView) checkInViewOnLoad(); else load();
      }));
      on("transitionEnd", (() => {
        if (swiper.params.lazy.enabled && !swiper.params.lazy.loadOnTransitionStart) if (swiper.params.lazy.checkInView) checkInViewOnLoad(); else load();
      }));
      on("slideChange", (() => {
        const {lazy: lazy, cssMode: cssMode, watchSlidesProgress: watchSlidesProgress, touchReleaseOnEdges: touchReleaseOnEdges, resistanceRatio: resistanceRatio} = swiper.params;
        if (lazy.enabled && (cssMode || watchSlidesProgress && (touchReleaseOnEdges || 0 === resistanceRatio))) load();
      }));
      Object.assign(swiper.lazy, {
        load: load,
        loadInSlide: loadInSlide
      });
    }
    function classes_to_selector_classesToSelector(classes) {
      if (void 0 === classes) classes = "";
      return `.${classes.trim().replace(/([\.:!\/])/g, "\\$1").replace(/ /g, ".")}`;
    }
    function A11y(_ref) {
      let {swiper: swiper, extendParams: extendParams, on: on} = _ref;
      extendParams({
        a11y: {
          enabled: true,
          notificationClass: "swiper-notification",
          prevSlideMessage: "Previous slide",
          nextSlideMessage: "Next slide",
          firstSlideMessage: "This is the first slide",
          lastSlideMessage: "This is the last slide",
          paginationBulletMessage: "Go to slide {{index}}",
          slideLabelMessage: "{{index}} / {{slidesLength}}",
          containerMessage: null,
          containerRoleDescriptionMessage: null,
          itemRoleDescriptionMessage: null,
          slideRole: "group",
          id: null
        }
      });
      let liveRegion = null;
      function notify(message) {
        const notification = liveRegion;
        if (0 === notification.length) return;
        notification.html("");
        notification.html(message);
      }
      function getRandomNumber(size) {
        if (void 0 === size) size = 16;
        const randomChar = () => Math.round(16 * Math.random()).toString(16);
        return "x".repeat(size).replace(/x/g, randomChar);
      }
      function makeElFocusable($el) {
        $el.attr("tabIndex", "0");
      }
      function makeElNotFocusable($el) {
        $el.attr("tabIndex", "-1");
      }
      function addElRole($el, role) {
        $el.attr("role", role);
      }
      function addElRoleDescription($el, description) {
        $el.attr("aria-roledescription", description);
      }
      function addElControls($el, controls) {
        $el.attr("aria-controls", controls);
      }
      function addElLabel($el, label) {
        $el.attr("aria-label", label);
      }
      function addElId($el, id) {
        $el.attr("id", id);
      }
      function addElLive($el, live) {
        $el.attr("aria-live", live);
      }
      function disableEl($el) {
        $el.attr("aria-disabled", true);
      }
      function enableEl($el) {
        $el.attr("aria-disabled", false);
      }
      function onEnterOrSpaceKey(e) {
        if (13 !== e.keyCode && 32 !== e.keyCode) return;
        const params = swiper.params.a11y;
        const $targetEl = dom(e.target);
        if (swiper.navigation && swiper.navigation.$nextEl && $targetEl.is(swiper.navigation.$nextEl)) {
          if (!(swiper.isEnd && !swiper.params.loop)) swiper.slideNext();
          if (swiper.isEnd) notify(params.lastSlideMessage); else notify(params.nextSlideMessage);
        }
        if (swiper.navigation && swiper.navigation.$prevEl && $targetEl.is(swiper.navigation.$prevEl)) {
          if (!(swiper.isBeginning && !swiper.params.loop)) swiper.slidePrev();
          if (swiper.isBeginning) notify(params.firstSlideMessage); else notify(params.prevSlideMessage);
        }
        if (swiper.pagination && $targetEl.is(classes_to_selector_classesToSelector(swiper.params.pagination.bulletClass))) $targetEl[0].click();
      }
      function updateNavigation() {
        if (swiper.params.loop || swiper.params.rewind || !swiper.navigation) return;
        const {$nextEl: $nextEl, $prevEl: $prevEl} = swiper.navigation;
        if ($prevEl && $prevEl.length > 0) if (swiper.isBeginning) {
          disableEl($prevEl);
          makeElNotFocusable($prevEl);
        } else {
          enableEl($prevEl);
          makeElFocusable($prevEl);
        }
        if ($nextEl && $nextEl.length > 0) if (swiper.isEnd) {
          disableEl($nextEl);
          makeElNotFocusable($nextEl);
        } else {
          enableEl($nextEl);
          makeElFocusable($nextEl);
        }
      }
      function hasPagination() {
        return swiper.pagination && swiper.pagination.bullets && swiper.pagination.bullets.length;
      }
      function hasClickablePagination() {
        return hasPagination() && swiper.params.pagination.clickable;
      }
      function updatePagination() {
        const params = swiper.params.a11y;
        if (!hasPagination()) return;
        swiper.pagination.bullets.each((bulletEl => {
          const $bulletEl = dom(bulletEl);
          if (swiper.params.pagination.clickable) {
            makeElFocusable($bulletEl);
            if (!swiper.params.pagination.renderBullet) {
              addElRole($bulletEl, "button");
              addElLabel($bulletEl, params.paginationBulletMessage.replace(/\{\{index\}\}/, $bulletEl.index() + 1));
            }
          }
          if ($bulletEl.is(`.${swiper.params.pagination.bulletActiveClass}`)) $bulletEl.attr("aria-current", "true"); else $bulletEl.removeAttr("aria-current");
        }));
      }
      const initNavEl = ($el, wrapperId, message) => {
        makeElFocusable($el);
        if ("BUTTON" !== $el[0].tagName) {
          addElRole($el, "button");
          $el.on("keydown", onEnterOrSpaceKey);
        }
        addElLabel($el, message);
        addElControls($el, wrapperId);
      };
      const handleFocus = e => {
        const slideEl = e.target.closest(`.${swiper.params.slideClass}`);
        if (!slideEl || !swiper.slides.includes(slideEl)) return;
        const isActive = swiper.slides.indexOf(slideEl) === swiper.activeIndex;
        const isVisible = swiper.params.watchSlidesProgress && swiper.visibleSlides && swiper.visibleSlides.includes(slideEl);
        if (isActive || isVisible) return;
        swiper.slideTo(swiper.slides.indexOf(slideEl), 0);
      };
      function init() {
        const params = swiper.params.a11y;
        swiper.$el.append(liveRegion);
        const $containerEl = swiper.$el;
        if (params.containerRoleDescriptionMessage) addElRoleDescription($containerEl, params.containerRoleDescriptionMessage);
        if (params.containerMessage) addElLabel($containerEl, params.containerMessage);
        const $wrapperEl = swiper.$wrapperEl;
        const wrapperId = params.id || $wrapperEl.attr("id") || `swiper-wrapper-${getRandomNumber(16)}`;
        const live = swiper.params.autoplay && swiper.params.autoplay.enabled ? "off" : "polite";
        addElId($wrapperEl, wrapperId);
        addElLive($wrapperEl, live);
        if (params.itemRoleDescriptionMessage) addElRoleDescription(dom(swiper.slides), params.itemRoleDescriptionMessage);
        addElRole(dom(swiper.slides), params.slideRole);
        const slidesLength = swiper.params.loop ? swiper.slides.filter((el => !el.classList.contains(swiper.params.slideDuplicateClass))).length : swiper.slides.length;
        swiper.slides.each(((slideEl, index) => {
          const $slideEl = dom(slideEl);
          const slideIndex = swiper.params.loop ? parseInt($slideEl.attr("data-swiper-slide-index"), 10) : index;
          const ariaLabelMessage = params.slideLabelMessage.replace(/\{\{index\}\}/, slideIndex + 1).replace(/\{\{slidesLength\}\}/, slidesLength);
          addElLabel($slideEl, ariaLabelMessage);
        }));
        let $nextEl;
        let $prevEl;
        if (swiper.navigation && swiper.navigation.$nextEl) $nextEl = swiper.navigation.$nextEl;
        if (swiper.navigation && swiper.navigation.$prevEl) $prevEl = swiper.navigation.$prevEl;
        if ($nextEl && $nextEl.length) initNavEl($nextEl, wrapperId, params.nextSlideMessage);
        if ($prevEl && $prevEl.length) initNavEl($prevEl, wrapperId, params.prevSlideMessage);
        if (hasClickablePagination()) swiper.pagination.$el.on("keydown", classes_to_selector_classesToSelector(swiper.params.pagination.bulletClass), onEnterOrSpaceKey);
        swiper.$el.on("focus", handleFocus, true);
      }
      function destroy() {
        if (liveRegion && liveRegion.length > 0) liveRegion.remove();
        let $nextEl;
        let $prevEl;
        if (swiper.navigation && swiper.navigation.$nextEl) $nextEl = swiper.navigation.$nextEl;
        if (swiper.navigation && swiper.navigation.$prevEl) $prevEl = swiper.navigation.$prevEl;
        if ($nextEl) $nextEl.off("keydown", onEnterOrSpaceKey);
        if ($prevEl) $prevEl.off("keydown", onEnterOrSpaceKey);
        if (hasClickablePagination()) swiper.pagination.$el.off("keydown", classes_to_selector_classesToSelector(swiper.params.pagination.bulletClass), onEnterOrSpaceKey);
        swiper.$el.off("focus", handleFocus, true);
      }
      on("beforeInit", (() => {
        liveRegion = dom(`<span class="${swiper.params.a11y.notificationClass}" aria-live="assertive" aria-atomic="true"></span>`);
      }));
      on("afterInit", (() => {
        if (!swiper.params.a11y.enabled) return;
        init();
      }));
      on("fromEdge toEdge afterInit lock unlock", (() => {
        if (!swiper.params.a11y.enabled) return;
        updateNavigation();
      }));
      on("paginationUpdate", (() => {
        if (!swiper.params.a11y.enabled) return;
        updatePagination();
      }));
      on("destroy", (() => {
        if (!swiper.params.a11y.enabled) return;
        destroy();
      }));
    }
  }
} ]);