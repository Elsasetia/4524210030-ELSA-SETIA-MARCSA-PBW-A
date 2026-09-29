<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>LaraPress - Beranda</title>

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

        /* =========================
           NAVBAR
        ========================= */
        nav {
            height: 70px;
            background-color: white;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0 12%;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.08);
        }

        .logo {
            color: #4169e1;
            font-size: 21px;
            font-weight: bold;
        }

        .menu {
            display: flex;
            gap: 25px;
        }

        .menu a {
            text-decoration: none;
            color: #666;
            font-size: 14px;
            padding-bottom: 8px;
        }

        .menu a:hover {
            color: #4169e1;
        }

        .menu a.active {
            color: #4169e1;
            font-weight: bold;
            border-bottom: 2px solid #4169e1;
        }

        /* =========================
           HERO
        ========================= */
        .hero {
            height: 250px;
            background: linear-gradient(
                135deg,
                #3348d8,
                #7b35d4
            );

            color: white;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
        }

        .hero h1 {
            font-size: 34px;
            margin-bottom: 15px;
        }

        .hero p {
            font-size: 15px;
            color: #e8e8ff;
        }

        /* =========================
           ARTIKEL
        ========================= */
        .articles {
            width: 75%;
            max-width: 1000px;
            margin: 45px auto;
        }

        .articles h2 {
            font-size: 22px;
            margin-bottom: 25px;
        }

        .article-container {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
        }

        /* =========================
           CARD
        ========================= */
        .card {
            background-color: white;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.08);
            transition: 0.3s;
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.12);
        }

        .card-image {
            height: 150px;
            background-color: #eeeeee;
            display: flex;
            justify-content: center;
            align-items: center;
            color: #777;
            font-size: 14px;
        }

        .card-content {
            padding: 20px;
        }

        .category {
            color: #4169e1;
            font-size: 11px;
            font-weight: bold;
            margin-bottom: 10px;
            text-transform: uppercase;
        }

        .card h3 {
            font-size: 16px;
            margin-bottom: 10px;
        }

        .card p {
            color: #777;
            font-size: 13px;
            line-height: 1.7;
        }

        /* =========================
           RESPONSIVE
        ========================= */
        @media (max-width: 768px) {

            nav {
                padding: 0 5%;
            }

            .article-container {
                grid-template-columns: 1fr;
            }

            .articles {
                width: 90%;
            }

            .hero h1 {
                font-size: 26px;
            }

            .menu {
                gap: 12px;
            }

            .menu a {
                font-size: 12px;
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
            <a href="/" class="active">Beranda</a>
            <a href="/about">Tentang Kami</a>
            <a href="/kontak">Kontak</a>
        </div>

    </nav>


    <!-- HERO -->
    <section class="hero">

        <h1>
            Selamat Datang di Blog LaraPress
        </h1>

        <p>
            Ini adalah halaman utama dari aplikasi blog kita.
        </p>

    </section>


    <!-- ARTIKEL -->
    <section class="articles">

        <h2>
            Artikel Terbaru
        </h2>

        <div class="article-container">

            <!-- ARTIKEL 1 -->
            <div class="card">

                <div class="card-image">
                    Gambar Artikel 1
                </div>

                <div class="card-content">

                    <div class="category">
                        Teknologi
                    </div>

                    <h3>
                        Lorem Ipsum Dolor Sit Amet
                    </h3>

                    <p>
                        Lorem ipsum dolor sit amet, consectetur
                        adipiscing elit. Sed do eiusmod tempor
                        incididunt ut labore et dolore magna aliqua.
                    </p>

                </div>

            </div>


            <!-- ARTIKEL 2 -->
            <div class="card">

                <div class="card-image">
                    Gambar Artikel 2
                </div>

                <div class="card-content">

                    <div class="category">
                        Laravel
                    </div>

                    <h3>
                        Consectetur Adipiscing Elit
                    </h3>

                    <p>
                        Ut enim ad minim veniam, quis nostrud
                        exercitation ullamco laboris nisi ut aliquip
                        ex ea commodo consequat.
                    </p>

                </div>

            </div>


            <!-- ARTIKEL 3 -->
            <div class="card">

                <div class="card-image">
                    Gambar Artikel 3
                </div>

                <div class="card-content">

                    <div class="category">
                        Web Dev
                    </div>

                    <h3>
                        Duis Aute Irure Dolor
                    </h3>

                    <p>
                        Duis aute irure dolor in reprehenderit
                        in voluptate velit esse cillum dolore
                        eu fugiat nulla pariatur.
                    </p>

                </div>

            </div>

        </div>

    </section>

</body>
</html>
