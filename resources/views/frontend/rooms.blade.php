@extends('components.main')

@section('content')
    @include('components.header')

    <section class="relative w-full h-[400px] md:h-[500px] lg:h-[600px]">
        <!-- Background Image with Parallax Effect -->
        <div class="absolute inset-0 bg-cover bg-center bg-no-repeat transition-all duration-700 transform hover:scale-105"
            style="background-image: url('{{ asset('asset/images/properties-1.jpeg') }}');">
            <!-- Enhanced Gradient Overlay -->
            <div class="absolute inset-0 bg-gradient-to-b from-black/30 to-black/70"></div>
        </div>

        <!-- Centered Content -->
        <div class="absolute inset-0 flex flex-col items-center justify-center text-center px-4">
            <h1
                class="text-white text-4xl md:text-5xl lg:text-6xl font-extrabold tracking-widest drop-shadow-2xl text-opacity-90 animate-fade-in">
                <span class="inline-block hover:scale-105 transition-transform duration-300">R</span>
                <span class="inline-block hover:scale-105 transition-transform duration-300">O</span>
                <span class="inline-block hover:scale-105 transition-transform duration-300">O</span>
                <span class="inline-block hover:scale-105 transition-transform duration-300">M</span>
                <span class="inline-block hover:scale-105 transition-transform duration-300">S</span>
            </h1>
            <p class="text-white text-lg md:text-xl max-w-2xl mt-4 opacity-90 animate-fade-in-up">
                Experience comfort and elegance in our well-furnished Standard Room.
            </p>
            <div class="mt-8 animate-fade-in-up">
                <a href="#book-now"
                    class="px-6 py-3 bg-white text-black font-bold rounded-full hover:bg-black hover:text-white transition-colors duration-300">
                    Book Now
                </a>
            </div>
        </div>
    </section>

    <div class="bg-gray-100">

        <div class="container mx-auto px-4 py-8">
            <h1 class="text-4xl font-bold text-gray-800 border-b-4 border-gray-300 pb-2 inline-block my-4">
                Rooms
            </h1>

            <div class="flex flex-col lg:flex-row">

                <!-- Left Content Section (Room Details) -->
                <div class="w-full lg:w-2/3 lg:pr-8">

                    <!-- Card-1 -->
                    <div>
                        <!-- Room Image -->
                        <div class="relative">
                            <img src="{{ asset('asset/images/properties-2.jpeg') }}" alt="Artistic Loft"
                                class="w-full h-auto">
                            <div class="absolute bottom-6 left-6 bg-white bg-opacity-90 px-4 py-2 rounded">
                                <p class="text-gray-600">from <span class="text-xl font-semibold">₹2,624 / night</span></p>
                            </div>
                        </div>

                        <!-- Room Title and Description -->
                        <div class="mt-8">
                            <h1 class="text-3xl font-bold text-gray-800">Apartment in Tambon Bo Put</h1>
                            <p class="text-gray-600 mt-3 font-semibold">RePlay Residence D301</p>
                            <p class="text-gray-600 mt-3 font-semibold">Private room • 2 guests • 1 bedroom • 1 bed • 1
                                bathroom</p>
                            <p class="text-gray-600 mt-3">
                                This place located at most popular area called Bo put, just 3 minutes ride to Fisherman's
                                Village & 13 minutes to Central Samui mall located at Chaweng Beach, and just 2 minutes from
                                the
                                Bo put beach & Bangrak beach, It's suitable for those who looking for private space with
                                modern
                                style.
                            </p>
                        </div>

                        <!-- Room Details -->
                        <div class="mt-6 border-t border-b border-gray-200 py-6">
                            <div class="flex items-center">
                                <span class="mr-2 text-gray-700">26m² / 1-2 person</span>
                            </div>

                            <div class="grid grid-cols-3 sm:grid-cols-4 md:grid-cols-5 gap-6 mt-6">
                                <div class="flex flex-col items-center">
                                    <i class="material-icons text-gray-600">tv</i>
                                    <span class="text-xs mt-1">TV</span>
                                </div>
                                <div class="flex flex-col items-center">
                                    <i class="material-icons text-gray-600">wifi</i>
                                    <span class="text-xs mt-1">Wi-Fi</span>
                                </div>
                                <div class="flex flex-col items-center">
                                    <i class="material-icons text-gray-600">restaurant</i>
                                    <span class="text-xs mt-1">Dining</span>
                                </div>
                                <div class="flex flex-col items-center">
                                    <i class="material-icons text-gray-600">ac_unit</i>
                                    <span class="text-xs mt-1">Air Conditioning</span>
                                </div>
                                <div class="flex flex-col items-center">
                                    <i class="material-icons text-gray-600">local_laundry_service</i>
                                    <span class="text-xs mt-1">Laundry</span>
                                </div>
                                <div class="flex flex-col items-center">
                                    <i class="material-icons text-gray-600">cleaning_services</i>
                                    <span class="text-xs mt-1">Cleaning Products</span>
                                </div>
                                <div class="flex flex-col items-center">
                                    <i class="material-icons text-gray-600">kitchen</i>
                                    <span class="text-xs mt-1">Cooking Basics</span>
                                </div>
                                <div class="flex flex-col items-center">
                                    <i class="material-icons text-gray-600">king_bed</i>
                                    <span class="text-xs mt-1">Essentials</span>
                                </div>
                                <div class="flex flex-col items-center">
                                    <i class="material-icons text-gray-600">wash</i>
                                    <span class="text-xs mt-1">Washing Machine</span>
                                </div>
                                <div class="flex flex-col items-center">
                                    <i class="material-icons text-gray-600">content_cut</i>
                                    <span class="text-xs mt-1">Hair Dryer</span>
                                </div>
                                <div class="flex flex-col items-center">
                                    <i class="material-icons text-gray-600">restaurant_menu</i>
                                    <span class="text-xs mt-1">Dishes & Silverware</span>
                                </div>
                            </div>
                        </div>

                        <!-- Book Now Button -->
                        <div class="mt-6">
                            <button
                                class="bg-black text-white px-6 py-2 rounded-none uppercase text-sm font-semibold flex items-center hover:bg-gray-800 transition duration-300">
                                Book Now
                                <span class="ml-2">+</span>
                            </button>
                        </div>


                    </div>

                    <!-- Card-2 -->
                    <div class="mt-8">
                        <!-- Room Image -->
                        <div class="relative">
                            <img src="{{ asset('asset/images/properties-3.jpeg') }}" alt="Artistic Loft"
                                class="w-full h-[500px]">
                            <div class="absolute bottom-6 left-6 bg-white bg-opacity-90 px-4 py-2 rounded">
                                <p class="text-gray-600">from <span class="text-xl font-semibold">₹4,667 / night</span></p>
                            </div>
                        </div>

                        <!-- Room Title and Description -->
                        <div class="mt-8">
                            <h1 class="text-3xl font-bold text-gray-800">House in Mae Nam</h1>
                            <p class="text-gray-600 mt-3 font-semibold">Beachfront Villa with Sunset</p>
                            <p class="text-gray-600 mt-3 font-semibold">Entire Place • 3 guests • 1 bedroom • 2 beds • 1
                                bathroom</p>
                            <p class="text-gray-600 mt-3">
                                Beachfront Villa with Sunset located at Bang Po Beach, it’s suitable for those who looking
                                to stay at beach with peaceful weather & also very beautiful sunset, House is located just
                                10 steps to the beach and also Very delicious continental & Thai food restaurant just 20
                                steps from the house,
                                We also provide services like motorbike rental, food ordering, transportation & Kayak Board,
                                it’s just 20 minutes ride to Central Smaui & 30 minutes ride to Lamai & just 10 minutes ride
                                from Nathon Pier.
                            </p>
                        </div>

                        <!-- Room Details -->
                        <div class="mt-6 border-t border-b border-gray-200 py-6">
                            <div class="flex items-center">
                                <span class="mr-2 text-gray-700">26m² / 1-2 person</span>
                            </div>

                            <div class="grid grid-cols-5 gap-6 mt-6">
                                <div class="flex flex-col items-center">
                                    <i class="material-icons text-gray-600">tv</i>
                                    <span class="text-xs mt-1">TV</span>
                                </div>
                                <div class="flex flex-col items-center">
                                    <i class="material-icons text-gray-600">wifi</i>
                                    <span class="text-xs mt-1">Wi-Fi</span>
                                </div>
                                <div class="flex flex-col items-center">
                                    <i class="material-icons text-gray-600">restaurant</i>
                                    <span class="text-xs mt-1">Dining</span>
                                </div>
                                <div class="flex flex-col items-center">
                                    <i class="material-icons text-gray-600">ac_unit</i>
                                    <span class="text-xs mt-1">AC</span>
                                </div>
                                <div class="flex flex-col items-center">
                                    <i class="material-icons text-gray-600">local_laundry_service</i>
                                    <span class="text-xs mt-1">Laundry</span>
                                </div>
                                <div class="flex flex-col items-center">
                                    <i class="material-icons text-gray-600">kitchen</i>
                                    <span class="text-xs mt-1">Kitchen</span>
                                </div>
                                <div class="flex flex-col items-center">
                                    <i class="material-icons text-gray-600">local_hotel</i>
                                    <span class="text-xs mt-1">Hair Dryer</span>
                                </div>
                                <div class="flex flex-col items-center">
                                    <i class="material-icons text-gray-600">local_laundry_service</i>
                                    <span class="text-xs mt-1">Washing Machine</span>
                                </div>
                                <div class="flex flex-col items-center">
                                    <i class="material-icons text-gray-600">cleaning_services</i>
                                    <span class="text-xs mt-1">Cleaning Products</span>
                                </div>
                                <div class="flex flex-col items-center">
                                    <i class="material-icons text-gray-600">soup_kitchen</i>
                                    <span class="text-xs mt-1">Cooking Basics</span>
                                </div>
                                <div class="flex flex-col items-center">
                                    <i class="material-icons text-gray-600">work</i>
                                    <span class="text-xs mt-1">Workspace</span>
                                </div>
                            </div>

                        </div>

                        <!-- Book Now Button -->
                        <div class="mt-6">
                            <button
                                class="bg-black text-white px-6 py-2 rounded-none uppercase text-sm font-semibold flex items-center hover:bg-gray-800 transition duration-300">
                                Book Now
                                <span class="ml-2">+</span>
                            </button>
                        </div>


                    </div>

                    <!-- Card-3 -->
                    <div class="mt-8">
                        <!-- Room Image -->
                        <div class="relative">
                            <img src="{{ asset('asset/images/properties-4.jpeg') }}" alt="Cozy Apartment GM8"
                                class="w-full h-[500px] rounded-lg object-cover">
                            <div class="absolute bottom-6 left-6 bg-white bg-opacity-90 px-4 py-2 rounded">
                                <p class="text-gray-600">from <span class="text-xl font-semibold">₹2,033 / night</span>
                                </p>
                            </div>
                        </div>

                        <!-- Room Title and Description -->
                        <div class="mt-8">
                            <h1 class="text-3xl font-bold text-gray-800">Cozy Apartment GM8</h1>
                            <p class="text-gray-600 mt-3 font-semibold">Serviced apartment in Ko Samui District</p>
                            <p class="text-gray-600 mt-3 font-semibold">Entire Place • 2 guests • 1 bedroom • 1 bed • 1
                                bathroom</p>
                            <p class="text-gray-600 mt-3">
                                Cozy New Apartment at Chaweng Hill with mountain view, near to the Central Samui Mall &
                                Chaweng Beach.
                                A peaceful stay with easy access to major attractions.
                            </p>
                        </div>

                        <!-- Room Details -->
                        <div class="mt-6 border-t border-b border-gray-200 py-6">
                            <div class="flex items-center">
                                <span class="mr-2 text-gray-700">26m² / 1-2 person</span>
                            </div>

                            <div class="grid grid-cols-3 sm:grid-cols-4 md:grid-cols-5 gap-6 mt-6">
                                <div class="flex flex-col items-center">
                                    <i class="material-icons text-gray-600">kitchen</i>
                                    <span class="text-xs mt-1">Kitchen</span>
                                </div>
                                <div class="flex flex-col items-center">
                                    <i class="material-icons text-gray-600">pool</i>
                                    <span class="text-xs mt-1">Pool</span>
                                </div>
                                <div class="flex flex-col items-center">
                                    <i class="material-icons text-gray-600">wifi</i>
                                    <span class="text-xs mt-1">Wi-Fi</span>
                                </div>
                                <div class="flex flex-col items-center">
                                    <i class="material-icons text-gray-600">tv</i>
                                    <span class="text-xs mt-1">TV</span>
                                </div>
                                <div class="flex flex-col items-center">
                                    <i class="material-icons text-gray-600">local_hotel</i>
                                    <span class="text-xs mt-1">Hair Dryer</span>
                                </div>
                                <div class="flex flex-col items-center">
                                    <i class="material-icons text-gray-600">ac_unit</i>
                                    <span class="text-xs mt-1">Air Conditioning</span>
                                </div>
                                <div class="flex flex-col items-center">
                                    <i class="material-icons text-gray-600">king_bed</i>
                                    <span class="text-xs mt-1">Essentials</span>
                                </div>
                            </div>
                        </div>

                        <!-- Book Now Button -->
                        <div class="mt-6">
                            <button
                                class="bg-black text-white px-6 py-2 rounded-none uppercase text-sm font-semibold flex items-center hover:bg-gray-800 transition duration-300">
                                Book Now
                                <span class="ml-2">+</span>
                            </button>
                        </div>

                    </div>

                    <!-- Card-4 -->
                    <div class="mt-8">
                        <!-- Room Image -->
                        <div class="relative">
                            <img src="{{ asset('asset/images/properties-5.jpeg') }}" alt="GM Apartments 2 Bedrooms"
                                class="w-full h-[500px] rounded-lg object-cover">
                            <div class="absolute bottom-6 left-6 bg-white bg-opacity-90 px-4 py-2 rounded">
                                <p class="text-gray-600">from <span class="text-xl font-semibold">₹4,165 / night</span>
                                </p>
                            </div>
                        </div>

                        <!-- Room Title and Description -->
                        <div class="mt-8">
                            <h1 class="text-3xl font-bold text-gray-800">GM Apartments 2 Bedrooms</h1>
                            <p class="text-gray-600 mt-3 font-semibold">Serviced apartment in Ko Samui District</p>
                            <p class="text-gray-600 mt-3 font-semibold">Entire Place • 4 guests • 2 bedrooms • 2 beds • 1
                                bathroom</p>
                            <p class="text-gray-600 mt-3">
                                Cozy modern-style apartment located in the heart of Samui, just 10 minutes from Central
                                Samui & Fisherman’s Village.
                                Enjoy a peaceful environment with a mountain view. The apartment includes an on-site
                                restaurant serving authentic
                                Thai food and motorbike rentals at your doorstep. We are here to assist with everything you
                                need!
                            </p>
                        </div>

                        <!-- Room Details -->
                        <div class="mt-6 border-t border-b border-gray-200 py-6">
                            <div class="flex items-center">
                                <span class="mr-2 text-gray-700">50m² / 4-person capacity</span>
                            </div>

                            <div class="grid grid-cols-3 sm:grid-cols-4 md:grid-cols-5 gap-6 mt-6">
                                <div class="flex flex-col items-center">
                                    <i class="material-icons text-gray-600">ac_unit</i>
                                    <span class="text-xs mt-1">Air Conditioning</span>
                                </div>
                                <div class="flex flex-col items-center">
                                    <i class="material-icons text-gray-600">tv</i>
                                    <span class="text-xs mt-1">TV</span>
                                </div>
                                <div class="flex flex-col items-center">
                                    <i class="material-icons text-gray-600">king_bed</i>
                                    <span class="text-xs mt-1">Essentials</span>
                                </div>
                                <div class="flex flex-col items-center">
                                    <i class="material-icons text-gray-600">kitchen</i>
                                    <span class="text-xs mt-1">Kitchen</span>
                                </div>
                                <div class="flex flex-col items-center">
                                    <i class="material-icons text-gray-600">pool</i>
                                    <span class="text-xs mt-1">Pool</span>
                                </div>
                                <div class="flex flex-col items-center">
                                    <i class="material-icons text-gray-600">wifi</i>
                                    <span class="text-xs mt-1">Wi-Fi</span>
                                </div>
                                <div class="flex flex-col items-center">
                                    <i class="material-icons text-gray-600">local_hotel</i>
                                    <span class="text-xs mt-1">Hair Dryer</span>
                                </div>
                                <div class="flex flex-col items-center">
                                    <i class="material-icons text-gray-600">restaurant</i>
                                    <span class="text-xs mt-1">Dishes & Silverware</span>
                                </div>
                                <div class="flex flex-col items-center">
                                    <i class="material-icons text-gray-600">soup_kitchen</i>
                                    <span class="text-xs mt-1">Cooking Basics</span>
                                </div>
                            </div>
                        </div>

                        <!-- Book Now Button -->
                        <div class="mt-6">
                            <button
                                class="bg-black text-white px-6 py-2 rounded-none uppercase text-sm font-semibold flex items-center hover:bg-gray-800 transition duration-300">
                                Book Now
                                <span class="ml-2">+</span>
                            </button>
                        </div>

                    </div>

                    <!-- Card-5 -->
                    <div class="mt-8">
                        <!-- Room Image -->
                        <div class="relative">
                            <img src="{{ asset('asset/images/properties-1.jpeg') }}" alt="Gm Bungalow at Chaweng Hill"
                                class="w-full h-[500px] rounded-lg object-cover">
                            <div class="absolute bottom-6 left-6 bg-white bg-opacity-90 px-4 py-2 rounded">
                                <p class="text-gray-600">from <span class="text-xl font-semibold">₹2,006 / night</span>
                                </p>
                            </div>
                        </div>

                        <!-- Room Title and Description -->
                        <div class="mt-8">
                            <h1 class="text-3xl font-bold text-gray-800">Gm Bungalow at Chaweng Hill</h1>
                            <p class="text-gray-600 mt-3 font-semibold">House in Tambon Bo Put</p>
                            <p class="text-gray-600 mt-3 font-semibold">Entire Place • 2 guests • 1 bedroom • 1 bed • 1
                                bathroom</p>
                            <p class="text-gray-600 mt-3">
                                Mountain house at Chaweng Hill with a shared pool, just 10 minutes from Central Samui &
                                Fisherman’s Village.
                                Enjoy a peaceful environment with a beautiful mountain view. A restaurant is just 10 steps
                                from the house,
                                and motorbike rentals are available at your doorstep. We’re here to assist with anything you
                                need.
                            </p>
                        </div>

                        <!-- Room Details -->
                        <div class="mt-6 border-t border-b border-gray-200 py-6">
                            <div class="flex items-center">
                                <span class="mr-2 text-gray-700">40m² / 2-person capacity</span>
                            </div>

                            <div class="grid grid-cols-3 sm:grid-cols-4 md:grid-cols-5 gap-6 mt-6">
                                <div class="flex flex-col items-center">
                                    <i class="material-icons text-gray-600">ac_unit</i>
                                    <span class="text-xs mt-1">Air Conditioning</span>
                                </div>
                                <div class="flex flex-col items-center">
                                    <i class="material-icons text-gray-600">king_bed</i>
                                    <span class="text-xs mt-1">Essentials</span>
                                </div>
                                <div class="flex flex-col items-center">
                                    <i class="material-icons text-gray-600">kitchen</i>
                                    <span class="text-xs mt-1">Kitchen</span>
                                </div>
                                <div class="flex flex-col items-center">
                                    <i class="material-icons text-gray-600">pool</i>
                                    <span class="text-xs mt-1">Pool</span>
                                </div>
                                <div class="flex flex-col items-center">
                                    <i class="material-icons text-gray-600">tv</i>
                                    <span class="text-xs mt-1">TV</span>
                                </div>
                                <div class="flex flex-col items-center">
                                    <i class="material-icons text-gray-600">wifi</i>
                                    <span class="text-xs mt-1">Wi-Fi</span>
                                </div>
                                <div class="flex flex-col items-center">
                                    <i class="material-icons text-gray-600">restaurant</i>
                                    <span class="text-xs mt-1">Dishes & Silverware</span>
                                </div>
                                <div class="flex flex-col items-center">
                                    <i class="material-icons text-gray-600">work</i>
                                    <span class="text-xs mt-1">Dedicated Workspace</span>
                                </div>
                                <div class="flex flex-col items-center">
                                    <i class="material-icons text-gray-600">soup_kitchen</i>
                                    <span class="text-xs mt-1">Cooking Basics</span>
                                </div>
                            </div>
                        </div>

                        <!-- Book Now Button -->
                        <div class="mt-6">
                            <button
                                class="bg-black text-white px-6 py-2 rounded-none uppercase text-sm font-semibold flex items-center hover:bg-gray-800 transition duration-300">
                                Book Now
                                <span class="ml-2">+</span>
                            </button>
                        </div>

                    </div>

                </div>

                <!-- Right Content Section (Booking Form) -->
                <div class="w-full lg:w-1/3 mt-8 lg:mt-0">
                    <div class="bg-white p-6 shadow-md sticky top-24">
                        <h2 class="text-2xl font-semibold mb-6">Check Availability</h2>

                        <form>
                            <!-- Check-in Date -->
                            <div class="mb-4">
                                <label class="block text-gray-700 text-xs font-bold mb-2">Check-in</label>
                                <input type="date" id="check-in" name="checkin"
                                    class="w-full px-4 py-3 border border-gray-300 focus:ring-2 focus:ring-gray-200">
                            </div>

                            <!-- Check-out Date -->
                            <div class="mb-4">
                                <label class="block text-gray-700 text-xs font-bold mb-2">Check-out</label>
                                <input type="date" id="check-out" name="checkout"
                                    class="w-full px-4 py-3 border border-gray-300 focus:ring-2 focus:ring-gray-200">
                            </div>

                            <!-- Rooms Selection -->
                            <div class="mb-4">
                                <label class="block text-gray-700 text-xs font-bold mb-2">Rooms</label>
                                <div class="relative">
                                    <select
                                        class="w-full px-4 py-3 border border-gray-300 focus:ring-2 focus:ring-gray-200 appearance-none">
                                        <option>1 Room</option>
                                        <option>2 Rooms</option>
                                        <option>3 Rooms</option>
                                    </select>
                                    <span
                                        class="material-icons absolute right-3 top-1/2 transform -translate-y-1/2 text-gray-600">
                                        expand_more
                                    </span>
                                </div>
                            </div>

                            <!-- Guests Selection -->
                            <div class="relative mb-6">
                                <label class="block text-gray-700 text-xs font-bold mb-2">Guests</label>
                                <div id="guests-selector"
                                    class="border border-gray-300 px-4 py-3 w-full text-gray-800 cursor-pointer flex justify-between items-center">
                                    <span id="guests-display">1 Adult</span>
                                    <span class="material-icons">expand_more</span>
                                </div>

                                <div id="guests-dropdown"
                                    class="absolute top-full left-0 right-0 bg-white border border-gray-300 mt-1 p-4 z-10 hidden">
                                    <div class="flex justify-between items-center mb-3">
                                        <span>Adults</span>
                                        <select id="adults-count" class="border border-gray-300 px-4 py-3 rounded-md">
                                            <option value="1" selected>1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                        </select>
                                    </div>

                                    <div class="flex justify-between items-center mb-3">
                                        <span>Children <br><small class="text-gray-500">(2-12 years)</small></span>
                                        <select id="children-count" class="border border-gray-300 px-4 py-3 rounded-md">
                                            <option value="0" selected>0</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                        </select>
                                    </div>

                                    <div class="flex justify-between items-center mb-4">
                                        <span>Infants <br><small class="text-gray-500">(0-2 years)</small></span>
                                        <select id="infants-count" class="border border-gray-300 px-4 py-3 rounded-md">
                                            <option value="0" selected>0</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                        </select>
                                    </div>

                                    <button id="done-button"
                                        class="w-full border border-gray-400 py-3 text-gray-800 hover:bg-gray-100">
                                        DONE
                                    </button>
                                </div>
                            </div>

                            <button type="submit"
                                class="w-full bg-black text-white py-3 uppercase text-sm font-semibold hover:bg-gray-800">
                                Check Availability
                            </button>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>

    @include('components.footer')


    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Set default check-in and check-out dates
            const today = new Date();
            document.getElementById('check-in').value = today.toISOString().split('T')[0];

            const tomorrow = new Date();
            tomorrow.setDate(today.getDate() + 1);
            document.getElementById('check-out').value = tomorrow.toISOString().split('T')[0];

            // Guests Dropdown Handling
            const guestsSelector = document.getElementById('guests-selector');
            const guestsDropdown = document.getElementById('guests-dropdown');
            const guestsDisplay = document.getElementById('guests-display');
            const doneButton = document.getElementById('done-button');

            guestsSelector.addEventListener('click', function() {
                guestsDropdown.classList.toggle('hidden');
            });

            document.addEventListener('click', function(event) {
                if (!guestsSelector.contains(event.target) && !guestsDropdown.contains(event.target)) {
                    guestsDropdown.classList.add('hidden');
                }
            });

            doneButton.addEventListener('click', function(event) {
                event.preventDefault();
                updateGuestsDisplay();
                guestsDropdown.classList.add('hidden');
            });

            document.getElementById('adults-count').addEventListener('change', updateGuestsDisplay);
            document.getElementById('children-count').addEventListener('change', updateGuestsDisplay);
            document.getElementById('infants-count').addEventListener('change', updateGuestsDisplay);

            function updateGuestsDisplay() {
                const adults = parseInt(document.getElementById('adults-count').value);
                const children = parseInt(document.getElementById('children-count').value);
                const infants = parseInt(document.getElementById('infants-count').value);

                let displayText = `${adults} Adult${adults > 1 ? 's' : ''}`;
                if (children > 0) displayText += `, ${children} Child${children > 1 ? 'ren' : ''}`;
                if (infants > 0) displayText += `, ${infants} Infant${infants > 1 ? 's' : ''}`;

                guestsDisplay.textContent = displayText;
            }
        });
    </script>
@endsection
