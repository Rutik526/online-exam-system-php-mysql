<?php
include("../db.php");

$id = $_POST['id'];
$question = $_POST['question'];
$option1 = $_POST['option1'];
$option2 = $_POST['option2'];
$option3 = $_POST['option3'];
$option4 = $_POST['option4'];
$answer = $_POST['answer'];

mysqli_query($conn,
"UPDATE questions SET
question='$question',
option1='$option1',
option2='$option2',
option3='$option3',
option4='$option4',
answer='$answer'
WHERE id='$id'");

header("Location: view_questions.php");
exit();
?>