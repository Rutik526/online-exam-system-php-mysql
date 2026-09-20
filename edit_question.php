<?php
include("../db.php");

$id = $_GET['id'];

$result = mysqli_query($conn,
"SELECT * FROM questions WHERE id='$id'");

$row = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html>
<head>
<title>Edit Question</title>
<link rel="stylesheet" href="../css/style.css">
</head>
<body>

<h2>Edit Question</h2>

<form action="update_question.php" method="post">

<input type="hidden" name="id"
value="<?php echo $row['id']; ?>">

Question:<br>
<input type="text" name="question"
value="<?php echo $row['question']; ?>">
<br><br>

Option 1:<br>
<input type="text" name="option1"
value="<?php echo $row['option1']; ?>">
<br><br>

Option 2:<br>
<input type="text" name="option2"
value="<?php echo $row['option2']; ?>">
<br><br>

Option 3:<br>
<input type="text" name="option3"
value="<?php echo $row['option3']; ?>">
<br><br>

Option 4:<br>
<input type="text" name="option4"
value="<?php echo $row['option4']; ?>">
<br><br>

Answer:<br>
<input type="text" name="answer"
value="<?php echo $row['answer']; ?>">
<br><br>

<input type="submit" value="Update Question">

</form>

</body>
</html>