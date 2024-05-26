<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>KOPI HITADO | Kelola Menu</title>

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
                <h1 style="text-align: center; font-family: 'Playfair Display'; margin-bottom: 40px;">Kelola Menu</h1>
                <div style="margin-bottom: 20px;">
                    <div class="search" style="display:flex; align-items: center; margin-left:25%">
                        <div class="search-box" style="align-items: center; border: 1px solid #cfbcae; border-radius: 5px; padding: 5px; width: 400px; height: 35px;">
                            <input type="text" placeholder="Search Product" style="border: none; outline: none; background-color: #EFE9D3;">
                        </div>
                        <div class="icon" style="color: #ffffff; background-color: #000000; border-radius: 5px; cursor: pointer; margin-left: 5px; height: 27px; width: 27px; display: flex; justify-content: center; align-items: center;">
                            <i class="fas fa-search"></i>
                        </div>
                    </div>
                    <button onclick="openAdd()" style="background-color: #8B4233; color: white; float:right; margin-bottom:10px; padding: 5px 10px; font-size:10px; border: none; border-radius: 5px; cursor: pointer; margin-top: 68px; margin-right:30px;  display:flex;">Tambah Menu</button>
                    <h2 style="margin-top: 60px; font-family: 'Playfair Display';">Makanan</h2>
                    <div id="addModal" class="modal" style="display: none; position: fixed; margin-left:150px; z-index: 1; left: 0; top: 0; width: 100%; height: 100%; overflow: auto; background-color: rgba(0, 0, 0, 0.4);">
                        <div class="modal-content" style="background-color: #fefefe; margin: 15% auto; padding: 20px; border: 1px solid #888; width: 60%;">
                            <!-- Modal content -->
                            <span onclick="closeAdd()" style="color: #aaa; float: right; font-size: 28px; font-weight: bold;">&times;</span>
                                <form action="{{ route('admin.product.store') }}" method="POST" enctype="multipart/form-data">
                                    <h1>Tambah Menu</h1>
                                    @csrf
                                    <label>Pilihan Kategori:</label><br>
                                    <select name="kategori" id="kategori" style="border: 1px solid #ccc; border-radius: 5px; padding:10px; width: 100%;">
                                        <option value="Makanan">Makanan</option>
                                        <option value="Minuman">Minuman</option>
                                    </select><br>

                                    <label class="form-label">{{ __('Images') }}</label>
                                    <input id="image-input" accept="image/*" type="file"
                                        class="form-control @error('img') is-invalid @enderror" placeholder="img" name="img"
                                        value="{{ old('img') }}">
                                    <img class="img-fluid py-3" id="image-preview" width="200px"
                                        src="{{ asset('assets/img/default.png') }}" alt="Image Preview">
                                    @error('img')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                    <br>

                                    <label for="id_product">ID Menu:</label><br>
                                    <input type="text" id="id_product" name="id_product" placeholder="Masukkan ID Menu"
                                        style="padding: 10px; width: 100%; border-radius: 5px; border: 1px solid #ccc; margin-bottom: 10px;"><br>

                                    <label for="nama">Nama Menu:</label><br>
                                    <input type="text" id="nama" name="nama" placeholder="Masukkan Nama Menu"
                                        style="padding: 10px; width: 100%; border-radius: 5px; border: 1px solid #ccc; margin-bottom: 10px;"><br>

                                    <label for="harga">Harga:</label><br>
                                    <input type="number" id="harga" name="harga" placeholder="Masukkan Harga Menu"
                                        style="padding: 10px; width: 100%; border-radius: 5px; border: 1px solid #ccc; margin-bottom: 10px;"><br>

                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">{{ __('Tutup') }}</button>
                                        <button type="submit" class="btn btn-primary">{{ __('Simpan') }}</button>
                                    </div>
                                </form>

                                <script>
                                    document.getElementById('image-input').addEventListener('change', function(event) {
                                        const file = event.target.files[0];
                                        const preview = document.getElementById('image-preview');

                                        if (file) {
                                            const reader = new FileReader();

                                            reader.onload = function(e) {
                                                preview.src = e.target.result;
                                            }

                                            reader.readAsDataURL(file);
                                        } else {
                                            preview.src = "{{ asset('assets/img/default.png') }}";
                                        }
                                    });
                                </script>

                            </div>
                        </div>
                    </div>

                <table style="width: 100%; border-collapse: collapse; margin-top: 20px; background-color: #ffffff; border-radius:15px;">
                    <thead>
                        <tr>
                            <th style="padding: 10px; border-bottom: 1px solid #ddd; background-color: #ffffff; border-radius: 15px 0px 0px 0px;">ID</th>
                            <th style="padding: 10px; border-bottom: 1px solid #ddd; background-color: #ffffff;">Nama Menu</th>
                            <th style="padding: 10px; border-bottom: 1px solid #ddd; background-color: #ffffff;">Harga</th>
                            <th style="padding: 10px; border-bottom: 1px solid #ddd; background-color: #ffffff; border-radius: 0px 15px 0px 0px;">Aksi</th>
                        </tr>

                    </thead>

                    <tbody>
                        @foreach ($product as $product)
                        <tr>
                            <td style="padding: 10px; border-bottom: 1px solid #ddd;">{{$loop->iteration }}</td>
                            <td style="padding: 10px; border-bottom: 1px solid #ddd;">{{$product->nama}}</td>
                            <td style="padding: 10px; border-bottom: 1px solid #ddd;">{{$product->harga}}</td>
                            <td style="padding: 10px; border-bottom: 1px solid #ddd;">
                                <button role="button" class="btn btn-sm btn-warning mr-2" data-bs-toggle="modal"
                            data-bs-target=".formEdit{{ $product->id }}" style="background-color: #8B4233; color: white; padding: 5px 10px; font-size:10px; border: none; border-radius: 5px; cursor: pointer;">Edit</button>

                            <!-- Modal -->
                            <div class="modal fade formEdit{{ $product->id }}" tabindex="-1" role="dialog" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <form method="POST" action="{{ route('admin.product.update', $product->id) }}" enctype="multipart/form-data">
                                            @csrf
                                            @method('PUT')
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="modalFormLabel">{{ __('Edit Data') }}</h5>
                                                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="row">
                                                    <label>Pilihan Kategori:</label><br>
                                                    <select name="kategori" id="kategori" style="border: 1px solid #ccc; border-radius: 5px; padding:10px; width: 100%;">
                                                        <option value="{{$product->kategori}}" selected>{{$product->kategori}}</option>
                                                        <option value="Makanan">Makanan</option>
                                                        <option value="Minuman">Minuman</option>
                                                        <!-- Tambahkan opsi kategori lainnya jika ada -->
                                                    </select><br>
                                                    <label for="id_product">ID Menu:</label><br>
                                                    <input value="{{$product->id_product}}" type="text" id="id_product" name="id_product" placeholder="Masukkan ID Menu" style="padding: 10px; width: 100%; border-radius: 5px; border: 1px solid #ccc; margin-bottom: 10px;"><br>
                                                    <label for="nama">Nama Menu:</label><br>
                                                    <input value="{{$product->nama}}" type="text" id="nama" name="nama" placeholder="Masukkan Nama Menu" style="padding: 10px; width: 100%; border-radius: 5px; border: 1px solid #ccc; margin-bottom: 10px;"><br>
                                                    <label for="harga">Harga Menu:</label><br>
                                                    <input value="{{$product->harga}}" type="number" id="harga" name="harga" placeholder="Masukkan Harga Menu"  style="padding: 10px; width: 100%; border-radius: 5px; border: 1px solid #ccc; margin-bottom: 10px;"><br>
                                                    <label class="form-label">{{ __('Images') }}</label><br>
                                                    @if ($product->img == null)
                                                        <img class="img-fluid rounded" width="200px" id="image-preview{{ $product->id }}"
                                                            src="{{ asset('assets/img/test.png') }}" >
                                                    @else
                                                        <img class="img-fluid rounded" width="200px" id="image-preview{{ $product->id }}"
                                                            src="{{ asset('assets/img/' . $product->img) }}" >
                                                    @endif
                                                    @error('images')
                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                    <input type="file" accept="image/*" id="image-input{{ $product->id }}"
                                                        class="form-control @error('img') is-invalid @enderror" placeholder="img" name="img">
                                                    @error('img')
                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
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

