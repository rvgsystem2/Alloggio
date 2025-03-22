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
                class="text-white text-4xl md:text-6xl lg:text-7xl font-extrabold tracking-widest drop-shadow-2xl text-opacity-90 animate-fade-in">
                <span class="inline-block hover:scale-105 transition-transform duration-300">S</span>
                <span class="inline-block hover:scale-105 transition-transform duration-300">E</span>
                <span class="inline-block hover:scale-105 transition-transform duration-300">R</span>
                <span class="inline-block hover:scale-105 transition-transform duration-300">V</span>
                <span class="inline-block hover:scale-105 transition-transform duration-300">I</span>
                <span class="inline-block hover:scale-105 transition-transform duration-300">C</span>
                <span class="inline-block hover:scale-105 transition-transform duration-300">E</span>
                <span class="inline-block hover:scale-105 transition-transform duration-300">S</span>
            </h1>
            <p class="text-white text-lg md:text-xl max-w-2xl mt-4 opacity-90 animate-fade-in-up">Expert content solutions
                for your digital presence</p>
        </div>
    </section>

    <!-- Hotel Services Overview -->
    <section class="py-20 bg-gradient-to-b from-[#fef8f3] to-[#fdfaf5]">
        <div class="container mx-auto px-6 text-center">
            <h2 class="text-4xl md:text-5xl font-bold text-gray-900">Our Hotel Services</h2>
            <div class="w-24 h-1 bg-[#b56a5d] mx-auto mt-4"></div>
            <p class="text-gray-600 mt-4 max-w-2xl mx-auto">
                Experience luxury, comfort, and world-class hospitality with our exclusive services.
            </p>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-10 mt-12">
                <!-- Service Card -->
                <div
                    class="bg-white shadow-lg rounded-xl p-8 transition duration-300 hover:shadow-2xl hover:-translate-y-2 group">
                    <div class="flex flex-col items-center">
                        <span
                            class="material-icons-outlined text-[#b56a5d] text-6xl mb-4 transition group-hover:scale-110">hotel</span>
                        <h3 class="text-xl font-semibold text-gray-900">Luxury Rooms</h3>
                        <p class="text-gray-600 mt-2">Indulge in elegantly designed rooms with premium amenities.</p>
                    </div>
                </div>

                <div
                    class="bg-white shadow-lg rounded-xl p-8 transition duration-300 hover:shadow-2xl hover:-translate-y-2 group">
                    <div class="flex flex-col items-center">
                        <span
                            class="material-icons-outlined text-[#b56a5d] text-6xl mb-4 transition group-hover:scale-110">restaurant</span>
                        <h3 class="text-xl font-semibold text-gray-900">Fine Dining</h3>
                        <p class="text-gray-600 mt-2">Savor exquisite dishes crafted by world-class chefs.</p>
                    </div>
                </div>

                <div
                    class="bg-white shadow-lg rounded-xl p-8 transition duration-300 hover:shadow-2xl hover:-translate-y-2 group">
                    <div class="flex flex-col items-center">
                        <span
                            class="material-icons-outlined text-[#b56a5d] text-6xl mb-4 transition group-hover:scale-110">spa</span>
                        <h3 class="text-xl font-semibold text-gray-900">Spa & Wellness</h3>
                        <p class="text-gray-600 mt-2">Relax and rejuvenate with professional spa treatments.</p>
                    </div>
                </div>

                <div
                    class="bg-white shadow-lg rounded-xl p-8 transition duration-300 hover:shadow-2xl hover:-translate-y-2 group">
                    <div class="flex flex-col items-center">
                        <span
                            class="material-icons-outlined text-[#b56a5d] text-6xl mb-4 transition group-hover:scale-110">business_center</span>
                        <h3 class="text-xl font-semibold text-gray-900">Conference Halls</h3>
                        <p class="text-gray-600 mt-2">Host successful events in our modern facilities.</p>
                    </div>
                </div>

                <div
                    class="bg-white shadow-lg rounded-xl p-8 transition duration-300 hover:shadow-2xl hover:-translate-y-2 group">
                    <div class="flex flex-col items-center">
                        <span
                            class="material-icons-outlined text-[#b56a5d] text-6xl mb-4 transition group-hover:scale-110">pool</span>
                        <h3 class="text-xl font-semibold text-gray-900">Swimming Pool</h3>
                        <p class="text-gray-600 mt-2">Enjoy a refreshing dip with a stunning view.</p>
                    </div>
                </div>

                <div
                    class="bg-white shadow-lg rounded-xl p-8 transition duration-300 hover:shadow-2xl hover:-translate-y-2 group">
                    <div class="flex flex-col items-center">
                        <span
                            class="material-icons-outlined text-[#b56a5d] text-6xl mb-4 transition group-hover:scale-110">support_agent</span>
                        <h3 class="text-xl font-semibold text-gray-900">Concierge Service</h3>
                        <p class="text-gray-600 mt-2">Let us assist you with travel bookings and tours.</p>
                    </div>
                </div>

                <!-- New Services -->
                <div
                    class="bg-white shadow-lg rounded-xl p-8 transition duration-300 hover:shadow-2xl hover:-translate-y-2 group">
                    <div class="flex flex-col items-center">
                        <span
                            class="material-icons-outlined text-[#b56a5d] text-6xl mb-4 transition group-hover:scale-110">local_parking</span>
                        <h3 class="text-xl font-semibold text-gray-900">Valet Parking</h3>
                        <p class="text-gray-600 mt-2">Enjoy hassle-free parking with our valet service.</p>
                    </div>
                </div>

                <div
                    class="bg-white shadow-lg rounded-xl p-8 transition duration-300 hover:shadow-2xl hover:-translate-y-2 group">
                    <div class="flex flex-col items-center">
                        <span
                            class="material-icons-outlined text-[#b56a5d] text-6xl mb-4 transition group-hover:scale-110">fitness_center</span>
                        <h3 class="text-xl font-semibold text-gray-900">Fitness Center</h3>
                        <p class="text-gray-600 mt-2">Stay fit with our state-of-the-art gym facilities.</p>
                    </div>
                </div>
            </div>

            <div class="mt-12">
                <a href="#"
                    class="bg-[#b56a5d] text-white px-6 py-3 rounded-full text-lg font-semibold hover:bg-[#a15d51] transition">
                    Explore More Services
                </a>
            </div>
        </div>
    </section>

    <!-- How We Work Section -->
    <section class="py-20 bg-gradient-to-b from-[#fef8f3] to-[#fdfaf5]">
        <div class="container mx-auto px-6 text-center">
            <h2 class="text-4xl md:text-5xl font-bold text-gray-900">How We Work</h2>
            <div class="w-24 h-1 bg-[#b56a5d] mx-auto mt-4"></div>
            <p class="text-gray-600 mt-4 max-w-2xl mx-auto">
                Our proven process ensures high-quality service that meets your expectations.
            </p>

            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-12 mt-12 max-w-6xl mx-auto">
                <!-- Step 1 -->
                <div class="flex flex-col items-center text-center transition duration-300 hover:scale-105">
                    <div
                        class="w-16 h-16 rounded-full bg-[#b56a5d] text-white flex items-center justify-center text-2xl font-bold shadow-lg mb-4">
                        1
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900">Discovery</h3>
                    <p class="text-gray-600 mt-2">We learn about your needs and tailor a personalized strategy.</p>
                </div>

                <!-- Step 2 -->
                <div class="flex flex-col items-center text-center transition duration-300 hover:scale-105">
                    <div
                        class="w-16 h-16 rounded-full bg-[#b56a5d] text-white flex items-center justify-center text-2xl font-bold shadow-lg mb-4">
                        2
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900">Strategy</h3>
                    <p class="text-gray-600 mt-2">A detailed plan is crafted to ensure success and efficiency.</p>
                </div>

                <!-- Step 3 -->
                <div class="flex flex-col items-center text-center transition duration-300 hover:scale-105">
                    <div
                        class="w-16 h-16 rounded-full bg-[#b56a5d] text-white flex items-center justify-center text-2xl font-bold shadow-lg mb-4">
                        3
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900">Execution</h3>
                    <p class="text-gray-600 mt-2">We implement the plan with precision and high-quality service.</p>
                </div>

                <!-- Step 4 -->
                <div class="flex flex-col items-center text-center transition duration-300 hover:scale-105">
                    <div
                        class="w-16 h-16 rounded-full bg-[#b56a5d] text-white flex items-center justify-center text-2xl font-bold shadow-lg mb-4">
                        4
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900">Optimization</h3>
                    <p class="text-gray-600 mt-2">We analyze results and refine the process for continuous improvement.</p>
                </div>
            </div>
        </div>
    </section>


    @include('components.footer')
@endsection
