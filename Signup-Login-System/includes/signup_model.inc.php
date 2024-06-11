<?php

declare(strict_types=1);

function get_username(object $pdo, string $username) {
    $sql = "SELECT username FROM users WHERE username = :username;";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':username', $username);
    $stmt->execute();
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    return $result;
}

function get_email(object $pdo, string $email) {
    $sql = "SELECT email FROM users WHERE email = :email;";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':email', $email);
    $stmt->execute();
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    return $result;
}

function set_user(object $pdo, string $username, string $email, string $password) {
    $sql = "INSERT INTO users (username, email, pwd) VALUES (:username, :email, :pwd);";
    $stmt = $pdo->prepare($sql);

    $options = [
        'cost' => 12
    ];
    
    $hashedPwd = password_hash($password, PASSWORD_BCRYPT, $options);
    
    $stmt->bindParam(':username', $username);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':pwd', $hashedPwd);
    $stmt->execute();
}
