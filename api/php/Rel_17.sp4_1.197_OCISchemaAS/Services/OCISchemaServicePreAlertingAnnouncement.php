<?php
class OCISchemaServicePreAlertingAnnouncement {
        # Get the Enterprise pre-alerting service settings.
        static public function EnterprisePreAlertingAnnouncementGetRequest($serviceProviderId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId
                ]
            ];
        }

        # Modify the enterprise level pre-alerting service settings.
        static public function EnterprisePreAlertingAnnouncementModifyRequest($serviceProviderId=null,$announcementInterruption=null,$interruptionDigitSequence=null,$audioSelection=null,$audioFile=null,$videoSelection=null,$videoFile=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'announcementInterruption' => $announcementInterruption,
                    'interruptionDigitSequence' => $interruptionDigitSequence,
                    'audioSelection' => $audioSelection,
                    'audioFile' => $audioFile,
                    'videoSelection' => $videoSelection,
                    'videoFile' => $videoFile
                ]
            ];
        }

        # Get the group’s PreAlertingservice settings.
        static public function GroupPreAlertingAnnouncementGetRequest($serviceProviderId=null,$groupId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId
                ]
            ];
        }

        # Modify the group level pre-alerting service settings.
        static public function GroupPreAlertingAnnouncementModifyRequest($serviceProviderId=null,$groupId=null,$announcementInterruption=null,$interruptionDigitSequence=null,$audioSelection=null,$audioFile=null,$videoSelection=null,$videoFile=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId,
                    'announcementInterruption' => $announcementInterruption,
                    'interruptionDigitSequence' => $interruptionDigitSequence,
                    'audioSelection' => $audioSelection,
                    'audioFile' => $audioFile,
                    'videoSelection' => $videoSelection,
                    'videoFile' => $videoFile
                ]
            ];
        }

        # Get the user's pre-alerting service setting.
        static public function UserPreAlertingAnnouncementGetRequest($userId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId
                ]
            ];
        }

        # Modify the user's pre-alerting service setting.
        static public function UserPreAlertingAnnouncementModifyRequest($userId=null,$isActive=null,$audioSelection=null,$audioFile=null,$videoSelection=null,$videoFile=null,$criteriaActivation=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId,
                    'isActive' => $isActive,
                    'audioSelection' => $audioSelection,
                    'audioFile' => $audioFile,
                    'videoSelection' => $videoSelection,
                    'videoFile' => $videoFile,
                    'criteriaActivation' => $criteriaActivation
                ]
            ];
        }

        # Add a criteria to the user's pre-alerting service.
        static public function UserPreAlertingAnnouncementAddCriteriaRequest($userId=null,$criteriaName=null,$timeSchedule=null,$holidaySchedule=null,$blacklisted=null,$fromDnCriteria=null) {
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

        # Modify a criteria for the user's pre-alerting service.
        static public function UserPreAlertingAnnouncementModifyCriteriaRequest($userId=null,$criteriaName=null,$newCriteriaName=null,$timeSchedule=null,$holidaySchedule=null,$blacklisted=null,$fromDnCriteria=null) {
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

        # Delete a criteria from the user's pre-alerting service.
        static public function UserPreAlertingAnnouncementDeleteCriteriaRequest($userId=null,$criteriaName=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId,
                    'criteriaName' => $criteriaName
                ]
            ];
        }

        # Get a criteria for the user's pre-alerting service.
        static public function UserPreAlertingAnnouncementGetCriteriaRequest($userId=null,$criteriaName=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId,
                    'criteriaName' => $criteriaName
                ]
            ];
        }

}