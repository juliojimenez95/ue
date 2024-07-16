<div id="sidebar" class="active">
    <div class="sidebar-wrapper active">
        <div class="sidebar-header">
            <div class="d-flex justify-content-between">
                <div class="logo">
                    <img src="{{asset('images/logo.jpeg')}}" alt="Logo" srcset="" />
                </div>
                <div class="toggler">
                    <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                </div>
            </div>
        </div>
        <div class="sidebar-menu">
            <ul class="menu">

                <li class="sidebar-item" id="inicio">
                    <a href="{{ route('home') }}" class="sidebar-link">
                        <i class="bi bi-grid-fill"></i>
                        <span>Empresas</span>
                    </a>
                </li>
                <li class="sidebar-item" id="rol">
                    <a href="{{ route('rol') }}" class="sidebar-link">
                        <i class="bi bi-grid-fill"></i>
                        <span>Roles</span>
                    </a>
                </li>
                @if(session('session_rol') != 1)
                <li class="sidebar-item" id="usuarios">
                    <a href="{{ route('users') }}" class="sidebar-link">
                        <i class="bi bi-person-fill"></i>
                        <span>Usuarios</span>
                    </a>
                </li>
                <li class="sidebar-item" id="usuarios_l">
                    <a href="{{ route('nivel_r') }}" class="sidebar-link">
                        <i class="bi bi-card-checklist"></i>
                        <span>Nivel de riesgo</span>
                    </a>
                </li>
                <li class="sidebar-item" id="cuestionario">
                    <a href="{{ route('cuestionario') }}" class="sidebar-link">
                        <i class="bi bi-person-lines-fill"></i>
                        <span>Cuestionarios</span>
                    </a>
                </li>
                @endif
                
            </ul>
        </div>
        <button class="sidebar-toggler btn x">
            <i data-feather="x"></i>
        </button>
    </div>
</div>