<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceConnectedLineIdentificationPresentation; 


use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Response to SystemConnectedLineIdentificationPresentationGetRequest.
 */
class SystemConnectedLineIdentificationPresentationGetResponse extends ComplexType implements ComplexInterface
{
    public    $name                         = __CLASS__;
    protected $enforceUserServiceAssignment = null;


    /**
     * 
     */
    public function setEnforceUserServiceAssignment($enforceUserServiceAssignment = null)
    {
        $this->enforceUserServiceAssignment = (boolean) $enforceUserServiceAssignment;
    }

    /**
     * 
     */
    public function getEnforceUserServiceAssignment()
    {
        return (!$this->enforceUserServiceAssignment) ?: $this->enforceUserServiceAssignment->getValue();
    }
}
