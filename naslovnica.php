<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="naslovnica.css">
    <meta charset="UTF-8">
    <title> Vremenska prognoza </title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@347&display=swap" rel="stylesheet">
</head>
<body>
<header>
    <div class="logo">
        <img src="images/tvz_logo.png">
    </div>
    <h1 class="naslov"> Vremenska prognoza </h1>
    <ul class="podstranice">
    <li><a href="naslovnica.php">Naslovnica</a></li>
    <li><a href="naslovnica.php">Prognoza</a></li>
    <li><a href="kontakt.php">Kontakt</a></li>
    <li><a href="lokacija.php">Lokacija</a></li>
    </ul>
</header>
<main>
    <div class="login-container">

        <h2>Prijava</h2>

        <form action="prognoza.php" method="post">

            <input
                type="text"
                name="username"
                placeholder="Korisničko ime"
                required>

            <input
                type="password"
                name="password"
                placeholder="Lozinka"
                required>

            <select name="grad">

                <option value="zagreb">Zagreb</option>

                <option value="zadar">Zadar</option>

                <option value="osijek">Osijek</option>

            </select>

            <button type="submit">
                Prijavi se
            </button>

        </form>

    </div>
</main>
<footer>
    <p> 
        Lara Miličević - Podatkovna povezanost i digitalna infrastruktura
    </p>
</footer>
</body>
</html>
