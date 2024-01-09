<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ice Cream Order Summary</title>
</head>

<body>
<h1>Thank you for your order!</h1>

<?php
echo "<pre>";
var_dump($_POST) ;
echo "</pre>";

$scoops = $_POST['scoops'];
$flavors = $_POST['flavor'];
$flavorString = implode(", ", $flavors); // Cool trick to join arrays :D
$cone = $_POST['cone'];

// Print a summary
echo "<p>$scoops scoops</p>";
echo "<p>Flavors: $flavorString</p>";
echo "<p>Cone: $cone</p>";
?>
</body>
</html>