<?php require_once 'head.php'?>
<?php include_once 'navigation.php' ?>
<style>
    h1{text-align: center;font-size: 40px}
    p{text-align: center}
    div{text-align: center}
    ul{display: table;
    margin: auto}
</style>
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
<p>Input Banana</p>
<form method="post" action="">
<input class="input" type="text" name="word" placeholder="Text input">
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


</body>
</html>
