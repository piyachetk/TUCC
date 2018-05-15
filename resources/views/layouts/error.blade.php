<!doctype html>
<html>
<head>
    <title>ชมรมคอมพิวเตอร์ โรงเรียนเตรียมอุดมศึกษา :: @yield('code') @yield('title')</title>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta name="theme-color" content="#616161">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/css/materialize.min.css" rel="stylesheet"/>
    <link rel="shortcut icon" href="/favicon.png" />
    <link href="https://fonts.googleapis.com/css?family=Kanit" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Prompt" rel="stylesheet">
    <style>
        .th {
            font-family: 'Kanit', Sans-Serif !important
        }

        body {
            display: flex;
            min-height: 100vh;
            flex-direction: column;
        }

        main {
            flex: 1 0 auto;
        }

        .page-footer a:hover {
            text-decoration: underline;
        }

        .brand-logo {
            font-size: 1.7rem !important
        }

        .light {
            font-family: 'Roboto', sans-serif;
            font-weight: 300;
        }

        h1 {
            font-size: 80px
        }

        h2 {
            font-size: 30px;
            margin-bottom: 15px
        }

        h3 {
            font-size: 25px
        }

        main {
            text-align: center
        }

        .footer-copyright a {
            font-family: 'Prompt', sans-serif;
            color: lightgrey;
        }

        .footer-copyright a:hover {
            font-family: 'Prompt', sans-serif;
            text-decoration: underline
        }
    </style>
</head>
<body class="grey darken-2">
<div class="navbar-fixed grey darken-3">
    <nav class="grey darken-3"
         style="box-shadow: rgba(0, 0, 0, 0.16) 0px 2px 5px 0px, rgba(0, 0, 0, 0.12) 0px 2px 10px 0px;">
        <div class="nav-wrapper container " style="font-size: 1.7rem !important; font-family: 'Roboto', sans-serif; font-weight: 600; line-height: 64px; box-sizing: inherit; white-space: nowrap;">
            <a href="/" class="brand-logo hide-on-small-only"><span
                        class="pink-text text-accent-2">TRIAM UDOM</span> COMPUTER CLUB</a>
            <a href="/" class="brand-logo hide-on-med-and-up"><span class="pink-text">TU</span> COMPUTER CLUB</a>
        </div>
    </nav>
</div>

<div class="black-text grey darken-2" style="height:30px"></div>

<main class="container">
    <div class="red darken-2 white-text" style="padding: 20px;margin-bottom:20px; padding-top:50px; padding-bottom:50px;">
        @section('content')
            <h1 class="center-align light" id="title">@yield('title')</h1>
            <h2 class="center-align light th">@yield('description')</h2>
        @show
    </div>
    @section('button')
        <a href="/" class="waves-effect waves-light btn blue darken-2 tooltipped center-align th" data-tooltip="กลับสู่หน้าหลัก" style="width:80%;max-width:350px;margin-top:20px">กลับไปยังหน้าหลัก</a>
    @show
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

</body>
</html>
</body>
</html>
