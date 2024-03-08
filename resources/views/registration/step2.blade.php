@extends('layouts.registration')

@section('content')
    <div class="md-none mt-4 pb-2">
        <div class="row justify-content-center">
            <ul class="steps-list p-0 place-content-center" style="text-align: -webkit-center;">
                <li>
                    <p class="text2 text-white">2</p>
                </li>
            </ul>
            <p>Step 2</p>
        </div>
    </div>
    <form class="text-left" method="POST" action="{{ route('store.step2') }}">
        @csrf
        <div class="p-2 b-radius-12 btn-secondary main-heading col-12 sm-center">
            <h6 class="text-left pl-1 sm-center">Service Package</h6>
        </div>
        <div class="row">
            <div class="col-lg-9 col-md-12">
                <div class="box-2 sty2 text-left">
                    <h5 class="cl-iPrimary">Dear {{ $user['name'] }},</h5>
                    <p class="fw-500">Thank you for providing us your Trademark Details. Our Senior Trademark Experts have
                        received your
                        information and are ready to file your USPTO trademark application. please select a below given
                        service
                        package that suits your requirements and recommended add ons idenfied by our system to move ahead
                        with
                        the process. </p>

                </div>
                <div class="box-2 px-0 pt-4 text-center">
                    <h5 class="main-title">Select Legal Pro Trademark Service Package</h5>
                    <span class="logoname">For Name & Logo
                        {{-- <i class="far fa-edit pl-2"></i> --}}
                    </span>
                    <div>
                        <div class="package-list text-left">
                            <div class="row justify-content-center">
                                <div class="col-xl-4 col-lg-4">
                                    <div class="package-box package-1">
                                        <div class="pck-head">
                                            <h4 class="pck-title bgcpack-yellow">
                                                <span><i class="ic-slogo"></i> Gold</span>
                                            </h4>
                                            <div class="pck-price d-block text-center">
                                                <h5>
                                                    <span class="dollar">$</span>
                                                    <strong class="price">49</strong>
                                                </h5>
                                                <p>+ USPTO FEES</p>
                                            </div>
                                        </div>
                                        <div class="pck-content">
                                            <div class="pck-topContent">
                                                <!-- <p class="sm clcpack-iRed">*You will file for USPTO trademark application on your own. You will also respond to USPTO Office Action on your own.</p> -->
                                                <ul>
                                                    <li><i class="ic-tik"></i> Case Review</li>
                                                    <li><i class="ic-tik"></i> Case Filing</li>
                                                    <li><i class="ic-tik"></i> Trademark Alert</li>
                                                    <li><i class="ic-tik"></i> Trademark Secured</li>
                                                    <li><i class="ic-tik"></i> 100% Satisfaction Guarantee</li>
                                                </ul>
                                            </div>
                                            <div class="pck-bottomContent">
                                                <div class="pck-topContent pl-0 pr-0">
                                                    <ul>
                                                        <li><i class="ic-tik"></i> Case Handling by <strong
                                                                class="clcpack-iRed">Senior
                                                                Trademark Experts</strong> on Availability Basis</li>
                                                    </ul>
                                                </div>
                                                <p class="mb-15">GET USPTO Serial No. <br>in - <span
                                                        class="hl-days bgc-iRed">30
                                                        Days</span></p>
                                                <div class="quest-option">
                                                    <p class="mb-15">Want to Get Your USPTO <br>Trademark Serial No.
                                                        <br><span class="clcpack-iRed">in 24 Hours?</span>
                                                    </p>
                                                    <div class="chck-row">
                                                        <input class="form-check-input" type="checkbox" id="id1"
                                                            checked="">
                                                        <label class="form-check-label" for="id1">
                                                            <p>24 Hours Rush Filing - <span class="clcpack-iRed">$98</span>
                                                            </p>
                                                        </label>
                                                    </div>
                                                    <div class="chck-row">
                                                        <input class="form-check-input" type="checkbox" id="id2"
                                                            checked="">
                                                        <label class="form-check-label" for="id2">
                                                            <p>Do You Want to Register Your <br>Brand on Amazon? <span
                                                                    class="clcpack-iRed linktxt">Learn More</span></p>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="pck-foot">
                                            <!-- <button class="btn btn-primary w-100" type="button" id="paymentMode1">Select Package</button> -->
                                            <!-- <button class="btn btn-primary w-100" type="button" id="paymentMode1"
                                            onclick="selectPackage()">Select Package</button> -->
                                            <button class="btn btn-primary w-100" type="button" id="paymentMode1">Select
                                                Package</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4">
                                    <div class="package-box package-2">
                                        <div class="pck-head">
                                            <!-- <span class="pck-tags bgcpack-yellow clcpack-black">Best Seller</span> -->
                                            <h4 class="pck-title bgcpack-ilightBlue">
                                                <span><i class="ic-slogo"></i> Platinum</span>
                                            </h4>
                                            <div class="pck-price d-block text-center">
                                                <h5>
                                                    <span class="dollar">$</span>
                                                    <strong class="price">149</strong>
                                                </h5>
                                                <p>+ USPTO FEES</p>
                                            </div>
                                        </div>
                                        <div class="pck-content">
                                            <div class="pck-topContent">
                                                <!-- <p class="sm clcpack-iRed">*You will respond to USPTO Office Action on your own.</p> -->
                                                <div class="mid-text">
                                                    <h5>All Features</h5>
                                                    <h6>From</h6>
                                                    <h5>Gold Package</h5>
                                                    <i class="clcpack-iRed plus-icon">
                                                        <img src="{{ asset('images/plus.png') }}" alt="">
                                                    </i>
                                                </div>
                                                <ul>
                                                    <li><i class="ic-tik"></i> Case Preparation</li>
                                                    <li><i class="ic-tik"></i> Exact Match Search</li>
                                                    <li><i class="ic-tik"></i> Refusal Risk Meter</li>
                                                    <li><i class="ic-tik"></i> Trademark Monitoring <br>(Throughout the
                                                        <br>Registration Process)
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="pck-bottomContent">
                                                <div class="pck-topContent pl-0 pr-0">
                                                    <ul>
                                                        <li><i class="ic-tik"></i> Case Handling by <strong
                                                                class="clcpack-iRed">Top ofthe Top
                                                                Senior Trademark Experts</strong></li>
                                                    </ul>
                                                </div>
                                                <p class="mb-15">GET USPTO Serial No. <br>in - <span
                                                        class="hl-days bgc-iRed">10
                                                        Days</span></p>
                                                <div class="quest-option">
                                                    <p class="mb-15">Want to Get Your USPTO <br>Trademark Serial No.
                                                        <br><span class="clcpack-iRed">in 24 Hours?</span>
                                                    </p>
                                                    <div class="chck-row">
                                                        <input class="form-check-input" type="checkbox" id="id3"
                                                            checked="">
                                                        <label class="form-check-label" for="id3">
                                                            <p>24 Hours Rush Filing - <span class="clcpack-iRed">$98</span>
                                                            </p>
                                                        </label>
                                                    </div>
                                                    <div class="chck-row">
                                                        <input class="form-check-input" type="checkbox" id="id4"
                                                            checked="">
                                                        <label class="form-check-label" for="id4">
                                                            <p>Do You Want to Register Your <br>Brand on Amazon? <span
                                                                    class="clcpack-iRed linktxt">Learn More</span></p>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="pck-foot">
                                            <a class="btn btn-primary w-100" id="paymentMode2">Select Package</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4">
                                    <div class="package-box package-3">
                                        <div class="pck-head">
                                            <!-- <span class="pck-tags bgcpack-iGreen">Highly Recommended</span> -->
                                            <h4 class="pck-title bgcpack-iBlue">
                                                <span><i class="ic-slogo"></i> Diamond</span>
                                            </h4>
                                            <div class="pck-price d-block text-center">
                                                <h5>
                                                    <span class="dollar">$</span>
                                                    <strong class="price">199</strong>
                                                </h5>
                                                <p>+ USPTO FEES</p>
                                            </div>
                                        </div>
                                        <div class="pck-content">
                                            <div class="pck-topContent">
                                                <div class="mid-text">
                                                    <h5>All Features</h5>
                                                    <h6>From</h6>
                                                    <h5>Platinum Package</h5>
                                                    <i class="clcpack-iRed plus-icon">
                                                        <img src="{{ asset('images/plus.png') }}" alt="">
                                                    </i>
                                                </div>
                                                <ul>
                                                    <li><i class="ic-tik"></i> Comprehensive Trademark <br>Search Report
                                                        (All
                                                        States)</li>
                                                    <li><i class="ic-tik"></i> Digital File</li>
                                                    <li><i class="ic-tik"></i> Complete Documentation</li>
                                                    <li><i class="ic-tik"></i> Dedicated Case Manager</li>
                                                    <li><i class="ic-tik"></i> Trademark Monitoring - 1 Year</li>
                                                </ul>
                                            </div>
                                            <div class="pck-bottomContent">
                                                <div class="pck-topContent pl-0 pr-0">
                                                    <ul>
                                                        <li><i class="ic-tik"></i> Case Handling by <strong
                                                                class="clcpack-iRed">Best of the Top
                                                                Senior Trademark Experts</strong></li>
                                                    </ul>
                                                </div>
                                                <p class="mb-15">GET USPTO Serial No. <br>in - <span
                                                        class="hl-days bgc-iRed">5
                                                        Days</span></p>
                                                <div class="quest-option">
                                                    <p class="mb-15">Want to Get Your USPTO <br>Trademark Serial No.
                                                        <br><span class="clcpack-iRed">in 24 Hours?</span>
                                                    </p>
                                                    <div class="chck-row">
                                                        <input class="form-check-input" type="checkbox" id="id5"
                                                            checked="">
                                                        <label class="form-check-label" for="id5">
                                                            <p>24 Hours Rush Filing - <span class="clcpack-iRed">$98</span>
                                                            </p>
                                                        </label>
                                                    </div>
                                                    <div class="chck-row">
                                                        <input class="form-check-input" type="checkbox" id="id6"
                                                            checked="">
                                                        <label class="form-check-label" for="id6">
                                                            <p>Do You Want to Register Your <br>Brand on Amazon? <span
                                                                    class="clcpack-iRed linktxt">Learn More</span></p>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="pck-foot">
                                            <a class="btn btn-primary w-100" id="paymentMode3">Select Package</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-50 col-xl-10 col-lg-10">
                                    <div class="package-box package-4">
                                        <div class="pck-head">
                                            <!-- <span class="pck-tags bgcpack-iGreen">Highly Recommended</span> -->
                                            <h4 class="pck-title bgcpack-iRed">
                                                <span><i class="ic-slogo"></i> Elite</span>
                                            </h4>
                                            <div class="pck-price d-block text-center">
                                                <h5>
                                                    <span class="dollar">$</span>
                                                    <strong class="price">349</strong>
                                                </h5>
                                                <p>+ USPTO FEES</p>
                                            </div>
                                        </div>
                                        <div class="pck-content">
                                            <div class="pck-topContent">
                                                <div class="mid-text">
                                                    <h5>AllFeatures</h5>
                                                    <h6>From</h6>
                                                    <h5>Diamond Package</h5>
                                                    <i class="clcpack-iRed plus-icon">
                                                        <img src="{{ asset('images/plus.png') }}" alt="">
                                                    </i>
                                                </div>
                                                <ul>
                                                    <li><i class="ic-tik"></i> Infringement Alerts</li>
                                                    <li><i class="ic-tik"></i> Comprehensive Trademark Search Report (All
                                                        States + Federal)
                                                    </li>
                                                    <li><i class="ic-tik"></i> Trademark Monitoring - 5 Years</li>
                                                    <li><i class="ic-tik"></i> 100% Approval Guarantee</li>
                                                </ul>
                                            </div>
                                            <div class="pck-bottomContent">
                                                <div class="pck-topContent pl-0 pr-0">
                                                    <ul>
                                                        <li><i class="ic-tik"></i> Case Handling by <strong
                                                                class="clcpack-iRed">Most of Elite
                                                                Top Senior Trademark Experts</strong></li>
                                                    </ul>
                                                </div>
                                                <p class="mb-15">GET USPTO Serial No. in - <span
                                                        class="hl-days bgc-iRed">3
                                                        Days</span></p>
                                                <div class="quest-option">
                                                    <p class="mb-15">Want to Get Your USPTO Trademark Serial No. <span
                                                            class="clcpack-iRed">in 24 Hours?</span></p>
                                                    <div class="chck-row">
                                                        <input class="form-check-input" type="checkbox" id="id7"
                                                            checked="">
                                                        <label class="form-check-label" for="id7">
                                                            <p>24 Hours Rush Filing - <span class="clcpack-iRed">$98</span>
                                                            </p>
                                                        </label>
                                                    </div>
                                                    <div class="chck-row">
                                                        <input class="form-check-input" type="checkbox" id="id8"
                                                            checked="">
                                                        <label class="form-check-label" for="id8">
                                                            <p>Do You Want to Register Your Brand on Amazon? <span
                                                                    class="clcpack-iRed linktxt">Learn More</span></p>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="pck-foot">
                                            <a class="btn btn-primary w-100" id="paymentMode4">Select Package</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="main-heading">
                    <p class="text-white p-0">
                        <i class="ic-8">
                        </i>
                        High Importance
                    </p>
                </div>
                <div class="box-2 mt3">
                    <div class="ps-relative pb-5">
                        <div class="fflex mb-3 sm-center">
                            <h5 class="mb-0">
                                {{-- <input type="checkbox" class="mr-2 ng-untouched ng-pristine ng-valid"> --}}
                                Legal Pro Trademark Search
                                {{-- <span class="cus-tooltip ps-absolute sty2 mr-2 is--active"><span
                                    class="tooltiptext">When
                                    applying for trademark registration with
                                    USPTO, there are 77% chances of application rejection in the first attempt if a
                                    similar
                                    trademark has already been registered or is applied for registration. Legal Pro Trademark
                                    Search
                                    is the only solution to ensure your trademark application is accepted in the first
                                    attempt.</span>
                                <!-- <i class="ic-3 custome"></i> -->
                                <i class="fs-12 fa-solid fa-circle-question custome"></i>
                            </span>
                            <span class="tag tag-pink ml-4">Recommended</span></h5> --}}
                        </div>
                        {{-- <p class="para text-left">Legal Pro Trademark Search is your gateway to more than 1 billion
                        records from 50 states &amp; 19,000+ cities and towns from all over the USA, and from 196
                        countries
                        globally. With this service, Legal Pro Trademark runs a database check to see if a similar
                        trademark
                        to yours
                        is already registered or is applied for registration. If a conflict is found, you are notified
                        prior
                        to
                        filing your application so that you may make the necessary changes to avoid rejection. Since you
                        intend to
                        apply for trademark of logo and name, therefore cost of two trademark search reports will be
                        added
                        in your
                        trademark search package. 
                    </p>
                    <br><br> --}}
                        <div class="row align-items-center ps-relative">
                            <div class="col-lg-10">
                                <ul class="check-list ls-none">
                                    <li>
                                        <div class="custom-radio sty1"><input type="radio" id="service1"
                                                value="federal" name="packageSelect3"><label for=""
                                                class="cl-black ml-2">Federal &amp;
                                                State
                                                Search - <strong>$149</strong></label></div>
                                    </li>
                                    <li>
                                        <div class="custom-radio sty1"><input type="radio" id="service2"
                                                name="packageSelect3" value="Common Law"><label for=""
                                                class="cl-black ml-2">State &amp; Common
                                                Law
                                                Search - <strong>$299</strong>
                                                <span class="tag tag-yellow ml-2 sm-none">Best Seller</span>
                                            </label></div>
                                    </li>
                                    <li>
                                        <div class="custom-radio sty1"><input type="radio" id="service3"
                                                name="packageSelect3" value="Global"><label for=""
                                                class="cl-black ml-2">Global Search -
                                                <strong>$499</strong>
                                                <span class="tag tag-pink ml-2 sm-none">Recommended</span>
                                            </label></div>
                                    </li>
                                </ul>
                            </div>
                            {{-- <div class="col-lg-4 text-left pkg-compar absol-compar"><a data-trpop="pop-package1"
                                    href="javascript:;"
                                    class="btn btn-primary btn-trans tooltip-wrap cursor-default js-viewpackagebtn"> View
                                    Package
                                    Comparison </a>
                            </div> --}}
                        </div>
                        {{-- <div class="price-tag absolute-right sty1"> $0 </div> --}}
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-12 card-stick">
                <div class="box-1 box-side-bar order">
                    <div class="side-bar-head fflex align-items-start">
                        <h5>Your Order</h5>
                    </div>
                    <ul class="side-bar-list text-left">
                        <li>
                            <h3>Legal Pro Trademark Services Fees</h3>
                            <div class="fflex" id="selectedPackage" style="display: none;">
                                <h6>1x</h6>
                                <p id="packageName"></p>
                                <h6 id="packagePrice"></h6>
                            </div>
                        </li>
                        <li>
                            <h3>Legal Pro Trademark Search</h3>
                            <div class="fflex" id="selectedService" style="display: none;">
                                <h6>1x</h6>
                                <p id="serviceName"></p>
                                <h6 id="servicePrice"></h6>
                            </div>
                        </li>
                    </ul>
                    <div class="fflex pt-2">
                        <h3>Total</h3>
                        <h6 id="totalPrice" class="ptotal"></h6>
                    </div>
                </div>
            </div>
        </div>
        <ul class="btn-list text-center ls-none">
            <li>
                <button type="button" id="step2Submit" class="btn btn-prim3">Continue
                    <i class="fa-solid fa-chevron-right"></i>
                </button>
            </li>
        </ul>
    </form>
@endsection
