<div class="modal-overlay" id="overlay"></div>
<div class="content2 text-center">
    <div class="text-center">
        <h2 class="fw-700">Choose your plan</h2>
        <p>We accommodate a variety of different payment options. You can book a free meeting to learn more</p>
    </div>
    <div class="btn-series fs-14 w-100">
        <button class="btn-content4" onclick="showContent(0)">Trademark Registration</button>
        <button class="btn-content4" onclick="showContent(1)">Copyright Registration</button>
        <button class="btn-content4" onclick="showContent(2)">Company Formation</button>
        <button class="btn-content4" onclick="showContent(3)">Trademark Search</button>
        <button class="btn-content4" onclick="showContent(4)">Amazon Registry</button>
        <button class="btn-content4" onclick="showContent(5)">Web Design Service</button>
    </div>

    <div class="mt-6" style="margin-left: 6rem; margin-right: 6rem">
        <div class="content-div" id="content0">
            @include('home.plans.home')
        </div>
        <div class="content-div" id="content1">
            @include('home.plans.copyrightReg')
        </div>
        <div class="content-div" id="content2">
            @include('home.plans.formation')
        </div>
        <div class="content-div" id="content3">
            @include('home.plans.trademarkSearchPlan')
        </div>
        <div class="content-div" id="content4">
            @include('home.plans.amazonReg')
        </div>
        <div class="content-div" id="content5">
            @include('home.plans.web_design')
        </div>
        <div class="content-div" id="content5">Web Design Service Content</div>
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
</div>

@include('layouts.footer')
