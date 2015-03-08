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
    const     RESPONSE_TYPE = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\SearchCriteriaExactDeviceLevel';
    public    $name        = __CLASS__;
    protected $deviceLevel = null;

    public function __construct(
         $deviceLevel
    ) {
        $this->setDeviceLevel($deviceLevel);
    }

    /**
     * Identifies at which level in the system an identity/device profile is created.
     */
    public function setDeviceLevel($deviceLevel = null)
    {
        $this->deviceLevel = ($deviceLevel InstanceOf AccessDeviceLevel)
             ? $deviceLevel
             : new AccessDeviceLevel($deviceLevel);
    }

    /**
     * Identifies at which level in the system an identity/device profile is created.
     */
    public function getDeviceLevel()
    {
        return (!$this->deviceLevel) ?: $this->deviceLevel->getValue();
    }
}
