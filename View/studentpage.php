<?php

var_dump($_POST);
if (!empty($_POST)){
    if (isset($_POST["addStudent"])) {
        $this->addStudent();
        echo "ADDED A STUDENT";
    } elseif (isset($_POST["del"])){
        //$this->removeStudent();
        $connection = new Connection();
        $connection->removeFromTableById('student', $_POST['id']);
        echo "DELETED";
    }
}

function printRows(array $data) : void
{
    foreach ($data as $row) {
        echo "<tr>
                <td>" . $row['name'] . "</td>
                <td>" . $row['email'] . "</td>
                <td>" . $row['group_id'] . "</td>
                <td>
                    <form action='?view=studentpage' method='post'>
                        <input type='hidden' value='". $row['id']. "' name='id'>
                        <input type='submit' value='delete' name='del' >
                    </form>
                </td>
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

<form action="#" method="post">
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
        <th></th>
    </tr>
    <?php printRows($students); ?>
</table>


<?php require 'includes/footer.php'?>
</body>
</html>
