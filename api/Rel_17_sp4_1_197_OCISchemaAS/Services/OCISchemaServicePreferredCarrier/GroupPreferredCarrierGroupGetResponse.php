<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServicePreferredCarrier; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServicePreferredCarrier\GroupPreferredCarrierName;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to a GroupPreferredCarrierGroupGetRequest.
 */
class GroupPreferredCarrierGroupGetResponse extends ComplexType implements ComplexInterface
{
    public    $name                  = __CLASS__;
    protected $intraLataCarrier      = null;
    protected $interLataCarrier      = null;
    protected $internationalCarrier  = null;


    public function setIntraLataCarrier(GroupPreferredCarrierName $intraLataCarrier = null)
    {
    }

    public function getIntraLataCarrier()
    {
        return (!$this->intraLataCarrier) ?: $this->intraLataCarrier->value();
    }

    public function setInterLataCarrier(GroupPreferredCarrierName $interLataCarrier = null)
    {
    }

    public function getInterLataCarrier()
    {
        return (!$this->interLataCarrier) ?: $this->interLataCarrier->value();
    }

    public function setInternationalCarrier(GroupPreferredCarrierName $internationalCarrier = null)
    {
    }

    public function getInternationalCarrier()
    {
        return (!$this->internationalCarrier) ?: $this->internationalCarrier->value();
    }
}
