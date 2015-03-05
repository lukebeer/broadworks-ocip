<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServicePreferredCarrier; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserPreferredCarrierNameModify;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Modifies the currently configured preferred carriers for a user.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class UserPreferredCarrierUserModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $userId,
             $intraLataCarrier=null,
             $interLataCarrier=null,
             $internationalCarrier=null
    ) {
        $this->userId               = new UserId($userId);
        $this->intraLataCarrier     = $intraLataCarrier;
        $this->interLataCarrier     = $interLataCarrier;
        $this->internationalCarrier = $internationalCarrier;
        $this->args                 = func_get_args();
    }

    public function setUserId($userId)
    {
        $userId and $this->userId = new UserId($userId);
    }

    public function getUserId()
    {
        return (!$this->userId) ?: $this->userId->value();
    }

    public function setIntraLataCarrier($intraLataCarrier)
    {
        $intraLataCarrier and $this->intraLataCarrier = new UserPreferredCarrierNameModify($intraLataCarrier);
    }

    public function getIntraLataCarrier()
    {
        return (!$this->intraLataCarrier) ?: $this->intraLataCarrier->value();
    }

    public function setInterLataCarrier($interLataCarrier)
    {
        $interLataCarrier and $this->interLataCarrier = new UserPreferredCarrierNameModify($interLataCarrier);
    }

    public function getInterLataCarrier()
    {
        return (!$this->interLataCarrier) ?: $this->interLataCarrier->value();
    }

    public function setInternationalCarrier($internationalCarrier)
    {
        $internationalCarrier and $this->internationalCarrier = new UserPreferredCarrierNameModify($internationalCarrier);
    }

    public function getInternationalCarrier()
    {
        return (!$this->internationalCarrier) ?: $this->internationalCarrier->value();
    }
}
