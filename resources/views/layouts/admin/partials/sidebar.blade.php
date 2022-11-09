<div class="main-sidebar">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="index.html">Stisla</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">St</a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Dashboard</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="{{ route('admin.dashboard') }}">General Dashboard</a></li>
                </ul>
            </li>
            <li class="menu-header">Starter</li>
            <li><a class="nav-link" href="{{ route('admin.articles.index') }}"><i class="far fa-square"></i>
                <span>Articles Master</span>
                </a>
            </li>
            <li><a class="nav-link" href="{{ route('admin.events.index') }}"><i class="far fa-square"></i>
                <span>Events Master</span>
                </a>
            </li>
    </aside>
</div>