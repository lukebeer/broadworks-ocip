<?php
class OCISchemaServicePriorityAlert {
        # Add a criteria to the user's priority alert service.
        static public function UserPriorityAlertAddCriteriaRequest16($userId=null,$criteriaName=null,$timeSchedule=null,$holidaySchedule=null,$blacklisted=null,$fromDnCriteria=null) {
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

        # Delete a criteria from the user's priority alert service.
        static public function UserPriorityAlertDeleteCriteriaRequest($userId=null,$criteriaName=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId,
                    'criteriaName' => $criteriaName
                ]
            ];
        }

        # Get the user's priority alert criteria listing.
        static public function UserPriorityAlertGetCriteriaListRequest($userId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId
                ]
            ];
        }

        # Get a criteria for the user's priority alert service.
        static public function UserPriorityAlertGetCriteriaRequest16($userId=null,$criteriaName=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId,
                    'criteriaName' => $criteriaName
                ]
            ];
        }

        # Activate the user's priority alert criteria list.
        static public function UserPriorityAlertModifyActiveCriteriaListRequest($userId=null,$criteriaActivation=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId,
                    'criteriaActivation' => $criteriaActivation
                ]
            ];
        }

        # Modify a criteria for the user's priority alert service.
        static public function UserPriorityAlertModifyCriteriaRequest($userId=null,$criteriaName=null,$newCriteriaName=null,$timeSchedule=null,$fromDnCriteria=null,$holidaySchedule=null,$blacklisted=null) {
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