<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Dodawanie nowych filmów</title>
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
            <h4>Dodawanie filmu</h4>
            <form method="post">
                Tytuł: <input type="text" name="tytul"><br>
                Reżyser: <input type="text" name="rezyser"><br>
                Czas trwania: <input type="text" name="czas_trwania"><br>
                <input type="submit" value="Dodaj">
            </form>

            <br><br>
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

        $tytul =  $_POST['tytul'];
        $rezyser = $_POST['rezyser'];
        $czas_trwania =  $_POST['czas_trwania'];

        $sql = "INSERT INTO filmy (tytul, rezyser, czas_trwania)  VALUES ('$tytul', '$rezyser','$czas_trwania')";

        if(mysqli_query($conn, $sql)){
            echo "Rekordy dodane.";
          } else{
            echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
          }
        

    

?>

