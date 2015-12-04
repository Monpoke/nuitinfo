<?php
class Product extends Model {

    private $id;

    private $name;

    private $price;

    private $category;

    private $description;

    private $available;

    private static $cachePrices;
    private $currentDonation;

    function __construct($id, $name, $price, $category, $description, $available) {
        parent::__construct();
        $this->$id = $id;
        $this->name = $name;
        $this->price = $price;
        $this->category = $category;
        $this->description = $description;
        $this->available = $available;
    }

    public function setCurrentDonation($in){
        $this->currentDonation = $in;
    }

    public function get_id() {
        return $this->id;
    }

    public function get_name() {
        return $this->name;
    }

    public function get_price() {
        if ($this->price == 0) {
            if (!isset(self::$cachePrices[$this->get_id()])) {
                $gp = get_product(new ProductCategory(strtolower($this->name), ""));
                self::$cachePrices[$this->get_id()] = $gp;
            }

            if (isset(self::$cachePrices[$this->get_id()])) {
                $this->price = self::$cachePrices[$this->get_id()]->get_price();

            }
        }

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