<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>KOPI HITADO | Status Pesanan</title>
    <script src="https://unpkg.com/feather-icons"></script>
</head>
<body>
<nav class="navbar" style="background-color: #efe9d3; display: flex; overflow: hidden; align-items: center; padding: 1rem 5%;">
<<<<<<< HEAD
    <a href="{{ url()->previous() }}" style="color: #000000; margin-left: 0; margin-right: 1rem;"><i data-feather="arrow-left"></i></a>
    <h1 style="margin: 0;">Status Pesanan</h1>
</nav>
<div style="font-family: Arial, sans-serif; margin: 0; padding: 0;">
    <div style="max-width: 900px; margin: 20px auto; padding: 20px; background-color: #EFE9D3; border-radius: 5px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);">
        <h1 style="text-align: center; font-family: 'Playfair Display'; margin-bottom: 40px;">Status Pemesanan</h1>
        <table style="width: 100%; border-collapse: collapse; margin-top: 20px; background-color: #ffffff; border-radius:15px;">
            <thead>
                <tr>
                    <th style="padding: 10px; border-bottom: 1px solid #ddd; border-right: 1px solid #ddd; background-color: #ffffff; border-radius: 15px 0px 0px 0px;">Nomor Meja</th>
                    <th style="padding: 10px; border-bottom: 1px solid #ddd; border-right: 1px solid #ddd; background-color: #ffffff;">Status</th>
                    <th style="padding: 10px; border-bottom: 1px solid #ddd; background-color: #ffffff; border-radius: 0px 15px 0px 0px;">Keterangan</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($orders as $order)
                <tr id="Antrian{{ $loop->index + 1 }}">
                    <td style="padding: 10px; border-bottom: 1px solid #ddd; border-right: 1px solid #ddd;">{{ $order->table_number }}</td>
                    <td style="padding: 10px; border-bottom: 1px solid #ddd; border-right: 1px solid #ddd; color: {{ $order->status == 'Menunggu Pembayaran' ? '#ff0000' : '#00CE15' }}">{{ $order->status }}</td>
                    <td id="statuspesanan{{ $loop->index + 1 }}" style="padding: 10px; border-bottom: 1px solid #ddd;">{{ $order->status == 'Menunggu Pembayaran' ? 'Silahkan datang ke kasir untuk membayar pesanan anda' : 'Silahkan Tunggu Pesanan Anda' }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
=======
        <a href="{{route('cart.view')}}" style="color: #000000; margin-left: 0; margin-right: 1rem;"><i data-feather="arrow-left"></i></a>
        <h1 style="margin: 0;">Status Pesanan</h1>
    </nav>
        <div style="font-family: Arial, sans-serif; margin: 0; padding: 0;">
            <div style="max-width: 900px; margin: 20px auto; padding: 20px; background-color: #EFE9D3; border-radius: 5px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);">
                <h1 style="text-align: center; font-family: 'Playfair Display'; margin-bottom: 40px;">Status Pemesanan</h1>
                <table style="width: 100%; border-collapse: collapse; margin-top: 20px; background-color: #ffffff; border-radius:15px;">
                    <tr>
                        <th style="padding: 10px; border-bottom: 1px solid #ddd; border-right: 1px solid #ddd; background-color: #ffffff; border-radius: 15px 0px 0px 0px;">Nomor Meja</th>
                        <th style="padding: 10px; border-bottom: 1px solid #ddd; border-right: 1px solid #ddd; background-color: #ffffff;">Status</th>
                        <th style="padding: 10px; border-bottom: 1px solid #ddd; background-color: #ffffff; border-radius: 0px 15px 0px 0px;">Keterangan</th>
                    </tr>
                    <tr id="Antrian1">
                        <td style="padding: 10px; border-bottom: 1px solid #ddd; border-right: 1px solid #ddd;">TB508</td>
                        <td style="padding: 10px; border-bottom: 1px solid #ddd; border-right: 1px solid #ddd; color:#ff0000">Menunggu Pembayaran</td>
                        <td id="statuspesanan1" style="padding: 10px; border-bottom: 1px solid #ddd;">Silahkan datang ke kasir untuk membayar pesanan anda</td>
                    </tr>
                    <tr id="Antrian2">
                        <td style="padding: 10px; border-bottom: 1px solid #ddd; border-right: 1px solid #ddd;">TB903</td>
                        <td style="padding: 10px; border-bottom: 1px solid #ddd; border-right: 1px solid #ddd; color:#00CE15">Pesanan Sudah Dibayar</td>
                        <td id="statuspesanan2" style="padding: 10px; border-bottom: 1px solid #ddd;">Silahkan Tunggu Pesanan Anda</td>
                    </tr>
                </table>
            </div>
        </div>
>>>>>>> d184cef18c30ca428497ac257f46e71a92ae6ce9

<script>feather.replace();</script>

</body>

</html>
