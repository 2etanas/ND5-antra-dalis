
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sveiki</title>
</head>
<body>
   <h1>Sveiki</h1>
</body>
</html>

<?php
// echo $cookie_namer;
if ($_COOKIE["prisijungta1"] == "TAIP"){
echo "<form method='post' action='manopaskyra.php'>";
echo "<button type='submit' name='atsijungti'>ATSIJUNGTI</button>";
echo "</form>";
}
if (isset($_POST["atsijungti"])){
    echo "ate";
    setcookie("prisijungta1","TAIP",time() - 100,"/");
    header('Location:'."index.php");
}

?>