<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceRoutePoint; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Modify the setting that are configured for all the DNIS in a Route Point.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class GroupRoutePointModifyDNISParametersRequest extends ComplexType implements ComplexInterface
{
    public    $name              = __CLASS__;
    protected $serviceUserId     = null;
    protected $displayDNISNumber = null;
    protected $displayDNISName   = null;

    public function __construct(
         $serviceUserId,
         $displayDNISNumber = null,
         $displayDNISName = null
    ) {
        $this->setServiceUserId($serviceUserId);
        $this->setDisplayDNISNumber($displayDNISNumber);
        $this->setDisplayDNISName($displayDNISName);
    }

    /**
     * A user id consists of a user-portion optionally followed by an @ sign and a domain name.
     *         If the domain is not specified, it is assumed to be the system default domain.
     *         The domain is required when adding normal users and virtual users, i.e. Auto Attendants,
     *         Hunt Groups, Call Centers....
     *         The domain must not be specified for system-level and service-provider-level administrators.
     */
    public function setServiceUserId($serviceUserId = null)
    {
        $this->serviceUserId = ($serviceUserId InstanceOf UserId)
             ? $serviceUserId
             : new UserId($serviceUserId);
    }

    /**
     * A user id consists of a user-portion optionally followed by an @ sign and a domain name.
     *         If the domain is not specified, it is assumed to be the system default domain.
     *         The domain is required when adding normal users and virtual users, i.e. Auto Attendants,
     *         Hunt Groups, Call Centers....
     *         The domain must not be specified for system-level and service-provider-level administrators.
     */
    public function getServiceUserId()
    {
        return (!$this->serviceUserId) ?: $this->serviceUserId->getValue();
    }

    /**
     * 
     */
    public function setDisplayDNISNumber($displayDNISNumber = null)
    {
        $this->displayDNISNumber = (boolean) $displayDNISNumber;
    }

    /**
     * 
     */
    public function getDisplayDNISNumber()
    {
        return (!$this->displayDNISNumber) ?: $this->displayDNISNumber->getValue();
    }

    /**
     * 
     */
    public function setDisplayDNISName($displayDNISName = null)
    {
        $this->displayDNISName = (boolean) $displayDNISName;
    }

    /**
     * 
     */
    public function getDisplayDNISName()
    {
        return (!$this->displayDNISName) ?: $this->displayDNISName->getValue();
    }
}
