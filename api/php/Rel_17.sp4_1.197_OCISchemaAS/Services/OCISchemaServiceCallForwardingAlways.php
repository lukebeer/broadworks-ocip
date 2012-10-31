<?php
class OCISchemaServiceCallForwardingAlways {
        # Request the user level data associated with Call Forwarding Always.
        static public function UserCallForwardingAlwaysGetRequest($userId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId
                ]
            ];
        }

        # Modify the user level data associated with Call Forwarding Always.
        static public function UserCallForwardingAlwaysModifyRequest($userId=null,$isActive=null,$forwardToPhoneNumber=null,$isRingSplashActive=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId,
                    'isActive' => $isActive,
                    'forwardToPhoneNumber' => $forwardToPhoneNumber,
                    'isRingSplashActive' => $isRingSplashActive
                ]
            ];
        }

}