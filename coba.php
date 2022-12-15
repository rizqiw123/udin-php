<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Uji coba penggunaan PHP di HTML</title>
</head>
<body>
    <h1>Hello World</h1>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem sed ad nostrum ab recusandae deleniti, tempora optio, aut nesciunt consequatur odio sequi sunt atque nemo facere odit incidunt cum fuga?</p>

    <!-- Memasukkan php disini -->
    <?php
$txt = "PHP";
echo "I love $txt!";
?>
<br>
<?php
echo "Hello World! dari php";
?><br>

<!-- nambah -->

<?php
$color = "red";
echo "My car is " . $color . "<br>";
echo "My house is " . $COLOR . "<br>";
echo "My boat is " . $coLOR . "<br>";
?>

    
</body>
</html>