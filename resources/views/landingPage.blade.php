<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Sistem Manajemen Toko Kelontong</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f8f9fa;
            color: #333;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
            text-align: center;
        }

        header {
            background-color: #28a745;
            color: white;
            padding: 30px 0 50px 0;
        }

        header h1 {
            font-size: 2.8em;
        }

        header p {
            font-size: 1.3em;
            margin-top: 10px;
        }

        .cta-button {
            display: inline-block;
            background-color: #ffc107;
            color: #333;
            padding: 15px 30px;
            margin-top: 20px;
            border: none;
            border-radius: 5px;
            font-size: 1.2em;
            cursor: pointer;
            text-decoration: none;
        }

        .cta-button:hover {
            background-color: #e0a800;
        }

        .features {
            display: flex;
            justify-content: space-around;
            margin-top: 40px;
        }

        .feature {
            width: 30%;
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: left;
        }

        .feature h3 {
            margin-bottom: 10px;
            font-size: 1.5em;
        }

        .feature p {
            font-size: 1em;
            line-height: 1.5;
        }

        .testimonials {
            margin-top: 40px;
        }

        .testimonials h2 {
            font-size: 2em;
            margin-bottom: 20px;
        }

        .testimonial {
            margin-bottom: 20px;
            text-align: left;
            font-style: italic;
        }

        .testimonial p {
            margin-bottom: 5px;
        }

        .testimonial .name {
            font-weight: bold;
        }

        .form-container {
            background-color: #fff;
            padding: 30px;
            border-radius: 10px;
            margin-top: 40px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: left;
        }

        .form-container h3 {
            margin-bottom: 20px;
        }

        form input[type="text"], form input[type="email"] {
            width: 90%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 1em;
        }

        form button {
            background-color: #28a745;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 1em;
        }

        form button:hover {
            background-color: #218838;
        }

        footer {
            background-color: #333;
            color: white;
            padding: 20px 0;
            margin-top: 40px;
            text-align: center;
        }

        footer p {
            margin: 0;
        }

    </style>
</head>
<body>

    <header>
        <div class="d-flex justify-content-between mx-5 ">
            <a href=""></a>
            <ul class="d-flex gap-5 list-unstyled py-3">
                <li><a href="" class="text-decoration-none text-light">Home</a></li>
                <li><a href="" class="text-decoration-none text-light">About</a></li>
                <li><a href="" class="text-decoration-none text-light">Login</a></li>
            </ul>
        </div>
        <div class="container">
            <h1>Manajemen Toko Kelontong Modern</h1>
            <p>Mudahkan pengelolaan stok, transaksi, dan laporan keuangan toko kelontong Anda dengan sistem kami!</p>
            <a href="#signup" class="cta-button">Mulai Sekarang</a>
        </div>
    </header>

    <section class="container">
        <div class="features">
            <div class="feature">
                <h3>Pengelolaan Stok Otomatis</h3>
                <p>Sistem kami memudahkan Anda untuk mengelola persediaan barang dengan akurat dan real-time, sehingga Anda tidak perlu khawatir kehabisan stok.</p>
            </div>
            <div class="feature">
                <h3>Pencatatan Transaksi Cepat</h3>
                <p>Catat semua transaksi toko dengan cepat dan mudah. Setiap transaksi langsung terhubung dengan sistem laporan dan analisis penjualan.</p>
            </div>
            <div class="feature">
                <h3>Laporan Keuangan Lengkap</h3>
                <p>Dapatkan laporan keuangan toko Anda secara detail, mulai dari penjualan harian, bulanan, hingga laporan laba rugi dengan satu klik.</p>
            </div>
        </div>
    </section>

    <section class="container testimonials">
        <h2>Pendapat Pengguna Kami</h2>
        <div class="testimonial">
            <p>"Sistem ini sangat memudahkan pengelolaan toko saya. Kini saya bisa fokus pada pelanggan tanpa harus pusing dengan stok barang."</p>
            <p class="name">- Ahmad, Pemilik Toko Sembako</p>
        </div>
        <div class="testimonial">
            <p>"Fitur laporan keuangannya sangat membantu saya dalam memahami arus kas dan keuntungan toko saya. Sangat direkomendasikan!"</p>
            <p class="name">- Budi, Pemilik Toko Serba Ada</p>
        </div>
    </section>

    <section class="container form-container" id="signup">
        <h3>Daftar untuk Informasi Lebih Lanjut</h3>
        <form action="#" method="POST">
            <input type="text" name="name" placeholder="Nama Anda" required><br>
            <input type="email" name="email" placeholder="Email Anda" required><br>
            <button type="submit">Kirim</button>
        </form>
    </section>

    <footer>
        <div class="container">
            <p>&copy; 2024 Manajemen Toko Kelontong. All rights reserved.</p>
        </div>
    </footer>

</body>
</html>
