<?php
    //declare(strict_types = 1);
    include 'includes/class-autoloader.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>

    <!--// title //-->
    <title>Calculator POO</title>

    <!--// meta tags //-->
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <!--// link //-->

    
</head>
<body>

    <form action="includes/calc.php" method="post">
        <p>My own calculator!</p>
        <input type="number" name="num1" placeholder="First Number">
        <select name="oper">
            <option value="Add">Addition</option>
            <option value="Sub">Subtraction</option>
            <option value="Div">Division</option>
            <option value="Mul">Multiplication</option>
        </select>
        <input type="number" name="num2" placeholder="Second Number">
        <button type="submit" name="submit">Calculate</button>
    </form>

</body>
</html>