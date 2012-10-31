<?php
class OCISchemaServiceCallTransfer {
        # Request the user level data associated with Call Transfer.
        static public function UserCallTransferGetRequest14sp4($userId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId
                ]
            ];
        }

        # Modify the user level data associated with Call Transfer.
        static public function UserCallTransferModifyRequest($userId=null,$isRecallActive=null,$recallNumberOfRings=null,$useDiversionInhibitorForBlindTransfer=null,$useDiversionInhibitorForConsultativeCalls=null,$enableBusyCampOn=null,$busyCampOnSeconds=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId,
                    'isRecallActive' => $isRecallActive,
                    'recallNumberOfRings' => $recallNumberOfRings,
                    'useDiversionInhibitorForBlindTransfer' => $useDiversionInhibitorForBlindTransfer,
                    'useDiversionInhibitorForConsultativeCalls' => $useDiversionInhibitorForConsultativeCalls,
                    'enableBusyCampOn' => $enableBusyCampOn,
                    'busyCampOnSeconds' => $busyCampOnSeconds
                ]
            ];
        }

}