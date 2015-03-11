<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated17; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupAdminSessionAdmissionControlAccess;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupAdminEnhancedServiceInstanceAccess;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupAdminPhoneNumberExtensionAccess;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupAdminFeatureAccessCodeAccess;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupAdminDialableCallerIDAccess;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupAdminAccessDeviceAccess;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupAdminTrunkGroupAccess;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupAdminDepartmentAccess;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupAdminServiceAccess;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupAdminProfileAccess;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupAdminAdminAccess;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupAdminUserAccess;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to GroupAdminGetPolicyRequest16sp2.
 *         Contains the policy settings for the group administrator.
 */
class GroupAdminGetPolicyResponse16sp2 extends ComplexType implements ComplexInterface
{
    public    $name                          = 'GroupAdminGetPolicyResponse16sp2';
    protected $profileAccess                 = null;
    protected $userAccess                    = null;
    protected $adminAccess                   = null;
    protected $departmentAccess              = null;
    protected $accessDeviceAccess            = null;
    protected $enhancedServiceInstanceAccess = null;
    protected $featureAccessCodeAccess       = null;
    protected $phoneNumberExtensionAccess    = null;
    protected $serviceAccess                 = null;
    protected $trunkGroupAccess              = null;
    protected $sessionAdmissionControlAccess = null;
    protected $dialableCallerIDAccess        = null;

    /**
     * @return GroupAdminGetPolicyResponse16sp2
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setProfileAccess($profileAccess = null)
    {
        if (!$profileAccess) return $this;
        $this->profileAccess = ($profileAccess InstanceOf GroupAdminProfileAccess)
             ? $profileAccess
             : new GroupAdminProfileAccess($profileAccess);
        $this->profileAccess->setName('profileAccess');
        return $this;
    }

    /**
     * 
     * @return GroupAdminProfileAccess
     */
    public function getProfileAccess()
    {
        return $this->profileAccess->getValue();
    }

    /**
     * 
     */
    public function setUserAccess($userAccess = null)
    {
        if (!$userAccess) return $this;
        $this->userAccess = ($userAccess InstanceOf GroupAdminUserAccess)
             ? $userAccess
             : new GroupAdminUserAccess($userAccess);
        $this->userAccess->setName('userAccess');
        return $this;
    }

    /**
     * 
     * @return GroupAdminUserAccess
     */
    public function getUserAccess()
    {
        return $this->userAccess->getValue();
    }

    /**
     * 
     */
    public function setAdminAccess($adminAccess = null)
    {
        if (!$adminAccess) return $this;
        $this->adminAccess = ($adminAccess InstanceOf GroupAdminAdminAccess)
             ? $adminAccess
             : new GroupAdminAdminAccess($adminAccess);
        $this->adminAccess->setName('adminAccess');
        return $this;
    }

    /**
     * 
     * @return GroupAdminAdminAccess
     */
    public function getAdminAccess()
    {
        return $this->adminAccess->getValue();
    }

    /**
     * 
     */
    public function setDepartmentAccess($departmentAccess = null)
    {
        if (!$departmentAccess) return $this;
        $this->departmentAccess = ($departmentAccess InstanceOf GroupAdminDepartmentAccess)
             ? $departmentAccess
             : new GroupAdminDepartmentAccess($departmentAccess);
        $this->departmentAccess->setName('departmentAccess');
        return $this;
    }

    /**
     * 
     * @return GroupAdminDepartmentAccess
     */
    public function getDepartmentAccess()
    {
        return $this->departmentAccess->getValue();
    }

    /**
     * 
     */
    public function setAccessDeviceAccess($accessDeviceAccess = null)
    {
        if (!$accessDeviceAccess) return $this;
        $this->accessDeviceAccess = ($accessDeviceAccess InstanceOf GroupAdminAccessDeviceAccess)
             ? $accessDeviceAccess
             : new GroupAdminAccessDeviceAccess($accessDeviceAccess);
        $this->accessDeviceAccess->setName('accessDeviceAccess');
        return $this;
    }

    /**
     * 
     * @return GroupAdminAccessDeviceAccess
     */
    public function getAccessDeviceAccess()
    {
        return $this->accessDeviceAccess->getValue();
    }

    /**
     * 
     */
    public function setEnhancedServiceInstanceAccess($enhancedServiceInstanceAccess = null)
    {
        if (!$enhancedServiceInstanceAccess) return $this;
        $this->enhancedServiceInstanceAccess = ($enhancedServiceInstanceAccess InstanceOf GroupAdminEnhancedServiceInstanceAccess)
             ? $enhancedServiceInstanceAccess
             : new GroupAdminEnhancedServiceInstanceAccess($enhancedServiceInstanceAccess);
        $this->enhancedServiceInstanceAccess->setName('enhancedServiceInstanceAccess');
        return $this;
    }

