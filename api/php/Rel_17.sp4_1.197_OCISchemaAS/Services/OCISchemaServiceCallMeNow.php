<?php
class OCISchemaServiceCallMeNow {
        # Request the system level data associated with Call Me Now service.
        static public function SystemCallMeNowGetRequest() {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => null
            ];
        }

        # Modify the system level data associated with Call me now service.
        static public function SystemCallMeNowModifyRequest($passcodeLength=null,$passcodeTimeoutSeconds=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'passcodeLength' => $passcodeLength,
                    'passcodeTimeoutSeconds' => $passcodeTimeoutSeconds
                ]
            ];
        }

        # Add a criterion to the user's call me now service.  The criterion added is automatically active.
        static public function UserCallMeNowAddCriteriaRequest($userId=null,$criteriaName=null,$timeSchedule=null,$holidaySchedule=null,$rejectCall=null,$toDnCriteria=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId,
                    'criteriaName' => $criteriaName,
                    'timeSchedule' => $timeSchedule,
                    'holidaySchedule' => $holidaySchedule,
                    'rejectCall' => $rejectCall,
                    'toDnCriteria' => $toDnCriteria
                ]
            ];
        }

        # Delete a criteria from the user's call me now service.
        static public function UserCallMeNowDeleteCriteriaRequest($userId=null,$criteriaName=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId,
                    'criteriaName' => $criteriaName
                ]
            ];
        }

        # Get a criteria for the user's call me now service.
        static public function UserCallMeNowGetCriteriaRequest($userId=null,$criteriaName=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId,
                    'criteriaName' => $criteriaName
                ]
            ];
        }

        # Get the user's call me now service setting.
        static public function UserCallMeNowGetRequest($userId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId
                ]
            ];
        }

        # Modify a criteria for the user's call me now service.
        static public function UserCallMeNowModifyCriteriaRequest($userId=null,$criteriaName=null,$newCriteriaName=null,$timeSchedule=null,$holidaySchedule=null,$rejectCall=null,$toDnCriteria=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId,
                    'criteriaName' => $criteriaName,
                    'newCriteriaName' => $newCriteriaName,
                    'timeSchedule' => $timeSchedule,
                    'holidaySchedule' => $holidaySchedule,
                    'rejectCall' => $rejectCall,
                    'toDnCriteria' => $toDnCriteria
                ]
            ];
        }

        # Modify the user's call me now service setting.
        static public function UserCallMeNowModifyRequest($userId=null,$isActive=null,$answerConfirmation=null,$criteriaActivation=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId,
                    'isActive' => $isActive,
                    'answerConfirmation' => $answerConfirmation,
                    'criteriaActivation' => $criteriaActivation
                ]
            ];
        }

}