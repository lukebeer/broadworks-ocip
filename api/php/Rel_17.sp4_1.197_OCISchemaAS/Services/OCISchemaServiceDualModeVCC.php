<?php
class OCISchemaServiceDualModeVCC {
        # Request to get the user level Dual Mode VCC service attributes
        static public function UserDualModeVCCGetRequest($userId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId
                ]
            ];
        }

        # Request to modify the user level IN Integration service attributes
        static public function UserDualModeVCCModifyRequest($userId=null,$subscriberUserName=null,$subscriberPassword=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId,
                    'subscriberUserName' => $subscriberUserName,
                    'subscriberPassword' => $subscriberPassword
                ]
            ];
        }

}