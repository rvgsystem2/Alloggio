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
                <!-- Video Element with Fixed Height -->
                <video controls class="w-full h-[500px] rounded-lg shadow-lg object-cover">
                    <source src="{{ asset('asset/Koh-Rooms/video.mp4') }}" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            </div>
        </div>

    </section>

    <section class="py-20 bg-[#fdfaf5]">
        <div class="max-w-6xl mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-[#2c2c2c]">Why Choose Us</h2>
                <p class="text-gray-600 mt-3 text-lg">Discover the benefits of staying with us</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-12">
                <!-- Feature Item -->
                <div class="flex flex-col items-start group space-y-3">
                    <span
                        class="material-icons-outlined text-[#b56a5d] text-6xl transition-transform duration-300 group-hover:scale-125">
                        emoji_events
                    </span>
                    <h3
                        class="text-xl font-semibold text-[#2c2c2c] transition-colors duration-300 group-hover:text-[#b56a5d]">
                        High Rating
                    </h3>
                    <p class="text-gray-600 text-sm leading-relaxed">
                        Enjoy top-rated stays with exceptional service and comfort.
                    </p>
                </div>

                <!-- Feature Item -->
                <div class="flex flex-col items-start group space-y-3">
                    <span
                        class="material-icons-outlined text-[#b56a5d] text-6xl transition-transform duration-300 group-hover:scale-125">
                        nightlife
                    </span>
                    <h3
                        class="text-xl font-semibold text-[#2c2c2c] transition-colors duration-300 group-hover:text-[#b56a5d]">
                        Quiet Hours
                    </h3>
                    <p class="text-gray-600 text-sm leading-relaxed">
                        Relax with a peaceful atmosphere and dedicated quiet hours.
                    </p>
                </div>

                <!-- Feature Item -->
                <div class="flex flex-col items-start group space-y-3">
                    <span
                        class="material-icons-outlined text-[#b56a5d] text-6xl transition-transform duration-300 group-hover:scale-125">
                        place
                    </span>
                    <h3
                        class="text-xl font-semibold text-[#2c2c2c] transition-colors duration-300 group-hover:text-[#b56a5d]">
                        Best Locations
                    </h3>
                    <p class="text-gray-600 text-sm leading-relaxed">
                        Stay in prime locations close to attractions and essentials.
                    </p>
                </div>

                <!-- Feature Item -->
                <div class="flex flex-col items-start group space-y-3">
                    <span
                        class="material-icons-outlined text-[#b56a5d] text-6xl transition-transform duration-300 group-hover:scale-125">
                        event_available
                    </span>
                    <h3
                        class="text-xl font-semibold text-[#2c2c2c] transition-colors duration-300 group-hover:text-[#b56a5d]">
                        Free Cancellation
                    </h3>
                    <p class="text-gray-600 text-sm leading-relaxed">
                        Cancel hassle-free with flexible booking policies.
                    </p>
                </div>

                <!-- Feature Item -->
                <div class="flex flex-col items-start group space-y-3">
                    <span
                        class="material-icons-outlined text-[#b56a5d] text-6xl transition-transform duration-300 group-hover:scale-125">
                        credit_card
                    </span>
                    <h3
                        class="text-xl font-semibold text-[#2c2c2c] transition-colors duration-300 group-hover:text-[#b56a5d]">
                        Payment Options
                    </h3>
                    <p class="text-gray-600 text-sm leading-relaxed">
                        Multiple payment methods for a seamless transaction.
                    </p>
                </div>

                <!-- Feature Item -->
                <div class="flex flex-col items-start group space-y-3">
                    <span
                        class="material-icons-outlined text-[#b56a5d] text-6xl transition-transform duration-300 group-hover:scale-125">
                        card_giftcard
                    </span>
                    <h3
                        class="text-xl font-semibold text-[#2c2c2c] transition-colors duration-300 group-hover:text-[#b56a5d]">
                        Special Offers
                    </h3>
                    <p class="text-gray-600 text-sm leading-relaxed">
                        Exclusive deals and discounts for a great value stay.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <div class="bg-[#fdfaf5] relative overflow-hidden">
        <section class="py-20">
            <div class="max-w-7xl mx-auto px-8 text-center relative">
                <h2 class="text-4xl font-semibold text-gray-900">Things to do near</h2>
                <p class="text-gray-600 text-lg mt-6 max-w-4xl mx-auto">
                    Ut condimentum magna ut augue elementum ornare. Fusce posuere massa vitae maximus posuere. Mauris
                    sagittis consectetur vulputate.
                </p>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-12 mt-16">
                    <!-- Gathering -->
                    <div class="relative group overflow-hidden shadow-xl">
                        <img src="{{ asset('asset/images/properties-1.jpeg') }}" alt="Gathering"
                            class="w-full h-96 object-cover transform transition duration-300 group-hover:scale-110">
                        <div class="absolute bottom-24 left-0 bg-white p-8 shadow-2xl w-72">
                            <h3 class="text-3xl font-semibold">Gathering</h3>
                            <button
                                class="mt-4 px-8 py-3 text-lg bg-[#b56a5d] text-white shadow-lg hover:bg-[#9c564a] transition">Discover</button>
                        </div>
                    </div>
                    <!-- Nice Food -->
                    <div class="relative group overflow-hidden shadow-xl">
                        <img src="{{ asset('asset/images/properties-2.jpeg') }}" alt="Nice Food"
                            class="w-full h-96 object-cover transform transition duration-300 group-hover:scale-110">
                        <div class="absolute bottom-24 left-0 bg-white p-8 shadow-2xl w-72">
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
                        <div class="absolute bottom-24 left-0 bg-white p-8 shadow-2xl w-72">
                            <h3 class="text-3xl font-semibold">Explore</h3>
                            <button
                                class="mt-4 px-8 py-3 text-lg bg-[#b56a5d] text-white shadow-lg hover:bg-[#9c564a] transition">Adventure</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <div class="relative overflow-hidden">
        <section class="py-16">
            <div class="max-w-5xl mx-auto text-center relative">
                <!-- Slider Container -->
                <div class="overflow-hidden relative">
                    <div class="flex transition-transform duration-700 ease-out" id="slider">
                        <!-- Slides -->
                        <div class="min-w-full p-6">
                            <h2 class="text-3xl">"A Great Find"</h2>
                            <p class="text-gray-600 text-lg max-w-3xl mx-auto mt-4">
                                Proin volutpat dapibus tellus, eget malesuada nisi molestie ut.
                            </p>
                            <p class="text-[#b56a5d] text-xl mt-4">Jemima Santiago</p>
                        </div>
                        <div class="min-w-full p-6">
                            <h2 class="text-3xl">"Best Experience"</h2>
                            <p class="text-gray-600 text-lg max-w-3xl mx-auto mt-4">
                                Vestibulum eget scelerisque magna. Mauris eget consectetur tellus.
                            </p>
                            <p class="text-[#b56a5d] text-xl mt-4">Liam Carter</p>
                        </div>
                        <div class="min-w-full p-6">
                            <h2 class="text-3xl">"Absolutely Amazing"</h2>
                            <p class="text-gray-600 text-lg max-w-3xl mx-auto mt-4">
                                Suspendisse justo arcu, euismod ac dui sit amet, mollis maximus ligula.
                            </p>
                            <p class="text-[#b56a5d] text-xl mt-4">Sophia Miller</p>
                        </div>
                    </div>
                </div>

                <!-- Navigation Arrows -->
                <button id="prev"
                    class="absolute left-4 top-1/2 transform -translate-y-1/2 p-4 rounded-full transition flex items-center justify-center w-16 h-16">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-gray-700" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"
                        stroke-linejoin="round">
                        <polyline points="15 18 9 12 15 6" />
                    </svg>
                </button>
                <button id="next"
                    class="absolute right-4 top-1/2 transform -translate-y-1/2 p-4 rounded-full transition flex items-center justify-center w-16 h-16">
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
