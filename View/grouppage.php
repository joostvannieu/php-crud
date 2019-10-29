<?php
$groupControl = new GroupController();
$connection = new Connection();
$test = $groupControl->fetchAllGroupInfo($connection->openConnection());

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Groups</title>
</head>
<body>
<table>
    <tr>
        <th>Name</th>
        <th>Location</th>
    </tr>
    <?php
    $groupControl->printRows($test);
    ?>
</table>

</body>
</html>
