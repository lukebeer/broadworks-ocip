<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated16; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ZoneName;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Deletes a zone from the system
 *         The response is either a SuccessResponse or an ErrorResponse.
 *         Replaced by: SystemZoneDeleteRequest
 */
class SystemZoneCallingRestrictionsZoneDeleteRequest extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $zoneName
    ) {
        $this->zoneName = new ZoneName($zoneName);
        $this->args     = func_get_args();
    }

    public function setZoneName($zoneName)
    {
        $zoneName and $this->zoneName = new ZoneName($zoneName);
    }

    public function getZoneName()
    {
        return (!$this->zoneName) ?: $this->zoneName->value();
    }
}
