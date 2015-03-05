<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceDualModeVCC; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DualModeVCCSubscriberUserName;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to UserDualModeVCCGetRequest
 */
class UserDualModeVCCGetResponse extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $subscriberUserName=null
    ) {
        $this->subscriberUserName = $subscriberUserName;
        $this->args               = func_get_args();
    }

    public function setSubscriberUserName($subscriberUserName)
    {
        $subscriberUserName and $this->subscriberUserName = new DualModeVCCSubscriberUserName($subscriberUserName);
    }

    public function getSubscriberUserName()
    {
        return (!$this->subscriberUserName) ?: $this->subscriberUserName->value();
    }
}
