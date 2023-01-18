<!DOCTYPE html>
<html lang="en">
<head>
    <?php
    wp_head();
    ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&family=Rubik:wght@300&display=swap" rel="stylesheet">    <title>Danki code - tema</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo get_theme_root_uri();?>/danki/style.css">
</head>
<body>



    <section class="topo">
        <div class="center">
            <header>
                <div class="logo"><img src="<?php echo get_theme_root_uri();?>/danki/image/home/pngs/logo.png" alt=""></div><!--logo-->
            </header>


            <ul class="menu-desktop">
                <li><a href="/danki/">Home</a></li>
                <li><a href="/danki/sobre.php">Sobre</a></li>
                <li><a href="/danki/contato.php">Contato</a></li>
            </ul>

            <div class="menu-mobile">
            <i class="fa-solid fa-bars"></i>
                <ul>
                <li><a href="/danki/">Home</a></li>
                <li><a href="/danki/sobre.php">Sobre</a></li>
                <li><a href="/danki/contato.php">Contato</a></li>
            </ul>

            </div><!--menu-mobile-->