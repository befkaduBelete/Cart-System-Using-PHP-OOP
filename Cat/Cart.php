<?php
class Cart
{
    /**
     * Summary of item
     * @var array
     */
    private array $items = [];
    /**
     * Summary of addProduct
     * @param Product $product
     * @param int $quantity
     */
    public function addProduct(Product $product, int $quantity)
    {
        //find the product in cart
        $cartItem = $this->findCartItem($product->getId());
        if ($cartItem === null)
        {
            $cartItem = new CartItem($product,0);
            $this->items[] = $cartItem;
        }
        $cartItem = new CartItem($product, $quantity);

        // foreach ($this->items as $item)
        // {
        //     if ($item->getProduct()->getId() == $product->getId())
        //     {

        //         $item->increaseQuantity($quantity);
        //         // if ($item->getQuantity() + $quantity > $product->getAvailableQuantity())
        //         // {
        //         //     throw new \Exception("" . $product->getId());
        //         // }
        //         // $item->setQuantity($item->getQuantity()+ $quantity);
        //     }
        // }
       
    }

    private function findCartItem(int $productId){
        foreach ($this->items as $item)
        {
            if ($item->getProduct()->getId() == $productId){
                return $item->getProduct();
            }
        }
        return null;

    }

    /**
     * Summary of removeProduct
     * @param Product $product
     * @return void
     */
    public function removeProduct(Product $product)
    {
    }
    /**
     * Summary of getTotalQuantity
     * @return int
     */
    public function getTotalQuantity(): int{
        return 1;

    }
    /**
     * Summary of getTotalSum
     * @return float
     */
    public function getTotalSum(): float{
        return 0.8;

    }
}
?>