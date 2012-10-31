<?php
class OCISchemaServiceSpeedDial100 {
        # Get the speed dial 100 service settings for a group.
        static public function GroupSpeedDial100GetRequest17sp1($serviceProviderId=null,$groupId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId
                ]
            ];
        }

        # Modify the speed dial 100 prefix setting for a group.
        static public function GroupSpeedDial100ModifyRequest($serviceProviderId=null,$groupId=null,$prefix=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId,
                    'prefix' => $prefix
                ]
            ];
        }

        # Get the speed dial 100 system-wide default setting.
        static public function SystemSpeedDial100GetRequest17sp1() {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => null
            ];
        }

        # Modify the speed dial 100 system-wide default prefix setting.
        static public function SystemSpeedDial100ModifyRequest($prefix=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'prefix' => $prefix
                ]
            ];
        }

        # Add one or more speed dial 100 settings for a user.
        static public function UserSpeedDial100AddListRequest($userId=null,$speedDialEntry=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId,
                    'speedDialEntry' => $speedDialEntry
                ]
            ];
        }

        # Delete one or more speed dial 100 settings for a user.
        static public function UserSpeedDial100DeleteListRequest($userId=null,$speedCode=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId,
                    'speedCode' => $speedCode
                ]
            ];
        }

        # Get the speed dial 100 settings for a user.
        static public function UserSpeedDial100GetListRequest17sp1($userId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId
                ]
            ];
        }

        # Get speed dial 100 settings for a speed code.
        static public function UserSpeedDial100GetRequest($userId=null,$speedCode=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId,
                    'speedCode' => $speedCode
                ]
            ];
        }

        # Modify the speed dial 100 settings for a user.
        static public function UserSpeedDial100ModifyListRequest($userId=null,$speedDialEntry=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId,
                    'speedDialEntry' => $speedDialEntry
                ]
            ];
        }

}