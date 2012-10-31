<?php
class OCISchemaServiceCallingNameRetrieval {
        # Request the system's calling name retrieval attributes.
        static public function SystemCallingNameRetrievalGetRequest17sp4() {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => null
            ];
        }

        # Modifies the system's calling name retrieval attributes.
        static public function SystemCallingNameRetrievalModifyRequest16sp1($triggerCNAMQueriesForAllNetworkCalls=null,$triggerCNAMQueriesForGroupAndEnterpriseCalls=null,$queryProtocol=null,$queryTimeoutMilliseconds=null,$sipExternalDatabaseNetAddress=null,$sipExternalDatabasePort=null,$sipExternalDatabaseTransport=null,$soapExternalDatabaseNetAddress=null,$soapSupportsDNSSRV=null,$callingNameSource=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'triggerCNAMQueriesForAllNetworkCalls' => $triggerCNAMQueriesForAllNetworkCalls,
                    'triggerCNAMQueriesForGroupAndEnterpriseCalls' => $triggerCNAMQueriesForGroupAndEnterpriseCalls,
                    'queryProtocol' => $queryProtocol,
                    'queryTimeoutMilliseconds' => $queryTimeoutMilliseconds,
                    'sipExternalDatabaseNetAddress' => $sipExternalDatabaseNetAddress,
                    'sipExternalDatabasePort' => $sipExternalDatabasePort,
                    'sipExternalDatabaseTransport' => $sipExternalDatabaseTransport,
                    'soapExternalDatabaseNetAddress' => $soapExternalDatabaseNetAddress,
                    'soapSupportsDNSSRV' => $soapSupportsDNSSRV,
                    'callingNameSource' => $callingNameSource
                ]
            ];
        }

        # Request the user level data associated with Calling Name Retrieval.
        static public function UserCallingNameRetrievalGetRequest($userId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId
                ]
            ];
        }

        # Modify the user level data associated with Calling Name Retrieval.
        static public function UserCallingNameRetrievalModifyRequest($userId=null,$isActive=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId,
                    'isActive' => $isActive
                ]
            ];
        }

}