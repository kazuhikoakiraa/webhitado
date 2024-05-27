<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>KOPI HITADO | Inventori Keluar</title>

    <!-- Style partial -->
    @include('Admin.asset.style')
    <!-- end Style Partial -->

</head>
<body>

    <!-- partial navbar -->
    @include('Admin.layout.navbar')
    <!-- end partial navbar -->

    <!-- partial sidebar -->
    @include('Admin.layout.sidebar')
    <!-- end sidebar partial -->

    <div class="left" style="padding-left: 20px; margin-left: 220px; margin-top:100px;">
        <div style="font-family: Arial, sans-serif; margin: 0; padding: 0;">
            <div style="max-width: 900px; margin: 20px auto; padding: 20px; background-color: #EFE9D3; border-radius: 5px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);">
                <h1 style="text-align: center; font-family: 'Playfair Display'; margin-bottom: 40px;">Inventori Keluar   </h1>
                <div style="margin-bottom: 20px;">
                    <!-- Table for Kitchen -->
                    <h4 style="margin-top: 60px; font-family: 'Playfair Display';">Inventori Dapur</h4>
                    <table style="width: 100%; border-collapse: collapse; margin-top: 20px; background-color: #ffffff; border-radius:15px;">
                        <tr>
                            <th style="padding: 10px; border-bottom: 1px solid #ddd; background-color: #ffffff; border-radius: 15px 0px 0px 0px;">ID Barang</th>
                            <th style="padding: 10px; border-bottom: 1px solid #ddd; background-color: #ffffff;">Nama Barang</th>
                            <th style="padding: 10px; border-bottom: 1px solid #ddd; background-color: #ffffff;">Jumlah Barang</th>
                        </tr>
                        <!-- Sample data for Kitchen -->
                        @foreach ($outgoing as $item)
                        <tr>
                            <td style="padding: 10px; border-bottom: 1px solid #ddd;">{{$loop->iteration}}</td>
                            <td style="padding: 10px; border-bottom: 1px solid #ddd;">{{$item->nama}}</td>
                            <td style="padding: 10px; border-bottom: 1px solid #ddd;">{{$item->count}} </td>
                        </tr>
                        @endforeach
                    </table>
                </div>
                <!-- Table for Bar -->
                <h4 style="margin-top: 50px; font-family: 'Playfair Display';">Inventori Bar</h4>
                <table style="width: 100%; border-collapse: collapse; margin-top: 20px; background-color: #ffffff; border-radius:15px;">
                    <tr>
                        <th style="padding: 10px; border-bottom: 1px solid #ddd; background-color: #ffffff; border-radius: 15px 0px 0px 0px;">ID Barang</th>
                        <th style="padding: 10px; border-bottom: 1px solid #ddd; background-color: #ffffff;">Nama Barang</th>
                        <th style="padding: 10px; border-bottom: 1px solid #ddd; background-color: #ffffff;">Jumlah Barang</th>
                    </tr>
                    <!-- Sample data for Bar -->
                    @foreach ($outgoing2 as $item)
                        <tr>
                            <td style="padding: 10px; border-bottom: 1px solid #ddd;">{{$loop->iteration}}</td>
                            <td style="padding: 10px; border-bottom: 1px solid #ddd;">{{$item->nama}}</td>
                            <td style="padding: 10px; border-bottom: 1px solid #ddd;">{{$item->count}} </td>
                        </tr>
                        @endforeach
                </table>
            </div>
        </div>
    </div>

    <!-- partial script -->
    @include('Admin.asset.script')
    <!-- end partial script -->

</body>

</html>
