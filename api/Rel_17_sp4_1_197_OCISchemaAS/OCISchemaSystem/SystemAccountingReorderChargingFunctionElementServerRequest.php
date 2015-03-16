<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\NetAddressExtended;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Reorder the charging function element servers. You can not add or delete addresses,
 *         only re-ordering the list is allowed. The ordered list of addresses can be obtained
 *         with the SystemAccountingGetChargingFunctionElementServerListRequest command.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemAccountingReorderChargingFunctionElementServerRequest extends ComplexType implements ComplexInterface
{
    public    $name = 'SystemAccountingReorderChargingFunctionElementServerRequest';
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
        $this->orderedAddressList->setName('orderedAddressList');
        return $this;
    }

    /**
     * 
     * @return NetAddressExtended $orderedAddressList
     */
    public function getOrderedAddressList()
    {
        return ($this->orderedAddressList) ? $this->orderedAddressList->getValue() : null;
    }
}
