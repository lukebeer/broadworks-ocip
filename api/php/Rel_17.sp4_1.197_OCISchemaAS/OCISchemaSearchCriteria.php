<?php
class OCISchemaSearchCriteria {
    # Abstract base type for specifing search criteria. A search criteria is an optional element
    static public function SearchCriteria() {
        return [
            OCIDataTypes::OCI_NAME   => __FUNCTION__,
            OCIDataTypes::OCI_PARAMS => null
        ];
    }

    # Criteria for searching for device line/port, or SIPURI domain part.
    static public function SearchCriteriaLinePortDomain($mode=null,$value=null,$isCaseInsensitive=null) {
        return [
            OCIDataTypes::OCI_NAME   => __FUNCTION__,
            OCIDataTypes::OCI_PARAMS => [
                'mode' => $mode,
                'value' => $value,
                'isCaseInsensitive' => $isCaseInsensitive
            ]
        ];
    }

    # Criteria for searching for a call center
    static public function SearchCriteriaCallCenterName($mode=null,$value=null,$isCaseInsensitive=null) {
        return [
            OCIDataTypes::OCI_NAME   => __FUNCTION__,
            OCIDataTypes::OCI_PARAMS => [
                'mode' => $mode,
                'value' => $value,
                'isCaseInsensitive' => $isCaseInsensitive
            ]
        ];
    }

    # Criteria for searching for a particular call center enhanced reporting report template.
    static public function SearchCriteriaExactCallCenterReportTemplateKey($reportTemplate=null) {
        return [
            OCIDataTypes::OCI_NAME   => __FUNCTION__,
            OCIDataTypes::OCI_PARAMS => [
                'reportTemplate' => $reportTemplate
            ]
        ];
    }

    # Criteria for searching for a particular call center enhanced reporting report template.
    static public function SearchCriteriaCallCenterReportTemplateName($mode=null,$value=null,$isCaseInsensitive=null) {
        return [
            OCIDataTypes::OCI_NAME   => __FUNCTION__,
            OCIDataTypes::OCI_PARAMS => [
                'mode' => $mode,
                'value' => $value,
                'isCaseInsensitive' => $isCaseInsensitive
            ]
        ];
    }

    # Criteria for searching for a call center enhanced reporting scheduled report name.
    static public function SearchCriteriaCallCenterScheduledReportName($mode=null,$value=null,$isCaseInsensitive=null) {
        return [
            OCIDataTypes::OCI_NAME   => __FUNCTION__,
            OCIDataTypes::OCI_PARAMS => [
                'mode' => $mode,
                'value' => $value,
                'isCaseInsensitive' => $isCaseInsensitive
            ]
        ];
    }

    # Criteria for searching for device line/port, or SIPURI user part.
    static public function SearchCriteriaLinePortUserPart($mode=null,$value=null,$isCaseInsensitive=null) {
        return [
            OCIDataTypes::OCI_NAME   => __FUNCTION__,
            OCIDataTypes::OCI_PARAMS => [
                'mode' => $mode,
                'value' => $value,
                'isCaseInsensitive' => $isCaseInsensitive
            ]
        ];
    }

    # Criteria for searching for device MAC address.
    static public function SearchCriteriaDeviceMACAddress($mode=null,$value=null,$isCaseInsensitive=null) {
        return [
            OCIDataTypes::OCI_NAME   => __FUNCTION__,
            OCIDataTypes::OCI_PARAMS => [
                'mode' => $mode,
                'value' => $value,
                'isCaseInsensitive' => $isCaseInsensitive
            ]
        ];
    }

    # Criteria for searching for device name.
    static public function SearchCriteriaDeviceName($mode=null,$value=null,$isCaseInsensitive=null) {
        return [
            OCIDataTypes::OCI_NAME   => __FUNCTION__,
            OCIDataTypes::OCI_PARAMS => [
                'mode' => $mode,
                'value' => $value,
                'isCaseInsensitive' => $isCaseInsensitive
            ]
        ];
    }

