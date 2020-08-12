<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
    @csrf
</form>
@include('layouts.admin.assets.sidebar')
<div class="main-panel">
    @include('layouts.admin.assets.navbar')
    @yield('content')
    @include('layouts.admin.assets.footer')
</div>

