<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated17; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderAdminSessionAdmissionControlAccess;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderAdminPhoneNumberExtensionAccess;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderAdminCallingLineIdNumberAccess;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderAdminAccessDeviceAccess;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderAdminWebBrandingAccess;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderAdminServicePackAccess;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderAdminOfficeZoneAccess;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderAdminDepartmentAccess;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\EnterpriseAdminNetworkPolicyAccess;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderAdminServiceAccess;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderAdminProfileAccess;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderAdminAdminAccess;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderAdminGroupAccess;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderAdminUserAccess;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to ServiceProviderAdminGetPolicyRequest17.
 *         Contains the policy settings for the service provider administrator.
 *         The networkPolicyAccess is returned only for the enterprise administrator.
 */
class ServiceProviderAdminGetPolicyResponse17 extends ComplexType implements ComplexInterface
{
    public    $name                          = 'ServiceProviderAdminGetPolicyResponse17';
    protected $profileAccess                 = null;
    protected $groupAccess                   = null;
    protected $userAccess                    = null;
    protected $adminAccess                   = null;
    protected $departmentAccess              = null;
    protected $accessDeviceAccess            = null;
    protected $phoneNumberExtensionAccess    = null;
    protected $callingLineIdNumberAccess     = null;
    protected $serviceAccess                 = null;
    protected $servicePackAccess             = null;
    protected $sessionAdmissionControlAccess = null;
    protected $webBrandingAccess             = null;
    protected $officeZoneAccess              = null;
    protected $networkPolicyAccess           = null;

    /**
     * @return ServiceProviderAdminGetPolicyResponse17
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
        $this->profileAccess = ($profileAccess InstanceOf ServiceProviderAdminProfileAccess)
             ? $profileAccess
             : new ServiceProviderAdminProfileAccess($profileAccess);
        $this->profileAccess->setName('profileAccess');
        return $this;
    }

    /**
     * 
     * @return ServiceProviderAdminProfileAccess
     */
    public function getProfileAccess()
    {
        return $this->profileAccess->getValue();
    }

    /**
     * 
     */
    public function setGroupAccess($groupAccess = null)
    {
        if (!$groupAccess) return $this;
        $this->groupAccess = ($groupAccess InstanceOf ServiceProviderAdminGroupAccess)
             ? $groupAccess
             : new ServiceProviderAdminGroupAccess($groupAccess);
        $this->groupAccess->setName('groupAccess');
        return $this;
    }

    /**
     * 
     * @return ServiceProviderAdminGroupAccess
     */
    public function getGroupAccess()
    {
        return $this->groupAccess->getValue();
    }

    /**
     * 
     */
    public function setUserAccess($userAccess = null)
    {
        if (!$userAccess) return $this;
        $this->userAccess = ($userAccess InstanceOf ServiceProviderAdminUserAccess)
             ? $userAccess
             : new ServiceProviderAdminUserAccess($userAccess);
        $this->userAccess->setName('userAccess');
        return $this;
    }

    /**
     * 
     * @return ServiceProviderAdminUserAccess
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
        $this->adminAccess = ($adminAccess InstanceOf ServiceProviderAdminAdminAccess)
             ? $adminAccess
             : new ServiceProviderAdminAdminAccess($adminAccess);
        $this->adminAccess->setName('adminAccess');
        return $this;
    }

    /**
     * 
     * @return ServiceProviderAdminAdminAccess
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
        $this->departmentAccess = ($departmentAccess InstanceOf ServiceProviderAdminDepartmentAccess)
             ? $departmentAccess
             : new ServiceProviderAdminDepartmentAccess($departmentAccess);
        $this->departmentAccess->setName('departmentAccess');
        return $this;
    }

    /**
     * 
     * @return ServiceProviderAdminDepartmentAccess
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
        $this->accessDeviceAccess = ($accessDeviceAccess InstanceOf ServiceProviderAdminAccessDeviceAccess)
             ? $accessDeviceAccess
             : new ServiceProviderAdminAccessDeviceAccess($accessDeviceAccess);
        $this->accessDeviceAccess->setName('accessDeviceAccess');
        return $this;
    }

    /**
     * 
     * @return ServiceProviderAdminAccessDeviceAccess
     */
    public function getAccessDeviceAccess()
    {
        return $this->accessDeviceAccess->getValue();
    }

    /**
     * 
     */
    public function setPhoneNumberExtensionAccess($phoneNumberExtensionAccess = null)
    {
        if (!$phoneNumberExtensionAccess) return $this;
        $this->phoneNumberExtensionAccess = ($phoneNumberExtensionAccess InstanceOf ServiceProviderAdminPhoneNumberExtensionAccess)
             ? $phoneNumberExtensionAccess
             : new ServiceProviderAdminPhoneNumberExtensionAccess($phoneNumberExtensionAccess);
        $this->phoneNumberExtensionAccess->setName('phoneNumberExtensionAccess');
        return $this;
    }

