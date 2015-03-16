<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallMeNow; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallMeNow\CallMeNowPasscodeTimeoutSeconds;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallMeNow\CallMeNowPasscodeLength;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to SystemCallMeNowGetRequest.
 */
class SystemCallMeNowGetResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'SystemCallMeNowGetResponse';
    protected $passcodeLength;
    protected $passcodeTimeoutSeconds;

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallMeNow\SystemCallMeNowGetResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setPasscodeLength($passcodeLength = null)
    {
        $this->passcodeLength = ($passcodeLength InstanceOf CallMeNowPasscodeLength)
             ? $passcodeLength
             : new CallMeNowPasscodeLength($passcodeLength);
        $this->passcodeLength->setElementName('passcodeLength');
        return $this;
    }

    /**
     * 
     * @return CallMeNowPasscodeLength $passcodeLength
     */
    public function getPasscodeLength()
    {
        return ($this->passcodeLength)
            ? $this->passcodeLength->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setPasscodeTimeoutSeconds($passcodeTimeoutSeconds = null)
    {
        $this->passcodeTimeoutSeconds = ($passcodeTimeoutSeconds InstanceOf CallMeNowPasscodeTimeoutSeconds)
             ? $passcodeTimeoutSeconds
             : new CallMeNowPasscodeTimeoutSeconds($passcodeTimeoutSeconds);
        $this->passcodeTimeoutSeconds->setElementName('passcodeTimeoutSeconds');
        return $this;
    }

    /**
     * 
     * @return CallMeNowPasscodeTimeoutSeconds $passcodeTimeoutSeconds
     */
    public function getPasscodeTimeoutSeconds()
    {
        return ($this->passcodeTimeoutSeconds)
            ? $this->passcodeTimeoutSeconds->getElementValue()
            : null;
    }
}
