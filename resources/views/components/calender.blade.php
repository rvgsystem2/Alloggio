<!-- Include SwiperJS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<style>
    .slider-container {
        position: relative;
        max-width: 100%;
        padding: 0 60px;
        margin: 0 auto;
        overflow: hidden;
    }

    .custom-nav-prev,
    .custom-nav-next {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        width: 72px;
        height: 72px;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        z-index: 10;
    }

    .custom-nav-prev {
        left: 0;
    }

    .custom-nav-next {
        right: 0;
    }

    .swiper-button-next,
    .swiper-button-prev {
        display: none !important;
    }

    .property-card {
        background-color: #faf9f7;
        transition: transform 0.3s ease;
    }

    .property-card:hover {
        transform: translateY(-5px);
    }
</style>

<div class="slider-container py-12">
    <div class="custom-nav-prev">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <path d="M15 18l-6-6 6-6" />
        </svg>
    </div>
    <div class="custom-nav-next">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <path d="M9 18l6-6-6-6" />
        </svg>
    </div>

    <div class="swiper elegantSwiper my-8">
        <div class="swiper-wrapper">
            <div class="swiper-slide p-1">
                <div class="property-card overflow-hidden">
                    <img src="{{ asset('asset/images/properties-1.jpeg') }}" alt="Cozy B&B"
                        class="w-full h-72 object-cover" />
                    <div class="p-8 bg-[#f8f6f1]">
                        <h2 class="text-2xl font-serif font-normal text-gray-900">House in Tambon Bo Put,
                            Thailand</h2>
                        <div class="text-sm text-gray-500">from <span class="text-xl font-semibold text-gray-900">₹1,892
                                / night</span></div>
                        <p class="text-gray-600">1 bedroom • 1 bed • 1 bath</p>
                        <p class="text-gray-600 mb-6">Gm Bungalow at Chaweng hill</p>
                        <button
                            class="uppercase tracking-wider text-gray-800 font-semibold text-sm flex items-center">Book
                            Now <span class="material-icons ml-1">add</span></button>
                    </div>
                </div>
            </div>

            <div class="swiper-slide p-1">
                <div class="property-card overflow-hidden">
                    <img src="{{ asset('asset/images/properties-2.jpeg') }}" alt="Il Sole"
                        class="w-full h-72 object-cover" />
                    <div class="p-8 bg-[#f8f6f1]">
                        <h2 class="text-2xl font-serif font-normal text-gray-900">Apartment in Tambon Bo Put
                        </h2>
                        <div class="text-sm text-gray-500">from <span class="text-xl font-semibold text-gray-900">₹2,624
                                / night</span></div>
                        <p class="text-gray-600">Private room • 2 guests • 1 bedroom • 1 bed • 1 bathroom</p>
                        <p class="text-gray-600 mb-6">RePlay Residence D301</p>
                        <button
                            class="uppercase tracking-wider text-gray-800 font-semibold text-sm flex items-center">Book
                            Now <span class="material-icons ml-1">add</span></button>
                    </div>
                </div>
            </div>

            <div class="swiper-slide p-1">
                <div class="property-card overflow-hidden">
                    <img src="{{ asset('asset/images/properties-3.jpeg') }}" alt="Beach Villa"
                        class="w-full h-72 object-cover" />
                    <div class="p-8 bg-[#f8f6f1]">
                        <h2 class="text-2xl font-serif font-normal text-gray-900">House in Mae Nam</h2>
                        <div class="text-sm text-gray-500">from <span class="text-xl font-semibold text-gray-900">₹4,667
                                / night</span></div>
                        <p class="text-gray-600">Entire Place • 3 guests • 1 bedroom • 2 beds • 1 bathroom</p>
                        <p class="text-gray-600 mb-6">Beachfront Villa with Sunset</p>
                        <button
                            class="uppercase tracking-wider text-gray-800 font-semibold text-sm flex items-center">Book
                            Now <span class="material-icons ml-1">add</span></button>
                    </div>
                </div>
            </div>

            <div class="swiper-slide p-1">
                <div class="property-card overflow-hidden">
                    <img src="{{ asset('asset/images/properties-4.jpeg') }}" alt="Luxury Apartment"
                        class="w-full h-72 object-cover" />
                    <div class="p-8 bg-[#f8f6f1]">
                        <h2 class="text-2xl font-serif font-normal text-gray-900">Apartment in Ko Samui
                            District</h2>
                        <div class="text-sm text-gray-500">from <span class="text-xl font-semibold text-gray-900">₹4,207
                                / night</span></div>
                        <p class="text-gray-600">Private room • 4 guests • 2 bedrooms • 2 beds</p>
                        <p class="text-gray-600 mb-6">GM Apartments 2 Bedrooms</p>
                        <button
                            class="uppercase tracking-wider text-gray-800 font-semibold text-sm flex items-center">Book
                            Now <span class="material-icons ml-1">add</span></button>
                    </div>
                </div>
            </div>

            <div class="swiper-slide p-1">
                <div class="property-card overflow-hidden">
                    <img src="{{ asset('asset/images/properties-5.jpeg') }}" alt="Sea View Studio"
                        class="w-full h-72 object-cover" />
                    <div class="p-8 bg-[#f8f6f1]">
                        <h2 class="text-2xl font-serif font-normal text-gray-900">Apartment in Ko Samui
                            District</h2>
                        <div class="text-sm text-gray-500">from <span class="text-xl font-semibold text-gray-900">₹2,054
                                / night</span></div>
                        <p class="text-gray-600">Private room • 2 guests • 1 bedroom • 1 bed • 1 bathroom</p>
                        <p class="text-gray-600 mb-6">Cozy Apartment GM8</p>
                        <button
                            class="uppercase tracking-wider text-gray-800 font-semibold text-sm flex items-center">Book
                            Now <span class="material-icons ml-1">add</span></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const swiper = new Swiper(".elegantSwiper", {
            loop: true,
            autoplay: {
                delay: 5000,
                disableOnInteraction: false,
            },
            slidesPerView: 1,
            spaceBetween: 30,
            breakpoints: {
                640: {
                    slidesPerView: 1,
                    spaceBetween: 20,
                },
                768: {
                    slidesPerView: 2,
                    spaceBetween: 30,
                },
                1024: {
                    slidesPerView: 2,
                    spaceBetween: 40,
                }
            }
        });

        document.querySelector('.custom-nav-prev').addEventListener('click', function() {
            swiper.slidePrev();
        });

        document.querySelector('.custom-nav-next').addEventListener('click', function() {
            swiper.slideNext();
        });
    });
</script>
