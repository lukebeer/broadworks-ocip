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
     * Response to SystemDnGetSummaryListRequest.
 *         The column headings are "Phone Numbers, "Service Provider Id" and "Is Enterprise"
 */
class SystemDnGetSummaryListResponse extends ComplexType implements ComplexInterface
{
    const     RESPONSE_TYPE   = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SystemDnGetSummaryListResponse';
    public    $name           = __CLASS__;
    protected $dnSummaryTable = null;


    /**
     * 
     */
    public function setDnSummaryTable(core:OCITable $dnSummaryTable = null)
    {
        $this->dnSummaryTable = core:OCITable $dnSummaryTable;
    }

    /**
     * 
     */
    public function getDnSummaryTable()
    {
        return (!$this->dnSummaryTable) ?: $this->dnSummaryTable->getValue();
    }
}