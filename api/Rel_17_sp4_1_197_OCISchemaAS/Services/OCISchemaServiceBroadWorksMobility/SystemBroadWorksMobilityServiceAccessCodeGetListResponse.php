<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceBroadWorksMobility; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\core:OCITable;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to SystemBroadWorksMobilityServiceAccessCodeGetListRequest.
 *         Contains a table with column headings: "Country Code", "Service Access Code", "Description"
 */
class SystemBroadWorksMobilityServiceAccessCodeGetListResponse extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $serviceAccessCodeTable
    ) {
        $this->serviceAccessCodeTable = $serviceAccessCodeTable;
        $this->args                   = func_get_args();
    }

    public function setServiceAccessCodeTable($serviceAccessCodeTable)
    {
        $serviceAccessCodeTable and $this->serviceAccessCodeTable = new core:OCITable($serviceAccessCodeTable);
    }

    public function getServiceAccessCodeTable()
    {
        return (!$this->serviceAccessCodeTable) ?: $this->serviceAccessCodeTable->value();
    }
}
