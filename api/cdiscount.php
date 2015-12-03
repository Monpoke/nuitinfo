<?php
    require_once __DIR__."/../core/includes.php";
    $file = get_data("https://api.cdiscount.com/OpenApi/json/GetProduct");
    var_dump($file);
?>
