<!doctype html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<?php require_once 'head.php'?>
<style>
    h1{text-align: center;font-size: 40px}
    p{text-align: center}
    div{text-align: center; margin-left: 300px; margin-right: 300px}
    ul{display: table;
        margin: auto}
</style>
<?php include_once 'navigation.php' ?>

<header>
    <h1 style="font-weight: bold">Second page</h1>
    &nbsp;
    &nbsp;
</header>
<body>

<p style="font-weight: bold"> List of groceries to buy: </p></br>
<div class="second">
<ul>
    <li>Bread</li>
    <li>Milk</li>
    <li>Butter</li>
    <li>Jam</li>
</ul>
</div>
<hr>
<div>
<p>Input Banana</p>
<form method="post" action="">
    <label>
        <input class="input" type="text" name="word" placeholder="Text input">
    </label>
    <button class="success button">Submit</button>
    </form>

<?php
$a = "Banana";
echo 'PHP Operator check: Equal, Not Equal, Identical, Not Identical <hr/>';

if (isset($_POST['word'])) {
    $word = $_POST['word'];
    if ($a == $word ){
        echo 'Equal Operator Check: Equal<br/>';}
    else {
        echo 'Equal Operator Check: Not Equal<br/>';
    }
    if($a!=$word){
        echo 'Not equal operator check: Not Equal <br/>';
    }else{
        echo 'Not equal operator check: Equal <br/>';
    }
    if ($a === $word ){
        echo 'Identical Operator Check: Identical<br/>';}
    else {
        echo 'Identical Operator Check: Not Identical<br/>';
    }
    if ($a !== $word ){
        echo 'Not Identical Operator Check: Not Identical<br/>';}
    else {
        echo 'Not Identical Operator Check: Identical<br/>';
    }

}

?>
</div>

</body>
</html>