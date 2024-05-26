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

</head>
<body>

    <!-- partial navbar -->
    @include('Admin.layout.navbar')
    <!-- end partial navbar -->

    <!-- partial sidebar -->
    @include('Admin.layout.sidebar')
    <!-- end sidebar partial -->

    <!-- Main Content -->
    <div class="navbar" style="max-width: 100%; min-height: 60px; align-items: center; display: flex; justify-content: space-between; background: rgb(255, 255, 255); margin-left: 214px;">
    <div class="left" style="padding-left: 20px;">
      <!-- Your left section content here -->

    <!-- Profile Section -->

        @foreach ($tentang1 as $item)

        <section class="profile" style="display: flex; min-height: 100vh; background-position: center; align-items: center; background-repeat: no-repeat;">
            <div class="content" style="padding: 1.4rem 7%; width: 100%;">
                <h1 style="font-size: 3rem; font-family: 'Playfair Display'; color: #8e181f;">WE ARE NOW <br />WE ARE LATER</h1>
                <p>{{$item->description}}</p>
            </div>
            <div class="profile-img" style="flex: 1 1 45rem; cursor: pointer;">
                <div class="button-position" style="display: row; text-align:center;">
                    <img src="{{ asset('assets/img/' . $item->img) }}" style="cursor: pointer;" width="400">
                    <input type="file" id="img" style="display: none;">
                    <button role="button" class="btn btn-sm btn-warning mr-2" data-bs-toggle="modal"
                    data-bs-target=".formEdit{{ $item->id }}"><i class="fas fa-edit"></i><span class="d-none d-sm-inline">
                        {{ __('Edit') }}</span></button>
                    </div>

                    <!-- Modal -->
<div class="modal fade formEdit{{ $item->id }}" tabindex="-1" role="dialog" aria-hidden="">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            @if (auth()->user()->usertype == 'admin')
                <form method="POST" action="{{ route('admin.homepage.update', $item->id) }}" enctype="multipart/form-data">
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
                            <div class="mb-3">
                                <label class="form-label">{{ __('Description') }}</label>
                                <textarea class="form-control @error('description') is-invalid @enderror" placeholder="description" name="description" id="description" rows="3">{{ old('description', $item->description) }}</textarea>
                                @error('description')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-12 text-center">
                            <div class="mb-3">
                                <label class="form-label">{{ __('Images') }}</label><br>
                                @if ($item->img == null)
                                    <img class="img-fluid rounded" width="200px" id="image-preview" src="{{ asset('assets/img/test.png') }}" >
                                @else
                                    <img class="img-fluid rounded" width="200px" id="image-preview" src="{{ asset('assets/img/' . $item->img) }}" >
                                @endif
                            </div>
                        </div>
                        <div class="col-md-12 text-center">
                            <div class="mb-3">
                                <input type="file" accept="image/*" id="image-input" class="form-control @error('img') is-invalid @enderror" placeholder="img" name="img" value="{{ old('img', $item->img) }}" enabled>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">{{ __('Tutup') }}</button>
                        <button type="submit" class="btn btn-primary">{{ __('Simpan') }}</button>
                    </div>
                </form>
            @endif
        </div>
    </div>
</div>

        </section>
@endforeach

    <!-- About Section -->
    @foreach ($tentang2 as $item)

    <section class="about" style="display: flex; min-height: 100vh; background-position: center;background-color: #efe9d3; align-items: center; background-repeat: no-repeat;">
        <div class="about-img" style="flex: 1 1 45rem;">
            <div class="button-position" style="display: row; text-align:center; ">
                <img src="{{ asset('assets/img/' . $item->img) }}" style="cursor: pointer;" width="400">
                <input type="file" id="about-image" style="display: none;">
                <button role="button" class="btn btn-sm btn-warning mr-2" data-bs-toggle="modal"
                data-bs-target=".formEdit{{ $item->id }}"><i class="fas fa-edit"></i><span class="d-none d-sm-inline">
                    {{ __('Edit') }}</span></button>
                </div>
            </div>
            <div class="content" style="padding: 1.4rem 7%; width: 100%;">
                <h1 style="font-size: 3rem; font-family: 'Playfair Display'; color: #8e181f;">ABOUT OUR CAFE</h1>
                <p>{{$item->description}}</p>
            </div>

            <!-- Modal -->
            <div class="modal fade formEdit{{ $item->id }}" tabindex="-1" role="dialog" aria-hidden="">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            @if (auth()->user()->usertype == 'admin')
            <form method="POST" action="{{ route('admin.homepage.update', $item->id) }}" enctype="multipart/form-data">
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
                            <div class="mb-3">
                                <label class="form-label">{{ __('Description') }}</label>
                                <textarea class="form-control @error('description') is-invalid @enderror" placeholder="description" name="description" id="description" rows="3">{{ old('description', $item->description) }}</textarea>
                                @error('description')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-12 text-center">
                            <div class="mb-3">
                                <label class="form-label">{{ __('Images') }}</label><br>
                                @if ($item->img == null)
                                <img class="img-fluid rounded" width="200px" id="image-preview" src="{{ asset('assets/img/test.png') }}" >
                                @else
                                <img class="img-fluid rounded" width="200px" id="image-preview" src="{{ asset('assets/img/' . $item->img) }}" >
                                @endif
                            </div>
                        </div>
                        <div class="col-md-12 text-center">
                            <div class="mb-3">
                                <input type="file" accept="image/*" id="image-input" class="form-control @error('img') is-invalid @enderror" placeholder="img" name="img" value="{{ old('img', $item->img) }}" enabled>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">{{ __('Tutup') }}</button>
                        <button type="submit" class="btn btn-primary">{{ __('Simpan') }}</button>
                    </div>
                </form>
            @endif
        </div>
    </div>
