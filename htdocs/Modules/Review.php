<?php
function postReview(int $productId){
    global $pdo;
    $productCheck = $_POST['product_id'];
    if (interval($productCheck) === $productId){
        $query = $pdo->prepare('INSERT INTO reviews(product_id, name, rating, description)
                                      VALUES (:product_id, :name, :rating, :description)');

        $product_id = filter_input(INPUT_POST,'product_id',FILTER_SANITIZE_NUMBER_INT);
        $rating = filter_input(INPUT_POST,'rating',FILTER_SANITIZE_NUMBER_INT);
        $name = filter_input(INPUT_POST,'product_id',FILTER_SANITIZE_STRING);
        $description = filter_input(INPUT_POST,'product_id',FILTER_SANITIZE_STRING);

        $query->bindParam(':product_id', $product_id,PDO::PARAM_INT);
        $query->bindParam(':rating', $product_id,PDO::PARAM_INT);
        $query->bindParam(':name', $product_id,PDO::PARAM_STR);
        $query->bindParam(':description', $product_id,PDO::PARAM_STR);
        $query->execute();

        $_POST = [];
        return ['result' => true, 'message' => ''];
    }

    return ['result' => true, 'message' => ''];
}