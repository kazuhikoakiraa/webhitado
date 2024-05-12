<!-- Main Sidebar Container -->
<aside class="main-sidebar elevation-1 position-fixed" style="background-color: #EFE9D3;">
    <!-- Brand Logo -->
    <a>
      <img src="{{ asset('img/logo.png') }}" alt="HITADO LOGO" style="width: 100px; height: 100px; border-radius: 50%;">
      <span style="font-family: 'Playfair Display'; color: #8e181f; font-weight: bold; font-size:17px;">KOPI HITADO</span>
    </a>
    <hr style="border: 1.5px solid; color:#8e181f">
      <!-- Sidebar Menu -->
      <nav class="mt-2 ">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

        <!-- componenn menu sidebar -->
          <li class="nav-item">
            <a href="dashboard" class="nav-link">
              <i class="nav-icon fa fa-home"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="/kasir-tentang" class="nav-link">
              <i class="nav-icon fa fa-search"></i>
              <p>
                Tentang Kami
              </p>
            </a>
          </li>

          <li class="nav-item ">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-shopping-cart"></i>
              <p>
                Kelola
                <i class="fas fa-angle-down right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Kelola Menu</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>kelola Pesanan</p>
                </a>
              </li>

            </ul>
          </li>

          <li class="nav-item has-treeview">
            <a href="#login" class="nav-link">
              <i class="nav-icon fa fa-power-off"></i>
              <p>
                Log Out
              </p>
            </a>
          </li>

      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
