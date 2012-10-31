<?php
class OCISchemaServiceOutlookIntegration {
        # Request the user level data associated with Outlook Integration.
        static public function UserOutlookIntegrationGetRequest($userId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId
                ]
            ];
        }

        # Modify the user level data associated with Outlook Integration.
        static public function UserOutlookIntegrationModifyRequest($userId=null,$isActive=null,$contactRetrievalSelection=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId,
                    'isActive' => $isActive,
                    'contactRetrievalSelection' => $contactRetrievalSelection
                ]
            ];
        }

}