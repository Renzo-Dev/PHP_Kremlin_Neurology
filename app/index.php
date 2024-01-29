<?php
$path = "frontend/html/main.html";

if ($_SERVER['REQUEST_METHOD'] == "GET") {
    if (isset($_GET['library'])) {
        $path = "frontend/html/library.html";
    }
}

include("frontend/html/templates/topBar.html");
include($path);
include("frontend/html/templates/footer.html");
?>

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="frontend/scripts/swiper.js"></script>
<script src="frontend/scripts/topPanelNavigation.js"></script>