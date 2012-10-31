<?php
class OCISchemaServiceSpeedDial8 {
        # Get the speed dial 8 settings for a user.
        static public function UserSpeedDial8GetListRequest($userId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId
                ]
            ];
        }

        # Modify the speed dial 8 settings for a user.
        static public function UserSpeedDial8ModifyListRequest($userId=null,$speedDialEntry=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId,
                    'speedDialEntry' => $speedDialEntry
                ]
            ];
        }

}