<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <!-- Created by Siwat Techavoranant in 2017 -->
    <title>ชมรมคอมพิวเตอร์ โรงเรียนเตรียมอุดมศึกษา :: {{ $title }}</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#616161">
    <meta name="keyword" content="TUCC Triamudom Computer Club">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/css/materialize.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Prompt" rel="stylesheet">
    <style>
        body {
            font-family: 'Prompt', sans-serif;
            display: flex;
            min-height: 100vh;
            flex-direction: column;
        }

        main {
            flex: 1 0 auto;
            min-height: 400px;
        }

        .page-footer a:hover {
            text-decoration: underline;
        }

        .brand-logo {
            font-size: 1.7rem !important;
            font-family: "Roboto", sans-serif;
            font-weight: 600;
        }

        .footer-copyright a {
            color: lightgrey;
        }

        .footer-copyright a:hover {
            text-decoration: underline
        }

        .fullwidth {
            width: 100%
        }

        main {
            padding-top: 15px;
            font-size: 18px
        }

        .smll {
            font-size: 70%
        }

        h1 {
            line-height: 120%;
            text-align: center;
            font-size: 5vmax
        }

        h2 {
            text-align: center;
        }

        h3 {
            line-height: 4rem
        }

        .card-image {
            max-height: 17rem
        }

        .card-image .activator {
            -webkit-transition: all 1.3s ease-out;
            transition: all 1.3s ease-out;
        }

        a:hover .activator, a:focus .activator {
            -webkit-transform: scale(1.3);
            transform: scale(1.3);
        }

        p.th {
            line-height: 2.0rem;
        }

        .fullwidth {
            width: 100%
        }

        .sector {
            margin: 0.5rem 0 1rem 0;
            border: 1px solid #e0e0e0;
            border-radius: 3px;
            background-color: #fff;
            line-height: 1.5rem;
            padding: 15px 25px 15px 15px;
            width: 100%
        }

        nav {
            opacity: 0.9;
        }

        .en {
            font-family: 'Roboto', Sans-Serif;
        }

        input[type='number'] {
            -moz-appearance: textfield;
        }

        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
            -webkit-appearance: none;
        }

        .modal-content li {
            margin-bottom: 0.7rem
        }

        .btn.fullwidth {
            margin-bottom: 0.3rem
        }
    </style>
    <style type="text/css">
        .fb_hidden {
            position: absolute;
            top: -10000px;
            z-index: 10001
        }

        .fb_reposition {
            overflow: hidden;
            position: relative
        }

        .fb_invisible {
            display: none
        }

        .fb_reset {
            background: none;
            border: 0;
            border-spacing: 0;
            color: #000;
            cursor: auto;
            direction: ltr;
            font-family: "lucida grande", tahoma, verdana, arial, sans-serif;
            font-size: 11px;
            font-style: normal;
            font-variant: normal;
            font-weight: normal;
            letter-spacing: normal;
            line-height: 1;
            margin: 0;
            overflow: visible;
            padding: 0;
            text-align: left;
            text-decoration: none;
            text-indent: 0;
            text-shadow: none;
            text-transform: none;
            visibility: visible;
            white-space: normal;
            word-spacing: normal
        }

        .fb_reset > div {
            overflow: hidden
        }

        .fb_link img {
            border: none
        }

        @keyframes fb_transform {
            from {
                opacity: 0;
                transform: scale(.95)
            }
            to {
                opacity: 1;
                transform: scale(1)
            }
        }

        .fb_animate {
            animation: fb_transform .3s forwards
        }

        .fb_dialog {
            background: rgba(82, 82, 82, .7);
            position: absolute;
            top: -10000px;
            z-index: 10001
        }

        .fb_reset .fb_dialog_legacy {
            overflow: visible
        }

        .fb_dialog_advanced {
            padding: 10px;
            border-radius: 8px
        }

        .fb_dialog_content {
            background: #fff;
            color: #333
        }

        .fb_dialog_close_icon {
            background: url(https://static.xx.fbcdn.net/rsrc.php/v3/yq/r/IE9JII6Z1Ys.png) no-repeat scroll 0 0 transparent;
            cursor: pointer;
            display: block;
            height: 15px;
            position: absolute;
            right: 18px;
            top: 17px;
            width: 15px
        }

        .fb_dialog_mobile .fb_dialog_close_icon {
            top: 5px;
            left: 5px;
            right: auto
        }

        .fb_dialog_padding {
            background-color: transparent;
            position: absolute;
            width: 1px;
            z-index: -1
        }

        .fb_dialog_close_icon:hover {
            background: url(https://static.xx.fbcdn.net/rsrc.php/v3/yq/r/IE9JII6Z1Ys.png) no-repeat scroll 0 -15px transparent
        }

        .fb_dialog_close_icon:active {
            background: url(https://static.xx.fbcdn.net/rsrc.php/v3/yq/r/IE9JII6Z1Ys.png) no-repeat scroll 0 -30px transparent
        }

        .fb_dialog_loader {
            background-color: #f6f7f9;
            border: 1px solid #606060;
            font-size: 24px;
            padding: 20px
        }

        .fb_dialog_top_left, .fb_dialog_top_right, .fb_dialog_bottom_left, .fb_dialog_bottom_right {
            height: 10px;
            width: 10px;
            overflow: hidden;
            position: absolute
        }

        .fb_dialog_top_left {
            background: url(https://static.xx.fbcdn.net/rsrc.php/v3/ye/r/8YeTNIlTZjm.png) no-repeat 0 0;
            left: -10px;
            top: -10px
        }

        .fb_dialog_top_right {
            background: url(https://static.xx.fbcdn.net/rsrc.php/v3/ye/r/8YeTNIlTZjm.png) no-repeat 0 -10px;
            right: -10px;
            top: -10px
        }

        .fb_dialog_bottom_left {
            background: url(https://static.xx.fbcdn.net/rsrc.php/v3/ye/r/8YeTNIlTZjm.png) no-repeat 0 -20px;
            bottom: -10px;
            left: -10px
        }

        .fb_dialog_bottom_right {
            background: url(https://static.xx.fbcdn.net/rsrc.php/v3/ye/r/8YeTNIlTZjm.png) no-repeat 0 -30px;
            right: -10px;
            bottom: -10px
        }

        .fb_dialog_vert_left, .fb_dialog_vert_right, .fb_dialog_horiz_top, .fb_dialog_horiz_bottom {
            position: absolute;
            background: #525252;
            filter: alpha(opacity=70);
            opacity: .7
        }

        .fb_dialog_vert_left, .fb_dialog_vert_right {
            width: 10px;
            height: 100%
        }

        .fb_dialog_vert_left {
            margin-left: -10px
        }

        .fb_dialog_vert_right {
            right: 0;
            margin-right: -10px
        }

        .fb_dialog_horiz_top, .fb_dialog_horiz_bottom {
            width: 100%;
            height: 10px
        }

        .fb_dialog_horiz_top {
            margin-top: -10px
        }

        .fb_dialog_horiz_bottom {
            bottom: 0;
            margin-bottom: -10px
        }

        .fb_dialog_iframe {
            line-height: 0
        }

        .fb_dialog_content .dialog_title {
            background: #6d84b4;
            border: 1px solid #365899;
            color: #fff;
            font-size: 14px;
            font-weight: bold;
            margin: 0
        }

        .fb_dialog_content .dialog_title > span {
            background: url(https://static.xx.fbcdn.net/rsrc.php/v3/yd/r/Cou7n-nqK52.gif) no-repeat 5px 50%;
            float: left;
            padding: 5px 0 7px 26px
        }

        body.fb_hidden {
            -webkit-transform: none;
            height: 100%;
            margin: 0;
            overflow: visible;
            position: absolute;
            top: -10000px;
            left: 0;
            width: 100%
        }

        .fb_dialog.fb_dialog_mobile.loading {
            background: url(https://static.xx.fbcdn.net/rsrc.php/v3/ya/r/3rhSv5V8j3o.gif) white no-repeat 50% 50%;
            min-height: 100%;
            min-width: 100%;
            overflow: hidden;
            position: absolute;
            top: 0;
            z-index: 10001
        }

        .fb_dialog.fb_dialog_mobile.loading.centered {
            width: auto;
            height: auto;
            min-height: initial;
            min-width: initial;
            background: none
        }

        .fb_dialog.fb_dialog_mobile.loading.centered #fb_dialog_loader_spinner {
            width: 100%
        }

        .fb_dialog.fb_dialog_mobile.loading.centered .fb_dialog_content {
            background: none
        }

        .loading.centered #fb_dialog_loader_close {
            color: #fff;
            display: block;
            padding-top: 20px;
            clear: both;
            font-size: 18px
        }

        #fb-root #fb_dialog_ipad_overlay {
            background: rgba(0, 0, 0, .45);
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            top: 0;
            width: 100%;
            min-height: 100%;
            z-index: 10000
        }

        #fb-root #fb_dialog_ipad_overlay.hidden {
            display: none
        }

        .fb_dialog.fb_dialog_mobile.loading iframe {
            visibility: hidden
        }

        .fb_dialog_content .dialog_header {
            -webkit-box-shadow: white 0 1px 1px -1px inset;
            background: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#738ABA), to(#2C4987));
            border-bottom: 1px solid;
            border-color: #1d4088;
            color: #fff;
            font: 14px Helvetica, sans-serif;
            font-weight: bold;
            text-overflow: ellipsis;
            text-shadow: rgba(0, 30, 84, .296875) 0 -1px 0;
            vertical-align: middle;
            white-space: nowrap
        }

        .fb_dialog_content .dialog_header table {
            -webkit-font-smoothing: subpixel-antialiased;
            height: 43px;
            width: 100%
        }

        .fb_dialog_content .dialog_header td.header_left {
            font-size: 12px;
            padding-left: 5px;
            vertical-align: middle;
            width: 60px
        }

        .fb_dialog_content .dialog_header td.header_right {
            font-size: 12px;
            padding-right: 5px;
            vertical-align: middle;
            width: 60px
        }

        .fb_dialog_content .touchable_button {
            background: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#4966A6), color-stop(.5, #355492), to(#2A4887));
            border: 1px solid #29487d;
            -webkit-background-clip: padding-box;
            -webkit-border-radius: 3px;
            -webkit-box-shadow: rgba(0, 0, 0, .117188) 0 1px 1px inset, rgba(255, 255, 255, .167969) 0 1px 0;
            display: inline-block;
            margin-top: 3px;
            max-width: 85px;
            line-height: 18px;
            padding: 4px 12px;
            position: relative
        }

        .fb_dialog_content .dialog_header .touchable_button input {
            border: none;
            background: none;
            color: #fff;
            font: 12px Helvetica, sans-serif;
            font-weight: bold;
            margin: 2px -12px;
            padding: 2px 6px 3px 6px;
            text-shadow: rgba(0, 30, 84, .296875) 0 -1px 0
        }

        .fb_dialog_content .dialog_header .header_center {
            color: #fff;
            font-size: 16px;
            font-weight: bold;
            line-height: 18px;
            text-align: center;
            vertical-align: middle
        }

        .fb_dialog_content .dialog_content {
            background: url(https://static.xx.fbcdn.net/rsrc.php/v3/y9/r/jKEcVPZFk-2.gif) no-repeat 50% 50%;
            border: 1px solid #555;
            border-bottom: 0;
            border-top: 0;
            height: 150px
        }

        .fb_dialog_content .dialog_footer {
            background: #f6f7f9;
            border: 1px solid #555;
            border-top-color: #ccc;
            height: 40px
        }

        #fb_dialog_loader_close {
            float: left
        }

        .fb_dialog.fb_dialog_mobile .fb_dialog_close_button {
            text-shadow: rgba(0, 30, 84, .296875) 0 -1px 0
        }

        .fb_dialog.fb_dialog_mobile .fb_dialog_close_icon {
            visibility: hidden
        }

        #fb_dialog_loader_spinner {
            animation: rotateSpinner 1.2s linear infinite;
            background-color: transparent;
            background-image: url(https://static.xx.fbcdn.net/rsrc.php/v3/yD/r/t-wz8gw1xG1.png);
            background-repeat: no-repeat;
            background-position: 50% 50%;
            height: 24px;
            width: 24px
        }

        @keyframes rotateSpinner {
            0% {
                transform: rotate(0deg)
            }
            100% {
                transform: rotate(360deg)
            }
        }

        .fb_iframe_widget {
            display: inline-block;
            position: relative
        }

        .fb_iframe_widget span {
            display: inline-block;
            position: relative;
            text-align: justify
        }

        .fb_iframe_widget iframe {
            position: absolute
        }

        .fb_iframe_widget_fluid_desktop, .fb_iframe_widget_fluid_desktop span, .fb_iframe_widget_fluid_desktop iframe {
            max-width: 100%
        }

        .fb_iframe_widget_fluid_desktop iframe {
            min-width: 220px;
            position: relative
        }

        .fb_iframe_widget_lift {
            z-index: 1
        }

        .fb_hide_iframes iframe {
            position: relative;
            left: -10000px
        }

        .fb_iframe_widget_loader {
            position: relative;
            display: inline-block
        }

        .fb_iframe_widget_fluid {
            display: inline
        }

        .fb_iframe_widget_fluid span {
            width: 100%
        }

        .fb_iframe_widget_loader iframe {
            min-height: 32px;
            z-index: 2;
            zoom: 1
        }

        .fb_iframe_widget_loader .FB_Loader {
            background: url(https://static.xx.fbcdn.net/rsrc.php/v3/y9/r/jKEcVPZFk-2.gif) no-repeat;
            height: 32px;
            width: 32px;
            margin-left: -16px;
            position: absolute;
            left: 50%;
            z-index: 4
        }

        .fb_customer_chat_bounce_in {
            animation-duration: 250ms;
            animation-name: fb_bounce_in
        }

        .fb_customer_chat_bounce_out {
            animation-duration: 250ms;
            animation-name: fb_fade_out
        }

        .fb_invisible_flow {
            display: inherit;
            height: 0;
            overflow-x: hidden;
            width: 0
        }

        .fb_mobile_overlay_active {
            background-color: #fff;
            height: 100%;
            overflow: hidden;
            position: fixed;
            visibility: hidden;
            width: 100%
        }

        @keyframes fb_fade_out {
            from {
                opacity: 1
            }
            to {
                opacity: 0
            }
        }

        @keyframes fb_bounce_in {
            0% {
                opacity: 0;
                transform: scale(.8, .8);
                transform-origin: 100% 100%
            }
            10% {
                opacity: .1
            }
            20% {
                opacity: .2
            }
            30% {
                opacity: .3
            }
            40% {
                opacity: .4
            }
            50% {
                opacity: .5
            }
            60% {
                opacity: .6
            }
            70% {
                opacity: .7
            }
            80% {
                opacity: .8;
                transform: scale(1.03, 1.03)
            }
            90% {
                opacity: .9
            }
            100% {
                opacity: 1;
                transform: scale(1, 1)
            }
        }
    </style>

    @yield('end-of-head')
</head>
<body class="@yield('body-class')">

<div id="fb-root" class=" fb_reset">
    <div style="position: absolute; top: -10000px; height: 0px; width: 0px;">
        <div>
            <iframe name="fb_xdm_frame_https" allowtransparency="true" allowfullscreen="true" scrolling="no"
                    allow="encrypted-media" id="fb_xdm_frame_https" aria-hidden="true"
                    title="Facebook Cross Domain Communication Frame" tabindex="-1" style="border: medium none;"
                    src="https://staticxx.facebook.com/connect/xd_arbiter/r/RQ7NiRXMcYA.js?version=42#channel=f20172e3f665b3&amp;origin=https%3A%2F%2Fkeendev.net"
                    frameborder="0"></iframe>
        </div>
    </div>
    <div style="position: absolute; top: -10000px; height: 0px; width: 0px;">
        <div></div>
    </div>
</div>

<script id="facebook-jssdk"
        src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&amp;version=v2.9&amp;appId=1202760429830785">
</script>

<script>(function (d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s);
        js.id = id;
        js.src = "https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.9&appId=1202760429830785";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
</script>

<div class="navbar-fixed grey darken-3">
    <nav class="grey darken-3"
         style="box-shadow: rgba(0, 0, 0, 0.16) 0px 2px 5px 0px, rgba(0, 0, 0, 0.12) 0px 2px 10px 0px;">
        <div class="nav-wrapper container ">
            <a href="/" class="brand-logo hide-on-small-only" {{ Route::current()->getName() == 'index' ? 'style="display: none;"' : '' }}><span
                        class="pink-text text-accent-2">TRIAM UDOM</span> COMPUTER CLUB</a>
            <a href="/" class="brand-logo hide-on-med-and-up" {{ Route::current()->getName() == 'index' ? 'style="display: none;"' : '' }}>
                <!--img src="https://clubs.triamudom.ac.th/phrakiao.png" style="height:1.8rem"/-->TU COMPUTER CLUB</a>
            <!--ul class="right hide-on-med-and-down navul">
                <li><a href="/">หน้าหลัก</a></li>
            </ul>
            <ul id="nav-mobile" class="side-nav">
                <li><a href="/">หน้าหลัก</a></li>
                <li><a href="/#s-exhibition">นิทรรศการ</a></li>
                <li><a href="/#s-show">การแสดง</a></li>
                <li><a href="/#s-competition">การแข่งขัน</a></li>
                <li><a href="/#s-more">สถานที่-ติดตาม</a></li>
            </ul>
            <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a-->
        </div>
    </nav>
</div>

<div id="fb-root"></div>

@yield('before-main')

<main class="container">
    @yield('main')
</main>

<footer class="page-footer grey darken-3">
    <div class="footer-copyright">
        <div class="container">
            <a href="https://clubs.triamudom.ac.th">งานกิจกรรมพัฒนาผู้เรียน โรงเรียนเตรียมอุดมศึกษา</a>
        </div>
    </div>
</footer>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.min.js"></script>
<script>
    $(function () {
        $(".button-collapse").sideNav();

    });
</script>

@yield('end-of-body')

</body>
</html>