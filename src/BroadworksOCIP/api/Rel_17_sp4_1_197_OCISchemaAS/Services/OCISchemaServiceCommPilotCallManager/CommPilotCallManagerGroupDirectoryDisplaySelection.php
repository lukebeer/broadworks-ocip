<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCommPilotCallManager; 

use BroadworksOCIP\Builder\Types\SimpleType;
use BroadworksOCIP\Builder\Restrictions\Enumeration;


/**
 * Choices for commPilot call manager group directory display.
 */
class CommPilotCallManagerGroupDirectoryDisplaySelection extends SimpleType
{
    public $elementName = "CommPilotCallManagerGroupDirectoryDisplaySelection";
    public function __construct($value) {
        $this->setElementValue($value);
        $this->addRestriction(new Enumeration([
            'Display',
            'Hide',
            'Search Only'
        ]));
    }
}
