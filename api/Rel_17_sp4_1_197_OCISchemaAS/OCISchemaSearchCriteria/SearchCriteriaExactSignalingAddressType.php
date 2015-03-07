<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\SignalingAddressType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Criteria for searching for a particular fully specified SignalingAddressType.
 */
class SearchCriteriaExactSignalingAddressType extends ComplexType implements ComplexInterface
{
    public    $name     = __CLASS__;
    protected $profile  = null;

    public function __construct(
         $profile
    ) {
        $this->setProfile($profile);
    }

    public function setProfile($profile = null)
    {
        $this->profile = ($profile InstanceOf SignalingAddressType)
             ? $profile
             : new SignalingAddressType($profile);
    }

    public function getProfile()
    {
        return (!$this->profile) ?: $this->profile->value();
    }
}
