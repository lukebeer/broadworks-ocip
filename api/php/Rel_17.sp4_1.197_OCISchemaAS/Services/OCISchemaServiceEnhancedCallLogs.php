<?php
class OCISchemaServiceEnhancedCallLogs {
        # Request users' call logs within an enterprise
        static public function EnterpriseEnhancedCallLogsGetListRequest($serviceProviderId=null,$callLogType=null,$dateTimeRange=null,$numberFilter=null,$redirectedNumberFilter=null,$accountAuthorizationCodeFilter=null,$subscriberType=null,$responsePagingControl=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'callLogType' => $callLogType,
                    'dateTimeRange' => $dateTimeRange,
                    'numberFilter' => $numberFilter,
                    'redirectedNumberFilter' => $redirectedNumberFilter,
                    'accountAuthorizationCodeFilter' => $accountAuthorizationCodeFilter,
                    'subscriberType' => $subscriberType,
                    'responsePagingControl' => $responsePagingControl
                ]
            ];
        }

        # Request users' call logs within a group
        static public function GroupEnhancedCallLogsGetListRequest($serviceProviderId=null,$groupId=null,$callLogType=null,$dateTimeRange=null,$numberFilter=null,$redirectedNumberFilter=null,$accountAuthorizationCodeFilter=null,$subscriberType=null,$responsePagingControl=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId,
                    'callLogType' => $callLogType,
                    'dateTimeRange' => $dateTimeRange,
                    'numberFilter' => $numberFilter,
                    'redirectedNumberFilter' => $redirectedNumberFilter,
                    'accountAuthorizationCodeFilter' => $accountAuthorizationCodeFilter,
                    'subscriberType' => $subscriberType,
                    'responsePagingControl' => $responsePagingControl
                ]
            ];
        }

        # Get the service provider's enhanced call log settings.
        static public function ServiceProviderEnhancedCallLogsGetRequest17sp4($serviceProviderId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId
                ]
            ];
        }

        # Modify the Service Provider level data associated with Enhanced Call Logs.
        static public function ServiceProviderEnhancedCallLogsModifyRequest($serviceProviderId=null,$maxLoggedCalls=null,$callExpirationDays=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'maxLoggedCalls' => $maxLoggedCalls,
                    'callExpirationDays' => $callExpirationDays
                ]
            ];
        }

        # Request the system level data associated with Enhanced Call Logs. The response is either a 
        static public function SystemEnhancedCallLogsGetRequest17sp4() {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => null
            ];
        }

        # Modify the system level data associated with Enhanced Call Logs.
        static public function SystemEnhancedCallLogsModifyRequest($isSendEnabled=null,$server1NetAddress=null,$server1SendPort=null,$server1RetrievePort=null,$server2NetAddress=null,$server2SendPort=null,$server2RetrievePort=null,$sharedSecret=null,$retransmissionDelayMilliSeconds=null,$maxTransmissions=null,$soapTimeoutSeconds=null,$useDBS=null,$maxNonPagedResponseSize=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'isSendEnabled' => $isSendEnabled,
                    'server1NetAddress' => $server1NetAddress,
                    'server1SendPort' => $server1SendPort,
                    'server1RetrievePort' => $server1RetrievePort,
                    'server2NetAddress' => $server2NetAddress,
                    'server2SendPort' => $server2SendPort,
                    'server2RetrievePort' => $server2RetrievePort,
                    'sharedSecret' => $sharedSecret,
                    'retransmissionDelayMilliSeconds' => $retransmissionDelayMilliSeconds,
                    'maxTransmissions' => $maxTransmissions,
                    'soapTimeoutSeconds' => $soapTimeoutSeconds,
                    'useDBS' => $useDBS,
                    'maxNonPagedResponseSize' => $maxNonPagedResponseSize
                ]
            ];
        }

        # Request user's call logs.
        static public function UserEnhancedCallLogsGetListRequest17sp4($userId=null,$callLogType=null,$dateTimeRange=null,$numberFilter=null,$redirectedNumberFilter=null,$accountAuthorizationCodeFilter=null,$subscriberType=null,$responsePagingControl=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId,
                    'callLogType' => $callLogType,
                    'dateTimeRange' => $dateTimeRange,
                    'numberFilter' => $numberFilter,
                    'redirectedNumberFilter' => $redirectedNumberFilter,
                    'accountAuthorizationCodeFilter' => $accountAuthorizationCodeFilter,
                    'subscriberType' => $subscriberType,
                    'responsePagingControl' => $responsePagingControl
                ]
            ];
        }

}