<html lang="nl">
<head>
    <meta charset="UTF-8">
    <!-- legacy html5 support voor IE -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/grid-layout.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/media.css">
    <!-- change the title -->
    <title>Chanel & Daisy Kapsters aan huis</title>
</head>
<!--body = main grid -->
<body class="body">
    <!-- Header section -->
    <header>
            <!-- navigation section -->
            <img src="img/menu.svg" alt="menu " class="nav-toggle" >
            <section class="side-nav">
                <img src="img/close.svg" alt="close" class="nav-close">
                <nav>
                    <ul>
                        <li class="nav-1"><a href="contact.php">Afspraak maken</a></li>
                        <li class="nav-2"><a href="index.php">Homepagina</a></li>
                        <li class="nav-3"><a href="diensten.html">Diensten</a></li>
                        <li class="nav-4"><a href="producten.html">Producten</a></li>
                    </ul>
                </nav>
            </section>
            <section class="header-mid">
                <div class="header-title"> 
                    <h1 class="header-h1">Chanel & Daisy<br><span>Kapsters  aan huis</span></h1>
                </div>  
            </section>
            <slider>
                <slider><p></p></slider>
                <slider><p></p></slider>
                <slider><p></p></slider>
                <slider><p></p></slider>
            </slider>
            <div class="header-regio-background"><h2 class="header-regio">Regio Reimerswaal & Walcheren</h2></div>
        </header>
    <!--main section -->
    <main>
        <section>
                <form class="contact-form" action="tel:0612779366">
                    <h2 class="contact-header">Bel ons of App ons</h2>
                    <button class="contact-button" type="submit" name="submit"><p class="contact-submit"> <a href="tel:+31612779366">bellen</a><p></button>
                    
                    <label for="">ons telefoonnummer: 0612779366</label>
                </form>
        </section>
        <section>
            <form class="contact-form" action="contactform.php" method="post">
                <h2 class="contact-header">Stuur ons een bericht</h2>
                <label class="contact-label"for="naam"> Naam: </label>
                <input class="contact-input" type="text" name="name">
                <label class="contact-label"for="mail">E-mail:</label>
                <input class="contact-input" type="text" name="mail">
                <label class="contact-label"for="onderwerp">Telefoonnummer:</label>
                <input class="contact-input" type="text" name="subject">
                <label class="contact-label"for="bericht">Bericht:<i>(Vermeld: gewenste datum, personen en eventueel behandeling)</i></label>
                <textarea class="contact-textarea" name="message"></textarea>
                <button class="contact-button" type="submit" name="submit"><p class="contact-submit">Verstuur bericht<p></button>
            </form>
        </section>

    </main>
    <!-- footer section -->
    <footer class="footer-main">
        <section class="footer-upper-section">
            <address>
                <p class="">Volg ons op social media</p>
                <a href="https://www.facebook.com/"><img src="img/footer-facebook.png" alt="Facebook-icon" class="footer-icon"></a>
                <a href="https://www.instagram.com/?hl=en"><img src="img/footer-instagram.png" alt="Instagram-icon" class="footer-icon"></a>
                <a href="https://www.linkedin.com/"><img src="img/footer-linkedin.png" alt="Linkedin-icon" class="footer-icon"></a>
            </address>
            <small><p>Copyright &copy; Chanel & Daisy</p></small>
        </section>
        <section class="footer-lower-section">
            <h6>Website gemaakt door:</h6>
            <a href="http://iamsebastiantramper.com/" rel="author"><h6>Sebastian Tramper</h6></a>
            <address><a href="http://iamsebastiantramper.com/" rel="author"><p>www.iamsebastiantramper.com</p></a></address>
        </section>
    </footer>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js" defer></script>
    <script type="text/javascript" src="function.js" defer></script>
</body>
</html>