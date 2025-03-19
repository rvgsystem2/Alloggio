@extends('components.main')

@section('content')
    @include('components.header')

    <section class="bg-gray-100 py-12">
        <div class="max-w-6xl mx-auto px-6">
            <h2 class="text-3xl font-bold text-gray-800 mb-8 text-center">Showing 5 Properties</h2>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">
                <!-- Property Card -->
                <div
                    class="bg-white shadow-md rounded-lg overflow-hidden transition-all transform hover:scale-105 hover:shadow-xl">
                    <img src="{{ asset('asset/images/properties-1.jpeg') }}" alt="Property" class="w-full h-56 object-cover">
                    <div class="p-6">
                        <h3 class="text-lg font-semibold text-gray-900">Apartment in Ko Samui District</h3>
                        <p class="text-gray-600 mt-1">GM Apartments 2 Bedrooms</p>
                        <p class="text-gray-800 font-bold mt-3">₹4,409</p>
                        <a href="{{route('properties.details')}}"
                            class="mt-4 inline-block bg-gray-600 text-white px-5 py-2 rounded-lg shadow-md hover:bg-gray-700 transition">View
                            Details</a>
                    </div>
                </div>

                <!-- Property Card -->
                <div
                    class="bg-white shadow-md rounded-lg overflow-hidden transition-all transform hover:scale-105 hover:shadow-xl">
                    <img src="{{ asset('asset/images/properties-2.jpeg') }}" alt="Property"
                        class="w-full h-56 object-cover">
                    <div class="p-6">
                        <h3 class="text-lg font-semibold text-gray-900">Cozy Apartment GM8</h3>
                        <p class="text-gray-600 mt-1">1 bedroom • 1 bed • 1 bath</p>
                        <p class="text-gray-800 font-bold mt-3">₹2,086</p>
                        <a href="{{route('properties.details')}}"
                            class="mt-4 inline-block bg-gray-600 text-white px-5 py-2 rounded-lg shadow-md hover:bg-gray-700 transition">View
                            Details</a>
                    </div>
                </div>

                <!-- Property Card -->
                <div
                    class="bg-white shadow-md rounded-lg overflow-hidden transition-all transform hover:scale-105 hover:shadow-xl">
                    <img src="{{ asset('asset/images/properties-3.jpeg') }}" alt="Property"
                        class="w-full h-56 object-cover">
                    <div class="p-6">
                        <h3 class="text-lg font-semibold text-gray-900">Apartment in Tambon Bo Put</h3>
                        <p class="text-gray-600 mt-1">RePlay Residence D301</p>
                        <p class="text-gray-800 font-bold mt-3">₹2,676</p>
                        <a href="{{route('properties.details')}}"
                            class="mt-4 inline-block bg-gray-600 text-white px-5 py-2 rounded-lg shadow-md hover:bg-gray-700 transition">View
                            Details</a>
                    </div>
                </div>

                <!-- Property Card -->
                <div
                    class="bg-white shadow-md rounded-lg overflow-hidden transition-all transform hover:scale-105 hover:shadow-xl">
                    <img src="{{ asset('asset/images/properties-4.jpeg') }}" alt="Property"
                        class="w-full h-56 object-cover">
                    <div class="p-6">
                        <h3 class="text-lg font-semibold text-gray-900">House in Mae Nam</h3>
                        <p class="text-gray-600 mt-1">Beachfront Villa with Sunset</p>
                        <p class="text-gray-800 font-bold mt-3">₹4,667</p>
                        <a href="{{route('properties.details')}}"
                            class="mt-4 inline-block bg-gray-600 text-white px-5 py-2 rounded-lg shadow-md hover:bg-gray-700 transition">View
                            Details</a>
                    </div>
                </div>

                <!-- Property Card -->
                <div
                    class="bg-white shadow-md rounded-lg overflow-hidden transition-all transform hover:scale-105 hover:shadow-xl">
                    <img src="{{ asset('asset/images/properties-5.jpeg') }}" alt="Property"
                        class="w-full h-56 object-cover">
                    <div class="p-6">
                        <h3 class="text-lg font-semibold text-gray-900">House in Tambon Bo Put</h3>
                        <p class="text-gray-600 mt-1">GM Bungalow at Chaweng Hill</p>
                        <p class="text-gray-800 font-bold mt-3">₹1,892</p>
                        <a href="{{route('properties.details')}}"
                            class="mt-4 inline-block bg-gray-600 text-white px-5 py-2 rounded-lg shadow-md hover:bg-gray-700 transition">View
                            Details</a>
                    </div>
                </div>
            </div>

            <!-- Google Map Section -->
            <div class="w-full p-6 bg-white shadow-md rounded-lg mt-10">
                <h2 class="text-2xl font-bold mb-4 text-center text-gray-900">Property Location</h2>
                <iframe class="w-full h-96 rounded-lg border border-gray-300"
                    src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15698.8475995886!2d99.99812!3d9.548036!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zOcKwMzInNTMuMCJOIDk5wrA1OSc0Mi4wIkU!5e0!3m2!1sen!2sth!4v1710840000000"
                    style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>
        </div>
    </section>

    @include('components.footer')
@endsection
