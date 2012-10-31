<?php
class OCISchemaServiceCallWaiting {
        # Request the user level data associated with Call Waiting.
        static public function UserCallWaitingGetRequest17sp4($userId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId
                ]
            ];
        }

        # Modify the user level data associated with Call Waiting.
        static public function UserCallWaitingModifyRequest($userId=null,$isActive=null,$disableCallingLineIdDelivery=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId,
                    'isActive' => $isActive,
                    'disableCallingLineIdDelivery' => $disableCallingLineIdDelivery
                ]
            ];
        }

        # Request the system level data associated with Call Waiting.
        static public function SystemCallWaitingGetRequest() {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => null
            ];
        }

        # Modify the system level data associated with Call Waiting.
        static public function SystemCallWaitingModifyRequest($playDistinctiveRingback=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'playDistinctiveRingback' => $playDistinctiveRingback
                ]
            ];
        }

}