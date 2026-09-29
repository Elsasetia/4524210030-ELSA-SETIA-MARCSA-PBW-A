<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Tentang LaraPress</title>

    <style>
        * {pwd
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #ffffff;
            color: #263b5b;
        }

        /* NAVBAR */
        .navbar {
            height: 80px;
            background-color: #e9a2df;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0 10%;
        }

        .logo {
            font-size: 27px;
            font-weight: bold;
            color: #1976d2;
        }

        .nav-menu {
            display: flex;
            gap: 40px;
            list-style: none;
        }

        .nav-menu a {
            text-decoration: none;
            color: #4d5d73;
            font-size: 16px;
            font-weight: 600;
            padding-bottom: 10px;
        }

        .nav-menu a:hover {
            color: #1976d2;
        }

        .nav-menu .active {
            color: #1976d2;
            border-bottom: 4px solid #1976d2;
        }

        /* CONTAINER */
        .container {
            width: 70%;
            margin: 75px auto;
        }

        /* HERO */
        .hero {
            background: linear-gradient(135deg, #eaf4ff, #d4e9ff, #f5f9ff);
            border: 1px solid #d8eaff;
            border-radius: 12px;
            padding: 50px;
            text-align: center;
            margin-bottom: 35px;
        }
        .hero {
            background: linear-gradient(135deg, #dbeafe, #f5c3ee, #ffeffc);
            border: 1px solid #c7ddf5;
            border-radius: 12px;
            padding: 50px;
            text-align: center;
            margin-bottom: 35px;
    }
        .hero h1 {
            font-size: 40px;
            margin-bottom: 25px;
            color: #1e3150;
        }

        .hero p {
            font-size: 18px;
            line-height: 1.8;
            color: #687b96;
        }

        /* CARD */
        .cards {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 30px;
        }

        .card {
            background-color: #ffffff;
            border: 1px solid #d8eaff;
            border-radius: 12px;
            padding: 30px;
            min-height: 300px;
        }

        .card h2 {
            font-size: 25px;
            margin-bottom: 20px;
            color: #263b5b;
        }

        .card p {
            font-size: 16px;
            line-height: 1.8;
            color: #687b96;
            margin-bottom: 20px;
        }

        /* RESPONSIVE */
        @media (max-width: 768px) {
            .navbar {
                padding: 0 5%;
            }

            .nav-menu {
                gap: 15px;
            }

            .container {
                width: 90%;
            }

            .cards {
                grid-template-columns: 1fr;
            }

            .hero h1 {
                font-size: 30px;
            }
        }
    </style>
</head>

<body>

    <!-- NAVBAR -->
    <nav class="navbar">

        <div class="logo">
            LaraPress
        </div>

        <ul class="nav-menu">
            <li>
                <a href="/">Beranda</a>
            </li>

            <li>
                <a href="/about" class="active">Tentang Kami</a>
            </li>

            <li>
                <a href="/kontak">Kontak</a>
            </li>
        </ul>

    </nav>


    <!-- CONTENT -->
    <div class="container">

        <!-- HERO -->
        <section class="hero">

            <h1>Tentang LaraPress</h1>

            <p>
                LaraPress adalah sebuah proyek blog sederhana yang dibuat
                untuk mempelajari dasar-dasar framework Laravel 12.
            </p>

        </section>


        <!-- CARDS -->
        <div class="cards">

            <!-- VISI MISI -->
            <div class="card">

                <h2>Visi & Misi</h2>

                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    Phasellus imperdiet, nulla et dictum interdum, nisi lorem
                    egestas odio, vitae scelerisque enim ligula venenatis dolor.
                </p>

                <p>
                    Maecenas egestas arcu quis ligula mattis placerat.
                    Praesent nunc sem, feugiat non, aliquet at, amet dapibus.
                </p>

            </div>


            <!-- TEKNOLOGI -->
            <div class="card">

                <h2>Teknologi yang Penggunaannya</h2>

                <p>
                    Vivamus fermentum semper nisi. Aenean vulputate eleifend
                    tellus. Aenean leo ligula, porttitor eu, consequat vitae,
                    eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra
                    quis.
                </p>

                <p>
                    Phasellus viverra nulla ut metus varius laoreet.
                    Quisque rutrum. Aenean imperdiet.
                </p>

            </div>

        </div>

    </div>

</body>
</html>