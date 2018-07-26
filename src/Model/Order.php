<?php
/**
 * User: boshurik
 * Date: 26.07.18
 * Time: 17:48
 */

namespace App\Model;

class Order
{
    /**
     * @var float
     */
    private $price;

    /**
     * @var Item[]
     */
    private $items;

    /**
     * @return float
     */
    public function getPrice(): float
    {
        return $this->price;
    }

    /**
     * @param float $price
     */
    public function setPrice(float $price): void
    {
        $this->price = $price;
    }

    /**
     * @return Item[]
     */
    public function getItems()
    {
        return $this->items;
    }

    /**
     * @param Item[] $items
     */
    public function setItems($items)
    {
        $this->items = $items;
    }
}