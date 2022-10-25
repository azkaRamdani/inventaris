        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/dashboard">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">E - INVENTORY</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item {{ Request::is('dashboard*') ? 'active' : '' }}">
                <a class="nav-link" href="/dashboard">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dasbor</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item {{ Request::is('category*') ? 'active' : '' }}">
                <a class="nav-link" href="/category">
                    <i class="fas fa-fw fa-tag"></i>
                    <span>Kategori</span></a>
            </li>


            <hr class="sidebar-divider">
            <!-- Nav Item - Dashboard -->
            <li class="nav-item {{ Request::is('goods*') ? 'active' : '' }}">
                <a class="nav-link" href="/goods">
                    <i class="fas fa-fw fa-box"></i>
                    <span>Barang</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item {{ Request::is('loans*') ? 'active' : '' }}">
                <a class="nav-link" href="/loans">
                    <i class="fas fa-fw fa-arrow-up-from-bracket"></i>
                    <span>Peminjaman</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item {{ Request::is('reports*') ? 'active' : '' }}">
                <a class="nav-link" href="/reports">
                    <i class="fas fa-fw fa-file"></i>
                    <span>Laporan</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>
        </ul>
        <!-- End of Sidebar -->
