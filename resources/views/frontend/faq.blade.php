@extends('components.main')

@section('content')

    @include('components.header')

    <section class="relative w-full h-[300px] md:h-[400px]">
        <!-- Background Image with Parallax Effect -->
        <div class="absolute inset-0 bg-cover bg-center bg-no-repeat transition-all duration-700 transform hover:scale-105"
            style="background-image: url('{{ asset('asset/images/slide (3).jpg') }}');">
            <!-- Enhanced Gradient Overlay -->
            <div class="absolute inset-0 bg-gradient-to-b from-black/30 to-black/70"></div>
        </div>

        <!-- Centered Content with Improved Animation -->
        <div class="absolute inset-0 flex flex-col items-center justify-center text-center px-4">
            <h1
                class="text-white text-5xl md:text-6xl lg:text-7xl font-extrabold tracking-widest drop-shadow-2xl text-opacity-90 animate-fade-in">
                <span class="inline-block hover:scale-105 transition-transform duration-300">F</span>
                <span class="inline-block hover:scale-105 transition-transform duration-300">A</span>
                <span class="inline-block hover:scale-105 transition-transform duration-300">Q</span>
            </h1>
            <p class="text-white text-lg md:text-xl max-w-2xl mt-4 opacity-90 animate-fade-in-up">Find answers to your most
                common questions</p>
        </div>
    </section>

    <!-- FAQ Questions Section -->
    <div class="container mx-auto px-4 py-16">
        <div class="flex flex-col items-center mb-12">
            <h2 class="text-4xl md:text-5xl font-bold text-center">Frequently Asked Questions</h2>
            <div class="w-24 h-1 bg-black mt-4"></div>
            <p class="text-gray-600 text-center mt-4 max-w-2xl">Find answers to common questions about our hotel services
                and amenities.</p>
        </div>

        <!-- FAQ Accordion -->
        <div class="max-w-4xl mx-auto space-y-6">
            <!-- FAQ Item 1 -->
            <div class="border border-gray-200 rounded-xl overflow-hidden">
                <button
                    class="flex justify-between items-center w-full p-6 text-left bg-white hover:bg-gray-50 transition-colors">
                    <span class="text-xl font-bold">What time is check-in and check-out?</span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 transform transition-transform duration-300"
                        fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>
                <div class="p-6 pt-0 border-t border-gray-200">
                    <p class="text-gray-600">Check-in time is from 3:00 PM, and check-out is by 11:00 AM. Early check-in or
                        late check-out may be available upon request and subject to availability.</p>
                </div>
            </div>

            <!-- FAQ Item 2 -->
            <div class="border border-gray-200 rounded-xl overflow-hidden">
                <button
                    class="flex justify-between items-center w-full p-6 text-left bg-white hover:bg-gray-50 transition-colors">
                    <span class="text-xl font-bold">Do you offer airport shuttle services?</span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 transform transition-transform duration-300"
                        fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>
                <div class="p-6 pt-0 border-t border-gray-200">
                    <p class="text-gray-600">Yes, we offer airport shuttle services for our guests. Please contact the front
                        desk in advance to arrange your pickup and drop-off.</p>
                </div>
            </div>

            <!-- FAQ Item 3 -->
            <div class="border border-gray-200 rounded-xl overflow-hidden">
                <button
                    class="flex justify-between items-center w-full p-6 text-left bg-white hover:bg-gray-50 transition-colors">
                    <span class="text-xl font-bold">Is breakfast included with my stay?</span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 transform transition-transform duration-300"
                        fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>
                <div class="p-6 pt-0 border-t border-gray-200">
                    <p class="text-gray-600">Yes, a complimentary breakfast is included with your stay. We offer a variety
                        of continental and hot breakfast options.</p>
                </div>
            </div>

            <!-- FAQ Item 4 -->
            <div class="border border-gray-200 rounded-xl overflow-hidden">
                <button
                    class="flex justify-between items-center w-full p-6 text-left bg-white hover:bg-gray-50 transition-colors">
                    <span class="text-xl font-bold">Do you have free Wi-Fi?</span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 transform transition-transform duration-300"
                        fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>
                <div class="p-6 pt-0 border-t border-gray-200">
                    <p class="text-gray-600">Yes, we provide complimentary high-speed Wi-Fi throughout the hotel for all
                        guests.</p>
                </div>
            </div>

            <!-- FAQ Item 5 -->
            <div class="border border-gray-200 rounded-xl overflow-hidden">
                <button
                    class="flex justify-between items-center w-full p-6 text-left bg-white hover:bg-gray-50 transition-colors">
                    <span class="text-xl font-bold">What amenities are available at the hotel?</span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 transform transition-transform duration-300"
                        fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>
                <div class="p-6 pt-0 border-t border-gray-200">
                    <p class="text-gray-600">Our hotel offers a swimming pool, fitness center, spa services, business
                        center, and 24-hour front desk service to make your stay comfortable.</p>
                </div>
            </div>

            <!-- FAQ Item 6 -->
            <div class="border border-gray-200 rounded-xl overflow-hidden">
                <button
                    class="flex justify-between items-center w-full p-6 text-left bg-white hover:bg-gray-50 transition-colors">
                    <span class="text-xl font-bold">What is your cancellation policy?</span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 transform transition-transform duration-300"
                        fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>
                <div class="p-6 pt-0 border-t border-gray-200">
                    <p class="text-gray-600">Cancellations made 24 hours before the check-in date are free of charge.
                        Cancellations made later may be subject to a fee. Please check your booking confirmation for
                        details.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Still Have Questions Section -->
    <section class="bg-gray-100 py-16">
        <div class="container mx-auto px-4">
            <div class="max-w-3xl mx-auto text-center">
                <h2 class="text-3xl font-bold mb-4">Still Have Questions?</h2>
                <p class="text-gray-600 mb-8">If you couldn't find the answer you were looking for, feel free to contact us
                    directly</p>
                <div class="flex justify-center">
                    <a href="#"
                        class="px-6 py-3 bg-black text-white font-bold rounded-full hover:bg-gray-800 transition-colors duration-300 flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                        </svg>
                        Contact Support
                    </a>
                </div>
            </div>
        </div>
    </section>

    @include('components.footer')

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const faqItems = document.querySelectorAll(".max-w-4xl .border");

            faqItems.forEach(item => {
                const button = item.querySelector("button");
                const content = item.querySelector("div.p-6");
                const icon = button.querySelector("svg");

                content.style.display = "none"; // Hide all answers initially

                button.addEventListener("click", function() {
                    const isOpen = content.style.display === "block";

                    // Close all open items
                    faqItems.forEach(i => {
                        i.querySelector("div.p-6").style.display = "none";
                        i.querySelector("button svg").classList.remove("rotate-180");
                    });

                    // Toggle the clicked item
                    if (!isOpen) {
                        content.style.display = "block";
                        icon.classList.add("rotate-180");
                    }
                });
            });
        });
    </script>

@endsection
