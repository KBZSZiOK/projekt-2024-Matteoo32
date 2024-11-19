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
            <li class="menu"><a href="info.php">Dodaj nowy film</a></li>
            <li class="menu"><a href="info2.php">Dodaj sprzedawce</a></li>
            <li class="menu"><a href="kino.php">Informacje</a></li>
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
        $sql = "SELECT * FROM seanse";
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
        </div><br><br><br><br><br><br><br><br>
        <div id="animacja">
        <p class="para" id="para1"> 
        Litwo! Ojczyzno moja! ty jesteś jak zdrowie.

Ile cię trzeba cenić, ten tylko się dowie,

Kto cię stracił. Dziś piękność twą w całej ozdobie

Widzę i opisuję, bo tęsknię po tobie.

 

Panno Święta, co Jasnej bronisz Częstochowy

I w Ostrej świecisz Bramie! Ty, co gród zamkowy

Nowogródzki ochraniasz z jego wiernym ludem!

Jak mnie dziecko do zdrowia powróciłaś cudem

(Gdy od płaczącej matki pod Twoję opiekę

Ofiarowany, martwą podniosłem powiekę

I zaraz mogłem pieszo do Twych świątyń progu

Iść za wrócone życie podziękować Bogu),

Tak nas powrócisz cudem na Ojczyzny łono.

Tymczasem przenoś moję duszę utęsknioną

Do tych pagórków leśnych, do tych łąk zielonych,

Szeroko nad błękitnym Niemnem rozciągnionych;

Do tych pól malowanych zbożem rozmaitem,

Wyzłacanych pszenicą, posrebrzanych żytem;

Gdzie bursztynowy świerzop, gryka jak śnieg biała,

Gdzie panieńskim rumieńcem dzięcielina pała,

A wszystko przepasane, jakby wstęgą, miedzą

Zieloną, na niej z rzadka ciche grusze siedzą.
        </p> 
        </div>
        <br>
        <footer>
        Stronę wykonał Mateusz
        </footer>

    </div>
    <script src="javascript.js"></script>
</body>
</html>

