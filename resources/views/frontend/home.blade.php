@extends('components.main')

@section('content')
    <div class="block md:hidden">
        @include('components.header')
    </div>

    <div class="flex overflow-hidden min-h-screen">
        <!-- Sidebar -->
        <div class="hidden md:block md:w-1/3 lg:w-1/4 bg-gray-100">
            @include('components.sidebar')
        </div>

        <!-- Main Content -->
        <div class="w-full md:w-2/3 lg:w-3/4 relative overflow-hidden">

            <!-- Slider Container -->
            <div class="relative w-full h-screen overflow-hidden">
                <div id="slider" class="relative w-full h-screen">
                    <!-- Slides -->
                    <div class="absolute inset-0 w-full h-full opacity-0 scale-105 transition-all duration-1000 ease-in-out"
                        data-slide>
                        <img src="{{ asset('asset/images/properties-1.jpeg') }}" alt="Slide Image"
                            class="w-full h-screen object-cover">
                        <div class="absolute top-1/2 left-0 translate-x-0 -translate-y-1/2 text-left opacity-0 translate-y-5 transition-all duration-1000 ease-in-out"
                            data-text>
                            <h2
                                class="text-xl sm:text-2xl md:text-xl lg:text-3xl font-serif text-gray-900 bg-white px-4 sm:px-6 md:px-8 py-4 shadow-md max-w-xs sm:max-w-sm md:max-w-md lg:max-w-lg">
                                House in Tambon Bo Put, Thailand
                            </h2>
                        </div>
                    </div>
                    <div class="absolute inset-0 w-full h-full opacity-0 scale-105 transition-all duration-1000 ease-in-out"
                        data-slide>
                        <img src="{{ asset('asset/images/properties-2.jpeg') }}" alt="Slide Image"
                            class="w-full h-screen object-cover">
                        <div class="absolute top-1/2 left-0 translate-x-0 -translate-y-1/2 text-left opacity-0 translate-y-5 transition-all duration-1000 ease-in-out"
                            data-text>
                            <h2
                                class="text-xl sm:text-2xl md:text-xl lg:text-3xl font-serif text-gray-900 bg-white px-4 sm:px-6 md:px-8 py-4 shadow-md max-w-xs sm:max-w-sm md:max-w-md lg:max-w-lg">
                                Apartment in Tambon Bo Put, Thailand
                            </h2>
                        </div>
                    </div>
                    <div class="absolute inset-0 w-full h-full opacity-0 scale-105 transition-all duration-1000 ease-in-out"
                        data-slide>
                        <img src="{{ asset('asset/images/properties-3.jpeg') }}" alt="Slide Image"
                            class="w-full h-screen object-cover">
                        <div class="absolute top-1/2 left-0 translate-x-0 -translate-y-1/2 text-left opacity-0 translate-y-5 transition-all duration-1000 ease-in-out"
                            data-text>
                            <h2
                                class="text-xl sm:text-2xl md:text-xl lg:text-3xl font-serif text-gray-900 bg-white px-4 sm:px-6 md:px-8 py-4 shadow-md max-w-xs sm:max-w-sm md:max-w-md lg:max-w-lg">
                                House in Mae Nam, Thailand
                            </h2>
                        </div>
                    </div>
                    <div class="absolute inset-0 w-full h-full opacity-0 scale-105 transition-all duration-1000 ease-in-out"
                        data-slide>
                        <img src="{{ asset('asset/images/properties-4.jpeg') }}" alt="Slide Image"
                            class="w-full h-screen object-cover">
                        <div class="absolute top-1/2 left-0 translate-x-0 -translate-y-1/2 text-left opacity-0 translate-y-5 transition-all duration-1000 ease-in-out"
                            data-text>
                            <h2
                                class="text-xl sm:text-2xl md:text-xl lg:text-3xl font-serif text-gray-900 bg-white px-4 sm:px-6 md:px-8 py-4 shadow-md max-w-xs sm:max-w-sm md:max-w-md lg:max-w-lg">
                                Apartment in Ko Samui District
                            </h2>
                        </div>
                    </div>
                    <div class="absolute inset-0 w-full h-full opacity-0 scale-105 transition-all duration-1000 ease-in-out"
                        data-slide>
                        <img src="{{ asset('asset/images/properties-5.jpeg') }}" alt="Slide Image"
                            class="w-full h-screen object-cover">
                        <div class="absolute top-1/2 left-0 translate-x-0 -translate-y-1/2 text-left opacity-0 translate-y-5 transition-all duration-1000 ease-in-out"
                            data-text>
                            <h2
                                class="text-xl sm:text-2xl md:text-xl lg:text-3xl font-serif text-gray-900 bg-white px-4 sm:px-6 md:px-8 py-4 shadow-md max-w-xs sm:max-w-sm md:max-w-md lg:max-w-lg">
                                Apartment in Ko Samui District
                            </h2>
                        </div>
                    </div>
                </div>

                <!-- Navigation Arrows (Hidden) -->
                <button id="prevSlide"
                    class="absolute left-4 top-1/2 transform -translate-y-1/2 bg-gray-800 text-white p-2 rounded-full hidden">&#10094;</button>
                <button id="nextSlide"
                    class="absolute right-4 top-1/2 transform -translate-y-1/2 bg-gray-800 text-white p-2 rounded-full hidden">&#10095;</button>
            </div>

            <!-- Booking Container -->
            <div class="w-full flex items-center justify-center bg-[#fcfaf5] px-4 py-4">
                <div class="bg-white flex flex-wrap items-center gap-5 w-full max-w-[900px] mx-auto">

                    <!-- Check-in -->
                    <div class="flex flex-col flex-1 min-w-[200px]">
                        <label class="text-sm font-semibold text-gray-700 mb-2 tracking-wide">CHECK-IN</label>
                        <input type="date" id="check-in"
                            class="border border-gray-300 px-4 py-3 w-full text-gray-800 text-base focus:ring-2 focus:ring-gray-500 focus:border-gray-500 cursor-pointer">
                    </div>

                    <!-- Check-out -->
                    <div class="flex flex-col flex-1 min-w-[200px]">
                        <label class="text-sm font-semibold text-gray-700 mb-2 tracking-wide">CHECK-OUT</label>
                        <input type="date" id="check-out"
                            class="border border-gray-300 px-4 py-3 w-full text-gray-800 text-base focus:ring-2 focus:ring-gray-500 focus:border-gray-500 cursor-pointer">
                    </div>

                    <!-- Guests -->
                    <div class="flex flex-col flex-1 min-w-[200px] relative">
                        <label class="text-sm font-semibold text-gray-700 mb-2 tracking-wide">GUESTS</label>
                        <div id="guests-selector"
                            class="border border-gray-300 px-4 py-3 w-full text-gray-800 text-base cursor-pointer flex justify-between items-center">
                            <span id="guests-display">1 Adult</span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                            </svg>
                        </div>

                        <!-- Dropdown Content -->
                        <div id="guests-dropdown"
                            class="absolute top-full left-0 right-0 bg-white border border-gray-300 mt-1 p-4 z-10 hidden">
                            <div class="flex justify-between items-center mb-3">
                                <span class="text-gray-800">Adults</span>
                                <div class="flex items-center">
                                    <select id="adults-count" class="border border-gray-300 px-2 py-1 rounded">
                                        <option value="1" selected>1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                    </select>
                                </div>
                            </div>

                            <div class="flex justify-between items-center mb-3">
                                <span class="text-gray-800">Children<br><span class="text-xs text-gray-500">2-12 years
                                        old</span></span>
                                <div class="flex items-center">
                                    <select id="children-count" class="border border-gray-300 px-2 py-1 rounded">
                                        <option value="0" selected>0</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                    </select>
                                </div>
                            </div>

                            <div class="flex justify-between items-center mb-4">
                                <span class="text-gray-800">Infants<br><span class="text-xs text-gray-500">0-2 years
                                        old</span></span>
                                <div class="flex items-center">
                                    <select id="infants-count" class="border border-gray-300 px-2 py-1 rounded">
                                        <option value="0" selected>0</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                    </select>
                                </div>
                            </div>

                            <button id="done-button"
                                class="w-full border border-gray-400 text-center py-2 text-gray-800 hover:bg-gray-100 transition-all">
                                DONE
                            </button>
                        </div>
                    </div>

                    <!-- Book Now Button -->
                    <div class="flex flex-col flex-1 min-w-[200px] mt-7">
                        <button
                            class="border border-gray-400 text-black text-base font-semibold px-4 py-2.5 hover:bg-gray-100 transition-all w-full tracking-wide">
                            BOOK NOW
                        </button>
                    </div>
                </div>
            </div>

            <script>
                // Set the current date as the default value for the check-in field
                const currentDate = new Date();
                document.getElementById('check-in').value = currentDate.toISOString().split('T')[0];

                // Set the current date as the default value for the check-out field
                const nextDay = new Date();
                nextDay.setDate(currentDate.getDate() + 1);
                document.getElementById('check-out').value = nextDay.toISOString().split('T')[0];

                // Guest dropdown functionality
                const guestsSelector = document.getElementById('guests-selector');
                const guestsDropdown = document.getElementById('guests-dropdown');
                const guestsDisplay = document.getElementById('guests-display');
                const doneButton = document.getElementById('done-button');
                const adultsCount = document.getElementById('adults-count');
                const childrenCount = document.getElementById('children-count');
                const infantsCount = document.getElementById('infants-count');

                // Toggle dropdown visibility
                guestsSelector.addEventListener('click', function() {
                    guestsDropdown.classList.toggle('hidden');
                });

                // Close dropdown when clicking outside
                document.addEventListener('click', function(event) {
                    if (!guestsSelector.contains(event.target) && !guestsDropdown.contains(event.target)) {
                        guestsDropdown.classList.add('hidden');
                    }
                });

                // Update guests display when done button is clicked
                doneButton.addEventListener('click', function() {
                    updateGuestsDisplay();
                    guestsDropdown.classList.add('hidden');
                });

                // Update display when selects change
                adultsCount.addEventListener('change', updateGuestsDisplay);
                childrenCount.addEventListener('change', updateGuestsDisplay);
                infantsCount.addEventListener('change', updateGuestsDisplay);

                function updateGuestsDisplay() {
                    const adults = parseInt(adultsCount.value);
                    const children = parseInt(childrenCount.value);
                    const infants = parseInt(infantsCount.value);

                    let displayText = '';

                    if (adults === 1) {
                        displayText = '1 Adult';
                    } else {
                        displayText = `${adults} Adults`;
                    }

                    if (children > 0) {
                        displayText += `, ${children} ${children === 1 ? 'Child' : 'Children'}`;
                    }

                    if (infants > 0) {
                        displayText += `, ${infants} ${infants === 1 ? 'Infant' : 'Infants'}`;
                    }

                    guestsDisplay.textContent = displayText;
                }
            </script>


            @include('components.secondslider')

            <!-- Include SwiperJS -->
            {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
            <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

            <style>
                .swiper-button-next,
                .swiper-button-prev {
                    color: black !important;
                    /* Changes the arrow color to black */
                }
            </style>

            <div class="relative w-full max-w-6xl mx-auto overflow-hidden bg-[#FAF7F2]">
                <!-- Swiper Container -->
                <div class="swiper mySwiper">
                    <div class="swiper-wrapper">

                        <!-- Slide 1 -->
                        <div class="swiper-slide">
                            <div class="bg-white p-4">
                                <img src="{{ asset('asset/images/properties-1.jpeg') }}" alt="Rustic Gem Room"
                                    class="w-full h-64 object-cover" />
                                <div class="p-8 bg-[#f8f6f1]">
                                    <h2 class="text-2xl font-serif font-normal text-gray-900">House in Tambon Bo Put,
                                        Thailand</h2>
                                    <div class="text-sm text-gray-500">from <span
                                            class="text-xl font-semibold text-gray-900">₹1,892 / night</span></div>
                                    <p class="text-gray-600">1 bedroom • 1 bed • 1 bath</p>
                                    <p class="text-gray-600 mb-6">Gm Bungalow at Chaweng hill</p>
                                    <button
                                        class="uppercase tracking-wider text-gray-800 font-semibold text-sm flex items-center">Book
                                        Now <span class="material-icons ml-1">add</span></button>
                                </div>
                            </div>
                        </div>

                        <!-- Slide 2 -->
                        <div class="swiper-slide">
                            <div class="bg-white p-4">
                                <img src="{{ asset('asset/images/properties-2.jpeg') }}" alt="Maisonette Room"
                                    class="w-full h-64 object-cover" />
                                <div class="p-8 bg-[#f8f6f1]">
                                    <h2 class="text-2xl font-serif font-normal text-gray-900">Apartment in Tambon Bo Put
                                    </h2>
                                    <div class="text-sm text-gray-500">from <span
                                            class="text-xl font-semibold text-gray-900">₹2,624 / night</span></div>
                                    <p class="text-gray-600">Private room • 2 guests • 1 bedroom • 1 bed • 1 bathroom</p>
                                    <p class="text-gray-600 mb-6">RePlay Residence D301</p>
                                    <button
                                        class="uppercase tracking-wider text-gray-800 font-semibold text-sm flex items-center">Book
                                        Now <span class="material-icons ml-1">add</span></button>
                                </div>
                            </div>
                        </div>

                        <!-- Slide 3 -->
                        <div class="swiper-slide">
                            <div class="bg-white p-4">
                                <img src="{{ asset('asset/images/properties-3.jpeg') }}" alt="Luxury Suite"
                                    class="w-full h-64 object-cover" />
                                <div class="p-8 bg-[#f8f6f1]">
                                    <h2 class="text-2xl font-serif font-normal text-gray-900">House in Mae Nam</h2>
                                    <div class="text-sm text-gray-500">from <span
                                            class="text-xl font-semibold text-gray-900">₹4,667 / night</span></div>
                                    <p class="text-gray-600">Entire Place • 3 guests • 1 bedroom • 2 beds • 1 bathroom</p>
                                    <p class="text-gray-600 mb-6">Beachfront Villa with Sunset</p>
                                    <button
                                        class="uppercase tracking-wider text-gray-800 font-semibold text-sm flex items-center">Book
                                        Now <span class="material-icons ml-1">add</span></button>
                                </div>
                            </div>
                        </div>

                        <!-- Slide 4 -->
                        <div class="swiper-slide">
                            <div class="bg-white p-4">
                                <img src="{{ asset('asset/images/properties-4.jpeg') }}" alt="Luxury Suite"
                                    class="w-full h-64 object-cover" />
                                <div class="p-8 bg-[#f8f6f1]">
                                    <h2 class="text-2xl font-serif font-normal text-gray-900">Apartment in Ko Samui
                                        District</h2>
                                    <div class="text-sm text-gray-500">from <span
                                            class="text-xl font-semibold text-gray-900">₹4,207 / night</span></div>
                                    <p class="text-gray-600">Private room • 4 guests • 2 bedrooms • 2 beds</p>
                                    <p class="text-gray-600 mb-6">GM Apartments 2 Bedrooms</p>
                                    <button
                                        class="uppercase tracking-wider text-gray-800 font-semibold text-sm flex items-center">Book
                                        Now <span class="material-icons ml-1">add</span></button>
                                </div>
                            </div>
                        </div>

                        <!-- Slide 5 -->
                        <div class="swiper-slide">
                            <div class="bg-white p-4">
                                <img src="{{ asset('asset/images/properties-5.jpeg') }}" alt="Luxury Suite"
                                    class="w-full h-64 object-cover" />
                                <div class="p-8 bg-[#f8f6f1]">
                                    <h2 class="text-2xl font-serif font-normal text-gray-900">Apartment in Ko Samui
                                        District</h2>
                                    <div class="text-sm text-gray-500">from <span
                                            class="text-xl font-semibold text-gray-900">₹2,054 / night</span></div>
                                    <p class="text-gray-600">Private room • 2 guests • 1 bedroom • 1 bed • 1 bathroom</p>
                                    <p class="text-gray-600 mb-6">Cozy Apartment GM8</p>
                                    <button
                                        class="uppercase tracking-wider text-gray-800 font-semibold text-sm flex items-center">Book
                                        Now <span class="material-icons ml-1">add</span></button>
                                </div>
                            </div>
                        </div>

                    </div>

                    <!-- Navigation Arrows -->
                    <div class="swiper-button-prev w-12 h-12 flex items-center justify-center">
                    </div>
                    <div class="swiper-button-next w-12 h-12 flex items-center justify-center">
                    </div>
                </div>
            </div>

            <script>
                document.addEventListener("DOMContentLoaded", function() {
                    new Swiper(".mySwiper", {
                        loop: true,
                        autoplay: {
                            delay: 3000,
                            disableOnInteraction: false,
                        },
                        navigation: {
                            nextEl: ".swiper-button-next",
                            prevEl: ".swiper-button-prev",
                        },
                        slidesPerView: 1,
                        spaceBetween: 20,
                        breakpoints: {
                            768: { // Tablets and larger screens
                                slidesPerView: 2,
                                spaceBetween: 20,
                            }
                        }
                    });
                });
            </script> --}}

            <div class="relative w-full max-w-full mx-auto">
                <!-- Background Image -->
                <div class="relative group overflow-hidden">
                    <img src="{{ asset('asset/images/properties-1.jpeg') }}" alt="Interior & Exterior"
                        class="w-full h-[400px] object-cover transition-transform duration-500 group-hover:scale-105">

                    <!-- Text Overlay -->
                    <div
                        class="absolute top-1/2 left-0 transform -translate-y-1/2 bg-[#FAF7F2] p-4 sm:p-6 md:p-8 shadow-md transition-all duration-500 group-hover:translate-x-3 group-hover:shadow-lg w-3/4 sm:w-3/4 md:w-1/2">
                        <h2
                            class="text-xl sm:text-2xl font-serif text-gray-900 transition-colors duration-500 group-hover:text-amber-700">
                            House in Tambon Bo Put, Thailand
                        </h2>
                        <button
                            class="mt-4 text-sm sm:text-xs font-semibold tracking-wide text-gray-700 flex items-center transition-all duration-500 group-hover:text-amber-700">
                            READ MORE
                            <span
                                class="material-icons ml-2 transform transition-transform duration-500 group-hover:rotate-90">add</span>
                        </button>
                    </div>
                </div>
            </div>

            <div class="max-w-screen-lg mx-auto py-16 px-6">
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-12">
                    <!-- Feature Items -->
                    <div class="flex flex-col items-start transition-transform transform hover:scale-105">
                        <span class="material-icons text-5xl text-[#C26C51] mb-3">emoji_events</span>
                        <h3 class="text-xl font-serif font-semibold">High Rating</h3>
                        <p class="text-gray-600 mt-2 max-w-xs">
                            Vestibulum a blandit ex, in tempor dolor. Phasellus dolor nisl volutpat sit amet et mollis.
                        </p>
                    </div>

                    <div class="flex flex-col items-start transition-transform transform hover:scale-105">
                        <span class="material-icons text-5xl text-[#C26C51] mb-3">nights_stay</span>
                        <h3 class="text-xl font-serif font-semibold">Quiet Hours</h3>
                        <p class="text-gray-600 mt-2 max-w-xs">
                            Vestibulum a blandit ex, in tempor dolor. Phasellus dolor nisl volutpat sit amet et mollis.
                        </p>
                    </div>

                    <div class="flex flex-col items-start transition-transform transform hover:scale-105">
                        <span class="material-icons text-5xl text-[#C26C51] mb-3">place</span>
                        <h3 class="text-xl font-serif font-semibold">Best Locations</h3>
                        <p class="text-gray-600 mt-2 max-w-xs">
                            Vestibulum a blandit ex, in tempor dolor. Phasellus dolor nisl volutpat sit amet et mollis.
                        </p>
                    </div>

                    <div class="flex flex-col items-start transition-transform transform hover:scale-105">
                        <span class="material-icons text-5xl text-[#C26C51] mb-3">event_available</span>
                        <h3 class="text-xl font-serif font-semibold">Free Cancellation</h3>
                        <p class="text-gray-600 mt-2 max-w-xs">
                            Vestibulum a blandit ex, in tempor dolor. Phasellus dolor nisl volutpat sit amet et mollis.
                        </p>
                    </div>

                    <div class="flex flex-col items-start transition-transform transform hover:scale-105">
                        <span class="material-icons text-5xl text-[#C26C51] mb-3">credit_card</span>
                        <h3 class="text-xl font-serif font-semibold">Payment Options</h3>
                        <p class="text-gray-600 mt-2 max-w-xs">
                            Vestibulum a blandit ex, in tempor dolor. Phasellus dolor nisl volutpat sit amet et mollis.
                        </p>
                    </div>

                    <div class="flex flex-col items-start transition-transform transform hover:scale-105">
                        <span class="material-icons text-5xl text-[#C26C51] mb-3">card_giftcard</span>
                        <h3 class="text-xl font-serif font-semibold">Special Offers</h3>
                        <p class="text-gray-600 mt-2 max-w-xs">
                            Vestibulum a blandit ex, in tempor dolor. Phasellus dolor nisl volutpat sit amet et mollis.
                        </p>
                    </div>
                </div>
            </div>

            <div class="relative w-full max-w-full mx-auto">
                <!-- Background Image -->
                <div class="relative group overflow-hidden">
                    <img src="{{ asset('asset/images/properties-2.jpeg') }}" alt="Interior & Exterior"
                        class="w-full h-[400px] object-cover transition-transform duration-500 group-hover:scale-105">

                    <!-- Text Overlay -->
                    <div
                        class="absolute top-1/2 left-0 transform -translate-y-1/2 bg-[#FAF7F2] p-4 sm:p-6 md:p-8 shadow-md transition-all duration-500 group-hover:translate-x-3 group-hover:shadow-lg w-3/4 sm:w-3/4 md:w-1/2">
                        <h2
                            class="text-xl sm:text-2xl font-serif text-gray-900 transition-colors duration-500 group-hover:text-amber-700">
                            Apartment in Tambon Bo Put, Thailand
                        </h2>
                        <button
                            class="mt-4 text-sm sm:text-xs font-semibold tracking-wide text-gray-700 flex items-center transition-all duration-500 group-hover:text-amber-700">
                            READ MORE
                            <span
                                class="material-icons ml-2 transform transition-transform duration-500 group-hover:rotate-90">add</span>
                        </button>
                    </div>
                </div>
            </div>

            <div class="max-w-screen-lg mx-auto py-16 px-6 text-center bg-gradient-to-b from-white to-gray-50">
                <h2 class="text-2xl font-serif font-semibold text-gray-900 mb-2">See our Special Offers</h2>
                <p class="text-gray-600 mt-4 text-md max-w-2xl mx-auto leading-relaxed">
                    Morbi porta, purus at posuere consectetur, eros justo feugiat lorem, nec laoreet odio odio ac erat.
                    Luctus sed libero dictum cursus cras consequat.
                </p>

                <div class="flex flex-col md:flex-row gap-6 max-w-6xl mx-auto py-16 px-4">
                    <!-- Winter Offer Card -->
                    <div class="flex-1 bg-gray-50 p-8 flex flex-col items-center text-center">
                        <h3 class="font-serif text-2xl font-medium text-gray-900">Winter Offer</h3>
                        <div class="mt-4 flex items-baseline">
                            <span class="text-6xl font-light text-gray-800">25%</span>
                            <span class="ml-1 text-lg text-gray-600">Off</span>
                        </div>

                        <ul class="mt-10 space-y-3 text-center">
                            <li class="text-gray-600"><span class="text-blue-500">-</span>Minimum stay 4 nights.</li>
                            <li class="text-gray-600"><span class="text-blue-500">-</span>Early booking.</li>
                            <li class="text-gray-600"><span class="text-blue-500">-</span>Breakfast included.</li>
                            <li class="text-gray-600"><span class="text-blue-500">-</span>Free cancellation (see terms).
                            </li>
                            <li class="text-gray-600"><span class="text-blue-500">-</span>New Years free champagne.</li>
                            <li class="text-gray-600"><span class="text-blue-500">-</span>Hiking tours with hosts.</li>
                            <li class="text-gray-600"><span class="text-blue-500">-</span>Winter equipment.</li>
                        </ul>

                        <div class="mt-auto pt-12">
                            <a href="#"
                                class="border border-gray-800 text-gray-800 px-8 py-3 inline-block uppercase text-sm tracking-wide hover:bg-gray-800 hover:text-white transition-colors duration-200">
                                See Deal
                            </a>
                        </div>
                    </div>

                    <!-- Holidays Card -->
                    <div class="flex-1 bg-pink-50 p-8 flex flex-col items-center text-center relative">
                        <div class="absolute top-6 right-6">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"
                                class="w-6 h-6 text-red-400">
                                <polygon
                                    points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                                </polygon>
                            </svg>
                        </div>

                        <h3 class="font-serif text-2xl font-medium text-gray-900">Holidays</h3>
                        <div class="mt-4 flex items-baseline">
                            <span class="text-6xl font-light text-gray-800">10%</span>
                            <span class="ml-1 text-lg text-gray-600">Off</span>
                        </div>

                        <ul class="mt-10 space-y-3 text-center">
                            <li class="text-gray-600"><span class="text-blue-500">-</span>Minimum stay 2 nights.</li>
                            <li class="text-gray-600"><span class="text-blue-500">-</span>Early booking.</li>
                            <li class="text-gray-600"><span class="text-blue-500">-</span>Breakfast included.</li>
                            <li class="text-gray-600"><span class="text-blue-500">-</span>Free cancellation (see terms).
                            </li>
                            <li class="text-gray-600"><span class="text-blue-500">-</span>All rooms.</li>
                            <li class="text-gray-600"><span class="text-blue-500">-</span>Cleaning included.</li>
                            <li class="text-gray-600"><span class="text-blue-500">-</span>Late check-out.</li>
                        </ul>

                        <div class="mt-auto pt-12">
                            <a href="#"
                                class="bg-rose-400 text-white px-8 py-3 inline-block uppercase text-sm tracking-wide hover:bg-rose-500 transition-colors duration-200">
                                See Deal
                            </a>
                        </div>
                    </div>

                    <!-- Special Events Card -->
                    <div class="flex-1 bg-gray-50 p-8 flex flex-col items-center text-center">
                        <h3 class="font-serif text-2xl font-medium text-gray-900">Special Events</h3>
                        <div class="mt-4 flex items-baseline">
                            <span class="text-6xl font-light text-gray-800">5%</span>
                            <span class="ml-1 text-lg text-gray-600">Off</span>
                        </div>

                        <ul class="mt-10 space-y-3 text-center">
                            <li class="text-gray-600"><span class="text-blue-500">-</span>Minimum stay 2 nights.</li>
                            <li class="text-gray-600"><span class="text-blue-500">-</span>Up to 10 guests.</li>
                            <li class="text-gray-600"><span class="text-blue-500">-</span>Breakfast included.</li>
                            <li class="text-gray-600"><span class="text-blue-500">-</span>Free cancellation (see terms).
                            </li>
                            <li class="text-gray-600"><span class="text-blue-500">-</span>All rooms.</li>
                            <li class="text-gray-600"><span class="text-blue-500">-</span>Cleaning included.</li>
                            <li class="text-gray-600"><span class="text-blue-500">-</span>Late check-out.</li>
                        </ul>

                        <div class="mt-auto pt-12">
                            <a href="#"
                                class="border border-gray-800 text-gray-800 px-8 py-3 inline-block uppercase text-sm tracking-wide hover:bg-gray-800 hover:text-white transition-colors duration-200">
                                See Deal
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="max-w-screen-lg mx-auto px-6 text-center bg-white"
                style="font-family: 'Josefin Sans', sans-serif;">
                <h2 class="text-3xl font-semibold text-gray-900 mb-3">Continental</h2>
                <p class="text-gray-600 mt-4 text-md max-w-2xl mx-auto leading-relaxed">
                    Between 08:30 and 10:30 we serve our buffet of local and fresh products. Start your day with your
                    favourite breakfast!
                </p>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 max-w-4xl mx-auto py-12 px-4">
                    <!-- Left Column -->
                    <div class="p-8 rounded-lg text-left">
                        <h3 class="text-md text-gray-900">Eggs & Bacon</h3>
                        <p class="text-gray-600 mt-2">Enjoy a classic breakfast with crispy bacon and eggs cooked to your
                            preference.</p>

                        <h3 class="text-md text-gray-900 mt-6">Vegan Breakfast</h3>
                        <p class="text-gray-600 mt-2">A delicious plant-based start to your morning, featuring fresh
                            ingredients.</p>

                        <h3 class="text-md text-gray-900 mt-6">Tea or Coffee</h3>
                        <p class="text-gray-600 mt-2">Choose between a freshly brewed coffee or a variety of teas to
                            complement your meal.</p>
                    </div>

                    <!-- Right Column -->
                    <div class="p-8 rounded-lg text-left">
                        <h3 class="text-md text-gray-900">French Croissant</h3>
                        <p class="text-gray-600 mt-2">Indulge in a buttery and flaky French croissant, freshly baked every
                            morning.</p>

                        <h3 class="text-md text-gray-900 mt-6">Avocado Toast</h3>
                        <p class="text-gray-600 mt-2">A nutritious toast topped with creamy avocado and a sprinkle of
                            seasoning.</p>

                        <h3 class="text-md text-gray-900 mt-6">Cheese Plate</h3>
                        <p class="text-gray-600 mt-2">A selection of fine cheeses served with nuts and dried fruits.</p>
                    </div>
                </div>
            </div>


            {{-- <div class="bg-gray-50 flex items-center justify-center py-4 px-4 sm:px-6 lg:px-8">
                <div class="max-w-4xl w-full bg-white rounded-lg shadow-md p-8 md:p-10">
                    <div class="flex flex-col md:flex-row items-center gap-6 md:gap-8">
                        <!-- Icon and Heading -->
                        <div class="flex items-center gap-4 mb-6 md:mb-0">
                            <div class="flex-shrink-0 bg-gray-100 p-3 rounded-full">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-gray-800">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25H4.5a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0a2.25 2.25 0 00-2.25-2.25H4.5a2.25 2.25 0 00-2.25 2.25m19.5 0v.75L12 13.5 2.25 7.5v-.75" />
                                </svg>
                            </div>
                            <h2 class="text-2xl font-serif font-semibold text-gray-800">Join our weekly Newsletter</h2>
                        </div>

                        <!-- Form with Email Input and Button -->
                        <form class="flex-1 w-full flex flex-col sm:flex-row items-center gap-4">
                            <div class="relative w-full">
                                <input type="email" placeholder="Your email address" required
                                    class="w-full border-b-2 border-gray-300 bg-transparent outline-none py-3 px-2 text-gray-800 focus:border-gray-800 transition-colors duration-300">
                            </div>

                            <button type="submit"
                                class="whitespace-nowrap bg-gray-800 text-white px-6 py-3 rounded hover:bg-gray-900 transition-colors duration-300 font-medium tracking-wide w-full sm:w-auto">
                                SIGN ME UP
                            </button>
                        </form>
                    </div>
                    <p class="text-gray-500 text-xs mt-4 text-center md:text-left">Join 10,000+ subscribers receiving our
                        weekly updates. Unsubscribe anytime.</p>
                </div>
            </div> --}}

            <!-- Join our weekly Newsletter -->
            <div class="bg-[#FCFAF5] py-12 px-6 relative">
                <!-- Main content -->
                <div class="max-w-5xl mx-auto flex flex-col">
                    <!-- Icon and Heading - Left aligned -->
                    <div class="flex items-center gap-4 ">
                        <div class="flex-shrink-0">
                            <svg width="36" height="36" viewBox="0 0 36 36" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <rect x="5" y="9" width="26" height="18" stroke="black" stroke-width="1.5" />
                                <path d="M5 9L18 18L31 9" stroke="black" stroke-width="1.5" />
                            </svg>
                        </div>
                        <h2 class="text-4xl font-serif">Join our weekly Newsletter</h2>
                    </div>

                    <!-- Form elements - Center aligned -->
                    <div class="flex flex-col items-center">
                        <!-- Email Input Field -->
                        <div class="relative w-full max-w-md mb-4">
                            <label class="absolute text-sm text-gray-600 top-0 right-0">Email Address</label>
                            <input type="email"
                                class="w-full border-b border-gray-400 bg-transparent outline-none pb-1 pt-6">
                        </div>

                        <!-- Signup Button -->
                        <button
                            class="border border-black text-black px-16 py-3 hover:bg-black hover:text-white transition">
                            SIGN ME UP
                        </button>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- Revolution Slider Initialization -->

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const slides = document.querySelectorAll("[data-slide]");
            const textLayers = document.querySelectorAll("[data-text]");
            let currentIndex = 0;

            function showSlide(index) {
                slides.forEach((slide, i) => {
                    slide.classList.toggle("opacity-100", i === index);
                    slide.classList.toggle("opacity-0", i !== index);
                    slide.classList.toggle("scale-100", i === index);
                    slide.classList.toggle("scale-105", i !== index);
                });
                textLayers.forEach((text, i) => {
                    text.classList.toggle("opacity-100", i === index);
                    text.classList.toggle("opacity-0", i !== index);
                    text.classList.toggle("translate-y-0", i === index);
                    text.classList.toggle("translate-y-5", i !== index);
                });
            }

            function nextSlide() {
                currentIndex = (currentIndex + 1) % slides.length;
                showSlide(currentIndex);
            }

            function prevSlide() {
                currentIndex = (currentIndex - 1 + slides.length) % slides.length;
                showSlide(currentIndex);
            }

            document.getElementById("nextSlide").addEventListener("click", nextSlide);
            document.getElementById("prevSlide").addEventListener("click", prevSlide);

            setInterval(nextSlide, 5000);
            showSlide(currentIndex);
        });
    </script>
@endsection
