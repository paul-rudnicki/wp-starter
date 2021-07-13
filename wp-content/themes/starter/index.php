<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Warsztat - Automatyzacja zadań z gulp.js</title>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/dist/css/main.css">
</head>
<body class="home">

<header class="header container">
    <div class="center-content">

        <div class="header__social social">
            <a href="" class="social__icon">
                <i class="fa fa-facebook"></i>
            </a>
            <a href="" class="social__icon">
                <i class="fa fa-twitter"></i>
            </a>
            <a href="" class="social__icon">
                <i class="fa fa-instagram"></i>
            </a>
            <a href="" class="social__icon">
                <i class="fa fa-google-plus"></i>
            </a>
            <a href="" class="social__icon">
                <i class="fa fa-youtube-play"></i>
            </a>
        </div>

        <a href="/" class="header__logo">Agency</a>

        <div class="header__search">
            <form action="/search">
                <input type="text" class="header__search-field form-field form-field--rounded form-field--small">
            </form>
        </div>

        <nav class="nav">
            <ul class="nav__list">
                <li class="nav__item">
                    <a href="index.html" class="nav__link nav__link--active">Home</a>
                </li>
                <li class="nav__item">
                    <a href="" class="nav__link">Oferta</a>
                </li>
                <li class="nav__item">
                    <a href="" class="nav__link">Portfolio</a>
                </li>
                <li class="nav__item">
                    <a href="" class="nav__link">FAQ</a>
                </li>
                <li class="nav__item">
                    <a href="" class="nav__link">Kontakt</a>
                </li>
            </ul>
        </nav>

    </div>
</header>


<div class="slider">
    <ul class="bxslider">
        <li class="slider__slide" style="background-image: url(uploads/slider1.jpg);">
            <div class="slider__text">
                <h3 class="slider__heading">Stworzymy Twoją markę</h3>
                <a href="#" class="slider__link">Dowiedz się więcej</a>
            </div>
        </li>
        <li style="background-image: url(uploads/slider2.jpg);">
            <div class="slider__text">
                <h3 class="slider__heading">Od pomysłu<br>po gotowe rozwiązania</h3>
                <a href="#" class="slider__link">Zobacz jak to działa</a>
            </div>
        </li>
        <li style="background-image: url(uploads/slider3.jpg);">
            <div class="slider__text">
                <h3 class="slider__heading">Tworzymy z pasją</h3>
                <a href="#" class="slider__link">Zobacz proces kreatywny</a>
            </div>
        </li>
        <li style="background-image: url(uploads/slider4.jpg);">
            <div class="slider__text">
                <h3 class="slider__heading">Służymy pomocą na każdym<br>etapie realizacji</h3>
                <a href="#" class="slider__link">Dowiedz się więcej</a>
            </div>
        </li>
        <li style="background-image: url(uploads/slider5.jpg);">
            <div class="slider__text">
                <h3 class="slider__heading">Bądź widoczny w krótkim czasie</h3>
                <a href="#" class="slider__link">Dlaczego to możliwe</a>
            </div>
        </li>
    </ul>
</div>

<section class="content container">
    <div class="center-content">

        <h2 class="page-title heading heading--x-large"><span>Slider obrazów</span></h2>

        <ul class="projects">
            <li class="projects__item">
                <div class="projects__thumb">
                    <img src="uploads/project-1-thumb.jpg" alt="" class="projects__pic">
                    <a href="uploads/project-1.jpg" class="projects__link projects__link">
                        <i class="fa fa-search"></i> Zobacz
                    </a>
                </div>
            </li>
            <li class="projects__item">
                <div class="projects__thumb">
                    <img src="uploads/project-5-thumb.jpg" alt="" class="projects__pic">
                    <a href="uploads/project-5.jpg" class="projects__link projects__link">
                        <i class="fa fa-search"></i> Zobacz
                    </a>
                </div>
            </li>
            <li class="projects__item">
                <div class="projects__thumb">
                    <img src="uploads/project-2-thumb.jpg" alt="" class="projects__pic">
                    <a href="uploads/project-2.jpg" class="projects__link projects__link">
                        <i class="fa fa-search"></i> Zobacz
                    </a>
                </div>
            </li>
            <li class="projects__item">
                <div class="projects__thumb">
                    <img src="uploads/project-4-thumb.jpg" alt="" class="projects__pic">
                    <a href="uploads/project-4.jpg" class="projects__link projects__link">
                        <i class="fa fa-search"></i> Zobacz
                    </a>
                </div>
            </li>
            <li class="projects__item">
                <div class="projects__thumb">
                    <img src="uploads/project-3-thumb.jpg" alt="" class="projects__pic">
                    <a href="uploads/project-3.jpg" class="projects__link projects__link">
                        <i class="fa fa-search"></i> Zobacz
                    </a>
                </div>
            </li>
            <li class="projects__item">
                <div class="projects__thumb">
                    <img src="uploads/project-6-thumb.jpg" alt="" class="projects__pic">
                    <a href="uploads/project-6.jpg" class="projects__link projects__link">
                        <i class="fa fa-search"></i> Zobacz
                    </a>
                </div>
            </li>
        </ul>

    </div>
</section>

<footer class="footer">
    <div class="footer__social social">
        <a href="" class="social__link">
            <span class="social__icon social__icon--full">
                <i class="fa fa-facebook"></i>
            </span>
            <span class="social__text">Facebook</span>
        </a>
        <a href="" class="social__link">
            <span class="social__icon social__icon--full">
                <i class="fa fa-twitter"></i>
            </span>
            <span class="social__text">Twitter</span>
        </a>
        <a href="" class="social__link">
            <span class="social__icon social__icon--full">
                <i class="fa fa-instagram"></i>
            </span>
            <span class="social__text">Instagram</span>
        </a>
        <a href="" class="social__link">
            <span class="social__icon social__icon--full">
                <i class="fa fa-google-plus"></i>
            </span>
            <span class="social__text">Google Plus</span>
        </a>
        <a href="" class="social__link">
            <span class="social__icon social__icon--full">
                <i class="fa fa-youtube-play"></i>
            </span>
            <span class="social__text">Youtube</span>
        </a>
    </div>

    <div class="footer__copyright">
        <p class="footer__text">Agency 2016</p>
        <p class="footer__text">&copy; All rights reserved.</p>
    </div>
</footer>

<script src="<?php echo get_template_directory_uri() ?>/dist/js/all.js"></script>

</body>
</html>