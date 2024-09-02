<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-compatible" content="IE=EDGE">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="index.css">

</head>

<body>
    <form action="index.php" method="post">
        <label>Quantity:</label><br>
        <input type="text" name="quantity"><br>
        <input type="submit" value="Total">
    </form>
</body>

</html>

<?php
$item = "pizza";
$price = 8.99;
$quantity = $_POST["quantity"];
$total = null;


$total = $quantity * $price;

echo "You have ordered {$quantity} {$item}/s <br>";
echo "Your total is: \${$total}";
?>