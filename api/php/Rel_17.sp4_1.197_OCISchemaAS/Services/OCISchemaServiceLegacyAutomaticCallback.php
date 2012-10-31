<?php
class OCISchemaServiceLegacyAutomaticCallback {
        # Request the system's legacy automatic callback line type settings.
        static public function SystemLegacyAutomaticCallbackGetLineTypeListRequest() {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => null
            ];
        }

        # Request the system's legacy automatic callback attributes.
        static public function SystemLegacyAutomaticCallbackGetRequest() {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => null
            ];
        }

        # Modifies the system's legacy automatic callback line type attributes.
        static public function SystemLegacyAutomaticCallbackModifyLineTypeRequest($lineType=null,$matchAction=null,$noMatchAction=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'lineType' => $lineType,
                    'matchAction' => $matchAction,
                    'noMatchAction' => $noMatchAction
                ]
            ];
        }

        # Modifies the system's legacy automatic callback attributes.
        static public function SystemLegacyAutomaticCallbackModifyRequest($maxMonitorsPerOriginator=null,$maxMonitorsPerTerminator=null,$t2Minutes=null,$t4Seconds=null,$t5Seconds=null,$t6Minutes=null,$t7Minutes=null,$t8Seconds=null,$tRingSeconds=null,$t10OMinutes=null,$t10TMinutes=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'maxMonitorsPerOriginator' => $maxMonitorsPerOriginator,
                    'maxMonitorsPerTerminator' => $maxMonitorsPerTerminator,
                    't2Minutes' => $t2Minutes,
                    't4Seconds' => $t4Seconds,
                    't5Seconds' => $t5Seconds,
                    't6Minutes' => $t6Minutes,
                    't7Minutes' => $t7Minutes,
                    't8Seconds' => $t8Seconds,
                    'tRingSeconds' => $tRingSeconds,
                    't10OMinutes' => $t10OMinutes,
                    't10TMinutes' => $t10TMinutes
                ]
            ];
        }

        # Request the user level data associated with Legacy Automatic Callback.
        static public function UserLegacyAutomaticCallbackGetRequest($userId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId
                ]
            ];
        }

        # Modify the user level data associated with Legacy Automatic Callback.
        static public function UserLegacyAutomaticCallbackModifyRequest($userId=null,$isActive=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId,
                    'isActive' => $isActive
                ]
            ];
        }

}