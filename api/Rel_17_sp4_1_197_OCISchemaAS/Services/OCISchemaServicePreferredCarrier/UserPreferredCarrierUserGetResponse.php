<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServicePreferredCarrier; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserPreferredCarrierName;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to a UserPreferredCarrierUserGetRequest.
 */
class UserPreferredCarrierUserGetResponse extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $intraLataCarrier,
             $interLataCarrier,
             $internationalCarrier
    ) {
        $this->intraLataCarrier     = $intraLataCarrier;
        $this->interLataCarrier     = $interLataCarrier;
        $this->internationalCarrier = $internationalCarrier;
        $this->args                 = func_get_args();
    }

    public function setIntraLataCarrier($intraLataCarrier)
    {
        $intraLataCarrier and $this->intraLataCarrier = new UserPreferredCarrierName($intraLataCarrier);
    }

    public function getIntraLataCarrier()
    {
        return (!$this->intraLataCarrier) ?: $this->intraLataCarrier->value();
    }

    public function setInterLataCarrier($interLataCarrier)
    {
        $interLataCarrier and $this->interLataCarrier = new UserPreferredCarrierName($interLataCarrier);
    }

    public function getInterLataCarrier()
    {
        return (!$this->interLataCarrier) ?: $this->interLataCarrier->value();
    }

    public function setInternationalCarrier($internationalCarrier)
    {
        $internationalCarrier and $this->internationalCarrier = new UserPreferredCarrierName($internationalCarrier);
    }

    public function getInternationalCarrier()
    {
        return (!$this->internationalCarrier) ?: $this->internationalCarrier->value();
    }
}
