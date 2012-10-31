<?php
class OCISchemaServiceConnectedLineIdentificationRestriction {
        # Request the user level data associated with Connected Line ID Restriction.
        static public function UserConnectedLineIdentificationRestrictionGetRequest($userId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId
                ]
            ];
        }

        # Modify the user level data associated with Connected Line ID Restriction.
        static public function UserConnectedLineIdentificationRestrictionModifyRequest($userId=null,$isActive=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId,
                    'isActive' => $isActive
                ]
            ];
        }

}