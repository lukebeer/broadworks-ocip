<?php
class OCISchemaServiceAnonymousCallRejection {
        # Request the user level data associated with Anonymous Call Rejection.
        static public function UserAnonymousCallRejectionGetRequest($userId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId
                ]
            ];
        }

        # Modify the user level data associated with Anonymous Call Rejection.
        static public function UserAnonymousCallRejectionModifyRequest($userId=null,$isActive=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId,
                    'isActive' => $isActive
                ]
            ];
        }

        # Get Anonymous Call Rejection system parameters.
        static public function SystemAnonymousCallRejectionGetRequest() {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => null
            ];
        }

        # Modify a system Anonymous Call Rejection parameter.
        static public function SystemAnonymousCallRejectionModifyRequest($paiRequired=null,$screenOnlyLocalCalls=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'paiRequired' => $paiRequired,
                    'screenOnlyLocalCalls' => $screenOnlyLocalCalls
                ]
            ];
        }

}