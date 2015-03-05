<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated16; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupAdminProfileAccess;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupAdminUserAccess;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupAdminAdminAccess;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupAdminDepartmentAccess;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupAdminAccessDeviceAccess;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupAdminEnhancedServiceInstanceAccess;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupAdminFeatureAccessCodeAccess;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupAdminPhoneNumberExtensionAccess;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupAdminServiceAccess;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupAdminTrunkGroupAccess;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to GroupAdminGetPolicyRequest14sp1.
 *         Contains the policy settings for the group administrator.
 */
class GroupAdminGetPolicyResponse14sp1 extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $profileAccess,
             $userAccess,
             $adminAccess,
             $departmentAccess,
             $accessDeviceAccess,
             $enhancedServiceInstanceAccess,
             $featureAccessCodeAccess,
             $phoneNumberExtensionAccess,
             $serviceAccess,
             $trunkGroupAccess
    ) {
        $this->profileAccess                 = new GroupAdminProfileAccess($profileAccess);
        $this->userAccess                    = new GroupAdminUserAccess($userAccess);
        $this->adminAccess                   = new GroupAdminAdminAccess($adminAccess);
        $this->departmentAccess              = new GroupAdminDepartmentAccess($departmentAccess);
        $this->accessDeviceAccess            = new GroupAdminAccessDeviceAccess($accessDeviceAccess);
        $this->enhancedServiceInstanceAccess = new GroupAdminEnhancedServiceInstanceAccess($enhancedServiceInstanceAccess);
        $this->featureAccessCodeAccess       = new GroupAdminFeatureAccessCodeAccess($featureAccessCodeAccess);
        $this->phoneNumberExtensionAccess    = new GroupAdminPhoneNumberExtensionAccess($phoneNumberExtensionAccess);
        $this->serviceAccess                 = new GroupAdminServiceAccess($serviceAccess);
        $this->trunkGroupAccess              = new GroupAdminTrunkGroupAccess($trunkGroupAccess);
        $this->args                          = func_get_args();
    }

    public function setProfileAccess($profileAccess)
    {
        $profileAccess and $this->profileAccess = new GroupAdminProfileAccess($profileAccess);
    }

    public function getProfileAccess()
    {
        return (!$this->profileAccess) ?: $this->profileAccess->value();
    }

    public function setUserAccess($userAccess)
    {
        $userAccess and $this->userAccess = new GroupAdminUserAccess($userAccess);
    }

    public function getUserAccess()
    {
        return (!$this->userAccess) ?: $this->userAccess->value();
    }

    public function setAdminAccess($adminAccess)
    {
        $adminAccess and $this->adminAccess = new GroupAdminAdminAccess($adminAccess);
    }

    public function getAdminAccess()
    {
        return (!$this->adminAccess) ?: $this->adminAccess->value();
    }

    public function setDepartmentAccess($departmentAccess)
    {
        $departmentAccess and $this->departmentAccess = new GroupAdminDepartmentAccess($departmentAccess);
    }

    public function getDepartmentAccess()
    {
        return (!$this->departmentAccess) ?: $this->departmentAccess->value();
    }

    public function setAccessDeviceAccess($accessDeviceAccess)
    {
        $accessDeviceAccess and $this->accessDeviceAccess = new GroupAdminAccessDeviceAccess($accessDeviceAccess);
    }

    public function getAccessDeviceAccess()
    {
        return (!$this->accessDeviceAccess) ?: $this->accessDeviceAccess->value();
    }

    public function setEnhancedServiceInstanceAccess($enhancedServiceInstanceAccess)
    {
        $enhancedServiceInstanceAccess and $this->enhancedServiceInstanceAccess = new GroupAdminEnhancedServiceInstanceAccess($enhancedServiceInstanceAccess);
    }

    public function getEnhancedServiceInstanceAccess()
    {
        return (!$this->enhancedServiceInstanceAccess) ?: $this->enhancedServiceInstanceAccess->value();
    }

    public function setFeatureAccessCodeAccess($featureAccessCodeAccess)
    {
        $featureAccessCodeAccess and $this->featureAccessCodeAccess = new GroupAdminFeatureAccessCodeAccess($featureAccessCodeAccess);
    }

    public function getFeatureAccessCodeAccess()
    {
        return (!$this->featureAccessCodeAccess) ?: $this->featureAccessCodeAccess->value();
    }

    public function setPhoneNumberExtensionAccess($phoneNumberExtensionAccess)
    {
        $phoneNumberExtensionAccess and $this->phoneNumberExtensionAccess = new GroupAdminPhoneNumberExtensionAccess($phoneNumberExtensionAccess);
    }

    public function getPhoneNumberExtensionAccess()
    {
        return (!$this->phoneNumberExtensionAccess) ?: $this->phoneNumberExtensionAccess->value();
    }

    public function setServiceAccess($serviceAccess)
    {
        $serviceAccess and $this->serviceAccess = new GroupAdminServiceAccess($serviceAccess);
    }

    public function getServiceAccess()
    {
        return (!$this->serviceAccess) ?: $this->serviceAccess->value();
    }

    public function setTrunkGroupAccess($trunkGroupAccess)
    {
        $trunkGroupAccess and $this->trunkGroupAccess = new GroupAdminTrunkGroupAccess($trunkGroupAccess);
    }

    public function getTrunkGroupAccess()
    {
        return (!$this->trunkGroupAccess) ?: $this->trunkGroupAccess->value();
    }
}
