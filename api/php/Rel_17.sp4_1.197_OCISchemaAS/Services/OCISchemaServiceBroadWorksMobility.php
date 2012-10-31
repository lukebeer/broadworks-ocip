<?php
class OCISchemaServiceBroadWorksMobility {
        # Adds BroadWorks Mobility IMRN numbers to the system. It is possible to add either: 
        static public function SystemBroadWorksMobilityAddIMRNListRequest($imrnNumber=null,$numberRange=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'imrnNumber' => $imrnNumber,
                    'numberRange' => $numberRange
                ]
            ];
        }

        # Removes a BroadWorks Mobility IMRN number from the system. 
        static public function SystemBroadWorksMobilityDeleteIMRNListRequest($imrnNumber=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'imrnNumber' => $imrnNumber
                ]
            ];
        }

        # Request to get the list of BroadWorks Mobility IMRN numbers defined in the system.
        static public function SystemBroadWorksMobilityGetIMRNListRequest($searchCriteriaIMRN=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'searchCriteriaIMRN' => $searchCriteriaIMRN
                ]
            ];
        }

        # Add a system service access code.
        static public function SystemBroadWorksMobilityServiceAccessCodeAddRequest($serviceAccessCode=null,$countryCode=null,$description=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceAccessCode' => $serviceAccessCode,
                    'countryCode' => $countryCode,
                    'description' => $description
                ]
            ];
        }

        # Delete a system service access code.
        static public function SystemBroadWorksMobilityServiceAccessCodeDeleteRequest($countryCode=null,$serviceAccessCode=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'countryCode' => $countryCode,
                    'serviceAccessCode' => $serviceAccessCode
                ]
            ];
        }

        # Get a list of system service access codes.
        static public function SystemBroadWorksMobilityServiceAccessCodeGetListRequest() {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => null
            ];
        }

        # Modify a system service access code.
        static public function SystemBroadWorksMobilityServiceAccessCodeModifyRequest($countryCode=null,$serviceAccessCode=null,$description=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'countryCode' => $countryCode,
                    'serviceAccessCode' => $serviceAccessCode,
                    'description' => $description
                ]
            ];
        }

        # Get the broadworks mobility system parameters.
        static public function SystemBroadWorksMobilityGetRequest() {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => null
            ];
        }

        # Modify the BroadWorks Mobility system parameters.
        static public function SystemBroadWorksMobilityModifyRequest($enableLocationServices=null,$enableMSRNLookup=null,$enableMobileStateChecking=null,$denyCallOriginations=null,$denyCallTerminations=null,$imrnTimeoutMilliseconds=null,$scfSignalingIPAddress=null,$scfSignalingPort=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'enableLocationServices' => $enableLocationServices,
                    'enableMSRNLookup' => $enableMSRNLookup,
                    'enableMobileStateChecking' => $enableMobileStateChecking,
                    'denyCallOriginations' => $denyCallOriginations,
                    'denyCallTerminations' => $denyCallTerminations,
                    'imrnTimeoutMilliseconds' => $imrnTimeoutMilliseconds,
                    'scfSignalingIPAddress' => $scfSignalingIPAddress,
                    'scfSignalingPort' => $scfSignalingPort
                ]
            ];
        }

        # Get the service provider BroadWorks Mobility service settings.
        static public function ServiceProviderBroadWorksMobilityGetRequest($serviceProviderId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId
                ]
            ];
        }

        # Modify the service provider level BroadWorks Mobility service settings.
        static public function ServiceProviderBroadWorksMobilityModifyRequest($serviceProviderId=null,$useSettingLevel=null,$enableLocationServices=null,$enableMSRNLookup=null,$enableMobileStateChecking=null,$denyCallOriginations=null,$denyCallTerminations=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'useSettingLevel' => $useSettingLevel,
                    'enableLocationServices' => $enableLocationServices,
                    'enableMSRNLookup' => $enableMSRNLookup,
                    'enableMobileStateChecking' => $enableMobileStateChecking,
                    'denyCallOriginations' => $denyCallOriginations,
                    'denyCallTerminations' => $denyCallTerminations
                ]
            ];
        }

        # Get the group’s BroadWorks Mobility settings.
        static public function GroupBroadWorksMobilityGetRequest($serviceProviderId=null,$groupId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId
                ]
            ];
        }

        # Modify the group level broadworks mobility service settings.
        static public function GroupBroadWorksMobilityModifyRequest($serviceProviderId=null,$groupId=null,$useSettingLevel=null,$enableLocationServices=null,$enableMSRNLookup=null,$enableMobileStateChecking=null,$denyCallOriginations=null,$denyCallTerminations=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId,
                    'useSettingLevel' => $useSettingLevel,
                    'enableLocationServices' => $enableLocationServices,
                    'enableMSRNLookup' => $enableMSRNLookup,
                    'enableMobileStateChecking' => $enableMobileStateChecking,
                    'denyCallOriginations' => $denyCallOriginations,
                    'denyCallTerminations' => $denyCallTerminations
                ]
            ];
        }

        # Get the user's broadworks mobility service settings.
        static public function UserBroadWorksMobilityGetRequest($userId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId
                ]
            ];
        }

        # Modify the user's broadworks mobility service settings.
        static public function UserBroadWorksMobilityModifyRequest($userId=null,$isActive=null,$phonesToRing=null,$mobilePhoneNumber=null,$alertClickToDialCalls=null,$alertGroupPagingCalls=null,$enableDiversionInhibitor=null,$requireAnswerConfirmation=null,$broadworksCallControl=null,$useSettingLevel=null,$denyCallOriginations=null,$denyCallTerminations=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId,
                    'isActive' => $isActive,
                    'phonesToRing' => $phonesToRing,
                    'mobilePhoneNumber' => $mobilePhoneNumber,
                    'alertClickToDialCalls' => $alertClickToDialCalls,
                    'alertGroupPagingCalls' => $alertGroupPagingCalls,
                    'enableDiversionInhibitor' => $enableDiversionInhibitor,
                    'requireAnswerConfirmation' => $requireAnswerConfirmation,
                    'broadworksCallControl' => $broadworksCallControl,
                    'useSettingLevel' => $useSettingLevel,
                    'denyCallOriginations' => $denyCallOriginations,
                    'denyCallTerminations' => $denyCallTerminations
                ]
            ];
        }

}