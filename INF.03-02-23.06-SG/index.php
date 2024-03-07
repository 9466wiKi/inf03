<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hurtownia szkolna</title>
    <link rel="stylesheet" href="styl.css">
</head>
<body>
    
<section id="baner">
    <h1>Hurtownia z najlebszymi cenami</h1>
</section>

<section id="lewy">
    <h2>Nasze ceny</h2>
    <table>



    </table>


</section>
<section id="srodkowy">
    <h2>Koszty zakupow</h2>
    <form action="index.php" method="post">
    <select name="Object">
           <option value="1">Zeszyt 60 kartek</option>
           <option value="2">Zeszyt 32 kartki</option>
           <option value="3">Cyrkiel</option>
           <option value="4">linijka</option>
           <option value="5">linijka 30cm</option>
    </select>
<br>
liczba sztuk: <input type="number"  name="number_of_items"  >
<br>
<input type="submit" value="Oblicz">
    </form>


</section>

<section id="prawy">
<h2>Kontakt:53456123</h2>
<img src="zakupy.png" alt="hurtownia">

<p>
    <a href="milto:hurt@poczta2.pl">hurt@poczta2.pl j</a>
</p>

</section>

<section id="stopka">
    <h4>Witryne wykonal:56</h4>
</section>

</body>
</html>