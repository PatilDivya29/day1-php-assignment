<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h3>even number between 1-100</h3>
<?php
    $number;
    for($number=1;$number<=100;$number++)
    {
        if($number%2==0)
        {
          echo $number;  
        }
        
    } 
    
    ?>
<h3>odd number between 1-100</h3>
    <?php
    $number;
    for($number=1;$number<=100;$number++)
    {
        if($number%2==1)
        {
          echo $number;  
        }
        
    } 
    
    ?>
</body>
</html>