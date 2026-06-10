<?php

$kontakt = simplexml_load_file("kontakt.xml");

?>

<!DOCTYPE html>
<html lang="hr">

<head>
    <meta charset="UTF-8">
    <title>Kontakt</title>
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

        <h2>Kontakt</h2>

        <p>
            <strong>Ime:</strong>
            <?php echo $kontakt->ime; ?>
        </p>

        <p>
            <strong>Prezime:</strong>
            <?php echo $kontakt->prezime; ?>
        </p>

        <p>
            <strong>Mail:</strong>
            <?php echo $kontakt->mail; ?>
        </p>

        <p>
            <strong>JMBG:</strong>
            <?php echo $kontakt->JMBG; ?>
        </p>

    </div>

</main>

<footer>
    <p>
        Lara Miličević - Podatkovna povezanost i digitalna infrastruktura
    </p>
</footer>

</body>

</html>
