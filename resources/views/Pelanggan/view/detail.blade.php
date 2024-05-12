<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Pesanan</title>
    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap">
    <!-- Bootstrap ikon -->
    <script src="https://unpkg.com/feather-icons"></script>
</head>
<body style="font-family: 'DM Sans', sans-serif; background-color: var(--bg); color: #000000;">
    <nav class="navbar" style="background-color: var(--primary); display: flex; overflow: hidden; align-items: center; padding: 1rem 5%;">
        <a href=""><i data-feather="arrow-left"></i></a>
        <h1>Detail Pesanan</h1>
    </nav>

    <div class="container" style="font-weight: bold; display: grid; width: 80%; background-color: var(--primary); margin: 0 auto; padding: 20px; margin-top: 3rem;">
        <h3>#NOMOR ANTRIAN</h3>
        <br><br>
        <h4>Pesanan</h4>
        <table style="width: auto; border-collapse: collapse;">
            <tr>
                <td>Iced Americano</td>
                <td>30.000</td>
                <td>2X</td>
                <td>60.000</td>
            </tr>
            <tr>
                <td>Iced Coffe Latte</td>
                <td>35.000</td>
                <td>2X</td>
                <td>70.000</td>
            </tr>
            <br>
            <tr>
                <td>TOTAL</td>
                <td></td>
                <td></td>
                <td>130.000</td>
            </tr>
        </table>
        <br><br><br>
        <p>SILAHKAN TERLEBIH DAHULU MEMBAYAR KE KASIR!</p>
        <br><br>
        <button class="box-button" style="border: 1px solid #8e181f; padding: 10px 200px; background-color: transparent; color: #8e181f; cursor: pointer; transition: all 0.3s ease; border-radius: 5px; width: fit-content; margin: 0 auto;">Cek Status Pesanan</button>
    </div>

    <!-- Logo Logo -->
    <script>
        feather.replace();
    </script>
</body>
</html>

<style>
    :root {
        --primary: #efe9d3;
        --bg: #ffffff;
        --font: #8e181f;
    }

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        outline: none;
        border: none;
        text-decoration: none;
    }

    .navbar a {
        color: #000000;
        padding: 0.1rem;
        margin-left: 0;
        margin-right: 1rem;
    }

    td {
        padding: 8px;
        text-align: justify;
    }

    .container p {
        text-align: center;
        font-weight: bolder;
    }

    button:hover {
        background-color: #8e181f;
        color: #fff;
    }
</style>
