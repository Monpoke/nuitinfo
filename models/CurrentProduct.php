<?php
class CurrentProduct extends Model {

    private $product;

    private $amount;

    function __construct(Product $product) {
        parent::__construct();
        $this->product = $product;
        $this->amount = 0;
    }

    public function get_product()
    {
        return $this->product;
    }

    public function get_amount()
    {
        return $this->amount;
    }

    public function get_percent() {
        return floor($this->amount / $this->product->get_price() * 100);
    }

}