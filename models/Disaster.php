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

    function __construct($id, $location, $type, $date, $description, $image, $product, $total_raised, $total_product)
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

}