<?php
class OCISchemaServiceMeetMeConferencing {
        # Add a Meet-Me Conferencing bridge to a group.
        static public function GroupMeetMeConferencingAddInstanceRequest($serviceProviderId=null,$groupId=null,$serviceUserId=null,$serviceInstanceProfile=null,$allocatedPorts=null,$networkClassOfService=null,$allowIndividualOutDial=null,$operatorNumber=null,$conferenceHostUserId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId,
                    'serviceUserId' => $serviceUserId,
                    'serviceInstanceProfile' => $serviceInstanceProfile,
                    'allocatedPorts' => $allocatedPorts,
                    'networkClassOfService' => $networkClassOfService,
                    'allowIndividualOutDial' => $allowIndividualOutDial,
                    'operatorNumber' => $operatorNumber,
                    'conferenceHostUserId' => $conferenceHostUserId
                ]
            ];
        }

        # Delete a Meet-Me Conferencing bridge from a group.
        static public function GroupMeetMeConferencingDeleteInstanceRequest($serviceUserId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceUserId' => $serviceUserId
                ]
            ];
        }

        # Get a list of users that can be assigned to a Meet-Me Conferencing bridge.
        static public function GroupMeetMeConferencingGetAvailableUserListRequest($serviceProviderId=null,$groupId=null,$responseSizeLimit=null,$searchCriteriaUserLastName=null,$searchCriteriaUserFirstName=null,$searchCriteriaUserId=null,$searchCriteriaExactUserDepartment=null,$searchCriteriaExactUserGroup=null,$searchCriteriaDn=null,$searchCriteriaExtension=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId,
                    'responseSizeLimit' => $responseSizeLimit,
                    'searchCriteriaUserLastName' => $searchCriteriaUserLastName,
                    'searchCriteriaUserFirstName' => $searchCriteriaUserFirstName,
                    'searchCriteriaUserId' => $searchCriteriaUserId,
                    'searchCriteriaExactUserDepartment' => $searchCriteriaExactUserDepartment,
                    'searchCriteriaExactUserGroup' => $searchCriteriaExactUserGroup,
                    'searchCriteriaDn' => $searchCriteriaDn,
                    'searchCriteriaExtension' => $searchCriteriaExtension
                ]
            ];
        }

        # Get a list of Meet-Me Conferencing instances within a group.
        static public function GroupMeetMeConferencingGetInstanceListRequest($serviceProviderId=null,$groupId=null,$departmentName=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId,
                    'departmentName' => $departmentName
                ]
            ];
        }

        # Request to get all the information of a Meet-Me Conferencing bridge.
        static public function GroupMeetMeConferencingGetInstanceRequest17sp3($serviceUserId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceUserId' => $serviceUserId
                ]
            ];
        }

        # Request the group level data associated with Meet-Me Conferencing functions.
        static public function GroupMeetMeConferencingGetRequest($serviceProviderId=null,$groupId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId
                ]
            ];
        }

        # Request to set the active status of Meet-Me Conferencing instances.
        static public function GroupMeetMeConferencingModifyActiveInstanceListRequest($serviceActivation=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceActivation' => $serviceActivation
                ]
            ];
        }

        # Request to modify a Meet-Me Conferencing bridge.
        static public function GroupMeetMeConferencingModifyInstanceRequest($serviceUserId=null,$serviceInstanceProfile=null,$allocatedPorts=null,$networkClassOfService=null,$allowIndividualOutDial=null,$operatorNumber=null,$conferenceHostUserIdList=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceUserId' => $serviceUserId,
                    'serviceInstanceProfile' => $serviceInstanceProfile,
                    'allocatedPorts' => $allocatedPorts,
                    'networkClassOfService' => $networkClassOfService,
                    'allowIndividualOutDial' => $allowIndividualOutDial,
                    'operatorNumber' => $operatorNumber,
                    'conferenceHostUserIdList' => $conferenceHostUserIdList
                ]
            ];
        }

        # Modify the group level data associated with Meet-Me Conferencing functions.
        static public function GroupMeetMeConferencingModifyRequest($serviceProviderId=null,$groupId=null,$allocatedPorts=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId,
                    'allocatedPorts' => $allocatedPorts
                ]
            ];
        }

        # Request the service provider/enterprise level data associated with Meet-Me Conferencing functions.
        static public function ServiceProviderMeetMeConferencingGetRequest($serviceProviderId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId
                ]
            ];
        }

        # Modify the service provider/enterprise level data associated with Meet-Me Conferencing functions.
        static public function ServiceProviderMeetMeConferencingModifyRequest($serviceProviderId=null,$allocatedPorts=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'allocatedPorts' => $allocatedPorts
                ]
            ];
        }

        # Request the system level data associated with Meet-Me Conferencing functions.
        static public function SystemMeetMeConferencingGetRequest17sp3() {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => null
            ];
        }

        # Modify the system level data associated with Meet-Me Conferencing.
        static public function SystemMeetMeConferencingModifyRequest($conferenceIdLength=null,$moderatorPinLength=null,$enableConferenceEndDateRestriction=null,$conferenceEndDateRestrictionMonths=null,$deleteExpiredConferencesAfterHoldPeriod=null,$expiredConferenceHoldPeriodDays=null,$recordingWebAppURL=null,$recordingFileFormat=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'conferenceIdLength' => $conferenceIdLength,
                    'moderatorPinLength' => $moderatorPinLength,
                    'enableConferenceEndDateRestriction' => $enableConferenceEndDateRestriction,
                    'conferenceEndDateRestrictionMonths' => $conferenceEndDateRestrictionMonths,
                    'deleteExpiredConferencesAfterHoldPeriod' => $deleteExpiredConferencesAfterHoldPeriod,
                    'expiredConferenceHoldPeriodDays' => $expiredConferenceHoldPeriodDays,
                    'recordingWebAppURL' => $recordingWebAppURL,
                    'recordingFileFormat' => $recordingFileFormat
                ]
            ];
        }

        # Add a Meet-Me conference.
        static public function UserMeetMeConferencingAddConferenceRequest($userId=null,$bridgeId=null,$title=null,$estimatedParticipants=null,$accountCode=null,$muteAllAttendeesOnEntry=null,$endConferenceOnModeratorExit=null,$moderatorRequired=null,$attendeeNotification=null,$conferenceSchedule=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId,
                    'bridgeId' => $bridgeId,
                    'title' => $title,
                    'estimatedParticipants' => $estimatedParticipants,
                    'accountCode' => $accountCode,
                    'muteAllAttendeesOnEntry' => $muteAllAttendeesOnEntry,
                    'endConferenceOnModeratorExit' => $endConferenceOnModeratorExit,
                    'moderatorRequired' => $moderatorRequired,
                    'attendeeNotification' => $attendeeNotification,
                    'conferenceSchedule' => $conferenceSchedule
                ]
            ];
        }

        # Request to delete one or more conferences which are owned by the user.
        static public function UserMeetMeConferencingDeleteConferenceListRequest($userId=null,$conferenceKey=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId,
                    'conferenceKey' => $conferenceKey
                ]
            ];
        }

        # Request to delete one or more conference recordings owned by the user.
        static public function UserMeetMeConferencingDeleteConferenceRecordingListRequest($userId=null,$recordingKey=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId,
                    'recordingKey' => $recordingKey
                ]
            ];
        }

        # Get the list of Meet-Me Conferencing bridges for which the user is a host.
        static public function UserMeetMeConferencingGetBridgeListRequest($userId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId
                ]
            ];
        }

        # Get the list of all conferences owned by the user.
        static public function UserMeetMeConferencingGetConferenceListRequest($userId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId
                ]
            ];
        }

        # Get the list of recordings of the conferences owned by the host.
        static public function UserMeetMeConferencingGetConferenceRecordingListRequest($userId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId
                ]
            ];
        }

        # Get the information of a conference owned by the user.
        static public function UserMeetMeConferencingGetConferenceRequest($userId=null,$conferenceKey=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId,
                    'conferenceKey' => $conferenceKey
                ]
            ];
        }

        # Modify an existing conference.
        static public function UserMeetMeConferencingModifyConferenceRequest($userId=null,$conferenceKey=null,$title=null,$estimatedParticipants=null,$accountCode=null,$muteAllAttendeesOnEntry=null,$endConferenceOnModeratorExit=null,$moderatorRequired=null,$attendeeNotification=null,$conferenceSchedule=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId,
                    'conferenceKey' => $conferenceKey,
                    'title' => $title,
                    'estimatedParticipants' => $estimatedParticipants,
                    'accountCode' => $accountCode,
                    'muteAllAttendeesOnEntry' => $muteAllAttendeesOnEntry,
                    'endConferenceOnModeratorExit' => $endConferenceOnModeratorExit,
                    'moderatorRequired' => $moderatorRequired,
                    'attendeeNotification' => $attendeeNotification,
                    'conferenceSchedule' => $conferenceSchedule
                ]
            ];
        }

}