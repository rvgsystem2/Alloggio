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

    <style>
        body {
            font-family: 'Josefin Sans', sans-serif;
        }
    </style>

</head>

<body class="bg-gray-100" data-aos-easing="ease-in-out" data-aos-duration="1000" data-aos-delay="0">

    {{-- Header --}}
    {{-- @include('components.header') --}}

    {{-- Main Content --}}
    <main>
        @yield('content')
    </main>

    {{-- Footer --}}
    {{-- @include('components.footer') --}}

    <!-- Go to Top Button -->
    <button id="goToTop"
        class="fixed bottom-8 right-8 bg-white border border-[#C9735A] p-2 rounded-lg shadow-md hover:bg-[#C9735A] hover:text-white transition">
        <span class="material-icons text-[#C9735A] hover:text-white text-2xl">
            expand_less
        </span>
    </button>


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
