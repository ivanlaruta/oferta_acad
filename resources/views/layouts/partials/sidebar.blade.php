    <!-- [ navigation menu ] start -->
    <nav class="pcoded-navbar">
        <div class="navbar-wrapper">
            <div class="navbar-brand header-logo">
                <a href="index.html" class="b-brand">
                    <div class="b-bg">
                        <i class="feather icon-trending-up"></i>
                    </div>
                    <span class="b-title">EGPP</span>
                </a>
                <a class="mobile-menu" id="mobile-collapse" href="javascript:"><span></span></a>
            </div>
            <div class="navbar-content scroll-div">
                <ul class="nav pcoded-inner-navbar">
                    <li class="nav-item pcoded-menu-caption">
                        <label>Certificaciones</label>
                    </li>
                    <li class="nav-item {{ Request::routeIs('certificaciones.habilitar') ? 'active' : '' }}">
                        <a href="{{ route('certificaciones.habilitar')}}" class="nav-link "><span class="pcoded-micon"><i class="feather icon-home"></i></span><span class="pcoded-mtext">Habilitar entrega</span></a>
                    </li>
                    <li class="nav-item pcoded-menu-caption">
                        <label>Servicios</label>
                    </li>
                    <li class="nav-item {{ Request::routeIs('oferta_wapp') ? 'active' : '' }}">
                        <a href="{{ route('oferta_wapp')}}" class="nav-link "><span class="pcoded-micon"><i class="feather icon-home"></i></span><span class="pcoded-mtext">Oferta Bot Wapp</span></a>
                    </li>
                    <li class="nav-item {{ Request::routeIs('programacion_rrss') ? 'active' : '' }}">
                        <a href="{{ route('programacion_rrss')}}" class="nav-link "><span class="pcoded-micon"><i class="feather icon-home"></i></span><span class="pcoded-mtext">Programacion RRSS</span></a>
                    </li>
                    <li class="nav-item {{ Request::routeIs('correos_minedu') ? 'active' : '' }}">
                        <a href="{{ route('correos_minedu')}}" class="nav-link "><span class="pcoded-micon"><i class="feather icon-home"></i></span><span class="pcoded-mtext">correos_minedu</span></a>
                    </li>
                   
                </ul>
            </div>
        </div>
    </nav>
    <!-- [ navigation menu ] end -->