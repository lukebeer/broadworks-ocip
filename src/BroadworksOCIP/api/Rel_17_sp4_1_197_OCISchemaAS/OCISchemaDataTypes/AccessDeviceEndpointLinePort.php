<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes; 

use BroadworksOCIP\Builder\Types\SimpleType;
use BroadworksOCIP\Builder\Restrictions\MinLength;
use BroadworksOCIP\Builder\Restrictions\MaxLength;


/**
 * Also known as address of record, the Line/Port identifies a device endpoint
 *         in standalone mode  or a SIPURI public identity in IMS mode.
 *         Line/port user@host or just the port.
 *         Validation:
 *         - don't allow sip:
 *         - allow a leading +
 *         - allow the following characters:
 *           alphanumeric   -   _   .   !   ~   *   '   (   )   @
 *         - lineports for sip devices configured with Proxy Addressing must have a host portion
 *         - lineports for sip devices configured with Device Addressing must not have a host portion
 */
class AccessDeviceEndpointLinePort extends SimpleType
{
    public $elementName = "AccessDeviceEndpointLinePort";
    public function __construct($value) {
        $this->setElementValue($value);
        $this->addRestriction(new MinLength("1"));
        $this->addRestriction(new MaxLength("161"));
    }
}
