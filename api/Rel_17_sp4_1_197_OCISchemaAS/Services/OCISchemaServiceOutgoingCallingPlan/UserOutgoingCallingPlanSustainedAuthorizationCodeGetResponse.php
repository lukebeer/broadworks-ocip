<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceOutgoingCallingPlan; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\OutgoingCallingPlanAuthorizationCode;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Response to UserOutgoingCallingPlanAuthorizationCodeGetRequest.
 */
class UserOutgoingCallingPlanSustainedAuthorizationCodeGetResponse extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;
    protected $code = null;


    /**
     * Outgoing Calling Plan Authorization Code.
     */
    public function setCode($code = null)
    {
        $this->code = ($code InstanceOf OutgoingCallingPlanAuthorizationCode)
             ? $code
             : new OutgoingCallingPlanAuthorizationCode($code);
    }

    /**
     * Outgoing Calling Plan Authorization Code.
     */
    public function getCode()
    {
        return (!$this->code) ?: $this->code->getValue();
    }
}
