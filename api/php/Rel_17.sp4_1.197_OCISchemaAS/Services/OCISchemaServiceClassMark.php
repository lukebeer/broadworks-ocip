<?php
class OCISchemaServiceClassMark {
        # Add a Class Mark to system.
        static public function SystemClassmarkAddRequest($classmark=null,$value=null,$webDisplayKey=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'classmark' => $classmark,
                    'value' => $value,
                    'webDisplayKey' => $webDisplayKey
                ]
            ];
        }

        # Delete a Class Mark from system. It cannot be deleted if it is in use by any users.
        static public function SystemClassmarkDeleteRequest($classmark=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'classmark' => $classmark
                ]
            ];
        }

        # Get the list of all Class Mark in system.
        static public function SystemClassmarkGetListRequest() {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => null
            ];
        }

        # Modify a Class Mark in system.
        static public function SystemClassmarkModifyRequest($classmark=null,$value=null,$webDisplayKey=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'classmark' => $classmark,
                    'value' => $value,
                    'webDisplayKey' => $webDisplayKey
                ]
            ];
        }

        # Get the list of all users associated with a Class Mark in system. It is possible to search by various criteria.
        static public function SystemClassmarkGetUtilizationListRequest($classmark=null,$responseSizeLimit=null,$searchCriteriaGroupId=null,$searchCriteriaExactServiceProviderId=null,$searchCriteriaUserFirstName=null,$searchCriteriaUserLastName=null,$searchCriteriaDn=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'classmark' => $classmark,
                    'responseSizeLimit' => $responseSizeLimit,
                    'searchCriteriaGroupId' => $searchCriteriaGroupId,
                    'searchCriteriaExactServiceProviderId' => $searchCriteriaExactServiceProviderId,
                    'searchCriteriaUserFirstName' => $searchCriteriaUserFirstName,
                    'searchCriteriaUserLastName' => $searchCriteriaUserLastName,
                    'searchCriteriaDn' => $searchCriteriaDn
                ]
            ];
        }

        # Request the Class Mark data associated with User.
        static public function UserClassmarkGetRequest($userId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId
                ]
            ];
        }

        # Modify the user level data associated with Class Mark.
        static public function UserClassmarkModifyRequest($userId=null,$classmark=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId,
                    'classmark' => $classmark
                ]
            ];
        }

}