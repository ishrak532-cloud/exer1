<?php include 'header.php' ?>
<style>
.screenshot{
    display: block;
    margin: 20px auto;
}  
.grades-table{
    margin: 0 auto;
    border-collapse: collapse;
} 
</style>

<h3>Task 1: Hello World Message</h3>
<?php
echo 'Hello world! My name is "David"';
?>
<h3>Task 2: Display Title Variable</h3>
<?php
$title="PHP is interesting.";
?>
<h4><?php echo $title; ?></h4>
<h3>Task 3: Students Grades Table</h3>
<?php
$g1 = 5;
$g2 = 4;
$g3 = 5;
?>
<table border="1" class="grades-table" cellpadding="5">
<tr>
<th>S.n.</th>
<th>Name</th>
<th>Grade</th>
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
<img class="screenshot" src="Screenshot_12.png" alt="Screenshot of development environment" width="600">
<img class="screenshot" src="Screenshot_2.png" alt="Screenshot of development environment" width="600">
<?php include 'footer.php' ?>