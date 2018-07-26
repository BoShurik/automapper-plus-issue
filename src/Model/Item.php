<?php
/**
 * User: boshurik
 * Date: 26.07.18
 * Time: 17:48
 */

namespace App\Model;

class Item
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var float
     */
    private $price;

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return float
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param float $price
     */
    public function setPrice($price)
    {
        $this->price = $price;
    }
}