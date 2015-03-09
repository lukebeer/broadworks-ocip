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
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SystemApplicationControllerAddResponse;
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
    public    $name         = __CLASS__;
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
     * @return SystemApplicationControllerAddResponse
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * The application controller name.
     */
    public function setName($name = null)
    {
        $this->name = ($name InstanceOf ApplicationControllerName)
             ? $name
             : new ApplicationControllerName($name);
    }

    /**
     * The application controller name.
     */
    public function getName()
    {
        return (!$this->name) ?: $this->name->getValue();
    }

    /**
     * A user id consists of a user-portion optionally followed by an @ sign and a domain name.
     *         If the domain is not specified, it is assumed to be the system default domain.
     *         The domain is required when adding normal users and virtual users, i.e. Auto Attendants,
     *         Hunt Groups, Call Centers....
     *         The domain must not be specified for system-level and service-provider-level administrators.
     */
    public function setSubscriberId($subscriberId = null)
    {
        $this->subscriberId = ($subscriberId InstanceOf UserId)
             ? $subscriberId
             : new UserId($subscriberId);
    }

    /**
     * A user id consists of a user-portion optionally followed by an @ sign and a domain name.
     *         If the domain is not specified, it is assumed to be the system default domain.
     *         The domain is required when adding normal users and virtual users, i.e. Auto Attendants,
     *         Hunt Groups, Call Centers....
     *         The domain must not be specified for system-level and service-provider-level administrators.
     */
    public function getSubscriberId()
    {
        return (!$this->subscriberId) ?: $this->subscriberId->getValue();
    }

    /**
     * The channel set id.
     */
    public function setChannelSetId($channelSetId = null)
    {
        $this->channelSetId = ($channelSetId InstanceOf ChannelSetId)
             ? $channelSetId
             : new ChannelSetId($channelSetId);
    }

    /**
     * The channel set id.
     */
    public function getChannelSetId()
    {
        return (!$this->channelSetId) ?: $this->channelSetId->getValue();
    }
}
