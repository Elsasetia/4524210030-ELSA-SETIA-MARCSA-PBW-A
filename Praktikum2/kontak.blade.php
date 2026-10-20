<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Kontak Kami - LaraPress</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #f5f7fb, #e9e5ff);
            color: #333;
            min-height: 100vh;
        }

        /* NAVBAR */
        nav {
            background: linear-gradient(90deg, #6c63ff, #8f87ff);
            padding: 20px 8%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.15);
        }

        .logo {
            color: white;
            font-size: 26px;
            font-weight: bold;
        }

        .menu {
            display: flex;
            gap: 25px;
        }

        .menu a {
            color: white;
            text-decoration: none;
            font-weight: bold;
            transition: 0.3s;
        }

        .menu a:hover {
            color: #ffe66d;
            transform: translateY(-2px);
        }

        /* HEADER */
        .header {
            text-align: center;
            padding: 70px 20px 30px;
        }

        .header h1 {
            font-size: 45px;
            color: #6c63ff;
            margin-bottom: 15px;
        }

        .header p {
            color: #666;
            font-size: 18px;
        }

        /* CONTAINER */
        .container {
            width: 90%;
            max-width: 1000px;
            margin: 30px auto 70px;

            display: flex;
            gap: 30px;
            flex-wrap: wrap;
            justify-content: center;
        }

        /* CONTACT CARD */
        .contact-card {
            flex: 1;
            min-width: 300px;
            background: white;
            padding: 35px;
            border-radius: 20px;

            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.08);

            transition: 0.3s;
        }

        .contact-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 12px 35px rgba(0, 0, 0, 0.12);
        }

        .contact-card h2 {
            color: #6c63ff;
            margin-bottom: 25px;
        }

        /* CONTACT ITEM */
        .contact-item {
            display: flex;
            align-items: center;
            gap: 18px;

            padding: 18px;
            margin-bottom: 15px;

            background-color: #f7f6ff;
            border-radius: 12px;

            transition: 0.3s;
        }

        .contact-item:hover {
            background-color: #eceaff;
            transform: translateX(5px);
        }

        .icon {
            width: 45px;
            height: 45px;

            display: flex;
            align-items: center;
            justify-content: center;

            background-color: #6c63ff;
            color: white;

            border-radius: 50%;
            font-size: 20px;
        }

        .contact-item h3 {
            font-size: 15px;
            color: #777;
            margin-bottom: 5px;
        }

        .contact-item p {
            color: #333;
            font-weight: bold;
        }

        /* MESSAGE */
        .message {
            flex: 1;
            min-width: 300px;
            background: linear-gradient(135deg, #6c63ff, #9189ff);
            color: white;

            padding: 35px;
            border-radius: 20px;

            box-shadow: 0 8px 30px rgba(108, 99, 255, 0.3);
        }

        .message h2 {
            font-size: 28px;
            margin-bottom: 20px;
        }

        .message p {
            line-height: 1.8;
            margin-bottom: 25px;
        }

        .message .emoji {
            font-size: 70px;
            text-align: center;
            margin: 25px 0;
        }

        /* BUTTON */
        .btn {
            display: inline-block;
            padding: 13px 25px;

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

        /* FOOTER */
        footer {
            background-color: #222;
            color: white;
            text-align: center;
            padding: 25px;
        }

        /* RESPONSIVE */
        @media (max-width: 600px) {

            nav {
                flex-direction: column;
                gap: 15px;
            }

            .menu {
                gap: 12px;
                flex-wrap: wrap;
                justify-content: center;
            }

            .header h1 {
                font-size: 35px;
            }

            .contact-card,
            .message {
                min-width: 100%;
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


    <!-- HEADER -->
    <section class="header">

        <h1>Kontak Kami</h1>

        <p>
            Jangan ragu untuk menghubungi LaraPress.
            Kami siap menerima pertanyaan dan masukan dari Anda.
        </p>

    </section>


    <!-- CONTENT -->
    <div class="container">

        <!-- INFORMASI KONTAK -->
        <div class="contact-card">

            <h2>📞 Informasi Kami</h2>


            <div class="contact-item">

                <div class="icon">
                    👤
                </div>

                <div>
                    <h3>Nama</h3>
                    <p>LaraPress Maria</p>
                </div>

            </div>


            <div class="contact-item">

                <div class="icon">
                    ✉️
                </div>

                <div>
                    <h3>Email</h3>
                    <p>kontak@larapress.test</p>
                </div>

            </div>


            <div class="contact-item">

                <div class="icon">
                    📱
                </div>

                <div>
                    <h3>Telepon</h3>
                    <p>0812-3456-7890</p>
                </div>

            </div>


            <div class="contact-item">

                <div class="icon">
                    📍
                </div>

                <div>
                    <h3>Alamat</h3>
                    <p>Jl. Apaaa No. 123, Indonesia</p>
                </div>

            </div>

        </div>


        <!-- PESAN -->
        <div class="message">

            <h2>Hubungi LaraPress 👋</h2>

            <p>
                Punya pertanyaan, saran, atau ingin mengetahui
                lebih banyak tentang LaraPress?
            </p>

            <div class="emoji">
                💬
            </div>

            <p>
                Silakan gunakan informasi kontak di sebelah kiri
                untuk menghubungi kami.
            </p>

            <a href="/" class="btn">
                ← Kembali ke Beranda
            </a>

        </div>

    </div>


    <!-- FOOTER -->
    <footer>

        <p>
            &copy; 2026 LaraPress. All Rights Reserved.
        </p>

    </footer>

</body>

</html>