    # Criteria for searching for device network address.
    static public function SearchCriteriaDeviceNetAddress($mode=null,$value=null,$isCaseInsensitive=null) {
        return [
            OCIDataTypes::OCI_NAME   => __FUNCTION__,
            OCIDataTypes::OCI_PARAMS => [
                'mode' => $mode,
                'value' => $value,
                'isCaseInsensitive' => $isCaseInsensitive
            ]
        ];
    }

    # Criteria for searching for device serial number.
    static public function SearchCriteriaDeviceSerialNumber($mode=null,$value=null,$isCaseInsensitive=null) {
        return [
            OCIDataTypes::OCI_NAME   => __FUNCTION__,
            OCIDataTypes::OCI_PARAMS => [
                'mode' => $mode,
                'value' => $value,
                'isCaseInsensitive' => $isCaseInsensitive
            ]
        ];
    }

    # Criteria for searching for device type.
    static public function SearchCriteriaDeviceType($mode=null,$value=null,$isCaseInsensitive=null) {
        return [
            OCIDataTypes::OCI_NAME   => __FUNCTION__,
            OCIDataTypes::OCI_PARAMS => [
                'mode' => $mode,
                'value' => $value,
                'isCaseInsensitive' => $isCaseInsensitive
            ]
        ];
    }

    # Criteria for searching for digit pattern.
    static public function SearchCriteriaDigitPattern($mode=null,$value=null,$isCaseInsensitive=null) {
        return [
            OCIDataTypes::OCI_NAME   => __FUNCTION__,
            OCIDataTypes::OCI_PARAMS => [
                'mode' => $mode,
                'value' => $value,
                'isCaseInsensitive' => $isCaseInsensitive
            ]
        ];
    }

    # Criteria for searching for a DN.
    static public function SearchCriteriaDn($mode=null,$value=null,$isCaseInsensitive=null) {
        return [
            OCIDataTypes::OCI_NAME   => __FUNCTION__,
            OCIDataTypes::OCI_PARAMS => [
                'mode' => $mode,
                'value' => $value,
                'isCaseInsensitive' => $isCaseInsensitive
            ]
        ];
    }

    # Criteria for searching for call center scheduled report created by a
    static public function SearchCriteriaExactCallCenterScheduledReportCreatedBySupervisor($createdBySupervisor=null) {
        return [
            OCIDataTypes::OCI_NAME   => __FUNCTION__,
            OCIDataTypes::OCI_PARAMS => [
                'createdBySupervisor' => $createdBySupervisor
            ]
        ];
    }

    # Criteria for searching for a particular call center scheduled report's service provider.
    static public function SearchCriteriaExactCallCenterScheduledReportServiceProvider($serviceProviderId=null) {
        return [
            OCIDataTypes::OCI_NAME   => __FUNCTION__,
            OCIDataTypes::OCI_PARAMS => [
                'serviceProviderId' => $serviceProviderId
            ]
        ];
    }

    # Criteria for searching for a particular fully specified call center scheduled
    static public function SearchCriteriaExactCallCenterScheduledReportGroup($serviceProviderId=null,$groupId=null) {
        return [
            OCIDataTypes::OCI_NAME   => __FUNCTION__,
            OCIDataTypes::OCI_PARAMS => [
                'serviceProviderId' => $serviceProviderId,
                'groupId' => $groupId
            ]
        ];
    }

    # Criteria for searching for a Service Code.
    static public function SearchCriteriaServiceCode($mode=null,$value=null,$isCaseInsensitive=null) {
        return [
            OCIDataTypes::OCI_NAME   => __FUNCTION__,
            OCIDataTypes::OCI_PARAMS => [
                'mode' => $mode,
                'value' => $value,
                'isCaseInsensitive' => $isCaseInsensitive
            ]
        ];
    }

