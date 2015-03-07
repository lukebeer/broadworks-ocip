<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaGroup; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CommunicationBarringProfileName;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to SystemCommunicationBarringGetRequest.
 */
class GroupCommunicationBarringGetResponse extends ComplexType implements ComplexInterface
{
    public    $name                              = __CLASS__;
    protected $useDefaultServiceProviderProfile  = null;
    protected $profile                           = null;


    public function setUseDefaultServiceProviderProfile(xs:boolean $useDefaultServiceProviderProfile = null)
    {
    }

    public function getUseDefaultServiceProviderProfile()
    {
        return (!$this->useDefaultServiceProviderProfile) ?: $this->useDefaultServiceProviderProfile->value();
    }

    public function setProfile($profile = null)
    {
        $this->profile = ($profile InstanceOf CommunicationBarringProfileName)
             ? $profile
             : new CommunicationBarringProfileName($profile);
    }

    public function getProfile()
    {
        return (!$this->profile) ?: $this->profile->value();
    }
}
