<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceSMDIMessageDesk; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\xs:boolean;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\SMDIMessageDeskNumber;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to the UserSMDIMessageDeskGetRequest.
 */
class UserSMDIMessageDeskGetResponse extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $isActive,
             $messageDeskNumber=null
    ) {
        $this->isActive          = $isActive;
        $this->messageDeskNumber = $messageDeskNumber;
        $this->args              = func_get_args();
    }

    public function setIsActive($isActive)
    {
        $isActive and $this->isActive = new xs:boolean($isActive);
    }

    public function getIsActive()
    {
        return (!$this->isActive) ?: $this->isActive->value();
    }

    public function setMessageDeskNumber($messageDeskNumber)
    {
        $messageDeskNumber and $this->messageDeskNumber = new SMDIMessageDeskNumber($messageDeskNumber);
    }

    public function getMessageDeskNumber()
    {
        return (!$this->messageDeskNumber) ?: $this->messageDeskNumber->value();
    }
}
