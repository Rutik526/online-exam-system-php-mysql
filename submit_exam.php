<?php
include("../db.php");

$marks = 0;
$student_name = $_POST['student_name'];

$query = "SELECT * FROM questions";
$result = mysqli_query($conn,$query);

while($row = mysqli_fetch_assoc($result))
{
    $qid = $row['id'];

    if(isset($_POST["q$qid"]))
    {
        if($_POST["q$qid"] == $row['answer'])
        {
            $marks++;
        }
    }
}

mysqli_query(
    $conn,
    "INSERT INTO results(student_name,marks)
    VALUES('$student_name','$marks')"
);
?>

<!DOCTYPE html>
<html>
<head>
<title>Result</title>
<link rel="stylesheet" href="../css/style.css">
</head>
<body>

<h1>Exam Result</h1>

<h2>Your Score: <?php echo $marks; ?></h2>

<a href="exam.php">Take Exam Again</a>

</body>
</html>