    # Criteria for searching for a Service Code description.
    static public function SearchCriteriaServiceCodeDescription($mode=null,$value=null,$isCaseInsensitive=null) {
        return [
            OCIDataTypes::OCI_NAME   => __FUNCTION__,
            OCIDataTypes::OCI_PARAMS => [
                'mode' => $mode,
                'value' => $value,
                'isCaseInsensitive' => $isCaseInsensitive
            ]
        ];
    }

    # Criteria for searching for a system service DN.
    static public function SearchCriteriaSystemServiceDn($mode=null,$value=null,$isCaseInsensitive=null) {
        return [
            OCIDataTypes::OCI_NAME   => __FUNCTION__,
            OCIDataTypes::OCI_PARAMS => [
                'mode' => $mode,
                'value' => $value,
                'isCaseInsensitive' => $isCaseInsensitive
            ]
        ];
    }

    # Criteria for searching for a name in an enterprise common phone list.
    static public function SearchCriteriaEnterpriseCommonPhoneListName($mode=null,$value=null,$isCaseInsensitive=null) {
        return [
            OCIDataTypes::OCI_NAME   => __FUNCTION__,
            OCIDataTypes::OCI_PARAMS => [
                'mode' => $mode,
                'value' => $value,
                'isCaseInsensitive' => $isCaseInsensitive
            ]
        ];
    }

    # Criteria for searching for a phone number in an enterprise common phone list.
    static public function SearchCriteriaEnterpriseCommonPhoneListNumber($mode=null,$value=null,$isCaseInsensitive=null) {
        return [
            OCIDataTypes::OCI_NAME   => __FUNCTION__,
            OCIDataTypes::OCI_PARAMS => [
                'mode' => $mode,
                'value' => $value,
                'isCaseInsensitive' => $isCaseInsensitive
            ]
        ];
    }

    # Criteria for searching for a email address.
    static public function SearchCriteriaEmailAddress($mode=null,$value=null,$isCaseInsensitive=null) {
        return [
            OCIDataTypes::OCI_NAME   => __FUNCTION__,
            OCIDataTypes::OCI_PARAMS => [
                'mode' => $mode,
                'value' => $value,
                'isCaseInsensitive' => $isCaseInsensitive
            ]
        ];
    }

    # Criteria for searching for a particular fully specified alternate trunk identity
    static public function SearchCriteriaAlternateTrunkIdentity($mode=null,$value=null,$isCaseInsensitive=null) {
        return [
            OCIDataTypes::OCI_NAME   => __FUNCTION__,
            OCIDataTypes::OCI_PARAMS => [
                'mode' => $mode,
                'value' => $value,
                'isCaseInsensitive' => $isCaseInsensitive
            ]
        ];
    }

    # Criteria for searching for a particular fully specified custom contact directory.
    static public function SearchCriteriaExactCustomContactDirectory($customContactDirectoryName=null) {
        return [
            OCIDataTypes::OCI_NAME   => __FUNCTION__,
            OCIDataTypes::OCI_PARAMS => [
                'customContactDirectoryName' => $customContactDirectoryName
            ]
        ];
    }

    # Criteria for searching for a particular device level.
    static public function SearchCriteriaExactDeviceLevel($deviceLevel=null) {
        return [
            OCIDataTypes::OCI_NAME   => __FUNCTION__,
            OCIDataTypes::OCI_PARAMS => [
                'deviceLevel' => $deviceLevel
            ]
        ];
    }

    # Criteria for searching for a particular fully specified service provider associated with a device.
    static public function SearchCriteriaExactDeviceServiceProvider($serviceProviderId=null) {
        return [
            OCIDataTypes::OCI_NAME   => __FUNCTION__,
            OCIDataTypes::OCI_PARAMS => [
                'serviceProviderId' => $serviceProviderId
            ]
        ];
    }

    # Criteria for searching for a particular fully specified device type.
    static public function SearchCriteriaExactDeviceType($deviceType=null) {
        return [
            OCIDataTypes::OCI_NAME   => __FUNCTION__,
            OCIDataTypes::OCI_PARAMS => [
                'deviceType' => $deviceType
            ]
        ];
    }

