<!DOCTYPE html>
<html lang="en-US" class="no-js no-svg">
    <head>
        <meta charset="UTF-8" />
        <link rel="shortcut icon" href="{{url("/")}}/wp-content/themes/chirokind/assets/images/favicons/favicon-16x16.png" type="image/x-icon" />
        <link rel="icon" href="{{url("/")}}/wp-content/themes/chirokind/assets/images/favicons/favicon-16x16.png" type="image/x-icon" />
        <!-- responsive meta -->
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <!-- For IE -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <title>Home Page 06 – Chirokind</title>
        <meta name="robots" content="max-image-preview:large" />
        <link rel="dns-prefetch" href="//fonts.googleapis.com" />
        <link rel="alternate" type="application/rss+xml" title="Chirokind » Feed" href="{{url("/")}}/feed/" />
        <link rel="alternate" type="application/rss+xml" title="Chirokind » Comments Feed" href="{{url("/")}}/comments/feed/" />
        <script type="text/javascript">
            /* <![CDATA[ */
            window._wpemojiSettings = {
                baseUrl: "https:\/\/s.w.org\/images\/core\/emoji\/15.0.3\/72x72\/",
                ext: ".png",
                svgUrl: "https:\/\/s.w.org\/images\/core\/emoji\/15.0.3\/svg\/",
                svgExt: ".svg",
                source: { concatemoji: "https:\/\/C1rmkQ6tFroJ.com\/newwp\/chirokind\/wp-includes\/js\/wp-emoji-release.min.js?ver=6.5.2" },
            };
            /*! This file is auto-generated */
            !(function (i, n) {
                var o, s, e;
                function c(e) {
                    try {
                        var t = { supportTests: e, timestamp: new Date().valueOf() };
                        sessionStorage.setItem(o, JSON.stringify(t));
                    } catch (e) {}
                }
                function p(e, t, n) {
                    e.clearRect(0, 0, e.canvas.width, e.canvas.height), e.fillText(t, 0, 0);
                    var t = new Uint32Array(e.getImageData(0, 0, e.canvas.width, e.canvas.height).data),
                        r = (e.clearRect(0, 0, e.canvas.width, e.canvas.height), e.fillText(n, 0, 0), new Uint32Array(e.getImageData(0, 0, e.canvas.width, e.canvas.height).data));
                    return t.every(function (e, t) {
                        return e === r[t];
                    });
                }
                function u(e, t, n) {
                    switch (t) {
                        case "flag":
                            return n(e, "\ud83c\udff3\ufe0f\u200d\u26a7\ufe0f", "\ud83c\udff3\ufe0f\u200b\u26a7\ufe0f")
                                ? !1
                                : !n(e, "\ud83c\uddfa\ud83c\uddf3", "\ud83c\uddfa\u200b\ud83c\uddf3") &&
                                      !n(
                                          e,
                                          "\ud83c\udff4\udb40\udc67\udb40\udc62\udb40\udc65\udb40\udc6e\udb40\udc67\udb40\udc7f",
                                          "\ud83c\udff4\u200b\udb40\udc67\u200b\udb40\udc62\u200b\udb40\udc65\u200b\udb40\udc6e\u200b\udb40\udc67\u200b\udb40\udc7f"
                                      );
                        case "emoji":
                            return !n(e, "\ud83d\udc26\u200d\u2b1b", "\ud83d\udc26\u200b\u2b1b");
                    }
                    return !1;
                }
                function f(e, t, n) {
                    var r = "undefined" != typeof WorkerGlobalScope && self instanceof WorkerGlobalScope ? new OffscreenCanvas(300, 150) : i.createElement("canvas"),
                        a = r.getContext("2d", { willReadFrequently: !0 }),
                        o = ((a.textBaseline = "top"), (a.font = "600 32px Arial"), {});
                    return (
                        e.forEach(function (e) {
                            o[e] = t(a, e, n);
                        }),
                        o
                    );
                }
                function t(e) {
                    var t = i.createElement("script");
                    (t.src = e), (t.defer = !0), i.head.appendChild(t);
                }
                "undefined" != typeof Promise &&
                    ((o = "wpEmojiSettingsSupports"),
                    (s = ["flag", "emoji"]),
                    (n.supports = { everything: !0, everythingExceptFlag: !0 }),
                    (e = new Promise(function (e) {
                        i.addEventListener("DOMContentLoaded", e, { once: !0 });
                    })),
                    new Promise(function (t) {
                        var n = (function () {
                            try {
                                var e = JSON.parse(sessionStorage.getItem(o));
                                if ("object" == typeof e && "number" == typeof e.timestamp && new Date().valueOf() < e.timestamp + 604800 && "object" == typeof e.supportTests) return e.supportTests;
                            } catch (e) {}
                            return null;
                        })();
                        if (!n) {
                            if ("undefined" != typeof Worker && "undefined" != typeof OffscreenCanvas && "undefined" != typeof URL && URL.createObjectURL && "undefined" != typeof Blob)
                                try {
                                    var e = "postMessage(" + f.toString() + "(" + [JSON.stringify(s), u.toString(), p.toString()].join(",") + "));",
                                        r = new Blob([e], { type: "text/javascript" }),
                                        a = new Worker(URL.createObjectURL(r), { name: "wpTestEmojiSupports" });
                                    return void (a.onmessage = function (e) {
                                        c((n = e.data)), a.terminate(), t(n);
                                    });
                                } catch (e) {}
                            c((n = f(s, u, p)));
                        }
                        t(n);
                    })
                        .then(function (e) {
                            for (var t in e) (n.supports[t] = e[t]), (n.supports.everything = n.supports.everything && n.supports[t]), "flag" !== t && (n.supports.everythingExceptFlag = n.supports.everythingExceptFlag && n.supports[t]);
                            (n.supports.everythingExceptFlag = n.supports.everythingExceptFlag && !n.supports.flag),
                                (n.DOMReady = !1),
                                (n.readyCallback = function () {
                                    n.DOMReady = !0;
                                });
                        })
                        .then(function () {
                            return e;
                        })
                        .then(function () {
                            var e;
                            n.supports.everything || (n.readyCallback(), (e = n.source || {}).concatemoji ? t(e.concatemoji) : e.wpemoji && e.twemoji && (t(e.twemoji), t(e.wpemoji)));
                        }));
            })((window, document), window._wpemojiSettings);
            /* ]]> */
        </script>
        <style id="wp-emoji-styles-inline-css" type="text/css">
            img.wp-smiley,
            img.emoji {
                display: inline !important;
                border: none !important;
                box-shadow: none !important;
                height: 1em !important;
                width: 1em !important;
                margin: 0 0.07em !important;
                vertical-align: -0.1em !important;
                background: none !important;
                padding: 0 !important;
            }
        </style>
        <style id="classic-theme-styles-inline-css" type="text/css">
            /*! This file is auto-generated */
            .wp-block-button__link {
                color: #fff;
                background-color: #32373c;
                border-radius: 9999px;
                box-shadow: none;
                text-decoration: none;
                padding: calc(0.667em + 2px) calc(1.333em + 2px);
                font-size: 1.125em;
            }
            .wp-block-file__button {
                background: #32373c;
                color: #fff;
                text-decoration: none;
            }
        </style>
        <style id="global-styles-inline-css" type="text/css">
            body {
                --wp--preset--color--black: #000000;
                --wp--preset--color--cyan-bluish-gray: #abb8c3;
                --wp--preset--color--white: #ffffff;
                --wp--preset--color--pale-pink: #f78da7;
                --wp--preset--color--vivid-red: #cf2e2e;
                --wp--preset--color--luminous-vivid-orange: #ff6900;
                --wp--preset--color--luminous-vivid-amber: #fcb900;
                --wp--preset--color--light-green-cyan: #7bdcb5;
                --wp--preset--color--vivid-green-cyan: #00d084;
                --wp--preset--color--pale-cyan-blue: #8ed1fc;
                --wp--preset--color--vivid-cyan-blue: #0693e3;
                --wp--preset--color--vivid-purple: #9b51e0;
                --wp--preset--color--strong-yellow: #f7bd00;
                --wp--preset--color--strong-white: #fff;
                --wp--preset--color--light-black: #242424;
                --wp--preset--color--very-light-gray: #797979;
                --wp--preset--color--very-dark-black: #000000;
                --wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg, rgba(6, 147, 227, 1) 0%, rgb(155, 81, 224) 100%);
                --wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg, rgb(122, 220, 180) 0%, rgb(0, 208, 130) 100%);
                --wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg, rgba(252, 185, 0, 1) 0%, rgba(255, 105, 0, 1) 100%);
                --wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg, rgba(255, 105, 0, 1) 0%, rgb(207, 46, 46) 100%);
                --wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg, rgb(238, 238, 238) 0%, rgb(169, 184, 195) 100%);
                --wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg, rgb(74, 234, 220) 0%, rgb(151, 120, 209) 20%, rgb(207, 42, 186) 40%, rgb(238, 44, 130) 60%, rgb(251, 105, 98) 80%, rgb(254, 248, 76) 100%);
                --wp--preset--gradient--blush-light-purple: linear-gradient(135deg, rgb(255, 206, 236) 0%, rgb(152, 150, 240) 100%);
                --wp--preset--gradient--blush-bordeaux: linear-gradient(135deg, rgb(254, 205, 165) 0%, rgb(254, 45, 45) 50%, rgb(107, 0, 62) 100%);
                --wp--preset--gradient--luminous-dusk: linear-gradient(135deg, rgb(255, 203, 112) 0%, rgb(199, 81, 192) 50%, rgb(65, 88, 208) 100%);
                --wp--preset--gradient--pale-ocean: linear-gradient(135deg, rgb(255, 245, 203) 0%, rgb(182, 227, 212) 50%, rgb(51, 167, 181) 100%);
                --wp--preset--gradient--electric-grass: linear-gradient(135deg, rgb(202, 248, 128) 0%, rgb(113, 206, 126) 100%);
                --wp--preset--gradient--midnight: linear-gradient(135deg, rgb(2, 3, 129) 0%, rgb(40, 116, 252) 100%);
                --wp--preset--font-size--small: 10px;
                --wp--preset--font-size--medium: 20px;
                --wp--preset--font-size--large: 24px;
                --wp--preset--font-size--x-large: 42px;
                --wp--preset--font-size--normal: 15px;
                --wp--preset--font-size--huge: 36px;
                --wp--preset--spacing--20: 0.44rem;
                --wp--preset--spacing--30: 0.67rem;
                --wp--preset--spacing--40: 1rem;
                --wp--preset--spacing--50: 1.5rem;
                --wp--preset--spacing--60: 2.25rem;
                --wp--preset--spacing--70: 3.38rem;
                --wp--preset--spacing--80: 5.06rem;
                --wp--preset--shadow--natural: 6px 6px 9px rgba(0, 0, 0, 0.2);
                --wp--preset--shadow--deep: 12px 12px 50px rgba(0, 0, 0, 0.4);
                --wp--preset--shadow--sharp: 6px 6px 0px rgba(0, 0, 0, 0.2);
                --wp--preset--shadow--outlined: 6px 6px 0px -3px rgba(255, 255, 255, 1), 6px 6px rgba(0, 0, 0, 1);
                --wp--preset--shadow--crisp: 6px 6px 0px rgba(0, 0, 0, 1);
            }
            :where(.is-layout-flex) {
                gap: 0.5em;
            }
            :where(.is-layout-grid) {
                gap: 0.5em;
            }
            body .is-layout-flow > .alignleft {
                float: left;
                margin-inline-start: 0;
                margin-inline-end: 2em;
            }
            body .is-layout-flow > .alignright {
                float: right;
                margin-inline-start: 2em;
                margin-inline-end: 0;
            }
            body .is-layout-flow > .aligncenter {
                margin-left: auto !important;
                margin-right: auto !important;
            }
            body .is-layout-constrained > .alignleft {
                float: left;
                margin-inline-start: 0;
                margin-inline-end: 2em;
            }
            body .is-layout-constrained > .alignright {
                float: right;
                margin-inline-start: 2em;
                margin-inline-end: 0;
            }
            body .is-layout-constrained > .aligncenter {
                margin-left: auto !important;
                margin-right: auto !important;
            }
            body .is-layout-constrained > :where(:not(.alignleft):not(.alignright):not(.alignfull)) {
                max-width: var(--wp--style--global--content-size);
                margin-left: auto !important;
                margin-right: auto !important;
            }
            body .is-layout-constrained > .alignwide {
                max-width: var(--wp--style--global--wide-size);
            }
            body .is-layout-flex {
                display: flex;
            }
            body .is-layout-flex {
                flex-wrap: wrap;
                align-items: center;
            }
            body .is-layout-flex > * {
                margin: 0;
            }
            body .is-layout-grid {
                display: grid;
            }
            body .is-layout-grid > * {
                margin: 0;
            }
            :where(.wp-block-columns.is-layout-flex) {
                gap: 2em;
            }
            :where(.wp-block-columns.is-layout-grid) {
                gap: 2em;
            }
            :where(.wp-block-post-template.is-layout-flex) {
                gap: 1.25em;
            }
            :where(.wp-block-post-template.is-layout-grid) {
                gap: 1.25em;
            }
            .has-black-color {
                color: var(--wp--preset--color--black) !important;
            }
            .has-cyan-bluish-gray-color {
                color: var(--wp--preset--color--cyan-bluish-gray) !important;
            }
            .has-white-color {
                color: var(--wp--preset--color--white) !important;
            }
            .has-pale-pink-color {
                color: var(--wp--preset--color--pale-pink) !important;
            }
            .has-vivid-red-color {
                color: var(--wp--preset--color--vivid-red) !important;
            }
            .has-luminous-vivid-orange-color {
                color: var(--wp--preset--color--luminous-vivid-orange) !important;
            }
            .has-luminous-vivid-amber-color {
                color: var(--wp--preset--color--luminous-vivid-amber) !important;
            }
            .has-light-green-cyan-color {
                color: var(--wp--preset--color--light-green-cyan) !important;
            }
            .has-vivid-green-cyan-color {
                color: var(--wp--preset--color--vivid-green-cyan) !important;
            }
            .has-pale-cyan-blue-color {
                color: var(--wp--preset--color--pale-cyan-blue) !important;
            }
            .has-vivid-cyan-blue-color {
                color: var(--wp--preset--color--vivid-cyan-blue) !important;
            }
            .has-vivid-purple-color {
                color: var(--wp--preset--color--vivid-purple) !important;
            }
            .has-black-background-color {
                background-color: var(--wp--preset--color--black) !important;
            }
            .has-cyan-bluish-gray-background-color {
                background-color: var(--wp--preset--color--cyan-bluish-gray) !important;
            }
            .has-white-background-color {
                background-color: var(--wp--preset--color--white) !important;
            }
            .has-pale-pink-background-color {
                background-color: var(--wp--preset--color--pale-pink) !important;
            }
            .has-vivid-red-background-color {
                background-color: var(--wp--preset--color--vivid-red) !important;
            }
            .has-luminous-vivid-orange-background-color {
                background-color: var(--wp--preset--color--luminous-vivid-orange) !important;
            }
            .has-luminous-vivid-amber-background-color {
                background-color: var(--wp--preset--color--luminous-vivid-amber) !important;
            }
            .has-light-green-cyan-background-color {
                background-color: var(--wp--preset--color--light-green-cyan) !important;
            }
            .has-vivid-green-cyan-background-color {
                background-color: var(--wp--preset--color--vivid-green-cyan) !important;
            }
            .has-pale-cyan-blue-background-color {
                background-color: var(--wp--preset--color--pale-cyan-blue) !important;
            }
            .has-vivid-cyan-blue-background-color {
                background-color: var(--wp--preset--color--vivid-cyan-blue) !important;
            }
            .has-vivid-purple-background-color {
                background-color: var(--wp--preset--color--vivid-purple) !important;
            }
            .has-black-border-color {
                border-color: var(--wp--preset--color--black) !important;
            }
            .has-cyan-bluish-gray-border-color {
                border-color: var(--wp--preset--color--cyan-bluish-gray) !important;
            }
            .has-white-border-color {
                border-color: var(--wp--preset--color--white) !important;
            }
            .has-pale-pink-border-color {
                border-color: var(--wp--preset--color--pale-pink) !important;
            }
            .has-vivid-red-border-color {
                border-color: var(--wp--preset--color--vivid-red) !important;
            }
            .has-luminous-vivid-orange-border-color {
                border-color: var(--wp--preset--color--luminous-vivid-orange) !important;
            }
            .has-luminous-vivid-amber-border-color {
                border-color: var(--wp--preset--color--luminous-vivid-amber) !important;
            }
            .has-light-green-cyan-border-color {
                border-color: var(--wp--preset--color--light-green-cyan) !important;
            }
            .has-vivid-green-cyan-border-color {
                border-color: var(--wp--preset--color--vivid-green-cyan) !important;
            }
            .has-pale-cyan-blue-border-color {
                border-color: var(--wp--preset--color--pale-cyan-blue) !important;
            }
            .has-vivid-cyan-blue-border-color {
                border-color: var(--wp--preset--color--vivid-cyan-blue) !important;
            }
            .has-vivid-purple-border-color {
                border-color: var(--wp--preset--color--vivid-purple) !important;
            }
            .has-vivid-cyan-blue-to-vivid-purple-gradient-background {
                background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;
            }
            .has-light-green-cyan-to-vivid-green-cyan-gradient-background {
                background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;
            }
            .has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background {
                background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;
            }
            .has-luminous-vivid-orange-to-vivid-red-gradient-background {
                background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;
            }
            .has-very-light-gray-to-cyan-bluish-gray-gradient-background {
                background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;
            }
            .has-cool-to-warm-spectrum-gradient-background {
                background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important;
            }
            .has-blush-light-purple-gradient-background {
                background: var(--wp--preset--gradient--blush-light-purple) !important;
            }
            .has-blush-bordeaux-gradient-background {
                background: var(--wp--preset--gradient--blush-bordeaux) !important;
            }
            .has-luminous-dusk-gradient-background {
                background: var(--wp--preset--gradient--luminous-dusk) !important;
            }
            .has-pale-ocean-gradient-background {
                background: var(--wp--preset--gradient--pale-ocean) !important;
            }
            .has-electric-grass-gradient-background {
                background: var(--wp--preset--gradient--electric-grass) !important;
            }
            .has-midnight-gradient-background {
                background: var(--wp--preset--gradient--midnight) !important;
            }
            .has-small-font-size {
                font-size: var(--wp--preset--font-size--small) !important;
            }
            .has-medium-font-size {
                font-size: var(--wp--preset--font-size--medium) !important;
            }
            .has-large-font-size {
                font-size: var(--wp--preset--font-size--large) !important;
            }
            .has-x-large-font-size {
                font-size: var(--wp--preset--font-size--x-large) !important;
            }
            .wp-block-navigation a:where(:not(.wp-element-button)) {
                color: inherit;
            }
            :where(.wp-block-post-template.is-layout-flex) {
                gap: 1.25em;
            }
            :where(.wp-block-post-template.is-layout-grid) {
                gap: 1.25em;
            }
            :where(.wp-block-columns.is-layout-flex) {
                gap: 2em;
            }
            :where(.wp-block-columns.is-layout-grid) {
                gap: 2em;
            }
            .wp-block-pullquote {
                font-size: 1.5em;
                line-height: 1.6;
            }
        </style>
        <link rel="stylesheet" id="redux-extendify-styles-css" href="{{url("/")}}/wp-content/plugins/chirokind-plugin/redux-framework/redux-core/assets/css/extendify-utilities_ver%3D4.4.0.1.css" type="text/css" media="all" />
        <link rel="stylesheet" id="contact-form-7-css" href="{{url("/")}}/wp-content/plugins/contact-form-7/includes/css/styles_ver%3D5.9.3.css" type="text/css" media="all" />
        <link rel="stylesheet" id="woocommerce-layout-css" href="{{url("/")}}/wp-content/plugins/woocommerce/assets/css/woocommerce-layout_ver%3D8.7.0.css" type="text/css" media="all" />
        <link rel="stylesheet" id="woocommerce-smallscreen-css" href="{{url("/")}}/wp-content/plugins/woocommerce/assets/css/woocommerce-smallscreen_ver%3D8.7.0.css" type="text/css" media="only screen and (max-width: 768px)" />
        <link rel="stylesheet" id="woocommerce-general-css" href="{{url("/")}}/wp-content/plugins/woocommerce/assets/css/woocommerce_ver%3D8.7.0.css" type="text/css" media="all" />
        <style id="woocommerce-inline-inline-css" type="text/css">
            .woocommerce form .form-row .required {
                visibility: visible;
            }
        </style>
        <link rel="stylesheet" id="fontawesome-all-css" href="{{url("/")}}/wp-content/themes/chirokind/assets/vendors/fontawesome/css/all.min_ver%3D6.5.2.css" type="text/css" media="all" />
        <link rel="stylesheet" id="animate-css" href="{{url("/")}}/wp-content/themes/chirokind/assets/vendors/animate/animate.min_ver%3D6.5.2.css" type="text/css" media="all" />
        <link rel="stylesheet" id="custom-animate-css" href="{{url("/")}}/wp-content/themes/chirokind/assets/vendors/animate/custom-animate_ver%3D6.5.2.css" type="text/css" media="all" />
        <link rel="stylesheet" id="bootstrap-css" href="{{url("/")}}/wp-content/themes/chirokind/assets/vendors/bootstrap/css/bootstrap.min_ver%3D6.5.2.css" type="text/css" media="all" />
        <link rel="stylesheet" id="jquery-bxslider-css" href="{{url("/")}}/wp-content/themes/chirokind/assets/vendors/bxslider/jquery.bxslider_ver%3D6.5.2.css" type="text/css" media="all" />
        <link rel="stylesheet" id="jquery-magnific-popup-css" href="{{url("/")}}/wp-content/themes/chirokind/assets/vendors/jquery-magnific-popup/jquery.magnific-popup_ver%3D6.5.2.css" type="text/css" media="all" />
        <link rel="stylesheet" id="jquery-ui-css" href="{{url("/")}}/wp-content/themes/chirokind/assets/vendors/jquery-ui/jquery-ui_ver%3D6.5.2.css" type="text/css" media="all" />
        <link rel="stylesheet" id="nice-select-css" href="{{url("/")}}/wp-content/themes/chirokind/assets/vendors/nice-select/nice-select_ver%3D6.5.2.css" type="text/css" media="all" />
        <link rel="stylesheet" id="odometer-css" href="{{url("/")}}/wp-content/themes/chirokind/assets/vendors/odometer/odometer.min_ver%3D6.5.2.css" type="text/css" media="all" />
        <link rel="stylesheet" id="owl-carousel-css" href="{{url("/")}}/wp-content/themes/chirokind/assets/vendors/owl-carousel/owl.carousel.min_ver%3D6.5.2.css" type="text/css" media="all" />
        <link rel="stylesheet" id="owl-theme-default-css" href="{{url("/")}}/wp-content/themes/chirokind/assets/vendors/owl-carousel/owl.theme.default.min_ver%3D6.5.2.css" type="text/css" media="all" />
        <link rel="stylesheet" id="swiper-css" href="{{url("/")}}/wp-content/plugins/elementor/assets/lib/swiper/css/swiper.min_ver%3D5.3.6.css" type="text/css" media="all" />
        <link rel="stylesheet" id="vegas-css" href="{{url("/")}}/wp-content/themes/chirokind/assets/vendors/vegas/vegas.min_ver%3D6.5.2.css" type="text/css" media="all" />
        <link rel="stylesheet" id="icon-style-css" href="{{url("/")}}/wp-content/themes/chirokind/assets/vendors/thm-icons/style_ver%3D6.5.2.css" type="text/css" media="all" />
        <link rel="stylesheet" id="fancybox-css" href="{{url("/")}}/wp-content/themes/chirokind/assets/vendors/fancybox/fancybox.min_ver%3D6.5.2.css" type="text/css" media="all" />
        <link rel="stylesheet" id="aos-css" href="{{url("/")}}/wp-content/themes/chirokind/assets/vendors/aos/aos_ver%3D6.5.2.css" type="text/css" media="all" />
        <link rel="stylesheet" id="stylesheet-css" href="{{url("/")}}/wp-content/themes/chirokind/assets/vendors/futura-font/stylesheet_ver%3D6.5.2.css" type="text/css" media="all" />
        <link rel="stylesheet" id="stylesheet2-css" href="{{url("/")}}/wp-content/themes/chirokind/assets/vendors/glacialindifference-font/stylesheet_ver%3D6.5.2.css" type="text/css" media="all" />
        <link rel="stylesheet" id="jarallax-css" href="{{url("/")}}/wp-content/themes/chirokind/assets/vendors/jarallax/jarallax_ver%3D6.5.2.css" type="text/css" media="all" />
        <link rel="stylesheet" id="timepicker-css" href="{{url("/")}}/wp-content/themes/chirokind/assets/vendors/timePicker/timePicker_ver%3D6.5.2.css" type="text/css" media="all" />
        <link rel="stylesheet" id="chirokind-01-header-section-css" href="{{url("/")}}/wp-content/themes/chirokind/assets/css/module-css/01-header-section_ver%3D6.5.2.css" type="text/css" media="all" />
        <link rel="stylesheet" id="chirokind-02-banner-section-css" href="{{url("/")}}/wp-content/themes/chirokind/assets/css/module-css/02-banner-section_ver%3D6.5.2.css" type="text/css" media="all" />
        <link rel="stylesheet" id="chirokind-03-about-section-css" href="{{url("/")}}/wp-content/themes/chirokind/assets/css/module-css/03-about-section_ver%3D6.5.2.css" type="text/css" media="all" />
        <link rel="stylesheet" id="chirokind-04-fact-counter-section-css" href="{{url("/")}}/wp-content/themes/chirokind/assets/css/module-css/04-fact-counter-section_ver%3D6.5.2.css" type="text/css" media="all" />
        <link rel="stylesheet" id="chirokind-05-testimonial-section-css" href="{{url("/")}}/wp-content/themes/chirokind/assets/css/module-css/05-testimonial-section_ver%3D6.5.2.css" type="text/css" media="all" />
        <link rel="stylesheet" id="chirokind-06-partner-section-css" href="{{url("/")}}/wp-content/themes/chirokind/assets/css/module-css/06-partner-section_ver%3D6.5.2.css" type="text/css" media="all" />
        <link rel="stylesheet" id="chirokind-07-footer-section-css" href="{{url("/")}}/wp-content/themes/chirokind/assets/css/module-css/07-footer-section_ver%3D6.5.2.css" type="text/css" media="all" />
        <link rel="stylesheet" id="chirokind-08-blog-section-css" href="{{url("/")}}/wp-content/themes/chirokind/assets/css/module-css/08-blog-section_ver%3D6.5.2.css" type="text/css" media="all" />
        <link rel="stylesheet" id="chirokind-09-breadcrumb-section-css" href="{{url("/")}}/wp-content/themes/chirokind/assets/css/module-css/09-breadcrumb-section_ver%3D6.5.2.css" type="text/css" media="all" />
        <link rel="stylesheet" id="chirokind-10-contact-css" href="{{url("/")}}/wp-content/themes/chirokind/assets/css/module-css/10-contact_ver%3D6.5.2.css" type="text/css" media="all" />
        <link rel="stylesheet" id="chirokind-main-css" href="{{url("/")}}/wp-content/themes/chirokind/style_ver%3D6.5.2.css" type="text/css" media="all" />
        <link rel="stylesheet" id="chirokind-main-style-css" href="{{url("/")}}/wp-content/themes/chirokind/assets/css/style_ver%3D6.5.2.css" type="text/css" media="all" />
        <link rel="stylesheet" id="chirokind-custom-css" href="{{url("/")}}/wp-content/themes/chirokind/assets/css/custom_ver%3D6.5.2.css" type="text/css" media="all" />
        <link rel="stylesheet" id="chirokind-woocommerce-css" href="{{url("/")}}/wp-content/themes/chirokind/assets/css/woocommerce_ver%3D6.5.2.css" type="text/css" media="all" />
        <link rel="stylesheet" id="chirokind-responsive-css" href="{{url("/")}}/wp-content/themes/chirokind/assets/css/responsive_ver%3D6.5.2.css" type="text/css" media="all" />
        <link
            rel="stylesheet"
            id="chirokind-theme-fonts-css"
            href="https://fonts.googleapis.com/css?family=Barlow%3A300%2C400%2C500%2C600%2C700%2C800%2C900%7CRoboto%3A100%2C300%2C400%2C500%2C700%2C900%7CFira+Sans%3A300%2C400%2C500%2C600%2C700%2C800%2C900%7Creeyregular%3A300%2C400%2C500%2C600%2C700%2C800%7CJost%3A300%2C400%2C500%2C600%2C700%2C800&amp;subset=latin%2Clatin-ext"
            type="text/css"
            media="all"
        />
        <link rel="stylesheet" id="elementor-icons-css" href="{{url("/")}}/wp-content/plugins/elementor/assets/lib/eicons/css/elementor-icons.min_ver%3D5.29.0.css" type="text/css" media="all" />
        <link rel="stylesheet" id="elementor-frontend-css" href="{{url("/")}}/wp-content/plugins/elementor/assets/css/frontend-lite.min_ver%3D3.21.0.css" type="text/css" media="all" />
        <link rel="stylesheet" id="elementor-post-9-css" href="{{url("/")}}/wp-content/uploads/elementor/css/post-9_ver%3D1692792432.css" type="text/css" media="all" />
        <link rel="stylesheet" id="elementor-global-css" href="{{url("/")}}/wp-content/uploads/elementor/css/global_ver%3D1692792433.css" type="text/css" media="all" />
        <link rel="stylesheet" id="elementor-post-24-css" href="{{url("/")}}/wp-content/uploads/elementor/css/post-24_ver%3D1692793016.css" type="text/css" media="all" />
        <link
            rel="stylesheet"
            id="google-fonts-1-css"
            href="https://fonts.googleapis.com/css?family=Roboto%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CRoboto+Slab%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CBarlow%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&amp;display=swap&amp;ver=6.5.2"
            type="text/css"
            media="all"
        />
        <link rel="stylesheet" id="elementor-icons-shared-1-css" href="{{url("/")}}/wp-content/themes/chirokind/assets/vendors/thm-icons/style_ver%3D1.0.css" type="text/css" media="all" />
        <link rel="stylesheet" id="elementor-icons-icomoon-css" href="{{url("/")}}/wp-content/themes/chirokind/assets/vendors/thm-icons/style_ver%3D1.0.css" type="text/css" media="all" />
        <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="" />
        <script type="text/javascript" id="jquery-core-js-extra">
            /* <![CDATA[ */
            var chirokind_data = { ajaxurl: "https:\/\/C1rmkQ6tFroJ.com\/newwp\/chirokind\/wp-admin\/admin-ajax.php", nonce: "8e990ee0c3" };
            /* ]]> */
        </script>
        <script type="text/javascript" src="{{url("/")}}/wp-includes/js/jquery/jquery.min_ver%3D3.7.1.js" id="jquery-core-js"></script>
        <script type="text/javascript" src="{{url("/")}}/wp-includes/js/jquery/jquery-migrate.min_ver%3D3.4.1.js" id="jquery-migrate-js"></script>
        <script type="text/javascript" src="{{url("/")}}/wp-content/plugins/woocommerce/assets/js/jquery-blockui/jquery.blockUI.min_ver%3D2.7.0-wc.8.7.0.js" id="jquery-blockui-js" defer="defer" data-wp-strategy="defer"></script>
        <script type="text/javascript" id="wc-add-to-cart-js-extra">
            /* <![CDATA[ */
            var wc_add_to_cart_params = {
                ajax_url: "\/newwp\/chirokind\/wp-admin\/admin-ajax.php",
                wc_ajax_url: "\/newwp\/chirokind\/?wc-ajax=%%endpoint%%",
                i18n_view_cart: "View cart",
                cart_url: "https:\/\/C1rmkQ6tFroJ.com\/newwp\/chirokind\/my-cart\/",
                is_cart: "",
                cart_redirect_after_add: "no",
            };
            /* ]]> */
        </script>
        <script type="text/javascript" src="{{url("/")}}/wp-content/plugins/woocommerce/assets/js/frontend/add-to-cart.min_ver%3D8.7.0.js" id="wc-add-to-cart-js" defer="defer" data-wp-strategy="defer"></script>
        <script type="text/javascript" src="{{url("/")}}/wp-content/plugins/woocommerce/assets/js/js-cookie/js.cookie.min_ver%3D2.1.4-wc.8.7.0.js" id="js-cookie-js" defer="defer" data-wp-strategy="defer"></script>
        <script type="text/javascript" id="woocommerce-js-extra">
            /* <![CDATA[ */
            var woocommerce_params = { ajax_url: "\/newwp\/chirokind\/wp-admin\/admin-ajax.php", wc_ajax_url: "\/newwp\/chirokind\/?wc-ajax=%%endpoint%%" };
            /* ]]> */
        </script>
        <script type="text/javascript" src="{{url("/")}}/wp-content/plugins/woocommerce/assets/js/frontend/woocommerce.min_ver%3D8.7.0.js" id="woocommerce-js" defer="defer" data-wp-strategy="defer"></script>
        <link rel="https://api.w.org/" href="{{url("/")}}/wp-json/" />
        <link rel="alternate" type="application/json" href="{{url("/")}}/wp-json/wp/v2/pages/24" />
        <link rel="EditURI" type="application/rsd+xml" title="RSD" href="{{url("/")}}/xmlrpc.php?rsd" />
        <meta name="generator" content="WordPress 6.5.2" />
        <meta name="generator" content="WooCommerce 8.7.0" />
        <link rel="canonical" href="{{url("/")}}/home-page-06/" />
        <link rel="shortlink" href="{{url("/")}}/?p=24" />
        <link rel="alternate" type="application/json+oembed" href="{{url("/")}}/wp-json/oembed/1.0/embed?url=https%3A%2F%2FC1rmkQ6tFroJ.com%2Fnewwp%2Fchirokind%2Fhome-page-06%2F" />
        <link rel="alternate" type="text/xml+oembed" href="{{url("/")}}/wp-json/oembed/1.0/embed?url=https%3A%2F%2FC1rmkQ6tFroJ.com%2Fnewwp%2Fchirokind%2Fhome-page-06%2F&amp;format=xml" />
        <meta name="generator" content="Redux 4.4.0.1" />
        <noscript>
            <style>
                .woocommerce-product-gallery {
                    opacity: 1 !important;
                }
            </style>
        </noscript>
        <meta name="generator" content="Elementor 3.21.0; features: e_optimized_assets_loading, e_optimized_css_loading, additional_custom_breakpoints; settings: css_print_method-external, google_font-enabled, font_display-swap" />
    </head>

    <body class="page-template page-template-tpl-default-elementor page-template-tpl-default-elementor-php page page-id-24 theme-chirokind woocommerce-no-js menu-layer elementor-default elementor-kit-9 elementor-page elementor-page-24">
        <!-- Preloader -->
        <div class="loader-wrap">
            <div class="preloader">
                <div id="handle-preloader" class="handle-preloader">
                    <div class="layer layer-one"><span class="overlay"></span></div>
                    <div class="layer layer-three"><span class="overlay"></span></div>
                    <div class="layer layer-two"><span class="overlay"></span></div>
                    <div class="animation-preloader">
                        <div class="spinner"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Preloader End -->

        <!-- Header Mobile Settings -->

        <!-- Start sidebar widget content -->
        <div class="xs-sidebar-group info-group info-sidebar">
            <div class="xs-overlay xs-bg-black"></div>
            <div class="xs-sidebar-widget">
                <div class="sidebar-widget-container">
                    <div class="widget-heading">
                        <a href="#" class="close-side-widget">X</a>
                    </div>
                    <div class="sidebar-textwidget">
                        <div class="sidebar-info-contents">
                            <div class="content-inner">
                                <div class="logo">
                                    <a href="{{url("/")}}/" title="Chirokind"><img src="{{url("/")}}/wp-content/uploads/2023/06/side-content__logo.png" alt="logo" style="" /></a>
                                </div>

                                <div class="content-box">
                                    <h3>
                                        We Provide Physiotherapy &amp;<br />
                                        Recovery from pains.
                                    </h3>
                                    <div class="inner-text">
                                        <p>Chirokind &amp; Rehabilitation Clinic focuses on maintaining health for people of all ages, helping patients pain and prevent disease.</p>
                                    </div>
                                </div>
                                <div class="sidebar-contact-info">
                                    <h3>Conatct Us</h3>
                                    <ul>
                                        <li>
                                            <div class="inner">
                                                <div class="icon">
                                                    <span class="icon-location-1 map-marker"></span>
                                                </div>
                                                <div class="text">
                                                    <p>
                                                        123 Main Street,<br />
                                                        Anytown, USA
                                                    </p>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="inner">
                                                <div class="icon">
                                                    <span class="icon-envelope"></span>
                                                </div>
                                                <div class="text">
                                                    <p><a href="mailto:info@boydphysicaltherapy.com">info@boydphysicaltherapy.com</a></p>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="inner">
                                                <div class="icon">
                                                    <span class="icon-phone-1"></span>
                                                </div>
                                                <div class="text">
                                                    <p><a href="tel:1-800-555-1234">1-800-555-1234</a></p>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="inner">
                                                <div class="icon">
                                                    <span class="icon-back-in-time"></span>
                                                </div>
                                                <div class="text">
                                                    <p>Working Hrs : 9.30am to 6.30pm</p>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>

                                <div class="side-content-newsletter-box">
                                    <h3>Newsletter Subscription</h3>
                                    <script>
                                        (function () {
                                            window.mc4wp = window.mc4wp || {
                                                listeners: [],
                                                forms: {
                                                    on: function (evt, cb) {
                                                        window.mc4wp.listeners.push({
                                                            event: evt,
                                                            callback: cb,
                                                        });
                                                    },
                                                },
                                            };
                                        })();
                                    </script>
                                    <!-- Mailchimp for WordPress v4.9.11 - https://wordpress.org/plugins/mailchimp-for-wp/ -->
                                    <form id="mc4wp-form-1" class="mc4wp-form mc4wp-form-201" method="post" data-id="201" data-name="Newsletter Form">
                                        <div class="mc4wp-form-fields">
                                            <div class="form-group">
                                                <input type="email" name="email" placeholder="Enter your email" required="" />
                                                <button class="submit"><i class="icon-paper-plane"></i></button>
                                            </div>
                                        </div>
                                        <label style="display: none !important;">Leave this field empty if you're human: <input type="text" name="_mc4wp_honeypot" value="" tabindex="-1" autocomplete="off" /></label>
                                        <input type="hidden" name="_mc4wp_timestamp" value="1713352016" /><input type="hidden" name="_mc4wp_form_id" value="201" /><input type="hidden" name="_mc4wp_form_element_id" value="mc4wp-form-1" />
                                        <div class="mc4wp-response"></div>
                                    </form>
                                    <!-- / Mailchimp for WordPress Plugin -->
                                </div>

                                <div class="thm-social-link">
                                    <ul class="clearfix">
                                        <li>
                                            <a href="https://www.facebook.com/"><i class="fab icon icon-facebook-app-symbol"></i></a>
                                        </li>
                                        <li>
                                            <a href="https://www.twitter.com/"><i class="fab icon icon-twitter"></i></a>
                                        </li>
                                        <li>
                                            <a href="https://www.linkedin.com/"><i class="fab icon icon-linkedin"></i></a>
                                        </li>
                                        <li>
                                            <a href="https://www.instagram.com/"><i class="fab icon icon-instagram"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End sidebar widget content -->

        <div class="page-wrapper boxed_wrapper">
            <header class="main-header main-header-style6">
                <!--Start Main Menu Style1-->
                <nav class="main-menu main-menu-style1">
                    <div class="main-menu__wrapper clearfix">
                        <div class="container">
                            <div class="main-menu__wrapper-inner">
                                <div class="main-menu-style1-left">
                                    <div class="logo-box-style1">
                                        <a href="{{url("/")}}/" title="Chirokind"><img src="{{url("/")}}/wp-content/uploads/2023/06/logo-2.png" alt="logo" style="" /></a>
                                    </div>
                                </div>

                                <div class="main-menu-style1-right">
                                    <div class="main-menu-box">
                                        <a href="#" class="mobile-nav__toggler">
                                            <i class="icon-menu"></i>
                                        </a>
                                        <ul class="main-menu__list">
                                            <li
                                                id="menu-item-114"
                                                class="menu-item menu-item-type-custom menu-item-object-custom menu-item-home current-menu-ancestor current-menu-parent menu-item-has-children scrollToLink menu-item-114 dropdown @if(request()->is('/')) current @endif"
                                            >
                                                <a
                                                    title="Home"
                                                    href="{{url("/")}}/"
                                                    data-toggle="dropdown1"
                                                    class="hvr-underline-from-left1"
                                                    aria-expanded="false"
                                                    data-scroll=""
                                                    data-options="easing: easeOutQuart"
                                                >
                                                    Home
                                                </a>
                                            </li>
                                            <li id="menu-item-165" class="@if(request()->is('about-us')) current @endif menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children scrollToLink menu-item-165 dropdown">
                                                <a title="About Us" href="{{url("/")}}/about-us/" data-toggle="dropdown1" class="hvr-underline-from-left1" aria-expanded="false" data-scroll="" data-options="easing: easeOutQuart">About Us</a>
                                            </li>
                                            <li id="menu-item-167" class="@if(request()->is('services')) current @endif menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children scrollToLink menu-item-167 dropdown">
                                                <a title="Services" href="{{url("/")}}/services" data-toggle="dropdown1" class="@if(request()->is('services')) current @endif hvr-underline-from-left1" aria-expanded="false" data-scroll="" data-options="easing: easeOutQuart">Services</a>
                                            </li>
                                            <li id="menu-item-169" class="@if(request()->is('new-patients')) current @endif menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children scrollToLink menu-item-169 dropdown">
                                                <a title="Patients" href="{{url("/")}}/new-patients" data-toggle="dropdown1" class="hvr-underline-from-left1" aria-expanded="false" data-scroll="" data-options="easing: easeOutQuart">Patients</a>
                                            </li>
                                            <li style="display: none" id="menu-item-171" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children scrollToLink menu-item-171 dropdown">
                                                <a title="Blog" href="#" data-toggle="dropdown1" class="hvr-underline-from-left1" aria-expanded="false" data-scroll="" data-options="easing: easeOutQuart">Blog</a>
                                                <ul role="menu" class="submenu">
                                                    <li id="menu-item-117" class="menu-item menu-item-type-post_type menu-item-object-page scrollToLink menu-item-117">
                                                        <a title="Blog style 01" href="{{url("/")}}/blog-style-01/">Blog style 01</a>
                                                    </li>
                                                    <li id="menu-item-118" class="menu-item menu-item-type-post_type menu-item-object-page scrollToLink menu-item-118">
                                                        <a title="Blog style 02" href="{{url("/")}}/blog-style-02/">Blog style 02</a>
                                                    </li>
                                                    <li id="menu-item-3301" class="menu-item menu-item-type-post_type menu-item-object-post scrollToLink menu-item-3301">
                                                        <a title="Blog Details" href="{{url("/")}}/2023/07/12/how-we-can-cover-injury-pain-by-exercise-2/">Blog Details</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li style="display: none" id="menu-item-173" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children scrollToLink menu-item-173 dropdown">
                                                <a title="Pages" href="#" data-toggle="dropdown1" class="hvr-underline-from-left1" aria-expanded="false" data-scroll="" data-options="easing: easeOutQuart">Pages</a>
                                                <ul role="menu" class="submenu">
                                                    <li id="menu-item-174" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children scrollToLink menu-item-174 dropdown">
                                                        <a title="Our gallery" href="#">Our gallery</a>
                                                        <ul role="menu" class="submenu">
                                                            <li id="menu-item-124" class="menu-item menu-item-type-post_type menu-item-object-page scrollToLink menu-item-124">
                                                                <a title="gallery classic" href="{{url("/")}}/gallery-classic/">gallery classic</a>
                                                            </li>
                                                            <li id="menu-item-125" class="menu-item menu-item-type-post_type menu-item-object-page scrollToLink menu-item-125">
                                                                <a title="gallery full screen" href="{{url("/")}}/gallery-full-screen/">gallery full screen</a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li id="menu-item-152" class="menu-item menu-item-type-post_type menu-item-object-page scrollToLink menu-item-152">
                                                        <a title="Testimonials" href="{{url("/")}}/testimonials/">Testimonials</a>
                                                    </li>
                                                    <li id="menu-item-116" class="menu-item menu-item-type-post_type menu-item-object-page scrollToLink menu-item-116">
                                                        <a title="Appointment" href="{{url("/")}}/appointment/">Appointment</a>
                                                    </li>
                                                    <li id="menu-item-123" class="menu-item menu-item-type-post_type menu-item-object-page scrollToLink menu-item-123">
                                                        <a title="Faq’s" href="{{url("/")}}/faqs/">Faq’s</a>
                                                    </li>
                                                    <li id="menu-item-121" class="menu-item menu-item-type-post_type menu-item-object-page scrollToLink menu-item-121">
                                                        <a title="Coming Soon Page" href="{{url("/")}}/coming-soon-page/">Coming Soon Page</a>
                                                    </li>
                                                    <li id="menu-item-3226" class="menu-item menu-item-type-custom menu-item-object-custom scrollToLink menu-item-3226">
                                                        <a title="404 Error" href="{{url("/")}}/404">404 Error</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li style="display: none" id="menu-item-176" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children scrollToLink menu-item-176 dropdown">
                                                <a title="Shop" href="#" data-toggle="dropdown1" class="hvr-underline-from-left1" aria-expanded="false" data-scroll="" data-options="easing: easeOutQuart">Shop</a>
                                                <ul role="menu" class="submenu">
                                                    <li id="menu-item-3364" class="menu-item menu-item-type-post_type menu-item-object-page scrollToLink menu-item-3364">
                                                        <a title="Shop Page" href="{{url("/")}}/shop-page/">Shop Page</a>
                                                    </li>
                                                    <li id="menu-item-150" class="menu-item menu-item-type-post_type menu-item-object-page scrollToLink menu-item-150">
                                                        <a title="My Shop" href="{{url("/")}}/my-shop/">My Shop</a>
                                                    </li>
                                                    <li id="menu-item-4159" class="menu-item menu-item-type-post_type menu-item-object-product scrollToLink menu-item-4159">
                                                        <a title="Shop Details" href="{{url("/")}}/product/rowing-machine/">Shop Details</a>
                                                    </li>
                                                    <li id="menu-item-119" class="menu-item menu-item-type-post_type menu-item-object-page scrollToLink menu-item-119">
                                                        <a title="My Cart" href="{{url("/")}}/my-cart/">My Cart</a>
                                                    </li>
                                                    <li id="menu-item-120" class="menu-item menu-item-type-post_type menu-item-object-page scrollToLink menu-item-120">
                                                        <a title="My Checkout" href="{{url("/")}}/my-checkout/">My Checkout</a>
                                                    </li>
                                                    <li id="menu-item-141" class="menu-item menu-item-type-post_type menu-item-object-page scrollToLink menu-item-141">
                                                        <a title="My account" href="{{url("/")}}/my-account/">My account</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li id="menu-item-122" class="@if(request()->is('contact')) current @endif menu-item menu-item-type-post_type menu-item-object-page scrollToLink menu-item-122">
                                                <a title="Contact" href="{{url("/")}}/contact/" class="hvr-underline-from-left1" data-scroll="" data-options="easing: easeOutQuart">Contact</a>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="box-search-style1">
                                        <a href="#" class="search-toggler">
                                            <span class="icon-magnifying-glass"></span>
                                        </a>
                                    </div>

                                    <div class="side-content-button">
                                        <a class="navSidebar-button" href="#">
                                            <span class="line"></span>
                                            <span class="line two"></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
                <!--End Main Menu Style1-->
            </header>

            <div class="stricky-header stricky-header--style6 stricked-menu main-menu">
                <div class="sticky-header__content"></div>
                <!-- /.sticky-header__content -->
            </div>
            <!-- /.stricky-header -->

            <!-- Header Mobile Settings -->

            <div class="mobile-nav__wrapper">
                <div class="mobile-nav__overlay mobile-nav__toggler"></div>
                <div class="mobile-nav__content">
                    <span class="mobile-nav__close mobile-nav__toggler">
                        <i class="icon-close"></i>
                    </span>
                    <div class="logo-box">
                        <a href="{{url("/")}}/" title="Chirokind"><img src="{{url("/")}}/wp-content/uploads/2023/06/mobile-nav-logo.png" alt="logo" style="" /></a>
                    </div>
                    <div class="mobile-nav-search-box">
                        <div class="search-form">
                            <form method="post" action="{{url("/")}}/">
                                <label class="sr-only">search here</label>
                                <input type="text" name="s" value="" placeholder="Search Here..." required="" />
                                <button type="submit" aria-label="search submit" class="thm-btn">
                                    <i class="icon-magnifying-glass"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                    <div class="mobile-nav__container"></div>
                    <ul class="mobile-nav__contact list-unstyled">
                        <li>
                            <i class="fa fa-envelope"></i>
                            <a href="mailto:info@boydphysicaltherapy.com">info@boydphysicaltherapy.com</a>
                        </li>
                        <li>
                            <i class="fa fa-phone-alt"></i>
                            <a href="tel:1-800-555-1234">1-800-555-1234</a>
                        </li>
                    </ul>
                    <div class="mobile-nav__social">
                        <ul class="clearfix">
                            <li>
                                <a href="https://www.facebook.com/"><i class="fab icon icon-facebook-app-symbol"></i></a>
                            </li>
                            <li>
                                <a href="https://www.twitter.com/"><i class="fab icon icon-twitter"></i></a>
                            </li>
                            <li>
                                <a href="https://www.linkedin.com/"><i class="fab icon icon-linkedin"></i></a>
                            </li>
                            <li>
                                <a href="https://www.instagram.com/"><i class="fab icon icon-instagram"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div data-elementor-type="wp-page" data-elementor-id="24" class="elementor elementor-24">
                @yield('master')
            </div>


            <div class="clearfix"></div>

            <!--Start footer area -->
            <div class="bottom-parallax">
                <footer class="footer-area">
                    <!--Start Footer Main-->
                    <div class="footer-main">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-3 col-md-6 col-sm-12 single-widget footer-column">
                                    <div id="chirokind_about_company-2" class="footer-widget single-footer-widget widget_chirokind_about_company">
                                        <div class="our-company-info">
                                            <div class="footer-logo-style1">
                                                <a href="{{url("/")}}/"><img src="{{url("/")}}/wp-content/uploads/2023/07/footer-logo-1.png" alt="Awesome Image" /></a>
                                            </div>
                                            <div class="text">
                                                <p>We address the cause of your pain, not just the symptom.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-12 single-widget footer-column">
                                    <div id="nav_menu-2" class="footer-widget single-footer-widget widget_nav_menu">
                                        <div class="title">
                                            <h3>Quick Links</h3>
                                            <div class="border-box"></div>
                                        </div>
                                        <div class="menu-quick-links-container">
                                            <ul id="menu-quick-links" class="menu">
                                                <li id="menu-item-3257" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home menu-item-3257"><a href="{{url("/")}}/">Home</a></li>
                                                <li id="menu-item-3259" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3259"><a href="{{url("/")}}/about-us/">About Us</a></li>
                                                <li id="menu-item-3258" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3258"><a href="{{url("/")}}/blog-style-01/">Blog</a></li>
                                                <li id="menu-item-3260" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3260"><a href="{{url("/")}}/appointment/">Appointment</a></li>
                                                <li id="menu-item-3261" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3261"><a href="{{url("/")}}/contact/">Contact</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-12 single-widget footer-column">
                                    <div id="nav_menu-3" class="footer-widget single-footer-widget widget_nav_menu">
                                        <div class="title">
                                            <h3>Symptom</h3>
                                            <div class="border-box"></div>
                                        </div>
                                        <div class="menu-symptom-menu-container">
                                            <ul id="menu-symptom-menu" class="menu">
                                                <li id="menu-item-3271" class="menu-item menu-item-type-post_type menu-item-object-service menu-item-3271">
                                                    <a href="{{url("/")}}/service/laser-therapy-2/">Laser Therapy</a>
                                                </li>
                                                <li id="menu-item-3272" class="menu-item menu-item-type-post_type menu-item-object-service menu-item-3272">
                                                    <a href="{{url("/")}}/service/massage-therapy/">Massage Therapy</a>
                                                </li>
                                                <li id="menu-item-3273" class="menu-item menu-item-type-post_type menu-item-object-service menu-item-3273">
                                                    <a href="{{url("/")}}/service/physio-therapy/">Physio Therapy</a>
                                                </li>
                                                <li id="menu-item-3274" class="menu-item menu-item-type-post_type menu-item-object-service menu-item-3274">
                                                    <a href="{{url("/")}}/service/physiotherapy/">Physiotherapy</a>
                                                </li>
                                                <li id="menu-item-3275" class="menu-item menu-item-type-post_type menu-item-object-service menu-item-3275">
                                                    <a href="{{url("/")}}/service/sport-injury/">Sport Injury</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-12 single-widget footer-column">
                                    <div id="chirokind_contact_us-2" class="footer-widget single-footer-widget widget_chirokind_contact_us">
                                        <div class="margin-left-2">
                                            <div class="title">
                                                <h3>Get in Touch</h3>
                                                <div class="border-box"></div>
                                            </div>
                                            <div class="footer-widget-contact-info-box">
                                                <h4><a href="tel:(123)-456-74700">(123)-456-74700</a></h4>
                                                <p><a href="mailto:info@boydphysicaltherapy.com">info@boydphysicaltherapy.com</a></p>
                                                <p>123 Main Street, Anytown, USA</p>
                                                <div class="footer-social-link">
                                                    <ul class="clearfix">
                                                        <li>
                                                            <a href="https://www.facebook.com/"><i class="fab icon icon-facebook-app-symbol"></i></a>
                                                        </li>
                                                        <li>
                                                            <a href="https://www.twitter.com/"><i class="fab icon icon-twitter"></i></a>
                                                        </li>
                                                        <li>
                                                            <a href="https://www.linkedin.com/"><i class="fab icon icon-linkedin"></i></a>
                                                        </li>
                                                        <li>
                                                            <a href="https://www.instagram.com/"><i class="fab icon icon-instagram"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End Footer Main-->

                    <!--Start Footer Bottom-->
                    <div class="footer-bottom">
                        <div class="container">
                            <div class="bottom-inner">
                                <div class="copyright-text">
                                    <p>Copyright © <a href="#">Chirokind</a> Therapy Clinic 2023. All rights reserved.</p>
                                </div>
                                <div class="footer-bottom-right">
                                    <p>Created by <a href="#">DesignArc</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End Footer Bottom-->
                </footer>
            </div>
            <!--End footer area-->
        </div>

        <div class="search-popup">
            <div class="search-popup__overlay search-toggler"></div>
            <div class="search-popup__content">
                <div class="search-form">
                    <form method="post" action="{{url("/")}}/">
                        <label class="sr-only">search here</label>
                        <input type="text" name="s" value="" placeholder="Search Here..." required="" />
                        <button type="submit" aria-label="search submit" class="thm-btn">
                            <i class="icon-magnifying-glass"></i>
                        </button>
                    </form>
                </div>
            </div>
        </div>

        <!--Scroll to top-->
        <div class="scroll-to-top">
            <div>
                <div class="scroll-top-inner">
                    <div class="scroll-bar">
                        <div class="bar-inner"></div>
                    </div>
                    <div class="scroll-bar-text">Go to Top</div>
                </div>
            </div>
        </div>
        <!-- Scroll to top end -->

        <script>
            (function () {
                function maybePrefixUrlField() {
                    const value = this.value.trim();
                    if (value !== "" && value.indexOf("http") !== 0) {
                        this.value = "http://" + value;
                    }
                }

                const urlFields = document.querySelectorAll('.mc4wp-form input[type="url"]');
                for (let j = 0; j < urlFields.length; j++) {
                    urlFields[j].addEventListener("blur", maybePrefixUrlField);
                }
            })();
        </script>
        <script type="text/javascript">
            (function () {
                var c = document.body.className;
                c = c.replace(/woocommerce-no-js/, "woocommerce-js");
                document.body.className = c;
            })();
        </script>
        <script type="text/javascript" src="{{url("/")}}/wp-content/plugins/contact-form-7/includes/swv/js/index_ver%3D5.9.3.js" id="swv-js"></script>
        <script type="text/javascript" id="contact-form-7-js-extra">
            /* <![CDATA[ */
            var wpcf7 = { api: { root: "https:\/\/C1rmkQ6tFroJ.com\/newwp\/chirokind\/wp-json\/", namespace: "contact-form-7\/v1" } };
            /* ]]> */
        </script>
        <script type="text/javascript" src="{{url("/")}}/wp-content/plugins/contact-form-7/includes/js/index_ver%3D5.9.3.js" id="contact-form-7-js"></script>
        <script type="text/javascript" src="{{url("/")}}/wp-content/plugins/woocommerce/assets/js/sourcebuster/sourcebuster.min_ver%3D8.7.0.js" id="sourcebuster-js-js"></script>
        <script type="text/javascript" id="wc-order-attribution-js-extra">
            /* <![CDATA[ */
            var wc_order_attribution = {
                params: {
                    lifetime: 1.0000000000000000818030539140313095458623138256371021270751953125e-5,
                    session: 30,
                    ajaxurl: "https:\/\/C1rmkQ6tFroJ.com\/newwp\/chirokind\/wp-admin\/admin-ajax.php",
                    prefix: "wc_order_attribution_",
                    allowTracking: true,
                },
                fields: {
                    source_type: "current.typ",
                    referrer: "current_add.rf",
                    utm_campaign: "current.cmp",
                    utm_source: "current.src",
                    utm_medium: "current.mdm",
                    utm_content: "current.cnt",
                    utm_id: "current.id",
                    utm_term: "current.trm",
                    session_entry: "current_add.ep",
                    session_start_time: "current_add.fd",
                    session_pages: "session.pgs",
                    session_count: "udata.vst",
                    user_agent: "udata.uag",
                },
            };
            /* ]]> */
        </script>
        <script type="text/javascript" src="{{url("/")}}/wp-content/plugins/woocommerce/assets/js/frontend/order-attribution.min_ver%3D8.7.0.js" id="wc-order-attribution-js"></script>
        <script type="text/javascript" src="{{url("/")}}/wp-includes/js/jquery/ui/core.min_ver%3D1.13.2.js" id="jquery-ui-core-js"></script>
        <script type="text/javascript" src="{{url("/")}}/wp-content/themes/chirokind/assets/vendors/bootstrap/js/bootstrap.bundle.min_ver%3D2.1.2.js" id="bootstrap-bundle-js"></script>
        <script type="text/javascript" src="{{url("/")}}/wp-content/themes/chirokind/assets/vendors/bxslider/jquery.bxslider.min_ver%3D2.1.2.js" id="jquery-bxslider-js"></script>
        <script type="text/javascript" src="{{url("/")}}/wp-content/themes/chirokind/assets/vendors/circleType/jquery.circleType_ver%3D2.1.2.js" id="jquery-circletype-js"></script>
        <script type="text/javascript" src="{{url("/")}}/wp-content/themes/chirokind/assets/vendors/circleType/jquery.lettering.min_ver%3D2.1.2.js" id="jquery-lettering-js"></script>
        <script type="text/javascript" src="{{url("/")}}/wp-content/themes/chirokind/assets/vendors/isotope/isotope_ver%3D2.1.2.js" id="isotope-js"></script>
        <script type="text/javascript" src="{{url("/")}}/wp-content/themes/chirokind/assets/vendors/jquery-ajaxchimp/jquery.ajaxchimp.min_ver%3D2.1.2.js" id="jquery-ajaxchimp-js"></script>
        <script type="text/javascript" src="{{url("/")}}/wp-content/themes/chirokind/assets/vendors/jquery-appear/jquery.appear.min_ver%3D2.1.2.js" id="jquery-appear-js"></script>
        <script type="text/javascript" src="{{url("/")}}/wp-content/themes/chirokind/assets/vendors/jquery-magnific-popup/jquery.magnific-popup.min_ver%3D2.1.2.js" id="jquery-magnific-popup-js"></script>
        <script type="text/javascript" src="{{url("/")}}/wp-content/themes/chirokind/assets/vendors/jquery-ui/jquery-ui_ver%3D2.1.2.js" id="jquery-ui-js"></script>
        <script type="text/javascript" src="{{url("/")}}/wp-content/themes/chirokind/assets/vendors/nice-select/jquery.nice-select.min_ver%3D2.1.2.js" id="jquery-nice-select-js"></script>
        <script type="text/javascript" src="{{url("/")}}/wp-content/themes/chirokind/assets/vendors/odometer/odometer.min_ver%3D2.1.2.js" id="odometer-js"></script>
        <script type="text/javascript" src="{{url("/")}}/wp-content/themes/chirokind/assets/vendors/owl-carousel/owl.carousel.min_ver%3D2.1.2.js" id="owl-carousel-js"></script>
        <script type="text/javascript" src="{{url("/")}}/wp-content/themes/chirokind/assets/vendors/swiper/swiper.min_ver%3D2.1.2.js" id="swiper-js"></script>
        <script type="text/javascript" src="{{url("/")}}/wp-content/themes/chirokind/assets/vendors/vegas/vegas.min_ver%3D2.1.2.js" id="vegas-js"></script>
        <script type="text/javascript" src="{{url("/")}}/wp-content/themes/chirokind/assets/vendors/wnumb/wNumb.min_ver%3D2.1.2.js" id="wnumb-js"></script>
        <script type="text/javascript" src="{{url("/")}}/wp-content/themes/chirokind/assets/vendors/wow/wow_ver%3D2.1.2.js" id="wow-js"></script>
        <script type="text/javascript" src="{{url("/")}}/wp-content/themes/chirokind/assets/vendors/extra-scripts/jquery.paroller.min_ver%3D2.1.2.js" id="jquery-paroller-js"></script>
        <script type="text/javascript" src="{{url("/")}}/wp-content/themes/chirokind/assets/vendors/extra-scripts/jquery-sidebar-content_ver%3D2.1.2.js" id="jquery-sidebar-content-js"></script>
        <script type="text/javascript" src="{{url("/")}}/wp-content/themes/chirokind/assets/vendors/fancybox/jquery.fancybox_ver%3D2.1.2.js" id="jquery-fancybox-js"></script>
        <script type="text/javascript" src="{{url("/")}}/wp-content/themes/chirokind/assets/vendors/aos/aos_ver%3D2.1.2.js" id="aos-js"></script>
        <script type="text/javascript" src="{{url("/")}}/wp-content/themes/chirokind/assets/vendors/extra-scripts/TweenMax.min_ver%3D2.1.2.js" id="tweenmax-js"></script>
        <script type="text/javascript" src="{{url("/")}}/wp-content/themes/chirokind/assets/vendors/jarallax/jarallax.min_ver%3D2.1.2.js" id="jarallax-js"></script>
        <script type="text/javascript" src="{{url("/")}}/wp-content/themes/chirokind/assets/vendors/extra-scripts/tilt.jquery_ver%3D2.1.2.js" id="tilt-jquery-js"></script>
        <script type="text/javascript" src="{{url("/")}}/wp-content/themes/chirokind/assets/vendors/timePicker/timePicker_ver%3D2.1.2.js" id="timepicker-js"></script>
        <script type="text/javascript" src="{{url("/")}}/wp-content/themes/chirokind/assets/vendors/countdown/jquery.countdown.min_ver%3D6.5.2.js" id="jquery-countdown-js"></script>
        <script type="text/javascript" src="{{url("/")}}/wp-content/themes/chirokind/assets/js/icomon_ver%3D6.5.2.js" id="chirokind-icomon-js"></script>
        <script type="text/javascript" src="{{url("/")}}/wp-content/themes/chirokind/assets/js/custom_ver%3D6.5.2.js" id="chirokind-main-custom-js"></script>
        <script type="text/javascript" src="{{url("/")}}/wp-includes/js/comment-reply.min_ver%3D6.5.2.js" id="comment-reply-js" async="async" data-wp-strategy="async"></script>
        <script type="text/javascript" src="{{url("/")}}/wp-content/plugins/elementor/assets/js/webpack.runtime.min_ver%3D3.21.0.js" id="elementor-webpack-runtime-js"></script>
        <script type="text/javascript" src="{{url("/")}}/wp-content/plugins/elementor/assets/js/frontend-modules.min_ver%3D3.21.0.js" id="elementor-frontend-modules-js"></script>
        <script type="text/javascript" src="{{url("/")}}/wp-content/plugins/elementor/assets/lib/waypoints/waypoints.min_ver%3D4.0.2.js" id="elementor-waypoints-js"></script>
        <script type="text/javascript" id="elementor-frontend-js-before">
            /* <![CDATA[ */
            var elementorFrontendConfig = {
                environmentMode: { edit: false, wpPreview: false, isScriptDebug: false },
                i18n: {
                    shareOnFacebook: "Share on Facebook",
                    shareOnTwitter: "Share on Twitter",
                    pinIt: "Pin it",
                    download: "Download",
                    downloadImage: "Download image",
                    fullscreen: "Fullscreen",
                    zoom: "Zoom",
                    share: "Share",
                    playVideo: "Play Video",
                    previous: "Previous",
                    next: "Next",
                    close: "Close",
                    a11yCarouselWrapperAriaLabel: "Carousel | Horizontal scrolling: Arrow Left & Right",
                    a11yCarouselPrevSlideMessage: "Previous slide",
                    a11yCarouselNextSlideMessage: "Next slide",
                    a11yCarouselFirstSlideMessage: "This is the first slide",
                    a11yCarouselLastSlideMessage: "This is the last slide",
                    a11yCarouselPaginationBulletMessage: "Go to slide",
                },
                is_rtl: false,
                breakpoints: { xs: 0, sm: 480, md: 768, lg: 1025, xl: 1440, xxl: 1600 },
                responsive: {
                    breakpoints: {
                        mobile: { label: "Mobile Portrait", value: 767, default_value: 767, direction: "max", is_enabled: true },
                        mobile_extra: { label: "Mobile Landscape", value: 880, default_value: 880, direction: "max", is_enabled: false },
                        tablet: { label: "Tablet Portrait", value: 1024, default_value: 1024, direction: "max", is_enabled: true },
                        tablet_extra: { label: "Tablet Landscape", value: 1200, default_value: 1200, direction: "max", is_enabled: false },
                        laptop: { label: "Laptop", value: 1366, default_value: 1366, direction: "max", is_enabled: false },
                        widescreen: { label: "Widescreen", value: 2400, default_value: 2400, direction: "min", is_enabled: false },
                    },
                },
                version: "3.21.0",
                is_static: false,
                experimentalFeatures: { e_optimized_assets_loading: true, e_optimized_css_loading: true, additional_custom_breakpoints: true, container_grid: true, home_screen: true, "ai-layout": true, "landing-pages": true },
                urls: { assets: "https:\/\/C1rmkQ6tFroJ.com\/newwp\/chirokind\/wp-content\/plugins\/elementor\/assets\/" },
                swiperClass: "swiper-container",
                settings: { page: [], editorPreferences: [] },
                kit: {
                    active_breakpoints: ["viewport_mobile", "viewport_tablet"],
                    lightbox_enable_counter: "yes",
                    lightbox_enable_fullscreen: "yes",
                    lightbox_enable_zoom: "yes",
                    lightbox_enable_share: "yes",
                    lightbox_title_src: "title",
                    lightbox_description_src: "description",
                },
                post: { id: 24, title: "Home%20Page%2006%20%E2%80%93%20Chirokind", excerpt: "", featuredImage: false },
            };
            /* ]]> */
        </script>
        <script type="text/javascript" src="{{url("/")}}/wp-content/plugins/elementor/assets/js/frontend.min_ver%3D3.21.0.js" id="elementor-frontend-js"></script>
        <script type="text/javascript" src="{{url("/")}}/wp-content/plugins/chirokind-plugin/assets/js/service-slider_ver%3D1.0.0.js" id="service-carousel-script-js"></script>
        <script type="text/javascript" src="{{url("/")}}/wp-content/plugins/chirokind-plugin/assets/js/funfacts_ver%3D1.0.0.js" id="counter-slider-js"></script>
        <script type="text/javascript" src="{{url("/")}}/wp-content/plugins/chirokind-plugin/assets/js/accordion_ver%3D1.0.0.js" id="accordion-script-js"></script>
        <script type="text/javascript" src="{{url("/")}}/wp-content/plugins/chirokind-plugin/assets/js/image-counter_ver%3D1.0.0.js" id="img-counter-js"></script>
        <script type="text/javascript" src="{{url("/")}}/wp-content/plugins/chirokind-plugin/assets/js/testimonials-carousel_ver%3D1.0.0.js" id="testimonial-carousel-js"></script>
        <script type="text/javascript" defer="" src="{{url("/")}}/wp-content/plugins/mailchimp-for-wp/assets/js/forms_ver%3D4.9.11.js" id="mc4wp-forms-api-js"></script>
    </body>
</html>
