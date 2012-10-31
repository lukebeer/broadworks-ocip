<?php
class OCISchemaServiceCallForwardingSelective {
        # Add a criteria to the user's call forwarding selective service.
        static public function UserCallForwardingSelectiveAddCriteriaRequest16($userId=null,$criteriaName=null,$timeSchedule=null,$holidaySchedule=null,$forwardToNumberSelection=null,$forwardToPhoneNumber=null,$fromDnCriteria=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId,
                    'criteriaName' => $criteriaName,
                    'timeSchedule' => $timeSchedule,
                    'holidaySchedule' => $holidaySchedule,
                    'forwardToNumberSelection' => $forwardToNumberSelection,
                    'forwardToPhoneNumber' => $forwardToPhoneNumber,
                    'fromDnCriteria' => $fromDnCriteria
                ]
            ];
        }

        # Delete a criteria from the user's call forwarding selective service.
        static public function UserCallForwardingSelectiveDeleteCriteriaRequest($userId=null,$criteriaName=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId,
                    'criteriaName' => $criteriaName
                ]
            ];
        }

        # Get a criteria for the user's call forwarding selective service.
        static public function UserCallForwardingSelectiveGetCriteriaRequest16($userId=null,$criteriaName=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId,
                    'criteriaName' => $criteriaName
                ]
            ];
        }

        # Get the user's call forwarding selective service setting.
        static public function UserCallForwardingSelectiveGetRequest16($userId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId
                ]
            ];
        }

        # Modify a criteria for the user's call forwarding selective service.
        static public function UserCallForwardingSelectiveModifyCriteriaRequest($userId=null,$criteriaName=null,$newCriteriaName=null,$timeSchedule=null,$holidaySchedule=null,$forwardToNumberSelection=null,$forwardToPhoneNumber=null,$fromDnCriteria=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId,
                    'criteriaName' => $criteriaName,
                    'newCriteriaName' => $newCriteriaName,
                    'timeSchedule' => $timeSchedule,
                    'holidaySchedule' => $holidaySchedule,
                    'forwardToNumberSelection' => $forwardToNumberSelection,
                    'forwardToPhoneNumber' => $forwardToPhoneNumber,
                    'fromDnCriteria' => $fromDnCriteria
                ]
            ];
        }

        # Modify the user's call forwarding selective service setting.
        static public function UserCallForwardingSelectiveModifyRequest($userId=null,$isActive=null,$defaultForwardToPhoneNumber=null,$playRingReminder=null,$criteriaActivation=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId,
                    'isActive' => $isActive,
                    'defaultForwardToPhoneNumber' => $defaultForwardToPhoneNumber,
                    'playRingReminder' => $playRingReminder,
                    'criteriaActivation' => $criteriaActivation
                ]
            ];
        }

}