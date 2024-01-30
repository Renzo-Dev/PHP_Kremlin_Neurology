<?php
$password = "123123";
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $jsonData = file_get_contents("php://input");
    $data = json_decode($jsonData, true);
    if (isset($data["password"]) && $data["password"] === $password) {
        // ПЕРЕНАПРАВЛЯЕМ НА ПРИВАТНУЮ БИБЛИОТЕКУ
        // ИЛИ ОТПРАВЛЯЕМ ШАБЛОН С НЕЙ
        echo "200";
    } else {
        echo "401";
    }
    exit();
}
?>