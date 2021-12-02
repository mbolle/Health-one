<?php
function getTimes()
{
    global $pdo;
    $query=$pdo->prepare("SELECT * FROM time");
    $query->execute();
    $result=$query->fetchAll(PDO::FETCH_CLASS,"Time" );
    return $result;
}