<?php
function postReview(int $productId)
{
    global $pdo;
    $productCheck = $_POST['product_id'];
    if (intval($productCheck) === $productId){
        $query = $pdo->prepare('INSERT INTO reviews(product_id, name, rating,  description);
                                      VALUES (:product_id, :name, :rating, :description)');

        $product_id = filter_input(INPUT_POST,'product_id',FILTER_SANITIZE_NUMBER_INT);
        $rating = filter_input(INPUT_POST,'rating',FILTER_SANITIZE_NUMBER_INT);
        $name = filter_input(INPUT_POST,'name',FILTER_SANITIZE_STRING);
        $description = filter_input(INPUT_POST,'description',FILTER_SANITIZE_STRING);

        $query->bindParam(':product_id', $product_id,PDO::PARAM_INT);
        $query->bindParam(':rating', $rating,PDO::PARAM_INT);
        $query->bindParam(':name', $name,PDO::PARAM_STR);
        $query->bindParam(':description', $description,PDO::PARAM_STR);
        $query->execute();

        $_POST = [];
        return ['result' => true, 'message' => ''];
    }

    return ['result' => true, 'message' => ''];
}