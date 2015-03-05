<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceCallNotify; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\EmailAddress;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\xs:boolean;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Modify the system level data associated with Call Notify.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemCallNotifyModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $defaultFromAddress=null,
             $useShortSubjectLine=null,
             $useDnInMailBody=null
    ) {
        $this->defaultFromAddress  = new EmailAddress($defaultFromAddress);
        $this->useShortSubjectLine = $useShortSubjectLine;
        $this->useDnInMailBody     = $useDnInMailBody;
        $this->args                = func_get_args();
    }

    public function setDefaultFromAddress($defaultFromAddress)
    {
        $defaultFromAddress and $this->defaultFromAddress = new EmailAddress($defaultFromAddress);
    }

    public function getDefaultFromAddress()
    {
        return (!$this->defaultFromAddress) ?: $this->defaultFromAddress->value();
    }

    public function setUseShortSubjectLine($useShortSubjectLine)
    {
        $useShortSubjectLine and $this->useShortSubjectLine = new xs:boolean($useShortSubjectLine);
    }

    public function getUseShortSubjectLine()
    {
        return (!$this->useShortSubjectLine) ?: $this->useShortSubjectLine->value();
    }

    public function setUseDnInMailBody($useDnInMailBody)
    {
        $useDnInMailBody and $this->useDnInMailBody = new xs:boolean($useDnInMailBody);
    }

    public function getUseDnInMailBody()
    {
        return (!$this->useDnInMailBody) ?: $this->useDnInMailBody->value();
    }
}
