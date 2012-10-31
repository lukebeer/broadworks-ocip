<?php
class OCISchemaServiceCallForwardingBusy {
        # Request the user level data associated with Call Forwarding Busy.
        static public function UserCallForwardingBusyGetRequest($userId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId
                ]
            ];
        }

        # Modify the user level data associated with Call Forwarding Busy.
        static public function UserCallForwardingBusyModifyRequest($userId=null,$isActive=null,$forwardToPhoneNumber=null) {
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