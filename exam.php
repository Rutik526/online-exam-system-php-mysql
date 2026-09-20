<?php
include("../db.php");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Online Exam</title>
</head>
<body>

<h2>Online Exam</h2>

<form action="submit_exam.php" method="post">
Student Name:

<br>

<input type="text" name="student_name" required>

<br><br>

<?php

$query = "SELECT * FROM questions";
$result = mysqli_query($conn,$query);

while($row = mysqli_fetch_assoc($result))
{
?>

<p>
<b><?php echo $row['id'].". ".$row['question']; ?></b>
</p>

<input type="radio" name="q<?php echo $row['id']; ?>" value="<?php echo $row['option1']; ?>">
<?php echo $row['option1']; ?>
<br>

<input type="radio" name="q<?php echo $row['id']; ?>" value="<?php echo $row['option2']; ?>">
<?php echo $row['option2']; ?>
<br>

<input type="radio" name="q<?php echo $row['id']; ?>" value="<?php echo $row['option3']; ?>">
<?php echo $row['option3']; ?>
<br>

<input type="radio" name="q<?php echo $row['id']; ?>" value="<?php echo $row['option4']; ?>">
<?php echo $row['option4']; ?>
<br><br>

<?php
}
?>

<input type="submit" value="Submit Exam">

</form>

</body>
</html>