<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
        <a href="index.php?x=home" class="app-brand-link">
            <span class="app-brand-logo demo">
                <img src="images/logo.png" style="width:40px;height:40px;  aspect-ratio:1/1; object-fit:cover;" alt="">
            </span>
            <span class="app-brand-text demo menu-text fw-bolder ms-2">Parzival</span>
        </a>

        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
            <i class="bx bx-chevron-left bx-sm align-middle"></i>
        </a>
    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">
        <!-- Dashboard -->



        <li class="menu-item <?php if (isset($_GET['x']) && $_GET['x'] == 'home') {
            echo 'active';
        } ?>">
            <a href="index.php?x=home" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Analytics">Dashboard</div>
            </a>
        </li>
        <li class="menu-item <?php if (isset($_GET['x']) && $_GET['x'] == 'pencarian') {
            echo 'active';
        } ?>">
            <a href="index.php?x=pencarian" class="menu-link">
                <i class="menu-icon tf-icons bx bx-search"></i>
                <div data-i18n="Analytics">Cari Pesanan</div>
            </a>
        </li>
        <li class="menu-item <?php if (isset($_GET['x']) && $_GET['x'] == 'riwayat') {
            echo 'active';
        } ?>">
            <a href="index.php?x=riwayat" class="menu-link">
                <i class="menu-icon tf-icons bx bx-history"></i>
                <div data-i18n="Analytics">Riwayat</div>
            </a>
        </li>



    </ul>
</aside>