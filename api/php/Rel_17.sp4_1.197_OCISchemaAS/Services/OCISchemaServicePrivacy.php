<?php
class OCISchemaServicePrivacy {
        # Request the data associated with Privacy for a service instance.
        static public function GroupServiceInstancePrivacyGetRequest17sp4($serviceUserId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceUserId' => $serviceUserId
                ]
            ];
        }

        # Modify the data associated with Privacy for a service instance.
        static public function GroupServiceInstancePrivacyModifyRequest($serviceUserId=null,$enableDirectoryPrivacy=null,$enableAutoAttendantExtensionDialingPrivacy=null,$enableAutoAttendantNameDialingPrivacy=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceUserId' => $serviceUserId,
                    'enableDirectoryPrivacy' => $enableDirectoryPrivacy,
                    'enableAutoAttendantExtensionDialingPrivacy' => $enableAutoAttendantExtensionDialingPrivacy,
                    'enableAutoAttendantNameDialingPrivacy' => $enableAutoAttendantNameDialingPrivacy
                ]
            ];
        }

        # Retrieves a list of users in the enterprise or group available
        static public function UserPrivacyGetAvailableMonitorsUserListRequest($userId=null,$responseSizeLimit=null,$searchCriteriaUserLastName=null,$searchCriteriaUserFirstName=null,$searchCriteriaExactUserDepartment=null,$searchCriteriaExactUserGroup=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId,
                    'responseSizeLimit' => $responseSizeLimit,
                    'searchCriteriaUserLastName' => $searchCriteriaUserLastName,
                    'searchCriteriaUserFirstName' => $searchCriteriaUserFirstName,
                    'searchCriteriaExactUserDepartment' => $searchCriteriaExactUserDepartment,
                    'searchCriteriaExactUserGroup' => $searchCriteriaExactUserGroup
                ]
            ];
        }

        # Request the user level data associated with Privacy.
        static public function UserPrivacyGetRequest13mp17($userId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId
                ]
            ];
        }

        # Modify the user level data associated with Privacy.
        static public function UserPrivacyModifyRequest($userId=null,$enableDirectoryPrivacy=null,$enableAutoAttendantExtensionDialingPrivacy=null,$enableAutoAttendantNameDialingPrivacy=null,$enablePhoneStatusPrivacy=null,$permittedMonitorUserIdList=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId,
                    'enableDirectoryPrivacy' => $enableDirectoryPrivacy,
                    'enableAutoAttendantExtensionDialingPrivacy' => $enableAutoAttendantExtensionDialingPrivacy,
                    'enableAutoAttendantNameDialingPrivacy' => $enableAutoAttendantNameDialingPrivacy,
                    'enablePhoneStatusPrivacy' => $enablePhoneStatusPrivacy,
                    'permittedMonitorUserIdList' => $permittedMonitorUserIdList
                ]
            ];
        }

}