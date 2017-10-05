<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <title>PHP first example</title>
</head>
<body>
<h1>PHP first example</h1>
<?php
$number = rand();
echo "Random number " . $number;
$another = $number + 4;
?>

<br/>

<?php
$now = date("Y-m-d h:i:sa");
// $now = date("Y D M d H:i:s");
echo $now;
?>

<br />
<?= $now ?>

</body>
</html>