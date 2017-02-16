<?php

namespace LaraCart\Shop\Domain\Entity;

class Item
{
    private $id;

    private $name;

    private $price;

    private $stock;

    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function setStock($stock)
    {
        $this->stock = $stock;

        return $this;
    }

    public function getStock()
    {
        return $this->stock;
    }

}
