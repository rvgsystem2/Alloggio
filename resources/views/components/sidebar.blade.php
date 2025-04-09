<!-- Google Material Icons Import -->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet">
<!-- Font Awesome for Icons -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

<style>
    /* Hide scrollbar for Webkit browsers (Chrome, Safari) */
    ::-webkit-scrollbar {
        display: none;
    }

    /* Hide scrollbar but allow scrolling in Firefox */
    * {
        scrollbar-width: none;
    }

    /* Hide scrollbar but allow scrolling in Internet Explorer and Edge */
    *::-ms-scrollbar {
        display: none;
    }
</style>
<aside
    class="fixed top-0 left-0 h-full w-[340px] bg-[#FAF7F2] shadow-xl px-6 py-8 flex flex-col justify-between overflow-y-auto border-r border-gray-200">
    <!-- Logo & Brand -->
    <div class="text-center">
        <img src="{{ asset('asset/images/logo.png') }}" alt="KohRooms Logo" class="mx-auto w-24 h-24">
        <p class="text-xs text-gray-500 mt-1 italic">Luxury Accommodations Since 1992</p>
        <div class="mt-4 w-20 h-0.5 bg-gray-300 mx-auto"></div>
    </div>

    <!-- Navigation Links -->
    <nav class="mt-8">
        <ul class="space-y-3 text-center" id="navMenu">
            <li>
                <a href="{{ url('/') }}"
                    class="flex items-center justify-center text-sm text-gray-800 hover:text-amber-700 transition duration-300">
                    HOME
                </a>
            </li>
            <li>
                <a href="{{ route('rooms') }}"
                    class="flex items-center justify-center text-sm text-gray-800 hover:text-amber-700 transition duration-300">
                    ROOMS
                </a>
            </li>
            <!-- Pages with expandable submenu -->
            <li class="submenu-container">
                <button id="pagesToggleBtn"
                    class="w-full flex items-center justify-center text-sm text-gray-800 hover:text-amber-700 transition duration-300">
                    PAGES
                </button>
                <!-- Submenu (initially collapsed) -->
                <div class="submenu-wrapper overflow-hidden transition-all duration-500 ease-in-out"
                    style="max-height: 0;">
                    <ul class="pt-3 pb-1 space-y-3">
                        <li>
                            <a href="{{ route('properties') }}"
                                class="flex items-center justify-center text-sm text-gray-600 hover:text-amber-700 transition duration-300">
                                PROPERTY
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('about.us') }}"
                                class="flex items-center justify-center text-sm text-gray-600 hover:text-amber-700 transition duration-300">
                                ABOUT US
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('contact.us') }}"
                                class="flex items-center justify-center text-sm text-gray-600 hover:text-amber-700 transition duration-300">
                                CONTACT
                            </a>
                        </li>
                        {{-- <li>
                            <a href="{{ route('gallery') }}"
                                class="flex items-center justify-center text-sm text-gray-600 hover:text-amber-700 transition duration-300">
                                Gallery
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('blogs') }}"
                                class="flex items-center justify-center text-sm text-gray-600 hover:text-amber-700 transition duration-300">
                                Blog
                            </a>
                        </li> --}}
                    </ul>
                </div>
            </li>
            <li>
                <a href="{{ route('gallery') }}"
                    class="flex items-center justify-center text-sm text-gray-800 hover:text-amber-700 transition duration-300">
                    GALLERY
                </a>
            </li>
            <li>
                <a href="{{ route('blogs') }}"
                    class="flex items-center justify-center text-sm text-gray-800 hover:text-amber-700 transition duration-300">
                    BLOG
                </a>
            </li>

            {{-- <li>
                <a href="{{ route('contact.us') }}"
                    class="flex items-center justify-center text-sm text-gray-800 hover:text-amber-700 transition duration-300">
                    CONTACT
                </a>
            </li> --}}
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
                <span>Apartment in Ko Samui District</span>
            </div>
            <div class="flex items-center justify-center">
                <span>+66900553044</span>
            </div>
            <div class="flex items-center justify-center">
                <span>kohrooms@gmail.com</span>
            </div>
        </div>

        <div class="mt-6 pt-4 border-t border-gray-200">
            <p class="text-xs text-gray-400">© 2025 Koh Rooms. All rights reserved.</p>
        </div>
    </div>
</aside>

<!-- JavaScript for smooth expanding menu -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Get the pages toggle button and submenu
        const pagesToggleBtn = document.getElementById('pagesToggleBtn');
        const submenuWrapper = pagesToggleBtn.parentElement.querySelector('.submenu-wrapper');
        let isExpanded = false;

        // Toggle submenu with smooth animation
        pagesToggleBtn.addEventListener('click', function() {
            if (!isExpanded) {
                // Get the scrollHeight which is the height of the content
                const submenuHeight = submenuWrapper.scrollHeight;
                // Set the max-height to that height to expand it
                submenuWrapper.style.maxHeight = submenuHeight + 'px';
                pagesToggleBtn.classList.add('text-amber-700');
            } else {
                // Collapse the submenu
                submenuWrapper.style.maxHeight = '0px';
                pagesToggleBtn.classList.remove('text-amber-700');
            }

            // Toggle the state
            isExpanded = !isExpanded;
        });
    });
</script>
