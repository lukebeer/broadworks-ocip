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
 * Response to ServiceProviderNetworkClassOfServiceGetAssignedListRequest.
 *         Contains a table of all Network Classes of Service assigned to the
 *         service provider. The column headings are: "Name", "Description" and "Default".
 */
class ServiceProviderNetworkClassOfServiceGetAssignedListResponse extends ComplexType implements ComplexInterface
{
    public    $name                        = __CLASS__;
    protected $networkClassOfServiceTable  = null;


    public function setNetworkClassOfServiceTable(core:OCITable $networkClassOfServiceTable = null)
    {
    }

    public function getNetworkClassOfServiceTable()
    {
        return (!$this->networkClassOfServiceTable) ?: $this->networkClassOfServiceTable->value();
    }
}
