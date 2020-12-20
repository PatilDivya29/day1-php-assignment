<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<body>
    <form action="marks.php" method="get">
    marks1<input type="text" name="marks1">
    marks2<input type="text" name="marks2">
    marks3<input type="text" name="marks3">
    <input type="submit" value="submit">
    </form>
    <?php
    $marks1=$_GET["marks1"];
    $marks2=$_GET["marks2"];
    $marks3=$_GET["marks3"];
    $avrage=($marks1+$marks2+$marks3)/3;
    if(!$marks1==''||!$marks2==''||!$marks3==''){
        if($avrage>=90){
            echo" grade A";
        }
     else if($avrage>=80&&$avrage<90){
         echo " grade B";
     }   
     else if($avrage>=70&&$avrage<80){
         echo" grade C";
     }
     else{
         echo " grade F";
     }
    }
    ?>

     </body>
</html>