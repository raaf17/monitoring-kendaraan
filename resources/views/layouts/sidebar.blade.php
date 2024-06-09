<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="{{ route('dashboard') }}">Monitoring Kendaraan</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="{{ route('dashboard') }}">MK</a>
        </div>
        
        <ul class="sidebar-menu">
            <li class="menu-header">Main</li>
            
            <li class="nav-item {{ $title === 'Dashboard' ? 'active' : ''}}">
                <a href="{{ route('dashboard') }}" class="nav-link"><i class="fas fa-fire"></i><span>Dashboard</span></a>
            </li>
            @if (auth()->user()->role == 'admin')
            <li class="menu-header">Master</li>
            
            <li class="{{ $title === 'Tambang' ? 'active' : ''}}"><a class="nav-link" href="{{ route('tambang') }}" data-href="{{ route('tambang') }}"><i class="fa-solid fa-person-digging"></i> <span>Tambang</span></a></li>
            <li class="{{ $title === 'Driver' ? 'active' : ''}}"><a class="nav-link" href="{{ route('driver') }}" data-href="{{ route('driver') }}"><i class="fa-solid fa-truck"></i> <span>Driver</span></a></li>
            <li class="{{ $title === 'Perusahaan' ? 'active' : ''}}"><a class="nav-link" href="{{ route('perusahaan') }}" data-href="{{ route('perusahaan') }}"><i class="fa-solid fa-building"></i> <span>Perusahaan</span></a></li>
            <li class="nav-item dropdown {{ $title === 'Kendaraan' || $title === 'Monitoring Kendaraan' ? 'active' : ''}}">
                <a href="#" class="nav-link has-dropdown"><i class="fa-solid fa-car"></i> <span>Kendaraan</span></a>
                <ul class="dropdown-menu">
                    <li class="{{ $title === 'Kendaraan' ? 'active' : ''}}"><a class="nav-link" href="{{ route('kendaraan') }}">Kendaraan</a></li>
                    <li class="{{ $title === 'Monitoring Kendaraan' ? 'active' : ''}}"><a class="nav-link" href="{{ route('monitoring') }}">Monitoring Kendaraan</a></li>
                </ul>
            </li>
            <li class="{{ $title === 'Permintaan Kendaraan' ? 'active' : ''}}"><a class="nav-link" href="{{ route('request-kendaraan') }}" data-href="{{ route('request-kendaraan') }}"><i class="fa-solid fa-code-pull-request"></i> <span>Permintaan Kendaraan</span></a></li>
            <li class="{{ $title === 'Log Activity' ? 'active' : ''}}"><a class="nav-link" href="{{ route('log-activity') }}" data-href="{{ route('log-activity') }}"><i class="fa-solid fa-chart-line"></i> <span>Log Activity</span></a></li>
            @elseif (auth()->user()->role == 'pejabat')
            <li class="{{ $title === 'Permintaan Kendaraan' ? 'active' : ''}}"><a class="nav-link" href="{{ route('request-kendaraan') }}" data-href="{{ route('request-kendaraan') }}"><i class="fa-solid fa-code-pull-request"></i> <span>Permintaan Kendaraan</span></a></li>
            <li class="{{ $title === 'Log Activity' ? 'active' : ''}}"><a class="nav-link" href="{{ route('log-activity') }}" data-href="{{ route('log-activity') }}"><i class="fa-solid fa-chart-line"></i> <span>Log Activity</span></a></li>
            @endif
            
            <li class="menu-header">Account</li>
            
            <li class="{{ $title === 'Profile' ? 'active' : ''}}"><a class="nav-link" href="{{ route('profile') }}" data-href="{{ route('log-activity') }}"><i class="fa-solid fa-user"></i> <span>Profile</span></a></li>
        </ul>
        
        <div class="mb-4 p-3 hide-sidebar-mini">
            <button class="btn btn-danger btn-lg btn-block btn-icon-split" onclick="document.location.href='{{ route('logout') }}'">Logout</button>
        </div>
    </aside>
</div>