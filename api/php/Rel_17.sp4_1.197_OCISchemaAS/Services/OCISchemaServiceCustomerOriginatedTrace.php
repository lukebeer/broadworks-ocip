<?php
class OCISchemaServiceCustomerOriginatedTrace {
        # Request the system level data associated with Customer Originated Trace.
        static public function SystemCustomerOriginatedTraceGetRequest() {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => null
            ];
        }

        # Modify the system level data associated with Customer Originated Trace.
        static public function SystemCustomerOriginatedTraceModifyRequest($screenMaliciousCallers=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'screenMaliciousCallers' => $screenMaliciousCallers
                ]
            ];
        }

}