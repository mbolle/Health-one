<?php
// TODO Zorg dat de methodes goed ingevuld worden met de juiste queries.
function getProducts(int $categoryId)
{
    global $pdo;
    $query=$pdo->prepare("SELECT * FROM product WHERE category_id = :id");
    $query->bindParam("id", $categoryId);
    $query->execute();
    $result=$query->fetchAll(PDO::FETCH_CLASS,"Product");
    return $result;
}

function getProduct(int $productId)
{
    global $pdo;
    try
    {
        $query = $pdo->prepare("SELECT * FROM product WHERE id = :id");
        $query->bindParam("id", $productId);
        $query->setFetchMode(PDO::FETCH_CLASS, 'Product');
        $query->execute();
    }catch (PDOException $e) {
        echo $e->getMessage();
    }
    return $query->fetch();
}