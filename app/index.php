<?php
$path = "frontend/html/main.html";

if ($_SERVER['REQUEST_METHOD'] == "GET") {
    if (isset($_GET['library'])) { // получения страницы Библиотека
        $path = "frontend/html/library.html";
    } else if (isset($_GET['history'])) { // получение страницы История
        $path = "frontend/html/history.html";
    } else if (isset($_GET['scientific'])) { // получение страницы История
        $path = "frontend/html/scientific_work.html";
    } else if (isset($_GET['employee_info']) && !empty($_GET['employee_info'])) { // запросы для биографии работников
        if ($_GET['employee_info'] === "Prof_Vladimir_Ivanovich_Shmyrev") {
            $path = "frontend/html/employee_info/Prof_Vladimir_Ivanovich_Shmyrev.html";
        } else if ($_GET['employee_info'] === "AS_Nikolay_Vladislavovich_Babenkov") {
            $path = "frontend/html/employee_info/AS_Nikolay_Vladislavovich_Babenkov.html";
        } else if ($_GET['employee_info'] === "AS_Aleksey_Sergeyevich_Vasiliev") {
            $path = "frontend/html/employee_info/AS_Aleksey_Sergeyevich_Vasiliev.html";
        } else if ($_GET['employee_info'] === "AS_Gennady_Ivanovich_Rezkov") {
            $path = "frontend/html/employee_info/AS_Gennady_Ivanovich_Rezkov.html";
        } else if ($_GET['employee_info'] === "AS_Kravchenko_Tamara_Ivanovna") {
            $path = "frontend/html/employee_info/AS_Kravchenko_Tamara_Ivanovna.html";
        }
    }
}

include("frontend/html/templates/topBar.html");
include($path);
include("frontend/html/templates/footer.html");
?>

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="frontend/scripts/swiper.js"></script>
<script src="frontend/scripts/topPanelNavigation.js"></script>