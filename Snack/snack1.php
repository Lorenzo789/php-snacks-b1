<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP SNACKS</title>
</head>

<body>

    <h1>PHP SNACK</h1>

    <!-- SECTION SNACK 1 -->
    <section>
        <!-- 
            Creiamo un array contenente le partite di basket di un'ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
            Olimpia Milano - Cantù | 55-60 
        -->

        <h3>Snacks 1</h3>

        <?php
        $arraySquadre = [
            [
                'team1' => 'Lakers',
                'team2' => 'Warriors',
                'point1' => 55,
                'point2' => 48,
            ],
            [
                'team1' => 'Celtics',
                'team2' => 'Cavaliers',
                'point1' => 78,
                'point2' => 54,
            ],
            [
                'team1' => 'Heat',
                'team2' => 'Nets',
                'point1' => 60,
                'point2' => 46,
            ],
            [
                'team1' => 'Knicks',
                'team2' => 'Bulls',
                'point1' => 48,
                'point2' => 60,
            ],
            [
                'team1' => 'Bucks',
                'team2' => 'Piston',
                'point1' => 33,
                'point2' => 50,
            ],
        ];
        ?>

        <div>
            <?php for ($i = 0; $i < count($arraySquadre); $i++) { ?>
                <pre>
                <?php
                echo $arraySquadre[$i]['team1'] . ' - ' . $arraySquadre[$i]['team2'] . '  ' . $arraySquadre[$i]['point1'] . ' | ' . $arraySquadre[$i]['point2'];
                ?>
            </pre>
            <?php }; ?>
        </div>
    </section>
    <!-- SECTION SNACK 1 -->
</body>

</html>