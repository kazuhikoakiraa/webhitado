 <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>KOPI HITADO | Login</title>
    <link rel="stylesheet" href="style.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap"
      rel="stylesheet"
    />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />
</head>

<body>
    <section class="h-100 gradient-form" style="background-color: #eee">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-xl-10">
                    <div class="card rounded-3 text-black">
                        <div class="row g-0">
                            <div class="col-lg-6" style="background-color: #ffff; height: 624px">
                                <div class="card-body p-md-5 mx-md-4">
                                    <div class="text-center">
                                    <h2 class="mb-3">
                                        <span
                                            style="font-family: 'Playfair Display'; color: #8e181f; font-weight: bold;"> <ins>KOPI HITADO</ins>
                                        </span>
                                    </h2>

                                    </div>

                                    <form method="POST" action="{{ route('login') }}"
                                    style="font-family: 'DM Sans'; font-weight:bold"
                                    action="" method="post">
                                    @csrf
                                        <h3 class="pt-5 text-center">Login </h3>
                                        @if (session('status'))
                                            <div class="alert alert-danger p-1 ms-3 text-center" role="alert">
                                            </div>
                                        @endif
                                        <label class="form-label" for="form2Example11">email</label>

                                        <div class="form-outline mb-4">
                                            <input type="email" name="email" id="email" class="form-control"
                                                placeholder="email" />
                                        </div>

                                        <div class="form-outline mb-4">
                                            <label class="form-label" for="form2Example22">Password</label>
                                            <input type="password" name="password" id="password" class="form-control"
                                                placeholder="Password" />
                                        </div>

                                        <div class="d-grid gap-2 pb-5">
                                            <button class="btn" type="submit" style="background-color: #8e181f; color:#eee">
                                                Sign in
                                            </button>
                                        </div>

                                    </form>
                                </div>
                            </div>
                            <div class="col-lg-6 d-flex align-items-center" style="background-color:#efe9d3">
                                <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                                    <h1 class="mb-4" style="font-family: 'DM Sans'; font-weight: bold; color:#000000;  ">
                                        <span style="color: #8e181f">WE ARE</span>
                                        NOW
                                    </h1>
                                    <h1 class="mb-4;" style="font-family: 'DM Sans'; font-weight: bold; color:#8e181f">
                                        <span style="color: #000000">WE ARE</span>
                                        LATER
                                    </h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>

</html>
