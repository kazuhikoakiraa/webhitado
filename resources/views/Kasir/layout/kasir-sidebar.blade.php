<!-- Your partial Laravel file -->
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
            <a href="/kasir-dashboard" class="nav-link">
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
                <a href="/kasir-kelolamenu" class="nav-link">
                  <p>Kelola Menu</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/kasir-kelolapesanan" class="nav-link">
                  <p>Kelola Pesanan</p>
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
      // Menggunakan event delegation untuk menangani klik pada ikon fa-angle-down-right
      document.querySelectorAll('.nav-item.has-treeview > a').forEach(function(item) {
        item.addEventListener('click', function(e) {
          e.preventDefault();
          // Toggle class 'menu-open' pada elemen parent saat ikon fa-angle-down-right ditekan
          item.parentNode.classList.toggle('menu-open');
        });
      });
    });
  </script>
