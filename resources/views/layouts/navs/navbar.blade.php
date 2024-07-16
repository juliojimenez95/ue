<nav class="navbar navbar-expand navbar-light">
    <div class="container-fluid">
        <a href="#" class="burger-btn d-block">
            <i class="bi bi-justify fs-3"></i>
        </a>

        <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="Toggle navigation"
        >
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                
               
            </ul>
            <div class="dropdown">
                <a href="#" data-bs-toggle="dropdown" aria-expanded="false">
                    <div class="user-menu d-flex">
                        <div class="user-name text-end me-3">
                            <h6 class="mb-0 text-gray-600">{{ session('session_name') }}</h6>
                            <p class="mb-0 text-sm text-gray-600">
                                @if (session('session_rol') == 1)
                                    Administrador
                                @else
                                    Usuario
                                @endif
                            </p>
                        </div>
                        <div class="user-img d-flex align-items-center">
                            <div class="avatar avatar-md">
                                <img src="{{ asset('assets/images/faces/user.png') }}" />
                            </div>
                        </div>
                    </div>
                </a>
                <ul
                    class="dropdown-menu dropdown-menu-end"
                    aria-labelledby="dropdownMenuButton"
                    style="min-width: 11rem"
                >
                    <li>
                        <a class="dropdown-item" href="{{ route('profile') }}"
                            ><i class="icon-mid bi bi-person me-2"></i> Perfil</a
                        >
                    </li>
                    <li>
                        <hr class="dropdown-divider" />
                    </li>
                    <li>
                        <form action="{{ route('logout') }}" method="post" name="logout">
                            @csrf
                            <button class="dropdown-item" id="btn_logout">
                                <i class="icon-mid bi bi-box-arrow-left me-2">
                                </i> Cerrar session</button>
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>

