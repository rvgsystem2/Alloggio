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
                class="text-white text-3xl md:text-6xl lg:text-7xl font-extrabold tracking-widest drop-shadow-2xl text-opacity-90 animate-fade-in">
                <span class="inline-block hover:scale-105 transition-transform duration-300">C</span>
                <span class="inline-block hover:scale-105 transition-transform duration-300">O</span>
                <span class="inline-block hover:scale-105 transition-transform duration-300">N</span>
                <span class="inline-block hover:scale-105 transition-transform duration-300">T</span>
                <span class="inline-block hover:scale-105 transition-transform duration-300">A</span>
                <span class="inline-block hover:scale-105 transition-transform duration-300">C</span>
                <span class="inline-block hover:scale-105 transition-transform duration-300">T</span>
                <span class="inline-block hover:scale-105 transition-transform duration-300">&nbsp;</span>
                <span class="inline-block hover:scale-105 transition-transform duration-300">U</span>
                <span class="inline-block hover:scale-105 transition-transform duration-300">S</span>
            </h1>
            <p class="text-white text-lg md:text-xl max-w-2xl mt-4 opacity-90 animate-fade-in-up">
                Get in touch with us for inquiries, support, or collaboration.
            </p>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="container mx-auto px-6 md:px-12 py-20" style="font-family: 'Cormorant', serif;">
        <div class="grid md:grid-cols-2 gap-12 lg:gap-16">
            <!-- Left Column (Contact Info) -->
            <div>
                <h2 class="text-2xl font-semibold text-gray-700 mb-6">Feel free to write on
                    <span class="text-gray-600">kohrooms@gmail.com</span>
                </h2>
                <p class="text-gray-500 mb-10 leading-relaxed">
                    Morbi viverra viverra tincidunt. Nam condimentum nulla et tortor ultrices tempor. Duis mattis, vehicula
                    augue id, aliquet risus.
                </p>

                <h2 class="text-2xl font-semibold text-gray-700 mb-4">Call us <span
                        class="text-gray-600">+66900553044</span></h2>
                <p class="text-gray-500 mb-10 leading-relaxed">
                    Morbi viverra viverra tincidunt. Nam condimentum nulla et tortor ultrices tempor. Duis mattis, vehicula
                    augue id, aliquet risus.
                </p>

                <h2 class="text-2xl font-semibold text-gray-700 mb-4">Visit us on <span class="text-gray-600">Apartment in
                        Tambon Bo Put, Thailand</span></h2>
                <p class="text-gray-500 mb-10 leading-relaxed">
                    Morbi viverra viverra tincidunt. Nam condimentum nulla et tortor ultrices tempor. Duis mattis, vehicula
                    augue id, aliquet risus.
                </p>

                <!-- Google Map Embed - Tambon Bo Put, Thailand -->
                <div class="mt-8">
                    <iframe class="w-full h-80 shadow-lg rounded-lg"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3930.0869484232773!2d100.057048115328!3d9.535826693184094!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x305497de72bc507b%3A0x2b2be053698ec81f!2sBo%20Put%2C%20Ko%20Samui%20District%2C%20Surat%20Thani%2C%20Thailand!5e0!3m2!1sen!2sth!4v1624567890123!5m2!1sen!2sth"
                        allowfullscreen="" loading="lazy"></iframe>
                </div>

            </div>

            <!-- Right Column (Contact Form) -->
            <div class="bg-white shadow-lg rounded-xl p-10" style="font-family: 'Cormorant', serif;">
                <h2 class="text-2xl font-semibold text-gray-700 mb-6">How can we help?</h2>
                <p class="text-gray-500 mb-10 leading-relaxed">
                    Maecenas consectetur, diam nec posuere aliquam, libero sapien aliquet lacus, tempus cursus odio dolor ac
                    magna.
                </p>
                <form action="#" method="POST" class="space-y-8">
                    @csrf
                    <div>
                        <label class="text-gray-700 font-medium">First Name</label>
                        <input type="text" name="name" required
                            class="w-full px-5 py-4 border border-gray-300 focus:ring-2 focus:ring-gray-600">
                    </div>
                    <div>
                        <label class="text-gray-700 font-medium">Email Address</label>
                        <input type="email" name="email" required
                            class="w-full px-5 py-4 border border-gray-300 focus:ring-2 focus:ring-gray-600">
                    </div>
                    <div>
                        <label class="text-gray-700 font-medium">Write Your Message</label>
                        <textarea name="message" rows="5" required
                            class="w-full px-5 py-4 border border-gray-300 focus:ring-2 focus:ring-gray-600"></textarea>
                    </div>
                    <button type="submit"
                        class="w-full border border-gray-700 text-gray-700 hover:bg-gray-700 hover:text-white font-medium py-4">
                        Send
                    </button>
                </form>
            </div>
        </div>
    </section>

    @include('components.footer')
@endsection
