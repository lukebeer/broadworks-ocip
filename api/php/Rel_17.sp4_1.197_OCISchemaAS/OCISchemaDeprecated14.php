<?php
class OCISchemaDeprecated14 {
        # AuthenticationVerifyRequest is used to authenticate a user using the user Id and password. The response is a AuthenticationVerifyResponse or an ErrorResponse
        static public function AuthenticationVerifyRequest($userId=null,$password=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId,
                    'password' => $password
                ]
            ];
        }

        # Request the enterprise level data associated with Voice VPN.
        static public function EnterpriseVoiceVPNGetRequest($serviceProviderId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId
                ]
            ];
        }

        # Requests the configuration of a specified group access device.
        static public function GroupAccessDeviceGetRequest14($serviceProviderId=null,$groupId=null,$deviceName=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId,
                    'deviceName' => $deviceName
                ]
            ];
        }

        # Requests the configuration of a specified group access device.
        static public function GroupAccessDeviceGetRequest14sp3($serviceProviderId=null,$groupId=null,$deviceName=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId,
                    'deviceName' => $deviceName
                ]
            ];
        }

        # Requests the Group administrator's policy settings.
        static public function GroupAdminGetPolicyRequest($userId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId
                ]
            ];
        }

        # Add a Call Center instance to a group.
        static public function GroupCallCenterAddInstanceRequest14($serviceProviderId=null,$groupId=null,$serviceUserId=null,$serviceInstanceProfile=null,$policy=null,$huntAfterNoAnswer=null,$noAnswerNumberOfRings=null,$forwardAfterTimeout=null,$forwardTimeoutSeconds=null,$forwardToPhoneNumber=null,$enableVideo=null,$queueLength=null,$allowAgentLogoff=null,$playMusicOnHold=null,$playComfortMessage=null,$timeBetweenComfortMessagesSeconds=null,$enableGuardTimer=null,$guardTimerSeconds=null,$agentUserId=null,$allowCallWaitingForAgents=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId,
                    'serviceUserId' => $serviceUserId,
                    'serviceInstanceProfile' => $serviceInstanceProfile,
                    'policy' => $policy,
                    'huntAfterNoAnswer' => $huntAfterNoAnswer,
                    'noAnswerNumberOfRings' => $noAnswerNumberOfRings,
                    'forwardAfterTimeout' => $forwardAfterTimeout,
                    'forwardTimeoutSeconds' => $forwardTimeoutSeconds,
                    'forwardToPhoneNumber' => $forwardToPhoneNumber,
                    'enableVideo' => $enableVideo,
                    'queueLength' => $queueLength,
                    'allowAgentLogoff' => $allowAgentLogoff,
                    'playMusicOnHold' => $playMusicOnHold,
                    'playComfortMessage' => $playComfortMessage,
                    'timeBetweenComfortMessagesSeconds' => $timeBetweenComfortMessagesSeconds,
                    'enableGuardTimer' => $enableGuardTimer,
                    'guardTimerSeconds' => $guardTimerSeconds,
                    'agentUserId' => $agentUserId,
                    'allowCallWaitingForAgents' => $allowCallWaitingForAgents
                ]
            ];
        }

        # Add a Call Center instance to a group.
        static public function GroupCallCenterAddInstanceRequest14sp3($serviceProviderId=null,$groupId=null,$serviceUserId=null,$serviceInstanceProfile=null,$policy=null,$huntAfterNoAnswer=null,$noAnswerNumberOfRings=null,$forwardAfterTimeout=null,$forwardTimeoutSeconds=null,$forwardToPhoneNumber=null,$enableVideo=null,$queueLength=null,$allowAgentLogoff=null,$playMusicOnHold=null,$playComfortMessage=null,$timeBetweenComfortMessagesSeconds=null,$enableGuardTimer=null,$guardTimerSeconds=null,$agentUserId=null,$allowCallWaitingForAgents=null,$allowCallsToAgentsInWrapUp=null,$enableCallQueueWhenNoAgentsAvailable=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId,
                    'serviceUserId' => $serviceUserId,
                    'serviceInstanceProfile' => $serviceInstanceProfile,
                    'policy' => $policy,
                    'huntAfterNoAnswer' => $huntAfterNoAnswer,
                    'noAnswerNumberOfRings' => $noAnswerNumberOfRings,
                    'forwardAfterTimeout' => $forwardAfterTimeout,
                    'forwardTimeoutSeconds' => $forwardTimeoutSeconds,
                    'forwardToPhoneNumber' => $forwardToPhoneNumber,
                    'enableVideo' => $enableVideo,
                    'queueLength' => $queueLength,
                    'allowAgentLogoff' => $allowAgentLogoff,
                    'playMusicOnHold' => $playMusicOnHold,
                    'playComfortMessage' => $playComfortMessage,
                    'timeBetweenComfortMessagesSeconds' => $timeBetweenComfortMessagesSeconds,
                    'enableGuardTimer' => $enableGuardTimer,
                    'guardTimerSeconds' => $guardTimerSeconds,
                    'agentUserId' => $agentUserId,
                    'allowCallWaitingForAgents' => $allowCallWaitingForAgents,
                    'allowCallsToAgentsInWrapUp' => $allowCallsToAgentsInWrapUp,
                    'enableCallQueueWhenNoAgentsAvailable' => $enableCallQueueWhenNoAgentsAvailable
                ]
            ];
        }

        # Get a call center's announcement settings.
        static public function GroupCallCenterGetAnnouncementRequest($serviceUserId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceUserId' => $serviceUserId
                ]
            ];
        }

        # Request to get all the information of a Call Center instance.
        static public function GroupCallCenterGetInstanceRequest14($serviceUserId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceUserId' => $serviceUserId
                ]
            ];
        }

        # Request to get all the information of a Call Center instance.
        static public function GroupCallCenterGetInstanceRequest14sp3($serviceUserId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceUserId' => $serviceUserId
                ]
            ];
        }

        # Get Call Center queue and agent statistics.
        static public function GroupCallCenterGetInstanceStatisticsRequest13mp8($serviceUserId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceUserId' => $serviceUserId
                ]
            ];
        }

        # Get a list of supervisors assigned to a call center.
        static public function GroupCallCenterGetSupervisorListRequest($serviceUserId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceUserId' => $serviceUserId
                ]
            ];
        }

        # Modify a call center's announcement settings.
        static public function GroupCallCenterModifyAnnouncementRequest($serviceUserId=null,$entranceMessageSelection=null,$entranceMessageAudioFile=null,$entranceMessageVideoFile=null,$periodicComfortMessageSelection=null,$periodicComfortMessageAudioFile=null,$periodicComfortMessageVideoFile=null,$onHoldMessageSelection=null,$onHoldMessageAudioFile=null,$onHoldMessageVideoFile=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceUserId' => $serviceUserId,
                    'entranceMessageSelection' => $entranceMessageSelection,
                    'entranceMessageAudioFile' => $entranceMessageAudioFile,
                    'entranceMessageVideoFile' => $entranceMessageVideoFile,
                    'periodicComfortMessageSelection' => $periodicComfortMessageSelection,
                    'periodicComfortMessageAudioFile' => $periodicComfortMessageAudioFile,
                    'periodicComfortMessageVideoFile' => $periodicComfortMessageVideoFile,
                    'onHoldMessageSelection' => $onHoldMessageSelection,
                    'onHoldMessageAudioFile' => $onHoldMessageAudioFile,
                    'onHoldMessageVideoFile' => $onHoldMessageVideoFile
                ]
            ];
        }

        # Modify the Call Center statistics reporting frequency and destination.
        static public function GroupCallCenterModifyInstanceStatisticsReportingRequest($serviceUserId=null,$clearTodayStatistics=null,$generateDailyReport=null,$collectionPeriodMinutes=null,$reportingEmailAddress1=null,$reportingEmailAddress2=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceUserId' => $serviceUserId,
                    'clearTodayStatistics' => $clearTodayStatistics,
                    'generateDailyReport' => $generateDailyReport,
                    'collectionPeriodMinutes' => $collectionPeriodMinutes,
                    'reportingEmailAddress1' => $reportingEmailAddress1,
                    'reportingEmailAddress2' => $reportingEmailAddress2
                ]
            ];
        }

        # Replaces a list of users as supervisors for a call center.
        static public function GroupCallCenterModifySupervisorListRequest($serviceUserId=null,$reportingServerURL=null,$supervisorUserIdList=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceUserId' => $serviceUserId,
                    'reportingServerURL' => $reportingServerURL,
                    'supervisorUserIdList' => $supervisorUserIdList
                ]
            ];
        }

        # Get the calling line id settings for a group.
        static public function GroupCallingLineIdGetRequest($serviceProviderId=null,$groupId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId
                ]
            ];
        }

        # Modify the calling line id settings for a group.
        static public function GroupCallingLineIdModifyRequest($serviceProviderId=null,$groupId=null,$useGroupNumber=null,$useGroupName=null,$callingLineIdPhoneNumber=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId,
                    'useGroupNumber' => $useGroupNumber,
                    'useGroupName' => $useGroupName,
                    'callingLineIdPhoneNumber' => $callingLineIdPhoneNumber
                ]
            ];
        }

        # Request the group level data associated with Call Processing Policy.
        static public function GroupCallProcessingGetPolicyRequest14($serviceProviderId=null,$groupId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId
                ]
            ];
        }

        # Request the group level data associated with Call Processing Policy.
        static public function GroupCallProcessingGetPolicyRequest14sp1($serviceProviderId=null,$groupId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId
                ]
            ];
        }

        # Request the group level data associated with Call Processing Policy.
        static public function GroupCallProcessingGetPolicyRequest14sp4($serviceProviderId=null,$groupId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId
                ]
            ];
        }

        # Modify the group level data associated with Call Procesing Policy.
        static public function GroupCallProcessingModifyPolicyRequest14($serviceProviderId=null,$groupId=null,$useGroupSetting=null,$useMaxSimultaneousCalls=null,$maxSimultaneousCalls=null,$useMaxSimultaneousVideoCalls=null,$maxSimultaneousVideoCalls=null,$useMaxCallTimeForAnsweredCalls=null,$maxCallTimeForAnsweredCallsMinutes=null,$useMaxCallTimeForUnansweredCalls=null,$maxCallTimeForUnansweredCallsMinutes=null,$mediaPolicySelection=null,$supportedMediaSetName=null,$networkUsageSelection=null,$enforceGroupCallingLineIdentityRestriction=null,$allowEnterpriseGroupCallTypingForPrivateDialingPlan=null,$allowEnterpriseGroupCallTypingForPublicDialingPlan=null,$overrideCLIDRestrictionForExternalCallsViaPrivateDialingPlan=null,$enableEnterpriseExtensionDialing=null,$useMaxConcurrentRedirectedCalls=null,$maxConcurrentRedirectedCalls=null,$useMaxFindMeFollowMeDepth=null,$maxFindMeFollowMeDepth=null,$maxRedirectionDepth=null,$useMaxConcurrentFindMeFollowMeInvocations=null,$maxConcurrentFindMeFollowMeInvocations=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId,
                    'useGroupSetting' => $useGroupSetting,
                    'useMaxSimultaneousCalls' => $useMaxSimultaneousCalls,
                    'maxSimultaneousCalls' => $maxSimultaneousCalls,
                    'useMaxSimultaneousVideoCalls' => $useMaxSimultaneousVideoCalls,
                    'maxSimultaneousVideoCalls' => $maxSimultaneousVideoCalls,
                    'useMaxCallTimeForAnsweredCalls' => $useMaxCallTimeForAnsweredCalls,
                    'maxCallTimeForAnsweredCallsMinutes' => $maxCallTimeForAnsweredCallsMinutes,
                    'useMaxCallTimeForUnansweredCalls' => $useMaxCallTimeForUnansweredCalls,
                    'maxCallTimeForUnansweredCallsMinutes' => $maxCallTimeForUnansweredCallsMinutes,
                    'mediaPolicySelection' => $mediaPolicySelection,
                    'supportedMediaSetName' => $supportedMediaSetName,
                    'networkUsageSelection' => $networkUsageSelection,
                    'enforceGroupCallingLineIdentityRestriction' => $enforceGroupCallingLineIdentityRestriction,
                    'allowEnterpriseGroupCallTypingForPrivateDialingPlan' => $allowEnterpriseGroupCallTypingForPrivateDialingPlan,
                    'allowEnterpriseGroupCallTypingForPublicDialingPlan' => $allowEnterpriseGroupCallTypingForPublicDialingPlan,
                    'overrideCLIDRestrictionForExternalCallsViaPrivateDialingPlan' => $overrideCLIDRestrictionForExternalCallsViaPrivateDialingPlan,
                    'enableEnterpriseExtensionDialing' => $enableEnterpriseExtensionDialing,
                    'useMaxConcurrentRedirectedCalls' => $useMaxConcurrentRedirectedCalls,
                    'maxConcurrentRedirectedCalls' => $maxConcurrentRedirectedCalls,
                    'useMaxFindMeFollowMeDepth' => $useMaxFindMeFollowMeDepth,
                    'maxFindMeFollowMeDepth' => $maxFindMeFollowMeDepth,
                    'maxRedirectionDepth' => $maxRedirectionDepth,
                    'useMaxConcurrentFindMeFollowMeInvocations' => $useMaxConcurrentFindMeFollowMeInvocations,
                    'maxConcurrentFindMeFollowMeInvocations' => $maxConcurrentFindMeFollowMeInvocations
                ]
            ];
        }

        # Get the list of feature access codes for a group.
        static public function GroupFeatureAccessCodeGetListRequest($serviceProviderId=null,$groupId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId
                ]
            ];
        }

        # Get the profile for a group.
        static public function GroupGetRequest($serviceProviderId=null,$groupId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId
                ]
            ];
        }

        # Modify a list of feature access codes for a group.
        static public function GroupFeatureAccessCodeModifyListRequest($serviceProviderId=null,$groupId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId
                ]
            ];
        }

        # Add a Music On Hold Instance to a department.
        static public function GroupMusicOnHoldAddInstanceRequest14($serviceProviderId=null,$groupId=null,$department=null,$isActiveDuringCallHold=null,$isActiveDuringCallPark=null,$messageSelection=null,$accessDeviceEndpoint=null,$audioFile=null,$videoFile=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId,
                    'department' => $department,
                    'isActiveDuringCallHold' => $isActiveDuringCallHold,
                    'isActiveDuringCallPark' => $isActiveDuringCallPark,
                    'messageSelection' => $messageSelection,
                    'accessDeviceEndpoint' => $accessDeviceEndpoint,
                    'audioFile' => $audioFile,
                    'videoFile' => $videoFile
                ]
            ];
        }

        # Add a Music On Hold Instance to a department.
        static public function GroupMusicOnHoldAddInstanceRequest14sp4($serviceProviderId=null,$groupId=null,$department=null,$isActiveDuringCallHold=null,$isActiveDuringCallPark=null,$isActiveDuringBusyCampOn=null,$messageSelection=null,$accessDeviceEndpoint=null,$audioFile=null,$videoFile=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId,
                    'department' => $department,
                    'isActiveDuringCallHold' => $isActiveDuringCallHold,
                    'isActiveDuringCallPark' => $isActiveDuringCallPark,
                    'isActiveDuringBusyCampOn' => $isActiveDuringBusyCampOn,
                    'messageSelection' => $messageSelection,
                    'accessDeviceEndpoint' => $accessDeviceEndpoint,
                    'audioFile' => $audioFile,
                    'videoFile' => $videoFile
                ]
            ];
        }

        # Get a Music On Hold data for a group or department instance.
        static public function GroupMusicOnHoldGetInstanceRequest14($serviceProviderId=null,$groupId=null,$department=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId,
                    'department' => $department
                ]
            ];
        }

        # Get a Music On Hold data for a group or department instance.
        static public function GroupMusicOnHoldGetInstanceRequest14sp4($serviceProviderId=null,$groupId=null,$department=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId,
                    'department' => $department
                ]
            ];
        }

        # Modify data for a group or department Music On Hold Instance.
        static public function GroupMusicOnHoldModifyInstanceRequest14($serviceProviderId=null,$groupId=null,$department=null,$isActiveDuringCallHold=null,$isActiveDuringCallPark=null,$isActiveDuringBusyCampOn=null,$messageSelection=null,$accessDeviceEndpoint=null,$audioFile=null,$videoFile=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId,
                    'department' => $department,
                    'isActiveDuringCallHold' => $isActiveDuringCallHold,
                    'isActiveDuringCallPark' => $isActiveDuringCallPark,
                    'isActiveDuringBusyCampOn' => $isActiveDuringBusyCampOn,
                    'messageSelection' => $messageSelection,
                    'accessDeviceEndpoint' => $accessDeviceEndpoint,
                    'audioFile' => $audioFile,
                    'videoFile' => $videoFile
                ]
            ];
        }

        # Requests the Group's policy settings.
        static public function GroupPolicyGetRequest($serviceProviderId=null,$groupId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId
                ]
            ];
        }

        # Requests the Group's policy settings.
        static public function GroupPolicyGetRequest14sp1($serviceProviderId=null,$groupId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId
                ]
            ];
        }

        # Add a Trunk Group instance to a group.
        static public function GroupTrunkGroupAddInstanceRequest14($serviceProviderId=null,$groupId=null,$serviceUserId=null,$serviceInstanceProfile=null,$accessDeviceEndpoint=null,$maxActiveCalls=null,$maxIncomingCalls=null,$maxOutgoingCalls=null,$requireAuthentication=null,$sipAuthenticationUserName=null,$sipAuthenticationPassword=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId,
                    'serviceUserId' => $serviceUserId,
                    'serviceInstanceProfile' => $serviceInstanceProfile,
                    'accessDeviceEndpoint' => $accessDeviceEndpoint,
                    'maxActiveCalls' => $maxActiveCalls,
                    'maxIncomingCalls' => $maxIncomingCalls,
                    'maxOutgoingCalls' => $maxOutgoingCalls,
                    'requireAuthentication' => $requireAuthentication,
                    'sipAuthenticationUserName' => $sipAuthenticationUserName,
                    'sipAuthenticationPassword' => $sipAuthenticationPassword
                ]
            ];
        }

        # Add a Trunk Group instance to a group.
        static public function GroupTrunkGroupAddInstanceRequest14sp1($serviceProviderId=null,$groupId=null,$serviceUserId=null,$serviceInstanceProfile=null,$accessDeviceEndpoint=null,$maxActiveCalls=null,$maxIncomingCalls=null,$maxOutgoingCalls=null,$enableBursting=null,$burstingMaxActiveCalls=null,$burstingMaxIncomingCalls=null,$burstingMaxOutgoingCalls=null,$capacityExceededAction=null,$capacityExceededForwardAddress=null,$capacityExceededRerouteTrunkGroupId=null,$capacityExceededTrapInitialCalls=null,$capacityExceededTrapOffsetCalls=null,$unreachableDestinationAction=null,$unreachableDestinationForwardAddress=null,$unreachableDestinationRerouteTrunkGroupId=null,$unreachableDestinationTrapInitialCalls=null,$unreachableDestinationTrapOffsetCalls=null,$invitationTimeout=null,$requireAuthentication=null,$sipAuthenticationUserName=null,$sipAuthenticationPassword=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId,
                    'serviceUserId' => $serviceUserId,
                    'serviceInstanceProfile' => $serviceInstanceProfile,
                    'accessDeviceEndpoint' => $accessDeviceEndpoint,
                    'maxActiveCalls' => $maxActiveCalls,
                    'maxIncomingCalls' => $maxIncomingCalls,
                    'maxOutgoingCalls' => $maxOutgoingCalls,
                    'enableBursting' => $enableBursting,
                    'burstingMaxActiveCalls' => $burstingMaxActiveCalls,
                    'burstingMaxIncomingCalls' => $burstingMaxIncomingCalls,
                    'burstingMaxOutgoingCalls' => $burstingMaxOutgoingCalls,
                    'capacityExceededAction' => $capacityExceededAction,
                    'capacityExceededForwardAddress' => $capacityExceededForwardAddress,
                    'capacityExceededRerouteTrunkGroupId' => $capacityExceededRerouteTrunkGroupId,
                    'capacityExceededTrapInitialCalls' => $capacityExceededTrapInitialCalls,
                    'capacityExceededTrapOffsetCalls' => $capacityExceededTrapOffsetCalls,
                    'unreachableDestinationAction' => $unreachableDestinationAction,
                    'unreachableDestinationForwardAddress' => $unreachableDestinationForwardAddress,
                    'unreachableDestinationRerouteTrunkGroupId' => $unreachableDestinationRerouteTrunkGroupId,
                    'unreachableDestinationTrapInitialCalls' => $unreachableDestinationTrapInitialCalls,
                    'unreachableDestinationTrapOffsetCalls' => $unreachableDestinationTrapOffsetCalls,
                    'invitationTimeout' => $invitationTimeout,
                    'requireAuthentication' => $requireAuthentication,
                    'sipAuthenticationUserName' => $sipAuthenticationUserName,
                    'sipAuthenticationPassword' => $sipAuthenticationPassword
                ]
            ];
        }

        # Add a Trunk Group instance to a group.
        static public function GroupTrunkGroupAddInstanceRequest14sp4($serviceProviderId=null,$groupId=null,$name=null,$pilotUser=null,$department=null,$accessDevice=null,$maxActiveCalls=null,$maxIncomingCalls=null,$maxOutgoingCalls=null,$enableBursting=null,$burstingMaxActiveCalls=null,$burstingMaxIncomingCalls=null,$burstingMaxOutgoingCalls=null,$capacityExceededAction=null,$capacityExceededForwardAddress=null,$capacityExceededRerouteTrunkGroupKey=null,$capacityExceededTrapInitialCalls=null,$capacityExceededTrapOffsetCalls=null,$unreachableDestinationAction=null,$unreachableDestinationForwardAddress=null,$unreachableDestinationRerouteTrunkGroupKey=null,$unreachableDestinationTrapInitialCalls=null,$unreachableDestinationTrapOffsetCalls=null,$invitationTimeout=null,$requireAuthentication=null,$sipAuthenticationUserName=null,$sipAuthenticationPassword=null,$hostedUserId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId,
                    'name' => $name,
                    'pilotUser' => $pilotUser,
                    'department' => $department,
                    'accessDevice' => $accessDevice,
                    'maxActiveCalls' => $maxActiveCalls,
                    'maxIncomingCalls' => $maxIncomingCalls,
                    'maxOutgoingCalls' => $maxOutgoingCalls,
                    'enableBursting' => $enableBursting,
                    'burstingMaxActiveCalls' => $burstingMaxActiveCalls,
                    'burstingMaxIncomingCalls' => $burstingMaxIncomingCalls,
                    'burstingMaxOutgoingCalls' => $burstingMaxOutgoingCalls,
                    'capacityExceededAction' => $capacityExceededAction,
                    'capacityExceededForwardAddress' => $capacityExceededForwardAddress,
                    'capacityExceededRerouteTrunkGroupKey' => $capacityExceededRerouteTrunkGroupKey,
                    'capacityExceededTrapInitialCalls' => $capacityExceededTrapInitialCalls,
                    'capacityExceededTrapOffsetCalls' => $capacityExceededTrapOffsetCalls,
                    'unreachableDestinationAction' => $unreachableDestinationAction,
                    'unreachableDestinationForwardAddress' => $unreachableDestinationForwardAddress,
                    'unreachableDestinationRerouteTrunkGroupKey' => $unreachableDestinationRerouteTrunkGroupKey,
                    'unreachableDestinationTrapInitialCalls' => $unreachableDestinationTrapInitialCalls,
                    'unreachableDestinationTrapOffsetCalls' => $unreachableDestinationTrapOffsetCalls,
                    'invitationTimeout' => $invitationTimeout,
                    'requireAuthentication' => $requireAuthentication,
                    'sipAuthenticationUserName' => $sipAuthenticationUserName,
                    'sipAuthenticationPassword' => $sipAuthenticationPassword,
                    'hostedUserId' => $hostedUserId
                ]
            ];
        }

        # Add a Trunk Group instance to a group.
        static public function GroupTrunkGroupAddInstanceRequest14sp9($serviceProviderId=null,$groupId=null,$name=null,$pilotUser=null,$department=null,$accessDevice=null,$maxActiveCalls=null,$maxIncomingCalls=null,$maxOutgoingCalls=null,$enableBursting=null,$burstingMaxActiveCalls=null,$burstingMaxIncomingCalls=null,$burstingMaxOutgoingCalls=null,$capacityExceededAction=null,$capacityExceededForwardAddress=null,$capacityExceededRerouteTrunkGroupKey=null,$capacityExceededTrapInitialCalls=null,$capacityExceededTrapOffsetCalls=null,$unreachableDestinationAction=null,$unreachableDestinationForwardAddress=null,$unreachableDestinationRerouteTrunkGroupKey=null,$unreachableDestinationTrapInitialCalls=null,$unreachableDestinationTrapOffsetCalls=null,$invitationTimeout=null,$requireAuthentication=null,$sipAuthenticationUserName=null,$sipAuthenticationPassword=null,$hostedUserId=null,$trunkGroupIdentity=null,$otgDtgIdentity=null,$includeTrunkGroupIdentity=null,$includeDtgIdentity=null,$enableNetworkAddressIdentity=null,$allowUnscreenedCalls=null,$allowUnscreenedEmergencyCalls=null,$usePilotUserCallingLineIdentity=null,$usePilotUserChargeNumber=null,$callForwardingAlwaysAction=null,$callForwardingAlwaysForwardAddress=null,$callForwardingAlwaysRerouteTrunkGroupKey=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId,
                    'name' => $name,
                    'pilotUser' => $pilotUser,
                    'department' => $department,
                    'accessDevice' => $accessDevice,
                    'maxActiveCalls' => $maxActiveCalls,
                    'maxIncomingCalls' => $maxIncomingCalls,
                    'maxOutgoingCalls' => $maxOutgoingCalls,
                    'enableBursting' => $enableBursting,
                    'burstingMaxActiveCalls' => $burstingMaxActiveCalls,
                    'burstingMaxIncomingCalls' => $burstingMaxIncomingCalls,
                    'burstingMaxOutgoingCalls' => $burstingMaxOutgoingCalls,
                    'capacityExceededAction' => $capacityExceededAction,
                    'capacityExceededForwardAddress' => $capacityExceededForwardAddress,
                    'capacityExceededRerouteTrunkGroupKey' => $capacityExceededRerouteTrunkGroupKey,
                    'capacityExceededTrapInitialCalls' => $capacityExceededTrapInitialCalls,
                    'capacityExceededTrapOffsetCalls' => $capacityExceededTrapOffsetCalls,
                    'unreachableDestinationAction' => $unreachableDestinationAction,
                    'unreachableDestinationForwardAddress' => $unreachableDestinationForwardAddress,
                    'unreachableDestinationRerouteTrunkGroupKey' => $unreachableDestinationRerouteTrunkGroupKey,
                    'unreachableDestinationTrapInitialCalls' => $unreachableDestinationTrapInitialCalls,
                    'unreachableDestinationTrapOffsetCalls' => $unreachableDestinationTrapOffsetCalls,
                    'invitationTimeout' => $invitationTimeout,
                    'requireAuthentication' => $requireAuthentication,
                    'sipAuthenticationUserName' => $sipAuthenticationUserName,
                    'sipAuthenticationPassword' => $sipAuthenticationPassword,
                    'hostedUserId' => $hostedUserId,
                    'trunkGroupIdentity' => $trunkGroupIdentity,
                    'otgDtgIdentity' => $otgDtgIdentity,
                    'includeTrunkGroupIdentity' => $includeTrunkGroupIdentity,
                    'includeDtgIdentity' => $includeDtgIdentity,
                    'enableNetworkAddressIdentity' => $enableNetworkAddressIdentity,
                    'allowUnscreenedCalls' => $allowUnscreenedCalls,
                    'allowUnscreenedEmergencyCalls' => $allowUnscreenedEmergencyCalls,
                    'usePilotUserCallingLineIdentity' => $usePilotUserCallingLineIdentity,
                    'usePilotUserChargeNumber' => $usePilotUserChargeNumber,
                    'callForwardingAlwaysAction' => $callForwardingAlwaysAction,
                    'callForwardingAlwaysForwardAddress' => $callForwardingAlwaysForwardAddress,
                    'callForwardingAlwaysRerouteTrunkGroupKey' => $callForwardingAlwaysRerouteTrunkGroupKey
                ]
            ];
        }

        # Add a Trunk Group instance to a group.
        static public function GroupTrunkGroupAddInstanceRequest14sp9A($serviceProviderId=null,$groupId=null,$name=null,$pilotUser=null,$department=null,$accessDevice=null,$maxActiveCalls=null,$maxIncomingCalls=null,$maxOutgoingCalls=null,$enableBursting=null,$burstingMaxActiveCalls=null,$burstingMaxIncomingCalls=null,$burstingMaxOutgoingCalls=null,$capacityExceededAction=null,$capacityExceededForwardAddress=null,$capacityExceededRerouteTrunkGroupKey=null,$capacityExceededTrapInitialCalls=null,$capacityExceededTrapOffsetCalls=null,$unreachableDestinationAction=null,$unreachableDestinationForwardAddress=null,$unreachableDestinationRerouteTrunkGroupKey=null,$unreachableDestinationTrapInitialCalls=null,$unreachableDestinationTrapOffsetCalls=null,$invitationTimeout=null,$requireAuthentication=null,$sipAuthenticationUserName=null,$sipAuthenticationPassword=null,$hostedUserId=null,$trunkGroupIdentity=null,$otgDtgIdentity=null,$includeTrunkGroupIdentity=null,$includeDtgIdentity=null,$enableNetworkAddressIdentity=null,$allowUnscreenedCalls=null,$allowUnscreenedEmergencyCalls=null,$pilotUserCallingLineIdentityPolicy=null,$pilotUserChargeNumberPolicy=null,$callForwardingAlwaysAction=null,$callForwardingAlwaysForwardAddress=null,$callForwardingAlwaysRerouteTrunkGroupKey=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId,
                    'name' => $name,
                    'pilotUser' => $pilotUser,
                    'department' => $department,
                    'accessDevice' => $accessDevice,
                    'maxActiveCalls' => $maxActiveCalls,
                    'maxIncomingCalls' => $maxIncomingCalls,
                    'maxOutgoingCalls' => $maxOutgoingCalls,
                    'enableBursting' => $enableBursting,
                    'burstingMaxActiveCalls' => $burstingMaxActiveCalls,
                    'burstingMaxIncomingCalls' => $burstingMaxIncomingCalls,
                    'burstingMaxOutgoingCalls' => $burstingMaxOutgoingCalls,
                    'capacityExceededAction' => $capacityExceededAction,
                    'capacityExceededForwardAddress' => $capacityExceededForwardAddress,
                    'capacityExceededRerouteTrunkGroupKey' => $capacityExceededRerouteTrunkGroupKey,
                    'capacityExceededTrapInitialCalls' => $capacityExceededTrapInitialCalls,
                    'capacityExceededTrapOffsetCalls' => $capacityExceededTrapOffsetCalls,
                    'unreachableDestinationAction' => $unreachableDestinationAction,
                    'unreachableDestinationForwardAddress' => $unreachableDestinationForwardAddress,
                    'unreachableDestinationRerouteTrunkGroupKey' => $unreachableDestinationRerouteTrunkGroupKey,
                    'unreachableDestinationTrapInitialCalls' => $unreachableDestinationTrapInitialCalls,
                    'unreachableDestinationTrapOffsetCalls' => $unreachableDestinationTrapOffsetCalls,
                    'invitationTimeout' => $invitationTimeout,
                    'requireAuthentication' => $requireAuthentication,
                    'sipAuthenticationUserName' => $sipAuthenticationUserName,
                    'sipAuthenticationPassword' => $sipAuthenticationPassword,
                    'hostedUserId' => $hostedUserId,
                    'trunkGroupIdentity' => $trunkGroupIdentity,
                    'otgDtgIdentity' => $otgDtgIdentity,
                    'includeTrunkGroupIdentity' => $includeTrunkGroupIdentity,
                    'includeDtgIdentity' => $includeDtgIdentity,
                    'enableNetworkAddressIdentity' => $enableNetworkAddressIdentity,
                    'allowUnscreenedCalls' => $allowUnscreenedCalls,
                    'allowUnscreenedEmergencyCalls' => $allowUnscreenedEmergencyCalls,
                    'pilotUserCallingLineIdentityPolicy' => $pilotUserCallingLineIdentityPolicy,
                    'pilotUserChargeNumberPolicy' => $pilotUserChargeNumberPolicy,
                    'callForwardingAlwaysAction' => $callForwardingAlwaysAction,
                    'callForwardingAlwaysForwardAddress' => $callForwardingAlwaysForwardAddress,
                    'callForwardingAlwaysRerouteTrunkGroupKey' => $callForwardingAlwaysRerouteTrunkGroupKey
                ]
            ];
        }

        # Delete a Trunk Group Instance from a group.
        static public function GroupTrunkGroupDeleteInstanceRequest($serviceProviderId=null,$groupId=null,$serviceUserId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId,
                    'serviceUserId' => $serviceUserId
                ]
            ];
        }

        # Get a list of Trunk Groups for the group or enterprise.
        static public function GroupTrunkGroupGetInstanceListRequest14($serviceProviderId=null,$groupId=null,$onlyTrunkGroupsWithDevice=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId,
                    'onlyTrunkGroupsWithDevice' => $onlyTrunkGroupsWithDevice
                ]
            ];
        }

        # Get a Trunk Group Instance's profile.
        static public function GroupTrunkGroupGetInstanceRequest14($serviceUserId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceUserId' => $serviceUserId
                ]
            ];
        }

        # Get a Trunk Group Instance's profile.
        static public function GroupTrunkGroupGetInstanceRequest14sp1($serviceUserId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceUserId' => $serviceUserId
                ]
            ];
        }

        # Get a Trunk Group Instance's profile.
        static public function GroupTrunkGroupGetInstanceRequest14sp4($trunkGroupKey=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'trunkGroupKey' => $trunkGroupKey
                ]
            ];
        }

        # Get a Trunk Group Instance's profile.
        static public function GroupTrunkGroupGetInstanceRequest14sp5($trunkGroupKey=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'trunkGroupKey' => $trunkGroupKey
                ]
            ];
        }

        # Get a Trunk Group Instance's profile.
        static public function GroupTrunkGroupGetInstanceRequest14sp9($trunkGroupKey=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'trunkGroupKey' => $trunkGroupKey
                ]
            ];
        }

        # Get a Trunk Group Instance's profile.
        static public function GroupTrunkGroupGetInstanceRequest14sp9A($trunkGroupKey=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'trunkGroupKey' => $trunkGroupKey
                ]
            ];
        }

        # Get a list of user's on a Trunk Group Instance.
        static public function GroupTrunkGroupGetInstanceUserListRequest($serviceUserId=null,$responseSizeLimit=null,$searchCriteriaUserLastName=null,$searchCriteriaUserFirstName=null,$searchCriteriaDn=null,$searchCriteriaExactUserDepartment=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceUserId' => $serviceUserId,
                    'responseSizeLimit' => $responseSizeLimit,
                    'searchCriteriaUserLastName' => $searchCriteriaUserLastName,
                    'searchCriteriaUserFirstName' => $searchCriteriaUserFirstName,
                    'searchCriteriaDn' => $searchCriteriaDn,
                    'searchCriteriaExactUserDepartment' => $searchCriteriaExactUserDepartment
                ]
            ];
        }

        # Get the maximum permissible active trunk group calls for the group.
        static public function GroupTrunkGroupGetRequest($serviceProviderId=null,$groupId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId
                ]
            ];
        }

        # Get the maximum and bursting maximum permissible active trunk group calls for the group.
        static public function GroupTrunkGroupGetRequest14sp1($serviceProviderId=null,$groupId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId
                ]
            ];
        }

        # Modify the maximum and bursting maximum permissible active Trunk Group calls for the group.
        static public function GroupTrunkGroupModifyRequest($serviceProviderId=null,$groupId=null,$maxActiveCalls=null,$burstingMaxActiveCalls=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId,
                    'maxActiveCalls' => $maxActiveCalls,
                    'burstingMaxActiveCalls' => $burstingMaxActiveCalls
                ]
            ];
        }

        # Modify a Trunk Group Instance in a group.
        static public function GroupTrunkGroupModifyInstanceRequest14($serviceUserId=null,$serviceInstanceProfile=null,$accessDeviceEndpoint=null,$maxActiveCalls=null,$maxIncomingCalls=null,$maxOutgoingCalls=null,$enableBursting=null,$burstingMaxActiveCalls=null,$burstingMaxIncomingCalls=null,$burstingMaxOutgoingCalls=null,$capacityExceededAction=null,$capacityExceededForwardAddress=null,$capacityExceededRerouteTrunkGroupId=null,$capacityExceededTrapInitialCalls=null,$capacityExceededTrapOffsetCalls=null,$unreachableDestinationAction=null,$unreachableDestinationForwardAddress=null,$unreachableDestinationRerouteTrunkGroupId=null,$unreachableDestinationTrapInitialCalls=null,$unreachableDestinationTrapOffsetCalls=null,$invitationTimeout=null,$requireAuthentication=null,$sipAuthenticationUserName=null,$sipAuthenticationPassword=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceUserId' => $serviceUserId,
                    'serviceInstanceProfile' => $serviceInstanceProfile,
                    'accessDeviceEndpoint' => $accessDeviceEndpoint,
                    'maxActiveCalls' => $maxActiveCalls,
                    'maxIncomingCalls' => $maxIncomingCalls,
                    'maxOutgoingCalls' => $maxOutgoingCalls,
                    'enableBursting' => $enableBursting,
                    'burstingMaxActiveCalls' => $burstingMaxActiveCalls,
                    'burstingMaxIncomingCalls' => $burstingMaxIncomingCalls,
                    'burstingMaxOutgoingCalls' => $burstingMaxOutgoingCalls,
                    'capacityExceededAction' => $capacityExceededAction,
                    'capacityExceededForwardAddress' => $capacityExceededForwardAddress,
                    'capacityExceededRerouteTrunkGroupId' => $capacityExceededRerouteTrunkGroupId,
                    'capacityExceededTrapInitialCalls' => $capacityExceededTrapInitialCalls,
                    'capacityExceededTrapOffsetCalls' => $capacityExceededTrapOffsetCalls,
                    'unreachableDestinationAction' => $unreachableDestinationAction,
                    'unreachableDestinationForwardAddress' => $unreachableDestinationForwardAddress,
                    'unreachableDestinationRerouteTrunkGroupId' => $unreachableDestinationRerouteTrunkGroupId,
                    'unreachableDestinationTrapInitialCalls' => $unreachableDestinationTrapInitialCalls,
                    'unreachableDestinationTrapOffsetCalls' => $unreachableDestinationTrapOffsetCalls,
                    'invitationTimeout' => $invitationTimeout,
                    'requireAuthentication' => $requireAuthentication,
                    'sipAuthenticationUserName' => $sipAuthenticationUserName,
                    'sipAuthenticationPassword' => $sipAuthenticationPassword
                ]
            ];
        }

        # Modify a Trunk Group Instance in a group.
        static public function GroupTrunkGroupModifyInstanceRequest14sp4($trunkGroupKey=null,$newName=null,$pilotUserId=null,$department=null,$accessDevice=null,$maxActiveCalls=null,$maxIncomingCalls=null,$maxOutgoingCalls=null,$enableBursting=null,$burstingMaxActiveCalls=null,$burstingMaxIncomingCalls=null,$burstingMaxOutgoingCalls=null,$capacityExceededAction=null,$capacityExceededForwardAddress=null,$capacityExceededRerouteTrunkGroupKey=null,$capacityExceededTrapInitialCalls=null,$capacityExceededTrapOffsetCalls=null,$unreachableDestinationAction=null,$unreachableDestinationForwardAddress=null,$unreachableDestinationRerouteTrunkGroupKey=null,$unreachableDestinationTrapInitialCalls=null,$unreachableDestinationTrapOffsetCalls=null,$invitationTimeout=null,$requireAuthentication=null,$sipAuthenticationUserName=null,$sipAuthenticationPassword=null,$hostedUserIdList=null,$trunkGroupIdentity=null,$otgDtgIdentity=null,$includeTrunkGroupIdentity=null,$includeDtgIdentity=null,$enableNetworkAddressIdentity=null,$allowUnscreenedCalls=null,$allowUnscreenedEmergencyCalls=null,$usePilotUserCallingLineIdentity=null,$usePilotUserChargeNumber=null,$callForwardingAlwaysAction=null,$callForwardingAlwaysForwardAddress=null,$callForwardingAlwaysRerouteTrunkGroupKey=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'trunkGroupKey' => $trunkGroupKey,
                    'newName' => $newName,
                    'pilotUserId' => $pilotUserId,
                    'department' => $department,
                    'accessDevice' => $accessDevice,
                    'maxActiveCalls' => $maxActiveCalls,
                    'maxIncomingCalls' => $maxIncomingCalls,
                    'maxOutgoingCalls' => $maxOutgoingCalls,
                    'enableBursting' => $enableBursting,
                    'burstingMaxActiveCalls' => $burstingMaxActiveCalls,
                    'burstingMaxIncomingCalls' => $burstingMaxIncomingCalls,
                    'burstingMaxOutgoingCalls' => $burstingMaxOutgoingCalls,
                    'capacityExceededAction' => $capacityExceededAction,
                    'capacityExceededForwardAddress' => $capacityExceededForwardAddress,
                    'capacityExceededRerouteTrunkGroupKey' => $capacityExceededRerouteTrunkGroupKey,
                    'capacityExceededTrapInitialCalls' => $capacityExceededTrapInitialCalls,
                    'capacityExceededTrapOffsetCalls' => $capacityExceededTrapOffsetCalls,
                    'unreachableDestinationAction' => $unreachableDestinationAction,
                    'unreachableDestinationForwardAddress' => $unreachableDestinationForwardAddress,
                    'unreachableDestinationRerouteTrunkGroupKey' => $unreachableDestinationRerouteTrunkGroupKey,
                    'unreachableDestinationTrapInitialCalls' => $unreachableDestinationTrapInitialCalls,
                    'unreachableDestinationTrapOffsetCalls' => $unreachableDestinationTrapOffsetCalls,
                    'invitationTimeout' => $invitationTimeout,
                    'requireAuthentication' => $requireAuthentication,
                    'sipAuthenticationUserName' => $sipAuthenticationUserName,
                    'sipAuthenticationPassword' => $sipAuthenticationPassword,
                    'hostedUserIdList' => $hostedUserIdList,
                    'trunkGroupIdentity' => $trunkGroupIdentity,
                    'otgDtgIdentity' => $otgDtgIdentity,
                    'includeTrunkGroupIdentity' => $includeTrunkGroupIdentity,
                    'includeDtgIdentity' => $includeDtgIdentity,
                    'enableNetworkAddressIdentity' => $enableNetworkAddressIdentity,
                    'allowUnscreenedCalls' => $allowUnscreenedCalls,
                    'allowUnscreenedEmergencyCalls' => $allowUnscreenedEmergencyCalls,
                    'usePilotUserCallingLineIdentity' => $usePilotUserCallingLineIdentity,
                    'usePilotUserChargeNumber' => $usePilotUserChargeNumber,
                    'callForwardingAlwaysAction' => $callForwardingAlwaysAction,
                    'callForwardingAlwaysForwardAddress' => $callForwardingAlwaysForwardAddress,
                    'callForwardingAlwaysRerouteTrunkGroupKey' => $callForwardingAlwaysRerouteTrunkGroupKey
                ]
            ];
        }

        # Modify a Trunk Group Instance in a group.
        static public function GroupTrunkGroupModifyInstanceRequest14sp9A($trunkGroupKey=null,$newName=null,$pilotUserId=null,$department=null,$accessDevice=null,$maxActiveCalls=null,$maxIncomingCalls=null,$maxOutgoingCalls=null,$enableBursting=null,$burstingMaxActiveCalls=null,$burstingMaxIncomingCalls=null,$burstingMaxOutgoingCalls=null,$capacityExceededAction=null,$capacityExceededForwardAddress=null,$capacityExceededRerouteTrunkGroupKey=null,$capacityExceededTrapInitialCalls=null,$capacityExceededTrapOffsetCalls=null,$unreachableDestinationAction=null,$unreachableDestinationForwardAddress=null,$unreachableDestinationRerouteTrunkGroupKey=null,$unreachableDestinationTrapInitialCalls=null,$unreachableDestinationTrapOffsetCalls=null,$invitationTimeout=null,$requireAuthentication=null,$sipAuthenticationUserName=null,$sipAuthenticationPassword=null,$hostedUserIdList=null,$trunkGroupIdentity=null,$otgDtgIdentity=null,$includeTrunkGroupIdentity=null,$includeDtgIdentity=null,$enableNetworkAddressIdentity=null,$allowUnscreenedCalls=null,$allowUnscreenedEmergencyCalls=null,$pilotUserCallingLineIdentityPolicy=null,$pilotUserChargeNumberPolicy=null,$callForwardingAlwaysAction=null,$callForwardingAlwaysForwardAddress=null,$callForwardingAlwaysRerouteTrunkGroupKey=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'trunkGroupKey' => $trunkGroupKey,
                    'newName' => $newName,
                    'pilotUserId' => $pilotUserId,
                    'department' => $department,
                    'accessDevice' => $accessDevice,
                    'maxActiveCalls' => $maxActiveCalls,
                    'maxIncomingCalls' => $maxIncomingCalls,
                    'maxOutgoingCalls' => $maxOutgoingCalls,
                    'enableBursting' => $enableBursting,
                    'burstingMaxActiveCalls' => $burstingMaxActiveCalls,
                    'burstingMaxIncomingCalls' => $burstingMaxIncomingCalls,
                    'burstingMaxOutgoingCalls' => $burstingMaxOutgoingCalls,
                    'capacityExceededAction' => $capacityExceededAction,
                    'capacityExceededForwardAddress' => $capacityExceededForwardAddress,
                    'capacityExceededRerouteTrunkGroupKey' => $capacityExceededRerouteTrunkGroupKey,
                    'capacityExceededTrapInitialCalls' => $capacityExceededTrapInitialCalls,
                    'capacityExceededTrapOffsetCalls' => $capacityExceededTrapOffsetCalls,
                    'unreachableDestinationAction' => $unreachableDestinationAction,
                    'unreachableDestinationForwardAddress' => $unreachableDestinationForwardAddress,
                    'unreachableDestinationRerouteTrunkGroupKey' => $unreachableDestinationRerouteTrunkGroupKey,
                    'unreachableDestinationTrapInitialCalls' => $unreachableDestinationTrapInitialCalls,
                    'unreachableDestinationTrapOffsetCalls' => $unreachableDestinationTrapOffsetCalls,
                    'invitationTimeout' => $invitationTimeout,
                    'requireAuthentication' => $requireAuthentication,
                    'sipAuthenticationUserName' => $sipAuthenticationUserName,
                    'sipAuthenticationPassword' => $sipAuthenticationPassword,
                    'hostedUserIdList' => $hostedUserIdList,
                    'trunkGroupIdentity' => $trunkGroupIdentity,
                    'otgDtgIdentity' => $otgDtgIdentity,
                    'includeTrunkGroupIdentity' => $includeTrunkGroupIdentity,
                    'includeDtgIdentity' => $includeDtgIdentity,
                    'enableNetworkAddressIdentity' => $enableNetworkAddressIdentity,
                    'allowUnscreenedCalls' => $allowUnscreenedCalls,
                    'allowUnscreenedEmergencyCalls' => $allowUnscreenedEmergencyCalls,
                    'pilotUserCallingLineIdentityPolicy' => $pilotUserCallingLineIdentityPolicy,
                    'pilotUserChargeNumberPolicy' => $pilotUserChargeNumberPolicy,
                    'callForwardingAlwaysAction' => $callForwardingAlwaysAction,
                    'callForwardingAlwaysForwardAddress' => $callForwardingAlwaysForwardAddress,
                    'callForwardingAlwaysRerouteTrunkGroupKey' => $callForwardingAlwaysRerouteTrunkGroupKey
                ]
            ];
        }

        # Add a user creation task for a trunk group.
        static public function GroupTrunkGroupUserCreationTaskAddRequest($serviceUserId=null,$taskName=null,$userIdFormat=null,$userIdDomain=null,$populateExtension=null,$linePortFormat=null,$linePortDomain=null,$populateContact=null,$contactFormat=null,$contactDomain=null,$servicePackName=null,$userService=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceUserId' => $serviceUserId,
                    'taskName' => $taskName,
                    'userIdFormat' => $userIdFormat,
                    'userIdDomain' => $userIdDomain,
                    'populateExtension' => $populateExtension,
                    'linePortFormat' => $linePortFormat,
                    'linePortDomain' => $linePortDomain,
                    'populateContact' => $populateContact,
                    'contactFormat' => $contactFormat,
                    'contactDomain' => $contactDomain,
                    'servicePackName' => $servicePackName,
                    'userService' => $userService
                ]
            ];
        }

        # Delete a user creation task for a trunk group.
        static public function GroupTrunkGroupUserCreationTaskDeleteRequest($serviceUserId=null,$taskName=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceUserId' => $serviceUserId,
                    'taskName' => $taskName
                ]
            ];
        }

        # Get the list of user creation tasks for a trunk group.
        static public function GroupTrunkGroupUserCreationTaskGetListRequest($serviceUserId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceUserId' => $serviceUserId
                ]
            ];
        }

        # Request the details of a specified user creation task for a trunk group.
        static public function GroupTrunkGroupUserCreationTaskGetRequest($serviceUserId=null,$taskName=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceUserId' => $serviceUserId,
                    'taskName' => $taskName
                ]
            ];
        }

        # LoginRequest13mp10 is 2nd stage of the 2 stage OCI login process.
        static public function LoginRequest13mp10($userId=null,$signedPassword=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId,
                    'signedPassword' => $signedPassword
                ]
            ];
        }

        # Requests the group's voice portal passcode rules setting.
        static public function GroupVoiceMessagingGroupGetPasscodeRulesRequest($serviceProviderId=null,$groupId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId
                ]
            ];
        }

        # Requests the group's voice messaging settings
        static public function GroupVoiceMessagingGroupGetVoicePortalRequest14($serviceProviderId=null,$groupId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId
                ]
            ];
        }

        # Request to modify the group's voice portal passcode rules setting.
        static public function GroupVoiceMessagingGroupModifyPasscodeRulesRequest($serviceProviderId=null,$groupId=null,$useRuleLevel=null,$disallowRepeatedDigits=null,$disallowUserNumber=null,$disallowReversedUserNumber=null,$disallowOldPasscode=null,$disallowReversedOldPasscode=null,$minCodeLength=null,$maxCodeLength=null,$disableLoginAfterMaxFailedLoginAttempts=null,$maxFailedLoginAttempts=null,$expirePassword=null,$passcodeExpiresDays=null,$sendLoginDisabledNotifyEmail=null,$loginDisabledNotifyEmailAddress=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId,
                    'useRuleLevel' => $useRuleLevel,
                    'disallowRepeatedDigits' => $disallowRepeatedDigits,
                    'disallowUserNumber' => $disallowUserNumber,
                    'disallowReversedUserNumber' => $disallowReversedUserNumber,
                    'disallowOldPasscode' => $disallowOldPasscode,
                    'disallowReversedOldPasscode' => $disallowReversedOldPasscode,
                    'minCodeLength' => $minCodeLength,
                    'maxCodeLength' => $maxCodeLength,
                    'disableLoginAfterMaxFailedLoginAttempts' => $disableLoginAfterMaxFailedLoginAttempts,
                    'maxFailedLoginAttempts' => $maxFailedLoginAttempts,
                    'expirePassword' => $expirePassword,
                    'passcodeExpiresDays' => $passcodeExpiresDays,
                    'sendLoginDisabledNotifyEmail' => $sendLoginDisabledNotifyEmail,
                    'loginDisabledNotifyEmailAddress' => $loginDisabledNotifyEmailAddress
                ]
            ];
        }

        # Requests the configuration of a specified service provider access device.
        static public function ServiceProviderAccessDeviceGetRequest14($serviceProviderId=null,$deviceName=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'deviceName' => $deviceName
                ]
            ];
        }

        # Requests the configuration of a specified service provider access device.
        static public function ServiceProviderAccessDeviceGetRequest14sp3($serviceProviderId=null,$deviceName=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'deviceName' => $deviceName
                ]
            ];
        }

        # Request the service provider level data associated with Call Processing
        static public function ServiceProviderCallProcessingGetPolicyRequest14($serviceProviderId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId
                ]
            ];
        }

        # Request the service provider level data associated with Call Processing
        static public function ServiceProviderCallProcessingGetPolicyRequest14sp1($serviceProviderId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId
                ]
            ];
        }

        # Request the service provider level data associated with Call Processing
        static public function ServiceProviderCallProcessingGetPolicyRequest14sp4($serviceProviderId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId
                ]
            ];
        }

        # Modify the service provider level data associated with Call Procesing
        static public function ServiceProviderCallProcessingModifyPolicyRequest14($serviceProviderId=null,$useMaxSimultaneousCalls=null,$maxSimultaneousCalls=null,$useMaxSimultaneousVideoCalls=null,$maxSimultaneousVideoCalls=null,$useMaxCallTimeForAnsweredCalls=null,$maxCallTimeForAnsweredCallsMinutes=null,$useMaxCallTimeForUnansweredCalls=null,$maxCallTimeForUnansweredCallsMinutes=null,$mediaPolicySelection=null,$supportedMediaSetName=null,$networkUsageSelection=null,$enforceGroupCallingLineIdentityRestriction=null,$allowEnterpriseGroupCallTypingForPrivateDialingPlan=null,$allowEnterpriseGroupCallTypingForPublicDialingPlan=null,$overrideCLIDRestrictionForExternalCallsViaPrivateDialingPlan=null,$enableEnterpriseExtensionDialing=null,$enforceEnterpriseCallingLineIdentityRestriction=null,$useSettingLevel=null,$conferenceURI=null,$useMaxConcurrentRedirectedCalls=null,$maxConcurrentRedirectedCalls=null,$useMaxFindMeFollowMeDepth=null,$maxFindMeFollowMeDepth=null,$maxRedirectionDepth=null,$useMaxConcurrentFindMeFollowMeInvocations=null,$maxConcurrentFindMeFollowMeInvocations=null,$clidPolicy=null,$emergencyClidPolicy=null,$allowAlternateNumbersForRedirectingIdentity=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'useMaxSimultaneousCalls' => $useMaxSimultaneousCalls,
                    'maxSimultaneousCalls' => $maxSimultaneousCalls,
                    'useMaxSimultaneousVideoCalls' => $useMaxSimultaneousVideoCalls,
                    'maxSimultaneousVideoCalls' => $maxSimultaneousVideoCalls,
                    'useMaxCallTimeForAnsweredCalls' => $useMaxCallTimeForAnsweredCalls,
                    'maxCallTimeForAnsweredCallsMinutes' => $maxCallTimeForAnsweredCallsMinutes,
                    'useMaxCallTimeForUnansweredCalls' => $useMaxCallTimeForUnansweredCalls,
                    'maxCallTimeForUnansweredCallsMinutes' => $maxCallTimeForUnansweredCallsMinutes,
                    'mediaPolicySelection' => $mediaPolicySelection,
                    'supportedMediaSetName' => $supportedMediaSetName,
                    'networkUsageSelection' => $networkUsageSelection,
                    'enforceGroupCallingLineIdentityRestriction' => $enforceGroupCallingLineIdentityRestriction,
                    'allowEnterpriseGroupCallTypingForPrivateDialingPlan' => $allowEnterpriseGroupCallTypingForPrivateDialingPlan,
                    'allowEnterpriseGroupCallTypingForPublicDialingPlan' => $allowEnterpriseGroupCallTypingForPublicDialingPlan,
                    'overrideCLIDRestrictionForExternalCallsViaPrivateDialingPlan' => $overrideCLIDRestrictionForExternalCallsViaPrivateDialingPlan,
                    'enableEnterpriseExtensionDialing' => $enableEnterpriseExtensionDialing,
                    'enforceEnterpriseCallingLineIdentityRestriction' => $enforceEnterpriseCallingLineIdentityRestriction,
                    'useSettingLevel' => $useSettingLevel,
                    'conferenceURI' => $conferenceURI,
                    'useMaxConcurrentRedirectedCalls' => $useMaxConcurrentRedirectedCalls,
                    'maxConcurrentRedirectedCalls' => $maxConcurrentRedirectedCalls,
                    'useMaxFindMeFollowMeDepth' => $useMaxFindMeFollowMeDepth,
                    'maxFindMeFollowMeDepth' => $maxFindMeFollowMeDepth,
                    'maxRedirectionDepth' => $maxRedirectionDepth,
                    'useMaxConcurrentFindMeFollowMeInvocations' => $useMaxConcurrentFindMeFollowMeInvocations,
                    'maxConcurrentFindMeFollowMeInvocations' => $maxConcurrentFindMeFollowMeInvocations,
                    'clidPolicy' => $clidPolicy,
                    'emergencyClidPolicy' => $emergencyClidPolicy,
                    'allowAlternateNumbersForRedirectingIdentity' => $allowAlternateNumbersForRedirectingIdentity
                ]
            ];
        }

        # Request to modify the service provider's password rules settings
        static public function ServiceProviderPasswordRulesModifyRequest($serviceProviderId=null,$rulesApplyTo=null,$allowWebAddExternalAuthenticationUsers=null,$disallowUserId=null,$disallowOldPassword=null,$disallowReversedOldPassword=null,$restrictMinDigits=null,$minDigits=null,$restrictMinUpperCaseLetters=null,$minUpperCaseLetters=null,$restrictMinLowerCaseLetters=null,$minLowerCaseLetters=null,$restrictMinNonAlphanumericCharacters=null,$minNonAlphanumericCharacters=null,$minLength=null,$maxFailedLoginAttempts=null,$passwordExpiresDays=null,$sendLoginDisabledNotifyEmail=null,$loginDisabledNotifyEmailAddress=null,$disallowRulesModification=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'rulesApplyTo' => $rulesApplyTo,
                    'allowWebAddExternalAuthenticationUsers' => $allowWebAddExternalAuthenticationUsers,
                    'disallowUserId' => $disallowUserId,
                    'disallowOldPassword' => $disallowOldPassword,
                    'disallowReversedOldPassword' => $disallowReversedOldPassword,
                    'restrictMinDigits' => $restrictMinDigits,
                    'minDigits' => $minDigits,
                    'restrictMinUpperCaseLetters' => $restrictMinUpperCaseLetters,
                    'minUpperCaseLetters' => $minUpperCaseLetters,
                    'restrictMinLowerCaseLetters' => $restrictMinLowerCaseLetters,
                    'minLowerCaseLetters' => $minLowerCaseLetters,
                    'restrictMinNonAlphanumericCharacters' => $restrictMinNonAlphanumericCharacters,
                    'minNonAlphanumericCharacters' => $minNonAlphanumericCharacters,
                    'minLength' => $minLength,
                    'maxFailedLoginAttempts' => $maxFailedLoginAttempts,
                    'passwordExpiresDays' => $passwordExpiresDays,
                    'sendLoginDisabledNotifyEmail' => $sendLoginDisabledNotifyEmail,
                    'loginDisabledNotifyEmailAddress' => $loginDisabledNotifyEmailAddress,
                    'disallowRulesModification' => $disallowRulesModification
                ]
            ];
        }

        # Requests the details of a specified service pack migration task.
        static public function ServiceProviderServicePackMigrationTaskGetRequest($serviceProviderId=null,$taskName=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'taskName' => $taskName
                ]
            ];
        }

        # Get the maximum permissible active Trunk Group calls for the service provider.
        static public function ServiceProviderTrunkGroupGetRequest($serviceProviderId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId
                ]
            ];
        }

        # Requests the service provider's voice portal passcode rules setting.
        static public function ServiceProviderVoiceMessagingGroupGetPasscodeRulesRequest($serviceProviderId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId
                ]
            ];
        }

        # Request to modify the service provider's voice portal passcode rules setting.
        static public function ServiceProviderVoiceMessagingGroupModifyPasscodeRulesRequest($serviceProviderId=null,$disallowRepeatedDigits=null,$disallowUserNumber=null,$disallowReversedUserNumber=null,$disallowOldPasscode=null,$disallowReversedOldPasscode=null,$minCodeLength=null,$maxCodeLength=null,$disableLoginAfterMaxFailedLoginAttempts=null,$maxFailedLoginAttempts=null,$expirePassword=null,$passcodeExpiresDays=null,$sendLoginDisabledNotifyEmail=null,$loginDisabledNotifyEmailAddress=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'disallowRepeatedDigits' => $disallowRepeatedDigits,
                    'disallowUserNumber' => $disallowUserNumber,
                    'disallowReversedUserNumber' => $disallowReversedUserNumber,
                    'disallowOldPasscode' => $disallowOldPasscode,
                    'disallowReversedOldPasscode' => $disallowReversedOldPasscode,
                    'minCodeLength' => $minCodeLength,
                    'maxCodeLength' => $maxCodeLength,
                    'disableLoginAfterMaxFailedLoginAttempts' => $disableLoginAfterMaxFailedLoginAttempts,
                    'maxFailedLoginAttempts' => $maxFailedLoginAttempts,
                    'expirePassword' => $expirePassword,
                    'passcodeExpiresDays' => $passcodeExpiresDays,
                    'sendLoginDisabledNotifyEmail' => $sendLoginDisabledNotifyEmail,
                    'loginDisabledNotifyEmailAddress' => $loginDisabledNotifyEmailAddress
                ]
            ];
        }

        # Requests the configuration of a specified system access device.
        static public function SystemAccessDeviceGetRequest($deviceName=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'deviceName' => $deviceName
                ]
            ];
        }

        # Requests the configuration of a specified system access device.
        static public function SystemAccessDeviceGetRequest14sp3($deviceName=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'deviceName' => $deviceName
                ]
            ];
        }

        # Request to get the list of Application Server Registration system parameters.
        static public function SystemASRParametersGetRequest() {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => null
            ];
        }

        # Request to get the list of Application Server Registration system parameters.
        static public function SystemASRParametersGetRequest14sp5() {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => null
            ];
        }

        # Request to modify Application Server Registration system parameters.
        static public function SystemASRParametersModifyRequest($maxTransmissions=null,$retransmissionDelayMilliSeconds=null,$listeningPort=null,$sourceAddress=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'maxTransmissions' => $maxTransmissions,
                    'retransmissionDelayMilliSeconds' => $retransmissionDelayMilliSeconds,
                    'listeningPort' => $listeningPort,
                    'sourceAddress' => $sourceAddress
                ]
            ];
        }

        # Request the system's automatic callback attributes.
        static public function SystemAutomaticCallbackGetRequest() {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => null
            ];
        }

        # Modifies the system's automatic callback attributes.
        static public function SystemAutomaticCallbackModifyRequest($monitorMinutes=null,$waitBetweenRetryOriginatorMinutes=null,$maxMonitorsPerOriginator=null,$maxCallbackRings=null,$maxRetryOriginatorMinutes=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'monitorMinutes' => $monitorMinutes,
                    'waitBetweenRetryOriginatorMinutes' => $waitBetweenRetryOriginatorMinutes,
                    'maxMonitorsPerOriginator' => $maxMonitorsPerOriginator,
                    'maxCallbackRings' => $maxCallbackRings,
                    'maxRetryOriginatorMinutes' => $maxRetryOriginatorMinutes
                ]
            ];
        }

        # Add an OCI entry to the Broadworks Common Communication Transport (BCCT) protocol to interface mapping table.
        static public function SystemBCCTAddOCIInterfaceAddressRequest($interfaceNetAddress=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'interfaceNetAddress' => $interfaceNetAddress
                ]
            ];
        }

        # Delete an OCI entry in the Broadworks Common Communication Transport (BCCT) protocol to interface mapping table.
        static public function SystemBCCTDeleteOCIInterfaceAddressRequest($interfaceNetAddress=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'interfaceNetAddress' => $interfaceNetAddress
                ]
            ];
        }

        # Get the OCI entries from the Broadworks Common Communication Transport (BCCT) protocol to interface mapping list.
        static public function SystemBCCTGetOCIInterfaceAddressListRequest() {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => null
            ];
        }

        # Request the system level data associated with Call Center.
        static public function SystemCallCenterGetRequest() {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => null
            ];
        }

        # Request the system level data associated with Call Processing Policy.
        static public function SystemCallProcessingGetPolicyRequest14() {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => null
            ];
        }

        # Request the system level data associated with Call Processing Policy.
        static public function SystemCallProcessingGetPolicyRequest14sp1() {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => null
            ];
        }

        # Request the system level data associated with Call Processing Policy.
        static public function SystemCallProcessingGetPolicyRequest14sp4() {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => null
            ];
        }

        # Modify the system level data associated with Call Processing Policy.
        static public function SystemCallProcessingModifyPolicyRequest14($useMaxSimultaneousCalls=null,$maxSimultaneousCalls=null,$useMaxSimultaneousVideoCalls=null,$maxSimultaneousVideoCalls=null,$useMaxCallTimeForAnsweredCalls=null,$maxCallTimeForAnsweredCallsMinutes=null,$useMaxCallTimeForUnansweredCalls=null,$maxCallTimeForUnansweredCallsMinutes=null,$mediaPolicySelection=null,$supportedMediaSetName=null,$networkUsageSelection=null,$enforceGroupCallingLineIdentityRestriction=null,$enforceEnterpriseCallingLineIdentityRestriction=null,$allowEnterpriseGroupCallTypingForPrivateDialingPlan=null,$allowEnterpriseGroupCallTypingForPublicDialingPlan=null,$overrideCLIDRestrictionForExternalCallsViaPrivateDialingPlan=null,$enableEnterpriseExtensionDialing=null,$conferenceURI=null,$maxConferenceParties=null,$useMaxConcurrentRedirectedCalls=null,$maxConcurrentRedirectedCalls=null,$useMaxFindMeFollowMeDepth=null,$maxFindMeFollowMeDepth=null,$maxRedirectionDepth=null,$useMaxConcurrentFindMeFollowMeInvocations=null,$maxConcurrentFindMeFollowMeInvocations=null,$clidPolicy=null,$emergencyClidPolicy=null,$allowAlternateNumbersForRedirectingIdentity=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'useMaxSimultaneousCalls' => $useMaxSimultaneousCalls,
                    'maxSimultaneousCalls' => $maxSimultaneousCalls,
                    'useMaxSimultaneousVideoCalls' => $useMaxSimultaneousVideoCalls,
                    'maxSimultaneousVideoCalls' => $maxSimultaneousVideoCalls,
                    'useMaxCallTimeForAnsweredCalls' => $useMaxCallTimeForAnsweredCalls,
                    'maxCallTimeForAnsweredCallsMinutes' => $maxCallTimeForAnsweredCallsMinutes,
                    'useMaxCallTimeForUnansweredCalls' => $useMaxCallTimeForUnansweredCalls,
                    'maxCallTimeForUnansweredCallsMinutes' => $maxCallTimeForUnansweredCallsMinutes,
                    'mediaPolicySelection' => $mediaPolicySelection,
                    'supportedMediaSetName' => $supportedMediaSetName,
                    'networkUsageSelection' => $networkUsageSelection,
                    'enforceGroupCallingLineIdentityRestriction' => $enforceGroupCallingLineIdentityRestriction,
                    'enforceEnterpriseCallingLineIdentityRestriction' => $enforceEnterpriseCallingLineIdentityRestriction,
                    'allowEnterpriseGroupCallTypingForPrivateDialingPlan' => $allowEnterpriseGroupCallTypingForPrivateDialingPlan,
                    'allowEnterpriseGroupCallTypingForPublicDialingPlan' => $allowEnterpriseGroupCallTypingForPublicDialingPlan,
                    'overrideCLIDRestrictionForExternalCallsViaPrivateDialingPlan' => $overrideCLIDRestrictionForExternalCallsViaPrivateDialingPlan,
                    'enableEnterpriseExtensionDialing' => $enableEnterpriseExtensionDialing,
                    'conferenceURI' => $conferenceURI,
                    'maxConferenceParties' => $maxConferenceParties,
                    'useMaxConcurrentRedirectedCalls' => $useMaxConcurrentRedirectedCalls,
                    'maxConcurrentRedirectedCalls' => $maxConcurrentRedirectedCalls,
                    'useMaxFindMeFollowMeDepth' => $useMaxFindMeFollowMeDepth,
                    'maxFindMeFollowMeDepth' => $maxFindMeFollowMeDepth,
                    'maxRedirectionDepth' => $maxRedirectionDepth,
                    'useMaxConcurrentFindMeFollowMeInvocations' => $useMaxConcurrentFindMeFollowMeInvocations,
                    'maxConcurrentFindMeFollowMeInvocations' => $maxConcurrentFindMeFollowMeInvocations,
                    'clidPolicy' => $clidPolicy,
                    'emergencyClidPolicy' => $emergencyClidPolicy,
                    'allowAlternateNumbersForRedirectingIdentity' => $allowAlternateNumbersForRedirectingIdentity
                ]
            ];
        }

        # Get all the licensing information.
        static public function SystemLicensingGetRequest() {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => null
            ];
        }

        # Request to get the list of CAP system parameters.
        static public function SystemCAPParametersGetRequest() {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => null
            ];
        }

        # Add a device CPE config file server.
        static public function SystemCPEConfigAddFileServerRequest($deviceType=null,$ftpHostNetAddress=null,$ftpUserId=null,$ftpUserPassword=null,$cpeFileDirectory=null,$passiveFTP=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'deviceType' => $deviceType,
                    'ftpHostNetAddress' => $ftpHostNetAddress,
                    'ftpUserId' => $ftpUserId,
                    'ftpUserPassword' => $ftpUserPassword,
                    'cpeFileDirectory' => $cpeFileDirectory,
                    'passiveFTP' => $passiveFTP
                ]
            ];
        }

        # Requests the list of device CPE config file servers.
        static public function SystemCPEConfigGetFileServerListRequest() {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => null
            ];
        }

        # Modify a device CPE config file server.
        static public function SystemCPEConfigModifyFileServerRequest($deviceType=null,$ftpHostNetAddress=null,$ftpUserId=null,$ftpUserPassword=null,$cpeFileDirectory=null,$passiveFTP=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'deviceType' => $deviceType,
                    'ftpHostNetAddress' => $ftpHostNetAddress,
                    'ftpUserId' => $ftpUserId,
                    'ftpUserPassword' => $ftpUserPassword,
                    'cpeFileDirectory' => $cpeFileDirectory,
                    'passiveFTP' => $passiveFTP
                ]
            ];
        }

        # Request to get the list of CPE Config system parameters.
        static public function SystemCPEConfigParametersGetRequest() {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => null
            ];
        }

        # Request to get the list of Network Server Sync system parameters.
        static public function SystemNetworkServerSyncParametersGetRequest() {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => null
            ];
        }

        # Requests a list of non-obsolete Identity/device profile types defined in the system. It is possible
        static public function SystemDeviceTypeGetAvailableListRequest($allowConference=null,$allowMusicOnHold=null,$onlyConference=null,$onlyVideoCapable=null,$onlyOptionalIpAddress=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'allowConference' => $allowConference,
                    'allowMusicOnHold' => $allowMusicOnHold,
                    'onlyConference' => $onlyConference,
                    'onlyVideoCapable' => $onlyVideoCapable,
                    'onlyOptionalIpAddress' => $onlyOptionalIpAddress
                ]
            ];
        }

        # Requests a list of non-obsolete Identity/device profile types defined in the system. It is possible
        static public function SystemDeviceTypeGetAvailableListRequest14sp1($allowConference=null,$allowMusicOnHold=null,$onlyConference=null,$onlyVideoCapable=null,$onlyOptionalIpAddress=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'allowConference' => $allowConference,
                    'allowMusicOnHold' => $allowMusicOnHold,
                    'onlyConference' => $onlyConference,
                    'onlyVideoCapable' => $onlyVideoCapable,
                    'onlyOptionalIpAddress' => $onlyOptionalIpAddress
                ]
            ];
        }

        # Requests the information about the specified device type without regard to whether the
        static public function SystemDeviceTypeGetRequest($deviceType=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'deviceType' => $deviceType
                ]
            ];
        }

        # Requests the information about the specified device type without regard to whether the
        static public function SystemDeviceTypeGetRequest14sp3($deviceType=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'deviceType' => $deviceType
                ]
            ];
        }

        # Get the utilization of a single DN.
        static public function SystemDnGetUtilizationRequest($phoneNumber=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'phoneNumber' => $phoneNumber
                ]
            ];
        }

        # Add an entry to the external authentication access control list.
        static public function SystemExternalAuthenticationAddACLEntryRequest($netAddress=null,$description=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'netAddress' => $netAddress,
                    'description' => $description
                ]
            ];
        }

        # Delete an entry from the external authentication access control list.
        static public function SystemExternalAuthenticationDeleteACLEntryRequest($netAddress=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'netAddress' => $netAddress
                ]
            ];
        }

        # Modify an entry from the external authentication access control list.
        static public function SystemExternalAuthenticationModifyACLEntryRequest($netAddress=null,$description=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'netAddress' => $netAddress,
                    'description' => $description
                ]
            ];
        }

        # Add an application to the OCI call control application list.
        static public function SystemOCICallControlApplicationAddRequest($applicationId=null,$enableSystemWide=null,$description=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'applicationId' => $applicationId,
                    'enableSystemWide' => $enableSystemWide,
                    'description' => $description
                ]
            ];
        }

        # Request to get the list of OCIReporting system parameters.
        static public function SystemOCIReportingParametersGetRequest() {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => null
            ];
        }

        # Request to modify the system providers password rule
        static public function SystemPasswordRulesModifyRequest($rulesApplyTo=null,$allowWebAddExternalAuthenticationUsers=null,$disallowUserId=null,$disallowOldPassword=null,$disallowReversedOldPassword=null,$restrictMinDigits=null,$minDigits=null,$restrictMinUpperCaseLetters=null,$minUpperCaseLetters=null,$restrictMinLowerCaseLetters=null,$minLowerCaseLetters=null,$restrictMinNonAlphanumericCharacters=null,$minNonAlphanumericCharacters=null,$minLength=null,$maxFailedLoginAttempts=null,$passwordExpiresDays=null,$sendLoginDisabledNotifyEmail=null,$loginDisabledNotifyEmailAddress=null,$disallowRulesModification=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'rulesApplyTo' => $rulesApplyTo,
                    'allowWebAddExternalAuthenticationUsers' => $allowWebAddExternalAuthenticationUsers,
                    'disallowUserId' => $disallowUserId,
                    'disallowOldPassword' => $disallowOldPassword,
                    'disallowReversedOldPassword' => $disallowReversedOldPassword,
                    'restrictMinDigits' => $restrictMinDigits,
                    'minDigits' => $minDigits,
                    'restrictMinUpperCaseLetters' => $restrictMinUpperCaseLetters,
                    'minUpperCaseLetters' => $minUpperCaseLetters,
                    'restrictMinLowerCaseLetters' => $restrictMinLowerCaseLetters,
                    'minLowerCaseLetters' => $minLowerCaseLetters,
                    'restrictMinNonAlphanumericCharacters' => $restrictMinNonAlphanumericCharacters,
                    'minNonAlphanumericCharacters' => $minNonAlphanumericCharacters,
                    'minLength' => $minLength,
                    'maxFailedLoginAttempts' => $maxFailedLoginAttempts,
                    'passwordExpiresDays' => $passwordExpiresDays,
                    'sendLoginDisabledNotifyEmail' => $sendLoginDisabledNotifyEmail,
                    'loginDisabledNotifyEmailAddress' => $loginDisabledNotifyEmailAddress,
                    'disallowRulesModification' => $disallowRulesModification
                ]
            ];
        }

        # Requests the system's default policy settings.
        static public function SystemPolicyGetDefaultRequest14() {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => null
            ];
        }

        # Requests the system's default policy settings.
        static public function SystemPolicyGetDefaultRequest14sp1() {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => null
            ];
        }

        # Request to get the system's provisioning validation attributes.
        static public function SystemProvisioningValidationGetRequest() {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => null
            ];
        }

        # Request the system level data associated with session audit.
        static public function SystemSessionAuditGetRequest() {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => null
            ];
        }

        # Modify the system level data associated with session sudit.
        static public function SystemSessionAuditModifyRequest($isActive=null,$intervalSeconds=null,$timeoutPeriodSeconds=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'isActive' => $isActive,
                    'intervalSeconds' => $intervalSeconds,
                    'timeoutPeriodSeconds' => $timeoutPeriodSeconds
                ]
            ];
        }

        # Add an entry to the SIP access control list.
        static public function SystemSIPAddACLEntryRequest14($netAddress=null,$transportProtocol=null,$description=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'netAddress' => $netAddress,
                    'transportProtocol' => $transportProtocol,
                    'description' => $description
                ]
            ];
        }

        # Delete an entry from the SIP access control list.
        static public function SystemSIPDeleteACLEntryRequest($netAddress=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'netAddress' => $netAddress
                ]
            ];
        }

        # Request to add a sip device type.
        static public function SystemSIPDeviceTypeAddRequest($deviceType=null,$numberOfPorts=null,$profile=null,$registrationCapable=null,$isConferenceDevice=null,$isMusicOnHoldDevice=null,$authenticationOverride=null,$RFC3264Hold=null,$isTrusted=null,$E164Capable=null,$routeAdvance=null,$forwardingOverride=null,$wirelessIntegration=null,$webBasedConfigURL=null,$isVideoCapable=null,$PBXIntegration=null,$useBusinessTrunkingContact=null,$staticRegistrationCapable=null,$cpeDeviceOptions=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'deviceType' => $deviceType,
                    'numberOfPorts' => $numberOfPorts,
                    'profile' => $profile,
                    'registrationCapable' => $registrationCapable,
                    'isConferenceDevice' => $isConferenceDevice,
                    'isMusicOnHoldDevice' => $isMusicOnHoldDevice,
                    'authenticationOverride' => $authenticationOverride,
                    'RFC3264Hold' => $RFC3264Hold,
                    'isTrusted' => $isTrusted,
                    'E164Capable' => $E164Capable,
                    'routeAdvance' => $routeAdvance,
                    'forwardingOverride' => $forwardingOverride,
                    'wirelessIntegration' => $wirelessIntegration,
                    'webBasedConfigURL' => $webBasedConfigURL,
                    'isVideoCapable' => $isVideoCapable,
                    'PBXIntegration' => $PBXIntegration,
                    'useBusinessTrunkingContact' => $useBusinessTrunkingContact,
                    'staticRegistrationCapable' => $staticRegistrationCapable,
                    'cpeDeviceOptions' => $cpeDeviceOptions
                ]
            ];
        }

        # Request to add a sip device type.
        static public function SystemSIPDeviceTypeAddRequest14sp1($deviceType=null,$numberOfPorts=null,$profile=null,$registrationCapable=null,$isConferenceDevice=null,$isMusicOnHoldDevice=null,$authenticationOverride=null,$RFC3264Hold=null,$isTrusted=null,$E164Capable=null,$routeAdvance=null,$forwardingOverride=null,$wirelessIntegration=null,$webBasedConfigURL=null,$isVideoCapable=null,$PBXIntegration=null,$useBusinessTrunkingContact=null,$staticRegistrationCapable=null,$cpeDeviceOptions=null,$earlyMediaSupport=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'deviceType' => $deviceType,
                    'numberOfPorts' => $numberOfPorts,
                    'profile' => $profile,
                    'registrationCapable' => $registrationCapable,
                    'isConferenceDevice' => $isConferenceDevice,
                    'isMusicOnHoldDevice' => $isMusicOnHoldDevice,
                    'authenticationOverride' => $authenticationOverride,
                    'RFC3264Hold' => $RFC3264Hold,
                    'isTrusted' => $isTrusted,
                    'E164Capable' => $E164Capable,
                    'routeAdvance' => $routeAdvance,
                    'forwardingOverride' => $forwardingOverride,
                    'wirelessIntegration' => $wirelessIntegration,
                    'webBasedConfigURL' => $webBasedConfigURL,
                    'isVideoCapable' => $isVideoCapable,
                    'PBXIntegration' => $PBXIntegration,
                    'useBusinessTrunkingContact' => $useBusinessTrunkingContact,
                    'staticRegistrationCapable' => $staticRegistrationCapable,
                    'cpeDeviceOptions' => $cpeDeviceOptions,
                    'earlyMediaSupport' => $earlyMediaSupport
                ]
            ];
        }

        # Request to add a sip device type.
        static public function SystemSIPDeviceTypeAddRequest14sp2($deviceType=null,$numberOfPorts=null,$profile=null,$registrationCapable=null,$isConferenceDevice=null,$isMusicOnHoldDevice=null,$RFC3264Hold=null,$isTrusted=null,$E164Capable=null,$routeAdvance=null,$forwardingOverride=null,$wirelessIntegration=null,$webBasedConfigURL=null,$isVideoCapable=null,$PBXIntegration=null,$useBusinessTrunkingContact=null,$staticRegistrationCapable=null,$cpeDeviceOptions=null,$earlyMediaSupport=null,$authenticateRefer=null,$autoConfigSoftClient=null,$authenticationMode=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'deviceType' => $deviceType,
                    'numberOfPorts' => $numberOfPorts,
                    'profile' => $profile,
                    'registrationCapable' => $registrationCapable,
                    'isConferenceDevice' => $isConferenceDevice,
                    'isMusicOnHoldDevice' => $isMusicOnHoldDevice,
                    'RFC3264Hold' => $RFC3264Hold,
                    'isTrusted' => $isTrusted,
                    'E164Capable' => $E164Capable,
                    'routeAdvance' => $routeAdvance,
                    'forwardingOverride' => $forwardingOverride,
                    'wirelessIntegration' => $wirelessIntegration,
                    'webBasedConfigURL' => $webBasedConfigURL,
                    'isVideoCapable' => $isVideoCapable,
                    'PBXIntegration' => $PBXIntegration,
                    'useBusinessTrunkingContact' => $useBusinessTrunkingContact,
                    'staticRegistrationCapable' => $staticRegistrationCapable,
                    'cpeDeviceOptions' => $cpeDeviceOptions,
                    'earlyMediaSupport' => $earlyMediaSupport,
                    'authenticateRefer' => $authenticateRefer,
                    'autoConfigSoftClient' => $autoConfigSoftClient,
                    'authenticationMode' => $authenticationMode
                ]
            ];
        }

        # Request to add a sip device type.
        static public function SystemSIPDeviceTypeAddRequest14sp3($deviceType=null,$numberOfPorts=null,$profile=null,$registrationCapable=null,$isConferenceDevice=null,$isMobilityManagerDevice=null,$isMusicOnHoldDevice=null,$RFC3264Hold=null,$isTrusted=null,$E164Capable=null,$routeAdvance=null,$forwardingOverride=null,$wirelessIntegration=null,$webBasedConfigURL=null,$isVideoCapable=null,$PBXIntegration=null,$useBusinessTrunkingContact=null,$staticRegistrationCapable=null,$cpeDeviceOptions=null,$earlyMediaSupport=null,$authenticateRefer=null,$autoConfigSoftClient=null,$authenticationMode=null,$tdmOverlay=null,$supportsBroadWorksINFOForCallWaiting=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'deviceType' => $deviceType,
                    'numberOfPorts' => $numberOfPorts,
                    'profile' => $profile,
                    'registrationCapable' => $registrationCapable,
                    'isConferenceDevice' => $isConferenceDevice,
                    'isMobilityManagerDevice' => $isMobilityManagerDevice,
                    'isMusicOnHoldDevice' => $isMusicOnHoldDevice,
                    'RFC3264Hold' => $RFC3264Hold,
                    'isTrusted' => $isTrusted,
                    'E164Capable' => $E164Capable,
                    'routeAdvance' => $routeAdvance,
                    'forwardingOverride' => $forwardingOverride,
                    'wirelessIntegration' => $wirelessIntegration,
                    'webBasedConfigURL' => $webBasedConfigURL,
                    'isVideoCapable' => $isVideoCapable,
                    'PBXIntegration' => $PBXIntegration,
                    'useBusinessTrunkingContact' => $useBusinessTrunkingContact,
                    'staticRegistrationCapable' => $staticRegistrationCapable,
                    'cpeDeviceOptions' => $cpeDeviceOptions,
                    'earlyMediaSupport' => $earlyMediaSupport,
                    'authenticateRefer' => $authenticateRefer,
                    'autoConfigSoftClient' => $autoConfigSoftClient,
                    'authenticationMode' => $authenticationMode,
                    'tdmOverlay' => $tdmOverlay,
                    'supportsBroadWorksINFOForCallWaiting' => $supportsBroadWorksINFOForCallWaiting
                ]
            ];
        }

        # Request to add a sip device type.
        static public function SystemSIPDeviceTypeAddRequest14sp6($deviceType=null,$numberOfPorts=null,$profile=null,$registrationCapable=null,$isConferenceDevice=null,$isMobilityManagerDevice=null,$isMusicOnHoldDevice=null,$RFC3264Hold=null,$isTrusted=null,$E164Capable=null,$routeAdvance=null,$forwardingOverride=null,$wirelessIntegration=null,$webBasedConfigURL=null,$isVideoCapable=null,$PBXIntegration=null,$useBusinessTrunkingContact=null,$staticRegistrationCapable=null,$cpeDeviceOptions=null,$earlyMediaSupport=null,$authenticateRefer=null,$autoConfigSoftClient=null,$authenticationMode=null,$tdmOverlay=null,$supportsBroadWorksINFOForCallWaiting=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'deviceType' => $deviceType,
                    'numberOfPorts' => $numberOfPorts,
                    'profile' => $profile,
                    'registrationCapable' => $registrationCapable,
                    'isConferenceDevice' => $isConferenceDevice,
                    'isMobilityManagerDevice' => $isMobilityManagerDevice,
                    'isMusicOnHoldDevice' => $isMusicOnHoldDevice,
                    'RFC3264Hold' => $RFC3264Hold,
                    'isTrusted' => $isTrusted,
                    'E164Capable' => $E164Capable,
                    'routeAdvance' => $routeAdvance,
                    'forwardingOverride' => $forwardingOverride,
                    'wirelessIntegration' => $wirelessIntegration,
                    'webBasedConfigURL' => $webBasedConfigURL,
                    'isVideoCapable' => $isVideoCapable,
                    'PBXIntegration' => $PBXIntegration,
                    'useBusinessTrunkingContact' => $useBusinessTrunkingContact,
                    'staticRegistrationCapable' => $staticRegistrationCapable,
                    'cpeDeviceOptions' => $cpeDeviceOptions,
                    'earlyMediaSupport' => $earlyMediaSupport,
                    'authenticateRefer' => $authenticateRefer,
                    'autoConfigSoftClient' => $autoConfigSoftClient,
                    'authenticationMode' => $authenticationMode,
                    'tdmOverlay' => $tdmOverlay,
                    'supportsBroadWorksINFOForCallWaiting' => $supportsBroadWorksINFOForCallWaiting
                ]
            ];
        }

        # Request to get a sip device type.
        static public function SystemSIPDeviceTypeGetRequest($deviceType=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'deviceType' => $deviceType
                ]
            ];
        }

        # Request to get a sip device type.
        static public function SystemSIPDeviceTypeGetRequest14sp1($deviceType=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'deviceType' => $deviceType
                ]
            ];
        }

        # Request to get a sip device type.
        static public function SystemSIPDeviceTypeGetRequest14sp2($deviceType=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'deviceType' => $deviceType
                ]
            ];
        }

        # Request to get a sip device type.
        static public function SystemSIPDeviceTypeGetRequest14sp6($deviceType=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'deviceType' => $deviceType
                ]
            ];
        }

        # Request to get a sip device type.
        static public function SystemSIPDeviceTypeGetRequest14sp3($deviceType=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'deviceType' => $deviceType
                ]
            ];
        }

        # Request to modify a sip device type.
        static public function SystemSIPDeviceTypeModifyRequest($deviceType=null,$isObsolete=null,$registrationCapable=null,$authenticationOverride=null,$RFC3264Hold=null,$isTrusted=null,$E164Capable=null,$routeAdvance=null,$forwardingOverride=null,$wirelessIntegration=null,$webBasedConfigURL=null,$isVideoCapable=null,$PBXIntegration=null,$useBusinessTrunkingContact=null,$staticRegistrationCapable=null,$cpeDeviceOptions=null,$earlyMediaSupport=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'deviceType' => $deviceType,
                    'isObsolete' => $isObsolete,
                    'registrationCapable' => $registrationCapable,
                    'authenticationOverride' => $authenticationOverride,
                    'RFC3264Hold' => $RFC3264Hold,
                    'isTrusted' => $isTrusted,
                    'E164Capable' => $E164Capable,
                    'routeAdvance' => $routeAdvance,
                    'forwardingOverride' => $forwardingOverride,
                    'wirelessIntegration' => $wirelessIntegration,
                    'webBasedConfigURL' => $webBasedConfigURL,
                    'isVideoCapable' => $isVideoCapable,
                    'PBXIntegration' => $PBXIntegration,
                    'useBusinessTrunkingContact' => $useBusinessTrunkingContact,
                    'staticRegistrationCapable' => $staticRegistrationCapable,
                    'cpeDeviceOptions' => $cpeDeviceOptions,
                    'earlyMediaSupport' => $earlyMediaSupport
                ]
            ];
        }

        # Request to modify a sip device type.
        static public function SystemSIPDeviceTypeModifyRequest14sp2($deviceType=null,$isObsolete=null,$registrationCapable=null,$RFC3264Hold=null,$isTrusted=null,$E164Capable=null,$routeAdvance=null,$forwardingOverride=null,$wirelessIntegration=null,$webBasedConfigURL=null,$isVideoCapable=null,$PBXIntegration=null,$useBusinessTrunkingContact=null,$staticRegistrationCapable=null,$cpeDeviceOptions=null,$earlyMediaSupport=null,$authenticateRefer=null,$autoConfigSoftClient=null,$authenticationMode=null,$tdmOverlay=null,$supportsBroadWorksINFOForCallWaiting=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'deviceType' => $deviceType,
                    'isObsolete' => $isObsolete,
                    'registrationCapable' => $registrationCapable,
                    'RFC3264Hold' => $RFC3264Hold,
                    'isTrusted' => $isTrusted,
                    'E164Capable' => $E164Capable,
                    'routeAdvance' => $routeAdvance,
                    'forwardingOverride' => $forwardingOverride,
                    'wirelessIntegration' => $wirelessIntegration,
                    'webBasedConfigURL' => $webBasedConfigURL,
                    'isVideoCapable' => $isVideoCapable,
                    'PBXIntegration' => $PBXIntegration,
                    'useBusinessTrunkingContact' => $useBusinessTrunkingContact,
                    'staticRegistrationCapable' => $staticRegistrationCapable,
                    'cpeDeviceOptions' => $cpeDeviceOptions,
                    'earlyMediaSupport' => $earlyMediaSupport,
                    'authenticateRefer' => $authenticateRefer,
                    'autoConfigSoftClient' => $autoConfigSoftClient,
                    'authenticationMode' => $authenticationMode,
                    'tdmOverlay' => $tdmOverlay,
                    'supportsBroadWorksINFOForCallWaiting' => $supportsBroadWorksINFOForCallWaiting
                ]
            ];
        }

        # Modify an entry from the SIP access control list.
        static public function SystemSIPModifyACLEntryRequest($netAddress=null,$transportProtocol=null,$description=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'netAddress' => $netAddress,
                    'transportProtocol' => $transportProtocol,
                    'description' => $description
                ]
            ];
        }

        # Add an entry to the SMDI access control list.
        static public function SystemSMDIAddACLEntryRequest($netAddress=null,$description=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'netAddress' => $netAddress,
                    'description' => $description
                ]
            ];
        }

        # Delete an entry from the SMDI access control list.
        static public function SystemSMDIDeleteACLEntryRequest($netAddress=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'netAddress' => $netAddress
                ]
            ];
        }

        # Modify an entry from the SMDI access control list.
        static public function SystemSMDIModifyACLEntryRequest($netAddress=null,$description=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'netAddress' => $netAddress,
                    'description' => $description
                ]
            ];
        }

        # Request the system level data associated with SMPP external interface.
        static public function SystemSMPPGetRequest() {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => null
            ];
        }

        # Get the system call processing configuration for all subscribers
        static public function SystemSubscriberGetCallProcessingParametersRequest() {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => null
            ];
        }

        # Get the system call processing configuration for all subscribers
        static public function SystemSubscriberGetCallProcessingParametersRequest14sp3() {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => null
            ];
        }

        # Modify the system call processing configuration for all subscribers.
        static public function SystemSubscriberModifyCallProcessingParametersRequest($userCallingLineIdSelection=null,$isExtendedCallingLineIdActive=null,$isRingTimeOutActive=null,$ringTimeoutSeconds=null,$allowEmergencyRemoteOfficeOriginations=null,$maxNoAnswerNumberOfRings=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userCallingLineIdSelection' => $userCallingLineIdSelection,
                    'isExtendedCallingLineIdActive' => $isExtendedCallingLineIdActive,
                    'isRingTimeOutActive' => $isRingTimeOutActive,
                    'ringTimeoutSeconds' => $ringTimeoutSeconds,
                    'allowEmergencyRemoteOfficeOriginations' => $allowEmergencyRemoteOfficeOriginations,
                    'maxNoAnswerNumberOfRings' => $maxNoAnswerNumberOfRings
                ]
            ];
        }

        # Get the list of user creation tasks in the system.
        static public function SystemTrunkGroupUserCreationTaskGetListRequest() {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => null
            ];
        }

        # Requests the system voice portal passcode rules setting.
        static public function SystemVoiceMessagingGroupGetPasscodeRulesRequest14() {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => null
            ];
        }

        # Request to modify the system voice portal passcode rules setting.
        static public function SystemVoiceMessagingGroupModifyPasscodeRulesRequest($disallowRepeatedDigits=null,$disallowUserNumber=null,$disallowReversedUserNumber=null,$disallowOldPasscode=null,$disallowReversedOldPasscode=null,$minCodeLength=null,$maxCodeLength=null,$disableLoginAfterMaxFailedLoginAttempts=null,$maxFailedLoginAttempts=null,$expirePassword=null,$passcodeExpiresDays=null,$sendLoginDisabledNotifyEmail=null,$loginDisabledNotifyEmailAddress=null,$defaultPassword=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'disallowRepeatedDigits' => $disallowRepeatedDigits,
                    'disallowUserNumber' => $disallowUserNumber,
                    'disallowReversedUserNumber' => $disallowReversedUserNumber,
                    'disallowOldPasscode' => $disallowOldPasscode,
                    'disallowReversedOldPasscode' => $disallowReversedOldPasscode,
                    'minCodeLength' => $minCodeLength,
                    'maxCodeLength' => $maxCodeLength,
                    'disableLoginAfterMaxFailedLoginAttempts' => $disableLoginAfterMaxFailedLoginAttempts,
                    'maxFailedLoginAttempts' => $maxFailedLoginAttempts,
                    'expirePassword' => $expirePassword,
                    'passcodeExpiresDays' => $passcodeExpiresDays,
                    'sendLoginDisabledNotifyEmail' => $sendLoginDisabledNotifyEmail,
                    'loginDisabledNotifyEmailAddress' => $loginDisabledNotifyEmailAddress,
                    'defaultPassword' => $defaultPassword
                ]
            ];
        }

        # Request to add a user.
        static public function UserAddRequest14($serviceProviderId=null,$groupId=null,$userId=null,$lastName=null,$firstName=null,$callingLineIdLastName=null,$callingLineIdFirstName=null,$hiraganaLastName=null,$hiraganaFirstName=null,$phoneNumber=null,$extension=null,$callingLineIdPhoneNumber=null,$password=null,$department=null,$language=null,$timeZone=null,$alias=null,$title=null,$pagerPhoneNumber=null,$mobilePhoneNumber=null,$emailAddress=null,$yahooId=null,$addressLocation=null,$address=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId,
                    'userId' => $userId,
                    'lastName' => $lastName,
                    'firstName' => $firstName,
                    'callingLineIdLastName' => $callingLineIdLastName,
                    'callingLineIdFirstName' => $callingLineIdFirstName,
                    'hiraganaLastName' => $hiraganaLastName,
                    'hiraganaFirstName' => $hiraganaFirstName,
                    'phoneNumber' => $phoneNumber,
                    'extension' => $extension,
                    'callingLineIdPhoneNumber' => $callingLineIdPhoneNumber,
                    'password' => $password,
                    'department' => $department,
                    'language' => $language,
                    'timeZone' => $timeZone,
                    'alias' => $alias,
                    'title' => $title,
                    'pagerPhoneNumber' => $pagerPhoneNumber,
                    'mobilePhoneNumber' => $mobilePhoneNumber,
                    'emailAddress' => $emailAddress,
                    'yahooId' => $yahooId,
                    'addressLocation' => $addressLocation,
                    'address' => $address
                ]
            ];
        }

        # Request user's attendant console settings.
        static public function UserAttendantConsoleGetRequest($userId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId
                ]
            ];
        }

        # Request user's call logs.
        static public function UserBasicCallLogsGetListRequest($userId=null,$callLogType=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId,
                    'callLogType' => $callLogType
                ]
            ];
        }

        # Get the list of call centers the specified user belongs to.
        static public function UserCallCenterGetListRequest($userId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId
                ]
            ];
        }

        # Request for an agent to login or logout of one or more Call Centers.
        static public function UserCallCenterModifyAvailabilityListRequest($userId=null,$callCenterAvailability=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId,
                    'callCenterAvailability' => $callCenterAvailability
                ]
            ];
        }

        # Clear a user's call logs associated with Basic Call Logs and Enhanced
        static public function UserCallLogsClearRequest($userId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId
                ]
            ];
        }

        # Request the user level data associated with Call Processing Policy.
        static public function UserCallProcessingGetPolicyRequest14($userId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId
                ]
            ];
        }

        # Request the user level data associated with Call Processing Policy.
        static public function UserCallProcessingGetPolicyRequest14sp1($userId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId
                ]
            ];
        }

        # Modify the user level data associated with Call Procesing Policy.
        static public function UserCallProcessingModifyPolicyRequest14($userId=null,$useUserSetting=null,$useMaxSimultaneousCalls=null,$maxSimultaneousCalls=null,$useMaxSimultaneousVideoCalls=null,$maxSimultaneousVideoCalls=null,$useMaxCallTimeForAnsweredCalls=null,$maxCallTimeForAnsweredCallsMinutes=null,$useMaxCallTimeForUnansweredCalls=null,$maxCallTimeForUnansweredCallsMinutes=null,$mediaPolicySelection=null,$supportedMediaSetName=null,$useMaxConcurrentRedirectedCalls=null,$maxConcurrentRedirectedCalls=null,$useMaxFindMeFollowMeDepth=null,$maxFindMeFollowMeDepth=null,$maxRedirectionDepth=null,$useMaxConcurrentFindMeFollowMeInvocations=null,$maxConcurrentFindMeFollowMeInvocations=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId,
                    'useUserSetting' => $useUserSetting,
                    'useMaxSimultaneousCalls' => $useMaxSimultaneousCalls,
                    'maxSimultaneousCalls' => $maxSimultaneousCalls,
                    'useMaxSimultaneousVideoCalls' => $useMaxSimultaneousVideoCalls,
                    'maxSimultaneousVideoCalls' => $maxSimultaneousVideoCalls,
                    'useMaxCallTimeForAnsweredCalls' => $useMaxCallTimeForAnsweredCalls,
                    'maxCallTimeForAnsweredCallsMinutes' => $maxCallTimeForAnsweredCallsMinutes,
                    'useMaxCallTimeForUnansweredCalls' => $useMaxCallTimeForUnansweredCalls,
                    'maxCallTimeForUnansweredCallsMinutes' => $maxCallTimeForUnansweredCallsMinutes,
                    'mediaPolicySelection' => $mediaPolicySelection,
                    'supportedMediaSetName' => $supportedMediaSetName,
                    'useMaxConcurrentRedirectedCalls' => $useMaxConcurrentRedirectedCalls,
                    'maxConcurrentRedirectedCalls' => $maxConcurrentRedirectedCalls,
                    'useMaxFindMeFollowMeDepth' => $useMaxFindMeFollowMeDepth,
                    'maxFindMeFollowMeDepth' => $maxFindMeFollowMeDepth,
                    'maxRedirectionDepth' => $maxRedirectionDepth,
                    'useMaxConcurrentFindMeFollowMeInvocations' => $useMaxConcurrentFindMeFollowMeInvocations,
                    'maxConcurrentFindMeFollowMeInvocations' => $maxConcurrentFindMeFollowMeInvocations
                ]
            ];
        }

        # Request the user level data associated with Call Transfer.
        static public function UserCallTransferGetRequest($userId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId
                ]
            ];
        }

        # Request the user level data associated with Charge Number.
        static public function UserChargeNumberGetRequest($userId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId
                ]
            ];
        }

        # Request the user level data associated with Directed Call Pickup With Barge In.
        static public function UserDirectedCallPickupWithBargeInGetRequest($userId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId
                ]
            ];
        }

        # Request user's call logs. It is possible to get a subset of the total list of calls
        static public function UserEnhancedCallLogsGetListRequest($userId=null,$callLogType=null,$startingOffset=null,$numCalls=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId,
                    'callLogType' => $callLogType,
                    'startingOffset' => $startingOffset,
                    'numCalls' => $numCalls
                ]
            ];
        }

        # Request to get the user information.  The response is either UserGetResponse14
        static public function UserGetRequest14($userId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId
                ]
            ];
        }

        # Request to get the user information.  The response is either UserGetResponse14sp4
        static public function UserGetRequest14sp4($userId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId
                ]
            ];
        }

        # Request the user level data associated with Hoteling Guest.
        static public function UserHotelingGuestGetRequest14($userId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId
                ]
            ];
        }

        # Request the user level data associated with Hoteling Guest.
        static public function UserHotelingGuestGetRequest14sp2($userId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId
                ]
            ];
        }

        # Request the user level data associated with Hoteling Host.
        static public function UserHotelingHostGetRequest14($userId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId
                ]
            ];
        }

        # Get the information of a conference recording owned or delegated by the user.
        static public function UserInstantConferencingGetConferenceRecordingRequest($userId=null,$recordingKey=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId,
                    'recordingKey' => $recordingKey
                ]
            ];
        }

        # Get the information of a conference owned or delegated by the user.
        static public function UserInstantConferencingGetConferenceRequest($userId=null,$conferenceKey=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId,
                    'conferenceKey' => $conferenceKey
                ]
            ];
        }

        # Get the information of a conference owned or delegated by the user.
        static public function UserInstantConferencingGetStandAloneConferenceRequest($conferenceOwnerUserId=null,$conferenceKey=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'conferenceOwnerUserId' => $conferenceOwnerUserId,
                    'conferenceKey' => $conferenceKey
                ]
            ];
        }

        # Request to modify a user. The response is either SuccessResponse or ErrorResponse.
        static public function UserModifyRequest14($userId=null,$lastName=null,$firstName=null,$callingLineIdLastName=null,$callingLineIdFirstName=null,$hiraganaLastName=null,$hiraganaFirstName=null,$phoneNumber=null,$extension=null,$callingLineIdPhoneNumber=null,$oldPassword=null,$newPassword=null,$department=null,$language=null,$timeZone=null,$sipAliasList=null,$endpoint=null,$title=null,$pagerPhoneNumber=null,$mobilePhoneNumber=null,$emailAddress=null,$yahooId=null,$addressLocation=null,$address=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId,
                    'lastName' => $lastName,
                    'firstName' => $firstName,
                    'callingLineIdLastName' => $callingLineIdLastName,
                    'callingLineIdFirstName' => $callingLineIdFirstName,
                    'hiraganaLastName' => $hiraganaLastName,
                    'hiraganaFirstName' => $hiraganaFirstName,
                    'phoneNumber' => $phoneNumber,
                    'extension' => $extension,
                    'callingLineIdPhoneNumber' => $callingLineIdPhoneNumber,
                    'oldPassword' => $oldPassword,
                    'newPassword' => $newPassword,
                    'department' => $department,
                    'language' => $language,
                    'timeZone' => $timeZone,
                    'sipAliasList' => $sipAliasList,
                    'endpoint' => $endpoint,
                    'title' => $title,
                    'pagerPhoneNumber' => $pagerPhoneNumber,
                    'mobilePhoneNumber' => $mobilePhoneNumber,
                    'emailAddress' => $emailAddress,
                    'yahooId' => $yahooId,
                    'addressLocation' => $addressLocation,
                    'address' => $address
                ]
            ];
        }

        # Associate an access device instance to the user's Shared Call Appearance.
        static public function UserSharedCallAppearanceAddEndpointRequest14($userId=null,$accessDeviceEndpoint=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId,
                    'accessDeviceEndpoint' => $accessDeviceEndpoint
                ]
            ];
        }

        # Request the user level data associated with Privacy.
        static public function UserPrivacyGetRequest($userId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId
                ]
            ];
        }

        # Get the user's sequential ring service setting.
        static public function UserSequentialRingGetRequest13mp16($userId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId
                ]
            ];
        }

        # Get the user's Shared Call Appearance service setting.
        static public function UserSharedCallAppearanceGetRequest14($userId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId
                ]
            ];
        }

        # Get the user's simultaneous ring service family setting.
        static public function UserSimultaneousRingFamilyGetRequest($userId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId
                ]
            ];
        }

        # Modify the user's simultaneous ring family service setting.
        static public function UserSimultaneousRingFamilyModifyRequest($userId=null,$isActive=null,$incomingCalls=null,$simRingPhoneNumberList=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId,
                    'isActive' => $isActive,
                    'incomingCalls' => $incomingCalls,
                    'simRingPhoneNumberList' => $simRingPhoneNumberList
                ]
            ];
        }

        # Get the user's simultaneous ring service personal setting.
        static public function UserSimultaneousRingPersonalGetRequest($userId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId
                ]
            ];
        }

        # Modify the user's simultaneous ring personal service setting.
        static public function UserSimultaneousRingPersonalModifyRequest($userId=null,$isActive=null,$incomingCalls=null,$simRingPhoneNumberList=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId,
                    'isActive' => $isActive,
                    'incomingCalls' => $incomingCalls,
                    'simRingPhoneNumberList' => $simRingPhoneNumberList
                ]
            ];
        }

        # Get the user's voice messaging advanced voice management service setting.
        static public function UserVoiceMessagingUserGetAdvancedVoiceManagementRequest($userId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId
                ]
            ];
        }

        # Request the user's voice portal password information.
        static public function UserVoiceMessagingUserGetVoicePortalPasswordInfoRequest($userId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId
                ]
            ];
        }

        # Modify the user's Voice Portal password
        static public function UserVoiceMessagingUserModifyVoicePortalPasswordRequest($userId=null,$oldPassword=null,$newPassword=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId,
                    'oldPassword' => $oldPassword,
                    'newPassword' => $newPassword
                ]
            ];
        }

        # Request to get the list of device files managed by the Device Management System, on a per-device profile basis.
        static public function GroupAccessDeviceFileGetListRequest($serviceProviderId=null,$groupId=null,$deviceName=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId,
                    'deviceName' => $deviceName
                ]
            ];
        }

        # Request to get a group device profile file.
        static public function GroupAccessDeviceFileGetRequest($serviceProviderId=null,$groupId=null,$deviceName=null,$fileType=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId,
                    'deviceName' => $deviceName,
                    'fileType' => $fileType
                ]
            ];
        }

        # Request to modify a specified group access device file.
        static public function GroupAccessDeviceFileModifyRequest($serviceProviderId=null,$groupId=null,$deviceName=null,$fileType=null,$fileSource=null,$uploadFile=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId,
                    'deviceName' => $deviceName,
                    'fileType' => $fileType,
                    'fileSource' => $fileSource,
                    'uploadFile' => $uploadFile
                ]
            ];
        }

        # Request to modify a specified device type file for a group.
        static public function GroupDeviceTypeFileModifyRequest($serviceProviderId=null,$groupId=null,$deviceType=null,$fileType=null,$fileSource=null,$uploadFile=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId,
                    'deviceType' => $deviceType,
                    'fileType' => $fileType,
                    'fileSource' => $fileSource,
                    'uploadFile' => $uploadFile
                ]
            ];
        }

        # Request to get the list of device type files managed by the Device Management System, on a per-group basis.
        static public function GroupDeviceTypeFileGetListRequest($serviceProviderId=null,$groupId=null,$deviceType=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId,
                    'deviceType' => $deviceType
                ]
            ];
        }

        # Request to get a group device type file.
        static public function GroupDeviceTypeFileGetRequest($serviceProviderId=null,$groupId=null,$deviceType=null,$fileType=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId,
                    'deviceType' => $deviceType,
                    'fileType' => $fileType
                ]
            ];
        }

        # Request to modify a specified service provider/enterprise access device file.
        static public function ServiceProviderAccessDeviceFileModifyRequest($serviceProviderId=null,$deviceName=null,$fileType=null,$fileSource=null,$uploadFile=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'deviceName' => $deviceName,
                    'fileType' => $fileType,
                    'fileSource' => $fileSource,
                    'uploadFile' => $uploadFile
                ]
            ];
        }

        # Request to get the list of device files managed by the Device Management System, on a per-device profile basis.
        static public function ServiceProviderAccessDeviceFileGetListRequest($serviceProviderId=null,$deviceName=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'deviceName' => $deviceName
                ]
            ];
        }

        # Request to get a service provider device profile file.
        static public function ServiceProviderAccessDeviceFileGetRequest($serviceProviderId=null,$deviceName=null,$fileType=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'deviceName' => $deviceName,
                    'fileType' => $fileType
                ]
            ];
        }

        # Request to modify a specified system access device file.
        static public function SystemAccessDeviceFileModifyRequest($deviceName=null,$fileType=null,$fileSource=null,$uploadFile=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'deviceName' => $deviceName,
                    'fileType' => $fileType,
                    'fileSource' => $fileSource,
                    'uploadFile' => $uploadFile
                ]
            ];
        }

        # Request to get the list of device files managed by the Device Management System, on a per-device profile basis.
        static public function SystemAccessDeviceFileGetListRequest($deviceName=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'deviceName' => $deviceName
                ]
            ];
        }

        # Request to get a device profile file.
        static public function SystemAccessDeviceFileGetRequest($deviceName=null,$fileType=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'deviceName' => $deviceName,
                    'fileType' => $fileType
                ]
            ];
        }

        # Request to add a sip device type file.
        static public function SystemSIPDeviceTypeFileAddRequest($deviceType=null,$fileType=null,$fileFormat=null,$remoteFileFormat=null,$fileCategory=null,$allowFileCustomization=null,$fileSource=null,$uploadFile=null,$useHttpDigestAuthentication=null,$macBasedFileAuthentication=null,$userNamePasswordFileAuthentication=null,$macInNonRequestURI=null,$macFormatInNonRequestURI=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'deviceType' => $deviceType,
                    'fileType' => $fileType,
                    'fileFormat' => $fileFormat,
                    'remoteFileFormat' => $remoteFileFormat,
                    'fileCategory' => $fileCategory,
                    'allowFileCustomization' => $allowFileCustomization,
                    'fileSource' => $fileSource,
                    'uploadFile' => $uploadFile,
                    'useHttpDigestAuthentication' => $useHttpDigestAuthentication,
                    'macBasedFileAuthentication' => $macBasedFileAuthentication,
                    'userNamePasswordFileAuthentication' => $userNamePasswordFileAuthentication,
                    'macInNonRequestURI' => $macInNonRequestURI,
                    'macFormatInNonRequestURI' => $macFormatInNonRequestURI
                ]
            ];
        }

        # Request to delete a sip device type file.
        static public function SystemSIPDeviceTypeFileDeleteRequest($deviceType=null,$fileType=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'deviceType' => $deviceType,
                    'fileType' => $fileType
                ]
            ];
        }

        # Request to modify a sip device type file.
        static public function SystemSIPDeviceTypeFileModifyRequest($deviceType=null,$fileType=null,$allowFileCustomization=null,$fileSource=null,$uploadFile=null,$useHttpDigestAuthentication=null,$macBasedFileAuthentication=null,$userNamePasswordFileAuthentication=null,$macInNonRequestURI=null,$macFormatInNonRequestURI=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'deviceType' => $deviceType,
                    'fileType' => $fileType,
                    'allowFileCustomization' => $allowFileCustomization,
                    'fileSource' => $fileSource,
                    'uploadFile' => $uploadFile,
                    'useHttpDigestAuthentication' => $useHttpDigestAuthentication,
                    'macBasedFileAuthentication' => $macBasedFileAuthentication,
                    'userNamePasswordFileAuthentication' => $userNamePasswordFileAuthentication,
                    'macInNonRequestURI' => $macInNonRequestURI,
                    'macFormatInNonRequestURI' => $macFormatInNonRequestURI
                ]
            ];
        }

        # Request to get the list of device files managed by the Device Management System, on a per-device type basis.
        static public function SystemSIPDeviceTypeFileGetListRequest($deviceType=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'deviceType' => $deviceType
                ]
            ];
        }

        # Request to get a sip device type file.
        static public function SystemSIPDeviceTypeFileGetRequest($deviceType=null,$fileType=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'deviceType' => $deviceType,
                    'fileType' => $fileType
                ]
            ];
        }

}