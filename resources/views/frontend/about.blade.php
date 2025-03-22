@extends('components.main')

@section('content')
    @include('components.header')
    <!-- Google Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet">

    <!-- Google Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet">



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
                class="text-white text-3xl md:text-5xl lg:text-6xl font-extrabold tracking-widest drop-shadow-2xl text-opacity-90 animate-fade-in">
                <span class="inline-block hover:scale-105 transition-transform duration-300">A</span>
                <span class="inline-block hover:scale-105 transition-transform duration-300">B</span>
                <span class="inline-block hover:scale-105 transition-transform duration-300">O</span>
                <span class="inline-block hover:scale-105 transition-transform duration-300">U</span>
                <span class="inline-block hover:scale-105 transition-transform duration-300">T</span>
                <span class="inline-block hover:scale-105 transition-transform duration-300">&nbsp;</span>
                <span class="inline-block hover:scale-105 transition-transform duration-300">U</span>
                <span class="inline-block hover:scale-105 transition-transform duration-300">S</span>
            </h1>
            <p class="text-white text-lg md:text-xl max-w-2xl mt-4 opacity-90 animate-fade-in-up">
                Discover our journey, vision, and commitment to excellence.
            </p>
        </div>
    </section>


    <section class="py-16 bg-white">
        <div class="max-w-4xl mx-auto text-center">
            <!-- Title -->
            <h2 class="text-3xl md:text-4xl font-semibold mb-4">Since 2015 year</h2>

            <!-- Description -->
            <p class="text-gray-600 text-lg md:text-xl leading-relaxed">
                Ut condimentum magna ut augue elementum ornare. Fusce posuere massa vitae maximus posuere. Mauris sagittis
                consectetur vulputate. Curabitur commodo est quis felis porttitor eleifend. Sed efficitur sem mi, et feugiat
                lorem scelerisque.
            </p>
        </div>

        <!-- Video Section -->
        <div class="max-w-5xl mx-auto mt-12">
            <div class="relative">
                <!-- Background Image -->
                <img src="{{ asset('asset/images/slide (1).jpg') }}" alt="Video Thumbnail"
                    class="w-full rounded-lg shadow-lg">

                <!-- Play Button -->
                <a href="https://vimeo.com/9176224" target="_blank"
                    class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-40 rounded-lg hover:bg-opacity-50 transition">
                    <div
                        class="w-16 h-16 bg-white rounded-full flex items-center justify-center shadow-lg hover:scale-110 transition">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-10 h-10 text-gray-900" viewBox="0 0 24 24"
                            fill="currentColor">
                            <path d="M8 5v14l11-7z" />
                        </svg>
                    </div>
                </a>
            </div>
        </div>
    </section>

    <section class="py-20 bg-[#fdfaf5]">
        <div class="max-w-6xl mx-auto px-6">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-[#2c2c2c]">Why Choose Us</h2>
                <p class="text-gray-600 mt-2">Discover the benefits of staying with us</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-12">
                <!-- Feature Item -->
                <div class="flex space-x-4 items-start group">
                    <span
                        class="material-icons-outlined text-[#b56a5d] text-5xl transition-transform group-hover:scale-110">
                        emoji_events
                    </span>
                    <div>
                        <h3 class="text-lg font-semibold text-[#2c2c2c] group-hover:text-[#b56a5d] transition-colors">
                            High Rating
                        </h3>
                        <p class="text-gray-600">Enjoy top-rated stays with exceptional service and comfort.</p>
                    </div>
                </div>

                <!-- Feature Item -->
                <div class="flex space-x-4 items-start group">
                    <span
                        class="material-icons-outlined text-[#b56a5d] text-5xl transition-transform group-hover:scale-110">
                        nightlife
                    </span>
                    <div>
                        <h3 class="text-lg font-semibold text-[#2c2c2c] group-hover:text-[#b56a5d] transition-colors">
                            Quiet Hours
                        </h3>
                        <p class="text-gray-600">Relax with a peaceful atmosphere and dedicated quiet hours.</p>
                    </div>
                </div>

                <!-- Feature Item -->
                <div class="flex space-x-4 items-start group">
                    <span
                        class="material-icons-outlined text-[#b56a5d] text-5xl transition-transform group-hover:scale-110">
                        place
                    </span>
                    <div>
                        <h3 class="text-lg font-semibold text-[#2c2c2c] group-hover:text-[#b56a5d] transition-colors">
                            Best Locations
                        </h3>
                        <p class="text-gray-600">Stay in prime locations close to attractions and essentials.</p>
                    </div>
                </div>

                <!-- Feature Item -->
                <div class="flex space-x-4 items-start group">
                    <span
                        class="material-icons-outlined text-[#b56a5d] text-5xl transition-transform group-hover:scale-110">
                        event_available
                    </span>
                    <div>
                        <h3 class="text-lg font-semibold text-[#2c2c2c] group-hover:text-[#b56a5d] transition-colors">
                            Free Cancellation
                        </h3>
                        <p class="text-gray-600">Cancel hassle-free with flexible booking policies.</p>
                    </div>
                </div>

                <!-- Feature Item -->
                <div class="flex space-x-4 items-start group">
                    <span
                        class="material-icons-outlined text-[#b56a5d] text-5xl transition-transform group-hover:scale-110">
                        credit_card
                    </span>
                    <div>
                        <h3 class="text-lg font-semibold text-[#2c2c2c] group-hover:text-[#b56a5d] transition-colors">
                            Payment Options
                        </h3>
                        <p class="text-gray-600">Multiple payment methods for a seamless transaction.</p>
                    </div>
                </div>

                <!-- Feature Item -->
                <div class="flex space-x-4 items-start group">
                    <span
                        class="material-icons-outlined text-[#b56a5d] text-5xl transition-transform group-hover:scale-110">
                        card_giftcard
                    </span>
                    <div>
                        <h3 class="text-lg font-semibold text-[#2c2c2c] group-hover:text-[#b56a5d] transition-colors">
                            Special Offers
                        </h3>
                        <p class="text-gray-600">Exclusive deals and discounts for a great value stay.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <div class="bg-[#fdfaf5] relative overflow-hidden">
        <section class="py-20">
            <div class="max-w-7xl mx-auto px-8 text-center relative">
                <h2 class="text-5xl font-bold text-gray-900">Things to do near</h2>
                <p class="text-gray-600 text-xl mt-6 max-w-4xl mx-auto">
                    Ut condimentum magna ut augue elementum ornare. Fusce posuere massa vitae maximus posuere. Mauris
                    sagittis consectetur vulputate.
                </p>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-12 mt-16">
                    <!-- Gathering -->
                    <div class="relative group overflow-hidden shadow-xl">
                        <img src="{{ asset('asset/images/properties-1.jpeg') }}" alt="Gathering"
                            class="w-full h-96 object-cover transform transition duration-300 group-hover:scale-110">
                        <div class="absolute bottom-20 left-0 bg-white p-8 shadow-2xl w-64">
                            <h3 class="text-3xl font-semibold">Gathering</h3>
                            <button
                                class="mt-4 px-8 py-3 text-lg bg-[#b56a5d] text-white shadow-lg hover:bg-[#9c564a] transition">Discover</button>
                        </div>
                    </div>
                    <!-- Nice Food -->
                    <div class="relative group overflow-hidden shadow-xl">
                        <img src="{{ asset('asset/images/properties-2.jpeg') }}" alt="Nice Food"
                            class="w-full h-96 object-cover transform transition duration-300 group-hover:scale-110">
                        <div class="absolute bottom-20 left-0 bg-white p-8 shadow-2xl w-64">
                            <h3 class="text-3xl font-semibold">Nice Food</h3>
                            <button
                                class="mt-4 px-8 py-3 text-lg bg-[#b56a5d] text-white shadow-lg hover:bg-[#9c564a] transition">Taste
                                Now</button>
                        </div>
                    </div>
                    <!-- Explore -->
                    <div class="relative group overflow-hidden shadow-xl">
                        <img src="{{ asset('asset/images/properties-3.jpeg') }}" alt="Explore"
                            class="w-full h-96 object-cover transform transition duration-300 group-hover:scale-110">
                        <div class="absolute bottom-20 left-0 bg-white p-8 shadow-2xl w-64">
                            <h3 class="text-3xl font-semibold">Explore</h3>
                            <button
                                class="mt-4 px-8 py-3 text-lg bg-[#b56a5d] text-white shadow-lg hover:bg-[#9c564a] transition">Adventure</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <div class="bg-gray-200 relative overflow-hidden">
        <section class="py-16">
            <div class="max-w-4xl mx-auto text-center relative">
                <!-- Slider Container -->
                <div class="overflow-hidden relative">
                    <div class="flex transition-transform duration-700 ease-out" id="slider">
                        <!-- Slides -->
                        <div class="min-w-full p-6">
                            <h2 class="text-3xl font-bold">"A Great Find"</h2>
                            <p class="text-gray-600 text-lg max-w-2xl mx-auto mt-4">
                                Proin volutpat dapibus tellus, eget malesuada nisi molestie ut.
                            </p>
                            <p class="text-[#b56a5d] text-xl mt-4">Jemima Santiago</p>
                        </div>
                        <div class="min-w-full p-6">
                            <h2 class="text-3xl font-bold">"Best Experience"</h2>
                            <p class="text-gray-600 text-lg max-w-2xl mx-auto mt-4">
                                Vestibulum eget scelerisque magna. Mauris eget consectetur tellus.
                            </p>
                            <p class="text-[#b56a5d] text-xl mt-4">Liam Carter</p>
                        </div>
                        <div class="min-w-full p-6">
                            <h2 class="text-3xl font-bold">"Absolutely Amazing"</h2>
                            <p class="text-gray-600 text-lg max-w-2xl mx-auto mt-4">
                                Suspendisse justo arcu, euismod ac dui sit amet, mollis maximus ligula.
                            </p>
                            <p class="text-[#b56a5d] text-xl mt-4">Sophia Miller</p>
                        </div>
                    </div>
                </div>

                <!-- Navigation Arrows -->
                <button id="prev"
                    class="absolute left-4 top-1/2 transform -translate-y-1/2 bg-white p-4 rounded-full shadow-md hover:bg-gray-200 transition flex items-center justify-center w-16 h-16">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-gray-700" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"
                        stroke-linejoin="round">
                        <polyline points="15 18 9 12 15 6" />
                    </svg>
                </button>
                <button id="next"
                    class="absolute right-4 top-1/2 transform -translate-y-1/2 bg-white p-4 rounded-full shadow-md hover:bg-gray-200 transition flex items-center justify-center w-16 h-16">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-gray-700" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"
                        stroke-linejoin="round">
                        <polyline points="9 18 15 12 9 6" />
                    </svg>
                </button>
            </div>
        </section>
    </div>

    <script>
        const slider = document.getElementById('slider');
        const slides = slider.children;
        const totalSlides = slides.length;
        let currentIndex = 0;
        let autoSlide;

        document.getElementById('next').addEventListener('click', () => moveSlide(1));
        document.getElementById('prev').addEventListener('click', () => moveSlide(-1));

        function moveSlide(direction) {
            currentIndex = (currentIndex + direction + totalSlides) % totalSlides;
            updateSlider();
            resetAutoSlide();
        }

        function updateSlider() {
            slider.style.transform = `translateX(-${currentIndex * 100}%)`;
        }

        function startAutoSlide() {
            autoSlide = setInterval(() => moveSlide(1), 5000);
        }

        function resetAutoSlide() {
            clearInterval(autoSlide);
            startAutoSlide();
        }

        slider.addEventListener('mouseenter', () => clearInterval(autoSlide));
        slider.addEventListener('mouseleave', startAutoSlide);

        startAutoSlide();
    </script>

    @include('components.footer')
@endsection
