<?php
class OCISchemaServicePhysicalLocation {
        # Request to get the list of Physical Location system parameters.
        static public function SystemPhysicalLocationGetRequest() {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => null
            ];
        }

        # Request to modify Physical Location system parameters.
        static public function SystemPhysicalLocationModifyRequest($alwaysAllowEmergencyCalls=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'alwaysAllowEmergencyCalls' => $alwaysAllowEmergencyCalls
                ]
            ];
        }

        # Request the user level data associated with Physical Location.
        static public function UserPhysicalLocationGetRequest($userId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId
                ]
            ];
        }

        # Modify the user level data associated with Physical Location.
        static public function UserPhysicalLocationModifyRequest($userId=null,$isActive=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId,
                    'isActive' => $isActive
                ]
            ];
        }

}