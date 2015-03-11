<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\ApplicationControllerName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\ChannelSetId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Add an application controller, which is a server where remote 
 *       application resides and controls the Route Point.
 *       The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemApplicationControllerAddRequest extends ComplexType implements ComplexInterface
{
    public    $name         = 'SystemApplicationControllerAddRequest';
    protected $name         = null;
    protected $subscriberId = null;
    protected $channelSetId = null;

    public function __construct(
         $name,
         $subscriberId,
         $channelSetId
    ) {
        $this->setName($name);
        $this->setSubscriberId($subscriberId);
        $this->setChannelSetId($channelSetId);
    }

    /**
     * @return 
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
        if (!$name) return $this;
        $this->name = ($name InstanceOf ApplicationControllerName)
             ? $name
             : new ApplicationControllerName($name);
        $this->name->setName('name');
        return $this;
    }

    /**
     * 
     * @return ApplicationControllerName
     */
    public function getName()
    {
        return $this->name->getValue();
    }

    /**
     * 
     */
    public function setSubscriberId($subscriberId = null)
    {
        if (!$subscriberId) return $this;
        $this->subscriberId = ($subscriberId InstanceOf UserId)
             ? $subscriberId
             : new UserId($subscriberId);
        $this->subscriberId->setName('subscriberId');
        return $this;
    }

    /**
     * 
     * @return UserId
     */
    public function getSubscriberId()
    {
        return $this->subscriberId->getValue();
    }

    /**
     * 
     */
    public function setChannelSetId($channelSetId = null)
    {
        if (!$channelSetId) return $this;
        $this->channelSetId = ($channelSetId InstanceOf ChannelSetId)
             ? $channelSetId
             : new ChannelSetId($channelSetId);
        $this->channelSetId->setName('channelSetId');
        return $this;
    }

    /**
     * 
     * @return ChannelSetId
     */
    public function getChannelSetId()
    {
        return $this->channelSetId->getValue();
    }
}
