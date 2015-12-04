<?php
class Disaster extends Model {
    private $name;
    
    private $date;
    private  $id;
    private $ref;
    private $incident;
    private $product;
    private  $image;
            function __construct($name,$id,$date,$ref,$incident,$product,$image,$total_amout,$total_product){ {
        parent::__construct();
        $this->name = $name;
        $this->id = $id;
        $this->date = $date;
        $this->ref = $ref;
        $this->incident = $incident;
        $this->product = $product;
        $this->image = $image;
        $this->total_amout = $total_amout;
        $this->total_product = $total_product;
        
    }

}