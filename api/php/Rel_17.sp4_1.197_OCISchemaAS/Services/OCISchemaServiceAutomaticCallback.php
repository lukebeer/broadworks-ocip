<?php
class OCISchemaServiceAutomaticCallback {
        # Request the system's automatic callback attributes.
        static public function SystemAutomaticCallbackGetRequest17() {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => null
            ];
        }

        # Modifies the system's automatic callback attributes.
        static public function SystemAutomaticCallbackModifyRequest15($monitorMinutes=null,$maxMonitorsPerOriginator=null,$maxCallbackRings=null,$maxMonitorsPerTerminator=null,$terminatorIdleGuardSeconds=null,$callbackMethod=null,$pollingIntervalSeconds=null,$activationDigit=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'monitorMinutes' => $monitorMinutes,
                    'maxMonitorsPerOriginator' => $maxMonitorsPerOriginator,
                    'maxCallbackRings' => $maxCallbackRings,
                    'maxMonitorsPerTerminator' => $maxMonitorsPerTerminator,
                    'terminatorIdleGuardSeconds' => $terminatorIdleGuardSeconds,
                    'callbackMethod' => $callbackMethod,
                    'pollingIntervalSeconds' => $pollingIntervalSeconds,
                    'activationDigit' => $activationDigit
                ]
            ];
        }

        # Request the system's automatic callback attributes.
        static public function SystemAutomaticCallbackGetReleaseCauseListRequest() {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => null
            ];
        }

        # Adds automatic callback release cause to the releaseCause attribute.
        static public function SystemAutomaticCallbackAddReleaseCauseListRequest($releaseCause=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'releaseCause' => $releaseCause
                ]
            ];
        }

        # Deletes automatic callback release causes from the release cause attribute.
        static public function SystemAutomaticCallbackDeleteReleaseCauseListRequest($releaseCause=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'releaseCause' => $releaseCause
                ]
            ];
        }

        # Request the user level data associated with Automatic Callback.
        static public function UserAutomaticCallbackGetRequest($userId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId
                ]
            ];
        }

        # Modify the user level data associated with Automatic Callback.
        static public function UserAutomaticCallbackModifyRequest($userId=null,$isActive=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId,
                    'isActive' => $isActive
                ]
            ];
        }

}