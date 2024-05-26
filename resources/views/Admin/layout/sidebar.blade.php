<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sidebar</title>
    <style>
        #main-sidebar {
          width: 270px;
          height: 100%;
          background-color: #f4f4f4;
          overflow-y: auto;
          box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
          z-index: 1000;
          transition: width 0.3s ease;
          position: fixed;
          top: 0;
          left: 0;
          transform: translateX(0); /* Mengatur sidebar terbuka awalnya */
        }

        #main-sidebar.sidebar-closed {
          width: 0; /* Menutup sidebar saat sidebar-closed */
          transform: translateX(-270px); /* Menggeser sidebar ke kiri */
        }

    </style>
</head>
<body>
<!-- Main Sidebar Container -->
<aside id="main-sidebar" class="main-sidebar elevation-1 position-fixed" style="background-color: #EFE9D3;">
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
            <a href="{{route('dashboard')}}" class="nav-link">
              <i class="nav-icon fa fa-home"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{route('admin.homepage.index')}}" class="nav-link">
              <i class="nav-icon fa fa-search"></i>
              <p>
                Tentang Kami
              </p>
            </a>
          </li>

          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-shopping-cart"></i>
              <p>
                Kelola
                <i class="fas fa-angle-down right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('admin.product.index')}}" class="nav-link">
                  <p>Kelola Menu</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('admin.order.index')}}" class="nav-link">
                  <p>Kelola Pesanan</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-book"></i>
              <p>
                Inventori
                <i class="fas fa-angle-down right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('admin.incoming.index')}}" class="nav-link">
                  <p>Inventori Masuk</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('admin.outgoing.index')}}" class="nav-link">
                  <p>Inventori Keluar</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('admin.item.index')}}" class="nav-link">
                  <p>Stok Barang</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item has-treeview">
            <form method="POST" action="{{route('logout')}}">
            @csrf
            <a href="{{route('logout')}}" class="nav-link"onclick="event.preventDefault(); this.closest('form').submit();">
              <i class="nav-icon fa fa-power-off"></i>
              <p>
                Log Out
              </p>
            </a>
            </form>
        </li>

      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Your JavaScript -->
  <script>
    document.addEventListener("DOMContentLoaded", function() {
      document.querySelectorAll('.nav-item.has-treeview > a').forEach(function(item) {
        item.addEventListener('click', function(e) {
          e.preventDefault();
          item.parentNode.classList.toggle('menu-open');
        });
      });
    });

    document.addEventListener("DOMContentLoaded", function() {
      // Menggunakan event listener untuk menangani klik pada ikon hamburger di navbar
      document.getElementById('main-navbar-toggler').addEventListener('click', function(e) {
        e.preventDefault();
        // Toggle class 'sidebar-closed' pada elemen sidebar saat tombol hamburger ditekan
        document.getElementById('main-sidebar').classList.toggle('sidebar-closed');
      });
    });
  </script>
