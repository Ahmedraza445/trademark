<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Registration')</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <!-- Add this line in the head section of your layout -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap">

    <!-- Add your stylesheets, scripts, and other meta tags here -->
</head>

<body style="font-family: Poppins, sans-serif !important;">

    <header class="header2 bgc-header">
        <div class="container">
                <a href="/">
                    <img src="{{ asset('images/logo 2.png') }}" alt="" width="10%">
                </a>
        </div>
    </header>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-10">
                <ul class="steps-list p-0 place-content-center" style="text-align: -webkit-center;">
                    <li>
                        <p class="text2 text-white">1</p>
                        <p>Contact Details</p>
                    </li>
                    <li>
                        <p class="text2 text-white">2</p>
                        <p>Trademark Details</p>
                    </li>
                    <li>
                        <p class="text2 text-white">3</p>
                        <p>Service Details</p>
                    </li>
                    <li>
                        <p class="text2 text-white">3</p>
                        <p>Payment Details</p>
                    </li>
                </ul>
            </div>
        </div>
    </div>


    <main>
        <section>
            @if(session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif
        </section>

        <section style="text-align: -webkit-center;">
            <div class="w-85">
                @yield('content')
            </div>
        </section>
    </main>

    <footer class="mt-70" style="background-color: #D2042D; text-align: center; padding: 22px 0;">
        <div class="container">
            <p class="text-white">Copyright © Legal Pro Trademark-{{ date('Y') }}</p>
        </div>
    </footer>

    @include('layouts.footer')


    <script>
        
        const radioName = document.querySelector('input[value="Name"]');
        const radioSlogan = document.querySelector('input[value="Slogan"]');
        const radiologo = document.querySelector('input[value="Logo"]');
        const radioNameLogo = document.querySelector('input[value="NameWithLogo"]');
        const nameDiv = document.getElementById('nameDiv');
        const sloganDiv = document.getElementById('sloganDiv');
        const logoDiv = document.getElementById('logoDiv');
        const nameLogoDiv = document.getElementById('nameLogoDiv');

        let prevRadio = null;

        function handleRadioChange(radio, divToShow) {
            if (prevRadio !== null) {
                prevRadio.checked = false;
                divToShow.style.display = 'none';
            }
            if (radio.checked) {
                divToShow.style.display = 'block';
                prevRadio = radio;
            } else {
                prevRadio = null;
            }
        }

        radioName.addEventListener('change', function () {
            nameLogoDiv.style.display = this.checked ? 'block' : 'none';
            nameDiv.style.display = this.checked ? 'block' : 'none';
            sloganDiv.style.display = 'none';
            logoDiv.style.display = 'none';
            handleRadioChange(this, nameDiv);
        });

        radioSlogan.addEventListener('change', function () {
            sloganDiv.style.display = this.checked ? 'block' : 'none';
            nameLogoDiv.style.display = 'none';
            handleRadioChange(this, sloganDiv);
        });

        radiologo.addEventListener('change', function () {
            nameDiv.style.display = 'none';
            sloganDiv.style.display = 'none';
            logoDiv.style.display = this.checked ? 'block' : 'none';
            nameLogoDiv.style.display = this.checked ? 'block' : 'none';
            handleRadioChange(this, logoDiv);
        });

        radioNameLogo.addEventListener('change', function () {
            nameDiv.style.display = this.checked ? 'block' : 'none';
            sloganDiv.style.display = 'none';
            logoDiv.style.display = this.checked ? 'block' : 'none';
            nameLogoDiv.style.display = this.checked ? 'block' : 'none';
            handleRadioChange(this, nameLogoDiv);
        });

    </script>

    <!-- Add your scripts and other assets here -->
</body>

</html>
