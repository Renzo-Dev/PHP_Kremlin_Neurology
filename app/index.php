<?php
$path = "frontend/html/main.html";

if ($_SERVER['REQUEST_METHOD'] == "GET") {
    if (isset($_GET['library'])) {
        $path = "frontend/html/library.html";
    }
}
if($_SERVER['REQUEST_METHOD'] === "POST") {
    echo "WORK POST";
    // Получаем данные из input stream
    $jsonData = file_get_contents("php://input");

    // Парсим JSON-строку в ассоциативный массив
    $data = json_decode($jsonData, true);

    var_dump($data);
//    // Проверяем успешность парсинга
//    if ($data === null) {
//        // Возможно, произошла ошибка парсинга JSON
//        echo "Ошибка парсинга JSON";
//    } else if ($data["password"] !== "123123") {
//        http_response_code(401);
//        header('Content-Type: application/json');
//        echo json_encode(['error' => 'Unauthorized']);
//        exit();
//    } else {
//        echo $data["password"];
//        exit();
//    }
}

include("frontend/html/templates/topBar.html");
include($path);
include("frontend/html/templates/footer.html");
?>

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="frontend/scripts/swiper.js"></script>
    <script src="frontend/scripts/topPanelNavigation.js"></script>


<?php
function loadFile($fileName)
{
    // Указываем путь к файлу
    $file_path = 'C:\inetpub\vhosts\u0308478.plsk.regruhosting.ru\\test\\' . $fileName;

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