</div>

    </section>
    @endforeach

    <!-- Explore Section -->
    @foreach ($tentang3 as $item)

    <section class="explore" style="text-align: center; background-color: #ffffff; font-size: 2rem; min-height: 82vh; font-family: 'Playfair Display'; color: var(--font); margin-top: 7rem;">
        <div class="content">
            <h1 style="color: var(--font); margin-top: 10rem; margin-bottom: 3rem;">EXPLORE OUR CAFE</h1>
            <p style="color: #000000; font-size: 15px; margin-bottom: 3rem; margin-left:1rem; margin-right:1rem;">{{$item->description}}</p>
        </div>
        <input type="file" id="explore-image" style="display: none;">
        <button role="button" class="btn btn-sm btn-warning mr-2" data-bs-toggle="modal"
                data-bs-target=".formEdit{{ $item->id }}"><i class="fas fa-edit"></i><span class="d-none d-sm-inline">
                    {{ __('Edit') }}</span></button>
        <div class="button-position" style="display: row; text-align:center;">
            <div class="row" style="display: flex; justify-content: center;">
                <div class="product-card" style="margin: 1rem; background-color: #f9f9f9; width: 15rem;">
                    <img src="{{ asset('img/makanan.jpeg') }}" alt="Product 1" style="width: 100%; height: 12rem;">
                    <h3>FOOD</h3>
                    <div class="product-price" style="margin-bottom: 25px; font-size:25px;">Explore More <i class="fas fa-angle-right"></i></div>
                </div>

                <div class="product-card" style="margin: 1rem; background-color: #f9f9f9; width: 15rem;">
                    <img src="{{ asset('img/minuman.jpeg') }}" alt="Product 1" style="width: 100%; height: 12rem;">
                    <h3>DRINK</h3>
                    <div class="product-price" style="margin-bottom: 25px; font-size:25px;">Explore More <i class="fas fa-angle-right"></i></div>
                </div>
            </div>



            <!-- Modal -->
            <div class="modal fade formEdit{{ $item->id }}" tabindex="-1" role="dialog" aria-hidden="">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        @if (auth()->user()->usertype == 'admin')
                        <form method="POST" action="{{ route('admin.homepage.update', $item->id) }}" enctype="multipart/form-data">
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
                                        <div class="mb-3">
                                            <label class="form-label">{{ __('Description') }}</label>
                                            <textarea class="form-control @error('description') is-invalid @enderror" placeholder="description" name="description" id="description" rows="3">{{ old('description', $item->description) }}</textarea>
                                            @error('description')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">{{ __('Tutup') }}</button>
                                    <button type="submit" class="btn btn-primary">{{ __('Simpan') }}</button>
                                </div>
                            </form>
                        @endif
                    </div>
                </div>
            </div>
        </section>
        @endforeach


        <!-- Visit Section -->
        <section class="visit" style="display: flex; min-height: 100vh; background-position: center; background-color: #efe9d3; text-align: center; background-repeat: no-repeat;">
            <div class="map ml-5" style="margin-top: 2rem; background-color: #efe9d3;">
              <h1 style="font-size: 3rem; margin-top: 3rem; margin-bottom: 80px; font-family: 'Playfair Display'; color: #000000;">Visit Us</h1>
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3972.288337559558!2d105.2946103750661!3d-5.372927194605946!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e40dbec06ecf971%3A0x72254ee91c02e052!2sKopi%20Hitado!5e0!3m2!1sen!2sid!4v1712031354358!5m2!1sen!2sid" width="600" height="450" style="border: 0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="jadwal" style="flex: 1 1 50rem; width: 100%; object-fit: cover;">
                <h2 style="margin-top: 13rem; align-items: center;">WE ARE OPEN ON:</h2>
                <div class="buka -ml-3" style="display: flex; max-width: 100%; overflow-x: auto; align-items: center; flex-direction: column; padding-top: 1rem;">
                  <div class="bungkus" style="border: 1px dashed #000000; padding: 30px;">
                      <h3 style="align-items: center; padding: 10px;">Senin ------------------ 15:00 PM - 24:00 AM</h3>
                      <h3 style="align-items: center; padding: 10px;">Selasa ------------------ 15:00 PM - 24:00 AM</h3>
                      <h3 style="align-items: center; padding: 10px;">Rabu ------------------ 15:00 PM - 24:00 AM</h3>
                      <h3 style="align-items: center; padding: 10px;">Kamis ------------------ 15:00 PM - 24:00 AM</h3>
                      <h3 style="align-items: center; padding: 10px;">Jumat ------------------ 15:00 PM - 24:00 AM</h3>
                  </div>
              </div>
        </div>
      </section>

    </div>
  </div>
  <!-- Script to replace feather icons -->
  <script>feather.replace();</script>
  <!-- Your JavaScript file -->
  @include('Admin.asset.script')
</body>
</html>
