<?php

$grad = $_POST["grad"];

if($grad == "zagreb"){
    $json = file_get_contents("vrijeme_zagreb.json");
}

if($grad == "zadar"){
    $json = file_get_contents("vrijeme_zadar.json");
}

if($grad == "osijek"){
    $json = file_get_contents("vrijeme_osijek.json");
}

$weather = json_decode($json, true);

?>

<!DOCTYPE html>
<html lang="hr">

<head>
    <meta charset="UTF-8">
    <title>Prognoza</title>
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

        <h1>
        <?php echo $weather["ikona"]; ?>
        </h1>


        <h2>
            Prognoza za <?php echo $weather["grad"]; ?>
        </h2>

        <p>
            <strong>Vrijeme:</strong>
            <?php echo $weather["vrijeme"]; ?>
        </p>

        <p>
            <strong>Temperatura:</strong>
            <?php echo $weather["temperatura"]; ?> °C
        </p>

        <p>
            <strong>Brzina vjetra:</strong>
            <?php echo $weather["vjetar"]; ?> km/h
        </p>

        <p>
            <strong>UV indeks:</strong>
            <?php echo $weather["uv_index"]; ?>
        </p>

        <p>
            <strong>Izlazak sunca:</strong>
            <?php echo $weather["sunrise"]; ?>
        </p>

        <p>
            <strong>Zalazak sunca:</strong>
            <?php echo $weather["sunset"]; ?>
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
