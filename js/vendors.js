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
  }
} ]);