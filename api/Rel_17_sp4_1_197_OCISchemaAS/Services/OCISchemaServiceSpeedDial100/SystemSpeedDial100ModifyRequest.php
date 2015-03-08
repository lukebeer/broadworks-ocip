<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceSpeedDial100; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\SpeedDialPrefix;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Modify the speed dial 100 system-wide default prefix setting.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemSpeedDial100ModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name   = __CLASS__;
    protected $prefix = null;

    public function __construct(
         $prefix = null
    ) {
        $this->setPrefix($prefix);
    }

    /**
     * Speed dial prefix.
     */
    public function setPrefix($prefix = null)
    {
        $this->prefix = ($prefix InstanceOf SpeedDialPrefix)
             ? $prefix
             : new SpeedDialPrefix($prefix);
    }

    /**
     * Speed dial prefix.
     */
    public function getPrefix()
    {
        return (!$this->prefix) ?: $this->prefix->getValue();
    }
}
