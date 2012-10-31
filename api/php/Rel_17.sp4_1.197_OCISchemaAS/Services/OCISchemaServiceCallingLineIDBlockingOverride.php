<?php
class OCISchemaServiceCallingLineIDBlockingOverride {
        # Request the user level data associated with Calling Line ID Blocking Override.
        static public function UserCallingLineIDBlockingOverrideGetRequest($userId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId
                ]
            ];
        }

        # Modify the user level data associated with Calling Line ID Blocking Override.
        static public function UserCallingLineIDBlockingOverrideModifyRequest($userId=null,$isActive=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId,
                    'isActive' => $isActive
                ]
            ];
        }

}