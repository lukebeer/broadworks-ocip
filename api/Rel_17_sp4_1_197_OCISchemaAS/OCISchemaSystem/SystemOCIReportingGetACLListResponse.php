<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\core:OCITable;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to SystemOCIReportingACLListGetRequest.
 *         Contains a table with one row per access control list entry.
 *         The table columns are "Net Address", "Description" and "Restrict Messages".
 */
class SystemOCIReportingGetACLListResponse extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $ociReportingACLTable
    ) {
        $this->ociReportingACLTable = $ociReportingACLTable;
        $this->args                 = func_get_args();
    }

    public function setOciReportingACLTable($ociReportingACLTable)
    {
        $ociReportingACLTable and $this->ociReportingACLTable = new core:OCITable($ociReportingACLTable);
    }

    public function getOciReportingACLTable()
    {
        return (!$this->ociReportingACLTable) ?: $this->ociReportingACLTable->value();
    }
}
