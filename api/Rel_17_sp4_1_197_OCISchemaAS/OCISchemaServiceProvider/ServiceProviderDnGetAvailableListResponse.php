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
     * Response to ServiceProviderDnGetAvailableListRequest.
 *         Contains a list of available DNs not yet assigned to any group.
 */
class ServiceProviderDnGetAvailableListResponse extends ComplexType implements ComplexInterface
{
    const     RESPONSE_TYPE = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceProvider\ServiceProviderDnGetAvailableListResponse';
    public    $name        = __CLASS__;
    protected $availableDn = null;


    /**
     * 
     */
    public function setAvailableDn($availableDn = null)
    {
        $this->availableDn = (string) $availableDn;
    }

    /**
     * 
     */
    public function getAvailableDn()
    {
        return (!$this->availableDn) ?: $this->availableDn->getValue();
    }
}
