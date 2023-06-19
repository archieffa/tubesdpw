<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Sona Template">
    <meta name="keywords" content="Sona, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <title>
        <?= $title; ?>
    </title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Cabin:400,500,600,700&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/flaticon.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>

<body>
    <section class="hero-section">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-5 offset-xl-2 offset-lg-1 mx-auto">
                    <div class="booking-form">
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4">Buat Akun</h1>
                        </div>
                        <form>
                            <div class="check-date">
                                <label>Nama Lengkap:</label>
                                <input type="text" id="nama" name="nama">
                            </div>
                            <div class="check-date">
                                <label>Alamat Email:</label>
                                <input type="text" id="email" name="email">
                            </div>
                            <div class="check-date">
                                <label>Nomor Telepon:</label>
                                <input type="text" id="no_telp" name="no_telp">
                            </div>
                            <div class="check-date">
                                <label for="date-in">Tanggal Lahir:</label>
                                <input type="date" class="date-input" id="date-in" name="date-in">
                            </div>
                            <div class="select-option">
                                <label for="guest">Jenis Kelamin:</label>
                                <select id="guest" name="guest">
                                    <option value="">Laki-Laki</option>
                                    <option value="">Perempuan</option>
                                </select>
                            </div>
                            <button type="submit">Daftar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>