    # Criteria for searching for a particular Dn activation state.
    static public function SearchCriteriaExactDnActivation($activated=null) {
        return [
            OCIDataTypes::OCI_NAME   => __FUNCTION__,
            OCIDataTypes::OCI_PARAMS => [
                'activated' => $activated
            ]
        ];
    }

    # Criteria for searching for a particular fully specified DN's department.
    static public function SearchCriteriaExactDnDepartment($departmentKey=null) {
        return [
            OCIDataTypes::OCI_NAME   => __FUNCTION__,
            OCIDataTypes::OCI_PARAMS => [
                'departmentKey' => $departmentKey
            ]
        ];
    }

    # Criteria for searching for a particular endpoint type.
    static public function SearchCriteriaExactEndpointType($endpointType=null) {
        return [
            OCIDataTypes::OCI_NAME   => __FUNCTION__,
            OCIDataTypes::OCI_PARAMS => [
                'endpointType' => $endpointType
            ]
        ];
    }

    # Criteria for searching for an organization type.
    static public function SearchCriteriaExactOrganizationType($organizationType=null) {
        return [
            OCIDataTypes::OCI_NAME   => __FUNCTION__,
            OCIDataTypes::OCI_PARAMS => [
                'organizationType' => $organizationType
            ]
        ];
    }

    # Criteria for searching for a particular Voice VPN policy selection.
    static public function SearchCriteriaExactPolicySelection($policySelection=null) {
        return [
            OCIDataTypes::OCI_NAME   => __FUNCTION__,
            OCIDataTypes::OCI_PARAMS => [
                'policySelection' => $policySelection
            ]
        ];
    }

    # Criteria for searching for a particular fully specified service provider.
    static public function SearchCriteriaExactServiceProvider($serviceProviderId=null) {
        return [
            OCIDataTypes::OCI_NAME   => __FUNCTION__,
            OCIDataTypes::OCI_PARAMS => [
                'serviceProviderId' => $serviceProviderId
            ]
        ];
    }

    # Criteria for searching for a particular fully specified SignalingAddressType.
    static public function SearchCriteriaExactSignalingAddressType($profile=null) {
        return [
            OCIDataTypes::OCI_NAME   => __FUNCTION__,
            OCIDataTypes::OCI_PARAMS => [
                'profile' => $profile
            ]
        ];
    }

    # Criteria for searching for a particular fully specified user's department.
    static public function SearchCriteriaExactUserDepartment($departmentKey=null) {
        return [
            OCIDataTypes::OCI_NAME   => __FUNCTION__,
            OCIDataTypes::OCI_PARAMS => [
                'departmentKey' => $departmentKey
            ]
        ];
    }

    # Criteria for searching for a particular fully specified user's group.
    static public function SearchCriteriaExactUserGroup($serviceProviderId=null,$groupId=null) {
        return [
            OCIDataTypes::OCI_NAME   => __FUNCTION__,
            OCIDataTypes::OCI_PARAMS => [
                'serviceProviderId' => $serviceProviderId,
                'groupId' => $groupId
            ]
        ];
    }

    # Criteria for searching for users with a specified network class of service.
    static public function SearchCriteriaExactUserNetworkClassOfService($networkClassOfService=null) {
        return [
            OCIDataTypes::OCI_NAME   => __FUNCTION__,
            OCIDataTypes::OCI_PARAMS => [
                'networkClassOfService' => $networkClassOfService
            ]
        ];
    }

    # Criteria for searching for a particular User Type.
    static public function SearchCriteriaExactUserType($userType=null) {
        return [
            OCIDataTypes::OCI_NAME   => __FUNCTION__,
            OCIDataTypes::OCI_PARAMS => [
                'userType' => $userType
            ]
        ];
    }

    # Criteria for searching for user in/not in a trunk group.
    static public function SearchCriteriaExactUserInTrunkGroup($userInTrunkGroup=null) {
        return [
            OCIDataTypes::OCI_NAME   => __FUNCTION__,
            OCIDataTypes::OCI_PARAMS => [
                'userInTrunkGroup' => $userInTrunkGroup
            ]
        ];
    }

