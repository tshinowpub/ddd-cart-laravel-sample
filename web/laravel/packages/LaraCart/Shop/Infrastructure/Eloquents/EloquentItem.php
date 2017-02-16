<?php

namespace LaraCart\Shop\Infrastructure\Eloquents;

use LaraCart\Shop\Infrastructure\Eloquents\AppEloquent;
use LaraCart\Shop\Infrastructure\Eloquents\Domainable;
use LaraCart\Shop\Domain\Entity\Item;
use LaraCart\Shop\Domain\ValueObject\ItemId;
use LaraCart\Shop\Domain\ValueObject\ItemPrice;
use LaraCart\Shop\Domain\ValueObject\ItemStock;

class EloquentItem extends AppEloquent implements Domainable
{
    protected $table = 'items';

    public function toDomain(): Item
    {
        $item = new Item();

        $item
            ->setId(new ItemId($this->id))
            ->setName($this->name)
            ->setPrice(new ItemPrice($this->price))
            ->setStock(new ItemStock($this->stock));

        return $item;
    }

}
