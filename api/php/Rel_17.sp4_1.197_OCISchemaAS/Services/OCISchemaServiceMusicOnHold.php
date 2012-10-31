<?php
class OCISchemaServiceMusicOnHold {
        # Add a Music on Hold Instance to a department.
        static public function GroupMusicOnHoldAddInstanceRequest16($serviceProviderId=null,$groupId=null,$department=null,$isActiveDuringCallHold=null,$isActiveDuringCallPark=null,$isActiveDuringBusyCampOn=null,$source=null,$useAlternateSourceForInternalCalls=null,$internalSource=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId,
                    'department' => $department,
                    'isActiveDuringCallHold' => $isActiveDuringCallHold,
                    'isActiveDuringCallPark' => $isActiveDuringCallPark,
                    'isActiveDuringBusyCampOn' => $isActiveDuringBusyCampOn,
                    'source' => $source,
                    'useAlternateSourceForInternalCalls' => $useAlternateSourceForInternalCalls,
                    'internalSource' => $internalSource
                ]
            ];
        }

        # Delete a Music On Hold department instance.
        static public function GroupMusicOnHoldDeleteInstanceRequest($serviceProviderId=null,$groupId=null,$department=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId,
                    'department' => $department
                ]
            ];
        }

        # Get a Music On Hold data for a group or department instance.
        static public function GroupMusicOnHoldGetInstanceRequest16($serviceProviderId=null,$groupId=null,$department=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId,
                    'department' => $department
                ]
            ];
        }

        # Returns a list of all departments that have a Music On Hold instance.
        static public function GroupMusicOnHoldGetDepartmentListRequest($serviceProviderId=null,$groupId=null,$groupDepartmentName=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId,
                    'groupDepartmentName' => $groupDepartmentName
                ]
            ];
        }

        # Modify data for a group or department Music On Hold Instance.
        static public function GroupMusicOnHoldModifyInstanceRequest16($serviceProviderId=null,$groupId=null,$department=null,$isActiveDuringCallHold=null,$isActiveDuringCallPark=null,$isActiveDuringBusyCampOn=null,$source=null,$useAlternateSourceForInternalCalls=null,$internalSource=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId,
                    'department' => $department,
                    'isActiveDuringCallHold' => $isActiveDuringCallHold,
                    'isActiveDuringCallPark' => $isActiveDuringCallPark,
                    'isActiveDuringBusyCampOn' => $isActiveDuringBusyCampOn,
                    'source' => $source,
                    'useAlternateSourceForInternalCalls' => $useAlternateSourceForInternalCalls,
                    'internalSource' => $internalSource
                ]
            ];
        }

        # Request the system level data associated with Music On Hold.
        static public function SystemMusicOnHoldGetRequest() {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => null
            ];
        }

        # Modify the system level data associated with Music On Hold.
        static public function SystemMusicOnHoldModifyRequest($delayMilliseconds=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'delayMilliseconds' => $delayMilliseconds
                ]
            ];
        }

        # Request the user level data associated with Music On Hold.
        static public function UserMusicOnHoldGetRequest($userId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId
                ]
            ];
        }

        # Modify the user level data associated with Music On Hold.
        static public function UserMusicOnHoldModifyRequest($userId=null,$isActive=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId,
                    'isActive' => $isActive
                ]
            ];
        }

        # Request the user level data associated with Music On Hold User.
        static public function UserMusicOnHoldUserGetRequest16($userId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId
                ]
            ];
        }

        # Modify data for Music On Hold User.
        static public function UserMusicOnHoldUserModifyRequest16($userId=null,$source=null,$useAlternateSourceForInternalCalls=null,$internalSource=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId,
                    'source' => $source,
                    'useAlternateSourceForInternalCalls' => $useAlternateSourceForInternalCalls,
                    'internalSource' => $internalSource
                ]
            ];
        }

}