<?php 
class CartItem{

    private Product $product;
    private int $quantity;
    /**
     * Summary of __construct
     * @param Product $product
     * @param int  $quantity
     */
    public function __construct(\Product $product,  $quantity){
        $this->product = $product;
        $this->quantity = $quantity;
    }
    public function getProduct(): Product
    {
        return $this->product;
    }
    public function setProduct($product)
    {
        $this->product = $product;
    }
    public function getQuantity(): int
    {
        return $this->quantity;
    }
    public function setQuantity(int $quantity)
    {
        $this->quantity = $quantity;
    }
    

    public function increaseQuantity($amount=1){
        if ($this->getQuantity() + $amount > $this->getProduct()->getAvailableQuantity())
        {
             throw new \Exception("HHHHH");
        }
        $this->quantity += $amount;

    }
    public function decreasQuantity($amount= 1){
        if ($this->getQuantity() - $amount < 1)
        {
             throw new \Exception("HHHHH");
        }
        $this->quantity -= $amount;
 
    }


}
?>