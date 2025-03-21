<!-- Google Material Icons Import -->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet">
<!-- Font Awesome for Twitter Icon -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

<aside
    class="fixed top-0 left-0 h-full w-[340px] bg-[#FAF7F2] shadow-xl px-6 py-8 flex flex-col justify-between overflow-y-auto border-r border-gray-200">
    <!-- Logo & Brand -->
    <div class="text-center">
        <h1 class="text-4xl font-serif font-bold text-gray-800 tracking-wide">
            <span class="text-amber-700">Koh</span>Rooms
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
                <a href="{{ route('standard') }}"
                    class="flex items-center justify-center text-sm font-semibold text-gray-800 hover:text-amber-700 transition duration-300">
                    ROOMS
                </a>
            </li>
            <!-- Pages Dropdown -->
            <li class="relative group dropdown-container ml-4">
                <a href="#"
                    class="flex items-center justify-center text-sm font-semibold text-gray-800 hover:text-amber-700 transition duration-300">
                    PAGES
                    <i
                        class="fa-solid fa-chevron-down ml-2 text-xs transition-transform duration-300 group-hover:rotate-180"></i>
                </a>
                <ul
                    class="invisible opacity-0 group-hover:visible group-hover:opacity-100 absolute left-0 right-0 bg-white shadow-md rounded-md mt-2 py-2 z-10 transition-all duration-300 dropdown-menu">
                    <li>
                        <a href="{{ route('properties') }}"
                            class="block px-4 py-2 text-sm text-gray-700 hover:bg-amber-50 hover:text-amber-700">
                            Property
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('about.us') }}"
                            class="block px-4 py-2 text-sm text-gray-700 hover:bg-amber-50 hover:text-amber-700">
                            About Us
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('gallery') }}"
                            class="block px-4 py-2 text-sm text-gray-700 hover:bg-amber-50 hover:text-amber-700">
                            Gallery
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('blogs') }}"
                            class="block px-4 py-2 text-sm text-gray-700 hover:bg-amber-50 hover:text-amber-700">
                            Blog
                        </a>
                    </li>
                    <li>
                        <a href=""
                            class="block px-4 py-2 text-sm text-gray-700 hover:bg-amber-50 hover:text-amber-700">
                            Amenities
                        </a>
                    </li>
                    <li>
                        <a href=""
                            class="block px-4 py-2 text-sm text-gray-700 hover:bg-amber-50 hover:text-amber-700">
                            Policies
                        </a>
                    </li>
                </ul>
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

<!-- JavaScript for enhanced dropdown functionality -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Get all dropdown containers
        const dropdownContainers = document.querySelectorAll('.dropdown-container');

        // Add touch support for mobile devices
        dropdownContainers.forEach(container => {
            const link = container.querySelector('a');
            const menu = container.querySelector('.dropdown-menu');
            const icon = container.querySelector('i.fa-chevron-down');

            // For touch devices
            link.addEventListener('touchstart', function(e) {
                e.preventDefault();

                // Check if this dropdown is already open
                const isOpen = menu.classList.contains('touch-open');

                // Close all dropdowns first
                document.querySelectorAll('.dropdown-menu').forEach(m => {
                    m.classList.remove('touch-open');
                });
                document.querySelectorAll('i.fa-chevron-down').forEach(i => {
                    i.classList.remove('rotate-180');
                });

                // If it wasn't open before, open it now
                if (!isOpen) {
                    menu.classList.add('touch-open');
                    icon.classList.add('rotate-180');
                }
            });
        });

        // Close dropdowns when clicking outside
        document.addEventListener('click', function(event) {
            if (!event.target.closest('.dropdown-container')) {
                document.querySelectorAll('.dropdown-menu').forEach(menu => {
                    menu.classList.remove('touch-open');
                });
                document.querySelectorAll('i.fa-chevron-down').forEach(icon => {
                    icon.classList.remove('rotate-180');
                });
            }
        });
    });
</script>

<style>
    /* Additional styles for touch devices */
    .touch-open {
        visibility: visible !important;
        opacity: 1 !important;
    }
</style>
