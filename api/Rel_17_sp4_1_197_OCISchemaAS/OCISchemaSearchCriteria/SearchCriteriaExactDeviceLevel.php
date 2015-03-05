<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\AccessDeviceLevel;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Criteria for searching for a particular device level.
 */
class SearchCriteriaExactDeviceLevel extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $deviceLevel
    ) {
        $this->deviceLevel = new AccessDeviceLevel($deviceLevel);
        $this->args        = func_get_args();
    }

    public function setDeviceLevel($deviceLevel)
    {
        $deviceLevel and $this->deviceLevel = new AccessDeviceLevel($deviceLevel);
    }

    public function getDeviceLevel()
    {
        return (!$this->deviceLevel) ?: $this->deviceLevel->value();
    }
}
