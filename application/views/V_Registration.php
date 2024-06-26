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

    <!-- Favicons -->
    <link href="img/BLUE_MOON.jpg" rel="icon">
    <link href="img/BLUE_MOON.jpg" rel="apple-touch-icon">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Cabin:400,500,600,700&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="<?php echo base_url('css/bootstrap.min.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('css/font-awesome.min.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('css/elegant-icons.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('css/flaticon.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('css/owl.carousel.min.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('css/nice-select.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('css/jquery-ui.min.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('css/magnific-popup.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('css/slicknav.min.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('css/style.css');?>">
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
                        <form method="post" action="<?= base_url('C_BlueMoon/registration');?>">
                            <div class="check-date">
                                <label>Nama Lengkap:</label>
                                <input type="text" id="nama_lengkap" name="nama_lengkap" value="<?= set_value('nama_lengkap'); ?>">
                                <?= form_error('nama_lengkap', '<small class="text-danger">', '</small>'); ?>
                            </div>
                            <div class="check-date">
                                <label>Alamat Email:</label>
                                <input type="text" id="email" name="email" value="<?= set_value('email'); ?>">
                                <?= form_error('email', '<small class="text-danger">', '</small>'); ?>
                            </div>
                            <div class="check-date">
                                <label for="date-in">Tanggal Lahir:</label>
                                <input type="date" class="date-input" id="tanggal_lahir" name="tanggal_lahir" value="<?= set_value('tanggal_lahir'); ?>">
                                <?= form_error('tanggal_lahir', '<small class="text-danger">', '</small>'); ?>
                            </div>
                            <div class="select-option">
                                <label for="guest">Jenis Kelamin:</label>
                                <select id="jenis_kelamin" name="jenis_kelamin" value="<?= set_value('jenis_kelamin'); ?>">
                                <?= form_error('jenis_kelamin', '<small class="text-danger">', '</small>'); ?>
                                    <option value="0">Pilih</option>
                                    <option value="1">Laki-Laki</option>
                                    <option value="2">Perempuan</option>
                                </select>
                            </div>
                            <div class="check-date">
                                <label>Password:</label>
                                <input type="password" id="password" name="password">
                                <?= form_error('password', '<small class="text-danger">', '</small>'); ?>
                            </div>
                            <button type="submit">Daftar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
