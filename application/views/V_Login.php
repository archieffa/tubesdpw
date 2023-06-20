<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Sona Template">
    <meta name="keywords" content="Sona, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <title>Blue Moon</title>

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
                            <h1 class="h4 text-gray-900 mb-4">Masuk</h1>
                        </div>
                        
                        <?= $this->session->flashdata('message') ?>

                        <form>
                            <div class="check-date">
                                <label>Email atau Nomor Telepon:</label>
                                <input type="text" id="email" name="email">
                            </div>
                            <div class="check-date">
                                <label>Password:</label>
                                <input type="password" id="password" name="password">
                            </div>
                            <button type="submit">Masuk</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
