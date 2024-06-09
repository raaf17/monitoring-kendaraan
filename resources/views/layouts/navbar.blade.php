<div class="navbar-bg"></div>
<nav class="navbar navbar-expand-lg main-navbar">
    <form class="form-inline mr-auto">
        <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
        </ul>
    </form>
    <ul class="navbar-nav navbar-right">
        <li class="dropdown">
            <a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                <div class="d-sm-none d-lg-inline-block mr-2"> <b>Selamat Datang, {{ auth()->user()->username }}</b></div>
                <img class="img-profile rounded-circle" src="{{ asset('images/2.jpg') }}">
            </a>
            <div class="dropdown-menu dropdown-menu-right">
                <form class="form">
                    <a href="{{ route('profile') }}" class="dropdown-item has-icon"><i class="far fa-user"></i> Profile</a>
                    <div class="dropdown-divider"></div>
                    <button type="button" class="dropdown-item has-icon text-danger" style="display: flex; align-items: center" onclick="document.location.href='{{ route('logout') }}'"><i class="fas fa-sign-out-alt mt-2"></i> <b>Logout</b></button>
                </form>
            </div>
        </li>
    </ul>
</nav>