<div class="navbar-bg"></div>
<nav class="navbar navbar-expand-lg main-navbar">
    <form class="form-inline mr-auto">
        <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
        </ul>
    </form>
    <ul class="navbar-nav navbar-right">
        <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
            <img alt="image" src="{{ asset('images/2.jpg') }}" class="rounded-circle mr-1">
            <div class="d-sm-none d-lg-inline-block"><strong>Selamat Datang {{ auth()->user()->username }}</strong></div></a>
            <div class="dropdown-menu dropdown-menu-right">
                <a href="{{ route('profile') }}" class="dropdown-item has-icon"><i class="far fa-user"></i> Profile</a>
                <div class="dropdown-divider"></div>
                <button type="button" class="dropdown-item has-icon text-danger" onclick="document.location.href='{{ route('logout') }}'"><i class="fas fa-sign-out-alt mt-2"></i> <b>Logout</b></button>
            </div>
        </li>
    </ul>
</nav>