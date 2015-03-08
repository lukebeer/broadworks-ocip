<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated16; 


use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Response to SystemZoneCallingRestrictionsZoneGetListRequest. 
 * 	Contains a table of all the zones in the system. The column headings are "Zone Name" , "Physical Location".
 *         Replaced by: SystemZoneGetListResponse
 */
class SystemZoneCallingRestrictionsZoneGetListResponse extends ComplexType implements ComplexInterface
{
    const     RESPONSE_TYPE = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated16\SystemZoneCallingRestrictionsZoneGetListResponse';
    public    $name      = __CLASS__;
    protected $zoneTable = null;


    /**
     * 
     */
    public function setZoneTable(core:OCITable $zoneTable = null)
    {
        $this->zoneTable = core:OCITable $zoneTable;
    }

    /**
     * 
     */
    public function getZoneTable()
    {
        return (!$this->zoneTable) ?: $this->zoneTable->getValue();
    }
}
