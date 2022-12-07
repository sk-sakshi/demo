/**
 * @license
 * PramukhIME Javascript Library v4.0.0 -  http://www.vishalon.net/pramukhime/javascript-library
 * Copyright (c) 2005-2018 Vishal Monpara (http://www.vishalon.net)
 * 
 * License:
 * Please read license.html file for detailed license terms.
 * 
 * License Summary
 *   Personal and Commercial use - Allowed (Except noted below)
 *   Use in Software as a Service (SaaS), Distribution Application/Module/Add-on/Plugin, OEM- Not Allowed
 *   Modify source code or any file? - Not Allowed
 *   Hosting for sharing/distribution - Not Allowed
 */
! function(n) {
    "use strict";

    function t() {
        var t, i, r, u, e = this,
            o = {},
            f = "",
            s = !0,
            c = !1,
            h = 0,
            a = !0,
            v = !1,
            p = !1,
            l = function(t, i) {
                i ? t.removeEventListener ? (t.removeEventListener("keypress", e.t, !1), t.removeEventListener("keyup", e.i, !1), t.removeEventListener("touchend", e.reset, !1), n.u ? t.removeEventListener("pointerup", e.reset, !1) : t.removeEventListener("mouseup", e.reset, !1), t.removeEventListener("focus", e.o, !0), t.removeEventListener("blur", e.s, !0), t.removeEventListener("compositionstart", e.h, !1), t.removeEventListener("compositionupdate", e.v, !1), t.removeEventListener("compositionend", e.p, !1), t.removeEventListener("input", e.l, !1), t.removeEventListener("paste", e.m, !1)) : t.detachEvent && (t.detachEvent("onkeypress", e.t), t.detachEvent("onkeyup", e.i), n.u || t.detachEvent("onmouseup", e.reset), t.detachEvent("onfocusin", e.o), t.detachEvent("onfocusout", e.s), t.detachEvent("onpaste", e.m)) : t.addEventListener ? (t.addEventListener("keypress", e.t, !1), t.addEventListener("keyup", e.i, !1), t.addEventListener("touchend", e.reset, !1), n.u ? t.addEventListener("pointerup", e.reset, !1) : t.addEventListener("mouseup", e.reset, !1), t.addEventListener("focus", e.o, !0), t.addEventListener("blur", e.s, !0), t.addEventListener("compositionstart", e.h, !1), t.addEventListener("compositionupdate", e.v, !1), t.addEventListener("compositionend", e.p, !1), t.addEventListener("input", e.l, !1), t.addEventListener("paste", e.m, !1)) : t.attachEvent && (t.attachEvent("onkeypress", e.t), t.attachEvent("onkeyup", e.i), n.u || t.attachEvent("onmouseup", e.reset), t.attachEvent("onfocusin", e.o), t.attachEvent("onfocusout", e.s), t.attachEvent("onpaste", e.m))
            },
            d = new function() {
                var n = [];
                this.k = function(t) {
                    var i, r, e = t.contentWindow ? t.contentWindow.document : t.ownerDocument || t,
                        o = 1,
                        f = 0;
                    if (void 0 === t.g) {
                        for (u = !0, f = n.length - 1; f >= 0; f--)
                            if ((i = n[f]).M === e) {
                                if (1 === i.P && t === e) return;
                                break
                            }
                        void 0 === e.g && u && (h++, e.g = "pramukhid_" + h, l(e, !1)), r = {
                            M: e,
                            P: o,
                            V: []
                        }, n.push(r)
                    } else if (1 === t.P)
                        for (f = t.V.length - 1; f >= 0; f--)
                            if (t.V[f] === t.g) {
                                t.V.splice(f, 1);
                                break
                            }
                }, this.C = function(t) {
                    for (var i, r = t.contentWindow ? t.contentWindow.document : t.ownerDocument || t, u = n.length - 1; u >= 0; u--)
                        if ((i = n[u]).M === r) {
                            if (1 === i.P) {
                                if (t === r) return i = n.splice(u, 1)[0], delete r.g, void l(r, !0);
                                if (void 0 === t.g) return h++, t.g = "pramukhid_" + h, void i.V.push(t.g)
                            }
                            break
                        }
                }, this.S = function(t) {
                    for (var i, r, u = t.contentWindow ? t.contentWindow.document : t.ownerDocument || t, e = n.length - 1; e >= 0; e--)
                        if ((i = n[e]).M === u) {
                            if (1 === i.P) {
                                if (t === u) return !(!u.designMode || "on" !== u.designMode.toLowerCase());
                                if (void 0 !== t.g)
                                    for (r = i.V.length - 1; r >= 0; r--)
                                        if (i.V[r] === t.g) return !1;
                                if (void 0 === t.tagName) return !0;
                                switch (t.tagName.toLowerCase()) {
                                    case "input":
                                        return void 0 === t.type || !!/text|date|email|month|number|search|tel|time|url|week/.test(t.type.toLowerCase());
                                    case "textarea":
                                        return !0;
                                    case "button":
                                    case "select":
                                        return !1;
                                    default:
                                        return t.isContentEditable || !1
                                }
                                return !0
                            }
                            break
                        }
                    return !1
                }
            },
            m = function() {
                this.setLanguage = function(n) {}, this.hasSettings = function() {
                    return !1
                }, this.getSettings = function(n) {
                    return [{
                        language: "english",
                        kb: "pramukhime"
                    }]
                }, this.setSettings = function(n) {}, this.canProcess = function() {
                    return !1
                }, this.process = function(n, t, i) {
                    return {
                        letterConsumed: !1,
                        removeCharacters: 0,
                        unicodeText: ""
                    }
                }, this.reset = function() {}, this.rectify = function(n) {
                    return n
                }, this.hasHelp = function() {
                    return !1
                }, this.getHelp = function() {
                    return "pramukhime-english.html"
                }, this.getHelpImage = function() {
                    return "pramukhime-english.png"
                }, this.getKeyboardName = function() {
                    return "pramukhime"
                }, this.getLanguage = function() {
                    return "english"
                }, this.getLanguageCode = function() {
                    return "EN"
                }, this.getLanguages = function() {
                    return ["english"]
                }, this.supports = function(n) {
                    return "english" === n.toLowerCase()
                }, this.resetSettings = function() {}
            };
        this.isSupplementaryChar = function(n) {
            var t = n.charCodeAt(0);
            return t >= 55296 && t <= 56319
        }, this.charCodeAt = function(n, t, i) {
            return i || this.isSupplementaryChar(n.charAt(t)) ? 1024 * (n.charCodeAt(t) - 55296) + n.charCodeAt(t + 1) - 56320 + 65536 : n.charCodeAt(t)
        }, this.fromCharCode = function(n) {
            if (n > 65535) {
                var t = Math.floor((n - 65536) / 1024) + 55296,
                    i = (n - 65536) % 1024 + 56320;
                return String.fromCharCode(t, i)
            }
            return String.fromCharCode(n)
        };
        var k = function(n) {
            n.stopPropagation ? n.stopPropagation() : n.cancelBubble = !0, n.preventDefault ? n.preventDefault() : n.returnValue = !1
        };
        this.addKeyboard = function(t, i) {
            var r;
            if ("function" == typeof t) r = t;
            else if ("string" == typeof t && "function" != typeof(r = n[t])) return;
            return r && (t = new r), o[t.getKeyboardName().toLowerCase()] = t, i && this.setLanguage(i, t.getKeyboardName()), t
        }, this.removeKeyboard = function(n) {
            if (n) {
                var r = n.toLowerCase(),
                    u = !1;
                void 0 !== o[r] && (t.kb === r && (t = i = m.getLanguage(), u = !0), delete o[r], u && this.setLanguage(t.language, t.kb))
            }
        }, this.convert = function(n) {
            if (!r.canProcess()) return n;
            r.reset();
            var t, i, u, e, o, f = n.length,
                s = [];
            for (t = 0; t < f; t++) {
                for (o = n.charCodeAt(t), e = r.process(o, !1, !1), i = 1; i <= e.removeCharacters; i++) s.pop();
                for (u = e.letterConsumed ? e.unicodeText : n.charAt(t), i = 0; i < u.length; i++) s.push(u.charAt(i))
            }
            return s.join("")
        }, this.getLanguage = function() {
            return {
                language: t.language,
                kb: t.kb
            }
        }, this.getLanguageCode = function() {
            return r.getLanguageCode()
        }, this.hasSettings = function() {
            return r.hasSettings()
        }, this.getSetting = function() {
            return r.getSettings(t.language)
        }, this.getSettings = function() {
            var n = [];
            for (var t in o) o.hasOwnProperty(t) && o[t].hasSettings() && (n = n.concat(o[t].getSettings("all")));
            return n
        }, this.hasHelp = function() {
            return r.hasHelp()
        }, this.getHelpImage = function() {
            return r.getHelpImage()
        }, this.getHelp = function() {
            return r.getHelp()
        }, this.setLanguage = function(n, u) {
            n && (n = n.toLowerCase()), u && (u = u.toLowerCase()), n && u && o[u] && (t && t.kb === u && t.language === n || ((r = o[u]).setLanguage(n), i = t, t = {
                language: r.getLanguage(),
                kb: r.getKeyboardName()
            }))
        }, this.setSettings = function(n) {
            var t, i, r = n.length,
                u = 0,
                e = {};
            for (u = 0; u < r; u++)(i = n[u]).kb = i.kb.toLowerCase(), void 0 === e[i.kb] && (e[i.kb] = []), e[i.kb].push(i);
            for (var f in e) void 0 !== (t = o[f]) && t.hasSettings() && (t.setSettings(e[f]), !0)
        }, this.resetSettings = function() {
            for (var n in o) o.hasOwnProperty(n) && o[n].hasSettings() && (o[n].resetSettings(), !0)
        }, this.reset = function(n) {
            if (s) {
                var t = n.target || n.srcElement || n;
                r.reset(), c && (f = e.D(t)._)
            }
        }, this.I = function(n, t, i, r) {
            var u, e, o = n.length,
                f = t.length,
                s = 0,
                c = o - 1,
                h = f - 1;
            if (r) {
                for (u = Math.min(o, f, i); s < u && n.charAt(s) === t.charAt(s); s++);
                e = n.substring(s, i)
            } else {
                for ((u = Math.min(o - i, f - i)) < 0 && (u = 0), s = u; s > 0 && n.charAt(c) === t.charAt(h);) c--, h--, s--;
                e = n.substring(i, o - (u - s))
            }
            return e
        }, this.D = function(n) {
            var t, i;
            if (!c) return {
                _: n.value || "",
                N: n.selectionStart || 0
            };
            var r = n.ownerDocument || n,
                u = r.defaultView || r.parentWindow,
                e = (t = (i = u.getSelection ? u.getSelection() : r.selection).rangeCount > 0 ? i.getRangeAt(0) : i.createRange ? i.createRange() : r.createRange()).startContainer;
            return e && 3 === e.nodeType ? {
                _: e.nodeValue,
                N: t.startOffset
            } : {
                _: "",
                N: 0
            }
        }, this.o = function(n) {
            var t = n.target || n.srcElement;
            s = d.S(t), c = !/input|textarea/.test(t.nodeName.toLowerCase()), s && (f = e.D(t)._, r.reset())
        }, this.s = function(n) {
            s = !1, f = "", c = !0
        }, this.l = function(n) {
            var t = n.target || n.srcElement;
            if (s) {
                if (!a) return v || (f = e.D(t)._), void(a = !0);
                e.T(t, !0), a = !0
            } else a = !0
        }, this.T = function(n, t) {
            if (r.canProcess()) {
                for (var i, u, o, s = e.D(n), h = s._, a = s.N, v = e.I(h, f, a, t), l = v.length, d = (t ? -1 : 1) * v.length, m = 0, k = []; m < l; m++) {
                    for (i = r.process(v.charCodeAt(m), !1, !1), u = 1; u <= i.removeCharacters; u++) 0 === k.length ? d-- : k.pop();
                    for (o = i.letterConsumed ? i.unicodeText : v.charAt(m), u = 0; u < o.length; u++) k.push(o.charAt(u))
                }
                e.j(n, k.join(""), d, c)
            }
            f = e.D(n)._, p && e.reset(n), p = !1
        }, this.h = function(n) {
            a = !1, v = !0
        }, this.v = function(n) {
            a = !1, v = !0
        }, this.p = function(n) {
            s ? (a = !0, v = !1, p = !0) : a = !1
        }, this.m = function(n) {
            a = !1, v = !1
        }, this.i = function(n) {
            if (!s) return !0;
            var t = null == n.which ? null != n.charCode ? n.charCode : n.keyCode : n.which;
            return (t >= 33 && t <= 40 || 46 === t || 8 === t || 13 === t) && e.reset(n), !0
        }, this.t = function(n) {
            a = !1, v = !1;
            var t = n.target || n.srcElement,
                i = null == n.which ? null != n.charCode ? n.charCode : n.keyCode : n.which;
            if (!s || 0 === i) return !0;
            var u, o = "",
                f = 0;
            return u = r.process(i, n.ctrlKey || n.metaKey, n.altKey), o = u.unicodeText, !u.letterConsumed || (f = -u.removeCharacters, (o.length > 0 || 0 !== f) && e.j(t, o, f, c), k(n), !1)
        }, this.j = function(n, t, i, r) {
            var u, e, o, f;
            if (u = n.ownerDocument || n, f = u.defaultView || u.parentWindow, e = f.getSelection ? f.getSelection() : u.selection, (o = e.rangeCount > 0 ? e.getRangeAt(0) : e.createRange ? e.createRange() : u.createRange()).setStart) {
                if (r) {
                    var s, c = o.startContainer,
                        h = o.endContainer,
                        a = o.startOffset,
                        v = o.endOffset,
                        p = "",
                        l = "",
                        d = 0;
                    if (3 === c.nodeType) s = c, a + i > 0 && (p = c.nodeValue.substring(0, a + i)), c === h && (l = h.nodeValue.substring(v));
                    else {
                        var m = u.createTextNode("");
                        c.childNodes.length > 0 ? 3 === (s = c.childNodes[a]).nodeType ? p = s.nodeValue : 1 === s.nodeType && (s = c.insertBefore(m, s)) : s = c.appendChild(m)
                    }
                    d = (p += t).length, s.nodeValue = p + l, o.setStart(s, d), o.deleteContents(), o.setStart(s, d), o.setEnd(s, d), o.collapse(!0), e.removeAllRanges ? e.removeAllRanges() : e.empty && e.empty(), e.addRange(o)
                } else if (0 !== t.length || 0 !== i) {
                    var k = n.selectionStart + (i < 0 ? i : 0),
                        g = n.scrollTop,
                        b = n.value,
                        y = n.scrollLeft,
                        w = b.substring(0, k),
                        x = b.substring(n.selectionEnd + (i > 0 ? i : 0), b.length);
                    n.maxLength >= 0 && w.length + t.length + x.length > n.maxLength && (t = t.substring(0, n.maxLength - w.length - x.length)), n.value = w + t + x, (k += t.length) < 0 && (k = 0), n.setSelectionRange(k, k), n.scrollTop = g, n.scrollLeft = y
                }
            } else o.moveStart("character", i), o.text = " " == o.text.charAt(o.text.length - 1) ? t + " " : t, o.collapse(!0), o.select()
        }, this.enable = function(t) {
            d.k(n.document)
        }, this.disable = function(t) {
            d.C(n.document)
        }, this.getKeyboard = function(n) {
            return n || (n = t.kb), o[n]
        }, r = new m, t = {
            language: r.getLanguage(),
            kb: r.getKeyboardName()
        }, i = t, this.addKeyboard(r)
    }
    n.pramukhIME = n.pramukhIME || new t
}(window);