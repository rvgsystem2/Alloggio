@extends('components.main')

@section('content')
    @include('components.header')

    <section class="relative w-full h-[400px] md:h-[500px] lg:h-[600px]">
        <!-- Background Image with Parallax Effect -->
        <div class="absolute inset-0 bg-cover bg-center bg-no-repeat transition-all duration-700 transform hover:scale-105"
            style="background-image: url('{{ asset('asset/images/slide (2).jpg') }}');">
            <!-- Enhanced Gradient Overlay -->
            <div class="absolute inset-0 bg-gradient-to-b from-black/30 to-black/70"></div>
        </div>

        <!-- Centered Content with Improved Animation -->
        <div class="absolute inset-0 flex flex-col items-center justify-center text-center px-4">
            <h1
                class="text-white text-4xl md:text-6xl lg:text-7xl font-extrabold tracking-widest drop-shadow-2xl text-opacity-90 animate-fade-in">
                <span class="inline-block hover:scale-105 transition-transform duration-300">G</span>
                <span class="inline-block hover:scale-105 transition-transform duration-300">A</span>
                <span class="inline-block hover:scale-105 transition-transform duration-300">L</span>
                <span class="inline-block hover:scale-105 transition-transform duration-300">L</span>
                <span class="inline-block hover:scale-105 transition-transform duration-300">E</span>
                <span class="inline-block hover:scale-105 transition-transform duration-300">R</span>
                <span class="inline-block hover:scale-105 transition-transform duration-300">Y</span>
            </h1>
            <p class="text-white text-lg md:text-xl max-w-2xl mt-4 opacity-90 animate-fade-in-up">Explore our collection of
                stunning images and memorable moments</p>
        </div>
    </section>

    <!-- Gallery Filter -->
    {{-- <div class="bg-white py-8 sticky top-0 z-10 shadow-md">
        <div class="container mx-auto px-4">
            <div class="flex flex-wrap justify-center gap-4">
                <button class="px-6 py-2 bg-black text-white rounded-full hover:bg-opacity-80 transition-all">All</button>
                <button
                    class="px-6 py-2 bg-white text-black border border-black rounded-full hover:bg-black hover:text-white transition-all">Nature</button>
                <button
                    class="px-6 py-2 bg-white text-black border border-black rounded-full hover:bg-black hover:text-white transition-all">Architecture</button>
                <button
                    class="px-6 py-2 bg-white text-black border border-black rounded-full hover:bg-black hover:text-white transition-all">Travel</button>
                <button
                    class="px-6 py-2 bg-white text-black border border-black rounded-full hover:bg-black hover:text-white transition-all">Food</button>
            </div>
        </div>
    </div> --}}


    <!-- Gallery Grid -->
    <section>

        <div class="relative py-10">
            <h2
                class="text-5xl font-extrabold text-gray-600 text-center uppercase tracking-widest">
                Gallery
            </h2>
            <div class="w-20 h-1 bg-gray-600 mx-auto mt-3 rounded-full"></div>
        </div>

        <div class="container mx-auto px-4 py-16">
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
                <!-- Gallery Item 1 -->
                <div class="group relative overflow-hidden rounded-xl bg-white shadow-lg hover:shadow-xl transition-all duration-300 h-80"
                    data-category="nature">
                    <img src="{{ asset('asset/images/properties-1.jpeg') }}" alt="Nature Landscape"
                        class="w-full h-full object-cover group-hover:scale-110 transition-all duration-500">
                    <div
                        class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/30 to-transparent opacity-0 group-hover:opacity-100 transition-all duration-300 flex flex-col justify-end p-6">
                        <h3
                            class="text-white text-xl font-bold transform translate-y-4 group-hover:translate-y-0 transition-transform duration-300">
                            House in Tambon Bo Put, Thailand</h3>
                        <p
                            class="text-white/80 transform translate-y-4 group-hover:translate-y-0 transition-transform duration-300 delay-75">
                            Gm Bungalow at Chaweng hill</p>
                        {{-- <div class="flex gap-2 mt-3 transform translate-y-4 group-hover:translate-y-0 transition-transform duration-300 delay-150">
                        <span class="px-2 py-1 bg-white/25 backdrop-blur-sm rounded text-xs text-white">Nature</span>
                        <span class="px-2 py-1 bg-white/25 backdrop-blur-sm rounded text-xs text-white">Travel</span>
                    </div> --}}
                    </div>
                    <button
                        class="absolute top-4 right-4 bg-white/20 backdrop-blur-sm p-2 rounded-full opacity-0 group-hover:opacity-100 transition-opacity duration-300 hover:bg-white/50">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-white" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                        </svg>
                    </button>
                </div>

                <!-- Gallery Item 2 -->
                <div class="group relative overflow-hidden rounded-xl bg-white shadow-lg hover:shadow-xl transition-all duration-300 h-96"
                    data-category="architecture">
                    <img src="{{ asset('asset/images/properties-2.jpeg') }}" alt="Modern Building"
                        class="w-full h-full object-cover group-hover:scale-110 transition-all duration-500">
                    <div
                        class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/30 to-transparent opacity-0 group-hover:opacity-100 transition-all duration-300 flex flex-col justify-end p-6">
                        <h3
                            class="text-white text-xl font-bold transform translate-y-4 group-hover:translate-y-0 transition-transform duration-300">
                            Condominium in Tambon Bo Put</h3>
                        <p
                            class="text-white/80 transform translate-y-4 group-hover:translate-y-0 transition-transform duration-300 delay-75">
                            RePlay Residence D301</p>
                        {{-- <div class="flex gap-2 mt-3 transform translate-y-4 group-hover:translate-y-0 transition-transform duration-300 delay-150">
                        <span class="px-2 py-1 bg-white/25 backdrop-blur-sm rounded text-xs text-white">Architecture</span>
                        <span class="px-2 py-1 bg-white/25 backdrop-blur-sm rounded text-xs text-white">City</span>
                    </div> --}}
                    </div>
                    <button
                        class="absolute top-4 right-4 bg-white/20 backdrop-blur-sm p-2 rounded-full opacity-0 group-hover:opacity-100 transition-opacity duration-300 hover:bg-white/50">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-white" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                        </svg>
                    </button>
                </div>

                <!-- Gallery Item 3 -->
                <div class="group relative overflow-hidden rounded-xl bg-white shadow-lg hover:shadow-xl transition-all duration-300 h-80"
                    data-category="food">
                    <img src="{{ asset('asset/images/properties-3.jpeg') }}" alt="Gourmet Meal"
                        class="w-full h-full object-cover group-hover:scale-110 transition-all duration-500">
                    <div
                        class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/30 to-transparent opacity-0 group-hover:opacity-100 transition-all duration-300 flex flex-col justify-end p-6">
                        <h3
                            class="text-white text-xl font-bold transform translate-y-4 group-hover:translate-y-0 transition-transform duration-300">
                            House in Mae Nam, Thailand</h3>
                        <p
                            class="text-white/80 transform translate-y-4 group-hover:translate-y-0 transition-transform duration-300 delay-75">
                            Beachfront Villa with Sunset</p>
                        {{-- <div class="flex gap-2 mt-3 transform translate-y-4 group-hover:translate-y-0 transition-transform duration-300 delay-150">
                        <span class="px-2 py-1 bg-white/25 backdrop-blur-sm rounded text-xs text-white">Food</span>
                        <span class="px-2 py-1 bg-white/25 backdrop-blur-sm rounded text-xs text-white">Dining</span>
                    </div> --}}
                    </div>
                    <button
                        class="absolute top-4 right-4 bg-white/20 backdrop-blur-sm p-2 rounded-full opacity-0 group-hover:opacity-100 transition-opacity duration-300 hover:bg-white/50">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-white" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                        </svg>
                    </button>
                </div>

                <!-- Gallery Item 4 -->
                <div class="group relative overflow-hidden rounded-xl bg-white shadow-lg hover:shadow-xl transition-all duration-300 h-96"
                    data-category="travel">
                    <img src="{{ asset('asset/images/properties-4.jpeg') }}" alt="Beach Scene"
                        class="w-full h-full object-cover group-hover:scale-110 transition-all duration-500">
                    <div
                        class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/30 to-transparent opacity-0 group-hover:opacity-100 transition-all duration-300 flex flex-col justify-end p-6">
                        <h3
                            class="text-white text-xl font-bold transform translate-y-4 group-hover:translate-y-0 transition-transform duration-300">
                            Serviced apartment in Ko Samui </h3>
                        <p
                            class="text-white/80 transform translate-y-4 group-hover:translate-y-0 transition-transform duration-300 delay-75">
                            Cozy Apartment GM8</p>
                        {{-- <div class="flex gap-2 mt-3 transform translate-y-4 group-hover:translate-y-0 transition-transform duration-300 delay-150">
                        <span class="px-2 py-1 bg-white/25 backdrop-blur-sm rounded text-xs text-white">Travel</span>
                        <span class="px-2 py-1 bg-white/25 backdrop-blur-sm rounded text-xs text-white">Beach</span>
                    </div> --}}
                    </div>
                    <button
                        class="absolute top-4 right-4 bg-white/20 backdrop-blur-sm p-2 rounded-full opacity-0 group-hover:opacity-100 transition-opacity duration-300 hover:bg-white/50">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-white" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                        </svg>
                    </button>
                </div>

                <!-- Gallery Item 5 -->
                <div class="group relative overflow-hidden rounded-xl bg-white shadow-lg hover:shadow-xl transition-all duration-300 h-80"
                    data-category="nature">
                    <img src="{{ asset('asset/images/properties-5.jpeg') }}" alt="Forest View"
                        class="w-full h-full object-cover group-hover:scale-110 transition-all duration-500">
                    <div
                        class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/30 to-transparent opacity-0 group-hover:opacity-100 transition-all duration-300 flex flex-col justify-end p-6">
                        <h3
                            class="text-white text-xl font-bold transform translate-y-4 group-hover:translate-y-0 transition-transform duration-300">
                            Serviced apartment in Ko Samui </h3>
                        <p
                            class="text-white/80 transform translate-y-4 group-hover:translate-y-0 transition-transform duration-300 delay-75">
                            GM Apartments 2 Bedrooms</p>
                        {{-- <div class="flex gap-2 mt-3 transform translate-y-4 group-hover:translate-y-0 transition-transform duration-300 delay-150">
                        <span class="px-2 py-1 bg-white/25 backdrop-blur-sm rounded text-xs text-white">Nature</span>
                        <span class="px-2 py-1 bg-white/25 backdrop-blur-sm rounded text-xs text-white">Forest</span>
                    </div> --}}
                    </div>
                    <button
                        class="absolute top-4 right-4 bg-white/20 backdrop-blur-sm p-2 rounded-full opacity-0 group-hover:opacity-100 transition-opacity duration-300 hover:bg-white/50">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-white" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                        </svg>
                    </button>
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

    </section>

    <!-- Image Viewer (Add the JavaScript for this functionality if needed) -->
    <div id="image-viewer" class="fixed inset-0 bg-black/90 z-50 hidden flex items-center justify-center">
        <button id="close-viewer" class="absolute top-6 right-6 text-white p-2 rounded-full hover:bg-white/20">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>
        <div class="relative w-full max-w-4xl">
            <img id="featured-image" src="" alt="Featured Image"
                class="w-full h-auto max-h-screen object-contain">
            <div class="absolute bottom-0 left-0 right-0 bg-black/50 backdrop-blur-sm p-4">
                <h3 id="image-title" class="text-white text-xl font-bold">Image Title</h3>
                <p id="image-description" class="text-white/80">Image description here</p>
            </div>
            <button id="prev-image"
                class="absolute left-2 top-1/2 transform -translate-y-1/2 bg-white/20 backdrop-blur-sm p-2 rounded-full hover:bg-white/50">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                </svg>
            </button>
            <button id="next-image"
                class="absolute right-2 top-1/2 transform -translate-y-1/2 bg-white/20 backdrop-blur-sm p-2 rounded-full hover:bg-white/50">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                </svg>
            </button>
        </div>
    </div>

    @include('components.footer')
