<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\core\Builder\Types\SimpleInterface;
use Broadworks_OCIP\core\Builder\Types\SimpleType;
use Broadworks_OCIP\core\Builder\Restrictions\Enumeration;


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
    public $name = __CLASS__;
    protected $value;

    public function __construct($value) {
        $this->value    = $value;
        $this->dataType = 'string';
        $this-addRestriction(new Enumeration([
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
                                             ]);
    }
}
