@extends('components.main')

@section('content')
    @include('components.header')

    <section class="relative w-full h-[300px] md:h-[400px]">
        <!-- Background Image with Parallax Effect -->
        <div class="absolute inset-0 bg-cover bg-center bg-no-repeat transition-all duration-700 transform hover:scale-105"
            style="background-image: url('{{ asset('asset/images/slide (2).jpg') }}');">
            <!-- Enhanced Gradient Overlay -->
            <div class="absolute inset-0 bg-gradient-to-b from-black/30 to-black/70"></div>
        </div>

        <!-- Centered Content with Improved Animation -->
        <div class="absolute inset-0 flex flex-col items-center justify-center text-center px-4">
            <h1
                class="text-white text-5xl md:text-6xl lg:text-7xl font-extrabold tracking-widest drop-shadow-2xl text-opacity-90 animate-fade-in">
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
<div class="container mx-auto px-4 py-16">
    <div class="flex flex-col items-center mb-12">
        <h2 class="text-4xl md:text-5xl font-bold text-center">Our Hotel Services</h2>
        <div class="w-24 h-1 bg-black mt-4"></div>
        <p class="text-gray-600 text-center mt-4 max-w-2xl">Experience luxury, comfort, and world-class hospitality with our exclusive services.</p>
    </div>

    <!-- Services Grid -->
    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
        <!-- Service 1: Luxury Rooms -->
        <div class="bg-white shadow-lg rounded-xl overflow-hidden hover:shadow-2xl transition-shadow duration-300 group">
            <div class="relative overflow-hidden h-48 bg-black flex items-center justify-center">
                <img src="room.jpg" alt="Luxury Rooms" class="h-full w-full object-cover">
            </div>
            <div class="p-6">
                <h3 class="text-2xl font-bold mb-3 group-hover:text-blue-600 transition-colors duration-300">Luxury Rooms</h3>
                <p class="text-gray-600 mb-4">Indulge in our spacious, elegantly designed rooms featuring premium amenities for a comfortable stay.</p>
                <a href="#" class="text-black font-bold inline-block relative group-hover:underline">LEARN MORE</a>
            </div>
        </div>

        <!-- Service 2: Fine Dining -->
        <div class="bg-white shadow-lg rounded-xl overflow-hidden hover:shadow-2xl transition-shadow duration-300 group">
            <div class="relative overflow-hidden h-48 bg-black flex items-center justify-center">
                <img src="dining.jpg" alt="Fine Dining" class="h-full w-full object-cover">
            </div>
            <div class="p-6">
                <h3 class="text-2xl font-bold mb-3 group-hover:text-blue-600 transition-colors duration-300">Fine Dining</h3>
                <p class="text-gray-600 mb-4">Savor exquisite dishes crafted by world-class chefs in a luxurious ambiance.</p>
                <a href="#" class="text-black font-bold inline-block relative group-hover:underline">LEARN MORE</a>
            </div>
        </div>

        <!-- Service 3: Spa & Wellness -->
        <div class="bg-white shadow-lg rounded-xl overflow-hidden hover:shadow-2xl transition-shadow duration-300 group">
            <div class="relative overflow-hidden h-48 bg-black flex items-center justify-center">
                <img src="spa.jpg" alt="Spa & Wellness" class="h-full w-full object-cover">
            </div>
            <div class="p-6">
                <h3 class="text-2xl font-bold mb-3 group-hover:text-blue-600 transition-colors duration-300">Spa & Wellness</h3>
                <p class="text-gray-600 mb-4">Relax and rejuvenate with our professional spa treatments and wellness programs.</p>
                <a href="#" class="text-black font-bold inline-block relative group-hover:underline">LEARN MORE</a>
            </div>
        </div>

        <!-- Service 4: Event & Conference Halls -->
        <div class="bg-white shadow-lg rounded-xl overflow-hidden hover:shadow-2xl transition-shadow duration-300 group">
            <div class="relative overflow-hidden h-48 bg-black flex items-center justify-center">
                <img src="conference.jpg" alt="Event & Conference Halls" class="h-full w-full object-cover">
            </div>
            <div class="p-6">
                <h3 class="text-2xl font-bold mb-3 group-hover:text-blue-600 transition-colors duration-300">Event & Conference Halls</h3>
                <p class="text-gray-600 mb-4">Host successful events in our modern and spacious conference facilities.</p>
                <a href="#" class="text-black font-bold inline-block relative group-hover:underline">LEARN MORE</a>
            </div>
        </div>

        <!-- Service 5: Swimming Pool -->
        <div class="bg-white shadow-lg rounded-xl overflow-hidden hover:shadow-2xl transition-shadow duration-300 group">
            <div class="relative overflow-hidden h-48 bg-black flex items-center justify-center">
                <img src="pool.jpg" alt="Swimming Pool" class="h-full w-full object-cover">
            </div>
            <div class="p-6">
                <h3 class="text-2xl font-bold mb-3 group-hover:text-blue-600 transition-colors duration-300">Swimming Pool</h3>
                <p class="text-gray-600 mb-4">Enjoy a refreshing dip in our luxurious pool with a stunning view.</p>
                <a href="#" class="text-black font-bold inline-block relative group-hover:underline">LEARN MORE</a>
            </div>
        </div>

        <!-- Service 6: Concierge & Travel Assistance -->
        <div class="bg-white shadow-lg rounded-xl overflow-hidden hover:shadow-2xl transition-shadow duration-300 group">
            <div class="relative overflow-hidden h-48 bg-black flex items-center justify-center">
                <img src="concierge.jpg" alt="Concierge & Travel Assistance" class="h-full w-full object-cover">
            </div>
            <div class="p-6">
                <h3 class="text-2xl font-bold mb-3 group-hover:text-blue-600 transition-colors duration-300">Concierge & Travel Assistance</h3>
                <p class="text-gray-600 mb-4">Let our concierge assist you with travel bookings, local tours, and special requests.</p>
                <a href="#" class="text-black font-bold inline-block relative group-hover:underline">LEARN MORE</a>
            </div>
        </div>
    </div>
