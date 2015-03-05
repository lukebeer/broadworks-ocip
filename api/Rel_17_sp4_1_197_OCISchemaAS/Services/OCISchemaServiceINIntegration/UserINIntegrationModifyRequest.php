<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceINIntegration; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\MobilityManagerServiceKey;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Request to modify the user level IN Integration service attributes
 *         Response is either SuccessResponse or ErrorResponse
 */
class UserINIntegrationModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $userId,
             $originatingServiceKey=null,
             $terminatingServiceKey=null
    ) {
        $this->userId                = new UserId($userId);
        $this->originatingServiceKey = new MobilityManagerServiceKey($originatingServiceKey);
        $this->terminatingServiceKey = new MobilityManagerServiceKey($terminatingServiceKey);
        $this->args                  = func_get_args();
    }

    public function setUserId($userId)
    {
        $userId and $this->userId = new UserId($userId);
    }

    public function getUserId()
    {
        return (!$this->userId) ?: $this->userId->value();
    }

    public function setOriginatingServiceKey($originatingServiceKey)
    {
        $originatingServiceKey and $this->originatingServiceKey = new MobilityManagerServiceKey($originatingServiceKey);
    }

    public function getOriginatingServiceKey()
    {
        return (!$this->originatingServiceKey) ?: $this->originatingServiceKey->value();
    }

    public function setTerminatingServiceKey($terminatingServiceKey)
    {
        $terminatingServiceKey and $this->terminatingServiceKey = new MobilityManagerServiceKey($terminatingServiceKey);
    }

    public function getTerminatingServiceKey()
    {
        return (!$this->terminatingServiceKey) ?: $this->terminatingServiceKey->value();
    }
}
