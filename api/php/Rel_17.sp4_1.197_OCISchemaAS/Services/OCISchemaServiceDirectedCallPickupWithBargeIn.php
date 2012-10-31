<?php
class OCISchemaServiceDirectedCallPickupWithBargeIn {
        # Request the user level data associated with Directed Call Pickup With Barge In.
        static public function UserDirectedCallPickupWithBargeInGetRequest14sp7($userId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId
                ]
            ];
        }

        # Modify the user level data associated with Directed Call Pickup With Barge In.
        static public function UserDirectedCallPickupWithBargeInModifyRequest($userId=null,$enableBargeInWarningTone=null,$enableAutomaticTargetSelection=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId,
                    'enableBargeInWarningTone' => $enableBargeInWarningTone,
                    'enableAutomaticTargetSelection' => $enableAutomaticTargetSelection
                ]
            ];
        }

}