<div class="modal-overlay" id="overlay"></div>
<div class="content5 mt-50" >
    <div class="container">
        <div class="row">
            <div class="w-60 text-center text-white">

                <h1>Benefits of Registering Your <br>
                    Trademark with Us</h1>
    
                <p>We take pride in being recognized as the official USPTO trademark firm. Our expert <br> team is dedicated to
                    ensuring the security and visibility of your brand. Experience <br> the advantages of registering your
                    trademark with us today, including services such <br> as Trademark Business Name, Symbol, and Logo
                    registration.</p>

                    <div class="mt-4">
                        <button class="btn-white2" onclick="openModal()">Avail Now!</button>
                    </div>
            </div>
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
