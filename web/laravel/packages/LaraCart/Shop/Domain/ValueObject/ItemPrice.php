<?php

namespace LaraCart\Shop\Domain\ValueObject;

class ItemPrice {

    private $value;

    public function __construct(int $value = 0)
    {
        if($value < 0) {
            throw new  \InvalidArgumentException("Error Processing Request", 1);
        }

        $this->value = $value;
    }

    public function value(): int
    {
        return $this->value;
    }

/**
    public function mutti(ItemCount $count): ItemSubtotal
    {
        return return new ItemSubtotal($this->value * $count->value);
    }
**/
}
