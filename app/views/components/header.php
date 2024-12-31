<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Home Page</title>
    
    <link rel="icon" type="image/x-icon" href="img/favicon.ico">
    <link rel="stylesheet" href="css/style_header.css">
    <link rel="stylesheet" href="css/style_main.css">
    <link rel="stylesheet" href="css/style_footer.css">
    <!--<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<?php
    function active($currect_page){
        $url_array =  explode('/', $_SERVER['REQUEST_URI']) ;
        $url = end($url_array);  
        if($currect_page == $url){
            echo 'nav-active'; //class name in style_header.css 
        } 
    }
?>

<body>
<header>
    <div class="header-pc">
        <div class="header-banner">
            <a href="/home">
                <img class="banner-img" src="img/header/header-new.svg" alt="Afbeelding is niet zichtbaar">
            </a>    
            <!-- <a class="img-link" href="index.php">
                <img class="banner-line" src="img/header/header-03.png" alt="#">   
            </a>     -->
        </div>

        <nav class="navigation">
            <ul class="navigation">
                <div class="navLeft">
                    <li class="navigation <?php active('home');?>">
                        <a class="navigation <?php active('home');?>" href="/home">Home</a>
                    </li>
                    <li class="navigation dropdown <?php active('groep');active('geschiedenis');active('cadugraaf');active('smoelenboek');active('vertrouwenspersoon');active('privacy');active('aanmelding');?>">
                        <a href="/groep" class="navigation dropbtn <?php active('groep');active('geschiedenis');active('cadugraaf');active('smoelenboek');active('vertrouwenspersoon');active('privacy');active('aanmelding');?>">De Groep</a>
                        <div class="dropdown-content">
                            <a class="<?php active('geschiedenis');?>" href="/geschiedenis">Geschiedenis</a>
                            <a class="<?php active('cadugraaf');?>" href="/cadugraaf">Cadugraaf</a>
                            <a class="<?php active('smoelenboek');?>" href="/smoelenboek">Smoelenboek</a>
                            <a class="<?php active('vertrouwenspersoon');?>" href="/vertrouwenspersoon">Vertrouwenspersoon</a>
                            <a class="<?php active('privacy');?>" href="/privacy">Privacyverklaring</a>
                            <a class="<?php active('aanmelding');?>" href="/aanmelding">Aanmeldingsprocedure</a>
                        </div>
                    </li>
                    <li class="navigation dropdown <?php active('welpen');active('verkenners');active('rowans');active('rovers');active('stam');?>">
                        <a href="javascript:void(0)" class="navigation dropbtn <?php active('welpen');active('verkenners');active('rowans');active('rovers');active('stam');?>">Speltakken</a>
                        <div class="dropdown-content">
                            <a class="<?php active('welpen');?>" href="/welpen">Welpen</a>
                            <a class="<?php active('verkenners');?>" href="/verkenners">Verkenners</a>
                            <a class="<?php active('rowans');?>" href="/rowans">Rowans</a>
                            <a class="<?php active('rovers');?>" href="/rovers">Rovers</a>
                            <a class="<?php active('stam');?>" href="/stam">Stam</a>
                        </div>
                    </li>
                </div>
                <div class="navRight">
                    <li class="navigation <?php active('verhuur');?>">
                        <a class="navigation <?php active('verhuur');?>" href="/verhuur">Verhuur</a>
                    </li>
                    <!-- verhuur info -->
                    <li class="navigation <?php active('contact');?>">
                        <a class="navigation <?php active('contact');?>" href="/contact">Contact</a>
                    </li>
                    <?php if(isset($_SESSION['user'])): ?>
                        <li class="navigation" <?php active('account');?>">
                            <a class="navigation <?php active('account');?>" href="/account">Account</a>
                        </li>
                        <li class="navigation <?php active('logout');?>">
                            <a class="navigation <?php active('logout');?>" href="/logout">Uitloggen</a>
                        </li>
                    <?php else: ?>
                        <li class="navigation <?php active('login');?>">
                            <a class="navigation <?php active('login');?>" href="/login">Inloggen</a>
                        </li>
                    <?php endif; ?>
                </div>
            </ul>
        </nav>
    </div>
    <div class="header-mobile">
        <section class="hamburger-navbar">
            <a id="headerImage" href="/home">
                <img id="logo" width="20%" src="img/logo.png" alt="Afbeelding is niet zichtbaar">
            </a>    
            <input id="menu-toggle" type="checkbox"/>
            <label class="menu-button-container" for="menu-toggle">
                <div class="menu-button"></div>
            </label>
            <ul class="menu">
                <li>
                    <a href="/home">Home</a>
                </li>
                <li>
                    <a href="/groep">De Groep</a>
                </li>
                <li>
                    <a href="/welpen">Welpen</a>
                </li>
                <li>
                    <a href="/verkenners">Verkenners</a>
                </li>
                <li>
                    <a href="/rowans">Rowans</a>
                </li>
                <li>
                    <a href="/rovers">Rovers</a>
                </li>
                <li>
                    <a href="/stam">Stam</a>
                </li>
                <li>
                    <a href="/verhuur">Verhuur</a>
                </li>
                <li> 
                    <a href="/contact">Contact</a>
                </li>
                <li>
                    <a href="/login">Inloggen</a>
                </li>
            </ul>
        </section>
    </div>
</header>
<main>