@endsection

<!-- Add this JavaScript for Gallery Filtering (you would include this in your main JS file) -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Gallery filtering
        const filterButtons = document.querySelectorAll('[data-filter]');
        const galleryItems = document.querySelectorAll('[data-category]');

        filterButtons.forEach(button => {
            button.addEventListener('click', function() {
                const filterValue = this.getAttribute('data-filter');

                // Update active button styles
                filterButtons.forEach(btn => btn.classList.remove('bg-black', 'text-white'));
                filterButtons.forEach(btn => btn.classList.add('bg-white', 'text-black',
                    'border'));
                this.classList.remove('bg-white', 'text-black', 'border');
                this.classList.add('bg-black', 'text-white');

                // Filter gallery items
                galleryItems.forEach(item => {
                    if (filterValue === 'all' || item.getAttribute('data-category') ===
                        filterValue) {
                        item.style.display = 'block';
                    } else {
                        item.style.display = 'none';
                    }
                });
            });
        });

        // Image viewer functionality
        const imageViewer = document.getElementById('image-viewer');
        const featuredImage = document.getElementById('featured-image');
        const imageTitle = document.getElementById('image-title');
        const imageDescription = document.getElementById('image-description');
        const closeViewer = document.getElementById('close-viewer');
        const prevImage = document.getElementById('prev-image');
        const nextImage = document.getElementById('next-image');
        let currentIndex = 0;

        // Open image viewer
        document.querySelectorAll('.group button').forEach((button, index) => {
            button.addEventListener('click', function() {
                const parent = this.closest('.group');
                const imgSrc = parent.querySelector('img').src;
                const title = parent.querySelector('h3').textContent;
                const description = parent.querySelector('p').textContent;

                currentIndex = index;
                featuredImage.src = imgSrc;
                imageTitle.textContent = title;
                imageDescription.textContent = description;
                imageViewer.classList.remove('hidden');
                imageViewer.classList.add('flex');
                document.body.style.overflow = 'hidden';
            });
        });

        // Close image viewer
        closeViewer.addEventListener('click', function() {
            imageViewer.classList.add('hidden');
            imageViewer.classList.remove('flex');
            document.body.style.overflow = 'auto';
        });

        // Next image
        nextImage.addEventListener('click', function() {
            const items = document.querySelectorAll('.group');
            currentIndex = (currentIndex + 1) % items.length;
            updateViewer(items[currentIndex]);
        });

        // Previous image
        prevImage.addEventListener('click', function() {
            const items = document.querySelectorAll('.group');
            currentIndex = (currentIndex - 1 + items.length) % items.length;
            updateViewer(items[currentIndex]);
        });

        function updateViewer(item) {
            const imgSrc = item.querySelector('img').src;
            const title = item.querySelector('h3').textContent;
            const description = item.querySelector('p').textContent;

            featuredImage.src = imgSrc;
            imageTitle.textContent = title;
            imageDescription.textContent = description;
        }
    });
</script>
