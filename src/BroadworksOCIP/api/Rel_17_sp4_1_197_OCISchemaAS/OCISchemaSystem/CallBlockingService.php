<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use BroadworksOCIP\Builder\Types\SimpleType;
use BroadworksOCIP\Builder\Restrictions\Enumeration;


/**
 * Possible types of Call Blocking Services.
 *         The following enumeration values are only used in AS Data mode:
 *            PTT
 *            SAC
 *            BroadWorks Mobility Deny Originations
 *            BroadWorks Mobility Deny Terminations
 *          The following types are only used in HSS data mode:
 * 	    Incoming Communication Barring
 * 	    Hierarchical Communication Barring
 * 	    Incoming Hierarchical Communication Barring
 */
class CallBlockingService extends SimpleType
{
    public $elementName = "CallBlockingService";
    public function __construct($value) {
        $this->setElementValue($value);
        $this->addRestriction(new Enumeration([
            'OCP',
            'EOCP',
            'ICP',
            'ACR',
            'SCR',
            'SCA',
            'AAC',
            'Intercept',
            'PTT',
            'Communication Barring',
            'SAC',
            'Incoming Communication Barring',
            'Hierarchical Communication Barring',
            'Incoming Hierarchical Communication Barring',
            'BroadWorks Mobility Deny Originations',
            'BroadWorks Mobility Deny Terminations'
        ]));
    }
}
