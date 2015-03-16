<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SIPFailureStatusCode;
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
    public    $name = 'SystemTreatmentMappingAccessSIPStatusDeleteRequest';
    protected $sipStatusCode;

    public function __construct(
         $sipStatusCode = ''
    ) {
        $this->setSipStatusCode($sipStatusCode);
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
    public function setSipStatusCode($sipStatusCode = null)
    {
        $this->sipStatusCode = ($sipStatusCode InstanceOf SIPFailureStatusCode)
             ? $sipStatusCode
             : new SIPFailureStatusCode($sipStatusCode);
        $this->sipStatusCode->setName('sipStatusCode');
        return $this;
    }

    /**
     * 
     * @return SIPFailureStatusCode $sipStatusCode
     */
    public function getSipStatusCode()
    {
        return ($this->sipStatusCode) ? $this->sipStatusCode->getValue() : null;
    }
}
