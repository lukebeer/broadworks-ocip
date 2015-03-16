<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCommunicator; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\URL;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to UserBroadWorksCommunicatorGetRequest.
 */
class UserBroadWorksCommunicatorGetResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'UserBroadWorksCommunicatorGetResponse';
    protected $configurationServerURL;

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCommunicator\UserBroadWorksCommunicatorGetResponse $response
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
