<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceOutgoingCallingPlan; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceOutgoingCallingPlan\OutgoingCallingPlanCallMeNowPermissions;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Response to UserOutgoingCallingPlanCallMeNowGetRequest.
 */
class UserOutgoingCallingPlanCallMeNowGetResponse extends ComplexType implements ComplexInterface
{
    public    $name              = __CLASS__;
    protected $useCustomSettings = null;
    protected $userPermissions   = null;


    /**
     * 
     */
    public function setUseCustomSettings($useCustomSettings = null)
    {
        $this->useCustomSettings = (boolean) $useCustomSettings;
    }

    /**
     * 
     */
    public function getUseCustomSettings()
    {
        return (!$this->useCustomSettings) ?: $this->useCustomSettings->getValue();
    }

    /**
     * Outgoing Calling Plan for Call Me Now call permissions.
     */
    public function setUserPermissions(OutgoingCallingPlanCallMeNowPermissions $userPermissions = null)
    {
        $this->userPermissions =  $userPermissions;
    }

    /**
     * Outgoing Calling Plan for Call Me Now call permissions.
     */
    public function getUserPermissions()
    {
        return (!$this->userPermissions) ?: $this->userPermissions->getValue();
    }
}
