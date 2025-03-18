@extends('components.main')

@section('content')
    @include('components.header')

    <div class="bg-gray-100">
        <div class="container mx-auto px-4 py-8">
            <div class="flex flex-col lg:flex-row">
                <!-- Left Content Section (Room Details) -->
                <div class="w-full lg:w-2/3 lg:pr-8">
                    <!-- Room Image -->
                    <div class="relative">
                        <img src="{{ asset('asset/images/slide (1).jpg') }}" alt="Artistic Loft"
                            class="w-full h-auto rounded-lg">
                        <div class="absolute bottom-6 left-6 bg-white bg-opacity-90 px-4 py-2 rounded">
                            <p class="text-gray-600">from <span class="text-xl font-semibold">$32</span></p>
                        </div>
                    </div>

                    <!-- Room Title and Description -->
                    <div class="mt-8">
                        <h1 class="text-3xl font-bold text-gray-800">Artistic Loft</h1>
                        <p class="text-gray-600 mt-3">
                            Ut et rhoncus odio. Quisque pellentesque nisl leo, eget ultricies nibh ullamcorper ut. Curabitur
                            bibendum sed neque quis rhoncus maecenas
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

                    <!-- Additional Room Images -->
                    <div class="mt-12">
                        <img src="{{ asset('asset/images/slide (2).jpg') }}" alt="Additional Room View"
                            class="w-full h-auto rounded-lg">
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
                                    <input type="text" value="Tue, 18 Mar 2025"
                                        class="w-full px-4 py-2 border border-gray-300 rounded-md appearance-none focus:outline-none focus:ring-2 focus:ring-gray-200"
                                        readonly>
                                    <div class="absolute inset-y-0 right-0 flex items-center px-2 pointer-events-none">
                                        <i class="material-icons text-gray-400">calendar_today</i>
                                    </div>
                                </div>
                            </div>

                            <div class="mb-4">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                                    Check-out
                                </label>
                                <div class="relative">
                                    <input type="text" value="Wed, 19 Mar 2025"
                                        class="w-full px-4 py-2 border border-gray-300 rounded-md appearance-none focus:outline-none focus:ring-2 focus:ring-gray-200"
                                        readonly>
                                    <div class="absolute inset-y-0 right-0 flex items-center px-2 pointer-events-none">
                                        <i class="material-icons text-gray-400">calendar_today</i>
                                    </div>
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
                                    <div class="absolute inset-y-0 right-0 flex items-center px-2 pointer-events-none">
                                        <i class="material-icons text-gray-400">expand_more</i>
                                    </div>
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
                                    <div class="absolute inset-y-0 right-0 flex items-center px-2 pointer-events-none">
                                        <i class="material-icons text-gray-400">expand_more</i>
                                    </div>
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
