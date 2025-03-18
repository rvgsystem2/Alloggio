@extends('components.main')

@section('content')
    @include('components.header')

    <section class="relative w-full h-[400px] md:h-[500px] lg:h-[600px]" style="font-family: 'Cormorant', serif;">
        <!-- Background Image -->
        <div class="absolute inset-0 bg-cover bg-center bg-no-repeat transition-all duration-500"
            style="background-image: url('{{ asset('asset/images/slide (1).jpg') }}');">
            <div class="absolute inset-0 bg-opacity-30"></div>
        </div>
    
        <!-- Centered Content -->
        <div class="absolute inset-0 flex flex-col items-center justify-center text-center px-6">
            <h1 class="text-white text-5xl md:text-6xl font-bold tracking-wide drop-shadow-lg">
                Contact Us
            </h1>
        </div>
    </section>
    
    <!-- Contact Section -->
    <section class="container mx-auto px-6 md:px-12 py-20" style="font-family: 'Cormorant', serif;">
        <div class="grid md:grid-cols-2 gap-12 lg:gap-16">
            <!-- Left Column (Contact Info) -->
            <div>
                <h2 class="text-2xl font-semibold text-gray-700 mb-6">Feel free to write on 
                    <span class="text-gray-600">info@alloggio.com</span>
                </h2>
                <p class="text-gray-500 mb-10 leading-relaxed">
                    Morbi viverra viverra tincidunt. Nam condimentum nulla et tortor ultrices tempor. Duis mattis, vehicula augue id, aliquet risus.
                </p>
    
                <h2 class="text-2xl font-semibold text-gray-700 mb-4">Call us <span class="text-gray-600">+31 555 777 83</span></h2>
                <p class="text-gray-500 mb-10 leading-relaxed">
                    Morbi viverra viverra tincidunt. Nam condimentum nulla et tortor ultrices tempor. Duis mattis, vehicula augue id, aliquet risus.
                </p>
    
                <h2 class="text-2xl font-semibold text-gray-700 mb-4">Visit us on <span class="text-gray-600">Via Venti Settembre, Roma</span></h2>
                <p class="text-gray-500 mb-10 leading-relaxed">
                    Morbi viverra viverra tincidunt. Nam condimentum nulla et tortor ultrices tempor. Duis mattis, vehicula augue id, aliquet risus.
                </p>
                
                <!-- Google Map Embed -->
                <div class="mt-8">
                    <iframe class="w-full h-80 shadow-lg"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3772.6639686697066!2d12.494568315366792!3d41.90278357922085!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x132f606f0fd5565b%3A0x15b8b1fecd1b6e0!2sVia%20Venti%20Settembre%2C%20Roma!5e0!3m2!1sen!2sit!4v1624567890123!5m2!1sen!2sit"
                        allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
    
            <!-- Right Column (Contact Form) -->
            <div class="bg-white shadow-lg rounded-xl p-10" style="font-family: 'Cormorant', serif;">
                <h2 class="text-2xl font-semibold text-gray-700 mb-6">How can we help?</h2>
                <p class="text-gray-500 mb-10 leading-relaxed">
                    Maecenas consectetur, diam nec posuere aliquam, libero sapien aliquet lacus, tempus cursus odio dolor ac magna.
                </p>
                <form action="#" method="POST" class="space-y-8">
                    @csrf
                    <div>
                        <label class="text-gray-700 font-medium">First Name</label>
                        <input type="text" name="name" required class="w-full px-5 py-4 border border-gray-300 focus:ring-2 focus:ring-gray-600">
                    </div>
                    <div>
                        <label class="text-gray-700 font-medium">Email Address</label>
                        <input type="email" name="email" required class="w-full px-5 py-4 border border-gray-300 focus:ring-2 focus:ring-gray-600">
                    </div>
                    <div>
                        <label class="text-gray-700 font-medium">Write Your Message</label>
                        <textarea name="message" rows="5" required class="w-full px-5 py-4 border border-gray-300 focus:ring-2 focus:ring-gray-600"></textarea>
                    </div>
                    <button type="submit" class="w-full border border-gray-700 text-gray-700 hover:bg-gray-700 hover:text-white font-medium py-4">
                        Send
                    </button>
                </form>
            </div>
        </div>
    </section>
   
    @include('components.footer')
@endsection
