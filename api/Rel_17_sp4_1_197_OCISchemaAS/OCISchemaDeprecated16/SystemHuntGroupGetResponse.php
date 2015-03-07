<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated16; 


use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to SystemHuntGroupGetRequest.
 *         Replaced by: SystemHuntGroupGetResponse17
 */
class SystemHuntGroupGetResponse extends ComplexType implements ComplexInterface
{
    public    $name                           = __CLASS__;
    protected $anonymousInsteadOfPrivateCLID  = null;
    protected $removeHuntGroupNameFromCLID    = null;


    public function setAnonymousInsteadOfPrivateCLID(xs:boolean $anonymousInsteadOfPrivateCLID = null)
    {
    }

    public function getAnonymousInsteadOfPrivateCLID()
    {
        return (!$this->anonymousInsteadOfPrivateCLID) ?: $this->anonymousInsteadOfPrivateCLID->value();
    }

    public function setRemoveHuntGroupNameFromCLID(xs:boolean $removeHuntGroupNameFromCLID = null)
    {
    }

    public function getRemoveHuntGroupNameFromCLID()
    {
        return (!$this->removeHuntGroupNameFromCLID) ?: $this->removeHuntGroupNameFromCLID->value();
    }
}
