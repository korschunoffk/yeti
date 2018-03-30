<?php 
$ageOfVictor = 21; 
$pen = "pen ";
$apple = "apple";
$ppap = $pen . $apple;
$res = true && false ; 
$res1 = true || false ;

?>
<!DOCTYPE html>
<html lang="ru n">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <h1><?php
print($res1); ?>
</h1>
<?php if ($res == 0): ?> 
    <h2>хуй пизда</h2>
<?php else :  ?>
    <h2>джигурда</h2>
<?php endif; ?>
</body>
</html>