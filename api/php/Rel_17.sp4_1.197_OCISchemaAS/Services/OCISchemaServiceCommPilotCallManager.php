<?php
class OCISchemaServiceCommPilotCallManager {
        # Request the group level data associated with CommPilot Call Manager.
        static public function GroupCommPilotCallManagerGetRequest($serviceProviderId=null,$groupId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId
                ]
            ];
        }

        # Modify the group level data associated with CommPilot Call Manager.
        static public function GroupCommPilotCallManagerModifyRequest($serviceProviderId=null,$groupId=null,$groupDirectory=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId,
                    'groupDirectory' => $groupDirectory
                ]
            ];
        }

        # Request the user level data associated with CommPilot Call Manager.
        static public function UserCommPilotCallManagerGetRequest($userId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId
                ]
            ];
        }

        # Modify the user level data associated with CommPilot Call Manager.
        static public function UserCommPilotCallManagerModifyRequest($userId=null,$launchOnLogin=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId,
                    'launchOnLogin' => $launchOnLogin
                ]
            ];
        }

}