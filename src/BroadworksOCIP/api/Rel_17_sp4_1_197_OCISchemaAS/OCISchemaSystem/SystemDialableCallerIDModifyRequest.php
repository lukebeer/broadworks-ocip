<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DialableCallerIDCriteriaPriorityOrder;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Modify the system level Dialable Caller ID criteria list.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemDialableCallerIDModifyRequest extends ComplexType implements ComplexInterface
{
    public    $elementName = 'SystemDialableCallerIDModifyRequest';
    protected $criteriaPriorityOrder;

    public function __construct(
         $criteriaPriorityOrder = null
    ) {
        $this->setCriteriaPriorityOrder($criteriaPriorityOrder);
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
    public function setCriteriaPriorityOrder(DialableCallerIDCriteriaPriorityOrder $criteriaPriorityOrder = null)
    {
        $this->criteriaPriorityOrder = ($criteriaPriorityOrder InstanceOf DialableCallerIDCriteriaPriorityOrder)
             ? $criteriaPriorityOrder
             : new DialableCallerIDCriteriaPriorityOrder($criteriaPriorityOrder);
        $this->criteriaPriorityOrder->setElementName('criteriaPriorityOrder');
        return $this;
    }

    /**
     * 
     * @return DialableCallerIDCriteriaPriorityOrder $criteriaPriorityOrder
     */
    public function getCriteriaPriorityOrder()
    {
        return $this->criteriaPriorityOrder;
    }
}
