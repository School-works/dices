<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="colorInvert">
        <?php
        $dicesToGenerate = 2;
        $totalContent = '';
        function generateNumber()
        {
            return $randomNumber = random_int(1, 6);
        }
        for ($i=0 ; $i < $dicesToGenerate ; $i++) {
        $diceContent = file_get_contents('images/dice' . generateNumber() . '.svg');
        $totalContent = $diceContent . $totalContent;
        }
        echo $totalContent;
        ?>
    </div>

</body>

</html>