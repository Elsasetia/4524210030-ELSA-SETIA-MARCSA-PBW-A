<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Kontak - LaraPress</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, Helvetica, sans-serif;
            background-color: #f8f9fa;
            color: #222;
        }

        /* Navbar */
        nav {
            width: 100%;
            height: 70px;
            background-color: white;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0 12%;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.08);
        }

        .logo {
            font-size: 22px;
            font-weight: bold;
            color: #3b82f6;
        }

        .menu {
            display: flex;
            gap: 30px;
        }

        .menu a {
            text-decoration: none;
            color: #555;
            font-size: 14px;
            transition: 0.3s;
        }

        .menu a:hover {
            color: #3b82f6;
        }

        .menu a.active {
            color: #3b82f6;
            font-weight: bold;
        }

        /* Konten */
        .container {
            width: 80%;
            max-width: 900px;
            margin: 60px auto;
            text-align: center;
        }

        .container h1 {
            font-size: 30px;
            margin-bottom: 8px;
        }

        .subtitle {
            color: #777;
            margin-bottom: 35px;
        }

        /* Card */
        .contact-card {
            background-color: white;
            width: 100%;
            max-width: 600px;
            margin: auto;
            padding: 35px 45px;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.08);
            text-align: left;
        }

        .contact-card h2 {
            text-align: center;
            margin-bottom: 30px;
            font-size: 20px;
        }

        .info {
            display: flex;
            padding: 14px 0;
            border-bottom: 1px solid #eee;
        }

        .info:last-child {
            border-bottom: none;
        }

        .label {
            width: 140px;
            font-weight: bold;
            color: #555;
        }

        .value {
            color: #333;
        }

        /* Responsive */
        @media (max-width: 600px) {
            nav {
                padding: 0 5%;
            }

            .menu {
                gap: 12px;
            }

            .menu a {
                font-size: 12px;
            }

            .container {
                width: 90%;
            }

            .contact-card {
                padding: 25px;
            }

            .info {
                display: block;
            }

            .label {
                width: 100%;
                margin-bottom: 5px;
            }
        }
    </style>
</head>

<body>

    <!-- Navbar -->
    <nav>
        <div class="logo">
            LaraPress
        </div>

        <div class="menu">
            <a href="/">Beranda</a>
            <a href="/about">Tentang Kami</a>
            <a href="/kontak" class="active">Kontak</a>
        </div>
    </nav>


    <!-- Konten Kontak -->
    <div class="container">

        <h1>Kontak LaraPress</h1>

        <p class="subtitle">
            Hubungi Kontak
        </p>

        <div class="contact-card">

            <h2>Informasi Pemilik</h2>

            <div class="info">
                <div class="label">Nama</div>
                <div class="value">Elsa Setia Marcsa</div>
            </div>

            <div class="info">
                <div class="label">NIPM</div>
                <div class="value">4524210030</div>
            </div>

            <div class="info">
                <div class="label">Email</div>
                <div class="value">elsasetia@gmail.com</div>
            </div>

            <div class="info">
                <div class="label">Nomor HP</div>
                <div class="value">081234567890</div>
            </div>

        </div>

    </div>

</body>
</html>