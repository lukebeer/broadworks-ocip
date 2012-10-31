<?php
class OCISchemaServiceInternalCallingLineIDDelivery {
        # Request the user level data associated with Internal Calling Line ID Delivery.
        static public function UserInternalCallingLineIDDeliveryGetRequest($userId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId
                ]
            ];
        }

        # Modify the user level data associated with Internal Calling Line ID Delivery.
        static public function UserInternalCallingLineIDDeliveryModifyRequest($userId=null,$isActive=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId,
                    'isActive' => $isActive
                ]
            ];
        }

}