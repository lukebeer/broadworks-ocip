<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceCallNotify; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\EmailAddress;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Response to SystemCallNotifyGetRequest.
 */
class SystemCallNotifyGetResponse extends ComplexType implements ComplexInterface
{
    const     RESPONSE_TYPE        = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceCallNotify\SystemCallNotifyGetResponse';
    public    $name                = __CLASS__;
    protected $defaultFromAddress  = null;
    protected $useShortSubjectLine = null;
    protected $useDnInMailBody     = null;


    /**
     * Email Address
     */
    public function setDefaultFromAddress($defaultFromAddress = null)
    {
        $this->defaultFromAddress = ($defaultFromAddress InstanceOf EmailAddress)
             ? $defaultFromAddress
             : new EmailAddress($defaultFromAddress);
    }

    /**
     * Email Address
     */
    public function getDefaultFromAddress()
    {
        return (!$this->defaultFromAddress) ?: $this->defaultFromAddress->getValue();
    }

    /**
     * 
     */
    public function setUseShortSubjectLine($useShortSubjectLine = null)
    {
        $this->useShortSubjectLine = (boolean) $useShortSubjectLine;
    }

    /**
     * 
     */
    public function getUseShortSubjectLine()
    {
        return (!$this->useShortSubjectLine) ?: $this->useShortSubjectLine->getValue();
    }

    /**
     * 
     */
    public function setUseDnInMailBody($useDnInMailBody = null)
    {
        $this->useDnInMailBody = (boolean) $useDnInMailBody;
    }

    /**
     * 
     */
    public function getUseDnInMailBody()
    {
        return (!$this->useDnInMailBody) ?: $this->useDnInMailBody->getValue();
    }
}
