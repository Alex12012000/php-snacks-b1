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

    $teachers = $db['teachers'];
    $pm = $db['pm'];     
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    
    <div class="wrap">
        <h2>TEACHERS:</h2>
       <?php for($i = 0; $i < count($teachers); $i++) {?>
        <?php $infoTeacher = $teachers[$i];?>

            <div class="grey">
                <?php echo $infoTeacher['name']?>
                <?php echo $infoTeacher['lastname']?>
            </div>

       <?php }?>
        <h2>PM:</h2>
       <?php for($i = 0; $i < count($pm); $i++) {?>
        <?php $infoPm = $pm[$i];?>

            <div class="green">
                <?php echo $infoPm['name']?>
                <?php echo $infoPm['lastname']?>
            </div>

       <?php }?>
    </div>


</body>
</html>