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

    <div class="left" style="padding-left: 20px; margin-left: 220px; margin-top:100px;">
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
                            <form action="{{route('admin.incoming.store')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <label>Pilihan Kategori:</label><br>
                                <select name="kategori" id="kategori" style="border: 1px solid #ccc; border-radius: 5px; padding:10px; width: 100%;">
                                    <option value="Makanan">Makanan</option>
                                    <option value="Minuman">Minuman</option>
                                </select><br>
                                <label for="item_id">ID Barang:</label><br>
                                <input type="text" id="item_id" name="item_id" placeholder="Masukkan ID Barang" style="padding: 10px; width: 100%; border-radius: 5px; border: 1px solid #ccc; margin-bottom: 10px;"><br>
                                <label for="nama">Nama Barang:</label><br>
                                <input type="text" id="nama" name="nama" placeholder="Masukkan Nama Barang" style="padding: 10px; width: 100%; border-radius: 5px; border: 1px solid #ccc; margin-bottom: 10px;"><br>
                                <label for="harga">Harga Barang:</label><br>
                                <input type="number" id="harga" name="harga" placeholder="Masukkan Harga Barang"  style="padding: 10px; width: 100%; border-radius: 5px; border: 1px solid #ccc; margin-bottom: 10px;"><br>
                                <label for="stock">Jumlah Barang:</label><br>
                                <div class="stock" style="display:flex; padding: 10px; border-radius: 5px; width: 50%; border: 1px solid #ccc; margin-bottom: 10px;" >
                                    <input type="number" id="stock" name="stock" placeholder="Jumlah Barang" style="border: 0; margin-right:5px; width: 85%;">
                                    <select name="satuan" id="satuan" style="float: right; border: 0;">
                                    <option value="Kilogram">Kilogram</option>
                                    <option value="Liter">Liter</option>
                                    <option value="Gram">Gram</option>
                                    <option value="Mililiter">Mili-liter</option>
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
                    @foreach ($dapur as $dapur )
                    <tr>
                        <td style="padding: 10px; border-bottom: 1px solid #ddd;">{{$loop->iteration}}</td>
                        <td style="padding: 10px; border-bottom: 1px solid #ddd;">{{$dapur->nama}}</td>
                        <td style="padding: 10px; border-bottom: 1px solid #ddd;">{{$dapur->harga}}</td>
                        <td style="padding: 10px; border-bottom: 1px solid #ddd;">{{$dapur->stock}} {{$dapur->satuan}}</td>
                        <td style="padding: 10px; border-bottom: 1px solid #ddd;">
                            <button role="button" class="btn btn-sm btn-warning mr-2" data-bs-toggle="modal"
                            data-bs-target=".formEdit{{ $dapur->id }}" style="background-color: #8B4233; color: white; padding: 5px 10px; font-size:10px; border: none; border-radius: 5px; cursor: pointer;">Edit</button>

                            <!-- Modal -->
                            <div class="modal fade formEdit{{ $dapur->id }}" tabindex="-1" role="dialog" aria-hidden="">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                            <form method="POST" action="{{ route('admin.incoming.update', $dapur->id) }}"
                                                enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="modalFormLabel">{{ __('Edit Data') }}
                                            </h5>
                                            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row">
                                                <label>Pilihan Kategori:</label><br>
                                                <select name="kategori" id="kategori" style="border: 1px solid #ccc; border-radius: 5px; padding:10px; width: 100%;">
                                                    <option value="{{$dapur->kategori}}">{{$dapur->kategori}}</option>
                                                </select><br>
                                                <label for="item_id">ID Barang:</label><br>
                                                <input value="{{$dapur->item_id}}" type="text" id="item_id" name="item_id" placeholder="Masukkan ID Barang" style="padding: 10px; width: 100%; border-radius: 5px; border: 1px solid #ccc; margin-bottom: 10px;"><br>
                                                <label for="nama">Nama Barang:</label><br>
                                                <input value="{{$dapur->nama}}" type="text" id="nama" name="nama" placeholder="Masukkan Nama Barang" style="padding: 10px; width: 100%; border-radius: 5px; border: 1px solid #ccc; margin-bottom: 10px;"><br>
                                                <label for="harga">Harga Barang:</label><br>
                                                <input value="{{$dapur->harga}}" type="number" id="harga" name="harga" placeholder="Masukkan Harga Barang"  style="padding: 10px; width: 100%; border-radius: 5px; border: 1px solid #ccc; margin-bottom: 10px;"><br>
                                                <label for="stock">Jumlah Barang:</label><br>
                                                <div class="stock" style="display:flex; padding: 10px; border-radius: 5px; width: 50%; border: 1px solid #ccc; margin-bottom: 10px;" >
                                                    <input value="{{$dapur->stock}}" type="number" id="stock" name="stock" placeholder="Jumlah Barang" style="border: 0; margin-right:5px; width: 85%;">
                                                    <select name="satuan" id="satuan" style="float: right; border: 0;">
                                                    <option value="{{$dapur->satuan}}">{{$dapur->satuan}}</option>
                                                    <option value="Kilogram">Kilogram</option>
                                                    <option value="Liter">Liter</option>
                                                    <option value="Gram">Gram</option>
                                                    <option value="Mililiter">Mili-liter</option>
                                                    </select><br>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">{{ __('Tutup') }}</button>
                                            <button type="submit" class="btn btn-primary">{{ __('Simpan') }}</button>
                                        </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                            <button style="background-color: #8E181F; color: white; padding: 5px 10px; font-size:10px; border: none; border-radius: 3px; cursor: pointer;" class="delete-button" data-bs-toggle="modal"
                            data-bs-target=".bd-example-modal-sm{{ $dapur->id }}">Hapus</button>

                            <!-- Modal -->
                            <div class="modal fade bd-example-modal-sm{{ $dapur->id }}" tabindex="-1" role="dialog" aria-hidden="">
                            <div class="modal-dialog ">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">{{ __('Hapus Data') }}
                                        </h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal">
                                        </button>
                                    </div>
                                    <div class="modal-body">Apakah anda yakin ingin menghapus data?</div>
                                    <div class="modal-footer">
                                        <form action="{{ route('admin.incoming.destroy', $dapur->id) }}" method="POST">
                                            @method('DELETE')
                                            @csrf
                                            <input type="submit" class="btn btn-danger light" name="" id="" value="Hapus">
                                            <button type="button" class="btn btn-primary" data-bs-dismiss="modal">{{ __('Tidak') }}</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            </div>

                        </td>
                    </tr>
                    @endforeach
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
                    @foreach ($bar as $bar )
                    <tr>
                        <td style="padding: 10px; border-bottom: 1px solid #ddd;">{{$loop->iteration}}</td>
                        <td style="padding: 10px; border-bottom: 1px solid #ddd;">{{$bar->nama}}</td>
                        <td style="padding: 10px; border-bottom: 1px solid #ddd;">{{$bar->harga}}</td>
                        <td style="padding: 10px; border-bottom: 1px solid #ddd;">{{$bar->stock}} {{$bar->satuan}}</td>
                        <td style="padding: 10px; border-bottom: 1px solid #ddd;">
                            <button role="button" class="btn btn-sm btn-warning mr-2" data-bs-toggle="modal"
                            data-bs-target=".formEdit{{ $bar->id }}" style="background-color: #8B4233; color: white; padding: 5px 10px; font-size:10px; border: none; border-radius: 5px; cursor: pointer;">Edit</button>

                            <!-- Modal -->
                            <div class="modal fade formEdit{{ $bar->id }}" tabindex="-1" role="dialog" aria-hidden="">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                            <form method="POST" action="{{ route('admin.incoming.update', $bar->id) }}"
                                                enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="modalFormLabel">{{ __('Edit Data') }}
                                            </h5>
                                            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row">
                                                <label>Pilihan Kategori:</label><br>
                                                <select name="kategori" id="kategori" style="border: 1px solid #ccc; border-radius: 5px; padding:10px; width: 100%;">
                                                    <option value="{{$bar->kategori}}">{{$bar->kategori}}</option>
                                                </select><br>
                                                <label for="item_id">ID Barang:</label><br>
                                                <input value="{{$bar->item_id}}" type="text" id="item_id" name="item_id" placeholder="Masukkan ID Barang" style="padding: 10px; width: 100%; border-radius: 5px; border: 1px solid #ccc; margin-bottom: 10px;"><br>
                                                <label for="nama">Nama Barang:</label><br>
                                                <input value="{{$bar->nama}}" type="text" id="nama" name="nama" placeholder="Masukkan Nama Barang" style="padding: 10px; width: 100%; border-radius: 5px; border: 1px solid #ccc; margin-bottom: 10px;"><br>
                                                <label for="harga">Harga Barang:</label><br>
                                                <input value="{{$bar->harga}}" type="number" id="harga" name="harga" placeholder="Masukkan Harga Barang"  style="padding: 10px; width: 100%; border-radius: 5px; border: 1px solid #ccc; margin-bottom: 10px;"><br>
                                                <label for="stock">Jumlah Barang:</label><br>
                                                <div class="stock" style="display:flex; padding: 10px; border-radius: 5px; width: 50%; border: 1px solid #ccc; margin-bottom: 10px;" >
                                                    <input value="{{$bar->stock}}" type="number" id="stock" name="stock" placeholder="Jumlah Barang" style="border: 0; margin-right:5px; width: 85%;">
                                                    <select name="satuan" id="satuan" style="float: right; border: 0;">
                                                    <option value="{{$bar->satuan}}">{{$bar->satuan}}</option>
                                                    <option value="Kilogram">Kilogram</option>
                                                    <option value="Liter">Liter</option>
                                                    <option value="Gram">Gram</option>
                                                    <option value="Mililiter">Mili-liter</option>
                                                    </select><br>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">{{ __('Tutup') }}</button>
                                            <button type="submit" class="btn btn-primary">{{ __('Simpan') }}</button>
                                        </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <button style="background-color: #8E181F; color: white; padding: 5px 10px; font-size:10px; border: none; border-radius: 3px; cursor: pointer;" class="delete-button" data-bs-toggle="modal"
                            data-bs-target=".bd-example-modal-sm{{ $bar->id }}">Hapus</button>

                            <!-- Modal -->
                            <div class="modal fade bd-example-modal-sm{{ $bar->id }}" tabindex="-1" role="dialog" aria-hidden="">
                            <div class="modal-dialog ">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">{{ __('Hapus Data') }}
                                        </h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal">
                                        </button>
                                    </div>
                                    <div class="modal-body">Apakah anda yakin ingin menghapus data?</div>
                                    <div class="modal-footer">
                                        <form action="{{ route('admin.incoming.destroy', $bar->id) }}" method="POST">
                                            @method('DELETE')
                                            @csrf
                                            <input type="submit" class="btn btn-danger light" name="" id="" value="Hapus">
                                            <button type="button" class="btn btn-primary" data-bs-dismiss="modal">{{ __('Tidak') }}</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            </div>

                        </td>
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
