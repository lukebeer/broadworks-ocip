<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaUser; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\PublicUserIdentity;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Dispatches a Public Identity refresh task on the local Application Server node for the specified public identity.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class UserShInterfacePublicIdentityRefreshTaskStartRequest extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             PublicUserIdentity $publicUserIdentity
    ) {
        $this->publicUserIdentity = $publicUserIdentity;
        $this->args               = func_get_args();
    }

    public function setPublicUserIdentity($publicUserIdentity)
    {
        $publicUserIdentity and $this->publicUserIdentity = new PublicUserIdentity($publicUserIdentity);
    }

    public function getPublicUserIdentity()
    {
        return (!$this->publicUserIdentity) ?: $this->publicUserIdentity->value();
    }
}
