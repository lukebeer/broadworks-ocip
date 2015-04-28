<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\NetAddressExtended;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Reorder the charging function element servers. You can not add or delete addresses,
 *         only re-ordering the list is allowed. The ordered list of addresses can be obtained
 *         with the SystemAccountingGetChargingFunctionElementServerListRequest command.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemAccountingReorderChargingFunctionElementServerRequest extends ComplexType implements ComplexInterface
{
    public    $elementName = 'SystemAccountingReorderChargingFunctionElementServerRequest';
    protected $orderedAddressList;

    public function __construct(
         $orderedAddressList = null
    ) {
        $this->setOrderedAddressList($orderedAddressList);
    }

    /**
     * @return mixed $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setOrderedAddressList($orderedAddressList = null)
    {
        $this->orderedAddressList = ($orderedAddressList InstanceOf NetAddressExtended)
             ? $orderedAddressList
             : new NetAddressExtended($orderedAddressList);
        $this->orderedAddressList->setElementName('orderedAddressList');
        return $this;
    }

    /**
     * 
     * @return NetAddressExtended $orderedAddressList
     */
    public function getOrderedAddressList()
    {
        return ($this->orderedAddressList)
            ? $this->orderedAddressList->getElementValue()
            : null;
    }
}
