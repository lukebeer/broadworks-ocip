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


/**
 * Modify the system level Dialable Caller ID criteria list.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemDialableCallerIDModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name                   = __CLASS__;
    protected $criteriaPriorityOrder  = null;

    public function __construct(
         DialableCallerIDCriteriaPriorityOrder $criteriaPriorityOrder = null
    ) {
        $this->setCriteriaPriorityOrder($criteriaPriorityOrder);
    }

    public function setCriteriaPriorityOrder(DialableCallerIDCriteriaPriorityOrder $criteriaPriorityOrder = null)
    {
    }

    public function getCriteriaPriorityOrder()
    {
        return (!$this->criteriaPriorityOrder) ?: $this->criteriaPriorityOrder->value();
    }
}
