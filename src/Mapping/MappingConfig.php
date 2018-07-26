<?php
/**
 * User: boshurik
 * Date: 26.07.18
 * Time: 17:51
 */

namespace App\Mapping;

use App\DTO\ItemDTO;
use App\DTO\OrderDTO;
use App\Model\Item;
use App\Model\Order;
use AutoMapperPlus\Configuration\AutoMapperConfig;
use AutoMapperPlus\MappingOperation\Operation;

class MappingConfig
{
    public function configure(AutoMapperConfig $config)
    {
        $config
            ->registerMapping(Order::class, OrderDTO::class)
            ->forMember('items', Operation::mapTo(ItemDTO::class))
            ->reverseMap()
            ->forMember('items', Operation::mapTo(Item::class))
        ;
        $config
            ->registerMapping(Item::class, ItemDTO::class)
            ->reverseMap()
        ;
    }
}