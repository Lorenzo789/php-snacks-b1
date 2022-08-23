<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- Creare un array con 15 numeri casuali, tenendo conto che l'array non dovrà contenere lo stesso numero più di una volta -->

    <?php 
        $array = [];

        while (count($array) < 15) { 

            $random = rand(1,15);

            
            if (!in_array($random, $array)) {
                
                array_push($array, $random);
                
            }
        };

    ?>

    <div>
        <pre>
            <?php 
                var_dump($array);
            ?>
        </pre>
    </div>
</body>
</html>