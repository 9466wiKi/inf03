<?php
//polaczenie
$id_polaczenia = mysqli_connect("localhost", "root", "", "wedkowanie");
//pobranioe danych z formularza
$imie = $_POST['first_name'];
$nazwisko = $_POST['last_name'];
$adres = $_POST['address'];


//zapytanie
$zapytanie = 'INSERT INTO karty_wedkarskie (imie, nazwisko, adres,data_zezwolenia, punkty) VALUES ("'. $imie .'", "'. $nazwisko .'", "'. $adres .'", NULL, NULL)';
 //wysłanie zapytania i wykonanie 
mysqli_query($id_polaczenia, $zapytanie);



//rozlaczenie z baza
mysqli_close($id_polaczenia); 
?>