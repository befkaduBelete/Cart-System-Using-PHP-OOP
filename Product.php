<?php 
class Product{
    private int $id;
    private string $title;
    private float $price;
    private int $availableQuantity;

     public function __construct($id, $title, $price, $availableQuantity){
        $this->id = $id;
        $this->title = $title;
        $this->price = $price;
        $this->availableQuantity = $availableQuantity;
     }

    /**
     * Summary of addToCart
     * @param Cart $cart
     * @param int $quantity
   
     */
    public function addToCart(Cart $cart, int $quantity)
    {
        //TODO Implement method
    }

    /**
     * Summary of removeFromCart
     * @param Cart $cart
     * @return void
     */
    public function removeFromCart(Cart $cart){

    }

	/**
	 * @return int
	 */
	public function getId(): int {
		return $this->id;
	}

	/**
	 * @param int $id 
	 * @return self
	 */
	public function setId(int $id): self {
		$this->id = $id;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getTitle(): string {
		return $this->title;
	}
	
	/**
	 * @param string $title 
	 * @return self
	 */
	public function setTitle(string $title): self {
		$this->title = $title;
		return $this;
	}

	/**
	 * @return float
	 */
	public function getPrice(): float {
		return $this->price;
	}
	
	/**
	 * @param float $price 
	 * @return self
	 */
	public function setPrice(float $price): self {
		$this->price = $price;
		return $this;
	}

	/**
	 * @return int
	 */
	public function getAvailableQuantity(): int {
		return $this->availableQuantity;
	}
	
	/**
	 * @param int $availableQuantity 
	 * @return self
	 */
	public function setAvailableQuantity(int $availableQuantity): self {
		$this->availableQuantity = $availableQuantity;
		return $this;
	}
}
?>