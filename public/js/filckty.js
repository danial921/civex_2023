
    ! function(t, e) {
        "function" == typeof define && define.amd ? define(e) : "object" == typeof module && module.exports ? module
            .exports = e() : t.getSize = e()
    }(window, function() {
        "use strict";

        function m(t) {
            var e = parseFloat(t);
            return -1 == t.indexOf("%") && !isNaN(e) && e
        }
        var e = "undefined" == typeof console ? function() {} : function(t) {
                console.error(t)
            },
            s = ["paddingLeft", "paddingRight", "paddingTop", "paddingBottom", "marginLeft", "marginRight",
                "marginTop", "marginBottom", "borderLeftWidth", "borderRightWidth", "borderTopWidth",
                "borderBottomWidth"
            ],
            l = s.length;

        function c(t) {
            t = getComputedStyle(t);
            return t || e("Style returned " + t +
                ". Are you running this code in a hidden iframe on Firefox? See https://bit.ly/getsizebug1"), t
        }
        var b, x = !1;

        function y(t) {
            if (x || (x = !0, (f = document.createElement("div")).style.width = "200px", f.style.padding =
                    "1px 2px 3px 4px", f.style.borderStyle = "solid", f.style.borderWidth = "1px 2px 3px 4px", f
                    .style.boxSizing = "border-box", (u = document.body || document.documentElement).appendChild(f),
                    p = c(f), b = 200 == Math.round(m(p.width)), y.isBoxSizeOuter = b, u.removeChild(f)), (t =
                    "string" == typeof t ? document.querySelector(t) : t) && "object" == typeof t && t.nodeType) {
                var e = c(t);
                if ("none" == e.display) return function() {
                    for (var t = {
                            width: 0,
                            height: 0,
                            innerWidth: 0,
                            innerHeight: 0,
                            outerWidth: 0,
                            outerHeight: 0
                        }, e = 0; e < l; e++) t[s[e]] = 0;
                    return t
                }();
                var i = {};
                i.width = t.offsetWidth, i.height = t.offsetHeight;
                for (var o = i.isBorderBox = "border-box" == e.boxSizing, r = 0; r < l; r++) {
                    var d = s[r],
                        n = e[d],
                        n = parseFloat(n);
                    i[d] = isNaN(n) ? 0 : n
                }
                var h = i.paddingLeft + i.paddingRight,
                    g = i.paddingTop + i.paddingBottom,
                    a = i.marginLeft + i.marginRight,
                    p = i.marginTop + i.marginBottom,
                    u = i.borderLeftWidth + i.borderRightWidth,
                    f = i.borderTopWidth + i.borderBottomWidth,
                    t = o && b,
                    o = m(e.width);
                !1 !== o && (i.width = o + (t ? 0 : h + u));
                o = m(e.height);
                return !1 !== o && (i.height = o + (t ? 0 : g + f)), i.innerWidth = i.width - (h + u), i
                    .innerHeight = i.height - (g + f), i.outerWidth = i.width + a, i.outerHeight = i.height + p, i
            }
        }
        return y
    });
    ! function(e, t) {
        "use strict";
        "function" == typeof define && define.amd ? define(t) : "object" == typeof module && module.exports ? module
            .exports = t() : e.matchesSelector = t()
    }(window, function() {
        "use strict";
        var o = function() {
            var e = window.Element.prototype;
            if (e.matches) return "matches";
            if (e.matchesSelector) return "matchesSelector";
            for (var t = ["webkit", "moz", "ms", "o"], o = 0; o < t.length; o++) {
                var r = t[o] + "MatchesSelector";
                if (e[r]) return r
            }
        }();
        return function(e, t) {
            return e[o](t)
        }
    });
    ! function(e, t) {
        "function" == typeof define && define.amd ? define(t) : "object" == typeof module && module.exports ? module
            .exports = t() : e.EvEmitter = t()
    }("undefined" != typeof window ? window : this, function() {
        "use strict";

        function e() {}
        var t = e.prototype;
        return t.on = function(e, t) {
            if (e && t) {
                var n = this._events = this._events || {},
                    e = n[e] = n[e] || [];
                return -1 == e.indexOf(t) && e.push(t), this
            }
        }, t.once = function(e, t) {
            if (e && t) {
                this.on(e, t);
                var n = this._onceEvents = this._onceEvents || {};
                return (n[e] = n[e] || {})[t] = !0, this
            }
        }, t.off = function(e, t) {
            e = this._events && this._events[e];
            if (e && e.length) {
                t = e.indexOf(t);
                return -1 != t && e.splice(t, 1), this
            }
        }, t.emitEvent = function(e, t) {
            var n = this._events && this._events[e];
            if (n && n.length) {
                n = n.slice(0), t = t || [];
                for (var i = this._onceEvents && this._onceEvents[e], s = 0; s < n.length; s++) {
                    var o = n[s];
                    i && i[o] && (this.off(e, o), delete i[o]), o.apply(this, t)
                }
                return this
            }
        }, t.allOff = function() {
            delete this._events, delete this._onceEvents
        }, e
    });
    ! function(t, r) {
        "function" == typeof define && define.amd ? define(["desandro-matches-selector/matches-selector"], function(e) {
            return r(t, e)
        }) : "object" == typeof module && module.exports ? module.exports = r(t, require(
            "desandro-matches-selector")) : t.fizzyUIUtils = r(t, t.matchesSelector)
    }(window, function(r, u) {
        "use strict";
        var i = {
                extend: function(e, t) {
                    for (var r in t) e[r] = t[r];
                    return e
                },
                modulo: function(e, t) {
                    return (e % t + t) % t
                }
            },
            t = Array.prototype.slice;
        i.makeArray = function(e) {
            return Array.isArray(e) ? e : null == e ? [] : "object" == typeof e && "number" == typeof e.length ?
                t.call(e) : [e]
        }, i.removeFrom = function(e, t) {
            t = e.indexOf(t); - 1 != t && e.splice(t, 1)
        }, i.getParent = function(e, t) {
            for (; e.parentNode && e != document.body;)
                if (e = e.parentNode, u(e, t)) return e
        }, i.getQueryElement = function(e) {
            return "string" == typeof e ? document.querySelector(e) : e
        }, i.handleEvent = function(e) {
            var t = "on" + e.type;
            this[t] && this[t](e)
        }, i.filterFindElements = function(e, n) {
            e = i.makeArray(e);
            var o = [];
            return e.forEach(function(e) {
                if (e instanceof HTMLElement)
                    if (n) {
                        u(e, n) && o.push(e);
                        for (var t = e.querySelectorAll(n), r = 0; r < t.length; r++) o.push(t[r])
                    } else o.push(e)
            }), o
        }, i.debounceMethod = function(e, t, n) {
            n = n || 100;
            var o = e.prototype[t],
                u = t + "Timeout";
            e.prototype[t] = function() {
                var e = this[u];
                clearTimeout(e);
                var t = arguments,
                    r = this;
                this[u] = setTimeout(function() {
                    o.apply(r, t), delete r[u]
                }, n)
            }
        }, i.docReady = function(e) {
            var t = document.readyState;
            "complete" == t || "interactive" == t ? setTimeout(e) : document.addEventListener(
                "DOMContentLoaded", e)
        }, i.toDashed = function(e) {
            return e.replace(/(.)([A-Z])/g, function(e, t, r) {
                return t + "-" + r
            }).toLowerCase()
        };
        var d = r.console;
        return i.htmlInit = function(a, c) {
            i.docReady(function() {
                var e = i.toDashed(c),
                    n = "data-" + e,
                    t = document.querySelectorAll("[" + n + "]"),
                    e = document.querySelectorAll(".js-" + e),
                    e = i.makeArray(t).concat(i.makeArray(e)),
                    o = n + "-options",
                    u = r.jQuery;
                e.forEach(function(t) {
                    var e = t.getAttribute(n) || t.getAttribute(o);
                    try {
                        r = e && JSON.parse(e)
                    } catch (e) {
                        return void(d && d.error("Error parsing " + n + " on " + t.className +
                            ": " + e))
                    }
                    var r = new a(t, r);
                    u && u.data(t, c, r)
                })
            })
        }, i
    });
    ! function(n, e) {
        "function" == typeof define && define.amd ? define(["ev-emitter/ev-emitter"], function(t) {
                return e(n, t)
            }) : "object" == typeof module && module.exports ? module.exports = e(n, require("ev-emitter")) : n
            .Unipointer = e(n, n.EvEmitter)
    }(window, function(i, t) {
        "use strict";

        function n() {}
        t = n.prototype = Object.create(t.prototype);
        t.bindStartEvent = function(t) {
            this._bindStartEvent(t, !0)
        }, t.unbindStartEvent = function(t) {
            this._bindStartEvent(t, !1)
        }, t._bindStartEvent = function(t, n) {
            var e = (n = void 0 === n || n) ? "addEventListener" : "removeEventListener",
                n = "mousedown";
            "ontouchstart" in i ? n = "touchstart" : i.PointerEvent && (n = "pointerdown"), t[e](n, this)
        }, t.handleEvent = function(t) {
            var n = "on" + t.type;
            this[n] && this[n](t)
        }, t.getTouch = function(t) {
            for (var n = 0; n < t.length; n++) {
                var e = t[n];
                if (e.identifier == this.pointerIdentifier) return e
            }
        }, t.onmousedown = function(t) {
            var n = t.button;
            n && 0 !== n && 1 !== n || this._pointerDown(t, t)
        }, t.ontouchstart = function(t) {
            this._pointerDown(t, t.changedTouches[0])
        }, t.onpointerdown = function(t) {
            this._pointerDown(t, t)
        }, t._pointerDown = function(t, n) {
            t.button || this.isPointerDown || (this.isPointerDown = !0, this.pointerIdentifier = void 0 !== n
                .pointerId ? n.pointerId : n.identifier, this.pointerDown(t, n))
        }, t.pointerDown = function(t, n) {
            this._bindPostStartEvents(t), this.emitEvent("pointerDown", [t, n])
        };
        var e = {
            mousedown: ["mousemove", "mouseup"],
            touchstart: ["touchmove", "touchend", "touchcancel"],
            pointerdown: ["pointermove", "pointerup", "pointercancel"]
        };
        return t._bindPostStartEvents = function(t) {
            t && ((t = e[t.type]).forEach(function(t) {
                i.addEventListener(t, this)
            }, this), this._boundPointerEvents = t)
        }, t._unbindPostStartEvents = function() {
            this._boundPointerEvents && (this._boundPointerEvents.forEach(function(t) {
                i.removeEventListener(t, this)
            }, this), delete this._boundPointerEvents)
        }, t.onmousemove = function(t) {
            this._pointerMove(t, t)
        }, t.onpointermove = function(t) {
            t.pointerId == this.pointerIdentifier && this._pointerMove(t, t)
        }, t.ontouchmove = function(t) {
            var n = this.getTouch(t.changedTouches);
            n && this._pointerMove(t, n)
        }, t._pointerMove = function(t, n) {
            this.pointerMove(t, n)
        }, t.pointerMove = function(t, n) {
            this.emitEvent("pointerMove", [t, n])
        }, t.onmouseup = function(t) {
            this._pointerUp(t, t)
        }, t.onpointerup = function(t) {
            t.pointerId == this.pointerIdentifier && this._pointerUp(t, t)
        }, t.ontouchend = function(t) {
            var n = this.getTouch(t.changedTouches);
            n && this._pointerUp(t, n)
        }, t._pointerUp = function(t, n) {
            this._pointerDone(), this.pointerUp(t, n)
        }, t.pointerUp = function(t, n) {
            this.emitEvent("pointerUp", [t, n])
        }, t._pointerDone = function() {
            this._pointerReset(), this._unbindPostStartEvents(), this.pointerDone()
        }, t._pointerReset = function() {
            this.isPointerDown = !1, delete this.pointerIdentifier
        }, t.pointerDone = function() {}, t.onpointercancel = function(t) {
            t.pointerId == this.pointerIdentifier && this._pointerCancel(t, t)
        }, t.ontouchcancel = function(t) {
            var n = this.getTouch(t.changedTouches);
            n && this._pointerCancel(t, n)
        }, t._pointerCancel = function(t, n) {
            this._pointerDone(), this.pointerCancel(t, n)
        }, t.pointerCancel = function(t, n) {
            this.emitEvent("pointerCancel", [t, n])
        }, n.getPointerPoint = function(t) {
            return {
                x: t.pageX,
                y: t.pageY
            }
        }, n
    });
    ! function(i, n) {
        "function" == typeof define && define.amd ? define(["unipointer/unipointer"], function(t) {
                return n(i, t)
            }) : "object" == typeof module && module.exports ? module.exports = n(i, require("unipointer")) : i
            .Unidragger = n(i, i.Unipointer)
    }(window, function(r, t) {
        "use strict";

        function i() {}
        var n = i.prototype = Object.create(t.prototype);
        n.bindHandles = function() {
            this._bindHandles(!0)
        }, n.unbindHandles = function() {
            this._bindHandles(!1)
        }, n._bindHandles = function(t) {
            for (var i = (t = void 0 === t || t) ? "addEventListener" : "removeEventListener", n = t ? this
                    ._touchActionValue : "", e = 0; e < this.handles.length; e++) {
                var o = this.handles[e];
                this._bindStartEvent(o, t), o[i]("click", this), r.PointerEvent && (o.style.touchAction = n)
            }
        }, n._touchActionValue = "none", n.pointerDown = function(t, i) {
            this.okayPointerDown(t) && (this.pointerDownPointer = {
                pageX: i.pageX,
                pageY: i.pageY
            }, t.preventDefault(), this.pointerDownBlur(), this._bindPostStartEvents(t), this.emitEvent(
                "pointerDown", [t, i]))
        };
        var e = {
                TEXTAREA: !0,
                INPUT: !0,
                SELECT: !0,
                OPTION: !0
            },
            o = {
                radio: !0,
                checkbox: !0,
                button: !0,
                submit: !0,
                image: !0,
                file: !0
            };
        return n.okayPointerDown = function(t) {
            var i = e[t.target.nodeName],
                t = o[t.target.type],
                t = !i || t;
            return t || this._pointerReset(), t
        }, n.pointerDownBlur = function() {
            var t = document.activeElement;
            t && t.blur && t != document.body && t.blur()
        }, n.pointerMove = function(t, i) {
            var n = this._dragPointerMove(t, i);
            this.emitEvent("pointerMove", [t, i, n]), this._dragMove(t, i, n)
        }, n._dragPointerMove = function(t, i) {
            var n = {
                x: i.pageX - this.pointerDownPointer.pageX,
                y: i.pageY - this.pointerDownPointer.pageY
            };
            return !this.isDragging && this.hasDragStarted(n) && this._dragStart(t, i), n
        }, n.hasDragStarted = function(t) {
            return 3 < Math.abs(t.x) || 3 < Math.abs(t.y)
        }, n.pointerUp = function(t, i) {
            this.emitEvent("pointerUp", [t, i]), this._dragPointerUp(t, i)
        }, n._dragPointerUp = function(t, i) {
            this.isDragging ? this._dragEnd(t, i) : this._staticClick(t, i)
        }, n._dragStart = function(t, i) {
            this.isDragging = !0, this.isPreventingClicks = !0, this.dragStart(t, i)
        }, n.dragStart = function(t, i) {
            this.emitEvent("dragStart", [t, i])
        }, n._dragMove = function(t, i, n) {
            this.isDragging && this.dragMove(t, i, n)
        }, n.dragMove = function(t, i, n) {
            t.preventDefault(), this.emitEvent("dragMove", [t, i, n])
        }, n._dragEnd = function(t, i) {
            this.isDragging = !1, setTimeout(function() {
                delete this.isPreventingClicks
            }.bind(this)), this.dragEnd(t, i)
        }, n.dragEnd = function(t, i) {
            this.emitEvent("dragEnd", [t, i])
        }, n.onclick = function(t) {
            this.isPreventingClicks && t.preventDefault()
        }, n._staticClick = function(t, i) {
            this.isIgnoringMouseUp && "mouseup" == t.type || (this.staticClick(t, i), "mouseup" != t.type && (
                this.isIgnoringMouseUp = !0, setTimeout(function() {
                    delete this.isIgnoringMouseUp
                }.bind(this), 400)))
        }, n.staticClick = function(t, i) {
            this.emitEvent("staticClick", [t, i])
        }, i.getPointerPoint = t.getPointerPoint, i
    });
    ! function(e, t) {
        "function" == typeof define && define.amd ? define(["get-size/get-size"], function(e) {
            return t(0, e)
        }) : "object" == typeof module && module.exports ? module.exports = t(0, require("get-size")) : (e
            .Flickity = e.Flickity || {}, e.Flickity.Cell = t(0, e.getSize))
    }(window, function(e, t) {
        "use strict";

        function i(e, t) {
            this.element = e, this.parent = t, this.create()
        }
        var n = i.prototype;
        return n.create = function() {
            this.element.style.position = "absolute", this.element.setAttribute("aria-hidden", "true"), this.x =
                0, this.shift = 0, this.element.style[this.parent.originSide] = 0
        }, n.destroy = function() {
            this.unselect(), this.element.style.position = "";
            var e = this.parent.originSide;
            this.element.style[e] = "", this.element.style.transform = "", this.element.removeAttribute(
                "aria-hidden")
        }, n.getSize = function() {
            this.size = t(this.element)
        }, n.setPosition = function(e) {
            this.x = e, this.updateTarget(), this.renderPosition(e)
        }, n.updateTarget = n.setDefaultTarget = function() {
            var e = "left" == this.parent.originSide ? "marginLeft" : "marginRight";
            this.target = this.x + this.size[e] + this.size.width * this.parent.cellAlign
        }, n.renderPosition = function(e) {
            var t = "left" === this.parent.originSide ? 1 : -1,
                t = this.parent.options.percentPosition ? e * t * (this.parent.size.innerWidth / this.size
                    .width) : e * t;
            this.element.style.transform = "translateX(" + this.parent.getPositionValue(t) + ")"
        }, n.select = function() {
            this.element.classList.add("is-selected"), this.element.removeAttribute("aria-hidden")
        }, n.unselect = function() {
            this.element.classList.remove("is-selected"), this.element.setAttribute("aria-hidden", "true")
        }, n.wrapShift = function(e) {
            this.shift = e, this.renderPosition(this.x + this.parent.slideableWidth * e)
        }, n.remove = function() {
            this.element.parentNode.removeChild(this.element)
        }, i
    });
    ! function(t, i) {
        "function" == typeof define && define.amd ? define(i) : "object" == typeof module && module.exports ? module
            .exports = i() : (t.Flickity = t.Flickity || {}, t.Flickity.Slide = i())
    }(window, function() {
        "use strict";

        function t(t) {
            this.parent = t, this.isOriginLeft = "left" == t.originSide, this.cells = [], this.outerWidth = 0, this
                .height = 0
        }
        var i = t.prototype;
        return i.addCell = function(t) {
            var i;
            this.cells.push(t), this.outerWidth += t.size.outerWidth, this.height = Math.max(t.size.outerHeight,
                this.height), 1 == this.cells.length && (this.x = t.x, i = this.isOriginLeft ?
                "marginLeft" : "marginRight", this.firstMargin = t.size[i])
        }, i.updateTarget = function() {
            var t = this.isOriginLeft ? "marginRight" : "marginLeft",
                i = this.getLastCell(),
                t = i ? i.size[t] : 0,
                t = this.outerWidth - (this.firstMargin + t);
            this.target = this.x + this.firstMargin + t * this.parent.cellAlign
        }, i.getLastCell = function() {
            return this.cells[this.cells.length - 1]
        }, i.select = function() {
            this.cells.forEach(function(t) {
                t.select()
            })
        }, i.unselect = function() {
            this.cells.forEach(function(t) {
                t.unselect()
            })
        }, i.getCellElements = function() {
            return this.cells.map(function(t) {
                return t.element
            })
        }, t
    });
    ! function(t, i) {
        "function" == typeof define && define.amd ? define(["fizzy-ui-utils/utils"], function(t) {
            return i(0, t)
        }) : "object" == typeof module && module.exports ? module.exports = i(0, require("fizzy-ui-utils")) : (t
            .Flickity = t.Flickity || {}, t.Flickity.animatePrototype = i(0, t.fizzyUIUtils))
    }(window, function(t, i) {
        "use strict";
        var s = {
            startAnimation: function() {
                this.isAnimating || (this.isAnimating = !0, this.restingFrames = 0, this.animate())
            },
            animate: function() {
                this.applyDragForce(), this.applySelectedAttraction();
                var t, i = this.x;
                this.integratePhysics(), this.positionSlider(), this.settle(i), this.isAnimating && (t =
                    this, requestAnimationFrame(function() {
                        t.animate()
                    }))
            },
            positionSlider: function() {
                var t = this.x;
                this.options.wrapAround && 1 < this.cells.length && (t = i.modulo(t, this.slideableWidth),
                    t -= this.slideableWidth, this.shiftWrapCells(t)), this.setTranslateX(t, this
                    .isAnimating), this.dispatchScrollEvent()
            },
            setTranslateX: function(t, i) {
                t += this.cursorPosition, t = this.options.rightToLeft ? -t : t;
                t = this.getPositionValue(t);
                this.slider.style.transform = i ? "translate3d(" + t + ",0,0)" : "translateX(" + t + ")"
            },
            dispatchScrollEvent: function() {
                var t, i = this.slides[0];
                i && (i = (t = -this.x - i.target) / this.slidesWidth, this.dispatchEvent("scroll", null, [
                    i, t
                ]))
            },
            positionSliderAtSelected: function() {
                this.cells.length && (this.x = -this.selectedSlide.target, this.velocity = 0, this
                    .positionSlider())
            },
            getPositionValue: function(t) {
                return this.options.percentPosition ? .01 * Math.round(t / this.size.innerWidth * 1e4) +
                    "%" : Math.round(t) + "px"
            },
            settle: function(t) {
                this.isPointerDown || Math.round(100 * this.x) != Math.round(100 * t) || this
                    .restingFrames++, 2 < this.restingFrames && (this.isAnimating = !1, delete this
                        .isFreeScrolling, this.positionSlider(), this.dispatchEvent("settle", null, [this
                            .selectedIndex
                        ]))
            },
            shiftWrapCells: function(t) {
                var i = this.cursorPosition + t;
                this._shiftCells(this.beforeShiftCells, i, -1);
                t = this.size.innerWidth - (t + this.slideableWidth + this.cursorPosition);
                this._shiftCells(this.afterShiftCells, t, 1)
            },
            _shiftCells: function(t, i, s) {
                for (var e = 0; e < t.length; e++) {
                    var n = t[e];
                    n.wrapShift(0 < i ? s : 0), i -= n.size.outerWidth
                }
            },
            _unshiftCells: function(t) {
                if (t && t.length)
                    for (var i = 0; i < t.length; i++) t[i].wrapShift(0)
            },
            integratePhysics: function() {
                this.x += this.velocity, this.velocity *= this.getFrictionFactor()
            },
            applyForce: function(t) {
                this.velocity += t
            },
            getFrictionFactor: function() {
                return 1 - this.options[this.isFreeScrolling ? "freeScrollFriction" : "friction"]
            },
            getRestingPosition: function() {
                return this.x + this.velocity / (1 - this.getFrictionFactor())
            },
            applyDragForce: function() {
                var t;
                this.isDraggable && this.isPointerDown && (t = this.dragX - this.x - this.velocity, this
                    .applyForce(t))
            },
            applySelectedAttraction: function() {
                var t;
                this.isDraggable && this.isPointerDown || this.isFreeScrolling || !this.slides.length || (
                    t = (-1 * this.selectedSlide.target - this.x) * this.options.selectedAttraction,
                    this.applyForce(t))
            }
        };
        return s
    });
    ! function(h, r) {
        var e;
        "function" == typeof define && define.amd ? define(["ev-emitter/ev-emitter", "get-size/get-size",
            "fizzy-ui-utils/utils", "./cell", "./slide", "./animate"
        ], function(e, t, i, s, l, n) {
            return r(h, e, t, i, s, l, n)
        }) : "object" == typeof module && module.exports ? module.exports = r(h, require("ev-emitter"), require(
            "get-size"), require("fizzy-ui-utils"), require("./cell"), require("./slide"), require("./animate")) : (
            e = h.Flickity, h.Flickity = r(h, h.EvEmitter, h.getSize, h.fizzyUIUtils, e.Cell, e.Slide, e
                .animatePrototype))
    }(window, function(s, e, t, h, i, r, l) {
        "use strict";
        var n = s.jQuery,
            o = s.getComputedStyle,
            c = s.console;

        function a(e, t) {
            for (e = h.makeArray(e); e.length;) t.appendChild(e.shift())
        }
        var d = 0,
            u = {};

        function f(e, t) {
            var i = h.getQueryElement(e);
            if (i) {
                if (this.element = i, this.element.flickityGUID) {
                    var s = u[this.element.flickityGUID];
                    return s && s.option(t), s
                }
                n && (this.$element = n(this.element)), this.options = h.extend({}, this.constructor.defaults), this
                    .option(t), this._create()
            } else c && c.error("Bad element for Flickity: " + (i || e))
        }
        f.defaults = {
            accessibility: !0,
            cellAlign: "center",
            freeScrollFriction: .075,
            friction: .28,
            namespaceJQueryEvents: !0,
            percentPosition: !0,
            resize: !0,
            selectedAttraction: .025,
            setGallerySize: !0
        }, f.createMethods = [];
        var g = f.prototype;
        h.extend(g, e.prototype), g._create = function() {
            var e, t = this.guid = ++d;
            for (e in this.element.flickityGUID = t, (u[t] = this).selectedIndex = 0, this.restingFrames = 0,
                this.x = 0, this.velocity = 0, this.originSide = this.options.rightToLeft ? "right" : "left",
                this.viewport = document.createElement("div"), this.viewport.className = "flickity-viewport",
                this._createSlider(), (this.options.resize || this.options.watchCSS) && s.addEventListener(
                    "resize", this), this.options.on) {
                var i = this.options.on[e];
                this.on(e, i)
            }
            f.createMethods.forEach(function(e) {
                this[e]()
            }, this), this.options.watchCSS ? this.watchCSS() : this.activate()
        }, g.option = function(e) {
            h.extend(this.options, e)
        }, g.activate = function() {
            this.isActive || (this.isActive = !0, this.element.classList.add("flickity-enabled"), this.options
                .rightToLeft && this.element.classList.add("flickity-rtl"), this.getSize(), a(this
                    ._filterFindCellElements(this.element.children), this.slider), this.viewport
                .appendChild(this.slider), this.element.appendChild(this.viewport), this.reloadCells(), this
                .options.accessibility && (this.element.tabIndex = 0, this.element.addEventListener(
                    "keydown", this)), this.emitEvent("activate"), this.selectInitialIndex(), this
                .isInitActivated = !0, this.dispatchEvent("ready"))
        }, g._createSlider = function() {
            var e = document.createElement("div");
            e.className = "flickity-slider", e.style[this.originSide] = 0, this.slider = e
        }, g._filterFindCellElements = function(e) {
            return h.filterFindElements(e, this.options.cellSelector)
        }, g.reloadCells = function() {
            this.cells = this._makeCells(this.slider.children), this.positionCells(), this._getWrapShiftCells(),
                this.setGallerySize()
        }, g._makeCells = function(e) {
            return this._filterFindCellElements(e).map(function(e) {
                return new i(e, this)
            }, this)
        }, g.getLastCell = function() {
            return this.cells[this.cells.length - 1]
        }, g.getLastSlide = function() {
            return this.slides[this.slides.length - 1]
        }, g.positionCells = function() {
            this._sizeCells(this.cells), this._positionCells(0)
        }, g._positionCells = function(e) {
            this.maxCellHeight = (e = e || 0) && this.maxCellHeight || 0;
            var t, i = 0;
            0 < e && (i = (t = this.cells[e - 1]).x + t.size.outerWidth);
            for (var s = this.cells.length, l = e; l < s; l++) {
                var n = this.cells[l];
                n.setPosition(i), i += n.size.outerWidth, this.maxCellHeight = Math.max(n.size.outerHeight, this
                    .maxCellHeight)
            }
            this.slideableWidth = i, this.updateSlides(), this._containSlides(), this.slidesWidth = s ? this
                .getLastSlide().target - this.slides[0].target : 0
        }, g._sizeCells = function(e) {
            e.forEach(function(e) {
                e.getSize()
            })
        }, g.updateSlides = function() {
            var s, l, n;
            this.slides = [], this.cells.length && (s = new r(this), this.slides.push(s), l = "left" == this
                .originSide ? "marginRight" : "marginLeft", n = this._getCanCellFit(), this.cells.forEach(
                    function(e, t) {
                        var i;
                        s.cells.length && (i = s.outerWidth - s.firstMargin + (e.size.outerWidth - e.size[
                            l]), n.call(this, t, i) || (s.updateTarget(), s = new r(this), this
                            .slides.push(s))), s.addCell(e)
                    }, this), s.updateTarget(), this.updateSelectedSlide())
        }, g._getCanCellFit = function() {
            var e = this.options.groupCells;
            if (!e) return function() {
                return !1
            };
            if ("number" == typeof e) {
                var t = parseInt(e, 10);
                return function(e) {
                    return e % t != 0
                }
            }
            var e = "string" == typeof e && e.match(/^(\d+)%$/),
                i = e ? parseInt(e[1], 10) / 100 : 1;
            return function(e, t) {
                return t <= (this.size.innerWidth + 1) * i
            }
        }, g._init = g.reposition = function() {
            this.positionCells(), this.positionSliderAtSelected()
        }, g.getSize = function() {
            this.size = t(this.element), this.setCellAlign(), this.cursorPosition = this.size.innerWidth * this
                .cellAlign
        };
        var p = {
            center: {
                left: .5,
                right: .5
            },
            left: {
                left: 0,
                right: 1
            },
            right: {
                right: 0,
                left: 1
            }
        };
        return g.setCellAlign = function() {
            var e = p[this.options.cellAlign];
            this.cellAlign = e ? e[this.originSide] : this.options.cellAlign
        }, g.setGallerySize = function() {
            var e;
            this.options.setGallerySize && (e = this.options.adaptiveHeight && this.selectedSlide ? this
                .selectedSlide.height : this.maxCellHeight, this.viewport.style.height = e + "px")
        }, g._getWrapShiftCells = function() {
            var e, t;
            this.options.wrapAround && (this._unshiftCells(this.beforeShiftCells), this._unshiftCells(this
                    .afterShiftCells), e = this.cursorPosition, t = this.cells.length - 1, this
                .beforeShiftCells = this._getGapCells(e, t, -1), e = this.size.innerWidth - this
                .cursorPosition, this.afterShiftCells = this._getGapCells(e, 0, 1))
        }, g._getGapCells = function(e, t, i) {
            for (var s = []; 0 < e;) {
                var l = this.cells[t];
                if (!l) break;
                s.push(l), t += i, e -= l.size.outerWidth
            }
            return s
        }, g._containSlides = function() {
            var e, t, i, s, l, n;
            this.options.contain && !this.options.wrapAround && this.cells.length && (e = (t = this.options
                    .rightToLeft) ? "marginRight" : "marginLeft", t = t ? "marginLeft" : "marginRight", i =
                this.slideableWidth - this.getLastCell().size[t], s = i < this.size.innerWidth, l = this
                .cursorPosition + this.cells[0].size[e], n = i - this.size.innerWidth * (1 - this
                .cellAlign), this.slides.forEach(function(e) {
                    s ? e.target = i * this.cellAlign : (e.target = Math.max(e.target, l), e.target =
                        Math.min(e.target, n))
                }, this))
        }, g.dispatchEvent = function(e, t, i) {
            var s = t ? [t].concat(i) : i;
            this.emitEvent(e, s), n && this.$element && (s = e += this.options.namespaceJQueryEvents ?
                ".flickity" : "", t && ((t = new n.Event(t)).type = e, s = t), this.$element.trigger(s, i))
        }, g.select = function(e, t, i) {
            this.isActive && (e = parseInt(e, 10), this._wrapSelect(e), (this.options.wrapAround || t) && (e = h
                .modulo(e, this.slides.length)), this.slides[e] && (t = this.selectedIndex, this
                .selectedIndex = e, this.updateSelectedSlide(), i ? this.positionSliderAtSelected() :
                this.startAnimation(), this.options.adaptiveHeight && this.setGallerySize(), this
                .dispatchEvent("select", null, [e]), e != t && this.dispatchEvent("change", null, [e]),
                this.dispatchEvent("cellSelect")))
        }, g._wrapSelect = function(e) {
            var t = this.slides.length;
            if (!(this.options.wrapAround && 1 < t)) return e;
            var i = h.modulo(e, t),
                s = Math.abs(i - this.selectedIndex),
                l = Math.abs(i + t - this.selectedIndex),
                i = Math.abs(i - t - this.selectedIndex);
            !this.isDragSelect && l < s ? e += t : !this.isDragSelect && i < s && (e -= t), e < 0 ? this.x -=
                this.slideableWidth : t <= e && (this.x += this.slideableWidth)
        }, g.previous = function(e, t) {
            this.select(this.selectedIndex - 1, e, t)
        }, g.next = function(e, t) {
            this.select(this.selectedIndex + 1, e, t)
        }, g.updateSelectedSlide = function() {
            var e = this.slides[this.selectedIndex];
            e && (this.unselectSelectedSlide(), (this.selectedSlide = e).select(), this.selectedCells = e.cells,
                this.selectedElements = e.getCellElements(), this.selectedCell = e.cells[0], this
                .selectedElement = this.selectedElements[0])
        }, g.unselectSelectedSlide = function() {
            this.selectedSlide && this.selectedSlide.unselect()
        }, g.selectInitialIndex = function() {
            var e = this.options.initialIndex;
            if (this.isInitActivated) this.select(this.selectedIndex, !1, !0);
            else {
                if (e && "string" == typeof e)
                    if (this.queryCell(e)) return void this.selectCell(e, !1, !0);
                var t = 0;
                e && this.slides[e] && (t = e), this.select(t, !1, !0)
            }
        }, g.selectCell = function(e, t, i) {
            var e = this.queryCell(e);
            e && (e = this.getCellSlideIndex(e), this.select(e, t, i))
        }, g.getCellSlideIndex = function(e) {
            for (var t = 0; t < this.slides.length; t++)
                if (-1 != this.slides[t].cells.indexOf(e)) return t
        }, g.getCell = function(e) {
            for (var t = 0; t < this.cells.length; t++) {
                var i = this.cells[t];
                if (i.element == e) return i
            }
        }, g.getCells = function(e) {
            e = h.makeArray(e);
            var t = [];
            return e.forEach(function(e) {
                e = this.getCell(e);
                e && t.push(e)
            }, this), t
        }, g.getCellElements = function() {
            return this.cells.map(function(e) {
                return e.element
            })
        }, g.getParentCell = function(e) {
            var t = this.getCell(e);
            return t || (e = h.getParent(e, ".flickity-slider > *"), this.getCell(e))
        }, g.getAdjacentCellElements = function(e, t) {
            if (!e) return this.selectedSlide.getCellElements();
            t = void 0 === t ? this.selectedIndex : t;
            var i = this.slides.length;
            if (i <= 1 + 2 * e) return this.getCellElements();
            for (var s = [], l = t - e; l <= t + e; l++) {
                var n = this.options.wrapAround ? h.modulo(l, i) : l,
                    n = this.slides[n];
                n && (s = s.concat(n.getCellElements()))
            }
            return s
        }, g.queryCell = function(e) {
            if ("number" == typeof e) return this.cells[e];
            if ("string" == typeof e) {
                if (e.match(/^[#.]?[\d/]/)) return;
                e = this.element.querySelector(e)
            }
            return this.getCell(e)
        }, g.uiChange = function() {
            this.emitEvent("uiChange")
        }, g.childUIPointerDown = function(e) {
            "touchstart" != e.type && e.preventDefault(), this.focus()
        }, g.onresize = function() {
            this.watchCSS(), this.resize()
        }, h.debounceMethod(f, "onresize", 150), g.resize = function() {
            var e;
            !this.isActive || this.isAnimating || this.isDragging || (this.getSize(), this.options.wrapAround &&
                (this.x = h.modulo(this.x, this.slideableWidth)), this.positionCells(), this
                ._getWrapShiftCells(), this.setGallerySize(), this.emitEvent("resize"), e = this
                .selectedElements && this.selectedElements[0], this.selectCell(e, !1, !0))
        }, g.watchCSS = function() {
            this.options.watchCSS && (-1 != o(this.element, ":after").content.indexOf("flickity") ? this
                .activate() : this.deactivate())
        }, g.onkeydown = function(e) {
            var t = document.activeElement && document.activeElement != this.element;
            !this.options.accessibility || t || (e = f.keyboardHandlers[e.keyCode]) && e.call(this)
        }, f.keyboardHandlers = {
            37: function() {
                var e = this.options.rightToLeft ? "next" : "previous";
                this.uiChange(), this[e]()
            },
            39: function() {
                var e = this.options.rightToLeft ? "previous" : "next";
                this.uiChange(), this[e]()
            }
        }, g.focus = function() {
            var e = s.pageYOffset;
            this.element.focus({
                preventScroll: !0
            }), s.pageYOffset != e && s.scrollTo(s.pageXOffset, e)
        }, g.deactivate = function() {
            this.isActive && (this.element.classList.remove("flickity-enabled"), this.element.classList.remove(
                    "flickity-rtl"), this.unselectSelectedSlide(), this.cells.forEach(function(e) {
                    e.destroy()
                }), this.element.removeChild(this.viewport), a(this.slider.children, this.element), this
                .options.accessibility && (this.element.removeAttribute("tabIndex"), this.element
                    .removeEventListener("keydown", this)), this.isActive = !1, this.emitEvent("deactivate")
                )
        }, g.destroy = function() {
            this.deactivate(), s.removeEventListener("resize", this), this.allOff(), this.emitEvent("destroy"),
                n && this.$element && n.removeData(this.element, "flickity"), delete this.element.flickityGUID,
                delete u[this.guid]
        }, h.extend(g, l), f.data = function(e) {
            e = (e = h.getQueryElement(e)) && e.flickityGUID;
            return e && u[e]
        }, h.htmlInit(f, "flickity"), n && n.bridget && n.bridget("flickity", f), f.setJQuery = function(e) {
            n = e
        }, f.Cell = i, f.Slide = r, f
    });
    ! function(s, n) {
        "function" == typeof define && define.amd ? define(["./flickity", "unidragger/unidragger",
            "fizzy-ui-utils/utils"
        ], function(t, i, e) {
            return n(s, t, i, e)
        }) : "object" == typeof module && module.exports ? module.exports = n(s, require("./flickity"), require(
            "unidragger"), require("fizzy-ui-utils")) : s.Flickity = n(s, s.Flickity, s.Unidragger, s.fizzyUIUtils)
    }(window, function(e, t, i, r) {
        "use strict";
        r.extend(t.defaults, {
            draggable: ">1",
            dragThreshold: 3
        }), t.createMethods.push("_createDrag");
        var s = t.prototype;
        r.extend(s, i.prototype), s._touchActionValue = "pan-y", s._createDrag = function() {
            this.on("activate", this.onActivateDrag), this.on("uiChange", this._uiChangeDrag), this.on(
                "deactivate", this.onDeactivateDrag), this.on("cellChange", this.updateDraggable)
        }, s.onActivateDrag = function() {
            this.handles = [this.viewport], this.bindHandles(), this.updateDraggable()
        }, s.onDeactivateDrag = function() {
            this.unbindHandles(), this.element.classList.remove("is-draggable")
        }, s.updateDraggable = function() {
            ">1" == this.options.draggable ? this.isDraggable = 1 < this.slides.length : this.isDraggable = this
                .options.draggable, this.isDraggable ? this.element.classList.add("is-draggable") : this.element
                .classList.remove("is-draggable")
        }, s.bindDrag = function() {
            this.options.draggable = !0, this.updateDraggable()
        }, s.unbindDrag = function() {
            this.options.draggable = !1, this.updateDraggable()
        }, s._uiChangeDrag = function() {
            delete this.isFreeScrolling
        }, s.pointerDown = function(t, i) {
            this.isDraggable ? this.okayPointerDown(t) && (this._pointerDownPreventDefault(t), this
                    .pointerDownFocus(t), document.activeElement != this.element && this.pointerDownBlur(), this
                    .dragX = this.x, this.viewport.classList.add("is-pointer-down"), this.pointerDownScroll =
                    o(), e.addEventListener("scroll", this), this._pointerDownDefault(t, i)) : this
                ._pointerDownDefault(t, i)
        }, s._pointerDownDefault = function(t, i) {
            this.pointerDownPointer = {
                pageX: i.pageX,
                pageY: i.pageY
            }, this._bindPostStartEvents(t), this.dispatchEvent("pointerDown", t, [i])
        };
        var n = {
            INPUT: !0,
            TEXTAREA: !0,
            SELECT: !0
        };

        function o() {
            return {
                x: e.pageXOffset,
                y: e.pageYOffset
            }
        }
        return s.pointerDownFocus = function(t) {
            n[t.target.nodeName] || this.focus()
        }, s._pointerDownPreventDefault = function(t) {
            var i = "touchstart" == t.type,
                e = "touch" == t.pointerType,
                s = n[t.target.nodeName];
            i || e || s || t.preventDefault()
        }, s.hasDragStarted = function(t) {
            return Math.abs(t.x) > this.options.dragThreshold
        }, s.pointerUp = function(t, i) {
            delete this.isTouchScrolling, this.viewport.classList.remove("is-pointer-down"), this.dispatchEvent(
                "pointerUp", t, [i]), this._dragPointerUp(t, i)
        }, s.pointerDone = function() {
            e.removeEventListener("scroll", this), delete this.pointerDownScroll
        }, s.dragStart = function(t, i) {
            this.isDraggable && (this.dragStartPosition = this.x, this.startAnimation(), e.removeEventListener(
                "scroll", this), this.dispatchEvent("dragStart", t, [i]))
        }, s.pointerMove = function(t, i) {
            var e = this._dragPointerMove(t, i);
            this.dispatchEvent("pointerMove", t, [i, e]), this._dragMove(t, i, e)
        }, s.dragMove = function(t, i, e) {
            var s, n;
            this.isDraggable && (t.preventDefault(), this.previousDragX = this.dragX, n = this.options
                .rightToLeft ? -1 : 1, this.options.wrapAround && (e.x %= this.slideableWidth), s = this
                .dragStartPosition + e.x * n, !this.options.wrapAround && this.slides.length && (s = (s = (
                            n = Math.max(-this.slides[0].target, this.dragStartPosition)) < s ? .5 * (s +
                        n) : s) < (n = Math.min(-this.getLastSlide().target, this.dragStartPosition)) ? .5 *
                    (s + n) : s), this.dragX = s, this.dragMoveTime = new Date, this.dispatchEvent(
                    "dragMove", t, [i, e]))
        }, s.dragEnd = function(t, i) {
            var e, s;
            this.isDraggable && (this.options.freeScroll && (this.isFreeScrolling = !0), e = this
                .dragEndRestingSelect(), this.options.freeScroll && !this.options.wrapAround ? (s = this
                    .getRestingPosition(), this.isFreeScrolling = -s > this.slides[0].target && -s < this
                    .getLastSlide().target) : this.options.freeScroll || e != this.selectedIndex || (e +=
                    this.dragEndBoostSelect()), delete this.previousDragX, this.isDragSelect = this.options
                .wrapAround, this.select(e), delete this.isDragSelect, this.dispatchEvent("dragEnd", t, [i])
                )
        }, s.dragEndRestingSelect = function() {
            var t = this.getRestingPosition(),
                i = Math.abs(this.getSlideDistance(-t, this.selectedIndex)),
                e = this._getClosestResting(t, i, 1),
                i = this._getClosestResting(t, i, -1);
            return (e.distance < i.distance ? e : i).index
        }, s._getClosestResting = function(t, i, e) {
            for (var s = this.selectedIndex, n = 1 / 0, r = this.options.contain && !this.options.wrapAround ?
                    function(t, i) {
                        return t <= i
                    } : function(t, i) {
                        return t < i
                    }; r(i, n) && (n = i, null !== (i = this.getSlideDistance(-t, s += e)));) i = Math.abs(i);
            return {
                distance: n,
                index: s - e
            }
        }, s.getSlideDistance = function(t, i) {
            var e = this.slides.length,
                s = this.options.wrapAround && 1 < e,
                n = s ? r.modulo(i, e) : i,
                n = this.slides[n];
            if (!n) return null;
            e = s ? this.slideableWidth * Math.floor(i / e) : 0;
            return t - (n.target + e)
        }, s.dragEndBoostSelect = function() {
            if (void 0 === this.previousDragX || !this.dragMoveTime || 100 < new Date - this.dragMoveTime)
                return 0;
            var t = this.getSlideDistance(-this.dragX, this.selectedIndex),
                i = this.previousDragX - this.dragX;
            return 0 < t && 0 < i ? 1 : t < 0 && i < 0 ? -1 : 0
        }, s.staticClick = function(t, i) {
            var e = this.getParentCell(t.target),
                s = e && e.element,
                e = e && this.cells.indexOf(e);
            this.dispatchEvent("staticClick", t, [i, s, e])
        }, s.onscroll = function() {
            var t = o(),
                i = this.pointerDownScroll.x - t.x,
                t = this.pointerDownScroll.y - t.y;
            (3 < Math.abs(i) || 3 < Math.abs(t)) && this._pointerDone()
        }, t
    });
    ! function(t, n) {
        "function" == typeof define && define.amd ? define(["./flickity", "unipointer/unipointer",
            "fizzy-ui-utils/utils"
        ], function(t, e, i) {
            return n(0, t, e, i)
        }) : "object" == typeof module && module.exports ? module.exports = n(0, require("./flickity"), require(
            "unipointer"), require("fizzy-ui-utils")) : n(0, t.Flickity, t.Unipointer, t.fizzyUIUtils)
    }(window, function(t, e, i, n) {
        "use strict";
        var s = "http://www.w3.org/2000/svg";

        function o(t, e) {
            this.direction = t, this.parent = e, this._create()
        }(o.prototype = Object.create(i.prototype))._create = function() {
            this.isEnabled = !0, this.isPrevious = -1 == this.direction;
            var t = this.parent.options.rightToLeft ? 1 : -1;
            this.isLeft = this.direction == t;
            var e = this.element = document.createElement("button");
            e.className = "flickity-button flickity-prev-next-button", e.className += this.isPrevious ?
                " previous" : " next", e.setAttribute("type", "button"), this.disable(), e.setAttribute(
                    "aria-label", this.isPrevious ? "Previous" : "Next");
            t = this.createSVG();
            e.appendChild(t), this.parent.on("select", this.update.bind(this)), this.on("pointerDown", this
                .parent.childUIPointerDown.bind(this.parent))
        }, o.prototype.activate = function() {
            this.bindStartEvent(this.element), this.element.addEventListener("click", this), this.parent.element
                .appendChild(this.element)
        }, o.prototype.deactivate = function() {
            this.parent.element.removeChild(this.element), this.unbindStartEvent(this.element), this.element
                .removeEventListener("click", this)
        }, o.prototype.createSVG = function() {
            var t = document.createElementNS(s, "svg");
            t.setAttribute("class", "flickity-button-icon"), t.setAttribute("viewBox", "0 0 100 100");
            var e = document.createElementNS(s, "path"),
                i = "string" != typeof(i = this.parent.options.arrowShape) ? "M " + i.x0 + ",50 L " + i.x1 +
                "," + (i.y1 + 50) + " L " + i.x2 + "," + (i.y2 + 50) + " L " + i.x3 + ",50  L " + i.x2 + "," + (
                    50 - i.y2) + " L " + i.x1 + "," + (50 - i.y1) + " Z" : i;
            return e.setAttribute("d", i), e.setAttribute("class", "arrow"), this.isLeft || e.setAttribute(
                "transform", "translate(100, 100) rotate(180) "), t.appendChild(e), t
        }, o.prototype.handleEvent = n.handleEvent, o.prototype.onclick = function() {
            var t;
            this.isEnabled && (this.parent.uiChange(), t = this.isPrevious ? "previous" : "next", this.parent[t]
                ())
        }, o.prototype.enable = function() {
            this.isEnabled || (this.element.disabled = !1, this.isEnabled = !0)
        }, o.prototype.disable = function() {
            this.isEnabled && (this.element.disabled = !0, this.isEnabled = !1)
        }, o.prototype.update = function() {
            var t = this.parent.slides;
            this.parent.options.wrapAround && 1 < t.length ? this.enable() : (t = t.length ? t.length - 1 : 0,
                t = this.isPrevious ? 0 : t, this[this.parent.selectedIndex == t ? "disable" : "enable"]())
        }, o.prototype.destroy = function() {
            this.deactivate(), this.allOff()
        }, n.extend(e.defaults, {
            prevNextButtons: !0,
            arrowShape: {
                x0: 10,
                x1: 60,
                y1: 50,
                x2: 70,
                y2: 40,
                x3: 30
            }
        }), e.createMethods.push("_createPrevNextButtons");
        n = e.prototype;
        return n._createPrevNextButtons = function() {
            this.options.prevNextButtons && (this.prevButton = new o(-1, this), this.nextButton = new o(1,
                this), this.on("activate", this.activatePrevNextButtons))
        }, n.activatePrevNextButtons = function() {
            this.prevButton.activate(), this.nextButton.activate(), this.on("deactivate", this
                .deactivatePrevNextButtons)
        }, n.deactivatePrevNextButtons = function() {
            this.prevButton.deactivate(), this.nextButton.deactivate(), this.off("deactivate", this
                .deactivatePrevNextButtons)
        }, e.PrevNextButton = o, e
    });
    ! function(t, s) {
        "function" == typeof define && define.amd ? define(["./flickity", "unipointer/unipointer",
            "fizzy-ui-utils/utils"
        ], function(t, e, i) {
            return s(0, t, e, i)
        }) : "object" == typeof module && module.exports ? module.exports = s(0, require("./flickity"), require(
            "unipointer"), require("fizzy-ui-utils")) : s(0, t.Flickity, t.Unipointer, t.fizzyUIUtils)
    }(window, function(t, e, i, s) {
        "use strict";

        function o(t) {
            this.parent = t, this._create()
        }(o.prototype = Object.create(i.prototype))._create = function() {
            this.holder = document.createElement("ol"), this.holder.className = "flickity-page-dots", this
                .dots = [], this.handleClick = this.onClick.bind(this), this.on("pointerDown", this.parent
                    .childUIPointerDown.bind(this.parent))
        }, o.prototype.activate = function() {
            this.setDots(), this.holder.addEventListener("click", this.handleClick), this.bindStartEvent(this
                .holder), this.parent.element.appendChild(this.holder)
        }, o.prototype.deactivate = function() {
            this.holder.removeEventListener("click", this.handleClick), this.unbindStartEvent(this.holder), this
                .parent.element.removeChild(this.holder)
        }, o.prototype.setDots = function() {
            var t = this.parent.slides.length - this.dots.length;
            0 < t ? this.addDots(t) : t < 0 && this.removeDots(-t)
        }, o.prototype.addDots = function(t) {
            for (var e = document.createDocumentFragment(), i = [], s = this.dots.length, o = s + t, n = s; n <
                o; n++) {
                var a = document.createElement("li");
                a.className = "dot", a.setAttribute("aria-label", "Page dot " + (n + 1)), e.appendChild(a), i
                    .push(a)
            }
            this.holder.appendChild(e), this.dots = this.dots.concat(i)
        }, o.prototype.removeDots = function(t) {
            this.dots.splice(this.dots.length - t, t).forEach(function(t) {
                this.holder.removeChild(t)
            }, this)
        }, o.prototype.updateSelected = function() {
            this.selectedDot && (this.selectedDot.className = "dot", this.selectedDot.removeAttribute(
                "aria-current")), this.dots.length && (this.selectedDot = this.dots[this.parent
                    .selectedIndex], this.selectedDot.className = "dot is-selected", this.selectedDot
                .setAttribute("aria-current", "step"))
        }, o.prototype.onTap = o.prototype.onClick = function(t) {
            var t = t.target;
            "LI" == t.nodeName && (this.parent.uiChange(), t = this.dots.indexOf(t), this.parent.select(t))
        }, o.prototype.destroy = function() {
            this.deactivate(), this.allOff()
        }, e.PageDots = o, s.extend(e.defaults, {
            pageDots: !0
        }), e.createMethods.push("_createPageDots");
        s = e.prototype;
        return s._createPageDots = function() {
            this.options.pageDots && (this.pageDots = new o(this), this.on("activate", this.activatePageDots),
                this.on("select", this.updateSelectedPageDots), this.on("cellChange", this.updatePageDots),
                this.on("resize", this.updatePageDots), this.on("deactivate", this.deactivatePageDots))
        }, s.activatePageDots = function() {
            this.pageDots.activate()
        }, s.updateSelectedPageDots = function() {
            this.pageDots.updateSelected()
        }, s.updatePageDots = function() {
            this.pageDots.setDots()
        }, s.deactivatePageDots = function() {
            this.pageDots.deactivate()
        }, e.PageDots = o, e
    });
    ! function(t, e) {
        "function" == typeof define && define.amd ? define(["ev-emitter/ev-emitter", "fizzy-ui-utils/utils",
            "./flickity"
        ], e) : "object" == typeof module && module.exports ? module.exports = e(require("ev-emitter"), require(
            "fizzy-ui-utils"), require("./flickity")) : e(t.EvEmitter, t.fizzyUIUtils, t.Flickity)
    }(window, function(t, e, i) {
        "use strict";

        function s(t) {
            this.parent = t, this.state = "stopped", this.onVisibilityChange = this.visibilityChange.bind(this),
                this.onVisibilityPlay = this.visibilityPlay.bind(this)
        }(s.prototype = Object.create(t.prototype)).play = function() {
            "playing" != this.state && (document.hidden ? document.addEventListener("visibilitychange", this
                .onVisibilityPlay) : (this.state = "playing", document.addEventListener(
                "visibilitychange", this.onVisibilityChange), this.tick()))
        }, s.prototype.tick = function() {
            var t, e;
            "playing" == this.state && (t = "number" == typeof(t = this.parent.options.autoPlay) ? t : 3e3, (e =
                this).clear(), this.timeout = setTimeout(function() {
                e.parent.next(!0), e.tick()
            }, t))
        }, s.prototype.stop = function() {
            this.state = "stopped", this.clear(), document.removeEventListener("visibilitychange", this
                .onVisibilityChange)
        }, s.prototype.clear = function() {
            clearTimeout(this.timeout)
        }, s.prototype.pause = function() {
            "playing" == this.state && (this.state = "paused", this.clear())
        }, s.prototype.unpause = function() {
            "paused" == this.state && this.play()
        }, s.prototype.visibilityChange = function() {
            this[document.hidden ? "pause" : "unpause"]()
        }, s.prototype.visibilityPlay = function() {
            this.play(), document.removeEventListener("visibilitychange", this.onVisibilityPlay)
        }, e.extend(i.defaults, {
            pauseAutoPlayOnHover: !0
        }), i.createMethods.push("_createPlayer");
        e = i.prototype;
        return e._createPlayer = function() {
            this.player = new s(this), this.on("activate", this.activatePlayer), this.on("uiChange", this
                .stopPlayer), this.on("pointerDown", this.stopPlayer), this.on("deactivate", this
                .deactivatePlayer)
        }, e.activatePlayer = function() {
            this.options.autoPlay && (this.player.play(), this.element.addEventListener("mouseenter", this))
        }, e.playPlayer = function() {
            this.player.play()
        }, e.stopPlayer = function() {
            this.player.stop()
        }, e.pausePlayer = function() {
            this.player.pause()
        }, e.unpausePlayer = function() {
            this.player.unpause()
        }, e.deactivatePlayer = function() {
            this.player.stop(), this.element.removeEventListener("mouseenter", this)
        }, e.onmouseenter = function() {
            this.options.pauseAutoPlayOnHover && (this.player.pause(), this.element.addEventListener(
                "mouseleave", this))
        }, e.onmouseleave = function() {
            this.player.unpause(), this.element.removeEventListener("mouseleave", this)
        }, i.Player = s, i
    });
    ! function(e, i) {
        "function" == typeof define && define.amd ? define(["./flickity", "fizzy-ui-utils/utils"], function(e, t) {
            return i(0, e, t)
        }) : "object" == typeof module && module.exports ? module.exports = i(0, require("./flickity"), require(
            "fizzy-ui-utils")) : i(0, e.Flickity, e.fizzyUIUtils)
    }(window, function(e, t, l) {
        "use strict";
        var i = t.prototype;
        return i.insert = function(e, t) {
            var i, l, s, n, h = this._makeCells(e);
            h && h.length && (n = this.cells.length, t = void 0 === t ? n : t, s = h, l = document
                .createDocumentFragment(), s.forEach(function(e) {
                    l.appendChild(e.element)
                }), i = l, (e = t == n) ? this.slider.appendChild(i) : (s = this.cells[t].element, this
                    .slider.insertBefore(i, s)), 0 === t ? this.cells = h.concat(this.cells) : e ? this
                .cells = this.cells.concat(h) : (n = this.cells.splice(t, n - t), this.cells = this.cells
                    .concat(h).concat(n)), this._sizeCells(h), this.cellChange(t, !0))
        }, i.append = function(e) {
            this.insert(e, this.cells.length)
        }, i.prepend = function(e) {
            this.insert(e, 0)
        }, i.remove = function(e) {
            var i, e = this.getCells(e);
            e && e.length && (i = this.cells.length - 1, e.forEach(function(e) {
                e.remove();
                var t = this.cells.indexOf(e);
                i = Math.min(t, i), l.removeFrom(this.cells, e)
            }, this), this.cellChange(i, !0))
        }, i.cellSizeChange = function(e) {
            var e = this.getCell(e);
            e && (e.getSize(), e = this.cells.indexOf(e), this.cellChange(e))
        }, i.cellChange = function(e, t) {
            var i = this.selectedElement;
            this._positionCells(e), this._getWrapShiftCells(), this.setGallerySize();
            i = this.getCell(i);
            i && (this.selectedIndex = this.getCellSlideIndex(i)), this.selectedIndex = Math.min(this.slides
                .length - 1, this.selectedIndex), this.emitEvent("cellChange", [e]), this.select(this
                .selectedIndex), t && this.positionSliderAtSelected()
        }, t
    });
    ! function(t, e) {
        "function" == typeof define && define.amd ? define(["./flickity", "fizzy-ui-utils/utils"], function(t, i) {
            return e(0, t, i)
        }) : "object" == typeof module && module.exports ? module.exports = e(0, require("./flickity"), require(
            "fizzy-ui-utils")) : e(0, t.Flickity, t.fizzyUIUtils)
    }(window, function(t, i, l) {
        "use strict";
        i.createMethods.push("_createLazyload");
        var e = i.prototype;

        function a(t, i) {
            this.img = t, this.flickity = i, this.load()
        }
        return e._createLazyload = function() {
            this.on("select", this.lazyLoad)
        }, e.lazyLoad = function() {
            var i, t = this.options.lazyLoad;
            t && (t = this.getAdjacentCellElements("number" == typeof t ? t : 0), i = [], t.forEach(function(
            t) {
                t = function(t) {
                    if ("IMG" == t.nodeName) {
                        var i = t.getAttribute("data-flickity-lazyload"),
                            e = t.getAttribute("data-flickity-lazyload-src"),
                            a = t.getAttribute("data-flickity-lazyload-srcset");
                        if (i || e || a) return [t]
                    }
                    t = t.querySelectorAll(
                        "img[data-flickity-lazyload], img[data-flickity-lazyload-src], img[data-flickity-lazyload-srcset]"
                        );
                    return l.makeArray(t)
                }(t);
                i = i.concat(t)
            }), i.forEach(function(t) {
                new a(t, this)
            }, this))
        }, a.prototype.handleEvent = l.handleEvent, a.prototype.load = function() {
            this.img.addEventListener("load", this), this.img.addEventListener("error", this);
            var t = this.img.getAttribute("data-flickity-lazyload") || this.img.getAttribute(
                    "data-flickity-lazyload-src"),
                i = this.img.getAttribute("data-flickity-lazyload-srcset");
            this.img.src = t, i && this.img.setAttribute("srcset", i), this.img.removeAttribute(
                    "data-flickity-lazyload"), this.img.removeAttribute("data-flickity-lazyload-src"), this.img
                .removeAttribute("data-flickity-lazyload-srcset")
        }, a.prototype.onload = function(t) {
            this.complete(t, "flickity-lazyloaded")
        }, a.prototype.onerror = function(t) {
            this.complete(t, "flickity-lazyerror")
        }, a.prototype.complete = function(t, i) {
            this.img.removeEventListener("load", this), this.img.removeEventListener("error", this);
            var e = this.flickity.getParentCell(this.img),
                e = e && e.element;
            this.flickity.cellSizeChange(e), this.img.classList.add(i), this.flickity.dispatchEvent("lazyLoad",
                t, e)
        }, i.LazyLoader = a, i
    });
    ! function(t, i) {
        "use strict";
        "function" == typeof define && define.amd ? define(["ev-emitter/ev-emitter"], function(e) {
                return i(t, e)
            }) : "object" == typeof module && module.exports ? module.exports = i(t, require("ev-emitter")) : t
            .imagesLoaded = i(t, t.EvEmitter)
    }("undefined" != typeof window ? window : this, function(t, e) {
        "use strict";
        var r = t.jQuery,
            s = t.console;

        function h(e, t) {
            for (var i in t) e[i] = t[i];
            return e
        }
        var a = Array.prototype.slice;

        function d(e, t, i) {
            if (!(this instanceof d)) return new d(e, t, i);
            var o, n = e;
            (n = "string" == typeof e ? document.querySelectorAll(e) : n) ? (this.elements = (o = n, Array.isArray(
                    o) ? o : "object" == typeof o && "number" == typeof o.length ? a.call(o) : [o]), this.options =
                h({}, this.options), "function" == typeof t ? i = t : h(this.options, t), i && this.on("always", i),
                this.getImages(), r && (this.jqDeferred = new r.Deferred), setTimeout(this.check.bind(this))) : s
                .error("Bad element for imagesLoaded " + (n || e))
        }(d.prototype = Object.create(e.prototype)).options = {}, d.prototype.getImages = function() {
            this.images = [], this.elements.forEach(this.addElementImages, this)
        }, d.prototype.addElementImages = function(e) {
            "IMG" == e.nodeName && this.addImage(e), !0 === this.options.background && this
                .addElementBackgroundImages(e);
            var t = e.nodeType;
            if (t && m[t]) {
                for (var i = e.querySelectorAll("img"), o = 0; o < i.length; o++) {
                    var n = i[o];
                    this.addImage(n)
                }
                if ("string" == typeof this.options.background)
                    for (var r = e.querySelectorAll(this.options.background), o = 0; o < r.length; o++) {
                        var s = r[o];
                        this.addElementBackgroundImages(s)
                    }
            }
        };
        var m = {
            1: !0,
            9: !0,
            11: !0
        };

        function i(e) {
            this.img = e
        }

        function o(e, t) {
            this.url = e, this.element = t, this.img = new Image
        }
        return d.prototype.addElementBackgroundImages = function(e) {
            var t = getComputedStyle(e);
            if (t)
                for (var i = /url\((['"])?(.*?)\1\)/gi, o = i.exec(t.backgroundImage); null !== o;) {
                    var n = o && o[2];
                    n && this.addBackground(n, e), o = i.exec(t.backgroundImage)
                }
        }, d.prototype.addImage = function(e) {
            e = new i(e);
            this.images.push(e)
        }, d.prototype.addBackground = function(e, t) {
            t = new o(e, t);
            this.images.push(t)
        }, d.prototype.check = function() {
            var o = this;

            function t(e, t, i) {
                setTimeout(function() {
                    o.progress(e, t, i)
                })
            }
            this.progressedCount = 0, this.hasAnyBroken = !1, this.images.length ? this.images.forEach(function(
                e) {
                e.once("progress", t), e.check()
            }) : this.complete()
        }, d.prototype.progress = function(e, t, i) {
            this.progressedCount++, this.hasAnyBroken = this.hasAnyBroken || !e.isLoaded, this.emitEvent(
                    "progress", [this, e, t]), this.jqDeferred && this.jqDeferred.notify && this.jqDeferred
                .notify(this, e), this.progressedCount == this.images.length && this.complete(), this.options
                .debug && s && s.log("progress: " + i, e, t)
        }, d.prototype.complete = function() {
            var e = this.hasAnyBroken ? "fail" : "done";
            this.isComplete = !0, this.emitEvent(e, [this]), this.emitEvent("always", [this]), this
                .jqDeferred && (e = this.hasAnyBroken ? "reject" : "resolve", this.jqDeferred[e](this))
        }, (i.prototype = Object.create(e.prototype)).check = function() {
            this.getIsImageComplete() ? this.confirm(0 !== this.img.naturalWidth, "naturalWidth") : (this
                .proxyImage = new Image, this.proxyImage.addEventListener("load", this), this.proxyImage
                .addEventListener("error", this), this.img.addEventListener("load", this), this.img
                .addEventListener("error", this), this.proxyImage.src = this.img.src)
        }, i.prototype.getIsImageComplete = function() {
            return this.img.complete && this.img.naturalWidth
        }, i.prototype.confirm = function(e, t) {
            this.isLoaded = e, this.emitEvent("progress", [this, this.img, t])
        }, i.prototype.handleEvent = function(e) {
            var t = "on" + e.type;
            this[t] && this[t](e)
        }, i.prototype.onload = function() {
            this.confirm(!0, "onload"), this.unbindEvents()
        }, i.prototype.onerror = function() {
            this.confirm(!1, "onerror"), this.unbindEvents()
        }, i.prototype.unbindEvents = function() {
            this.proxyImage.removeEventListener("load", this), this.proxyImage.removeEventListener("error",
                this), this.img.removeEventListener("load", this), this.img.removeEventListener("error",
                this)
        }, (o.prototype = Object.create(i.prototype)).check = function() {
            this.img.addEventListener("load", this), this.img.addEventListener("error", this), this.img.src =
                this.url, this.getIsImageComplete() && (this.confirm(0 !== this.img.naturalWidth,
                    "naturalWidth"), this.unbindEvents())
        }, o.prototype.unbindEvents = function() {
            this.img.removeEventListener("load", this), this.img.removeEventListener("error", this)
        }, o.prototype.confirm = function(e, t) {
            this.isLoaded = e, this.emitEvent("progress", [this, this.element, t])
        }, (d.makeJQueryPlugin = function(e) {
            (e = e || t.jQuery) && ((r = e).fn.imagesLoaded = function(e, t) {
                return new d(this, e, t).jqDeferred.promise(r(this))
            })
        })(), d
    });
    ! function(e, t) {
        "function" == typeof define && define.amd ? define(["flickity/js/index", "imagesloaded/imagesloaded"], function(
            e, i) {
            return t(0, e, i)
        }) : "object" == typeof module && module.exports ? module.exports = t(0, require("flickity"), require(
            "imagesloaded")) : e.Flickity = t(0, e.Flickity, e.imagesLoaded)
    }(window, function(e, i, o) {
        "use strict";
        i.createMethods.push("_createImagesLoaded");
        var t = i.prototype;
        return t._createImagesLoaded = function() {
            this.on("activate", this.imagesLoaded)
        }, t.imagesLoaded = function() {
            var t;
            this.options.imagesLoaded && o((t = this).slider).on("progress", function(e, i) {
                i = t.getParentCell(i.img), t.cellSizeChange(i && i.element), t.options.freeScroll || t
                    .positionSliderAtSelected()
            })
        }, i
    });
    ! function(e, t) {
        "function" == typeof define && define.amd ? define(["flickity/js/index", "fizzy-ui-utils/utils"], t) :
            "object" == typeof module && module.exports ? module.exports = t(require("flickity"), require(
                "fizzy-ui-utils")) : e.Flickity = t(e.Flickity, e.fizzyUIUtils)
    }(window, function(n, i) {
        "use strict";
        n.createMethods.push("_createAsNavFor");
        var e = n.prototype;
        return e._createAsNavFor = function() {
            this.on("activate", this.activateAsNavFor), this.on("deactivate", this.deactivateAsNavFor), this.on(
                "destroy", this.destroyAsNavFor);
            var e, t = this.options.asNavFor;
            t && (e = this, setTimeout(function() {
                e.setNavCompanion(t)
            }))
        }, e.setNavCompanion = function(e) {
            e = i.getQueryElement(e);
            var t, e = n.data(e);
            e && e != this && (this.navCompanion = e, (t = this).onNavCompanionSelect = function() {
                    t.navCompanionSelect()
                }, e.on("select", this.onNavCompanionSelect), this.on("staticClick", this.onNavStaticClick),
                this.navCompanionSelect(!0))
        }, e.navCompanionSelect = function(e) {
            var t, n, i = this.navCompanion && this.navCompanion.selectedCells;
            i && (n = i[0], t = this.navCompanion.cells.indexOf(n), n = t + i.length - 1, i = Math.floor((i =
                    this.navCompanion.cellAlign, (n - t) * i + t)), this.selectCell(i, !1, e), this
                .removeNavSelectedElements(), i >= this.cells.length || (n = this.cells.slice(t, 1 + n),
                    this.navSelectedElements = n.map(function(e) {
                        return e.element
                    }), this.changeNavSelectedClass("add")))
        }, e.changeNavSelectedClass = function(t) {
            this.navSelectedElements.forEach(function(e) {
                e.classList[t]("is-nav-selected")
            })
        }, e.activateAsNavFor = function() {
            this.navCompanionSelect(!0)
        }, e.removeNavSelectedElements = function() {
            this.navSelectedElements && (this.changeNavSelectedClass("remove"), delete this.navSelectedElements)
        }, e.onNavStaticClick = function(e, t, n, i) {
            "number" == typeof i && this.navCompanion.selectCell(i)
        }, e.deactivateAsNavFor = function() {
            this.removeNavSelectedElements()
        }, e.destroyAsNavFor = function() {
            this.navCompanion && (this.navCompanion.off("select", this.onNavCompanionSelect), this.off(
                "staticClick", this.onNavStaticClick), delete this.navCompanion)
        }, n
    });
    ! function(t, e) {
        "function" == typeof define && define.amd ? define(["flickity/js/index", "fizzy-ui-utils/utils"], e) :
            "object" == typeof module && module.exports ? module.exports = e(require("flickity"), require(
                "fizzy-ui-utils")) : e(t.Flickity, t.fizzyUIUtils)
    }(window, function(t, e) {
        "use strict";
        t.createMethods.push("_createBgLazyLoad");
        var i = t.prototype;

        function o(t, e, i) {
            this.element = t, this.url = e, this.img = new Image, this.flickity = i, this.load()
        }
        return i._createBgLazyLoad = function() {
            this.on("select", this.bgLazyLoad)
        }, i.bgLazyLoad = function() {
            var t = this.options.bgLazyLoad;
            if (t)
                for (var e = this.getAdjacentCellElements("number" == typeof t ? t : 0), i = 0; i < e
                    .length; i++) {
                    var o = e[i];
                    this.bgLazyLoadElem(o);
                    for (var a = o.querySelectorAll("[data-flickity-bg-lazyload]"), l = 0; l < a.length; l++)
                        this.bgLazyLoadElem(a[l])
                }
        }, i.bgLazyLoadElem = function(t) {
            var e = t.getAttribute("data-flickity-bg-lazyload");
            e && new o(t, e, this)
        }, o.prototype.handleEvent = e.handleEvent, o.prototype.load = function() {
            this.img.addEventListener("load", this), this.img.addEventListener("error", this), this.img.src =
                this.url, this.element.removeAttribute("data-flickity-bg-lazyload")
        }, o.prototype.onload = function(t) {
            this.element.style.backgroundImage = 'url("' + this.url + '")', this.complete(t,
                "flickity-bg-lazyloaded")
        }, o.prototype.onerror = function(t) {
            this.complete(t, "flickity-bg-lazyerror")
        }, o.prototype.complete = function(t, e) {
            this.img.removeEventListener("load", this), this.img.removeEventListener("error", this), this
                .element.classList.add(e), this.flickity.dispatchEvent("bgLazyLoad", t, this.element)
        }, t.BgLazyLoader = o, t
    });
    ! function(e, t) {
        "function" == typeof define && define.amd ? define(["flickity/js/index"], t) : "object" == typeof module &&
            module.exports ? module.exports = t(require("flickity")) : t(e.Flickity)
    }(window, function(e) {
        "use strict";
        e.createMethods.push("_createFullscreen");
        var t = e.prototype;
        t._createFullscreen = function() {
            this.isFullscreen = !1, this.options.fullscreen && (this.viewFullscreenButton = new n("view", this),
                this.exitFullscreenButton = new n("exit", this), this.on("activate", this
                    ._changeFullscreenActive), this.on("deactivate", this._changeFullscreenActive))
        }, t._changeFullscreenActive = function() {
            var e = this.isActive ? "appendChild" : "removeChild";
            this.element[e](this.viewFullscreenButton.element), this.element[e](this.exitFullscreenButton
                .element);
            e = this.isActive ? "activate" : "deactivate";
            this.viewFullscreenButton[e](), this.exitFullscreenButton[e]()
        }, t.viewFullscreen = function() {
            this._changeFullscreen(!0), this.focus()
        }, t.exitFullscreen = function() {
            this._changeFullscreen(!1)
        }, t._changeFullscreen = function(e) {
            var t;
            this.isFullscreen != e && (t = (this.isFullscreen = e) ? "add" : "remove", document.documentElement
                .classList[t]("is-flickity-fullscreen"), this.element.classList[t]("is-fullscreen"), this
                .resize(), this.isFullscreen && this.reposition(), this.dispatchEvent("fullscreenChange",
                    null, [e]))
        }, t.toggleFullscreen = function() {
            this._changeFullscreen(!this.isFullscreen)
        };
        var i = t.setGallerySize;

        function n(e, t) {
            this.name = e, this.createButton(), this.createIcon(), this.onClick = function() {
                t[e + "Fullscreen"]()
            }, this.clickHandler = this.onClick.bind(this)
        }
        t.setGallerySize = function() {
            this.options.setGallerySize && (this.isFullscreen ? this.viewport.style.height = "" : i.call(this))
        }, e.keyboardHandlers[27] = function() {
            this.exitFullscreen()
        }, n.prototype.createButton = function() {
            var e = this.element = document.createElement("button");
            e.className = "flickity-button flickity-fullscreen-button flickity-fullscreen-button-" + this.name,
                e.setAttribute("type", "button");
            var t = (t = this.name + " full-screen")[0].toUpperCase() + t.slice(1);
            e.setAttribute("aria-label", t), e.title = t
        };
        var s = "http://www.w3.org/2000/svg",
            l = {
                view: "M15,20,7,28h5v4H0V20H4v5l8-8Zm5-5,8-8v5h4V0H20V4h5l-8,8Z",
                exit: "M32,3l-7,7h5v4H18V2h4V7l7-7ZM3,32l7-7v5h4V18H2v4H7L0,29Z"
            };
        return n.prototype.createIcon = function() {
            var e = document.createElementNS(s, "svg");
            e.setAttribute("class", "flickity-button-icon"), e.setAttribute("viewBox", "0 0 32 32");
            var t = document.createElementNS(s, "path"),
                i = l[this.name];
            t.setAttribute("d", i), e.appendChild(t), this.element.appendChild(e)
        }, n.prototype.activate = function() {
            this.element.addEventListener("click", this.clickHandler)
        }, n.prototype.deactivate = function() {
            this.element.removeEventListener("click", this.clickHandler)
        }, e.FullscreenButton = n, e
    });
    ! function(t, e) {
        "function" == typeof define && define.amd ? define(["flickity/js/index"], e) : "object" == typeof module &&
            module.exports ? module.exports = e(require("flickity")) : e(t.Flickity)
    }(window, function(t) {
        "use strict";
        t.createMethods.push("_createHash");
        var e = t.prototype;
        e._createHash = function() {
            this.options.hash && (this.connectedHashLinks = [], this.onHashLinkClick = function(t) {
                t.preventDefault(), this.selectCell(t.currentTarget.hash), history.replaceState(null,
                    "", t.currentTarget.hash)
            }.bind(this), this.on("activate", this.activateHash), this.on("deactivate", this
                .deactivateHash))
        }, e.activateHash = function() {
            var t;
            this.on("change", this.onChangeHash), void 0 !== this.options.initialIndex || !location.hash || (t =
                    this.queryCell(location.hash)) && (this.options.initialIndex = this.getCellSlideIndex(t)),
                this.connectHashLinks()
        }, e.deactivateHash = function() {
            this.off("change", this.onChangeHash), this.disconnectHashLinks()
        }, e.onChangeHash = function() {
            var t = this.selectedElement.id;
            t && history.replaceState(null, "", "#" + t)
        }, e.connectHashLinks = function() {
            for (var t = document.querySelectorAll("a"), e = 0; e < t.length; e++) this.connectHashLink(t[e])
        };
        var n = document.createElement("a");
        return e.connectHashLink = function(t) {
            t.hash && (n.href = t.href, n.pathname == location.pathname && this.queryCell(t.hash) && (t
                .addEventListener("click", this.onHashLinkClick), this.connectedHashLinks.push(t)))
        }, e.disconnectHashLinks = function() {
            this.connectedHashLinks.forEach(function(t) {
                t.removeEventListener("click", this.onHashLinkClick)
            }, this), this.connectedHashLinks = []
        }, t
    });
    ! function(e, t) {
        "function" == typeof define && define.amd ? define(["flickity/js/index", "fizzy-ui-utils/utils"], t) :
            "object" == typeof module && module.exports ? module.exports = t(require("flickity"), require(
                "fizzy-ui-utils")) : t(e.Flickity, e.fizzyUIUtils)
    }(this, function(e, s) {
        var t = e.Slide,
            a = t.prototype.updateTarget;
        t.prototype.updateTarget = function() {
            var i, s;
            a.apply(this, arguments), this.parent.options.fade && (i = this.target - this.x, s = this.cells[0]
                .x, this.cells.forEach(function(e) {
                    var t = e.x - s - i;
                    e.renderPosition(t)
                }))
        }, t.prototype.setOpacity = function(t) {
            this.cells.forEach(function(e) {
                e.element.style.opacity = t
            })
        };
        t = e.prototype;
        e.createMethods.push("_createFade"), t._createFade = function() {
            this.fadeIndex = this.selectedIndex, this.prevSelectedIndex = this.selectedIndex, this.on("select",
                this.onSelectFade), this.on("dragEnd", this.onDragEndFade), this.on("settle", this
                .onSettleFade), this.on("activate", this.onActivateFade), this.on("deactivate", this
                .onDeactivateFade)
        };
        var i = t.updateSlides;
        t.updateSlides = function() {
            i.apply(this, arguments), this.options.fade && this.slides.forEach(function(e, t) {
                t = t == this.selectedIndex ? 1 : 0;
                e.setOpacity(t)
            }, this)
        }, t.onSelectFade = function() {
            this.fadeIndex = Math.min(this.prevSelectedIndex, this.slides.length - 1), this.prevSelectedIndex =
                this.selectedIndex
        }, t.onSettleFade = function() {
            delete this.didDragEnd, this.options.fade && (this.selectedSlide.setOpacity(1), this.slides[this
                    .fadeIndex] && this.fadeIndex != this.selectedIndex && this.slides[this.fadeIndex]
                .setOpacity(0))
        }, t.onDragEndFade = function() {
            this.didDragEnd = !0
        }, t.onActivateFade = function() {
            this.options.fade && this.element.classList.add("is-fade")
        }, t.onDeactivateFade = function() {
            this.options.fade && (this.element.classList.remove("is-fade"), this.slides.forEach(function(e) {
                e.setOpacity("")
            }))
        };
        var n = t.positionSlider;
        t.positionSlider = function() {
            this.options.fade ? (this.fadeSlides(), this.dispatchScrollEvent()) : n.apply(this, arguments)
        };
        var d = t.positionSliderAtSelected;
        t.positionSliderAtSelected = function() {
            this.options.fade && this.setTranslateX(0), d.apply(this, arguments)
        }, t.fadeSlides = function() {
            var e, t, i, s, a;
            this.slides.length < 2 || (e = this.getFadeIndexes(), t = this.slides[e.a], a = this.slides[e.b],
                i = this.wrapDifference(t.target, a.target), s = this.wrapDifference(t.target, -this.x), t
                .setOpacity(1 - (s /= i)), a.setOpacity(s), a = e.a, this.isDragging && (a = .5 < s ? e.a :
                    e.b), null != this.fadeHideIndex && this.fadeHideIndex != a && this.fadeHideIndex != e
                .a && this.fadeHideIndex != e.b && this.slides[this.fadeHideIndex].setOpacity(0), this
                .fadeHideIndex = a)
        }, t.getFadeIndexes = function() {
            return this.isDragging || this.didDragEnd ? this.options.wrapAround ? this
            .getFadeDragWrapIndexes() : this.getFadeDragLimitIndexes() : {
                    a: this.fadeIndex,
                    b: this.selectedIndex
                }
        }, t.getFadeDragWrapIndexes = function() {
            var e = this.slides.map(function(e, t) {
                    return this.getSlideDistance(-this.x, t)
                }, this),
                t = e.map(function(e) {
                    return Math.abs(e)
                }),
                i = Math.min.apply(Math, t),
                t = t.indexOf(i),
                i = e[t],
                e = this.slides.length;
            return {
                a: t,
                b: s.modulo(t + (0 <= i ? 1 : -1), e)
            }
        }, t.getFadeDragLimitIndexes = function() {
            for (var e = 0, t = 0; t < this.slides.length - 1; t++) {
                var i = this.slides[t];
                if (-this.x < i.target) break;
                e = t
            }
            return {
                a: e,
                b: e + 1
            }
        }, t.wrapDifference = function(e, t) {
            var i = t - e;
            if (!this.options.wrapAround) return i;
            t = i + this.slideableWidth, e = i - this.slideableWidth;
            return Math.abs(t) < Math.abs(i) && (i = t), i = Math.abs(e) < Math.abs(i) ? e : i
        };
        var h = t._getWrapShiftCells;
        t._getWrapShiftCells = function() {
            this.options.fade || h.apply(this, arguments)
        };
        var o = t.shiftWrapCells;
        return t.shiftWrapCells = function() {
            this.options.fade || o.apply(this, arguments)
        }, e
    });
    ! function(e, n) {
        "function" == typeof define && define.amd ? define(["get-size/get-size", "unidragger/unidragger"], function(t,
            i) {
            return n(e, t, i)
        }) : "object" == typeof module && module.exports ? module.exports = n(e, require("get-size"), require(
            "unidragger")) : e.Draggabilly = n(e, e.getSize, e.Unidragger)
    }(window, function(s, r, t) {
        function e(t, i) {
            for (var e in i) t[e] = i[e];
            return t
        }
        var n = s.jQuery;

        function i(t, i) {
            this.element = "string" == typeof t ? document.querySelector(t) : t, n && (this.$element = n(this
                .element)), this.options = e({}, this.constructor.defaults), this.option(i), this._create()
        }
        t = i.prototype = Object.create(t.prototype);
        i.defaults = {}, t.option = function(t) {
            e(this.options, t)
        };
        var o = {
            relative: !0,
            absolute: !0,
            fixed: !0
        };

        function a(t, i, e) {
            return e = e || "round", i ? Math[e](t / i) * i : t
        }
        return t._create = function() {
            this.position = {}, this._getPosition(), this.startPoint = {
                x: 0,
                y: 0
            }, this.dragPoint = {
                x: 0,
                y: 0
            }, this.startPosition = e({}, this.position);
            var t = getComputedStyle(this.element);
            o[t.position] || (this.element.style.position = "relative"), this.on("pointerMove", this
                .onPointerMove), this.on("pointerUp", this.onPointerUp), this.enable(), this.setHandles()
        }, t.setHandles = function() {
            this.handles = this.options.handle ? this.element.querySelectorAll(this.options.handle) : [this
                .element
            ], this.bindHandles()
        }, t.dispatchEvent = function(t, i, e) {
            var n = [i].concat(e);
            this.emitEvent(t, n), this.dispatchJQueryEvent(t, i, e)
        }, t.dispatchJQueryEvent = function(t, i, e) {
            var n = s.jQuery;
            n && this.$element && ((i = n.Event(i)).type = t, this.$element.trigger(i, e))
        }, t._getPosition = function() {
            var t = getComputedStyle(this.element),
                i = this._getPositionCoord(t.left, "width"),
                e = this._getPositionCoord(t.top, "height");
            this.position.x = isNaN(i) ? 0 : i, this.position.y = isNaN(e) ? 0 : e, this._addTransformPosition(
                t)
        }, t._getPositionCoord = function(t, i) {
            if (-1 == t.indexOf("%")) return parseInt(t, 10);
            var e = r(this.element.parentNode);
            return e ? parseFloat(t) / 100 * e[i] : 0
        }, t._addTransformPosition = function(t) {
            var i, e = t.transform;
            0 === e.indexOf("matrix") && (i = e.split(","), t = 0 === e.indexOf("matrix3d") ? 12 : 4, e =
                parseInt(i[t], 10), t = parseInt(i[1 + t], 10), this.position.x += e, this.position.y += t)
        }, t.onPointerDown = function(t, i) {
            this.element.classList.add("is-pointer-down"), this.dispatchJQueryEvent("pointerDown", t, [i])
        }, t.pointerDown = function(t, i) {
            this.okayPointerDown(t) && this.isEnabled ? (this.pointerDownPointer = {
                        pageX: i.pageX,
                        pageY: i.pageY
                    }, t.preventDefault(), this.pointerDownBlur(), this._bindPostStartEvents(t), this.element
                    .classList.add("is-pointer-down"), this.dispatchEvent("pointerDown", t, [i])) : this
                ._pointerReset()
        }, t.dragStart = function(t, i) {
            this.isEnabled && (this._getPosition(), this.measureContainment(), this.startPosition.x = this
                .position.x, this.startPosition.y = this.position.y, this.setLeftTop(), this.dragPoint.x =
                0, this.dragPoint.y = 0, this.element.classList.add("is-dragging"), this.dispatchEvent(
                    "dragStart", t, [i]), this.animate())
        }, t.measureContainment = function() {
            var t, i, e, n, s, o = this.getContainer();
            o && (t = r(this.element), i = r(o), e = this.element.getBoundingClientRect(), s = o
                .getBoundingClientRect(), n = i.borderLeftWidth + i.borderRightWidth, o = i.borderTopWidth +
                i.borderBottomWidth, s = this.relativeStartPosition = {
                    x: e.left - (s.left + i.borderLeftWidth),
                    y: e.top - (s.top + i.borderTopWidth)
                }, this.containSize = {
                    width: i.width - n - s.x - t.width,
                    height: i.height - o - s.y - t.height
                })
        }, t.getContainer = function() {
            var t = this.options.containment;
            if (t) return t instanceof HTMLElement ? t : "string" == typeof t ? document.querySelector(t) : this
                .element.parentNode
        }, t.onPointerMove = function(t, i, e) {
            this.dispatchJQueryEvent("pointerMove", t, [i, e])
        }, t.dragMove = function(t, i, e) {
            var n, s, o, r;
            this.isEnabled && (o = e.x, r = e.y, n = (s = this.options.grid) && s[0], s = s && s[1], o = a(o,
                n), r = a(r, s), o = this.containDrag("x", o, n), r = this.containDrag("y", r, s), o =
                "y" == this.options.axis ? 0 : o, r = "x" == this.options.axis ? 0 : r, this.position.x =
                this.startPosition.x + o, this.position.y = this.startPosition.y + r, this.dragPoint.x = o,
                this.dragPoint.y = r, this.dispatchEvent("dragMove", t, [i, e]))
        }, t.containDrag = function(t, i, e) {
            if (!this.options.containment) return i;
            var n = "x" == t ? "width" : "height",
                t = a(-this.relativeStartPosition[t], e, "ceil"),
                n = a(n = this.containSize[n], e, "floor");
            return Math.max(t, Math.min(n, i))
        }, t.onPointerUp = function(t, i) {
            this.element.classList.remove("is-pointer-down"), this.dispatchJQueryEvent("pointerUp", t, [i])
        }, t.dragEnd = function(t, i) {
            this.isEnabled && (this.element.style.transform = "", this.setLeftTop(), this.element.classList
                .remove("is-dragging"), this.dispatchEvent("dragEnd", t, [i]))
        }, t.animate = function() {
            var t;
            this.isDragging && (this.positionDrag(), t = this, requestAnimationFrame(function() {
                t.animate()
            }))
        }, t.setLeftTop = function() {
            this.element.style.left = this.position.x + "px", this.element.style.top = this.position.y + "px"
        }, t.positionDrag = function() {
            this.element.style.transform = "translate3d( " + this.dragPoint.x + "px, " + this.dragPoint.y +
                "px, 0)"
        }, t.staticClick = function(t, i) {
            this.dispatchEvent("staticClick", t, [i])
        }, t.setPosition = function(t, i) {
            this.position.x = t, this.position.y = i, this.setLeftTop()
        }, t.enable = function() {
            this.isEnabled = !0
        }, t.disable = function() {
            this.isEnabled = !1, this.isDragging && this.dragEnd()
        }, t.destroy = function() {
            this.disable(), this.element.style.transform = "", this.element.style.left = "", this.element.style
                .top = "", this.element.style.position = "", this.unbindHandles(), this.$element && this
                .$element.removeData("draggabilly")
        }, t._init = function() {}, n && n.bridget && n.bridget("draggabilly", i), i
    });
    window.FizzyDocs = {}, window.filterBind = function(n, i, t, e) {
        n.addEventListener(i, function(n) {
            n.target.matches(t) && e(n)
        })
    };
    FizzyDocs["commercial-license-agreement"] = function(e) {
        let r = {
                developer: {
                    title: "Developer",
                    "for-official": "one (1) Licensed Developer",
                    "for-plain": "one individual Developer"
                },
                team: {
                    title: "Team",
                    "for-official": "up to eight (8) Licensed Developer(s)",
                    "for-plain": "up to 8 Developers"
                },
                organization: {
                    title: "Organization",
                    "for-official": "an unlimited number of Licensed Developer(s)",
                    "for-plain": "an unlimited number of Developers"
                }
            },
            i = e.querySelector(".button-group"),
            t = e.querySelector("h2"),
            o = t.cloneNode(!0);
        o.style.borderTop = "none", o.style.marginTop = 0, o.id = "", o.innerHTML = o.innerHTML.replace(
                "Commercial License", 'Commercial <span data-license-property="title"></span> License'), t
            .textContent = "", i.parentNode.insertBefore(o, i.nextSibling);
        let n = [];
        var l = e.querySelectorAll("[data-license-property]");
        for (let t = 0, e = l.length; t < e; t++) {
            let e = l[t];
            var a = {
                property: e.getAttribute("data-license-property"),
                element: e
            };
            n.push(a)
        }

        function c(e) {
            let t = i.querySelector(".is-selected");
            t && t.classList.remove("is-selected"), e.classList.add("is-selected");
            e = e.getAttribute("data-license-option");
            let o = r[e];
            n.forEach(function(e) {
                e.element.textContent = o[e.property]
            })
        }
        c(i.querySelector(".button--developer")), filterBind(i, "click", ".button", function(e) {
            c(e.target)
        })
    };
    ! function() {
        let a = 0;
        FizzyDocs["gh-button"] = function(t) {
            var e = t.href.split("/"),
                n = e[3],
                e = e[4];
            let c = t.querySelector(".gh-button__stat__text");
            a++;
            t = "ghButtonCallback" + a;
            window[t] = function(t) {
                t = t.data.stargazers_count.toString().replace(/(\d)(?=(\d{3})+$)/g, "$1,");
                c.textContent = t
            };
            let o = document.createElement("script");
            o.src = "https://api.github.com/repos/" + n + "/" + e + "?callback=" + t, document.head.appendChild(o)
        }
    }();
    FizzyDocs["shirt-promo"] = function(e) {
        var t = new Date(2017, 9, 6),
            t = Math.round((t - new Date) / 864e5);
        let o = e.querySelector(".shirt-promo__title");
        o.textContent += `. Only on sale for ${t} more days.`
    };
    ! function() {
        "use strict";
        var e = window.FlickityDocs = {};
        window.utils = fizzyUIUtils, e.makeCellElem = function(e) {
            var t = document.createElement("div");
            t.className = "carousel-cell";
            var n = document.createElement("span");
            return n.className = "carousel-cell__number", n.textContent = e, t.appendChild(n), t
        }, window.filterBind = function(e, t, n, c) {
            e.addEventListener(t, function(e) {
                matchesSelector(e.target, n) && c(e)
            })
        }
    }();
    FlickityDocs["hero-carousel"] = function(e) {
        "use strict";
        var r, c = e.querySelector(".hero-carousel__cell--1").querySelector(".hero-illustration");
        c && ((r = document.createElement("img")).onload = function() {
            c.src = r.src
        }, r.src = "img/flickity-illustration.gif")
    };
    FlickityDocs["page-nav"] = function(c) {
        "use strict";
        new Stickeroo(c)
    };
    ! function(i) {
        "use strict";

        function t(t) {
            t && (this.element = t, this.isActive = !1, this.isFixed = !1, i.addEventListener("resize", this), this
                .onresize())
        }
        var e, s, n, o;
        t.prototype.handleEvent = utils.handleEvent, t.prototype.onresize = function() {
            var t = getComputedStyle(this.element, ":after").content,
                e = getSize(this.element); - 1 != t.indexOf("sticky") && e.innerHeight <= i.innerHeight ? this
                .activate() : this.deactivate()
        }, utils.debounceMethod(t, "onresize"), t.prototype.activate = function() {
            this.isActive || (this.isActive = !0, this.originalY = this.element.getBoundingClientRect().top + i
                .pageYOffset, i.addEventListener("scroll", this), this.onscroll())
        }, t.prototype.deactivate = function() {
            this.isActive && (this.isActive = !1, this.isFixed = !1, this.element.classList.remove("is-fixed"), i
                .removeEventListener("scroll", this))
        }, t.prototype.onscroll = function() {
            var t = i.pageYOffset >= this.originalY;
            t != this.isFixed && (this.element.classList.toggle("is-fixed"), this.isFixed = t)
        }, s = 50, n = t.prototype[e = "onscroll"], o = e + "Timeout", t.prototype[e] = function() {
            var t;
            this[o] || (n.apply(this, arguments), (t = this)[o] = setTimeout(function() {
                n.apply(t, arguments), delete t[o]
            }, s || 100))
        }, i.Stickeroo = t
    }(window);
    FlickityDocs.append = function(e) {
        "use strict";
        var t = e.querySelector(".carousel"),
            c = new Flickity(t, {
                initialIndex: 2
            }),
            i = c.cells.length + 1,
            l = FlickityDocs.makeCellElem;
        e.querySelector(".button").addEventListener("click", function() {
            c.append([l(i++), l(i++)])
        })
    };
    FlickityDocs["arrow-wiz"] = function(e) {
        "use strict";
        var t = e,
            e = t.querySelector("canvas"),
            i = e.getContext("2d"),
            n = e.width,
            r = e.height;

        function l(e, t, o, n, r) {
            r && (i.strokeStyle = r), i.beginPath(), i.moveTo(e, t), i.lineTo(o, n), i.stroke(), i.closePath()
        }
        var a = "hsla(210, 50%, 50%, 0.25)",
            c = "hsla(210, 50%, 50%, 0.5)";

        function o() {
            for (var e = 0; e < 11; e++) {
                var t = 20 * e + .5;
                l(0, t, n, t, e % 5 ? a : c)
            }
            for (e = 0; e < 11; e++) {
                var o = 20 * e + .5;
                l(o, 0, o, r, e % 5 ? a : c)
            }
            l(0, r - .5, n, r - .5, c), l(n - .5, 0, n - .5, r, c)
        }
        o();
        for (var x = [], y = [], u = 0; u < 4; u++) {
            var s = t.querySelector(".arrow-wiz-illo__point--" + u),
                v = new Draggabilly(s, {
                    containment: !0,
                    grid: [10, 10]
                }),
                s = function(t, o) {
                    return function() {
                        var e = h(t);
                        x[o] = e, T()
                    }
                }(v, u);
            v.on("dragMove", s), y.push(v), x[u] = h(v)
        }

        function h(e) {
            return {
                x: e.position.x / 2,
                y: 50 - e.position.y / 2
            }
        }

        function f() {
            i.clearRect(0, 0, n, r), o(), i.strokeStyle = "#333", i.fillStyle = "hsla(0, 0%, 0%, 0.4)", i
                .beginPath(), i.moveTo(2 * x[0].x, 100), i.lineTo(2 * x[1].x, 100 - 2 * x[1].y), i.lineTo(2 * x[2]
                    .x, 100 - 2 * x[2].y), i.lineTo(2 * x[3].x, 100), i.lineTo(2 * x[2].x, 100 + 2 * x[2].y), i
                .lineTo(2 * x[1].x, 100 + 2 * x[1].y), i.lineTo(2 * x[0].x, 100), i.fill(), i.stroke(), i
                .closePath()
        }
        var w = t.querySelector(".arrow-wiz-code code");
        var e = new Flickity(t.querySelector(".carousel"), {
                initialIndex: 2
            }),
            S = e.prevButton.element.querySelector("path"),
            d = e.nextButton.element.querySelector("path");

        function T() {
            var e;
            f(), w.textContent = "arrowShape: { \n  x0: " + x[0].x + ",\n  x1: " + x[1].x + ", y1: " + x[1].y +
                ",\n  x2: " + x[2].x + ", y2: " + x[2].y + ",\n  x3: " + x[3].x + "\n}", e = "M " + x[0].x +
                ",50 L " + x[1].x + "," + (50 + x[1].y) + " L " + x[2].x + "," + (50 + x[2].y) + " L " + x[3].x +
                ",50  L " + x[2].x + "," + (50 - x[2].y) + " L " + x[1].x + "," + (50 - x[1].y) + " Z", S
                .setAttribute("d", e), d.setAttribute("d", e)
        }
        T()
    };
    FlickityDocs["custom-nav"] = function(e) {
        "use strict";
        var t = e.querySelector(".carousel"),
            c = new Flickity(t, {
                prevNextButtons: !1,
                pageDots: !1
            }),
            n = e.querySelector(".button-group--cells"),
            i = utils.makeArray(n.children);
        c.on("select", function() {
            var e = n.querySelector(".is-selected"),
                t = n.children[c.selectedIndex];
            e.classList.remove("is-selected"), t.classList.add("is-selected")
        }), filterBind(n, "click", ".button", function(e) {
            e = i.indexOf(e.target);
            c.select(e)
        }), e.querySelector(".button--previous").addEventListener("click", function() {
            c.previous()
        }), e.querySelector(".button--next").addEventListener("click", function() {
            c.next()
        })
    };
    FlickityDocs.destroy = function(e) {
        "use strict";
        var t = e.querySelector(".carousel"),
            c = new Flickity(t),
            i = !0;
        e.querySelector(".button").addEventListener("click", function() {
            i ? c.destroy() : c = new Flickity(t), i = !i
        })
    };
    FlickityDocs["events-table"] = function(e) {
        "use strict";
        var i = e.querySelector(".event-table").querySelector("tbody"),
            e = e.querySelector(".carousel"),
            c = new Flickity(e, {
                on: {
                    ready: function() {
                        l("ready")
                    }
                }
            });

        function l(e, t) {
            var n = document.createElement("tr"),
                c = document.createElement("td"),
                l = document.createElement("td"),
                o = document.createElement("td");
            c.className = "event-table__time", l.className = "event-table__event", o.className =
                "event-table__message";
            var a = new Date,
                a = a.getHours() + ":" + a.getMinutes() + ":" + a.getSeconds() + "." + a.getMilliseconds();
            c.textContent = a, l.textContent = e, o.textContent = t || "", n.appendChild(c), n.appendChild(l), n
                .appendChild(o);
            o = i.children;
            1 == o.length ? i.appendChild(n) : i.insertBefore(n, o[1]);
            o = i.children[11];
            o && i.removeChild(o)
        }
        c.on("change", function(e) {
            l("change", "changed to cell " + (e + 1))
        }), c.on("select", function(e) {
            l("select", "selected cell " + (e + 1))
        }), c.on("settle", function(e) {
            l("settle", "settled at cell " + (e + 1))
        }), c.on("staticClick", function(e, t, n, c) {
            l("staticClick", n ? "clicked cell " + c : "")
        }), ["dragStart", "dragMove", "dragEnd", "pointerDown", "pointerMove", "pointerUp"].forEach(function(
        e) {
            var t, n = (t = e, function() {
                l(t)
            });
            c.on(e, n)
        })
    };
    FlickityDocs["view-fullscreen-demo"] = function(e) {
        "use strict";
        var c = e.querySelector(".carousel"),
            l = new Flickity(c, {
                fullscreen: !0
            });
        e.querySelector(".button").addEventListener("click", function() {
            l.viewFullscreen()
        })
    };
    FlickityDocs.insert = function(e) {
        "use strict";
        var t = e.querySelector(".carousel"),
            i = new Flickity(t, {
                initialIndex: 1
            }),
            c = i.cells.length + 1,
            l = FlickityDocs.makeCellElem;
        e.querySelector(".button").addEventListener("click", function() {
            var e = [l(c++), l(c++)];
            i.insert(e, 2)
        })
    };
    FlickityDocs.keyhole = function(e) {
        "use strict";
        var r = "string" == typeof e.style.transform ? "transform" : "WebkitTransform",
            e = e.querySelector(".carousel"),
            l = new Flickity(e, {
                imagesLoaded: !0
            }),
            o = e.querySelectorAll(".keyhole-cell img");
        l.on("scroll", function() {
            l.slides.forEach(function(e, t) {
                t = o[t], e = -1 * (e.target + l.x) / 3;
                t.style[r] = "translateX(" + e + "px)"
            })
        })
    };
    FlickityDocs.next = function(e) {
        "use strict";
        var t = e.querySelector(".carousel"),
            n = new Flickity(t);
        e.querySelector(".button--next").addEventListener("click", function() {
            n.next()
        }), e.querySelector(".button--next-wrapped").addEventListener("click", function() {
            n.next(!0)
        })
    };
    FlickityDocs.parallax = function(l) {
        "use strict";
        var e = l.querySelector(".carousel"),
            e = new Flickity(e),
            r = l.querySelector(".parallax__layer--bg"),
            a = l.querySelector(".parallax__layer--fg");

        function t(l, e, r) {
            l.style.left = 100 * (.5 - .6 * (.5 + 4 * r) * e) + "%"
        }
        e.on("scroll", function(l) {
            t(r, .8, l), t(a, 1.25, l)
        }), e.reposition()
    };
    FlickityDocs.player = function(e) {
        "use strict";
        var t = e.querySelector(".carousel"),
            n = new Flickity(t, {
                autoPlay: 1e3
            }),
            r = e.querySelector(".player-status");

        function u() {
            r.textContent = n.player.state
        }
        u(), e.querySelector(".button--play").addEventListener("click", function() {
            n.playPlayer(), u()
        }), e.querySelector(".button--stop").addEventListener("click", function() {
            n.stopPlayer(), u()
        }), e.querySelector(".button--pause").addEventListener("click", function() {
            n.pausePlayer(), u()
        }), e.querySelector(".button--unpause").addEventListener("click", function() {
            n.unpausePlayer(), u()
        })
    };
    FlickityDocs.prepend = function(e) {
        "use strict";
        var c = e.querySelector(".carousel"),
            t = new Flickity(c),
            l = t.cells.length + 1,
            i = FlickityDocs.makeCellElem;
        e.querySelector(".button").addEventListener("click", function() {
            t.prepend([i(l++), i(l++)])
        })
    };
    FlickityDocs["progress-bar"] = function(r) {
        "use strict";
        var e = r.querySelector(".carousel"),
            t = r.querySelector(".progress-bar__bar"),
            e = new Flickity(e);
        e.on("scroll", function(r) {
            r = Math.max(0, Math.min(1, r)), t.style.width = 100 * r + "%"
        }), e.reposition()
    };
    FlickityDocs.previous = function(e) {
        "use strict";
        var t = e.querySelector(".carousel"),
            i = new Flickity(t);
        e.querySelector(".button--previous").addEventListener("click", function() {
            i.previous()
        }), e.querySelector(".button--previous-wrapped").addEventListener("click", function() {
            i.previous(!0)
        })
    };
    FlickityDocs.remove = function(i) {
        "use strict";
        var i = i.querySelector(".carousel"),
            t = new Flickity(i, {
                initialIndex: 1
            });
        t.on("staticClick", function(i, e, c) {
            c && t.remove(c)
        })
    };
    FlickityDocs.reposition = function(i) {
        "use strict";
        var i = i.querySelector(".carousel"),
            e = new Flickity(i);
        e.on("staticClick", function(i, t, c) {
            c && (c.classList.toggle("is-expanded"), e.reposition())
        })
    };
    FlickityDocs.resize = function(e) {
        "use strict";
        var t = e.querySelector(".carousel"),
            i = new Flickity(t);
        e.querySelector(".button").addEventListener("click", function() {
            t.classList.toggle("is-expanded"), i.resize()
        })
    };
    FlickityDocs["resize-show"] = function(e) {
        "use strict";
        var t = e.querySelector(".carousel"),
            c = new Flickity(t);
        e.querySelector(".button").addEventListener("click", function() {
            t.style.display = "block", c.resize()
        })
    };
    FlickityDocs.select = function(t) {
        "use strict";
        var e = window.fizzyUIUtils,
            c = new Flickity(t.querySelector(".carousel")),
            t = t.querySelector(".button-group"),
            i = e.makeArray(t.querySelectorAll(".button"));
        filterBind(t, "click", ".button", function(t) {
            t = i.indexOf(t.target);
            c.select(t)
        })
    };
    FlickityDocs["select-cell"] = function(e) {
        "use strict";
        var t = window.fizzyUIUtils,
            l = new Flickity(e.querySelector(".carousel"), {
                groupCells: !0
            }),
            e = e.querySelector(".button-group"),
            c = t.makeArray(e.querySelectorAll(".button"));
        filterBind(e, "click", ".button", function(e) {
            e = c.indexOf(e.target);
            l.selectCell(e)
        })
    };
    FlickityDocs["select-cell-selector"] = function(e) {
        "use strict";
        var t = new Flickity(e.querySelector(".carousel"), {
                groupCells: !0
            }),
            e = e.querySelector(".button-group");
        filterBind(e, "click", ".button", function(e) {
            e = e.target.getAttribute("data-selector");
            t.selectCell(e)
        })
    };
    FlickityDocs["select-instant"] = function(t) {
        "use strict";
        var e = window.fizzyUIUtils,
            i = new Flickity(t.querySelector(".carousel")),
            t = t.querySelector(".button-group"),
            c = e.makeArray(t.querySelectorAll(".button"));
        filterBind(t, "click", ".button", function(t) {
            t = c.indexOf(t.target);
            i.select(t, !1, !0)
        })
    };
    FlickityDocs["static-click"] = function(c) {
        "use strict";
        var s = c.querySelector(".carousel"),
            e = new Flickity(s, {
                initialIndex: 1
            }),
            r = c.querySelector(".logger");
        e.on("staticClick", function(c, e, i, t) {
            var l;
            i && ((l = s.querySelector(".is-clicked")) && l.classList.remove("is-clicked"), i.classList.add(
                "is-clicked"), r.textContent = "Cell " + (t + 1) + " clicked")
        })
    };
    ! function() {
        "use strict";
        for (var t = document.querySelectorAll("[data-js]"), e = 0; e < t.length; e++) {
            var c = t[e],
                r = c.getAttribute("data-js"),
                r = FlickityDocs[r] || FizzyDocs[r];
            r && r(c)
        }
    }();
