<?php
class OCISchemaServiceBusyLampField {
        # Request the system level data associated with the Busy Lamp
        static public function SystemBusyLampFieldGetRequest() {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => null
            ];
        }

        # Modify the system level data associated with the Busy Lamp Field
        static public function SystemBusyLampFieldModifyRequest($displayLocalUserIdentityLastNameFirst=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'displayLocalUserIdentityLastNameFirst' => $displayLocalUserIdentityLastNameFirst
                ]
            ];
        }

        # Get a list of available users for the busy lamp field service.
        static public function UserBusyLampFieldGetAvailableUserListRequest($userId=null,$responseSizeLimit=null,$searchCriteriaUserLastName=null,$searchCriteriaUserFirstName=null,$searchCriteriaExactUserDepartment=null,$searchCriteriaExactUserGroup=null) {
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

        # Request the settings for the busy lamp field service.
        static public function UserBusyLampFieldGetRequest16sp2($userId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId
                ]
            ];
        }

        # Modify the settings for the busy lamp field service.
        static public function UserBusyLampFieldModifyRequest($userId=null,$listURI=null,$monitoredUserIdList=null,$enableCallParkNotification=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId,
                    'listURI' => $listURI,
                    'monitoredUserIdList' => $monitoredUserIdList,
                    'enableCallParkNotification' => $enableCallParkNotification
                ]
            ];
        }

}