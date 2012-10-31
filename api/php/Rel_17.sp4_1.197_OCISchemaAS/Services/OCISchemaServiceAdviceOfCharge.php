<?php
class OCISchemaServiceAdviceOfCharge {
        # Request to get the list of Advice of Charge system parameters.
        static public function SystemAdviceOfChargeGetRequest() {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => null
            ];
        }

        # Request to modify Advice of Charge system parameters.
        static public function SystemAdviceOfChargeModifyRequest($delayBetweenNotificationSeconds=null,$incomingAocHandling=null,$costInformationSource=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'delayBetweenNotificationSeconds' => $delayBetweenNotificationSeconds,
                    'incomingAocHandling' => $incomingAocHandling,
                    'costInformationSource' => $costInformationSource
                ]
            ];
        }

        # Request the user level data associated with Advice Of Charge.
        static public function UserAdviceOfChargeGetRequest($userId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId
                ]
            ];
        }

        # Modify the user level data associated with Advice of Charge.
        static public function UserAdviceOfChargeModifyRequest($userId=null,$isActive=null,$aocType=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId,
                    'isActive' => $isActive,
                    'aocType' => $aocType
                ]
            ];
        }

}