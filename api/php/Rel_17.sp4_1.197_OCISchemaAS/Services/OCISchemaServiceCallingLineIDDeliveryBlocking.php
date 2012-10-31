<?php
class OCISchemaServiceCallingLineIDDeliveryBlocking {
        # Request the user level data associated with Calling Line ID Delivery Blocking.
        static public function UserCallingLineIDDeliveryBlockingGetRequest($userId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId
                ]
            ];
        }

        # Modify the user level data associated with Calling Line ID Delivery Blocking.
        static public function UserCallingLineIDDeliveryBlockingModifyRequest($userId=null,$isActive=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId,
                    'isActive' => $isActive
                ]
            ];
        }

}