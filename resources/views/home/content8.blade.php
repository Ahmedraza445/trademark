<div class="modal-overlay" id="overlay"></div>
<div class="container mt-70">
    <div class="row cont2">
        <h1 class="text-center mb-4">Why Choose Us</h1>
        <div class="effort">
            <div class="card-comment2 p-0">
                <div class="card-image1">
                </div>
                <div class="p-4 choose-content">
                    <div class="heading-area">
                        <div class="decorator-heading sty1"></div>
                        <h6>Unique Brand Ownership</h6>
                        <div class="shape num">01</div>
                    </div>
                    <p>Ensure exclusive rights to your Trademark Business Name, Trademark Symbol, and Trademark
                        Logo. Our services extend to Trademark Your Logo and Trademark My Brand Name, providing
                        comprehensive protection</p>
                </div>
            </div>
            <div class="card-comment2 p-0">
                <div class="card-image2">
                </div>
                <div class="p-4 choose-content">
                    <div class="heading-area">
                        <div class="decorator-heading sty1"></div>
                        <h6>Brand Safeguard</h6>
                        <div class="shape num">02</div>
                    </div>
                    <p>Prevent costly redesigns by avoiding infringement on existing Trademarks. Utilize our
                        expertise in Trademark Monitoring Service to proactively safeguard your brand.</p>
                </div>
            </div>
            <div class="card-comment2 p-0">
                <div class="card-image3">
                </div>
                <div class="p-4 choose-content">
                    <div class="heading-area">
                        <div class="decorator-heading sty1"></div>
                        <h6>
                            IP Security</h6>
                        <div class="shape num">03</div>
                    </div>
                    <p>Shield your valuable goods and services from competitors with efficient Trademark
                        Registration and Brand Name Registration. Our services, including Register Trademark,
                        Register Logo, and Register Brand Name, offer seamless protection against potential
                        challenges.</p>
                    <div class="mt-4"></div>
                </div>
            </div>
        </div>
        <div class="mt-4 text-center">
            <button class="btn-prim" onclick="openModal()">Register Now</button>
        </div>
    </div>
    <div id="myModal" class="modal" style="display: none; justify-content:center; ">
        <div class="modal-content">
            <button type="button" class="btn-close btn-close-ctm" data-bs-dismiss="modal" aria-label="Close"
                onclick="closeModal()"></button>
            <div class="modal-body">
                <div class="logo-pop text-center mb-5 mt-3">
                    
                </div>
                <form action="{{ route('register.submit') }}" method="post">
                    @csrf
                    <input class="form-control mt-3" type="text" id="name" name="name"
                        placeholder="Enter Your Full Name" required>
                    <input class="form-control mt-10" type="email" id="email" name="email"
                        placeholder="Enter Your Email Address" required>
                    <div class="d-flex mt-10">
                        <select class="form-input w-50" name="contact">
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
