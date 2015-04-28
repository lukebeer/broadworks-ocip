<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupDepartmentAdminTrunkGroupAccess;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupDepartmentAdminUserAccess;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupUserGroupDirectoryAccess;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupUserAuthenticationAccess;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupLDAPIntegrationAccess;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupVoiceMessagingAccess;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupCallingPlanAccess;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupUserProfileAccess;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupExtensionAccess;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Response to GroupPolicyGetRequest14sp1.
 *         Contains the policy settings for the group.
 */
class GroupPolicyGetResponse14sp1 extends ComplexType implements ComplexInterface
{
    public    $elementName = 'GroupPolicyGetResponse14sp1';
    protected $callingPlanAccess;
    protected $extensionAccess;
    protected $ldapIntegrationAccess;
    protected $voiceMessagingAccess;
    protected $departmentAdminUserAccess;
    protected $departmentAdminTrunkGroupAccess;
    protected $userAuthenticationAccess;
    protected $userGroupDirectoryAccess;
    protected $userProfileAccess;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14\GroupPolicyGetResponse14sp1 $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setCallingPlanAccess($callingPlanAccess = null)
    {
        $this->callingPlanAccess = ($callingPlanAccess InstanceOf GroupCallingPlanAccess)
             ? $callingPlanAccess
             : new GroupCallingPlanAccess($callingPlanAccess);
        $this->callingPlanAccess->setElementName('callingPlanAccess');
        return $this;
    }

    /**
     * 
     * @return GroupCallingPlanAccess $callingPlanAccess
     */
    public function getCallingPlanAccess()
    {
        return ($this->callingPlanAccess)
            ? $this->callingPlanAccess->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setExtensionAccess($extensionAccess = null)
    {
        $this->extensionAccess = ($extensionAccess InstanceOf GroupExtensionAccess)
             ? $extensionAccess
             : new GroupExtensionAccess($extensionAccess);
        $this->extensionAccess->setElementName('extensionAccess');
        return $this;
    }

    /**
     * 
     * @return GroupExtensionAccess $extensionAccess
     */
    public function getExtensionAccess()
    {
        return ($this->extensionAccess)
            ? $this->extensionAccess->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setLdapIntegrationAccess($ldapIntegrationAccess = null)
    {
        $this->ldapIntegrationAccess = ($ldapIntegrationAccess InstanceOf GroupLDAPIntegrationAccess)
             ? $ldapIntegrationAccess
             : new GroupLDAPIntegrationAccess($ldapIntegrationAccess);
        $this->ldapIntegrationAccess->setElementName('ldapIntegrationAccess');
        return $this;
    }

    /**
     * 
     * @return GroupLDAPIntegrationAccess $ldapIntegrationAccess
     */
    public function getLdapIntegrationAccess()
    {
        return ($this->ldapIntegrationAccess)
            ? $this->ldapIntegrationAccess->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setVoiceMessagingAccess($voiceMessagingAccess = null)
    {
        $this->voiceMessagingAccess = ($voiceMessagingAccess InstanceOf GroupVoiceMessagingAccess)
             ? $voiceMessagingAccess
             : new GroupVoiceMessagingAccess($voiceMessagingAccess);
        $this->voiceMessagingAccess->setElementName('voiceMessagingAccess');
        return $this;
    }

    /**
     * 
     * @return GroupVoiceMessagingAccess $voiceMessagingAccess
     */
    public function getVoiceMessagingAccess()
    {
        return ($this->voiceMessagingAccess)
            ? $this->voiceMessagingAccess->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setDepartmentAdminUserAccess($departmentAdminUserAccess = null)
    {
        $this->departmentAdminUserAccess = ($departmentAdminUserAccess InstanceOf GroupDepartmentAdminUserAccess)
             ? $departmentAdminUserAccess
             : new GroupDepartmentAdminUserAccess($departmentAdminUserAccess);
        $this->departmentAdminUserAccess->setElementName('departmentAdminUserAccess');
        return $this;
    }

    /**
     * 
     * @return GroupDepartmentAdminUserAccess $departmentAdminUserAccess
     */
    public function getDepartmentAdminUserAccess()
    {
        return ($this->departmentAdminUserAccess)
            ? $this->departmentAdminUserAccess->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setDepartmentAdminTrunkGroupAccess($departmentAdminTrunkGroupAccess = null)
    {
        $this->departmentAdminTrunkGroupAccess = ($departmentAdminTrunkGroupAccess InstanceOf GroupDepartmentAdminTrunkGroupAccess)
             ? $departmentAdminTrunkGroupAccess
             : new GroupDepartmentAdminTrunkGroupAccess($departmentAdminTrunkGroupAccess);
        $this->departmentAdminTrunkGroupAccess->setElementName('departmentAdminTrunkGroupAccess');
        return $this;
    }

    /**
     * 
     * @return GroupDepartmentAdminTrunkGroupAccess $departmentAdminTrunkGroupAccess
     */
    public function getDepartmentAdminTrunkGroupAccess()
    {
        return ($this->departmentAdminTrunkGroupAccess)
            ? $this->departmentAdminTrunkGroupAccess->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setUserAuthenticationAccess($userAuthenticationAccess = null)
    {
        $this->userAuthenticationAccess = ($userAuthenticationAccess InstanceOf GroupUserAuthenticationAccess)
             ? $userAuthenticationAccess
             : new GroupUserAuthenticationAccess($userAuthenticationAccess);
        $this->userAuthenticationAccess->setElementName('userAuthenticationAccess');
        return $this;
    }

    /**
     * 
     * @return GroupUserAuthenticationAccess $userAuthenticationAccess
     */
    public function getUserAuthenticationAccess()
    {
        return ($this->userAuthenticationAccess)
            ? $this->userAuthenticationAccess->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setUserGroupDirectoryAccess($userGroupDirectoryAccess = null)
    {
        $this->userGroupDirectoryAccess = ($userGroupDirectoryAccess InstanceOf GroupUserGroupDirectoryAccess)
             ? $userGroupDirectoryAccess
             : new GroupUserGroupDirectoryAccess($userGroupDirectoryAccess);
        $this->userGroupDirectoryAccess->setElementName('userGroupDirectoryAccess');
        return $this;
    }

    /**
     * 
     * @return GroupUserGroupDirectoryAccess $userGroupDirectoryAccess
     */
    public function getUserGroupDirectoryAccess()
    {
        return ($this->userGroupDirectoryAccess)
            ? $this->userGroupDirectoryAccess->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setUserProfileAccess($userProfileAccess = null)
    {
        $this->userProfileAccess = ($userProfileAccess InstanceOf GroupUserProfileAccess)
             ? $userProfileAccess
             : new GroupUserProfileAccess($userProfileAccess);
        $this->userProfileAccess->setElementName('userProfileAccess');
        return $this;
    }

    /**
     * 
     * @return GroupUserProfileAccess $userProfileAccess
     */
    public function getUserProfileAccess()
    {
        return ($this->userProfileAccess)
            ? $this->userProfileAccess->getElementValue()
            : null;
    }
}
