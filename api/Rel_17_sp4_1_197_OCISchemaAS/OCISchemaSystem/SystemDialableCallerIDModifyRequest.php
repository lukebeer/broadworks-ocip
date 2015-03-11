<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DialableCallerIDCriteriaPriorityOrder;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Modify the system level Dialable Caller ID criteria list.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemDialableCallerIDModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name                  = 'SystemDialableCallerIDModifyRequest';
    protected $criteriaPriorityOrder = null;

    public function __construct(
         DialableCallerIDCriteriaPriorityOrder $criteriaPriorityOrder = null
    ) {
        $this->setCriteriaPriorityOrder($criteriaPriorityOrder);
    }

    /**
     * @return 
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
        if (!$criteriaPriorityOrder) return $this;
        $this->criteriaPriorityOrder = $criteriaPriorityOrder;
        $this->criteriaPriorityOrder->setName('criteriaPriorityOrder');
        return $this;
    }

    /**
     * 
     * @return DialableCallerIDCriteriaPriorityOrder
     */
    public function getCriteriaPriorityOrder()
    {
        return $this->criteriaPriorityOrder;
    }
}
