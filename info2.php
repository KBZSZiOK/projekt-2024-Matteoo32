<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Dodawanie nowych sprzedawców</title>
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
           
        <div id="prawy">
            <h4>Dodawanie sprzedawcy</h4>
            <form method="post">
                Imię: <input type="text" name="imie"><br>
                Nazwisko: <input type="text" name="nazwisko"><br>
                <input type="submit" value="Dodaj" name="submit">
            </form>
            <br><br>
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

    
        if(isset($_POST['submit'])){
        $imie = $_POST['imie'];
        $nazwisko  = $_POST['nazwisko'];
        

          $imie =  $_POST['imie'];
          $nazwisko = $_POST['nazwisko'];
  
          $sql1 = "INSERT INTO sprzedawcy (imie, nazwisko)  VALUES ('$imie', '$nazwisko')";
  
          if(mysqli_query($conn, $sql1)){
              echo "Rekordy dodane.";
            } else{
              echo "ERROR: Could not able to execute $sql1. " . mysqli_error($conn);
            }
        }
    

?>
        </div><br><br><br><br><br><br>
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
        <footer>
        Stronę wykonał Mateusz
        </footer>

    </div>
    <script src="javascript.js"></script>
</body>
</html>

