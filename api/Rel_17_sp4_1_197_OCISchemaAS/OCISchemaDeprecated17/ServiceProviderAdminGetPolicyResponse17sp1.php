<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated17; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderAdminSessionAdmissionControlAccess;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderAdminCommunicationBarringAccess;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderAdminPhoneNumberExtensionAccess;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderAdminCallingLineIdNumberAccess;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderAdminAccessDeviceAccess;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderAdminWebBrandingAccess;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderAdminServicePackAccess;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderAdminDepartmentAccess;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderAdminOfficeZoneAccess;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\EnterpriseAdminNetworkPolicyAccess;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderAdminProfileAccess;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderAdminServiceAccess;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderAdminGroupAccess;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderAdminAdminAccess;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderAdminUserAccess;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to ServiceProviderAdminGetPolicyRequest17sp1.
 *         Contains the policy settings for the service provider administrator.
 *         The networkPolicyAccess is returned only for the enterprise administrator.
 *         The following elements are only used in HSS data mode:
 *           communicationBarringAccess
 */
class ServiceProviderAdminGetPolicyResponse17sp1 extends ComplexType implements ComplexInterface
{
    public    $name = 'ServiceProviderAdminGetPolicyResponse17sp1';
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

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated17\ServiceProviderAdminGetPolicyResponse17sp1 $response
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
        $this->profileAccess->setName('profileAccess');
        return $this;
    }

    /**
     * 
     * @return ServiceProviderAdminProfileAccess $profileAccess
     */
    public function getProfileAccess()
    {
        return ($this->profileAccess) ? $this->profileAccess->getValue() : null;
    }

    /**
     * 
     */
    public function setGroupAccess($groupAccess = null)
    {
        $this->groupAccess = ($groupAccess InstanceOf ServiceProviderAdminGroupAccess)
             ? $groupAccess
             : new ServiceProviderAdminGroupAccess($groupAccess);
        $this->groupAccess->setName('groupAccess');
        return $this;
    }

    /**
     * 
     * @return ServiceProviderAdminGroupAccess $groupAccess
     */
    public function getGroupAccess()
    {
        return ($this->groupAccess) ? $this->groupAccess->getValue() : null;
    }

    /**
     * 
     */
    public function setUserAccess($userAccess = null)
    {
        $this->userAccess = ($userAccess InstanceOf ServiceProviderAdminUserAccess)
             ? $userAccess
             : new ServiceProviderAdminUserAccess($userAccess);
        $this->userAccess->setName('userAccess');
        return $this;
    }

    /**
     * 
     * @return ServiceProviderAdminUserAccess $userAccess
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
        $this->adminAccess = ($adminAccess InstanceOf ServiceProviderAdminAdminAccess)
             ? $adminAccess
             : new ServiceProviderAdminAdminAccess($adminAccess);
        $this->adminAccess->setName('adminAccess');
        return $this;
    }

    /**
     * 
     * @return ServiceProviderAdminAdminAccess $adminAccess
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
        $this->departmentAccess = ($departmentAccess InstanceOf ServiceProviderAdminDepartmentAccess)
             ? $departmentAccess
             : new ServiceProviderAdminDepartmentAccess($departmentAccess);
        $this->departmentAccess->setName('departmentAccess');
        return $this;
    }

    /**
     * 
     * @return ServiceProviderAdminDepartmentAccess $departmentAccess
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
        $this->accessDeviceAccess = ($accessDeviceAccess InstanceOf ServiceProviderAdminAccessDeviceAccess)
             ? $accessDeviceAccess
             : new ServiceProviderAdminAccessDeviceAccess($accessDeviceAccess);
        $this->accessDeviceAccess->setName('accessDeviceAccess');
        return $this;
    }

    /**
     * 
     * @return ServiceProviderAdminAccessDeviceAccess $accessDeviceAccess
     */
    public function getAccessDeviceAccess()
    {
        return ($this->accessDeviceAccess) ? $this->accessDeviceAccess->getValue() : null;
    }

    /**
     * 
     */
    public function setPhoneNumberExtensionAccess($phoneNumberExtensionAccess = null)
    {
        $this->phoneNumberExtensionAccess = ($phoneNumberExtensionAccess InstanceOf ServiceProviderAdminPhoneNumberExtensionAccess)
             ? $phoneNumberExtensionAccess
             : new ServiceProviderAdminPhoneNumberExtensionAccess($phoneNumberExtensionAccess);
        $this->phoneNumberExtensionAccess->setName('phoneNumberExtensionAccess');
        return $this;
    }

    /**
     * 
     * @return ServiceProviderAdminPhoneNumberExtensionAccess $phoneNumberExtensionAccess
     */
    public function getPhoneNumberExtensionAccess()
    {
        return ($this->phoneNumberExtensionAccess) ? $this->phoneNumberExtensionAccess->getValue() : null;
    }

    /**
     * 
     */
    public function setCallingLineIdNumberAccess($callingLineIdNumberAccess = null)
    {
        $this->callingLineIdNumberAccess = ($callingLineIdNumberAccess InstanceOf ServiceProviderAdminCallingLineIdNumberAccess)
             ? $callingLineIdNumberAccess
             : new ServiceProviderAdminCallingLineIdNumberAccess($callingLineIdNumberAccess);
        $this->callingLineIdNumberAccess->setName('callingLineIdNumberAccess');
        return $this;
    }

    /**
     * 
     * @return ServiceProviderAdminCallingLineIdNumberAccess $callingLineIdNumberAccess
     */
    public function getCallingLineIdNumberAccess()
    {
        return ($this->callingLineIdNumberAccess) ? $this->callingLineIdNumberAccess->getValue() : null;
    }

    /**
     * 
     */
    public function setServiceAccess($serviceAccess = null)
    {
        $this->serviceAccess = ($serviceAccess InstanceOf ServiceProviderAdminServiceAccess)
             ? $serviceAccess
             : new ServiceProviderAdminServiceAccess($serviceAccess);
        $this->serviceAccess->setName('serviceAccess');
        return $this;
    }

    /**
     * 
     * @return ServiceProviderAdminServiceAccess $serviceAccess
     */
    public function getServiceAccess()
    {
        return ($this->serviceAccess) ? $this->serviceAccess->getValue() : null;
    }

    /**
     * 
     */
    public function setServicePackAccess($servicePackAccess = null)
    {
        $this->servicePackAccess = ($servicePackAccess InstanceOf ServiceProviderAdminServicePackAccess)
             ? $servicePackAccess
             : new ServiceProviderAdminServicePackAccess($servicePackAccess);
        $this->servicePackAccess->setName('servicePackAccess');
        return $this;
    }

    /**
     * 
     * @return ServiceProviderAdminServicePackAccess $servicePackAccess
     */
    public function getServicePackAccess()
    {
        return ($this->servicePackAccess) ? $this->servicePackAccess->getValue() : null;
    }

    /**
     * 
     */
    public function setSessionAdmissionControlAccess($sessionAdmissionControlAccess = null)
    {
        $this->sessionAdmissionControlAccess = ($sessionAdmissionControlAccess InstanceOf ServiceProviderAdminSessionAdmissionControlAccess)
             ? $sessionAdmissionControlAccess
             : new ServiceProviderAdminSessionAdmissionControlAccess($sessionAdmissionControlAccess);
        $this->sessionAdmissionControlAccess->setName('sessionAdmissionControlAccess');
        return $this;
    }

    /**
     * 
     * @return ServiceProviderAdminSessionAdmissionControlAccess $sessionAdmissionControlAccess
     */
    public function getSessionAdmissionControlAccess()
    {
        return ($this->sessionAdmissionControlAccess) ? $this->sessionAdmissionControlAccess->getValue() : null;
    }

    /**
     * 
     */
    public function setWebBrandingAccess($webBrandingAccess = null)
    {
        $this->webBrandingAccess = ($webBrandingAccess InstanceOf ServiceProviderAdminWebBrandingAccess)
             ? $webBrandingAccess
             : new ServiceProviderAdminWebBrandingAccess($webBrandingAccess);
        $this->webBrandingAccess->setName('webBrandingAccess');
        return $this;
    }

    /**
     * 
     * @return ServiceProviderAdminWebBrandingAccess $webBrandingAccess
     */
    public function getWebBrandingAccess()
    {
        return ($this->webBrandingAccess) ? $this->webBrandingAccess->getValue() : null;
    }

    /**
     * 
     */
    public function setOfficeZoneAccess($officeZoneAccess = null)
    {
        $this->officeZoneAccess = ($officeZoneAccess InstanceOf ServiceProviderAdminOfficeZoneAccess)
             ? $officeZoneAccess
             : new ServiceProviderAdminOfficeZoneAccess($officeZoneAccess);
        $this->officeZoneAccess->setName('officeZoneAccess');
        return $this;
    }

    /**
     * 
     * @return ServiceProviderAdminOfficeZoneAccess $officeZoneAccess
     */
    public function getOfficeZoneAccess()
    {
        return ($this->officeZoneAccess) ? $this->officeZoneAccess->getValue() : null;
    }

    /**
     * 
     */
    public function setCommunicationBarringAccess($communicationBarringAccess = null)
    {
        $this->communicationBarringAccess = ($communicationBarringAccess InstanceOf ServiceProviderAdminCommunicationBarringAccess)
             ? $communicationBarringAccess
             : new ServiceProviderAdminCommunicationBarringAccess($communicationBarringAccess);
        $this->communicationBarringAccess->setName('communicationBarringAccess');
        return $this;
    }

    /**
     * 
     * @return ServiceProviderAdminCommunicationBarringAccess $communicationBarringAccess
     */
    public function getCommunicationBarringAccess()
    {
        return ($this->communicationBarringAccess) ? $this->communicationBarringAccess->getValue() : null;
    }

    /**
     * 
     */
    public function setNetworkPolicyAccess($networkPolicyAccess = null)
    {
        $this->networkPolicyAccess = ($networkPolicyAccess InstanceOf EnterpriseAdminNetworkPolicyAccess)
             ? $networkPolicyAccess
             : new EnterpriseAdminNetworkPolicyAccess($networkPolicyAccess);
        $this->networkPolicyAccess->setName('networkPolicyAccess');
        return $this;
    }

    /**
     * 
     * @return EnterpriseAdminNetworkPolicyAccess $networkPolicyAccess
     */
    public function getNetworkPolicyAccess()
    {
        return ($this->networkPolicyAccess) ? $this->networkPolicyAccess->getValue() : null;
    }
}
