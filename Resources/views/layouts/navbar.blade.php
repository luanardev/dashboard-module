<!-- Navbar -->
<nav class="main-header navbar navbar-expand-md navbar-light navbar-white">


    <ul class="navbar-nav">
        <li class="nav-item">
            @php $logo = Organization::get('logo'); @endphp
            @if(!is_null($logo)  )
                <img src="{{ asset("storage/{$logo}") }}" class="img-fluid" style="height:80px"/>
            @else
                <span class="h3 brand-text font-weight-light">{{config('app.name')}}</span>
            @endif
        </li>

    </ul>


    <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse"
            aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse order-3" id="navbarCollapse">

        <ul class="navbar-nav  ml-auto">

            @auth

                <li class="nav-item dropdown">
                    <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                       class="nav-link dropdown-toggle">
                        {{ Auth::user()->name }}
                    </a>
                    <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">
                        <li class="dropdown-submenu dropdown-hover">
                            <a tabindex="-1" href="{{route('dashboard')}}" class="dropdown-item">
                                Dashboard
                            </a>
                        </li>
                        
                        <li class="dropdown-submenu dropdown-hover">
                            <a tabindex="-1" href="#" class="dropdown-item"
                               onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                Sign Out
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </li>

                    </ul>
                </li>
            @endauth


            <li class="nav-item">
                <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                    <i class="fas fa-expand-arrows-alt"></i>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
                    <i class="fas fa-th-large"></i>
                </a>
            </li>
        </ul>

    </div>

</nav>
