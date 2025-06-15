<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$pass = $_POST["name01"];
function validate_password($Spass) {
    $length = strlen($Spass);
    if ($length < 8 || $length > 32) {
 return false;
 }
 if (!preg_match('/[A-Z]/', $Spass)) {
 return false;
    }
if (!preg_match('/[a-z]/', $Spass)) {
return false;
    }
if (!preg_match('/[0-9]/', $Spass)) {
 return false;
    }
if (preg_match('/[^a-zA-Z0-9]/', $Spass)) {
return false;
    }
return true;
}
if (validate_password($pass)) {
    echo "This password is safe";
} else {
    echo "This password is not safe";
}
?>
</body>
</html>
