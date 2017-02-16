<?php

namespace LaraCart\Shop\Infrastructure\Repositories\Domain\Eloquent;

use LaraCart\Shop\Domain\ValueObject\ItemId;
use LaraCart\Shop\Domain\Entity\Item;
use LaraCart\Shop\Domain\Repositories\ItemRepository;

use LaraCart\Shop\Infrastructure\Eloquents\EloquentItem;

class EloquentItemRepository implements ItemRepository
{
    private $eloquent;

    public function __construct(EloquentItem $eloquent)
    {
        $this->eloquent = $eloquent;
    }

    public function findById(int $id): Item
    {
        $item = $this->eloquent->find($id);
        if(empty($item)) {
            throw new \Exception('item not found.');
        }

        return $item->toDomain();
    }
}
