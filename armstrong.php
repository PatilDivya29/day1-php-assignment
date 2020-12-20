<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <form action="armstrong.php" method="get">
         enter number<input type="number" name="number">
        <input type="button" value="submit">
        </form>
<?php  
if($_GET)
{
    $_GET['number'];
    $x=$number;
    $sum=0;
    while($x!=0){
        $rem =$x%10;
        $sum =$sum+($rem*$rem*$rem);
        $x =$x/10;
    }
    if($number ==$sum){
        echo " $number is armstrong number";
    }else
    {
        echo "$number is not an armstrong number";
    }
}
?>
</body>
</html>