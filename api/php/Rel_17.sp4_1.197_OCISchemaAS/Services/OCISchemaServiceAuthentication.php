<?php
class OCISchemaServiceAuthentication {
        # Get the user's authentication service information.
        static public function UserAuthenticationGetRequest($userId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId
                ]
            ];
        }

        # Modify the user's authentication service information.
        static public function UserAuthenticationModifyRequest($userId=null,$userName=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId,
                    'userName' => $userName
                ]
            ];
        }

}