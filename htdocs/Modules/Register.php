<?php
function makeRegistration():string
{
    global $pdo;
    $email=filter_input(INPUT_POST,'email', FILTER_VALIDATE_EMAIL);
    $password=filter_input(INPUT_POST,'password');
    $firstName=filter_input(INPUT_POST,"firstName");
    $lastName=filter_input(INPUT_POST,"lastName");
    if($email!==false && !empty($password) && !empty($firstName) &&
        !empty($lastName)) {
        $sth = $pdo->prepare('INSERT INTO user (email,password,first_name,last_name,role) VALUES (?,?,?,?,"member")');
        $sth->bindParam(1, $email);
        $sth->bindParam(2, $password);
        $sth->bindParam(3,$firstName);
        $sth->bindParam(4, $lastName);
        $sth->execute();
        return "SUCCESS";
        }
    return "INCOMPLETE";
}