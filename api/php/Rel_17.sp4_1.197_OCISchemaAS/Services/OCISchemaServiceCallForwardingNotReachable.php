<?php
class OCISchemaServiceCallForwardingNotReachable {
        # Request the user level data associated with Call Forwarding Not Reachable.
        static public function UserCallForwardingNotReachableGetRequest($userId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId
                ]
            ];
        }

        # Modify the user level data associated with Call Forwarding Not Reachable.
        static public function UserCallForwardingNotReachableModifyRequest($userId=null,$isActive=null,$forwardToPhoneNumber=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId,
                    'isActive' => $isActive,
                    'forwardToPhoneNumber' => $forwardToPhoneNumber
                ]
            ];
        }

}