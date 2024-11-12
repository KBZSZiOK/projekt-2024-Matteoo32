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