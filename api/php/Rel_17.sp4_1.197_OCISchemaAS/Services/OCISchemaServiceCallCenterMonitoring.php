<?php
class OCISchemaServiceCallCenterMonitoring {
        # Request the user's Call Center Monitoring settings.
        static public function UserCallCenterMonitoringGetRequest($userId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId
                ]
            ];
        }

        # Modify the user's Call Center Monitoring settings.
        static public function UserCallCenterMonitoringModifyRequest($userId=null,$playToneToAgentForSilentMonitoring=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId,
                    'playToneToAgentForSilentMonitoring' => $playToneToAgentForSilentMonitoring
                ]
            ];
        }

}