<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    $f1 = 0;
    $f2 = 1;
    $n = 10;
    echo $f1;
    echo '<br/>';
    echo $f2;
    for($i = 1; $i <= $n; $i++) {
        $f3 = $f1 + $f2;
        $f1 = $f2;
        $f2 = $f3;
        echo $f3 ."<br />"; 
    }
?>

</body>
</html>