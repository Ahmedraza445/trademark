@extends('layouts.registration')

@section('content')
    <div class="md-none mt-4 pb-2">
        <div class="row justify-content-center">
            <ul class="steps-list p-0 place-content-center" style="text-align: -webkit-center;">
                <li>
                    <p class="text2 text-white">1</p>
                </li>
            </ul>
            <p>Step 1</p>
        </div>
    </div>
    <div class="col-lg-9 col-md-12">
        <div class="p-2 b-radius-12 btn-secondary main-heading sm-center">
            <h6 class="text-left pl-1 mb-1 sm-center">Trademark Details</h6>
        </div>

        <form class="text-left" method="POST" action="{{ route('store.step1') }}" enctype="multipart/form-data">
            @csrf
            <div class="box-2 sty2 text-left">
                <h5 class="cl-iPrimary">Dear {{ $user['name'] }},</h5>
                <p>Thank you for providing us your Trademark Details. Our Senior Trademark Experts have
                    received your
                    information and are ready to file your USPTO trademark application. please select a below given service
                    package that suits your requirements and recommended add ons idenfied by our system to move ahead with
                    the process. </p>

            </div>
            <div class="box-2">
                <h4>What are you trying to Trademark?
                    {{-- <a href="javascript:;" class="learn-more tooltip-wrap">
                        <i class="ic-3 cl-iRed"></i><span class="cl-iRed">Learn More</span>
                        <div class="tooltip tool-bottom min-wdpx-60 p-3 border-primary">
                            <div class="tooltip-text">
                                <h6>Name/Slogan</h6>
                                <p>We will help you protect words that identify your business,
                                    including but not limited to business name, slogan, taglines, product names, etc.
                                    Protect
                                    your name, slogan or tagline from being used by others in any format, style and color.
                                </p>
                            </div>
                            <div class="tooltip-text">
                                <h6>Logo</h6>
                                <p>Protect the shape, orientation, and design of your logo by
                                    trademarking it. You can include your company name in it if it is being used in
                                    conjunction
                                    with the design element to make the complete logo. </p>
                            </div>
                            <div class="tooltip-text">
                                <h6>Name with Logo</h6>
                                <p class="mb-0">By selecting this option, it means you want to
                                    protect both the name/slogan and the logo. If you choose this option, there will be two
                                    separate trademark applications, and your fees will be doubled. </p>
                            </div>
                        </div>
                    </a> --}}
                </h4>
                <ul class="check-list p-0 d-flex">
                    <li class="w-auto">
                        <div class="custom-radio"><input value="Name" type="radio"><label for=""
                                class="ml-2">Name</label>
                        </div>
                    </li>
                    <li class="w-auto">
                        <div class="custom-radio"><input value="Slogan" type="radio"><label for=""
                                class="ml-2">Slogan</label>
                        </div>
                    </li>
                    <li class="w-auto">
                        <div class="custom-radio"><input value="Logo" type="radio"><label for=""
                                class="ml-2">Logo</label>
                        </div>
                    </li>
                    <li class="w-auto mt3">
                        <div class="custom-radio"><input value="NameWithLogo" type="radio"><label for=""
                                class="ml-2">Name
                                with
                                Logo</label></div>
                    </li>
                </ul>

                <div id="nameLogoDiv" class="mt-3" style="display: none;">
                    <div id="nameDiv" class="mb-3 mt-3" style="display: none;">
                        <p class="para mb-2">Word Mark</p>
                        <input type="text" name="tr_name" id="tr_name" class="form-mark" placeholder="Enter Mark Here">
                    </div>
                    <div id="logoDiv" class="mb-3" style="display:none">
                        <p class="para mb-2">Logo Mark</p>
                        <div class="file-upload">
                            <input type="file" id="tr_logo" name="tr_logo" accept="image/*">
                            <span>Choose File</span>
                            <span class="browse">Browse</span>
                        </div>
                    </div>
                </div>
                <div id="sloganDiv" class="mt-3" style="display: none;">
                    <div class="mb-3">
                        <p class="para mb-2">Word Mark</p>
                        <input type="text" name="tr_slogan" id="tr_slogan" class="form-mark"
                            placeholder="Enter Slogan Here">
                    </div>
                </div>
            </div>

            <div class="box-2">
                <h4>Select Industry</h4>
                <p>Be specific about the industry you are operating in e.g. if you are selling jeans, shirts and
                    trousers, then choose clothing as your industry. Similarly, if you are selling fresh juices then select
                    Food & Beverages as your industry.</p>
                <select name="industry" class="form-control w-50" required>
                    <option value="Clothing">Clothing</option>
                    <option value="Food Beverages">Food & Beverages</option>
                    <option value="Beauty Personal Care">Beauty & Personal Care</option>
                    <option value="Home Appliances">Home Appliances</option>
                    <option value="Outdoor Gear">Outdoor Gear</option>
                    <option value="Office Supplies">Office Supplies</option>
                    <option value="Camping Hiking">Camping & Hiking</option>
                    <option value="Art Craft Supplies">Art & Craft Supplies</option>
                    <option value="Hobbies Collectibles">Hobbies & Collectibles</option>
                    <option value="Automotive Parts">Automotive Parts</option>
                    <option value="Gifts Novelties">Gifts & Novelties</option>
                    <option value="Home Improvement">Home Improvement</option>
                </select>
            </div>

            <div class="box-2">
                <h4>Add Products</h4>
                <p>Be specific about the product/s you are selling e.g. if you are selling denim jeans then type 'denim
                    jeans' in the field below.
                </p>
                <div class="fflex mb-3">
                    <div class="input-field col-lg-6 col-md-12">
                        <input type="text mb-10" placeholder="Enter Your Description" name="product_desc"
                            class="form-mark ng-untouched ng-pristine ng-valid">
                    </div>
                </div>
            </div>

            <div class="box-2">
                <h4>Select Size of Business</h4>
                <p>Be specific about the size of your business. Requirement for each of business is mentioned against it for
                    you to consider. Size of business refers to the current or expected business activity of your business.
                </p>
                <div class="custom-radio-options">
                    <label><input type="radio" name="business_size" value="Individual"> <b> Individual </b>
                        <small>(Planning
                            to
                            establish or have recently started business)</small></label>
                    <label><input type="radio" name="business_size" value="Startup"> <b> Startup Business </b>
                        <small>(Recently
                            established business or about to be established business with annual revenue less than
                            $100,000)</small></label>
                    <label><input type="radio" name="business_size" value="Small Business"> <b> Small Business </b>
                        <small>(Businesses
                            with less than 10 employees & an annual revenue of less than $1 Million)</small></label>
                    <label><input type="radio" name="business_size" value="Medium Sized Business"> <b> Medium-Sized
                            Business </b> <small>(Businesses with 5 – 249 employees & an annual revenue of up to $10
                            Million)</small></label>
                    <label><input type="radio" name="business_size" value="Large Organization"> <b> Large
                            Organization </b> <small>(Businesses with more than 250 employees & more than $10 million annual
                            revenue)</small></label>
                </div>
            </div>
            <div class="box-2">
                <h4>Where is your business based?</h4>
                <ul class="check-list d-flex p-0">
                    <li class="w-auto">
                        <div class="custom-radio"><input value="USA" type="radio" name="us_based"><label
                                for="" class="ml-2">US</label></div>
                    </li>
                    <li class="w-auto">
                        <div class="custom-radio"><input value="CANADA" type="radio" name="us_based"><label
                                for="" class="ml-2">Canada
                            </label></div>
                    </li>
                    <li class="w-auto">
                        <div class="custom-radio"><input value="OTHER" type="radio" name="us_based"><label
                                for="" class="ml-2">Other
                            </label></div>
                    </li>
                </ul>
            </div>
            <div class="mt-6">
                <span class="agreement">
                    <input type="checkbox" required>
                    By accepting, you are authorizing this company to send text messages and make phone calls.
                </span>
            </div>
            <ul class="btn-list text-center ls-none mt-25">
                <li>
                    <button type="submit" class="btn btn-prim3">Continue
                        <i class="fa-solid fa-chevron-right"></i>
                    </button>
                </li>
            </ul>
        </form>
    </div>
@endsection
