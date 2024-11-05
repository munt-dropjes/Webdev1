<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Home Page</title>
    
    <link rel="icon" type="image/x-icon" href="img/favicon.ico">
    <link rel="stylesheet" href="css/style_main.css">
    <link rel="stylesheet" href="css/style_header.css">
    <!--<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body>
<header>
    <div class="header-pc">
        <div class="header-banner">
            <a href="/home">
                <img src="img/header-02.png" alt="Afbeelding is niet zichtbaar">
            </a>    
            <a class="img-link" href="index.php">
                <img src="img/header-03.png" alt="#">   
            </a>    
        </div>

        <nav class="navigation">
            <ul class="navigation">
                <div class="navLeft">
                    <li class="navigation">
                        <a class="navigation" href="/home">Home</a>
                    </li>
                    <li class="navigation">
                        <a class="navigation" href="/groep">De Groep</a>
                    </li>
                    <!-- 
                        geschiedenis
                        cadugraaf 
                        smoelenboek
                        vertrouwenspersoon
                        privacy verklaring
                        aanmeldingsprocedure
                    -->
                    <li class="dropdown">
                        <a href="javascript:void(0)" class="dropbtn">Speltakken</a>
                        <div class="dropdown-content">
                            <a href="/welpen">Welpen</a>
                            <a href="/verkenners">Verkenners</a>
                            <a href="/rowans">Rowans</a>
                            <a href="/rovers">Rovers</a>
                            <a href="/stam">Stam</a>
                        </div>
                        <!--  welpen 
                            fotos
                            programma 
                        -->
                        <!-- verkenners
                            fotos
                            programma
                            klasse eisen 
                        -->
                    </li>
                </div>
                <div class="navRight">
                    <li class="navigation">
                        <a class="navigation" href="/verhuur">Verhuur</a>
                    </li>
                    <!-- verhuur info -->
                    <li class="navigation">
                        <a class="navigation" href="/contact">Contact</a>
                    </li>
                    <li class="navigation">
                        <a class="navigation" href="/login">Inloggen</a>
                    </li>
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
                <li href="/home">Home</li>
                <li href="/groep">De Groep</li>
                <li href="/welpen">Welpen</li>
                <li href="/verkenners">Verkenners</li>
                <li href="/rowans">Rowans</li>
                <li href="/rovers">Rovers</li>
                <li href="/stam">Stam</li>
                <li href="/verhuur">Verhuur</li>
                <li href="/contact">Contact</li>
                <li href="/login">Inloggen</li>
            </ul>
        </section>
    </div>
</header>
<main>