<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
$array = array($_POST["name01"],$_POST["name02"],$_POST["name03"],$_POST["name04"],$_POST["name05"]);
echo "<h2>Original Order</h2>";
for ($i = 0; $i < count($array); $i++)
{
    echo "$array[$i]";
    echo "<br>";
};
echo "<h2>Reverse Order</h2>";
$rarray = array_reverse($array);
for ($i = 0; $i < count($array); $i++)
{
    echo "$rarray[$i]";
    echo "<br>";
};
    ?>
</body>
</html>