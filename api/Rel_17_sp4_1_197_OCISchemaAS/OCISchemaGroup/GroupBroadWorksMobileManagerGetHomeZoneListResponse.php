<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaGroup; 


use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Response to the GroupBroadWorksMobileManagerGetHomeZoneListRequest.
 *         Contains a table with column headings: 
 *         "Home Zone Id", "Domain Name", "Mobile Country Code",
 *         "Mobile Network Code", "Local Area Code" and "Cell Identity".
 */
class GroupBroadWorksMobileManagerGetHomeZoneListResponse extends ComplexType implements ComplexInterface
{
    const     RESPONSE_TYPE   = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaGroup\GroupBroadWorksMobileManagerGetHomeZoneListResponse';
    public    $name           = __CLASS__;
    protected $homeZonesTable = null;


    /**
     * 
     */
    public function setHomeZonesTable(core:OCITable $homeZonesTable = null)
    {
        $this->homeZonesTable = core:OCITable $homeZonesTable;
    }

    /**
     * 
     */
    public function getHomeZonesTable()
    {
        return (!$this->homeZonesTable) ?: $this->homeZonesTable->getValue();
    }
}
