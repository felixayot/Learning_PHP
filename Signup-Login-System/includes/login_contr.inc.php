<?php

declare(strict_types=1);

function is_input_empty(string $username, string $password): bool {
    if (empty($username) || empty($password)) {
        return true;
    }
    return false;
}

function is_username_invalid(array $result): bool {
    if ($result) {
        return true;
    }
    return false;
}

function is_password_invalid(string $password, string $hashedPwd): bool {
    if (!password_verify($password, $hashedPwd)) {
        return true;
    }
    return false;
}

function create_user(object $pdo, string $username, string $email, string $password) {
    set_user($pdo, $username, $email, $password);
}
