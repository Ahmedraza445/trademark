<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

<script>
    // $('#openModal').click(function () {
    //     $('#myModal').modal('show');
    // });


    function openModal() {
        var modal = document.getElementById('myModal');
        modal.style.display = 'block';
        document.getElementById("overlay").style.display = "block";
    }

    function closeModal() {
        var modal = document.getElementById('myModal');
        modal.style.display = 'none';
        document.getElementById("overlay").style.display = "none";
    }


    // Payment Mode 1
    $('#paymentMode1').on('click', function () {
        var packageName = "GOLD Package";
        var packagePrice = 49;
        document.getElementById('selectedPackage').style.display = 'flex';
        document.getElementById('packageName').innerText = packageName;
        document.getElementById('packagePrice').innerText = '$' + packagePrice;

        calculateTotalPrice();
    });


    // Payment Mode 2
    $('#paymentMode2').on('click', function () {
        console.log("Button clicked");
        var packageName = "PLATINUM Package";
        var packagePrice = 149;
        document.getElementById('selectedPackage').style.display = 'flex';
        document.getElementById('packageName').innerText = packageName;
        document.getElementById('packagePrice').innerText = '$' + packagePrice;

        calculateTotalPrice();
    });


    // Payment Mode 3
    $('#paymentMode3').on('click', function () {
        console.log("Button clicked");
        var packageName = "DIAMOND Package";
        var packagePrice = 199;
        document.getElementById('selectedPackage').style.display = 'flex';
        document.getElementById('packageName').innerText = packageName;
        document.getElementById('packagePrice').innerText = '$' + packagePrice;

        calculateTotalPrice();
    });


    // Payment Mode 4
    $('#paymentMode4').on('click', function () {
        console.log("Button clicked");
        var packageName = "ELITE Package";
        var packagePrice = 349;
        document.getElementById('selectedPackage').style.display = 'flex';
        document.getElementById('packageName').innerText = packageName;
        document.getElementById('packagePrice').innerText = '$' + packagePrice;

        calculateTotalPrice();
    });


    //Service Mode 1 
    $('#service1').on('click', function () {
        var serviceName = "Federal & State Search";
        var servicePrice = 149;
        document.getElementById('selectedService').style.display = 'flex';
        document.getElementById('serviceName').innerText = serviceName;
        document.getElementById('servicePrice').innerText = '$' + servicePrice;


        calculateTotalPrice();
    });


    //Service Mode 2 
    $('#service2').on('click', function () {
        var serviceName = "State & Common Law Search";
        var servicePrice = 299;
        document.getElementById('selectedService').style.display = 'flex';
        document.getElementById('serviceName').innerText = serviceName;
        document.getElementById('servicePrice').innerText = '$' + servicePrice;

        calculateTotalPrice();
    });


    //Service Mode 3 
    $('#service3').on('click', function () {
        var serviceName = "Global Search";
        var servicePrice = 499;
        console.log(serviceName, servicePrice);
        document.getElementById('selectedService').style.display = 'flex';
        document.getElementById('serviceName').innerText = serviceName;
        document.getElementById('servicePrice').innerText = '$' + servicePrice;

        calculateTotalPrice();
    });


    $('#step2Submit').on('click', function () {
        var packageName = document.getElementById("packageName").innerText;
        var packagePrice = document.getElementById("packagePrice").innerText;
        var serviceName = document.getElementById("serviceName").innerText;
        var servicePrice = document.getElementById("servicePrice").innerText;
        var totalPrice = document.getElementById("totalPrice").innerText;

        var postData = {
            packageName: packageName,
            packagePrice: packagePrice,
            serviceName: serviceName,
            servicePrice: servicePrice,
            totalPrice: totalPrice,
            order_id: '{{ session("order_id") }}',
        };

        // Send AJAX request
        $.ajax({
            type: 'POST',
            url: '/register/step2',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            data: postData,
            success: function (response) {
                window.location.href = '/register/step3/{order_id}';
            },
            error: function (error) {
                // Handle error response from the server
                console.error('Error:', error);
            }
        });
    })

    $('#step3Submit').on('click', function () {
        var card = $("#cardType").val();
        var cardName = $("#cardName").val();
        var cardNumber = $("#cardNumber").val();
        var cvc = $("#cvc").val();
        var expiry = $("#expiry").val();
        var country = $("#country").val();
        var province = $("#province").val();
        var city = $("#city").val();
        var zipCode = $("#zipCode").val();
        var address = $("#address").val();

        var postData = {
            card: card,
            cardName: cardName,
            cardNumber: cardNumber,
            cvc: cvc,
            expiry: expiry,
            country: country,
            province: province,
            city: city,
            zipCode: zipCode,
            address: address,
            order_id: '{{ session("order_id") }}',
        };
        $.ajax({
            type: 'POST',
            url: '/register/step3',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            data: postData,
            success: function (response) {
                window.location.href = '/thankyou';
                setTimeout(function () {
                    window.location.href = '/thankyou';
                }, 100);
            },
            error: function (error) {
                console.error('Error:', error);
            }
        });
    })


    // Province Dropdown
    function showProvinceDropdown() {
        var countryDropdown = document.getElementById("country");
        var provinceDropdown = document.getElementById("provinceDropdown");
        var cityDropdown = document.getElementById("cityDropdown");
        var provinceSelect = document.getElementById("province");
        var citySelect = document.getElementById("city");

        provinceSelect.innerHTML = '';
        citySelect.innerHTML = '';
        provinceDropdown.style.display = "none";
        cityDropdown.style.display = "none";

        if (countryDropdown.value === "USA") {
            var usaProvinces = [
                "Alabama", "Alaska", "Arizona", "Arkansas", "California", "Colorado", "Connecticut", "Delaware",
                "Florida",
                "Georgia", "Hawaii", "Idaho", "Illinois", "Indiana", "Iowa", "Kansas", "Kentucky", "Louisiana",
                "Maine",
                "Maryland", "Massachusetts", "Michigan", "Minnesota", "Mississippi", "Missouri", "Montana",
                "Nebraska", "Nevada",
                "New Hampshire", "New Jersey", "New Mexico", "New York", "North Carolina", "North Dakota", "Ohio",
                "Oklahoma",
                "Oregon", "Pennsylvania", "Rhode Island", "South Carolina", "South Dakota", "Tennessee", "Texas",
                "Utah",
                "Vermont", "Virginia", "Washington", "West Virginia", "Wisconsin", "Wyoming"
            ];
            populateDropdown(provinceSelect, usaProvinces);
            provinceDropdown.style.display = "flex";
        } else if (countryDropdown.value === "Canada") {
            var canadaProvinces = [
                "Alberta", "British Columbia", "Manitoba", "New Brunswick", "Newfoundland and Labrador",
                "Nova Scotia",
                "Ontario", "Prince Edward Island", "Quebec", "Saskatchewan"
            ];
            populateDropdown(provinceSelect, canadaProvinces);
            provinceDropdown.style.display = "flex";
        }
    }

    function showCityDropdown() {
        var provinceSelect = document.getElementById("province");
        var cityDropdown = document.getElementById("cityDropdown");
        var citySelect = document.getElementById("city");

        citySelect.innerHTML = '';
        cityDropdown.style.display = "none";

        var selectedProvince = provinceSelect.value;

        var stateCities = {
            // USA States & Cities
            "Alabama": ["Birmingham", "Montgomery", "Mobile"],
            "Alaska": ["Anchorage", "Fairbanks", "Juneau"],
            "Arizona": ["Phoenix", "Tucson", "Mesa"],
            "Arkansas": ["Little Rock", "Fort Smith", "Fayetteville"],
            "California": ["Los Angeles", "San Francisco", "San Diego"],
            "Colorado": ["Denver", "Colorado Springs", "Aurora"],
            "Connecticut": ["Bridgeport", "New Haven", "Hartford"],
            "Delaware": ["Wilmington", "Dover", "Newark"],
            "Florida": ["Miami", "Orlando", "Tampa"],
            "Georgia": ["Atlanta", "Savannah", "Macon"],
            "Hawaii": ["Honolulu", "Hilo", "Kahului"],
            "Idaho": ["Boise", "Nampa", "Meridian"],
            "Illinois": ["Chicago", "Aurora", "Rockford"],
            "Indiana": ["Indianapolis", "Fort Wayne", "Evansville"],
            "Iowa": ["Des Moines", "Cedar Rapids", "Davenport"],
            "Kansas": ["Wichita", "Overland Park", "Kansas City"],
            "Kentucky": ["Louisville", "Lexington", "Bowling Green"],
            "Louisiana": ["New Orleans", "Baton Rouge", "Shreveport"],
            "Maine": ["Portland", "Lewiston", "Bangor"],
            "Maryland": ["Baltimore", "Frederick", "Rockville"],
            "Massachusetts": ["Boston", "Worcester", "Springfield"],
            "Michigan": ["Detroit", "Grand Rapids", "Warren"],
            "Minnesota": ["Minneapolis", "Saint Paul", "Rochester"],
            "Mississippi": ["Jackson", "Gulfport", "Hattiesburg"],
            "Missouri": ["Kansas City", "St. Louis", "Springfield"],
            "Montana": ["Billings", "Missoula", "Great Falls"],
            "Nebraska": ["Omaha", "Lincoln", "Bellevue"],
            "Nevada": ["Las Vegas", "Henderson", "Reno"],
            "New Hampshire": ["Manchester", "Nashua", "Concord"],
            "New Jersey": ["Newark", "Jersey City", "Paterson"],
            "New Mexico": ["Albuquerque", "Las Cruces", "Santa Fe"],
            "New York": ["New York City", "Buffalo", "Rochester"],
            "North Carolina": ["Charlotte", "Raleigh", "Greensboro"],
            "North Dakota": ["Fargo", "Bismarck", "Grand Forks"],
            "Ohio": ["Columbus", "Cleveland", "Cincinnati"],
            "Oklahoma": ["Oklahoma City", "Tulsa", "Norman"],
            "Oregon": ["Portland", "Salem", "Eugene"],
            "Pennsylvania": ["Philadelphia", "Pittsburgh", "Allentown"],
            "Rhode Island": ["Providence", "Warwick", "Cranston"],
            "South Carolina": ["Columbia", "Charleston", "Greenville"],
            "South Dakota": ["Sioux Falls", "Rapid City", "Aberdeen"],
            "Tennessee": ["Nashville", "Memphis", "Knoxville"],
            "Texas": ["Houston", "Dallas", "Austin"],
            "Utah": ["Salt Lake City", "West Valley City", "Provo"],
            "Vermont": ["Burlington", "Essex", "South Burlington"],
            "Virginia": ["Virginia Beach", "Norfolk", "Richmond"],
            "Washington": ["Seattle", "Spokane", "Tacoma"],
            "West Virginia": ["Charleston", "Huntington", "Morgantown"],
            "Wisconsin": ["Milwaukee", "Madison", "Green Bay"],
            "Wyoming": ["Cheyenne", "Casper", "Laramie"],

            // Canada States & Cities
            "Alberta": ["Calgary", "Edmonton", "Red Deer"],
            "British Columbia": ["Vancouver", "Victoria", "Kelowna"],
            "Manitoba": ["Winnipeg", "Brandon", "Steinbach"],
            "New Brunswick": ["Fredericton", "Saint John", "Moncton"],
            "Newfoundland and Labrador": ["St. John's", "Mount Pearl", "Corner Brook"],
            "Nova Scotia": ["Halifax", "Dartmouth", "Sydney"],
            "Ontario": ["Toronto", "Ottawa", "Hamilton"],
            "Prince Edward Island": ["Charlottetown", "Summerside", "Stratford"],
            "Quebec": ["Montreal", "Quebec City", "Laval"],
            "Saskatchewan": ["Saskatoon", "Regina", "Prince Albert"]
        };

        if (stateCities[selectedProvince]) {
            populateDropdown(citySelect, stateCities[selectedProvince]);
            cityDropdown.style.display = "flex";
        } else {
            document.getElementById('cityDropdown').innerText = 'Invalid Province';
        }
    }

    function populateDropdown(selectElement, optionsArray) {
        for (var i = 0; i < optionsArray.length; i++) {
            var option = document.createElement("option");
            option.value = optionsArray[i];
            option.text = optionsArray[i];
            selectElement.add(option);
        }
    }


    function calculateTotalPrice() {
        var packagePrice = document.getElementById("packagePrice").innerText;
        var servicePrice = document.getElementById("servicePrice").innerText;

        console.log((packagePrice != NaN && packagePrice != '') && (servicePrice != NaN && servicePrice != ''));

        if (
            (packagePrice != NaN && packagePrice != '') &&
            (servicePrice != NaN && servicePrice != '')) {
            var packagePrice = parseFloat(document.getElementById("packagePrice").innerText.replace('$', ''));
            var servicePrice = parseFloat(document.getElementById("servicePrice").innerText.replace('$', ''));
            var totalPrice = parseFloat(packagePrice + servicePrice);
            document.getElementById('totalPrice').innerText = '$' + totalPrice;
            console.log('1');
        } else if (
            (packagePrice == NaN || packagePrice == '') &&
            (servicePrice != NaN && servicePrice != '')) {
            var packagePrice = 0;
            var servicePrice = parseFloat(document.getElementById("servicePrice").innerText.replace('$', ''));
            var totalPrice = parseFloat(packagePrice + servicePrice);
            document.getElementById('totalPrice').innerText = '$' + totalPrice;
            console.log('2');
        } else if (
            (packagePrice != NaN && packagePrice != '') &&
            (servicePrice == NaN || servicePrice == '')) {
            var servicePrice = 0;
            var packagePrice = parseFloat(document.getElementById("packagePrice").innerText.replace('$', ''));
            var totalPrice = parseFloat(packagePrice + servicePrice);
            document.getElementById('totalPrice').innerText = '$' + totalPrice;
            console.log('3');
        } else {
            var servicePrice = 0;
            var packagePrice = 0;
            document.getElementById('totalPrice').innerText = 0;
        }

    }


    // Packages Display 
    document.addEventListener('DOMContentLoaded', function () {
        showContent(0);
        showButton(2);
    });

    function showContent(index) {
        var contentDivs = document.querySelectorAll('.content-div');
        contentDivs.forEach(function (div) {
            div.style.display = 'none';
        });

        var selectedContentDiv = document.getElementById('content' + index);
        if (selectedContentDiv) {
            selectedContentDiv.style.display = 'block';
        }
    }


    // Packages Display (Web Design Service)
    function showButton(index) {
        var contentDivs = document.querySelectorAll('.content2-div');
        contentDivs.forEach(function (div) {
            div.style.display = 'none';
        });

        var selectedContentDiv = document.getElementById('content2' + index);
        if (selectedContentDiv) {
            selectedContentDiv.style.display = 'block';
        }
    }


    // Slick Slider (Comments)




    // Menu Bar (Header)
    document.addEventListener('scroll', function () {
        var scrollPosition = window.scrollY;
        var header = document.querySelector('.header');

        if (header) {
            if (scrollPosition > 100) {
                header.style.background = '#000';
                header.style.padding = '0 0';
            } else {
                header.style.background = 'transparent';
                header.style.padding = '0 0';
            }
        }
    });


    // Registration Form

    // Name, Logo, Slogan Radio Box

    // function addInput() {
    //     var inputField = document.querySelector('.input-field');
    //     var lastInput = inputField.querySelector('.form-mark:last-child');

    //     var addButton = document.querySelector('.add-more');

    //     if (!lastInput || lastInput.value.trim() !== "") {
    //         var lineBreak = document.createElement("br");
    //         inputField.appendChild(lineBreak);

    //         var input = document.createElement("input");
    //         input.type = "text";
    //         input.placeholder = "Please Add Your Product";
    //         input.className = "form-mark ng-untouched ng-pristine ng-valid";
    //         input.style.marginTop = "10px";

    //         var cancelButton = document.createElement("button");
    //         cancelButton.textContent = "Cancel";
    //         cancelButton.className = "cancel-button";
    //         cancelButton.addEventListener("click", function () {
    //             inputField.removeChild(lineBreak);
    //             inputField.removeChild(input);
    //             inputField.removeChild(cancelButton);

    //             // Re-enable the "Add" button
    //             addButton.addEventListener("click", addInput);
    //         });

    //         inputField.appendChild(input);
    //         inputField.appendChild(cancelButton);

    //         // Disable the "Add" button after the first input
    //         addButton.removeEventListener("click", addInput);
    //     }
    // }

</script>
