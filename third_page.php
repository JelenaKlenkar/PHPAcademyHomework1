<!doctype html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<?php require_once 'head.php'?>
<style>
    h1{text-align: center;font-size: 40px}
    div{margin-right: 300px; margin-left: 300px}
</style>
<?php include_once 'navigation.php' ?>

<header>
    <h1 style="font-weight: bold">Third page</h1>
    &nbsp;
    &nbsp;
</header>
<body>
<div>
<p>Input number: </p>
<form method="post" action="">
    <label>
        <input class="input" type="text" name="number" placeholder="Number input">
    </label>
    <label>
        <input class="input" type="text" name="number2" placeholder="Number input">
    </label>
    <button class="success button">Submit</button>
</form>


<?php
if(isset($_POST['number']) && isset($_POST['number2'])){

    $number = $_POST['number'];
    $number2 = $_POST['number2'];

    if($number<$number2){
        echo "{$number} is smaller then {$number2}";
    }else{
        echo "{$number} is not smaller then {$number2}";
    }
}


?>
</div>
<br>
<br>
<hr>
<div>
    <iframe width="420" height="315" src="https://www.youtube.com/embed/b9434BoGkNQ"></iframe>
</div>

</body>
</html>


