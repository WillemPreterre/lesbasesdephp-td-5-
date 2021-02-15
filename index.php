

<!DOCTYPE html>

<html lang="fr">

​

<head>

    <meta charset="UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Échiquier</title>

    <link rel="stylesheet" href="assets/css/style.css">

</head>

​

<body>

​

    <div class="board">

        <?php

        // On créer les lignes de tableau

        for ($row = 1; $row <= 8; $row++) {

            // Dans chaque ligne on crée les colonnes

            for ($col = 1; $col <= 8; $col++) {

                // les positions double paires et double impaires auront une somme paires (cases noires)

        ?>

                <div class="ceil <?php echo (($row + $col) % 2 == 0) ? 'black_tile' : 'white_tile' ?>"></div>

        <?php }

        }

        ?>

    </div>

</body>

​

</html>

