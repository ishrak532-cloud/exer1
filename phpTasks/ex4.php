<?php include'header.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vote eligibility</title>
</head>
<body>
    <h3>Checking vote eligibility</h3>
    <form method="post">
        name:
<input type="text" name="Name"><br><br>
        Age :
<input type="number" name="Age"><br><br>
<input type="submit" value="submit">
    </form>
<?php
if (isset($_POST['Name']) & isset($_POST['Age'])){
    $username=$_POST['Name'];
    $userage=$_POST['Age'];
    if($userage==18){
        echo "<h3>Hello $username,you can vote.</h3>";}
    elseif($userage>18){
        echo "<h3>Hello $username, You can vote.</h3>";}
    else{
        echo "<h3>Hello $username, You cannot vote.</h3>";}
}
?>
<?php
$monthname=date("F");
switch($monthname){
    case"August":
    echo"<p>It's August, so it's still holiday.</p>";
    break;
    default:
    echo"<p>Not August, this is $monthname so I don't have any holidays</p>";
}
?>

    <form method="post">
        n:
<input type="number" name="firstnum"><br><br>
<input type="submit" value="show result">
    </form>

<?php
if(isset($_POST['firstnum'])) {
$number=(int) $_POST['firstnum'];
for($i=1;$i<=10;$i++){
$result=$number*$i;
    echo"<p>$number*$i=$result</p>";
}}
?>
    <hr>
    <form method="post">
        n:
<input type="number" name="firstn"><br><br>
<input type="submit" value="show result">
   </form>
   <?php
if (isset($_POST['firstn'])){
    $onenumber=(int)$_POST['firstn'];
    $one=1;
    while($one<=$onenumber){
    echo $one;
    $one++;
    }
}
echo "<hr>";
$arr=array("HTML","CSS","PHP","JavaScript");
foreach($arr as $op){
    echo $op . "<br>";
}
?>
</body>
</html>
<?php include'footer.php';?>
