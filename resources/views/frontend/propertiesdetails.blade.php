@extends('components.main')

@section('content')
    @include('components.header')

    <section class="relative w-full h-[300px] md:h-[400px]">
        <!-- Background Image with Parallax Effect -->
        <div class="absolute inset-0 bg-cover bg-center bg-no-repeat transition-all duration-700 transform hover:scale-105"
            style="background-image: url('{{ asset('asset/images/properties-1.jpeg') }}');">
            <!-- Enhanced Gradient Overlay -->
            <div class="absolute inset-0 bg-gradient-to-b from-black/30 to-black/70"></div>
        </div>

        <!-- Centered Content with Improved Animation -->
        <div class="absolute inset-0 flex flex-col items-center justify-center text-center px-4">
            <h1
                class="text-white text-5xl md:text-6xl lg:text-7xl font-extrabold tracking-widest drop-shadow-2xl text-opacity-90 animate-fade-in">
                PROPERTY DETAILS
            </h1>
            <p class="text-white text-lg md:text-xl max-w-2xl mt-4 opacity-90 animate-fade-in-up">
                Find all the details you need about this property
            </p>
        </div>
    </section>


    <section class="bg-gray-100 py-12">
        <div class="max-w-7xl mx-auto px-6 md:px-8 lg:px-12">

            <!-- Property Details -->
            <div class="bg-white shadow-md rounded-xl overflow-hidden transition-all duration-300 hover:shadow-lg">
                <!-- Property Image -->
                <div class="relative">
                    <img src="{{ asset('asset/images/properties-1.jpeg') }}" alt="Apartment"
                        class="w-full h-[250px] sm:h-[350px] md:h-[400px] object-cover">
                    <span
                        class="absolute top-3 left-3 bg-green-600 text-white text-xs md:text-sm px-3 py-1 rounded-md font-medium shadow">
                        Best Deal
                    </span>
                </div>

                <!-- Property Info -->
                <div class="p-5 md:p-6">
                    <!-- Title -->
                    <h2 class="text-lg md:text-xl font-semibold text-gray-900 flex items-center gap-2">
                        <i class="material-icons text-gray-600 text-base">apartment</i> Apartment in Ko Samui District
                    </h2>

                    <!-- Subtitle -->
                    <p class="text-gray-700 text-sm md:text-base mt-1 flex items-center gap-2">
                        <i class="material-icons text-gray-600 text-sm">hotel</i> GM Apartments • 2 Bedrooms
                    </p>

                    <!-- Features -->
                    <p class="text-gray-600 text-sm md:text-base mt-2 flex items-center gap-2">
                        <i class="material-icons text-gray-600 text-sm">group</i> Private room • 4 guests • 2 bedrooms • 2
                        beds
                    </p>

                    <!-- Price & Savings -->
                    <div class="flex items-center justify-between mt-4">
                        <p class="text-gray-900 font-bold text-lg md:text-xl flex items-center gap-2">
                            <i class="material-icons text-gray-700 text-base">currency_rupee</i>₹4,207 / Night
                        </p>
                        <span class="text-green-600 font-medium text-sm md:text-base flex items-center gap-2">
                            <i class="material-icons text-green-600 text-sm">savings</i> Save ₹588.98
                        </span>
                    </div>

                    <!-- Description -->
                    <p class="mt-4 text-gray-700 leading-relaxed text-sm md:text-base">
                        Cozy modern-style apartment in the heart of Samui. Just 10 minutes to Central Samui & Fishermen
                        Village.
                        Enjoy a peaceful environment with mountain views, on-site dining, and motorbike rentals at your
                        doorstep.
                    </p>

                    <!-- CTA Button -->
                    <div class="mt-5">
                        <a href="#bookingFormSection"
                            class="block bg-gray-800 text-white text-sm md:text-base font-medium px-5 py-2.5 rounded-lg text-center 
                           hover:bg-gray-900 transition-all duration-300 shadow-sm">
                            Book Now
                        </a>
                    </div>

                </div>
            </div>

            <!-- Amenities & Rules -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mt-10">
                <!-- Amenities Section -->
                <div class="bg-white p-6 md:p-8 shadow-xl rounded-2xl border border-gray-200">
                    <h3 class="text-lg md:text-xl font-bold mb-4 flex items-center text-gray-900">
                        <i class="material-icons text-gray-700 mr-2">check_circle</i> Amenities
                    </h3>
                    <ul class="grid grid-cols-2 gap-4 text-gray-700 text-sm md:text-base">
                        <li class="flex items-center"><i class="material-icons text-gray-600 mr-2">ac_unit</i> Air
                            conditioning</li>
                        <li class="flex items-center"><i class="material-icons text-gray-600 mr-2">tv</i> TV</li>
                        <li class="flex items-center"><i class="material-icons text-gray-600 mr-2">local_offer</i>
                            Essentials</li>
                        <li class="flex items-center"><i class="material-icons text-gray-600 mr-2">kitchen</i> Kitchen</li>
                        <li class="flex items-center"><i class="material-icons text-gray-600 mr-2">pool</i> Pool</li>
                        <li class="flex items-center"><i class="material-icons text-gray-600 mr-2">wifi</i> Wifi</li>
                        <li class="flex items-center"><i class="material-icons text-gray-600 mr-2">content_cut</i> Hair
                            Dryer</li>
                        <li class="flex items-center"><i class="material-icons text-gray-600 mr-2">restaurant</i> Cooking
                            basics</li>
                    </ul>
                </div>

                <!-- Home Rules & Cancellation Policy -->
                <div class="bg-white p-6 md:p-8 shadow-xl rounded-2xl border border-gray-200">
                    <h3 class="text-lg md:text-xl font-bold mb-3 flex items-center text-gray-900">
                        <i class="material-icons text-gray-700 mr-2">gavel</i> Home Rules
                    </h3>
                    <p class="text-gray-700 text-sm md:text-base leading-relaxed">
                        Please contact us at least 1 hour before check-in time.
                    </p>

                    <h3 class="text-lg md:text-xl font-bold mt-6 flex items-center text-gray-900">
                        <i class="material-icons text-gray-700 mr-2">policy</i> Cancellation Policy
                    </h3>
                    <p class="text-gray-700 text-sm md:text-base leading-relaxed">
                        This booking is non-refundable.
                    </p>
                </div>
            </div>

            <!-- Google Map -->
            <div class="mt-12 bg-white p-6 md:p-8 rounded-2xl shadow-xl">
                <h2 class="text-2xl md:text-3xl font-bold text-gray-900 text-center mb-6">Location</h2>
                <iframe class="w-full h-72 sm:h-80 md:h-96 rounded-lg border-2 border-gray-300 shadow-md"
                    src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15698.8475995886!2d99.99812!3d9.548036!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zOcKwMzInNTMuMCJOIDk5wrA1OSc0Mi4wIkU!5e0!3m2!1sen!2sth!4v1710840000000"
                    style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>

            <!-- Booking Form -->
            <div id="bookingFormSection" class="bg-white p-6 md:p-8 shadow-xl rounded-2xl mt-10">
                <h3 class="text-lg md:text-2xl font-bold mb-4">Book Now</h3>
                <form>
                    <label class="block text-gray-700 font-semibold">Check-in Date:</label>
                    <input type="date"
                        class="w-full p-3 border border-gray-300 rounded-lg mb-4 focus:ring-2 focus:ring-gray-500">

                    <label class="block text-gray-700 font-semibold">Check-out Date:</label>
                    <input type="date"
                        class="w-full p-3 border border-gray-300 rounded-lg mb-4 focus:ring-2 focus:ring-gray-500">

                    <label class="block text-gray-700 font-semibold">Guests:</label>
                    <select class="w-full p-3 border border-gray-300 rounded-lg mb-4">
                        <option>1 Guest</option>
                        <option>2 Guests</option>
                        <option>3 Guests</option>
                        <option>4 Guests</option>
                    </select>

                    <button
                        class="w-full bg-gray-800 text-white py-3 rounded-lg font-semibold hover:bg-black transition-all duration-300">
                        Confirm Booking
                    </button>
                </form>
            </div>

            <!-- More Properties -->
            <div class="mt-12">
                <h3 class="text-2xl md:text-3xl font-bold text-gray-900 mb-6">More Properties from Koh Rooms</h3>
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">

                    <!-- Property 1 -->
                    <div
                        class="bg-white shadow-lg rounded-2xl overflow-hidden hover:shadow-2xl transition-all duration-300">
                        <img src="{{ asset('asset/images/properties-2.jpeg') }}" alt="Property"
                            class="w-full h-60 object-cover">
                        <div class="p-6">
                            <h3 class="font-semibold text-gray-900">Condominium in Tambon Bo Put, Thailand</h3>
                            <p class="text-gray-700">1 bedroom • 1 bed • 1 bath</p>
                            <p class="text-gray-900 font-bold mt-3">₹2,661</p>
                            <a href="#"
                                class="mt-4 inline-block bg-gray-600 text-white font-semibold px-4 py-2 rounded-lg hover:bg-gray-700 transition-all duration-300">
                                See Details
                            </a>
                        </div>
                    </div>

                    <!-- Property 2 -->
                    <div
                        class="bg-white shadow-lg rounded-2xl overflow-hidden hover:shadow-2xl transition-all duration-300">
                        <img src="{{ asset('asset/images/properties-3.jpeg') }}" alt="Property"
                            class="w-full h-60 object-cover">
                        <div class="p-6">
                            <h3 class="font-semibold text-gray-900">House in Mae Nam, Thailand</h3>
                            <p class="text-gray-700">1 bedroom • 2 beds • 1 bath</p>
                            <p class="text-gray-900 font-bold mt-3">₹4,640</p>
                            <a href="#"
                                class="mt-4 inline-block bg-gray-600 text-white font-semibold px-4 py-2 rounded-lg hover:bg-gray-700 transition-all duration-300">
                                See Details
                            </a>
                        </div>
                    </div>

                    <!-- Property 3 -->
                    <div
                        class="bg-white shadow-lg rounded-2xl overflow-hidden hover:shadow-2xl transition-all duration-300">
                        <img src="{{ asset('asset/images/properties-4.jpeg') }}" alt="Property"
                            class="w-full h-60 object-cover">
                        <div class="p-6">
                            <h3 class="font-semibold text-gray-900">Serviced apartment in Ko Samui</h3>
                            <p class="text-gray-700">1 bedroom • 1 bed • 1 bath</p>
                            <p class="text-gray-900 font-bold mt-3">₹2,074</p>
                            <a href="#"
                                class="mt-4 inline-block bg-gray-600 text-white font-semibold px-4 py-2 rounded-lg hover:bg-gray-700 transition-all duration-300">
                                See Details
                            </a>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </section>

    @include('components.footer')
@endsection
