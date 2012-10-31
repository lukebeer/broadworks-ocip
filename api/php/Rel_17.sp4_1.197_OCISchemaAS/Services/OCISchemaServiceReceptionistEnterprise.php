<?php
class OCISchemaServiceReceptionistEnterprise {
        # Request to get the list of BroadWorks Receptionist - Enterprise parameters.
        static public function SystemBroadWorksReceptionistEnterpriseGetRequest() {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => null
            ];
        }

        # Request to modify BroadWorks Receptionist - Enterprise settings.
        static public function SystemBroadWorksReceptionistEnterpriseModifyRequest($maxMonitoredUsers=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'maxMonitoredUsers' => $maxMonitoredUsers
                ]
            ];
        }

        # Add users to the BroadWorks Receptionist - Enterprise monitored user list.
        static public function UserBroadWorksReceptionistEnterpriseAddUserListRequest($userId=null,$monitoredUserId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId,
                    'monitoredUserId' => $monitoredUserId
                ]
            ];
        }

        # Remove selected users from the BroadWorks Receptionist - Enterprise monitored user list.
        static public function UserBroadWorksReceptionistEnterpriseDeleteUserListRequest($userId=null,$monitoredUserId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId,
                    'monitoredUserId' => $monitoredUserId
                ]
            ];
        }

        # Get a list of available users for BroadWorks Receptionist - Enterprise monitoring.
        static public function UserBroadWorksReceptionistEnterpriseGetAvailableUserListRequest($userId=null,$responseSizeLimit=null,$searchCriteriaUserLastName=null,$searchCriteriaUserFirstName=null,$searchCriteriaExactUserDepartment=null,$searchCriteriaExactUserGroup=null) {
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

        # Request the monitored users list for the BroadWorks Receptionist - Enterprise service.
        static public function UserBroadWorksReceptionistEnterpriseGetRequest($userId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId
                ]
            ];
        }

        # Replace the BroadWorks Receptionist - Enterprise monitored user list.
        static public function UserBroadWorksReceptionistEnterpriseModifyRequest($userId=null,$monitoredUserIdList=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId,
                    'monitoredUserIdList' => $monitoredUserIdList
                ]
            ];
        }

}