<?php

namespace LaraCart\Shop\Domain\Repositories;

use LaraCart\Shop\Domain\Entity\Item;

interface ItemRepository
{
    public function findById(int $id): Item;
}
