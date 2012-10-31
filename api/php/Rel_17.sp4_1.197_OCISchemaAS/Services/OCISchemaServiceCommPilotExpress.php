<?php
class OCISchemaServiceCommPilotExpress {
        # Get the user's commPilot express service setting.
        static public function UserCommPilotExpressGetRequest($userId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId
                ]
            ];
        }

        # Modify the user's commPilot express service setting.
        static public function UserCommPilotExpressModifyRequest($userId=null,$profile=null,$availableInOffice=null,$availableOutOfOffice=null,$busy=null,$unavailable=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId,
                    'profile' => $profile,
                    'availableInOffice' => $availableInOffice,
                    'availableOutOfOffice' => $availableOutOfOffice,
                    'busy' => $busy,
                    'unavailable' => $unavailable
                ]
            ];
        }

}