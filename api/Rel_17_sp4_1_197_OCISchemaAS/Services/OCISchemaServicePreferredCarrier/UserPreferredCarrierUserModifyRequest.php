<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServicePreferredCarrier; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServicePreferredCarrier\UserPreferredCarrierNameModify;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Modifies the currently configured preferred carriers for a user.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class UserPreferredCarrierUserModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name                 = __CLASS__;
    protected $userId               = null;
    protected $intraLataCarrier     = null;
    protected $interLataCarrier     = null;
    protected $internationalCarrier = null;

    public function __construct(
         $userId,
          $intraLataCarrier = null,
          $interLataCarrier = null,
          $internationalCarrier = null
    ) {
        $this->setUserId($userId);
        $this->setIntraLataCarrier($intraLataCarrier);
        $this->setInterLataCarrier($interLataCarrier);
        $this->setInternationalCarrier($internationalCarrier);
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
     * User can either use it's group's preferred carrier or use it's own.
     *         You can use the group's preferred carrier without clearing the user carrier name --
     *         in this case, the user carrier name is retained.
     */
    public function setIntraLataCarrier(UserPreferredCarrierNameModify $intraLataCarrier = null)
    {
        $this->intraLataCarrier =  $intraLataCarrier;
    }

    /**
     * User can either use it's group's preferred carrier or use it's own.
     *         You can use the group's preferred carrier without clearing the user carrier name --
     *         in this case, the user carrier name is retained.
     */
    public function getIntraLataCarrier()
    {
        return (!$this->intraLataCarrier) ?: $this->intraLataCarrier->getValue();
    }

    /**
     * User can either use it's group's preferred carrier or use it's own.
     *         You can use the group's preferred carrier without clearing the user carrier name --
     *         in this case, the user carrier name is retained.
     */
    public function setInterLataCarrier(UserPreferredCarrierNameModify $interLataCarrier = null)
    {
        $this->interLataCarrier =  $interLataCarrier;
    }

    /**
     * User can either use it's group's preferred carrier or use it's own.
     *         You can use the group's preferred carrier without clearing the user carrier name --
     *         in this case, the user carrier name is retained.
     */
    public function getInterLataCarrier()
    {
        return (!$this->interLataCarrier) ?: $this->interLataCarrier->getValue();
    }

    /**
     * User can either use it's group's preferred carrier or use it's own.
     *         You can use the group's preferred carrier without clearing the user carrier name --
     *         in this case, the user carrier name is retained.
     */
    public function setInternationalCarrier(UserPreferredCarrierNameModify $internationalCarrier = null)
    {
        $this->internationalCarrier =  $internationalCarrier;
    }

    /**
     * User can either use it's group's preferred carrier or use it's own.
     *         You can use the group's preferred carrier without clearing the user carrier name --
     *         in this case, the user carrier name is retained.
     */
    public function getInternationalCarrier()
    {
        return (!$this->internationalCarrier) ?: $this->internationalCarrier->getValue();
    }
}
