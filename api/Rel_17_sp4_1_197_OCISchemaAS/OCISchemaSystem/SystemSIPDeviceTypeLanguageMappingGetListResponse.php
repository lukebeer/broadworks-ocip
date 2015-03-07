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
 * Response to SystemSIPDeviceTypeLanguageMappingGetListRequest.
 *         Contains a table of device type languages mapped to equivalent BroadWorks languages.
 *         The column headings are: "BroadWorks Language", "Device Language".
 */
class SystemSIPDeviceTypeLanguageMappingGetListResponse extends ComplexType implements ComplexInterface
{
    public    $name                      = __CLASS__;
    protected $deviceTypeLanguagesTable  = null;


    public function setDeviceTypeLanguagesTable(core:OCITable $deviceTypeLanguagesTable = null)
    {
    }

    public function getDeviceTypeLanguagesTable()
    {
        return (!$this->deviceTypeLanguagesTable) ?: $this->deviceTypeLanguagesTable->value();
    }
}
