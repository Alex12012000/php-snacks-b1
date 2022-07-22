<?php 

    $students = [
        [
            "name" => "Giorgio",
            "lastname" => "Rossi",
            "voti" => [
                10,
                7,
                8,
                7
            ]
        ],
        [
            "name" => "Marco",
            "lastname" => "Bianchi",
            "voti" => [
                5,
                7,
                7,
                6
            ]
        ],
        [
            "name" => "Luca",
            "lastname" => "Verdi",
            "voti" => [
                9,
                9,
                10,
                7
            ]
        ],
        [
            "name" => "Matteo",
            "lastname" => "Gialli",
            "voti" => [
                8,
                5,
                6,
                7
            ]
        ],
    ];

    function media($voti) {
        $sum = 0;
        for($i = 0; $i < count($voti); $i++) {
            $singleVote = $voti[$i];
            $sum += $singleVote;
            
        };
        return $sum;
    };

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
        <?php for($i = 0; $i < count($students); $i++) {?>
        <?php $singleStudent = $students[$i]; ?>

            <li>
                <?php echo $singleStudent['name'] ?>
                <?php echo $singleStudent['lastname'] ?>
               <div>
                    Media Voti:
                    <?php echo media($singleStudent['voti']) ?>
               </div>
               
            </li>

        <?php };?>
    </ul>

</body>
</html>