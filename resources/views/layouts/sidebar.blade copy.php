<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="{{ url('/home') }}" class="brand-link">
    <img src="https://upload.wikimedia.org/wikipedia/commons/1/11/BPKP_Logo.png"
             alt="Logo"
             class="brand-image img-circle elevation-3 bg-white p-1 my-2">
        <p class="brand-text font-weight-light text-white my-2">SiAPP Transda</p>
    </a>
    <div class="sidebar">
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                @include('layouts.menu')
            </ul>
        </nav>
    </div>
</aside>
