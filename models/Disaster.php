<?php
class Disaster extends Model {

    private $name;

    private $descritpion;
    
    private $date;

    private $id;

    private $ref;

    private $incident;

    private $product;

    private $image;

    function __construct($name, $id, $date, $ref, $incident, $product, $image, $total_amount, $total_product) {
        parent::__construct();
        $this->name = $name;
        $this->id = $id;
        $this->date = $date;
        $this->ref = $ref;
        $this->incident = $incident;
        $this->product = $product;
        $this->image = $image;
        $this->total_amout = $total_amount;
        $this->total_product = $total_product;
    }

}