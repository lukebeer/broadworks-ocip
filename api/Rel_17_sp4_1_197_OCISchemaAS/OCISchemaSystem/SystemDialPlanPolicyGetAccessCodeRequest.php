<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DialPlanAccessCode;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Request access code data associated with system level Dial Plan Policy access codes.
 *         The response is either a SystemDialPlanPolicyGetAccessCodeResponse or an ErrorResponse.
 */
class SystemDialPlanPolicyGetAccessCodeRequest extends ComplexType implements ComplexInterface
{
    const     RESPONSE_TYPE = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SystemDialPlanPolicyGetAccessCodeResponse';
    public    $name       = __CLASS__;
    protected $accessCode = null;

    public function __construct(
         $accessCode
    ) {
        $this->setAccessCode($accessCode);
    }

    /**
     * Dial Plan Access Code.
     *         The Access Code may contain digits 0-9, *, and #.
     */
    public function setAccessCode($accessCode = null)
    {
        $this->accessCode = ($accessCode InstanceOf DialPlanAccessCode)
             ? $accessCode
             : new DialPlanAccessCode($accessCode);
    }

    /**
     * Dial Plan Access Code.
     *         The Access Code may contain digits 0-9, *, and #.
     */
    public function getAccessCode()
    {
        return (!$this->accessCode) ?: $this->accessCode->getValue();
    }
}
