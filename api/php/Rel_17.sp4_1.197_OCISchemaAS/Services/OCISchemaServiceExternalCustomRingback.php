<?php
class OCISchemaServiceExternalCustomRingback {
        # Request the service provider level data associated with External Custom Ringback.
        static public function ServiceProviderExternalCustomRingbackGetRequest($serviceProviderId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId
                ]
            ];
        }

        # Modify the service provider level data associated with External Custom Ringback.
        static public function ServiceProviderExternalCustomRingbackModifyRequest($serviceProviderId=null,$prefixDigits=null,$serverNetAddress=null,$serverPort=null,$timeoutSeconds=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'prefixDigits' => $prefixDigits,
                    'serverNetAddress' => $serverNetAddress,
                    'serverPort' => $serverPort,
                    'timeoutSeconds' => $timeoutSeconds
                ]
            ];
        }

        # Request the user level data associated with External Custom Ringback.
        static public function UserExternalCustomRingbackGetRequest($userId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId
                ]
            ];
        }

        # Modify the user level data associated with External Custom Ringback.  
        static public function UserExternalCustomRingbackModifyRequest($userId=null,$isActive=null,$useSettingLevel=null,$sipRequestURI=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId,
                    'isActive' => $isActive,
                    'useSettingLevel' => $useSettingLevel,
                    'sipRequestURI' => $sipRequestURI
                ]
            ];
        }

}