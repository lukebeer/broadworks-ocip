<?php
class OCISchemaServicePrepaid {
        # Request the user level data associated with Prepaid.
        static public function UserPrepaidGetRequest($userId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId
                ]
            ];
        }

        # Modify the user level data associated with Prepaid.
        static public function UserPrepaidModifyRequest($userId=null,$isActive=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId,
                    'isActive' => $isActive
                ]
            ];
        }

}