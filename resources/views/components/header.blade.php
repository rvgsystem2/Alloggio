<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

<header class="w-full bg-white shadow-lg px-10 md:px-8 py-6 flex items-center justify-between border-b border-gray-200 z-50">
    
    <!-- Left Section: Weather Info -->
    <div class="flex sm:hidden items-center space-x-2 text-gray-700 text-sm mr-4">
        <h1 class="text-3xl font-serif font-bold text-gray-900 tracking-wider">
            <span class="text-amber-700">A</span>lloggio
        </h1>
    </div>
    

    <div class="hidden sm:flex items-center space-x-2 text-gray-700 text-sm mr-4">
        <span class="tracking-wide">ROME</span>
        <i class="fa-solid fa-cloud-sun text-lg text-amber-600"></i>
        <span>14°C</span>
    </div>
    
    <!-- Navigation Menu -->
    <nav class="hidden md:flex space-x-8 text-sm text-gray-800 tracking-wider">
        <a href="{{ url('/') }}" class="hover:text-amber-700 transition duration-300 py-3">HOME</a>
        <a href="{{ url('/rooms') }}" class="hover:text-amber-700 transition duration-300 py-3">ROOMS</a>
        
        <div class="relative group">
            <a href="{{ url('/pages') }}" class="hover:text-amber-700 transition duration-300 flex items-center py-3">
                PAGES 
            </a>
            <div class="z-50 absolute left-1/2 transform -translate-x-1/2 mt-3 w-64 bg-white shadow-xl rounded-md opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 border border-gray-100">
                <a href="{{ route('about.us') }}" class="block px-6 py-4 text-sm hover:bg-amber-50 hover:text-amber-800">About Us</a>
                <a href="{{ url('/services') }}" class="block px-6 py-4 text-sm hover:bg-amber-50 hover:text-amber-800">Services</a>
                <a href="{{ url('/faq') }}" class="block px-6 py-4 text-sm hover:bg-amber-50 hover:text-amber-800">FAQ</a>
            </div>
        </div>
        
        <div class="relative text-center flex-grow-0">
            <h1 class="text-3xl font-serif font-bold text-gray-900 tracking-wider">
                <span class="text-amber-700">A</span>lloggio
            </h1>
        </div>
        
        <a href="{{ url('/gallery') }}" class="hover:text-amber-700 transition duration-300 py-3">GALLERY</a>
        <a href="{{ url('/blog') }}" class="hover:text-amber-700 transition duration-300 py-3">BLOG</a>
        <a href="{{ route('contact.us') }}" class="hover:text-amber-700 transition duration-300 py-3">CONTACT</a>
    </nav>
    
    <!-- Right Section -->
    <div class="flex items-center space-x-8 text-sm text-gray-700">
        <a href="mailto:info@alloggio.com" class="hover:text-amber-700 transition duration-300 hidden md:flex items-center font-medium">
            <i class="fa-regular fa-envelope mr-2 text-amber-600"></i>
            info@alloggio.com
        </a>
        <div class="relative hidden md:flex items-center cursor-pointer group">
            <span class="font-base">EN</span>
            <i class="fa-solid fa-chevron-down ml-2 text-xs group-hover:text-amber-700 transition"></i>
        </div>
        <button id="menu-toggle" class="md:hidden text-gray-800 hover:text-amber-700 transition duration-300 p-2">
            <i class="fa-solid fa-bars text-2xl"></i>
        </button>
    </div>
</header>

<!-- Mobile Navigation Menu -->
<div id="mobile-menu" class="fixed top-0 left-0 w-full h-full bg-white shadow-lg transform -translate-y-full transition-transform duration-500 ease-in-out md:hidden z-50">
    <div class="flex justify-between items-center px-10 py-6 border-b border-gray-200">
        <h1 class="text-3xl font-serif font-bold text-gray-900">
            <span class="text-amber-700">A</span>lloggio
        </h1>
        <button id="menu-close" class="text-gray-800 hover:text-amber-700 transition duration-300 p-2">
            <i class="fa-solid fa-times text-2xl"></i>
        </button>
    </div>
    
    <nav class="flex flex-col space-y-6 text-center py-12 px-10">
        <a href="{{ url('/') }}" class="text-gray-800 hover:text-amber-700 transition duration-300 py-2 text-lg">HOME</a>
        <a href="{{ url('/rooms') }}" class="text-gray-800 hover:text-amber-700 transition duration-300 py-2 text-lg">ROOMS</a>
        <a href="{{ url('/pages') }}" class="text-gray-800 hover:text-amber-700 transition duration-300 py-2 text-lg">PAGES</a>
        <a href="{{ url('/gallery') }}" class="text-gray-800 hover:text-amber-700 transition duration-300 py-2 text-lg">GALLERY</a>
        <a href="{{ url('/blog') }}" class="text-gray-800 hover:text-amber-700 transition duration-300 py-2 text-lg">BLOG</a>
        <a href="{{route('contact.us')}}" class="text-gray-800 hover:text-amber-700 transition duration-300 py-2 text-lg">CONTACT</a>
    </nav>
    
    <div class="absolute bottom-12 left-0 w-full text-center text-gray-700">
        <a href="mailto:info@alloggio.com" class="flex items-center justify-center space-x-2 hover:text-amber-700 transition duration-300 mb-4">
            <i class="fa-regular fa-envelope text-amber-600"></i>
            <span>info@alloggio.com</span>
        </a>
        <div class="flex items-center justify-center space-x-6 text-amber-600">
            <a href="#" class="hover:text-amber-800 transition duration-300"><i class="fa-brands fa-facebook-f"></i></a>
            <a href="#" class="hover:text-amber-800 transition duration-300"><i class="fa-brands fa-instagram"></i></a>
            <a href="#" class="hover:text-amber-800 transition duration-300"><i class="fa-brands fa-twitter"></i></a>
        </div>
    </div>
</div>

<script>
    document.getElementById('menu-toggle').addEventListener('click', () => {
        document.getElementById('mobile-menu').classList.remove('-translate-y-full');
    });
    document.getElementById('menu-close').addEventListener('click', () => {
        document.getElementById('mobile-menu').classList.add('-translate-y-full');
    });
</script>
