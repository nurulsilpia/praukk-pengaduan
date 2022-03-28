<header class="l-header">
    <nav class="nav bd-grid">
        <div>
            <p class="nav__logo">Pengaduan Masyarakat</p>
        </div>

        <div class="nav__menu" id="nav-menu">
            <ul class="nav__list list-unstyled m-0">
                <li class="nav__item"><a href="/" class="nav__link {{ Request::is('/') ? 'active' : '' }}">Home</a></li>
                <li class="nav__item"><a href="/pengaduan" class="nav__link {{ Request::is('pengaduan*') ? 'active' : '' }}">Pengaduan</a></li>
                @can('admin')
                    <li class="nav__item"><a href="/admin" class="nav__link {{ Request::is('admin*') ? 'active' : '' }}">Admin</a></li>
                    <li class="nav__item"><a href="/petugas" class="nav__link {{ Request::is('petugas*') ? 'active' : '' }}">Petugas</a></li>
                @endcan
                @can('petugas', 'admin')
                    <li class="nav__item"><a href="/petugas" class="nav__link {{ Request::is('petugas*') ? 'active' : '' }}">Petugas</a></li>
                @endcan
                
                @auth
                    <li class="nav__item">
                        <div class="dropdown">
                            <a class="btn btn-primary btn-sm dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="bi bi-person-circle"></i> Hi, {{ auth()->user()->username }}
                            </a>
                        
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                <li class="dropdown-item">
                                    <form action="/logout" method="POST">
                                        @csrf
                                        <button type="submit" class="dropdown-item has-icon text-danger d-flex align-items-center"><i class="bi bi-box-arrow-left"></i> Logout</button>
                                    </form>
                                </li>
                            </ul>
                        </div>
                    </li>
                @else
                    <li class="nav__item"><a href="/login" class="btn btn-primary btn-sm ml-5"><i class="bi bi-box-arrow-right"></i> Login</a></li>
                @endauth
            </ul>
                
        </div>

        <div class="nav__toggle" id="nav-toggle">
            <i class='bx bx-menu'></i>
        </div>
    </nav>
</header>