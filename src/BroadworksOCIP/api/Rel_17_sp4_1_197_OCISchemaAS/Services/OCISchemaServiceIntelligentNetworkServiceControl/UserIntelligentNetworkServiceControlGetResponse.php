<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceIntelligentNetworkServiceControl; 

use BroadworksOCIP\Builder\Types\PrimitiveType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Response to UserIntelligentNetworkServiceControlGetRequest.
 */
class UserIntelligentNetworkServiceControlGetResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'UserIntelligentNetworkServiceControlGetResponse';
    protected $preAnswerActionsEnabled;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceIntelligentNetworkServiceControl\UserIntelligentNetworkServiceControlGetResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setPreAnswerActionsEnabled($preAnswerActionsEnabled = null)
    {
        $this->preAnswerActionsEnabled = new PrimitiveType($preAnswerActionsEnabled);
        $this->preAnswerActionsEnabled->setElementName('preAnswerActionsEnabled');
        return $this;
    }

    /**
     * 
     * @return boolean $preAnswerActionsEnabled
     */
    public function getPreAnswerActionsEnabled()
    {
        return ($this->preAnswerActionsEnabled)
            ? $this->preAnswerActionsEnabled->getElementValue()
            : null;
    }
}
