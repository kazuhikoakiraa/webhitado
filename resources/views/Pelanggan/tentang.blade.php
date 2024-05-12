<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>KOPI HITADO | Tentang Kami</title>
    <script src="https://unpkg.com/feather-icons"></script>

        <!-- Style partial -->
        @include('Pelanggan.layout.style')
        <!-- end Style Partial -->

</head>
<body>
        <!-- partial navbar -->
        @include('Pelanggan.layout.pelanggan-navbar')
        <!-- end partial navbar -->
    
    <!-- Main Content -->
        <!-- Profile Section -->
        <section class="profile" style="display: flex; min-height: 100vh; background-position: center; align-items: center; background-repeat: no-repeat;">
            <div class="content" style="padding: 1.4rem 7%; width: 100%;">
                <h1 style="font-size: 3rem; font-family: 'Playfair Display'; color: #8e181f; font-weight:bold; ">WE ARE NOW <br />WE ARE LATER</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus lobortis elit et mi lobortis, sed varius tortor aliquam. Maecenas ac quam lacinia, Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus lobortis elit et mi lobortis, sed varius tortor aliquam. Maecenas ac quam lacinia,Lorem ipsum dolor sit amet, consectetur</p>
            </div>
            <div class="profile-img" style="flex: 1 1 45rem; cursor: pointer;">
                <div class="button-position" style="display: row; text-align:center;">
                    <img src="{{ asset('img/logo.png') }}" alt="Profile" style="cursor: pointer;">
                    <input type="file" id="profile-image" style="display: none;">
                </div>
            </div>
        </section>

        <!-- About Section -->
        <section class="about" style="display: flex; min-height: 100vh; background-position: center;background-color: #efe9d3; align-items: center; background-repeat: no-repeat;">
            <div class="about-img" style="flex: 1 1 45rem;">
                <div class="button-position" style="display: row; text-align:center; ">
                    <img src="{{ asset('img/logo.png') }}" alt="ABOUT">
                    <input type="file" id="about-image" style="display: none;">
                </div>
            </div>
            <div class="content" style="padding: 1.4rem 7%; width: 100%;">
                <h1 style="font-size: 3rem; font-family: 'Playfair Display'; color: #8e181f; font-weight:bold;">ABOUT OUR CAFE</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus lobortis elit et mi lobortis, sed varius tortor aliquam. Maecenas ac quam lacinia, Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus lobortis elit et mi lobortis, sed varius tortor aliquam. Maecenas ac quam lacinia,Lorem ipsum dolor sit amet, consectetur</p>
            </div>
        </section>

        <!-- Explore Section -->
        <section class="explore" style="text-align: center; background-color: #ffffff; font-size: 2rem; min-height: 90vh; font-family: 'Playfair Display'; color: #8e181f;">
            <div class="content">
            <h1 style="color: #8e181f; margin-top: 5rem; margin-bottom: 3rem; font-weight:bold;">EXPLORE OUR CAFE</h1>
            <p style="color: #000000; font-size: 15px; margin-bottom: 3rem; margin-left:8rem; margin-right:8rem;">Discover our wide selection of high-quality coffee beans from around the world.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus lobortis elit et mi lobortis, sed varius tortor aliquam. Maecenas ac quam lacinia, Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus lobortis elit et mi lobortis, sed varius tortor aliquam. Maecenas ac quam lacinia,Lorem ipsum dolor sit amet, consectetur</p>
            </div>
            <input type="file" id="explore-image" style="display: none;">
            <div class="row" style="display: flex; justify-content: center;">
                <div class="product-card" style="margin: 0px 5rem 0px 0px; background-color: #f9f9f9; width: 15rem; border-radius:10px; padding:30px 30px 10px 30px; box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 1px 3px 1px;">
                    <a href="{{ route('pelanggan-menu') }}" style="color: #000000;">
                        <img src="{{ asset('img/makanan.jpeg') }}" alt="Product 1" style="width: 100%; height: 12rem; border-radius:10px; margin-bottom:20px;">
                        <h3>FOOD</h3>
                        <div class="product-price" style="margin-bottom: 15px; font-size:25px;">Explore More <i class="fas fa-angle-right"></i></div>
                    </a>
                </div>
                <div class="product-card" style="margin: 0px 0px 0px 5rem; background-color: #f9f9f9; width: 15rem; border-radius:10px; padding:30px 30px 10px 30px; box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 1px 3px 1px;">
                    <a href="{{ route('pelanggan-menu') }}" style="color: #000000;">    
                        <img src="{{ asset('img/minuman.jpeg') }}" alt="Product 1" style="width: 100%; height: 12rem; border-radius:10px; margin-bottom:20px;">
                        <h3>DRINK</h3>
                        <div class="product-price" style="margin-bottom: 25px; font-size:25px;">Explore More <i class="fas fa-angle-right"></i></div>
                    </a>
                </div>
            </div>
        </section>


        <!-- Visit Section -->
        <section class="visit" style="display: flex; min-height: 100vh; background-position: center; background-color: #efe9d3; text-align: center; background-repeat: no-repeat;">
            <div class="map ml-5" style="margin-top: 2rem; background-color: #efe9d3;">
                <h1 style="font-size: 3rem; margin-top: 3rem; margin-bottom: 80px; font-family: 'Playfair Display'; color: #000000; font-weight:bold;">Visit Us</h1>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3972.288337559558!2d105.2946103750661!3d-5.372927194605946!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e40dbec06ecf971%3A0x72254ee91c02e052!2sKopi%20Hitado!5e0!3m2!1sen!2sid!4v1712031354358!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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

        <!-- partial footbar -->
        @include('Pelanggan.layout.pelanggan-footbar')
        <!-- end partial footbar -->
 
    <script>
        feather.replace();
    </script>

</body>

</html>
