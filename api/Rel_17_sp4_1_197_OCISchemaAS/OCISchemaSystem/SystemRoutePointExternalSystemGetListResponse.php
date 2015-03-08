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
     * Response to the SystemRoutePointExternalSystemGetListRequest.
 * 
 *       Contains a table with column headings:
 *       "External System", "Description".
 */
class SystemRoutePointExternalSystemGetListResponse extends ComplexType implements ComplexInterface
{
    const     RESPONSE_TYPE        = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SystemRoutePointExternalSystemGetListResponse';
    public    $name                = __CLASS__;
    protected $externalSystemTable = null;


    /**
     * 
     */
    public function setExternalSystemTable(core:OCITable $externalSystemTable = null)
    {
        $this->externalSystemTable = core:OCITable $externalSystemTable;
    }

    /**
     * 
     */
    public function getExternalSystemTable()
    {
        return (!$this->externalSystemTable) ?: $this->externalSystemTable->getValue();
    }
}
