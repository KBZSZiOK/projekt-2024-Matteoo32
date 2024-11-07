<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Kino</title>
</head>
<body>
    <div id="glowny">
        <header>
            <h1><img src="kamilslimak.png" alt="kamilslimak">Kamil Ślimak KINO</h1>
        </header>
        <nav>
        <ul id="menu">
            <li class="menu"><a href="info.php">Dodaj informacje</a></li>
            <li class="menu"><a href="kino.php">Informacje</a></li>
            <li class="menu"><a href="kontakt.html">Kontakt</a></li>
            <li class="menu"><a href="mailto: mateusz.mering.mm@gmail.com">Wyślij maila</a></li>
            
        </ul>
    </nav>
        <div id="tresc">
           
        <div id="prawy">
            <h2>Dodawanie informacji</h2>
            <h4>Dodawanie filmu</h4>
            <form method="post">
                Tytuł: <input type="text" name="tytul"><br>
                Reżyser: <input type="text" name="rezyser"><br>
                Czas trwania: <input type="text" name="czas_trwania"><br>
                <input type="submit" value="Dodaj">
            </form>
        </div>
        </div>
        <footer>
        Stronę wykonał Mateusz
        </footer>

    </div>
</body>
</html>

<?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $database = "kino_4tig1"; 
        $conn = new mysqli($servername, $username, $password, $database);
    
        if ($conn->connect_error) {
            die("Błąd połączenia: " . $conn->connect_error);
        }

        $tytul =  $_REQUEST['tytul'];
        $rezyser = $_REQUEST['rezyser'];
        $czas_trwania =  $_REQUEST['czas_trwania'];

        $sql = "INSERT INTO filmy  VALUES ('$tytul', '$rezyser','$czas_trwania')";
        


?>

