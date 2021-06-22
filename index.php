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
    <!-- CDN Bootstrap CSS -->
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<!-- snack 1 -->
<div>
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
</div>
<!-- /snack 1 -->
<hr>
<!-- snack 2 -->
<div>
    <form action="#" method="get">
        <input type="text" name="name" id="username" placeholder="inserisci il tuo nome">
        <input type="text" name="email" id="email" placeholder="inserisci la tua mail">
        <input type="text" name="age" id="age" placeholder="inserisci la tua eta">
        <button type="submit">clicca</button>
    </form>

    <?php
        $name = $_GET['name'];
        $email = $_GET['email'];
        $age = $_GET['age'];
        // var_dump(strlen($name));
        if (strlen($name) >= 3 && strpos($email,'@') && strpos($email,'.') && ctype_digit($age)){
            $return = 'Accesso Riuscito';
        } else {
            $return = "Accesso negato";
        }
    ?>

    <h2>Verifica: <?php echo $return; ?></h2>
</div>
<!-- /snack 2 -->
<hr>
<!-- snack 3 -->
<div>
    <?php
        $posts = [

            '10/01/2019' => [
                [
                    'title' => 'Post 1',
                    'author' => 'Michele Papagni',
                    'text' => 'Testo post 1'
                ],
                [
                    'title' => 'Post 2',
                    'author' => 'Michele Papagni',
                    'text' => 'Testo post 2'
                ],
            ],
            '10/02/2019' => [
                [
                    'title' => 'Post 3',
                    'author' => 'Michele Papagni',
                    'text' => 'Testo post 3'
                ]
            ],
            '15/05/2019' => [
                [
                    'title' => 'Post 4',
                    'author' => 'Michele Papagni',
                    'text' => 'Testo post 4'
                ],
                [
                    'title' => 'Post 5',
                    'author' => 'Michele Papagni',
                    'text' => 'Testo post 5'
                ],
                [
                    'title' => 'Post 6',
                    'author' => 'Michele Papagni',
                    'text' => 'Testo post 6'
                ]
            ],
        ];
        //var_dump($posts);
        $keys = array_keys($posts);
    ?>

    <div class="d-flex">
        <?php for ($a = 0; $a < count($keys); $a++) { 
            $key = $keys[$a];
        ?>


            <?php for ($b = 0; $b < count($key); $b++) { 
                $post = $posts[$key]; 
                //var_dump($post);

                for ($c = 0; $c < count($post); $c++) { 
                $element = $post[$c];
                //var_dump($element);
            ?>

            <div>
                <h2>Data: <?php echo $key; ?></h2>
                <h4><?php echo $element['title'];?></h4>
                <p><?php echo $element['author'];?></p>
                <p><?php echo $element['text'];?></p>
            </div>
          
        <?php
            } 
            }
            }
        ?>
    </div>
</div>
<!-- /snack 3 -->  
<hr>  
<!-- snack 4 -->
<div>

</div>
<!-- /snack 4 -->
</body>
</html>