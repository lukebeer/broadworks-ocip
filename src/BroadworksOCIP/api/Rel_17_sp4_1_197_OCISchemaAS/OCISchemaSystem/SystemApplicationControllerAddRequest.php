<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\ApplicationControllerName;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\ChannelSetId;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Add an application controller, which is a server where remote 
 *       application resides and controls the Route Point.
 *       The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemApplicationControllerAddRequest extends ComplexType implements ComplexInterface
{
    public    $elementName = 'SystemApplicationControllerAddRequest';
    protected $name;
    protected $subscriberId;
    protected $channelSetId;

    public function __construct(
         $name = '',
         $subscriberId = '',
         $channelSetId = ''
    ) {
        $this->setName($name);
        $this->setSubscriberId($subscriberId);
        $this->setChannelSetId($channelSetId);
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
    public function setName($name = null)
    {
        $this->name = ($name InstanceOf ApplicationControllerName)
             ? $name
             : new ApplicationControllerName($name);
        $this->name->setElementName('name');
        return $this;
    }

    /**
     * 
     * @return ApplicationControllerName $name
     */
    public function getName()
    {
        return ($this->name)
            ? $this->name->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setSubscriberId($subscriberId = null)
    {
        $this->subscriberId = ($subscriberId InstanceOf UserId)
             ? $subscriberId
             : new UserId($subscriberId);
        $this->subscriberId->setElementName('subscriberId');
        return $this;
    }

    /**
     * 
     * @return UserId $subscriberId
     */
    public function getSubscriberId()
    {
        return ($this->subscriberId)
            ? $this->subscriberId->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setChannelSetId($channelSetId = null)
    {
        $this->channelSetId = ($channelSetId InstanceOf ChannelSetId)
             ? $channelSetId
             : new ChannelSetId($channelSetId);
        $this->channelSetId->setElementName('channelSetId');
        return $this;
    }

    /**
     * 
     * @return ChannelSetId $channelSetId
     */
    public function getChannelSetId()
    {
        return ($this->channelSetId)
            ? $this->channelSetId->getElementValue()
            : null;
    }
}
