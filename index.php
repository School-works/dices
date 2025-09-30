<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <button>
        Clicca per tirare il dado
    </button>
    <div class="colorInvert">
        <?php
        $randomNumber = random_int(1, 6);
        $content = file_get_contents('images/dice' . $randomNumber . '.svg');
        echo $content;
        ?>
    </div>
    
</body>

</html>