    /**
     * 
     * @return ServiceProviderAdminPhoneNumberExtensionAccess
     */
    public function getPhoneNumberExtensionAccess()
    {
        return $this->phoneNumberExtensionAccess->getValue();
    }

    /**
     * 
     */
    public function setCallingLineIdNumberAccess($callingLineIdNumberAccess = null)
    {
        if (!$callingLineIdNumberAccess) return $this;
        $this->callingLineIdNumberAccess = ($callingLineIdNumberAccess InstanceOf ServiceProviderAdminCallingLineIdNumberAccess)
             ? $callingLineIdNumberAccess
             : new ServiceProviderAdminCallingLineIdNumberAccess($callingLineIdNumberAccess);
        $this->callingLineIdNumberAccess->setName('callingLineIdNumberAccess');
        return $this;
    }

    /**
     * 
     * @return ServiceProviderAdminCallingLineIdNumberAccess
     */
    public function getCallingLineIdNumberAccess()
    {
        return $this->callingLineIdNumberAccess->getValue();
    }

    /**
     * 
     */
    public function setServiceAccess($serviceAccess = null)
    {
        if (!$serviceAccess) return $this;
        $this->serviceAccess = ($serviceAccess InstanceOf ServiceProviderAdminServiceAccess)
             ? $serviceAccess
             : new ServiceProviderAdminServiceAccess($serviceAccess);
        $this->serviceAccess->setName('serviceAccess');
        return $this;
    }

    /**
     * 
     * @return ServiceProviderAdminServiceAccess
     */
    public function getServiceAccess()
    {
        return $this->serviceAccess->getValue();
    }

    /**
     * 
     */
    public function setServicePackAccess($servicePackAccess = null)
    {
        if (!$servicePackAccess) return $this;
        $this->servicePackAccess = ($servicePackAccess InstanceOf ServiceProviderAdminServicePackAccess)
             ? $servicePackAccess
             : new ServiceProviderAdminServicePackAccess($servicePackAccess);
        $this->servicePackAccess->setName('servicePackAccess');
        return $this;
    }

    /**
     * 
     * @return ServiceProviderAdminServicePackAccess
     */
    public function getServicePackAccess()
    {
        return $this->servicePackAccess->getValue();
    }

    /**
     * 
     */
    public function setSessionAdmissionControlAccess($sessionAdmissionControlAccess = null)
    {
        if (!$sessionAdmissionControlAccess) return $this;
        $this->sessionAdmissionControlAccess = ($sessionAdmissionControlAccess InstanceOf ServiceProviderAdminSessionAdmissionControlAccess)
             ? $sessionAdmissionControlAccess
             : new ServiceProviderAdminSessionAdmissionControlAccess($sessionAdmissionControlAccess);
        $this->sessionAdmissionControlAccess->setName('sessionAdmissionControlAccess');
        return $this;
    }

    /**
     * 
     * @return ServiceProviderAdminSessionAdmissionControlAccess
     */
    public function getSessionAdmissionControlAccess()
    {
        return $this->sessionAdmissionControlAccess->getValue();
    }

    /**
     * 
     */
    public function setWebBrandingAccess($webBrandingAccess = null)
    {
        if (!$webBrandingAccess) return $this;
        $this->webBrandingAccess = ($webBrandingAccess InstanceOf ServiceProviderAdminWebBrandingAccess)
             ? $webBrandingAccess
             : new ServiceProviderAdminWebBrandingAccess($webBrandingAccess);
        $this->webBrandingAccess->setName('webBrandingAccess');
        return $this;
    }

    /**
     * 
     * @return ServiceProviderAdminWebBrandingAccess
     */
    public function getWebBrandingAccess()
    {
        return $this->webBrandingAccess->getValue();
    }

    /**
     * 
     */
    public function setOfficeZoneAccess($officeZoneAccess = null)
    {
        if (!$officeZoneAccess) return $this;
        $this->officeZoneAccess = ($officeZoneAccess InstanceOf ServiceProviderAdminOfficeZoneAccess)
             ? $officeZoneAccess
             : new ServiceProviderAdminOfficeZoneAccess($officeZoneAccess);
        $this->officeZoneAccess->setName('officeZoneAccess');
        return $this;
    }

    /**
     * 
     * @return ServiceProviderAdminOfficeZoneAccess
     */
    public function getOfficeZoneAccess()
    {
        return $this->officeZoneAccess->getValue();
    }

    /**
     * 
     */
    public function setNetworkPolicyAccess($networkPolicyAccess = null)
    {
        if (!$networkPolicyAccess) return $this;
        $this->networkPolicyAccess = ($networkPolicyAccess InstanceOf EnterpriseAdminNetworkPolicyAccess)
             ? $networkPolicyAccess
             : new EnterpriseAdminNetworkPolicyAccess($networkPolicyAccess);
        $this->networkPolicyAccess->setName('networkPolicyAccess');
        return $this;
    }

    /**
     * 
     * @return EnterpriseAdminNetworkPolicyAccess
     */
    public function getNetworkPolicyAccess()
    {
        return $this->networkPolicyAccess->getValue();
    }
}
