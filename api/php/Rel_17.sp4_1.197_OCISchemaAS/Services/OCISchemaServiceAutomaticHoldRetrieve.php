<?php
class OCISchemaServiceAutomaticHoldRetrieve {
        # Request the user level data associated with Automatic Hold/Retrieve.
        static public function UserAutomaticHoldRetrieveGetRequest($userId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId
                ]
            ];
        }

        # Modify the user level data associated with Automatic Hold/Retrieve.
        static public function UserAutomaticHoldRetrieveModifyRequest($userId=null,$isActive=null,$recallTimerSeconds=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId,
                    'isActive' => $isActive,
                    'recallTimerSeconds' => $recallTimerSeconds
                ]
            ];
        }

}