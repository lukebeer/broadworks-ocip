<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ZoneName;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Returns a zone calling physical location for a given zone.
 * 	     Response is SystemZoneCallingZonePhysicalLocationGetResponse or an ErrorResponse.
 */
class SystemZoneCallingZonePhysicalLocationGetRequest extends ComplexType implements ComplexInterface
{
    public    $name      = __CLASS__;
    protected $zoneName  = null;

    public function __construct(
         $zoneName
    ) {
        $this->setZoneName($zoneName);
    }

    public function setZoneName($zoneName = null)
    {
        $this->zoneName = ($zoneName InstanceOf ZoneName)
             ? $zoneName
             : new ZoneName($zoneName);
    }

    public function getZoneName()
    {
        return (!$this->zoneName) ?: $this->zoneName->value();
    }
}
