<!DOCTYPE html>
<html lang="<?php bloginfo('language'); ?>">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php bloginfo('name'); ?></title>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url') ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.cdnfonts.com/css/avenir" rel="stylesheet">
    <title>GSAP Scroll Animation</title>
    <?php wp_head(); ?>
    <style>
        body {
            height: 200vh; /* Suficiente altura para hacer scroll */
        }
        .ball {
            width: 50px;
            height: 50px;
            background-color: red;
            border-radius: 50%;
            position: fixed;
            top: 50px; /* Posición inicial */
            left: 50px;
        }
        .content {
            padding: 10vh 5vw;
        }
        .section {
            height: 100vh;
        }
        .dark {
            background-color: #333;
            color: white;
        }
    </style>
</head>
<body>
<div class="ball"></div>
    <div class="content">
        <div class="section dark">
            <h2>Section 1</h2>
            <p>Content goes here...</p>
        </div>
        <div class="section">
            <h2>Section 2</h2>
            <p>Content goes here...</p>
        </div>
        <div class="section dark">
            <h2>Section 3</h2>
            <p>Content goes here...</p>
        </div>
    </div>