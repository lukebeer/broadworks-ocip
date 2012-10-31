<?php
class OCISchemaServiceReceptionistOffice {
        # Get the Receptionist Office available user list.
        static public function UserBroadWorksReceptionistOfficeGetAvailableUserListRequest($userId=null,$responseSizeLimit=null,$searchCriteriaUserLastName=null,$searchCriteriaUserFirstName=null,$searchCriteriaExactUserDepartment=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId,
                    'responseSizeLimit' => $responseSizeLimit,
                    'searchCriteriaUserLastName' => $searchCriteriaUserLastName,
                    'searchCriteriaUserFirstName' => $searchCriteriaUserFirstName,
                    'searchCriteriaExactUserDepartment' => $searchCriteriaExactUserDepartment
                ]
            ];
        }

        # Request the Receptionist Office parameters.
        static public function UserBroadWorksReceptionistOfficeGetRequest($userId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId
                ]
            ];
        }

        # Replace the Receptionist Office monitored user list.
        static public function UserBroadWorksReceptionistOfficeModifyRequest($userId=null,$monitoredUserIdList=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId,
                    'monitoredUserIdList' => $monitoredUserIdList
                ]
            ];
        }

}