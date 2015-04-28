<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceOutlookIntegration; 

use BroadworksOCIP\Builder\Types\SimpleType;
use BroadworksOCIP\Builder\Restrictions\Enumeration;


/**
 * Microsoft Outlook contact database search option.
 *         Controls which contacts are retrieved from outlook.
 */
class OutlookIntegrationContactRetrievalSelection extends SimpleType
{
    public $elementName = "OutlookIntegrationContactRetrievalSelection";
    public function __construct($value) {
        $this->setElementValue($value);
        $this->addRestriction(new Enumeration([
            'Retrieve Default Contact Folder Only',
            'Retrieve All Contacts'
        ]));
    }
}
