<?php
//header('Content-Type: application/json');

if ($_SERVER["REQUEST_METHOD"] === "GET") {
    if (isset($_GET["FileName"]) && !empty($_GET["FileName"])) {
        loadFile($_GET["FileName"]);
    }
}

function loadFile($fileName)
{
    // Указываем путь к файлу
//    $file_path = 'C:/inetpub/vhosts/u0308478.plsk.regruhosting.ru/test/' . $fileName;
    $file_path = 'C:\\inetpub\\vhosts\\u0308478.plsk.regruhosting.ru\\FileLibrary\\' . $fileName;
//    echo $file_path;
    // Проверяем, существует ли файл
    if (file_exists($file_path)) {
        // Устанавливаем заголовки для скачивания файла
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename="' . basename($file_path) . '"');
        header('Content-Length: ' . filesize($file_path));

        // Считываем и выводим содержимое файла
        readfile($file_path);
        exit;
    } else {
        // Файл не найден
        echo "Файл не существует.";
    }
}
?>