<?php

$lokacija = simplexml_load_file("lokacija.xml");

?>

<!DOCTYPE html>
<html lang="hr">

<head>
    <meta charset="UTF-8">
    <title>Lokacija</title>
    <link rel="stylesheet" href="naslovnica.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@347&display=swap" rel="stylesheet">
</head>

<body>

<header>

    <div class="logo">
        <img src="images/tvz_logo.png">
    </div>

    <h1 class="naslov">Vremenska prognoza</h1>

    <ul class="podstranice">
        <li><a href="naslovnica.php">Naslovnica</a></li>
        <li><a href="naslovnica.php">Prognoza</a></li>
        <li><a href="kontakt.php">Kontakt</a></li>
        <li><a href="lokacija.php">Lokacija</a></li>
    </ul>

</header>

<main>

    <div class="login-container">

        <p>
            <strong>Grad:</strong>
            <?php echo $lokacija->grad; ?>
        </p>

        <p>
            <strong>Adresa:</strong>
            <?php echo $lokacija->adresa; ?>
        </p>

        <iframe 
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d177882.8716908162!2d15.799554866854786!3d45.84289557341835!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4765d692c902cc39%3A0x3a45249628fbc28a!2sZagreb!5e0!3m2!1shr!2shr!4v1780575480887!5m2!1shr!2shr" 
        width="100%" 
        height="400" 
        style="border:0;" 
        allowfullscreen="" 
        loading="lazy" 
        referrerpolicy="no-referrer-when-downgrade">
        </iframe>

    </div>

</main>

<footer>
    <p>
        Lara Miličević - Podatkovna povezanost i digitalna infrastruktura
    </p>
</footer>

</body>

</html>
