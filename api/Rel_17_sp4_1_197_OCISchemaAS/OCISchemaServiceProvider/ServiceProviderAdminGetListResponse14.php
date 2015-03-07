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
 * Response to ServiceProviderAdminGetListRequest14.
 *         Contains a 5 column table with column headings "Administrator ID",
 *         "Last Name", "First Name", "Administrator Type", "Language".
 */
class ServiceProviderAdminGetListResponse14 extends ComplexType implements ComplexInterface
{
    public    $name                       = __CLASS__;
    protected $serviceProviderAdminTable  = null;


    public function setServiceProviderAdminTable(core:OCITable $serviceProviderAdminTable = null)
    {
    }

    public function getServiceProviderAdminTable()
    {
        return (!$this->serviceProviderAdminTable) ?: $this->serviceProviderAdminTable->value();
    }
}
