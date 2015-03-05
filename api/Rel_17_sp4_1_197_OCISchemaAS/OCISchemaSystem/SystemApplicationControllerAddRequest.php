<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ApplicationControllerName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ChannelSetId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Add an application controller, which is a server where remote 
 *       application resides and controls the Route Point.
 *       The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemApplicationControllerAddRequest extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $name,
             $subscriberId,
             $channelSetId
    ) {
        $this->name         = $name;
        $this->subscriberId = new UserId($subscriberId);
        $this->channelSetId = $channelSetId;
        $this->args         = func_get_args();
    }

    public function setName($name)
    {
        $name and $this->name = new ApplicationControllerName($name);
    }

    public function getName()
    {
        return (!$this->name) ?: $this->name->value();
    }

    public function setSubscriberId($subscriberId)
    {
        $subscriberId and $this->subscriberId = new UserId($subscriberId);
    }

    public function getSubscriberId()
    {
        return (!$this->subscriberId) ?: $this->subscriberId->value();
    }

    public function setChannelSetId($channelSetId)
    {
        $channelSetId and $this->channelSetId = new ChannelSetId($channelSetId);
    }

    public function getChannelSetId()
    {
        return (!$this->channelSetId) ?: $this->channelSetId->value();
    }
}
