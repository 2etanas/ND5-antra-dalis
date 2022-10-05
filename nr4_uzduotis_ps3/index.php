<?php
// Sukurkite du input laukelius. Vienas -  vardas, kitas - slaptažodis. Susigalvokite vardą ir slaptažodį. Pvz. vardas - "admin",
// slaptažodis - "123456". Jei duomenys yra įvesti teisingi, vartotojas nukreipiamas į failą - manopaskyra.php.
// Kitu atveju, vartotojas nukreipiamas į puslapį - 404.php. Su $_COOKIES pagalba visi failai, turi prisiminti, ar vartotojas prisijungęs, ar ne. 
// manopaskyra.php puslapyje sukurti "Atsijungti" mygtuką, kuris išvalo sausainiukus ir yra matomas tik tada, kai egzistuoja  sausainiukas.

// P,S 2 užduotis yra iš 3 paskaitos užduočių sąrašo. Jei atlikote, reikia seną kodą tik patobulinti!!!

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="">
    <input type="text" name = "vardas" placeholder="Vardas">
    <input type="password" name="password" placeholder="Slaptazodis">
    <button type="submit" name="ieiti">Ieiti</button>
    </form>
</body>
</html>
<?php
    $storedN = "admin";
    $storedP = "123456";
if (isset($_POST["ieiti"])){   
    $Vardas = $_POST["vardas"];
    $Slaptazodis = $_POST["password"];
if ($Vardas == $storedN && $Slaptazodis == $storedP) {
    include "manopaskyra.php";

    // echo "<script>alert('Sėkmingai prisijungta')</script>";
    header('Location:'."manopaskyra.php");
    $cookie_namer ="prisijungta1"; // norejau kad persimestu i kita faila, bet reik dar pasigilint i global sintakse. 
    setcookie($cookie_namer,"TAIP",time() + (3600*24),"/");
} else {
    include "404.php";
    setcookie("Neprisijungta","TAIP",time() + (3600*24),"/");
    // echo "<script>alert('Įvesti duomenys neteisingi')</script>";
    header('Location:'."404.php");

};
};
?>