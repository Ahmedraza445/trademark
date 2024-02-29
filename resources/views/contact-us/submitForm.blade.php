<div class="content2">
    <div class="container">
        <div class="text-center">
            <p class="title">Submit a Form</p>
            <p>Complete the form on this page to provide us with specific details about your trademark needs.</p>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-4">
                <div class="left-content">
                    <div class="info-box">
                        <div class="info-icon">
                            <i class="fas fa-phone" aria-hidden="true"></i>
                            <div class="inner-icon">
                                <label>Phone</label>
                                <a href="tel:1-866-320-2251">Toll Free: 1-866-320-2251</a>
                            </div>

                        </div>
                    </div>
                    <div class="info-box">
                        <div class="info-icon">
                            <i class="fa-solid fa-envelope" aria-hidden="true"></i>
                            <div class="inner-icon">
                                <label>Email</label>
                                <a href="mailto:info@legalprotrademark.com">
                                    info@legalprotrademark.com
                                </a>

                            </div>

                        </div>
                    </div>
                    <div class="info-box">
                        <div class="info-icon">
                            <i class="fa-solid fa-location-dot" aria-hidden="true"></i>
                            <div class="inner-icon">
                                <label>Address</label>
                                <p>3555 Timmons Ln, Houston, TX 77027, USA</p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-7 col-md-12">
                <div class="form">
                    <div class="p-2">
                        <form action="{{ route('register.submit') }}" method="post">
                            @csrf
                            <input class="form-control mt-3" type="text" id="name" name="name"
                                placeholder="Enter Your Full Name" required>
                            <input class="form-control mt-25" type="email" id="email" name="email"
                                placeholder="Enter Your Email Address" required>
                            <div class="d-flex mt-25">
                                <select class="form-control w-40" name="contact">
                                    <option value="+1" data-country-code="US" data-country-dial-code="+1">US
                                        (+1)</option>
                                </select>
                                <input class="form-control" type="text" id="remainingNumbers" name="remainingNumbers"
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
    </div>
</div>
