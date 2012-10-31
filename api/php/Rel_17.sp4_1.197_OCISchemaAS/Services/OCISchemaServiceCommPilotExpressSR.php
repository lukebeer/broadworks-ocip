<?php
class OCISchemaServiceCommPilotExpressSR {
        # Get the user's commPilot express SR service setting.
        static public function UserCommPilotExpressSRGetRequest13mp16($userId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId
                ]
            ];
        }

        # Modify the user's commPilot express SR service setting.
        static public function UserCommPilotExpressSRModifyRequest($userId=null,$profile=null,$availableInOffice=null,$availableOutOfOffice=null,$busy=null,$unavailable=null) {
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