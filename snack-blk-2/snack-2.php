<!-- 
Snack 2
Creiamo due pagine php. La prima farà una chiamata GET alla seconda attraverso un form.
Il form avrà un input di testo in cui inserire il nome di un invitato.
Inseriamo nell’altro file una lista di invitati. Se la nostra query è contenuta nella lista degli invitati stampare ok, altrimenti ko.
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
    <h1>ciao</h1>
    <div>
        <form action="./server.php" method="get">
            <input type="text" name="name" id="username" placeholder="inserisci il tuo nome">
            <button type="submit">clicca</button>
        </form>
    </div>
</body>
</html>