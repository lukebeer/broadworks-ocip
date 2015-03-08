<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaUser; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaUser\ReplacementOCICallControlApplicationIdList;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Modify which OCI Call Control Applications are enabled on a user
 *         The response is either SuccessResponse or ErrorResponse.
 */
class UserOCICallControlApplicationModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name              = __CLASS__;
    protected $userId            = null;
    protected $applicationIdList = null;

    public function __construct(
         $userId,
         ReplacementOCICallControlApplicationIdList $applicationIdList = null
    ) {
        $this->setUserId($userId);
        $this->setApplicationIdList($applicationIdList);
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
     * A list of applicationIds that replaces a previously configured list.
     *         By convention, an element of this type may be set nill to clear the list.
     */
    public function setApplicationIdList(ReplacementOCICallControlApplicationIdList $applicationIdList = null)
    {
        $this->applicationIdList = ReplacementOCICallControlApplicationIdList $applicationIdList;
    }

    /**
     * A list of applicationIds that replaces a previously configured list.
     *         By convention, an element of this type may be set nill to clear the list.
     */
    public function getApplicationIdList()
    {
        return (!$this->applicationIdList) ?: $this->applicationIdList->getValue();
    }
}