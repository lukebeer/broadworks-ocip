<?php
class OCISchemaServiceSequentialRing {
        # Add a criteria to the user's sequential ring service.
        static public function UserSequentialRingAddCriteriaRequest16($userId=null,$criteriaName=null,$timeSchedule=null,$holidaySchedule=null,$blacklisted=null,$fromDnCriteria=null) {
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

        # Delete a criteria from the user's sequential ring service.
        static public function UserSequentialRingDeleteCriteriaRequest($userId=null,$criteriaName=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId,
                    'criteriaName' => $criteriaName
                ]
            ];
        }

        # Get a criteria for the user's sequential ring service.
        static public function UserSequentialRingGetCriteriaRequest16($userId=null,$criteriaName=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId,
                    'criteriaName' => $criteriaName
                ]
            ];
        }

        # Get the user's sequential ring service setting.
        static public function UserSequentialRingGetRequest14sp4($userId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId
                ]
            ];
        }

        # Modify a criteria for the user's sequential ring service.
        static public function UserSequentialRingModifyCriteriaRequest($userId=null,$criteriaName=null,$newCriteriaName=null,$timeSchedule=null,$fromDnCriteria=null,$holidaySchedule=null,$blacklisted=null) {
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

        # Modify the user's sequential ring service setting.
        static public function UserSequentialRingModifyRequest($userId=null,$ringBaseLocationFirst=null,$baseLocationNumberOfRings=null,$continueIfBaseLocationIsBusy=null,$callerMayStopSearch=null,$Location01=null,$Location02=null,$Location03=null,$Location04=null,$Location05=null,$criteriaActivation=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId,
                    'ringBaseLocationFirst' => $ringBaseLocationFirst,
                    'baseLocationNumberOfRings' => $baseLocationNumberOfRings,
                    'continueIfBaseLocationIsBusy' => $continueIfBaseLocationIsBusy,
                    'callerMayStopSearch' => $callerMayStopSearch,
                    'Location01' => $Location01,
                    'Location02' => $Location02,
                    'Location03' => $Location03,
                    'Location04' => $Location04,
                    'Location05' => $Location05,
                    'criteriaActivation' => $criteriaActivation
                ]
            ];
        }

}