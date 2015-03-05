<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceConnectedLineIdentificationPresentation; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\xs:boolean;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to SystemConnectedLineIdentificationPresentationGetRequest.
 */
class SystemConnectedLineIdentificationPresentationGetResponse extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $enforceUserServiceAssignment
    ) {
        $this->enforceUserServiceAssignment = $enforceUserServiceAssignment;
        $this->args                         = func_get_args();
    }

    public function setEnforceUserServiceAssignment($enforceUserServiceAssignment)
    {
        $enforceUserServiceAssignment and $this->enforceUserServiceAssignment = new xs:boolean($enforceUserServiceAssignment);
    }

    public function getEnforceUserServiceAssignment()
    {
        return (!$this->enforceUserServiceAssignment) ?: $this->enforceUserServiceAssignment->value();
    }
}
