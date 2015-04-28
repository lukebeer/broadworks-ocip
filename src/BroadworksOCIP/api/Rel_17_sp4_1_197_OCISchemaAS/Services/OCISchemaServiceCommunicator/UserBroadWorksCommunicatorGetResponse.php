<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCommunicator; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\URL;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Response to UserBroadWorksCommunicatorGetRequest.
 */
class UserBroadWorksCommunicatorGetResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'UserBroadWorksCommunicatorGetResponse';
    protected $configurationServerURL;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCommunicator\UserBroadWorksCommunicatorGetResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setConfigurationServerURL($configurationServerURL = null)
    {
        $this->configurationServerURL = ($configurationServerURL InstanceOf URL)
             ? $configurationServerURL
             : new URL($configurationServerURL);
        $this->configurationServerURL->setElementName('configurationServerURL');
        return $this;
    }

    /**
     * 
     * @return URL $configurationServerURL
     */
    public function getConfigurationServerURL()
    {
        return ($this->configurationServerURL)
            ? $this->configurationServerURL->getElementValue()
            : null;
    }
}
