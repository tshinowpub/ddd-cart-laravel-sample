<?php

namespace LaraCart\Shop\Domain\Usecase;

use LaraCart\Shop\Domain\Entity\Item;

class AddItemCart
{
    private $itemRepository;
    private $cartItems = []

    public function __construct(ItemRepository $itemRepository)
    {
        $this->itemRepository = $itemRepository;
    }

    public function add(Item $item, int $count)
    {
        $this->cartItems[] = [
            'item' => $item,
            'count' => $count,
        ];
    }

    public function getCartItems()
    {
        return $this->cartItems;
    }

}
