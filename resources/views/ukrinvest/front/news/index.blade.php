@extends('layouts.front.app')

@section('content')
<!--        header- skizb-->
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

<!--        headeri verj-->
<!--        newsi skizb-->
<div class="news-section">
    <div class="section-1">
        <div class="news-card-section-1">
            <h2>28 May, 2019</h2>
            <h2>Lorem ipsum.</h2>
        </div>
        <div class="news-card-section-2">
            <img src="{{asset('images/front/news.jpg')}}" alt="">
        </div>
        <div class="news-card-section-3">
            <p>Lorem ipsum dolor sit amet,
                consectetur adipisicing elit.
                Aperiam consequuntur enim
                exercitationem facere nobis
                perspiciatis porro quam quidem
                suscipit tenetur! Ad aspernatur
                autem consequatur esse mollitia
                nam numquam odio quam ratione
                voluptatum? Asperiores at atque
                autem corporis cumque distinctio
                dolores eaque esse eum exercitationem
                id, illo inventore quidem tempora, totam!</p>
        </div>
        <div class="news-card-section-4">
            <img src="{{ asset('images/front/more.png') }}" alt="">
        </div>
    </div>
</div>
<!--        newsi verj-->

<!--        paginationi skizb-->
<div class="pagination">
    <div class="section-1">
        <img src="{{ asset('images/front/page_arrow_left.png') }}" alt="">
        <a href="">1</a>
        <a href="">2</a>
        <a href="">3</a>
        <a href="">4</a>
        <img src="{{ asset('images/front/page_arrow_right.png') }}" alt="">
    </div>
</div>
<!--       paginationi skizb verj-->


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
