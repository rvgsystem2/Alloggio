@extends('components.main')

@section('content')
    @include('components.header')

    <section class="relative w-full h-[400px] md:h-[500px] lg:h-[600px]">
        <!-- Background Image with Parallax Effect -->
        <div class="absolute inset-0 bg-cover bg-center bg-no-repeat transition-all duration-700 transform hover:scale-105"
            style="background-image: url('{{ asset('asset/images/properties-1.jpeg') }}');">
            <!-- Enhanced Gradient Overlay -->
            <div class="absolute inset-0 bg-gradient-to-b from-black/30 to-black/70"></div>
        </div>

        <!-- Centered Content with Improved Animation -->
        <div class="absolute inset-0 flex flex-col items-center justify-center text-center px-4">
            <h1
                class="text-white text-5xl md:text-6xl lg:text-7xl font-extrabold tracking-widest drop-shadow-2xl text-opacity-90 animate-fade-in">
                <span class="inline-block hover:scale-105 transition-transform duration-300">B</span>
                <span class="inline-block hover:scale-105 transition-transform duration-300">L</span>
                <span class="inline-block hover:scale-105 transition-transform duration-300">O</span>
                <span class="inline-block hover:scale-105 transition-transform duration-300">G</span>
                <span class="inline-block hover:scale-105 transition-transform duration-300">S</span>
            </h1>
            <p class="text-white text-lg md:text-xl max-w-2xl mt-4 opacity-90 animate-fade-in-up">Discover our latest
                stories, insights, and adventures</p>
            <div class="mt-8 animate-fade-in-up">
                <a href="#latest-posts"
                    class="px-6 py-3 bg-white text-black font-bold rounded-full hover:bg-black hover:text-white transition-colors duration-300">
                    Explore Posts
                </a>
            </div>
        </div>
    </section>

    <div id="latest-posts" class="container mx-auto px-4 py-16">
        <div class="flex flex-col items-center mb-12">
            <h2 class="text-4xl md:text-5xl font-bold text-center">Latest Blogs</h2>
            <div class="w-24 h-1 bg-black mt-4"></div>
            <p class="text-gray-600 text-center mt-4 max-w-2xl">Curated content from our expert writers, bringing you the
                best stories and insights</p>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Blog Post 1 -->
            <div
                class="bg-white shadow-lg rounded-xl overflow-hidden hover:shadow-2xl transition-shadow duration-300 group">
                <div class="relative overflow-hidden h-72">
                    <img src="{{ asset('asset/images/properties-1.jpeg') }}" alt="Breakfast Time"
                        class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-500">
                    <div
                        class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                    </div>
                    <div class="absolute bottom-4 left-4 bg-white px-4 py-1 rounded-full text-sm font-medium">Food & Dining
                    </div>
                </div>
                <div class="p-6">
                    <div class="flex items-center mb-3 text-gray-500 text-sm">
                        <span>March 23, 2020</span>
                        <span class="mx-2">•</span>
                        <span>5 min read</span>
                    </div>
                    <h2 class="text-2xl font-bold mb-3 group-hover:text-gray-600 transition-colors duration-300">
                        House in Tambon Bo Put
                    </h2>
                    <p class="text-gray-600 mb-4">
                        Mountain House at Chaweng hill with shared Pool, peaceful environment, and a stunning Mountain
                        View...
                    </p>
                    <div class="flex justify-between items-center">
                        <a href="#"
                            class="text-black font-bold relative after:absolute after:bottom-0 after:left-0 after:w-0 after:h-0.5 after:bg-black group-hover:after:w-full after:transition-all">
                            READ MORE
                        </a>
                        <div class="flex space-x-2">
                            <span class="bg-gray-100 px-2 py-1 rounded text-xs">Food</span>
                            <span class="bg-gray-100 px-2 py-1 rounded text-xs">Recipes</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Blog Post 2 -->
            <div
                class="bg-white shadow-lg rounded-xl overflow-hidden hover:shadow-2xl transition-shadow duration-300 group">
                <div class="relative overflow-hidden h-72">
                    <img src="{{ asset('asset/images/properties-2.jpeg') }}" alt="Romantic Getaway"
                        class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-500">
                    <div
                        class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                    </div>
                    <div class="absolute bottom-4 left-4 bg-white px-4 py-1 rounded-full text-sm font-medium">Travel</div>
                </div>
                <div class="p-6">
                    <div class="flex items-center mb-3 text-gray-500 text-sm">
                        <span>March 23, 2020</span>
                        <span class="mx-2">•</span>
                        <span>8 min read</span>
                    </div>
                    <h2 class="text-2xl font-bold mb-3 group-hover:text-gray-600 transition-colors duration-300">
                        Condominium in Tambon Bo Put
                    </h2>
                    <p class="text-gray-600 mb-4">
                        A modern private space near Bo Put beach, perfect for travelers seeking relaxation and
                        convenience...
                    </p>
                    <div class="flex justify-between items-center">
                        <a href="#"
                            class="text-black font-bold relative after:absolute after:bottom-0 after:left-0 after:w-0 after:h-0.5 after:bg-black group-hover:after:w-full after:transition-all">
                            READ MORE
                        </a>
                        <div class="flex space-x-2">
                            <span class="bg-gray-100 px-2 py-1 rounded text-xs">Travel</span>
                            <span class="bg-gray-100 px-2 py-1 rounded text-xs">Couples</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Blog Post 3 -->
            <div
                class="bg-white shadow-lg rounded-xl overflow-hidden hover:shadow-2xl transition-shadow duration-300 group">
                <div class="relative overflow-hidden h-72">
                    <img src="{{ asset('asset/images/properties-3.jpeg') }}" alt="Wild Camping Trip"
                        class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-500">
                    <div
                        class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                    </div>
                    <div class="absolute bottom-4 left-4 bg-white px-4 py-1 rounded-full text-sm font-medium">Outdoor</div>
                </div>
                <div class="p-6">
                    <div class="flex items-center mb-3 text-gray-500 text-sm">
                        <span>March 23, 2020</span>
                        <span class="mx-2">•</span>
                        <span>6 min read</span>
                    </div>
                    <h2 class="text-2xl font-bold mb-3 group-hover:text-gray-600 transition-colors duration-300">
                        House in Mae Nam
                    </h2>
                    <p class="text-gray-600 mb-4">
                        A beachfront villa with a stunning sunset view, ideal for nature lovers seeking tranquility...
                    </p>
                    <div class="flex justify-between items-center">
                        <a href="#"
                            class="text-black font-bold relative after:absolute after:bottom-0 after:left-0 after:w-0 after:h-0.5 after:bg-black group-hover:after:w-full after:transition-all">
                            READ MORE
                        </a>
                        <div class="flex space-x-2">
                            <span class="bg-gray-100 px-2 py-1 rounded text-xs">Camping</span>
                            <span class="bg-gray-100 px-2 py-1 rounded text-xs">Nature</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Load More Button -->
        <div class="flex justify-center mt-12">
            <button
                class="px-8 py-3 border-2 border-black font-bold hover:bg-black hover:text-white transition-colors duration-300 rounded-full flex items-center">
                Load More
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-2" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                </svg>
            </button>
        </div>
    </div>

    <!-- Newsletter Section -->
    <section class="bg-gray-100 py-16">
        <div class="container mx-auto px-4">
            <div class="max-w-3xl mx-auto text-center">
                <h2 class="text-3xl font-bold mb-4">Subscribe to Our Newsletter</h2>
                <p class="text-gray-600 mb-8">Get the latest posts delivered right to your inbox</p>
                <form class="flex flex-col sm:flex-row gap-4">
                    <input type="email" placeholder="Your email address"
                        class="flex-1 px-4 py-3 rounded-full border border-gray-300 focus:outline-none focus:ring-2 focus:ring-black">
                    <button type="submit"
                        class="px-6 py-3 bg-black text-white font-bold rounded-full hover:bg-gray-800 transition-colors duration-300">
                        Subscribe
                    </button>
                </form>
            </div>
        </div>
    </section>

    @include('components.footer')
@endsection
