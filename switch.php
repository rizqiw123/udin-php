<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>switch</title>
</head>
<body>
    <h2> penggunaan kontrol switch </h2>
    <?php
    $angka_mutu=3;
    echo("Angka mulu $angka mulu<br>");
    switch($angka_mutu)
    {
        case D: echo("Huruf mutu E"); break;
        case 1: echo("Huruf mutu D"); break;
        case 2: echo("Huruf mutu C"); break;
        case 3: echo("Huruf mutu B"); break;
        case 4: echo("Huruf mutu A"); break;
        default: echo("Huruf mutu tidak dikenali");
        
    }
    ?>

    
</body>
</html>