<script>
    document.getElementById('image-input{{ $product->id }}').addEventListener('change', function(event) {
        const file = event.target.files[0];
        const preview = document.getElementById('image-preview{{ $product->id }}');

        if (file) {
            const reader = new FileReader();

            reader.onload = function(e) {
                preview.src = e.target.result;
            }

            reader.readAsDataURL(file);
        } else {
            preview.src = "{{ $product->img ? asset('assets/img/' . $product->img) : asset('assets/img/test.png') }}";
        }
    });
</script>


                                <button style="background-color: #8E181F; color: white; padding: 5px 10px; font-size:10px; border: none; border-radius: 3px; cursor: pointer;" class="delete-button" data-bs-toggle="modal"
                                data-bs-target=".bd-example-modal-sm{{ $product->id }}">Hapus</button>

                                <!-- Modal -->
                                <div class="modal fade bd-example-modal-sm{{ $product->id }}" tabindex="-1" role="dialog" aria-hidden="">
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
                                            <form action="{{ route('admin.product.destroy', $product->id) }}" method="POST">
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

                    </tbody>

                </table>

                <!-- Table for Minuman -->
                <h2 style="margin-top: 50px; font-family: 'Playfair Display';">Minuman</h2>
                <table style="width: 100%; border-collapse: collapse; margin-top: 20px; background-color: #ffffff; border-radius:15px;">
                    <tr>
                        <th style="padding: 10px; border-bottom: 1px solid #ddd; background-color: #ffffff; border-radius: 15px 0px 0px 0px;">ID</th>
                        <th style="padding: 10px; border-bottom: 1px solid #ddd; background-color: #ffffff;">Nama Menu</th>
                        <th style="padding: 10px; border-bottom: 1px solid #ddd; background-color: #ffffff;">Harga</th>
                        <th style="padding: 10px; border-bottom: 1px solid #ddd; background-color: #ffffff; border-radius: 0px 15px 0px 0px;">Aksi</th>
                    </tr>

                    <!-- Sample data for Minuman -->
                    @foreach ($product2 as $product)
                    <tr>
                        <td style="padding: 10px; border-bottom: 1px solid #ddd;">{{$loop->iteration }}</td>
                        <td style="padding: 10px; border-bottom: 1px solid #ddd;">{{$product->nama}}</td>
                        <td style="padding: 10px; border-bottom: 1px solid #ddd;">{{$product->harga}}</td>
                        <td style="padding: 10px; border-bottom: 1px solid #ddd;">
                            <button role="button" class="btn btn-sm btn-warning mr-2" data-bs-toggle="modal"
                            data-bs-target=".formEdit{{ $product->id }}" style="background-color: #8B4233; color: white; padding: 5px 10px; font-size:10px; border: none; border-radius: 5px; cursor: pointer;">Edit</button>

                            <!-- Modal -->
                            <div class="modal fade formEdit{{ $product->id }}" tabindex="-1" role="dialog" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <form method="POST" action="{{ route('admin.product.update', $product->id) }}" enctype="multipart/form-data">
                                            @csrf
                                            @method('PUT')
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="modalFormLabel">{{ __('Edit Data') }}</h5>
                                                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="row">
                                                    <label>Pilihan Kategori:</label><br>
                                                    <select name="kategori" id="kategori" style="border: 1px solid #ccc; border-radius: 5px; padding:10px; width: 100%;">
                                                        <option value="{{$product->kategori}}" selected>{{$product->kategori}}</option>
                                                        <option value="Makanan">Makanan</option>
                                                        <option value="Minuman">Minuman</option>
                                                        <!-- Tambahkan opsi kategori lainnya jika ada -->
                                                    </select><br>
                                                    <label for="id_product">ID Menu:</label><br>
                                                    <input value="{{$product->id_product}}" type="text" id="id_product" name="id_product" placeholder="Masukkan ID Menu" style="padding: 10px; width: 100%; border-radius: 5px; border: 1px solid #ccc; margin-bottom: 10px;"><br>
                                                    <label for="nama">Nama Menu:</label><br>
                                                    <input value="{{$product->nama}}" type="text" id="nama" name="nama" placeholder="Masukkan Nama Menu" style="padding: 10px; width: 100%; border-radius: 5px; border: 1px solid #ccc; margin-bottom: 10px;"><br>
                                                    <label for="harga">Harga Menu:</label><br>
                                                    <input value="{{$product->harga}}" type="number" id="harga" name="harga" placeholder="Masukkan Harga Menu"  style="padding: 10px; width: 100%; border-radius: 5px; border: 1px solid #ccc; margin-bottom: 10px;"><br>
                                                    <label class="form-label">{{ __('Images') }}</label><br>
                                                    @if ($product->img == null)
                                                        <img class="img-fluid rounded" width="200px" id="image-preview{{ $product->id }}"
                                                            src="{{ asset('assets/img/test.png') }}" >
                                                    @else
                                                        <img class="img-fluid rounded" width="200px" id="image-preview{{ $product->id }}"
                                                            src="{{ asset('assets/img/' . $product->img) }}" >
                                                    @endif
                                                    @error('images')
                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                    <input type="file" accept="image/*" id="image-input{{ $product->id }}"
                                                        class="form-control @error('img') is-invalid @enderror" placeholder="img" name="img">
                                                    @error('img')
                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
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

<script>
    document.getElementById('image-input{{ $product->id }}').addEventListener('change', function(event) {
        const file = event.target.files[0];
        const preview = document.getElementById('image-preview{{ $product->id }}');

        if (file) {
            const reader = new FileReader();

            reader.onload = function(e) {
                preview.src = e.target.result;
            }

            reader.readAsDataURL(file);
        } else {
            preview.src = "{{ $product->img ? asset('assets/img/' . $product->img) : asset('assets/img/test.png') }}";
        }
    });
</script>
                            <button style="background-color: #8E181F; color: white; padding: 5px 10px; font-size:10px; border: none; border-radius: 3px; cursor: pointer;" class="delete-button" data-bs-toggle="modal"
                            data-bs-target=".bd-example-modal-sm{{ $product->id }}">Hapus</button>

                            <!-- Modal -->
                            <div class="modal fade bd-example-modal-sm{{ $product->id }}" tabindex="-1" role="dialog" aria-hidden="">
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
                                        <form action="{{ route('admin.product.destroy', $product->id) }}" method="POST">
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
