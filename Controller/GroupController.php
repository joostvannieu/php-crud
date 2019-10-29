<?php
require 'View/grouppage.php';

class GroupController
{
    public function fetchAllGroupInfo(PDO $pdo) : array {
        $sql = "SELECT name, location FROM group";
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function printRows(array $data) : void
    {
        foreach ($data as $row) {
            echo "<tr>
                    <td>" . $row['name'] . "</td>
                    <td>" . $row['location'] . "</td>
                    <td><a href='profile.php?user=" . $row['id'] . "'>My Page</a></td>
                </tr>";
        }
    }
}