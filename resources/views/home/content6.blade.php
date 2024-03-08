<div class="modal-overlay" id="overlay"></div>
<section class="sec-5 ptb">
    <div class="row align-items-center justify-content-center m-0">
        <div class="col-md-12 col-lg-8 col-sm-12">
            <div class="sec5-cont cont2">
                <h1>1-Minute Trademark <br>Registration Process</h1>
                <p>Registering your trademark is a breeze with us. Simply provide your brand name, and our best
                    trademark attorneys will handle the entire process promptly. Enjoy the added benefit of payment
                    plan flexibility as you pay at your ease.</p>
                <div class="sec5-border text-center mt-4">
                    <div class="row m-0">
                        <div class="col-md-4 col-sm-8 border pt-4">
                            <div class="steps-box">
                                <div>
                                    <h3 class="mb-2">Step 1</h3>
                                    <p>Share Trademark Information</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-8 border pt-4">
                            <div class="steps-box">
                                <div>
                                    <h3 class="mb-2">Step 2</h3>
                                    <p>Choose Plan</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-8 border pt-4">
                            <div class="steps-box laststep">
                                <div>
                                    <h3 class="mb-2">Step 3</h3>
                                    <p>Get Started</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-4 text-center"><a class="btn-prim t-dec-none" data-bs-toggle="modal" data-bs-target="#exampleModal"
                        style="display: inline-block;" onclick="openModal()">Avail
                        Now!</a></div>
            </div>
        </div>
        <div class="col-md-12 col-lg-4 order-1 order-md-1 order-lg-2 sm-none" style="text-align: -webkit-center;">
            <img class="img-fluid sec-5-img-2" src="{{ asset('images/operate.jpg') }}" width="625px" height="547px"
                alt="Trademark filing">
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
</section>
