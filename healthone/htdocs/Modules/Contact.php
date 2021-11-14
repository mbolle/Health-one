<?php
function getTime()
{
    global $pdo;
    $query = $pdo->prepare("SELECT * FROM time");
    $query->execute();
    return $query->fetchAll(PDO::FETCH_CLASS, 'Time');
}
