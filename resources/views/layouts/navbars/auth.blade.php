<div class="sidebar" data-color="white" data-active-color="danger">
    <div class="logo">
        <a href="http://www.creative-tim.com" class="simple-text logo-mini">
            <div class="logo-image-small">
                <img src="{{ asset('paper') }}/img/logo-small.png">
            </div>
        </a>
        <a href="http://www.creative-tim.com" class="simple-text logo-normal">
            {{ __('Twelve Cafe') }}
        </a>
    </div>
    <div class="sidebar-wrapper">
        <ul class="nav">
            <li class="{{ $elementActive == 'dashboard' ? 'active' : '' }}">
                <a href="{{ route('home') }}">
                    <i class="nc-icon nc-bank"></i>
                    <p>{{ __('Dashboard') }}</p>
                </a>
            </li>
            <ul class="nav">
                <li class="{{ $elementActive == 'reservation' ? 'active' : '' }}">
                    <a href="{{ route('reservation.index') }}">
                        <i class="nc-icon nc-tile-56"></i>
                        <p>{{ __('Reservation') }}</p>
                    </a>
                </li>
            </ul>
        </ul>
    </div>
</div>
