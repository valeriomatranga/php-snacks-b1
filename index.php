<!-- 
Snack 1
Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60

Snack 2
Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”

Snack 3
Creare un array di array. Ogni array figlio avrà come chiave una data in questo formato: DD-MM-YYYY es 01-01-2007 e come valore un array di post associati a quella data. Stampare ogni data con i relativi post.
Qui l’array di esempio: https://www.codepile.net/pile/R2K5d68z

Snack 4
Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta

Snack 5
Prendere un paragrafo abbastanza lungo, contenente diverse frasi. Prendere il paragrafo e suddividerlo in tanti paragrafi. Ogni punto un nuovo paragrafo.

Snack 6
Utilizzare questo array: https://pastebin.com/CkX3680A. Stampiamo il nostro array mettendo gli insegnanti in un rettangolo grigio e i PM in un rettangolo verde.

Snack 7
Creare un array contenente qualche alunno di un’ipotetica classe. Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici. Stampare Nome, Cognome e la media dei voti di ogni alunno.
 -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!-- snack 1 -->
<?php
$squadre = [
    [
      "casa" => "Olimpia - ",  
      "ospite" => "Milano | ",
      "punt_casa" => "50-",
      "punt_ospite" => "60",
    ],
    [
      "casa" => "Cosenza - ",  
      "ospite" => "Reggio | ",
      "punt_casa" => "30-",
      "punt_ospite" => "28",

    ],
    [
      "casa" => "Palermo - ",  
      "ospite" => "Catania | ",
      "punt_casa" => "60-",
      "punt_ospite" => "10",

    ],
    [
      "casa" => "Sassari - ",  
      "ospite" => "Roma | ",
      "punt_casa" => "40-",
      "punt_ospite" => "50",

    ]
]
?>
<div>
    <h2>Partite squadre Semifinali</h2>
    <?php for ($i = 0; $i < count($squadre); $i++) {
        $squadra = $squadre[$i];
    ?>

    <div>
        <span><?php echo $squadra['casa']?></span>
        <span><?php echo $squadra['ospite']?></span>
        <span><?php echo $squadra['punt_casa']?></span>
        <span><?php echo $squadra['punt_ospite']?></span>
        <?php } ?>
    </div>
    
</div>
    
</body>
</html>