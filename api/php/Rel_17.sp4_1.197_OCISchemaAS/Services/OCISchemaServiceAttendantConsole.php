<?php
class OCISchemaServiceAttendantConsole {
        # Request to get the list of Attendant Console parameters.
        static public function SystemAttendantConsoleGetRequest() {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => null
            ];
        }

        # Modify Attendant Console settings.
        static public function SystemAttendantConsoleModifyRequest($maxMonitoredUsers=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'maxMonitoredUsers' => $maxMonitoredUsers
                ]
            ];
        }

        # Add users to the Attendant Console monitored users list.
        static public function UserAttendantConsoleAddUserListRequest($userId=null,$monitoredUserId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId,
                    'monitoredUserId' => $monitoredUserId
                ]
            ];
        }

        # Remove users from the Attendant Console monitored users list.
        static public function UserAttendantConsoleDeleteUserListRequest($userId=null,$monitoredUserId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId,
                    'monitoredUserId' => $monitoredUserId
                ]
            ];
        }

        # Get a list of available users for the Attendant Console service.
        static public function UserAttendantConsoleGetAvailableUserListRequest($userId=null,$responseSizeLimit=null,$searchCriteriaUserLastName=null,$searchCriteriaUserFirstName=null,$searchCriteriaExactUserDepartment=null) {
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

        # Request user's attendant console settings.
        static public function UserAttendantConsoleGetRequest14sp2($userId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId
                ]
            ];
        }

        # Modify user's attendant console settings.
        static public function UserAttendantConsoleModifyRequest($userId=null,$launchOnLogin=null,$allowUserConfigCallDetails=null,$allowUserViewCallDetails=null,$displayColumnList=null,$monitoredUserIdList=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId,
                    'launchOnLogin' => $launchOnLogin,
                    'allowUserConfigCallDetails' => $allowUserConfigCallDetails,
                    'allowUserViewCallDetails' => $allowUserViewCallDetails,
                    'displayColumnList' => $displayColumnList,
                    'monitoredUserIdList' => $monitoredUserIdList
                ]
            ];
        }

}