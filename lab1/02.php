<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
$array = $_POST["name01"];
echo "<h2>Original Order</h2>";
print_r(explode(" ",$array));
echo "<h2>Reverse Order</h2>";
print_r((array_reverse(explode(" ",$array))));

    ?>
</body>
</html>