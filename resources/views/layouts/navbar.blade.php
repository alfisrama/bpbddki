<nav class="navbar navbar-default navbar-fixed-top">
    <div class="brand">
        <a href="/"><img src="{{ asset('admin/assets/img/logo-dark.png') }}"></a>
    </div>
    <div class="container-fluid">
        <div class="navbar-btn">
            <button type="button" class="btn-toggle-fullwidth"><i class="lnr lnr-arrow-left-circle"></i></button>
        </div>
        <div class="navbar-form navbar-left input-sm">
            
        </div>
        <div id="navbar-menu">
            <ul class="nav navbar-nav navbar-right">
                @if (Auth::check())
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <!-- <img src="{{ asset('admin/assets/img/user.png') }}" class="img-circle" alt="Avatar">  -->
                        <i class="lnr lnr-user"></i>
                        <span>{{ Auth::user()->name }}</span> 
                        <i class="icon-submenu lnr lnr-chevron-down"></i>
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                <i class="lnr lnr-exit"></i> <span>{{ __('Logout') }}</span>
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </li>
                    </ul>
                </li>
                @else
                <li class="nav-item">
                    <a class="nav-link" href="{{url('logout')}}">
                        <!-- <img src="{{ asset('admin/assets/img/user.png') }}" class="img-circle" alt="Avatar">  -->
                        <i class="lnr lnr-user"></i>
                        <span>{{ __('Login') }}</span></a>
                </li>
                @endif
            </ul>
        </div>
    </div>
</nav>
