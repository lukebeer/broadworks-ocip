<?php
class OCISchemaServiceCallNotify {
        # Request the system level data associated with Call Notify.
        static public function SystemCallNotifyGetRequest() {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => null
            ];
        }

        # Modify the system level data associated with Call Notify.
        static public function SystemCallNotifyModifyRequest($defaultFromAddress=null,$useShortSubjectLine=null,$useDnInMailBody=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'defaultFromAddress' => $defaultFromAddress,
                    'useShortSubjectLine' => $useShortSubjectLine,
                    'useDnInMailBody' => $useDnInMailBody
                ]
            ];
        }

        # Add a criteria to the user's call notify service.
        static public function UserCallNotifyAddCriteriaRequest16($userId=null,$criteriaName=null,$timeSchedule=null,$holidaySchedule=null,$blacklisted=null,$fromDnCriteria=null) {
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

        # Get a criteria for the user's call notify service.
        static public function UserCallNotifyGetCriteriaRequest16($userId=null,$criteriaName=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId,
                    'criteriaName' => $criteriaName
                ]
            ];
        }

        # Delete a criteria from the user's call notify service.
        static public function UserCallNotifyDeleteCriteriaRequest($userId=null,$criteriaName=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId,
                    'criteriaName' => $criteriaName
                ]
            ];
        }

        # Modify a criteria for the user's call notify service.
        static public function UserCallNotifyModifyCriteriaRequest($userId=null,$criteriaName=null,$newCriteriaName=null,$timeSchedule=null,$fromDnCriteria=null,$holidaySchedule=null,$blacklisted=null) {
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

        # Get the user's call notify service setting.
        static public function UserCallNotifyGetRequest($userId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId
                ]
            ];
        }

        # Modify the user's call notify service setting.
        static public function UserCallNotifyModifyRequest($userId=null,$callNotifyEmailAddress=null,$criteriaActivation=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId,
                    'callNotifyEmailAddress' => $callNotifyEmailAddress,
                    'criteriaActivation' => $criteriaActivation
                ]
            ];
        }

}