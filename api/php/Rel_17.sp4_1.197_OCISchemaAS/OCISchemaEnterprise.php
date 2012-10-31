<?php
class OCISchemaEnterprise {
        # Add the BroadWorks Mobile Manager.
        static public function EnterpriseBroadWorksMobileManagerAddRequest($serviceProviderId=null,$informationFile=null,$certificateFile=null,$isActive=null,$localToCarrier=null,$maxTxPerSecondEnabled=null,$maxTxPerSecond=null,$tldnEnabled=null,$genericNumberEnabled=null,$mobileStateCheckEnabled=null,$locationBasedServicesEnabled=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
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
        static public function EnterpriseBroadWorksMobileManagerGetRequest($serviceProviderId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId
                ]
            ];
        }

        # Get the list of domains of the BroadWorks Mobile Manager.
        static public function EnterpriseBroadWorksMobileManagerGetDomainListRequest($serviceProviderId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId
                ]
            ];
        }

        # Delete the BroadWorks Mobile Manager.
        static public function EnterpriseBroadWorksMobileManagerDeleteRequest($serviceProviderId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId
                ]
            ];
        }

        # Modify the BroadWorks Mobile Manager settings.
        static public function EnterpriseBroadWorksMobileManagerModifyRequest($serviceProviderId=null,$informationFile=null,$certificateFile=null,$localToCarrier=null,$maxTxPerSecondEnabled=null,$maxTxPerSecond=null,$tldnEnabled=null,$genericNumberEnabled=null,$mobileStateCheckEnabled=null,$locationBasedServicesEnabled=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
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
        static public function EnterpriseBroadWorksMobileManagerActivationRequest($serviceProviderId=null,$isActive=null,$deactivationReason=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'isActive' => $isActive,
                    'deactivationReason' => $deactivationReason
                ]
            ];
        }

        # Sends an email with the carrier information and certificate files.
        static public function EnterpriseBroadWorksMobileManagerSendCarrierFilesRequest($serviceProviderId=null,$emailTo=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'emailTo' => $emailTo
                ]
            ];
        }

        # Add a home zone to the BroadWorks Mobile Manager.
        static public function EnterpriseBroadWorksMobileManagerAddHomeZoneRequest($serviceProviderId=null,$homeZoneDomainName=null,$mobileCountryCode=null,$mobileNetworkCode=null,$locationAreaCode=null,$cellIdentity=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'homeZoneDomainName' => $homeZoneDomainName,
                    'mobileCountryCode' => $mobileCountryCode,
                    'mobileNetworkCode' => $mobileNetworkCode,
                    'locationAreaCode' => $locationAreaCode,
                    'cellIdentity' => $cellIdentity
                ]
            ];
        }

        # Get the list of home zones of the BroadWorks Mobile Manager.
        static public function EnterpriseBroadWorksMobileManagerGetHomeZoneListRequest($serviceProviderId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId
                ]
            ];
        }

        # Get a home zone from the BroadWorks Mobile Manager.
        static public function EnterpriseBroadWorksMobileManagerGetHomeZoneRequest($serviceProviderId=null,$homeZoneId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'homeZoneId' => $homeZoneId
                ]
            ];
        }

        # Delete a home zone from the BroadWorks Mobile Manager.
        static public function EnterpriseBroadWorksMobileManagerDeleteHomeZoneRequest($serviceProviderId=null,$homeZoneId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'homeZoneId' => $homeZoneId
                ]
            ];
        }

        # Delete a list of home zones from the BroadWorks Mobile Manager.
        static public function EnterpriseBroadWorksMobileManagerDeleteHomeZoneListRequest($serviceProviderId=null,$homeZoneId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'homeZoneId' => $homeZoneId
                ]
            ];
        }

        # Modify an existing home zone in the BroadWorks Mobile Manager.
        static public function EnterpriseBroadWorksMobileManagerModifyHomeZoneRequest($serviceProviderId=null,$homeZoneId=null,$homeZoneDomainName=null,$mobileCountryCode=null,$mobileNetworkCode=null,$locationAreaCode=null,$cellIdentity=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'homeZoneId' => $homeZoneId,
                    'homeZoneDomainName' => $homeZoneDomainName,
                    'mobileCountryCode' => $mobileCountryCode,
                    'mobileNetworkCode' => $mobileNetworkCode,
                    'locationAreaCode' => $locationAreaCode,
                    'cellIdentity' => $cellIdentity
                ]
            ];
        }

        # Add one or more entries to an enterprise's common phone list.
        static public function EnterpriseCommonPhoneListAddListRequest($serviceProviderId=null,$entry=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'entry' => $entry
                ]
            ];
        }

        # Delete one or more entries from an enterprise's common phone list.
        static public function EnterpriseCommonPhoneListDeleteListRequest($serviceProviderId=null,$entryName=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'entryName' => $entryName
                ]
            ];
        }

        # Get an enterprise's common phone list.
        static public function EnterpriseCommonPhoneListGetListRequest($serviceProviderId=null,$responseSizeLimit=null,$searchCriteriaModeOr=null,$searchCriteriaEnterpriseCommonPhoneListName=null,$searchCriteriaEnterpriseCommonPhoneListNumber=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'responseSizeLimit' => $responseSizeLimit,
                    'searchCriteriaModeOr' => $searchCriteriaModeOr,
                    'searchCriteriaEnterpriseCommonPhoneListName' => $searchCriteriaEnterpriseCommonPhoneListName,
                    'searchCriteriaEnterpriseCommonPhoneListNumber' => $searchCriteriaEnterpriseCommonPhoneListNumber
                ]
            ];
        }

        # Modify an entry in an enterprise's common phone list.
        static public function EnterpriseCommonPhoneListModifyRequest($serviceProviderId=null,$entryName=null,$newEntryName=null,$phoneNumber=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'entryName' => $entryName,
                    'newEntryName' => $newEntryName,
                    'phoneNumber' => $phoneNumber
                ]
            ];
        }

        # Add a department to enterprise.
        static public function EnterpriseDepartmentAddRequest($enterpriseId=null,$departmentName=null,$parentDepartmentKey=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'enterpriseId' => $enterpriseId,
                    'departmentName' => $departmentName,
                    'parentDepartmentKey' => $parentDepartmentKey
                ]
            ];
        }

        # Delete a department from an enterprise.
        static public function EnterpriseDepartmentDeleteRequest($enterpriseId=null,$departmentName=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'enterpriseId' => $enterpriseId,
                    'departmentName' => $departmentName
                ]
            ];
        }

        # Get a list of enterprise level departments in an enterprise that could be the parent of the
        static public function EnterpriseDepartmentGetAvailableParentListRequest($enterpriseId=null,$departmentName=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'enterpriseId' => $enterpriseId,
                    'departmentName' => $departmentName
                ]
            ];
        }

        # Request a list of departments in an enterprise. You may request only the
        static public function EnterpriseDepartmentGetListRequest($enterpriseId=null,$includeGroupDepartments=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'enterpriseId' => $enterpriseId,
                    'includeGroupDepartments' => $includeGroupDepartments
                ]
            ];
        }

        # Modify a department of an enterprise.
        static public function EnterpriseDepartmentModifyRequest($enterpriseId=null,$departmentName=null,$newDepartmentName=null,$newParentDepartmentKey=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'enterpriseId' => $enterpriseId,
                    'departmentName' => $departmentName,
                    'newDepartmentName' => $newDepartmentName,
                    'newParentDepartmentKey' => $newParentDepartmentKey
                ]
            ];
        }

        # Request a table containing the phone directory for an enterprise.
        static public function EnterprisePhoneDirectoryGetListRequest17($enterpriseId=null,$isExtendedInfoRequested=null,$responseSizeLimit=null,$searchCriteriaUserLastName=null,$searchCriteriaUserFirstName=null,$searchCriteriaDn=null,$searchCriteriaGroupLocationCode=null,$searchCriteriaExtension=null,$searchCriteriaMobilePhoneNumber=null,$searchCriteriaEmailAddress=null,$searchCriteriaYahooId=null,$searchCriteriaExactUserGroup=null,$searchCriteriaExactUserDepartment=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'enterpriseId' => $enterpriseId,
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

        # Request to get the list of devices can be assigned to session admission control group for the enterprise.
        static public function EnterpriseSessionAdmissionControlGetAvailableDeviceListRequest($serviceProviderId=null,$responseSizeLimit=null,$searchCriteriaDeviceName=null,$searchCriteriaDeviceMACAddress=null,$searchCriteriaDeviceNetAddress=null,$searchCriteriaGroupId=null,$searchCriteriaExactDeviceType=null,$searchCriteriaExactDeviceLevel=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'responseSizeLimit' => $responseSizeLimit,
                    'searchCriteriaDeviceName' => $searchCriteriaDeviceName,
                    'searchCriteriaDeviceMACAddress' => $searchCriteriaDeviceMACAddress,
                    'searchCriteriaDeviceNetAddress' => $searchCriteriaDeviceNetAddress,
                    'searchCriteriaGroupId' => $searchCriteriaGroupId,
                    'searchCriteriaExactDeviceType' => $searchCriteriaExactDeviceType,
                    'searchCriteriaExactDeviceLevel' => $searchCriteriaExactDeviceLevel
                ]
            ];
        }

        # Request to add one or more devices to an enterprise level session admission control group.
        static public function EnterpriseSessionAdmissionControlGroupAddDeviceListRequest($serviceProviderId=null,$name=null,$devices=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'name' => $name,
                    'devices' => $devices
                ]
            ];
        }

        # Request to add a session admission control group for the enterprise.
        static public function EnterpriseSessionAdmissionControlGroupAddRequest($serviceProviderId=null,$name=null,$maxSession=null,$maxUserOriginatingSessions=null,$maxUserTerminatingSessions=null,$reservedSession=null,$reservedUserOriginatingSessions=null,$reservedUserTerminatingSessions=null,$becomeDefaultGroup=null,$countIntraSACGroupSessions=null,$devices=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
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

        # Request to delete one or more devices from an enterprise level session admission control group.
        static public function EnterpriseSessionAdmissionControlGroupDeleteDeviceListRequest($serviceProviderId=null,$name=null,$devices=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'name' => $name,
                    'devices' => $devices
                ]
            ];
        }

        # Request to delete one or more session admission control groups for the enterprise.
        static public function EnterpriseSessionAdmissionControlGroupDeleteListRequest($serviceProviderId=null,$name=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'name' => $name
                ]
            ];
        }

        # Request to get the list of session admission control group for the enterprise.
        static public function EnterpriseSessionAdmissionControlGroupGetListRequest($serviceProviderId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId
                ]
            ];
        }

        # Request to get a session admission control group for the enterprise.
        static public function EnterpriseSessionAdmissionControlGroupGetRequest($serviceProviderId=null,$name=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'name' => $name
                ]
            ];
        }

        # Request to modify a session admission control group for the enterprise.
        static public function EnterpriseSessionAdmissionControlGroupModifyRequest($serviceProviderId=null,$name=null,$newName=null,$maxSession=null,$maxUserOriginatingSessions=null,$maxUserTerminatingSessions=null,$reservedSession=null,$reservedUserOriginatingSessions=null,$reservedUserTerminatingSessions=null,$becomeDefaultGroup=null,$countIntraSACGroupSessions=null,$deviceList=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
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

        # Add the enterprise level data associated with a Voice VPN location code.
        static public function EnterpriseVoiceVPNAddPolicyRequest($serviceProviderId=null,$locationDialingCode=null,$minExtensionLength=null,$maxExtensionLength=null,$description=null,$routeGroupId=null,$policySelection=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'locationDialingCode' => $locationDialingCode,
                    'minExtensionLength' => $minExtensionLength,
                    'maxExtensionLength' => $maxExtensionLength,
                    'description' => $description,
                    'routeGroupId' => $routeGroupId,
                    'policySelection' => $policySelection
                ]
            ];
        }

        # Delete a enterprise voice VPN location.
        static public function EnterpriseVoiceVPNDeletePolicyRequest($serviceProviderId=null,$locationDialingCode=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'locationDialingCode' => $locationDialingCode
                ]
            ];
        }

        # Request the Voice VPN default settings for the enterprise.
        static public function EnterpriseVoiceVPNGetDefaultRequest($serviceProviderId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId
                ]
            ];
        }

        # Request the enterprise level data associated with Voice VPN location code.
        static public function EnterpriseVoiceVPNGetPolicyRequest($serviceProviderId=null,$locationDialingCode=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'locationDialingCode' => $locationDialingCode
                ]
            ];
        }

        # Request the enterprise level data associated with Voice VPN.
        static public function EnterpriseVoiceVPNGetRequest14sp3($serviceProviderId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId
                ]
            ];
        }

        # Request the list of Voice VPN locations.
        static public function EnterpriseVoiceVPNGetPolicyListRequest($serviceProviderId=null,$responseSizeLimit=null,$searchCriteriaGroupLocationCode=null,$searchCriteriaExactPolicySelection=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'responseSizeLimit' => $responseSizeLimit,
                    'searchCriteriaGroupLocationCode' => $searchCriteriaGroupLocationCode,
                    'searchCriteriaExactPolicySelection' => $searchCriteriaExactPolicySelection
                ]
            ];
        }

        # Modify the enterprise level data associated with a Voice VPN location code.
        static public function EnterpriseVoiceVPNModifyPolicyRequest($serviceProviderId=null,$locationDialingCode=null,$minExtensionLength=null,$maxExtensionLength=null,$description=null,$routeGroupId=null,$policySelection=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'locationDialingCode' => $locationDialingCode,
                    'minExtensionLength' => $minExtensionLength,
                    'maxExtensionLength' => $maxExtensionLength,
                    'description' => $description,
                    'routeGroupId' => $routeGroupId,
                    'policySelection' => $policySelection
                ]
            ];
        }

        # Modify the enterprise voice VPN level data associated with voice VPN.
        static public function EnterpriseVoiceVPNModifyRequest($serviceProviderId=null,$isActive=null,$defaultSelection=null,$e164Selection=null,$usePhoneContext=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'isActive' => $isActive,
                    'defaultSelection' => $defaultSelection,
                    'e164Selection' => $e164Selection,
                    'usePhoneContext' => $usePhoneContext
                ]
            ];
        }

}