<?php
require_once __DIR__."/../core/includes.php";

$API_KEY = "525502c6-8822-4539-a3cf-6a346e35a6f6";

$post_data = array();
$post_data["ApiKey"] = $API_KEY;
$post_data["SearchRequest"] = array();
$post_data["SearchRequest"]["Keyword"] = "tablette";
$post_data["SearchRequest"]["Pagination"] = array();
$post_data["SearchRequest"]["Pagination"]["ItemsPerPage"] = 10;
$post_data["SearchRequest"]["Pagination"]["PageNumber"] = 0;
$post_data["SearchRequest"]["Filters"] = array();
$post_data["SearchRequest"]["Filters"]["Price"] = array();
$post_data["SearchRequest"]["Filters"]["Price"]["Min"] = 0;
$post_data["SearchRequest"]["Filters"]["Price"]["Max"] = 0;
$post_data["SearchRequest"]["Filters"]["Navigation"] = "all";
$post_data["SearchRequest"]["Filters"]["IncludeMarketPlace"] = false;
$post_data["SearchRequest"]["Filters"]["Brands"] = array();

$file = get_post_data("https://api.cdiscount.com/OpenApi/json/Search", json_encode($post_data));
echo $file;
$json = json_decode($file, true);