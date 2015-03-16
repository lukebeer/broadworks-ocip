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
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to GroupAdminGetPolicyRequest16sp1.
 *         Contains the policy settings for the group administrator.
 *         Replaced by: GroupAdminGetPolicyRequest17
 */
class GroupAdminGetPolicyResponse16sp1 extends ComplexType implements ComplexInterface
{
    public    $name = 'GroupAdminGetPolicyResponse16sp1';
    protected $profileAccess;
    protected $userAccess;
    protected $adminAccess;
    protected $departmentAccess;
    protected $accessDeviceAccess;
    protected $enhancedServiceInstanceAccess;
    protected $featureAccessCodeAccess;
    protected $phoneNumberExtensionAccess;
    protected $serviceAccess;
    protected $trunkGroupAccess;
    protected $sessionAdmissionControlAccess;

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated16\GroupAdminGetPolicyResponse16sp1 $response
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
        $this->profileAccess = ($profileAccess InstanceOf GroupAdminProfileAccess)
             ? $profileAccess
             : new GroupAdminProfileAccess($profileAccess);
        $this->profileAccess->setName('profileAccess');
        return $this;
    }

    /**
     * 
     * @return GroupAdminProfileAccess $profileAccess
     */
    public function getProfileAccess()
    {
        return ($this->profileAccess) ? $this->profileAccess->getValue() : null;
    }

    /**
     * 
     */
    public function setUserAccess($userAccess = null)
    {
        $this->userAccess = ($userAccess InstanceOf GroupAdminUserAccess)
             ? $userAccess
             : new GroupAdminUserAccess($userAccess);
        $this->userAccess->setName('userAccess');
        return $this;
    }

    /**
     * 
     * @return GroupAdminUserAccess $userAccess
     */
    public function getUserAccess()
    {
        return ($this->userAccess) ? $this->userAccess->getValue() : null;
    }

    /**
     * 
     */
    public function setAdminAccess($adminAccess = null)
    {
        $this->adminAccess = ($adminAccess InstanceOf GroupAdminAdminAccess)
             ? $adminAccess
             : new GroupAdminAdminAccess($adminAccess);
        $this->adminAccess->setName('adminAccess');
        return $this;
    }

    /**
     * 
     * @return GroupAdminAdminAccess $adminAccess
     */
    public function getAdminAccess()
    {
        return ($this->adminAccess) ? $this->adminAccess->getValue() : null;
    }

    /**
     * 
     */
    public function setDepartmentAccess($departmentAccess = null)
    {
        $this->departmentAccess = ($departmentAccess InstanceOf GroupAdminDepartmentAccess)
             ? $departmentAccess
             : new GroupAdminDepartmentAccess($departmentAccess);
        $this->departmentAccess->setName('departmentAccess');
        return $this;
    }

    /**
     * 
     * @return GroupAdminDepartmentAccess $departmentAccess
     */
    public function getDepartmentAccess()
    {
        return ($this->departmentAccess) ? $this->departmentAccess->getValue() : null;
    }

    /**
     * 
     */
    public function setAccessDeviceAccess($accessDeviceAccess = null)
    {
        $this->accessDeviceAccess = ($accessDeviceAccess InstanceOf GroupAdminAccessDeviceAccess)
             ? $accessDeviceAccess
             : new GroupAdminAccessDeviceAccess($accessDeviceAccess);
        $this->accessDeviceAccess->setName('accessDeviceAccess');
        return $this;
    }

    /**
     * 
     * @return GroupAdminAccessDeviceAccess $accessDeviceAccess
     */
    public function getAccessDeviceAccess()
    {
        return ($this->accessDeviceAccess) ? $this->accessDeviceAccess->getValue() : null;
    }

    /**
     * 
     */
    public function setEnhancedServiceInstanceAccess($enhancedServiceInstanceAccess = null)
    {
        $this->enhancedServiceInstanceAccess = ($enhancedServiceInstanceAccess InstanceOf GroupAdminEnhancedServiceInstanceAccess)
             ? $enhancedServiceInstanceAccess
             : new GroupAdminEnhancedServiceInstanceAccess($enhancedServiceInstanceAccess);
        $this->enhancedServiceInstanceAccess->setName('enhancedServiceInstanceAccess');
        return $this;
    }

    /**
     * 
     * @return GroupAdminEnhancedServiceInstanceAccess $enhancedServiceInstanceAccess
     */
    public function getEnhancedServiceInstanceAccess()
    {
        return ($this->enhancedServiceInstanceAccess) ? $this->enhancedServiceInstanceAccess->getValue() : null;
    }

    /**
     * 
     */
    public function setFeatureAccessCodeAccess($featureAccessCodeAccess = null)
    {
        $this->featureAccessCodeAccess = ($featureAccessCodeAccess InstanceOf GroupAdminFeatureAccessCodeAccess)
             ? $featureAccessCodeAccess
             : new GroupAdminFeatureAccessCodeAccess($featureAccessCodeAccess);
        $this->featureAccessCodeAccess->setName('featureAccessCodeAccess');
        return $this;
    }

    /**
     * 
     * @return GroupAdminFeatureAccessCodeAccess $featureAccessCodeAccess
     */
    public function getFeatureAccessCodeAccess()
    {
        return ($this->featureAccessCodeAccess) ? $this->featureAccessCodeAccess->getValue() : null;
    }

    /**
     * 
     */
    public function setPhoneNumberExtensionAccess($phoneNumberExtensionAccess = null)
    {
        $this->phoneNumberExtensionAccess = ($phoneNumberExtensionAccess InstanceOf GroupAdminPhoneNumberExtensionAccess)
             ? $phoneNumberExtensionAccess
             : new GroupAdminPhoneNumberExtensionAccess($phoneNumberExtensionAccess);
        $this->phoneNumberExtensionAccess->setName('phoneNumberExtensionAccess');
        return $this;
    }

    /**
     * 
     * @return GroupAdminPhoneNumberExtensionAccess $phoneNumberExtensionAccess
     */
    public function getPhoneNumberExtensionAccess()
    {
        return ($this->phoneNumberExtensionAccess) ? $this->phoneNumberExtensionAccess->getValue() : null;
    }

    /**
     * 
     */
    public function setServiceAccess($serviceAccess = null)
    {
        $this->serviceAccess = ($serviceAccess InstanceOf GroupAdminServiceAccess)
             ? $serviceAccess
             : new GroupAdminServiceAccess($serviceAccess);
        $this->serviceAccess->setName('serviceAccess');
        return $this;
    }

    /**
     * 
     * @return GroupAdminServiceAccess $serviceAccess
     */
    public function getServiceAccess()
    {
        return ($this->serviceAccess) ? $this->serviceAccess->getValue() : null;
    }

    /**
     * 
     */
    public function setTrunkGroupAccess($trunkGroupAccess = null)
    {
        $this->trunkGroupAccess = ($trunkGroupAccess InstanceOf GroupAdminTrunkGroupAccess)
             ? $trunkGroupAccess
             : new GroupAdminTrunkGroupAccess($trunkGroupAccess);
        $this->trunkGroupAccess->setName('trunkGroupAccess');
        return $this;
    }

    /**
     * 
     * @return GroupAdminTrunkGroupAccess $trunkGroupAccess
     */
    public function getTrunkGroupAccess()
    {
        return ($this->trunkGroupAccess) ? $this->trunkGroupAccess->getValue() : null;
    }

    /**
     * 
     */
    public function setSessionAdmissionControlAccess($sessionAdmissionControlAccess = null)
    {
        $this->sessionAdmissionControlAccess = ($sessionAdmissionControlAccess InstanceOf GroupAdminSessionAdmissionControlAccess)
             ? $sessionAdmissionControlAccess
             : new GroupAdminSessionAdmissionControlAccess($sessionAdmissionControlAccess);
        $this->sessionAdmissionControlAccess->setName('sessionAdmissionControlAccess');
        return $this;
    }

    /**
     * 
     * @return GroupAdminSessionAdmissionControlAccess $sessionAdmissionControlAccess
     */
    public function getSessionAdmissionControlAccess()
    {
        return ($this->sessionAdmissionControlAccess) ? $this->sessionAdmissionControlAccess->getValue() : null;
    }
}
