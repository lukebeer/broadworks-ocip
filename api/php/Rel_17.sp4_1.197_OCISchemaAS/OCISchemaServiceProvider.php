<?php
class OCISchemaServiceProvider {
        # Request to add a service provider access device.
        static public function ServiceProviderAccessDeviceAddRequest14($serviceProviderId=null,$deviceName=null,$deviceType=null,$protocol=null,$netAddress=null,$port=null,$outboundProxyServerNetAddress=null,$stunServerNetAddress=null,$macAddress=null,$serialNumber=null,$description=null,$physicalLocation=null,$transportProtocol=null,$mobilityManagerProvisioningURL=null,$mobilityManagerProvisioningUserName=null,$mobilityManagerProvisioningPassword=null,$mobilityManagerDefaultOriginatingServiceKey=null,$mobilityManagerDefaultTerminatingServiceKey=null,$useCustomUserNamePassword=null,$accessDeviceCredentials=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
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

        # Request to add a static configuration tag for a service provider access device.
        static public function ServiceProviderAccessDeviceCustomTagAddRequest($serviceProviderId=null,$deviceName=null,$tagName=null,$tagValue=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'deviceName' => $deviceName,
                    'tagName' => $tagName,
                    'tagValue' => $tagValue
                ]
            ];
        }

        # Request to delete static configuration tags for a service provider access device.
        static public function ServiceProviderAccessDeviceCustomTagDeleteListRequest($serviceProviderId=null,$deviceName=null,$tagName=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'deviceName' => $deviceName,
                    'tagName' => $tagName
                ]
            ];
        }

        # Request to get the list of custom configuration tags managed by the Device Management System, on a per-device profile basis.
        static public function ServiceProviderAccessDeviceCustomTagGetListRequest($serviceProviderId=null,$deviceName=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'deviceName' => $deviceName
                ]
            ];
        }

        # Request to modify a static configuration tag for a service provider access device.
        static public function ServiceProviderAccessDeviceCustomTagModifyRequest($serviceProviderId=null,$deviceName=null,$tagName=null,$tagValue=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'deviceName' => $deviceName,
                    'tagName' => $tagName,
                    'tagValue' => $tagValue
                ]
            ];
        }

        # Request to delete a specified service provider access device.
        static public function ServiceProviderAccessDeviceDeleteRequest($serviceProviderId=null,$deviceName=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'deviceName' => $deviceName
                ]
            ];
        }

        # Request to modify a specified service provider/enterprise access device file.
        static public function ServiceProviderAccessDeviceFileModifyRequest14sp8($serviceProviderId=null,$deviceName=null,$fileFormat=null,$fileSource=null,$uploadFile=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'deviceName' => $deviceName,
                    'fileFormat' => $fileFormat,
                    'fileSource' => $fileSource,
                    'uploadFile' => $uploadFile
                ]
            ];
        }

        # Request to get the list of device files managed by the Device Management System, on a per-device profile basis.
        static public function ServiceProviderAccessDeviceFileGetListRequest14sp8($serviceProviderId=null,$deviceName=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'deviceName' => $deviceName
                ]
            ];
        }

        # Request to get a service provider device profile file.
        static public function ServiceProviderAccessDeviceFileGetRequest16sp1($serviceProviderId=null,$deviceName=null,$fileFormat=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'deviceName' => $deviceName,
                    'fileFormat' => $fileFormat
                ]
            ];
        }

        # Requests the list of access devices in a service provider.
        static public function ServiceProviderAccessDeviceGetListRequest($serviceProviderId=null,$responseSizeLimit=null,$searchCriteriaDeviceName=null,$searchCriteriaDeviceMACAddress=null,$searchCriteriaDeviceNetAddress=null,$searchCriteriaExactDeviceType=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'responseSizeLimit' => $responseSizeLimit,
                    'searchCriteriaDeviceName' => $searchCriteriaDeviceName,
                    'searchCriteriaDeviceMACAddress' => $searchCriteriaDeviceMACAddress,
                    'searchCriteriaDeviceNetAddress' => $searchCriteriaDeviceNetAddress,
                    'searchCriteriaExactDeviceType' => $searchCriteriaExactDeviceType
                ]
            ];
        }

        # Requests the configuration of a specified service provider access device.
        static public function ServiceProviderAccessDeviceGetRequest16($serviceProviderId=null,$deviceName=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'deviceName' => $deviceName
                ]
            ];
        }

        # Requests the list of users on a specified device.
        static public function ServiceProviderAccessDeviceGetUserListRequest($serviceProviderId=null,$deviceName=null,$responseSizeLimit=null,$searchCriteriaLinePortUserPart=null,$searchCriteriaLinePortDomain=null,$searchCriteriaUserLastName=null,$searchCriteriaUserFirstName=null,$searchCriteriaDn=null,$searchCriteriaUserId=null,$searchCriteriaGroupId=null,$searchCriteriaExactEndpointType=null,$searchCriteriaExactUserType=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'deviceName' => $deviceName,
                    'responseSizeLimit' => $responseSizeLimit,
                    'searchCriteriaLinePortUserPart' => $searchCriteriaLinePortUserPart,
                    'searchCriteriaLinePortDomain' => $searchCriteriaLinePortDomain,
                    'searchCriteriaUserLastName' => $searchCriteriaUserLastName,
                    'searchCriteriaUserFirstName' => $searchCriteriaUserFirstName,
                    'searchCriteriaDn' => $searchCriteriaDn,
                    'searchCriteriaUserId' => $searchCriteriaUserId,
                    'searchCriteriaGroupId' => $searchCriteriaGroupId,
                    'searchCriteriaExactEndpointType' => $searchCriteriaExactEndpointType,
                    'searchCriteriaExactUserType' => $searchCriteriaExactUserType
                ]
            ];
        }

        # Request to modify a specified service provider access device.
        static public function ServiceProviderAccessDeviceModifyRequest14($serviceProviderId=null,$deviceName=null,$protocol=null,$netAddress=null,$port=null,$outboundProxyServerNetAddress=null,$stunServerNetAddress=null,$macAddress=null,$serialNumber=null,$description=null,$physicalLocation=null,$transportProtocol=null,$mobilityManagerProvisioningURL=null,$mobilityManagerProvisioningUserName=null,$mobilityManagerProvisioningPassword=null,$mobilityManagerDefaultOriginatingServiceKey=null,$mobilityManagerDefaultTerminatingServiceKey=null,$useCustomUserNamePassword=null,$accessDeviceCredentials=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'deviceName' => $deviceName,
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

        # Request to modify attributes for line/ports assigned on the service provider device profile.
        static public function ServiceProviderAccessDeviceModifyUserRequest($serviceProviderId=null,$deviceName=null,$linePort=null,$isPrimaryLinePort=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'deviceName' => $deviceName,
                    'linePort' => $linePort,
                    'isPrimaryLinePort' => $isPrimaryLinePort
                ]
            ];
        }

        # Reset a specific service provider SIP device that supports the reset operation.
        static public function ServiceProviderAccessDeviceResetRequest($serviceProviderId=null,$deviceName=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'deviceName' => $deviceName
                ]
            ];
        }

        # Add a service provider or enterprise.
        static public function ServiceProviderAddRequest13mp2($serviceProviderId=null,$defaultDomain=null,$serviceProviderName=null,$supportEmail=null,$contact=null,$address=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'defaultDomain' => $defaultDomain,
                    'serviceProviderName' => $serviceProviderName,
                    'supportEmail' => $supportEmail,
                    'contact' => $contact,
                    'address' => $address
                ]
            ];
        }

        # Add a service provider administrator.
        static public function ServiceProviderAdminAddRequest14($serviceProviderId=null,$userId=null,$firstName=null,$lastName=null,$password=null,$language=null,$administratorType=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'userId' => $userId,
                    'firstName' => $firstName,
                    'lastName' => $lastName,
                    'password' => $password,
                    'language' => $language,
                    'administratorType' => $administratorType
                ]
            ];
        }

        # Delete a service provider administrator.
        static public function ServiceProviderAdminDeleteRequest($userId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId
                ]
            ];
        }

        # Get a list of service provider administrators.
        static public function ServiceProviderAdminGetListRequest14($serviceProviderId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId
                ]
            ];
        }

        # Requests the service provider administrator's policy settings.
        static public function ServiceProviderAdminGetPolicyRequest17sp3($userId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId
                ]
            ];
        }

        # Get a service provider administrators profile.
        static public function ServiceProviderAdminGetRequest14($userId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId
                ]
            ];
        }

        # Request to modify the service provider administrator's policy settings.
        static public function ServiceProviderAdminModifyPolicyRequest14($userId=null,$profileAccess=null,$groupAccess=null,$userAccess=null,$adminAccess=null,$departmentAccess=null,$accessDeviceAccess=null,$phoneNumberExtensionAccess=null,$callingLineIdNumberAccess=null,$serviceAccess=null,$servicePackAccess=null,$sessionAdmissionControlAccess=null,$webBrandingAccess=null,$officeZoneAccess=null,$communicationBarringAccess=null,$networkPolicyAccess=null,$dialableCallerIDAccess=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId,
                    'profileAccess' => $profileAccess,
                    'groupAccess' => $groupAccess,
                    'userAccess' => $userAccess,
                    'adminAccess' => $adminAccess,
                    'departmentAccess' => $departmentAccess,
                    'accessDeviceAccess' => $accessDeviceAccess,
                    'phoneNumberExtensionAccess' => $phoneNumberExtensionAccess,
                    'callingLineIdNumberAccess' => $callingLineIdNumberAccess,
                    'serviceAccess' => $serviceAccess,
                    'servicePackAccess' => $servicePackAccess,
                    'sessionAdmissionControlAccess' => $sessionAdmissionControlAccess,
                    'webBrandingAccess' => $webBrandingAccess,
                    'officeZoneAccess' => $officeZoneAccess,
                    'communicationBarringAccess' => $communicationBarringAccess,
                    'networkPolicyAccess' => $networkPolicyAccess,
                    'dialableCallerIDAccess' => $dialableCallerIDAccess
                ]
            ];
        }

        # Modify a service provider administrator.
        static public function ServiceProviderAdminModifyRequest($userId=null,$firstName=null,$lastName=null,$password=null,$language=null) {
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

        # Get a service provider or enterprise's answer confirmation settings.
        static public function ServiceProviderAnswerConfirmationGetRequest16($serviceProviderId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId
                ]
            ];
        }

        # Modify a service provider or enterprise's answer confirmation settings.
        static public function ServiceProviderAnswerConfirmationModifyRequest16($serviceProviderId=null,$announcementMessageSelection=null,$confirmationMessageAudioFile=null,$confirmationTimoutSeconds=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'announcementMessageSelection' => $announcementMessageSelection,
                    'confirmationMessageAudioFile' => $confirmationMessageAudioFile,
                    'confirmationTimoutSeconds' => $confirmationTimoutSeconds
                ]
            ];
        }

        # Request the service provider level data associated with Call Processing
        static public function ServiceProviderCallProcessingGetPolicyRequest17sp4($serviceProviderId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId
                ]
            ];
        }

        # Modify the service provider level data associated with Call Procesing
        static public function ServiceProviderCallProcessingModifyPolicyRequest15($serviceProviderId=null,$useServiceProviderDCLIDSetting=null,$useMaxSimultaneousCalls=null,$maxSimultaneousCalls=null,$useMaxSimultaneousVideoCalls=null,$maxSimultaneousVideoCalls=null,$useMaxCallTimeForAnsweredCalls=null,$maxCallTimeForAnsweredCallsMinutes=null,$useMaxCallTimeForUnansweredCalls=null,$maxCallTimeForUnansweredCallsMinutes=null,$mediaPolicySelection=null,$supportedMediaSetName=null,$networkUsageSelection=null,$enforceGroupCallingLineIdentityRestriction=null,$allowEnterpriseGroupCallTypingForPrivateDialingPlan=null,$allowEnterpriseGroupCallTypingForPublicDialingPlan=null,$overrideCLIDRestrictionForPrivateCallCategory=null,$useEnterpriseCLIDForPrivateCallCategory=null,$enableEnterpriseExtensionDialing=null,$enforceEnterpriseCallingLineIdentityRestriction=null,$useSettingLevel=null,$conferenceURI=null,$useMaxConcurrentRedirectedCalls=null,$maxConcurrentRedirectedCalls=null,$useMaxFindMeFollowMeDepth=null,$maxFindMeFollowMeDepth=null,$maxRedirectionDepth=null,$useMaxConcurrentFindMeFollowMeInvocations=null,$maxConcurrentFindMeFollowMeInvocations=null,$clidPolicy=null,$emergencyClidPolicy=null,$allowAlternateNumbersForRedirectingIdentity=null,$enableDialableCallerID=null,$blockCallingNameForExternalCalls=null,$allowConfigurableCLIDForRedirectingIdentity=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'useServiceProviderDCLIDSetting' => $useServiceProviderDCLIDSetting,
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
                    'enforceEnterpriseCallingLineIdentityRestriction' => $enforceEnterpriseCallingLineIdentityRestriction,
                    'useSettingLevel' => $useSettingLevel,
                    'conferenceURI' => $conferenceURI,
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
                    'enableDialableCallerID' => $enableDialableCallerID,
                    'blockCallingNameForExternalCalls' => $blockCallingNameForExternalCalls,
                    'allowConfigurableCLIDForRedirectingIdentity' => $allowConfigurableCLIDForRedirectingIdentity
                ]
            ];
        }

        # Assign a list of Communication Barring Criteria to a service provider.
        static public function ServiceProviderCommunicationBarringCriteriaAssignListRequest($serviceProviderId=null,$criteriaName=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'criteriaName' => $criteriaName
                ]
            ];
        }

        # Get a list of Communication Barring Criteria assigned to a service provider.
        static public function ServiceProviderCommunicationBarringCriteriaGetAssignedListRequest($serviceProviderId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId
                ]
            ];
        }

        # Unassign a list of Communication Barring Criteria from a service provider.
        static public function ServiceProviderCommunicationBarringCriteriaUnassignListRequest($serviceProviderId=null,$criteriaName=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'criteriaName' => $criteriaName
                ]
            ];
        }

        # Add a new Communication Barring Digit Pattern Criteria.
        static public function ServiceProviderCommunicationBarringDigitPatternCriteriaAddRequest($serviceProviderId=null,$name=null,$description=null,$matchDigitPattern=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'name' => $name,
                    'description' => $description,
                    'matchDigitPattern' => $matchDigitPattern
                ]
            ];
        }

        # Delete an existing Communication Barring Digit Pattern Criteria.
        static public function ServiceProviderCommunicationBarringDigitPatternCriteriaDeleteRequest($serviceProviderId=null,$name=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'name' => $name
                ]
            ];
        }

        # Get the list of all Digit Pattern Criteria defined for the service provider.
        static public function ServiceProviderCommunicationBarringDigitPatternCriteriaGetListRequest($serviceProviderId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId
                ]
            ];
        }

        # Get an existing Digit Pattern Criteria.
        static public function ServiceProviderCommunicationBarringDigitPatternCriteriaGetPatternListRequest($serviceProviderId=null,$name=null,$responseSizeLimit=null,$searchCriteriaDigitPattern=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'name' => $name,
                    'responseSizeLimit' => $responseSizeLimit,
                    'searchCriteriaDigitPattern' => $searchCriteriaDigitPattern
                ]
            ];
        }

        # Get an existing Digit Pattern Criteria.
        static public function ServiceProviderCommunicationBarringDigitPatternCriteriaGetRequest($serviceProviderId=null,$name=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'name' => $name
                ]
            ];
        }

        # Modify an existing Communication Barring Digit Pattern Criteria.
        static public function ServiceProviderCommunicationBarringDigitPatternCriteriaModifyRequest($serviceProviderId=null,$name=null,$newName=null,$description=null,$addMatchDigitPattern=null,$deleteMatchDigitPattern=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'name' => $name,
                    'newName' => $newName,
                    'description' => $description,
                    'addMatchDigitPattern' => $addMatchDigitPattern,
                    'deleteMatchDigitPattern' => $deleteMatchDigitPattern
                ]
            ];
        }

        # Add a new Communication Barring Profile.
        static public function ServiceProviderCommunicationBarringProfileAddRequest17sp3($serviceProviderId=null,$name=null,$description=null,$originatingDefaultAction=null,$originatingDefaultTreatmentId=null,$originatingDefaultTransferNumber=null,$originatingDefaultCallTimeout=null,$originatingRule=null,$redirectingDefaultAction=null,$redirectingDefaultCallTimeout=null,$redirectingRule=null,$callMeNowDefaultAction=null,$callMeNowDefaultCallTimeout=null,$callMeNowRule=null,$incomingDefaultAction=null,$incomingDefaultCallTimeout=null,$incomingRule=null,$becomeDefault=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'name' => $name,
                    'description' => $description,
                    'originatingDefaultAction' => $originatingDefaultAction,
                    'originatingDefaultTreatmentId' => $originatingDefaultTreatmentId,
                    'originatingDefaultTransferNumber' => $originatingDefaultTransferNumber,
                    'originatingDefaultCallTimeout' => $originatingDefaultCallTimeout,
                    'originatingRule' => $originatingRule,
                    'redirectingDefaultAction' => $redirectingDefaultAction,
                    'redirectingDefaultCallTimeout' => $redirectingDefaultCallTimeout,
                    'redirectingRule' => $redirectingRule,
                    'callMeNowDefaultAction' => $callMeNowDefaultAction,
                    'callMeNowDefaultCallTimeout' => $callMeNowDefaultCallTimeout,
                    'callMeNowRule' => $callMeNowRule,
                    'incomingDefaultAction' => $incomingDefaultAction,
                    'incomingDefaultCallTimeout' => $incomingDefaultCallTimeout,
                    'incomingRule' => $incomingRule,
                    'becomeDefault' => $becomeDefault
                ]
            ];
        }

        # Deletes an existing Communication Barring Profile.  Optionally, a new default profile can be chosen if the current default profile is being deleted.
        static public function ServiceProviderCommunicationBarringProfileDeleteRequest($serviceProviderId=null,$name=null,$defaultProfile=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'name' => $name,
                    'defaultProfile' => $defaultProfile
                ]
            ];
        }

        # Get a list of groups within a service provider that have a given
        static public function ServiceProviderCommunicationBarringProfileGetAssignedGroupListRequest($serviceProviderId=null,$profile=null,$responseSizeLimit=null,$searchCriteriaGroupId=null,$searchCriteriaGroupName=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'profile' => $profile,
                    'responseSizeLimit' => $responseSizeLimit,
                    'searchCriteriaGroupId' => $searchCriteriaGroupId,
                    'searchCriteriaGroupName' => $searchCriteriaGroupName
                ]
            ];
        }

        # Get a list of Communication Barring profiles within a service provider that have a given Communication Barring Criteria assigned.
        static public function ServiceProviderCommunicationBarringProfileGetCriteriaUsageListRequest($serviceProviderId=null,$criteriaName=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'criteriaName' => $criteriaName
                ]
            ];
        }

        # Get the list of Profiles that use a specific Digit Pattern Criteria.
        static public function ServiceProviderCommunicationBarringProfileGetDigitPatternCriteriaUsageListRequest($serviceProviderId=null,$name=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'name' => $name
                ]
            ];
        }

        # Get the list of all Communication Barring Profiles.
        static public function ServiceProviderCommunicationBarringProfileGetListRequest($serviceProviderId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId
                ]
            ];
        }

        # Get an existing Communication Barring Profile.
        static public function ServiceProviderCommunicationBarringProfileGetRequest17sp3($serviceProviderId=null,$name=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'name' => $name
                ]
            ];
        }

        # Modifies the default Communication Barring Profile of a Service Provider.  If a default has been previously selected, this command will swap the default profile with the profile provided.  Selecting a nil profile will cause the service provider to not have a default Communicaton Barring Profile.
        static public function ServiceProviderCommunicationBarringProfileModifyDefaultRequest($serviceProviderId=null,$name=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'name' => $name
                ]
            ];
        }

        # Modify an existing Communication Barring Profile.
        static public function ServiceProviderCommunicationBarringProfileModifyRequest($serviceProviderId=null,$name=null,$newName=null,$description=null,$originatingDefaultAction=null,$originatingDefaultTreatmentId=null,$originatingDefaultTransferNumber=null,$originatingDefaultCallTimeout=null,$originatingRule=null,$redirectingDefaultAction=null,$redirectingDefaultCallTimeout=null,$redirectingRule=null,$callMeNowDefaultAction=null,$callMeNowDefaultCallTimeout=null,$callMeNowRule=null,$incomingDefaultAction=null,$incomingDefaultCallTimeout=null,$incomingRule=null,$becomeDefault=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'name' => $name,
                    'newName' => $newName,
                    'description' => $description,
                    'originatingDefaultAction' => $originatingDefaultAction,
                    'originatingDefaultTreatmentId' => $originatingDefaultTreatmentId,
                    'originatingDefaultTransferNumber' => $originatingDefaultTransferNumber,
                    'originatingDefaultCallTimeout' => $originatingDefaultCallTimeout,
                    'originatingRule' => $originatingRule,
                    'redirectingDefaultAction' => $redirectingDefaultAction,
                    'redirectingDefaultCallTimeout' => $redirectingDefaultCallTimeout,
                    'redirectingRule' => $redirectingRule,
                    'callMeNowDefaultAction' => $callMeNowDefaultAction,
                    'callMeNowDefaultCallTimeout' => $callMeNowDefaultCallTimeout,
                    'callMeNowRule' => $callMeNowRule,
                    'incomingDefaultAction' => $incomingDefaultAction,
                    'incomingDefaultCallTimeout' => $incomingDefaultCallTimeout,
                    'incomingRule' => $incomingRule,
                    'becomeDefault' => $becomeDefault
                ]
            ];
        }

        # Rebuild the config file for a specified device.
        static public function ServiceProviderCPEConfigRebuildDeviceConfigFileRequest($serviceProviderId=null,$deviceName=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'deviceName' => $deviceName
                ]
            ];
        }

        # Reset a specific service provider or enterprise device.
        static public function ServiceProviderCPEConfigResetDeviceRequest($serviceProviderId=null,$deviceName=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'deviceName' => $deviceName
                ]
            ];
        }

        # Reorder the lines of a Service Provider device. You can not add or delete line ports, only
        static public function ServiceProviderCPEConfigReorderDeviceLinePortsRequest($serviceProviderId=null,$deviceName=null,$orderedLinePortList=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'deviceName' => $deviceName,
                    'orderedLinePortList' => $orderedLinePortList
                ]
            ];
        }

        # Delete a service provider or enterprise.
        static public function ServiceProviderDeleteRequest($serviceProviderId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId
                ]
            ];
        }

        # Add a new Dialable Caller ID Criteria. Criteria are added at the bottom of the list with the lowest priority. The response is either a SuccessResponse or an ErrorResponse.
        static public function ServiceProviderDialableCallerIDCriteriaAddRequest($serviceProviderId=null,$name=null,$description=null,$prefixDigits=null,$matchCallType=null,$matchAlternateCallIndicator=null,$matchLocalCategory=null,$matchNationalCategory=null,$matchInterlataCategory=null,$matchIntralataCategory=null,$matchInternationalCategory=null,$matchPrivateCategory=null,$matchEmergencyCategory=null,$matchOtherCategory=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
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
        static public function ServiceProviderDialableCallerIDCriteriaDeleteRequest($serviceProviderId=null,$name=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'name' => $name
                ]
            ];
        }

        # Get an existing Dialable Caller ID Criteria.
        static public function ServiceProviderDialableCallerIDCriteriaGetRequest($serviceProviderId=null,$name=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'name' => $name
                ]
            ];
        }

        # Modify a Dialable Caller ID Criteria.
        static public function ServiceProviderDialableCallerIDCriteriaModifyRequest($serviceProviderId=null,$name=null,$newName=null,$description=null,$prefixDigits=null,$matchCallType=null,$matchAlternateCallIndicator=null,$matchLocalCategory=null,$matchNationalCategory=null,$matchInterlataCategory=null,$matchIntralataCategory=null,$matchInternationalCategory=null,$matchPrivateCategory=null,$matchEmergencyCategory=null,$matchOtherCategory=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
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

        # Get the service provider?s Dialable Caller ID settings and criteria list.
        static public function ServiceProviderDialableCallerIDGetRequest($serviceProviderId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId
                ]
            ];
        }

        # Modify the service provider?s Dialable Caller ID settings and criteria list.
        static public function ServiceProviderDialableCallerIDModifyRequest($serviceProviderId=null,$useServiceProviderCriteria=null,$nsScreeningFailurePolicy=null,$criteriaPriorityOrder=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'useServiceProviderCriteria' => $useServiceProviderCriteria,
                    'nsScreeningFailurePolicy' => $nsScreeningFailurePolicy,
                    'criteriaPriorityOrder' => $criteriaPriorityOrder
                ]
            ];
        }

        # Request the Service Provider level data associated with Dial Plan Policy.
        static public function ServiceProviderDialPlanPolicyGetRequest17($serviceProviderId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId
                ]
            ];
        }

        # Modify the Service Provider level data associated with Dial Plan Policy.
        static public function ServiceProviderDialPlanPolicyModifyRequest($serviceProviderId=null,$requiresAccessCodeForPublicCalls=null,$allowE164PublicCalls=null,$preferE164NumberFormatForCallbackServices=null,$publicDigitMap=null,$privateDigitMap=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'requiresAccessCodeForPublicCalls' => $requiresAccessCodeForPublicCalls,
                    'allowE164PublicCalls' => $allowE164PublicCalls,
                    'preferE164NumberFormatForCallbackServices' => $preferE164NumberFormatForCallbackServices,
                    'publicDigitMap' => $publicDigitMap,
                    'privateDigitMap' => $privateDigitMap
                ]
            ];
        }

        # Request the Service Provider level data associated with Dial Plan Policy.
        static public function ServiceProviderDialPlanPolicyGetAccessCodeListRequest($serviceProviderId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId
                ]
            ];
        }

        # Request access code data associated with Service Provider level Dial Plan Policy access codes.
        static public function ServiceProviderDialPlanPolicyGetAccessCodeRequest($serviceProviderId=null,$accessCode=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'accessCode' => $accessCode
                ]
            ];
        }

        # Request to add a Service Provider level Dial Plan Access Code and its all attribues.
        static public function ServiceProviderDialPlanPolicyAddAccessCodeRequest($serviceProviderId=null,$accessCode=null,$includeCodeForNetworkTranslationsAndRouting=null,$includeCodeForScreeningServices=null,$enableSecondaryDialTone=null,$description=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'accessCode' => $accessCode,
                    'includeCodeForNetworkTranslationsAndRouting' => $includeCodeForNetworkTranslationsAndRouting,
                    'includeCodeForScreeningServices' => $includeCodeForScreeningServices,
                    'enableSecondaryDialTone' => $enableSecondaryDialTone,
                    'description' => $description
                ]
            ];
        }

        # Request to delete a Service Provider level Dial Plan Access Code and its all attribues.
        static public function ServiceProviderDialPlanPolicyDeleteAccessCodeRequest($serviceProviderId=null,$accessCode=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'accessCode' => $accessCode
                ]
            ];
        }

        # Request to modify a Service Provider level Dial Plan Access Code and its attribues.
        static public function ServiceProviderDialPlanPolicyModifyAccessCodeRequest($serviceProviderId=null,$accessCode=null,$includeCodeForNetworkTranslationsAndRouting=null,$includeCodeForScreeningServices=null,$enableSecondaryDialTone=null,$description=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'accessCode' => $accessCode,
                    'includeCodeForNetworkTranslationsAndRouting' => $includeCodeForNetworkTranslationsAndRouting,
                    'includeCodeForScreeningServices' => $includeCodeForScreeningServices,
                    'enableSecondaryDialTone' => $enableSecondaryDialTone,
                    'description' => $description
                ]
            ];
        }

        # Request the service provider's digit collection attributes.
        static public function ServiceProviderDigitCollectionGetRequest13mp4($serviceProviderId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId
                ]
            ];
        }

        # Modifies the service provider's digit collection attributes.
        static public function ServiceProviderDigitCollectionModifyRequest($serviceProviderId=null,$accessCode=null,$publicDigitMap=null,$privateDigitMap=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'accessCode' => $accessCode,
                    'publicDigitMap' => $publicDigitMap,
                    'privateDigitMap' => $privateDigitMap
                ]
            ];
        }

        # Adds DNs to a service provider. It is possible to add either: a single DN,
        static public function ServiceProviderDnAddListRequest($serviceProviderId=null,$phoneNumber=null,$dnRange=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'phoneNumber' => $phoneNumber,
                    'dnRange' => $dnRange
                ]
            ];
        }

        # Deletes DNs from a service provider. It is possible to delete either: a single DN,
        static public function ServiceProviderDnDeleteListRequest($serviceProviderId=null,$phoneNumber=null,$dnRange=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'phoneNumber' => $phoneNumber,
                    'dnRange' => $dnRange
                ]
            ];
        }

        # Request a list of available DNs not yet assigned to any group.
        static public function ServiceProviderDnGetAvailableListRequest($serviceProviderId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId
                ]
            ];
        }

        # Request a summary table of all DNs in a service provider.
        static public function ServiceProviderDnGetSummaryListRequest($serviceProviderId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId
                ]
            ];
        }

        # Assign a list of domains to a service provider.
        static public function ServiceProviderDomainAssignListRequest($serviceProviderId=null,$domain=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'domain' => $domain
                ]
            ];
        }

        # Requests a list of groups within a service provider that have a given domain assigned.
        static public function ServiceProviderDomainGetAssignedGroupListRequest($serviceProviderId=null,$domain=null,$responseSizeLimit=null,$searchCriteriaGroupId=null,$searchCriteriaGroupName=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'domain' => $domain,
                    'responseSizeLimit' => $responseSizeLimit,
                    'searchCriteriaGroupId' => $searchCriteriaGroupId,
                    'searchCriteriaGroupName' => $searchCriteriaGroupName
                ]
            ];
        }

        # Requests the list of all domains assigned to a service provider.
        static public function ServiceProviderDomainGetAssignedListRequest($serviceProviderId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId
                ]
            ];
        }

        # Unassign a list of domains from a service provider.
        static public function ServiceProviderDomainUnassignListRequest($serviceProviderId=null,$domain=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'domain' => $domain
                ]
            ];
        }

        # Request to search endpoints in the service provider/enterprise.
        static public function ServiceProviderEndpointGetListRequest($serviceProviderId=null,$responseSizeLimit=null,$searchCriteriaGroupId=null,$searchCriteriaLinePortUserPart=null,$searchCriteriaLinePortDomain=null,$searchCriteriaUserLastName=null,$searchCriteriaUserFirstName=null,$searchCriteriaUserId=null,$searchCriteriaDn=null,$searchCriteriaExtension=null,$searchCriteriaDeviceType=null,$searchCriteriaDeviceName=null,$searchCriteriaDeviceMACAddress=null,$searchCriteriaDeviceNetAddress=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'responseSizeLimit' => $responseSizeLimit,
                    'searchCriteriaGroupId' => $searchCriteriaGroupId,
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

        # Get the list of feature access codes for a service provider or enterprise.
        static public function ServiceProviderFeatureAccessCodeGetListRequest($serviceProviderId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId
                ]
            ];
        }

        # Modify a list of feature access codes for a service provider or enterprise.
        static public function ServiceProviderFeatureAccessCodeModifyListRequest($serviceProviderId=null,$featureAccessCode=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'featureAccessCode' => $featureAccessCode
                ]
            ];
        }

        # Add a new service provider file repository user.
        static public function ServiceProviderFileRepositoryDeviceUserAddRequest($serviceProviderId=null,$fileRepositoryName=null,$userName=null,$password=null,$allowPut=null,$allowDelete=null,$allowGet=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'fileRepositoryName' => $fileRepositoryName,
                    'userName' => $userName,
                    'password' => $password,
                    'allowPut' => $allowPut,
                    'allowDelete' => $allowDelete,
                    'allowGet' => $allowGet
                ]
            ];
        }

        # Delete a service provider file repository user.
        static public function ServiceProviderFileRepositoryDeviceUserDeleteRequest($serviceProviderId=null,$fileRepositoryName=null,$userName=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'fileRepositoryName' => $fileRepositoryName,
                    'userName' => $userName
                ]
            ];
        }

        # Modify a service provider file repository user.
        static public function ServiceProviderFileRepositoryDeviceUserModifyRequest($serviceProviderId=null,$fileRepositoryName=null,$userName=null,$password=null,$allowPut=null,$allowDelete=null,$allowGet=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'fileRepositoryName' => $fileRepositoryName,
                    'userName' => $userName,
                    'password' => $password,
                    'allowPut' => $allowPut,
                    'allowDelete' => $allowDelete,
                    'allowGet' => $allowGet
                ]
            ];
        }

        # Request the list of service provider users for a file repository in the system.
        static public function ServiceProviderFileRepositoryDeviceUserGetListRequest($serviceProviderId=null,$fileRepositoryName=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'fileRepositoryName' => $fileRepositoryName
                ]
            ];
        }

        # Request the default profile for a service provider or enterprise.
        static public function ServiceProviderGetDefaultRequest() {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => null
            ];
        }

        # Request a list of service providers and/or enterprises in the system.
        static public function ServiceProviderGetListRequest($isEnterprise=null,$responseSizeLimit=null,$searchCriteriaServiceProviderId=null,$searchCriteriaServiceProviderName=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'isEnterprise' => $isEnterprise,
                    'responseSizeLimit' => $responseSizeLimit,
                    'searchCriteriaServiceProviderId' => $searchCriteriaServiceProviderId,
                    'searchCriteriaServiceProviderName' => $searchCriteriaServiceProviderName
                ]
            ];
        }

        # Get the profile for a service provider or enterprise.
        static public function ServiceProviderGetRequest17sp1($serviceProviderId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId
                ]
            ];
        }

        # Modify the profile for a service provider or enterprise.
        static public function ServiceProviderModifyRequest($serviceProviderId=null,$defaultDomain=null,$serviceProviderName=null,$supportEmail=null,$contact=null,$address=null,$useServiceProviderLanguages=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'defaultDomain' => $defaultDomain,
                    'serviceProviderName' => $serviceProviderName,
                    'supportEmail' => $supportEmail,
                    'contact' => $contact,
                    'address' => $address,
                    'useServiceProviderLanguages' => $useServiceProviderLanguages
                ]
            ];
        }

        # Modifies the default Network Classes of Service of a Service Provider.
        static public function ServiceProviderNetworkClassOfServiceModifyDefaultRequest($serviceProviderId=null,$networkClassOfService=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'networkClassOfService' => $networkClassOfService
                ]
            ];
        }

        # Assign a list of Network Classes of Service to a service provider.
        static public function ServiceProviderNetworkClassOfServiceAssignListRequest($serviceProviderId=null,$networkClassOfService=null,$defaultNetworkClassOfService=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'networkClassOfService' => $networkClassOfService,
                    'defaultNetworkClassOfService' => $defaultNetworkClassOfService
                ]
            ];
        }

        # Assign a list of Network Classes of Service to all groups with in a 
        static public function ServiceProviderNetworkClassOfServiceAssignListToAllGroupsRequest($serviceProviderId=null,$networkClassOfService=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'networkClassOfService' => $networkClassOfService
                ]
            ];
        }

        # Assign a Network Classes of Service to all users with in a 
        static public function ServiceProviderNetworkClassOfServiceAssignToAllUsersRequest($serviceProviderId=null,$networkClassOfService=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'networkClassOfService' => $networkClassOfService
                ]
            ];
        }

        # Get a list of Network Classes of Service assigned to a service provider.
        static public function ServiceProviderNetworkClassOfServiceGetAssignedListRequest($serviceProviderId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId
                ]
            ];
        }

        # Get a list of groups within a service provider that have a given
        static public function ServiceProviderNetworkClassOfServiceGetAssignedGroupListRequest($serviceProviderId=null,$networkClassOfService=null,$responseSizeLimit=null,$searchCriteriaGroupId=null,$searchCriteriaGroupName=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'networkClassOfService' => $networkClassOfService,
                    'responseSizeLimit' => $responseSizeLimit,
                    'searchCriteriaGroupId' => $searchCriteriaGroupId,
                    'searchCriteriaGroupName' => $searchCriteriaGroupName
                ]
            ];
        }

        # Unassign a list of Network Classes of Service from a service provider.
        static public function ServiceProviderNetworkClassOfServiceUnassignListRequest($serviceProviderId=null,$networkClassOfService=null,$defaultNetworkClassOfService=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'networkClassOfService' => $networkClassOfService,
                    'defaultNetworkClassOfService' => $defaultNetworkClassOfService
                ]
            ];
        }

        # Assign a list of Office Zones to a service provider.
        static public function ServiceProviderOfficeZoneAssignListRequest($serviceProviderId=null,$officeZoneName=null,$defaultOfficeZoneName=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'officeZoneName' => $officeZoneName,
                    'defaultOfficeZoneName' => $defaultOfficeZoneName
                ]
            ];
        }

        # Get a list of Office Zones assigned to a service provider.
        static public function ServiceProviderOfficeZoneGetAssignedListRequest($serviceProviderId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId
                ]
            ];
        }

        # Get a list of groups within a service provider that have a given Office Zone assigned.
        static public function ServiceProviderOfficeZoneGetAssignedGroupListRequest($serviceProviderId=null,$officeZoneName=null,$responseSizeLimit=null,$searchCriteriaGroupId=null,$searchCriteriaGroupName=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'officeZoneName' => $officeZoneName,
                    'responseSizeLimit' => $responseSizeLimit,
                    'searchCriteriaGroupId' => $searchCriteriaGroupId,
                    'searchCriteriaGroupName' => $searchCriteriaGroupName
                ]
            ];
        }

        # Unassign a list of OfficeZones from a service provider.  Note: a new default must be provided if unassigning the current default.
        static public function ServiceProviderOfficeZoneUnassignListRequest($serviceProviderId=null,$officeZoneName=null,$defaultOfficeZoneName=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'officeZoneName' => $officeZoneName,
                    'defaultOfficeZoneName' => $defaultOfficeZoneName
                ]
            ];
        }

        # Requests the service provider's passcode rules setting.
        static public function ServiceProviderPortalPasscodeRulesGetRequest($serviceProviderId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId
                ]
            ];
        }

        # Request to modify the service provider's passcode rules setting.
        static public function ServiceProviderPortalPasscodeRulesModifyRequest($serviceProviderId=null,$disallowRepeatedDigits=null,$disallowUserNumber=null,$disallowReversedUserNumber=null,$disallowOldPasscode=null,$disallowReversedOldPasscode=null,$minCodeLength=null,$maxCodeLength=null,$disableLoginAfterMaxFailedLoginAttempts=null,$maxFailedLoginAttempts=null,$expirePassword=null,$passcodeExpiresDays=null,$sendLoginDisabledNotifyEmail=null,$loginDisabledNotifyEmailAddress=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
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

        # Requests the service provider's password rules setting applicable to
        static public function ServiceProviderPasswordRulesGetRequest16($serviceProviderId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId
                ]
            ];
        }

        # Request to modify the service provider's password rules settings
        static public function ServiceProviderPasswordRulesModifyRequest14sp3($serviceProviderId=null,$rulesApplyTo=null,$allowWebAddExternalAuthenticationUsers=null,$disallowUserId=null,$disallowOldPassword=null,$disallowReversedOldPassword=null,$restrictMinDigits=null,$minDigits=null,$restrictMinUpperCaseLetters=null,$minUpperCaseLetters=null,$restrictMinLowerCaseLetters=null,$minLowerCaseLetters=null,$restrictMinNonAlphanumericCharacters=null,$minNonAlphanumericCharacters=null,$minLength=null,$maxFailedLoginAttempts=null,$passwordExpiresDays=null,$sendLoginDisabledNotifyEmail=null,$loginDisabledNotifyEmailAddress=null,$disallowPreviousPasswords=null,$numberOfPreviousPasswords=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'rulesApplyTo' => $rulesApplyTo,
                    'allowWebAddExternalAuthenticationUsers' => $allowWebAddExternalAuthenticationUsers,
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

        # Assign a list of route point external systems to a service provider.
        static public function ServiceProviderRoutePointExternalSystemAssignListRequest($serviceProviderId=null,$routePointExternalSystem=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'routePointExternalSystem' => $routePointExternalSystem
                ]
            ];
        }

        # Requests a list of groups within a service provider that have a given external system assigned.
        static public function ServiceProviderRoutePointExternalSystemGetAssignedGroupListRequest($serviceProviderId=null,$externalSystem=null,$responseSizeLimit=null,$searchCriteriaGroupId=null,$searchCriteriaGroupName=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'externalSystem' => $externalSystem,
                    'responseSizeLimit' => $responseSizeLimit,
                    'searchCriteriaGroupId' => $searchCriteriaGroupId,
                    'searchCriteriaGroupName' => $searchCriteriaGroupName
                ]
            ];
        }

        # Requests the list of all Route Point External Systems assigned to a service provider.
        static public function ServiceProviderRoutePointExternalSystemGetAssignedListRequest($serviceProviderId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId
                ]
            ];
        }

        # Unassign a list of route point external systems from a service provider.
        static public function ServiceProviderRoutePointExternalSystemUnassignListRequest($serviceProviderId=null,$routePointExternalSystem=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'routePointExternalSystem' => $routePointExternalSystem
                ]
            ];
        }

        # Request the routing profile for the service provider/enterprise.
        static public function ServiceProviderRoutingProfileGetRequest($serviceProviderId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId
                ]
            ];
        }

        # Requests to modify the routing profile for a service provider.
        static public function ServiceProviderRoutingProfileModifyRequest($serviceProviderId=null,$routingProfile=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'routingProfile' => $routingProfile
                ]
            ];
        }

        # Add an event to service provider schedule. 
        static public function ServiceProviderScheduleAddEventRequest($serviceProviderId=null,$scheduleKey=null,$eventName=null,$startDate=null,$endDate=null,$recurrence=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'scheduleKey' => $scheduleKey,
                    'eventName' => $eventName,
                    'startDate' => $startDate,
                    'endDate' => $endDate,
                    'recurrence' => $recurrence
                ]
            ];
        }

        # Add a service provider schedule.
        static public function ServiceProviderScheduleAddRequest($serviceProviderId=null,$scheduleName=null,$scheduleType=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'scheduleName' => $scheduleName,
                    'scheduleType' => $scheduleType
                ]
            ];
        }

        # Delete a list of events from a service provider schedule.
        static public function ServiceProviderScheduleDeleteEventListRequest($serviceProviderId=null,$scheduleKey=null,$eventName=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'scheduleKey' => $scheduleKey,
                    'eventName' => $eventName
                ]
            ];
        }

        # Delete a list of service provider schedule.
        static public function ServiceProviderScheduleDeleteListRequest($serviceProviderId=null,$scheduleKey=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'scheduleKey' => $scheduleKey
                ]
            ];
        }

        # Get the list of events of a service provider schedule.
        static public function ServiceProviderScheduleGetEventListRequest($serviceProviderId=null,$scheduleKey=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'scheduleKey' => $scheduleKey
                ]
            ];
        }

        # Get an event from a service provider schedule.
        static public function ServiceProviderScheduleGetEventRequest($serviceProviderId=null,$scheduleKey=null,$eventName=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'scheduleKey' => $scheduleKey,
                    'eventName' => $eventName
                ]
            ];
        }

        # Get the list of a service provider schedules. The list can be filtered by schedule type.
        static public function ServiceProviderScheduleGetListRequest($serviceProviderId=null,$scheduleType=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'scheduleType' => $scheduleType
                ]
            ];
        }

        # Modify an event of a service provider schedule.
        static public function ServiceProviderScheduleModifyEventRequest($serviceProviderId=null,$scheduleKey=null,$eventName=null,$newEventName=null,$startDate=null,$endDate=null,$recurrence=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'scheduleKey' => $scheduleKey,
                    'eventName' => $eventName,
                    'newEventName' => $newEventName,
                    'startDate' => $startDate,
                    'endDate' => $endDate,
                    'recurrence' => $recurrence
                ]
            ];
        }

        # Modify a service provider schedule.
        static public function ServiceProviderScheduleModifyRequest($serviceProviderId=null,$scheduleKey=null,$newScheduleName=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'scheduleKey' => $scheduleKey,
                    'newScheduleName' => $newScheduleName
                ]
            ];
        }

        # Requests the service provider's service authorization status.
        static public function ServiceProviderServiceGetAuthorizationListRequest($serviceProviderId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId
                ]
            ];
        }

        # Requests the list of all user services assignable to users in the specified service provider.
        static public function ServiceProviderServiceGetUserAssignableListRequest($serviceProviderId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId
                ]
            ];
        }

        # Requests to change the service provider's service authorization status.
        static public function ServiceProviderServiceModifyAuthorizationListRequest($serviceProviderId=null,$groupServiceAuthorization=null,$userServiceAuthorization=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupServiceAuthorization' => $groupServiceAuthorization,
                    'userServiceAuthorization' => $userServiceAuthorization
                ]
            ];
        }

        # Request to add a service pack to a service provider.
        static public function ServiceProviderServicePackAddRequest($serviceProviderId=null,$servicePackName=null,$servicePackDescription=null,$isAvailableForUse=null,$servicePackQuantity=null,$serviceName=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'servicePackName' => $servicePackName,
                    'servicePackDescription' => $servicePackDescription,
                    'isAvailableForUse' => $isAvailableForUse,
                    'servicePackQuantity' => $servicePackQuantity,
                    'serviceName' => $serviceName
                ]
            ];
        }

        # Request to add services to a service pack if the pack has not been authorized to a group.
        static public function ServiceProviderServicePackAddServiceListRequest($serviceProviderId=null,$servicePackName=null,$serviceName=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'servicePackName' => $servicePackName,
                    'serviceName' => $serviceName
                ]
            ];
        }

        # Request to delete a service pack from a service provider.
        static public function ServiceProviderServicePackDeleteRequest($serviceProviderId=null,$servicePackName=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'servicePackName' => $servicePackName
                ]
            ];
        }

        # Request to get a service pack details.
        static public function ServiceProviderServicePackGetDetailListRequest($serviceProviderId=null,$servicePackName=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'servicePackName' => $servicePackName
                ]
            ];
        }

        # Request to get a list of defined service packs for a service provider.
        static public function ServiceProviderServicePackGetListRequest($serviceProviderId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId
                ]
            ];
        }

        # Request to get the list of service packs containing a specified service.
        static public function ServiceProviderServicePackGetServiceUsageListRequest($serviceProviderId=null,$serviceName=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'serviceName' => $serviceName
                ]
            ];
        }

        # Request to get the service pack utilization for a service provider.
        static public function ServiceProviderServicePackGetUtilizationListRequest($serviceProviderId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId
                ]
            ];
        }

        # Modify the properties of a specified service pack migration task.
        static public function ServiceProviderServicePackMigrationTaskAddRequest($serviceProviderId=null,$taskName=null,$startTimestamp=null,$maxDurationHours=null,$sendReportEmail=null,$reportDeliveryEmailAddress=null,$abortOnError=null,$abortErrorThreshold=null,$reportAllUsers=null,$automaticallyIncrementServiceQuantity=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'taskName' => $taskName,
                    'startTimestamp' => $startTimestamp,
                    'maxDurationHours' => $maxDurationHours,
                    'sendReportEmail' => $sendReportEmail,
                    'reportDeliveryEmailAddress' => $reportDeliveryEmailAddress,
                    'abortOnError' => $abortOnError,
                    'abortErrorThreshold' => $abortErrorThreshold,
                    'reportAllUsers' => $reportAllUsers,
                    'automaticallyIncrementServiceQuantity' => $automaticallyIncrementServiceQuantity
                ]
            ];
        }

        # Makes a copy of one or more existing service pack migration tasks. A copied task
        static public function ServiceProviderServicePackMigrationTaskCopyRequest($serviceProviderId=null,$taskName=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'taskName' => $taskName
                ]
            ];
        }

        # Deletes a service pack migration task. It is not possible to delete a task while it is
        static public function ServiceProviderServicePackMigrationTaskDeleteRequest($serviceProviderId=null,$taskName=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'taskName' => $taskName
                ]
            ];
        }

        # Requests a list of groups to migrate.
        static public function ServiceProviderServicePackMigrationTaskGetAvailableGroupListRequest($serviceProviderId=null,$responseSizeLimit=null,$searchCriteriaGroupId=null,$searchCriteriaGroupName=null) {
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

        # Requests a list of all service pack migration task for a service provider.
        static public function ServiceProviderServicePackMigrationTaskGetListRequest($serviceProviderId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId
                ]
            ];
        }

        # Requests the details of a specified service pack migration task.
        static public function ServiceProviderServicePackMigrationTaskGetRequest14sp4($serviceProviderId=null,$taskName=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'taskName' => $taskName
                ]
            ];
        }

        # Replace the list of services and packs to be assigned to users during the service pack migration.
        static public function ServiceProviderServicePackMigrationTaskModifyAssignmentListRequest($serviceProviderId=null,$taskName=null,$userServiceNameList=null,$servicePackNameList=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'taskName' => $taskName,
                    'userServiceNameList' => $userServiceNameList,
                    'servicePackNameList' => $servicePackNameList
                ]
            ];
        }

        # Replace the list of groups to be migrated for a specified service pack migration task.
        static public function ServiceProviderServicePackMigrationTaskModifyGroupListRequest($serviceProviderId=null,$taskName=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'taskName' => $taskName
                ]
            ];
        }

        # Replace the list of services and packs to be removed from users during the service pack migration.
        static public function ServiceProviderServicePackMigrationTaskModifyRemovalListRequest($serviceProviderId=null,$taskName=null,$userServiceNameList=null,$servicePackNameList=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'taskName' => $taskName,
                    'userServiceNameList' => $userServiceNameList,
                    'servicePackNameList' => $servicePackNameList
                ]
            ];
        }

        # Modify the properties of a specified service pack migration task.
        static public function ServiceProviderServicePackMigrationTaskModifyRequest($serviceProviderId=null,$taskName=null,$newTaskName=null,$startTimestamp=null,$maxDurationHours=null,$sendReportEmail=null,$reportDeliveryEmailAddress=null,$abortOnError=null,$abortErrorThreshold=null,$reportAllUsers=null,$automaticallyIncrementServiceQuantity=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'taskName' => $taskName,
                    'newTaskName' => $newTaskName,
                    'startTimestamp' => $startTimestamp,
                    'maxDurationHours' => $maxDurationHours,
                    'sendReportEmail' => $sendReportEmail,
                    'reportDeliveryEmailAddress' => $reportDeliveryEmailAddress,
                    'abortOnError' => $abortOnError,
                    'abortErrorThreshold' => $abortErrorThreshold,
                    'reportAllUsers' => $reportAllUsers,
                    'automaticallyIncrementServiceQuantity' => $automaticallyIncrementServiceQuantity
                ]
            ];
        }

        # Replace the list of services and packs used to select which users will be migrated.
        static public function ServiceProviderServicePackMigrationTaskModifyUserSelectionRequest($serviceProviderId=null,$taskName=null,$userSelectionType=null,$userServiceNameList=null,$servicePackNameList=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'taskName' => $taskName,
                    'userSelectionType' => $userSelectionType,
                    'userServiceNameList' => $userServiceNameList,
                    'servicePackNameList' => $servicePackNameList
                ]
            ];
        }

        # Terminates a service pack migration task that is currently executing.
        static public function ServiceProviderServicePackMigrationTaskTerminateRequest($serviceProviderId=null,$taskName=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'taskName' => $taskName
                ]
            ];
        }

        # Requests to modify a service pack for a service provider.
        static public function ServiceProviderServicePackModifyRequest($serviceProviderId=null,$servicePackName=null,$newServicePackName=null,$servicePackDescription=null,$isAvailableForUse=null,$servicePackQuantity=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'servicePackName' => $servicePackName,
                    'newServicePackName' => $newServicePackName,
                    'servicePackDescription' => $servicePackDescription,
                    'isAvailableForUse' => $isAvailableForUse,
                    'servicePackQuantity' => $servicePackQuantity
                ]
            ];
        }

        # Get the session admission control capacity for the service provider.
        static public function ServiceProviderSessionAdmissionControlGetRequest($serviceProviderId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId
                ]
            ];
        }

        # Request to modify session admission control capacity for the service provider.
        static public function ServiceProviderSessionAdmissionControlModifyRequest($serviceProviderId=null,$restrictAggregateSessions=null,$maxSessions=null,$maxUserOriginatingSessions=null,$maxUserTerminatingSessions=null,$countIntraServiceProviderSessions=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'restrictAggregateSessions' => $restrictAggregateSessions,
                    'maxSessions' => $maxSessions,
                    'maxUserOriginatingSessions' => $maxUserOriginatingSessions,
                    'maxUserTerminatingSessions' => $maxUserTerminatingSessions,
                    'countIntraServiceProviderSessions' => $countIntraServiceProviderSessions
                ]
            ];
        }

        # Request to add a language for a service provder.
        static public function ServiceProviderLanguageAddRequest($serviceProviderId=null,$language=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'language' => $language
                ]
            ];
        }

        # Request to modify a language properties for a service provider/enterprise.
        static public function ServiceProviderLanguageModifyRequest($serviceProviderId=null,$language=null,$becomeDefaultLanguage=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'language' => $language,
                    'becomeDefaultLanguage' => $becomeDefaultLanguage
                ]
            ];
        }

        # Request to delete a language from a service provider supported languages.
        static public function ServiceProviderLanguageDeleteRequest($serviceProviderId=null,$language=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'language' => $language
                ]
            ];
        }

        # Request the defined languages for a service provider.
        static public function ServiceProviderLanguageGetListRequest($serviceProviderId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId
                ]
            ];
        }

        # Request the list of languages that a user or admin in a service provider is allowed to use.  
        static public function ServiceProviderLanguageGetAvailableListRequest($serviceProviderId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId
                ]
            ];
        }

        # Modify the Application Server set assigned to the service provider or enterprise.
        static public function ServiceProviderApplicationServerSetModifyRequest($serviceProviderId=null,$applicationServerSetName=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'applicationServerSetName' => $applicationServerSetName
                ]
            ];
        }

        # Get the Application Server set for a service provider or enterprise.
        static public function ServiceProviderApplicationServerSetGetRequest($serviceProviderId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId
                ]
            ];
        }

}