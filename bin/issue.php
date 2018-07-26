<?php
/**
 * User: boshurik
 * Date: 26.07.18
 * Time: 17:54
 */

require_once __DIR__.'/../vendor/autoload.php';

use App\Mapping\MappingConfig;
use AutoMapperPlus\Configuration\AutoMapperConfig;
use AutoMapperPlus\AutoMapper;
use App\Model\Order;
use App\Model\Item;
use App\DTO\OrderDTO;

$config = new AutoMapperConfig();

$mapping = new MappingConfig();
$mapping->configure($config);

$mapper = new AutoMapper($config);

$order = new Order();
$item = new Item();
$item->setName('Item Name');
$item->setPrice(1000);
$order->setItems([$item]);
$order->setPrice(1000);

dump($order);

$dto = $mapper->map($order, OrderDTO::class);

dump($dto);

$order = $mapper->mapToObject($dto, $order);

dump($order);