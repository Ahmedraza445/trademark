@extends('layouts.registration')

@section('content')
    <div class="md-none mt-4 pb-2">
        <div class="row justify-content-center">
            <ul class="steps-list p-0 place-content-center" style="text-align: -webkit-center;">
                <li>
                    <p class="text2 text-white">3</p>
                </li>
            </ul>
            <p>Step 3</p>
        </div>
    </div>
    <div class="col-lg-9 col-md-12 p-2 b-radius-12 btn-secondary main-heading sm-center">
        <h6 class="text-left mb-1 pl-1 sm-center">Select Payment Details</h6>
    </div>
    <div class="col-lg-9 col-md-12">
        <form method="POST" action="{{ route('store.step3') }}">
            <div class="row">
                <div class="col-lg-8 col-md-12">
                    <div class="box-1 text-left">
                        <div class="pl-2" style="position: relative;">
                            <h5 class="text-left border w-48 heading">Payment Details</h5>
                        </div>
                        <div class="p-3 fs-13 border" style="margin-top: -25px;">
                            <div class="row text-left mt-25">
                                <div class="col-lg-4 col-md-6">
                                    <label>Select Card Type</label>
                                </div>
                                <div class="col-lg-8 col-md-6 cardType sm-center">
                                    <select name="card" id="cardType" class="p-1">
                                        <option value="credit">Credit</option>
                                        <option value="debit">Debit</option>
                                    </select>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-lg-4 col-md-12">
                                    <label>Name On Card</label>
                                </div>
                                <div class="col-lg-7 col-md-12">
                                    <input type="text" name="cardName" id="cardName" class="form-control fs-13"
                                        placeholder="Enter Card Name">
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-lg-4 col-md-12">
                                    Card Number
                                </div>
                                <div class="col-lg-7 col-md-10">
                                    <input type="number" name="cardNumber" id="cardNumber" class="form-control fs-13"
                                        placeholder="Enter Your Card Number">
                                </div>
                            </div>
                            <hr>
                            <div class="row d-flex">
                                <div class="col-lg-2 col-md-6">CVC</div>
                                <div class="col-lg-3 pl-4 col-md-2">
                                    <input type="number" name="cvc" id="cvc" class="form-control fs-13"
                                        placeholder="3-digits"
                                        oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                                        maxlength="3">
                                </div>
                                <hr class="md-none mt3">
                                <div class="col-lg-2 col-md-12">
                                    Expiry
                                    <small class="md-none">(MM-YYYY)</small>
                                </div>
                                <div class="col-lg-5 col-md-12">
                                    <input type="month" name="expiry" id="expiry" class="form-control w-100 fs-13">
                                </div>
                            </div>
                        </div>
                        <div class="pl-2 mt-25" style="position: relative;">
                            <h5 class="text-left border w-48 heading">Address Details</h5>
                        </div>
                        <div class="p-4 fs-13 border" style="margin-top: -25px;">
                            <div class="row text-left mt-25 mb-10">
                                <div class="col-lg-4 col-md-12">
                                    <label>Select Country</label>
                                </div>
                                <div class="col-lg-8 col-md-12">
                                    <select id="country" name="country" class="w-40 p-1"
                                        onchange="showProvinceDropdown(), showCityDropdown()">
                                        <option value="" disabled selected>Select</option>
                                        <option value="USA">USA</option>
                                        <option value="Canada">Canada</option>
                                    </select>
                                </div>
                            </div>
                            <div id="provinceDropdown" class="row mb-10" style="display:none;"
                                onchange="showCityDropdown()">
                                <div class="col-lg-4 col-md-12">
                                    <label>Select State</label>
                                </div>
                                <div class="col-lg-8 col-md-12">
                                    <select id="province" name="province" class="w-60 p-1">
                                        <!-- Province options will be dynamically added using JavaScript -->
                                    </select>
                                </div>
                            </div>
                            <div id="cityDropdown" class="row mb-10" style="display:none;">
                                <div class="col-lg-4 col-md-12">
                                    <label>Select City</label>
                                </div>
                                <div class="col-lg-8 col-md-12">
                                    <select id="city" name="city" class="w-60 p-1">
                                    </select>
                                </div>
                            </div>
                            <hr>
                            <div class="col-lg-8 col-md-12 p-0 row d-flex">
                                <div class="col-6">Zip Code</div>
                                <div class="col-6 p-0"> <input type="number" id="zipCode" name="zipCode"
                                        class="form-control fs-13" required></div>
                            </div>
                            <hr>
                            <div class="row d-flex">
                                <div class="col-lg-4 col-md-12">
                                    Street Address
                                </div>
                                <div class="col-12 mt-10">
                                    <input type="text" name="address" id="address" class="form-control fs-13"
                                    placeholder="Enter Your Address">
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-lg-4 col-md-12 card-stick">
                    <div class="box-1 box-side-bar">
                        <div class="side-bar-head fflex align-items-start">
                            <h5>Your Order</h5>
                        </div>
                        <ul class="side-bar-list text-left">
                            <li>
                                <h3>Legal Pro Trademark Services Fees</h3>
                                <div class="fflex">
                                    <h6>1x</h6>
                                    <p>{{ $trademark['packageName'] }} </p>
                                    <h6>{{ $trademark['packagePrice'] }}</h6>
                                </div>
                            </li>
                            <li>
                                <h3>Legal Pro Trademark Search</h3>
                                <div class="fflex">
                                    <h6>1x</h6>
                                    <p>{{ $trademark['serviceName'] }}</p>
                                    <h6>{{ $trademark['servicePrice'] }}</h6>
                                </div>
                            </li>
                        </ul>
                        <div class="fflex pt-2">
                            <h3>Total</h3>
                            <h6 class="ptotal">{{ $trademark['t_Price'] }}</h6>
                        </div>
                    </div>
                </div>
                <ul class="btn-list text-center ls-none mt-25">
                    <li>
                        <button type="button" id="step3Submit" class="btn btn-prim3">Submit
                        </button>
                    </li>
                </ul>
            </div>
        </form>

    </div>
@endsection
