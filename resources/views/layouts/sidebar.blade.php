<aside class="left-sidebar with-vertical">
    <div>
        <!-- ---------------------------------- -->
        <!-- Start Vertical Layout Sidebar -->
        <!-- ---------------------------------- -->
        <div class="brand-logo d-flex align-items-center justify-content-between">
            <a href="https://bootstrapdemos.wrappixel.com/monster/dist/main/index.html" class="text-nowrap logo-img">
                <img src="https://upload.wikimedia.org/wikipedia/commons/1/11/BPKP_Logo.png" alt="Logo" class="brand-image img-circle elevation-3 bg-white p-1 my-2" width="70">
                <span class="brand-text fw-bolder fs-5 my-2">SiAPP Transda</span>
            </a>
            <a href="javascript:void(0)" class="sidebartoggler ms-auto text-decoration-none fs-5 d-flex d-xl-none">
                <iconify-icon icon="solar:close-circle-outline"></iconify-icon>
            </a>
        </div>

        <nav class="sidebar-nav scroll-sidebar simplebar-scrollable-y" data-simplebar="init">
            <div class="simplebar-wrapper" style="margin: 0px;">
                <div class="simplebar-height-auto-observer-wrapper">
                    <div class="simplebar-height-auto-observer"></div>
                </div>
                <div class="simplebar-mask">
                    <div class="simplebar-offset" style="right: 0px; bottom: 0px;">
                        <div class="simplebar-content-wrapper" tabindex="0" role="region" aria-label="scrollable content" style="height: 100%; overflow: hidden scroll;">
                            <div class="simplebar-content" style="padding: 0px;">
                                <ul id="sidebarnav" class="mb-5">
                                    @include('layouts.menu')
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="simplebar-placeholder" style="width: 260px; height: 3712px;"></div>
            </div>
            <div class="simplebar-track simplebar-horizontal" style="visibility: hidden;">
                <div class="simplebar-scrollbar" style="width: 0px; display: none;"></div>
            </div>
            <div class="simplebar-track simplebar-vertical" style="visibility: visible;">
                <div class="simplebar-scrollbar" style="height: 198px; transform: translate3d(0px, 0px, 0px); display: block;"></div>
            </div>
        </nav>

        <div class="sidebar-footer hide-menu">
            <!-- item-->
            <a href="{{ route('users.edit', Auth::user()->id) }}" class="link" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Ganti Password" data-bs-original-title="Ubah Password" style="width: 129px;"><iconify-icon icon="solar:settings-linear"></iconify-icon></a>
            <!-- item-->
            <a href="#" class="link" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Keluar" data-bs-original-title="Keluar" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" style="width: 129px;"><iconify-icon icon="solar:power-bold"></iconify-icon></a>
        </div>
        <!-- ---------------------------------- -->
        <!-- Start Vertical Layout Sidebar -->
        <!-- ---------------------------------- -->
    </div>
</aside>