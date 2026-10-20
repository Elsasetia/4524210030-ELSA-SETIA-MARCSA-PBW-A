<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Beranda - LaraPress</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #f5f7fb;
            color: #333;
        }

        /* NAVBAR */
        nav {
            background: linear-gradient(90deg, #6c63ff, #8f87ff);
            padding: 18px 8%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 3px 10px rgba(0,0,0,0.1);
        }

        .logo {
            color: white;
            font-size: 25px;
            font-weight: bold;
        }

        .menu a {
            color: white;
            text-decoration: none;
            margin-left: 25px;
            font-weight: bold;
            transition: 0.3s;
        }

        .menu a:hover {
            color: #ffe66d;
        }

        /* HERO */
        .hero {
            min-height: 500px;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            padding: 50px 20px;

            background:
                linear-gradient(
                    rgba(108, 99, 255, 0.85),
                    rgba(143, 135, 255, 0.85)
                );
            color: white;
        }

        .hero-content {
            max-width: 750px;
        }

        .hero h1 {
            font-size: 55px;
            margin-bottom: 20px;
        }

        .hero h1 span {
            color: #ffe66d;
        }

        .hero p {
            font-size: 19px;
            line-height: 1.7;
            margin-bottom: 30px;
        }

        .btn {
            display: inline-block;
            padding: 14px 28px;
            background-color: white;
            color: #6c63ff;
            text-decoration: none;
            border-radius: 30px;
            font-weight: bold;
            transition: 0.3s;
        }

        .btn:hover {
            background-color: #ffe66d;
            color: #333;
            transform: translateY(-3px);
        }

        /* SECTION */
        .section {
            padding: 60px 8%;
            text-align: center;
        }

        .section h2 {
            font-size: 32px;
            margin-bottom: 15px;
            color: #333;
        }

        .section > p {
            color: #777;
            margin-bottom: 40px;
        }

        /* CARD */
        .cards {
            display: flex;
            justify-content: center;
            gap: 25px;
            flex-wrap: wrap;
        }

        .card {
            background-color: white;
            width: 280px;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.08);
            transition: 0.3s;
        }

        .card:hover {
            transform: translateY(-8px);
            box-shadow: 0 10px 25px rgba(0,0,0,0.15);
        }

        .icon {
            font-size: 45px;
            margin-bottom: 15px;
        }

        .card h3 {
            margin-bottom: 12px;
            color: #6c63ff;
        }

        .card p {
            color: #666;
            line-height: 1.6;
        }

        /* FOOTER */
        footer {
            background-color: #222;
            color: white;
            text-align: center;
            padding: 25px;
            margin-top: 20px;
        }

        /* RESPONSIVE */
        @media (max-width: 600px) {
            nav {
                flex-direction: column;
                gap: 15px;
            }

            .menu a {
                margin: 0 8px;
            }

            .hero h1 {
                font-size: 38px;
            }
        }
    </style>
</head>

<body>

    <!-- NAVBAR -->
    <nav>
        <div class="logo">
            LaraPress
        </div>

        <div class="menu">
            <a href="/">Beranda</a>
            <a href="/tentang-kami">Tentang Kami</a>
            <a href="/kontak">Kontak</a>
        </div>
    </nav>


    <!-- HERO -->
    <section class="hero">
        <div class="hero-content">

            <h1>
                Selamat Datang di <span>LaraPress</span>
            </h1>

            <p>
                Website sederhana berbasis Laravel yang dibuat
                untuk belajar membuat halaman web, routing,
                dan navigasi dengan mudah.
            </p>

            <a href="/kontak" class="btn">
                Hubungi Kami
            </a>

        </div>
    </section>


    <!-- FITUR -->
    <section class="section">

        <h2>Apa yang Kami Tawarkan?</h2>

        <p>
            Beberapa informasi yang tersedia di website kami.
        </p>

        <div class="cards">

            <div class="card">
                <div class="icon">🚀</div>

                <h3>Cepat</h3>

                <p>
                    Website dirancang sederhana dan ringan
                    sehingga mudah digunakan.
                </p>
            </div>


            <div class="card">
                <div class="icon">💡</div>

                <h3>Mudah Dipahami</h3>

                <p>
                    Struktur halaman dibuat sederhana sehingga
                    cocok untuk proses pembelajaran Laravel.
                </p>
            </div>


            <div class="card">
                <div class="icon">📱</div>

                <h3>Responsive</h3>

                <p>
                    Tampilan dapat menyesuaikan ukuran layar
                    komputer maupun perangkat mobile.
                </p>
            </div>

        </div>

    </section>

    <!-- FOOTER -->
    <footer>
        <p>
            &copy; 2026 LaraPress. All Rights Reserved.
        </p>
    </footer>

</body>
</html>