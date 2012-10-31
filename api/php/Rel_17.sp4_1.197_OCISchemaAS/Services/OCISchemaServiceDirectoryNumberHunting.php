<?php
class OCISchemaServiceDirectoryNumberHunting {
        # Request to get the agents of a call center or hunt group that are available
        static public function GroupDirectoryNumberHuntingGetAvailableUserListRequest($serviceUserId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceUserId' => $serviceUserId
                ]
            ];
        }

        # Request to get the properties of the DNH service for a specified serviceUserId.
        static public function GroupDirectoryNumberHuntingGetRequest($serviceUserId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceUserId' => $serviceUserId
                ]
            ];
        }

        # Replaces a list of users as agents for a directory number hunting group.
        static public function GroupDirectoryNumberHuntingModifyRequest($serviceUserId=null,$agentUserIdList=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceUserId' => $serviceUserId,
                    'agentUserIdList' => $agentUserIdList
                ]
            ];
        }

}