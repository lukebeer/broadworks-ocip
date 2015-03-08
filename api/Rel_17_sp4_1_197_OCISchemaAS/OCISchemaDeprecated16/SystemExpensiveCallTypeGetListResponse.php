<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated16; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\NetworkServerAlternateCallIndicator;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Response to SystemExpensiveCallTypeGetListRequest.
 *         Replaced by: SystemExpensiveCallTypeGetListResponse16sp1
 */
class SystemExpensiveCallTypeGetListResponse extends ComplexType implements ComplexInterface
{
    const     RESPONSE_TYPE           = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated16\SystemExpensiveCallTypeGetListResponse';
    public    $name                   = __CLASS__;
    protected $alternateCallIndicator = null;


    /**
     * Network Server Alternate Call Indicator.
     */
    public function setAlternateCallIndicator($alternateCallIndicator = null)
    {
        $this->alternateCallIndicator = ($alternateCallIndicator InstanceOf NetworkServerAlternateCallIndicator)
             ? $alternateCallIndicator
             : new NetworkServerAlternateCallIndicator($alternateCallIndicator);
    }

    /**
     * Network Server Alternate Call Indicator.
     */
    public function getAlternateCallIndicator()
    {
        return (!$this->alternateCallIndicator) ?: $this->alternateCallIndicator->getValue();
    }
}
