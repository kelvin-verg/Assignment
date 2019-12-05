<form action="" method="post">
<input type="text" name="n" value="" placeholder="enter no"><br>
<input type="text" name="n2" value="" placeholder="enter no"><br>
<input type="submit" name="a" value="Add + ">
<input type="submit" name="m" value="Mul * ">
<input type="submit" name="d" value="DIV / ">
<input type="submit" name="s" value="Sub - ">
</form>

<?php
if(isset($_POST['a']))//a is add button name
{
$n = $_POST['n'];//textbox one
$n2 = $_POST['n2'];//textbox two
$add = $n+$n2;//addition

echo "Addition is;".$add;//calclate

}


if(isset($_POST['m']))//m is multiply button name
{
$n = $_POST['n'];//textbox one
$n2 = $_POST['n2'];//textbox two
$mul = $n*$n2;//multiply

echo "multiplication is;".$mul;//calclate

}


if(isset($_POST['d']))//d is division button name
{
$n = $_POST['n'];//textbox one
$n2 = $_POST['n2'];//textbox two
$div = $n/$n2;//division

echo "Division is;".$div;//calclate

}


if(isset($_POST['s']))//s is substraction button name
{
$n = $_POST['n'];//textbox one
$n2 = $_POST['n2'];//textbox two
$sub = $n-$n2;//substraction

echo "substraction is;".$sub;//calclate

}

?>