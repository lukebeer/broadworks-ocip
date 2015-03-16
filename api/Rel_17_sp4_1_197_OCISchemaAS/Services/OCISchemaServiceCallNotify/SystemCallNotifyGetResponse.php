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
    public    $name = 'SystemCallNotifyGetResponse';
    protected $defaultFromAddress;
    protected $useShortSubjectLine;
    protected $useDnInMailBody;

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallNotify\SystemCallNotifyGetResponse $response
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
        $this->defaultFromAddress = ($defaultFromAddress InstanceOf EmailAddress)
             ? $defaultFromAddress
             : new EmailAddress($defaultFromAddress);
        $this->defaultFromAddress->setName('defaultFromAddress');
        return $this;
    }

    /**
     * 
     * @return EmailAddress $defaultFromAddress
     */
    public function getDefaultFromAddress()
    {
        return ($this->defaultFromAddress) ? $this->defaultFromAddress->getValue() : null;
    }

    /**
     * 
     */
    public function setUseShortSubjectLine($useShortSubjectLine = null)
    {
        $this->useShortSubjectLine = new PrimitiveType($useShortSubjectLine);
        $this->useShortSubjectLine->setName('useShortSubjectLine');
        return $this;
    }

    /**
     * 
     * @return boolean $useShortSubjectLine
     */
    public function getUseShortSubjectLine()
    {
        return ($this->useShortSubjectLine) ? $this->useShortSubjectLine->getValue() : null;
    }

    /**
     * 
     */
    public function setUseDnInMailBody($useDnInMailBody = null)
    {
        $this->useDnInMailBody = new PrimitiveType($useDnInMailBody);
        $this->useDnInMailBody->setName('useDnInMailBody');
        return $this;
    }

    /**
     * 
     * @return boolean $useDnInMailBody
     */
    public function getUseDnInMailBody()
    {
        return ($this->useDnInMailBody) ? $this->useDnInMailBody->getValue() : null;
    }
}
