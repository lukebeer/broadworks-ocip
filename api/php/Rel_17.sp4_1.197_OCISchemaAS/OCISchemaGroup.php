<?php
class OCISchemaGroup {
        # Request to add a group access device.
        static public function GroupAccessDeviceAddRequest14($serviceProviderId=null,$groupId=null,$deviceName=null,$deviceType=null,$protocol=null,$netAddress=null,$port=null,$outboundProxyServerNetAddress=null,$stunServerNetAddress=null,$macAddress=null,$serialNumber=null,$description=null,$physicalLocation=null,$transportProtocol=null,$mobilityManagerProvisioningURL=null,$mobilityManagerProvisioningUserName=null,$mobilityManagerProvisioningPassword=null,$mobilityManagerDefaultOriginatingServiceKey=null,$mobilityManagerDefaultTerminatingServiceKey=null,$useCustomUserNamePassword=null,$accessDeviceCredentials=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId,
                    'deviceName' => $deviceName,
                    'deviceType' => $deviceType,
                    'protocol' => $protocol,
                    'netAddress' => $netAddress,
                    'port' => $port,
                    'outboundProxyServerNetAddress' => $outboundProxyServerNetAddress,
                    'stunServerNetAddress' => $stunServerNetAddress,
                    'macAddress' => $macAddress,
                    'serialNumber' => $serialNumber,
                    'description' => $description,
                    'physicalLocation' => $physicalLocation,
                    'transportProtocol' => $transportProtocol,
                    'mobilityManagerProvisioningURL' => $mobilityManagerProvisioningURL,
                    'mobilityManagerProvisioningUserName' => $mobilityManagerProvisioningUserName,
                    'mobilityManagerProvisioningPassword' => $mobilityManagerProvisioningPassword,
                    'mobilityManagerDefaultOriginatingServiceKey' => $mobilityManagerDefaultOriginatingServiceKey,
                    'mobilityManagerDefaultTerminatingServiceKey' => $mobilityManagerDefaultTerminatingServiceKey,
                    'useCustomUserNamePassword' => $useCustomUserNamePassword,
                    'accessDeviceCredentials' => $accessDeviceCredentials
                ]
            ];
        }

        # Request to add a static configuration tag for a group access device.
        static public function GroupAccessDeviceCustomTagAddRequest($serviceProviderId=null,$groupId=null,$deviceName=null,$tagName=null,$tagValue=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId,
                    'deviceName' => $deviceName,
                    'tagName' => $tagName,
                    'tagValue' => $tagValue
                ]
            ];
        }

        # Request to delete static configuration tags for a group access device.
        static public function GroupAccessDeviceCustomTagDeleteListRequest($serviceProviderId=null,$groupId=null,$deviceName=null,$tagName=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId,
                    'deviceName' => $deviceName,
                    'tagName' => $tagName
                ]
            ];
        }

        # Request to get the list of custom configuration tags managed by the Device Management System, on a per-device profile basis.
        static public function GroupAccessDeviceCustomTagGetListRequest($serviceProviderId=null,$groupId=null,$deviceName=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId,
                    'deviceName' => $deviceName
                ]
            ];
        }

        # Request to modify a static configuration tag for a group access device.
        static public function GroupAccessDeviceCustomTagModifyRequest($serviceProviderId=null,$groupId=null,$deviceName=null,$tagName=null,$tagValue=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId,
                    'deviceName' => $deviceName,
                    'tagName' => $tagName,
                    'tagValue' => $tagValue
                ]
            ];
        }

        # Request to delete a specified group access device.
        static public function GroupAccessDeviceDeleteRequest($serviceProviderId=null,$groupId=null,$deviceName=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId,
                    'deviceName' => $deviceName
                ]
            ];
        }

        # Request to get the list of device files managed by the Device Management System, on a per-device profile basis.
        static public function GroupAccessDeviceFileGetListRequest14sp8($serviceProviderId=null,$groupId=null,$deviceName=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId,
                    'deviceName' => $deviceName
                ]
            ];
        }

        # Request to get a group device profile file.
        static public function GroupAccessDeviceFileGetRequest16sp1($serviceProviderId=null,$groupId=null,$deviceName=null,$fileFormat=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId,
                    'deviceName' => $deviceName,
                    'fileFormat' => $fileFormat
                ]
            ];
        }

        # Request to modify a specified group access device file.
        static public function GroupAccessDeviceFileModifyRequest14sp8($serviceProviderId=null,$groupId=null,$deviceName=null,$fileFormat=null,$fileSource=null,$uploadFile=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId,
                    'deviceName' => $deviceName,
                    'fileFormat' => $fileFormat,
                    'fileSource' => $fileSource,
                    'uploadFile' => $uploadFile
                ]
            ];
        }

        # Requests the list of configurable device types of devices that have already been
        static public function GroupAccessDeviceGetEnhancedConfigurationTypeListRequest($serviceProviderId=null,$groupId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId
                ]
            ];
        }

        # Requests the details of a specified configurable device type for a group.
        static public function GroupAccessDeviceGetEnhancedConfigurationTypeRequest14($serviceProviderId=null,$groupId=null,$deviceType=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId,
                    'deviceType' => $deviceType
                ]
            ];
        }

        # Requests the list of available access devices for assignment to a user
        static public function GroupAccessDeviceGetAvailableDetailListRequest14($serviceProviderId=null,$groupId=null,$isMusicOnHold=null,$onlyVideoCapable=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId,
                    'isMusicOnHold' => $isMusicOnHold,
                    'onlyVideoCapable' => $onlyVideoCapable
                ]
            ];
        }

        # Requests the list of access devices in a group.
        static public function GroupAccessDeviceGetListRequest($serviceProviderId=null,$groupId=null,$responseSizeLimit=null,$searchCriteriaDeviceName=null,$searchCriteriaDeviceMACAddress=null,$searchCriteriaDeviceNetAddress=null,$searchCriteriaExactDeviceType=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId,
                    'responseSizeLimit' => $responseSizeLimit,
                    'searchCriteriaDeviceName' => $searchCriteriaDeviceName,
                    'searchCriteriaDeviceMACAddress' => $searchCriteriaDeviceMACAddress,
                    'searchCriteriaDeviceNetAddress' => $searchCriteriaDeviceNetAddress,
                    'searchCriteriaExactDeviceType' => $searchCriteriaExactDeviceType
                ]
            ];
        }

        # Requests the configuration of a specified group access device.
        static public function GroupAccessDeviceGetRequest16($serviceProviderId=null,$groupId=null,$deviceName=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId,
                    'deviceName' => $deviceName
                ]
            ];
        }

        # Requests the configuration of a specified group access device.
        static public function GroupAccessDeviceGetUserListRequest($serviceProviderId=null,$groupId=null,$deviceName=null,$responseSizeLimit=null,$searchCriteriaLinePortUserPart=null,$searchCriteriaLinePortDomain=null,$searchCriteriaUserLastName=null,$searchCriteriaUserFirstName=null,$searchCriteriaDn=null,$searchCriteriaUserId=null,$searchCriteriaExactEndpointType=null,$searchCriteriaExactUserType=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId,
                    'deviceName' => $deviceName,
                    'responseSizeLimit' => $responseSizeLimit,
                    'searchCriteriaLinePortUserPart' => $searchCriteriaLinePortUserPart,
                    'searchCriteriaLinePortDomain' => $searchCriteriaLinePortDomain,
                    'searchCriteriaUserLastName' => $searchCriteriaUserLastName,
                    'searchCriteriaUserFirstName' => $searchCriteriaUserFirstName,
                    'searchCriteriaDn' => $searchCriteriaDn,
                    'searchCriteriaUserId' => $searchCriteriaUserId,
                    'searchCriteriaExactEndpointType' => $searchCriteriaExactEndpointType,
                    'searchCriteriaExactUserType' => $searchCriteriaExactUserType
                ]
            ];
        }

        # Request to modify a specified group access device.
        static public function GroupAccessDeviceModifyRequest14($serviceProviderId=null,$groupId=null,$deviceName=null,$protocol=null,$netAddress=null,$port=null,$outboundProxyServerNetAddress=null,$stunServerNetAddress=null,$macAddress=null,$serialNumber=null,$description=null,$configurationMode=null,$configurationFile=null,$physicalLocation=null,$transportProtocol=null,$mobilityManagerProvisioningURL=null,$mobilityManagerProvisioningUserName=null,$mobilityManagerProvisioningPassword=null,$mobilityManagerDefaultOriginatingServiceKey=null,$mobilityManagerDefaultTerminatingServiceKey=null,$useCustomUserNamePassword=null,$accessDeviceCredentials=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId,
                    'deviceName' => $deviceName,
                    'protocol' => $protocol,
                    'netAddress' => $netAddress,
                    'port' => $port,
                    'outboundProxyServerNetAddress' => $outboundProxyServerNetAddress,
                    'stunServerNetAddress' => $stunServerNetAddress,
                    'macAddress' => $macAddress,
                    'serialNumber' => $serialNumber,
                    'description' => $description,
                    'configurationMode' => $configurationMode,
                    'configurationFile' => $configurationFile,
                    'physicalLocation' => $physicalLocation,
                    'transportProtocol' => $transportProtocol,
                    'mobilityManagerProvisioningURL' => $mobilityManagerProvisioningURL,
                    'mobilityManagerProvisioningUserName' => $mobilityManagerProvisioningUserName,
                    'mobilityManagerProvisioningPassword' => $mobilityManagerProvisioningPassword,
                    'mobilityManagerDefaultOriginatingServiceKey' => $mobilityManagerDefaultOriginatingServiceKey,
                    'mobilityManagerDefaultTerminatingServiceKey' => $mobilityManagerDefaultTerminatingServiceKey,
                    'useCustomUserNamePassword' => $useCustomUserNamePassword,
                    'accessDeviceCredentials' => $accessDeviceCredentials
                ]
            ];
        }

        # Request to modify attributes for line/ports assigned on the group device profile.
        static public function GroupAccessDeviceModifyUserRequest($serviceProviderId=null,$groupId=null,$deviceName=null,$linePort=null,$isPrimaryLinePort=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId,
                    'deviceName' => $deviceName,
                    'linePort' => $linePort,
                    'isPrimaryLinePort' => $isPrimaryLinePort
                ]
            ];
        }

        # Reset a specific group SIP device that supports the reset operation.
        static public function GroupAccessDeviceResetRequest($serviceProviderId=null,$groupId=null,$deviceName=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId,
                    'deviceName' => $deviceName
                ]
            ];
        }

        # Get the Application Server set for a group.
        static public function GroupApplicationServerSetGetRequest($groupId=null,$serviceProviderId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'groupId' => $groupId,
                    'serviceProviderId' => $serviceProviderId
                ]
            ];
        }

        # Modify the Application Server set for a group.
        static public function GroupApplicationServerSetModifyRequest($applicationServerSetName=null,$groupId=null,$serviceProviderId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'applicationServerSetName' => $applicationServerSetName,
                    'groupId' => $groupId,
                    'serviceProviderId' => $serviceProviderId
                ]
            ];
        }

        # Add a new Dialable Caller ID Criteria. Criteria are added at the bottom of the list with the lowest priority. The response is either a SuccessResponse or an ErrorResponse.
        static public function GroupDialableCallerIDCriteriaAddRequest($serviceProviderId=null,$groupId=null,$name=null,$description=null,$prefixDigits=null,$matchCallType=null,$matchAlternateCallIndicator=null,$matchLocalCategory=null,$matchNationalCategory=null,$matchInterlataCategory=null,$matchIntralataCategory=null,$matchInternationalCategory=null,$matchPrivateCategory=null,$matchEmergencyCategory=null,$matchOtherCategory=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId,
                    'name' => $name,
                    'description' => $description,
                    'prefixDigits' => $prefixDigits,
                    'matchCallType' => $matchCallType,
                    'matchAlternateCallIndicator' => $matchAlternateCallIndicator,
                    'matchLocalCategory' => $matchLocalCategory,
                    'matchNationalCategory' => $matchNationalCategory,
                    'matchInterlataCategory' => $matchInterlataCategory,
                    'matchIntralataCategory' => $matchIntralataCategory,
                    'matchInternationalCategory' => $matchInternationalCategory,
                    'matchPrivateCategory' => $matchPrivateCategory,
                    'matchEmergencyCategory' => $matchEmergencyCategory,
                    'matchOtherCategory' => $matchOtherCategory
                ]
            ];
        }

        # Delete a Dialable Caller ID Criteria.
        static public function GroupDialableCallerIDCriteriaDeleteRequest($serviceProviderId=null,$groupId=null,$name=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId,
                    'name' => $name
                ]
            ];
        }

        # Get an existing Dialable Caller ID Criteria.
        static public function GroupDialableCallerIDCriteriaGetRequest($serviceProviderId=null,$groupId=null,$name=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId,
                    'name' => $name
                ]
            ];
        }

        # Modify a Dialable Caller ID Criteria.
        static public function GroupDialableCallerIDCriteriaModifyRequest($serviceProviderId=null,$groupId=null,$name=null,$newName=null,$description=null,$prefixDigits=null,$matchCallType=null,$matchAlternateCallIndicator=null,$matchLocalCategory=null,$matchNationalCategory=null,$matchInterlataCategory=null,$matchIntralataCategory=null,$matchInternationalCategory=null,$matchPrivateCategory=null,$matchEmergencyCategory=null,$matchOtherCategory=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId,
                    'name' => $name,
                    'newName' => $newName,
                    'description' => $description,
                    'prefixDigits' => $prefixDigits,
                    'matchCallType' => $matchCallType,
                    'matchAlternateCallIndicator' => $matchAlternateCallIndicator,
                    'matchLocalCategory' => $matchLocalCategory,
                    'matchNationalCategory' => $matchNationalCategory,
                    'matchInterlataCategory' => $matchInterlataCategory,
                    'matchIntralataCategory' => $matchIntralataCategory,
                    'matchInternationalCategory' => $matchInternationalCategory,
                    'matchPrivateCategory' => $matchPrivateCategory,
                    'matchEmergencyCategory' => $matchEmergencyCategory,
                    'matchOtherCategory' => $matchOtherCategory
                ]
            ];
        }

        # Get the Groups Dialable Caller ID settings and criteria list.
        static public function GroupDialableCallerIDGetRequest($serviceProviderId=null,$groupId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId
                ]
            ];
        }

        # Modify the groups Dialable Caller ID settings and criteria list.
        static public function GroupDialableCallerIDModifyRequest($serviceProviderId=null,$groupId=null,$useGroupCriteria=null,$nsScreeningFailurePolicy=null,$criteriaPriorityOrder=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId,
                    'useGroupCriteria' => $useGroupCriteria,
                    'nsScreeningFailurePolicy' => $nsScreeningFailurePolicy,
                    'criteriaPriorityOrder' => $criteriaPriorityOrder
                ]
            ];
        }

        # Add a group.
        static public function GroupAddRequest($serviceProviderId=null,$groupId=null,$defaultDomain=null,$userLimit=null,$groupName=null,$callingLineIdName=null,$timeZone=null,$locationDialingCode=null,$contact=null,$address=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId,
                    'defaultDomain' => $defaultDomain,
                    'userLimit' => $userLimit,
                    'groupName' => $groupName,
                    'callingLineIdName' => $callingLineIdName,
                    'timeZone' => $timeZone,
                    'locationDialingCode' => $locationDialingCode,
                    'contact' => $contact,
                    'address' => $address
                ]
            ];
        }

        # Add a group administrator.
        static public function GroupAdminAddRequest($serviceProviderId=null,$groupId=null,$userId=null,$firstName=null,$lastName=null,$password=null,$language=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId,
                    'userId' => $userId,
                    'firstName' => $firstName,
                    'lastName' => $lastName,
                    'password' => $password,
                    'language' => $language
                ]
            ];
        }

        # Delete a group administrator.
        static public function GroupAdminDeleteRequest($userId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId
                ]
            ];
        }

        # Get a list of group and department administrators within the group.
        static public function GroupAdminGetListRequest($serviceProviderId=null,$groupId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId
                ]
            ];
        }

        # Get a group administrators profile.
        static public function GroupAdminGetRequest($userId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId
                ]
            ];
        }

        # Requests the Group administrator's policy settings.
        static public function GroupAdminGetPolicyRequest17sp3($userId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId
                ]
            ];
        }

        # Modify a group administrator.
        static public function GroupAdminModifyRequest($userId=null,$firstName=null,$lastName=null,$password=null,$language=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId,
                    'firstName' => $firstName,
                    'lastName' => $lastName,
                    'password' => $password,
                    'language' => $language
                ]
            ];
        }

        # Request to modify the group administrator's policy settings.
        static public function GroupAdminModifyPolicyRequest($userId=null,$profileAccess=null,$userAccess=null,$adminAccess=null,$departmentAccess=null,$accessDeviceAccess=null,$enhancedServiceInstanceAccess=null,$featureAccessCodeAccess=null,$phoneNumberExtensionAccess=null,$callingLineIdNumberAccess=null,$serviceAccess=null,$trunkGroupAccess=null,$sessionAdmissionControlAccess=null,$officeZoneAccess=null,$dialableCallerIDAccess=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId,
                    'profileAccess' => $profileAccess,
                    'userAccess' => $userAccess,
                    'adminAccess' => $adminAccess,
                    'departmentAccess' => $departmentAccess,
                    'accessDeviceAccess' => $accessDeviceAccess,
                    'enhancedServiceInstanceAccess' => $enhancedServiceInstanceAccess,
                    'featureAccessCodeAccess' => $featureAccessCodeAccess,
                    'phoneNumberExtensionAccess' => $phoneNumberExtensionAccess,
                    'callingLineIdNumberAccess' => $callingLineIdNumberAccess,
                    'serviceAccess' => $serviceAccess,
                    'trunkGroupAccess' => $trunkGroupAccess,
                    'sessionAdmissionControlAccess' => $sessionAdmissionControlAccess,
                    'officeZoneAccess' => $officeZoneAccess,
                    'dialableCallerIDAccess' => $dialableCallerIDAccess
                ]
            ];
        }

        # Add the BroadWorks Mobile Manager.
        static public function GroupBroadWorksMobileManagerAddRequest($serviceProviderId=null,$groupId=null,$informationFile=null,$certificateFile=null,$isActive=null,$localToCarrier=null,$maxTxPerSecondEnabled=null,$maxTxPerSecond=null,$tldnEnabled=null,$genericNumberEnabled=null,$mobileStateCheckEnabled=null,$locationBasedServicesEnabled=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId,
                    'informationFile' => $informationFile,
                    'certificateFile' => $certificateFile,
                    'isActive' => $isActive,
                    'localToCarrier' => $localToCarrier,
                    'maxTxPerSecondEnabled' => $maxTxPerSecondEnabled,
                    'maxTxPerSecond' => $maxTxPerSecond,
                    'tldnEnabled' => $tldnEnabled,
                    'genericNumberEnabled' => $genericNumberEnabled,
                    'mobileStateCheckEnabled' => $mobileStateCheckEnabled,
                    'locationBasedServicesEnabled' => $locationBasedServicesEnabled
                ]
            ];
        }

        # Get the BroadWorks Mobile Manager.
        static public function GroupBroadWorksMobileManagerGetRequest($serviceProviderId=null,$groupId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId
                ]
            ];
        }

        # Get the list of domains of the BroadWorks Mobile Manager.
        static public function GroupBroadWorksMobileManagerGetDomainListRequest($serviceProviderId=null,$groupId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId
                ]
            ];
        }

        # Delete the BroadWorks Mobile Manager.
        static public function GroupBroadWorksMobileManagerDeleteRequest($serviceProviderId=null,$groupId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId
                ]
            ];
        }

        # Modify the BroadWorks Mobile Manager settings.
        static public function GroupBroadWorksMobileManagerModifyRequest($serviceProviderId=null,$groupId=null,$informationFile=null,$certificateFile=null,$localToCarrier=null,$maxTxPerSecondEnabled=null,$maxTxPerSecond=null,$tldnEnabled=null,$genericNumberEnabled=null,$mobileStateCheckEnabled=null,$locationBasedServicesEnabled=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId,
                    'informationFile' => $informationFile,
                    'certificateFile' => $certificateFile,
                    'localToCarrier' => $localToCarrier,
                    'maxTxPerSecondEnabled' => $maxTxPerSecondEnabled,
                    'maxTxPerSecond' => $maxTxPerSecond,
                    'tldnEnabled' => $tldnEnabled,
                    'genericNumberEnabled' => $genericNumberEnabled,
                    'mobileStateCheckEnabled' => $mobileStateCheckEnabled,
                    'locationBasedServicesEnabled' => $locationBasedServicesEnabled
                ]
            ];
        }

        # Activates or Deactivates the BroadWorks Mobile Manager.
        static public function GroupBroadWorksMobileManagerActivationRequest($serviceProviderId=null,$groupId=null,$isActive=null,$deactivationReason=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId,
                    'isActive' => $isActive,
                    'deactivationReason' => $deactivationReason
                ]
            ];
        }

        # Sends an email with the carrier information and certificate files.
        static public function GroupBroadWorksMobileManagerSendCarrierFilesRequest($serviceProviderId=null,$groupId=null,$emailTo=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId,
                    'emailTo' => $emailTo
                ]
            ];
        }

        # Add a home zone to the BroadWorks Mobile Manager.
        static public function GroupBroadWorksMobileManagerAddHomeZoneRequest($serviceProviderId=null,$groupId=null,$homeZoneDomainName=null,$mobileCountryCode=null,$mobileNetworkCode=null,$locationAreaCode=null,$cellIdentity=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId,
                    'homeZoneDomainName' => $homeZoneDomainName,
                    'mobileCountryCode' => $mobileCountryCode,
                    'mobileNetworkCode' => $mobileNetworkCode,
                    'locationAreaCode' => $locationAreaCode,
                    'cellIdentity' => $cellIdentity
                ]
            ];
        }

        # Get the list of home zones of the BroadWorks Mobile Manager.
        static public function GroupBroadWorksMobileManagerGetHomeZoneListRequest($serviceProviderId=null,$groupId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId
                ]
            ];
        }

        # Get a home zone from the BroadWorks Mobile Manager.
        static public function GroupBroadWorksMobileManagerGetHomeZoneRequest($serviceProviderId=null,$groupId=null,$homeZoneId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId,
                    'homeZoneId' => $homeZoneId
                ]
            ];
        }

        # Delete a home zone from the BroadWorks Mobile Manager.
        static public function GroupBroadWorksMobileManagerDeleteHomeZoneRequest($serviceProviderId=null,$groupId=null,$homeZoneId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId,
                    'homeZoneId' => $homeZoneId
                ]
            ];
        }

        # Delete a list of home zones from the BroadWorks Mobile Manager.
        static public function GroupBroadWorksMobileManagerDeleteHomeZoneListRequest($serviceProviderId=null,$groupId=null,$homeZoneId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId,
                    'homeZoneId' => $homeZoneId
                ]
            ];
        }

        # Modify an existing home zone in the BroadWorks Mobile Manager.
        static public function GroupBroadWorksMobileManagerModifyHomeZoneRequest($serviceProviderId=null,$groupId=null,$homeZoneId=null,$homeZoneDomainName=null,$mobileCountryCode=null,$mobileNetworkCode=null,$locationAreaCode=null,$cellIdentity=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId,
                    'homeZoneId' => $homeZoneId,
                    'homeZoneDomainName' => $homeZoneDomainName,
                    'mobileCountryCode' => $mobileCountryCode,
                    'mobileNetworkCode' => $mobileNetworkCode,
                    'locationAreaCode' => $locationAreaCode,
                    'cellIdentity' => $cellIdentity
                ]
            ];
        }

        # Request the group level data associated with Call Processing Policy.
        static public function GroupCallProcessingGetPolicyRequest17sp4($serviceProviderId=null,$groupId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId
                ]
            ];
        }

        # Modify the group level data associated with Call Procesing Policy.
        static public function GroupCallProcessingModifyPolicyRequest15sp2($serviceProviderId=null,$groupId=null,$useGroupCLIDSetting=null,$useGroupMediaSetting=null,$useGroupCallLimitsSetting=null,$useGroupTranslationRoutingSetting=null,$useGroupDCLIDSetting=null,$useMaxSimultaneousCalls=null,$maxSimultaneousCalls=null,$useMaxSimultaneousVideoCalls=null,$maxSimultaneousVideoCalls=null,$useMaxCallTimeForAnsweredCalls=null,$maxCallTimeForAnsweredCallsMinutes=null,$useMaxCallTimeForUnansweredCalls=null,$maxCallTimeForUnansweredCallsMinutes=null,$mediaPolicySelection=null,$supportedMediaSetName=null,$networkUsageSelection=null,$enforceGroupCallingLineIdentityRestriction=null,$allowEnterpriseGroupCallTypingForPrivateDialingPlan=null,$allowEnterpriseGroupCallTypingForPublicDialingPlan=null,$overrideCLIDRestrictionForPrivateCallCategory=null,$useEnterpriseCLIDForPrivateCallCategory=null,$enableEnterpriseExtensionDialing=null,$useMaxConcurrentRedirectedCalls=null,$maxConcurrentRedirectedCalls=null,$useMaxFindMeFollowMeDepth=null,$maxFindMeFollowMeDepth=null,$maxRedirectionDepth=null,$useMaxConcurrentFindMeFollowMeInvocations=null,$maxConcurrentFindMeFollowMeInvocations=null,$clidPolicy=null,$emergencyClidPolicy=null,$allowAlternateNumbersForRedirectingIdentity=null,$useGroupName=null,$blockCallingNameForExternalCalls=null,$enableDialableCallerID=null,$allowConfigurableCLIDForRedirectingIdentity=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId,
                    'useGroupCLIDSetting' => $useGroupCLIDSetting,
                    'useGroupMediaSetting' => $useGroupMediaSetting,
                    'useGroupCallLimitsSetting' => $useGroupCallLimitsSetting,
                    'useGroupTranslationRoutingSetting' => $useGroupTranslationRoutingSetting,
                    'useGroupDCLIDSetting' => $useGroupDCLIDSetting,
                    'useMaxSimultaneousCalls' => $useMaxSimultaneousCalls,
                    'maxSimultaneousCalls' => $maxSimultaneousCalls,
                    'useMaxSimultaneousVideoCalls' => $useMaxSimultaneousVideoCalls,
                    'maxSimultaneousVideoCalls' => $maxSimultaneousVideoCalls,
                    'useMaxCallTimeForAnsweredCalls' => $useMaxCallTimeForAnsweredCalls,
                    'maxCallTimeForAnsweredCallsMinutes' => $maxCallTimeForAnsweredCallsMinutes,
                    'useMaxCallTimeForUnansweredCalls' => $useMaxCallTimeForUnansweredCalls,
                    'maxCallTimeForUnansweredCallsMinutes' => $maxCallTimeForUnansweredCallsMinutes,
                    'mediaPolicySelection' => $mediaPolicySelection,
                    'supportedMediaSetName' => $supportedMediaSetName,
                    'networkUsageSelection' => $networkUsageSelection,
                    'enforceGroupCallingLineIdentityRestriction' => $enforceGroupCallingLineIdentityRestriction,
                    'allowEnterpriseGroupCallTypingForPrivateDialingPlan' => $allowEnterpriseGroupCallTypingForPrivateDialingPlan,
                    'allowEnterpriseGroupCallTypingForPublicDialingPlan' => $allowEnterpriseGroupCallTypingForPublicDialingPlan,
                    'overrideCLIDRestrictionForPrivateCallCategory' => $overrideCLIDRestrictionForPrivateCallCategory,
                    'useEnterpriseCLIDForPrivateCallCategory' => $useEnterpriseCLIDForPrivateCallCategory,
                    'enableEnterpriseExtensionDialing' => $enableEnterpriseExtensionDialing,
                    'useMaxConcurrentRedirectedCalls' => $useMaxConcurrentRedirectedCalls,
                    'maxConcurrentRedirectedCalls' => $maxConcurrentRedirectedCalls,
                    'useMaxFindMeFollowMeDepth' => $useMaxFindMeFollowMeDepth,
                    'maxFindMeFollowMeDepth' => $maxFindMeFollowMeDepth,
                    'maxRedirectionDepth' => $maxRedirectionDepth,
                    'useMaxConcurrentFindMeFollowMeInvocations' => $useMaxConcurrentFindMeFollowMeInvocations,
                    'maxConcurrentFindMeFollowMeInvocations' => $maxConcurrentFindMeFollowMeInvocations,
                    'clidPolicy' => $clidPolicy,
                    'emergencyClidPolicy' => $emergencyClidPolicy,
                    'allowAlternateNumbersForRedirectingIdentity' => $allowAlternateNumbersForRedirectingIdentity,
                    'useGroupName' => $useGroupName,
                    'blockCallingNameForExternalCalls' => $blockCallingNameForExternalCalls,
                    'enableDialableCallerID' => $enableDialableCallerID,
                    'allowConfigurableCLIDForRedirectingIdentity' => $allowConfigurableCLIDForRedirectingIdentity
                ]
            ];
        }

        # Add one or more entries to a group's common phone list.
        static public function GroupCommonPhoneListAddListRequest($serviceProviderId=null,$groupId=null,$entry=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId,
                    'entry' => $entry
                ]
            ];
        }

        # Delete one or more entries from a group's common phone list.
        static public function GroupCommonPhoneListDeleteListRequest($serviceProviderId=null,$groupId=null,$entryName=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId,
                    'entryName' => $entryName
                ]
            ];
        }

        # Get a group's common phone list.
        static public function GroupCommonPhoneListGetListRequest($serviceProviderId=null,$groupId=null,$responseSizeLimit=null,$searchCriteriaModeOr=null,$searchCriteriaGroupCommonPhoneListName=null,$searchCriteriaGroupCommonPhoneListNumber=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId,
                    'responseSizeLimit' => $responseSizeLimit,
                    'searchCriteriaModeOr' => $searchCriteriaModeOr,
                    'searchCriteriaGroupCommonPhoneListName' => $searchCriteriaGroupCommonPhoneListName,
                    'searchCriteriaGroupCommonPhoneListNumber' => $searchCriteriaGroupCommonPhoneListNumber
                ]
            ];
        }

        # Modify an entry in a group's common phone list.
        static public function GroupCommonPhoneListModifyRequest($serviceProviderId=null,$groupId=null,$entryName=null,$newEntryName=null,$phoneNumber=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId,
                    'entryName' => $entryName,
                    'newEntryName' => $newEntryName,
                    'phoneNumber' => $phoneNumber
                ]
            ];
        }

        # Add a list of Communication Barring Authorization codes to a group.
        static public function GroupCommunicationBarringAuthorizationCodeAddListRequest($serviceProviderId=null,$groupId=null,$code=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId,
                    'code' => $code
                ]
            ];
        }

        # Delete a list of Communication Barring Authorization codes from a group.
        static public function GroupCommunicationBarringAuthorizationCodeDeleteListRequest($serviceProviderId=null,$groupId=null,$code=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId,
                    'code' => $code
                ]
            ];
        }

        # Get a list of Communication Barring Authorization Codes for a group.
        static public function GroupCommunicationBarringAuthorizationCodeGetListRequest($serviceProviderId=null,$groupId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId
                ]
            ];
        }

        # Gets Communication Barring setting for a group.  
        static public function GroupCommunicationBarringGetRequest($serviceProviderId=null,$groupId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId
                ]
            ];
        }

        # Gets Communication Barring setting for a group.  
        static public function GroupCommunicationBarringModifyRequest($serviceProviderId=null,$groupId=null,$useDefaultServiceProviderProfile=null,$profile=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId,
                    'useDefaultServiceProviderProfile' => $useDefaultServiceProviderProfile,
                    'profile' => $profile
                ]
            ];
        }

        # Rebuild the group default config file for the specified device type.
        static public function GroupCPEConfigRebuildConfigFileRequest($serviceProviderId=null,$groupId=null,$deviceType=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId,
                    'deviceType' => $deviceType
                ]
            ];
        }

        # Rebuild the config file for a specified device.
        static public function GroupCPEConfigRebuildDeviceConfigFileRequest($serviceProviderId=null,$groupId=null,$deviceName=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId,
                    'deviceName' => $deviceName
                ]
            ];
        }

        # Reorder the lines of a group device. You can not add or delete line ports, only
        static public function GroupCPEConfigReorderDeviceLinePortsRequest($serviceProviderId=null,$groupId=null,$deviceName=null,$orderedLinePortList=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId,
                    'deviceName' => $deviceName,
                    'orderedLinePortList' => $orderedLinePortList
                ]
            ];
        }

        # Reset a specific group device.
        static public function GroupCPEConfigResetDeviceRequest($serviceProviderId=null,$groupId=null,$deviceName=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId,
                    'deviceName' => $deviceName
                ]
            ];
        }

        # Reset all the devices of the specified device type in a group.
        static public function GroupCPEConfigResetDeviceTypeRequest($serviceProviderId=null,$groupId=null,$deviceType=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId,
                    'deviceType' => $deviceType
                ]
            ];
        }

        # Request to set a new group default configuration file for a device type.
        static public function GroupCPEConfigSetConfigFileRequest($serviceProviderId=null,$groupId=null,$deviceType=null,$configFile=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId,
                    'deviceType' => $deviceType,
                    'configFile' => $configFile
                ]
            ];
        }

        # Adds a Custom Contact Directory to a group.
        static public function GroupCustomContactDirectoryAddRequest17($serviceProviderId=null,$groupId=null,$name=null,$entry=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId,
                    'name' => $name,
                    'entry' => $entry
                ]
            ];
        }

        # Deletes a Custom Contact Directory to a group.
        static public function GroupCustomContactDirectoryDeleteRequest($serviceProviderId=null,$groupId=null,$name=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId,
                    'name' => $name
                ]
            ];
        }

        # Get a list of users that can be part of a custom contact directory.
        static public function GroupCustomContactDirectoryGetAvailableUserListRequest17($serviceProviderId=null,$groupId=null,$responseSizeLimit=null,$searchCriteriaUserLastName=null,$searchCriteriaUserFirstName=null,$searchCriteriaExactUserDepartment=null,$searchCriteriaExactUserGroup=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId,
                    'responseSizeLimit' => $responseSizeLimit,
                    'searchCriteriaUserLastName' => $searchCriteriaUserLastName,
                    'searchCriteriaUserFirstName' => $searchCriteriaUserFirstName,
                    'searchCriteriaExactUserDepartment' => $searchCriteriaExactUserDepartment,
                    'searchCriteriaExactUserGroup' => $searchCriteriaExactUserGroup
                ]
            ];
        }

        # Gets the list of Custom Contact Directories for a group.
        static public function GroupCustomContactDirectoryGetListRequest($serviceProviderId=null,$groupId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId
                ]
            ];
        }

        # Gets a Custom Contact Directory in a group.
        static public function GroupCustomContactDirectoryGetRequest17($serviceProviderId=null,$groupId=null,$name=null,$responseSizeLimit=null,$searchCriteriaModeOr=null,$searchCriteriaUserLastName=null,$searchCriteriaUserFirstName=null,$searchCriteriaDn=null,$searchCriteriaExtension=null,$searchCriteriaMobilePhoneNumber=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId,
                    'name' => $name,
                    'responseSizeLimit' => $responseSizeLimit,
                    'searchCriteriaModeOr' => $searchCriteriaModeOr,
                    'searchCriteriaUserLastName' => $searchCriteriaUserLastName,
                    'searchCriteriaUserFirstName' => $searchCriteriaUserFirstName,
                    'searchCriteriaDn' => $searchCriteriaDn,
                    'searchCriteriaExtension' => $searchCriteriaExtension,
                    'searchCriteriaMobilePhoneNumber' => $searchCriteriaMobilePhoneNumber
                ]
            ];
        }

        # Adds a Custom Contact Directory to a group.
        static public function GroupCustomContactDirectoryModifyRequest17($serviceProviderId=null,$groupId=null,$name=null,$newName=null,$entryList=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId,
                    'name' => $name,
                    'newName' => $newName,
                    'entryList' => $entryList
                ]
            ];
        }

        # Delete a group.
        static public function GroupDeleteRequest($serviceProviderId=null,$groupId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId
                ]
            ];
        }

        # Add a department to a group.
        static public function GroupDepartmentAddRequest($serviceProviderId=null,$groupId=null,$departmentName=null,$parentDepartmentKey=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId,
                    'departmentName' => $departmentName,
                    'parentDepartmentKey' => $parentDepartmentKey
                ]
            ];
        }

        # Add a department administrator to a group department.
        static public function GroupDepartmentAdminAddRequest($departmentKey=null,$userId=null,$firstName=null,$lastName=null,$password=null,$language=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'departmentKey' => $departmentKey,
                    'userId' => $userId,
                    'firstName' => $firstName,
                    'lastName' => $lastName,
                    'password' => $password,
                    'language' => $language
                ]
            ];
        }

        # Delete a group department administrator.
        static public function GroupDepartmentAdminDeleteRequest($userId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId
                ]
            ];
        }

        # Get a list of department administrators for the department.
        static public function GroupDepartmentAdminGetListRequest($departmentKey=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'departmentKey' => $departmentKey
                ]
            ];
        }

        # Get a group department administrators profile.
        static public function GroupDepartmentAdminGetRequest($userId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId
                ]
            ];
        }

        # Modify a group department administrator.
        static public function GroupDepartmentAdminModifyRequest($userId=null,$firstName=null,$lastName=null,$password=null,$language=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId,
                    'firstName' => $firstName,
                    'lastName' => $lastName,
                    'password' => $password,
                    'language' => $language
                ]
            ];
        }

        # Delete a department from a group.
        static public function GroupDepartmentDeleteRequest($serviceProviderId=null,$groupId=null,$departmentName=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId,
                    'departmentName' => $departmentName
                ]
            ];
        }

        # Get a list of departments that could be the parent department of the specified
        static public function GroupDepartmentGetAvailableParentListRequest($serviceProviderId=null,$groupId=null,$departmentName=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId,
                    'departmentName' => $departmentName
                ]
            ];
        }

        # Request a list of departments in a group. You may request only the
        static public function GroupDepartmentGetListRequest($serviceProviderId=null,$groupId=null,$includeEnterpriseDepartments=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId,
                    'includeEnterpriseDepartments' => $includeEnterpriseDepartments
                ]
            ];
        }

        # Modify a department of a group.
        static public function GroupDepartmentModifyRequest($serviceProviderId=null,$groupId=null,$departmentName=null,$newDepartmentName=null,$newParentDepartmentKey=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId,
                    'departmentName' => $departmentName,
                    'newDepartmentName' => $newDepartmentName,
                    'newParentDepartmentKey' => $newParentDepartmentKey
                ]
            ];
        }

        # Request to add a static configuration tag for an access device type used in a group.
        static public function GroupDeviceTypeCustomTagAddRequest($serviceProviderId=null,$groupId=null,$deviceType=null,$tagName=null,$tagValue=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId,
                    'deviceType' => $deviceType,
                    'tagName' => $tagName,
                    'tagValue' => $tagValue
                ]
            ];
        }

        # Request to delete static configuration tags for an access device type used in a group.
        static public function GroupDeviceTypeCustomTagDeleteListRequest($serviceProviderId=null,$groupId=null,$deviceType=null,$tagName=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId,
                    'deviceType' => $deviceType,
                    'tagName' => $tagName
                ]
            ];
        }

        # Request to modify a static configuration tag for an access device type used in a group.
        static public function GroupDeviceTypeCustomTagModifyRequest($serviceProviderId=null,$groupId=null,$deviceType=null,$tagName=null,$tagValue=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId,
                    'deviceType' => $deviceType,
                    'tagName' => $tagName,
                    'tagValue' => $tagValue
                ]
            ];
        }

        # Request to get the list of custom configuration tags managed by the Device Management System, on a per-device type basis for a group.
        static public function GroupDeviceTypeCustomTagGetListRequest($serviceProviderId=null,$groupId=null,$deviceType=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId,
                    'deviceType' => $deviceType
                ]
            ];
        }

        # Request to modify a specified device type file for a group.
        static public function GroupDeviceTypeFileModifyRequest14sp8($serviceProviderId=null,$groupId=null,$deviceType=null,$fileFormat=null,$fileSource=null,$uploadFile=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId,
                    'deviceType' => $deviceType,
                    'fileFormat' => $fileFormat,
                    'fileSource' => $fileSource,
                    'uploadFile' => $uploadFile
                ]
            ];
        }

        # Request to get the list of device type files managed by the Device Management System, on a per-group basis.
        static public function GroupDeviceTypeFileGetListRequest14sp8($serviceProviderId=null,$groupId=null,$deviceType=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId,
                    'deviceType' => $deviceType
                ]
            ];
        }

        # Request to get a group device type file.
        static public function GroupDeviceTypeFileGetRequest16sp1($serviceProviderId=null,$groupId=null,$deviceType=null,$fileFormat=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId,
                    'deviceType' => $deviceType,
                    'fileFormat' => $fileFormat
                ]
            ];
        }

        # Request the Group level data associated with Dial Plan Policy.
        static public function GroupDialPlanPolicyGetRequest17($serviceProviderId=null,$groupId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId
                ]
            ];
        }

        # Modify the Group level data associated with Dial Plan Policy.
        static public function GroupDialPlanPolicyModifyRequest($serviceProviderId=null,$groupId=null,$useSetting=null,$requiresAccessCodeForPublicCalls=null,$allowE164PublicCalls=null,$preferE164NumberFormatForCallbackServices=null,$publicDigitMap=null,$privateDigitMap=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId,
                    'useSetting' => $useSetting,
                    'requiresAccessCodeForPublicCalls' => $requiresAccessCodeForPublicCalls,
                    'allowE164PublicCalls' => $allowE164PublicCalls,
                    'preferE164NumberFormatForCallbackServices' => $preferE164NumberFormatForCallbackServices,
                    'publicDigitMap' => $publicDigitMap,
                    'privateDigitMap' => $privateDigitMap
                ]
            ];
        }

        # Request the Group level data associated with Dial Plan Policy.
        static public function GroupDialPlanPolicyGetAccessCodeListRequest($serviceProviderId=null,$groupId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId
                ]
            ];
        }

        # Request access code data associated with Group level Dial Plan Policy access codes.
        static public function GroupDialPlanPolicyGetAccessCodeRequest($serviceProviderId=null,$groupId=null,$accessCode=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId,
                    'accessCode' => $accessCode
                ]
            ];
        }

        # Request to add a Group level Dial Plan Access Code and its all attribues.
        static public function GroupDialPlanPolicyAddAccessCodeRequest($serviceProviderId=null,$groupId=null,$accessCode=null,$includeCodeForNetworkTranslationsAndRouting=null,$includeCodeForScreeningServices=null,$enableSecondaryDialTone=null,$description=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId,
                    'accessCode' => $accessCode,
                    'includeCodeForNetworkTranslationsAndRouting' => $includeCodeForNetworkTranslationsAndRouting,
                    'includeCodeForScreeningServices' => $includeCodeForScreeningServices,
                    'enableSecondaryDialTone' => $enableSecondaryDialTone,
                    'description' => $description
                ]
            ];
        }

        # Request to delete a Group level Dial Plan Access Code and its all attribues.
        static public function GroupDialPlanPolicyDeleteAccessCodeRequest($serviceProviderId=null,$groupId=null,$accessCode=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId,
                    'accessCode' => $accessCode
                ]
            ];
        }

        # Request to modify a Group level Dial Plan Access Code and its attribues.
        static public function GroupDialPlanPolicyModifyAccessCodeRequest($serviceProviderId=null,$groupId=null,$accessCode=null,$includeCodeForNetworkTranslationsAndRouting=null,$includeCodeForScreeningServices=null,$enableSecondaryDialTone=null,$description=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId,
                    'accessCode' => $accessCode,
                    'includeCodeForNetworkTranslationsAndRouting' => $includeCodeForNetworkTranslationsAndRouting,
                    'includeCodeForScreeningServices' => $includeCodeForScreeningServices,
                    'enableSecondaryDialTone' => $enableSecondaryDialTone,
                    'description' => $description
                ]
            ];
        }

        # Request the group's digit collection attributes.
        static public function GroupDigitCollectionGetRequest13mp4($serviceProviderId=null,$groupId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId
                ]
            ];
        }

        # Modifies the group's digit collection attributes.
        static public function GroupDigitCollectionModifyRequest($serviceProviderId=null,$groupId=null,$useSetting=null,$accessCode=null,$publicDigitMap=null,$privateDigitMap=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId,
                    'useSetting' => $useSetting,
                    'accessCode' => $accessCode,
                    'publicDigitMap' => $publicDigitMap,
                    'privateDigitMap' => $privateDigitMap
                ]
            ];
        }

        # Activate a list of assigned DNs on a group. It is possible to activate either: a single DN,
        static public function GroupDnActivateListRequest($serviceProviderId=null,$groupId=null,$phoneNumber=null,$dnRange=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId,
                    'phoneNumber' => $phoneNumber,
                    'dnRange' => $dnRange
                ]
            ];
        }

        # Assign a list of service provider DNs to a group. It is possible to assign either: a single DN,
        static public function GroupDnAssignListRequest($serviceProviderId=null,$groupId=null,$phoneNumber=null,$dnRange=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId,
                    'phoneNumber' => $phoneNumber,
                    'dnRange' => $dnRange
                ]
            ];
        }

        # Deactivate a list of activated DNs on a group. The DNs then become available for
        static public function GroupDnDeactivateListRequest($serviceProviderId=null,$groupId=null,$phoneNumber=null,$dnRange=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId,
                    'phoneNumber' => $phoneNumber,
                    'dnRange' => $dnRange
                ]
            ];
        }

        # Get the list of activated and deactivated DNs in a group. Ranges of DNs with identical assignment and activation properties are coalesced to a single table row entry.  Only DNs assigned to a users are listed in the response.
        static public function GroupDnGetActivationListRequest($serviceProviderId=null,$groupId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId
                ]
            ];
        }

        # Get the list of assigned and unassigned DNs in a group. Each DN can be assigned
        static public function GroupDnGetAssignmentListRequest($serviceProviderId=null,$groupId=null,$responseSizeLimit=null,$searchCriteriaDn=null,$searchCriteriaUserFirstName=null,$searchCriteriaUserLastName=null,$searchCriteriaExactDnDepartment=null,$searchCriteriaExactDnActivation=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId,
                    'responseSizeLimit' => $responseSizeLimit,
                    'searchCriteriaDn' => $searchCriteriaDn,
                    'searchCriteriaUserFirstName' => $searchCriteriaUserFirstName,
                    'searchCriteriaUserLastName' => $searchCriteriaUserLastName,
                    'searchCriteriaExactDnDepartment' => $searchCriteriaExactDnDepartment,
                    'searchCriteriaExactDnActivation' => $searchCriteriaExactDnActivation
                ]
            ];
        }

        # Get the list of DNs that are assigned to a group and still available for
        static public function GroupDnGetDetailedAvailableListRequest($serviceProviderId=null,$groupId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId
                ]
            ];
        }

        # Get the list of DNs that are assigned to a group and still available for
        static public function GroupDnGetAvailableListRequest($serviceProviderId=null,$groupId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId
                ]
            ];
        }

        # Get the list of DNs that are assigned to a group.
        static public function GroupDnGetListRequest($serviceProviderId=null,$groupId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId
                ]
            ];
        }

        # Get the list of assigned and unassigned DN ranges in a group.
        static public function GroupDnGetSummaryListRequest($serviceProviderId=null,$groupId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId
                ]
            ];
        }

        # Assign a list of group DNs to a department. If the department is not specified, this
        static public function GroupDnListAssignDepartmentRequest($serviceProviderId=null,$groupId=null,$departmentKey=null,$phoneNumber=null,$dnRange=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId,
                    'departmentKey' => $departmentKey,
                    'phoneNumber' => $phoneNumber,
                    'dnRange' => $dnRange
                ]
            ];
        }

        # Unassign a list of service provider DNs from a group. The DNs then become available for
        static public function GroupDnUnassignListRequest($serviceProviderId=null,$groupId=null,$phoneNumber=null,$dnRange=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId,
                    'phoneNumber' => $phoneNumber,
                    'dnRange' => $dnRange
                ]
            ];
        }

        # Assign a list of domains to a group.
        static public function GroupDomainAssignListRequest($serviceProviderId=null,$groupId=null,$domain=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId,
                    'domain' => $domain
                ]
            ];
        }

        # Request a list of users within in a group that have a given domain assigned.
        static public function GroupDomainGetAssignedUserListRequest($serviceProviderId=null,$groupId=null,$domain=null,$responseSizeLimit=null,$searchCriteriaUserLastName=null,$searchCriteriaUserFirstName=null,$searchCriteriaDn=null,$searchCriteriaEmailAddress=null,$searchCriteriaExactUserDepartment=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId,
                    'domain' => $domain,
                    'responseSizeLimit' => $responseSizeLimit,
                    'searchCriteriaUserLastName' => $searchCriteriaUserLastName,
                    'searchCriteriaUserFirstName' => $searchCriteriaUserFirstName,
                    'searchCriteriaDn' => $searchCriteriaDn,
                    'searchCriteriaEmailAddress' => $searchCriteriaEmailAddress,
                    'searchCriteriaExactUserDepartment' => $searchCriteriaExactUserDepartment
                ]
            ];
        }

        # Requests the list of all domains assigned to a group.
        static public function GroupDomainGetAssignedListRequest($serviceProviderId=null,$groupId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId
                ]
            ];
        }

        # Unassign a list of domains from a group.
        static public function GroupDomainUnassignListRequest($serviceProviderId=null,$groupId=null,$domain=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId,
                    'domain' => $domain
                ]
            ];
        }

        # Request to search endpoints in the group.
        static public function GroupEndpointGetListRequest($serviceProviderId=null,$groupId=null,$responseSizeLimit=null,$searchCriteriaLinePortUserPart=null,$searchCriteriaLinePortDomain=null,$searchCriteriaUserLastName=null,$searchCriteriaUserFirstName=null,$searchCriteriaUserId=null,$searchCriteriaDn=null,$searchCriteriaExtension=null,$searchCriteriaDeviceType=null,$searchCriteriaDeviceName=null,$searchCriteriaDeviceMACAddress=null,$searchCriteriaDeviceNetAddress=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId,
                    'responseSizeLimit' => $responseSizeLimit,
                    'searchCriteriaLinePortUserPart' => $searchCriteriaLinePortUserPart,
                    'searchCriteriaLinePortDomain' => $searchCriteriaLinePortDomain,
                    'searchCriteriaUserLastName' => $searchCriteriaUserLastName,
                    'searchCriteriaUserFirstName' => $searchCriteriaUserFirstName,
                    'searchCriteriaUserId' => $searchCriteriaUserId,
                    'searchCriteriaDn' => $searchCriteriaDn,
                    'searchCriteriaExtension' => $searchCriteriaExtension,
                    'searchCriteriaDeviceType' => $searchCriteriaDeviceType,
                    'searchCriteriaDeviceName' => $searchCriteriaDeviceName,
                    'searchCriteriaDeviceMACAddress' => $searchCriteriaDeviceMACAddress,
                    'searchCriteriaDeviceNetAddress' => $searchCriteriaDeviceNetAddress
                ]
            ];
        }

        # Request to assign the user services and service packs to all existing users within the group.
        static public function GroupExistingUsersAssignUserServiceListRequest($serviceProviderId=null,$groupId=null,$serviceName=null,$servicePackName=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId,
                    'serviceName' => $serviceName,
                    'servicePackName' => $servicePackName
                ]
            ];
        }

        # Requests to unassign the user services and service packs for all existing users within the group.
        static public function GroupExistingUsersUnassignUserServiceListRequest($serviceProviderId=null,$groupId=null,$serviceName=null,$servicePackName=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId,
                    'serviceName' => $serviceName,
                    'servicePackName' => $servicePackName
                ]
            ];
        }

        # Request the group's extension length.
        static public function GroupExtensionLengthGetRequest17($serviceProviderId=null,$groupId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId
                ]
            ];
        }

        # Modify the group's extension length range.
        static public function GroupExtensionLengthModifyRequest17($serviceProviderId=null,$groupId=null,$minExtensionLength=null,$maxExtensionLength=null,$defaultExtensionLength=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId,
                    'minExtensionLength' => $minExtensionLength,
                    'maxExtensionLength' => $maxExtensionLength,
                    'defaultExtensionLength' => $defaultExtensionLength
                ]
            ];
        }

        # Get group FAC code level and the list of feature access codes for a group.
        static public function GroupFeatureAccessCodeGetRequest($serviceProviderId=null,$groupId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId
                ]
            ];
        }

        # Modify group FAC code level and the list of feature access codes for a group.
        static public function GroupFeatureAccessCodeModifyRequest($serviceProviderId=null,$groupId=null,$useFeatureAccessCodeLevel=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId,
                    'useFeatureAccessCodeLevel' => $useFeatureAccessCodeLevel
                ]
            ];
        }

        # Add a new group file repository user.
        static public function GroupFileRepositoryDeviceUserAddRequest($serviceProviderId=null,$groupId=null,$fileRepositoryName=null,$userName=null,$password=null,$allowPut=null,$allowDelete=null,$allowGet=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId,
                    'fileRepositoryName' => $fileRepositoryName,
                    'userName' => $userName,
                    'password' => $password,
                    'allowPut' => $allowPut,
                    'allowDelete' => $allowDelete,
                    'allowGet' => $allowGet
                ]
            ];
        }

        # Delete a group file repository user.
        static public function GroupFileRepositoryDeviceUserDeleteRequest($serviceProviderId=null,$groupId=null,$fileRepositoryName=null,$userName=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId,
                    'fileRepositoryName' => $fileRepositoryName,
                    'userName' => $userName
                ]
            ];
        }

        # Modify a group file repository user.
        static public function GroupFileRepositoryDeviceUserModifyRequest($serviceProviderId=null,$groupId=null,$fileRepositoryName=null,$userName=null,$password=null,$allowPut=null,$allowDelete=null,$allowGet=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId,
                    'fileRepositoryName' => $fileRepositoryName,
                    'userName' => $userName,
                    'password' => $password,
                    'allowPut' => $allowPut,
                    'allowDelete' => $allowDelete,
                    'allowGet' => $allowGet
                ]
            ];
        }

        # Request the list of group users for a file repository in the system.
        static public function GroupFileRepositoryDeviceUserGetListRequest($serviceProviderId=null,$groupId=null,$fileRepositoryName=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId,
                    'fileRepositoryName' => $fileRepositoryName
                ]
            ];
        }

        # Request the default profile for a group.
        static public function GroupGetDefaultRequest($serviceProviderId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId
                ]
            ];
        }

        # Request the list of groups in a service provider or enterprise.
        static public function GroupGetListInServiceProviderRequest($serviceProviderId=null,$responseSizeLimit=null,$searchCriteriaGroupId=null,$searchCriteriaGroupName=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'responseSizeLimit' => $responseSizeLimit,
                    'searchCriteriaGroupId' => $searchCriteriaGroupId,
                    'searchCriteriaGroupName' => $searchCriteriaGroupName
                ]
            ];
        }

        # Request the list of groups in the system.
        static public function GroupGetListInSystemRequest($responseSizeLimit=null,$searchCriteriaGroupId=null,$searchCriteriaGroupName=null,$searchCriteriaExactServiceProvider=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'responseSizeLimit' => $responseSizeLimit,
                    'searchCriteriaGroupId' => $searchCriteriaGroupId,
                    'searchCriteriaGroupName' => $searchCriteriaGroupName,
                    'searchCriteriaExactServiceProvider' => $searchCriteriaExactServiceProvider
                ]
            ];
        }

        # Get the profile for a group.
        static public function GroupGetRequest14sp7($serviceProviderId=null,$groupId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId
                ]
            ];
        }

        # Get the list of users assigned the user service or service pack.
        static public function GroupGetUserServiceAssignedUserListRequest($serviceProviderId=null,$groupId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId
                ]
            ];
        }

        # Modify the profile for a group.
        static public function GroupModifyRequest($serviceProviderId=null,$groupId=null,$defaultDomain=null,$userLimit=null,$groupName=null,$callingLineIdName=null,$callingLineIdPhoneNumber=null,$timeZone=null,$locationDialingCode=null,$contact=null,$address=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId,
                    'defaultDomain' => $defaultDomain,
                    'userLimit' => $userLimit,
                    'groupName' => $groupName,
                    'callingLineIdName' => $callingLineIdName,
                    'callingLineIdPhoneNumber' => $callingLineIdPhoneNumber,
                    'timeZone' => $timeZone,
                    'locationDialingCode' => $locationDialingCode,
                    'contact' => $contact,
                    'address' => $address
                ]
            ];
        }

        # Assign a list of Network Classes of Service to a group.
        static public function GroupNetworkClassOfServiceAssignListRequest($serviceProviderId=null,$groupId=null,$networkClassOfService=null,$defaultNetworkClassOfService=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId,
                    'networkClassOfService' => $networkClassOfService,
                    'defaultNetworkClassOfService' => $defaultNetworkClassOfService
                ]
            ];
        }

        # Assign a Network Classes of Service to all users with in a 
        static public function GroupNetworkClassOfServiceAssignToAllUsersRequest($serviceProviderId=null,$groupId=null,$networkClassOfService=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId,
                    'networkClassOfService' => $networkClassOfService
                ]
            ];
        }

        # Get a list of Network Classes of Service assigned to a group.
        static public function GroupNetworkClassOfServiceGetAssignedListRequest($serviceProviderId=null,$groupId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId
                ]
            ];
        }

        # Get a list of users within a group that have a given Network Class
        static public function GroupNetworkClassOfServiceGetAssignedUserListRequest($serviceProviderId=null,$groupId=null,$networkClassOfService=null,$responseSizeLimit=null,$searchCriteriaUserLastName=null,$searchCriteriaUserFirstName=null,$searchCriteriaDn=null,$searchCriteriaEmailAddress=null,$searchCriteriaExactUserDepartment=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId,
                    'networkClassOfService' => $networkClassOfService,
                    'responseSizeLimit' => $responseSizeLimit,
                    'searchCriteriaUserLastName' => $searchCriteriaUserLastName,
                    'searchCriteriaUserFirstName' => $searchCriteriaUserFirstName,
                    'searchCriteriaDn' => $searchCriteriaDn,
                    'searchCriteriaEmailAddress' => $searchCriteriaEmailAddress,
                    'searchCriteriaExactUserDepartment' => $searchCriteriaExactUserDepartment
                ]
            ];
        }

        # Modifies the default Network Classes of Service of a group.
        static public function GroupNetworkClassOfServiceModifyDefaultRequest($serviceProviderId=null,$groupId=null,$networkClassOfService=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId,
                    'networkClassOfService' => $networkClassOfService
                ]
            ];
        }

        # Unassign a list of Network Classes of Service from a group.
        static public function GroupNetworkClassOfServiceUnassignListRequest($serviceProviderId=null,$groupId=null,$networkClassOfService=null,$defaultNetworkClassOfService=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId,
                    'networkClassOfService' => $networkClassOfService,
                    'defaultNetworkClassOfService' => $defaultNetworkClassOfService
                ]
            ];
        }

        # Request to assign the user services and service packs to all new users created within the group
        static public function GroupNewUserTemplateAssignUserServiceListRequest($serviceProviderId=null,$groupId=null,$serviceName=null,$servicePackName=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId,
                    'serviceName' => $serviceName,
                    'servicePackName' => $servicePackName
                ]
            ];
        }

        # Requests to unassign the user services and service packs for all new users created within the group
        static public function GroupNewUserTemplateUnassignUserServiceListRequest($serviceProviderId=null,$groupId=null,$serviceName=null,$servicePackName=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId,
                    'serviceName' => $serviceName,
                    'servicePackName' => $servicePackName
                ]
            ];
        }

        # Assign a list of Office Zones to a group.
        static public function GroupOfficeZoneAssignListRequest($serviceProviderId=null,$groupId=null,$officeZoneName=null,$defaultOfficeZoneName=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId,
                    'officeZoneName' => $officeZoneName,
                    'defaultOfficeZoneName' => $defaultOfficeZoneName
                ]
            ];
        }

        # Get a list of Office Zones assigned to a group.
        static public function GroupOfficeZoneGetAssignedListRequest($serviceProviderId=null,$groupId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId
                ]
            ];
        }

        # Get a list of users within a group that have a given Office Zone assigned.
        static public function GroupOfficeZoneGetAssignedUserListRequest($serviceProviderId=null,$groupId=null,$officeZoneName=null,$responseSizeLimit=null,$searchCriteriaUserLastName=null,$searchCriteriaUserFirstName=null,$searchCriteriaDn=null,$searchCriteriaEmailAddress=null,$searchCriteriaExactUserDepartment=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId,
                    'officeZoneName' => $officeZoneName,
                    'responseSizeLimit' => $responseSizeLimit,
                    'searchCriteriaUserLastName' => $searchCriteriaUserLastName,
                    'searchCriteriaUserFirstName' => $searchCriteriaUserFirstName,
                    'searchCriteriaDn' => $searchCriteriaDn,
                    'searchCriteriaEmailAddress' => $searchCriteriaEmailAddress,
                    'searchCriteriaExactUserDepartment' => $searchCriteriaExactUserDepartment
                ]
            ];
        }

        # Unassign a list of OfficeZones from a group.  Note: a new default must be provided if unassigning the current default.
        static public function GroupOfficeZoneUnassignListRequest($serviceProviderId=null,$groupId=null,$officeZoneName=null,$defaultOfficeZoneName=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId,
                    'officeZoneName' => $officeZoneName,
                    'defaultOfficeZoneName' => $defaultOfficeZoneName
                ]
            ];
        }

        # Requests the group's password rules setting that is applicable to
        static public function GroupPasswordRulesGetRequest16($serviceProviderId=null,$groupId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId
                ]
            ];
        }

        # Request to modify the group's password rules setting that apply to the
        static public function GroupPasswordRulesModifyRequest($serviceProviderId=null,$groupId=null,$disallowUserId=null,$disallowOldPassword=null,$disallowReversedOldPassword=null,$restrictMinDigits=null,$minDigits=null,$restrictMinUpperCaseLetters=null,$minUpperCaseLetters=null,$restrictMinLowerCaseLetters=null,$minLowerCaseLetters=null,$restrictMinNonAlphanumericCharacters=null,$minNonAlphanumericCharacters=null,$minLength=null,$maxFailedLoginAttempts=null,$passwordExpiresDays=null,$sendLoginDisabledNotifyEmail=null,$loginDisabledNotifyEmailAddress=null,$disallowPreviousPasswords=null,$numberOfPreviousPasswords=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId,
                    'disallowUserId' => $disallowUserId,
                    'disallowOldPassword' => $disallowOldPassword,
                    'disallowReversedOldPassword' => $disallowReversedOldPassword,
                    'restrictMinDigits' => $restrictMinDigits,
                    'minDigits' => $minDigits,
                    'restrictMinUpperCaseLetters' => $restrictMinUpperCaseLetters,
                    'minUpperCaseLetters' => $minUpperCaseLetters,
                    'restrictMinLowerCaseLetters' => $restrictMinLowerCaseLetters,
                    'minLowerCaseLetters' => $minLowerCaseLetters,
                    'restrictMinNonAlphanumericCharacters' => $restrictMinNonAlphanumericCharacters,
                    'minNonAlphanumericCharacters' => $minNonAlphanumericCharacters,
                    'minLength' => $minLength,
                    'maxFailedLoginAttempts' => $maxFailedLoginAttempts,
                    'passwordExpiresDays' => $passwordExpiresDays,
                    'sendLoginDisabledNotifyEmail' => $sendLoginDisabledNotifyEmail,
                    'loginDisabledNotifyEmailAddress' => $loginDisabledNotifyEmailAddress,
                    'disallowPreviousPasswords' => $disallowPreviousPasswords,
                    'numberOfPreviousPasswords' => $numberOfPreviousPasswords
                ]
            ];
        }

        # Request a table containing the phone directory for a group.
        static public function GroupPhoneDirectoryGetListRequest17($serviceProviderId=null,$groupId=null,$isExtendedInfoRequested=null,$responseSizeLimit=null,$searchCriteriaUserLastName=null,$searchCriteriaUserFirstName=null,$searchCriteriaDn=null,$searchCriteriaGroupLocationCode=null,$searchCriteriaExtension=null,$searchCriteriaMobilePhoneNumber=null,$searchCriteriaEmailAddress=null,$searchCriteriaYahooId=null,$searchCriteriaExactUserGroup=null,$searchCriteriaExactUserDepartment=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId,
                    'isExtendedInfoRequested' => $isExtendedInfoRequested,
                    'responseSizeLimit' => $responseSizeLimit,
                    'searchCriteriaUserLastName' => $searchCriteriaUserLastName,
                    'searchCriteriaUserFirstName' => $searchCriteriaUserFirstName,
                    'searchCriteriaDn' => $searchCriteriaDn,
                    'searchCriteriaGroupLocationCode' => $searchCriteriaGroupLocationCode,
                    'searchCriteriaExtension' => $searchCriteriaExtension,
                    'searchCriteriaMobilePhoneNumber' => $searchCriteriaMobilePhoneNumber,
                    'searchCriteriaEmailAddress' => $searchCriteriaEmailAddress,
                    'searchCriteriaYahooId' => $searchCriteriaYahooId,
                    'searchCriteriaExactUserGroup' => $searchCriteriaExactUserGroup,
                    'searchCriteriaExactUserDepartment' => $searchCriteriaExactUserDepartment
                ]
            ];
        }

        # Requests the Group's policy settings.
        static public function GroupPolicyGetRequest17($serviceProviderId=null,$groupId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId
                ]
            ];
        }

        # Request to modify the policies for a Group.
        static public function GroupPolicyModifyRequest($serviceProviderId=null,$groupId=null,$callingPlanAccess=null,$extensionAccess=null,$ldapIntegrationAccess=null,$voiceMessagingAccess=null,$departmentAdminUserAccess=null,$departmentAdminTrunkGroupAccess=null,$departmentAdminPhoneNumberExtensionAccess=null,$departmentAdminCallingLineIdNumberAccess=null,$userAuthenticationAccess=null,$userGroupDirectoryAccess=null,$userProfileAccess=null,$userEnhancedCallLogAccess=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId,
                    'callingPlanAccess' => $callingPlanAccess,
                    'extensionAccess' => $extensionAccess,
                    'ldapIntegrationAccess' => $ldapIntegrationAccess,
                    'voiceMessagingAccess' => $voiceMessagingAccess,
                    'departmentAdminUserAccess' => $departmentAdminUserAccess,
                    'departmentAdminTrunkGroupAccess' => $departmentAdminTrunkGroupAccess,
                    'departmentAdminPhoneNumberExtensionAccess' => $departmentAdminPhoneNumberExtensionAccess,
                    'departmentAdminCallingLineIdNumberAccess' => $departmentAdminCallingLineIdNumberAccess,
                    'userAuthenticationAccess' => $userAuthenticationAccess,
                    'userGroupDirectoryAccess' => $userGroupDirectoryAccess,
                    'userProfileAccess' => $userProfileAccess,
                    'userEnhancedCallLogAccess' => $userEnhancedCallLogAccess
                ]
            ];
        }

        # Requests the group's service authorization status.
        static public function GroupServiceGetAuthorizationListRequest($serviceProviderId=null,$groupId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId
                ]
            ];
        }

        # Requests the list of services and service packs authorized to a group.
        static public function GroupServiceGetAuthorizedListRequest($serviceProviderId=null,$groupId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId
                ]
            ];
        }

        # Requests to change the group's service authorization status.
        static public function GroupServiceModifyAuthorizationListRequest($serviceProviderId=null,$groupId=null,$servicePackAuthorization=null,$groupServiceAuthorization=null,$userServiceAuthorization=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId,
                    'servicePackAuthorization' => $servicePackAuthorization,
                    'groupServiceAuthorization' => $groupServiceAuthorization,
                    'userServiceAuthorization' => $userServiceAuthorization
                ]
            ];
        }

        # Requests the group's passcode rules setting.
        static public function GroupPortalPasscodeRulesGetRequest($serviceProviderId=null,$groupId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId
                ]
            ];
        }

        # Request to modify the group's passcode rules setting.
        static public function GroupPortalPasscodeRulesModifyRequest($serviceProviderId=null,$groupId=null,$useRuleLevel=null,$disallowRepeatedDigits=null,$disallowUserNumber=null,$disallowReversedUserNumber=null,$disallowOldPasscode=null,$disallowReversedOldPasscode=null,$minCodeLength=null,$maxCodeLength=null,$disableLoginAfterMaxFailedLoginAttempts=null,$maxFailedLoginAttempts=null,$expirePassword=null,$passcodeExpiresDays=null,$sendLoginDisabledNotifyEmail=null,$loginDisabledNotifyEmailAddress=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId,
                    'useRuleLevel' => $useRuleLevel,
                    'disallowRepeatedDigits' => $disallowRepeatedDigits,
                    'disallowUserNumber' => $disallowUserNumber,
                    'disallowReversedUserNumber' => $disallowReversedUserNumber,
                    'disallowOldPasscode' => $disallowOldPasscode,
                    'disallowReversedOldPasscode' => $disallowReversedOldPasscode,
                    'minCodeLength' => $minCodeLength,
                    'maxCodeLength' => $maxCodeLength,
                    'disableLoginAfterMaxFailedLoginAttempts' => $disableLoginAfterMaxFailedLoginAttempts,
                    'maxFailedLoginAttempts' => $maxFailedLoginAttempts,
                    'expirePassword' => $expirePassword,
                    'passcodeExpiresDays' => $passcodeExpiresDays,
                    'sendLoginDisabledNotifyEmail' => $sendLoginDisabledNotifyEmail,
                    'loginDisabledNotifyEmailAddress' => $loginDisabledNotifyEmailAddress
                ]
            ];
        }

        # Assign a list of route point external systems to a group.
        static public function GroupRoutePointExternalSystemAssignListRequest($serviceProviderId=null,$groupId=null,$routePointExternalSystem=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId,
                    'routePointExternalSystem' => $routePointExternalSystem
                ]
            ];
        }

        # Requests the list of all Route Point External Systems assigned to a group.
        static public function GroupRoutePointExternalSystemGetAssignedListRequest($serviceProviderId=null,$groupId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId
                ]
            ];
        }

        # Request a list of route points within in a group that have a given external system assigned.
        static public function GroupRoutePointExternalSystemGetAssignedRoutePointListRequest($serviceProviderId=null,$groupId=null,$externalSystem=null,$responseSizeLimit=null,$searchCriteriaRoutePointName=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId,
                    'externalSystem' => $externalSystem,
                    'responseSizeLimit' => $responseSizeLimit,
                    'searchCriteriaRoutePointName' => $searchCriteriaRoutePointName
                ]
            ];
        }

        # Unassign a list of route point external systems from a group.
        static public function GroupRoutePointExternalSystemUnassignListRequest($serviceProviderId=null,$groupId=null,$routePointExternalSystem=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId,
                    'routePointExternalSystem' => $routePointExternalSystem
                ]
            ];
        }

        # Request the routing profile for the group.
        static public function GroupRoutingProfileGetRequest($serviceProviderId=null,$groupId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId
                ]
            ];
        }

        # Requests to modify the routing profile for a group.
        static public function GroupRoutingProfileModifyRequest($serviceProviderId=null,$groupId=null,$routingProfile=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId,
                    'routingProfile' => $routingProfile
                ]
            ];
        }

        # Add an event to group schedule. 
        static public function GroupScheduleAddEventRequest($serviceProviderId=null,$groupId=null,$scheduleKey=null,$eventName=null,$startDate=null,$endDate=null,$recurrence=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId,
                    'scheduleKey' => $scheduleKey,
                    'eventName' => $eventName,
                    'startDate' => $startDate,
                    'endDate' => $endDate,
                    'recurrence' => $recurrence
                ]
            ];
        }

        # Add a group schedule.
        static public function GroupScheduleAddRequest($serviceProviderId=null,$groupId=null,$scheduleName=null,$scheduleType=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId,
                    'scheduleName' => $scheduleName,
                    'scheduleType' => $scheduleType
                ]
            ];
        }

        # Delete a list of events from a group schedule.
        static public function GroupScheduleDeleteEventListRequest($serviceProviderId=null,$groupId=null,$scheduleKey=null,$eventName=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId,
                    'scheduleKey' => $scheduleKey,
                    'eventName' => $eventName
                ]
            ];
        }

        # Delete a list of group schedule.
        static public function GroupScheduleDeleteListRequest($serviceProviderId=null,$groupId=null,$scheduleKey=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId,
                    'scheduleKey' => $scheduleKey
                ]
            ];
        }

        # Get the list of events of a group schedule.
        static public function GroupScheduleGetEventListRequest($serviceProviderId=null,$groupId=null,$scheduleKey=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId,
                    'scheduleKey' => $scheduleKey
                ]
            ];
        }

        # Get an event from a group schedule.
        static public function GroupScheduleGetEventRequest($serviceProviderId=null,$groupId=null,$scheduleKey=null,$eventName=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId,
                    'scheduleKey' => $scheduleKey,
                    'eventName' => $eventName
                ]
            ];
        }

        # Get the list of schedules viewable by a group. The list can be filtered by schedule type.
        static public function GroupScheduleGetListRequest17sp1($serviceProviderId=null,$groupId=null,$scheduleType=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId,
                    'scheduleType' => $scheduleType
                ]
            ];
        }

        # Modify an event of a group schedule.
        static public function GroupScheduleModifyEventRequest($serviceProviderId=null,$groupId=null,$scheduleKey=null,$eventName=null,$newEventName=null,$startDate=null,$endDate=null,$recurrence=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId,
                    'scheduleKey' => $scheduleKey,
                    'eventName' => $eventName,
                    'newEventName' => $newEventName,
                    'startDate' => $startDate,
                    'endDate' => $endDate,
                    'recurrence' => $recurrence
                ]
            ];
        }

        # Modify a group schedule.
        static public function GroupScheduleModifyRequest($serviceProviderId=null,$groupId=null,$scheduleKey=null,$newScheduleName=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId,
                    'scheduleKey' => $scheduleKey,
                    'newScheduleName' => $newScheduleName
                ]
            ];
        }

        # Assign one or more group services to the group.
        static public function GroupServiceAssignListRequest($serviceProviderId=null,$groupId=null,$serviceName=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId,
                    'serviceName' => $serviceName
                ]
            ];
        }

        # Request to determine if a GroupService is assigned to the group.
        static public function GroupServiceIsAssignedRequest($serviceProviderId=null,$groupId=null,$serviceName=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId,
                    'serviceName' => $serviceName
                ]
            ];
        }

        # Unassign one or more of the group's assigned services.
        static public function GroupServiceUnassignListRequest($serviceProviderId=null,$groupId=null,$serviceName=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId,
                    'serviceName' => $serviceName
                ]
            ];
        }

        # Request to get the list of devices can be assigned to session admission control group for the group.
        static public function GroupSessionAdmissionControlGetAvailableDeviceListRequest($serviceProviderId=null,$groupId=null,$responseSizeLimit=null,$searchCriteriaDeviceName=null,$searchCriteriaDeviceMACAddress=null,$searchCriteriaDeviceNetAddress=null,$searchCriteriaExactDeviceType=null,$searchCriteriaExactDeviceLevel=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId,
                    'responseSizeLimit' => $responseSizeLimit,
                    'searchCriteriaDeviceName' => $searchCriteriaDeviceName,
                    'searchCriteriaDeviceMACAddress' => $searchCriteriaDeviceMACAddress,
                    'searchCriteriaDeviceNetAddress' => $searchCriteriaDeviceNetAddress,
                    'searchCriteriaExactDeviceType' => $searchCriteriaExactDeviceType,
                    'searchCriteriaExactDeviceLevel' => $searchCriteriaExactDeviceLevel
                ]
            ];
        }

        # Get the session admission control capacity for the group.
        static public function GroupSessionAdmissionControlGetRequest($serviceProviderId=null,$groupId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId
                ]
            ];
        }

        # Request to modify session admission control capacity for the group.
        static public function GroupSessionAdmissionControlModifyRequest($serviceProviderId=null,$groupId=null,$restrictAggregateSessions=null,$maxSessions=null,$maxUserOriginatingSessions=null,$maxUserTerminatingSessions=null,$countIntraGroupSessions=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId,
                    'restrictAggregateSessions' => $restrictAggregateSessions,
                    'maxSessions' => $maxSessions,
                    'maxUserOriginatingSessions' => $maxUserOriginatingSessions,
                    'maxUserTerminatingSessions' => $maxUserTerminatingSessions,
                    'countIntraGroupSessions' => $countIntraGroupSessions
                ]
            ];
        }

        # Request to add one ore more devices to a group level session admission control group.
        static public function GroupSessionAdmissionControlGroupAddDeviceListRequest($serviceProviderId=null,$groupId=null,$name=null,$devices=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId,
                    'name' => $name,
                    'devices' => $devices
                ]
            ];
        }

        # Request to add a session admission control group for the group.
        static public function GroupSessionAdmissionControlGroupAddRequest($serviceProviderId=null,$groupId=null,$name=null,$maxSession=null,$maxUserOriginatingSessions=null,$maxUserTerminatingSessions=null,$reservedSession=null,$reservedUserOriginatingSessions=null,$reservedUserTerminatingSessions=null,$becomeDefaultGroup=null,$countIntraSACGroupSessions=null,$devices=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId,
                    'name' => $name,
                    'maxSession' => $maxSession,
                    'maxUserOriginatingSessions' => $maxUserOriginatingSessions,
                    'maxUserTerminatingSessions' => $maxUserTerminatingSessions,
                    'reservedSession' => $reservedSession,
                    'reservedUserOriginatingSessions' => $reservedUserOriginatingSessions,
                    'reservedUserTerminatingSessions' => $reservedUserTerminatingSessions,
                    'becomeDefaultGroup' => $becomeDefaultGroup,
                    'countIntraSACGroupSessions' => $countIntraSACGroupSessions,
                    'devices' => $devices
                ]
            ];
        }

        # Request to delete one or more devices from a group level session admission control group.
        static public function GroupSessionAdmissionControlGroupDeleteDeviceListRequest($serviceProviderId=null,$groupId=null,$name=null,$devices=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId,
                    'name' => $name,
                    'devices' => $devices
                ]
            ];
        }

        # Request to delete one or more session admission control groups for the group.
        static public function GroupSessionAdmissionControlGroupDeleteListRequest($serviceProviderId=null,$groupId=null,$name=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId,
                    'name' => $name
                ]
            ];
        }

        # Request to get the list of session admission control group for the group.
        static public function GroupSessionAdmissionControlGroupGetListRequest($serviceProviderId=null,$groupId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId
                ]
            ];
        }

        # Request to get a session admission control group for the group.
        static public function GroupSessionAdmissionControlGroupGetRequest($serviceProviderId=null,$groupId=null,$name=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId,
                    'name' => $name
                ]
            ];
        }

        # Request to modify a session admission control group for the group.
        static public function GroupSessionAdmissionControlGroupModifyRequest($serviceProviderId=null,$groupId=null,$name=null,$newName=null,$maxSession=null,$maxUserOriginatingSessions=null,$maxUserTerminatingSessions=null,$reservedSession=null,$reservedUserOriginatingSessions=null,$reservedUserTerminatingSessions=null,$becomeDefaultGroup=null,$countIntraSACGroupSessions=null,$deviceList=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId,
                    'name' => $name,
                    'newName' => $newName,
                    'maxSession' => $maxSession,
                    'maxUserOriginatingSessions' => $maxUserOriginatingSessions,
                    'maxUserTerminatingSessions' => $maxUserTerminatingSessions,
                    'reservedSession' => $reservedSession,
                    'reservedUserOriginatingSessions' => $reservedUserOriginatingSessions,
                    'reservedUserTerminatingSessions' => $reservedUserTerminatingSessions,
                    'becomeDefaultGroup' => $becomeDefaultGroup,
                    'countIntraSACGroupSessions' => $countIntraSACGroupSessions,
                    'deviceList' => $deviceList
                ]
            ];
        }

        # Returns a list of all Public User Identities and associated data in a group.
        static public function GroupShInterfaceGetUserListRequest($serviceProviderId=null,$groupId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId
                ]
            ];
        }

        # Requests the list of available trunk groups within a group.
        static public function GroupTrunkGroupGetAvailableDetailListRequest($serviceProviderId=null,$groupId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId
                ]
            ];
        }

}