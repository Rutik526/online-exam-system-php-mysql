<?php
include("../db.php");
?>

<!DOCTYPE html>
<html>
<head>
    <title>View Questions</title>
<link rel="stylesheet" href="../css/style.css">
</head>
<body>

<h2>All Questions</h2>

<table border="1" cellpadding="10">
<tr>
    <th>ID</th>
    <th>Question</th>
    <th>Option1</th>
    <th>Option2</th>
    <th>Option3</th>
    <th>Option4</th>
    <th>Answer</th>
    <th>Edit</th>
    <th>Delete</th>
</tr>

<?php

$query = "SELECT * FROM questions";
$result = mysqli_query($conn,$query);

while($row = mysqli_fetch_assoc($result))
{
?>

<tr>
    <td><?php echo $row['id']; ?></td>
    <td><?php echo $row['question']; ?></td>
    <td><?php echo $row['option1']; ?></td>
    <td><?php echo $row['option2']; ?></td>
    <td><?php echo $row['option3']; ?></td>
    <td><?php echo $row['option4']; ?></td>
    <td><?php echo $row['answer']; ?></td>
<td>
    <a href="edit_question.php?id=<?php echo $row['id']; ?>">
        Edit
    </a>
</td>
   <td>
    <a href="delete_question.php?id=<?php echo $row['id']; ?>">
        Delete
    </a>
</td>
</tr>

<?php
}
?>

</table>

</body>
</html>