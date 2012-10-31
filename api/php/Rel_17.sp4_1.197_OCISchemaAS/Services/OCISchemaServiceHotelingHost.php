<?php
class OCISchemaServiceHotelingHost {
        # Request the user level data associated with Hoteling Host.
        static public function UserHotelingHostGetRequest17($userId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId
                ]
            ];
        }

        # Modify the user level data associated with Hoteling Host.
        static public function UserHotelingHostModifyRequest($userId=null,$isActive=null,$enforceAssociationLimit=null,$associationLimitHours=null,$accessLevel=null,$removeGuestAssociation=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId,
                    'isActive' => $isActive,
                    'enforceAssociationLimit' => $enforceAssociationLimit,
                    'associationLimitHours' => $associationLimitHours,
                    'accessLevel' => $accessLevel,
                    'removeGuestAssociation' => $removeGuestAssociation
                ]
            ];
        }

}