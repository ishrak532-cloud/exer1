<?php include'header.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
       <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" 
   integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
.grades-table{
    margin: 0 auto;
    border-collapse: collapse;
} 
</style>
</head>
<body>  
    <form method="post">
          <table class="table table-bordered border rounded-4 p-4 bg-primary mx-auto overflow-hidden" style="max-width: 300px;"><tr><td>
            <h1 class="text-warning">Form</h1></td>
         </tr>
            <tr>
         <td class="p-2 text-white">First Name:</td>
                     <td class="p-2"><input type="text" name="Firstname"></td>
        </tr>
            <tr>
             <td class="p-2 text-white">Last Name:</td>
             <td class="p-2"><input type="text" name="Lastname"></td>
        </tr>
          <tr>
            <td colspan="4" class="text-center p-4"><input type="submit" value="submit" class="btn btn-danger"></td>
        </tr>
      </table>
    </form>
</body>
</html>
<?php
if (isset($_POST['Firstname']) && isset($_POST['Lastname'])) {
    $Firstname=$_POST['Firstname'];
    $Lastname=$_POST['Lastname'];
    echo "<h3>Hello $Firstname $Lastname, You are welcome to my site.</h3>";
}
?>
<h3>Task 3: Students Grades Table</h3>
<?php
$g1 = 5;
$g2 = 4;
$g3 = 5;
?>
<table class="table bg-primary text-white table-bordered w-50 mx-auto rounded-4 overflow-hidden border-dark grades-table">
<tr>
<th class="fst-italic">S.n.</th>
<th class="fst-italic">Name</th>
<th class="fst-italic">Grade</th>
</tr>
<tr>
<td>1</td>
<td>John</td>
<td><?php echo $g1; ?></td>
</tr>
<tr>
<td>2</td>
<td>Alice</td>
<td><?php echo $g2; ?></td>
</tr>
<tr>
<td>3</td>
<td>Bob</td>
<td><?php echo $g3; ?></td>
</tr>
</table>
<?php
$str1 = "Hello";
$str2 = "World";
function test(): void{
    global $str1, $str2;
 $fullStr = $str1 . $str2;
echo "Full string is: $fullStr.<br>";
    echo "string length: " . strlen($fullStr);
}
test();
?>
<?php
$no1=298;
$no2=234;
$no3=46;
$numbersum=$no1+$no2+$no3;
echo "<br>numbers sum: $numbersum <br>";
?>
<?php
$host=$_SERVER['HTTP_USER_AGENT'];
echo "<p> Browser Information: <strong>$host</strong></p>";
?>
<?php include'footer.php';?>
