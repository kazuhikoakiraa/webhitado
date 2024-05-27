<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>KOPI HITADO | Dashboard</title>

    <!-- Style partial -->
    @include('Admin.asset.style')
    <!-- end Style Partial -->

    <!-- Include Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>

<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- partial navbar -->
  @include('Admin.layout.navbar')
  <!-- end partial navbar -->

  <!-- partial sidebar -->
  @include('Admin.layout.sidebar')
  <!-- end sidebar partial -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header" style="background-color: #ffffff;">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark" style="font-weight: bold;">Dashboard</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content" style="background-color: #ffffff;">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row justify-content-center">
          <div class="col-lg-4 col-6">
            <!-- small box -->
            <div class="small-box" style="background-color: #F5F2EF;">
              <div class="inner">
                <h3 style="font-family: 'DM Sans'">Pendapatan</h3>
                <p>RP. 50.000</p>
              </div>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-4 col-6">
            <!-- small box -->
            <div class="small-box" style="background-color: #F5F2EF;">
              <div class="inner">
                <h3 style="font-family: 'DM Sans'">Produk Terjual</h3>
                <p>60 Produk</p>
              </div>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-4 col-6">
            <!-- small box -->
            <div class="small-box" style="background-color: #F5F2EF;">
              <div class="inner">
                <h3 style="font-family: 'DM Sans'">Pelanggan</h3>
                <p>150 Orang</p>
              </div>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->
        <!-- Main row -->
        <div class="row">
          <!-- Sales -->
          <div class="col-lg-6">
            <!-- Custom tabs (Charts with tabs)-->
            <div class="card">
              <div class="card-header">
                <h4 style="text-align: center;">Grafik Produk</h4>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content p-0">
                  <div class="chart tab-pane active" id="product-chart"
                       style="position: relative; height: 300px;">
                    <canvas id="product-chart-canvas" height="300" style="height: 300px;"></canvas>
                  </div>
                </div>
              </div><!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col-lg-6 -->

          <!-- Orders -->
          <div class="col-lg-6">
            <!-- Custom tabs (Charts with tabs)-->
            <div class="card">
              <div class="card-header">
                <h4 style="text-align: center;">Grafik Pesanan</h4>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content p-0">
                  <div class="chart tab-pane active" id="order-chart"
                       style="position: relative; height: 300px;">
                    <canvas id="order-chart-canvas" height="300" style="height: 300px;"></canvas>
                  </div>
                </div>
              </div><!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col-lg-6 -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

</div>
<!-- ./wrapper -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
</script>

<!-- Add Chart.js scripts to render the charts -->
<script>
  document.addEventListener('DOMContentLoaded', function() {
    // Example data, replace with your data fetching logic
    const productData = {
      labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
      datasets: [{
        label: 'Products Sold',
        data: [65, 59, 80, 81, 56, 55, 40],
        backgroundColor: 'rgba(54, 162, 235, 0.2)',
        borderColor: 'rgba(54, 162, 235, 1)',
        borderWidth: 1
      }]
    };

    const orderData = {
      labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
      datasets: [{
        label: 'Orders',
        data: [28, 48, 40, 19, 86, 27, 90],
        backgroundColor: 'rgba(255, 99, 132, 0.2)',
        borderColor: 'rgba(255, 99, 132, 1)',
        borderWidth: 1
      }]
    };

    const productChartCtx = document.getElementById('product-chart-canvas').getContext('2d');
    const orderChartCtx = document.getElementById('order-chart-canvas').getContext('2d');

    new Chart(productChartCtx, {
      type: 'line',
      data: productData,
      options: {
        responsive: true,
        scales: {
          y: {
            beginAtZero: true
          }
        }
      }
    });

    new Chart(orderChartCtx, {
      type: 'line',
      data: orderData,
      options: {
        responsive: true,
        scales: {
          y: {
            beginAtZero: true
          }
        }
      }
    });
  });
</script>

</body>

</html>
