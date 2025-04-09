<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Alloggio')</title>
    @vite(['resources/css/app.css']) {{-- Include Tailwind CSS --}}

    <!-- AOS Animation Library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">

    <!-- Google Font Icons -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet">

    <!-- Include Flatpickr CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">


    <style>
        body {
            font-family: 'Josefin Sans', sans-serif;
        }
    </style>

</head>

<body class="bg-white" data-aos-easing="ease-in-out" data-aos-duration="1000" data-aos-delay="0">

    {{-- Header --}}
    {{-- @include('components.header') --}}

    {{-- Main Content --}}
    <main>
        @yield('content')
    </main>

    {{-- Footer --}}
    {{-- @include('components.footer') --}}

    <!-- Compact Bottom-Right Sidebar Buttons -->
    <div class="fixed bottom-28 right-0 flex flex-col items-end space-y-1 z-50 w-32">
        <!-- RELATED Button -->
        <a href="#related-section"
            class="bg-rose-600 text-white px-3 py-1.5 flex items-center space-x-1.5 shadow-md w-full hover:bg-rose-700 transition text-xs">
            <span class="material-symbols-outlined text-white text-base">quick_reference_all</span>
            <span class="font-medium">RELATED</span>
        </a>

        <!-- BUY NOW Button -->
        <a href="#buy-now"
            class="bg-white text-black px-3 py-1.5 flex items-center space-x-1.5 shadow-md w-full hover:bg-gray-100 transition text-xs">
            <span class="material-symbols-outlined text-rose-600 text-base">shopping_cart</span>
            <span class="font-semibold tracking-wide">BUY NOW</span>
        </a>
    </div>

    <!-- Go to Top Button -->
    <button id="goToTop"
        class="fixed bottom-8 right-8 bg-white border border-[#C9735A] p-2 rounded-lg shadow-md hover:bg-[#C9735A] hover:text-white transition">
        <span class="material-icons text-[#C9735A] hover:text-white text-2xl">
            expand_less
        </span>
    </button>


    <!-- Include Flatpickr JS -->
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

    <!-- AOS Script -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script>
        AOS.init();
    </script>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            let goToTopBtn = document.getElementById("goToTop");

            // Show/Hide Button on Scroll
            window.addEventListener("scroll", function() {
                if (window.scrollY > 300) {
                    goToTopBtn.style.display = "block";
                } else {
                    goToTopBtn.style.display = "none";
                }
            });

            // Smooth Scroll to Top
            goToTopBtn.addEventListener("click", function() {
                window.scrollTo({
                    top: 0,
                    behavior: "smooth"
                });
            });
        });
    </script>


</body>

</html>
