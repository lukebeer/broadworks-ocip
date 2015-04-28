<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SIPFailureStatusCode;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Delete an Access SIP Status Code mapping.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemTreatmentMappingAccessSIPStatusDeleteRequest extends ComplexType implements ComplexInterface
{
    public    $elementName = 'SystemTreatmentMappingAccessSIPStatusDeleteRequest';
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
        $this->sipStatusCode->setElementName('sipStatusCode');
        return $this;
    }

    /**
     * 
     * @return SIPFailureStatusCode $sipStatusCode
     */
    public function getSipStatusCode()
    {
        return ($this->sipStatusCode)
            ? $this->sipStatusCode->getElementValue()
            : null;
    }
}
