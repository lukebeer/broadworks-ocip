<?php
class OCISchemaServicePushToTalk {
        # Get a list of available users for the push to talk service.
        static public function UserPushToTalkGetAvailableUserListRequest($userId=null,$responseSizeLimit=null,$searchCriteriaUserLastName=null,$searchCriteriaUserFirstName=null,$searchCriteriaExactUserDepartment=null,$searchCriteriaExactUserGroup=null) {
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

        # Request the push to talk service setting.
        static public function UserPushToTalkGetRequest($userId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId
                ]
            ];
        }

        # Change the push to talk service settings.
        static public function UserPushToTalkModifyRequest($userId=null,$allowAutoAnswer=null,$outgoingConnectionSelection=null,$accessListSelection=null,$selectedUserIdList=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId,
                    'allowAutoAnswer' => $allowAutoAnswer,
                    'outgoingConnectionSelection' => $outgoingConnectionSelection,
                    'accessListSelection' => $accessListSelection,
                    'selectedUserIdList' => $selectedUserIdList
                ]
            ];
        }

}