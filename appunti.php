<?php 
//driv video 06set 
//slide 38

//-----------------------------------
//variabbili 
$stringa = "questa e una stringa";
$number = 30;
$booleano = true;



//-----------------------------------
//lettura dati GET e POST 
$testo = $_POST["testo"];
//var_dump sarebbe come il consol.log di javascript
var_dump($testo);
//cosi facendo stampo tutti gli elementi inviati tramite metodo POST
var_dump($_POST); 





//-----------------------------------
//concatenazione di variabbili STRINGHE
$concatenazione = $testo . " concatenazione di variabbili  " . $stringa;
var_dump($concatenazione);




//contatenazione di variabbili NUMBER
$numero = 10 + 20;
$calcolo = $numero + $number ;
var_dump($calcolo);





//-----------------------------------
//ARREY
$arrey = [
    "pane",
    "pasta",
    "pizza",
];

//gli arrei si posso stampare solo con il VAR_DUMP e non con echo
var_dump([$arrey]);



//-----------------------------------
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="appunti.php" method="post">
    <input type="text" name="testo">
    <button>invio</button>
    </form>
</body>
</html>



<!-- action nel FORM 
utilizzo del     action="appunti.php"   al suo interno inserire il file dove inserire
il nome dei fail dove mandare i dati . -->


<!-- method nel FORM 
il        method="post"     e per determinare come devo essere inviati i dati al file
se si utilizza il metodo POST i dati inviati saranno criptati , 
se invece si utilizza il metodo       GET    i dati di invio saranno bulici  -->


<!-- lettura dati GET e POST  
-->
