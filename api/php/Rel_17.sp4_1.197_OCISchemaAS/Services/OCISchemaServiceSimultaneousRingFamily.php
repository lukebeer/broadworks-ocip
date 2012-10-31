<?php
class OCISchemaServiceSimultaneousRingFamily {
        # Add a criteria to the user's simultaneous ring family service.
        static public function UserSimultaneousRingFamilyAddCriteriaRequest($userId=null,$criteriaName=null,$timeSchedule=null,$holidaySchedule=null,$blacklisted=null,$fromDnCriteria=null) {
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

        # Delete a criteria from the user's simultaneous ring family service.
        static public function UserSimultaneousRingFamilyDeleteCriteriaRequest($userId=null,$criteriaName=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId,
                    'criteriaName' => $criteriaName
                ]
            ];
        }

        # Get a criteria for the user's simultaneous ring family service.
        static public function UserSimultaneousRingFamilyGetCriteriaRequest($userId=null,$criteriaName=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId,
                    'criteriaName' => $criteriaName
                ]
            ];
        }

        # Get the user's simultaneous ring family service setting.
        static public function UserSimultaneousRingFamilyGetRequest17($userId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId
                ]
            ];
        }

        # Modify a criteria for the user's simultaneous ring family service.
        static public function UserSimultaneousRingFamilyModifyCriteriaRequest($userId=null,$criteriaName=null,$newCriteriaName=null,$timeSchedule=null,$holidaySchedule=null,$blacklisted=null,$fromDnCriteria=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId,
                    'criteriaName' => $criteriaName,
                    'newCriteriaName' => $newCriteriaName,
                    'timeSchedule' => $timeSchedule,
                    'holidaySchedule' => $holidaySchedule,
                    'blacklisted' => $blacklisted,
                    'fromDnCriteria' => $fromDnCriteria
                ]
            ];
        }

        # Modify the user's simultaneous ring family service setting.
        static public function UserSimultaneousRingFamilyModifyRequest17($userId=null,$isActive=null,$doNotRingIfOnCall=null,$simultaneousRingNumberList=null,$criteriaActivation=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId,
                    'isActive' => $isActive,
                    'doNotRingIfOnCall' => $doNotRingIfOnCall,
                    'simultaneousRingNumberList' => $simultaneousRingNumberList,
                    'criteriaActivation' => $criteriaActivation
                ]
            ];
        }

}