<?php
var_dump($_POST);
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Teacher Overview</title>
</head>
<body>
<?php require 'includes/header.php'?>

    <table>
        <thead>
            <tr>
                <th> ID</th>
                <th> Name</th>
                <th> Email</th>
            </tr>
        </thead>
        <tbody>
                <?php foreach ($teachers as $teacher): ?>
            <tr>
                <td><?php echo $teacher->getId(); ?></td>
                <td><?php echo $teacher->getName()?></td>
                <td><?php echo $teacher->getEmail(); ?></td>
                <td>
                    <form action="?view=teacherpage" method="post">
                        <input type="hidden" value="<?php $teacher['id'];?>">
                        <input type="submit" value="delete" name="Delete">
                    </form>
                </td>
            </tr>

        <?php endforeach;?>
        </tbody>
    </table>

<?php require 'includes/footer.php'?>
</body>
</html>
