<?php
class OCISchemaServiceINIntegration {
        # Request to get the user level IN Integration service attributes
        static public function UserINIntegrationGetRequest($userId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId
                ]
            ];
        }

        # Request to modify the user level IN Integration service attributes
        static public function UserINIntegrationModifyRequest($userId=null,$originatingServiceKey=null,$terminatingServiceKey=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId,
                    'originatingServiceKey' => $originatingServiceKey,
                    'terminatingServiceKey' => $terminatingServiceKey
                ]
            ];
        }

}