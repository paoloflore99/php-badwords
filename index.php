<?php 

$invio = 'invia i tui dati';


?>














<!DOCTYPE html>
<html lang="en">
<head>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" type="image/x-icon" href="https://boolean.careers/favicon/favicon.ico">
        <link rel="stylesheet" href="./css/style.css"><!--css-->
        <title>Php-Badwords</title>
</head>

<body>
    <div class="sfondo ">
        <div class="container rounded-3 text-white">
            <div class="row ">

            <div>
                <form class="d-flex padding-mio" action="" method="post">
                    <input type="text" class="p-2 container-fluid" type="name"  placeholder="Name*">
                    <div class="mx-2"></div>
                    <input type="text" class="p-2 container-fluid" type="cognome" placeholder="Cognome*">
                </form>
            </div>

            <div>
                <form class="d-flex padding-mio" action="" method="post">
                    <input type="text" class="p-2 container-fluid" type="email" placeholder="Email*">
                    <div class="mx-2"></div>
                    <input type="text" class="p-2 container-fluid" type="date"  placeholder="date">
                </form>
            </div>

            <div>
                <form class="padding-mio" action="" method="help">
                    <input class="input container-fluid p-2 input-help" type="text">
                    <button class="container-fluid padding-meno p-2" ><?php echo $invio ?></button>
                </form>
            </div>

            </div>
        </div>
    </div>
</body>
</html>