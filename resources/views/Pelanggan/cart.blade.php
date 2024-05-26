<!DOCTYPE html>
<html>
<head>
    <title>Keranjang Belanja</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            color: #333;
        }
        h1 {
            text-align: center;
            margin-top: 20px;
        }
        table {
            width: 80%;
            margin: 20px auto;
            border-collapse: collapse;
        }
        th, td {
            padding: 15px;
            text-align: center;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #8e181f;
            color: #fff;
        }
        tr:hover {
            background-color: #f1f1f1;
        }
        button {
            background-color: #8e181f;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        button:hover {
            background-color: #721c24;
        }
        button:disabled {
            background-color: #ccc;
            cursor: not-allowed;
        }
        .cart-actions {
            text-align: center;
            margin: 20px;
        }
        .cart-actions form, .cart-actions a {
            display: inline-block;
            margin: 0 10px;
        }
        .product-img {
            width: 100px;
            height: auto;
            border-radius: 10px;
        }
        .alert {
            width: 80%;
            margin: 20px auto;
            padding: 20px;
            background-color: #d4edda;
            color: #155724;
            border: 1px solid #c3e6cb;
            border-radius: 5px;
            text-align: center;
        }
        .table-select {
            margin: 20px auto;
            text-align: center;
        }
    </style>
</head>
<body>
    <h1>Keranjang Belanja</h1>

    @if(session('success'))
        <div class="alert">{{ session('success') }}</div>
    @endif

    @if(count($cart) > 0)
        <table>
            <thead>
                <tr>
                    <th>Produk</th>
                    <th>Gambar</th>
                    <th>Harga</th>
                    <th>Kuantitas</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($cart as $productId => $item)
                <tr>
                    <td>{{ $item['name'] }}</td>
                    <td><img src="{{ asset('assets/img/' . $item['img']) }}" alt="{{ $item['name'] }}" class="product-img"></td>
                    <td>Rp. {{ number_format($item['price'], 0, ',', '.') }}</td>
                    <td>{{ $item['quantity'] }}</td>
                    <td>
                        <form action="{{ route('cart.remove', $productId) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

        <div class="table-select">
            <form action="{{ route('cart.selectTable') }}" method="POST">
                @csrf
                <label for="table_number">Nomor Meja:</label>
                <select id="table_number" name="table_number" required>
                    <option value="">Pilih Nomor Meja</option>
                    @for ($i = 1; $i <= 10; $i++)
                        <option value="{{ $i }}">Meja {{ $i }}</option>
                    @endfor
                </select>
                <button type="submit">Pilih Meja</button>
            </form>
        </div>
    @else
        <div class="alert">Keranjang belanja Anda kosong!</div>
    @endif

    <div class="cart-actions">
        <form action="{{ route('cart.clear') }}" method="POST">
            @csrf
            <button type="submit">Kosongkan Keranjang</button>
        </form>

        <a href="{{ url('/pelanggan-menu') }}">
            <button type="button">Kembali ke Menu</button>
        </a>

        <a href="{{ route('order.detail') }}">
            <button type="button" @if(count($cart) === 0) disabled @endif>Checkout</button>
        </a>
    </div>

    <script>
        // JavaScript validation to enable/disable checkout button based on table selection
        document.getElementById('selectTableBtn').addEventListener('click', function(event) {
            var tableNumber = document.getElementById('table_number').value;
            if (tableNumber === '') {
                event.preventDefault(); // Prevent form submission
                alert('Silakan pilih nomor meja sebelum melanjutkan.');
            }
        });

        // Enable/disable checkout button based on table selection
        document.getElementById('table_number').addEventListener('change', function() {
            var checkoutBtn = document.getElementById('checkoutBtn');
            if (this.value === '') {
                checkoutBtn.setAttribute('disabled', 'disabled');
            } else {
                checkoutBtn.removeAttribute('disabled');
            }
        });
    </script>

</body>
</html>
