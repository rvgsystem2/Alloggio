@extends('components.main')

@section('content')
    <div class="block md:hidden">
        @include('components.header')
    </div>

    <div class="flex overflow-hidden">
        <!-- Sidebar -->
        <div class="w-1/4 min-h-screen bg-gray-100 hidden md:block">
            @include('components.sidebar')
        </div>

        <!-- Main Content -->
        <div class="w-full md:w-3/4 relative overflow-hidden">

            {{-- <div class="relative w-full max-w-screen-lg mx-auto overflow-hidden">
                <div id="slider" class="relative w-full h-[600px]">
                    <!-- Slide 1 -->
                    <div class="absolute inset-0 w-full h-full transition-opacity duration-1000 ease-in-out opacity-0" data-slide>
                        <img src="{{ asset('asset/images/slide (1).jpg') }}" alt="Interior & Exterior" class="w-full h-[600px] object-cover">
                        <div class="absolute top-1/2 left-0 transform -translate-y-1/2 bg-[#FAF7F2] p-10 shadow-md">
                            <h2 class="text-5xl font-serif text-gray-900">Interior & Exterior</h2>
                            <button class="mt-6 text-lg font-semibold tracking-wide text-gray-700 flex items-center">
                                READ MORE <span class="material-icons ml-2">add</span>
                            </button>
                        </div>
                    </div>
            
                    <!-- Slide 2 -->
                    <div class="absolute inset-0 w-full h-full transition-opacity duration-1000 ease-in-out opacity-0" data-slide>
                        <img src="{{ asset('asset/images/slide (2).jpg') }}" alt="Modern Design" class="w-full h-[600px] object-cover">
                        <div class="absolute top-1/2 left-0 transform -translate-y-1/2 bg-[#FAF7F2] p-10 shadow-md">
                            <h2 class="text-5xl font-serif text-gray-900">Modern Design</h2>
                            <button class="mt-6 text-lg font-semibold tracking-wide text-gray-700 flex items-center">
                                READ MORE <span class="material-icons ml-2">add</span>
                            </button>
                        </div>
                    </div>
            
                    <!-- Slide 3 -->
                    <div class="absolute inset-0 w-full h-full transition-opacity duration-1000 ease-in-out opacity-0" data-slide>
                        <img src="{{ asset('asset/images/slide (3).jpg') }}" alt="Luxury Living" class="w-full h-[600px] object-cover">
                        <div class="absolute top-1/2 left-0 transform -translate-y-1/2 bg-[#FAF7F2] p-10 shadow-md">
                            <h2 class="text-5xl font-serif text-gray-900">Luxury Living</h2>
                            <button class="mt-6 text-lg font-semibold tracking-wide text-gray-700 flex items-center">
                                READ MORE <span class="material-icons ml-2">add</span>
                            </button>
                        </div>
                    </div>
                </div>
            
                <!-- Navigation Arrows -->
                <button id="prevSlide" class="absolute left-4 top-1/2 transform -translate-y-1/2 bg-gray-800 text-white p-3 rounded-full text-xl">
                    &#10094;
                </button>
                <button id="nextSlide" class="absolute right-4 top-1/2 transform -translate-y-1/2 bg-gray-800 text-white p-3 rounded-full text-xl">
                    &#10095;
                </button>
            </div>
            
            <script>
                document.addEventListener("DOMContentLoaded", function () {
                    let slides = document.querySelectorAll("[data-slide]");
                    let currentIndex = 0;
            
                    function showSlide(index) {
                        slides.forEach((slide, i) => {
                            slide.style.opacity = i === index ? "1" : "0";
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
            
                    // Auto-slide every 4 seconds
                    setInterval(nextSlide, 4000);
            
                    // Show the first slide initially
                    showSlide(currentIndex);
                });
            </script> --}}

            <!-- Slider Container -->
            <div class="relative w-full h-screen overflow-hidden">
                <div id="slider" class="relative w-full h-screen">
                    <!-- Slides -->
                    <div class="absolute inset-0 w-full h-full opacity-0 scale-105 transition-all duration-1000 ease-in-out"
                        data-slide>
                        <img src="{{ asset('asset/images/slide (1).jpg') }}" alt="Slide Image"
                            class="w-full h-screen object-cover">
                        <div class="absolute top-1/3 left-1/2 -translate-x-1/2 -translate-y-1/2 text-center opacity-0 translate-y-5 transition-all duration-1000 ease-in-out"
                            data-text>
                            <h2 class="text-5xl font-serif text-gray-900 bg-white px-8 py-4 rounded-md shadow-md">
                                Island Resort / from $190
                            </h2>
                        </div>
                    </div>
                    <div class="absolute inset-0 w-full h-full opacity-0 scale-105 transition-all duration-1000 ease-in-out"
                        data-slide>
                        <img src="{{ asset('asset/images/slide (2).jpg') }}" alt="Slide Image"
                            class="w-full h-screen object-cover">
                        <div class="absolute top-1/3 left-1/2 -translate-x-1/2 -translate-y-1/2 text-center opacity-0 translate-y-5 transition-all duration-1000 ease-in-out"
                            data-text>
                            <h2 class="text-5xl font-serif text-gray-900 bg-white px-8 py-4 rounded-md shadow-md">
                                Mountain Escape / from $250
                            </h2>
                        </div>
                    </div>
                    <div class="absolute inset-0 w-full h-full opacity-0 scale-105 transition-all duration-1000 ease-in-out"
                        data-slide>
                        <img src="{{ asset('asset/images/slide (3).jpg') }}" alt="Slide Image"
                            class="w-full h-screen object-cover">
                        <div class="absolute top-1/3 left-1/2 -translate-x-1/2 -translate-y-1/2 text-center opacity-0 translate-y-5 transition-all duration-1000 ease-in-out"
                            data-text>
                            <h2 class="text-5xl font-serif text-gray-900 bg-white px-8 py-4 rounded-md shadow-md">
                                Luxury Villa / from $300
                            </h2>
                        </div>
                    </div>
                </div>

                <!-- Navigation Arrows -->
                <button id="prevSlide"
                    class="absolute left-4 top-1/2 transform -translate-y-1/2 bg-gray-800 text-white p-2 rounded-full">&#10094;</button>
                <button id="nextSlide"
                    class="absolute right-4 top-1/2 transform -translate-y-1/2 bg-gray-800 text-white p-2 rounded-full">&#10095;</button>
            </div>

            <!-- Booking Container -->
            <div class="w-full flex items-center justify-center bg-[#fcfaf5] px-4 py-4">
                <div class="bg-white flex flex-wrap items-center gap-5 w-full max-w-[900px] mx-auto">

                    <!-- Check-in -->
                    <div class="flex flex-col flex-1 min-w-[200px]">
                        <label class="text-sm font-semibold text-gray-700 mb-2 tracking-wide">CHECK-IN</label>
                        <input type="date"
                            class="border border-gray-300 px-4 py-3 w-full text-gray-800 text-base focus:ring-2 focus:ring-amber-500 focus:border-amber-500 cursor-pointer">
                    </div>

                    <!-- Check-out -->
                    <div class="flex flex-col flex-1 min-w-[200px]">
                        <label class="text-sm font-semibold text-gray-700 mb-2 tracking-wide">CHECK-OUT</label>
                        <input type="date"
                            class="border border-gray-300 px-4 py-3 w-full text-gray-800 text-base focus:ring-2 focus:ring-amber-500 focus:border-amber-500 cursor-pointer">
                    </div>

                    <!-- Guests -->
                    <div class="flex flex-col flex-1 min-w-[200px]">
                        <label class="text-sm font-semibold text-gray-700 mb-2 tracking-wide">GUESTS</label>
                        <select
                            class="border border-gray-300 px-4 py-3 w-full bg-white text-gray-800 text-base focus:ring-2 focus:ring-amber-500 focus:border-amber-500 cursor-pointer">
                            <option>1 Adult</option>
                            <option>2 Adults</option>
                            <option>Family</option>
                        </select>
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


            <!-- Include SwiperJS -->
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
            <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

            <div class="relative w-full max-w-6xl mx-auto overflow-hidden bg-[#FAF7F2]">
                <!-- Swiper Container -->
                <div class="swiper mySwiper">
                    <div class="swiper-wrapper">
                        <!-- Slide 1 -->
                        <div class="swiper-slide">
                            <div class="bg-white p-4">
                                <img src="{{ asset('asset/images/slide (1).jpg') }}" alt="Rustic Gem Room"
                                    class="w-full h-64 object-cover" />
                                <div class="p-8 bg-[#f8f6f1]">
                                    <h2 class="text-3xl font-serif font-normal text-gray-900">Rustic Gem</h2>
                                    <div class="text-sm text-gray-500">from <span
                                            class="text-xl font-semibold text-gray-900">$38</span></div>
                                    <p class="text-gray-600">40m² / 1-2 person</p>
                                    <p class="text-gray-600 mb-6">Ut et rhoncus odio. Quisque pellentesque nisl leo, eget
                                        ultricies nibh ullamcorper ut.</p>
                                    <button
                                        class="uppercase tracking-wider text-gray-800 font-semibold text-sm flex items-center">Book
                                        Now <span class="material-icons ml-1">add</span></button>
                                </div>
                            </div>
                        </div>

                        <!-- Slide 2 -->
                        <div class="swiper-slide">
                            <div class="bg-white p-4">
                                <img src="{{ asset('asset/images/slide (1).jpg') }}" alt="Maisonette Room"
                                    class="w-full h-64 object-cover" />
                                <div class="p-8 bg-[#f8f6f1]">
                                    <h2 class="text-3xl font-serif font-normal text-gray-900">Maisonette</h2>
                                    <div class="text-sm text-gray-500">from <span
                                            class="text-xl font-semibold text-gray-900">$99</span></div>
                                    <p class="text-gray-600">120m² / 1-6 person</p>
                                    <p class="text-gray-600 mb-6">Ut et rhoncus odio. Quisque pellentesque nisl leo, eget
                                        ultricies nibh ullamcorper ut.</p>
                                    <button
                                        class="uppercase tracking-wider text-gray-800 font-semibold text-sm flex items-center">Book
                                        Now <span class="material-icons ml-1">add</span></button>
                                </div>
                            </div>
                        </div>

                        <!-- Slide 3 -->
                        <div class="swiper-slide">
                            <div class="bg-white p-4">
                                <img src="{{ asset('asset/images/slide (2).jpg') }}" alt="Luxury Suite"
                                    class="w-full h-64 object-cover" />
                                <div class="p-8 bg-[#f8f6f1]">
                                    <h2 class="text-3xl font-serif font-normal text-gray-900">Luxury Suite</h2>
                                    <div class="text-sm text-gray-500">from <span
                                            class="text-xl font-semibold text-gray-900">$150</span></div>
                                    <p class="text-gray-600">200m² / 1-8 person</p>
                                    <p class="text-gray-600 mb-6">Experience ultimate luxury with our spacious suite,
                                        featuring premium amenities.</p>
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
            </script>


            <div class="relative w-full max-w-screen-lg mx-auto">
                <!-- Background Image -->
                <div class="relative group overflow-hidden">
                    <img src="{{ asset('asset/images/slide (1).jpg') }}" alt="Interior & Exterior"
                        class="w-full h-[400px] object-cover transition-transform duration-500 group-hover:scale-105">

                    <!-- Text Overlay -->
                    <div
                        class="absolute top-1/2 left-0 transform -translate-y-1/2 bg-[#FAF7F2] p-8 shadow-md transition-all duration-500 group-hover:translate-x-3 group-hover:shadow-lg">
                        <h2
                            class="text-4xl font-serif text-gray-900 transition-colors duration-500 group-hover:text-amber-700">
                            Interior & Exterior</h2>
                        <button
                            class="mt-4 text-sm font-semibold tracking-wide text-gray-700 flex items-center transition-all duration-500 group-hover:text-amber-700">
                            READ MORE <span
                                class="material-icons ml-2 transform transition-transform duration-500 group-hover:rotate-90">add</span>
                        </button>
                    </div>
                </div>
            </div>


            <div class="max-w-screen-lg mx-auto py-16 px-6">
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-12 text-center">
                    <!-- Feature Items -->
                    <div class="flex flex-col items-center transition-transform transform hover:scale-105">
                        <span class="material-icons text-5xl text-[#C26C51] mb-3">emoji_events</span>
                        <h3 class="text-xl font-serif font-semibold">High Rating</h3>
                        <p class="text-gray-600 mt-2 max-w-xs">
                            Vestibulum a blandit ex, in tempor dolor. Phasellus dolor nisl volutpat sit amet et mollis.
                        </p>
                    </div>

                    <div class="flex flex-col items-center transition-transform transform hover:scale-105">
                        <span class="material-icons text-5xl text-[#C26C51] mb-3">nights_stay</span>
                        <h3 class="text-xl font-serif font-semibold">Quiet Hours</h3>
                        <p class="text-gray-600 mt-2 max-w-xs">
                            Vestibulum a blandit ex, in tempor dolor. Phasellus dolor nisl volutpat sit amet et mollis.
                        </p>
                    </div>

                    <div class="flex flex-col items-center transition-transform transform hover:scale-105">
                        <span class="material-icons text-5xl text-[#C26C51] mb-3">place</span>
                        <h3 class="text-xl font-serif font-semibold">Best Locations</h3>
                        <p class="text-gray-600 mt-2 max-w-xs">
                            Vestibulum a blandit ex, in tempor dolor. Phasellus dolor nisl volutpat sit amet et mollis.
                        </p>
                    </div>

                    <div class="flex flex-col items-center transition-transform transform hover:scale-105">
                        <span class="material-icons text-5xl text-[#C26C51] mb-3">event_available</span>
                        <h3 class="text-xl font-serif font-semibold">Free Cancellation</h3>
                        <p class="text-gray-600 mt-2 max-w-xs">
                            Vestibulum a blandit ex, in tempor dolor. Phasellus dolor nisl volutpat sit amet et mollis.
                        </p>
                    </div>

                    <div class="flex flex-col items-center transition-transform transform hover:scale-105">
                        <span class="material-icons text-5xl text-[#C26C51] mb-3">credit_card</span>
                        <h3 class="text-xl font-serif font-semibold">Payment Options</h3>
                        <p class="text-gray-600 mt-2 max-w-xs">
                            Vestibulum a blandit ex, in tempor dolor. Phasellus dolor nisl volutpat sit amet et mollis.
                        </p>
                    </div>

                    <div class="flex flex-col items-center transition-transform transform hover:scale-105">
                        <span class="material-icons text-5xl text-[#C26C51] mb-3">card_giftcard</span>
                        <h3 class="text-xl font-serif font-semibold">Special Offers</h3>
                        <p class="text-gray-600 mt-2 max-w-xs">
                            Vestibulum a blandit ex, in tempor dolor. Phasellus dolor nisl volutpat sit amet et mollis.
                        </p>
                    </div>
                </div>
            </div>

            <div class="relative w-full max-w-screen-lg mx-auto">
                <!-- Background Image -->
                <div class="relative group overflow-hidden">
                    <img src="{{ asset('asset/images/slide (1).jpg') }}" alt="Interior & Exterior"
                        class="w-full h-[400px] object-cover transition-transform duration-500 group-hover:scale-105">

                    <!-- Text Overlay -->
                    <div
                        class="absolute top-1/2 left-0 transform -translate-y-1/2 bg-[#FAF7F2] p-8 shadow-md transition-all duration-500 group-hover:translate-x-3 group-hover:shadow-lg">
                        <h2
                            class="text-4xl font-serif text-gray-900 transition-colors duration-500 group-hover:text-amber-700">
                            Interior & Exterior</h2>
                        <button
                            class="mt-4 text-sm font-semibold tracking-wide text-gray-700 flex items-center transition-all duration-500 group-hover:text-amber-700">
                            READ MORE <span
                                class="material-icons ml-2 transform transition-transform duration-500 group-hover:rotate-90">add</span>
                        </button>
                    </div>
                </div>
            </div>

            <div class="max-w-screen-lg mx-auto py-16 px-6 text-center bg-gradient-to-b from-white to-gray-50">
                <h2 class="text-4xl font-serif font-bold text-gray-900 mb-2">See our Special Offers</h2>
                <div class="w-24 h-1 bg-amber-500 mx-auto mb-6"></div>
                <p class="text-gray-600 mt-4 text-lg max-w-2xl mx-auto leading-relaxed">
                    Morbi porta, purus at posuere consectetur, eros justo feugiat lorem, nec laoreet odio odio ac erat.
                    Luctus sed libero dictum cursus cras consequat.
                </p>

                <div class="flex flex-col md:flex-row gap-6 max-w-6xl mx-auto py-16 px-4">
                    <!-- Winter Offer Card -->
                    <div class="flex-1 bg-gray-50 p-12 flex flex-col items-center text-center">
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
                    <div class="flex-1 bg-pink-50 p-12 flex flex-col items-center text-center relative">
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
                    <div class="flex-1 bg-gray-50 p-12 flex flex-col items-center text-center">
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
                <h2 class="text-5xl font-bold text-gray-900 mb-3">Continental</h2>
                <p class="text-gray-600 mt-4 text-lg max-w-2xl mx-auto leading-relaxed">
                    Between 08:30 and 10:30 we serve our buffet of local and fresh products. Start your day with your
                    favourite breakfast!
                </p>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 max-w-4xl mx-auto py-12 px-4">
                    <!-- Left Column -->
                    <div class="bg-gray-50 p-8 rounded-lg text-left">
                        <h3 class="text-xl text-gray-900">Eggs & Bacon</h3>
                        <p class="text-gray-600 mt-2">Enjoy a classic breakfast with crispy bacon and eggs cooked to your
                            preference.</p>

                        <h3 class="text-xl text-gray-900 mt-6">Vegan Breakfast</h3>
                        <p class="text-gray-600 mt-2">A delicious plant-based start to your morning, featuring fresh
                            ingredients.</p>

                        <h3 class="text-xl text-gray-900 mt-6">Tea or Coffee</h3>
                        <p class="text-gray-600 mt-2">Choose between a freshly brewed coffee or a variety of teas to
                            complement your meal.</p>
                    </div>

                    <!-- Right Column -->
                    <div class="bg-gray-50 p-8 rounded-lg text-left">
                        <h3 class="text-xl text-gray-900">French Croissant</h3>
                        <p class="text-gray-600 mt-2">Indulge in a buttery and flaky French croissant, freshly baked every
                            morning.</p>

                        <h3 class="text-xl text-gray-900 mt-6">Avocado Toast</h3>
                        <p class="text-gray-600 mt-2">A nutritious toast topped with creamy avocado and a sprinkle of
                            seasoning.</p>

                        <h3 class="text-xl text-gray-900 mt-6">Cheese Plate</h3>
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
