<?php
    $basketMatch = [
        [
            "home" => "Mamy.eu Oleggio",
            "stranger" => "All Food-Enic Firenze",
            "homePoints" => 79,
            "strangerPoints" => 52,
        ],
        [
            "home" => "Cipir College Borgomanero",
            "stranger" => "Unicusano Pielle Livorno",
            "homePoints" => 76,
            "strangerPoints" => 85,
        ],
        [
            "home" => "Paffoni Fulgor Omegna",
            "stranger" => "Riso Scotti Pavia",
            "homePoints" => 85,
            "strangerPoints" => 66,
        ],
        [
            "home" => "La Patrie San Miniato",
            "stranger" => "Elachem Vigevano",
            "homePoints" => 67,
            "strangerPoints" => 47,
        ],
    ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <ul>
        <?php for($i = 0; $i < count($basketMatch); $i++) {?>
        <?php $match = $basketMatch[$i];?>

            <li>
                <span>
                    <?php echo $match['home']?>
                     - 
                     <?php echo $match['stranger']?> 
                </span>
                |
                <span>
                    <?php echo $match['homePoints']?>
                     - 
                    <?php echo $match['strangerPoints']?> 
                </span>
            </li>
        <?php }?>
    </ul>
    
</body>
</html>