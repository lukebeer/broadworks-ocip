<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated17; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupAdminSessionAdmissionControlAccess;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupAdminEnhancedServiceInstanceAccess;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupAdminPhoneNumberExtensionAccess;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupAdminFeatureAccessCodeAccess;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupAdminDialableCallerIDAccess;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupAdminAccessDeviceAccess;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupAdminTrunkGroupAccess;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupAdminDepartmentAccess;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupAdminServiceAccess;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupAdminProfileAccess;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupAdminAdminAccess;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupAdminUserAccess;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Response to GroupAdminGetPolicyRequest16sp2.
 *         Contains the policy settings for the group administrator.
 */
class GroupAdminGetPolicyResponse16sp2 extends ComplexType implements ComplexInterface
{
    public    $elementName = 'GroupAdminGetPolicyResponse16sp2';
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
    protected $dialableCallerIDAccess;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated17\GroupAdminGetPolicyResponse16sp2 $response
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
        $this->profileAccess->setElementName('profileAccess');
        return $this;
    }

    /**
     * 
     * @return GroupAdminProfileAccess $profileAccess
     */
    public function getProfileAccess()
    {
        return ($this->profileAccess)
            ? $this->profileAccess->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setUserAccess($userAccess = null)
    {
        $this->userAccess = ($userAccess InstanceOf GroupAdminUserAccess)
             ? $userAccess
             : new GroupAdminUserAccess($userAccess);
        $this->userAccess->setElementName('userAccess');
        return $this;
    }

    /**
     * 
     * @return GroupAdminUserAccess $userAccess
     */
    public function getUserAccess()
    {
        return ($this->userAccess)
            ? $this->userAccess->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setAdminAccess($adminAccess = null)
    {
        $this->adminAccess = ($adminAccess InstanceOf GroupAdminAdminAccess)
             ? $adminAccess
             : new GroupAdminAdminAccess($adminAccess);
        $this->adminAccess->setElementName('adminAccess');
        return $this;
    }

    /**
     * 
     * @return GroupAdminAdminAccess $adminAccess
     */
    public function getAdminAccess()
    {
        return ($this->adminAccess)
            ? $this->adminAccess->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setDepartmentAccess($departmentAccess = null)
    {
        $this->departmentAccess = ($departmentAccess InstanceOf GroupAdminDepartmentAccess)
             ? $departmentAccess
             : new GroupAdminDepartmentAccess($departmentAccess);
        $this->departmentAccess->setElementName('departmentAccess');
        return $this;
    }

    /**
     * 
     * @return GroupAdminDepartmentAccess $departmentAccess
     */
    public function getDepartmentAccess()
    {
        return ($this->departmentAccess)
            ? $this->departmentAccess->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setAccessDeviceAccess($accessDeviceAccess = null)
    {
        $this->accessDeviceAccess = ($accessDeviceAccess InstanceOf GroupAdminAccessDeviceAccess)
             ? $accessDeviceAccess
             : new GroupAdminAccessDeviceAccess($accessDeviceAccess);
        $this->accessDeviceAccess->setElementName('accessDeviceAccess');
        return $this;
    }

    /**
     * 
     * @return GroupAdminAccessDeviceAccess $accessDeviceAccess
     */
    public function getAccessDeviceAccess()
    {
        return ($this->accessDeviceAccess)
            ? $this->accessDeviceAccess->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setEnhancedServiceInstanceAccess($enhancedServiceInstanceAccess = null)
    {
        $this->enhancedServiceInstanceAccess = ($enhancedServiceInstanceAccess InstanceOf GroupAdminEnhancedServiceInstanceAccess)
             ? $enhancedServiceInstanceAccess
             : new GroupAdminEnhancedServiceInstanceAccess($enhancedServiceInstanceAccess);
        $this->enhancedServiceInstanceAccess->setElementName('enhancedServiceInstanceAccess');
        return $this;
    }

    /**
     * 
     * @return GroupAdminEnhancedServiceInstanceAccess $enhancedServiceInstanceAccess
     */
    public function getEnhancedServiceInstanceAccess()
    {
        return ($this->enhancedServiceInstanceAccess)
            ? $this->enhancedServiceInstanceAccess->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setFeatureAccessCodeAccess($featureAccessCodeAccess = null)
    {
        $this->featureAccessCodeAccess = ($featureAccessCodeAccess InstanceOf GroupAdminFeatureAccessCodeAccess)
             ? $featureAccessCodeAccess
             : new GroupAdminFeatureAccessCodeAccess($featureAccessCodeAccess);
        $this->featureAccessCodeAccess->setElementName('featureAccessCodeAccess');
        return $this;
    }

    /**
     * 
     * @return GroupAdminFeatureAccessCodeAccess $featureAccessCodeAccess
     */
    public function getFeatureAccessCodeAccess()
    {
        return ($this->featureAccessCodeAccess)
            ? $this->featureAccessCodeAccess->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setPhoneNumberExtensionAccess($phoneNumberExtensionAccess = null)
    {
        $this->phoneNumberExtensionAccess = ($phoneNumberExtensionAccess InstanceOf GroupAdminPhoneNumberExtensionAccess)
             ? $phoneNumberExtensionAccess
             : new GroupAdminPhoneNumberExtensionAccess($phoneNumberExtensionAccess);
        $this->phoneNumberExtensionAccess->setElementName('phoneNumberExtensionAccess');
        return $this;
    }

    /**
     * 
     * @return GroupAdminPhoneNumberExtensionAccess $phoneNumberExtensionAccess
     */
    public function getPhoneNumberExtensionAccess()
    {
        return ($this->phoneNumberExtensionAccess)
            ? $this->phoneNumberExtensionAccess->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setServiceAccess($serviceAccess = null)
    {
        $this->serviceAccess = ($serviceAccess InstanceOf GroupAdminServiceAccess)
             ? $serviceAccess
             : new GroupAdminServiceAccess($serviceAccess);
        $this->serviceAccess->setElementName('serviceAccess');
        return $this;
    }

    /**
     * 
     * @return GroupAdminServiceAccess $serviceAccess
     */
    public function getServiceAccess()
    {
        return ($this->serviceAccess)
            ? $this->serviceAccess->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setTrunkGroupAccess($trunkGroupAccess = null)
    {
        $this->trunkGroupAccess = ($trunkGroupAccess InstanceOf GroupAdminTrunkGroupAccess)
             ? $trunkGroupAccess
             : new GroupAdminTrunkGroupAccess($trunkGroupAccess);
        $this->trunkGroupAccess->setElementName('trunkGroupAccess');
        return $this;
    }

    /**
     * 
     * @return GroupAdminTrunkGroupAccess $trunkGroupAccess
     */
    public function getTrunkGroupAccess()
    {
        return ($this->trunkGroupAccess)
            ? $this->trunkGroupAccess->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setSessionAdmissionControlAccess($sessionAdmissionControlAccess = null)
    {
        $this->sessionAdmissionControlAccess = ($sessionAdmissionControlAccess InstanceOf GroupAdminSessionAdmissionControlAccess)
             ? $sessionAdmissionControlAccess
             : new GroupAdminSessionAdmissionControlAccess($sessionAdmissionControlAccess);
        $this->sessionAdmissionControlAccess->setElementName('sessionAdmissionControlAccess');
        return $this;
    }

    /**
     * 
     * @return GroupAdminSessionAdmissionControlAccess $sessionAdmissionControlAccess
     */
    public function getSessionAdmissionControlAccess()
    {
        return ($this->sessionAdmissionControlAccess)
            ? $this->sessionAdmissionControlAccess->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setDialableCallerIDAccess($dialableCallerIDAccess = null)
    {
        $this->dialableCallerIDAccess = ($dialableCallerIDAccess InstanceOf GroupAdminDialableCallerIDAccess)
             ? $dialableCallerIDAccess
             : new GroupAdminDialableCallerIDAccess($dialableCallerIDAccess);
        $this->dialableCallerIDAccess->setElementName('dialableCallerIDAccess');
        return $this;
    }

    /**
     * 
     * @return GroupAdminDialableCallerIDAccess $dialableCallerIDAccess
     */
    public function getDialableCallerIDAccess()
    {
        return ($this->dialableCallerIDAccess)
            ? $this->dialableCallerIDAccess->getElementValue()
            : null;
    }
}
