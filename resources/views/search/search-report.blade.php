<div class="modal-overlay" id="overlay"></div>
<div class="search-report">
    <div class="container p-6">
        <div class="mt-10 text-center cont2 text-white">
            <h1>Complete Trademark Search Report</h1>
            <button class="btn-prim2" onclick="openModal()">Same-Day Delivery</button>
            <p class="text-center text-white mt-2 p-0">Review your report by the end of the next working day. This service is ideal for those establishing their
                brand, though immediate <br> response cannot be guaranteed.</p>
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
