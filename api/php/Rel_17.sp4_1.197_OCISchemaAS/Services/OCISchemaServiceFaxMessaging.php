<?php
class OCISchemaServiceFaxMessaging {
        # Request the user level data associated with Fax Messaging.
        static public function UserFaxMessagingGetRequest17sp1($userId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId
                ]
            ];
        }

        # Modify the user level data associated with Fax Messaging.
        static public function UserFaxMessagingModifyRequest($userId=null,$isActive=null,$phoneNumber=null,$extension=null,$sipAliasList=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId,
                    'isActive' => $isActive,
                    'phoneNumber' => $phoneNumber,
                    'extension' => $extension,
                    'sipAliasList' => $sipAliasList
                ]
            ];
        }

}