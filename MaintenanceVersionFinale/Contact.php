<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Page de Contact</title>
</head>

<body>
    <header>
        <nav class="box">
            <ul>
                <li>
                    <a><img class="Lg" src="media/img/logo.png" alt="logo"></a>
                </li>
                <li><a href="Accueil.php">Acceuil</a></li>
                <li><a href="Ticket.php">Technicien</a></li>
                <li><a href="Contact.php">Contact</a></li>
            </ul>
        </nav>
    </header>
    <main class="contact">
        <div class="contactDetails contactCoord">
            <h1>Nous contacter</h1>
            <p><span>Nom du société :</span> PDCM SAS</p>
            <p><span>Numéro de téléphone :</span> 03.42.45.12.11</p>
            <p><span>Adresse email :</span> CONTACT@PCDM.COM</p>
            <p><span>Horaire d'ouverture :</span> Lundi - Vendredi 9H à 12H – 14H à 17H</p>
        </div>
        <div class="contactDetails contactAdress">
            <p><span>Adresse :</span> 6B, Rue des lilas, 75000 Paris, France</p>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2595.0901542809825!2d2.8424036159320765!3d49.42610956851812!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e7d66ed9468989%3A0x1752c687d760aa7d!2sCompiegne!5e0!3m2!1sfr!2sfr!4v1613059651585!5m2!1sfr!2sfr"
                frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>
    </main>
    <?php
    include_once("partials/footer.phtml");

    ?>