<?php

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Group Overview</title>
</head>
<body>

<?php require 'includes/header.php'?>


<table>
    <thead>
    <tr>
        <th> ID</th>
        <th> Name</th>
        <th> Location</th>
    </tr>
    </thead>

    <tbody>
        <?php foreach ($groups as $group): ?>

            <td><?php echo $group->getId()?></td>
            <td><?php echo $group->getName()?></td>
            <td><?php echo $group->getLocation(); ?></td>

        <?php endforeach;?>

    </tbody>
</table>


<?php require 'includes/footer.php'?>

</body>
</html>
