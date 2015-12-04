<?php
class ProductCategory extends Model {

    private $name;

    private $description;

    function __construct($name, $description) {
        parent::__construct();
        $this->name = $name;
        $this->description = $description;
    }

    public function get_name() {
        return $this->name;
    }

    public function get_description() {
        return $this->description;
    }

}