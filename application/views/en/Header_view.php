<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="<?php echo base_url()?>assets/css/styles.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">
    <title><?php echo $titre?></title>
</head>
<body>
    <header>
        <div class="header-content">
            <div class="hamburger" id="hamburger">
                <div class="bar1"></div>
                <div class="bar2"></div>
                <div class="bar3"></div>
            </div>
        </div>

        <div class="header-container">
            <h2>Menu</h2>
            <?php require 'links.php' ?>
            <div class="header-fill"></div>
            <img src="<?php echo base_url() ?>assets/images/logo_300px.png" alt="logo" class="header-logo">
        </div>
    </header>
    <!-- header responsive -->
    <div class="test" id="test">
        <h2>Menu</h2>
        <?php require 'links.php' ?>
    </div>
    <script src="<?php echo base_url()?>assets/js/header.js"></script>