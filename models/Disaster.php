<?php

class Disaster extends Model {

    private $id;

    private $location;

    private $type;

    private $date;

    private $description;

    private $image;

    private $product;

    private $total_raised;

    private $total_product;

    function __construct($id, $location, $type, $date, $description, $image, Product $product, $total_raised, $total_product)
    {
        parent::__construct();
        $this->id = $id;
        $this->location = $location;
        $this->type = $type;
        $this->date = $date;
        $this->description = $description;
        $this->image = $image;
        $this->product = $product;
        $this->total_raised = $total_raised;
        $this->total_product = $total_product;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getLocation()
    {
        return $this->location;
    }

    public function getType()
    {
        return $this->type;
    }

    public function getDate()
    {
        return $this->date;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function getImage()
    {
        return $this->image;
    }

    public function getProduct()
    {
        return $this->product;
    }

    public function getTotalRaised()
    {
        return $this->total_raised;
    }

    public function getTotalProduct()
    {
        return $this->total_product;
    }

    public function get_percent() {
        return min(100, floor($this->total_product / $this->product->get_price() * 100));
    }

    public function donate($amount) {
        $this->total_raised += $amount;
        $this->total_product += $amount;
    }

    public function next_product() {
        if ($this->get_percent() == 100) {
            $this->product = $this->get_priority_product();
            $this->total_product = 0;
        }
    }

    public function get_priority_product() {
        return new Product("water", 3, new ProductCategory("", ""), "adawd", false);
    }

}