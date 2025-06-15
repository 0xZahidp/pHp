<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$number = $_POST["name01"];
$degree = $_POST["name02"];
function power($number, $degree) {
    $r = 1;
    for ($i=0;$i<$degree;$i++) {
        $r *= $number;
    }
    return $r;
};
$r = power($number,$degree);
echo "<h3>Result: $number<sup>$degree</sup> = $r</h3>";
?>
</body>
</html>
