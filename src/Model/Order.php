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
     * @var Item[]
     */
    private $items;

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