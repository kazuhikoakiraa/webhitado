<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>KOPI HITADO | Inventori Masuk</title>

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

    <div class="left" style="padding-left: 20px; margin-left: 220px;">
        <div style="font-family: Arial, sans-serif; margin: 0; padding: 0;">
            <div style="max-width: 900px; margin: 20px auto; padding: 20px; background-color: #EFE9D3; border-radius: 5px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);">
                <h1 style="text-align: center; font-family: 'Playfair Display'; margin-bottom: 40px;">Inventori Masuk   </h1>
                <!-- Tombol Tambah Inventori -->
                <div style="margin-bottom: 20px;">
                    <button onclick="inventoriAdd()" style="background-color: #8B4233; color: white; float:right; margin-top:2px; padding: 5px 10px; font-size:10px; border: none; border-radius: 5px; cursor: pointer; margin-right:30px;  display:flex;">Tambah Inventori</button>
                    <h4 style="margin-top: 60px; font-family: 'Playfair Display';">Inventori Dapur</h4>
                    <div id="addInventori" class="modal" style="display: none; position: fixed; margin-left:150px; z-index: 1; left: 0; top: 0; width: 100%; height: 100%; overflow: auto; background-color: rgba(0, 0, 0, 0.4);">
                        <div class="modal-content" style="background-color: #fefefe; margin: 15% auto; padding: 20px; border: 1px solid #888; width: 60%;">
                        <!-- Modal content -->
                            <span onclick="closeAdd()" style="color: #aaa; float: right; font-size: 28px; font-weight: bold;">&times;</span>
                            <h2 style="margin-bottom: 20px;">Tambah Inventori</h2>
                            <form action="">
                                <label>Pilihan Kategori:</label><br>
                                <select name="kategori" id="kategori" style="border: 1px solid #ccc; border-radius: 5px; padding:10px; width: 100%;">
                                    <option value="kitchen">Inventori Dapur</option>
                                    <option value="bar">Inventori Bar</option>
                                </select><br>
                                <label for="id_barang">ID Barang:</label><br>
                                <input type="text" id="id_barang" name=id_barang" placeholder="Masukkan ID Barang" style="padding: 10px; width: 100%; border-radius: 5px; border: 1px solid #ccc; margin-bottom: 10px;"><br>
                                <label for="barang_name">Nama Barang:</label><br>
                                <input type="text" id="barang_name" name="barang_name" placeholder="Masukkan Nama Barang" style="padding: 10px; width: 100%; border-radius: 5px; border: 1px solid #ccc; margin-bottom: 10px;"><br>
                                <label for="barang_price">Harga Barang:</label><br>
                                <input type="number" id="barang_price" name="barang_price" placeholder="Masukkan Harga Barang"  style="padding: 10px; width: 100%; border-radius: 5px; border: 1px solid #ccc; margin-bottom: 10px;"><br>
                                <label for="quantitiy">Jumlah Barang:</label><br>
                                <div class="quantitiy" id="quantitiy" name="quantitiy" style="display:flex; padding: 10px; border-radius: 5px; width: 50%; border: 1px solid #ccc; margin-bottom: 10px;" >
                                    <input type="number" placeholder="Jumlah Barang" style="border: 0; margin-right:5px; width: 85%;">
                                    <select name="quantity" id="quantity" style="float: right; border: 0;">
                                    <option value="gram">Kilogram</option>
                                    <option value="mililiter">Liter</option>
                                    <option value="gram">Gram</option>
                                    <option value="mililiter">Mili-liter</option>
                                    </select><br>
                                </div>
                                <button onclick="simpanAdd()" type="submit" style="background-color: #8B4233; color: white; padding: 10px 20px; border: none; border-radius: 5px; cursor: pointer;">Simpan</button>
                            </form>
                        </div>
                    </div>
                <!-- End Tombol Tambah -->
                <table style="width: 100%; border-collapse: collapse; margin-top: 20px; background-color: #ffffff; border-radius:15px;">
                    <tr>
                        <th style="padding: 10px; border-bottom: 1px solid #ddd; background-color: #ffffff; border-radius: 15px 0px 0px 0px;">ID Barang</th>
                        <th style="padding: 10px; border-bottom: 1px solid #ddd; background-color: #ffffff;">Nama Barang</th>
                        <th style="padding: 10px; border-bottom: 1px solid #ddd; background-color: #ffffff;">Harga Barang</th>
                        <th style="padding: 10px; border-bottom: 1px solid #ddd; background-color: #ffffff;">Jumlah Barang</th>
                        <th style="padding: 10px; border-bottom: 1px solid #ddd; background-color: #ffffff; border-radius: 0px 15px 0px 0px;">Aksi</th>
                    </tr>
                    <tr>
                        <td style="padding: 10px; border-bottom: 1px solid #ddd;">B0384</td>
                        <td style="padding: 10px; border-bottom: 1px solid #ddd;">Beras</td>
                        <td style="padding: 10px; border-bottom: 1px solid #ddd;">Rp 65.000</td>
                        <td style="padding: 10px; border-bottom: 1px solid #ddd;">5 Kg</td>
                        <td style="padding: 10px; border-bottom: 1px solid #ddd;">
                            <button onclick="editInventori()" style="background-color: #8B4233; color: white; padding: 5px 10px; font-size:10px; border: none; border-radius: 5px; cursor: pointer;">Edit</button>
                            <button style="background-color: #8E181F; color: white; padding: 5px 10px; font-size:10px; border: none; border-radius: 3px; cursor: pointer;">Hapus</button>
                        </td>
                    </tr>
                    </table>
                </div>
                <!-- Table for Minuman -->
                <h4 style="margin-top: 50px; font-family: 'Playfair Display';">Inventori Bar</h4>
                <table style="width: 100%; border-collapse: collapse; margin-top: 20px; background-color: #ffffff; border-radius:15px;">
                    <tr>
                        <th style="padding: 10px; border-bottom: 1px solid #ddd; background-color: #ffffff; border-radius: 15px 0px 0px 0px;">ID Barang</th>
                        <th style="padding: 10px; border-bottom: 1px solid #ddd; background-color: #ffffff;">Nama Barang</th>
                        <th style="padding: 10px; border-bottom: 1px solid #ddd; background-color: #ffffff;">Harga Barang</th>
                        <th style="padding: 10px; border-bottom: 1px solid #ddd; background-color: #ffffff;">Jumlah Barang</th>
                        <th style="padding: 10px; border-bottom: 1px solid #ddd; background-color: #ffffff; border-radius: 0px 15px 0px 0px;">Aksi</th>
                    </tr>

                    <!-- Sample data for Minuman -->
                    <tr>
                        <td style="padding: 10px; border-bottom: 1px solid #ddd;">B0384</td>
                        <td style="padding: 10px; border-bottom: 1px solid #ddd;">Beras</td>
                        <td style="padding: 10px; border-bottom: 1px solid #ddd;">Rp 65.000</td>
                        <td style="padding: 10px; border-bottom: 1px solid #ddd;">5 Kg</td>
                        <td style="padding: 10px; border-bottom: 1px solid #ddd;">
                            <button onclick="editInventori()" style="background-color: #8B4233; color: white; padding: 5px 10px; font-size:10px; border: none; border-radius: 5px; cursor: pointer;">Edit</button>
                            <button style="background-color: #8E181F; color: white; padding: 5px 10px; font-size:10px; border: none; border-radius: 3px; cursor: pointer;">Hapus</button>
                        </td>
                    </tr>
                </table>

                <!-- Modal Edit -->
                <div id="editInventori" class="editInventori" style="display: none; position: fixed; margin-left:150px; z-index: 1; left: 0; top: 0; width: 100%; height: 100%; overflow: auto; background-color: rgba(0, 0, 0, 0.4);">
                    <div class="modal-content" style="background-color: #fefefe; margin: 15% auto; padding: 20px; border: 1px solid #888; width: 60%;">
                        <!-- Modal content -->
                        <span onclick="closeEdit()" style="color: #aaa; float: right; font-size: 28px; font-weight: bold;">&times;</span>
                        <h2 style="margin-bottom: 20px;">Edit Barang</h2>
                        <form action="">
                            <label>Pilihan Kategori:</label><br>
                            <select name="kategori" id="kategori" style="border: 1px solid #ccc; border-radius: 5px; padding:10px; width: 100%;">
                                <option value="kitchen">Inventori Dapur</option>
                                <option value="bar">Inventori Bar</option>
                            </select><br>
                            <label for="id_barang">ID Barang:</label><br>
                            <input type="text" id="id_barang" name=id_barang" placeholder="Masukkan ID Barang" style="padding: 10px; width: 100%; border-radius: 5px; border: 1px solid #ccc; margin-bottom: 10px;"><br>
                            <label for="barang_name">Nama Barang:</label><br>
                            <input type="text" id="barang_name" name="barang_name" placeholder="Masukkan Nama Barang" style="padding: 10px; width: 100%; border-radius: 5px; border: 1px solid #ccc; margin-bottom: 10px;"><br>
                            <label for="barang_price">Harga Barang:</label><br>
                            <input type="number" id="barang_price" name="barang_price" placeholder="Masukkan Harga Barang"  style="padding: 10px; width: 100%; border-radius: 5px; border: 1px solid #ccc; margin-bottom: 10px;"><br>
                            <label for="quantitiy">Jumlah Barang:</label><br>
                            <div class="quantitiy" id="quantitiy" name="quantitiy" style="display:flex; padding: 10px; border-radius: 5px; width: 50%; border: 1px solid #ccc; margin-bottom: 10px;" >
                                <input type="number" placeholder="Jumlah Barang" style="border: 0; margin-right:5px; width: 85%;">
                                <select name="quantity" id="quantity" style="float: right; border: 0;">
                                <option value="gram">Kilogram</option>
                                <option value="mililiter">Liter</option>
                                <option value="gram">Gram</option>
                                <option value="mililiter">Mili-liter</option>
                                </select><br>
                            </div>
                            <button onclick="simpanEdit()" type="submit" style="background-color: #8B4233; color: white; padding: 10px 20px; border: none; border-radius: 5px; cursor: pointer;">Simpan</button>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- partial script -->
    @include('Admin.asset.script')
    <!-- end partial script -->

</body>

</html>
