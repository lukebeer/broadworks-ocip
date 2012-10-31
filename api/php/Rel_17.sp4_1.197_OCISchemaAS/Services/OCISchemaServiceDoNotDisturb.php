<?php
class OCISchemaServiceDoNotDisturb {
        # Request the user level data associated with Do Not Disturb.
        static public function UserDoNotDisturbGetRequest($userId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId
                ]
            ];
        }

        # Modify the user level data associated with Do Not Disturb.
        static public function UserDoNotDisturbModifyRequest($userId=null,$isActive=null,$ringSplash=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId,
                    'isActive' => $isActive,
                    'ringSplash' => $ringSplash
                ]
            ];
        }

}