</div>


    <!-- How We Work Section -->
    <section class="bg-gray-100 py-16">
        <div class="container mx-auto px-4">
            <div class="flex flex-col items-center mb-12">
                <h2 class="text-4xl md:text-5xl font-bold text-center">How We Work</h2>
                <div class="w-24 h-1 bg-black mt-4"></div>
                <p class="text-gray-600 text-center mt-4 max-w-2xl">Our proven process ensures high-quality content that
                    meets your business goals</p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8 max-w-5xl mx-auto">
                <!-- Step 1 -->
                <div class="flex flex-col items-center text-center">
                    <div
                        class="w-16 h-16 rounded-full bg-black text-white flex items-center justify-center text-2xl font-bold mb-4">
                        1</div>
                    <h3 class="text-xl font-bold mb-2">Discovery</h3>
                    <p class="text-gray-600">We learn about your brand, audience, and goals to develop a tailored strategy
                    </p>
                </div>

                <!-- Step 2 -->
                <div class="flex flex-col items-center text-center">
                    <div
                        class="w-16 h-16 rounded-full bg-black text-white flex items-center justify-center text-2xl font-bold mb-4">
                        2</div>
                    <h3 class="text-xl font-bold mb-2">Strategy</h3>
                    <p class="text-gray-600">We create a customized content plan aligned with your business objectives</p>
                </div>

                <!-- Step 3 -->
                <div class="flex flex-col items-center text-center">
                    <div
                        class="w-16 h-16 rounded-full bg-black text-white flex items-center justify-center text-2xl font-bold mb-4">
                        3</div>
                    <h3 class="text-xl font-bold mb-2">Creation</h3>
                    <p class="text-gray-600">Our expert team produces high-quality content that engages your target
                        audience</p>
                </div>

                <!-- Step 4 -->
                <div class="flex flex-col items-center text-center">
                    <div
                        class="w-16 h-16 rounded-full bg-black text-white flex items-center justify-center text-2xl font-bold mb-4">
                        4</div>
                    <h3 class="text-xl font-bold mb-2">Optimization</h3>
                    <p class="text-gray-600">We analyze performance and refine our approach for continuous improvement</p>
                </div>
            </div>
        </div>
    </section>



    @include('components.footer')
@endsection
