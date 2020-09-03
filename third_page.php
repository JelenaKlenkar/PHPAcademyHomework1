<?php require_once 'head.php'?>
<?php include_once 'navigation.php' ?>
<style>
    h1{text-align: center;font-size: 40px}
</style>
<header>
    <h1 style="font-weight: bold">Third page</h1>
    &nbsp;
    &nbsp;
</header>
<body>

<p>Input number: </p>
<form method="post" action="">
    <input class="input" type="text" name="number" placeholder="Number input">
    <input class="input" type="text" name="number2" placeholder="Number input">
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




