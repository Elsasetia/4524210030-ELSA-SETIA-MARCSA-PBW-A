<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Tentang Kami - LaraPress</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #f4f6fb;
            color: #333;
        }

        /* NAVBAR */
        nav {
            background: linear-gradient(90deg, #6c63ff, #8f87ff);
            padding: 20px 8%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.15);
        }

        .logo {
            color: white;
            font-size: 26px;
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
            padding: 80px 20px;
            text-align: center;
            background: linear-gradient(135deg, #6c63ff, #9b8cff);
            color: white;
        }

        .hero h1 {
            font-size: 48px;
            margin-bottom: 15px;
        }

        .hero p {
            font-size: 18px;
            opacity: 0.95;
        }

        /* ABOUT */
        .about {
            max-width: 1000px;
            margin: 60px auto;
            padding: 0 20px;
        }

        .about-box {
            background-color: white;
            padding: 40px;
            border-radius: 18px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.08);
            margin-bottom: 30px;
        }

        .about-box h2 {
            color: #6c63ff;
            margin-bottom: 15px;
            font-size: 28px;
        }

        .about-box p {
            color: #666;
            line-height: 1.8;
            font-size: 16px;
        }

        /* CARDS */
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
            text-align: center;
            border-radius: 15px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.08);
            transition: 0.3s;
        }

        .card:hover {
            transform: translateY(-8px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
        }

        .icon {
            font-size: 45px;
            margin-bottom: 15px;
        }

        .card h3 {
            color: #6c63ff;
            margin-bottom: 12px;
        }

        .card p {
            color: #666;
            line-height: 1.6;
        }

        /* BUTTON */
        .button-area {
            text-align: center;
            margin: 40px 0;
        }

        .btn {
            display: inline-block;
            padding: 14px 30px;
            background-color: #6c63ff;
            color: white;
            text-decoration: none;
            border-radius: 30px;
            font-weight: bold;
            transition: 0.3s;
        }

        .btn:hover {
            background-color: #554ce0;
            transform: translateY(-3px);
        }

        /* FOOTER */
        footer {
            background-color: #222;
            color: white;
            text-align: center;
            padding: 25px;
            margin-top: 50px;
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
                font-size: 36px;
            }

            .about-box {
                padding: 25px;
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

        <h1>Tentang LaraPress</h1>

        <p>
            Mengenal lebih dekat proyek blog sederhana kami.
        </p>

    </section>


    <!-- ABOUT -->
    <section class="about">

        <div class="about-box">

            <h2>Siapa Kami?</h2>

            <p>
                LaraPress adalah sebuah Content Management System (CMS) modern, cepat, dan fleksibel yang dibangun di atas fondasi 
            </p>

        </div>


        <div class="about-box">

            <h2>Tujuan LaraPress</h2>

            <p>
                Tujuan utama LaraPress adalah menyediakan Content Management System (CMS) modern yang menggabungkan kemudahan pengelolaan konten ala WordPress dengan kekuatan, keamanan, dan fleksibilitas arsitektur Laravel Framework.
            </p>

        </div>


        <!-- CARDS -->

        <div class="cards">

            <div class="card">

                <div class="icon">📚</div>

                <h3>Belajar</h3>

                <p>
                    Mempelajari dasar-dasar Laravel 12 secara
                    sederhana dan bertahap.
                </p>

            </div>


            <div class="card">

                <div class="icon">💻</div>

                <h3>Praktik</h3>

                <p>
                    Mengembangkan halaman web melalui praktik
                    langsung menggunakan Laravel.
                </p>

            </div>


            <div class="card">

                <div class="icon">🚀</div>

                <h3>Berkembang</h3>

                <p>
                    Mengembangkan proyek secara bertahap dengan
                    menambahkan fitur-fitur baru.
                </p>

            </div>

        </div>


        <!-- BUTTON -->

        <div class="button-area">

            <a href="/" class="btn">
                ← Kembali ke Halaman Utama
            </a>

        </div>

    </section>


    <!-- FOOTER -->
    <footer>

        <p>
            &copy; 2026 LaraPress. Semua Hak Dilindungi.
        </p>

    </footer>

</body>
</html>