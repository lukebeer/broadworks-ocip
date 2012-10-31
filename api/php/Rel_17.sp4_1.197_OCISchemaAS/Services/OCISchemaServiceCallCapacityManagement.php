<?php
class OCISchemaServiceCallCapacityManagement {
        # Adds a Call Capacity Management group.
        static public function GroupCallCapacityManagementAddInstanceRequest($serviceProviderId=null,$groupId=null,$name=null,$maxActiveCallsAllowed=null,$maxIncomingActiveCallsAllowed=null,$maxOutgoingActiveCallsAllowed=null,$becomeDefaultGroupForNewUsers=null,$userId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId,
                    'name' => $name,
                    'maxActiveCallsAllowed' => $maxActiveCallsAllowed,
                    'maxIncomingActiveCallsAllowed' => $maxIncomingActiveCallsAllowed,
                    'maxOutgoingActiveCallsAllowed' => $maxOutgoingActiveCallsAllowed,
                    'becomeDefaultGroupForNewUsers' => $becomeDefaultGroupForNewUsers,
                    'userId' => $userId
                ]
            ];
        }

        # Deletes one or more Call Capacity Management groups.
        static public function GroupCallCapacityManagementDeleteInstanceListRequest($serviceProviderId=null,$groupId=null,$name=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId,
                    'name' => $name
                ]
            ];
        }

        # Get a list of users that can be assigned to a Call Capacity Management group.
        static public function GroupCallCapacityManagementGetAvailableUserListRequest($serviceProviderId=null,$groupId=null,$name=null,$responseSizeLimit=null,$searchCriteriaUserLastName=null,$searchCriteriaUserFirstName=null,$searchCriteriaExactUserDepartment=null) {
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

        # Request to get a list of Call Capacity Management instances within a group.
        static public function GroupCallCapacityManagementGetInstanceListRequest($serviceProviderId=null,$groupId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId
                ]
            ];
        }

        # Gets a Call Capacity Management group.
        static public function GroupCallCapacityManagementGetInstanceRequest($serviceProviderId=null,$groupId=null,$name=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId,
                    'name' => $name
                ]
            ];
        }

        # Modifies a Call Capacity Management group. Replaces the entire list of users in the group.
        static public function GroupCallCapacityManagementModifyInstanceRequest($serviceProviderId=null,$groupId=null,$name=null,$newName=null,$maxActiveCallsAllowed=null,$maxIncomingActiveCallsAllowed=null,$maxOutgoingActiveCallsAllowed=null,$becomeDefaultGroupForNewUsers=null,$userIdList=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId,
                    'name' => $name,
                    'newName' => $newName,
                    'maxActiveCallsAllowed' => $maxActiveCallsAllowed,
                    'maxIncomingActiveCallsAllowed' => $maxIncomingActiveCallsAllowed,
                    'maxOutgoingActiveCallsAllowed' => $maxOutgoingActiveCallsAllowed,
                    'becomeDefaultGroupForNewUsers' => $becomeDefaultGroupForNewUsers,
                    'userIdList' => $userIdList
                ]
            ];
        }

        # Adds one or more users to a Call Capacity Management group.
        static public function GroupCallCapacityManagementAddUserListRequest($serviceProviderId=null,$groupId=null,$name=null,$userId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId,
                    'name' => $name,
                    'userId' => $userId
                ]
            ];
        }

        # Deletes one or more users from a Call Capacity Management group.
        static public function GroupCallCapacityManagementDeleteUserListRequest($serviceProviderId=null,$groupId=null,$name=null,$userId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId,
                    'name' => $name,
                    'userId' => $userId
                ]
            ];
        }

}