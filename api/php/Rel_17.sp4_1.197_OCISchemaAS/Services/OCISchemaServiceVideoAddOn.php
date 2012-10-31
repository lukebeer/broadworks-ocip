<?php
class OCISchemaServiceVideoAddOn {
        # Get the user's Video Add-On service setting.
        static public function UserVideoAddOnGetRequest14($userId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId
                ]
            ];
        }

        # Modify the user's Video Add-On service setting.
        static public function UserVideoAddOnModifyRequest14($userId=null,$isActive=null,$maxOriginatingCallDelaySeconds=null,$accessDeviceEndpoint=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId,
                    'isActive' => $isActive,
                    'maxOriginatingCallDelaySeconds' => $maxOriginatingCallDelaySeconds,
                    'accessDeviceEndpoint' => $accessDeviceEndpoint
                ]
            ];
        }

}