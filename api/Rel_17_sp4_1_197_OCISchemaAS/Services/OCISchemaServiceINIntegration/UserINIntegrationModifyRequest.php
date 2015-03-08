<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceINIntegration; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\MobilityManagerServiceKey;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Request to modify the user level IN Integration service attributes
 *         Response is either SuccessResponse or ErrorResponse
 */
class UserINIntegrationModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name                  = __CLASS__;
    protected $userId                = null;
    protected $originatingServiceKey = null;
    protected $terminatingServiceKey = null;

    public function __construct(
         $userId,
         $originatingServiceKey = null,
         $terminatingServiceKey = null
    ) {
        $this->setUserId($userId);
        $this->setOriginatingServiceKey($originatingServiceKey);
        $this->setTerminatingServiceKey($terminatingServiceKey);
    }

    /**
     * A user id consists of a user-portion optionally followed by an @ sign and a domain name.
     *         If the domain is not specified, it is assumed to be the system default domain.
     *         The domain is required when adding normal users and virtual users, i.e. Auto Attendants,
     *         Hunt Groups, Call Centers....
     *         The domain must not be specified for system-level and service-provider-level administrators.
     */
    public function setUserId($userId = null)
    {
        $this->userId = ($userId InstanceOf UserId)
             ? $userId
             : new UserId($userId);
    }

    /**
     * A user id consists of a user-portion optionally followed by an @ sign and a domain name.
     *         If the domain is not specified, it is assumed to be the system default domain.
     *         The domain is required when adding normal users and virtual users, i.e. Auto Attendants,
     *         Hunt Groups, Call Centers....
     *         The domain must not be specified for system-level and service-provider-level administrators.
     */
    public function getUserId()
    {
        return (!$this->userId) ?: $this->userId->getValue();
    }

    /**
     * Mobility Manager service key
     */
    public function setOriginatingServiceKey($originatingServiceKey = null)
    {
        $this->originatingServiceKey = ($originatingServiceKey InstanceOf MobilityManagerServiceKey)
             ? $originatingServiceKey
             : new MobilityManagerServiceKey($originatingServiceKey);
    }

    /**
     * Mobility Manager service key
     */
    public function getOriginatingServiceKey()
    {
        return (!$this->originatingServiceKey) ?: $this->originatingServiceKey->getValue();
    }

    /**
     * Mobility Manager service key
     */
    public function setTerminatingServiceKey($terminatingServiceKey = null)
    {
        $this->terminatingServiceKey = ($terminatingServiceKey InstanceOf MobilityManagerServiceKey)
             ? $terminatingServiceKey
             : new MobilityManagerServiceKey($terminatingServiceKey);
    }

    /**
     * Mobility Manager service key
     */
    public function getTerminatingServiceKey()
    {
        return (!$this->terminatingServiceKey) ?: $this->terminatingServiceKey->getValue();
    }
}
