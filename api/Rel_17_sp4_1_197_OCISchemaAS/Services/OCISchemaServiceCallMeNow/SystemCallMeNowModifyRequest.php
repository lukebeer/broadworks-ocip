<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceCallMeNow; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallMeNow\CallMeNowPasscodeTimeoutSeconds;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallMeNow\CallMeNowPasscodeLength;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceCallMeNow\SystemCallMeNowModifyResponse;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Modify the system level data associated with Call me now service.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemCallMeNowModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name                   = __CLASS__;
    protected $passcodeLength         = null;
    protected $passcodeTimeoutSeconds = null;

    public function __construct(
         $passcodeLength = null,
         $passcodeTimeoutSeconds = null
    ) {
        $this->setPasscodeLength($passcodeLength);
        $this->setPasscodeTimeoutSeconds($passcodeTimeoutSeconds);
    }

    /**
     * @return SystemCallMeNowModifyResponse
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * Maximum number of characters for Call Me Now passcode.
     */
    public function setPasscodeLength($passcodeLength = null)
    {
        $this->passcodeLength = ($passcodeLength InstanceOf CallMeNowPasscodeLength)
             ? $passcodeLength
             : new CallMeNowPasscodeLength($passcodeLength);
    }

    /**
     * Maximum number of characters for Call Me Now passcode.
     */
    public function getPasscodeLength()
    {
        return (!$this->passcodeLength) ?: $this->passcodeLength->getValue();
    }

    /**
     * Timeout in seconds for call me now passcode validation.
     */
    public function setPasscodeTimeoutSeconds($passcodeTimeoutSeconds = null)
    {
        $this->passcodeTimeoutSeconds = ($passcodeTimeoutSeconds InstanceOf CallMeNowPasscodeTimeoutSeconds)
             ? $passcodeTimeoutSeconds
             : new CallMeNowPasscodeTimeoutSeconds($passcodeTimeoutSeconds);
    }

    /**
     * Timeout in seconds for call me now passcode validation.
     */
    public function getPasscodeTimeoutSeconds()
    {
        return (!$this->passcodeTimeoutSeconds) ?: $this->passcodeTimeoutSeconds->getValue();
    }
}
