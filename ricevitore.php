
<?php



// echo $_POST['name'] = '***'; 
// echo 'ciao'. " " .$_POST['name'] . ' ' . $_POST['cognome'];

 //cosi facendo mi stampa solo *** aggiuntivi al name


// $text = "ciao , come , state , io sto , bene , grazie ,";

// if(str_starts_with($_POST["$text"], "c")){
//     echo "primo";
// } else {
//     echo "secondo";
// };
// var_dump($text);
//fare una condizzione ?
var_dump($_POST);             //sarebbel il consol.log() in php
$nome_completo =  $_POST ['name'] . ' ' . $_POST ['cognome'] ; //contatenazione di 2 variabbili
$il_nome = $_POST ['name'];
$testo = $_POST['text'] ?? null;
$filtro = str_replace($il_nome, '***', $testo);
?>
<!DOCTYPE html>
<html lang="en">
<head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" type="image/x-icon" href="https://boolean.careers/favicon/favicon.ico">
        <link rel="stylesheet" href="./css/style.css"><!--css-->
        <title>Php-cecivitore</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <ul>
                <li>ciao <?php echo $nome_completo ?></li>
                <li>ciao <?php echo $_POST['cognome'] . ' ' . $_POST['name'] ?></li>
                <li><?php echo  $filtro ?></li><!--cosi per stampare nel html i dati del alro html-->
            </ul>
        </div>
    </div>
</body>
</html>

