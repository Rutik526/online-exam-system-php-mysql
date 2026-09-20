<?php
include("../db.php");

$result = mysqli_query($conn,
"SELECT * FROM results");
?>

<h2>Exam Results</h2>

<table border="1" cellpadding="10">
<tr>
<th>ID</th>
<th>Student Name</th>
<th>Marks</th>
<th>Date</th>
</tr>

<?php
while($row=mysqli_fetch_assoc($result))
{
?>
<tr>
<td><?php echo $row['id']; ?></td>
<td><?php echo $row['student_name']; ?></td>
<td><?php echo $row['marks']; ?></td>
<td><?php echo $row['exam_date']; ?></td>
</tr>
<?php
}
?>
</table>