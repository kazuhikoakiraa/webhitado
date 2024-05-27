<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sidebar</title>
    <style>
        #main-navbar {
          width: 1200px;
          margin-left: 271px;
          position: fixed;
          top: 0;
            left: 0;
            z-index: 1000;
        }

        /* Ini digunakan untuk menyembunyikan sidebar saat awalnya ditutup */
        #main-navbar.closed-sidebar {
          margin-left: 0;
          width: 1470px;
          position: fixed;
        }
    </style>
</head>
<body>
<nav id="main-navbar" class="main-header navbar navbar-expand navbar-white navbar-light">
  <ul class="navbar-nav">
    <li class="nav-item">
      <a id="main-navbar-toggler" class="nav-link" data-target="#main-sidebar" href="#"><i class="fas fa-bars"></i></a>
    </li>
  </ul>
  <ul class="navbar-nav ml-auto">
    <!-- status -->
      <h4 style="font-family: 'DM Sans'; font-weight:bold"><i class="fa fa-user"></i> OWNER</h4>
    <!-- status end -->
</nav>

<script>
document.addEventListener("DOMContentLoaded", function() {
  // Menggunakan event listener untuk menangani klik pada ikon hamburger di navbar
  document.getElementById('main-navbar-toggler').addEventListener('click', function(e) {
    e.preventDefault();
    // Toggle class 'closed-sidebar' pada elemen navbar saat tombol hamburger ditekan
    document.getElementById('main-navbar').classList.toggle('closed-sidebar');
  });
});
</script>

</body>
</html>
