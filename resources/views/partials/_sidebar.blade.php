<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fab fa-connectdevelop"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Sanbercode Medium</div>
    </a>

    <!-- Nav Item - Dashboard -->
    <li class="nav-item {{ Request::is('/') ? 'active' : ''}}">
        <a class="nav-link" href="{{ route('articles.erd') }}">
            <i class="fas fa-fw fas fa-sitemap"></i>
            <span>ERD MEDIUM</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Tables -->
    <li class="nav-item {{ Request::is('artikel') ? 'active' : ''}}">
        <a class="nav-link" href="{{ route('articles.index') }}">
            <i class="fas fa-fw fa-table"></i>
            <span>ARTICLE</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->