<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 


use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Response to SystemAccessDeviceTypeGetEnhancedConfigurableListRequest.
 *         Contains a table with columns: "Access Device Type", "Enhanced Configuration Type", "Supports Reset".
 *         The "Enhanced Configuration Type" column contains one of the AccessDeviceEnhancedConfigurationType14
 *         enumerated values.
 *         The "Supports Reset" column is a boolean flag indicating the device can be remotely reset.
 */
class SystemAccessDeviceTypeGetEnhancedConfigurableListResponse extends ComplexType implements ComplexInterface
{
    const     RESPONSE_TYPE    = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SystemAccessDeviceTypeGetEnhancedConfigurableListResponse';
    public    $name            = __CLASS__;
    protected $deviceTypeTable = null;


    /**
     * 
     */
    public function setDeviceTypeTable(core:OCITable $deviceTypeTable = null)
    {
        $this->deviceTypeTable = core:OCITable $deviceTypeTable;
    }

    /**
     * 
     */
    public function getDeviceTypeTable()
    {
        return (!$this->deviceTypeTable) ?: $this->deviceTypeTable->getValue();
    }
}