    /**
     * 
     * @return GroupAdminEnhancedServiceInstanceAccess
     */
    public function getEnhancedServiceInstanceAccess()
    {
        return $this->enhancedServiceInstanceAccess->getValue();
    }

    /**
     * 
     */
    public function setFeatureAccessCodeAccess($featureAccessCodeAccess = null)
    {
        if (!$featureAccessCodeAccess) return $this;
        $this->featureAccessCodeAccess = ($featureAccessCodeAccess InstanceOf GroupAdminFeatureAccessCodeAccess)
             ? $featureAccessCodeAccess
             : new GroupAdminFeatureAccessCodeAccess($featureAccessCodeAccess);
        $this->featureAccessCodeAccess->setName('featureAccessCodeAccess');
        return $this;
    }

    /**
     * 
     * @return GroupAdminFeatureAccessCodeAccess
     */
    public function getFeatureAccessCodeAccess()
    {
        return $this->featureAccessCodeAccess->getValue();
    }

    /**
     * 
     */
    public function setPhoneNumberExtensionAccess($phoneNumberExtensionAccess = null)
    {
        if (!$phoneNumberExtensionAccess) return $this;
        $this->phoneNumberExtensionAccess = ($phoneNumberExtensionAccess InstanceOf GroupAdminPhoneNumberExtensionAccess)
             ? $phoneNumberExtensionAccess
             : new GroupAdminPhoneNumberExtensionAccess($phoneNumberExtensionAccess);
        $this->phoneNumberExtensionAccess->setName('phoneNumberExtensionAccess');
        return $this;
    }

    /**
     * 
     * @return GroupAdminPhoneNumberExtensionAccess
     */
    public function getPhoneNumberExtensionAccess()
    {
        return $this->phoneNumberExtensionAccess->getValue();
    }

    /**
     * 
     */
    public function setServiceAccess($serviceAccess = null)
    {
        if (!$serviceAccess) return $this;
        $this->serviceAccess = ($serviceAccess InstanceOf GroupAdminServiceAccess)
             ? $serviceAccess
             : new GroupAdminServiceAccess($serviceAccess);
        $this->serviceAccess->setName('serviceAccess');
        return $this;
    }

    /**
     * 
     * @return GroupAdminServiceAccess
     */
    public function getServiceAccess()
    {
        return $this->serviceAccess->getValue();
    }

    /**
     * 
     */
    public function setTrunkGroupAccess($trunkGroupAccess = null)
    {
        if (!$trunkGroupAccess) return $this;
        $this->trunkGroupAccess = ($trunkGroupAccess InstanceOf GroupAdminTrunkGroupAccess)
             ? $trunkGroupAccess
             : new GroupAdminTrunkGroupAccess($trunkGroupAccess);
        $this->trunkGroupAccess->setName('trunkGroupAccess');
        return $this;
    }

    /**
     * 
     * @return GroupAdminTrunkGroupAccess
     */
    public function getTrunkGroupAccess()
    {
        return $this->trunkGroupAccess->getValue();
    }

    /**
     * 
     */
    public function setSessionAdmissionControlAccess($sessionAdmissionControlAccess = null)
    {
        if (!$sessionAdmissionControlAccess) return $this;
        $this->sessionAdmissionControlAccess = ($sessionAdmissionControlAccess InstanceOf GroupAdminSessionAdmissionControlAccess)
             ? $sessionAdmissionControlAccess
             : new GroupAdminSessionAdmissionControlAccess($sessionAdmissionControlAccess);
        $this->sessionAdmissionControlAccess->setName('sessionAdmissionControlAccess');
        return $this;
    }

    /**
     * 
     * @return GroupAdminSessionAdmissionControlAccess
     */
    public function getSessionAdmissionControlAccess()
    {
        return $this->sessionAdmissionControlAccess->getValue();
    }

    /**
     * 
     */
    public function setDialableCallerIDAccess($dialableCallerIDAccess = null)
    {
        if (!$dialableCallerIDAccess) return $this;
        $this->dialableCallerIDAccess = ($dialableCallerIDAccess InstanceOf GroupAdminDialableCallerIDAccess)
             ? $dialableCallerIDAccess
             : new GroupAdminDialableCallerIDAccess($dialableCallerIDAccess);
        $this->dialableCallerIDAccess->setName('dialableCallerIDAccess');
        return $this;
    }

    /**
     * 
     * @return GroupAdminDialableCallerIDAccess
     */
    public function getDialableCallerIDAccess()
    {
        return $this->dialableCallerIDAccess->getValue();
    }
}