    # Criteria for searching for a particular fully specified Virtual On-Net Call Type Name.
    static public function SearchCriteriaExactVirtualOnNetCallTypeName($virtualOnNetCallTypeName=null) {
        return [
            OCIDataTypes::OCI_NAME   => __FUNCTION__,
            OCIDataTypes::OCI_PARAMS => [
                'virtualOnNetCallTypeName' => $virtualOnNetCallTypeName
            ]
        ];
    }

    # Criteria for searching for an extension.
    static public function SearchCriteriaExtension($mode=null,$value=null,$isCaseInsensitive=null) {
        return [
            OCIDataTypes::OCI_NAME   => __FUNCTION__,
            OCIDataTypes::OCI_PARAMS => [
                'mode' => $mode,
                'value' => $value,
                'isCaseInsensitive' => $isCaseInsensitive
            ]
        ];
    }

    # Criteria for searching for a name in a group common phone list.
    static public function SearchCriteriaGroupCommonPhoneListName($mode=null,$value=null,$isCaseInsensitive=null) {
        return [
            OCIDataTypes::OCI_NAME   => __FUNCTION__,
            OCIDataTypes::OCI_PARAMS => [
                'mode' => $mode,
                'value' => $value,
                'isCaseInsensitive' => $isCaseInsensitive
            ]
        ];
    }

    # Criteria for searching for a phone number in a group common phone list.
    static public function SearchCriteriaGroupCommonPhoneListNumber($mode=null,$value=null,$isCaseInsensitive=null) {
        return [
            OCIDataTypes::OCI_NAME   => __FUNCTION__,
            OCIDataTypes::OCI_PARAMS => [
                'mode' => $mode,
                'value' => $value,
                'isCaseInsensitive' => $isCaseInsensitive
            ]
        ];
    }

    # Criteria for searching for a group ID.
    static public function SearchCriteriaGroupId($mode=null,$value=null,$isCaseInsensitive=null) {
        return [
            OCIDataTypes::OCI_NAME   => __FUNCTION__,
            OCIDataTypes::OCI_PARAMS => [
                'mode' => $mode,
                'value' => $value,
                'isCaseInsensitive' => $isCaseInsensitive
            ]
        ];
    }

    # Criteria for searching for a group location dialing code.
    static public function SearchCriteriaGroupLocationCode($mode=null,$value=null,$isCaseInsensitive=null) {
        return [
            OCIDataTypes::OCI_NAME   => __FUNCTION__,
            OCIDataTypes::OCI_PARAMS => [
                'mode' => $mode,
                'value' => $value,
                'isCaseInsensitive' => $isCaseInsensitive
            ]
        ];
    }

    # Criteria for searching for a group name.
    static public function SearchCriteriaGroupName($mode=null,$value=null,$isCaseInsensitive=null) {
        return [
            OCIDataTypes::OCI_NAME   => __FUNCTION__,
            OCIDataTypes::OCI_PARAMS => [
                'mode' => $mode,
                'value' => $value,
                'isCaseInsensitive' => $isCaseInsensitive
            ]
        ];
    }

    # Criteria for searching for a system Home Network Msc Address.
    static public function SearchCriteriaHomeMscAddress($mode=null,$value=null,$isCaseInsensitive=null) {
        return [
            OCIDataTypes::OCI_NAME   => __FUNCTION__,
            OCIDataTypes::OCI_PARAMS => [
                'mode' => $mode,
                'value' => $value,
                'isCaseInsensitive' => $isCaseInsensitive
            ]
        ];
    }

    # Criteria for searching for an IMRN Number.
    static public function SearchCriteriaIMRN($mode=null,$value=null,$isCaseInsensitive=null) {
        return [
            OCIDataTypes::OCI_NAME   => __FUNCTION__,
            OCIDataTypes::OCI_PARAMS => [
                'mode' => $mode,
                'value' => $value,
                'isCaseInsensitive' => $isCaseInsensitive
            ]
        ];
    }

