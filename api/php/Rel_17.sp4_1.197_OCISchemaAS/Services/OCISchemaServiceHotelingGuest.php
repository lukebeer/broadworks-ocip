<?php
class OCISchemaServiceHotelingGuest {
        # Get a list of users that can be assigned as Hoteling Guests.
        static public function UserHotelingGuestGetAvailableUserListRequest($userId=null,$responseSizeLimit=null,$searchCriteriaUserLastName=null,$searchCriteriaUserFirstName=null,$searchCriteriaExactUserDepartment=null) {
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

        # Request the user level data associated with Hoteling Guest.
        static public function UserHotelingGuestGetRequest14sp4($userId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId
                ]
            ];
        }

        # Modify the user level data associated with Hoteling Guest.
        static public function UserHotelingGuestModifyRequest($userId=null,$isActive=null,$enableAssociationLimit=null,$associationLimitHours=null,$hostUserId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId,
                    'isActive' => $isActive,
                    'enableAssociationLimit' => $enableAssociationLimit,
                    'associationLimitHours' => $associationLimitHours,
                    'hostUserId' => $hostUserId
                ]
            ];
        }

}