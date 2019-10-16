<?php

namespace MetaShipRU\MetaShipPHPSDK\Request\Delivery;

use MetaShipRU\MetaShipPHPSDK\Request\RequestCore;
use JMS\Serializer\Annotation as Serializer;


/**
 * Class GetDeliveriesRequest
 * @package MetaShipRU\MetaShipPHPSDK\Request\Delivery
 */
class GetDeliveriesRequest
{
    use RequestCore;

    const METHOD = 'GET';
    const PATH = '/v1/deliveries';

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("deliveryName")
     * @var string
     */
    public $deliveryName;

    /**
     * @var string
     */
    public $zip;

    /**
     * @var string
     */
    public $pickupPointId;
}