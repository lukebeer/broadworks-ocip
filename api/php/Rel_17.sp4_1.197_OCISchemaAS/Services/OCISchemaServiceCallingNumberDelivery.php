<?php
class OCISchemaServiceCallingNumberDelivery {
        # Request the user level data associated with Calling
        static public function UserCallingNumberDeliveryGetRequest($userId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId
                ]
            ];
        }

        # Modify the user level data associated with Calling Number Delivery.
        static public function UserCallingNumberDeliveryModifyRequest($userId=null,$isActiveForExternalCalls=null,$isActiveForInternalCalls=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId,
                    'isActiveForExternalCalls' => $isActiveForExternalCalls,
                    'isActiveForInternalCalls' => $isActiveForInternalCalls
                ]
            ];
        }

}