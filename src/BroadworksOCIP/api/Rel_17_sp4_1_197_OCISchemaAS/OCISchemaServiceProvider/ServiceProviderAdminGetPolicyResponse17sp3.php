<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceProvider; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderAdminSessionAdmissionControlAccess;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderAdminCommunicationBarringAccess;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderAdminPhoneNumberExtensionAccess;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderAdminCallingLineIdNumberAccess;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderAdminDialableCallerIDAccess;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderAdminAccessDeviceAccess;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderAdminWebBrandingAccess;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderAdminServicePackAccess;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderAdminOfficeZoneAccess;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderAdminDepartmentAccess;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\EnterpriseAdminNetworkPolicyAccess;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderAdminProfileAccess;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderAdminServiceAccess;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderAdminAdminAccess;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderAdminGroupAccess;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderAdminUserAccess;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Response to ServiceProviderAdminGetPolicyRequest17sp3.
 *         Contains the policy settings for the service provider administrator.
 *         The networkPolicyAccess is returned only for the enterprise administrator.
 *         The following elements are only used in AS data mode:
 *             dialableCallerIDAccess
 *         The following elements are only used in HSS data mode:
 *             communicationBarringAccess
 */
class ServiceProviderAdminGetPolicyResponse17sp3 extends ComplexType implements ComplexInterface
{
    public    $elementName = 'ServiceProviderAdminGetPolicyResponse17sp3';
    protected $profileAccess;
    protected $groupAccess;
    protected $userAccess;
    protected $adminAccess;
    protected $departmentAccess;
    protected $accessDeviceAccess;
    protected $phoneNumberExtensionAccess;
    protected $callingLineIdNumberAccess;
    protected $serviceAccess;
    protected $servicePackAccess;
    protected $sessionAdmissionControlAccess;
    protected $webBrandingAccess;
    protected $officeZoneAccess;
    protected $communicationBarringAccess;
    protected $networkPolicyAccess;
    protected $dialableCallerIDAccess;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceProvider\ServiceProviderAdminGetPolicyResponse17sp3 $response
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
        $this->profileAccess = ($profileAccess InstanceOf ServiceProviderAdminProfileAccess)
             ? $profileAccess
             : new ServiceProviderAdminProfileAccess($profileAccess);
        $this->profileAccess->setElementName('profileAccess');
        return $this;
    }

    /**
     * 
     * @return ServiceProviderAdminProfileAccess $profileAccess
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
    public function setGroupAccess($groupAccess = null)
    {
        $this->groupAccess = ($groupAccess InstanceOf ServiceProviderAdminGroupAccess)
             ? $groupAccess
             : new ServiceProviderAdminGroupAccess($groupAccess);
        $this->groupAccess->setElementName('groupAccess');
        return $this;
    }

    /**
     * 
     * @return ServiceProviderAdminGroupAccess $groupAccess
     */
    public function getGroupAccess()
    {
        return ($this->groupAccess)
            ? $this->groupAccess->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setUserAccess($userAccess = null)
    {
        $this->userAccess = ($userAccess InstanceOf ServiceProviderAdminUserAccess)
             ? $userAccess
             : new ServiceProviderAdminUserAccess($userAccess);
        $this->userAccess->setElementName('userAccess');
        return $this;
    }

    /**
     * 
     * @return ServiceProviderAdminUserAccess $userAccess
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
        $this->adminAccess = ($adminAccess InstanceOf ServiceProviderAdminAdminAccess)
             ? $adminAccess
             : new ServiceProviderAdminAdminAccess($adminAccess);
        $this->adminAccess->setElementName('adminAccess');
        return $this;
    }

    /**
     * 
     * @return ServiceProviderAdminAdminAccess $adminAccess
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
        $this->departmentAccess = ($departmentAccess InstanceOf ServiceProviderAdminDepartmentAccess)
             ? $departmentAccess
             : new ServiceProviderAdminDepartmentAccess($departmentAccess);
        $this->departmentAccess->setElementName('departmentAccess');
        return $this;
    }

    /**
     * 
     * @return ServiceProviderAdminDepartmentAccess $departmentAccess
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
        $this->accessDeviceAccess = ($accessDeviceAccess InstanceOf ServiceProviderAdminAccessDeviceAccess)
             ? $accessDeviceAccess
             : new ServiceProviderAdminAccessDeviceAccess($accessDeviceAccess);
        $this->accessDeviceAccess->setElementName('accessDeviceAccess');
        return $this;
    }

    /**
     * 
     * @return ServiceProviderAdminAccessDeviceAccess $accessDeviceAccess
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
    public function setPhoneNumberExtensionAccess($phoneNumberExtensionAccess = null)
    {
        $this->phoneNumberExtensionAccess = ($phoneNumberExtensionAccess InstanceOf ServiceProviderAdminPhoneNumberExtensionAccess)
             ? $phoneNumberExtensionAccess
             : new ServiceProviderAdminPhoneNumberExtensionAccess($phoneNumberExtensionAccess);
        $this->phoneNumberExtensionAccess->setElementName('phoneNumberExtensionAccess');
        return $this;
    }

    /**
     * 
     * @return ServiceProviderAdminPhoneNumberExtensionAccess $phoneNumberExtensionAccess
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
    public function setCallingLineIdNumberAccess($callingLineIdNumberAccess = null)
    {
        $this->callingLineIdNumberAccess = ($callingLineIdNumberAccess InstanceOf ServiceProviderAdminCallingLineIdNumberAccess)
             ? $callingLineIdNumberAccess
             : new ServiceProviderAdminCallingLineIdNumberAccess($callingLineIdNumberAccess);
        $this->callingLineIdNumberAccess->setElementName('callingLineIdNumberAccess');
        return $this;
    }

    /**
     * 
     * @return ServiceProviderAdminCallingLineIdNumberAccess $callingLineIdNumberAccess
     */
    public function getCallingLineIdNumberAccess()
    {
        return ($this->callingLineIdNumberAccess)
            ? $this->callingLineIdNumberAccess->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setServiceAccess($serviceAccess = null)
    {
        $this->serviceAccess = ($serviceAccess InstanceOf ServiceProviderAdminServiceAccess)
             ? $serviceAccess
             : new ServiceProviderAdminServiceAccess($serviceAccess);
        $this->serviceAccess->setElementName('serviceAccess');
        return $this;
    }

    /**
     * 
     * @return ServiceProviderAdminServiceAccess $serviceAccess
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
    public function setServicePackAccess($servicePackAccess = null)
    {
        $this->servicePackAccess = ($servicePackAccess InstanceOf ServiceProviderAdminServicePackAccess)
             ? $servicePackAccess
             : new ServiceProviderAdminServicePackAccess($servicePackAccess);
        $this->servicePackAccess->setElementName('servicePackAccess');
        return $this;
    }

    /**
     * 
     * @return ServiceProviderAdminServicePackAccess $servicePackAccess
     */
    public function getServicePackAccess()
    {
        return ($this->servicePackAccess)
            ? $this->servicePackAccess->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setSessionAdmissionControlAccess($sessionAdmissionControlAccess = null)
    {
        $this->sessionAdmissionControlAccess = ($sessionAdmissionControlAccess InstanceOf ServiceProviderAdminSessionAdmissionControlAccess)
             ? $sessionAdmissionControlAccess
             : new ServiceProviderAdminSessionAdmissionControlAccess($sessionAdmissionControlAccess);
        $this->sessionAdmissionControlAccess->setElementName('sessionAdmissionControlAccess');
        return $this;
    }

    /**
     * 
     * @return ServiceProviderAdminSessionAdmissionControlAccess $sessionAdmissionControlAccess
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
    public function setWebBrandingAccess($webBrandingAccess = null)
    {
        $this->webBrandingAccess = ($webBrandingAccess InstanceOf ServiceProviderAdminWebBrandingAccess)
             ? $webBrandingAccess
             : new ServiceProviderAdminWebBrandingAccess($webBrandingAccess);
        $this->webBrandingAccess->setElementName('webBrandingAccess');
        return $this;
    }

    /**
     * 
     * @return ServiceProviderAdminWebBrandingAccess $webBrandingAccess
     */
    public function getWebBrandingAccess()
    {
        return ($this->webBrandingAccess)
            ? $this->webBrandingAccess->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setOfficeZoneAccess($officeZoneAccess = null)
    {
        $this->officeZoneAccess = ($officeZoneAccess InstanceOf ServiceProviderAdminOfficeZoneAccess)
             ? $officeZoneAccess
             : new ServiceProviderAdminOfficeZoneAccess($officeZoneAccess);
        $this->officeZoneAccess->setElementName('officeZoneAccess');
        return $this;
    }

    /**
     * 
     * @return ServiceProviderAdminOfficeZoneAccess $officeZoneAccess
     */
    public function getOfficeZoneAccess()
    {
        return ($this->officeZoneAccess)
            ? $this->officeZoneAccess->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setCommunicationBarringAccess($communicationBarringAccess = null)
    {
        $this->communicationBarringAccess = ($communicationBarringAccess InstanceOf ServiceProviderAdminCommunicationBarringAccess)
             ? $communicationBarringAccess
             : new ServiceProviderAdminCommunicationBarringAccess($communicationBarringAccess);
        $this->communicationBarringAccess->setElementName('communicationBarringAccess');
        return $this;
    }

    /**
     * 
     * @return ServiceProviderAdminCommunicationBarringAccess $communicationBarringAccess
     */
    public function getCommunicationBarringAccess()
    {
        return ($this->communicationBarringAccess)
            ? $this->communicationBarringAccess->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setNetworkPolicyAccess($networkPolicyAccess = null)
    {
        $this->networkPolicyAccess = ($networkPolicyAccess InstanceOf EnterpriseAdminNetworkPolicyAccess)
             ? $networkPolicyAccess
             : new EnterpriseAdminNetworkPolicyAccess($networkPolicyAccess);
        $this->networkPolicyAccess->setElementName('networkPolicyAccess');
        return $this;
    }

    /**
     * 
     * @return EnterpriseAdminNetworkPolicyAccess $networkPolicyAccess
     */
    public function getNetworkPolicyAccess()
    {
        return ($this->networkPolicyAccess)
            ? $this->networkPolicyAccess->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setDialableCallerIDAccess($dialableCallerIDAccess = null)
    {
        $this->dialableCallerIDAccess = ($dialableCallerIDAccess InstanceOf ServiceProviderAdminDialableCallerIDAccess)
             ? $dialableCallerIDAccess
             : new ServiceProviderAdminDialableCallerIDAccess($dialableCallerIDAccess);
        $this->dialableCallerIDAccess->setElementName('dialableCallerIDAccess');
        return $this;
    }

    /**
     * 
     * @return ServiceProviderAdminDialableCallerIDAccess $dialableCallerIDAccess
     */
    public function getDialableCallerIDAccess()
    {
        return ($this->dialableCallerIDAccess)
            ? $this->dialableCallerIDAccess->getElementValue()
            : null;
    }
}
