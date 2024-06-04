<?php


$num1 = $_POST['num1']?? null;
$num2 = $_POST['num2']?? null;
$operator = $_POST['operator'];

function operator ($num1, $num2,$operator){
    switch ($operator) {
        case 'plus':
            $result = $num1 + $num2;
            return $result;
            break;
        case 'minus':
            $result = $num1 - $num2;
            return $result;

            break;
        case 'multiply':
            $result = $num1 * $num2;
            return $result;

            break;
        case 'divide':
            if ($num2 != 0) {
                $result = $num1 / $num2;
                return $result;

            } else {
                $result = "Cannot divide by zero";
            }
            break;
    }
}


?>

<!DOCTYPE html>
<html>
<head>
    <title>PHP Calculator</title>
</head>
<body>
    <h2> Calculator</h2>
    <form method="post" action="calculator.php">
        <input type="number" name="num1" placeholder="Enter first number">
        <select name="operator">
            <option value="plus">+</option>
            <option value="minus">-</option>
            <option value="multiply">*</option>
            <option value="divide">/</option>
        </select>
        <input type="number" name="num2" placeholder="Enter second number">
        <input type="submit" value="Calculate">
    </form>
    <h3> <?= operator ($num1, $num2,$operator) ?> </h3>
</body>
</html>