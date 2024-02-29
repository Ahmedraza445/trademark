<div class="text-center">
    <div class="btn-series mt-30 mb-40">
        <button class="btn-content4" onclick="showButton(0)">Start up</button>
        <button class="btn-content4" onclick="showButton(1)">Small Size Enterprise</button>
        <button class="btn-content4" onclick="showButton(2)">Medium & Large Size Enterprise</button>
    </div>
    <div class="content-container mt-4">
        <div class="content2-div" id="content20">
            @include('home.plans.web-design.webstartup')
        </div>
        <div class="content2-div" id="content21">
            @include('home.plans.web-design.smallEnt')
        </div>
        <div class="content2-div" id="content22">
            @include('home.plans.web-design.M-LEnt')
        </div>
    </div>
</div>
