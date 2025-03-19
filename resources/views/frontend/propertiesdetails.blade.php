@extends('components.main')

@section('content')
    @include('components.header')

    <section class="bg-gray-100 py-12">
        <div class="max-w-7xl mx-auto px-8 lg:px-12">
            <!-- Property Details -->
            <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                <img src="{{ asset('asset/images/properties-1.jpeg') }}" alt="Apartment" class="w-full h-[450px] object-cover">
                <div class="p-8">
                    <h2 class="text-3xl font-bold text-gray-900 flex items-center"><i
                            class="material-icons text-gray-700 mr-2">apartment</i> Apartment in Ko Samui District</h2>
                    <p class="text-gray-700 text-lg mt-2"><i class="material-icons text-gray-600 mr-2">hotel</i> GM
                        Apartments 2 Bedrooms</p>
                    <p class="text-gray-600 mt-3 text-lg"><i class="material-icons text-gray-600 mr-2">group</i> Private
                        room • 4 guests • 2 bedrooms • 2 beds</p>
                    <p class="text-gray-800 font-bold text-2xl mt-4"><i
                            class="material-icons text-gray-800 mr-2">attach_money</i> ₹4,207 / Night</p>
                    <span class="text-green-600 font-semibold text-lg"><i
                            class="material-icons text-green-600 mr-2">savings</i> You're saving ₹588.98</span>

                    <p class="mt-6 text-gray-700 leading-relaxed">
                        Cozy modern style apartment located at the heart of Samui. Just 10 minutes ride to Central Samui &
                        Fishermen Village. Comes with a nice Mountain View and peaceful environment. Restaurant on-site
                        serving authentic Thai food. Motorbike rentals available at the doorstep.
                    </p>
                </div>
            </div>

            <!-- Amenities & Rules -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-8">
                <div class="bg-white p-6 shadow-lg rounded-lg">
                    <h3 class="text-xl font-bold mb-4"><i class="material-icons text-gray-700 mr-2">check_circle</i>
                        Amenities</h3>
                    <ul class="grid grid-cols-2 gap-4 text-gray-700">
                        <li><i class="material-icons text-gray-700 mr-2">ac_unit</i> Air conditioning</li>
                        <li><i class="material-icons text-gray-700 mr-2">tv</i> TV</li>
                        <li><i class="material-icons text-gray-700 mr-2">local_offer</i> Essentials</li>
                        <li><i class="material-icons text-gray-700 mr-2">kitchen</i> Kitchen</li>
                        <li><i class="material-icons text-gray-700 mr-2">pool</i> Pool</li>
                        <li><i class="material-icons text-gray-700 mr-2">wifi</i> Wifi</li>
                        <li><i class="material-icons text-gray-700 mr-2">content_cut</i> Hair Dryer</li>
                        <li><i class="material-icons text-gray-700 mr-2">restaurant</i> Cooking basics</li>
                    </ul>
                </div>

                <div class="bg-white p-6 shadow-lg rounded-lg">
                    <h3 class="text-xl font-bold mb-4"><i class="material-icons text-gray-700 mr-2">gavel</i> Home Rules
                    </h3>
                    <p class="text-gray-700">Contact us before 1 hour of check-in time.</p>
                    <h3 class="text-xl font-bold mt-4"><i class="material-icons text-gray-700 mr-2">policy</i> Cancellation
                        Policy</h3>
                    <p class="text-gray-700">Non-Refundable Booking</p>
                </div>
            </div>

            <!-- Google Map -->
            <div class="mt-12 bg-white p-8 rounded-2xl shadow-xl">
                <h2 class="text-3xl font-bold text-gray-900 text-center mb-6">Location</h2>
                <iframe class="w-full h-96 rounded-lg border-2 border-gray-300 shadow-md"
                    src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15698.8475995886!2d99.99812!3d9.548036!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zOcKwMzInNTMuMCJOIDk5wrA1OSc0Mi4wIkU!5e0!3m2!1sen!2sth!4v1710840000000"
                    style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>

            <!-- Booking Form -->
            <div class="bg-white p-8 shadow-xl rounded-2xl mt-10">
                <h3 class="text-2xl font-bold mb-4">Book Now</h3>
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
                        class="w-full bg-gradient-to-r from-gray-800 to-gray-900 text-white py-3 rounded-lg font-semibold hover:from-gray-900 hover:to-black transition-all duration-300">
                        Confirm Booking
                    </button>
                </form>
            </div>

            <!-- More Properties -->
            <div class="mt-12">
                <h3 class="text-3xl font-bold text-gray-900 mb-6">More Properties from Koh Rooms</h3>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    @foreach ([2, 3, 4] as $index)
                        <div
                            class="bg-white shadow-lg rounded-2xl overflow-hidden hover:shadow-2xl transition-all duration-300">
                            <img src="{{ asset('asset/images/properties-' . $index . '.jpeg') }}" alt="Property"
                                class="w-full h-60 object-cover">
                            <div class="p-6">
                                <h3 class="font-semibold text-gray-900">Property {{ $index }}</h3>
                                <p class="text-gray-700">1 bedroom • 1 bed • 1 bath</p>
                                <p class="text-gray-900 font-bold mt-3">₹{{ rand(2000, 5000) }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>


        </div>
    </section>

    @include('components.footer')
@endsection
