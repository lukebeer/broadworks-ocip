<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated16; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupAdminSessionAdmissionControlAccess;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupAdminEnhancedServiceInstanceAccess;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupAdminPhoneNumberExtensionAccess;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupAdminFeatureAccessCodeAccess;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupAdminAccessDeviceAccess;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupAdminTrunkGroupAccess;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupAdminDepartmentAccess;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupAdminProfileAccess;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupAdminServiceAccess;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupAdminAdminAccess;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupAdminUserAccess;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to GroupAdminGetPolicyRequest16sp1.
 *         Contains the policy settings for the group administrator.
 *         Replaced by: GroupAdminGetPolicyRequest17
 */
class GroupAdminGetPolicyResponse16sp1 extends ComplexType implements ComplexInterface
{
    public    $name                           = __CLASS__;
    protected $profileAccess                  = null;
    protected $userAccess                     = null;
    protected $adminAccess                    = null;
    protected $departmentAccess               = null;
    protected $accessDeviceAccess             = null;
    protected $enhancedServiceInstanceAccess  = null;
    protected $featureAccessCodeAccess        = null;
    protected $phoneNumberExtensionAccess     = null;
    protected $serviceAccess                  = null;
    protected $trunkGroupAccess               = null;
    protected $sessionAdmissionControlAccess  = null;


    public function setProfileAccess($profileAccess = null)
    {
        $this->profileAccess = ($profileAccess InstanceOf GroupAdminProfileAccess)
             ? $profileAccess
             : new GroupAdminProfileAccess($profileAccess);
    }

    public function getProfileAccess()
    {
        return (!$this->profileAccess) ?: $this->profileAccess->value();
    }

    public function setUserAccess($userAccess = null)
    {
        $this->userAccess = ($userAccess InstanceOf GroupAdminUserAccess)
             ? $userAccess
             : new GroupAdminUserAccess($userAccess);
    }

    public function getUserAccess()
    {
        return (!$this->userAccess) ?: $this->userAccess->value();
    }

    public function setAdminAccess($adminAccess = null)
    {
        $this->adminAccess = ($adminAccess InstanceOf GroupAdminAdminAccess)
             ? $adminAccess
             : new GroupAdminAdminAccess($adminAccess);
    }

    public function getAdminAccess()
    {
        return (!$this->adminAccess) ?: $this->adminAccess->value();
    }

    public function setDepartmentAccess($departmentAccess = null)
    {
        $this->departmentAccess = ($departmentAccess InstanceOf GroupAdminDepartmentAccess)
             ? $departmentAccess
             : new GroupAdminDepartmentAccess($departmentAccess);
    }

    public function getDepartmentAccess()
    {
        return (!$this->departmentAccess) ?: $this->departmentAccess->value();
    }

    public function setAccessDeviceAccess($accessDeviceAccess = null)
    {
        $this->accessDeviceAccess = ($accessDeviceAccess InstanceOf GroupAdminAccessDeviceAccess)
             ? $accessDeviceAccess
             : new GroupAdminAccessDeviceAccess($accessDeviceAccess);
    }

    public function getAccessDeviceAccess()
    {
        return (!$this->accessDeviceAccess) ?: $this->accessDeviceAccess->value();
    }

    public function setEnhancedServiceInstanceAccess($enhancedServiceInstanceAccess = null)
    {
        $this->enhancedServiceInstanceAccess = ($enhancedServiceInstanceAccess InstanceOf GroupAdminEnhancedServiceInstanceAccess)
             ? $enhancedServiceInstanceAccess
             : new GroupAdminEnhancedServiceInstanceAccess($enhancedServiceInstanceAccess);
    }

    public function getEnhancedServiceInstanceAccess()
    {
        return (!$this->enhancedServiceInstanceAccess) ?: $this->enhancedServiceInstanceAccess->value();
    }

    public function setFeatureAccessCodeAccess($featureAccessCodeAccess = null)
    {
        $this->featureAccessCodeAccess = ($featureAccessCodeAccess InstanceOf GroupAdminFeatureAccessCodeAccess)
             ? $featureAccessCodeAccess
             : new GroupAdminFeatureAccessCodeAccess($featureAccessCodeAccess);
    }

    public function getFeatureAccessCodeAccess()
    {
        return (!$this->featureAccessCodeAccess) ?: $this->featureAccessCodeAccess->value();
    }

    public function setPhoneNumberExtensionAccess($phoneNumberExtensionAccess = null)
    {
        $this->phoneNumberExtensionAccess = ($phoneNumberExtensionAccess InstanceOf GroupAdminPhoneNumberExtensionAccess)
             ? $phoneNumberExtensionAccess
             : new GroupAdminPhoneNumberExtensionAccess($phoneNumberExtensionAccess);
    }

    public function getPhoneNumberExtensionAccess()
    {
        return (!$this->phoneNumberExtensionAccess) ?: $this->phoneNumberExtensionAccess->value();
    }

    public function setServiceAccess($serviceAccess = null)
    {
        $this->serviceAccess = ($serviceAccess InstanceOf GroupAdminServiceAccess)
             ? $serviceAccess
             : new GroupAdminServiceAccess($serviceAccess);
    }

    public function getServiceAccess()
    {
        return (!$this->serviceAccess) ?: $this->serviceAccess->value();
    }

    public function setTrunkGroupAccess($trunkGroupAccess = null)
    {
        $this->trunkGroupAccess = ($trunkGroupAccess InstanceOf GroupAdminTrunkGroupAccess)
             ? $trunkGroupAccess
             : new GroupAdminTrunkGroupAccess($trunkGroupAccess);
    }

    public function getTrunkGroupAccess()
    {
        return (!$this->trunkGroupAccess) ?: $this->trunkGroupAccess->value();
    }

    public function setSessionAdmissionControlAccess($sessionAdmissionControlAccess = null)
    {
        $this->sessionAdmissionControlAccess = ($sessionAdmissionControlAccess InstanceOf GroupAdminSessionAdmissionControlAccess)
             ? $sessionAdmissionControlAccess
             : new GroupAdminSessionAdmissionControlAccess($sessionAdmissionControlAccess);
    }

    public function getSessionAdmissionControlAccess()
    {
        return (!$this->sessionAdmissionControlAccess) ?: $this->sessionAdmissionControlAccess->value();
    }
}
