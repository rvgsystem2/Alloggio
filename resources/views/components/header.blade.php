<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

<!-- Web Navigation Menu -->
<header
    class="w-full bg-white shadow-lg px-4 sm:px-6 md:px-8 py-4 md:py-6 flex items-center justify-between border-b border-gray-200 z-50 relative">

    <!-- Logo for Mobile -->
    <div class="flex md:hidden items-center justify-center">
        <img src="{{ asset('asset/images/logo.png') }}" alt="KohRooms Logo" class="w-20 h-20">
    </div>


    <!-- Weather Info (Hidden on smaller screens) -->
    <div class="hidden sm:flex md:hidden items-center space-x-2 text-gray-700 text-sm">
        <span class="tracking-wide">ROME</span>
        <i class="fa-solid fa-cloud-sun text-lg text-amber-600"></i>
        <span>14°C</span>
    </div>

    <!-- Left Section for larger screens -->
    <div class="hidden md:flex items-center space-x-2 text-gray-700 text-sm">
        <span class="tracking-wide">ROME</span>
        <i class="fa-solid fa-cloud-sun text-lg text-amber-600"></i>
        <span>14°C</span>
    </div>

    <!-- Navigation Menu (Hidden on small screens) -->
    <nav class="hidden md:flex items-center space-x-4 lg:space-x-8 text-sm text-gray-800 tracking-wider">
        <a href="{{ url('/') }}" class="hover:text-amber-700 transition duration-300 py-3">HOME</a>
        <a href="{{ route('rooms') }}" class="hover:text-amber-700 transition duration-300 py-3">ROOMS</a>

        <div class="relative group">
            <a href="#" class="hover:text-amber-700 transition duration-300 flex items-center py-3">
                PAGES
            </a>
            <div
                class="z-50 absolute left-1/2 transform -translate-x-1/2 mt-3 w-64 bg-white shadow-xl rounded-md opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 border border-gray-100">
                <a href="{{ route('properties') }}"
                    class="block px-6 py-4 text-sm hover:bg-amber-50 hover:text-amber-800">Property</a>
                <a href="{{ route('about.us') }}"
                    class="block px-6 py-4 text-sm hover:bg-amber-50 hover:text-amber-800">About Us</a>
                <a href="{{ route('services') }}"
                    class="block px-6 py-4 text-sm hover:bg-amber-50 hover:text-amber-800">Services</a>
                <a href="{{ route('faq') }}"
                    class="block px-6 py-4 text-sm hover:bg-amber-50 hover:text-amber-800">FAQ</a>
            </div>
        </div>

        <!-- Center Logo for Desktop -->
        <div class="relative text-center">
            <img src="{{ asset('asset/images/logo.png') }}" alt="KohRooms Logo" class="mx-auto w-24 h-24">
        </div>
        

        <a href="{{ route('gallery') }}" class="hover:text-amber-700 transition duration-300 py-3">GALLERY</a>
        <a href="{{ route('blogs') }}" class="hover:text-amber-700 transition duration-300 py-3">BLOG</a>
        <a href="{{ route('contact.us') }}" class="hover:text-amber-700 transition duration-300 py-3">CONTACT</a>
    </nav>

    <!-- Right Section -->
    <div class="flex items-center space-x-3 sm:space-x-8 text-sm text-gray-700">
        <a href="mailto:kohrooms@gmail.com"
            class="hover:text-amber-700 transition duration-300 hidden md:flex items-center font-medium">
            <i class="fa-regular fa-envelope mr-2 text-amber-600"></i>
            <span class="hidden lg:inline">kohrooms@gmail.com</span>
        </a>
        <div class="relative hidden md:flex items-center cursor-pointer group">
            <span class="font-base">EN</span>
            <i class="fa-solid fa-chevron-down ml-2 text-xs group-hover:text-amber-700 transition"></i>
        </div>
        <button id="menu-toggle" class="md:hidden text-gray-800 hover:text-amber-700 transition duration-300 p-2">
            <i class="fa-solid fa-bars text-xl sm:text-2xl"></i>
        </button>
    </div>
</header>

