<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceInstantConferencing; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UnboundedNonNegativeInt;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Response to ServiceProviderInstantConferencingGetRequest.
 */
class ServiceProviderInstantConferencingGetResponse extends ComplexType implements ComplexInterface
{
    public    $name                            = __CLASS__;
    protected $portsAllocatedToServiceProvider = null;


    /**
     * Unbounded Quantity. Can either be unlimited or a non-negative int quantity.
     */
    public function setPortsAllocatedToServiceProvider(UnboundedNonNegativeInt $portsAllocatedToServiceProvider = null)
    {
        $this->portsAllocatedToServiceProvider =  $portsAllocatedToServiceProvider;
    }

    /**
     * Unbounded Quantity. Can either be unlimited or a non-negative int quantity.
     */
    public function getPortsAllocatedToServiceProvider()
    {
        return (!$this->portsAllocatedToServiceProvider) ?: $this->portsAllocatedToServiceProvider->getValue();
    }
}
