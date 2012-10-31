<?php
class OCISchemaServiceExternalCallingLineIDDelivery {
        # Request the user level data associated with External Calling Line ID Delivery.
        static public function UserExternalCallingLineIDDeliveryGetRequest($userId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId
                ]
            ];
        }

        # Modify the user level data associated with External Calling Line ID Delivery.
        static public function UserExternalCallingLineIDDeliveryModifyRequest($userId=null,$isActive=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId,
                    'isActive' => $isActive
                ]
            ];
        }

}