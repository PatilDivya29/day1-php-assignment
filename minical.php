<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
$first_num = $_POST['first_num'];
$second_num = $_POST['second_num'];
$operator = $_POST['operator'];
$result = '';

if (is_numeric($first_num) && is_numeric($second_num))
 {
    switch ($operator) 
    {
        case "Add":
           $result = $first_num + $second_num;
            break;
        case "Subtract":
           $result = $first_num - $second_num;
            break;
        case "Multiply":
            $result = $first_num * $second_num;
            break;
        case "Divide":
            $result = $first_num / $second_num;
    }
}

?>

<body>
<div>

   <h3>calculator</h3>
	  <form action="minical.php" method="post" >
      <table border="2" cellpadding="10" cellspacing="10"  >
            <tr>
              <td> First Number </td>
              <td><input type="number" name="first_num" required="required" /></td></tr>
            <tr>
            <td>Second Number</td>
            <td><input type="number" name="second_num"  required="required" /></td>
            </tr>
            <tr>
            <td>Result</td>
            <td><input readonly="readonly" name="result" value="<?php echo $result; ?>"> </td></tr>
            <tr>
           <td> <input type="submit" name="operator" value="Add" /> </td>
           <td> <input type="submit" name="operator" value="Subtract" /></td>
           <td> <input type="submit" name="operator" value="Multiply" /></td>
           <td> <input type="submit" name="operator" value="Divide" /></td>
            </tr>
            </table>
	  </form>
  </div>
</body>
</html>