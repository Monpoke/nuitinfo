<?php
class Product extends Model {

    private $id;

    private $name;

    private $price;

    private $category;

    private $description;

    private $available;

    function __construct($id, $name, $price, $category, $description, $available) {
        parent::__construct();
        $this->$id = $id;
        $this->name = $name;
        $this->price = $price;
        $this->category = $category;
        $this->description = $description;
        $this->available = $available;
    }

    public function get_id() {
        return $this->id;
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