<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP SNACK 5</title>
</head>

<body>
    <section>

        <h1>Php Snack 5</h1>

        <!-- Creare un array contenente qualche alunno di un'ipotetica classe. Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici. Stampare Nome, Cognome e la media dei voti di ogni alunno.-->

        <?php 
            $alumns = [
                [
                    'name' => 'Giovanni',
                    'surname' => 'Casu',
                    'vote' => [ 2, 5, 6, 9],
                ],
                [
                    'name' => 'Giovanna',
                    'surname' => 'Caesu',
                    'vote' => [ 6, 7, 6, 9],
                ],
                [
                    'name' => 'Giovannino',
                    'surname' => 'Caso',
                    'vote' => [ 2, 4, 6, 3],
                ],
                [
                    'name' => 'Gianmarco',
                    'surname' => 'Casupolis',
                    'vote' => [ 5, 5, 6, 7],
                ],
                [ 
                    'name' => 'Giulio',
                    'surname' => 'Castro',
                    'vote' => [ 2, 5, 8, 9],
                ],
                [
                    'name' => 'Gianna',
                    'surname' => 'Sosteneva',
                    'vote' => [ 8, 5, 8, 9],
                ],
            ];

            $sumVote = [];
        ?>

        <?php 
            for ($i=0; $i < count($alumns); $i++) { 

                for ($i=0; $i < $alumns[$i]['vote']; $i++) { 
                    
                    $sumVote = $alumns[$i]['vote'];

                    array_sum($sumVote);

                    var_dump(array_sum($sumVote));

                }
        ?>
        <pre>
            <?php 
                echo $alumns[$i]['name']. ' '. $alumns[$i]['surname']. array_sum($sumVote);
            ?>
        </pre>
        <?php 
            };
        ?>

    </section>
</body>

</html>