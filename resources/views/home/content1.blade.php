<div class="content1 col-sm-12" style="max-width: 1600px">
    <div class="overlay"></div>
    <div class="row container position-relative" style="max-width: 1250px">
        <div class="row justify-content-between align-items-center">
            <div class="col-lg-7 col-xl-7 col-md-12 col-sm-12text-white">
                <div class="banner-content">
                    <h1 class="mb-40">Register Your <span> Trademark</span>
                        Business Name Application
                        Today for <span class="cl-iPrimary">Low as $49</span></h1>
                    <ul class="banner-list mb-40">
                        <li>Streamlined and Hassle-Free Trademark Registration Application Process in Just 1 Minute</li>
                        <li>Exceptional Trademark Registration Services for Logo, Symbol &amp; Business Name</li>
                        <li>Trademark Registration at the United States Patent and Trademark Office in Just $49</li>
                        <li>Our Team Boasts 56+ Trademark Attorney Awards, Ensuring Top-Tier Expertise</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-5 col-xl-4 col-sm-12">
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
</div>
