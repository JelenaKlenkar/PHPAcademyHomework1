<!doctype html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<?php require_once 'head.php' ?>
<style>
    h1{text-align: center;
        font-size: 60px}
    div{text-align: center;
        justify-content: space-between}
    table,th,td{border:1px solid black;
        border-collapse: collapse;}
    table.center{margin-left: auto;
        margin-right: auto;}
</style>
<?php include_once 'navigation.php' ?>
<header>

    <h1 style="font-weight: bold">First page</h1>
    &nbsp;

    &nbsp;

</header>
<body>



<div class="myDiv">

    <img src="https://www.seekpng.com/png/full/360-3603571_php-logo-png-php-elephant-icon-png.png" alt="PHP" class="center"/><br>



<table class="center">
    <thead style="font-weight: bold">Arithmetic operators</thead><br/>
<tr>
    <td style="font-weight: bold">Operator</td>
    <td style="font-weight: bold">Name</td>
    <td style="font-weight: bold">Result</td>
</tr>
    <tr>
        <td>+</td>
        <td>Addition</td>
        <td>Sum of $x and $y</td>
    </tr>
    <tr>
        <td>-</td>
        <td>Subtraction</td>
        <td>Difference of $x and $y</td>
    </tr>
    <tr>
        <td>*</td>
        <td>Multiplication</td>
        <td>Product of $x and $y</td>

    </tr>
    <tr>
        <td>/</td>
        <td>Division</td>
        <td>Quotient of $x and $y</td>
    </tr>
    <td>%</td>
    <td>Modulus</td>
    <td>Remainder of division of $x and $y</td>


</table>
</div>


<div class="mySecondDiv">

    <p>Examples: </p><br>

    <?php
    $x=6;
    $y=8;
    $z=$x+$y;
    $r=$x -$y;
    $m=$x * $y;
    $d=$x / $y;
    $mo=$x % $y;


    echo "x = {$x} <br/>";
    echo "y = {$y} <br/>";
     echo "Addition: x + y = {$z} <br/>";
     echo "Multiplication: x * y ={$m}<br/> ";
     echo "Subtraction: x - y = {$r} <br/>";
     echo "Division: x / y = {$d} <br/>";
     echo "Modulus: x % y = {$mo} <br/>";
    ?>


</div>

</body>
</html>





