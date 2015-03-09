<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SIPFailureStatusCode;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SystemTreatmentMappingAccessSIPStatusDeleteResponse;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Delete an Access SIP Status Code mapping.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemTreatmentMappingAccessSIPStatusDeleteRequest extends ComplexType implements ComplexInterface
{
    public    $name          = __CLASS__;
    protected $sipStatusCode = null;

    public function __construct(
         $sipStatusCode
    ) {
        $this->setSipStatusCode($sipStatusCode);
    }

    /**
     * @return SystemTreatmentMappingAccessSIPStatusDeleteResponse
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * The possible range values for SIP failure status codes.
     */
    public function setSipStatusCode($sipStatusCode = null)
    {
        $this->sipStatusCode = ($sipStatusCode InstanceOf SIPFailureStatusCode)
             ? $sipStatusCode
             : new SIPFailureStatusCode($sipStatusCode);
    }

    /**
     * The possible range values for SIP failure status codes.
     */
    public function getSipStatusCode()
    {
        return (!$this->sipStatusCode) ?: $this->sipStatusCode->getValue();
    }
}
