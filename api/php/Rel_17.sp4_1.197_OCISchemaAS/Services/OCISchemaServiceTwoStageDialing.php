<?php
class OCISchemaServiceTwoStageDialing {
        # Request the user level data associated with Two Stage Dialing.
        static public function UserTwoStageDialingGetRequest13Mp20($userId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId
                ]
            ];
        }

        # Modify the user level data associated with Two Stage Dialing.
        static public function UserTwoStageDialingModifyRequest($userId=null,$isActive=null,$allowActivationWithUserAddresses=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId,
                    'isActive' => $isActive,
                    'allowActivationWithUserAddresses' => $allowActivationWithUserAddresses
                ]
            ];
        }

        # Request to add Two Stage Dialing number to the system.
        static public function SystemTwoStageDialingAddDnRequest($phoneNumber=null,$description=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'phoneNumber' => $phoneNumber,
                    'description' => $description
                ]
            ];
        }

        # Request to delete a Two Stage Dialing number from the system.
        static public function SystemTwoStageDialingDeleteDnRequest($phoneNumber=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'phoneNumber' => $phoneNumber
                ]
            ];
        }

        # Request to get a list of Two Stage Dialing dns defined in the system.
        static public function SystemTwoStageDialingGetDnListRequest($responseSizeLimit=null,$searchCriteriaSystemServiceDn=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'responseSizeLimit' => $responseSizeLimit,
                    'searchCriteriaSystemServiceDn' => $searchCriteriaSystemServiceDn
                ]
            ];
        }

        # Request to modify a Two Stage Dialing number's description in the system.
        static public function SystemTwoStageDialingModifyDnRequest($phoneNumber=null,$description=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'phoneNumber' => $phoneNumber,
                    'description' => $description
                ]
            ];
        }

}