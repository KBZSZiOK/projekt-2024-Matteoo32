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
            <div id="lewy"><img src="kamilslimak.png" alt=""></div>
            <div id="prawy"><p>Najlepsze KINO na świecie. Posiadamy ponad 500 filmów gotowych na was!</p>
            <form method="post">
                <select name="info">
                    <option value="seanse">Seanse</option>
                    <option value="filmy">Filmy</option>
                    <option value="bilety">Bilety</option>
                    <option value="sprzedawcy">Sprzedawcy</option>
                    <option value="klienci">Klienci</option>
                    <option value="sale">Sale</option>
                </select>
            <input type="submit" value="wyślij">
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


    if ($_POST["info"] == "seanse") {
        $sql = "SELECT id, termin, sala_id, film_id, liczba_wolnych_miejsc FROM seanse";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
         while ($row = $result->fetch_assoc()) {
             echo "id: " . $row["id"] . " - Termin: " . $row["termin"] . " - NR sali: " . $row["sala_id"] . " - Nr filmu: " . $row["film_id"] . " - Wolne miejsca: " . $row["liczba_wolnych_miejsc"] . "<br>";
         }
     } else {
         echo "0 results";
     }
    }
    
    if ($_POST["info"] == "bilety") {
        $sql = "SELECT id, seans_id, sprzedawca_id, klient_id, cena FROM bilety";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
         while ($row = $result->fetch_assoc()) {
             echo "id: " . $row["id"] . " - NR seansu: " . $row["seans_id"] . " - ID sprzedawcy: " . $row["sprzedawca_id"] . " - ID klienta: " . $row["klient_id"] . " - Cena: " . $row["cena"] . " zł<br>";
         }
     } else {
         echo "0 results";
     }
    }

    if ($_POST["info"] == "filmy") {
        $sql = "SELECT id, tytul, rezyser, czas_trwania FROM filmy";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
         while ($row = $result->fetch_assoc()) {
             echo "id: " . $row["id"] . " - Tytuł: " . $row["tytul"] . " - Reżyser: " . $row["rezyser"] . " - Czas trwania: " . $row["czas_trwania"] . " minut<br>";
         }
     } else {
         echo "0 results";
     }
    }
    
    if ($_POST["info"] == "klienci") {
        $sql = "SELECT id, imie, nazwisko, mail FROM klienci";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
         while ($row = $result->fetch_assoc()) {
             echo "id: " . $row["id"] . " - Imię: " . $row["imie"] . " - Nazwisko: " . $row["nazwisko"] . " - Mail: " . $row["mail"] . "<br>";
         }
     } else {
         echo "0 results";
     }
    }

    if ($_POST["info"] == "sale") {
        $sql = "SELECT id, ilosc_miejsc FROM sale";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
         while ($row = $result->fetch_assoc()) {
             echo "NR Sali: " . $row["id"] . " - Ilość miejsc: " . $row["ilosc_miejsc"] . "<br>";
         }
     } else {
         echo "0 results";
     }
    }


    if ($_POST["info"] == "sprzedawcy") {
        $sql = "SELECT id, imie, nazwisko FROM sprzedawcy";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
         while ($row = $result->fetch_assoc()) {
             echo "id: " . $row["id"] . " - Imię: " . $row["imie"] . " - Nazwisko: " . $row["nazwisko"]  . "<br>";
         }
     } else {
         echo "0 results";
     }
    }

?>