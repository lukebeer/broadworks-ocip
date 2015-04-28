<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceProvider; 

use BroadworksOCIP\Builder\Types\SimpleType;
use BroadworksOCIP\Builder\Restrictions\Enumeration;


/**
 * Possible status values of a service pack migration task.
 */
class ServicePackMigrationTaskStatus extends SimpleType
{
    public $elementName = "ServicePackMigrationTaskStatus";
    public function __construct($value) {
        $this->setElementValue($value);
        $this->addRestriction(new Enumeration([
            'Awaiting Edits',
            'Pending',
            'Processing',
            'Terminating',
            'Terminated',
            'Stopped By System',
            'Completed'
        ]));
    }
}
