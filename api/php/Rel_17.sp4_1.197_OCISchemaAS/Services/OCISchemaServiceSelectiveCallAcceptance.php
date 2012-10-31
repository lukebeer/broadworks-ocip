<?php
class OCISchemaServiceSelectiveCallAcceptance {
        # Add a criteria to the user's selective call acceptance service.
        static public function UserSelectiveCallAcceptanceAddCriteriaRequest16($userId=null,$criteriaName=null,$timeSchedule=null,$holidaySchedule=null,$blacklisted=null,$fromDnCriteria=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId,
                    'criteriaName' => $criteriaName,
                    'timeSchedule' => $timeSchedule,
                    'holidaySchedule' => $holidaySchedule,
                    'blacklisted' => $blacklisted,
                    'fromDnCriteria' => $fromDnCriteria
                ]
            ];
        }

        # Delete a criteria from the user's selective call acceptance service.
        static public function UserSelectiveCallAcceptanceDeleteCriteriaRequest($userId=null,$criteriaName=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId,
                    'criteriaName' => $criteriaName
                ]
            ];
        }

        # Get the user's selective call acceptance criteria listing.
        static public function UserSelectiveCallAcceptanceGetCriteriaListRequest($userId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId
                ]
            ];
        }

        # Get a criteria for the user's selective call acceptance service.
        static public function UserSelectiveCallAcceptanceGetCriteriaRequest16($userId=null,$criteriaName=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId,
                    'criteriaName' => $criteriaName
                ]
            ];
        }

        # Activate the user's selective call acceptance criteria list.
        static public function UserSelectiveCallAcceptanceModifyActiveCriteriaListRequest($userId=null,$criteriaActivation=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId,
                    'criteriaActivation' => $criteriaActivation
                ]
            ];
        }

        # Modify a criteria for the user's selective call acceptance service.
        static public function UserSelectiveCallAcceptanceModifyCriteriaRequest($userId=null,$criteriaName=null,$newCriteriaName=null,$timeSchedule=null,$fromDnCriteria=null,$holidaySchedule=null,$blacklisted=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId,
                    'criteriaName' => $criteriaName,
                    'newCriteriaName' => $newCriteriaName,
                    'timeSchedule' => $timeSchedule,
                    'fromDnCriteria' => $fromDnCriteria,
                    'holidaySchedule' => $holidaySchedule,
                    'blacklisted' => $blacklisted
                ]
            ];
        }

}