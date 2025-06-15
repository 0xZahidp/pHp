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
echo "<h2>Main $array</h2>";
$array2 = explode(",", $array);
$count = array();
for ($i = 0; $i < count($array2); $i++) {
    $num = trim($array2[$i]);
    if (is_numeric($num)) {
        if (array_key_exists($num, $count)) {
            $count[$num]++;
        } else {
            $count[$num] = 1;
        }
    }
};
$a = array_keys($count);
for ($i = 0; $i < count($count); $i++) {
    $b = $a[$i];
    echo "Count of $b: " . $count[$b] . "<br>";
}
    ?>
</body>
</html>