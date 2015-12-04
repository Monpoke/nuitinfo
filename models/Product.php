<?php
class Product extends Model {

    private $name;

    private $price;

    private $category;

    private $description;

    private $available;

    function __construct($name, $price, $category, $description, $available) {
        parent::__construct();
        $this->name = $name;
        $this->price = $price;
        $this->category = $category;
        $this->description = $description;
        $this->available = $available;
    }

    public function get_name() {
        return $this->name;
    }

    public function get_price() {
        return $this->price;
    }

    public function get_category() {
        return $this->category;
    }

    public function get_description() {
        return $this->description;
    }

    public function get_available() {
        return $this->available;
    }

}