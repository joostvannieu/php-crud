<?php

function fetchAllGroupInfo(PDO $pdo) : array {
    $sql = "SELECT name, location FROM group";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}