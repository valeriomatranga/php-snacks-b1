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
            "casa" => "Olimpia",  
            "ospite" => "Milano",
            "punt_casa" => "50",
            "punt_ospite" => "60",
        ],
        [
            "casa" => "Cosenza",  
            "ospite" => "Reggio",
            "punt_casa" => "30",
            "punt_ospite" => "28",
            
        ],
        [
            "casa" => "Palermo",  
            "ospite" => "Catania",
            "punt_casa" => "60",
            "punt_ospite" => "10",
            
        ],
        [
            "casa" => "Sassari",  
            "ospite" => "Roma",
            "punt_casa" => "40",
            "punt_ospite" => "50",
            
            ]
        ];
        ?>
    <div>
        <h2>Partite squadre Semifinali</h2>
        <?php for ($i = 0; $i < count($squadre); $i++) {
            $squadra = $squadre[$i];
        ?>

        <div>
            <span><?php echo $squadra['casa']?> - </span>
            <span><?php echo $squadra['ospite']?> | </span>
            <span><?php echo $squadra['punt_casa']?>-</span>
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
    <?php
    $random_number = [];

    while ( $random_number < 15 ) { 
        $number = rand(1, 100);
        if (!in_array($number, $random_number)){
            array_push($random_number, $number);
        }
    }
    var_dump($random_number);
    ?>
</div>
<!-- /snack 4 -->
<hr>
<!-- snak 5 -->
<div>
    <?php
    $testo = "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nulla nisi nostrum dolorem, mollitia iusto sed, iure maxime, dolor dicta fuga vel! Perferendis explicabo quia quod voluptas sed nihil natus omnis, cumque corporis dolor voluptatum est repudiandae? Molestiae officiis veritatis fugiat facilis eum cupiditate deleniti amet ipsa porro impedit, omnis illum at ipsam rem, ipsum odit dignissimos delectus facere aliquid? Quasi quidem quaerat harum tempore dolores doloribus unde velit magnam, ipsam officiis sequi, aliquid iste, quisquam laboriosam. Magnam dolorum exercitationem quis quaerat in, quos nam nisi itaque. Quaerat, ex at nobis, nihil error vero exercitationem neque facilis totam animi nesciunt ad, possimus commodi! Odio perferendis veniam itaque eveniet dolorum amet, aspernatur mollitia numquam voluptatem id labore quidem sapiente, eum facilis necessitatibus placeat qui cumque quis nesciunt veritatis delectus autem? Eos laborum, animi iure tempora labore distinctio eum? Dolorem maiores, placeat excepturi soluta harum praesentium distinctio ea nam facere quis atque eum assumenda laborum quia consequatur voluptas ab debitis nihil dolore impedit a quas ipsum sed cum. Amet veritatis suscipit sit aspernatur vel? Earum iusto molestiae magnam laboriosam accusantium deserunt quos doloribus numquam illo ullam nesciunt beatae itaque possimus eos cumque quisquam rerum doloremque alias aut facilis et eaque, neque sunt inventore. Fuga, in. Vero iste nihil excepturi harum quae accusamus assumenda dolorem enim neque dicta modi vel quod aliquam, architecto corporis earum a facere provident. Exercitationem cupiditate libero, error, aspernatur ab quisquam aperiam corporis voluptatum labore ipsa sit quam incidunt eaque dolore et deserunt quibusdam temporibus ducimus facere tempora? Vero vel fugiat provident magnam repudiandae inventore. Provident eos ipsam quaerat doloremque sint, doloribus maxime delectus eligendi praesentium voluptates mollitia in voluptatem, veniam repellat rerum a voluptate, excepturi fugit asperiores. Eligendi sunt aliquid, ratione placeat aspernatur suscipit error temporibus. Consequuntur qui odit aliquam hic quaerat explicabo quam rerum? Nam quasi officia vitae ducimus ipsum dignissimos architecto obcaecati iure inventore similique perferendis voluptatum voluptatibus laboriosam expedita beatae, impedit repellendus illum accusamus unde quidem vero doloribus repudiandae sint. Ea at sapiente tenetur fuga voluptate cumque eius inventore aperiam dignissimos nam minus praesentium facilis magnam est, totam aspernatur natus fugit quaerat perspiciatis quae voluptatum quod sit! Perferendis rerum laudantium adipisci ab, doloremque dignissimos animi consectetur tempora aliquam. Excepturi velit dolore modi perferendis eius laborum, nam, autem architecto magnam nemo illum voluptates blanditiis minus unde sunt consequuntur odit, obcaecati nihil aliquid exercitationem tempora perspiciatis. Enim nobis laudantium iste aspernatur ipsam rem ex at, modi suscipit facilis aut omnis cum, sit maiores ullam quam! Numquam facilis ratione aliquam suscipit, possimus autem ad quos nemo in vitae quisquam non modi tempore? Repudiandae qui, non vitae doloremque quaerat eum commodi rerum dolore animi officia ipsum adipisci? Sunt voluptatibus ad voluptates officiis? Veniam, pariatur et tenetur doloremque consequuntur nam quis, odio qui non voluptates rerum necessitatibus saepe quidem eligendi quasi totam quisquam sit facilis magni iusto repellat corrupti voluptatum! Cum quaerat perferendis corrupti magnam corporis error expedita laborum beatae aperiam magni ducimus libero dolore quo aliquid rem similique odit, temporibus excepturi. Quasi natus repellendus eum, amet tempora delectus nulla quod.";
    $paragrafi = explode('.', $testo);
    var_dump($paragrafi);
    ?>
</div>
<!-- /snack 5 -->
<hr>
<!-- snack 6 -->
<div>
    <?php
 
        $db = [
            'teachers' => [
                [
                    'name' => 'Michele',
                    'lastname' => 'Papagni'
                ],
                [
                    'name' => 'Fabio',
                    'lastname' => 'Forghieri'
                ]
            ],
            'pm' => [
                [
                    'name' => 'Roberto',
                    'lastname' => 'Marazzini'
                ],
                [
                    'name' => 'Federico',
                    'lastname' => 'Pellegrini'
                ]
            ]
        ];


 
    ?>
    <?php
        for ($i = 0; $i < count($db['teachers']); $i++) { 
            $teacher = $db['teachers'][$i];
            //var_dump($teacher['name']); 
        ?>
        <div class='teachers' style='background-color: gray; color: white;'>
        <h5><?php echo $teacher['name']; ?></h5>
        <h5><?php echo $teacher['lastname']; ?></h5>
        </div>
    <?php } ?>

    <?php
        for ($w = 0; $w < count($db['pm']); $w++) { 
            $student = $db['pm'][$w];
            //var_dump($student);
        ?>
        <div class='pm' style='background-color: green; color: white;'>
        <h5><?php echo $student['name']; ?></h5>
        <h5><?php echo $student['lastname']; ?></h5>
        </div>

    <?php } ?>

</div>
<!-- /snack 6 -->
<hr>
<!-- snack 7 -->
<div>

</div>
<!-- /snack 7 -->
</body>
</html>