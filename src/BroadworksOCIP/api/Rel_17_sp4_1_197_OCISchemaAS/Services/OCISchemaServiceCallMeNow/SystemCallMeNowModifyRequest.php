<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallMeNow; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallMeNow\CallMeNowPasscodeTimeoutSeconds;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallMeNow\CallMeNowPasscodeLength;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Modify the system level data associated with Call me now service.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemCallMeNowModifyRequest extends ComplexType implements ComplexInterface
{
    public    $elementName = 'SystemCallMeNowModifyRequest';
    protected $passcodeLength;
    protected $passcodeTimeoutSeconds;

    public function __construct(
         $passcodeLength = null,
         $passcodeTimeoutSeconds = null
    ) {
        $this->setPasscodeLength($passcodeLength);
        $this->setPasscodeTimeoutSeconds($passcodeTimeoutSeconds);
    }

    /**
     * @return mixed $response
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
