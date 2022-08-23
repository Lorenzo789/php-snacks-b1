<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP SNACKS 2</title>
</head>
<body>
    
    <!-- SECTION SNACK 2 -->
    <section>

        <!-- non come form ma nell'url
        Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) 
        che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. 
        Se tutto è ok stampare "Accesso riuscito", altrimenti "Accesso negato" -->

        <?php 
            $name = $_GET['name'];
            $mail = $_GET['mail'];
            $age = $_GET['age'];
        ?>

        <h1>Php Snack 2</h1>

        <pre>
            <?php
                if ( (strlen($name) > 3) && (strpos($mail, '@') > 2) && strpos($mail, '.') > 3 && (is_numeric($age)) )  {
                    
                    echo 'Access Granted';

                } else {

                    echo 'Access Denied';

                };
            ?>
        </pre>
    </section>
    <!-- SECTION SNACK 2 -->
</body>
</html>