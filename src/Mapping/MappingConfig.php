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
use AutoMapperPlus\AutoMapperInterface;
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
            ->forMember('items', Operation::mapFrom(function (OrderDTO $dto, AutoMapperInterface $mapper, array $context) {
                /** @var Order $destination */
                if (isset($context['destination']) && ($destination = $context['destination'])) {
                    $items = [];
                    foreach ($dto->items as $index => $itemDto) {
                        if (isset($destination->getItems()[$index])) {
                            $items[] = $mapper->mapToObject($itemDto, $destination->getItems()[$index], $context);
                        } else {
                            $items[] = $mapper->map($itemDto, Item::class);
                        }
                    }
                } else {
                    $items = $mapper->mapMultiple($dto->items, Item::class, $context);
                }

                return $items;
            }))
        ;
        $config
            ->registerMapping(Item::class, ItemDTO::class)
            ->reverseMap()
        ;
    }
}