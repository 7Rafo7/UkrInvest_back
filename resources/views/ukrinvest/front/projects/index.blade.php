@extends('layouts.front.app')

@section('content')
    <div class="header">
        <div class="section section-1">
            <img src="{{ asset('images/front/equipment.png') }}" alt="">
            <h2>UkrInvest</h2>
        </div>

        <div class="section section-2 no-mobile no-tablet">
            <ul>
                <li><a class="animated-link" href="{{ route('home.index') }}">Home</a></li>
                <li><a class="animated-link" href="">Missions</a></li>
                <li><a class="animated-link" href="{{ route('projects.index') }}">Projects</a></li>
                <li><a class="animated-link" href="">Services</a></li>
                <li><a class="animated-link" href="{{ route('news.index') }}">News</a></li>
                <li><a class="animated-link" href="">Contacts</a></li>
            </ul>
        </div>

        <div class="section section-3 no-mobile no-tablet">
            <p>EN</p>
            <!--        <div class="language-select">-->
            <!--            <select name="lang" id="lang">-->
            <!--                <option value="en">EN</option>-->
            <!--                <option value="am">AM</option>-->
            <!--                <option value="ru">RU</option>-->
            <!--            </select>-->
            <!--        </div>-->
        </div>

        <div class="mobile-burger no-laptop no-desktop" data-modal="mobile-menu">
            <span></span>
            <span></span>
            <span></span>
        </div>

        <div class="mobile-menu-wrapper hide no-laptop no-desktop" id="mobile-menu">
            <div class="mobile-menu">
                <div class="mobile-section-1">
                    <img src="{{ asset('images/front/equipment.png') }}" alt="">
                    <h2>UkrInvest</h2>
                </div>
                <div class="mobile-section-2">
                    <ul>
                        <li><a class="animated-link" href="{{ route('home.index') }}">Home</a></li>
                        <li><a class="animated-link" href="">Missions</a></li>
                        <li><a class="animated-link" href="{{ route('projects.index') }}">Projects</a></li>
                        <li><a class="animated-link" href="">Services</a></li>
                        <li><a class="animated-link" href="{{ route('news.index') }}">News</a></li>
                        <li><a class="animated-link" href="">Contacts</a></li>
                    </ul>
                </div>

            </div>
        </div>

    </div>

    <!--    headeri verj-->

    <!--    banneri skizb-->
    <div class="project-banner">
        <div class="section-1">
            <h1>TRAFFIC LIGHT CONTROL SYSTEM</h1>
        </div>
    </div>
    <!--    banneri verj-->

    <!--    abouti skizb-->
    <div class="about-us">
        <div class="sections">
            <div class="section section-1">
                <img src="{{ asset('images/front/sigh.png') }}" alt="">
                <h3>Our Mission</h3>
            </div>
            <div class="section section-2">
                <p>Lorem ipsum dolor sit amet,
                    consectetur adipisicing elit.
                    At, eaque, vel. Aperiam cupiditate
                    debitis deserunt eius omnis praesentium
                    quae sint. Consequatur et ex illum nam
                    quidem quis? A, minus, quia! Lorem ipsum
                    dolor sit amet, consectetur adipisicing
                    elit. Amet laudantium nesciunt quos ullam!
                    Delectus eveniet maiores natus porro
                    similique! Dicta doloribus ex illo quidem.
                    Aliquid distinctio dolorem eius repellendus
                    temporibus.</p>
            </div>
            <div class="section section-3">
                <a href="">read more <i>&#8594</i></a>
            </div>
        </div>
    </div>
    <!--    abouti verj-->

    <!--    gallery-i skizb-->
    <div class="projects-gallery">
        <div class="section-1">
            <h2>Gallery</h2>
            <p>Lorem ipsum dolor sit amet, consectetur.</p>
        </div>
        <div class="gallery-slider">
            <div class="swiper-container">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">
                    <!-- Slides -->
                    <div class="swiper-slide">
                        <div class="card-item">

                            <div class="card__img">
                                <img src="{{ asset('images/front/gallery-traffic-1.jpg') }}" alt="card-img">
                            </div>

                            <div class="card__info closed" data-card="1">
                                <div class="card__info-body">
                                    <h4>TEST STR.</h4>
                                    <p>Lorem ipsum dolor sit amet,
                                        consectetur adipisicing elit.
                                        Rem, similique.
                                    </p>

                                    <div class="card__info-more" data-more="1">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card-item">

                            <div class="card__img">
                                <img src="{{ asset('images/front/gallery-traffic-2.jpg') }}" alt="card-img">
                            </div>

                            <div class="card__info closed" data-card="3">
                                <div class="card__info-body">
                                    <h4>TEST STR.</h4>
                                    <p>Lorem ipsum dolor sit amet,
                                        consectetur adipisicing elit.
                                        Rem, similique.
                                    </p>

                                    <div class="card__info-more" data-more="3">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card-item">

                            <div class="card__img">
                                <img src="{{ asset('images/front/gallery-traffic-2.jpg') }}" alt="card-img">
                            </div>

                            <div class="card__info closed" data-card="2">
                                <div class="card__info-body">
                                    <h4>TEST STR.</h4>
                                    <p>Lorem ipsum dolor sit amet,
                                        consectetur adipisicing elit.
                                        Rem, similique.
                                    </p>

                                    <div class="card__info-more" data-more="2">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card-item">

                            <div class="card__img">
                                <img src="{{ asset('images/front/gallery-traffic-3.jpg') }}" alt="card-img">
                            </div>

                            <div class="card__info closed" data-card="4">
                                <div class="card__info-body">
                                    <h4>TEST STR.</h4>
                                    <p>Lorem ipsum dolor sit amet,
                                        consectetur adipisicing elit.
                                        Rem, similique.
                                    </p>

                                    <div class="card__info-more" data-more="4">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card-item">

                            <div class="card__img">
                                <img src="{{ asset('images/front/gallery-traffic-4.jpg') }}" alt="card-img">
                            </div>

                            <div class="card__info closed" data-card="5">
                                <div class="card__info-body">
                                    <h4>TEST STR.</h4>
                                    <p>Lorem ipsum dolor sit amet,
                                        consectetur adipisicing elit.
                                        Rem, similique.
                                    </p>

                                    <div class="card__info-more" data-more="5">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card-item">

                            <div class="card__img">
                                <img src="{{ asset('images/front/gallery-traffic-2.jpg') }}" alt="card-img">
                            </div>

                            <div class="card__info closed" data-card="6">
                                <div class="card__info-body">
                                    <h4>TEST STR.</h4>
                                    <p>Lorem ipsum dolor sit amet,
                                        consectetur adipisicing elit.
                                        Rem, similique.
                                    </p>

                                    <div class="card__info-more" data-more="6">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>


                </div>
                <!-- If we need pagination -->
                <div class="swiper-pagination"></div>

                <!-- If we need navigation buttons -->
                <!--            <div class="swiper-button-prev"></div>-->
                <!--            <div class="swiper-button-next"></div>-->

                <!-- If we need scrollbar -->
                <!--            <div class="swiper-scrollbar"></div>-->
            </div>

        </div>

    </div>
    <!--    gallery-i verj-->

    <!--        modali skizb-->
    <div class="modal">
        <div class="section-1">
            <a href="#"><i class="fa fa-facebook-f"></i></a>
            <a href="#"><i class="fa fa-instagram"></i></a>
            <a href="#"><i class="fa fa-youtube-play"></i></a>
        </div>
    </div>
    <!--        modali verj-->
    <!--        footeri skizb-->
    <div class="footer">
        <div class="section-1">
            <div class="section-1-ul">
                <ul>
                    <li><a href="">About</a></li>
                    <li><a href="">FAQ</a></li>
                    <li><a href="">CONTACT US</a></li>
                    <li><a href="">Carriers</a></li>
                    <li><a href="">Terms & conditions</a></li>
                </ul>
            </div>
            <div class="section-1-ul">
                <ul>
                    <li><a href="">Adventury types</a></li>
                    <li><a href="">Destinations</a></li>
                    <li><a href="">Seasons</a></li>
                    <li><a href="">Artists fellowship</a></li>
                </ul>
            </div>
            <div class="section-1-ul">
                <ul>
                    <li><a href="">Adventury types</a></li>
                    <li><a href="">Destinations</a></li>
                    <li><a href="">Seasons</a></li>
                    <li><a href="">Artists fellowship</a></li>
                </ul>
            </div>
        </div>
        <div class="section-2">
            <p>&copy; 2019 UkrInvest - All rights reserved</p>
        </div>
    </div>
    <!--        footeri verj-->

@endsection