    # Criteria for searching for a Login Id.
    static public function SearchCriteriaLoginId($mode=null,$value=null,$isCaseInsensitive=null) {
        return [
            OCIDataTypes::OCI_NAME   => __FUNCTION__,
            OCIDataTypes::OCI_PARAMS => [
                'mode' => $mode,
                'value' => $value,
                'isCaseInsensitive' => $isCaseInsensitive
            ]
        ];
    }

    # Criteria for searching for a user's mobile phone number.
    static public function SearchCriteriaMobilePhoneNumber($mode=null,$value=null,$isCaseInsensitive=null) {
        return [
            OCIDataTypes::OCI_NAME   => __FUNCTION__,
            OCIDataTypes::OCI_PARAMS => [
                'mode' => $mode,
                'value' => $value,
                'isCaseInsensitive' => $isCaseInsensitive
            ]
        ];
    }

    # Criteria for searching for a route point
    static public function SearchCriteriaRoutePointName($mode=null,$value=null,$isCaseInsensitive=null) {
        return [
            OCIDataTypes::OCI_NAME   => __FUNCTION__,
            OCIDataTypes::OCI_PARAMS => [
                'mode' => $mode,
                'value' => $value,
                'isCaseInsensitive' => $isCaseInsensitive
            ]
        ];
    }

    # Criteria for searching for a Physical Location.
    static public function SearchCriteriaPhysicalLocation($mode=null,$value=null,$isCaseInsensitive=null) {
        return [
            OCIDataTypes::OCI_NAME   => __FUNCTION__,
            OCIDataTypes::OCI_PARAMS => [
                'mode' => $mode,
                'value' => $value,
                'isCaseInsensitive' => $isCaseInsensitive
            ]
        ];
    }

    # Criteria for searching for a system Roaming Network Msc Address.
    static public function SearchCriteriaRoamingMscAddress($mode=null,$value=null,$isCaseInsensitive=null) {
        return [
            OCIDataTypes::OCI_NAME   => __FUNCTION__,
            OCIDataTypes::OCI_PARAMS => [
                'mode' => $mode,
                'value' => $value,
                'isCaseInsensitive' => $isCaseInsensitive
            ]
        ];
    }

    # Criteria for searching for a service provider ID.
    static public function SearchCriteriaServiceProviderId($mode=null,$value=null,$isCaseInsensitive=null) {
        return [
            OCIDataTypes::OCI_NAME   => __FUNCTION__,
            OCIDataTypes::OCI_PARAMS => [
                'mode' => $mode,
                'value' => $value,
                'isCaseInsensitive' => $isCaseInsensitive
            ]
        ];
    }

    # Criteria for searching for a service provider name.
    static public function SearchCriteriaServiceProviderName($mode=null,$value=null,$isCaseInsensitive=null) {
        return [
            OCIDataTypes::OCI_NAME   => __FUNCTION__,
            OCIDataTypes::OCI_PARAMS => [
                'mode' => $mode,
                'value' => $value,
                'isCaseInsensitive' => $isCaseInsensitive
            ]
        ];
    }

    # Criteria for searching for a trunk group
    static public function SearchCriteriaTrunkGroupName($mode=null,$value=null,$isCaseInsensitive=null) {
        return [
            OCIDataTypes::OCI_NAME   => __FUNCTION__,
            OCIDataTypes::OCI_PARAMS => [
                'mode' => $mode,
                'value' => $value,
                'isCaseInsensitive' => $isCaseInsensitive
            ]
        ];
    }

    # Criteria for searching for a user's first name.
    static public function SearchCriteriaUserFirstName($mode=null,$value=null,$isCaseInsensitive=null) {
        return [
            OCIDataTypes::OCI_NAME   => __FUNCTION__,
            OCIDataTypes::OCI_PARAMS => [
                'mode' => $mode,
                'value' => $value,
                'isCaseInsensitive' => $isCaseInsensitive
            ]
        ];
    }

