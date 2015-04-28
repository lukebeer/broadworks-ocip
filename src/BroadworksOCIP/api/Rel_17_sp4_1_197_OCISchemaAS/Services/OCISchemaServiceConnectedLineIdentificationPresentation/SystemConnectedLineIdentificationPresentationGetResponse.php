<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceConnectedLineIdentificationPresentation; 

use BroadworksOCIP\Builder\Types\PrimitiveType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Response to SystemConnectedLineIdentificationPresentationGetRequest.
 */
class SystemConnectedLineIdentificationPresentationGetResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'SystemConnectedLineIdentificationPresentationGetResponse';
    protected $enforceUserServiceAssignment;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceConnectedLineIdentificationPresentation\SystemConnectedLineIdentificationPresentationGetResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setEnforceUserServiceAssignment($enforceUserServiceAssignment = null)
    {
        $this->enforceUserServiceAssignment = new PrimitiveType($enforceUserServiceAssignment);
        $this->enforceUserServiceAssignment->setElementName('enforceUserServiceAssignment');
        return $this;
    }

    /**
     * 
     * @return boolean $enforceUserServiceAssignment
     */
    public function getEnforceUserServiceAssignment()
    {
        return ($this->enforceUserServiceAssignment)
            ? $this->enforceUserServiceAssignment->getElementValue()
            : null;
    }
}
