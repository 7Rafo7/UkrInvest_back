@extends('layouts.front.app')

@section('content')
    <!--  header-start  -->

    <div class="header">
        <div class="section section-1">
            <img src="{{ asset('images/front/equipment.png') }}" alt="">
            <h2>UkrInvest</h2>
        </div>

        <div class="section section-2 no-mobile no-tablet">
            <ul>
                <li><a class="animated-link" href="#home">Home</a></li>
                <li><a class="animated-link" href="#mission">Missions</a></li>
                <li><a class="animated-link" href="{{ route('projects.index') }}">Projects</a></li>
                <li><a class="animated-link" href="#services">Services</a></li>
                <li><a class="animated-link" href="{{ route('news.index') }}">News</a></li>
                <li><a class="animated-link" href="#contact">Contacts</a></li>
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
                        <li><a class="animated-link" href="#home">Home</a></li>
                        <li><a class="animated-link" href="#mission">Missions</a></li>
                        <li><a class="animated-link" href="">Projects</a></li>
                        <li><a class="animated-link" href="#services">Services</a></li>
                        <li><a class="animated-link" href="">News</a></li>
                        <li><a class="animated-link" href="#contact">Contacts</a></li>
                    </ul>
                </div>

            </div>
        </div>

    </div>
    <!--  header-end-->

    <!--        headeri taki nkari skizb-->
    <div class="home-banner" id="home">
        <div class="section section-1">
            @if(!empty($allData['facebook']))
            <a href="{{ $allData['facebook'] }}"><i class="fa fa-facebook-f"></i></a>
            @else
                <a href="#"><i class="fa fa-facebook-f"></i></a>
            @endif
            @if(!empty($allData['instagram']))
            <a href="{{ $allData['instagram'] }}"><i class="fa fa-instagram"></i></a>
            @else
            <a href="#"><i class="fa fa-instagram"></i></a>
            @endif
            @if(!empty($allData['youtube']))
            <a href="{{ $allData['youtube'] }}"><i class="fa fa-youtube-play"></i></a>
            @else
            <a href="#"><i class="fa fa-youtube-play"></i></a>
            @endif
        </div>
        <div class="section section-2">
            <h1>SMART CITY & TRAFFIC CONTROL</h1>
        </div>
        <div class="section section-3">
            <div class="slider">
                <a class="animated-link" href="#mission"><img class="slider-arrow" src="{{ asset('images/front/slider-arrow.png') }}" alt=""></a>
                <!--            <div class="ketik-section">-->
                <!--                <div class="ketik-white"></div>-->
                <!--                <div class="ketik"></div>-->
                <!--                <div class="ketik"></div>-->
                <!--            </div>-->
            </div>
        </div>
    </div>
    <!--        headeri taki nkari verj-->
    <!--        Missioni descriptioni skizb-->
    <div class="mission-description" id="mission">
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
                    temporibus <span id="dots">...</span><span id="more">
                    lorem ipsum dolor sit amet, consectetur adipisicing
                    elit. Accusamus aliquid asperiores commodi, consequatur
                    dignissimos eum, illum ipsa ipsam iure labore molestias
                    neque quaerat quam repudiandae similique sunt vel vero
                    voluptate! Lorem ipsum dolor sit amet, consectetur
                    adipisicing elit. Amet aspernatur beatae blanditiis
                    cupiditate delectus doloremque dolores eligendi
                    excepturi explicabo fugit harum impedit, in ipsam
                    ipsum laboriosam minima modi nam necessitatibus neque
                    nobis nostrum odio optio pariatur perferendis placeat
                    quae qui quos repellat repellendus repudiandae sapiente
                    sit velit vitae. Laboriosam, ut.</span></p>
            </div>
            <div class="section section-3">
                <a onclick="readMore()" id="moreBtn">read more <i>&#8594</i></a>
            </div>
        </div>
    </div>
    <!--        Missioni descriptioni verj-->
    <!--        services masi szkizb-->
    <div class="home-services" id="services">
        <div class="section section-1">
            <h2>SERVICES</h2>
        </div>
        <div class="section section-2">
            <div class="services-card">
                <div class="card card-1">
                    <img src="{{ asset('images/front/light.jpg') }}" alt="">
                    <img src="{{ asset('images/front/light.png') }}" alt="">
                </div>
                <h4>TRAFFIC LIGHTS</h4>
            </div>
            <div class="services-card">
                <div class="card card-2">
                    <img src="{{ asset('images/front/sign.jpg') }}" alt="">
                    <img src="{{ asset('images/front/sigh.png') }}" alt="">
                </div>
                <h4>ROAD SIGNS</h4>
            </div>
            <div class="services-card">
                <div class="card card-3">
                    <img src="{{ asset('images/front/marks.jpg') }}" alt="">
                    <img src="{{ asset('images/front/marks.png') }}" alt="">
                </div>
                <h4>ROAD MARKS</h4>
            </div>
            <div class="services-card">
                <div class="card card-4">
                    <img src="{{ asset('images/front/equipment.jpg') }}" alt="">
                    <img src="{{ asset('images/front/equipment.png') }}" alt="">
                </div>
                <h4>EQUIPMENT</h4>
            </div>
        </div>
    </div>
    <!--        services masi verj-->

    <!--        home-gallery-i skizb-->
    <div class="home-projects-gallery">
        <div class="section-1">
            <h2>Featured Projects</h2>
            <p>Lorem ipsum dolor sit amet, consectetur.</p>
        </div>
        @if(!empty($galleryItems))
        <div class="gallery-slider">
            <div class="swiper-container">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">
                    <!-- Slides -->
                    @foreach($galleryItems as $galleryItem)
                        @php/**@var \App\Models\Slider $galleryItem */ @endphp
                    <div class="swiper-slide">
                        <div class="card-item">
                            <div class="card__img">
                                <img src="{{ $galleryItem['img'] }}" alt="card-img">
                            </div>
                            <div class="card__info closed" data-card="{{ $galleryItem['id'] }}">
                                <div class="card__info-body">
                                    <h4>{{ $galleryItem['title'] }}</h4>
                                    <p>{{ $galleryItem['description'] }}</p>
                                    <div class="card__info-more" data-more="{{ $galleryItem['id'] }}">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <!-- If we need pagination -->
                <div class="swiper-pagination"></div>

                <!-- If we need navigation buttons -->
{{--                            <div class="swiper-button-prev"></div>--}}
{{--                            <div class="swiper-button-next"></div>--}}

                <!-- If we need scrollbar -->
                <!--            <div class="swiper-scrollbar"></div>-->
            </div>
        </div>
        @else
            <h2>Coming soon</h2>
        @endif

    </div>
    <!--        home-gallery-i verj-->
    <!--        home-news-i skizb-->
    <div class="news-press">
        <div class="news-section-1">
            <h2>News & Press</h2>
        </div>
        <div class="news-section-2">
            <div class="section-1">
                <div class="news-card">
                    <div class="date">
                        <h3>28 MAY, 2019</h3>
                    </div>
                    <div class="content">
                        <h3>Lorem ipsum.</h3>
                        <p>Lorem ipsum dolor sit amet,
                            consectetur adipisicing elit.
                        </p>
                    </div>
                    <div class="icon">
                        <i class="fa fa-share-alt"></i>
                    </div>
                </div>
                <div class="news-card">
                    <div class="date">
                        <h3>28 MAY, 2019</h3>
                    </div>
                    <div class="content">
                        <h3>Lorem ipsum.</h3>
                        <p>Lorem ipsum dolor sit amet,
                            consectetur adipisicing elit.
                        </p>
                    </div>
                    <div class="icon">
                        <i class="fa fa-share-alt"></i>
                    </div>
                </div>
            </div>
            <div class="section-2">
                @if(!empty($allData['twitter']))
                <a href="{{ $allData['twitter'] }}"><i class="fa fa-twitter"></i></a>
                @else
                <a href=""><i class="fa fa-twitter"></i></a>
                @endif
                @if(!empty($allData['facebook']))
                <a href="{{ $allData['facebook'] }}"><i class="fa fa-facebook-f"></i></a>
                @else
                <a href=""><i class="fa fa-facebook-f"></i></a>
                @endif
                @if(!empty($allData['gmail']))
                <a href="{{ $allData['gmail'] }}"><i class="fa fa-envelope"></i></a>
                @else
                <a href=""><i class="fa fa-envelope"></i></a>
                @endif
            </div>
        </div>
        <div class="news-section-3">
            <div class="press">
                <div class="press-card">
                    <div class="card-img">
                        <img src="{{ asset('images/front/road-2.jpg') }}" alt="">
                    </div>
                    <div class="card-content">
                        <h5>28 May, 2019</h5>
                        <h2>Lorem ipsum.</h2>
                        <p>Lorem ipsum dolor sit amet,
                            consectetur adipisicing elit.
                            Molestias, quibusdam.</p>
                    </div>
                    <div class="card-btn">
                        <img src="{{ asset('images/front/more.png') }}" alt="">
                    </div>
                </div>
                <div class="press-card">
                    <div class="card-img">
                        <img src="{{ asset('images/front/road-1.jpg') }}" alt="">
                    </div>
                    <div class="card-content">
                        <h5>28 May, 2019</h5>
                        <h2>Lorem ipsum.</h2>
                        <p>Lorem ipsum dolor sit amet,
                            consectetur adipisicing elit.
                            Molestias, quibusdam.</p>
                    </div>
                    <div class="card-btn">
                        <img src="{{ asset('images/front/more.png') }}" alt="">
                    </div>
                </div>
                <div class="press-card">
                    <div class="card-img">
                        <img src="{{ asset('images/front/road-2.jpg') }}" alt="">
                    </div>
                    <div class="card-content">
                        <h5>28 May, 2019</h5>
                        <h2>Lorem ipsum.</h2>
                        <p>Lorem ipsum dolor sit amet,
                            consectetur adipisicing elit.
                            Molestias, quibusdam.</p>
                    </div>
                    <div class="card-btn">
                        <img src="{{ asset('images/front/more.png') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--        home-news-i verj-->


    <!--        contacti skizb-->
    <div class="contact" id="contact">
        <div class="info-section">
            <h3>Contacts</h3>
            <ul>
                <li>+374 10 128471</li>
                <li>info@ukrinvest.com</li>
                <li>111 Address</li>
                <li>Yerevan 0000,</li>
                <li>Armenia</li>
            </ul>
        </div>
        <div class="input-section">
            <form action=""></form>
            <label for="name"></label>
            <input class="input" type="text" placeholder="Name*" id="name">
            <label for="email"></label>
            <input class="input" type="text" placeholder="Email*" id="email">
            <label for="subject"></label>
            <input class="input" type="text" placeholder="Subject*" id="subject">
            <label for="text"></label>
            <textarea name="Text" id="text" rows="50"></textarea>
        </div>
        <div class="contact-btn">
            <button class="btn send-btn" type="submit">Send</button>
        </div>
    </div>
    <!--        contacti verj-->

    <!--        modali skizb-->
    <div class="modal">
        <div class="section-1">
            @if(!empty($allData['facebook']))
                <a href="{{ $allData['facebook'] }}"><i class="fa fa-facebook-f"></i></a>
            @else
                <a href="#"><i class="fa fa-facebook-f"></i></a>
            @endif
            @if(!empty($allData['instagram']))
                <a href="{{ $allData['instagram'] }}"><i class="fa fa-instagram"></i></a>
            @else
                <a href="#"><i class="fa fa-instagram"></i></a>
            @endif
            @if(!empty($allData['youtube']))
                <a href="{{ $allData['youtube'] }}"><i class="fa fa-youtube-play"></i></a>
            @else
                <a href="#"><i class="fa fa-youtube-play"></i></a>
            @endif
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
