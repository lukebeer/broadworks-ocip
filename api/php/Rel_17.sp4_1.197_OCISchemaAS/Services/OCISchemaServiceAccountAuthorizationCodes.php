<?php
class OCISchemaServiceAccountAuthorizationCodes {
        # Add a list of account/authorization codes to a group.
        static public function GroupAccountAuthorizationCodesAddListRequest($serviceProviderId=null,$groupId=null,$codeEntry=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId,
                    'codeEntry' => $codeEntry
                ]
            ];
        }

        # Delete a list of account/authorization codes from a group.
        static public function GroupAccountAuthorizationCodesDeleteListRequest($serviceProviderId=null,$groupId=null,$code=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId,
                    'code' => $code
                ]
            ];
        }

        # Get a list of non restricted users for the account/authorization codes service.
        static public function GroupAccountAuthorizationCodesGetAvailableUserListRequest($serviceProviderId=null,$groupId=null,$responseSizeLimit=null,$searchCriteriaUserLastName=null,$searchCriteriaUserFirstName=null,$searchCriteriaExactUserDepartment=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId,
                    'responseSizeLimit' => $responseSizeLimit,
                    'searchCriteriaUserLastName' => $searchCriteriaUserLastName,
                    'searchCriteriaUserFirstName' => $searchCriteriaUserFirstName,
                    'searchCriteriaExactUserDepartment' => $searchCriteriaExactUserDepartment
                ]
            ];
        }

        # Request the list of account/authorization codes for a group.
        static public function GroupAccountAuthorizationCodesGetListRequest($serviceProviderId=null,$groupId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId
                ]
            ];
        }

        # Request the group's account/authorization codes setting.
        static public function GroupAccountAuthorizationCodesGetRequest($serviceProviderId=null,$groupId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId
                ]
            ];
        }

        # Change the group's account/authorization codes setting.
        static public function GroupAccountAuthorizationCodesModifyRequest($serviceProviderId=null,$groupId=null,$codeType=null,$numberOfDigits=null,$allowLocalAndTollFreeCalls=null,$mandatoryUsageUserIdList=null,$optionalUsageUserIdList=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId,
                    'codeType' => $codeType,
                    'numberOfDigits' => $numberOfDigits,
                    'allowLocalAndTollFreeCalls' => $allowLocalAndTollFreeCalls,
                    'mandatoryUsageUserIdList' => $mandatoryUsageUserIdList,
                    'optionalUsageUserIdList' => $optionalUsageUserIdList
                ]
            ];
        }

}