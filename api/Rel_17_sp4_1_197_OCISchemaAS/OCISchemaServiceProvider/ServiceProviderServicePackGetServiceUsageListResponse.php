<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceProvider; 


use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Response to ServiceProviderServicePackGetServiceUsageListRequest.
 *         The column headings are "Service Pack Name", "Total Packs" and "Allocated to Groups"
 */
class ServiceProviderServicePackGetServiceUsageListResponse extends ComplexType implements ComplexInterface
{
    const     RESPONSE_TYPE      = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceProvider\ServiceProviderServicePackGetServiceUsageListResponse';
    public    $name              = __CLASS__;
    protected $serviceUsageTable = null;


    /**
     * 
     */
    public function setServiceUsageTable(core:OCITable $serviceUsageTable = null)
    {
        $this->serviceUsageTable = core:OCITable $serviceUsageTable;
    }

    /**
     * 
     */
    public function getServiceUsageTable()
    {
        return (!$this->serviceUsageTable) ?: $this->serviceUsageTable->getValue();
    }
}
