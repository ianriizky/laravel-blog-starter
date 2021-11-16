<nav class="navbar navbar-expand-lg main-navbar">
    <form class="form-inline mr-auto">
        <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
        </ul>
    </form>

    <ul class="navbar-nav navbar-right">
        <li class="dropdown">
            <a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                <img alt="image" src="https://www.gravatar.com/avatar/@auth{{ md5(Auth::user()->email) }}@endauth" class="rounded-circle mr-1">
                <div class="d-sm-none d-lg-inline-block">@auth{{ Auth::user()->name }} @else Administrator @endauth</div>
            </a>

            <div class="dropdown-menu dropdown-menu-right">
                <div class="dropdown-title">
                    <span>🇮🇩 @auth {{ Auth::user()->phone }} @else Phone Number @endauth</span>
                </div>

                <div class="dropdown-divider"></div>

                @if (Auth::check() && Route::has('logout'))
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <a href="{{ route('logout') }}" class="dropdown-item has-icon text-danger" onclick="event.preventDefault(); this.closest('form').submit();">
                            <i class="fas fa-sign-out-alt"></i> {{ __('Log Out') }}
                        </a>
                    </form>
                @endif
            </div>
        </li>
    </ul>
</nav>
