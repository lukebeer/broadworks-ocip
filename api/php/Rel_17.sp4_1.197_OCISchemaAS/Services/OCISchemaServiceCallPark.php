<?php
class OCISchemaServiceCallPark {
        # Adds a Call Park group.
        static public function GroupCallParkAddInstanceRequest16sp2($serviceProviderId=null,$groupId=null,$name=null,$userId=null,$recallAlternateUserId=null,$recallTo=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId,
                    'name' => $name,
                    'userId' => $userId,
                    'recallAlternateUserId' => $recallAlternateUserId,
                    'recallTo' => $recallTo
                ]
            ];
        }

        # Deletes a Call Park group.
        static public function GroupCallParkDeleteInstanceRequest($serviceProviderId=null,$groupId=null,$name=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId,
                    'name' => $name
                ]
            ];
        }

        # Get a list of hunt groups that are available to select as an alternate recall user.
        static public function GroupCallParkGetAvailableAlternateRecallUserListRequest($serviceProviderId=null,$groupId=null,$responseSizeLimit=null,$searchCriteriaUserLastName=null,$searchCriteriaUserFirstName=null,$searchCriteriaExactUserDepartment=null) {
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

        # Get a list of users that can be assigned to a Call Park group.
        static public function GroupCallParkGetAvailableUserListRequest($serviceProviderId=null,$groupId=null,$name=null,$responseSizeLimit=null,$searchCriteriaUserLastName=null,$searchCriteriaUserFirstName=null,$searchCriteriaExactUserDepartment=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId,
                    'name' => $name,
                    'responseSizeLimit' => $responseSizeLimit,
                    'searchCriteriaUserLastName' => $searchCriteriaUserLastName,
                    'searchCriteriaUserFirstName' => $searchCriteriaUserFirstName,
                    'searchCriteriaExactUserDepartment' => $searchCriteriaExactUserDepartment
                ]
            ];
        }

        # Request to get a list of Call Park group instances within a group.
        static public function GroupCallParkGetInstanceListRequest($serviceProviderId=null,$groupId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId
                ]
            ];
        }

        # Gets a Call Park group.
        static public function GroupCallParkGetInstanceRequest16sp2($serviceProviderId=null,$groupId=null,$name=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId,
                    'name' => $name
                ]
            ];
        }

        # Gets the Call Park Group settings.
        static public function GroupCallParkGetRequest16sp2($serviceProviderId=null,$groupId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId
                ]
            ];
        }

        # Modifies a Call Park group. Replaces the entire list of users in the group.  
        static public function GroupCallParkModifyInstanceRequest($serviceProviderId=null,$groupId=null,$name=null,$newName=null,$userIdList=null,$recallAlternateUserId=null,$recallTo=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId,
                    'name' => $name,
                    'newName' => $newName,
                    'userIdList' => $userIdList,
                    'recallAlternateUserId' => $recallAlternateUserId,
                    'recallTo' => $recallTo
                ]
            ];
        }

        # Modifies the Group's Call Park settings.
        static public function GroupCallParkModifyRequest($serviceProviderId=null,$groupId=null,$recallTimerSeconds=null,$displayTimerSeconds=null,$enableDestinationAnnouncement=null,$recallAlternateUserId=null,$recallRingPattern=null,$recallTo=null,$alternateUserRecallTimerSeconds=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId,
                    'recallTimerSeconds' => $recallTimerSeconds,
                    'displayTimerSeconds' => $displayTimerSeconds,
                    'enableDestinationAnnouncement' => $enableDestinationAnnouncement,
                    'recallAlternateUserId' => $recallAlternateUserId,
                    'recallRingPattern' => $recallRingPattern,
                    'recallTo' => $recallTo,
                    'alternateUserRecallTimerSeconds' => $alternateUserRecallTimerSeconds
                ]
            ];
        }

        # Identifies which Call Park group the user belongs to if any and the list of users in the group.
        static public function UserCallParkGetRequest($userId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId
                ]
            ];
        }

}