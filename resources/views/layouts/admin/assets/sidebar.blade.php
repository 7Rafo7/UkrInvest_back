<div class="sidebar" data-color="orange">
    <div class="logo">
        <a href="" class="simple-text logo-normal text-center">
            {{ __('UkrInvest Admin Panel') }}
        </a>
    </div>
    <div class="sidebar-wrapper" id="sidebar-wrapper">
        <ul class="nav">
            <li class="@if ($activePage ?? '' == 'home') active @endif">
                <a href="{{ route('admin.main.index') }}">
                    <i class="fa fa-list"></i>
                    <p>Main</p>
                </a>
            </li>
{{--            <li>--}}
{{--                <a data-toggle="collapse" href="#laravelExamples">--}}
{{--                    <i class="now-ui-icons users_single-02"></i>--}}
{{--                    <p>--}}
{{--                        Users--}}
{{--                        <b class="caret"></b>--}}
{{--                    </p>--}}
{{--                </a>--}}
{{--                <div class="collapse hide" id="laravelExamples">--}}
{{--                    <ul class="nav">--}}
{{--                        <li class="@if ($activePage ?? '' == 'users') active @endif">--}}
{{--                            <a href="">--}}
{{--                                <i class="now-ui-icons design_bullet-list-67"></i>--}}
{{--                                <p> Users list </p>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                                                <li class="@if ($activePage ?? '' == 'deleted') active @endif">--}}
{{--                                                    <a href="">--}}
{{--                                                        <i class="now-ui-icons design_bullet-list-67"></i>--}}
{{--                                                        <p> Users list </p>--}}
{{--                                                    </a>--}}
{{--                                                </li>--}}

{{--                                                <li class="@if ($activePage ?? '' == 'profile') active @endif">--}}
{{--                                                    <a href="#">--}}
{{--                                                        <i class="now-ui-icons users_single-02"></i>--}}
{{--                                                        <p> Admin profile </p>--}}
{{--                                                    </a>--}}
{{--                                                </li>--}}
{{--                    </ul>--}}
{{--                </div>--}}
{{--            </li>--}}
            <li class="@if ($activePage ?? '' == 'gallery') active @endif">
                <a href="{{ route('admin.gallery.index') }}">
                    <i class="fa fa-list"></i>
                    <p> Gallery </p>
                </a>
            </li>
            <li class="@if ($activePage ?? '' == 'links') active @endif">
                <a href="{{ route('admin.links.index') }}">
                    <i class="fa fa-list"></i>
                    <p> Links </p>
                </a>
            </li>
        </ul>
    </div>
</div>