    # Criteria for searching for a user's userId.
    static public function SearchCriteriaUserId($mode=null,$value=null,$isCaseInsensitive=null) {
        return [
            OCIDataTypes::OCI_NAME   => __FUNCTION__,
            OCIDataTypes::OCI_PARAMS => [
                'mode' => $mode,
                'value' => $value,
                'isCaseInsensitive' => $isCaseInsensitive
            ]
        ];
    }

    # Criteria for searching for a user's last name.
    static public function SearchCriteriaUserLastName($mode=null,$value=null,$isCaseInsensitive=null) {
        return [
            OCIDataTypes::OCI_NAME   => __FUNCTION__,
            OCIDataTypes::OCI_PARAMS => [
                'mode' => $mode,
                'value' => $value,
                'isCaseInsensitive' => $isCaseInsensitive
            ]
        ];
    }

    # Criteria for searching for a name in a user personal phone list.
    static public function SearchCriteriaUserPersonalPhoneListName($mode=null,$value=null,$isCaseInsensitive=null) {
        return [
            OCIDataTypes::OCI_NAME   => __FUNCTION__,
            OCIDataTypes::OCI_PARAMS => [
                'mode' => $mode,
                'value' => $value,
                'isCaseInsensitive' => $isCaseInsensitive
            ]
        ];
    }

    # Criteria for searching for a phone number in a user personal phone list.
    static public function SearchCriteriaUserPersonalPhoneListNumber($mode=null,$value=null,$isCaseInsensitive=null) {
        return [
            OCIDataTypes::OCI_NAME   => __FUNCTION__,
            OCIDataTypes::OCI_PARAMS => [
                'mode' => $mode,
                'value' => $value,
                'isCaseInsensitive' => $isCaseInsensitive
            ]
        ];
    }

    # Criteria for searching for a user's yahoo id.
    static public function SearchCriteriaYahooId($mode=null,$value=null,$isCaseInsensitive=null) {
        return [
            OCIDataTypes::OCI_NAME   => __FUNCTION__,
            OCIDataTypes::OCI_PARAMS => [
                'mode' => $mode,
                'value' => $value,
                'isCaseInsensitive' => $isCaseInsensitive
            ]
        ];
    }

    # Criteria for searching for a system zone's IP Address.
    static public function SearchCriteriaZoneIPAddress($mode=null,$value=null,$isCaseInsensitive=null) {
        return [
            OCIDataTypes::OCI_NAME   => __FUNCTION__,
            OCIDataTypes::OCI_PARAMS => [
                'mode' => $mode,
                'value' => $value,
                'isCaseInsensitive' => $isCaseInsensitive
            ]
        ];
    }

    # Criteria for searching for a RegistrationURI.
    static public function SearchCriteriaRegistrationURI($mode=null,$value=null,$isCaseInsensitive=null) {
        return [
            OCIDataTypes::OCI_NAME   => __FUNCTION__,
            OCIDataTypes::OCI_PARAMS => [
                'mode' => $mode,
                'value' => $value,
                'isCaseInsensitive' => $isCaseInsensitive
            ]
        ];
    }

    # Criteria for searching for a SIP Contact.
    static public function SearchCriteriaSIPContact($mode=null,$value=null,$isCaseInsensitive=null) {
        return [
            OCIDataTypes::OCI_NAME   => __FUNCTION__,
            OCIDataTypes::OCI_PARAMS => [
                'mode' => $mode,
                'value' => $value,
                'isCaseInsensitive' => $isCaseInsensitive
            ]
        ];
    }

    # Criteria for searching for a particular fully specified service type.
    static public function SearchCriteriaExactServiceType($serviceType=null) {
        return [
            OCIDataTypes::OCI_NAME   => __FUNCTION__,
            OCIDataTypes::OCI_PARAMS => [
                'serviceType' => $serviceType
            ]
        ];
    }

}