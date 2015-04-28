<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceDualModeVCC; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceDualModeVCC\DualModeVCCSubscriberUserName;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Response to UserDualModeVCCGetRequest
 */
class UserDualModeVCCGetResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'UserDualModeVCCGetResponse';
    protected $subscriberUserName;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceDualModeVCC\UserDualModeVCCGetResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setSubscriberUserName($subscriberUserName = null)
    {
        $this->subscriberUserName = ($subscriberUserName InstanceOf DualModeVCCSubscriberUserName)
             ? $subscriberUserName
             : new DualModeVCCSubscriberUserName($subscriberUserName);
        $this->subscriberUserName->setElementName('subscriberUserName');
        return $this;
    }

    /**
     * 
     * @return DualModeVCCSubscriberUserName $subscriberUserName
     */
    public function getSubscriberUserName()
    {
        return ($this->subscriberUserName)
            ? $this->subscriberUserName->getElementValue()
            : null;
    }
}
