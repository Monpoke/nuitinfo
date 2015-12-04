<?php
require_once __DIR__."/../core/includes.php";

define("API_KEY", "525502c6-8822-4539-a3cf-6a346e35a6f6");
define("API_SEARCH", "https://api.cdiscount.com/OpenApi/json/Search");

function search_products(ProductCategory $category, $page) {
    $post_data = array();
    $post_data["ApiKey"] = API_KEY;
    $post_data["SearchRequest"] = array();
    $post_data["SearchRequest"]["Keyword"] = $category->get_name();
    $post_data["SearchRequest"]["Pagination"] = array();
    $post_data["SearchRequest"]["Pagination"]["ItemsPerPage"] = 10;
    $post_data["SearchRequest"]["Pagination"]["PageNumber"] = $page;
    $post_data["SearchRequest"]["Filters"] = array();
    $post_data["SearchRequest"]["Filters"]["Price"] = array();
    $post_data["SearchRequest"]["Filters"]["Price"]["Min"] = 0;
    $post_data["SearchRequest"]["Filters"]["Price"]["Max"] = 0;
    $post_data["SearchRequest"]["Filters"]["Navigation"] = "all";
    $post_data["SearchRequest"]["Filters"]["IncludeMarketPlace"] = false;
    $post_data["SearchRequest"]["Filters"]["Brands"] = array();

    $file = get_post_data(API_SEARCH, json_encode($post_data));
    return json_decode($file, true);
}

function get_product(ProductCategory $category) {
    $data = search_products($category, 0);
    $data_products = $data["Products"];
    foreach ($data_products as $data_product) {
        if ($data_product["BestOffer"]["IsAvailable"])
            return new Product($data_product["Name"], (float)$data_product["BestOffer"]["SalePrice"], $category, $data_product["Description"], $data_product["BestOffer"]["IsAvailable"]);
    }
    return null;
}

get_product(new ProductCategory("pansement", "test"));