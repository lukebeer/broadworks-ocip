<?php
class OCISchemaServiceInstantConferencing {
        # Add a Instant Conferencing instance to a group.
        static public function GroupInstantConferencingAddInstanceRequest14($serviceProviderId=null,$groupId=null,$serviceUserId=null,$serviceInstanceProfile=null,$conferenceBridgeLinePort=null,$allocatedPorts=null,$serviceProfileAppliedOnOutcall=null,$allowOutdialInInvitation=null,$allowDocumentDownload=null,$bridgeAdministratorUserId=null,$networkClassOfService=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId,
                    'serviceUserId' => $serviceUserId,
                    'serviceInstanceProfile' => $serviceInstanceProfile,
                    'conferenceBridgeLinePort' => $conferenceBridgeLinePort,
                    'allocatedPorts' => $allocatedPorts,
                    'serviceProfileAppliedOnOutcall' => $serviceProfileAppliedOnOutcall,
                    'allowOutdialInInvitation' => $allowOutdialInInvitation,
                    'allowDocumentDownload' => $allowDocumentDownload,
                    'bridgeAdministratorUserId' => $bridgeAdministratorUserId,
                    'networkClassOfService' => $networkClassOfService
                ]
            ];
        }

        # Delete a Instant Conferencing instance from a group.
        static public function GroupInstantConferencingDeleteInstanceRequest($serviceUserId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceUserId' => $serviceUserId
                ]
            ];
        }

        # Get a list of users that can be assigned to a Instant Conferencing group.
        static public function GroupInstantConferencingGetAvailableUserListRequest($serviceProviderId=null,$groupId=null,$responseSizeLimit=null,$searchCriteriaUserLastName=null,$searchCriteriaUserFirstName=null,$searchCriteriaExactUserDepartment=null,$searchCriteriaExactUserGroup=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId,
                    'responseSizeLimit' => $responseSizeLimit,
                    'searchCriteriaUserLastName' => $searchCriteriaUserLastName,
                    'searchCriteriaUserFirstName' => $searchCriteriaUserFirstName,
                    'searchCriteriaExactUserDepartment' => $searchCriteriaExactUserDepartment,
                    'searchCriteriaExactUserGroup' => $searchCriteriaExactUserGroup
                ]
            ];
        }

        # Get a list of Instant Conferencing instances within a group.
        static public function GroupInstantConferencingGetInstanceListRequest($serviceProviderId=null,$groupId=null,$groupDepartmentName=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId,
                    'groupDepartmentName' => $groupDepartmentName
                ]
            ];
        }

        # Request to get all the information of an Instant Conferencing instance.
        static public function GroupInstantConferencingGetInstanceRequest17($serviceUserId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceUserId' => $serviceUserId
                ]
            ];
        }

        # Request the number of conference ports configured for a group.
        static public function GroupInstantConferencingGetRequest($serviceProviderId=null,$groupId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId
                ]
            ];
        }

        # Request to set the active status of Instant Conferencing instances.
        static public function GroupInstantConferencingModifyActiveInstanceListRequest($serviceActivation=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceActivation' => $serviceActivation
                ]
            ];
        }

        # Request to modify a Instant Conferencing instance.
        static public function GroupInstantConferencingModifyInstanceRequest16($serviceUserId=null,$serviceInstanceProfile=null,$conferenceBridgeLinePort=null,$allocatedPorts=null,$serviceProfileAppliedOnOutcall=null,$allowOutdialInInvitation=null,$allowDocumentDownload=null,$bridgeAdministratorUserIdList=null,$networkClassOfService=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceUserId' => $serviceUserId,
                    'serviceInstanceProfile' => $serviceInstanceProfile,
                    'conferenceBridgeLinePort' => $conferenceBridgeLinePort,
                    'allocatedPorts' => $allocatedPorts,
                    'serviceProfileAppliedOnOutcall' => $serviceProfileAppliedOnOutcall,
                    'allowOutdialInInvitation' => $allowOutdialInInvitation,
                    'allowDocumentDownload' => $allowDocumentDownload,
                    'bridgeAdministratorUserIdList' => $bridgeAdministratorUserIdList,
                    'networkClassOfService' => $networkClassOfService
                ]
            ];
        }

        # Modify the number of conference ports configured for a group.
        static public function GroupInstantConferencingModifyRequest($serviceProviderId=null,$groupId=null,$portsAllocatedToGroup=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId,
                    'portsAllocatedToGroup' => $portsAllocatedToGroup
                ]
            ];
        }

        # Request the number of conference ports configured for a service provider.
        static public function ServiceProviderInstantConferencingGetRequest($serviceProviderId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId
                ]
            ];
        }

        # Modify the number of conference ports configured for a service provider.
        static public function ServiceProviderInstantConferencingModifyRequest($serviceProviderId=null,$portsAllocatedToServiceProvider=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'portsAllocatedToServiceProvider' => $portsAllocatedToServiceProvider
                ]
            ];
        }

        # Add an Instant Conferencing device to the system.
        static public function SystemInstantConferencingAddDeviceRequest14($deviceName=null,$clusterNetAddress=null,$signalingPort=null,$description=null,$transportProtocol=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'deviceName' => $deviceName,
                    'clusterNetAddress' => $clusterNetAddress,
                    'signalingPort' => $signalingPort,
                    'description' => $description,
                    'transportProtocol' => $transportProtocol
                ]
            ];
        }

        # Request to delete an Instant Conferencing device from the system.
        static public function SystemInstantConferencingDeleteDeviceRequest($deviceName=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'deviceName' => $deviceName
                ]
            ];
        }

        # Request to get a list of Instant Conferencing devices defined in the system.
        static public function SystemInstantConferencingGetDeviceListRequest14() {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => null
            ];
        }

        # Request to get an Instant Conferencing devices settings.
        static public function SystemInstantConferencingGetDeviceRequest14($deviceName=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'deviceName' => $deviceName
                ]
            ];
        }

        # Request the system level data associated with Instant Conferencing hold functions.
        static public function SystemInstantConferencingGetHoldPolicyRequest() {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => null
            ];
        }

        # Request the system level data associated with Instant Conferencing.
        static public function SystemInstantConferencingGetRequest() {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => null
            ];
        }

        # Request to modify an Instant Conferencing device in the system.
        static public function SystemInstantConferencingModifyDeviceRequest14($deviceName=null,$clusterNetAddress=null,$signalingPort=null,$description=null,$integrated=null,$transportProtocol=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'deviceName' => $deviceName,
                    'clusterNetAddress' => $clusterNetAddress,
                    'signalingPort' => $signalingPort,
                    'description' => $description,
                    'integrated' => $integrated,
                    'transportProtocol' => $transportProtocol
                ]
            ];
        }

        # Modify the system level data associated with Instant Conferencing hold functions.
        static public function SystemInstantConferencingModifyHoldPolicyRequest($deleteExpiredConferences=null,$expiredConferenceHoldPeriodDays=null,$deleteRecordedConferences=null,$recordedConferenceHoldPeriodDays=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'deleteExpiredConferences' => $deleteExpiredConferences,
                    'expiredConferenceHoldPeriodDays' => $expiredConferenceHoldPeriodDays,
                    'deleteRecordedConferences' => $deleteRecordedConferences,
                    'recordedConferenceHoldPeriodDays' => $recordedConferenceHoldPeriodDays
                ]
            ];
        }

        # Modify the system level data associated with Instant Conferencing.
        static public function SystemInstantConferencingModifyRequest($defaultDropAllParticipantsWhenLeaderLeaves=null,$defaultAllowDialOutInInvitation=null,$defaultFromAddress=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'defaultDropAllParticipantsWhenLeaderLeaves' => $defaultDropAllParticipantsWhenLeaderLeaves,
                    'defaultAllowDialOutInInvitation' => $defaultAllowDialOutInInvitation,
                    'defaultFromAddress' => $defaultFromAddress
                ]
            ];
        }

        # Regenerate new credentials for the conference bridges defined on the
        static public function SystemInstantConferencingResetUserPasswordsRequest($deviceName=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'deviceName' => $deviceName
                ]
            ];
        }

        # This command is used to resynchronize all the conference bridges and
        static public function SystemInstantConferencingResynchronizeDeviceRequest($deviceName=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'deviceName' => $deviceName
                ]
            ];
        }

        # Add a conference document.
        static public function UserInstantConferencingAddConferenceDocumentRequest($userId=null,$conferenceKey=null,$documentFile=null,$encryptionPassword=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId,
                    'conferenceKey' => $conferenceKey,
                    'documentFile' => $documentFile,
                    'encryptionPassword' => $encryptionPassword
                ]
            ];
        }

        # Add a conference.
        static public function UserInstantConferencingAddConferenceRequest($userId=null,$bridgeServiceUserId=null,$conferenceOwnerUserId=null,$title=null,$leaderRequired=null,$leaderReleaseDropsParticipants=null,$announceCallers=null,$conferenceType=null,$conferenceSchedule=null,$billingCode=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId,
                    'bridgeServiceUserId' => $bridgeServiceUserId,
                    'conferenceOwnerUserId' => $conferenceOwnerUserId,
                    'title' => $title,
                    'leaderRequired' => $leaderRequired,
                    'leaderReleaseDropsParticipants' => $leaderReleaseDropsParticipants,
                    'announceCallers' => $announceCallers,
                    'conferenceType' => $conferenceType,
                    'conferenceSchedule' => $conferenceSchedule,
                    'billingCode' => $billingCode
                ]
            ];
        }

        # Add a conference quickly.
        static public function UserInstantConferencingAddQuickConferenceRequest($userId=null,$bridgeServiceUserId=null,$leaderPhoneNumber=null,$leaderName=null,$participantPhoneNumber=null,$participantName=null,$billingCode=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId,
                    'bridgeServiceUserId' => $bridgeServiceUserId,
                    'leaderPhoneNumber' => $leaderPhoneNumber,
                    'leaderName' => $leaderName,
                    'participantPhoneNumber' => $participantPhoneNumber,
                    'participantName' => $participantName,
                    'billingCode' => $billingCode
                ]
            ];
        }

        # Control a conference call.
        static public function UserInstantConferencingControlCallRequest($userId=null,$conferenceKey=null,$conferenceCallId=null,$action=null,$phoneNumber=null,$userName=null,$legId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId,
                    'conferenceKey' => $conferenceKey,
                    'conferenceCallId' => $conferenceCallId,
                    'action' => $action,
                    'phoneNumber' => $phoneNumber,
                    'userName' => $userName,
                    'legId' => $legId
                ]
            ];
        }

        # Control a conference call from a stand alone user.
        static public function UserInstantConferencingControlStandAloneCallRequest($conferenceOwnerUserId=null,$conferenceKey=null,$conferenceCallId=null,$action=null,$phoneNumber=null,$userName=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'conferenceOwnerUserId' => $conferenceOwnerUserId,
                    'conferenceKey' => $conferenceKey,
                    'conferenceCallId' => $conferenceCallId,
                    'action' => $action,
                    'phoneNumber' => $phoneNumber,
                    'userName' => $userName
                ]
            ];
        }

        # Request to delete one or more conference documents.
        static public function UserInstantConferencingDeleteConferenceDocumentListRequest($userId=null,$conferenceKey=null,$conferenceCallId=null,$documentId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId,
                    'conferenceKey' => $conferenceKey,
                    'conferenceCallId' => $conferenceCallId,
                    'documentId' => $documentId
                ]
            ];
        }

        # Request to delete one or more conferences which are owned by the user or the user's delegators.
        static public function UserInstantConferencingDeleteConferenceListRequest($userId=null,$conferenceKey=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId,
                    'conferenceKey' => $conferenceKey
                ]
            ];
        }

        # Request to delete one or more conference recordings owned by the user or the user's delegators.
        static public function UserInstantConferencingDeleteConferenceRecordingListRequest($userId=null,$recordingKey=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId,
                    'recordingKey' => $recordingKey
                ]
            ];
        }

        # End the presentation of a conference document.
        static public function UserInstantConferencingEndPresentationRequest($userId=null,$bridgeServiceUserId=null,$documentId=null,$accessCode=null,$slideName=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId,
                    'bridgeServiceUserId' => $bridgeServiceUserId,
                    'documentId' => $documentId,
                    'accessCode' => $accessCode,
                    'slideName' => $slideName
                ]
            ];
        }

        # Get a list of available bridge administrators who could be delegates of a user.
        static public function UserInstantConferencingGetAvailableBridgeDelegatesListRequest($userId=null,$bridgeServiceUserId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId,
                    'bridgeServiceUserId' => $bridgeServiceUserId
                ]
            ];
        }

        # Get the list of users who could are eligible to be owner of a conference.
        static public function UserInstantConferencingGetAvailableConferenceOwnerListRequest($userId=null,$bridgeServiceUserId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId,
                    'bridgeServiceUserId' => $bridgeServiceUserId
                ]
            ];
        }

        # Get a list of delegates of a bridge administrator.
        static public function UserInstantConferencingGetBridgeDelegatesListRequest($userId=null,$bridgeServiceUserId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId,
                    'bridgeServiceUserId' => $bridgeServiceUserId
                ]
            ];
        }

        # Get conference details reports.
        static public function UserInstantConferencingGetConferenceBridgeReportRequest($userId=null,$bridgeServiceUserId=null,$reportStartDate=null,$reportEndDate=null,$billingCode=null,$reportDeliveryEmailAddress=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId,
                    'bridgeServiceUserId' => $bridgeServiceUserId,
                    'reportStartDate' => $reportStartDate,
                    'reportEndDate' => $reportEndDate,
                    'billingCode' => $billingCode,
                    'reportDeliveryEmailAddress' => $reportDeliveryEmailAddress
                ]
            ];
        }

        # Get the information of a conference call owned or delegated by the user.
        static public function UserInstantConferencingGetConferenceCallRequest($userId=null,$conferenceKey=null,$conferenceCallId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId,
                    'conferenceKey' => $conferenceKey,
                    'conferenceCallId' => $conferenceCallId
                ]
            ];
        }

        # Get the list of conference documents.
        static public function UserInstantConferencingGetConferenceDocumentListRequest($userId=null,$conferenceKey=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId,
                    'conferenceKey' => $conferenceKey
                ]
            ];
        }

        # Get the list of recordings of a conference owned or delegated by the user.
        static public function UserInstantConferencingGetConferenceRecordingListRequest($userId=null,$conferenceKey=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId,
                    'conferenceKey' => $conferenceKey
                ]
            ];
        }

        # Get the information of a conference recording owned or delegated by the user.
        static public function UserInstantConferencingGetConferenceRecordingRequest14Sp9($userId=null,$recordingKey=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId,
                    'recordingKey' => $recordingKey
                ]
            ];
        }

        # Get the information of a conference owned or delegated by the user.
        static public function UserInstantConferencingGetConferenceRequest14Sp6($userId=null,$conferenceKey=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId,
                    'conferenceKey' => $conferenceKey
                ]
            ];
        }

        # Get the list of current conferences owned by the user or delegated by the user's delegators.
        static public function UserInstantConferencingGetCurrentConferenceListRequest($userId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId
                ]
            ];
        }

        # Get the list of expired conferences owned by the user or the user's delegators.
        static public function UserInstantConferencingGetExpiredConferenceListRequest($userId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId
                ]
            ];
        }

        # Get the list of future conferences owned by the user or the user's delegators.
        static public function UserInstantConferencingGetFutureConferenceListRequest($userId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId
                ]
            ];
        }

        # Get a list of Instant Conferencing instances for which a user has administrator privilege.
        static public function UserInstantConferencingGetInstanceListRequest($userId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId
                ]
            ];
        }

        # Get the information of a conference call owned or delegated by the user.
        static public function UserInstantConferencingGetStandAloneConferenceCallRequest($conferenceOwnerUserId=null,$conferenceKey=null,$conferenceCallId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'conferenceOwnerUserId' => $conferenceOwnerUserId,
                    'conferenceKey' => $conferenceKey,
                    'conferenceCallId' => $conferenceCallId
                ]
            ];
        }

        # Get the list of conference documents.
        static public function UserInstantConferencingGetStandAloneConferenceDocumentListRequest14($conferenceOwnerUserId=null,$conferenceKey=null,$isWebServerCollocated=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'conferenceOwnerUserId' => $conferenceOwnerUserId,
                    'conferenceKey' => $conferenceKey,
                    'isWebServerCollocated' => $isWebServerCollocated
                ]
            ];
        }

        # Get the information of a conference recording..
        static public function UserInstantConferencingGetStandAloneConferenceRecordingRequest($conferenceOwnerUserId=null,$recordingKey=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'conferenceOwnerUserId' => $conferenceOwnerUserId,
                    'recordingKey' => $recordingKey
                ]
            ];
        }

        # Get the information of a conference owned or delegated by the user.
        static public function UserInstantConferencingGetStandAloneConferenceRequest14Sp6($conferenceOwnerUserId=null,$conferenceKey=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'conferenceOwnerUserId' => $conferenceOwnerUserId,
                    'conferenceKey' => $conferenceKey
                ]
            ];
        }

        # Get slide show content of a recorded conference.
        static public function UserInstantConferencingGetStandAloneSlideShowContentRequest($bridgeServiceUserId=null,$conferenceOwnerUserId=null,$documentId=null,$slideshowPasswordHex=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'bridgeServiceUserId' => $bridgeServiceUserId,
                    'conferenceOwnerUserId' => $conferenceOwnerUserId,
                    'documentId' => $documentId,
                    'slideshowPasswordHex' => $slideshowPasswordHex
                ]
            ];
        }

        # Handles stand alone login. Return a set of information for the user.
        static public function UserInstantConferencingLoginStandAloneRequest($bridgeServiceUserId=null,$conferenceOwnerUserId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'bridgeServiceUserId' => $bridgeServiceUserId,
                    'conferenceOwnerUserId' => $conferenceOwnerUserId
                ]
            ];
        }

        # Assign a bridge administrator to be a user's delegates.
        static public function UserInstantConferencingModifyBridgeDelegatesRequest($userId=null,$bridgeServiceUserId=null,$bridgeDelegatesUserIdList=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId,
                    'bridgeServiceUserId' => $bridgeServiceUserId,
                    'bridgeDelegatesUserIdList' => $bridgeDelegatesUserIdList
                ]
            ];
        }

        # Modify the presentation password.
        static public function UserInstantConferencingModifyConferencePresentationPasswordRequest($userId=null,$conferenceKey=null,$presentationPassword=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId,
                    'conferenceKey' => $conferenceKey,
                    'presentationPassword' => $presentationPassword
                ]
            ];
        }

        # Modify the conference recording slideshow password.
        static public function UserInstantConferencingModifyConferenceRecordingSlideShowPasswordRequest($userId=null,$recordingKey=null,$recordingCallId=null,$slideShowPassword=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId,
                    'recordingKey' => $recordingKey,
                    'recordingCallId' => $recordingCallId,
                    'slideShowPassword' => $slideShowPassword
                ]
            ];
        }

        # Modify an existing conference.
        static public function UserInstantConferencingModifyConferenceRequest14($userId=null,$conferenceKey=null,$title=null,$leaderRequired=null,$leaderReleaseDropsParticipants=null,$announceCallers=null,$conferenceSchedule=null,$billingCode=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId,
                    'conferenceKey' => $conferenceKey,
                    'title' => $title,
                    'leaderRequired' => $leaderRequired,
                    'leaderReleaseDropsParticipants' => $leaderReleaseDropsParticipants,
                    'announceCallers' => $announceCallers,
                    'conferenceSchedule' => $conferenceSchedule,
                    'billingCode' => $billingCode
                ]
            ];
        }

        # Play a recording to a specified phone.
        static public function UserInstantConferencingPlayRecordingToPhoneRequest($userId=null,$recordingKey=null,$playBackPhoneNumber=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId,
                    'recordingKey' => $recordingKey,
                    'playBackPhoneNumber' => $playBackPhoneNumber
                ]
            ];
        }

        # Play a recording to a specified phone.
        static public function UserInstantConferencingPlayStandAloneRecordingToPhoneRequest($conferenceOwnerUserId=null,$recordingKey=null,$playBackPhoneNumber=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'conferenceOwnerUserId' => $conferenceOwnerUserId,
                    'recordingKey' => $recordingKey,
                    'playBackPhoneNumber' => $playBackPhoneNumber
                ]
            ];
        }

        # Set presentation slide name of a conference document.
        static public function UserInstantConferencingSetPresentationSlideNameRequest($userId=null,$bridgeServiceUserId=null,$documentId=null,$accessCode=null,$previousSlideName=null,$newSlideName=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId,
                    'bridgeServiceUserId' => $bridgeServiceUserId,
                    'documentId' => $documentId,
                    'accessCode' => $accessCode,
                    'previousSlideName' => $previousSlideName,
                    'newSlideName' => $newSlideName
                ]
            ];
        }

        # Set presentation slide number of a conference document.
        static public function UserInstantConferencingSetPresentationSlideNumberRequest($userId=null,$bridgeServiceUserId=null,$documentId=null,$accessCode=null,$slideName=null,$slideNumber=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId,
                    'bridgeServiceUserId' => $bridgeServiceUserId,
                    'documentId' => $documentId,
                    'accessCode' => $accessCode,
                    'slideName' => $slideName,
                    'slideNumber' => $slideNumber
                ]
            ];
        }

        # Start presentation of a conference document.
        static public function UserInstantConferencingStartPresentationRequest($userId=null,$bridgeServiceUserId=null,$accessCode=null,$documentId=null,$slideName=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId,
                    'bridgeServiceUserId' => $bridgeServiceUserId,
                    'accessCode' => $accessCode,
                    'documentId' => $documentId,
                    'slideName' => $slideName
                ]
            ];
        }

}