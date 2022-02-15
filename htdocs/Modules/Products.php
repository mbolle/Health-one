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

function getProductsToDisplay(){
    try{
        global $pdo;
        $query=$pdo->prepare('SELECT product.* , category.name AS category_name 
                                                         FROM product
                                                         JOIN category
                                                         ON product.category_id=category.id');
        $query->execute();
        $products=$query->fetchAll(PDO::FETCH_CLASS);

        return $products;
    }
    catch (PDOException $e){
        echo $e->getMessage();
    }
}

function addProduct($name,$categoryId,$ingredients,$description,$picture,$price){
    try{
        global $pdo;
        $query=$pdo->prepare('INSERT INTO product (name , category_id , ingredients,description, picture ,price) VALUES (:name,:category_id,:ingredients,:description,:picture,:price)');
        $query->bindParam('name',$name);
        $query->bindParam('category_id',$categoryId);
        $query->bindParam('ingredients',$ingredients);
        $query->bindParam('description',$description);
        $query->bindParam('picture',$picture);
        $query->bindParam('price',$price);

        $query->execute();
    }
    catch (PDOException $e){
        echo $e->getMessage();
    }
}

function removeProduct($id){
    try{
        global $pdo;
        $query=$pdo->prepare('DELETE FROM product WHERE id = :id');
        $query->bindParam('id',$id);
        $query->execute();
    }
    catch (PDOException $e){
        echo $e->getMessage();
    }
}

function updateProduct($newName,$newCategoryId,$newIngredients,$newDescription,$newPrice,$id){
    try{
        global $pdo;
        $query=$pdo->prepare('UPDATE product SET
                                                         name=:name,
                                                         category_id=:category_id,
                                                         ingredients=:ingredients,
                                                         description=:description,
                                                         price=:price
                                                         WHERE id=:id');
        $query->bindParam('name',$newName);
        $query->bindParam('category_id',$newCategoryId);
        $query->bindParam('ingredients',$newIngredients);
        $query->bindParam('description',$newDescription);
        $query->bindParam('price',$newPrice);
        $query->bindParam('id',$id);
        $query->execute();
    }
    catch(PDOException $e){
        echo $e->getMessage();
    }
}