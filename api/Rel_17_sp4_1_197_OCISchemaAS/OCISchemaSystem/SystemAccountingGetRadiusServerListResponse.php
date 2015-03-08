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
     * Response to SystemAccountingGetRadiusServerListRequest. The Radius Server table
 *         column headings are: "Net Address", "Port", "Description"
 */
class SystemAccountingGetRadiusServerListResponse extends ComplexType implements ComplexInterface
{
    const     RESPONSE_TYPE      = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SystemAccountingGetRadiusServerListResponse';
    public    $name              = __CLASS__;
    protected $radiusServerTable = null;


    /**
     * 
     */
    public function setRadiusServerTable(core:OCITable $radiusServerTable = null)
    {
        $this->radiusServerTable = core:OCITable $radiusServerTable;
    }

    /**
     * 
     */
    public function getRadiusServerTable()
    {
        return (!$this->radiusServerTable) ?: $this->radiusServerTable->getValue();
    }
}