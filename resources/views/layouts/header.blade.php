<header class='app-header navbar'>
    <a class="navbar-brand" href="#" style='background-image:none;'>
        <img src="" width="30" height="30" class="d-inline-block align-top" alt="" />Laravel Demo
    </a>
    <ul class="nav">
        @guest
            <li class="nav-item"><a class='nav-link' href="{{ route('login') }}">Login</a></li>
            <li class="nav-item"><a class='nav-link' href="{{ route('register') }}">Register</a></li>
        @else
            <li class="nav-item"><a class='nav-link' href="{{ route('admin.companies.index') }}">Companies</a></li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle"  id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    {{ Auth::user()->name }}
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                             document.getElementById('logout-form').submit();">Logout</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                </div>
            </li>
        @endguest
    </ul>
</header>
