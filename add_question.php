<?php
include("../db.php");

if(isset($_POST['save']))
{
    $question = $_POST['question'];
    $option1 = $_POST['option1'];
    $option2 = $_POST['option2'];
    $option3 = $_POST['option3'];
    $option4 = $_POST['option4'];
    $answer = $_POST['answer'];

    $query = "INSERT INTO questions
    (question,option1,option2,option3,option4,answer)
    VALUES
    ('$question','$option1','$option2','$option3','$option4','$answer')";

    mysqli_query($conn,$query);

    echo "Question Added Successfully";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Add Question</title>
<link rel="stylesheet" href="../css/style.css">
</head>
<body>

<h2>Add Question</h2>

<form method="post">

Question:<br>
<input type="text" name="question" required>
<br><br>

Option 1:<br>
<input type="text" name="option1" required>
<br><br>

Option 2:<br>
<input type="text" name="option2" required>
<br><br>

Option 3:<br>
<input type="text" name="option3" required>
<br><br>

Option 4:<br>
<input type="text" name="option4" required>
<br><br>

Correct Answer:<br>
<input type="text" name="answer" required>
<br><br>

<input type="submit" name="save" value="Save Question">

</form>

</body>
</html>