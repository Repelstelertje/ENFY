<?php
    $companyName = "E-Notifyer";
?>
<!DOCTYPE html>
<html lang="nl">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="De pagina die je zoekt is niet gevonden." />
        <meta name="author" content="E-notifyer" />
        <title>404 - Pagina niet gevonden - <?php echo $companyName; ?></title>
        <link rel="icon" type="image/x-icon" href="img/favicon.png" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
        <meta property="og:title" content="404 - Pagina niet gevonden - E-Notifyer" />
        <meta property="og:description" content="De pagina die je zoekt is niet gevonden." />
        <meta property="og:url" content="https://e-notifyer.nl/404" />
        <meta property="og:image" content="img/01.jpg" />

        <meta name="twitter:card" content="summary_large_image" />
        <meta name="twitter:title" content="404 - Pagina niet gevonden - E-Notifyer" />
        <meta name="twitter:description" content="De pagina die je zoekt is niet gevonden." />
        <meta name="twitter:image" content="img/01.jpg" />
        <meta name="twitter:url" content="https://e-notifyer.nl/404" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
            <div class="container px-5">
                <a class="navbar-brand" href="index.php"><?php echo $companyName; ?></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Header-->
        <header class="masthead text-center text-white py-5">
            <div class="masthead-content">
                <div class="container px-5">
                    <h1 class="masthead-heading mb-0">Pagina niet gevonden</h1>
                    <h2 class="masthead-subheading mb-0">Error 404</h2>
                    <a class="btn btn-primary btn-xl rounded-pill mt-5" href="index.php">Ga terug naar de homepage</a>
                </div>
            </div>
            <div class="bg-circle-1 bg-circle"></div>
            <div class="bg-circle-2 bg-circle"></div>
            <div class="bg-circle-3 bg-circle"></div>
            <div class="bg-circle-4 bg-circle"></div>
        </header>
        <!-- Footer-->
        <footer class="py-5 bg-black">
            <div class="container px-5 text-white">
                <div class="row">
                    <div class="col-lg-3 mb-3">
                        <p class="m-0 text-center small"><?php echo $companyName; ?> is een onderdeel van<br> Media 2 Connect B.V. Copyright &copy; <?php echo date('Y'); ?></p>
                    </div>
                    <div class="col-6 col-lg-2 offset-lg-1 mb-3">
                        <p>Contact:</p>
                        <p>Email: info@e-notifyer.nl<br>
                        Phone: +31 615408257</p>
                        <a href="contact.php">Direct contact</a>
                        </p>
                    </div>
                    <div class="col-6 col-lg-2 offset-lg-1 mb-3">
                        <p>Adres:</p>
                        <p>Louis Couperusplein 2<br>
                        2514HP Den Haag<br>
                        Nederland</p>
                        </p>
                    </div>
                    <div class="col-6 col-lg-2 offset-lg-1 mb-3">
                        <p>Legal:</p>
                        <p><a href="privacy.php">Privacy policy</p>
                        <p><a href="cookie.php">Cookie policy</p>
                        </p>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
