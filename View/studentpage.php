<?php
/*if (isset($_GET['addStudent'])) {
    $control = new StudentController();
    $control->addStudent($_GET);
}*/

var_dump($_GET);

function printRows(array $data) : void
{
    foreach ($data as $row) {
        echo "<tr>
                <td>" . $row['name'] . "</td>
                <td>" . $row['email'] . "</td>
                <td>" . $row['group_id'] . "</td>
              </tr>";
    }
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php require 'includes/header.php'?>

<form action="#" method="get">
    <label for="name">Name</label>
    <input type="text" name="name" id="name" required ><br>
    <label for="email">Email</label>
    <input type="text" name="email" id="email" required ><br>
    <label for="group">Group</label>
    <input type="number" name="group" id="group" required ><br>
    <input type="submit" value="Add student" name="addStudent">
</form>

<table>
    <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Group</th>
    </tr>
    <?php printRows($students); ?>
</table>



<?php require 'includes/footer.php'?>
</body>
</html>
