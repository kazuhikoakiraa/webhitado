<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>KOPI HITADO | Tentang Kami</title>

    <<!-- Style partial -->
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

    <!-- Main Content -->
    <div class="navbar" style="max-width: 100%; min-height: 60px; align-items: center; display: flex; justify-content: space-between; background: rgb(255, 255, 255); margin-left: 214px;">
    <div class="left" style="padding-left: 20px;">
      <!-- Your left section content here -->

    <!-- Profile Section -->
    <section class="profile" style="display: flex; min-height: 100vh; background-position: center; align-items: center; background-repeat: no-repeat;">
        <div class="content" style="padding: 1.4rem 7%; width: 100%;">
            <h1 style="font-size: 3rem; font-family: 'Playfair Display'; color: #8e181f;">WE ARE NOW <br />WE ARE LATER</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus lobortis elit et mi lobortis, sed varius tortor aliquam. Maecenas ac quam lacinia, Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus lobortis elit et mi lobortis, sed varius tortor aliquam. Maecenas ac quam lacinia,Lorem ipsum dolor sit amet, consectetur</p>
        </div>
        <div class="profile-img" style="flex: 1 1 45rem; cursor: pointer;">
            <div class="button-position" style="display: row; text-align:center;">
                <img src="{{ asset('img/logo.png') }}" alt="Profile" style="cursor: pointer;">
                <input type="file" id="profile-image" style="display: none;">
                <button type="button" class="btn-profil" style="margin-top: 10px; background-color:#8B4233;">Edit <i class="bi bi-pencil-square"></i></button>
            </div>
            <!-- Modal -->
            <div class="modal-profile" style="display: none; position:absolute; z-index: 999; left: 0; top: 0; width: 100%; height: 100%; overflow: auto; background-color: rgba(0, 0, 0, 0.5);">
                <div class="modal-content" style="background-color: #fefefe; margin: 15% auto; padding: 20px; border: 1px solid #888; width: 80%;">
                    <div>
                    <span class="close-modal" style="color: #000000; float: right; text-align:right; font-size: 25px; font-weight: bold;">&times;</span>
                    </div>
                    <h2 style="font-family: 'Playfair Display';">Edit Profil</h2>
                    <label for="profile-img" style="font-family: 'DM Sans';">Pilih Foto: </label>
                    <input type="file" id="new-profile-image">
                    <br>
                    <label for="profile-description" ;>Deskripsi: </label>
                    <textarea id="profile-description" rows="4" cols="50"></textarea>
                    <br>

                    <div class="modal-buttons" style="margin-top: 10px; text-align: center;">
                        <button class="btn-save" style="background-color: #8e181f; color: white; padding: 10px 20px; border: none; border-radius: 5px; cursor: pointer; margin: 0 5px;">Simpan</button>
                        <button class="btn-cancel" style="background-color: #8e181f; color: white; padding: 10px 20px; border: none; border-radius: 5px; cursor: pointer; margin: 0 5px;">Batal</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section class="about" style="display: flex; min-height: 100vh; background-position: center;background-color: #efe9d3; align-items: center; background-repeat: no-repeat;">
        <div class="about-img" style="flex: 1 1 45rem;">
            <div class="button-position" style="display: row; text-align:center; ">
                <img src="{{ asset('img/logo.png') }}" alt="ABOUT">
                <input type="file" id="about-image" style="display: none;">
                <button type="button" class="btn-about" style="margin-top: 10px; background-color:#8B4233;">Edit <i class="bi bi-pencil-square"></i></button>
            </div>
        </div>
        <div class="content" style="padding: 1.4rem 7%; width: 100%;">
            <h1 style="font-size: 3rem; font-family: 'Playfair Display'; color: #8e181f;">ABOUT OUR CAFE</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus lobortis elit et mi lobortis, sed varius tortor aliquam. Maecenas ac quam lacinia, Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus lobortis elit et mi lobortis, sed varius tortor aliquam. Maecenas ac quam lacinia,Lorem ipsum dolor sit amet, consectetur</p>
        </div>

        <!-- modal about -->
        <div class="modal" style="display: none; position:absolute; z-index: 999; left: 0; top: 0; width: 100%; height: 100%; overflow: auto; background-color: rgba(0, 0, 0, 0.5);">
                <div class="modal-content" style="background-color: #fefefe; margin: 75% auto; padding: 20px; border: 1px solid #888; width: 80%;">
                    <div>
                    <span class="close" style="color: #000000; float: right; text-align:right; font-size: 25px; font-weight: bold;">&times;</span>
                    </div>
                    <h2 style="font-family: 'Playfair Display';">Edit About</h2>
                    <label for="about-img" style="font-family: 'DM Sans';">Pilih Foto: </label>
                    <input type="file" id="about-img">
                    <br>
                    <label for="about-description" style="font-family: 'DM Sans';">Deskripsi: </label>
                    <textarea id="about-description" rows="4" cols="50"></textarea>
                    <br>

                    <div class="modal-buttons" style="margin-top: 10px; text-align: center;">
                        <button class="btn-save" style="background-color: #8e181f; color: white; padding: 10px 20px; border: none; border-radius: 5px; cursor: pointer; margin: 0 5px;">Simpan</button>
                        <button class="btn-cancel" style="background-color: #8e181f; color: white; padding: 10px 20px; border: none; border-radius: 5px; cursor: pointer; margin: 0 5px;">Batal</button>
                    </div>
                </div>
            </div>

    </section>

      <!-- Explore Section -->
      <section class="explore" style="text-align: center; background-color: #ffffff; font-size: 2rem; min-height: 82vh; font-family: 'Playfair Display'; color: var(--font); margin-top: 7rem;">
            <div class="content">
              <h1 style="color: var(--font); margin-top: 10rem; margin-bottom: 3rem;">EXPLORE OUR CAFE</h1>
              <p style="color: #000000; font-size: 15px; margin-bottom: 3rem; margin-left:1rem; margin-right:1rem;">Discover our wide selection of high-quality coffee beans from around the world.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus lobortis elit et mi lobortis, sed varius tortor aliquam. Maecenas ac quam lacinia, Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus lobortis elit et mi lobortis, sed varius tortor aliquam. Maecenas ac quam lacinia,Lorem ipsum dolor sit amet, consectetur</p>
            </div>
            <input type="file" id="explore-image" style="display: none;">
            <button type="button" class="btn-explore" style="margin: 10px; background-color:#8B4233; font-size:14px;">Edit <i class="bi bi-pencil-square"></i></button>
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


                <!-- Modal Explore-->
                <div class="modal-explore" style="display: none; position:absolute; z-index: 999; left: 0; top: 0; width: 100%; height: 100%; overflow: auto; background-color: rgba(0, 0, 0, 0.5);">
                    <div class="modal-content" style="background-color: #fefefe; margin: 175% auto; padding: 20px; border: 1px solid #888; width: 80%;">
                        <div>
                            <span class="close-explore" style="color: #000000; float: right; text-align:right; font-size: 25px; font-weight: bold;">&times;</span>
                        </div>
                        <div>
                            <h2 style="font-family: 'Playfair Display'; text-align:left;">Edit Explore</h2>

                            <label for="about-description" style="font-family: 'DM Sans';">Deskripsi: </label>
                            <textarea id="about-description" rows="4" cols="50"></textarea>
                            <br>
                        </div>
                        <div class="modal-buttons" style="margin-top: 10px;">
                            <button class="btn-save" style="background-color: #8e181f; color: white; padding: 10px 20px; border: none; border-radius: 5px; cursor: pointer; margin-right: 10px;">Simpan</button>
                            <button class="btn-cancel" style="background-color: #8e181f; color: white; padding: 10px 20px; border: none; border-radius: 5px; cursor: pointer;">Batal</button>
                        </div>
                    </div>
                </div>


            </div>
      </section>


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
  @include('Kasir.asset.script')
</body>
</html>
