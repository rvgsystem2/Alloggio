@extends('components.main')

@section('content')
    @include('components.header')

    <section class="relative w-full h-[400px] md:h-[500px] lg:h-[600px]">
        <!-- Background Image with Parallax Effect -->
        <div class="absolute inset-0 bg-cover bg-center bg-no-repeat transition-all duration-700 transform hover:scale-105"
            style="background-image: url('{{ asset('asset/images/slide (1).jpg') }}');">
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
                    <div>
                        <!-- Room Image -->
                        <div class="relative">
                            <img src="{{ asset('asset/images/properties-2.jpeg') }}" alt="Artistic Loft"
                                class="w-full h-auto rounded-lg">
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
                            </div>
                        </div>

                        <!-- Book Now Button -->
                        <div class="mt-6">
                            <button
                                class="bg-black text-white px-6 py-2 rounded-none uppercase text-sm font-semibold flex items-center">
                                Book Now
                                <span class="ml-2">+</span>
                            </button>
                        </div>

                    </div>

                    <div class="mt-8">
                        <!-- Room Image -->
                        <div class="relative">
                            <img src="{{ asset('asset/images/properties-3.jpeg') }}" alt="Artistic Loft"
                                class="w-full h-[500px] rounded-lg">
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
                                class="bg-black text-white px-6 py-2 rounded-none uppercase text-sm font-semibold flex items-center">
                                Book Now
                                <span class="ml-2">+</span>
                            </button>
                        </div>

                    </div>

                </div>

                <!-- Right Content Section (Booking Form) -->
                <div class="w-full lg:w-1/3 mt-8 lg:mt-0">
                    <div class="bg-white p-6 rounded-lg shadow-sm sticky top-24">
                        <h2 class="text-2xl font-semibold mb-6">Check Availability</h2>

                        <form>
                            <div class="mb-4">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                                    Check-in
                                </label>
                                <div class="relative">
                                    <input type="date" id="checkin" name="checkin"
                                        class="w-full px-4 py-2 border border-gray-300 rounded-md appearance-none focus:outline-none focus:ring-2 focus:ring-gray-200">
                                </div>
                            </div>

                            <div class="mb-4">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                                    Check-out
                                </label>
                                <div class="relative">
                                    <input type="date" id="checkout" name="checkout"
                                        class="w-full px-4 py-2 border border-gray-300 rounded-md appearance-none focus:outline-none focus:ring-2 focus:ring-gray-200">
                                </div>
                            </div>

                            <div class="mb-4">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                                    Rooms
                                </label>
                                <div class="relative">
                                    <select
                                        class="w-full px-4 py-2 border border-gray-300 rounded-md appearance-none focus:outline-none focus:ring-2 focus:ring-gray-200">
                                        <option>1 Room</option>
                                        <option>2 Rooms</option>
                                        <option>3 Rooms</option>
                                    </select>
                                </div>
                            </div>

                            <div class="mb-6">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                                    Guests
                                </label>
                                <div class="relative">
                                    <select
                                        class="w-full px-4 py-2 border border-gray-300 rounded-md appearance-none focus:outline-none focus:ring-2 focus:ring-gray-200">
                                        <option>1 Adult</option>
                                        <option>2 Adults</option>
                                        <option>2 Adults, 1 Child</option>
                                    </select>
                                </div>
                            </div>

                            <button type="submit"
                                class="w-full bg-black text-white py-3 rounded-md uppercase text-sm font-semibold">
                                Check Availability
                            </button>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>

    @include('components.footer')
@endsection
