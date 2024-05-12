<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>KOPI HITADO | Kelola Pesanan</title>

    <!-- Style partial -->
    @include('Kasir.asset.style')
    <!-- end Style Partial -->

</head>
<body>

    <!-- partial navbar -->
  @include('Kasir.layout.navbar')
  <!-- end partial navbar -->

  <!-- partial sidebar -->
  @include('Kasir.layout.kasir-sidebar')
  <!-- end sidebar partial -->

    <div class="left" style="padding-left: 20px; margin-left: 220px;">
        <div style="font-family: Arial, sans-serif; margin: 0; padding: 0;">
            <div style="max-width: 900px; margin: 20px auto; padding: 20px; background-color: #EFE9D3; border-radius: 5px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);">
                <h1 style="text-align: center; font-family: 'Playfair Display'; margin-bottom: 40px;">Kelola Pesanan</h1>
                    <h4 style="margin-top: 60px; font-family: 'Playfair Display';">Daftar Pesanan</h4>
                <table style="width: 100%; border-collapse: collapse; margin-top: 20px; background-color: #ffffff; border-radius:15px;">
                    <tr>
                        <th style="padding: 10px; border-bottom: 1px solid #ddd; background-color: #ffffff; border-radius: 15px 0px 0px 0px;">Nomor Antrian</th>
                        <th style="padding: 10px; border-bottom: 1px solid #ddd; background-color: #ffffff;">Nomor Meja</th>
                        <th style="padding: 10px; border-bottom: 1px solid #ddd; background-color: #ffffff;">Status</th>
                        <th style="padding: 10px; border-bottom: 1px solid #ddd; background-color: #ffffff; border-radius: 0px 15px 0px 0px;">Aksi</th>
                    </tr>
                    <tr id="pesanan1">
                        <td style="padding: 10px; border-bottom: 1px solid #ddd;">JKX485</td>
                        <td style="padding: 10px; border-bottom: 1px solid #ddd;">7</td>
                        <td id="statuspesanan1" style="padding: 10px; border-bottom: 1px solid #ddd;">Menunggu Pembayaran</td>
                        <td style="padding: 10px; border-bottom: 1px solid #ddd;">
                            <button onclick="konfirmasi('pesanan1')" style="background-color: #8B4233; color: white; padding: 5px 10px; font-size:10px; border: none; border-radius: 5px; cursor: pointer;">Konfirmasi</button>
                            <button onclick="hapus('pesanan1')" style="background-color: #8B4233; color: white; padding: 5px 10px; font-size:10px; border: none; border-radius: 3px; cursor: pointer;">Hapus</button>
                            <button onclick="print()" style="background-color: #8E181F; color: white; padding: 5px 10px; font-size:10px; border: none; border-radius: 3px; cursor: pointer;">Print</button>
                        </td>
                    </tr>
                    <tr id="pesanan2">
                        <td style="padding: 10px; border-bottom: 1px solid #ddd;">KJD782</td>
                        <td style="padding: 10px; border-bottom: 1px solid #ddd;">5</td>
                        <td id="statuspesanan2" style="padding: 10px; border-bottom: 1px solid #ddd;">Menunggu Pembayaran</td>
                        <td style="padding: 10px; border-bottom: 1px solid #ddd;">
                            <button onclick="konfirmasi('pesanan2')" style="background-color: #8B4233; color: white; padding: 5px 10px; font-size:10px; border: none; border-radius: 5px; cursor: pointer;">Konfirmasi</button>
                            <button onclick="hapus('pesanan2')" style="background-color: #8B4233; color: white; padding: 5px 10px; font-size:10px; border: none; border-radius: 3px; cursor: pointer;">Hapus</button>
                            <button onclick="print()" style="background-color: #8E181F; color: white; padding: 5px 10px; font-size:10px; border: none; border-radius: 3px; cursor: pointer;">Print</button>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>

    <script>feather.replace();</script>
    <!-- Your JavaScript file -->
    @include('Kasir.asset.script')

</body>

</html>
