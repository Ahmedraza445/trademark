<section class="search">
    <div class="overlay"></div>
    <div class="container position-relative">
        <div class="row justify-content-between align-items-center">
            <div class="col-lg-8 col-xl-7 col-md-8 col-sm-12 text-white text-left bg-h1">
                <h1>
                    Avail<span> Trademark Search </span>
                    Services for <span>Just $149</span>
                </h1>
                <ul class="banner-list text-white p-2">
                    <li>Research Report for a Unique Brand</li>
                    <li>100% Success Rate Guarantee</li>
                    <li>24/7 Support and Live Chat Now</li>
                </ul>
            </div>
            <div class="col-xl-1"></div>
            <div class="col-lg-4 col-xl-4 col-md-4 sm-none">
                <div class="form">
                    <div class="p-2 fs-11 ">
                        <h5 class="text-center">GET <b>TRADEMARK <br>
                                REGISTRATION</b> IN <span class="cl-blue"><b>JUST $49!</b></span></h5>
                        <h6 class="text-center">
                            <small class="text-center">Protect Your Logo, Symbol, & Brand Name</small>
                        </h6>

                        <form action="{{ route('register.submit') }}" method="post">
                            @csrf
                            <input class="form-control mt-3" type="text" id="name" name="name"
                                placeholder="Enter Your Full Name" style="font-size: 13px;" required>
                            <input class="form-control mt-2" type="email" id="email" name="email"
                                placeholder="Enter Your Email Address" style="font-size: 13px;" required>
                            <div class="d-flex mt-2">
                                <select class="form-control w-30" name="contact" style="font-size: 13px;">
                                    <option value="+1" data-country-code="US" data-country-dial-code="+1">US
                                        (+1)</option>
                                </select>
                                <input class="form-control" type="text" id="remainingNumbers" name="remainingNumbers"
                                    placeholder="Phone Number" style="font-size: 13px;">
                            </div>
                            <div class="d-flex">
                                <div class="w-100">
                                    <div class="mt-4 form-group btn-prim w-100">
                                        <button class="w-100 text-center btn-secondary b-none fs-13 mb-0"
                                            type="submit">Register Your
                                            Trademark
                                            Now for <br> $49</button>
                                    </div>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
