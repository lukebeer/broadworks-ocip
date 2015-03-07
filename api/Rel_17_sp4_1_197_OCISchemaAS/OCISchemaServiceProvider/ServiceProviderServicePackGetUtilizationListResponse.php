<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceProvider; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServicePackName;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to ServiceProviderServicePackGetUtilizationListRequest.
 *         For each service pack, a table of groups utilizing the pack is returned.
 *         The utilization table column headings are "Group", "Total Packs" and "Assigned".
 */
class ServiceProviderServicePackGetUtilizationListResponse extends ComplexType implements ComplexInterface
{
    public    $name                     = __CLASS__;
    protected $servicePackName          = null;
    protected $serviceUtilizationTable  = null;


    public function setServicePackName($servicePackName = null)
    {
        $this->servicePackName = ($servicePackName InstanceOf ServicePackName)
             ? $servicePackName
             : new ServicePackName($servicePackName);
    }

    public function getServicePackName()
    {
        return (!$this->servicePackName) ?: $this->servicePackName->value();
    }

    public function setServiceUtilizationTable(core:OCITable $serviceUtilizationTable = null)
    {
    }

    public function getServiceUtilizationTable()
    {
        return (!$this->serviceUtilizationTable) ?: $this->serviceUtilizationTable->value();
    }
}