<!-- Mobile Navigation Menu (Full Screen Overlay) -->
<div id="mobile-menu"
    class="fixed top-0 left-0 w-full h-full bg-white shadow-xl transform -translate-y-full transition-transform duration-300 ease-in-out md:hidden z-50 overflow-y-auto">
    <div class="flex justify-between items-center px-4 sm:px-6 py-4 border-b border-gray-300 bg-gray-100 sticky top-0">
        <img src="{{ asset('asset/images/logo.png') }}" alt="KohRooms Logo" class="w-16 h-16">
        <button id="menu-close"
            class="text-gray-800 hover:text-amber-700 transition duration-200 p-2 rounded-full bg-gray-200">
            <i class="fa-solid fa-times text-xl"></i>
        </button>
    </div>


    <nav class="flex flex-col text-center py-4 px-4 sm:px-6 space-y-2">
        <a href="{{ url('/') }}"
            class="text-gray-800 hover:text-amber-700 transition duration-200 py-3 text-lg font-medium border-b border-gray-200">HOME</a>
        <a href="{{ route('rooms') }}"
            class="text-gray-800 hover:text-amber-700 transition duration-200 py-3 text-lg font-medium border-b border-gray-200">ROOMS</a>

        <!-- Pages Dropdown -->
        <div class="relative border-b border-gray-200">
            <button id="pages-toggle"
                class="text-gray-800 hover:text-amber-700 transition duration-200 py-3 text-lg font-medium w-full flex justify-center items-center">
                PAGES <i class="fa-solid fa-chevron-down ml-2 text-sm transition-transform duration-200"
                    id="pages-icon"></i>
            </button>
            <div id="pages-dropdown"
                class="hidden flex-col bg-gray-100 rounded-md shadow-inner overflow-hidden max-h-0 transition-all duration-300">
                <a href="{{ route('properties') }}"
                    class="block text-gray-700 hover:text-amber-700 transition py-3 text-base sm:text-lg px-2">Property</a>
                <a href="{{ route('about.us') }}"
                    class="block text-gray-700 hover:text-amber-700 transition py-3 text-base sm:text-lg px-2">About
                    Us</a>
                <a href="{{ route('services') }}"
                    class="block text-gray-700 hover:text-amber-700 transition py-3 text-base sm:text-lg px-2">Services</a>
                <a href="{{ route('faq') }}"
                    class="block text-gray-700 hover:text-amber-700 transition py-3 text-base sm:text-lg px-2">FAQ</a>
            </div>
        </div>

        <a href="{{ route('gallery') }}"
            class="text-gray-800 hover:text-amber-700 transition duration-200 py-3 text-lg font-medium border-b border-gray-200">GALLERY</a>
        <a href="{{ route('blogs') }}"
            class="text-gray-800 hover:text-amber-700 transition duration-200 py-3 text-lg font-medium border-b border-gray-200">BLOG</a>
        <a href="{{ route('contact.us') }}"
            class="text-gray-800 hover:text-amber-700 transition duration-200 py-3 text-lg font-medium">CONTACT</a>
    </nav>

    <div class="w-full text-center text-gray-700 px-4 sm:px-6 py-8 border-t border-gray-200 mt-6">
        <a href="mailto:kohrooms@gmail.com"
            class="flex items-center justify-center space-x-2 hover:text-amber-700 transition duration-200 mb-4 text-lg">
            <i class="fa-regular fa-envelope text-amber-600"></i>
            <span>kohrooms@gmail.com</span>
        </a>
        <div class="flex items-center justify-center space-x-6 text-amber-600 text-xl">
            <a href="#" class="hover:text-amber-800 transition duration-200"><i
                    class="fa-brands fa-facebook-f"></i></a>
            <a href="#" class="hover:text-amber-800 transition duration-200"><i
                    class="fa-brands fa-instagram"></i></a>
            <a href="#" class="hover:text-amber-800 transition duration-200"><i
                    class="fa-brands fa-twitter"></i></a>
        </div>
        <div class="mt-4 flex justify-center">
            <div class="flex items-center cursor-pointer group">
                <span class="font-base">EN</span>
                <i class="fa-solid fa-chevron-down ml-2 text-xs group-hover:text-amber-700 transition"></i>
            </div>
        </div>
    </div>
</div>

<script>
    // Mobile menu toggle
    document.getElementById('menu-toggle').addEventListener('click', () => {
        document.getElementById('mobile-menu').classList.remove('-translate-y-full');
        document.body.style.overflow = 'hidden';
    });

    document.getElementById('menu-close').addEventListener('click', () => {
        document.getElementById('mobile-menu').classList.add('-translate-y-full');
        document.body.style.overflow = '';
    });

    // Pages dropdown toggle with animation
    document.getElementById('pages-toggle').addEventListener('click', () => {
        const dropdown = document.getElementById('pages-dropdown');
        const icon = document.getElementById('pages-icon');

        if (dropdown.classList.contains('hidden')) {
            dropdown.classList.remove('hidden');
            setTimeout(() => {
                dropdown.style.maxHeight = dropdown.scrollHeight + 'px';
                icon.classList.add('rotate-180');
            }, 10);
        } else {
            dropdown.style.maxHeight = '0';
            icon.classList.remove('rotate-180');
            setTimeout(() => {
                dropdown.classList.add('hidden');
            }, 300);
        }
    });

    // Handle viewport resize (if mobile menu is open when resizing to desktop)
    window.addEventListener('resize', () => {
        if (window.innerWidth >= 768) { // md breakpoint
            document.getElementById('mobile-menu').classList.add('-translate-y-full');
            document.body.style.overflow = '';
        }
    });
</script>
