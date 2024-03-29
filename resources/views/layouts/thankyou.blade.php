<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link href='https://fonts.googleapis.com/css?family=Lato:300,400|Montserrat:700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://2-22-4-dot-lead-pages.appspot.com/static/lp918/min/default_thank_you.css">
    <!-- <script src="https://2-22-4-dot-lead-pages.appspot.com/static/lp918/min/jquery-1.9.1.min.js"></script> -->
    <script src="https://2-22-4-dot-lead-pages.appspot.com/static/lp918/min/html5shiv.js"></script>
</head>

<body>
    <header id="header">
        <img class="thankLogo" src="{{ asset('images/logo 2.png') }}" alt="">
        <h1 class="site-header__title" data-lead-id="site-header-title">THANK YOU!</h1>
    </header>

    <div class="main-content ">
        <i class="fa fa-check" id="checkmark"></i>
        <p class="main-content__body" data-lead-id="main-content-body">Thanks a bunch for filling that out. It means a
            lot to us, just like you do! We really appreciate you giving us a moment of your time today. Thanks for
            being you.</p>
    </div>

    <script>
        setTimeout(function () {
            window.location.href = '/';
        }, 5000);

    </script>
</body>

</html>
