<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\core\Builder\Types\SimpleType;
use Broadworks_OCIP\core\Builder\Restrictions\Enumeration;


/**
 * The application Id advertised for billing (Ro or Rf) during the Diameter Capability Exchange.
 *         When base is selected, Acct-Application-Id=3 is advertised for offline billing and Auth-Application-Id=4 for online billing.
 *         When 3gpp is selected, Vendor-Specific-Application-Id(Acct-Application-Id=3; Vendor-Id=10415) is advertised for offline billing and Vendor-Specific-Application-Id(Auth-Application-Id=4; Vendor-Id=10415) for online billing.
 */
class BwDiameterAdvertisedApplication extends SimpleType
{
    public $elementName = "BwDiameterAdvertisedApplication";
    public function __construct($value) {
        $this->setElementValue($value);
        $this->addRestriction(new Enumeration([
            'Base',
            '3gpp'
        ]));
    }
}
