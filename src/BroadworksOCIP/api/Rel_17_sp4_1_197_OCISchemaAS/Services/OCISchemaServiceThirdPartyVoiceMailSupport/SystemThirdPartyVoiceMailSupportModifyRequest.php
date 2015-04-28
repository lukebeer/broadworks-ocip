<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceThirdPartyVoiceMailSupport; 

use BroadworksOCIP\Builder\Types\PrimitiveType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Modify the system level data associated with Third-party Voice Mail Support.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemThirdPartyVoiceMailSupportModifyRequest extends ComplexType implements ComplexInterface
{
    public    $elementName = 'SystemThirdPartyVoiceMailSupportModifyRequest';
    protected $overrideAltCallerIdForVMRetrieval;

    public function __construct(
         $overrideAltCallerIdForVMRetrieval = null
    ) {
        $this->setOverrideAltCallerIdForVMRetrieval($overrideAltCallerIdForVMRetrieval);
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
    public function setOverrideAltCallerIdForVMRetrieval($overrideAltCallerIdForVMRetrieval = null)
    {
        $this->overrideAltCallerIdForVMRetrieval = new PrimitiveType($overrideAltCallerIdForVMRetrieval);
        $this->overrideAltCallerIdForVMRetrieval->setElementName('overrideAltCallerIdForVMRetrieval');
        return $this;
    }

    /**
     * 
     * @return boolean $overrideAltCallerIdForVMRetrieval
     */
    public function getOverrideAltCallerIdForVMRetrieval()
    {
        return ($this->overrideAltCallerIdForVMRetrieval)
            ? $this->overrideAltCallerIdForVMRetrieval->getElementValue()
            : null;
    }
}
