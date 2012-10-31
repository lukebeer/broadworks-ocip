<?php
class OCISchemaServiceCustomRingback {
        # Get the group's custom ring back service settings.
        static public function GroupCustomRingbackGroupGetRequest16($serviceProviderId=null,$groupId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId
                ]
            ];
        }

        # Modify the group's custom ring back service settings.
        static public function GroupCustomRingbackGroupModifyRequest16($serviceProviderId=null,$groupId=null,$isActive=null,$audioSelection=null,$audioFile=null,$videoSelection=null,$videoFile=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId,
                    'isActive' => $isActive,
                    'audioSelection' => $audioSelection,
                    'audioFile' => $audioFile,
                    'videoSelection' => $videoSelection,
                    'videoFile' => $videoFile
                ]
            ];
        }

        # Add a criteria to the user's custom ringback service.
        static public function UserCustomRingbackUserAddCriteriaRequest16($userId=null,$criteriaName=null,$timeSchedule=null,$holidaySchedule=null,$blacklisted=null,$fromDnCriteria=null,$audioSelection=null,$audioFile=null,$videoSelection=null,$videoFile=null,$callWaitingAudioSelection=null,$callWaitingAudioFile=null,$callWaitingVideoSelection=null,$callWaitingVideoFile=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId,
                    'criteriaName' => $criteriaName,
                    'timeSchedule' => $timeSchedule,
                    'holidaySchedule' => $holidaySchedule,
                    'blacklisted' => $blacklisted,
                    'fromDnCriteria' => $fromDnCriteria,
                    'audioSelection' => $audioSelection,
                    'audioFile' => $audioFile,
                    'videoSelection' => $videoSelection,
                    'videoFile' => $videoFile,
                    'callWaitingAudioSelection' => $callWaitingAudioSelection,
                    'callWaitingAudioFile' => $callWaitingAudioFile,
                    'callWaitingVideoSelection' => $callWaitingVideoSelection,
                    'callWaitingVideoFile' => $callWaitingVideoFile
                ]
            ];
        }

        # Delete a criteria from the user's custom ringback service.
        static public function UserCustomRingbackUserDeleteCriteriaRequest($userId=null,$criteriaName=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId,
                    'criteriaName' => $criteriaName
                ]
            ];
        }

        # Get the user's custom ringback service criteria listing.
        static public function UserCustomRingbackUserGetCriteriaListRequest($userId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId
                ]
            ];
        }

        # Get a criteria for the user's custom ringback service.
        static public function UserCustomRingbackUserGetCriteriaRequest16($userId=null,$criteriaName=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId,
                    'criteriaName' => $criteriaName
                ]
            ];
        }

        # Modify the user's custom ringback service criteria's active setting.
        static public function UserCustomRingbackUserModifyActiveCriteriaListRequest($userId=null,$criteriaActivation=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId,
                    'criteriaActivation' => $criteriaActivation
                ]
            ];
        }

        # Modify a criteria for the user's custom ringback service.
        static public function UserCustomRingbackUserModifyCriteriaRequest16($userId=null,$criteriaName=null,$newCriteriaName=null,$timeSchedule=null,$holidaySchedule=null,$blacklisted=null,$fromDnCriteria=null,$audioSelection=null,$audioFile=null,$videoSelection=null,$videoFile=null,$callWaitingAudioSelection=null,$callWaitingAudioFile=null,$callWaitingVideoSelection=null,$callWaitingVideoFile=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId,
                    'criteriaName' => $criteriaName,
                    'newCriteriaName' => $newCriteriaName,
                    'timeSchedule' => $timeSchedule,
                    'holidaySchedule' => $holidaySchedule,
                    'blacklisted' => $blacklisted,
                    'fromDnCriteria' => $fromDnCriteria,
                    'audioSelection' => $audioSelection,
                    'audioFile' => $audioFile,
                    'videoSelection' => $videoSelection,
                    'videoFile' => $videoFile,
                    'callWaitingAudioSelection' => $callWaitingAudioSelection,
                    'callWaitingAudioFile' => $callWaitingAudioFile,
                    'callWaitingVideoSelection' => $callWaitingVideoSelection,
                    'callWaitingVideoFile' => $callWaitingVideoFile
                ]
            ];
        }

}