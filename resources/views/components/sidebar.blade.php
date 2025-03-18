<!-- Google Material Icons Import -->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet">
<!-- Font Awesome for Twitter Icon -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

<aside class="fixed top-0 left-0 h-full w-[340px] bg-[#FAF7F2] shadow-xl px-6 py-8 flex flex-col justify-between overflow-y-auto border-r border-gray-200 ">


    <!-- Logo & Brand -->
    <div class="text-center">
        <h1 class="text-4xl font-serif font-bold text-gray-800 tracking-wide">Alloggio</h1>
        <p class="text-xs text-gray-500 mt-1 italic">Luxury Accommodations Since 1992</p>
        <div class="mt-4 w-20 h-0.5 bg-gray-300 mx-auto"></div>
    </div>

    <!-- Navigation Links -->
    <nav class="mt-8">
        <ul class="space-y-5 text-center">
            <li>
                <a href="{{ url('/') }}"
                    class="flex items-center justify-center text-sm font-semibold text-gray-800 hover:text-amber-700 transition duration-300">
                    HOME
                </a>
            </li>
            <li>
                <a href="{{ url('/rooms') }}"
                    class="flex items-center justify-center text-sm font-semibold text-gray-800 hover:text-amber-700 transition duration-300">
                    ROOMS
                </a>
            </li>
            <li>
                <a href="{{ route('about.us') }}"
                    class="flex items-center justify-center text-sm font-semibold text-gray-800 hover:text-amber-700 transition duration-300">
                    ABOUT US
                </a>
            </li>
            <li>
                <a href="{{ url('/gallery') }}"
                    class="flex items-center justify-center text-sm font-semibold text-gray-800 hover:text-amber-700 transition duration-300">
                    GALLERY
                </a>
            </li>
            <li>
                <a href="{{ url('/blog') }}"
                    class="flex items-center justify-center text-sm font-semibold text-gray-800 hover:text-amber-700 transition duration-300">
                    BLOG
                </a>
            </li>
            <li>
                <a href="{{ route('contact.us') }}"
                    class="flex items-center justify-center text-sm font-semibold text-gray-800 hover:text-amber-700 transition duration-300">
                    CONTACT
                </a>
            </li>
        </ul>

    </nav>

    <!-- Social Icons & Contact Info -->
    <div class="text-center text-gray-600 mt-6">
        <div class="w-20 h-0.5 bg-gray-300 mx-auto mb-4"></div>
        <div class="flex justify-center space-x-5 mb-4">
            <!-- Facebook Icon (Font Awesome) -->
            <a href="#" class="hover:text-amber-700 transition duration-300">
                <i class="fa-brands fa-facebook text-lg"></i>
            </a>

            <!-- Twitter Icon (Font Awesome) -->
            <a href="#" class="hover:text-amber-700 transition duration-300">
                <i class="fa-brands fa-twitter text-lg"></i>
            </a>

            <!-- WhatsApp Icon (Font Awesome) -->
            <a href="#" class="hover:text-amber-700 transition duration-300">
                <i class="fa-brands fa-whatsapp text-lg"></i>
            </a>
        </div>

        <div class="space-y-3 text-xs">
            <div class="flex items-center justify-center">
                <span>Via Venti Settembre, Roma</span>
            </div>
            <div class="flex items-center justify-center">
                <span>+31 555 777 83</span>
            </div>
            <div class="flex items-center justify-center">
                <span>Viber, WhatsApp</span>
            </div>
            <div class="flex items-center justify-center">
                <span>info@alloggio.com</span>
            </div>
        </div>
        
        <div class="mt-6 pt-4 border-t border-gray-200">
            <p class="text-xs text-gray-400">© 2025 Alloggio. All rights reserved.</p>
        </div>
    </div>
</aside>
