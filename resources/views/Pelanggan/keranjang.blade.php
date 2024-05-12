<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>KOPI HITADO | Keranjang</title>
    <script src="https://unpkg.com/feather-icons"></script>

    <!-- Style partial -->
    @include('Pelanggan.layout.style')
    <!-- end Style Partial -->

</head>

<body>
    <!-- partial navbar -->
    @include('Pelanggan.layout.pelanggan-navbar')
    <!-- end partial navbar -->

    <!-- Pemesanan start -->
    <section class="pesanan" style="background-color: #f8f9fa; display: flex; justify-content: center; align-items: center; padding-top: 50px; text-align: center;">
        <form class="order" action="" method="POST" style="background-color: #efe9d3; padding: auto; margin: 50px; border-radius: 10px; justify-content: center;">
            @csrf
            <h2 style="text-align: center; margin-top: 30px; font-size: 2.3rem; font-family:'Playfair Display';"> Pesanan</h2>
            <div style=" background-color: #f8f9fa; margin: 30px; display: flex;  width: 180px; border-radius:10px; justify-content:center;">
                <div class="place" style="text-align: left; margin: 10px;">
                    <label for="place" class="mr-3"> Nomor Meja </label>
                    <input type="number" name="place" class="input-responsive" value="1" required style="width: 50px; padding: 5px; border: 1px solid #c6c5c5; border-radius: 5px; text-align:center;">
                </div>
            </div>
            <fieldset style="border: none; background-color: #f8f9fa; padding: 10px 120px; margin: 30px; display: flex;">
                <div class="food-menu-img" style="text-align: left; margin: 20px;">
                    <img src="{{ asset('img/minuman.jpeg') }}" alt="Chicke Hawain Pizza" class="img-responsive img-curve">
                </div>
                <div class="food-menu-desc" style="text-align: left; justify-content: center; margin: 40px;">
                    <h3 style="font-size: 1.5rem; margin-top: 10px; margin-bottom: 10px; color: #000000; font-family: 'DM Sans';">Chicken-rice</h3>
                    <p class="food-price" style="color: #8e181f; font-weight: bold;">Rp. 40.000</p>
                    <div class="input-container" style="display: flex; flex-direction: column; margin-top: 10px;">
                        <textarea name="notes" placeholder="Tambahkan Catatan" class="input-notes" required style="width: 200px; padding: 5px; border: 1px solid #c6c5c5; border-radius: 5px;"></textarea>
                        <label for="Quantity" class="mt-2 mb-0"> Jumlah Pesanan</label>
                        <input type="number" name="qty" class="input-responsive" value="1" required style="width: 50px; padding: 5px; border: 1px solid #c6c5c5; border-radius: 5px;">
                </div>
            </fieldset>
            
            <div class="checkout" style="margin-top: 20px; margin-bottom: 20px;">
                <button type="submit" style="border: 1px solid #8e181f; padding: 10px 200px; background-color: transparent; color: #8e181f; cursor: pointer; transition: all 0.3s ease;">CHECKOUT</button>
            </div>
        </form>
    </section>
    <!-- Pemesanan end -->


    <!-- partial footbar -->
    @include('Pelanggan.layout.pelanggan-footbar')
    <!-- end partial footbar -->

    <script>
        feather.replace();
    </script>

</body>

</html>
