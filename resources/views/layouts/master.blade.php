<!-- resources/views/layouts/master.blade.php -->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Your Website')</title>

    <!-- Link to your external CSS file -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    {{-- Bootstrap 5 CSS --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Slider slick -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" type="text/css"
        href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />

    <!-- Poppin Font -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap">

    {{-- Roboto Font --}}
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">

    {{-- Bootstrap 4 CSS --}}
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    </script>

    {{-- Ajax JS --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>

    {{-- Bootstrap JS --}}
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>

    {{-- Font Awesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

</head>

<body>

    <nav>
        @include('partials.menu')
    </nav>

    <div class="content">
        @yield('page-content')

    </div>

    <footer>
    <div class="modal-overlay" id="overlay"></div>
        <div class="container">
            <div class="cta-image">
                <div class="row pt-pb-2">
                    <span class="text-white col-7">
                        <h4 >All Your Trademarking Solutions Under
                            <br> One Roof</h4>
                    </span>
                    <span class="text-right col-5"><button class="btn-white2" style="color: #051f33; font-weight: 900;"
                            onclick="openModal()">Get In
                            Touch Now</button></span>
                </div>
            </div>
        </div>
        <div id="myModal" class="modal" style="display: none; justify-content:center; ">
            <div class="modal-content">
                <button type="button" class="btn-close btn-close-ctm" data-bs-dismiss="modal" aria-label="Close"
                    onclick="closeModal()"></button>
                <div class="modal-body">
                    <div class="logo-pop text-center mb-5 mt-3">
                        <!-- <img loading="lazy" src="{{ asset('images/trademark-instant.png') }}"
                            alt="Trademark filing" width="200" height=""> -->
                    </div>
                    <form action="{{ route('register.submit') }}" method="post">
                        @csrf
                        <input class="form-control mt-3 fs-14" type="text" id="name" name="name"
                            placeholder="Enter Your Full Name" required>
                        <input class="form-control mt-10 fs-14" type="email" id="email" name="email"
                            placeholder="Enter Your Email Address" required>
                        <div class="d-flex mt-10">
                            <select class="form-control w-30 fs-14" name="contact">
                                <option value="+1" data-country-code="US" data-country-dial-code="+1">US
                                    (+1)</option>
                            </select>
                            <input class="form-control fs-14" type="text" id="remainingNumbers" name="remainingNumbers"
                                placeholder="Phone Number">
                        </div>
                        <div class="mt-25 text-center">
                            <button class="js-submit btn-black text-white" type="submit">SUBMIT NOW</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="footer">
            <div class="container">
                <div class="row pl-2 pt-11 pb-4 d-flex">
                    <div class="col-12 footer-logo">
                        <img src="{{ asset('images/logo 2.png') }}" alt="Image 1"
                        width="180px" class="align-self-center">
                    </div>
                    <div class="col-sm-12 col-md-12 col-lg-12 mt3 footer-section">
                        <h2 class="text-center pb-3">Get In Touch</h2>
                        <div class="row text-center justify-content-center">
                            <div class="col-10 col-md-2 col-lg-2 p-2 card-foot my4">
                                <i class="fa-solid fa-phone" style="color: #D2042D;"></i>
                                1-866-320-2251
                            </div>
                            <div class="col-10 col-md-4 col-lg-4 p-2 card-foot my4  mx-4">
                                <i class="fa-solid fa-envelope" style="color: #D2042D;"></i>
                                info@legalprotrademark.com
                            </div>
                            <div class="col-10 col-md-5 col-lg-5 p-2 card-foot">
                                <i class="fa-solid fa-location-dot" style="color: #D2042D;"></i>
                                3555 Timmons Ln, Houston, TX 77027, USA
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <div class="container">
                <div class="row d-flex pb-3">
                    <div class="text-left col-9 sm-footer">
                        &copy; Copyright &copy;{{ date('Y') }} <b>Legal Pro Trademark.</b> All rights
                        reserved.
                    </div>
                    <div class="text-right col-3 sm-footer-img">
                        <img src="{{ asset('images/VISA.png') }}" alt="Image 1" width="75%"
                            class="align-self-center">
                    </div>
                </div>
            </div>
        </div>
        @yield('footer')
    </footer>

    @include('layouts.footer')

    <script>
        $(document).ready(function () {
            $('.slider').slick({
                slidesToShow: 3,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 1000,
                arrows: false,
                focusOnSelect: true,
                responsive: [
                    {
                        breakpoint: 768,
                        settings: {
                            slidesToShow: 1
                        }
                    }
                ]
            });
        });
    </script>
    
</body>

</html>
