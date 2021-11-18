<?php
// TODO Zorg dat de methodes goed ingevuld worden met de juiste queries.
function getCategories()
{
    global $pdo;
    $query=$pdo->prepare("SELECT * FROM category");
    $query->execute();
    $result=$query->fetchAll(PDO::FETCH_CLASS,"Category");
    return $result;
}

// pakt specifiek iets van categories.
function getCategoryName(int $id)
{
    global $pdo;
    $query=$pdo->prepare("SELECT name FROM category WHERE id=$id");
    $query->execute();

    $result=$query->fetchAll(PDO::FETCH_CLASS,"Category");
    return $result;
}