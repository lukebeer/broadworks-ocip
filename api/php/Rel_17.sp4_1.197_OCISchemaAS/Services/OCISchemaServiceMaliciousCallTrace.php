<?php
class OCISchemaServiceMaliciousCallTrace {
        # Get the service provider's Malicious Call Trace settings.
        static public function ServiceProviderMaliciousCallTraceGetRequest($serviceProviderId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId
                ]
            ];
        }

        # Modify the service provider's Malicious Call Trace settings.
        static public function ServiceProviderMaliciousCallTraceModifyRequest($serviceProviderId=null,$useSystemPlayMCTWarningAnnouncement=null,$playMCTWarningAnnouncement=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'useSystemPlayMCTWarningAnnouncement' => $useSystemPlayMCTWarningAnnouncement,
                    'playMCTWarningAnnouncement' => $playMCTWarningAnnouncement
                ]
            ];
        }

        # Get Malicious Call Trace system parameters and the list of users that use the 
        static public function SystemMaliciousCallTraceGetRequest() {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => null
            ];
        }

        # Modify a Malicious Call Trace system parameter.
        static public function SystemMaliciousCallTraceModifyRequest($playMCTWarningAnnouncement=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'playMCTWarningAnnouncement' => $playMCTWarningAnnouncement
                ]
            ];
        }

        # Request the user level data associated with Malicious Call Trace.
        static public function UserMaliciousCallTraceGetRequest($userId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId
                ]
            ];
        }

        # Modify the user level data associated with Malicious Call Trace.
        static public function UserMaliciousCallTraceModifyRequest($userId=null,$isActive=null,$traceTypeSelection=null,$traceForTimePeriod=null,$traceTimePeriod=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId,
                    'isActive' => $isActive,
                    'traceTypeSelection' => $traceTypeSelection,
                    'traceForTimePeriod' => $traceForTimePeriod,
                    'traceTimePeriod' => $traceTimePeriod
                ]
            ];
        }

}