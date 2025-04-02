<!-- Include SwiperJS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<!-- Google Material Icons -->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

<style>
    .slider-container {
        position: relative;
        max-width: 100%;
        padding: 0 60px;
        margin: 0 auto;
        overflow: hidden;
    }

    @media (max-width: 640px) {
        .slider-container {
            padding: 0 20px;
            /* Reduced side padding for mobile */
        }

        .custom-nav-prev {
            left: -5px;
        }

        .custom-nav-next {
            right: -5px;
        }
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
        border-radius: 50%;
        transition: all 0.3s ease;
    }

    .custom-nav-prev {
        left: 0;
    }

    .custom-nav-next {
        right: 0;
    }

    .material-icons.nav-arrow {
        font-size: 42px;
        /* Even larger icon size */
        color: #333;
    }

    .swiper-button-next,
    .swiper-button-prev {
        display: none !important;
    }

    .property-card {
        background-color: #faf9f7;
        transition: transform 0.3s ease;
        border-radius: 8px;
        overflow: hidden;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
    }

    .property-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 24px rgba(0, 0, 0, 0.12);
    }

    .property-info {
        padding: 24px;
        background-color: #f8f6f1;
    }

    .property-title {
        font-family: 'Georgia', serif;
        font-size: 22px;
        font-weight: 500;
        color: #2c2c2c;
        margin-bottom: 8px;
        line-height: 1.3;
    }

    .property-price {
        font-size: 14px;
        color: #6b6b6b;
        margin-bottom: 12px;
    }

    .price-value {
        font-size: 20px;
        font-weight: 600;
        color: #2c2c2c;
    }

    .property-details {
        font-size: 15px;
        color: #616161;
        margin-bottom: 6px;
        line-height: 1.5;
    }

    .property-location {
        font-size: 15px;
        color: #616161;
        margin-bottom: 16px;
        line-height: 1.5;
    }

    .book-button {
        text-transform: uppercase;
        letter-spacing: 1px;
        font-weight: 600;
        font-size: 14px;
        color: #2c2c2c;
        display: flex;
        align-items: center;
        padding: 10px 0;
        background: transparent;
        border: none;
        cursor: pointer;
        transition: all 0.3s ease;
    }

    .book-button:hover {
        color: #9e8a78;
    }

    .book-button .material-icons {
        margin-left: 4px;
        font-size: 18px;
    }
</style>

<div class="slider-container py-12">
    <div class="custom-nav-prev">
        <span class="material-icons nav-arrow">arrow_back_ios</span>
    </div>
    <div class="custom-nav-next">
        <span class="material-icons nav-arrow">arrow_forward_ios</span>
    </div>

    <div class="swiper elegantSwiper my-8">
        <div class="swiper-wrapper">
            <div class="swiper-slide p-1">
                <div class="property-card">
                    <img src="{{ asset('asset/images/properties-1.jpeg') }}" alt="Cozy B&B"
                        class="w-full h-72 object-cover" />
                    <div class="property-info">
                        <h2 class="property-title">House in Tambon Bo Put, Thailand</h2>
                        <div class="property-price">from <span class="price-value">₹1,892 / night</span></div>
                        <p class="property-details">1 bedroom • 1 bed • 1 bath</p>
                        <p class="property-location">Gm Bungalow at Chaweng hill</p>
                        <button class="book-button">Book Now <span class="material-icons">add</span></button>
                    </div>
                </div>
            </div>

            <div class="swiper-slide p-1">
                <div class="property-card">
                    <img src="{{ asset('asset/images/properties-2.jpeg') }}" alt="Il Sole"
                        class="w-full h-72 object-cover" />
                    <div class="property-info">
                        <h2 class="property-title">Apartment in Tambon Bo Put</h2>
                        <div class="property-price">from <span class="price-value">₹2,624 / night</span></div>
                        <p class="property-details">Private room • 2 guests • 1 bedroom • 1 bed • 1 bathroom</p>
                        <p class="property-location">RePlay Residence D301</p>
                        <button class="book-button">Book Now <span class="material-icons">add</span></button>
                    </div>
                </div>
            </div>

            <div class="swiper-slide p-1">
                <div class="property-card">
                    <img src="{{ asset('asset/images/properties-3.jpeg') }}" alt="Beach Villa"
                        class="w-full h-72 object-cover" />
                    <div class="property-info">
                        <h2 class="property-title">House in Mae Nam</h2>
                        <div class="property-price">from <span class="price-value">₹4,667 / night</span></div>
                        <p class="property-details">Entire Place • 3 guests • 1 bedroom • 2 beds • 1 bathroom</p>
                        <p class="property-location">Beachfront Villa with Sunset</p>
                        <button class="book-button">Book Now <span class="material-icons">add</span></button>
                    </div>
                </div>
            </div>

            <div class="swiper-slide p-1">
                <div class="property-card">
                    <img src="{{ asset('asset/images/properties-4.jpeg') }}" alt="Luxury Apartment"
                        class="w-full h-72 object-cover" />
                    <div class="property-info">
                        <h2 class="property-title">Apartment in Ko Samui District</h2>
                        <div class="property-price">from <span class="price-value">₹4,207 / night</span></div>
                        <p class="property-details">Private room • 4 guests • 2 bedrooms • 2 beds</p>
                        <p class="property-location">GM Apartments 2 Bedrooms</p>
                        <button class="book-button">Book Now <span class="material-icons">add</span></button>
                    </div>
                </div>
            </div>

            <div class="swiper-slide p-1">
                <div class="property-card">
                    <img src="{{ asset('asset/images/properties-5.jpeg') }}" alt="Sea View Studio"
                        class="w-full h-72 object-cover" />
                    <div class="property-info">
                        <h2 class="property-title">Apartment in Ko Samui District</h2>
                        <div class="property-price">from <span class="price-value">₹2,054 / night</span></div>
                        <p class="property-details">Private room • 2 guests • 1 bedroom • 1 bed • 1 bathroom</p>
                        <p class="property-location">Cozy Apartment GM8</p>
                        <button class="book-button">Book Now <span class="material-icons">add</span></button>
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
            spaceBetween: 10,
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
