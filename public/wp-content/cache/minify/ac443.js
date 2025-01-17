! function(e) {
    var t = {};

    function n(r) {
        if (t[r]) return t[r].exports;
        var o = t[r] = {
            i: r,
            l: !1,
            exports: {}
        };
        return e[r].call(o.exports, o, o.exports, n), o.l = !0, o.exports
    }
    n.m = e, n.c = t, n.d = function(e, t, r) {
        n.o(e, t) || Object.defineProperty(e, t, {
            enumerable: !0,
            get: r
        })
    }, n.r = function(e) {
        "undefined" != typeof Symbol && Symbol.toStringTag && Object.defineProperty(e, Symbol.toStringTag, {
            value: "Module"
        }), Object.defineProperty(e, "__esModule", {
            value: !0
        })
    }, n.t = function(e, t) {
        if (1 & t && (e = n(e)), 8 & t) return e;
        if (4 & t && "object" == typeof e && e && e.__esModule) return e;
        var r = Object.create(null);
        if (n.r(r), Object.defineProperty(r, "default", {
                enumerable: !0,
                value: e
            }), 2 & t && "string" != typeof e)
            for (var o in e) n.d(r, o, function(t) {
                return e[t]
            }.bind(null, o));
        return r
    }, n.n = function(e) {
        var t = e && e.__esModule ? function() {
            return e.default
        } : function() {
            return e
        };
        return n.d(t, "a", t), t
    }, n.o = function(e, t) {
        return Object.prototype.hasOwnProperty.call(e, t)
    }, n.p = "", n(n.s = 3)
}([function(e, t) {
    e.exports = function(e, t, n) {
        return t in e ? Object.defineProperty(e, t, {
            value: n,
            enumerable: !0,
            configurable: !0,
            writable: !0
        }) : e[t] = n, e
    }, e.exports.default = e.exports, e.exports.__esModule = !0
}, function(e, t, n) {
    var r = n(2);
    e.exports = function(e, t) {
        if (null == e) return {};
        var n, o, c = r(e, t);
        if (Object.getOwnPropertySymbols) {
            var a = Object.getOwnPropertySymbols(e);
            for (o = 0; o < a.length; o++) n = a[o], t.indexOf(n) >= 0 || Object.prototype.propertyIsEnumerable.call(e, n) && (c[n] = e[n])
        }
        return c
    }, e.exports.default = e.exports, e.exports.__esModule = !0
}, function(e, t) {
    e.exports = function(e, t) {
        if (null == e) return {};
        var n, r, o = {},
            c = Object.keys(e);
        for (r = 0; r < c.length; r++) n = c[r], t.indexOf(n) >= 0 || (o[n] = e[n]);
        return o
    }, e.exports.default = e.exports, e.exports.__esModule = !0
}, function(e, t, n) {
    "use strict";
    n.r(t);
    var r = n(0),
        o = n.n(r),
        c = function(e) {
            return Math.abs(parseInt(e, 10))
        },
        a = function(e, t) {
            var n = new Map([
                ["init", "init"],
                ["validation_failed", "invalid"],
                ["acceptance_missing", "unaccepted"],
                ["spam", "spam"],
                ["aborted", "aborted"],
                ["mail_sent", "sent"],
                ["mail_failed", "failed"],
                ["submitting", "submitting"],
                ["resetting", "resetting"]
            ]);
            n.has(t) && (t = n.get(t)), Array.from(n.values()).includes(t) || (t = (t = t.replace(/[^0-9a-z]+/i, " ").trim()).replace(/\s+/, "-"), t = "custom-".concat(t));
            var r = e.getAttribute("data-status");
            return e.wpcf7.status = t, e.setAttribute("data-status", t), e.classList.add(t), r && r !== t && e.classList.remove(r), t
        },
        i = function(e, t, n) {
            var r = new CustomEvent("wpcf7".concat(t), {
                bubbles: !0,
                detail: n
            });
            "string" == typeof e && (e = document.querySelector(e)), e.dispatchEvent(r)
        },
        s = n(1),
        u = n.n(s);

    function f(e, t) {
        var n = Object.keys(e);
        if (Object.getOwnPropertySymbols) {
            var r = Object.getOwnPropertySymbols(e);
            t && (r = r.filter((function(t) {
                return Object.getOwnPropertyDescriptor(e, t).enumerable
            }))), n.push.apply(n, r)
        }
        return n
    }

    function l(e) {
        for (var t = 1; t < arguments.length; t++) {
            var n = null != arguments[t] ? arguments[t] : {};
            t % 2 ? f(Object(n), !0).forEach((function(t) {
                o()(e, t, n[t])
            })) : Object.getOwnPropertyDescriptors ? Object.defineProperties(e, Object.getOwnPropertyDescriptors(n)) : f(Object(n)).forEach((function(t) {
                Object.defineProperty(e, t, Object.getOwnPropertyDescriptor(n, t))
            }))
        }
        return e
    }
    var p = function(e) {
            var t = wpcf7.api,
                n = t.root,
                r = t.namespace,
                o = void 0 === r ? "contact-form-7/v1" : r;
            return d.reduceRight((function(e, t) {
                return function(n) {
                    return t(n, e)
                }
            }), (function(e) {
                var t, r, c = e.url,
                    a = e.path,
                    i = e.endpoint,
                    s = e.headers,
                    f = e.body,
                    p = e.data,
                    d = u()(e, ["url", "path", "endpoint", "headers", "body", "data"]);
                "string" == typeof i && (t = o.replace(/^\/|\/$/g, ""), a = (r = i.replace(/^\//, "")) ? t + "/" + r : t), "string" == typeof a && (-1 !== n.indexOf("?") && (a = a.replace("?", "&")), a = a.replace(/^\//, ""), c = n + a), delete(s = l({
                    Accept: "application/json, */*;q=0.1"
                }, s))["X-WP-Nonce"], p && (f = JSON.stringify(p), s["Content-Type"] = "application/json");
                var v = {
                        code: "fetch_error",
                        message: "You are probably offline."
                    },
                    b = {
                        code: "invalid_json",
                        message: "The response is not a valid JSON response."
                    };
                return window.fetch(c || a || window.location.href, l(l({}, d), {}, {
                    headers: s,
                    body: f
                })).then((function(e) {
                    return Promise.resolve(e).then((function(e) {
                        if (e.status >= 200 && e.status < 300) return e;
                        throw e
                    })).then((function(e) {
                        if (204 === e.status) return null;
                        if (e && e.json) return e.json().catch((function() {
                            throw b
                        }));
                        throw b
                    }))
                }), (function() {
                    throw v
                }))
            }))(e)
        },
        d = [];

    function v(e) {
        var t = arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : {},
            n = new FormData(e);
        t.submitter && t.submitter.name && n.append(t.submitter.name, t.submitter.value);
        var r = {
                contactFormId: e.wpcf7.id,
                pluginVersion: e.wpcf7.pluginVersion,
                contactFormLocale: e.wpcf7.locale,
                unitTag: e.wpcf7.unitTag,
                containerPostId: e.wpcf7.containerPost,
                status: e.wpcf7.status,
                inputs: Array.from(n, (function(e) {
                    var t = e[0],
                        n = e[1];
                    return !t.match(/^_/) && {
                        name: t,
                        value: n
                    }
                })).filter((function(e) {
                    return !1 !== e
                })),
                formData: n
            },
            o = function(t) {
                var n = document.createElement("li");
                n.setAttribute("id", t.error_id), t.idref ? n.insertAdjacentHTML("beforeend", '<a href="#'.concat(t.idref, '">').concat(t.message, "</a>")) : n.insertAdjacentText("beforeend", t.message), e.wpcf7.parent.querySelector(".screen-reader-response ul").appendChild(n)
            },
            c = function(t) {
                var n = e.querySelector(t.into),
                    r = n.querySelector(".wpcf7-form-control");
                r.classList.add("wpcf7-not-valid"), r.setAttribute("aria-invalid", "true"), r.setAttribute("aria-describedby", t.error_id);
                var o = document.createElement("span");
                o.setAttribute("class", "wpcf7-not-valid-tip"), o.setAttribute("aria-hidden", "true"), o.insertAdjacentText("beforeend", t.message), n.appendChild(o), r.closest(".use-floating-validation-tip") && (r.addEventListener("focus", (function(e) {
                    o.setAttribute("style", "display: none")
                })), o.addEventListener("mouseover", (function(e) {
                    o.setAttribute("style", "display: none")
                })))
            };
        p({
            endpoint: "contact-forms/".concat(e.wpcf7.id, "/feedback"),
            method: "POST",
            body: n,
            wpcf7: {
                endpoint: "feedback",
                form: e,
                detail: r
            }
        }).then((function(t) {
            var n = a(e, t.status);
            return r.status = t.status, r.apiResponse = t, ["invalid", "unaccepted", "spam", "aborted"].includes(n) ? i(e, n, r) : ["sent", "failed"].includes(n) && i(e, "mail".concat(n), r), i(e, "submit", r), t
        })).then((function(t) {
            t.posted_data_hash && (e.querySelector('input[name="_wpcf7_posted_data_hash"]').value = t.posted_data_hash), "mail_sent" === t.status && (e.reset(), e.wpcf7.resetOnMailSent = !0), t.invalid_fields && (t.invalid_fields.forEach(o), t.invalid_fields.forEach(c)), e.wpcf7.parent.querySelector('.screen-reader-response [role="status"]').insertAdjacentText("beforeend", t.message), e.querySelectorAll(".wpcf7-response-output").forEach((function(e) {
                e.innerText = t.message
            }))
        })).catch((function(e) {
            return console.error(e)
        }))
    }
    p.use = function(e) {
        d.unshift(e)
    }, p.use((function(e, t) {
        if (e.wpcf7 && "feedback" === e.wpcf7.endpoint) {
            var n = e.wpcf7,
                r = n.form,
                o = n.detail;
            b(r), i(r, "beforesubmit", o), a(r, "submitting")
        }
        return t(e)
    }));
    var b = function(e) {
        e.wpcf7.parent.querySelector('.screen-reader-response [role="status"]').innerText = "", e.wpcf7.parent.querySelector(".screen-reader-response ul").innerText = "", e.querySelectorAll(".wpcf7-not-valid-tip").forEach((function(e) {
            e.remove()
        })), e.querySelectorAll(".wpcf7-form-control").forEach((function(e) {
            e.setAttribute("aria-invalid", "false"), e.removeAttribute("aria-describedby"), e.classList.remove("wpcf7-not-valid")
        })), e.querySelectorAll(".wpcf7-response-output").forEach((function(e) {
            e.innerText = ""
        }))
    };

    function m(e) {
        var t = new FormData(e),
            n = {
                contactFormId: e.wpcf7.id,
                pluginVersion: e.wpcf7.pluginVersion,
                contactFormLocale: e.wpcf7.locale,
                unitTag: e.wpcf7.unitTag,
                containerPostId: e.wpcf7.containerPost,
                status: e.wpcf7.status,
                inputs: Array.from(t, (function(e) {
                    var t = e[0],
                        n = e[1];
                    return !t.match(/^_/) && {
                        name: t,
                        value: n
                    }
                })).filter((function(e) {
                    return !1 !== e
                })),
                formData: t
            };
        p({
            endpoint: "contact-forms/".concat(e.wpcf7.id, "/refill"),
            method: "GET",
            wpcf7: {
                endpoint: "refill",
                form: e,
                detail: n
            }
        }).then((function(t) {
            e.wpcf7.resetOnMailSent ? (delete e.wpcf7.resetOnMailSent, a(e, "mail_sent")) : a(e, "init"), n.apiResponse = t, i(e, "reset", n)
        })).catch((function(e) {
            return console.error(e)
        }))
    }
    p.use((function(e, t) {
        if (e.wpcf7 && "refill" === e.wpcf7.endpoint) {
            var n = e.wpcf7,
                r = n.form;
            n.detail, b(r), a(r, "resetting")
        }
        return t(e)
    }));
    var w = function(e, t) {
            var n = function(n) {
                var r = t[n];
                e.querySelectorAll('input[name="'.concat(n, '"]')).forEach((function(e) {
                    e.value = ""
                })), e.querySelectorAll("img.wpcf7-captcha-".concat(n)).forEach((function(e) {
                    e.setAttribute("src", r)
                }));
                var o = /([0-9]+)\.(png|gif|jpeg)$/.exec(r);
                o && e.querySelectorAll('input[name="_wpcf7_captcha_challenge_'.concat(n, '"]')).forEach((function(e) {
                    e.value = o[1]
                }))
            };
            for (var r in t) n(r)
        },
        y = function(e, t) {
            var n = function(n) {
                var r = t[n][0],
                    o = t[n][1];
                e.querySelectorAll(".wpcf7-form-control-wrap.".concat(n)).forEach((function(e) {
                    e.querySelector('input[name="'.concat(n, '"]')).value = "", e.querySelector(".wpcf7-quiz-label").textContent = r, e.querySelector('input[name="_wpcf7_quiz_answer_'.concat(n, '"]')).value = o
                }))
            };
            for (var r in t) n(r)
        };

    function h(e, t) {
        var n = Object.keys(e);
        if (Object.getOwnPropertySymbols) {
            var r = Object.getOwnPropertySymbols(e);
            t && (r = r.filter((function(t) {
                return Object.getOwnPropertyDescriptor(e, t).enumerable
            }))), n.push.apply(n, r)
        }
        return n
    }

    function g(e) {
        var t = new FormData(e);
        e.wpcf7 = {
                id: c(t.get("_wpcf7")),
                status: e.getAttribute("data-status"),
                pluginVersion: t.get("_wpcf7_version"),
                locale: t.get("_wpcf7_locale"),
                unitTag: t.get("_wpcf7_unit_tag"),
                containerPost: c(t.get("_wpcf7_container_post")),
                parent: e.closest(".wpcf7")
            }, e.querySelectorAll(".wpcf7-submit").forEach((function(e) {
                e.insertAdjacentHTML("afterend", '<span class="ajax-loader"></span>')
            })),
            function(e) {
                e.querySelectorAll(".wpcf7-exclusive-checkbox").forEach((function(t) {
                    t.addEventListener("change", (function(t) {
                        var n = t.target.getAttribute("name");
                        e.querySelectorAll('input[type="checkbox"][name="'.concat(n, '"]')).forEach((function(e) {
                            e !== t.target && (e.checked = !1)
                        }))
                    }))
                }))
            }(e),
            function(e) {
                e.querySelectorAll(".has-free-text").forEach((function(t) {
                    var n = t.querySelector("input.wpcf7-free-text"),
                        r = t.querySelector('input[type="checkbox"], input[type="radio"]');
                    n.disabled = !r.checked, e.addEventListener("change", (function(e) {
                        n.disabled = !r.checked, e.target === r && r.checked && n.focus()
                    }))
                }))
            }(e),
            function(e) {
                e.querySelectorAll(".wpcf7-validates-as-url").forEach((function(e) {
                    e.addEventListener("change", (function(t) {
                        var n = e.value.trim();
                        n && !n.match(/^[a-z][a-z0-9.+-]*:/i) && -1 !== n.indexOf(".") && (n = "http://" + (n = n.replace(/^\/+/, ""))), e.value = n
                    }))
                }))
            }(e),
            function(e) {
                if (e.querySelector(".wpcf7-acceptance") && !e.classList.contains("wpcf7-acceptance-as-validation")) {
                    var t = function() {
                        var t = !0;
                        e.querySelectorAll(".wpcf7-acceptance").forEach((function(e) {
                            if (t && !e.classList.contains("optional")) {
                                var n = e.querySelector('input[type="checkbox"]');
                                (e.classList.contains("invert") && n.checked || !e.classList.contains("invert") && !n.checked) && (t = !1)
                            }
                        })), e.querySelectorAll(".wpcf7-submit").forEach((function(e) {
                            e.disabled = !t
                        }))
                    };
                    t(), e.addEventListener("change", (function(e) {
                        t()
                    })), e.addEventListener("wpcf7reset", (function(e) {
                        t()
                    }))
                }
            }(e),
            function(e) {
                var t = function(e, t) {
                        var n = c(e.getAttribute("data-starting-value")),
                            r = c(e.getAttribute("data-maximum-value")),
                            o = c(e.getAttribute("data-minimum-value")),
                            a = e.classList.contains("down") ? n - t.value.length : t.value.length;
                        e.setAttribute("data-current-value", a), e.innerText = a, r && r < t.value.length ? e.classList.add("too-long") : e.classList.remove("too-long"), o && t.value.length < o ? e.classList.add("too-short") : e.classList.remove("too-short")
                    },
                    n = function(n) {
                        n = function(e) {
                            for (var t = 1; t < arguments.length; t++) {
                                var n = null != arguments[t] ? arguments[t] : {};
                                t % 2 ? h(Object(n), !0).forEach((function(t) {
                                    o()(e, t, n[t])
                                })) : Object.getOwnPropertyDescriptors ? Object.defineProperties(e, Object.getOwnPropertyDescriptors(n)) : h(Object(n)).forEach((function(t) {
                                    Object.defineProperty(e, t, Object.getOwnPropertyDescriptor(n, t))
                                }))
                            }
                            return e
                        }({
                            init: !1
                        }, n), e.querySelectorAll(".wpcf7-character-count").forEach((function(r) {
                            var o = r.getAttribute("data-target-name"),
                                c = e.querySelector('[name="'.concat(o, '"]'));
                            c && (c.value = c.defaultValue, t(r, c), n.init && c.addEventListener("keyup", (function(e) {
                                t(r, c)
                            })))
                        }))
                    };
                n({
                    init: !0
                }), e.addEventListener("wpcf7reset", (function(e) {
                    n()
                }))
            }(e), window.addEventListener("load", (function(t) {
                wpcf7.cached && e.reset()
            })), e.addEventListener("reset", (function(t) {
                wpcf7.reset(e)
            })), e.addEventListener("submit", (function(t) {
                var n = t.submitter;
                wpcf7.submit(e, {
                    submitter: n
                }), t.preventDefault()
            })), e.addEventListener("wpcf7submit", (function(t) {
                t.detail.apiResponse.captcha && w(e, t.detail.apiResponse.captcha), t.detail.apiResponse.quiz && y(e, t.detail.apiResponse.quiz)
            })), e.addEventListener("wpcf7reset", (function(t) {
                t.detail.apiResponse.captcha && w(e, t.detail.apiResponse.captcha), t.detail.apiResponse.quiz && y(e, t.detail.apiResponse.quiz)
            }))
    }

    function O(e, t) {
        var n = Object.keys(e);
        if (Object.getOwnPropertySymbols) {
            var r = Object.getOwnPropertySymbols(e);
            t && (r = r.filter((function(t) {
                return Object.getOwnPropertyDescriptor(e, t).enumerable
            }))), n.push.apply(n, r)
        }
        return n
    }
    document.addEventListener("DOMContentLoaded", (function(e) {
        var t;
        if ("undefined" != typeof wpcf7)
            if (void 0 !== wpcf7.api) {
                var n = document.querySelectorAll(".wpcf7 > form");
                "function" == typeof n.forEach ? (wpcf7 = function(e) {
                    for (var t = 1; t < arguments.length; t++) {
                        var n = null != arguments[t] ? arguments[t] : {};
                        t % 2 ? O(Object(n), !0).forEach((function(t) {
                            o()(e, t, n[t])
                        })) : Object.getOwnPropertyDescriptors ? Object.defineProperties(e, Object.getOwnPropertyDescriptors(n)) : O(Object(n)).forEach((function(t) {
                            Object.defineProperty(e, t, Object.getOwnPropertyDescriptor(n, t))
                        }))
                    }
                    return e
                }({
                    init: g,
                    submit: v,
                    reset: m
                }, null !== (t = wpcf7) && void 0 !== t ? t : {}), n.forEach((function(e) {
                    return wpcf7.init(e)
                }))) : console.error("Your browser doesn't support NodeList.forEach().")
            } else console.error("wpcf7.api is not defined.");
        else console.error("wpcf7 is not defined.")
    }))
}]);;
! function(o) {
    o.imageMapProShapeDefaults = {
        id: "spot-0",
        title: "",
        type: "spot",
        x: -1,
        y: -1,
        width: 44,
        height: 44,
        x_image_background: -1,
        y_image_background: -1,
        width_image_background: 44,
        height_image_background: 44,
        connected_to: "",
        use_connected_shape_tooltip: 0,
        layerID: 0,
        static: 0,
        text: {
            text: "Text",
            font_family: "sans-serif",
            font_size: 16,
            font_weight: 400,
            text_color: "#000000",
            text_opacity: 1
        },
        actions: {
            click: "no-action",
            link: "#",
            open_link_in_new_window: 1,
            script: ""
        },
        default_style: {
            opacity: 1,
            border_radius: 50,
            background_type: "color",
            background_image_url: "",
            background_image_opacity: 1,
            background_image_scale: 1,
            background_image_offset_x: 0,
            background_image_offset_y: 0,
            background_color: "#000000",
            background_opacity: .4,
            border_width: 0,
            border_style: "solid",
            border_color: "#ffffff",
            border_opacity: 1,
            stroke_color: "#ffffff",
            stroke_opacity: .75,
            stroke_width: 0,
            stroke_dasharray: "0",
            stroke_linecap: "round",
            use_icon: 1,
            icon_type: "library",
            icon_svg_path: "M409.81,160.113C409.79,71.684,338.136,0,249.725,0C161.276,0,89.583,71.684,89.583,160.113     c0,76.325,119.274,280.238,151.955,334.638c1.72,2.882,4.826,4.641,8.178,4.641c3.351,0,6.468-1.759,8.168-4.631     C290.545,440.361,409.81,236.438,409.81,160.113z M249.716,283.999c-68.303,0-123.915-55.573-123.915-123.895     c0-68.313,55.592-123.895,123.915-123.895s123.876,55.582,123.876,123.895S318.029,283.999,249.716,283.999z",
            icon_svg_viewbox: "0 0 499.392 499.392",
            icon_fontawesome_id: "map-marker",
            icon_fill: "#000000",
            icon_url: "",
            icon_is_pin: 1,
            icon_shadow: 0
        },
        mouseover_style: {
            opacity: 1,
            border_radius: 50,
            background_image_url: "",
            background_image_opacity: 1,
            background_image_scale: 1,
            background_image_offset_x: 0,
            background_image_offset_y: 0,
            background_color: "#ffffff",
            background_opacity: .4,
            border_width: 0,
            border_style: "solid",
            border_color: "#ffffff",
            border_opacity: 1,
            stroke_color: "#ffffff",
            stroke_opacity: .75,
            stroke_width: 0,
            stroke_dasharray: "0",
            stroke_linecap: "round",
            icon_fill: "#000000"
        },
        tooltip: {
            enable_tooltip: 1
        },
        tooltip_style: {
            buffer: 40,
            border_radius: 10,
            padding: 15,
            background_color: "#222222",
            background_opacity: 1,
            position: "top",
            width: 225,
            auto_width: 1,
            offset_x: 0,
            offset_y: 0
        },
        tooltip_content: {
            squares_settings: {
                containers: [{
                    id: "sq-container-403761",
                    settings: {
                        elements: [{
                            settings: {
                                name: "Heading",
                                iconClass: "fa fa-header"
                            },
                            options: {
                                heading: {
                                    text: "My Shape"
                                }
                            }
                        }]
                    }
                }]
            }
        },
        points: [],
        vs: [],
        svgPathCommands: [],
        d: "",
        dEditor: ""
    }, o.imageMapProEditorDefaults = {
        id: 0,
        editor: {
            previewMode: 0,
            selected_shape: -1,
            transform_tooltip_mode: 0,
            tool: "spot",
            zoom: 1,
            currentLayer: 0,
            state: {
                dragging: !1
            },
            shapeCounter: {
                spots: 0,
                rects: 0,
                ovals: 0,
                polys: 0,
                texts: 0,
                paths: 0
            }
        },
        runtime: {
            is_fullscreen: 0,
            layerID: 0,
            menu_search_string: "",
            menu_scroll: 0
        },
        general: {
            name: "",
            shortcode: "",
            width: 800,
            height: 450,
            naturalWidth: 800,
            naturalHeight: 450,
            responsive: 1,
            preserve_quality: 1,
            center_image_map: 0
        },
        image: {
            url: ""
        },
        fullscreen: {
            enable_fullscreen_mode: 0,
            start_in_fullscreen_mode: 0,
            fullscreen_background: "#000000",
            fullscreen_button_position: 1,
            fullscreen_button_type: "icon_and_text",
            fullscreen_button_color: "#ffffff",
            fullscreen_button_text_color: "#222222"
        },
        shapes: {
            pageload_animation: "none",
            glowing_shapes: 0,
            glowing_shapes_color: "#ffffff",
            glow_opacity: .5,
            stop_glowing_on_mouseover: 1
        },
        tooltips: {
            enable_tooltips: 1,
            show_tooltips: "mouseover",
            show_title_on_mouseover: 0,
            sticky_tooltips: 0,
            constrain_tooltips: 1,
            tooltip_animation: "none",
            fullscreen_tooltips: "mobile-only"
        },
        zooming: {
            enable_zooming: 0,
            max_zoom: 16,
            limit_max_zoom_to_image_size: 0,
            enable_zoom_buttons: 1,
            enable_navigator: 1,
            zoom_button_text_color: "#000000",
            zoom_button_background_color: "#ffffff",
            hold_ctrl_to_zoom: 1
        },
        layers: {
            enable_layers: 0,
            layers_list: []
        },
        shapes_menu: {
            enable_shapes_menu: 0,
            detached_menu: 0,
            menu_position: "left",
            enable_search: 1,
            group_by_floor: 0,
            hide_children_of_connected_shapes: 1
        },
        custom_code: {
            custom_css: "",
            custom_js: ""
        },
        spots: []
    }
}(jQuery, (window, document));
! function(r, e) {
    var a = new Array;

    function t(t) {
        this.settings = t, this.containers = [], this.init()
    }

    function s(t) {
        this.settings = t, this.elements = [], this.init()
    }
    r.squaresRendererRegisterElement = function(t) {
        a[t.name] = t
    }, r.squaresRendererRenderObject = function(e) {
        if ("object" != typeof e) try {
            e = JSON.parse(e)
        } catch (t) {
            return console.log(t), console.log("Squares renderer failed to parse JSON: "), console.log(e), ""
        }
        return new t(e).render()
    }, t.prototype.init = function() {
        for (var t = 0; t < this.settings.containers.length; t++) this.containers[t] = new s(this.settings.containers[t])
    }, t.prototype.render = function() {
        for (var t = "", e = 0; e < this.containers.length; e++) t += this.containers[e].render();
        return t
    }, s.prototype.init = function() {
        if (this.settings.settings)
            for (var t = 0; t < this.settings.settings.elements.length; t++) this.elements[t] = new o(this.settings.settings.elements[t])
    }, s.prototype.render = function() {
        var t = "";
        if (t += '<div class="squares-container">', this.settings.settings)
            for (var e = 0; e < this.settings.settings.elements.length; e++) t += this.elements[e].render();
        return t += '\t<div class="squares-clear"></div>', t += "</div>"
    };
    var i = {
        layout: {
            box_model: {
                margin: {
                    top: 0,
                    bottom: 0,
                    left: 0,
                    right: 0
                },
                padding: {
                    top: 10,
                    bottom: 10,
                    left: 10,
                    right: 10
                }
            },
            use_grid: 1,
            column_span: {
                xs: {
                    use: 0,
                    class: "sq-col-xs-12",
                    visible: 0
                },
                sm: {
                    use: 0,
                    class: "sq-col-sm-12",
                    visible: 0
                },
                md: {
                    use: 0,
                    class: "sq-col-md-12",
                    visible: 1
                },
                lg: {
                    use: 1,
                    class: "sq-col-lg-12",
                    visible: 1
                }
            },
            width: "100",
            auto_width: 1,
            height: "100",
            auto_height: 1
        },
        style: {
            background_color: "#ffffff",
            background_opacity: "0",
            opacity: "1",
            box_shadow: "none",
            border_width: "0",
            border_style: "none",
            border_color: "#000000",
            border_opacity: "1",
            border_radius: "0"
        },
        font: {
            font_family: "sans-serif",
            font_size: "14",
            font_weight: "normal",
            font_style: "normal",
            line_height: "22",
            text_color: "#ffffff",
            text_align: "left",
            text_decoration: "none",
            text_transform: "none",
            text_shadow: ""
        },
        general: {
            id: "",
            classes: "",
            css: ""
        }
    };

    function o(t) {
        this.settings = t.settings, this.defaults = r.extend(!0, {}, i), this.elementSpecificDefaults = {}, this.options = e, this.init(t)
    }

    function n(t) {
        var e = /^#?([a-f\d]{2})([a-f\d]{2})([a-f\d]{2})$/i.exec(t);
        return e ? {
            r: parseInt(e[1], 16),
            g: parseInt(e[2], 16),
            b: parseInt(e[3], 16)
        } : {
            r: 0,
            g: 0,
            b: 0
        }
    }
    o.prototype.init = function(t) {
        if (this.settings) {
            var e = r.extend(!0, {}, a[this.settings.name].controls);
            for (var s in e) {
                var i = e[s];
                for (var o in this.elementSpecificDefaults[s] = {}, i) {
                    var n = i[o];
                    this.elementSpecificDefaults[s][o] = n.default
                }
            }
            this.defaults = r.extend(!0, {}, this.defaults, this.elementSpecificDefaults), this.options = r.extend(!0, {}, this.defaults, t.options)
        }
    }, o.prototype.render = function() {
        if (this.settings) {
            var t = "";
            return t += '<div class="squares-element ' + this.generateLayoutClass(this.options.layout) + '" style="' + this.generateCSS(this.options) + '">', t += a[this.settings.name].render(this.options), t += "</div>"
        }
    }, o.prototype.generateLayoutClass = function() {
        if (this.settings) {
            var t = this.options.layout;
            if (1 != parseInt(t.use_grid, 10)) return "";
            var e = "",
                s = t.column_span;
            return 1 == parseInt(s.xs.use, 10) && (e += s.xs.class + " ", 0 == parseInt(s.xs.visible, 10) && (e += "sq-hidden-sm ")), 1 == parseInt(s.sm.use, 10) && (e += s.sm.class + " ", 0 == parseInt(s.sm.visible, 10) && (e += "sq-hidden-md ")), 1 == parseInt(s.md.use, 10) && (e += s.md.class + " ", 0 == parseInt(s.md.visible, 10) && (e += "sq-hidden-lg ")), 1 == parseInt(s.lg.use, 10) && (e += s.lg.class + " ", 0 == parseInt(s.lg.visible, 10) && (e += "sq-hidden-xl ")), e
        }
    }, o.prototype.generateCSS = function() {
        if (this.settings) {
            var t = "";
            t += "margin-top: " + (s = this.options.layout).box_model.margin.top + "px; ", t += "margin-bottom: " + s.box_model.margin.bottom + "px; ", t += "margin-left: " + s.box_model.margin.left + "px; ", t += "margin-right: " + s.box_model.margin.right + "px; ", t += "padding-top: " + s.box_model.padding.top + "px; ", t += "padding-bottom: " + s.box_model.padding.bottom + "px; ", t += "padding-left: " + s.box_model.padding.left + "px; ", t += "padding-right: " + s.box_model.padding.right + "px; ", 1 == parseInt(s.use_grid, 10) || (1 == parseInt(s.auto_width, 10) ? t += "width: auto; " : "" === s.width || isNaN(s.width) || (t += "width: " + s.width + "px; "), 1 == parseInt(s.auto_height, 10) ? t += "height: auto; " : "" === s.height || isNaN(s.height) || (t += "height: " + s.height + "px; "));
            var e, s = this.options.font;
            if (this.options.fontStyles = "", s && (t += "font-family: " + s.font_family + "; ", this.options.fontStyles += "font-family: " + s.font_family + "; ", t += "font-size: " + s.font_size + "px; ", this.options.fontStyles += "font-size: " + s.font_size + "px; ", t += "font-weight: " + s.font_weight + "; ", this.options.fontStyles += "font-weight: " + s.font_weight + "; ", t += "font-style: " + s.font_style + "; ", this.options.fontStyles += "font-style: " + s.font_style + "; ", t += "line-height: " + s.line_height + "px; ", this.options.fontStyles += "line-height: " + s.line_height + "px; ", t += "color: " + s.text_color + "; ", this.options.fontStyles += "color: " + s.text_color + "; ", t += "text-align: " + s.text_align + "; ", this.options.fontStyles += "text-align: " + s.text_align + "; ", t += "text-decoration: " + s.text_decoration + "; ", this.options.fontStyles += "text-decoration: " + s.text_decoration + "; ", t += "text-transform: " + s.text_transform + "; ", this.options.fontStyles += "text-transform: " + s.text_transform + "; ", t += "text-shadow: " + s.text_shadow + "; ", this.options.fontStyles += "text-shadow: " + s.text_shadow + "; "), s = this.options.style) t += "background-color: rgba(" + (e = n(s.background_color)).r + ", " + e.g + ", " + e.b + ", " + s.background_opacity + "); ", t += "opacity: " + s.opacity + "; ", t += "box-shadow: " + s.box_shadow + "; ", t += "border-width: " + s.border_width + "px; ", t += "border-style: " + s.border_style + "; ", t += "border-color: rgba(" + (e = n(s.border_color)).r + ", " + e.g + ", " + e.b + ", " + s.border_opacity + "); ", t += "border-radius: " + s.border_radius + "px; ";
            return t
        }
    }
}(jQuery, (window, void document));
! function(s, o) {
    var e = {
        name: "Paragraph",
        iconClass: "fa fa-paragraph",
        controls: {
            text: {
                text: {
                    name: "Text",
                    type: "textarea",
                    default: "Lorem ipsum dolor sit amet, consectetuer adipiscing elit."
                }
            }
        },
        controlGroupIcons: {
            text: "fa fa-ellipsis-h"
        },
        content: function() {
            var e = this.controls.text.text.getVal();
            return e = (e = e.replace(/\\(.)/gm, "$1")).replace(/\n/gm, "<br>"), '<p id="' + this.controls.general.id.getVal() + '" style="' + this.controls.general.css.getVal() + this.fontStyles + ' margin: 0; padding: 0;" class="' + this.controls.general.classes.getVal() + '">' + e + "</p>"
        },
        render: function(e) {
            var t = e.text.text;
            return t = (t = t.replace(/\\(.)/gm, "$1")).replace(/\n/gm, "<br>"), '<p id="' + e.general.id + '" style="' + e.general.css + e.fontStyles + ' margin: 0; padding: 0;" class="' + e.general.classes + '">' + t + "</p>"
        }
    };
    s.squaresRegisterElement && s.squaresRegisterElement(e), s.squaresRendererRegisterElement(e);
    var t = {
        name: "Heading",
        iconClass: "fa fa-header",
        controls: {
            heading: {
                text: {
                    name: "Text",
                    type: "text",
                    default: "Lorem Ipsum"
                },
                heading: {
                    name: "Heading",
                    type: "select",
                    options: ["h1", "h2", "h3"],
                    default: "h3"
                }
            }
        },
        controlGroupIcons: {
            heading: "fa fa-header"
        },
        content: function() {
            return "<" + this.controls.heading.heading.getVal() + ' id="' + this.controls.general.id.getVal() + '" style="' + this.controls.general.css.getVal() + this.fontStyles + ' margin: 0; padding: 0;" class="' + this.controls.general.classes.getVal() + '">' + this.controls.heading.text.getVal() + "</" + this.controls.heading.heading.getVal() + ">"
        },
        render: function(e) {
            return "<" + e.heading.heading + ' id="' + e.general.id + '" style="' + e.general.css + e.fontStyles + ' margin: 0; padding: 0;" class="' + e.general.classes + '">' + e.heading.text + "</" + e.heading.heading + ">"
        }
    };
    s.squaresRegisterElement && s.squaresRegisterElement(t), s.squaresRendererRegisterElement(t);
    var a = {
        name: "Image",
        iconClass: "fa fa-camera",
        controls: {
            image: {
                url: {
                    name: "Image URL",
                    type: "text",
                    default: "https://webcraftplugins.com/uploads/placeholder_image.png"
                },
                image_is_a_link: {
                    name: "Image is a Link",
                    type: "switch",
                    default: 0
                },
                link_to: {
                    name: "Link to",
                    type: "text",
                    default: "#"
                }
            }
        },
        controlGroupIcons: {
            image: "fa fa-camera"
        },
        useFontControls: !1,
        content: function() {
            var e = "";
            1 == parseInt(this.controls.image.image_is_a_link.getVal(), 10) && (e += '<a href="' + this.controls.image.link_to.getVal() + '">'), e += '<img src="' + this.controls.image.url.getVal() + '" id="' + this.controls.general.id.getVal() + '" style="' + this.controls.general.css.getVal() + '" class="' + this.controls.general.classes.getVal() + '">', 1 == parseInt(this.controls.image.image_is_a_link.getVal(), 10) && (e += "</a>");
            var t = new Image;

            function a() {}
            return t.src = this.controls.image.url.getVal(), t.complete || t.addEventListener("load", a), e
        },
        render: function(e) {
            var t = "";
            1 == parseInt(e.image.image_is_a_link, 10) && (t += '<a href="' + e.image.link_to + '">'), t += '<img src="' + e.image.url + '" id="' + e.general.id + '" style="' + e.general.css + '" class="' + e.general.classes + '">', 1 == parseInt(e.image.image_is_a_link, 10) && (t += "</a>");
            var a = new Image;

            function l() {
                s(o).trigger("squares_image_loaded")
            }
            return a.src = e.image.url, a.complete ? l() : a.addEventListener("load", l), t
        }
    };
    s.squaresRegisterElement && s.squaresRegisterElement(a), s.squaresRendererRegisterElement(a);
    var l = {
        name: "Video",
        iconClass: "fa fa-video-camera",
        controls: {
            video: {
                mp4_url: {
                    name: "MP4 URL",
                    type: "text",
                    default: "http://webcraftplugins.com/uploads/example_video.mp4"
                },
                webm_url: {
                    name: "WEBM URL",
                    type: "text",
                    default: "http://webcraftplugins.com/uploads/example_video.webm"
                },
                ogv_url: {
                    name: "OGV URL",
                    type: "text",
                    default: "http://webcraftplugins.com/uploads/example_video.ogv"
                },
                video_is_a_link: {
                    name: "Video is a Link",
                    type: "switch",
                    default: 0
                },
                link_to: {
                    name: "Link to",
                    type: "text",
                    default: "#"
                },
                autoplay: {
                    name: "Autoplay",
                    type: "switch",
                    default: 0
                },
                loop: {
                    name: "Loop",
                    type: "switch",
                    default: 0
                },
                controls: {
                    name: "Controls",
                    type: "switch",
                    default: 0
                }
            }
        },
        useFontControls: !1,
        controlGroupIcons: {
            video: "fa fa-video-camera"
        },
        content: function() {
            var e = "";
            1 == parseInt(this.controls.video.video_is_a_link.getVal(), 10) && (e += '<a href="' + this.controls.video.link_to.getVal() + '">');
            var t = "";
            return 1 == parseInt(this.controls.video.autoplay.getVal(), 10) && (t += " autoplay "), 1 == parseInt(this.controls.video.loop.getVal(), 10) && (t += " loop "), 1 == parseInt(this.controls.video.controls.getVal(), 10) && (t += " controls "), e += "<video " + t + ' id="' + this.controls.general.id.getVal() + '" style="' + this.controls.general.css.getVal() + '" class="' + this.controls.general.classes.getVal() + '"><source src="' + this.controls.video.mp4_url.getVal() + '" type="video/mp4"><source src="' + this.controls.video.webm_url.getVal() + '" type="video/webm"><source src="' + this.controls.video.ogv_url.getVal() + '" type="video/ogv"></video>', 1 == parseInt(this.controls.video.video_is_a_link.getVal(), 10) && (e += "</a>"), e
        },
        render: function(e) {
            var t = "";
            1 == parseInt(e.video.video_is_a_link, 10) && (t += '<a href="' + e.video.link_to + '">');
            var a = "";
            return 1 == parseInt(e.video.autoplay, 10) && (a += " autoplay "), 1 == parseInt(e.video.loop, 10) && (a += " loop "), 1 == parseInt(e.video.controls, 10) && (a += " controls "), t += "<video " + a + ' id="' + e.general.id + '" style="' + e.general.css + '" class="' + e.general.classes + '"><source src="' + e.video.mp4_url + '" type="video/mp4"><source src="' + e.video.webm_url + '" type="video/webm"><source src="' + e.video.ogv_url + '" type="video/ogv"></video>', 1 == parseInt(e.video.video_is_a_link, 10) && (t += "</a>"), t
        }
    };
    s.squaresRegisterElement && s.squaresRegisterElement(l), s.squaresRendererRegisterElement(l);
    var n = {
        name: "YouTube",
        iconClass: "fa fa-youtube",
        useStyleControls: !1,
        useFontControls: !1,
        controls: {
            youtube: {
                embed_code: {
                    name: "Embed Code",
                    type: "textarea",
                    default: '<iframe width="560" height="315" src="https://www.youtube.com/embed/6NC_ODHu5jg" frameborder="0" allowfullscreen></iframe>'
                },
                allow_fullscreen: {
                    name: "Allow Fullscreen",
                    type: "switch",
                    default: 1
                },
                iframe_width: {
                    name: "iframe Width",
                    type: "int",
                    default: 320
                },
                iframe_auto_width: {
                    name: "iframe Auto Width",
                    type: "switch",
                    default: 1
                },
                iframe_height: {
                    name: "iframe Height",
                    type: "int",
                    default: 320
                }
            }
        },
        controlGroupIcons: {
            youtube: "fa fa-youtube"
        },
        content: function() {
            var e = this.controls.youtube.embed_code.getVal(),
                t = "";
            return t += '<div id="' + this.controls.general.id.getVal() + '" style="' + this.controls.general.css.getVal() + '" class="' + this.controls.general.classes.getVal() + '">', e = e.replace("allowfullscreen", ""), 1 == parseInt(this.controls.youtube.allow_fullscreen.getVal(), 10) && -1 == e.indexOf("allowfullscreen") && (e = e.replace("></iframe>", " allowfullscreen></iframe>")), t += e = (e = 1 == parseInt(this.controls.youtube.iframe_auto_width.getVal(), 10) ? e.replace(/width="\d+"/g, 'width="100%"') : e.replace(/width="\d+"/g, 'width="' + this.controls.youtube.iframe_width.getVal() + 'px"')).replace(/height="\d+"/g, 'height="' + this.controls.youtube.iframe_height.getVal() + 'px"'), t += "</div>"
        },
        render: function(e) {
            var t = e.youtube.embed_code,
                a = "";
            return a += '<div id="' + e.general.id + '" style="' + e.general.css + '" class="' + e.general.classes + '">', t = t.replace("allowfullscreen", ""), 1 == parseInt(e.youtube.allow_fullscreen, 10) && -1 == t.indexOf("allowfullscreen") && (t = t.replace("></iframe>", " allowfullscreen></iframe>")), a += t = (t = 1 == parseInt(e.youtube.iframe_auto_width, 10) ? t.replace(/width="\d+"/g, 'width="100%"') : t.replace(/width="\d+"/g, 'width="' + e.youtube.iframe_width + 'px"')).replace(/height="\d+"/g, 'height="' + e.youtube.iframe_height + 'px"'), a += "</div>"
        }
    };
    s.squaresRegisterElement && s.squaresRegisterElement(n), s.squaresRendererRegisterElement(n);
    var r = {
        name: "Button",
        iconClass: "fa fa-link",
        controls: {
            button: {
                text: {
                    name: "Text",
                    type: "text",
                    default: "Button"
                },
                link_to: {
                    name: "Link to",
                    type: "text",
                    default: "#"
                },
                new_tab: {
                    name: "Open in New Tab",
                    type: "switch",
                    default: 0
                },
                display: {
                    name: "Display",
                    type: "button group",
                    options: ["inline-block", "block"],
                    default: "inline-block"
                },
                height: {
                    name: "Height",
                    type: "int",
                    default: 44
                },
                bg_color: {
                    name: "Background Color",
                    type: "color",
                    default: "#2196f3"
                },
                text_color: {
                    name: "Text Color",
                    type: "color",
                    default: "#ffffff"
                },
                border_radius: {
                    name: "Border Radius",
                    type: "int",
                    default: 10
                },
                padding: {
                    name: "Padding Left/Right",
                    type: "int",
                    default: 20
                }
            }
        },
        controlGroupIcons: {
            button: "fa fa-link"
        },
        content: function() {
            var e = "";
            e += "display: " + this.controls.button.display.getVal() + "; ", e += "height: " + this.controls.button.height.getVal() + "px; ", e += "line-height: " + this.controls.button.height.getVal() + "px; ", e += "background-color: " + this.controls.button.bg_color.getVal() + "; ", e += "color: " + this.controls.button.text_color.getVal() + "; ", e += "border-radius: " + this.controls.button.border_radius.getVal() + "px; ", e += "padding-left: " + this.controls.button.padding.getVal() + "px; ", e += "padding-right: " + this.controls.button.padding.getVal() + "px; ";
            var t = "";
            return 1 == parseInt(this.controls.button.new_tab.getVal(), 10) && (t = 'target="_blank"'), '<div id="' + this.controls.general.id.getVal() + '" style="' + this.controls.general.css.getVal() + '" class="' + this.controls.general.classes.getVal() + '"><a href="' + this.controls.button.link_to.getVal() + '" style="' + e + '" ' + t + ' class="squares-button">' + this.controls.button.text.getVal() + "</a></div>"
        },
        render: function(e) {
            var t = "";
            t += "display: " + e.button.display + "; ", t += "height: " + e.button.height + "px; ", t += "line-height: " + e.button.height + "px; ", t += "background-color: " + e.button.bg_color + "; ", t += "color: " + e.button.text_color + "; ", t += "border-radius: " + e.button.border_radius + "px; ", t += "padding-left: " + e.button.padding + "px; ", t += "padding-right: " + e.button.padding + "px; ";
            var a = "";
            return 1 == parseInt(e.button.new_tab, 10) && (a = 'target="_blank"'), '<div id="' + e.general.id + '" style="' + e.general.css + '" class="' + e.general.classes + '"><a href="' + e.button.link_to + '" style="' + t + '" ' + a + ' class="squares-button">' + e.button.text + "</a></div>"
        }
    };
    s.squaresRegisterElement && s.squaresRegisterElement(r), s.squaresRendererRegisterElement(r)
}(jQuery, (window, document));
! function($, window, document, undefined) {
    "use strict";
    var fullscreenMap = undefined,
        fullscreenMapParent = undefined,
        touch = !1;
    $.imageMapProInitialized = function(t) {}, $.imageMapProEventHighlightedShape = function(t, i) {}, $.imageMapProEventUnhighlightedShape = function(t, i) {}, $.imageMapProEventClickedShape = function(t, i) {}, $.imageMapProEventOpenedTooltip = function(t, i) {}, $.imageMapProEventClosedTooltip = function(t, i) {}, $.imageMapProEventSwitchedFloor = function(t, i) {}, $.imageMapProHighlightShape = function(t, i) {
        var e = findImageMapWithName(t);
        if (e) {
            var s = findShapeWithTitle(e.settings.general.name, i);
            if (s) {
                var n = s.shape,
                    a = s.index;
                if (-1 === e.apiHighlightedShapes.indexOf(a) && e.apiHighlightedShapes.push(a), e.connectedShapes[n.id])
                    for (var o = 0; o < e.connectedShapes[n.id].length; o++) {
                        var h = e.connectedShapes[n.id][o].index; - 1 === e.apiHighlightedShapes.indexOf(h) && e.apiHighlightedShapes.push(h)
                    }
                APIFunctionQueueAddAction(function(t) {
                    e.highlightShape(a), t()
                })
            }
        }
    }, $.imageMapProUnhighlightShape = function(t, i) {
        var e = findImageMapWithName(t);
        if (e) {
            var s = findShapeWithTitle(e.settings.general.name, i);
            if (s) {
                var n = s.shape,
                    a = s.index;
                if (-1 != e.apiHighlightedShapes.indexOf(a)) {
                    var o = e.apiHighlightedShapes.indexOf(a);
                    e.apiHighlightedShapes.splice(o, 1)
                }
                if (e.connectedShapes[n.id])
                    for (var h = 0; h < e.connectedShapes[n.id].length; h++) {
                        var r = e.connectedShapes[n.id][h].index,
                            p = e.apiHighlightedShapes.indexOf(r);
                        e.apiHighlightedShapes.splice(p, 1), APIFunctionQueueAddAction(function(t) {
                            e.unhighlightShape(r), t()
                        })
                    }
                APIFunctionQueueAddAction(function(t) {
                    e.unhighlightShape(a), t()
                })
            }
        }
    }, $.imageMapProFocusShape = function(t, i) {
        var e = findImageMapWithName(t);
        if (e) {
            var s = findShapeWithTitle(e.settings.general.name, i);
            if (s) {
                var n = s.shape,
                    a = s.index;
                parseInt(n.layerID, 10) !== parseInt(e.settings.runtime.layerID, 10) && APIFunctionQueueAddAction(function(t) {
                    e.switchLayer(n.layerID, function() {
                        t()
                    })
                }), APIFunctionQueueAddAction(function(t) {
                    e.focusShape(a), t()
                }), APIFunctionQueueAddAction(function(t) {
                    e.highlightShape(a), t()
                })
            }
        }
    }, $.imageMapProOpenTooltip = function(t, i) {
        var e = findImageMapWithName(t);
        if (e) {
            var s = findShapeWithTitle(e.settings.general.name, i);
            if (s) {
                s.shape;
                var n = s.index;
                APIFunctionQueueAddAction(function(t) {
                    e.showTooltip(n), t()
                }), APIFunctionQueueAddAction(function(t) {
                    e.updateTooltipPosition(n), t()
                }), -1 === e.apiOpenedTooltips.indexOf(n) && e.apiOpenedTooltips.push(n)
            }
        }
    }, $.imageMapProHideTooltip = function(t, i) {
        var e = findImageMapWithName(t);
        if (e) {
            var s = findShapeWithTitle(e.settings.general.name, i);
            if (s) {
                s.shape;
                var n = s.index;
                if (-1 != e.apiOpenedTooltips.indexOf(n)) {
                    var a = e.apiOpenedTooltips.indexOf(n);
                    e.apiOpenedTooltips.splice(a, 1)
                }
                APIFunctionQueueAddAction(function(t) {
                    e.hideTooltip(n), t()
                })
            }
        }
    }, $.imageMapProReInitMap = function(t) {
        var i = findImageMapWithName(t);
        i && i.init()
    }, $.imageMapProIsMobile = function() {
        return isMobile()
    }, $.imageMapProGoToFloor = function(t, i) {
        var e = findImageMapWithName(t);
        if (e) {
            for (var s = 0, n = 0; n < e.settings.layers.layers_list.length; n++) e.settings.layers.layers_list[n].title === i && (s = e.settings.layers.layers_list[n].id);
            APIFunctionQueueAddAction(function(t) {
                e.switchLayer(s), t()
            })
        }
    }, $.imageMapProZoomIn = function(t) {
        var i = findImageMapWithName(t);
        i && i.zoomIn()
    }, $.imageMapProZoomOut = function(t) {
        var i = findImageMapWithName(t);
        i && i.zoomOut()
    };
    var APIFunctionQueue = [];

    function findShapeWithTitle(t, i) {
        var e = $('[data-shape-title="' + i + '"]').data("index"),
            s = instances[t].settings.spots[e];
        if (!s) {
            for (var n = 0; n < instances[t].settings.spots.length; n++) instances[t].settings.spots[n].title === i && (s = instances[t].settings.spots[n], e = n);
            if (!s) return console.log("Error: Could not find shape with name: " + i), undefined
        }
        return {
            shape: s,
            index: e
        }
    }

    function findImageMapWithName(t) {
        for (var i in instances)
            if (instances[i].settings.general.name === t) return instances[i];
        for (var i in console.log('Image map with name "' + t + '" not found, returning the first found image map instead.'), instances) return instances[i];
        return console.log("Error: No image maps found!"), undefined
    }

    function APIFunctionQueueAddAction(t) {
        var i = APIFunctionQueue.length;
        APIFunctionQueue.push(t), 0 === i && APIFunctionQueuePopAction()
    }

    function APIFunctionQueuePopAction() {
        APIFunctionQueue[0](function() {
            APIFunctionQueue.shift(), 0 < APIFunctionQueue.length && APIFunctionQueuePopAction()
        })
    }
    $(document).ready(function() {
        $(document).on("mouseover", "[data-imp-highlight-shape-on-mouseover]", function() {
            var t = $(this).data("imp-highlight-shape-on-mouseover"),
                i = findImageMapWithName($(this).data("imp-image-map-name"));
            if (i) {
                var e = findShapeWithTitle(i.settings.general.name, t);
                if (e) {
                    e.shape;
                    var s = e.index;
                    APIFunctionQueueAddAction(function(t) {
                        i.highlightShape(s, !0), t()
                    })
                }
            }
        }), $(document).on("mouseout", "[data-imp-highlight-shape-on-mouseover]", function() {
            var t = $(this).data("imp-highlight-shape-on-mouseover"),
                i = findImageMapWithName($(this).data("imp-image-map-name"));
            if (i) {
                var e = findShapeWithTitle(i.settings.general.name, t);
                if (e) {
                    e.shape, e.index;
                    APIFunctionQueueAddAction(function(t) {
                        i.unhighlightAllShapes(), t()
                    })
                }
            }
        }), $(document).on("click", "[data-imp-highlight-shape-on-click]", function() {
            var t = $(this).data("imp-highlight-shape-on-click"),
                i = findImageMapWithName($(this).data("imp-image-map-name"));
            if (i) {
                var e = findShapeWithTitle(i.settings.general.name, t);
                if (e) {
                    var s = e.shape,
                        n = e.index;
                    if (parseInt(s.layerID, 10) !== parseInt(i.settings.runtime.layerID, 10) && APIFunctionQueueAddAction(function(t) {
                            i.switchLayer(s.layerID, function() {
                                t()
                            })
                        }), APIFunctionQueueAddAction(function(t) {
                            i.highlightShape(n, !0), t()
                        }), -1 === i.apiHighlightedShapes.indexOf(n) && i.apiHighlightedShapes.push(n), i.connectedShapes[s.id])
                        for (var a = 0; a < i.connectedShapes[s.id].length; a++) {
                            var o = i.connectedShapes[s.id][a].index; - 1 === i.apiHighlightedShapes.indexOf(o) && i.apiHighlightedShapes.push(o)
                        }
                }
            }
        }), $(document).on("mouseover", "[data-imp-unhighlight-shape-on-mouseover]", function() {
            var t = $(this).data("imp-unhighlight-shape-on-mouseover"),
                i = findImageMapWithName($(this).data("imp-image-map-name"));
            if (i) {
                var e = findShapeWithTitle(i.settings.general.name, t);
                if (e) {
                    var s = e.shape,
                        n = e.index;
                    if (-1 != i.apiHighlightedShapes.indexOf(n)) {
                        var a = i.apiHighlightedShapes.indexOf(n);
                        i.apiHighlightedShapes.splice(a, 1)
                    }
                    if (parseInt(s.layerID, 10) !== parseInt(i.settings.runtime.layerID, 10) && APIFunctionQueueAddAction(function(t) {
                            i.switchLayer(s.layerID, function() {
                                t()
                            })
                        }), i.connectedShapes[s.id])
                        for (var o = 0; o < i.connectedShapes[s.id].length; o++) {
                            var h = i.connectedShapes[s.id][o].index,
                                r = i.apiHighlightedShapes.indexOf(h);
                            i.apiHighlightedShapes.splice(r, 1), APIFunctionQueueAddAction(function(t) {
                                i.unhighlightShape(h), t()
                            })
                        }
                    APIFunctionQueueAddAction(function(t) {
                        i.unhighlightShape(n), t()
                    })
                }
            }
        }), $(document).on("click", "[data-imp-unhighlight-shape-on-click]", function() {
            var t = $(this).data("imp-unhighlight-shape-on-click"),
                i = findImageMapWithName($(this).data("imp-image-map-name"));
            if (i) {
                var e = findShapeWithTitle(i.settings.general.name, t);
                if (e) {
                    var s = e.shape,
                        n = e.index;
                    if (-1 != i.apiHighlightedShapes.indexOf(n)) {
                        var a = i.apiHighlightedShapes.indexOf(n);
                        i.apiHighlightedShapes.splice(a, 1)
                    }
                    if (parseInt(s.layerID, 10) !== parseInt(i.settings.runtime.layerID, 10) && APIFunctionQueueAddAction(function(t) {
                            i.switchLayer(s.layerID, function() {
                                t()
                            })
                        }), i.connectedShapes[s.id])
                        for (var o = 0; o < i.connectedShapes[s.id].length; o++) {
                            var h = i.connectedShapes[s.id][o].index,
                                r = i.apiHighlightedShapes.indexOf(h);
                            i.apiHighlightedShapes.splice(r, 1), APIFunctionQueueAddAction(function(t) {
                                i.unhighlightShape(h), t()
                            })
                        }
                    APIFunctionQueueAddAction(function(t) {
                        i.unhighlightShape(n), t()
                    })
                }
            }
        }), $(document).on("mouseover", "[data-imp-open-tooltip-on-mouseover]", function() {
            var t = $(this).data("imp-open-tooltip-on-mouseover"),
                i = findImageMapWithName($(this).data("imp-image-map-name"));
            if (i) {
                var e = findShapeWithTitle(i.settings.general.name, t);
                if (e) {
                    var s = e.shape,
                        n = e.index;
                    parseInt(s.layerID, 10) !== parseInt(i.settings.runtime.layerID, 10) && APIFunctionQueueAddAction(function(t) {
                        i.switchLayer(s.layerID, function() {
                            t()
                        })
                    }), APIFunctionQueueAddAction(function(t) {
                        i.showTooltip(n), t()
                    }), APIFunctionQueueAddAction(function(t) {
                        i.updateTooltipPosition(n), t()
                    })
                }
            }
        }), $(document).on("mouseout", "[data-imp-open-tooltip-on-mouseover]", function() {
            var t = $(this).data("imp-open-tooltip-on-mouseover"),
                i = findImageMapWithName($(this).data("imp-image-map-name"));
            if (i) {
                var e = findShapeWithTitle(i.settings.general.name, t);
                if (e) {
                    var s = e.shape;
                    e.index;
                    parseInt(s.layerID, 10) !== parseInt(i.settings.runtime.layerID, 10) && APIFunctionQueueAddAction(function(t) {
                        i.switchLayer(s.layerID, function() {
                            t()
                        })
                    }), APIFunctionQueueAddAction(function(t) {
                        i.hideAllTooltips(), t()
                    })
                }
            }
        }), $(document).on("click", "[data-imp-open-tooltip-on-click]", function() {
            var t = $(this).data("imp-open-tooltip-on-click"),
                i = findImageMapWithName($(this).data("imp-image-map-name"));
            if (i) {
                var e = findShapeWithTitle(i.settings.general.name, t);
                if (e) {
                    var s = e.shape,
                        n = e.index;
                    parseInt(s.layerID, 10) !== parseInt(i.settings.runtime.layerID, 10) && APIFunctionQueueAddAction(function(t) {
                        i.switchLayer(s.layerID, function() {
                            t()
                        })
                    }), APIFunctionQueueAddAction(function(t) {
                        i.showTooltip(n), t()
                    }), APIFunctionQueueAddAction(function(t) {
                        i.updateTooltipPosition(n), t()
                    }), -1 === i.apiOpenedTooltips.indexOf(n) && i.apiOpenedTooltips.push(n)
                }
            }
        }), $(document).on("mouseover", "[data-imp-close-tooltip-on-mouseover]", function() {
            var t = $(this).data("imp-close-tooltip-on-mouseover"),
                i = findImageMapWithName($(this).data("imp-image-map-name"));
            if (i) {
                var e = findShapeWithTitle(i.settings.general.name, t);
                if (e) {
                    var s = e.shape,
                        n = e.index;
                    if (parseInt(s.layerID, 10) !== parseInt(i.settings.runtime.layerID, 10) && APIFunctionQueueAddAction(function(t) {
                            i.switchLayer(s.layerID, function() {
                                t()
                            })
                        }), -1 != i.apiOpenedTooltips.indexOf(n)) {
                        var a = i.apiOpenedTooltips.indexOf(n);
                        i.apiOpenedTooltips.splice(a, 1)
                    }
                    APIFunctionQueueAddAction(function(t) {
                        i.hideTooltip(n), t()
                    })
                }
            }
        }), $(document).on("click", "[data-imp-close-tooltip-on-click]", function() {
            var t = $(this).data("imp-close-tooltip-on-click"),
                i = findImageMapWithName($(this).data("imp-image-map-name"));
            if (i) {
                var e = findShapeWithTitle(i.settings.general.name, t);
                if (e) {
                    var s = e.shape,
                        n = e.index;
                    if (parseInt(s.layerID, 10) !== parseInt(i.settings.runtime.layerID, 10) && APIFunctionQueueAddAction(function(t) {
                            i.switchLayer(s.layerID, function() {
                                t()
                            })
                        }), -1 != i.apiOpenedTooltips.indexOf(n)) {
                        var a = i.apiOpenedTooltips.indexOf(n);
                        i.apiOpenedTooltips.splice(a, 1)
                    }
                    APIFunctionQueueAddAction(function(t) {
                        i.hideTooltip(n), t()
                    })
                }
            }
        }), $(document).on("mouseover", "[data-imp-trigger-shape-on-mouseover]", function() {
            var t = $(this).data("imp-trigger-shape-on-mouseover"),
                i = findImageMapWithName($(this).data("imp-image-map-name"));
            if (i) {
                var e = findShapeWithTitle(i.settings.general.name, t);
                if (e) {
                    var s = e.shape,
                        n = e.index;
                    parseInt(s.layerID, 10) !== parseInt(i.settings.runtime.layerID, 10) && APIFunctionQueueAddAction(function(t) {
                        i.switchLayer(s.layerID, function() {
                            t()
                        })
                    }), APIFunctionQueueAddAction(function(t) {
                        i.highlightShape(n, !0), t()
                    }), APIFunctionQueueAddAction(function(t) {
                        i.showTooltip(n), t()
                    }), APIFunctionQueueAddAction(function(t) {
                        i.updateTooltipPosition(n), t()
                    })
                }
            }
        }), $(document).on("mouseout", "[data-imp-trigger-shape-on-mouseover]", function() {
            var t = $(this).data("imp-trigger-shape-on-mouseover"),
                i = findImageMapWithName($(this).data("imp-image-map-name"));
            if (i) {
                var e = findShapeWithTitle(i.settings.general.name, t);
                if (e) {
                    var s = e.shape;
                    e.index;
                    parseInt(s.layerID, 10) !== parseInt(i.settings.runtime.layerID, 10) && APIFunctionQueueAddAction(function(t) {
                        i.switchLayer(s.layerID, function() {
                            t()
                        })
                    }), APIFunctionQueueAddAction(function(t) {
                        i.unhighlightAllShapes(), t()
                    }), APIFunctionQueueAddAction(function(t) {
                        i.hideAllTooltips(), t()
                    })
                }
            }
        }), $(document).on("click", "[data-imp-trigger-shape-on-click]", function() {
            var t = $(this).data("imp-trigger-shape-on-click"),
                i = findImageMapWithName($(this).data("imp-image-map-name"));
            if (i) {
                var e = findShapeWithTitle(i.settings.general.name, t);
                if (e) {
                    var s = e.shape,
                        n = e.index;
                    if (parseInt(s.layerID, 10) !== parseInt(i.settings.runtime.layerID, 10) && APIFunctionQueueAddAction(function(t) {
                            i.switchLayer(s.layerID, function() {
                                t()
                            })
                        }), APIFunctionQueueAddAction(function(t) {
                            i.highlightShape(n, !0), t()
                        }), APIFunctionQueueAddAction(function(t) {
                            i.showTooltip(n), t()
                        }), APIFunctionQueueAddAction(function(t) {
                            i.updateTooltipPosition(n), t()
                        }), -1 === i.apiOpenedTooltips.indexOf(n) && i.apiOpenedTooltips.push(n), -1 === i.apiHighlightedShapes.indexOf(n) && i.apiHighlightedShapes.push(n), i.connectedShapes[s.id])
                        for (var a = 0; a < i.connectedShapes[s.id].length; a++) {
                            var o = i.connectedShapes[s.id][a].index; - 1 === i.apiHighlightedShapes.indexOf(o) && i.apiHighlightedShapes.push(o)
                        }
                }
            }
        }), $(document).on("mouseover", "[data-imp-untrigger-shape-on-mouseover]", function() {
            var t = $(this).data("imp-untrigger-shape-on-mouseover"),
                i = findImageMapWithName($(this).data("imp-image-map-name"));
            if (i) {
                var e = findShapeWithTitle(i.settings.general.name, t);
                if (e) {
                    var s = e.shape,
                        n = e.index;
                    if (parseInt(s.layerID, 10) !== parseInt(i.settings.runtime.layerID, 10) && APIFunctionQueueAddAction(function(t) {
                            i.switchLayer(s.layerID, function() {
                                t()
                            })
                        }), -1 != i.apiHighlightedShapes.indexOf(n)) {
                        var a = i.apiHighlightedShapes.indexOf(n);
                        i.apiHighlightedShapes.splice(a, 1)
                    }
                    if (i.connectedShapes[s.id])
                        for (var o = 0; o < i.connectedShapes[s.id].length; o++) {
                            var h = i.connectedShapes[s.id][o].index,
                                r = i.apiHighlightedShapes.indexOf(h);
                            i.apiHighlightedShapes.splice(r, 1), APIFunctionQueueAddAction(function(t) {
                                i.unhighlightShape(h), t()
                            })
                        }
                    if (APIFunctionQueueAddAction(function(t) {
                            i.unhighlightShape(n), t()
                        }), -1 != i.apiOpenedTooltips.indexOf(n)) {
                        a = i.apiOpenedTooltips.indexOf(n);
                        i.apiOpenedTooltips.splice(a, 1)
                    }
                    APIFunctionQueueAddAction(function(t) {
                        i.hideTooltip(n), t()
                    })
                }
            }
        }), $(document).on("click", "[data-imp-untrigger-shape-on-click]", function() {
            var t = $(this).data("imp-untrigger-shape-on-click"),
                i = findImageMapWithName($(this).data("imp-image-map-name"));
            if (i) {
                var e = findShapeWithTitle(i.settings.general.name, t);
                if (e) {
                    var s = e.shape,
                        n = e.index;
                    if (parseInt(s.layerID, 10) !== parseInt(i.settings.runtime.layerID, 10) && APIFunctionQueueAddAction(function(t) {
                            i.switchLayer(s.layerID, function() {
                                t()
                            })
                        }), -1 != i.apiHighlightedShapes.indexOf(n)) {
                        var a = i.apiHighlightedShapes.indexOf(n);
                        i.apiHighlightedShapes.splice(a, 1)
                    }
                    if (i.connectedShapes[s.id])
                        for (var o = 0; o < i.connectedShapes[s.id].length; o++) {
                            var h = i.connectedShapes[s.id][o].index,
                                r = i.apiHighlightedShapes.indexOf(h);
                            i.apiHighlightedShapes.splice(r, 1), APIFunctionQueueAddAction(function(t) {
                                i.unhighlightShape(h), t()
                            })
                        }
                    if (APIFunctionQueueAddAction(function(t) {
                            i.unhighlightShape(n), t()
                        }), -1 != i.apiOpenedTooltips.indexOf(n)) {
                        a = i.apiOpenedTooltips.indexOf(n);
                        i.apiOpenedTooltips.splice(a, 1)
                    }
                    APIFunctionQueueAddAction(function(t) {
                        i.hideTooltip(n), t()
                    })
                }
            }
        }), $(document).on("mouseover", "[data-imp-focus-shape-on-mouseover]", function() {
            var t = $(this).data("imp-focus-shape-on-mouseover"),
                i = findImageMapWithName($(this).data("imp-image-map-name"));
            if (i) {
                var e = findShapeWithTitle(i.settings.general.name, t);
                if (e) {
                    var s = e.shape,
                        n = e.index;
                    parseInt(s.layerID, 10) !== parseInt(i.settings.runtime.layerID, 10) && APIFunctionQueueAddAction(function(t) {
                        i.switchLayer(s.layerID, function() {
                            t()
                        })
                    }), APIFunctionQueueAddAction(function(t) {
                        i.focusShape(n), t()
                    }), APIFunctionQueueAddAction(function(t) {
                        i.unhighlightAllShapes(), t()
                    }), APIFunctionQueueAddAction(function(t) {
                        i.highlightShape(n), t()
                    })
                }
            }
        }), $(document).on("click", "[data-imp-focus-shape-on-click]", function() {
            var t = $(this).data("imp-focus-shape-on-click"),
                i = findImageMapWithName($(this).data("imp-image-map-name"));
            if (i) {
                var e = findShapeWithTitle(i.settings.general.name, t);
                if (e) {
                    var s = e.shape,
                        n = e.index;
                    i.hideResponsiveShapesMenu(), parseInt(s.layerID, 10) !== parseInt(i.settings.runtime.layerID, 10) && APIFunctionQueueAddAction(function(t) {
                        i.switchLayer(s.layerID, function() {
                            t()
                        })
                    }), APIFunctionQueueAddAction(function(t) {
                        i.focusShape(n), t()
                    }), APIFunctionQueueAddAction(function(t) {
                        i.unhighlightAllShapes(), t()
                    }), APIFunctionQueueAddAction(function(t) {
                        i.highlightShape(n), t()
                    })
                }
            }
        }), $(document).on("click", "[data-imp-go-to-floor]", function() {
            var t = $(this).data("imp-go-to-floor"),
                i = findImageMapWithName($(this).data("imp-image-map-name"));
            if (i) {
                for (var e = 0, s = 0; s < i.settings.layers.layers_list.length; s++) i.settings.layers.layers_list[s].title === t && (e = i.settings.layers.layers_list[s].id);
                i.switchLayer(e)
            }
        })
    });
    var pluginName = "imageMapPro",
        default_settings = $.imageMapProEditorDefaults,
        default_spot_settings = $.imageMapProShapeDefaults,
        instances = new Array;

    function Plugin(t, i) {
        this.element = t, this.settings = $.extend(!0, {}, default_settings, i), this.root = $(t), this.wrap = undefined, this.shapesMenuWrap = undefined, this.shapesMenuResponsiveButton = undefined, this.zoomWrap = undefined, this.translateWrap = undefined, this.ui = undefined, this.uiNavigatorRoot = undefined, this.uiNavigatorWindowWidth = undefined, this.uiNavigatorWindowHeight = undefined, this.uiNavigatorImage = undefined, this.shapeContainer = undefined, this.imageBackgroundsContainer = undefined, this.shapeSvgContainer = undefined, this.fullscreenTooltipsContainer = undefined, this.tooltipsContainer = undefined, this.scrollMessage = undefined, this.responsiveShapesMenu = !1, this.responsiveShapesMenuWrap = !1, this.wrapWidth = 0, this.wrapHeight = 0, this.wrapOffsetLeft = 0, this.wrapOffsetTop = 0, this.visibleFullscreenTooltip = undefined, this.visibleFullscreenTooltipIndex = undefined, this.bodyOverflow = undefined, this.highlightedShapes = new Array, this.connectedShapes = new Array, this.openedTooltips = new Array, this.apiHighlightedShapes = new Array, this.apiOpenedTooltips = new Array, this.hideScrollMessageTimeout = undefined, this.targetZoom = 1, this.zoom = 1, this.maxZoomLevel = 8, this.zoomMultiplier = 1.45, this.targetPanX = 0, this.actualPanX = 0, this.targetPanY = 0, this.actualPanY = 0, this.initialPanX = 0, this.initialPanY = 0, this.panDeltaY = 0, this.ix = 0, this.iy = 0, this.lastX = 0, this.lastY = 0, this.pinchInitial = [{
            x: 0,
            y: 0
        }, {
            x: 0,
            y: 0
        }], this.pinchInitialDistance = 0, this.pinchInitialZoom = 0, this.navigatorRatio = 1, this.navigatorMarginX = 0, this.navigatorMarginY = 0, this.touch = !1, this.fullscreenTooltipVisible = !1, this.panning = !1, this.didPan = !1, this.panningOnNavigator = !1, this.pinching = !1, this.didAnimateShapesOnPageload = !1, this.ctrlKeyDown = !1, this.cmdKeyDown = !1, this.mac = !1, this.lastWrapRecalc = 0, this.init()
    }

    function isTrue(t) {
        return 1 === parseInt(t, 10)
    }

    function hexToRgb(t) {
        var i = /^#?([a-f\d]{2})([a-f\d]{2})([a-f\d]{2})$/i.exec(t);
        return i ? {
            r: parseInt(i[1], 16),
            g: parseInt(i[2], 16),
            b: parseInt(i[3], 16)
        } : {
            r: 0,
            g: 0,
            b: 0
        }
    }

    function screenToImageMapSpace(t, i, e) {
        return Math.round(1e3 * (t - e.offset().left)), Math.round(1e3 * (i - e.offset().top)), 1
    }

    function isPointInsideRect(t, i, e, s, n, a) {
        return e <= t && t <= e + n && s <= i && i <= s + a
    }

    function isPointInsidePolygon(t, i, e) {
        for (var s = !1, n = 0, a = e.length - 1; n < e.length; a = n++) {
            var o = e[n][0],
                h = e[n][1],
                r = e[a][0],
                p = e[a][1];
            i < h != i < p && t < (r - o) * (i - h) / (p - h) + o && (s = !s)
        }
        return s
    }

    function isPointInsideEllipse(t, i, e, s, n, a) {
        return (t - e) * (t - e) / (n * n) + (i - s) * (i - s) / (a * a) <= 1
    }

    function fitRectToScreen(t, i, e, s) {
        return t < 0 && (t = 0), i < 0 && (i = 0), t > $(document).width() - e && (t = $(document).width() - e), i > $(document).height() - s && (i = $(document).height() - s), {
            x: t,
            y: i
        }
    }

    function shuffle(t) {
        for (var i, e, s = t.length; 0 !== s;) e = Math.floor(Math.random() * s), i = t[--s], t[s] = t[e], t[e] = i;
        return t
    }

    function isMobile() {
        return !!/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)
    }

    function lerp(t, i, e) {
        return t * (1 - e) + i * e
    }

    function easeOutBounce(t, i, e, s, n) {
        return (i /= n) < 1 / 2.75 ? s * (7.5625 * i * i) + e : i < 2 / 2.75 ? s * (7.5625 * (i -= 1.5 / 2.75) * i + .75) + e : i < 2.5 / 2.75 ? s * (7.5625 * (i -= 2.25 / 2.75) * i + .9375) + e : s * (7.5625 * (i -= 2.625 / 2.75) * i + .984375) + e
    }
    $.extend(Plugin.prototype, {
        init: function(t) {
            this.parseSettings(), (instances[this.settings.general.name] = this).id = 100 * Math.random(), this.connectedShapes = [];
            for (var i = 0; i < this.settings.spots.length; i++) {
                var e = this.settings.spots[i],
                    s = $.extend(!0, {}, default_spot_settings);
                e = $.extend(!0, s, e), this.settings.spots[i] = $.extend(!0, {}, e), this.settings.spots[i].title && 0 !== this.settings.spots[i].title.length || (this.settings.spots[i].title = this.settings.spots[i].id), "" != e.connected_to && (this.connectedShapes[e.connected_to] || (this.connectedShapes[e.connected_to] = new Array), this.connectedShapes[e.connected_to].push({
                    id: e.id,
                    index: i
                })), this.settings.spots[i].mouseover_style.background_type = this.settings.spots[i].default_style.background_type
            }
            if (isTrue(this.settings.layers.enable_layers)) {
                var n = !1;
                for (i = 0; i < this.settings.layers.layers_list.length; i++) parseInt(this.settings.layers.layers_list[i].id, 10) === parseInt(this.settings.runtime.layerID, 10) && (n = !0, this.settings.image.url = this.settings.layers.layers_list[i].image_url);
                n || (this.settings.image.url = this.settings.layers.layers_list[0].image_url, this.settings.runtime.layerID = this.settings.layers.layers_list[0].id)
            }
            this.mac = 0 <= navigator.platform.toUpperCase().indexOf("MAC");
            var a = this.root.width();
            if (this.settings.runtime.is_fullscreen && (a = $(window).width()), (isMobile() || a / 3 < 240) && (this.responsiveShapesMenu = !0), "" != this.settings.image.url) {
                (h = new Image).src = this.settings.image.url;
                var o = this;
                this.loadImage(h, function() {}, function() {
                    o.finishInit(t)
                })
            } else this.finishInit(t);
            for (i = 0; i < this.settings.spots.length; i++) {
                var h;
                if ("image" === (e = this.settings.spots[i]).default_style.background_type)(h = new Image).src = e.mouseover_style.background_image_url, $(h).on("load", function() {})
            }
        },
        finishInit: function(t) {
            var i = "",
                e = "";
            if (isTrue(this.settings.tooltips.sticky_tooltips) && (e = "imp-sticky-tooltips"), i += '<div class="imp-wrap ' + e + '">', i += '   <div class="imp-ui" data-image-map-pro-ui-id="' + this.settings.id + '">', isTrue(this.settings.zooming.enable_zooming) && isTrue(this.settings.zooming.enable_navigator) && (i += '       <div data-imp-id="' + this.settings.id + '" class="imp-ui-element imp-ui-navigator-root">', "" != this.settings.image.url && (i += '         <img src="' + this.settings.image.url + '" class="imp-ui-navigator-background-image-edgefill">', i += '         <img src="' + this.settings.image.url + '" class="imp-ui-navigator-background-image">'), i += '         <div class="imp-ui-navigator-overlay"></div>', "" != this.settings.image.url && (i += '         <img src="' + this.settings.image.url + '" class="imp-ui-navigator-window-image">'), i += "      </div>"), isTrue(this.settings.zooming.enable_zooming) && isTrue(this.settings.zooming.enable_zoom_buttons) && (i += '       <div data-imp-id="' + this.settings.id + '" class="imp-ui-element imp-ui-zoom-button imp-ui-zoom-button-zoom-in" style="color: ' + this.settings.zooming.zoom_button_text_color + "; background: " + this.settings.zooming.zoom_button_background_color + ';"><i class="fa fa-plus"></i></div>', i += '       <div data-imp-id="' + this.settings.id + '" class="imp-ui-element imp-ui-zoom-button imp-ui-zoom-button-zoom-out" style="color: ' + this.settings.zooming.zoom_button_text_color + "; background: " + this.settings.zooming.zoom_button_background_color + ';"><i class="fa fa-minus"></i></div>'), isTrue(this.settings.layers.enable_layers)) {
                i += '<div class="imp-ui-layers-menu-wrap">', i += '   <div data-imp-id="' + this.settings.id + '" class="imp-ui-layer-switch-up imp-ui-layer-switch"><i class="fa fa-caret-up" aria-hidden="true"></i></div>', i += '   <div data-imp-id="' + this.settings.id + '" class="imp-ui-layer-switch-down imp-ui-layer-switch"><i class="fa fa-caret-down" aria-hidden="true"></i></div>', i += '   <select class="imp-ui-element imp-ui-layers-select">';
                for (var s = 0; s < this.settings.layers.layers_list.length; s++) i += '<option value="' + this.settings.layers.layers_list[s].id + '">' + this.settings.layers.layers_list[s].title + "</option>";
                i += "   </select>", i += "</div>"
            }
            if (isTrue(this.settings.zooming.enable_zooming) && isTrue(this.settings.zooming.hold_ctrl_to_zoom)) {
                var n = "CTRL";
                this.mac && (n = "⌘"), i += '<div class="imp-ui-scroll-message-wrap">', i += '   <div class="imp-ui-scroll-message-wrap-inner">', i += '       <div class="imp-ui-scroll-message">Hold <div class="imp-ui-scroll-message-button">' + n + "</div> to Zoom</div>", i += "   </div>", i += "</div>"
            }
            i += "   </div>", i += '   <div class="imp-zoom-outer-wrap">', i += '       <div class="imp-translate-wrap">', i += '           <div class="imp-zoom-wrap">', "" != this.settings.image.url && (i += '               <img src="' + this.settings.image.url + '" class="imp-main-image">'), i += "           </div>", i += "       </div>", i += "   </div>", i += "</div>", this.root.html(i), this.wrap = this.root.find(".imp-wrap"), this.zoomWrap = this.root.find(".imp-zoom-wrap"), this.translateWrap = this.root.find(".imp-translate-wrap"), this.ui = this.wrap.find(".imp-ui"), this.scrollMessage = this.wrap.find(".imp-ui-scroll-message-wrap"), this.root.addClass("imp-initialized"), this.root.attr("data-image-map-pro-id", this.settings.id), $('[data-imp-tooltips-container="' + this.settings.id + '"]').remove(), $("body").prepend('<div class="imp-tooltips-container" data-imp-tooltips-container="' + this.settings.id + '"></div>'), this.tooltipsContainer = $('[data-imp-tooltips-container="' + this.settings.id + '"]'), this.events(), this.centerImageMap(), this.drawShapes(), this.generateShapeStyleClasses(), this.addTooltips(), this.initFullscreen(), this.initZoom(), this.drawShapesMenu(), this.adjustSize(), this.initNavigator(), this.initLayers(), this.animateShapesLoop(), $.imageMapProInitialized(this.settings.general.name), t && t()
        },
        parseSettings: function() {
            this.settings.general.image_url && (this.settings.image.url = this.settings.general.image_url);
            for (var t = 0; t < this.settings.spots.length; t++) {
                var i = this.settings.spots[t];
                if (i.tooltip_style && i.tooltip_style.enable_tooltip && (i.tooltip.enable_tooltip = i.tooltip_style.enable_tooltip, i.tooltip_style.enable_tooltip = undefined), i.tooltip_content.plain_text && "content-builder" != i.tooltip_content.content_type) {
                    var e = {
                        containers: [{
                            id: "sq-container-160121",
                            settings: {
                                elements: [{
                                    settings: {
                                        name: "Paragraph",
                                        iconClass: "fa fa-paragraph"
                                    },
                                    options: {
                                        text: {
                                            text: i.tooltip_content.plain_text
                                        },
                                        font: {
                                            text_color: i.tooltip_content.plain_text_color
                                        }
                                    }
                                }]
                            }
                        }]
                    };
                    i.tooltip_content.squares_settings = e, i.tooltip_content.content_type = undefined, i.tooltip_content.plain_text = undefined, i.tooltip_content.plain_text_color = undefined
                }
                i.default_style && i.default_style.fill && (i.default_style.background_color = i.default_style.fill, delete i.default_style.fill), i.default_style && i.default_style.fill_opacity && (i.default_style.background_opacity = i.default_style.fill_opacity, delete i.default_style.fill_opacity), i.mouseover_style && i.mouseover_style.fill && (i.mouseover_style.background_color = i.mouseover_style.fill, delete i.mouseover_style.fill), i.mouseover_style && i.mouseover_style.fill_opacity && (i.mouseover_style.background_opacity = i.mouseover_style.fill_opacity, delete i.mouseover_style.fill_opacity)
            }
        },
        loadImage: function(t, i, e) {
            if (isTrue(this.settings.layers.enable_layers))
                for (var s = 0; s < this.settings.layers.layers_list.length; s++) {
                    var n = new Image;
                    n.src = this.settings.layers.layers_list[s].image_url;
                    var a = 0,
                        o = this;
                    $(n).on("load", function() {
                        ++a === o.settings.layers.layers_list.length && e()
                    })
                } else t.complete && t.naturalWidth !== undefined && t.naturalHeight !== undefined ? e() : (i(), $(t).on("load", function() {
                    $(t).off("load"), e()
                }))
        },
        centerImageMap: function() {
            isTrue(this.settings.general.center_image_map) && this.wrap.css({
                margin: "0 auto"
            })
        },
        adjustSize: function() {
            if (isTrue(this.settings.runtime.is_fullscreen)) {
                var t = $(window).width(),
                    i = $(window).height();
                isTrue(this.settings.shapes_menu.enable_shapes_menu) && !this.responsiveShapesMenu && (t -= 240);
                var e = t / i,
                    s = this.settings.general.naturalWidth / this.settings.general.naturalHeight;
                return s < e ? (this.settings.general.width = i * s, this.settings.general.height = i) : (this.settings.general.width = t, this.settings.general.height = t / s), this.wrap.css({
                    width: this.settings.general.width,
                    height: this.settings.general.height
                }), this.wrapWidth = this.wrap.width(), this.wrapHeight = this.wrap.height(), this.wrapOffsetLeft = this.wrap.offset().left, void(this.wrapOffsetTop = this.wrap.offset().top)
            }
            "" != this.settings.image.url ? isTrue(this.settings.general.responsive) ? isTrue(this.settings.general.preserve_quality) && this.wrap.css({
                "max-width": this.settings.general.naturalWidth
            }) : this.wrap.css({
                width: this.settings.general.width,
                height: this.settings.general.height
            }) : isTrue(this.settings.general.responsive) ? (this.wrap.css({
                width: "100%",
                height: this.settings.general.height,
                "max-width": this.settings.general.width,
                "max-height": this.settings.general.height
            }), this.wrap.css({
                height: this.wrap.width() * (this.settings.general.height / this.settings.general.width)
            })) : this.wrap.css({
                width: this.settings.general.width,
                height: this.settings.general.height
            }), this.wrapWidth = this.wrap.width(), this.wrapHeight = this.wrap.height(), this.wrapOffsetLeft = this.wrap.offset().left, this.wrapOffsetTop = this.wrap.offset().top
        },
        drawShapes: function() {
            for (var t = 0; t < this.settings.spots.length; t++) {
                if ((y = this.settings.spots[t]).x = parseFloat(y.x), y.y = parseFloat(y.y), y.width = parseFloat(y.width), y.height = parseFloat(y.height), y.default_style.stroke_width = parseInt(y.default_style.stroke_width), y.mouseover_style.stroke_width = parseInt(y.mouseover_style.stroke_width), "poly" === y.type)
                    for (var i = 0; i < y.points.length; i++) y.points[i].x = parseFloat(y.points[i].x), y.points[i].y = parseFloat(y.points[i].y)
            }
            this.settings.general.width = parseInt(this.settings.general.width), this.settings.general.height = parseInt(this.settings.general.height), this.zoomWrap.prepend('<div class="imp-shape-container"></div>'), this.zoomWrap.prepend('<div class="imp-image-backgrounds-container" id="imp-image-backgrounds-container-' + this.settings.id + '"></div>'), this.shapeContainer = this.wrap.find(".imp-shape-container"), this.imageBackgroundsContainer = this.wrap.find(".imp-image-backgrounds-container");
            var e = "",
                s = this.settings.general.width,
                n = this.settings.general.height;
            isTrue(this.settings.general.responsive) && (s = this.settings.general.naturalWidth, n = this.settings.general.naturalHeight);
            var a = '<svg class="hs-poly-svg" viewBox="0 0 ' + s + " " + n + '" preserveAspectRatio="none">';
            for (t = 0; t < this.settings.spots.length; t++)
                if (!isTrue(this.settings.layers.enable_layers) || parseInt(this.settings.spots[t].layerID, 10) === parseInt(this.settings.runtime.layerID)) {
                    var o = "";
                    if (isTrue((y = this.settings.spots[t]).static) && (o = "imp-shape-static"), "spot" === y.type)
                        if (isTrue(y.default_style.use_icon)) {
                            var h = "imp-shape-spot";
                            if (isTrue(y.default_style.icon_is_pin) && (h += " imp-shape-spot-pin"), e += '<div class="imp-shape ' + o + " " + h + '" id="' + y.id + '" data-shape-title="' + y.title + '" data-index=' + t + ">", "library" === y.default_style.icon_type) {
                                var r = "";
                                r += "line-height: " + y.height + "px;", e += '   <div class="imp-spot-fontawesome-icon" style="' + (r += "font-size: " + y.height + "px;") + '">', e += '       <i class="fa fa-' + y.default_style.icon_fontawesome_id + '"></i>', e += "   </div>"
                            }
                            if ("custom" === y.default_style.icon_type && 0 < y.default_style.icon_url.length && (e += '<img src="' + y.default_style.icon_url + '" style="width: ' + y.width + "px; height: " + y.height + 'px">'), isTrue(y.default_style.icon_shadow)) {
                                var p = "";
                                p += "width: " + y.width + "px;", p += "height: " + y.height + "px;", e += '<div style="' + (p += "top: " + y.height / 2 + "px;") + '" class="imp-shape-icon-shadow"></div>'
                            }
                            if (isTrue(this.settings.shapes.glowing_shapes)) {
                                var l = "";
                                l += "width: " + y.width / 3 + "px;", l += "height: " + y.height / 3 + "px;", l += "margin-left: " + -y.width / 6 + "px;", l += "margin-top: " + -y.height / 6 + "px;", l += "border-radius: " + y.width / 3 + "px;", l += "background: rgba(" + (d = hexToRgb(this.settings.shapes.glowing_shapes_color) || {
                                    r: 0,
                                    b: 0,
                                    g: 0
                                }).r + ", " + d.g + ", " + d.b + ", " + this.settings.shapes.glow_opacity + ");", e += '<div class="imp-spot-glow" style="' + (l += "box-shadow: 0 0 20px 15px rgba(" + d.r + ", " + d.g + ", " + d.b + ", " + this.settings.shapes.glow_opacity + ");") + '"></div>'
                            }
                            e += "</div>"
                        } else {
                            var g = "";
                            if (isTrue(this.settings.shapes.glowing_shapes)) {
                                l = "";
                                l += "box-shadow: 0 0 20px 15px rgba(" + (d = hexToRgb(this.settings.shapes.glowing_shapes_color) || {
                                    r: 0,
                                    b: 0,
                                    g: 0
                                }).r + ", " + d.g + ", " + d.b + ", " + this.settings.shapes.glow_opacity + ");", g += '<div class="imp-shape-glow" style="' + (l += "border-radius: 50% 50%;") + '"></div>'
                            }
                            e += '<div class="imp-shape ' + o + ' imp-shape-spot" id="' + y.id + '" data-shape-title="' + y.title + '" data-index=' + t + ">" + g + "</div>"
                        }
                    if ("text" === y.type && (e += '<div class="imp-shape ' + o + ' imp-shape-text" id="' + y.id + '" data-shape-title="' + y.title + '" data-index=' + t + ">" + y.text.text + "</div>"), "rect" === y.type) {
                        g = "";
                        if (isTrue(this.settings.shapes.glowing_shapes)) {
                            l = "";
                            l += "box-shadow: 0 0 20px 15px rgba(" + (d = hexToRgb(this.settings.shapes.glowing_shapes_color) || {
                                r: 0,
                                b: 0,
                                g: 0
                            }).r + ", " + d.g + ", " + d.b + ", " + this.settings.shapes.glow_opacity + ");", g += '<div class="imp-shape-glow" style="' + (l += "border-radius: " + y.default_style.border_radius + "px;") + '"></div>'
                        }
                        e += '<div class="imp-shape ' + o + ' imp-shape-rect" id="' + y.id + '" data-shape-title="' + y.title + '" data-index=' + t + ">" + g + "</div>"
                    }
                    if ("oval" === y.type) {
                        g = "";
                        if (isTrue(this.settings.shapes.glowing_shapes)) {
                            var d;
                            l = "";
                            l += "box-shadow: 0 0 20px 15px rgba(" + (d = hexToRgb(this.settings.shapes.glowing_shapes_color) || {
                                r: 0,
                                b: 0,
                                g: 0
                            }).r + ", " + d.g + ", " + d.b + ", " + this.settings.shapes.glow_opacity + ");", g += '<div class="imp-shape-glow" style="' + (l += "border-radius: 50% 50%;") + '"></div>'
                        }
                        e += '<div class="imp-shape ' + o + ' imp-shape-oval" id="' + y.id + '" data-shape-title="' + y.title + '" data-index=' + t + ">" + g + "</div>"
                    }
                    if ("poly" === y.type) {
                        if (y.points.length < 3) continue;
                        a += '<polygon class="imp-shape ' + o + ' imp-shape-poly" data-index=' + t + ' id="' + y.id + '" data-shape-title="' + y.title + '" points="';
                        var u = s * (y.width / 100),
                            c = n * (y.height / 100);
                        y.vs = new Array;
                        for (i = 0; i < y.points.length; i++) {
                            var m = s * (y.x / 100) + y.points[i].x / 100 * u,
                                f = n * (y.y / 100) + y.points[i].y / 100 * c;
                            a += m + "," + f + " ", y.vs.push([m, f])
                        }
                        a += '"></polygon>'
                    }
                    if ("path" === y.type) {
                        u = s * (y.width / 100), c = n * (y.height / 100);
                        a += '<path class="imp-shape ' + o + ' imp-shape-poly" data-index=' + t + ' id="' + y.id + '" data-shape-title="' + y.title + '" d="' + y.d + '"></path>'
                    }
                }
            a += "</svg>";
            var v = "";
            for (t = 0; t < this.settings.spots.length; t++)
                if (!isTrue(this.settings.layers.enable_layers) || parseInt(this.settings.spots[t].layerID, 10) === parseInt(this.settings.runtime.layerID)) {
                    var y, w = "";
                    w += "left: " + ((y = this.settings.spots[t]).x_image_background + y.default_style.background_image_offset_x) + "%;", w += "top: " + (y.y_image_background + y.default_style.background_image_offset_y) + "%;", w += "width: " + y.width_image_background + "%;", w += "height: " + y.height_image_background + "%;", "image" === y.default_style.background_type && y.default_style.background_image_url && (w += "opacity: " + y.default_style.background_image_opacity + ";", w += "transform: scale(" + y.default_style.background_image_scale + ");"), v += '<div class="imp-shape-background-image" style="' + w + '" data-id="' + y.id + '"></div>'
                }
            this.shapeContainer.html(e + a), this.imageBackgroundsContainer.html(v)
        },
        generateShapeStyleClasses: function() {
            $("style#" + this.settings.id).remove();
            var t = document.createElement("style");
            $(t).attr("id", this.settings.id);
            for (var i = "", e = 0; e < this.settings.spots.length; e++) {
                var s = this.settings.spots[e];
                i += "#" + s.id + " {", i += this.calcStyles(s.default_style, e), i += "}", "spot" === s.type && 0 < $("#" + s.id).find("path").length && (i += "#" + s.id + " path {", i += "fill: " + s.default_style.icon_fill, i += "}"), "image" === s.default_style.background_type && (i += "#imp-image-backgrounds-container-" + this.settings.id + ' [data-id="' + s.id + '"] {', i += "background-image: url(" + s.default_style.background_image_url + ");", i += "opacity:" + s.default_style.background_image_opacity + ";", i += "transform: scale(" + s.default_style.background_image_scale + ") translate(" + s.default_style.background_image_offset_x + "px, " + s.default_style.background_image_offset_y + "px);", i += "}"), i += ".imp-shape-highlighted#" + s.id + " {", i += this.calcStyles(s.mouseover_style, e), i += "}", "spot" === s.type && 0 < $("#" + s.id).find("path").length && (i += ".imp-shape-highlighted#" + s.id + " path {", i += "fill: " + s.mouseover_style.icon_fill, i += "}")
            }
            t.innerHTML = i, document.body.appendChild(t)
        },
        drawShapesMenu: function() {
            if (isTrue(this.settings.shapes_menu.enable_shapes_menu)) {
                this.shapesMenuWrap && this.shapesMenuWrap.remove(), this.shapesMenuResponsiveButton && this.shapesMenuResponsiveButton.remove(), 0 < $(".imp-ui-layers-menu-wrap").length && $(".imp-ui-layers-menu-wrap").css({
                    right: 20
                });
                var t = "",
                    i = "imp-shapes-menu-wrap-left";
                "right" === this.settings.shapes_menu.menu_position && (i = "imp-shapes-menu-wrap-right");
                var e = "";
                isTrue(this.settings.shapes_menu.enable_search) && (e = "imp-shapes-menu-wrap-with-search-box"), t += '<div class="imp-shapes-menu-wrap ' + i + " " + e + '">';
                var s = "";
                if (this.responsiveShapesMenu && (s = '<div data-imp-id="' + this.settings.id + '" class="imp-close-responsive-menu"><i class="fa fa-times" aria-hidden="true"></i></div>'), isTrue(this.settings.shapes_menu.enable_search) && (t += '<div class="imp-shapes-menu-search-box">', t += '   <div class="imp-shapes-menu-search-box-input-wrap">', t += '       <input type="text" placeholder="Search..." data-image-map-pro-search-id="' + this.settings.id + '">', t += '       <i class="fa fa-search" aria-hidden="true"></i>', t += '       <i class="fa fa-times imp-clear-search" aria-hidden="true" data-image-map-pro-id="' + this.settings.id + '"></i>', t += "   </div>", t += s, t += "</div>"), t += '   <div class="imp-shapes-menu-scroll-wrap">', isTrue(this.settings.shapes_menu.group_by_floor) && isTrue(this.settings.layers.enable_layers))
                    for (var n = 0; n < this.settings.layers.layers_list.length; n++) {
                        var a = this.settings.layers.layers_list[n];
                        t += '<div class="imp-shapes-menu-layer-title" data-imp-content="' + a.title + '">' + a.title + "</div>";
                        for (var o = 0; o < this.settings.spots.length; o++) {
                            var h = this.settings.spots[o];
                            isTrue(this.settings.shapes_menu.hide_children_of_connected_shapes) && "" != h.connected_to || parseInt(h.layerID, 10) === parseInt(a.id, 10) && (t += '<div class="imp-shapes-menu-shape-title" data-imp-image-map-name="' + this.settings.general.name + '" data-imp-highlight-shape-on-mouseover="' + h.title + '" data-imp-focus-shape-on-click="' + h.title + '" data-imp-content="' + h.title + '">' + h.title + "</div>")
                        }
                    } else
                        for (o = 0; o < this.settings.spots.length; o++) {
                            h = this.settings.spots[o];
                            isTrue(this.settings.shapes_menu.hide_children_of_connected_shapes) && "" != h.connected_to || (t += '<div class="imp-shapes-menu-shape-title" data-imp-image-map-name="' + this.settings.general.name + '" data-imp-highlight-shape-on-mouseover="' + h.title + '" data-imp-focus-shape-on-click="' + h.title + '" data-imp-content="' + h.title + '">' + h.title + "</div>")
                        }
                if (t += "   </div>", t += "</div>", isTrue(this.settings.shapes_menu.detached_menu)) $('[data-imp-detached-menu="' + this.settings.id + '"]').html(t), this.shapesMenuWrap = $('[data-imp-detached-menu="' + this.settings.id + '"]').find(".imp-shapes-menu-wrap");
                else if (this.responsiveShapesMenu) {
                    this.responsiveShapesMenuWrap || ($("body").append('<div data-imp-id="' + this.settings.id + '" class="imp-responsive-menu"></div>'), this.responsiveShapesMenuWrap = $('.imp-responsive-menu[data-imp-id="' + this.settings.id + '"]')), this.responsiveShapesMenuWrap.append(t), this.shapesMenuWrap = this.responsiveShapesMenuWrap.find(".imp-shapes-menu-wrap");
                    var r = "";
                    r += '<div data-imp-id="' + this.settings.id + '" class="imp-ui-element imp-shapes-menu-button">', r += '<i class="fa fa-bars" aria-hidden="true"></i>', r += "</div>", this.ui.append(r), this.shapesMenuResponsiveButton = this.ui.find(".imp-shapes-menu-button"), 0 < $(".imp-ui-layers-menu-wrap").length && $(".imp-ui-layers-menu-wrap").css({
                        right: 70
                    }), $("#imp-fullscreen-wrap").find(".imp-fullscreen-root-wrap").removeClass("imp-shapes-menu-left"), $("#imp-fullscreen-wrap").find(".imp-fullscreen-root-wrap").removeClass("imp-shapes-menu-right")
                } else isTrue(this.settings.runtime.is_fullscreen) ? ($("#imp-fullscreen-wrap").find(".imp-shapes-menu-wrap").remove(), $("#imp-fullscreen-wrap").append(t), 0 === $("#imp-fullscreen-wrap").find(".imp-fullscreen-root-wrap").length && this.root.wrap('<div class="imp-fullscreen-root-wrap"></div>'), this.shapesMenuWrap = $("#imp-fullscreen-wrap").find(".imp-shapes-menu-wrap"), "left" === this.settings.shapes_menu.menu_position ? $("#imp-fullscreen-wrap").find(".imp-fullscreen-root-wrap").addClass("imp-shapes-menu-left") : $("#imp-fullscreen-wrap").find(".imp-fullscreen-root-wrap").addClass("imp-shapes-menu-right")) : (0 === this.root.find(".imp-shapes-menu-outer-wrap").length && this.wrap.wrap('<div class="imp-shapes-menu-outer-wrap"></div>'), "left" === this.settings.shapes_menu.menu_position ? this.root.find(".imp-shapes-menu-outer-wrap").prepend(t) : this.root.find(".imp-shapes-menu-outer-wrap").append(t), this.shapesMenuWrap = this.root.find(".imp-shapes-menu-wrap"), isTrue(this.settings.shapes_menu.enable_search) ? this.shapesMenuWrap.height(this.wrap.height() - 73) : this.shapesMenuWrap.height(this.wrap.height()));
                this.shapesMenuWrap.find('input[data-image-map-pro-search-id="' + this.settings.id + '"]').val(this.settings.runtime.menu_search_string), this.updateMenuSearch(), this.shapesMenuWrap.find(".imp-shapes-menu-scroll-wrap").scrollTop(this.settings.runtime.menu_scroll)
            }
        },
        addTooltips: function() {
            if ("always" === this.settings.tooltips.fullscreen_tooltips || "mobile-only" === this.settings.tooltips.fullscreen_tooltips && isMobile()) {
                this.fullscreenTooltipsContainer || ($('.imp-fullscreen-tooltips-container[data-image-map-id="' + this.settings.id + '"]').remove(), $("body").prepend('<div class="imp-fullscreen-tooltips-container" data-image-map-id="' + this.settings.id + '"></div>'), this.fullscreenTooltipsContainer = $('.imp-fullscreen-tooltips-container[data-image-map-id="' + this.settings.id + '"]'));
                for (var t = "", i = 0; i < this.settings.spots.length; i++) {
                    if ("text" !== (n = this.settings.spots[i]).type) {
                        var e = "",
                            s = hexToRgb(n.tooltip_style.background_color) || {
                                r: 0,
                                b: 0,
                                g: 0
                            };
                        if (e += "padding: " + n.tooltip_style.padding + "px;", e += "background: rgba(" + s.r + ", " + s.g + ", " + s.b + ", " + n.tooltip_style.background_opacity + ");", "none" === this.settings.tooltips.tooltip_animation && (e += "opacity: 0;"), "fade" === this.settings.tooltips.tooltip_animation && (e += "opacity: 0;", e += "transition-property: opacity;-moz-transition-property: opacity;-webkit-transition-property: opacity;"), "grow" === this.settings.tooltips.tooltip_animation && (e += "transform: scale(0, 0);-moz-transform: scale(0, 0);-webkit-transform: scale(0, 0);", e += "transition-property: transform;-moz-transition-property: -moz-transform;-webkit-transition-property: -webkit-transform;", e += "transform-origin: 50% 50%;-moz-transform-origin: 50% 50%;-webkit-transform-origin: 50% 50%;"), t += '<div class="imp-fullscreen-tooltip" style="' + e + '" data-index="' + i + '">', t += '   <div class="imp-tooltip-close-button" data-index="' + i + '"><i class="fa fa-times" aria-hidden="true"></i></div>', "plain-text" === n.tooltip_content.content_type) {
                            e = "";
                            t += '<div class="imp-tooltip-plain-text" style="' + (e += "color: " + n.tooltip_content.plain_text_color + ";") + '">' + n.tooltip_content.plain_text + "</div>"
                        } else n.tooltip_content.squares_json ? t += $.squaresRendererRenderObject(n.tooltip_content.squares_json) : t += $.squaresRendererRenderObject(n.tooltip_content.squares_settings);
                        t += "</div>"
                    }
                }
                this.fullscreenTooltipsContainer.html(t)
            } else {
                for (t = "", i = 0; i < this.settings.spots.length; i++) {
                    var n;
                    if ("text" !== (n = this.settings.spots[i]).type) {
                        e = "", s = hexToRgb(n.tooltip_style.background_color) || {
                            r: 0,
                            b: 0,
                            g: 0
                        };
                        e += "border-radius: " + n.tooltip_style.border_radius + "px;", e += "padding: " + n.tooltip_style.padding + "px;", e += "background: rgba(" + s.r + ", " + s.g + ", " + s.b + ", " + n.tooltip_style.background_opacity + ");", "none" === this.settings.tooltips.tooltip_animation && (e += "opacity: 0;", e += "transition-property: transform; -moz-transition-property: -moz-transform; -webkit-transition-property: -webkit-transform;"), "fade" === this.settings.tooltips.tooltip_animation && (e += "opacity: 0;", e += "transition-property: transform, opacity; -moz-transition-property: -moz-transform, opacity;-webkit-transition-property: -webkit-transform, opacity;"), "grow" === this.settings.tooltips.tooltip_animation && (e += "transform: scale(0, 0);-moz-transform: scale(0, 0);-webkit-transform: scale(0, 0);", e += "transition-property: transform; -moz-transition-property: -moz-transform; -webkit-transition-property: -webkit-transform;", "top" === n.tooltip_style.position && (e += "transform-origin: 50% 100%;-moz-transform-origin: 50% 100%;-webkit-transform-origin: 50% 100%;"), "bottom" === n.tooltip_style.position && (e += "transform-origin: 50% 0%;-moz-transform-origin: 50% 0%;-webkit-transform-origin: 50% 0%;"), "left" === n.tooltip_style.position && (e += "transform-origin: 100% 50%;-moz-transform-origin: 100% 50%;-webkit-transform-origin: 100% 50%;"), "right" === n.tooltip_style.position && (e += "transform-origin: 0% 50%;-moz-transform-origin: 0% 50%;-webkit-transform-origin: 0% 50%;")), t += '<div class="imp-tooltip" style="' + e + '" data-index="' + i + '">', "top" === n.tooltip_style.position && (t += '   <div class="hs-arrow hs-arrow-bottom" style="border-top-color: rgba(' + s.r + ", " + s.g + ", " + s.b + ", " + n.tooltip_style.background_opacity + ');"></div>'), "bottom" === n.tooltip_style.position && (t += '   <div class="hs-arrow hs-arrow-top" style="border-bottom-color: rgba(' + s.r + ", " + s.g + ", " + s.b + ", " + n.tooltip_style.background_opacity + ');"></div>'), "left" === n.tooltip_style.position && (t += '   <div class="hs-arrow hs-arrow-right" style="border-left-color: rgba(' + s.r + ", " + s.g + ", " + s.b + ", " + n.tooltip_style.background_opacity + ');"></div>'), "right" === n.tooltip_style.position && (t += '   <div class="hs-arrow hs-arrow-left" style="border-right-color: rgba(' + s.r + ", " + s.g + ", " + s.b + ", " + n.tooltip_style.background_opacity + ');"></div>');
                        e = "";
                        e += "color: " + n.tooltip_content.plain_text_color + ";";
                        var a = {
                            containers: [{
                                id: "sq-container-403761",
                                settings: {
                                    elements: [{
                                        settings: {
                                            name: "Paragraph",
                                            iconClass: "fa fa-paragraph"
                                        },
                                        options: {
                                            text: {
                                                text: n.title
                                            }
                                        }
                                    }]
                                }
                            }]
                        };
                        t += '<div class="imp-tooltip-title" style="' + e + '">' + $.squaresRendererRenderObject(a) + "</div>", "plain-text" === n.tooltip_content.content_type ? t += '<div class="imp-tooltip-plain-text" style="' + e + '">' + n.tooltip_content.plain_text + "</div>" : n.tooltip_content.squares_json ? t += $.squaresRendererRenderObject(n.tooltip_content.squares_json) : t += $.squaresRendererRenderObject(n.tooltip_content.squares_settings), t += "</div>"
                    }
                }
                this.tooltipsContainer.prepend(t), isTrue(this.settings.tooltips.sticky_tooltips) && this.tooltipsContainer.addClass("imp-sticky-tooltips")
            }
        },
        initFullscreen: function() {
            if (isTrue(this.settings.fullscreen.enable_fullscreen_mode)) {
                var t = "";
                t += "background: " + this.settings.fullscreen.fullscreen_button_color + "; ", t += "color: " + this.settings.fullscreen.fullscreen_button_text_color + "; ";
                var i = '<i class="fa fa-arrows-alt" aria-hidden="true"></i>';
                isTrue(this.settings.runtime.is_fullscreen) && (i = '<i class="fa fa-times" aria-hidden="true"></i>');
                var e = "Go Fullscreen";
                isTrue(this.settings.runtime.is_fullscreen) && (e = "Close Fullscreen");
                var s = "";
                "icon" === this.settings.fullscreen.fullscreen_button_type && (s += i), "text" === this.settings.fullscreen.fullscreen_button_type && (s += e), "icon_and_text" === this.settings.fullscreen.fullscreen_button_type && (s += i + " " + e);
                var n = "";
                "icon" === this.settings.fullscreen.fullscreen_button_type && (n += "imp-fullscreen-button-icon-only");
                var a = "";
                a += '<div data-imp-id="' + this.settings.id + '" style="' + t + '" class="imp-ui-element ' + n + " imp-fullscreen-button imp-fullscreen-button-position-" + this.settings.fullscreen.fullscreen_button_position + '">', a += s, a += "</div>", this.ui.append(a), isTrue(this.settings.runtime.is_fullscreen) && ($(window).scrollTop(0), fullscreenMap = this);
                var o = this.ui.find(".imp-fullscreen-button");
                1 !== parseInt(this.settings.fullscreen.fullscreen_button_position, 10) && 4 !== parseInt(this.settings.fullscreen.fullscreen_button_position, 10) || o.css({
                    "margin-left": -o.outerWidth() / 2
                }), isTrue(this.settings.fullscreen.start_in_fullscreen_mode) && 0 === this.settings.runtime.is_fullscreen && (this.settings.fullscreen.start_in_fullscreen_mode = 0, this.toggleFullscreen())
            }
        },
        initNavigator: function() {
            isTrue(this.settings.zooming.enable_zooming) && isTrue(this.settings.zooming.enable_navigator) && (this.uiNavigatorRoot = this.ui.find(".imp-ui-navigator-root"), this.uiNavigatorImage = this.ui.find(".imp-ui-navigator-window-image"), this.adjustNavigatorSize())
        },
        initLayers: function() {
            if (isTrue(this.settings.layers.enable_layers)) {
                for (var t = !1, i = 0; i < this.settings.layers.layers_list.length; i++) parseInt(this.settings.layers.layers_list[i].id, 10) === parseInt(this.settings.runtime.layerID, 10) && (t = !0);
                t || (this.settings.runtime.layerID = this.settings.layers.layers_list[0].id), this.wrap.find(".imp-ui-layers-select").val(this.settings.runtime.layerID)
            }
        },
        initZoom: function() {
            isTrue(this.settings.zooming.enable_zooming) && (this.zoom = 1, this.targetZoom = 1, this.targetPanX = 0, this.actualPanX = 0, this.targetPanY = 0, this.actualPanY = 0, this.initialPanX = 0, this.initialPanY = 0, this.panDeltaY = 0, isTrue(this.settings.zooming.limit_max_zoom_to_image_size) ? this.maxZoomLevel = this.settings.general.naturalWidth / this.wrap.width() : this.maxZoomLevel = this.settings.zooming.max_zoom)
        },
        adjustNavigatorSize: function() {
            if (isTrue(this.settings.zooming.enable_zooming) && isTrue(this.settings.zooming.enable_navigator))
                if (isTrue(this.settings.runtime.is_fullscreen)) {
                    this.navigatorRatio = this.uiNavigatorRoot.width() / this.settings.general.width;
                    var t = this.settings.general.naturalWidth / this.settings.general.naturalHeight,
                        i = window.innerWidth / window.innerHeight,
                        e = 0,
                        s = 0;
                    t < i ? (s = t < 1 ? (e = 150 * t, 150) : (e = 150) / t, this.uiNavigatorWindowWidth = s * i, this.uiNavigatorWindowHeight = s, this.navigatorMarginX = e / 2 - this.uiNavigatorWindowWidth / 2, this.navigatorMarginY = 0) : (s = t < 1 ? (e = 150 * t, 150) : (e = 150) / t, this.uiNavigatorWindowWidth = e, this.uiNavigatorWindowHeight = e / i, this.navigatorMarginX = 0, this.navigatorMarginY = s / 2 - this.uiNavigatorWindowHeight / 2)
                } else this.navigatorRatio = this.uiNavigatorRoot.width() / this.wrap.width(), this.uiNavigatorWindowWidth = this.uiNavigatorRoot.width(), this.uiNavigatorWindowHeight = this.uiNavigatorRoot.height()
        },
        measureTooltipSize: function(t) {
            if (!("always" === this.settings.tooltips.fullscreen_tooltips || "mobile-only" === this.settings.tooltips.fullscreen_tooltips && isMobile())) {
                var i = this.settings.spots[t],
                    e = this.tooltipsContainer.find('.imp-tooltip[data-index="' + t + '"]');
                isTrue(i.tooltip_style.auto_width) || e.css({
                    width: i.tooltip_style.width
                });
                e[0].getBoundingClientRect();
                e.data("imp-measured-width", e.outerWidth()), e.data("imp-measured-height", e.outerHeight())
            }
        },
        animateShapesLoop: function() {
            if ("none" !== this.settings.shapes.pageload_animation) {
                this.didAnimateShapesOnPageload = !0;
                for (var t = 750 / this.settings.spots.length, i = shuffle(this.settings.spots.slice()), e = 0; e < i.length; e++) this.animateShape(i[e], t * e)
            }
        },
        animateShape: function(t, i) {
            var e = this,
                s = $("#" + t.id),
                n = 0;
            setTimeout(function() {
                if ("fade" === e.settings.shapes.pageload_animation && s.css({
                        opacity: t.default_style.opacity
                    }), "grow" === e.settings.shapes.pageload_animation && s.css({
                        transform: "scale(1, 1)",
                        "-moz-transform": "scale(1, 1)",
                        "-webkit-transform": "scale(1, 1)"
                    }), "fall-down" === e.settings.shapes.pageload_animation && (s.css({
                        opacity: t.default_style.opacity
                    }), "spot" === t.type)) {
                    s.css({
                            "transition-property": "opacity"
                        }),
                        function i() {
                            requestAnimationFrame(function() {
                                var t = easeOutBounce(undefined, n += .01666, -200, 200, 1);
                                s.css({
                                    transform: "translateY(" + t + "px)"
                                }), n <= 1 && i()
                            })
                        }()
                }
            }, i)
        },
        events: function() {
            var s = this;
            $(document).off("mousedown." + this.settings.id), $(document).on("mousedown." + this.settings.id, function(t) {
                touch || s.handleEventStart(t)
            }), $(document).off("mousemove." + this.settings.id), $(document).on("mousemove." + this.settings.id, function(t) {
                touch || s.handleEventMove(t)
            }), $(document).off("mouseup." + this.settings.id), $(document).on("mouseup." + this.settings.id, function(t) {
                touch || s.handleEventEnd(t)
            }), $(document).off("touchstart." + this.settings.id), $(document).on("touchstart." + this.settings.id, function(t) {
                touch || s.handleEventStart(t)
            }), $(document).off("touchmove." + this.settings.id), $(document).on("touchmove." + this.settings.id, function(t) {
                if (!touch) return s.handleEventMove(t), (!s.panning || 0 == s.panDeltaY) && (!s.pinching && void 0)
            }), $(document).off("touchend." + this.settings.id), $(document).on("touchend." + this.settings.id, function(t) {
                touch || s.handleEventEnd(t)
            }), this.wrap.off("mousewheel"), this.wrap.on("mousewheel", function(t) {
                if (!touch && isTrue(s.settings.zooming.enable_zooming)) {
                    if (isTrue(s.settings.zooming.hold_ctrl_to_zoom)) return s.mac && s.cmdKeyDown || !s.mac && s.ctrlKeyDown ? (s.handleEventEnd(t), !1) : (s.displayScrollMessage(), !0);
                    if (s.handleEventEnd(t), t.deltaY < 0 && 1 < s.targetZoom || 0 < t.deltaY && s.targetZoom < s.maxZoomLevel) return !1
                }
            }), $(document).off("keydown." + this.settings.id), $(document).on("keydown." + this.settings.id, function(t) {
                s.handleKeyDownEvent(t)
            }), $(document).off("keyup." + this.settings.id), $(document).on("keyup." + this.settings.id, function(t) {
                s.handleKeyUpEvent(t)
            }), $(document).off("click." + this.settings.id, ".imp-tooltip-close-button"), $(document).on("click." + this.settings.id, ".imp-tooltip-close-button", function() {
                s.hideAllTooltips()
            }), $(document).off("change." + this.settings.id, ".imp-ui-layers-select"), $(document).on("change." + this.settings.id, ".imp-ui-layers-select", function() {
                var t = s.wrap.find(".imp-ui-layers-select").val();
                s.switchLayer(t)
            }), $(document).off("keyup." + this.settings.id, '[data-image-map-pro-search-id="' + this.settings.id + '"]'), $(document).on("keyup." + this.settings.id, '[data-image-map-pro-search-id="' + this.settings.id + '"]', function(t) {
                s.updateMenuSearch()
            }), $(document).off("change." + this.settings.id, '[data-image-map-pro-search-id="' + this.settings.id + '"]'), $(document).on("change." + this.settings.id, '[data-image-map-pro-search-id="' + this.settings.id + '"]', function(t) {
                s.updateMenuSearch()
            }), $(window).off("resize." + this.settings.general.id + this.settings.runtime.is_fullscreen), $(window).on("resize." + this.settings.general.id + this.settings.runtime.is_fullscreen, function() {
                if (s.wrapWidth = s.wrap.width(), s.wrapHeight = s.wrap.height(), s.wrapOffsetLeft = s.wrap.offset().left, s.wrapOffsetTop = s.wrap.offset().top, 0 < s.openedTooltips.length)
                    for (var t = 0; t < s.openedTooltips.length; t++) s.updateTooltipPosition(s.openedTooltips[t]);
                if (s.resetZoomAndPan(), s.adjustNavigatorSize(), isTrue(s.settings.shapes_menu.enable_shapes_menu)) {
                    var i = s.responsiveShapesMenu,
                        e = s.root.width();
                    s.settings.runtime.is_fullscreen && (e = $(window).width()), isMobile() || e / 3 < 240 ? s.responsiveShapesMenu = !0 : s.responsiveShapesMenu = !1, i != s.responsiveShapesMenu && s.drawShapesMenu(), !isTrue(s.settings.shapes_menu.enable_shapes_menu) || isTrue(s.settings.shapes_menu.detached_menu) || s.settings.runtime.is_fullscreen || s.responsiveShapesMenu || (isTrue(s.settings.shapes_menu.enable_search) ? s.shapesMenuWrap.height(s.wrap.height() - 73) : s.shapesMenuWrap.height(s.wrap.height()))
                }
                fullscreenMap && fullscreenMap.adjustSize(), "" === s.settings.image.url && (isTrue(s.settings.general.responsive) ? (s.wrap.css({
                    width: "100%",
                    height: s.settings.general.height,
                    "max-width": s.settings.general.width,
                    "max-height": s.settings.general.height
                }), s.wrap.css({
                    height: s.wrap.width() * (s.settings.general.height / s.settings.general.width)
                })) : s.wrap.css({
                    width: s.settings.general.width,
                    height: s.settings.general.height
                }))
            })
        },
        disableEvents: function() {
            $(document).off("mousedown." + this.settings.id), $(document).off("mousemove." + this.settings.id), $(document).off("mouseup." + this.settings.id), $(document).off("touchstart." + this.settings.id), $(document).off("touchmove." + this.settings.id), $(document).off("touchend." + this.settings.id), this.wrap.off("mousewheel"), $(document).off("keydown." + this.settings.id), $(document).off("keyup." + this.settings.id), $(document).off("click." + this.settings.id, ".imp-tooltip-close-button"), $(document).off("change." + this.settings.id, ".imp-ui-layers-select"), $(document).off("keyup." + this.settings.id, '[data-image-map-pro-search-id="' + this.settings.id + '"]'), $(document).off("change." + this.settings.id, '[data-image-map-pro-search-id="' + this.settings.id + '"]'), $(window).off("resize." + this.settings.general.id + this.settings.runtime.is_fullscreen)
        },
        isEventOnHTMLAPIElement: function(t) {
            return !!$(t.target).data("imp-highlight-shape-on-mouseover") || (!!$(t.target).data("imp-highlight-shape-on-click") || (!!$(t.target).data("imp-unhighlight-shape-on-mouseover") || (!!$(t.target).data("imp-unhighlight-shape-on-click") || (!!$(t.target).data("imp-open-tooltip-on-mouseover") || (!!$(t.target).data("imp-open-tooltip-on-click") || (!!$(t.target).data("imp-close-tooltip-on-mouseover") || (!!$(t.target).data("imp-close-tooltip-on-click") || (!!$(t.target).data("imp-trigger-shape-on-mouseover") || (!!$(t.target).data("imp-trigger-shape-on-click") || (!!$(t.target).data("imp-untrigger-shape-on-mouseover") || (!!$(t.target).data("imp-untrigger-shape-on-click") || (!!$(t.target).data("imp-focus-shape-on-click") || !!$(t.target).data("imp-focus-shape-on-mouseover")))))))))))))
        },
        handleEventStart: function(t) {
            this.targetZoom = this.zoom, this.targetPanX = this.actualPanX, this.targetPanY = this.actualPanY;
            var i = this.getEventCoordinates(t);
            if (!this.isEventOnHTMLAPIElement(t) && isTrue(this.settings.zooming.enable_zooming)) {
                if (0 < $(t.target).closest(".imp-ui-navigator-root").length && $(t.target).closest(".imp-ui-navigator-root").data("imp-id") === parseInt(this.settings.id)) return this.ix = i.x, this.iy = i.y, void(this.panningOnNavigator = !0);
                if (t.originalEvent.touches && 1 < t.originalEvent.touches.length) return this.pinchInitial[0] = {
                    x: t.originalEvent.touches[0].pageX,
                    y: t.originalEvent.touches[0].pageY
                }, this.pinchInitial[1] = {
                    x: t.originalEvent.touches[1].pageX,
                    y: t.originalEvent.touches[1].pageY
                }, this.initialPanX = this.actualPanX, this.initialPanY = this.actualPanY, this.ix = (t.originalEvent.touches[0].pageX + t.originalEvent.touches[1].pageX) / 2, this.iy = (t.originalEvent.touches[0].pageY + t.originalEvent.touches[1].pageY) / 2, this.lastX = this.ix, this.lastY = this.iy, this.pinchInitialDistance = Math.sqrt(Math.pow(this.pinchInitial[1].x - this.pinchInitial[0].x, 2) + Math.pow(this.pinchInitial[1].y - this.pinchInitial[0].y, 2)), this.pinchInitialZoom = this.zoom, void(this.pinching = !0);
                !this.panning && 0 === $(t.target).closest(".imp-ui").length && i.x > this.wrapOffsetLeft && i.x < this.wrapOffsetLeft + this.wrapWidth && i.y > this.wrapOffsetTop && i.y < this.wrapOffsetTop + this.wrapHeight && (this.ix = i.x, this.iy = i.y, this.initialPanX = this.actualPanX, this.initialPanY = this.actualPanY, this.panning = !0)
            }
        },
        handleEventMove: function(t) {
            if (1e3 < Date.now() - this.lastWrapRecalc && (this.lastWrapRecalc = Date.now(), this.wrapWidth = this.wrap.width(), this.wrapHeight = this.wrap.height(), this.wrapOffsetLeft = this.wrap.offset().left, this.wrapOffsetTop = this.wrap.offset().top), !this.fullscreenTooltipVisible) {
                var i = parseInt(this.matchShapeToEvent(t)),
                    e = this.getEventCoordinates(t),
                    s = !1;
                if (!this.isPointInsideVisibleTooltip(t) || isTrue(this.settings.tooltips.sticky_tooltips)) {
                    var n = !1;
                    if ((e.x < this.wrapOffsetLeft || e.x > this.wrapOffsetLeft + this.wrapWidth || e.y < this.wrapOffsetTop || e.y > this.wrapOffsetTop + this.wrapHeight) && (n = !0), s || !n) {
                        if (isTrue(this.settings.zooming.enable_zooming)) {
                            if (this.panningOnNavigator) {
                                var a = (e.x - this.uiNavigatorRoot.offset().left) / this.navigatorRatio * this.targetZoom,
                                    o = (e.y - this.uiNavigatorRoot.offset().top) / this.navigatorRatio * this.targetZoom;
                                this.panTo(a, o)
                            }
                            if (this.pinching) return this.pinch(t), void(this.didPan = !0);
                            if (this.panning) {
                                e = this.getEventCoordinates(t);
                                return this.pan(e.x, e.y), void(this.didPan = !0)
                            }
                        }
                        if (1 === $(t.target).closest(".imp-ui").length) return this.unhighlightAllShapes(), void("mouseover" === this.settings.tooltips.show_tooltips && this.hideAllTooltips()); - 1 !== i && (isTrue(this.settings.shapes.glowing_shapes) && isTrue(this.settings.shapes.stop_glowing_on_mouseover) && this.wrap.addClass("imp-no-glow"), this.didPan || (this.isShapeHighlighted(i) || (this.unhighlightAllShapes(), "mouseover" === this.settings.tooltips.show_tooltips && this.hideAllTooltips(), isTrue(this.settings.tooltips.show_title_on_mouseover) && "click" === this.settings.tooltips.show_tooltips && this.hideAllTitles(), this.highlightShape(i, !0)), isTrue(this.settings.tooltips.enable_tooltips) && ("mouseover" === this.settings.tooltips.show_tooltips && isTrue(this.settings.spots[i].tooltip.enable_tooltip) && this.showTooltip(i), "click" === this.settings.tooltips.show_tooltips && isTrue(this.settings.tooltips.show_title_on_mouseover) && isTrue(this.settings.spots[i].tooltip.enable_tooltip) && this.showTooltipTitle(i), 0 < this.openedTooltips.length && isTrue(this.settings.tooltips.sticky_tooltips) && "mouseover" === this.settings.tooltips.show_tooltips && this.updateTooltipPosition(this.openedTooltips[this.openedTooltips.length - 1], t), isTrue(this.settings.tooltips.show_title_on_mouseover) && "click" === this.settings.tooltips.show_tooltips && -1 === this.openedTooltips.indexOf(i) && this.updateTooltipPosition(i, t)))), $(t.target).is("video") || 0 < $(t.target).closest("video").length || -1 === i && (this.unhighlightAllShapes(), isTrue(this.settings.tooltips.show_title_on_mouseover) && "click" === this.settings.tooltips.show_tooltips && this.hideAllTitles(), "mouseover" === this.settings.tooltips.show_tooltips && 0 < this.openedTooltips.length && this.hideAllTooltips())
                    } else this.hideAllTooltips()
                } else s = !0
            }
        },
        handleEventEnd: function(t) {
            if (!this.isEventOnHTMLAPIElement(t)) {
                if (isTrue(this.settings.zooming.enable_zooming)) {
                    if (this.panning && (this.panning = !1, this.tooltipsContainer.removeClass("imp-no-transition")), this.pinching && (this.pinching = !1), "mousewheel" === t.type) return this.hideAllTooltips(), this.unhighlightAllShapes(), 0 < t.deltaY && this.zoomIn(t), void(t.deltaY < 0 && this.zoomOut(t));
                    if (this.panningOnNavigator && 0 < $(t.target).closest(".imp-ui-navigator-root").length && parseInt($(t.target).closest(".imp-ui-navigator-root").data("imp-id")) === parseInt(this.settings.id)) {
                        this.panningOnNavigator = !1;
                        var i = ((o = this.getEventCoordinates(t)).x - this.uiNavigatorRoot.offset().left) / this.navigatorRatio * this.targetZoom,
                            e = (o.y - this.uiNavigatorRoot.offset().top) / this.navigatorRatio * this.targetZoom;
                        return void this.panTo(i, e)
                    }
                    if (this.panningOnNavigator && (this.panningOnNavigator = !1), 0 < $(t.target).closest(".imp-ui-zoom-button").length && parseInt($(t.target).closest(".imp-ui-zoom-button").data("imp-id")) === parseInt(this.settings.id)) return void(0 < $(t.target).closest(".imp-ui-zoom-button-zoom-in").length ? this.zoomIn() : this.zoomOut())
                }
                if (0 < $(t.target).closest(".imp-fullscreen-button").length && parseInt($(t.target).closest(".imp-fullscreen-button").data("imp-id")) === parseInt(this.settings.id) && this.toggleFullscreen(), 0 < $(t.target).closest(".imp-shapes-menu-button").length && parseInt($(t.target).closest(".imp-shapes-menu-button").data("imp-id")) === parseInt(this.settings.id) && this.showResponsiveShapesMenu(), 0 < $(t.target).closest(".imp-close-responsive-menu").length && parseInt($(t.target).closest(".imp-close-responsive-menu").data("imp-id")) === parseInt(this.settings.id) && this.hideResponsiveShapesMenu(), 0 < $(t.target).closest(".imp-ui-layer-switch-up").length && parseInt($(t.target).closest(".imp-ui-layer-switch-up").data("imp-id")) === parseInt(this.settings.id))
                    for (var s = 0; s < this.settings.layers.layers_list.length; s++)
                        if (parseInt(this.settings.layers.layers_list[s].id, 10) === parseInt(this.settings.runtime.layerID, 10) && 0 < s) {
                            var n = this.settings.layers.layers_list[s - 1].id;
                            this.switchLayer(n);
                            break
                        }
                if (0 < $(t.target).closest(".imp-ui-layer-switch-down").length && parseInt($(t.target).closest(".imp-ui-layer-switch-down").data("imp-id")) === parseInt(this.settings.id))
                    for (s = 0; s < this.settings.layers.layers_list.length; s++)
                        if (parseInt(this.settings.layers.layers_list[s].id, 10) === parseInt(this.settings.runtime.layerID, 10) && s < this.settings.layers.layers_list.length - 1) {
                            n = this.settings.layers.layers_list[s + 1].id;
                            this.switchLayer(n);
                            break
                        }
                if ($(t.target).hasClass("imp-clear-search") && $(t.target).data("image-map-pro-id") === parseInt(this.settings.id) && ($('input[data-image-map-pro-search-id="' + this.settings.id + '"]').val(""), this.updateMenuSearch()), 0 == $(t.target).closest(".imp-tooltip").length && !this.fullscreenTooltipVisible) {
                    if (1 === $(t.target).closest(".imp-ui").length) return this.unhighlightAllShapes(), void("mouseover" === this.settings.tooltips.show_tooltips && this.hideAllTooltips());
                    var a = this.getEventRelativeCoordinates(t),
                        o = (s = this.matchShapeToCoords(a), this.getEventCoordinates(t)); - 1 != s && (o.x > this.wrapOffsetLeft && o.x < this.wrapOffsetLeft + this.wrapWidth && o.y > this.wrapOffsetTop && o.y < this.wrapOffsetTop + this.wrapHeight || this.settings.runtime.is_fullscreen) && (this.didPan || (this.isShapeHighlighted(s) || (this.unhighlightAllShapes(), "mouseover" === this.settings.tooltips.show_tooltips && this.hideAllTooltips(), this.highlightShape(s, !0)), isTrue(this.settings.tooltips.enable_tooltips) && isTrue(this.settings.spots[s].tooltip.enable_tooltip) && this.showTooltip(s), 0 < this.openedTooltips.length && isTrue(this.settings.tooltips.sticky_tooltips) && "mouseover" === this.settings.tooltips.show_tooltips && this.updateTooltipPosition(this.openedTooltips[this.openedTooltips.length - 1], t), isTrue(this.settings.zooming.enable_zooming) && this.focusShape(s)), this.performClickAction(s)), (-1 === s || (o.x < this.wrapOffsetLeft || o.x > this.wrapOffsetLeft + this.wrapWidth || o.y < this.wrapOffsetTop || o.y > this.wrapOffsetTop + this.wrapHeight) && !this.settings.runtime.is_fullscreen) && (this.hideAllTooltips(), this.didPan || this.unhighlightAllShapes()), t.originalEvent.touches && 0 === t.originalEvent.touches.length && (this.didPan = !1), t.originalEvent.touches || (this.didPan = !1)
                }
            }
        },
        handleKeyDownEvent: function(t) {
            t.ctrlKey && (this.ctrlKeyDown = !0), t.metaKey && (this.cmdKeyDown = !0)
        },
        handleKeyUpEvent: function(t) {
            this.ctrlKeyDown = !1, this.cmdKeyDown = !1
        },
        getEventRelativeCoordinates: function(t) {
            var i, e;
            if ("touchstart" === t.type || "touchmove" === t.type || "touchend" === t.type || "touchcancel" === t.type) {
                var s = t.originalEvent.touches[0] || t.originalEvent.changedTouches[0];
                i = s.pageX, e = s.pageY
            } else "mousedown" !== t.type && "mouseup" !== t.type && "mousemove" !== t.type && "mouseover" !== t.type && "mouseout" !== t.type && "mouseenter" !== t.type && "mouseleave" !== t.type || (i = t.pageX, e = t.pageY);
            return i -= this.zoomWrap.offset().left, e -= this.zoomWrap.offset().top, {
                x: i = i / (this.wrap.width() * this.zoom) * 100,
                y: e = e / (this.wrap.height() * this.zoom) * 100
            }
        },
        getEventCoordinates: function(t) {
            var i, e;
            if ("touchstart" === t.type || "touchmove" === t.type || "touchend" === t.type || "touchcancel" === t.type) {
                var s = t.originalEvent.touches[0] || t.originalEvent.changedTouches[0];
                i = s.pageX, e = s.pageY
            } else "mousedown" !== t.type && "mouseup" !== t.type && "mousemove" !== t.type && "mouseover" !== t.type && "mouseout" !== t.type && "mouseenter" !== t.type && "mouseleave" !== t.type || (i = t.pageX, e = t.pageY);
            return {
                x: i,
                y: e
            }
        },
        matchShapeToCoords: function(t) {
            for (var i = this.settings.spots.length - 1; 0 <= i; i--)
                if (!isTrue(this.settings.layers.enable_layers) || parseInt(this.settings.spots[i].layerID, 10) === parseInt(this.settings.runtime.layerID, 10)) {
                    var e = this.settings.spots[i];
                    if (!isTrue(e.static)) {
                        if ("poly" === e.type || "path" === e.type) {
                            var s = t.x / 100 * this.zoomWrap.width(),
                                n = t.y / 100 * this.zoomWrap.height();
                            if (isPointInsidePolygon(s = s * this.settings.general.naturalWidth / this.zoomWrap.width(), n = n * this.settings.general.naturalHeight / this.zoomWrap.height(), e.vs)) return i
                        }
                        if ("spot" === e.type) {
                            var a = e.width < 44 ? 44 : e.width,
                                o = e.height < 44 ? 44 : e.height;
                            a /= this.zoom, o /= this.zoom;
                            s = t.x / 100 * this.wrap.width(), n = t.y / 100 * this.wrap.height();
                            var h = e.x / 100 * this.wrap.width() - a / 2,
                                r = e.y / 100 * this.wrap.height() - o / 2,
                                p = a,
                                l = o;
                            if (isTrue(e.default_style.icon_is_pin) && isTrue(e.default_style.use_icon) && (r -= o / 2, e.height < 44 && (r += e.height / 2)), isPointInsideRect(s, n, h, r, p, l)) return i
                        }
                        if ("rect" === e.type && isPointInsideRect(t.x, t.y, e.x, e.y, e.width, e.height)) return i;
                        if ("oval" === e.type)
                            if (isPointInsideEllipse(s = t.x, n = t.y, e.x + e.width / 2, e.y + e.height / 2, h = e.width / 2, r = e.height / 2)) return i;
                        e.type
                    }
                }
            return -1
        },
        matchShapeToEvent: function(t) {
            return $(t.target).hasClass("imp-shape") || 0 < $(t.target).closest(".imp-shape").length ? $(t.target).data("index") || $(t.target).closest(".imp-shape").data("index") : -1
        },
        isPointInsideVisibleTooltip: function(t) {
            for (var i = 0; i < this.openedTooltips.length; i++) {
                var e = this.getEventCoordinates(t),
                    s = this.tooltipsContainer.find('.imp-tooltip[data-index="' + this.openedTooltips[i] + '"]'),
                    n = this.openedTooltips[i];
                e.x = (e.x - this.wrap.offset().left) / this.wrap.width() * 100, e.y = (e.y - this.wrap.offset().top) / this.wrap.height() * 100;
                var a = 0;
                a = "spot" === this.settings.spots[n].type ? this.settings.spots[n].tooltip_style.buffer : this.settings.spots[n].tooltip_style.buffer * this.zoom;
                var o = s.outerWidth(),
                    h = s.outerHeight(),
                    r = s.offset().left - this.wrap.offset().left,
                    p = s.offset().top - this.wrap.offset().top;
                r = r / this.wrap.width() * 100, p = p / this.wrap.height() * 100, o = o / this.wrap.width() * 100, h = h / this.wrap.height() * 100;
                var l = [];
                if ("left" === this.settings.spots[n].tooltip_style.position) l = [
                    [r, p],
                    [r + o, p],
                    [r + o + (a = a / this.wrap.width() * 100), p + h - h / 3 - h / 3],
                    [r + o + a, p + h - h / 3],
                    [r + o, p + h],
                    [r, p + h]
                ];
                if ("right" === this.settings.spots[n].tooltip_style.position) l = [
                    [r, p],
                    [r + o, p],
                    [r + o, p + h],
                    [r, p + h],
                    [r - (a = a / this.wrap.width() * 100), p + h - h / 3],
                    [r - a, p + h - h / 3 - h / 3]
                ];
                if ("top" === this.settings.spots[n].tooltip_style.position) l = [
                    [r, p],
                    [r + o, p],
                    [r + o, p + h],
                    [r + o - o / 3, p + h + (a = a / this.wrap.height() * 100)],
                    [r + o - o / 3 - o / 3, p + h + a],
                    [r, p + h]
                ];
                if ("bottom" === this.settings.spots[n].tooltip_style.position) l = [
                    [r, p],
                    [r + o - o / 3 - o / 3, p - (a = a / this.wrap.height() * 100)],
                    [r + o - o / 3, p - a],
                    [r + o, p],
                    [r + o, p + h],
                    [r, p + h]
                ];
                return isPointInsidePolygon(e.x, e.y, l) ? !0 : !1
            }
        },
        getIndexOfShapeWithID: function(t) {
            for (var i = 0; i < this.settings.spots.length; i++)
                if (this.settings.spots[i].id === t) return i
        },
        calcStyles: function(t, i) {
            var e = this.settings.spots[i],
                s = "";
            if ("spot" === e.type) {
                s += "left: " + e.x + "%;", s += "top: " + e.y + "%;", s += "width: " + e.width + "px;", s += "height: " + e.height + "px;", this.didAnimateShapesOnPageload || ("fall-down" === this.settings.shapes.pageload_animation ? (s += "opacity: 0;", s += "transform: translateY(-500px);") : "grow" === this.settings.shapes.pageload_animation ? (s += "opacity: " + t.opacity + ";", s += "transform: scale(0);") : ("fade" === this.settings.shapes.pageload_animation ? s += "opacity: 0;" : s += "opacity: " + t.opacity + ";", s += "transform: scale(" + 1 / this.zoom + ");"));
                var n = -e.width / 2,
                    a = -e.height / 2;
                if (!isTrue(e.default_style.use_icon)) {
                    var o = hexToRgb(t.background_color) || {
                            r: 0,
                            b: 0,
                            g: 0
                        },
                        h = hexToRgb(t.border_color) || {
                            r: 0,
                            b: 0,
                            g: 0
                        };
                    s += "border-radius: " + t.border_radius + "px;", s += "background: rgba(" + o.r + ", " + o.g + ", " + o.b + ", " + t.background_opacity + ");", s += "border-width: " + t.border_width + "px;", s += "border-style: " + t.border_style + ";", s += "border-color: rgba(" + h.r + ", " + h.g + ", " + h.b + ", " + t.border_opacity + ");"
                }
                if (isTrue(e.default_style.use_icon) && (isTrue(e.default_style.icon_is_pin) && (n = -e.height), "library" === e.default_style.icon_type)) {
                    var r = hexToRgb(t.icon_fill) || {
                        r: 0,
                        b: 0,
                        g: 0
                    };
                    s += "color: rgba(" + r.r + ", " + r.g + ", " + r.b + ", " + t.opacity + ");"
                }
                s += "margin-left: " + a + "px;", s += "margin-top: " + n + "px;"
            }
            if ("text" === e.type) {
                var p = hexToRgb(e.text.text_color);
                s += "left: " + e.x + "%;", s += "top: " + e.y + "%;", s += "font-family: " + e.text.font_family + ";", s += "font-size: " + e.text.font_size + "px;", s += "font-weight: " + e.text.font_weight + ";", s += "color: rgba(" + p.r + ", " + p.g + ", " + p.b + ", " + e.text.text_opacity + ");", this.didAnimateShapesOnPageload || ("grow" === this.settings.shapes.pageload_animation ? (s += "opacity: " + t.opacity + ";", s += "transform: scale(0);") : ("fade" === this.settings.shapes.pageload_animation ? s += "opacity: 0;" : s += "opacity: " + t.opacity + ";", s += "transform: scale(" + 1 / this.zoom + ");"))
            }
            if ("rect" === e.type || "oval" === e.type) {
                var l = t.border_radius + "px";
                "oval" === e.type && (l = "50% 50%");
                o = hexToRgb(t.background_color) || {
                    r: 0,
                    b: 0,
                    g: 0
                }, h = hexToRgb(t.border_color) || {
                    r: 0,
                    b: 0,
                    g: 0
                };
                s += "left: " + e.x + "%;", s += "top: " + e.y + "%;", s += "width: " + e.width + "%;", s += "height: " + e.height + "%;", "color" === t.background_type && (s += "background: rgba(" + o.r + ", " + o.g + ", " + o.b + ", " + t.background_opacity + ");"), s += "border-width: " + t.border_width + "px;", s += "border-style: " + t.border_style + ";", s += "border-color: rgba(" + h.r + ", " + h.g + ", " + h.b + ", " + t.border_opacity + ");", s += "border-radius: " + l + ";", this.didAnimateShapesOnPageload || ("grow" === this.settings.shapes.pageload_animation ? (s += "opacity: " + t.opacity + ";", s += "transform: scale(0);") : ("fade" === this.settings.shapes.pageload_animation ? s += "opacity: 0;" : s += "opacity: " + t.opacity + ";", s += "transform: scale(1);"))
            }
            if ("poly" === e.type || "path" === e.type) {
                var g = hexToRgb(t.background_color) || {
                        r: 0,
                        b: 0,
                        g: 0
                    },
                    d = hexToRgb(t.stroke_color) || {
                        r: 0,
                        b: 0,
                        g: 0
                    };
                "color" === t.background_type ? s += "fill: rgba(" + g.r + ", " + g.g + ", " + g.b + ", " + t.background_opacity + ");" : s += "fill: rgba(0, 0, 0, 0);", s += "stroke: rgba(" + d.r + ", " + d.g + ", " + d.b + ", " + t.stroke_opacity + ");", s += "stroke-width: " + t.stroke_width + "px;", s += "stroke-dasharray: " + t.stroke_dasharray + ";", s += "stroke-linecap: " + t.stroke_linecap + ";", this.didAnimateShapesOnPageload || ("fade" === this.settings.shapes.pageload_animation ? s += "opacity: 0;" : s += "opacity: " + t.opacity + ";")
            }
            return s
        },
        highlightShape: function(t, i) {
            t = parseInt(t);
            var e = this.settings.spots[t];
            if (i && "" !== e.connected_to) {
                var s = this.getIndexOfShapeWithID(e.connected_to);
                this.highlightShape(s, !0)
            } else {
                if (this.connectedShapes[e.id])
                    for (var n = 0; n < this.connectedShapes[e.id].length; n++) {
                        s = this.connectedShapes[e.id][n].index;
                        this.highlightShape(s, !1)
                    }
                this.root.find("#" + e.id).addClass("imp-shape-highlighted"), "image" === e.mouseover_style.background_type && this.imageBackgroundsContainer.find('[data-id="' + e.id + '"]').css({
                    "background-image": "url(" + e.mouseover_style.background_image_url + ")",
                    opacity: e.mouseover_style.background_image_opacity,
                    transform: "scale(" + e.mouseover_style.background_image_scale + ") translate(" + e.mouseover_style.background_image_offset_x + "px, " + e.mouseover_style.background_image_offset_y + "px)"
                }), $.imageMapProEventHighlightedShape(this.settings.general.name, e.title), -1 === this.highlightedShapes.indexOf(t) && this.highlightedShapes.push(t)
            }
        },
        unhighlightShape: function(t) {
            t = parseInt(t);
            var i = this.settings.spots[t];
            if (-1 == this.apiHighlightedShapes.indexOf(t)) {
                this.root.find("#" + i.id).removeClass("imp-shape-highlighted"), "image" === i.default_style.background_type && this.imageBackgroundsContainer.find('[data-id="' + i.id + '"]').css({
                    "background-image": "url(" + i.default_style.background_image_url + ")",
                    opacity: i.default_style.background_image_opacity,
                    transform: "scale(" + i.default_style.background_image_scale + ") translate(" + i.default_style.background_image_offset_x + "px, " + i.default_style.background_image_offset_y + "px)"
                }), $.imageMapProEventUnhighlightedShape(this.settings.general.name, i.title);
                var e = this.highlightedShapes.indexOf(t);
                this.highlightedShapes.splice(e, 1)
            }
        },
        unhighlightAllShapes: function() {
            for (var t = this.highlightedShapes.slice(0), i = 0; i < t.length; i++) this.unhighlightShape(t[i])
        },
        isShapeHighlighted: function(t) {
            for (var i = 0; i < this.highlightedShapes.length; i++)
                if (this.highlightedShapes[i] === t) return !0;
            return !1
        },
        focusShape: function(t) {
            if (isTrue(this.settings.zooming.enable_zooming)) {
                for (var i = [], e = 0; e < this.settings.spots.length; e++) this.settings.spots[e].connected_to === this.settings.spots[t].id && i.push(this.settings.spots[e]);
                var s = this.settings.spots[t],
                    n = 0,
                    a = 0;
                if (0 < i.length) {
                    var o = 999,
                        h = 999,
                        r = 0,
                        p = 0;
                    s.x < o && (o = s.x), s.y < h && (h = s.y), s.x > r && (r = s.x), s.y > p && (p = s.y);
                    for (e = 0; e < i.length; e++) i[e].x < o && (o = i[e].x), i[e].y < h && (h = i[e].y), i[e].x > r && (r = i[e].x), i[e].y > p && (p = i[e].y);
                    n = r - o, a = p - h
                } else "spot" === s.type ? ((n /= this.wrapWidth) < 25 && (n = 25), (a /= this.wrapHeight) < 25 && (a = 25)) : (n = s.width, a = s.height);
                var l = 0;
                a <= n && (l = n), n < a && (l = a);
                var g = 50 / l;
                g < 1 && (g = 1), g > this.maxZoomLevel && (g = this.maxZoomLevel);
                var d = 0,
                    u = 0;
                if (u = "spot" === s.type ? (d = s.x, s.y) : (d = s.x + s.width / 2, s.y + s.height / 2), 0 < i.length) {
                    for (e = 0; e < i.length; e++) "spot" === i[e].type ? (d += i[e].x, u += i[e].y) : (d += i[e].x + i[e].width / 2, u += i[e].y + i[e].height / 2);
                    d /= i.length + 1, u /= i.length + 1
                }
                d = d / 100 * this.wrapWidth * g, u = u / 100 * this.wrapHeight * g, this.applyZoom(g), this.panTo(d, u)
            }
        },
        performClickAction: function(i) {
            var s = this.settings.spots[i];
            "follow-link" === s.actions.click && (0 === $("#imp-temp-link").length && $("body").append('<a href="" id="imp-temp-link" target="_blank"></a>'), $("#imp-temp-link").attr("href", s.actions.link), isTrue(s.actions.open_link_in_new_window) ? $("#imp-temp-link").attr("target", "_blank") : $("#imp-temp-link").removeAttr("target"), $("#imp-temp-link")[0].click()), "run-script" === s.actions.click && eval(s.actions.script.replace("<br>", "")), $.imageMapProEventClickedShape(this.settings.general.name, this.settings.spots[i].title)
        },
        showTooltip: function(t, i) {
            var e = this.settings.spots[t];
            if ("text" !== e.type && -1 == this.openedTooltips.indexOf(t)) {
                if (isTrue(this.settings.tooltips.show_title_on_mouseover) && "click" === this.settings.tooltips.show_tooltips)(a = this.tooltipsContainer.find('.imp-tooltip[data-index="' + t + '"]')).find(".imp-tooltip-title").hide(), a.find(".imp-tooltip-plain-text").show(), a.find(".squares-container").show(), a.css({
                    left: 0,
                    top: 0
                });
                if ("" != e.connected_to && isTrue(e.use_connected_shape_tooltip)) {
                    var s = this.getIndexOfShapeWithID(e.connected_to);
                    this.showTooltip(s)
                } else {
                    if (0 < this.openedTooltips.length && this.hideAllTooltips(), -1 === this.openedTooltips.indexOf(t) && this.openedTooltips.push(t), "mobile-only" === this.settings.tooltips.fullscreen_tooltips && isMobile() || "always" === this.settings.tooltips.fullscreen_tooltips) {
                        this.visibleFullscreenTooltip = $('.imp-fullscreen-tooltip[data-index="' + t + '"]'), this.visibleFullscreenTooltipIndex = t, this.fullscreenTooltipsContainer.show(), this.visibleFullscreenTooltip.show();
                        var n = this;
                        setTimeout(function() {
                            n.visibleFullscreenTooltip.addClass("imp-tooltip-visible")
                        }, 20), this.fullscreenTooltipVisible = !0, this.bodyOverflow = $("body").css("overflow"), $("body").css({
                            overflow: "hidden"
                        })
                    } else {
                        var a;
                        (a = this.tooltipsContainer.find('.imp-tooltip[data-index="' + t + '"]')).show(), setTimeout(function() {
                            a.addClass("imp-tooltip-visible")
                        }, 1), this.measureTooltipSize(t), this.updateTooltipPosition(t, i)
                    }
                    $.imageMapProEventOpenedTooltip(this.settings.general.name, this.settings.spots[t].title)
                }
            }
        },
        hideTooltip: function(t) {
            if ("text" !== this.settings.spots[t].type && -1 == this.apiOpenedTooltips.indexOf(t)) {
                var i = this.openedTooltips.indexOf(t);
                if (this.openedTooltips.splice(i, 1), "mobile-only" === this.settings.tooltips.fullscreen_tooltips && isMobile() || "always" === this.settings.tooltips.fullscreen_tooltips) {
                    (e = this.fullscreenTooltipsContainer.find('.imp-fullscreen-tooltip[data-index="' + t + '"]')).removeClass("imp-tooltip-visible"), this.fullscreenTooltipsContainer.hide(), e.hide(), this.fullscreenTooltipVisible = !1, $("body").css({
                        overflow: this.bodyOverflow
                    })
                } else {
                    var e = this.tooltipsContainer.find('.imp-tooltip[data-index="' + t + '"]');
                    setTimeout(function() {
                        e.removeClass("imp-tooltip-visible"), e.hasClass("imp-tooltip-visible") || e.hide()
                    }, 1), e.find("video").trigger("pause"), e.find("iframe").each(function() {
                        $(this).attr("src", $(this).attr("src"))
                    })
                }
                $.imageMapProEventClosedTooltip(this.settings.general.name, this.settings.spots[t].title)
            }
        },
        hideAllTooltips: function() {
            for (var t = this.openedTooltips.slice(0), i = 0; i < t.length; i++) this.hideTooltip(t[i])
        },
        hideAllTitles: function() {
            for (var t = 0; t < this.settings.spots.length; t++) this.hideTooltipTitle(t, !0)
        },
        showTooltipTitle: function(t, i) {
            if ("text" !== this.settings.spots[t].type && -1 == this.openedTooltips.indexOf(t)) {
                var e = this.tooltipsContainer.find('.imp-tooltip[data-index="' + t + '"]');
                e.hasClass("imp-tooltip-visible") || (e.find(".squares-container").hide(), e.find(".imp-tooltip-title").show(), e.find(".imp-tooltip-title .squares-container").show(), e.find(".imp-tooltip-plain-text").hide(), e.show(), setTimeout(function() {
                    e.addClass("imp-tooltip-visible")
                }, 1), e.data("imp-measured-width", e.outerWidth()), e.data("imp-measured-height", e.outerHeight())), this.updateTooltipPosition(t, i)
            }
        },
        hideTooltipTitle: function(t) {
            if ("text" !== this.settings.spots[t].type && -1 == this.openedTooltips.indexOf(t)) {
                var i = this.tooltipsContainer.find('.imp-tooltip[data-index="' + t + '"]');
                i.find(".imp-tooltip-title").hide(), i.find(".imp-tooltip-plain-text").show(), i.find(".squares-container").show(), i.css({
                    width: "auto"
                }), i.removeClass("imp-tooltip-visible"), i.hide()
            }
        },
        updateTooltipPosition: function(t, i) {
            if (!this.fullscreenTooltipVisible) {
                var e, s, n, a, o, h, r, p, l, g;
                s = (e = this.tooltipsContainer.find('.imp-tooltip[data-index="' + t + '"]')).data("imp-measured-width"), n = e.data("imp-measured-height"), g = this.settings.spots[t];
                var d, u, c = window.innerWidth,
                    m = window.innerHeight;
                if (isTrue(this.settings.tooltips.sticky_tooltips) && i) {
                    var f = this.getEventCoordinates(i);
                    p = f.x, l = f.y, a = p - this.wrapOffsetLeft, o = l - this.wrapOffsetTop, r = h = 0
                } else h = g.width / 100 * this.wrapWidth, r = g.height / 100 * this.wrapHeight, h *= this.targetZoom, r *= this.targetZoom, a = Math.round(10 * g.x) / 10 / 100 * this.wrapWidth, o = Math.round(10 * g.y) / 10 / 100 * this.wrapHeight, a = a * this.targetZoom + this.targetPanX, o = o * this.targetZoom + this.targetPanY;
                "spot" === g.type && (a -= g.width / 2, isTrue(this.settings.tooltips.sticky_tooltips) || (o -= g.height / 2), h = g.width, r = g.height), "spot" === g.type && isTrue(g.default_style.icon_is_pin) && "spot" === g.type && isTrue(g.default_style.use_icon) && !isTrue(this.settings.tooltips.sticky_tooltips) && (o -= r / 2), isTrue(this.settings.runtime.is_fullscreen) && isTrue(this.settings.tooltips.constrain_tooltips) ? (a + this.wrapOffsetLeft < 0 && (h = h + a + this.wrapOffsetLeft, a = -this.wrapOffsetLeft), a + this.wrapOffsetLeft + h > c && (h += c - (a + this.wrapOffsetLeft + h)), o + this.wrapOffsetTop < 0 && (r = r + o + this.wrapOffsetTop, o = -this.wrapOffsetTop), o + this.wrapOffsetTop + r > m && (r += m - (o + this.wrapOffsetTop + r))) : (a < 0 && (h += a, a = 0), a + h > this.wrapWidth && (h = this.wrapWidth - a), o < 0 && (r += o, o = 0), o + r > this.wrapHeight && (r = this.wrapHeight - o)), "left" === g.tooltip_style.position && (d = a - s - 20, u = o + r / 2 - n / 2), "right" === g.tooltip_style.position && (d = a + h + 20, u = o + r / 2 - n / 2), "top" === g.tooltip_style.position && (d = a + h / 2 - s / 2, u = o - n - 20), "bottom" === g.tooltip_style.position && (d = a + h / 2 - s / 2, u = o + r + 20);
                var v = {
                    x: d,
                    y: u
                };
                isTrue(this.settings.tooltips.constrain_tooltips) && ((v = fitRectToScreen(d + this.wrapOffsetLeft, u + this.wrapOffsetTop, s, n)).x -= this.wrapOffsetLeft, v.y -= this.wrapOffsetTop), v.x += g.tooltip_style.offset_x / 100 * this.wrapWidth, v.y += g.tooltip_style.offset_y / 100 * this.wrapHeight, e.css({
                    left: v.x + this.wrapOffsetLeft - this.tooltipsContainer.offset().left,
                    top: v.y + this.wrapOffsetTop - this.tooltipsContainer.offset().top
                })
            }
        },
        updateOpenedTooltipsPosition: function() {
            for (var t = 0; t < this.openedTooltips.length; t++) this.updateTooltipPosition(this.openedTooltips[t])
        },
        toggleFullscreen: function() {
            if (isTrue(this.settings.runtime.is_fullscreen)) $("body").removeClass("imp-fullscreen-mode"), $("#imp-fullscreen-wrap").remove(), this.disableEvents(), fullscreenMapParent.events();
            else {
                $("body").addClass("imp-fullscreen-mode");
                var t = $.extend(!0, {}, this.settings);
                t.runtime.is_fullscreen = 1, t.id = "999999", t.general.responsive = 0, t.general.width = this.settings.general.naturalWidth, t.general.height = this.settings.general.naturalHeight, t.general.name += "-fullscreen", isTrue(this.settings.shapes_menu.enable_shapes_menu) && isTrue(this.settings.shapes_menu.detached_menu) && (t.shapes_menu.detached_menu = 0);
                var i = "";
                i += "background: " + this.settings.fullscreen.fullscreen_background, $("body").append('<div id="imp-fullscreen-wrap" style="' + i + '"><div id="image-map-pro-' + t.id + '"></div></div>'), $("#image-map-pro-" + t.id).imageMapPro(t), this.disableEvents(), fullscreenMapParent = this
            }
        },
        resetZoomAndPan: function() {
            this.zoom = 1, this.targetZoom = 1, this.targetPanX = 0, this.targetPanY = 0, this.actualPanX = 0, this.actualPanY = 0, this.redraw(!1)
        },
        zoomIn: function(t) {
            if (this.targetZoom < this.maxZoomLevel) {
                var i = this.zoom * this.zoomMultiplier,
                    e = 0,
                    s = 0,
                    n = this.wrap.width(),
                    a = this.wrap.height();
                s = t ? (e = t.pageX, t.pageY) : (e = this.wrap.offset().left + n / 2, this.wrap.offset().top + a / 2), this.applyZoom(i, e, s)
            }
        },
        zoomOut: function(t) {
            if (1 < this.targetZoom) {
                var i = this.zoom / this.zoomMultiplier,
                    e = 0,
                    s = 0,
                    n = this.wrap.width(),
                    a = this.wrap.height();
                s = t ? (e = t.pageX, t.pageY) : (e = this.wrap.offset().left + n / 2, this.wrap.offset().top + a / 2), this.applyZoom(i, e, s)
            }
        },
        applyZoom: function(t, i, e) {
            this.targetZoom = this.zoom, this.targetPanX = this.actualPanX, this.targetPanY = this.actualPanY, t > this.maxZoomLevel && (t = this.maxZoomLevel), t < 1 && (t = 1), this.targetZoom = t;
            var s = (this.wrapWidth * this.targetZoom - this.wrapWidth * this.zoom) / 2,
                n = (this.wrapHeight * this.targetZoom - this.wrapHeight * this.zoom) / 2;
            if (i && e) {
                var a = i - this.zoomWrap.offset().left,
                    o = e - this.zoomWrap.offset().top,
                    h = s * ((this.wrapWidth * this.zoom / 2 - a) / (this.wrapWidth * this.zoom / 2)),
                    r = n * ((this.wrapHeight * this.zoom / 2 - o) / (this.wrapHeight * this.zoom / 2));
                this.targetPanX -= s, this.targetPanY -= n, this.targetPanX += h, this.targetPanY += r
            }
            0 < this.targetPanX && (this.targetPanX = 0), 0 < this.targetPanY && (this.targetPanY = 0), this.targetPanX < this.wrapWidth - this.wrapWidth * this.targetZoom && (this.targetPanX = this.wrapWidth - this.wrapWidth * this.targetZoom), this.targetPanY < this.wrapHeight - this.wrapHeight * this.targetZoom && (this.targetPanY = this.wrapHeight - this.wrapHeight * this.targetZoom);
            for (var p = 0; p < this.settings.spots.length; p++) {
                var l = this.settings.spots[p];
                "spot" === l.type && this.wrap.find("#" + l.id).css({
                    transform: "scale(" + 1 / this.targetZoom + ")"
                })
            }
            "mouseover" === this.settings.tooltips.show_tooltips ? this.hideAllTooltips() : this.updateOpenedTooltipsPosition(), this.redraw(!0)
        },
        pan: function(t, i) {
            var e = this.ix - t,
                s = this.iy - i;
            this.targetPanX = this.initialPanX - e, this.targetPanY = this.initialPanY - s, 0 < this.targetPanX && (this.targetPanX = 0), 0 < this.targetPanY && (this.targetPanY = 0), this.targetPanX < this.wrapWidth - this.wrapWidth * this.zoom && (this.targetPanX = this.wrapWidth - this.wrapWidth * this.zoom), this.targetPanY < this.wrapHeight - this.wrapHeight * this.zoom && (this.targetPanY = this.wrapHeight - this.wrapHeight * this.zoom), "mouseover" === this.settings.tooltips.show_tooltips ? this.hideAllTooltips() : (this.tooltipsContainer.addClass("imp-no-transition"), this.updateOpenedTooltipsPosition()), this.redraw(!1)
        },
        panTo: function(t, i) {
            var e = -t + this.wrapWidth / 2,
                s = -i + this.wrapHeight / 2;
            this.targetPanX = e, this.targetPanY = s, 0 < this.targetPanX && (this.targetPanX = 0), 0 < this.targetPanY && (this.targetPanY = 0), this.targetPanX < this.wrapWidth - this.wrapWidth * this.targetZoom && (this.targetPanX = this.wrapWidth - this.wrapWidth * this.targetZoom), this.targetPanY < this.wrapHeight - this.wrapHeight * this.targetZoom && (this.targetPanY = this.wrapHeight - this.wrapHeight * this.targetZoom), "mouseover" === this.settings.tooltips.show_tooltips ? this.hideAllTooltips() : this.updateOpenedTooltipsPosition(), this.redraw(!0)
        },
        pinch: function(t) {
            var i = (t.originalEvent.touches[0].pageX + t.originalEvent.touches[1].pageX) / 2,
                e = (t.originalEvent.touches[0].pageY + t.originalEvent.touches[1].pageY) / 2;
            this.actualPanX += i - this.lastX, this.actualPanY += e - this.lastY;
            var s = this.wrap.width(),
                n = this.wrap.height(),
                a = this.wrap.offset().left,
                o = this.wrap.offset().top,
                h = window.innerWidth,
                r = window.innerHeight;
            isTrue(this.settings.runtime.is_fullscreen) ? (s * this.zoom > h ? (this.actualPanX > -a && (this.actualPanX = -a), this.actualPanX < h - s * this.targetZoom - a && (this.actualPanX = h - s * this.targetZoom - a)) : this.actualPanX = (s - s * this.targetZoom) / 2, n * this.zoom > r ? (this.actualPanY > -o && (this.actualPanY = -o), this.actualPanY < r - n * this.targetZoom - o && (this.actualPanY = r - n * this.targetZoom - o)) : this.actualPanY = (n - n * this.targetZoom) / 2) : (0 < this.actualPanX && (this.actualPanX = 0), 0 < this.actualPanY && (this.actualPanY = 0), this.actualPanX < s - s * this.targetZoom && (this.actualPanX = s - s * this.targetZoom), this.actualPanY < n - n * this.targetZoom && (this.actualPanY = n - n * this.targetZoom)), this.lastX = i, this.lastY = e;
            var p = Math.sqrt(Math.pow(t.originalEvent.touches[1].pageX - t.originalEvent.touches[0].pageX, 2) + Math.pow(t.originalEvent.touches[1].pageY - t.originalEvent.touches[0].pageY, 2)) / this.pinchInitialDistance;
            this.applyZoom(this.pinchInitialZoom * p, i, e)
        },
        redraw: function(t) {
            if (t ? (this.zoom = lerp(this.zoom, this.targetZoom, .1), this.actualPanX = lerp(this.actualPanX, this.targetPanX, .1), this.actualPanY = lerp(this.actualPanY, this.targetPanY, .1), Math.abs(this.zoom - this.targetZoom) < .001 && (this.zoom = this.targetZoom), Math.abs(this.actualPanX - this.targetPanX) < 1 && (this.actualPanX = this.targetPanX), Math.abs(this.actualPanY - this.targetPanY) < 1 && (this.actualPanY = this.targetPanY)) : (this.zoom = this.targetZoom, this.actualPanX = this.targetPanX, this.actualPanY = this.targetPanY), this.zoomWrap.css({
                    transform: "scale(" + this.zoom + ", " + this.zoom + ")"
                }), this.translateWrap.css({
                    transform: "translate(" + this.actualPanX + "px, " + this.actualPanY + "px)"
                }), isTrue(this.settings.zooming.enable_navigator) && isTrue(this.settings.zooming.enable_zooming)) {
                var i = -this.actualPanX * this.navigatorRatio / this.zoom + this.navigatorMarginX / this.zoom,
                    e = this.wrapWidth * this.navigatorRatio - (i + this.uiNavigatorWindowWidth / this.zoom),
                    s = -this.actualPanY * this.navigatorRatio / this.zoom + this.navigatorMarginY / this.zoom,
                    n = this.wrapHeight * this.navigatorRatio - (s + this.uiNavigatorWindowHeight / this.zoom);
                this.uiNavigatorImage.css({
                    "clip-path": "inset(" + s + "px " + e + "px " + n + "px " + i + "px)",
                    "-webkit-clip-path": "inset(" + s + "px " + e + "px " + n + "px " + i + "px)",
                    "-moz-clip-path": "inset(" + s + "px " + e + "px " + n + "px " + i + "px)"
                })
            }
            if (t) {
                var a = this;
                this.zoom == this.targetZoom && this.actualPanX == this.targetPanX && this.actualPanY == this.targetPanY || window.requestAnimationFrame(function() {
                    a.redraw(t)
                })
            }
        },
        switchLayer: function(t, i) {
            this.settings.runtime.layerID = t, this.openedTooltips = [], this.apiOpenedTooltips = [], this.highlightedShapes = [], this.apiHighlightedShapes = [], this.shapesMenuWrap && (this.settings.runtime.menu_scroll = this.shapesMenuWrap.find(".imp-shapes-menu-scroll-wrap").scrollTop());
            for (var e = "", s = 0; s < this.settings.layers.layers_list.length; s++)
                if (parseInt(this.settings.layers.layers_list[s].id, 10) === parseInt(this.settings.runtime.layerID, 10)) {
                    e = this.settings.layers.layers_list[s].title, this.settings.general.naturalWidth = this.settings.layers.layers_list[s].image_width, this.settings.general.naturalHeight = this.settings.layers.layers_list[s].image_height, isTrue(this.settings.runtime.is_fullscreen) && (this.settings.general.width = this.settings.layers.layers_list[s].image_width, this.settings.general.height = this.settings.layers.layers_list[s].image_height);
                    break
                }
            var n = this;
            this.init(function() {
                i && i(), $.imageMapProEventSwitchedFloor(n.settings.general.name, e)
            })
        },
        updateMenuSearch: function() {
            var s = $('[data-image-map-pro-search-id="' + this.settings.id + '"]').val();
            s && 0 < s.length ? (this.shapesMenuWrap.addClass("imp-searching"), $(".imp-shapes-menu-shape-title").each(function() {
                var t = new RegExp("(" + s + ")", "gi"),
                    i = $(this).data("imp-content"),
                    e = $(this).data("imp-content").replace(t, '<span class="imp-search-highlight">$&</span>');
                i != e ? ($(this).show(), $(this).html(e)) : ($(this).hide(), $(this).html(i))
            })) : (this.shapesMenuWrap.removeClass("imp-searching"), $(".imp-shapes-menu-shape-title, .imp-shapes-menu-layer-title").each(function() {
                $(this).show(), $(this).html($(this).data("imp-content"))
            })), this.settings.runtime.menu_search_string = s
        },
        displayScrollMessage: function() {
            this.scrollMessage.fadeIn(), clearTimeout(this.hideScrollMessageTimeout);
            var t = this;
            this.hideScrollMessageTimeout = setTimeout(function() {
                t.scrollMessage.fadeOut()
            }, 1e3)
        },
        showResponsiveShapesMenu: function() {
            this.responsiveShapesMenuWrap && (this.responsiveShapesMenuWrap.addClass("imp-responsive-menu-visible"), $("body").addClass("imp-noscroll"))
        },
        hideResponsiveShapesMenu: function() {
            this.responsiveShapesMenuWrap && (this.responsiveShapesMenuWrap.removeClass("imp-responsive-menu-visible"), $("body").removeClass("imp-noscroll"))
        }
    }), $.fn[pluginName] = function(t) {
        return this.each(function() {
            $.data(this, "plugin_" + pluginName, new Plugin(this, t))
        })
    }
}(jQuery, window, document),
function(t) {
    "function" == typeof define && define.amd ? define(["jquery"], t) : "object" == typeof exports ? module.exports = t : t(jQuery)
}(function(d) {
    function i(t) {
        var i = t || window.event,
            e = v.call(arguments, 1),
            s = 0,
            n = 0,
            a = 0,
            o = 0,
            h = 0,
            r = 0;
        if ((t = d.event.fix(i)).type = "mousewheel", "detail" in i && (a = -1 * i.detail), "wheelDelta" in i && (a = i.wheelDelta), "wheelDeltaY" in i && (a = i.wheelDeltaY), "wheelDeltaX" in i && (n = -1 * i.wheelDeltaX), "axis" in i && i.axis === i.HORIZONTAL_AXIS && (n = -1 * a, a = 0), s = 0 === a ? n : a, "deltaY" in i && (s = a = -1 * i.deltaY), "deltaX" in i && (n = i.deltaX, 0 === a && (s = -1 * n)), 0 !== a || 0 !== n) {
            if (1 === i.deltaMode) {
                var p = d.data(this, "mousewheel-line-height");
                s *= p, a *= p, n *= p
            } else if (2 === i.deltaMode) {
                var l = d.data(this, "mousewheel-page-height");
                s *= l, a *= l, n *= l
            }
            if (o = Math.max(Math.abs(a), Math.abs(n)), (!f || o < f) && (c(i, f = o) && (f /= 40)), c(i, o) && (s /= 40, n /= 40, a /= 40), s = Math[1 <= s ? "floor" : "ceil"](s / f), n = Math[1 <= n ? "floor" : "ceil"](n / f), a = Math[1 <= a ? "floor" : "ceil"](a / f), y.settings.normalizeOffset && this.getBoundingClientRect) {
                var g = this.getBoundingClientRect();
                h = t.clientX - g.left, r = t.clientY - g.top
            }
            return t.deltaX = n, t.deltaY = a, t.deltaFactor = f, t.offsetX = h, t.offsetY = r, t.deltaMode = 0, e.unshift(t, s, n, a), m && clearTimeout(m), m = setTimeout(u, 200), (d.event.dispatch || d.event.handle).apply(this, e)
        }
    }

    function u() {
        f = null
    }

    function c(t, i) {
        return y.settings.adjustOldDeltas && "mousewheel" === t.type && i % 120 == 0
    }
    var m, f, t = ["wheel", "mousewheel", "DOMMouseScroll", "MozMousePixelScroll"],
        e = "onwheel" in document || 9 <= document.documentMode ? ["wheel"] : ["mousewheel", "DomMouseScroll", "MozMousePixelScroll"],
        v = Array.prototype.slice;
    if (d.event.fixHooks)
        for (var s = t.length; s;) d.event.fixHooks[t[--s]] = d.event.mouseHooks;
    var y = d.event.special.mousewheel = {
        version: "3.1.12",
        setup: function() {
            if (this.addEventListener)
                for (var t = e.length; t;) this.addEventListener(e[--t], i, !1);
            else this.onmousewheel = i;
            d.data(this, "mousewheel-line-height", y.getLineHeight(this)), d.data(this, "mousewheel-page-height", y.getPageHeight(this))
        },
        teardown: function() {
            if (this.removeEventListener)
                for (var t = e.length; t;) this.removeEventListener(e[--t], i, !1);
            else this.onmousewheel = null;
            d.removeData(this, "mousewheel-line-height"), d.removeData(this, "mousewheel-page-height")
        },
        getLineHeight: function(t) {
            var i = d(t),
                e = i["offsetParent" in d.fn ? "offsetParent" : "parent"]();
            return e.length || (e = d("body")), parseInt(e.css("fontSize"), 10) || parseInt(i.css("fontSize"), 10) || 16
        },
        getPageHeight: function(t) {
            return d(t).height()
        },
        settings: {
            adjustOldDeltas: !0,
            normalizeOffset: !0
        }
    };
    d.fn.extend({
        mousewheel: function(t) {
            return t ? this.bind("mousewheel", t) : this.trigger("mousewheel")
        },
        unmousewheel: function(t) {
            return this.unbind("mousewheel", t)
        }
    })
});