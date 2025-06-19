<?php 
    $companyName = "E-Notifyer";
?>   
<!DOCTYPE html>
<html lang="nl">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="Neem contact op met het team van e-notifyer.nl voor vragen of opmerkingen. We helpen je graag verder en zorgen ervoor dat je snel een antwoord krijgt." />
        <meta name="author" content="E-notifyer" />
        <title>Contact - E-Notifyer - Jouw slimme e-mail oplossing</title>
        <link rel="icon" type="image/x-icon" href="img/favicon.png" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet" />
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" />
        <!-- Custom theme styles -->
        <link href="css/styles.css" rel="stylesheet" />
        <link rel="canonical" href="https://e-notifyer.nl/contact" />
        <meta property="og:title" content="Contact - E-Notifyer - Jouw slimme e-mail oplossing" />
        <meta property="og:description" content="Neem contact op met het team van e-notifyer.nl voor vragen of opmerkingen. We helpen je graag verder en zorgen ervoor dat je snel een antwoord krijgt." />
        <meta property="og:url" content="https://e-notifyer.nl/contact" />
        <meta property="og:image" content="img/01.jpg" />
        <meta property="og:type" content="website" />
        <meta property="og:site_name" content="E-Notifyer" />

        <meta name="twitter:card" content="summary_large_image" />
        <meta name="twitter:title" content="Contact - E-Notifyer - Jouw slimme e-mail oplossing" />
        <meta name="twitter:description" content="Neem contact op met het team van e-notifyer.nl voor vragen of opmerkingen. We helpen je graag verder en zorgen ervoor dat je snel een antwoord krijgt." />
        <meta name="twitter:image" content="img/01.jpg" />
        <meta name="twitter:url" content="https://e-notifyer.nl/contact" />
    </head>
    <?php include 'header.php'; ?>
        <!-- Header-->
        <header class="masthead text-center text-white py-5">
            <div class="masthead-content py-5">
                <div class="container px-5">
                    <h1 class="masthead-heading">Contact</h1>
                    <div class="row justify-content-center">
                        <div class="col-md-6">
                            <p>Heb je vragen, opmerkingen of behoefte aan ondersteuning? Neem gerust contact op met het team van e-notifyer. Of je nu hulp nodig hebt bij het instellen van meldingen, technische ondersteuning zoekt of gewoon meer wilt weten over onze diensten, wij staan klaar om je snel en professioneel te helpen. Vul hieronder het contactformulier in. We streven ernaar om je zo snel mogelijk van een antwoord te voorzien.</p>
                            <form id="contactForm">
                                <div class="form-group">
                                    <label class="my-2" for="name">Naam</label>
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Vul je naam in" required>
                                </div>
                                <div class="form-group">
                                    <label class="my-2" for="email">E-mail</label>
                                    <input type="email" class="form-control" id="email" name="email" placeholder="Vul je e-mail in" required>
                                </div>
                                <div class="form-group">
                                    <label class="my-2" for="message">Bericht</label>
                                    <textarea class="form-control" id="message" name="message" rows="5" placeholder="Schrijf je bericht" required></textarea>
                                    <input type="text" name="website" id="website" style="display:none">
                                </div>
                                <button type="submit" class="btn btn-primary btn-xl rounded-pill mt-5">Verzenden</button>
                                <div id="responseMessage" class="mt-3"></div> <!-- Dit is de plek voor het antwoord -->
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bg-circle-1 bg-circle"></div>
            <div class="bg-circle-2 bg-circle"></div>
            <div class="bg-circle-3 bg-circle"></div>
            <div class="bg-circle-4 bg-circle"></div>
        </header>
        <!-- Footer-->
        <!-- jQuery toevoegen -->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <?php include 'footer.php'; ?>
