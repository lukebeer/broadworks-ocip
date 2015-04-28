<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceLocationBasedCallingRestrictions; 

use BroadworksOCIP\Builder\Types\SimpleType;
use BroadworksOCIP\Builder\Restrictions\Enumeration;


/**
 * Choices for how to extract the physical location from the P-Camel-CellDorLAI or P-Access-Network-Info header.
 *         CI indicates that the physical location comes from the Cell Identification (CI) field (5 digits) of the P-Camel-CellDorLAI header (5 digits).
 *         LAC-CI indicates that the physical location comes from the Location Area Code + Cell Identification (LAC+CI) fields of the P CAMEL CellIDorLAI header (10 digits).
 *         PANI indicates that the physical location comes from the P Network Address Info (PANI) header.  See RFC 3455.
 */
class PhysicalLocationIndicator extends SimpleType
{
    public $elementName = "PhysicalLocationIndicator";
    public function __construct($value) {
        $this->setElementValue($value);
        $this->addRestriction(new Enumeration([
            'CI',
            'LAC-CI',
            'PANI',
            'Disregard Zones'
        ]));
    }
}
