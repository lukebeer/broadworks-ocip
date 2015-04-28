<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CommunicationBarringProfileName;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Get the list of Network Classes of Service that contain a specific
 *         Communication Barring Profile.
 *         The response is either a SystemNetworkClassOfServiceGetCommunicationBarringProfileUsageListResponse
 *         or an ErrorResponse.
 */
class SystemNetworkClassOfServiceGetCommunicationBarringProfileUsageListRequest extends ComplexType implements ComplexInterface
{
    public    $responseType = 'BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SystemNetworkClassOfServiceGetCommunicationBarringProfileUsageListResponse';
    public    $elementName = 'SystemNetworkClassOfServiceGetCommunicationBarringProfileUsageListRequest';
    protected $name;

    public function __construct(
         $name = ''
    ) {
        $this->setName($name);
    }

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SystemNetworkClassOfServiceGetCommunicationBarringProfileUsageListResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setName($name = null)
    {
        $this->name = ($name InstanceOf CommunicationBarringProfileName)
             ? $name
             : new CommunicationBarringProfileName($name);
        $this->name->setElementName('name');
        return $this;
    }

    /**
     * 
     * @return CommunicationBarringProfileName $name
     */
    public function getName()
    {
        return ($this->name)
            ? $this->name->getElementValue()
            : null;
    }
}
