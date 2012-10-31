<?php
class OCISchemaServiceRemoteOffice {
        # Request the user level data associated with Remote Office.
        static public function UserRemoteOfficeGetRequest($userId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId
                ]
            ];
        }

        # Modify the user level data associated with Remote Office.
        static public function UserRemoteOfficeModifyRequest($userId=null,$isActive=null,$remoteOfficePhoneNumber=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId,
                    'isActive' => $isActive,
                    'remoteOfficePhoneNumber' => $remoteOfficePhoneNumber
                ]
            ];
        }

}