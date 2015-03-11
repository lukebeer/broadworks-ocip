<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallNotify; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\EmailAddress;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to SystemCallNotifyGetRequest.
 */
class SystemCallNotifyGetResponse extends ComplexType implements ComplexInterface
{
    public    $name                = 'SystemCallNotifyGetResponse';
    protected $defaultFromAddress  = null;
    protected $useShortSubjectLine = null;
    protected $useDnInMailBody     = null;

    /**
     * @return SystemCallNotifyGetResponse
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setDefaultFromAddress($defaultFromAddress = null)
    {
        if (!$defaultFromAddress) return $this;
        $this->defaultFromAddress = ($defaultFromAddress InstanceOf EmailAddress)
             ? $defaultFromAddress
             : new EmailAddress($defaultFromAddress);
        $this->defaultFromAddress->setName('defaultFromAddress');
        return $this;
    }

    /**
     * 
     * @return EmailAddress
     */
    public function getDefaultFromAddress()
    {
        return $this->defaultFromAddress->getValue();
    }

    /**
     * 
     */
    public function setUseShortSubjectLine($useShortSubjectLine = null)
    {
        if (!$useShortSubjectLine) return $this;
        $this->useShortSubjectLine = new PrimitiveType($useShortSubjectLine);
        $this->useShortSubjectLine->setName('useShortSubjectLine');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getUseShortSubjectLine()
    {
        return $this->useShortSubjectLine->getValue();
    }

    /**
     * 
     */
    public function setUseDnInMailBody($useDnInMailBody = null)
    {
        if (!$useDnInMailBody) return $this;
        $this->useDnInMailBody = new PrimitiveType($useDnInMailBody);
        $this->useDnInMailBody->setName('useDnInMailBody');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getUseDnInMailBody()
    {
        return $this->useDnInMailBody->getValue();
    }
}
