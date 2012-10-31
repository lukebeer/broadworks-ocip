<?php
class OCISchemaServiceChargeNumber {
        # Request the user level data associated with Charge Number.
        static public function UserChargeNumberGetRequest14sp9($userId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId
                ]
            ];
        }

        # Modify the user level data associated with Charge Number.
        static public function UserChargeNumberModifyRequest($userId=null,$phoneNumber=null,$useChargeNumberForEnhancedTranslations=null,$sendChargeNumberToNetwork=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId,
                    'phoneNumber' => $phoneNumber,
                    'useChargeNumberForEnhancedTranslations' => $useChargeNumberForEnhancedTranslations,
                    'sendChargeNumberToNetwork' => $sendChargeNumberToNetwork
                ]
            ];
        }

}