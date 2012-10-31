<?php
class OCISchemaServiceCallingNameDelivery {
        # Request the user level data associated with Calling
        static public function UserCallingNameDeliveryGetRequest($userId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId
                ]
            ];
        }

        # Modify the user level data associated with Calling Name Delivery.
        static public function UserCallingNameDeliveryModifyRequest($userId=null,$isActiveForExternalCalls=null,$isActiveForInternalCalls=null) {
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