<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="shortcut icon" href="assets/img/fortuna.png" type="image/png">

    <!--=============== REMIXICONS ===============-->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">

    <!--=============== SWIPER CSS ===============-->
    <link rel="stylesheet" href="assets/css/dashboard-swiper-bundle.min.css">

    <!--=============== CSS ===============-->
    <link rel="stylesheet" href="assets/css/dashboard-styles.css">

    <title>Fortuna Artha Niaga</title>
</head>

<body>
    <header class="header" id="header">
        <nav class="nav container">
            <a href="#" class="nav__logo">Fortuna</a>

            <div class="nav__menu" id="nav-menu">
                <ul class="nav__list">
                    <li class="nav__item">
                        <a href="#home" class="nav__link active-link">Home</a>
                    </li>
                    <li class="nav__item">
                        <a href="#about" class="nav__link">About</a>
                    </li>
                    <li class="nav__item">
                        <a href="#discover" class="nav__link">Discover</a>
                    </li>
                    <li class="nav__item">
                        <a href="#place" class="nav__link">Places</a>
                    </li>
                    <li class="nav__item">
                        <a href="login" class="nav__link">Admin</a>
                    </li>
                </ul>

                <div class="nav__dark">
                    <!-- Theme change button -->
                    <span class="change-theme-name">Dark mode</span>
                    <i class="ri-moon-line change-theme" id="theme-button"></i>
                </div>

                <i class="ri-close-line nav__close" id="nav-close"></i>
            </div>

            <div class="nav__toggle" id="nav-toggle">
                <i class="ri-function-line"></i>
            </div>
        </nav>
    </header>

    <main class="main">
        <!--==================== HOME ====================-->
        <section class="home" id="home">
            <img src="assets/img/home1.jpg" alt="" class="home__img">

            <div class="home__container container grid">
                <div class="home__data">
                    <span class="home__data-subtitle">At Fortuna Artha Niaga</span>
                    <h1 class="home__data-title">Meeting The <br> Demands Of <b>Today's <br> Discerning Consumer</b>
                    </h1>
                    <a href="https://wa.me/+6282258280517?text=Halo!%20Saya%20tertarik%20menjadi%20mitra%20Fortuna%20Artha%20Niaga"
                        class="button">Contact Us</a>

                </div>

                <div class="home__social">
                    <a href="https://www.facebook.com/" target="_blank" class="home__social-link">
                        <i class="ri-facebook-box-fill"></i>
                    </a>
                    <a href="https://www.instagram.com/fortunaabadigroup" target="_blank" class="home__social-link">
                        <i class="ri-instagram-fill"></i>
                    </a>
                    <a href="https://twitter.com/" target="_blank" class="home__social-link">
                        <i class="ri-twitter-fill"></i>
                    </a>
                </div>

                <div class="home__info">
                    <div>
                        <span class="home__info-title">FANIAGA</span>
                        <a href="#about" class="button button--flex button--link home__info-button">
                            About Us <i class="ri-arrow-right-line"></i>
                        </a>
                    </div>

                    <div class="home__info-overlay">
                        <img src="assets/img/home2.jpg" alt="" class="home__info-img">
                    </div>
                </div>
            </div>
        </section>

        <!--==================== ABOUT ====================-->
        <section class="about section" id="about">
            <div class="about__container container grid">
                <div class="about__data">
                    <h2 class="section__title about__title">ABOUT FMA</h2>
                    <p class="about__description">Consumers today are increasingly more connected and educated. As a
                        result, they demand quality and niche products that reflect their values, lifestyles, and
                        widening interests.
                        <br /><br />
                        At Fortuna Artha Niaga (Faniaga), we are here to serve.
                    </p>
                    <a href="#" class="button">Reserve a place</a>
                </div>

                <div class="about__img">
                    <div class="about__img-overlay">
                        <img src="assets/img/about1.jpg" alt="" class="about__img-one">
                    </div>

                    <div class="about__img-overlay">
                        <img src="assets/img/about2.jpg" alt="" class="about__img-two">
                    </div>
                </div>
            </div>
        </section>

        <!--==================== DISCOVER ====================-->
        <section class="discover section" id="discover">
            <h2 class="section__title">Discover Our Products</h2>

            <div class="discover__container container swiper-container">
                <div class="swiper-wrapper">
                    <!--==================== Dome Whisky  ====================-->
                    <div class="discover__card swiper-slide">
                        <img src="assets/img/product/dome.png" alt="" class="discover__img">
                        <div class="discover__data">
                            <span class="discover__description">Dome Whisky</span>
                        </div>
                    </div>

                    <!--==================== Gilbeys Ginv ====================-->
                    <div class="discover__card swiper-slide">
                        <img src="assets/img/product/gilbeygin.png" alt="" class="discover__img">
                        <div class="discover__data">
                            <span class="discover__description">Gilbeys Gin</span>
                        </div>
                    </div>

                    <!--==================== Gilbeys Vodka ====================-->
                    <div class="discover__card swiper-slide">
                        <img src="assets/img/product/gilbeyvodka.png" alt="" class="discover__img">
                        <div class="discover__data">
                            <span class="discover__description">Gilbeys Vodka</span>
                        </div>
                    </div>

                    <!--==================== Gilbeys Whisky ====================-->
                    <div class="discover__card swiper-slide">
                        <img src="assets/img/product/gilbeywhisky.png" alt="" class="discover__img">
                        <div class="discover__data">
                            <span class="discover__description">Gilbeys Whisky</span>
                        </div>
                    </div>

                    <!--==================== McDonal RUM ====================-->
                    <div class="discover__card swiper-slide">
                        <img src="assets/img/product/mcrum.png" alt="" class="discover__img">
                        <div class="discover__data">
                            <span class="discover__description">McDonal Rum</span>
                        </div>
                    </div>

                    <!--==================== McDonal Vodka Mix====================-->
                    <div class="discover__card swiper-slide">
                        <img src="assets/img/product/mcvodkamix.png" alt="" class="discover__img">
                        <div class="discover__data">
                            <span class="discover__description">McDonal Vodka Mix</span>
                        </div>
                    </div>

                    <!--==================== McDonal Vodka ====================-->
                    <div class="discover__card swiper-slide">
                        <img src="assets/img/product/mcvodka.png" alt="" class="discover__img">
                        <div class="discover__data">
                            <span class="discover__description">McDonal Vodka</span>
                        </div>
                    </div>

                    <!--==================== McDonal Whisky ====================-->
                    <div class="discover__card swiper-slide">
                        <img src="assets/img/product/mcwhisky.png" alt="" class="discover__img">
                        <div class="discover__data">
                            <span class="discover__description">McDonal Whisky</span>
                        </div>
                    </div>

                    <!--==================== McDonal Anggur Hijau ====================-->
                    <div class="discover__card swiper-slide">
                        <img src="assets/img/product/mdonal.png" alt="" class="discover__img">
                        <div class="discover__data">
                            <span class="discover__description">McDonal Anggur Hijau</span>
                        </div>
                    </div>

                    <!--==================== Congyang ====================-->
                    <div class="discover__card swiper-slide">
                        <img src="assets/img/product/congyang.png" alt="" class="discover__img">
                        <div class="discover__data">
                            <span class="discover__description">Congyang</span>
                        </div>
                    </div>

                    <!--==================== Alexis ====================-->
                    <div class="discover__card swiper-slide">
                        <img src="assets/img/product/alexis.png" alt="" class="discover__img">
                        <div class="discover__data">
                            <span class="discover__description">Alexis</span>
                        </div>
                    </div>

                    <!--==================== Elang ====================-->
                    <div class="discover__card swiper-slide">
                        <img src="assets/img/product/elangangur.png" alt="" class="discover__img">
                        <div class="discover__data">
                            <span class="discover__description">Elang Laut Anggur</span>
                        </div>
                    </div>

                    <!--==================== Kawa Hijau ====================-->
                    <div class="discover__card swiper-slide">
                        <img src="assets/img/product/kawahijau.png" alt="" class="discover__img">
                        <div class="discover__data">
                            <span class="discover__description">Kawa Kawa Hijau</span>
                        </div>
                    </div>

                    <!--==================== Kawa Merah ====================-->
                    <div class="discover__card swiper-slide">
                        <img src="assets/img/product/kawamerah.png" alt="" class="discover__img">
                        <div class="discover__data">
                            <span class="discover__description">Kawa Kawa Merah</span>
                        </div>
                    </div>

                    <!--==================== Kuda Anggur ====================-->
                    <div class="discover__card swiper-slide">
                        <img src="assets/img/product/kdanggur.png" alt="" class="discover__img">
                        <div class="discover__data">
                            <span class="discover__description">Kuda Mas Anggur</span>
                        </div>
                    </div>

                    <!--==================== Mansion House VWhisky ====================-->
                    <div class="discover__card swiper-slide">
                        <img src="assets/img/product/mhvodka.png" alt="" class="discover__img">
                        <div class="discover__data">
                            <span class="discover__description">Mansion House Whisky</span>
                        </div>
                    </div>

                    <!--==================== Mansion House Vodka ====================-->
                    <div class="discover__card swiper-slide">
                        <img src="assets/img/product/mhvodkakcl.png" alt="" class="discover__img">
                        <div class="discover__data">
                            <span class="discover__description">Mansion House Vodka</span>
                        </div>
                    </div>

                    <!--==================== Mansion Whisky ====================-->
                    <div class="discover__card swiper-slide">
                        <img src="assets/img/product/mhwhisky.png" alt="" class="discover__img">
                        <div class="discover__data">
                            <span class="discover__description">Mansion Whisky</span>
                        </div>
                    </div>

                    <!--==================== QRO ====================-->
                    <div class="discover__card swiper-slide">
                        <img src="assets/img/product/qro.png" alt="" class="discover__img">
                        <div class="discover__data">
                            <span class="discover__description">QRO</span>
                        </div>
                    </div>

                    <!--==================== Red Horse ====================-->
                    <div class="discover__card swiper-slide">
                        <img src="assets/img/product/redhorse.png" alt="" class="discover__img">
                        <div class="discover__data">
                            <span class="discover__description">Red Horse</span>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!--==================== EXPERIENCE ====================-->
        <section class="experience section">
            <h2 class="section__title">With Our Experience <br> We Will Serve You</h2>

            <div class="experience__container container grid">
                <div class="experience__content grid">
                    <div class="experience__data">
                        <h2 class="experience__number">5+</h2>
                        <span class="experience__description">Year <br> Experience</span>
                    </div>

                    <div class="experience__data">
                        <h2 class="experience__number">75+</h2>
                        <span class="experience__description">Our <br> Partners</span>
                    </div>

                    <div class="experience__data">
                        <h2 class="experience__number">650+</h2>
                        <span class="experience__description">Costumer <br> Transaction</span>
                    </div>
                </div>

                <div class="experience__img grid">
                    <div class="experience__overlay">
                        <img src="assets/img/experience1.jpg" alt="" class="experience__img-one">
                    </div>

                    <div class="experience__overlay">
                        <img src="assets/img/experience2.jpg" alt="" class="experience__img-two">
                    </div>
                </div>
            </div>
        </section>

        <!--==================== VIDEO ====================-->
        <section class="video section">
            <h2 class="section__title">Video Tour</h2>

            <div class="video__container container">
                <p class="video__description">Find out more with our video of the most beautiful and
                    pleasant products for you.
                </p>

                <div class="video__content">
                    <video id="video-file">
                        <source src="assets/video/cpvideo.mp4" type="video/mp4">
                    </video>

                    <button class="button button--flex video__button" id="video-button">
                        <i class="ri-play-line video__button-icon" id="video-icon"></i>
                    </button>
                </div>
            </div>
        </section>

        <!--==================== PLACES ====================-->
        <section class="place section" id="place">
            <h2 class="section__title">Choose Your Place</h2>

            <div class="place__container container grid">
                <!--==================== PLACES CARD 1 ====================-->
                <div class="place__card">
                    <img src="assets/img/place1.jpg" alt="" class="place__img">

                    <div class="place__content">
                        <span class="place__rating">
                            <i class="ri-star-line place__rating-icon"></i>
                            <span class="place__rating-number">4,8</span>
                        </span>

                        <div class="place__data">
                            <h3 class="place__title">Bali</h3>
                            <span class="place__subtitle">Indonesia</span>
                            <span class="place__price">$2499</span>
                        </div>
                    </div>

                    <button class="button button--flex place__button">
                        <i class="ri-arrow-right-line"></i>
                    </button>
                </div>

                <!--==================== PLACES CARD 2 ====================-->
                <div class="place__card">
                    <img src="assets/img/place2.jpg" alt="" class="place__img">

                    <div class="place__content">
                        <span class="place__rating">
                            <i class="ri-star-line place__rating-icon"></i>
                            <span class="place__rating-number">5,0</span>
                        </span>

                        <div class="place__data">
                            <h3 class="place__title">Bora Bora</h3>
                            <span class="place__subtitle">Polinesia</span>
                            <span class="place__price">$1599</span>
                        </div>
                    </div>

                    <button class="button button--flex place__button">
                        <i class="ri-arrow-right-line"></i>
                    </button>
                </div>

                <!--==================== PLACES CARD 3 ====================-->
                <div class="place__card">
                    <img src="assets/img/place3.jpg" alt="" class="place__img">

                    <div class="place__content">
                        <span class="place__rating">
                            <i class="ri-star-line place__rating-icon"></i>
                            <span class="place__rating-number">4,9</span>
                        </span>

                        <div class="place__data">
                            <h3 class="place__title">Hawaii</h3>
                            <span class="place__subtitle">EE.UU</span>
                            <span class="place__price">$3499</span>
                        </div>
                    </div>

                    <button class="button button--flex place__button">
                        <i class="ri-arrow-right-line"></i>
                    </button>
                </div>

                <!--==================== PLACES CARD 4 ====================-->
                <div class="place__card">
                    <img src="assets/img/place4.jpg" alt="" class="place__img">

                    <div class="place__content">
                        <span class="place__rating">
                            <i class="ri-star-line place__rating-icon"></i>
                            <span class="place__rating-number">4,8</span>
                        </span>

                        <div class="place__data">
                            <h3 class="place__title">Whitehaven</h3>
                            <span class="place__subtitle">Australia</span>
                            <span class="place__price">$2499</span>
                        </div>
                    </div>

                    <button class="button button--flex place__button">
                        <i class="ri-arrow-right-line"></i>
                    </button>
                </div>

                <!--==================== PLACES CARD 5 ====================-->
                <div class="place__card">
                    <img src="assets/img/place5.jpg" alt="" class="place__img">

                    <div class="place__content">
                        <span class="place__rating">
                            <i class="ri-star-line place__rating-icon"></i>
                            <span class="place__rating-number">4,8</span>
                        </span>

                        <div class="place__data">
                            <h3 class="place__title">Hvar</h3>
                            <span class="place__subtitle">Croacia</span>
                            <span class="place__price">$1999</span>
                        </div>
                    </div>

                    <button class="button button--flex place__button">
                        <i class="ri-arrow-right-line"></i>
                    </button>
                </div>
            </div>
        </section>

        <!--==================== SUBSCRIBE ====================-->
        <section class="subscribe section">
            <div class="subscribe__bg">
                <div class="subscribe__container container">
                    <h2 class="section__title subscribe__title">Subscribe Our <br> Newsletter</h2>
                    <p class="subscribe__description">Subscribe to our newsletter and get a
                        special 30% discount.
                    </p>

                    <form action="" class="subscribe__form">
                        <input type="text" placeholder="Enter email" class="subscribe__input">

                        <button class="button">
                            Subscribe
                        </button>
                    </form>
                </div>
            </div>
        </section>

        <!--==================== FOOTER ====================-->
        <footer class="footer section">
            <div class="footer__container container grid">
                <div class="footer__content grid">
                    <div class="footer__data">
                        <h3 class="footer__title">Fortuna</h3>
                        <p class="footer__description">Travel you choose the <br> destination,
                            we offer you the <br> experience.
                        </p>
                        <div>
                            <a href="https://www.facebook.com/" target="_blank" class="footer__social">
                                <i class="ri-facebook-box-fill"></i>
                            </a>
                            <a href="https://twitter.com/" target="_blank" class="footer__social">
                                <i class="ri-twitter-fill"></i>
                            </a>
                            <a href="https://www.instagram.com/" target="_blank" class="footer__social">
                                <i class="ri-instagram-fill"></i>
                            </a>
                            <a href="https://www.youtube.com/" target="_blank" class="footer__social">
                                <i class="ri-youtube-fill"></i>
                            </a>
                        </div>
                    </div>

                    <div class="footer__data">
                        <h3 class="footer__subtitle">About</h3>
                        <ul>
                            <li class="footer__item">
                                <a href="" class="footer__link">About Us</a>
                            </li>
                            <li class="footer__item">
                                <a href="" class="footer__link">Features</a>
                            </li>
                            <li class="footer__item">
                                <a href="" class="footer__link">New & Blog</a>
                            </li>
                        </ul>
                    </div>

                    <div class="footer__data">
                        <h3 class="footer__subtitle">Company</h3>
                        <ul>
                            <li class="footer__item">
                                <a href="" class="footer__link">Team</a>
                            </li>
                            <li class="footer__item">
                                <a href="" class="footer__link">Plan y Pricing</a>
                            </li>
                            <li class="footer__item">
                                <a href="" class="footer__link">Become a member</a>
                            </li>
                        </ul>
                    </div>

                    <div class="footer__data">
                        <h3 class="footer__subtitle">Support</h3>
                        <ul>
                            <li class="footer__item">
                                <a href="" class="footer__link">FAQs</a>
                            </li>
                            <li class="footer__item">
                                <a href="" class="footer__link">Support Center</a>
                            </li>
                            <li class="footer__item">
                                <a href="" class="footer__link">Contact Us</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="footer__rights">
                    <p class="footer__copy">&#169; 2023 AruTeknologi. All rigths reserved.</p>
                    <div class="footer__terms">
                        <a href="#" class="footer__terms-link">Terms & Agreements</a>
                        <a href="#" class="footer__terms-link">Privacy Policy</a>
                    </div>
                </div>
            </div>
        </footer>

        <!--========== SCROLL UP ==========-->
        <a href="#" class="scrollup" id="scroll-up">
            <i class="ri-arrow-up-line scrollup__icon"></i>
        </a>

        <!--=============== SCROLL REVEAL===============-->
        <script src="assets/js/dashboard-scrollreveal.min.js"></script>

        <!--=============== SWIPER JS ===============-->
        <script src="assets/js/dashboard-swiper-bundle.min.js"></script>

        <!--=============== MAIN JS ===============-->
        <script src="assets/js/dashboard-main.js"></script>
</body>

</html>