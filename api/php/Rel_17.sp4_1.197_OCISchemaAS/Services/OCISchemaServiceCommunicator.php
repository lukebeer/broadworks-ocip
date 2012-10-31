<?php
class OCISchemaServiceCommunicator {
        # Request to get Configuration Server for a specified service
        static public function ServiceProviderBroadWorksCommunicatorGetRequest($serviceProviderId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId
                ]
            ];
        }

        # Request to modify the Configuration URL. The response is either a SuccessResponse or an ErrorResponse.
        static public function ServiceProviderBroadWorksCommunicatorModifyRequest($serviceProviderId=null,$configurationServerURL=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'configurationServerURL' => $configurationServerURL
                ]
            ];
        }

        # Request to get the Configuration Server for a specified user.
        static public function UserBroadWorksCommunicatorGetRequest($userId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId
                ]
            ];
        }

}