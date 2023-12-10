<!-- index.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Random Number Generator</title>
</head>
<body>

    <h1>Random Number Generator</h1>

    <?php
    $randomNumber = rand(1, 10);
    ?>

    <p>The random number is: <?php echo $randomNumber; ?></p>

</body>
</html>
