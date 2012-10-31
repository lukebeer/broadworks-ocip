<?php
class OCISchemaDeprecated15 {
        # Requests the configuration of a specified group access device.
        static public function GroupAccessDeviceGetRequest14sp6($serviceProviderId=null,$groupId=null,$deviceName=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId,
                    'deviceName' => $deviceName
                ]
            ];
        }

        # Add a Auto Attendant instance to a group.
        static public function GroupAutoAttendantAddInstanceRequest14($serviceProviderId=null,$groupId=null,$serviceUserId=null,$serviceInstanceProfile=null,$enableVideo=null,$businessHours=null,$holidayScheduleName=null,$extensionDialingScope=null,$nameDialingScope=null,$nameDialingEntries=null,$businessHoursMenu=null,$afterHoursMenu=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId,
                    'serviceUserId' => $serviceUserId,
                    'serviceInstanceProfile' => $serviceInstanceProfile,
                    'enableVideo' => $enableVideo,
                    'businessHours' => $businessHours,
                    'holidayScheduleName' => $holidayScheduleName,
                    'extensionDialingScope' => $extensionDialingScope,
                    'nameDialingScope' => $nameDialingScope,
                    'nameDialingEntries' => $nameDialingEntries,
                    'businessHoursMenu' => $businessHoursMenu,
                    'afterHoursMenu' => $afterHoursMenu
                ]
            ];
        }

        # Request to get all the information of a Auto Attendant instance.
        static public function GroupAutoAttendantGetInstanceRequest14($serviceUserId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceUserId' => $serviceUserId
                ]
            ];
        }

        # Request to modify an Auto Attendant instance.
        static public function GroupAutoAttendantModifyInstanceRequest($serviceUserId=null,$serviceInstanceProfile=null,$enableVideo=null,$businessHours=null,$holidayScheduleName=null,$extensionDialingScope=null,$nameDialingScope=null,$nameDialingEntries=null,$businessHoursMenu=null,$afterHoursMenu=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceUserId' => $serviceUserId,
                    'serviceInstanceProfile' => $serviceInstanceProfile,
                    'enableVideo' => $enableVideo,
                    'businessHours' => $businessHours,
                    'holidayScheduleName' => $holidayScheduleName,
                    'extensionDialingScope' => $extensionDialingScope,
                    'nameDialingScope' => $nameDialingScope,
                    'nameDialingEntries' => $nameDialingEntries,
                    'businessHoursMenu' => $businessHoursMenu,
                    'afterHoursMenu' => $afterHoursMenu
                ]
            ];
        }

        # Add a Call Center instance to a group.
        static public function GroupCallCenterAddInstanceRequest14sp9($serviceProviderId=null,$groupId=null,$serviceUserId=null,$serviceInstanceProfile=null,$policy=null,$huntAfterNoAnswer=null,$noAnswerNumberOfRings=null,$forwardAfterTimeout=null,$forwardTimeoutSeconds=null,$forwardToPhoneNumber=null,$enableVideo=null,$queueLength=null,$allowAgentLogoff=null,$playMusicOnHold=null,$playComfortMessage=null,$timeBetweenComfortMessagesSeconds=null,$enableGuardTimer=null,$guardTimerSeconds=null,$agentUserId=null,$allowCallWaitingForAgents=null,$allowCallsToAgentsInWrapUp=null,$enableCallQueueWhenNoAgentsAvailable=null,$statisticsSource=null) {
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
                    'enableCallQueueWhenNoAgentsAvailable' => $enableCallQueueWhenNoAgentsAvailable,
                    'statisticsSource' => $statisticsSource
                ]
            ];
        }

        # Get a call center's announcement settings.
        static public function GroupCallCenterGetAnnouncementRequest14sp6($serviceUserId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceUserId' => $serviceUserId
                ]
            ];
        }

        # Get a list of users that can be assigned to a Call Center group.
        static public function GroupCallCenterGetAvailableUserListRequest($serviceProviderId=null,$groupId=null,$responseSizeLimit=null,$searchCriteriaUserLastName=null,$searchCriteriaUserFirstName=null,$searchCriteriaExactUserDepartment=null,$searchCriteriaExactUserGroup=null) {
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

        # Request to get all the information of a Call Center instance.
        static public function GroupCallCenterGetInstanceRequest14sp9($serviceUserId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceUserId' => $serviceUserId
                ]
            ];
        }

        # Request to get the call center statistics reporting settings.
        static public function GroupCallCenterGetInstanceStatisticsReportingRequest($serviceUserId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceUserId' => $serviceUserId
                ]
            ];
        }

        # Request to get the Call Center Enhanced configuration data for a
        static public function GroupCallCenterEnhancedGetRequest($serviceUserId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceUserId' => $serviceUserId
                ]
            ];
        }

        # Modify the Call Center Enhanced configuration data for a Call
        static public function GroupCallCenterEnhancedModifyRequest($serviceUserId=null,$overrideAgentWrapUpTime=null,$wrapUpSeconds=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceUserId' => $serviceUserId,
                    'overrideAgentWrapUpTime' => $overrideAgentWrapUpTime,
                    'wrapUpSeconds' => $wrapUpSeconds
                ]
            ];
        }

        # Modify a call center's announcement settings.
        static public function GroupCallCenterModifyAnnouncementRequest14sp6($serviceUserId=null,$entranceMessageSelection=null,$entranceMessageAudioFile=null,$entranceMessageVideoFile=null,$periodicComfortMessageSelection=null,$periodicComfortMessageAudioFile=null,$periodicComfortMessageVideoFile=null,$onHoldSource=null,$onHoldUseAlternateSourceForInternalCalls=null,$onHoldInternalSource=null) {
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
                    'onHoldSource' => $onHoldSource,
                    'onHoldUseAlternateSourceForInternalCalls' => $onHoldUseAlternateSourceForInternalCalls,
                    'onHoldInternalSource' => $onHoldInternalSource
                ]
            ];
        }

        # Request to modify a Call Center instance.
        static public function GroupCallCenterModifyInstanceRequest($serviceUserId=null,$serviceInstanceProfile=null,$policy=null,$huntAfterNoAnswer=null,$noAnswerNumberOfRings=null,$forwardAfterTimeout=null,$forwardTimeoutSeconds=null,$forwardToPhoneNumber=null,$enableVideo=null,$queueLength=null,$allowAgentLogoff=null,$playMusicOnHold=null,$playComfortMessage=null,$timeBetweenComfortMessagesSeconds=null,$enableGuardTimer=null,$guardTimerSeconds=null,$agentUserIdList=null,$allowCallWaitingForAgents=null,$allowCallsToAgentsInWrapUp=null,$enableCallQueueWhenNoAgentsAvailable=null,$statisticsSource=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
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
                    'agentUserIdList' => $agentUserIdList,
                    'allowCallWaitingForAgents' => $allowCallWaitingForAgents,
                    'allowCallsToAgentsInWrapUp' => $allowCallsToAgentsInWrapUp,
                    'enableCallQueueWhenNoAgentsAvailable' => $enableCallQueueWhenNoAgentsAvailable,
                    'statisticsSource' => $statisticsSource
                ]
            ];
        }

        # Get a list of supervisors assigned to a call center.
        static public function GroupCallCenterSupervisorReportingGetRequest($serviceUserId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceUserId' => $serviceUserId
                ]
            ];
        }

        # Replaces a list of users as supervisors for a call center.
        static public function GroupCallCenterSupervisorReportingModifyRequest($serviceUserId=null,$reportingServerName=null,$supervisorUserIdList=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceUserId' => $serviceUserId,
                    'reportingServerName' => $reportingServerName,
                    'supervisorUserIdList' => $supervisorUserIdList
                ]
            ];
        }

        # Request the group level data associated with Call Processing Policy.
        static public function GroupCallProcessingGetPolicyRequest15($serviceProviderId=null,$groupId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId
                ]
            ];
        }

        # Modify the group level data associated with Call Procesing Policy.
        static public function GroupCallProcessingModifyPolicyRequest15($serviceProviderId=null,$groupId=null,$useGroupSetting=null,$useMaxSimultaneousCalls=null,$maxSimultaneousCalls=null,$useMaxSimultaneousVideoCalls=null,$maxSimultaneousVideoCalls=null,$useMaxCallTimeForAnsweredCalls=null,$maxCallTimeForAnsweredCallsMinutes=null,$useMaxCallTimeForUnansweredCalls=null,$maxCallTimeForUnansweredCallsMinutes=null,$mediaPolicySelection=null,$supportedMediaSetName=null,$networkUsageSelection=null,$enforceGroupCallingLineIdentityRestriction=null,$allowEnterpriseGroupCallTypingForPrivateDialingPlan=null,$allowEnterpriseGroupCallTypingForPublicDialingPlan=null,$overrideCLIDRestrictionForPrivateCallCategory=null,$useEnterpriseCLIDForPrivateCallCategory=null,$enableEnterpriseExtensionDialing=null,$useMaxConcurrentRedirectedCalls=null,$maxConcurrentRedirectedCalls=null,$useMaxFindMeFollowMeDepth=null,$maxFindMeFollowMeDepth=null,$maxRedirectionDepth=null,$useMaxConcurrentFindMeFollowMeInvocations=null,$maxConcurrentFindMeFollowMeInvocations=null) {
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
                    'overrideCLIDRestrictionForPrivateCallCategory' => $overrideCLIDRestrictionForPrivateCallCategory,
                    'useEnterpriseCLIDForPrivateCallCategory' => $useEnterpriseCLIDForPrivateCallCategory,
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

        # Request the group level data associated with Call Processing Policy.
        static public function GroupCallProcessingGetPolicyRequest14sp7($serviceProviderId=null,$groupId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId
                ]
            ];
        }

        # Request the group level data associated with Call Processing Policy.
        static public function GroupCallProcessingGetPolicyRequest15sp2($serviceProviderId=null,$groupId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId
                ]
            ];
        }

        # Modify the group level data associated with Call Procesing Policy.
        static public function GroupCallProcessingModifyPolicyRequest14sp7($serviceProviderId=null,$groupId=null,$useGroupCLIDSetting=null,$useGroupMediaSetting=null,$useGroupCallLimitsSetting=null,$useGroupTranslationRoutingSetting=null,$useMaxSimultaneousCalls=null,$maxSimultaneousCalls=null,$useMaxSimultaneousVideoCalls=null,$maxSimultaneousVideoCalls=null,$useMaxCallTimeForAnsweredCalls=null,$maxCallTimeForAnsweredCallsMinutes=null,$useMaxCallTimeForUnansweredCalls=null,$maxCallTimeForUnansweredCallsMinutes=null,$mediaPolicySelection=null,$supportedMediaSetName=null,$networkUsageSelection=null,$enforceGroupCallingLineIdentityRestriction=null,$allowEnterpriseGroupCallTypingForPrivateDialingPlan=null,$allowEnterpriseGroupCallTypingForPublicDialingPlan=null,$overrideCLIDRestrictionForExternalCallsViaPrivateDialingPlan=null,$enableEnterpriseExtensionDialing=null,$useMaxConcurrentRedirectedCalls=null,$maxConcurrentRedirectedCalls=null,$useMaxFindMeFollowMeDepth=null,$maxFindMeFollowMeDepth=null,$maxRedirectionDepth=null,$useMaxConcurrentFindMeFollowMeInvocations=null,$maxConcurrentFindMeFollowMeInvocations=null,$clidPolicy=null,$emergencyClidPolicy=null,$allowAlternateNumbersForRedirectingIdentity=null,$useGroupName=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId,
                    'useGroupCLIDSetting' => $useGroupCLIDSetting,
                    'useGroupMediaSetting' => $useGroupMediaSetting,
                    'useGroupCallLimitsSetting' => $useGroupCallLimitsSetting,
                    'useGroupTranslationRoutingSetting' => $useGroupTranslationRoutingSetting,
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
                    'maxConcurrentFindMeFollowMeInvocations' => $maxConcurrentFindMeFollowMeInvocations,
                    'clidPolicy' => $clidPolicy,
                    'emergencyClidPolicy' => $emergencyClidPolicy,
                    'allowAlternateNumbersForRedirectingIdentity' => $allowAlternateNumbersForRedirectingIdentity,
                    'useGroupName' => $useGroupName
                ]
            ];
        }

        # Get the group's custom ring back service settings.
        static public function GroupCustomRingbackGroupGetRequest($serviceProviderId=null,$groupId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId
                ]
            ];
        }

        # Modify the group's custom ring back service settings.
        static public function GroupCustomRingbackGroupModifyRequest($serviceProviderId=null,$groupId=null,$isActive=null,$audioSelection=null,$audioFile=null,$videoSelection=null,$videoFile=null) {
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

        # Request to get all the information of a Instant Conferencing instance.
        static public function GroupInstantConferencingGetInstanceRequest14($serviceUserId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceUserId' => $serviceUserId
                ]
            ];
        }

        # Request to modify a Instant Conferencing instance.
        static public function GroupInstantConferencingModifyInstanceRequest($serviceUserId=null,$serviceInstanceProfile=null,$conferenceBridgeLinePort=null,$allocatedPorts=null,$serviceProfileAppliedOnOutcall=null,$allowOutdialInInvitation=null,$allowDocumentDownload=null,$bridgeAdministratorUserIdList=null,$networkClassOfService=null) {
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

        # Get the group's intercept group service settings.
        static public function GroupInterceptGroupGetRequest($serviceProviderId=null,$groupId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId
                ]
            ];
        }

        # Get the group's intercept group service settings.
        static public function GroupInterceptGroupGetRequest16($serviceProviderId=null,$groupId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId
                ]
            ];
        }

        # Modify the group's intercept group service settings.
        static public function GroupInterceptGroupModifyRequest($serviceProviderId=null,$groupId=null,$isActive=null,$announcementSelection=null,$audioFile=null,$videoFile=null,$playNewPhoneNumber=null,$newPhoneNumber=null,$transferOnZeroToPhoneNumber=null,$transferPhoneNumber=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId,
                    'isActive' => $isActive,
                    'announcementSelection' => $announcementSelection,
                    'audioFile' => $audioFile,
                    'videoFile' => $videoFile,
                    'playNewPhoneNumber' => $playNewPhoneNumber,
                    'newPhoneNumber' => $newPhoneNumber,
                    'transferOnZeroToPhoneNumber' => $transferOnZeroToPhoneNumber,
                    'transferPhoneNumber' => $transferPhoneNumber
                ]
            ];
        }

        # Add a Music on Hold Instance to a department.
        static public function GroupMusicOnHoldAddInstanceRequest14sp6($serviceProviderId=null,$groupId=null,$department=null,$isActiveDuringCallHold=null,$isActiveDuringCallPark=null,$isActiveDuringBusyCampOn=null,$source=null,$useAlternateSourceForInternalCalls=null,$internalSource=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId,
                    'department' => $department,
                    'isActiveDuringCallHold' => $isActiveDuringCallHold,
                    'isActiveDuringCallPark' => $isActiveDuringCallPark,
                    'isActiveDuringBusyCampOn' => $isActiveDuringBusyCampOn,
                    'source' => $source,
                    'useAlternateSourceForInternalCalls' => $useAlternateSourceForInternalCalls,
                    'internalSource' => $internalSource
                ]
            ];
        }

        # Get a Music On Hold data for a group or department instance.
        static public function GroupMusicOnHoldGetInstanceRequest14sp6($serviceProviderId=null,$groupId=null,$department=null) {
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
        static public function GroupMusicOnHoldModifyInstanceRequest14sp6($serviceProviderId=null,$groupId=null,$department=null,$isActiveDuringCallHold=null,$isActiveDuringCallPark=null,$isActiveDuringBusyCampOn=null,$source=null,$useAlternateSourceForInternalCalls=null,$internalSource=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId,
                    'department' => $department,
                    'isActiveDuringCallHold' => $isActiveDuringCallHold,
                    'isActiveDuringCallPark' => $isActiveDuringCallPark,
                    'isActiveDuringBusyCampOn' => $isActiveDuringBusyCampOn,
                    'source' => $source,
                    'useAlternateSourceForInternalCalls' => $useAlternateSourceForInternalCalls,
                    'internalSource' => $internalSource
                ]
            ];
        }

        # Requests the group's password rules setting that is applicable to
        static public function GroupPasswordRulesGetRequest($serviceProviderId=null,$groupId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId
                ]
            ];
        }

        # Add a Trunk Group instance to a group.
        static public function GroupTrunkGroupAddInstanceRequest15($serviceProviderId=null,$groupId=null,$name=null,$pilotUser=null,$department=null,$accessDevice=null,$maxActiveCalls=null,$maxIncomingCalls=null,$maxOutgoingCalls=null,$enableBursting=null,$burstingMaxActiveCalls=null,$burstingMaxIncomingCalls=null,$burstingMaxOutgoingCalls=null,$capacityExceededAction=null,$capacityExceededForwardAddress=null,$capacityExceededRerouteTrunkGroupKey=null,$capacityExceededTrapInitialCalls=null,$capacityExceededTrapOffsetCalls=null,$unreachableDestinationAction=null,$unreachableDestinationForwardAddress=null,$unreachableDestinationRerouteTrunkGroupKey=null,$invitationTimeout=null,$requireAuthentication=null,$sipAuthenticationUserName=null,$sipAuthenticationPassword=null,$hostedUserId=null) {
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
                    'invitationTimeout' => $invitationTimeout,
                    'requireAuthentication' => $requireAuthentication,
                    'sipAuthenticationUserName' => $sipAuthenticationUserName,
                    'sipAuthenticationPassword' => $sipAuthenticationPassword,
                    'hostedUserId' => $hostedUserId
                ]
            ];
        }

        # Get a Trunk Group Instance's profile.
        static public function GroupTrunkGroupGetInstanceRequest15($trunkGroupKey=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'trunkGroupKey' => $trunkGroupKey
                ]
            ];
        }

        # Get the group's voice portal branding settings.
        static public function GroupVoiceMessagingGroupGetVoicePortalBrandingRequest($serviceProviderId=null,$groupId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId
                ]
            ];
        }

        # Modify the group's voice portal branding settings.
        static public function GroupVoiceMessagingGroupModifyVoicePortalBrandingRequest($serviceProviderId=null,$groupId=null,$voicePortalGreetingSelection=null,$voicePortalGreetingFile=null,$voiceMessagingGreetingSelection=null,$voiceMessagingGreetingFile=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId,
                    'voicePortalGreetingSelection' => $voicePortalGreetingSelection,
                    'voicePortalGreetingFile' => $voicePortalGreetingFile,
                    'voiceMessagingGreetingSelection' => $voiceMessagingGreetingSelection,
                    'voiceMessagingGreetingFile' => $voiceMessagingGreetingFile
                ]
            ];
        }

        # Requests the configuration of a specified service provider access device.
        static public function ServiceProviderAccessDeviceGetRequest14sp6($serviceProviderId=null,$deviceName=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'deviceName' => $deviceName
                ]
            ];
        }

        # Get a service provider or enterprise's answer confirmation settings.
        static public function ServiceProviderAnswerConfirmationGetRequest($serviceProviderId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId
                ]
            ];
        }

        # Modify a service provider or enterprise's answer confirmation settings.
        static public function ServiceProviderAnswerConfirmationModifyRequest($serviceProviderId=null,$announcementMessageSelection=null,$confirmationMessageAudioFile=null,$confirmationTimoutSeconds=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'announcementMessageSelection' => $announcementMessageSelection,
                    'confirmationMessageAudioFile' => $confirmationMessageAudioFile,
                    'confirmationTimoutSeconds' => $confirmationTimoutSeconds
                ]
            ];
        }

        # Request the service provider level data associated with Call Processing
        static public function ServiceProviderCallProcessingGetPolicyRequest14sp7($serviceProviderId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId
                ]
            ];
        }

        # Request the service provider level data associated with Call Processing
        static public function ServiceProviderCallProcessingGetPolicyRequest15($serviceProviderId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId
                ]
            ];
        }

        # Request the service provider level data associated with Call Processing
        static public function ServiceProviderCallProcessingGetPolicyRequest15sp2($serviceProviderId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId
                ]
            ];
        }

        # Requests the service provider's password rules setting applicable to
        static public function ServiceProviderPasswordRulesGetRequest13mp2($serviceProviderId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId
                ]
            ];
        }

        # Get the service provider's voice portal branding settings.
        static public function ServiceProviderVoiceMessagingGroupGetVoicePortalBrandingRequest($serviceProviderId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId
                ]
            ];
        }

        # Modify the service provider's voice portal branding settings.
        static public function ServiceProviderVoiceMessagingGroupModifyVoicePortalBrandingRequest($serviceProviderId=null,$voicePortalGreetingSelection=null,$voicePortalGreetingFile=null,$voiceMessagingGreetingSelection=null,$voiceMessagingGreetingFile=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'voicePortalGreetingSelection' => $voicePortalGreetingSelection,
                    'voicePortalGreetingFile' => $voicePortalGreetingFile,
                    'voiceMessagingGreetingSelection' => $voiceMessagingGreetingSelection,
                    'voiceMessagingGreetingFile' => $voiceMessagingGreetingFile
                ]
            ];
        }

        # Requests the configuration of a specified system access device.
        static public function SystemAccessDeviceGetRequest14sp6($deviceName=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'deviceName' => $deviceName
                ]
            ];
        }

        # Request the system's automatic callback attributes.
        static public function SystemAutomaticCallbackGetRequest15() {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => null
            ];
        }

        # Request the system level data associated with Call Center.
        static public function SystemCallCenterGetRequest14sp9() {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => null
            ];
        }

        # Request the system level data associated with Call Processing Policy.
        static public function SystemCallProcessingGetPolicyRequest14sp7() {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => null
            ];
        }

        # Request the system level data associated with Call Processing Policy.
        static public function SystemCallProcessingGetPolicyRequest15() {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => null
            ];
        }

        # Request the system level data associated with Call Processing Policy.
        static public function SystemCallProcessingGetPolicyRequest15sp2() {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => null
            ];
        }

        # Get an existing Communication Barring Profile.
        static public function SystemCommunicationBarringProfileGetRequest($name=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'name' => $name
                ]
            ];
        }

        # Get all the attributes of a configurable treatment.
        static public function SystemConfigurableTreatmentGetRequest($treatmentId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'treatmentId' => $treatmentId
                ]
            ];
        }

        # Requests the information about the specified device type without regard to whether the
        static public function SystemDeviceTypeGetRequest14sp6($deviceType=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'deviceType' => $deviceType
                ]
            ];
        }

        # Add a new file repository.
        static public function SystemFileRepositoryDeviceAddRequest($name=null,$rootDirectory=null,$port=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'name' => $name,
                    'rootDirectory' => $rootDirectory,
                    'port' => $port
                ]
            ];
        }

        # Request to get the file repository information.
        static public function SystemFileRepositoryDeviceGetRequest($name=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'name' => $name
                ]
            ];
        }

        # Request to add a Media to the system.
        static public function SystemMediaAddRequest($mediaName=null,$codecName=null,$mediaType=null,$bandwidthEnforcementType=null,$mediaBandwidth=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'mediaName' => $mediaName,
                    'codecName' => $codecName,
                    'mediaType' => $mediaType,
                    'bandwidthEnforcementType' => $bandwidthEnforcementType,
                    'mediaBandwidth' => $mediaBandwidth
                ]
            ];
        }

        # Request to get the list of Network Server Sync system parameters.
        static public function SystemNetworkServerSyncParametersGetRequest14sp2() {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => null
            ];
        }

        # Requests the system's password rules setting applicable to
        static public function SystemPasswordRulesGetRequest13mp2() {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => null
            ];
        }

        # Request to add a sip device type.
        static public function SystemSIPDeviceTypeAddRequest15($deviceType=null,$numberOfPorts=null,$profile=null,$registrationCapable=null,$isConferenceDevice=null,$isMobilityManagerDevice=null,$isMusicOnHoldDevice=null,$RFC3264Hold=null,$isTrusted=null,$E164Capable=null,$routeAdvance=null,$forwardingOverride=null,$wirelessIntegration=null,$webBasedConfigURL=null,$isVideoCapable=null,$PBXIntegration=null,$useBusinessTrunkingContact=null,$staticRegistrationCapable=null,$cpeDeviceOptions=null,$earlyMediaSupport=null,$authenticateRefer=null,$autoConfigSoftClient=null,$authenticationMode=null,$tdmOverlay=null,$requiresBroadWorksCallWaitingTone=null,$requiresMWISubscription=null,$useHistoryInfoHeaderOnAccessSide=null) {
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
                    'requiresBroadWorksCallWaitingTone' => $requiresBroadWorksCallWaitingTone,
                    'requiresMWISubscription' => $requiresMWISubscription,
                    'useHistoryInfoHeaderOnAccessSide' => $useHistoryInfoHeaderOnAccessSide
                ]
            ];
        }

        # Request to get a sip device type.
        static public function SystemSIPDeviceTypeGetRequest15($deviceType=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'deviceType' => $deviceType
                ]
            ];
        }

        # Request to modify a sip device type.
        static public function SystemSIPDeviceTypeModifyRequest15($deviceType=null,$isObsolete=null,$registrationCapable=null,$RFC3264Hold=null,$isTrusted=null,$E164Capable=null,$routeAdvance=null,$forwardingOverride=null,$wirelessIntegration=null,$webBasedConfigURL=null,$isVideoCapable=null,$PBXIntegration=null,$useBusinessTrunkingContact=null,$staticRegistrationCapable=null,$cpeDeviceOptions=null,$earlyMediaSupport=null,$authenticateRefer=null,$autoConfigSoftClient=null,$authenticationMode=null,$tdmOverlay=null,$requiresBroadWorksCallWaitingTone=null,$requiresMWISubscription=null,$useHistoryInfoHeaderOnAccessSide=null) {
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
                    'requiresBroadWorksCallWaitingTone' => $requiresBroadWorksCallWaitingTone,
                    'requiresMWISubscription' => $requiresMWISubscription,
                    'useHistoryInfoHeaderOnAccessSide' => $useHistoryInfoHeaderOnAccessSide
                ]
            ];
        }

        # Get the system call processing configuration for all subscribers
        static public function SystemSubscriberGetCallProcessingParametersRequest14sp7() {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => null
            ];
        }

        # Get the system call processing configuration for all subscribers
        static public function SystemSubscriberGetCallProcessingParametersRequest15() {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => null
            ];
        }

        # Request the system level data associated with Voice Messaging.
        static public function SystemVoiceMessagingGroupGetRequest14() {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => null
            ];
        }

        # Modify the system level data associated with Voice Messaging.
        static public function SystemVoiceMessagingGroupModifyRequest($realDeleteForImap=null,$useDnInMailBody=null,$useShortSubjectLine=null,$maxGreetingLengthMinutes=null,$maxMessageLengthMinutes=null,$maxMailboxLengthMinutes=null,$doesMessageAge=null,$holdPeriodDays=null,$mailServerNetAddress=null,$mailServerProtocol=null,$defaultDeliveryFromAddress=null,$defaultNotificationFromAddress=null,$defaultVoicePortalLockoutFromAddress=null,$useOutgoingMWIOnSMDI=null,$mwiDelayInSeconds=null,$voicePortalScope=null,$networkWideMessaging=null,$useExternalRouting=null,$defaultExternalRoutingAddress=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'realDeleteForImap' => $realDeleteForImap,
                    'useDnInMailBody' => $useDnInMailBody,
                    'useShortSubjectLine' => $useShortSubjectLine,
                    'maxGreetingLengthMinutes' => $maxGreetingLengthMinutes,
                    'maxMessageLengthMinutes' => $maxMessageLengthMinutes,
                    'maxMailboxLengthMinutes' => $maxMailboxLengthMinutes,
                    'doesMessageAge' => $doesMessageAge,
                    'holdPeriodDays' => $holdPeriodDays,
                    'mailServerNetAddress' => $mailServerNetAddress,
                    'mailServerProtocol' => $mailServerProtocol,
                    'defaultDeliveryFromAddress' => $defaultDeliveryFromAddress,
                    'defaultNotificationFromAddress' => $defaultNotificationFromAddress,
                    'defaultVoicePortalLockoutFromAddress' => $defaultVoicePortalLockoutFromAddress,
                    'useOutgoingMWIOnSMDI' => $useOutgoingMWIOnSMDI,
                    'mwiDelayInSeconds' => $mwiDelayInSeconds,
                    'voicePortalScope' => $voicePortalScope,
                    'networkWideMessaging' => $networkWideMessaging,
                    'useExternalRouting' => $useExternalRouting,
                    'defaultExternalRoutingAddress' => $defaultExternalRoutingAddress
                ]
            ];
        }

        # Add a criteria to the user's BroadWorks Anywhere phone number.
        static public function UserBroadWorksAnywhereAddSelectiveCriteriaRequest($userId=null,$phoneNumber=null,$criteriaName=null,$timeSchedule=null,$fromDnCriteria=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId,
                    'phoneNumber' => $phoneNumber,
                    'criteriaName' => $criteriaName,
                    'timeSchedule' => $timeSchedule,
                    'fromDnCriteria' => $fromDnCriteria
                ]
            ];
        }

        # Get a criteria for the user's BroadWorks Anywhere phone number.
        static public function UserBroadWorksAnywhereGetSelectiveCriteriaRequest($userId=null,$phoneNumber=null,$criteriaName=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId,
                    'phoneNumber' => $phoneNumber,
                    'criteriaName' => $criteriaName
                ]
            ];
        }

        # Get the user's ACD state and the list of call centers the specified user belongs to.
        static public function UserCallCenterGetRequest($userId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId
                ]
            ];
        }

        # Add a criteria to the user's call forwarding selective service.
        static public function UserCallForwardingSelectiveAddCriteriaRequest($userId=null,$criteriaName=null,$timeSchedule=null,$forwardToNumberSelection=null,$forwardToPhoneNumber=null,$fromDnCriteria=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId,
                    'criteriaName' => $criteriaName,
                    'timeSchedule' => $timeSchedule,
                    'forwardToNumberSelection' => $forwardToNumberSelection,
                    'forwardToPhoneNumber' => $forwardToPhoneNumber,
                    'fromDnCriteria' => $fromDnCriteria
                ]
            ];
        }

        # Get a criteria for the user's call forwarding selective service.
        static public function UserCallForwardingSelectiveGetCriteriaRequest($userId=null,$criteriaName=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId,
                    'criteriaName' => $criteriaName
                ]
            ];
        }

        # Get the user's call forwarding selective service setting.        
        static public function UserCallForwardingSelectiveGetRequest($userId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId
                ]
            ];
        }

        # Request the user level data associated with Calling Party Category.
        static public function UserCallingPartyCategoryGetRequest($userId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId
                ]
            ];
        }

        # Modify the user level data associated with Calling Party Category.
        static public function UserCallingPartyCategoryModifyRequest($userId=null,$category=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId,
                    'category' => $category
                ]
            ];
        }

        # Add a criteria to the user's call notify service.        
        static public function UserCallNotifyAddCriteriaRequest($userId=null,$criteriaName=null,$timeSchedule=null,$fromDnCriteria=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId,
                    'criteriaName' => $criteriaName,
                    'timeSchedule' => $timeSchedule,
                    'fromDnCriteria' => $fromDnCriteria
                ]
            ];
        }

        # Get a criteria for the user's call notify service.        
        static public function UserCallNotifyGetCriteriaRequest($userId=null,$criteriaName=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId,
                    'criteriaName' => $criteriaName
                ]
            ];
        }

        # Request the user level data associated with Call Processing Policy.
        static public function UserCallProcessingGetPolicyRequest14sp7($userId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId
                ]
            ];
        }

        # Add a criteria to the user's custom ringback service.
        static public function UserCustomRingbackUserAddCriteriaRequest($userId=null,$criteriaName=null,$timeSchedule=null,$fromDnCriteria=null,$audioSelection=null,$audioFile=null,$videoSelection=null,$videoFile=null,$callWaitingAudioSelection=null,$callWaitingAudioFile=null,$callWaitingVideoSelection=null,$callWaitingVideoFile=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId,
                    'criteriaName' => $criteriaName,
                    'timeSchedule' => $timeSchedule,
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

        # Get a criteria for the user's custom ringback service.
        static public function UserCustomRingbackUserGetCriteriaRequest($userId=null,$criteriaName=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId,
                    'criteriaName' => $criteriaName
                ]
            ];
        }

        # Get a criteria for the user's custom ringback service.
        static public function UserCustomRingbackUserGetCriteriaRequest15sp2($userId=null,$criteriaName=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId,
                    'criteriaName' => $criteriaName
                ]
            ];
        }

        # Modify a criteria for the user's custom ringback service.
        static public function UserCustomRingbackUserModifyCriteriaRequest($userId=null,$criteriaName=null,$newCriteriaName=null,$timeSchedule=null,$fromDnCriteria=null,$audioSelection=null,$audioFile=null,$videoSelection=null,$videoFile=null,$callWaitingAudioSelection=null,$callWaitingAudioFile=null,$callWaitingVideoSelection=null,$callWaitingVideoFile=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId,
                    'criteriaName' => $criteriaName,
                    'newCriteriaName' => $newCriteriaName,
                    'timeSchedule' => $timeSchedule,
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

        # Request user's call logs. It is possible to get a subset of the total list of calls
        static public function UserEnhancedCallLogsGetListRequest14sp4($userId=null,$callLogType=null,$startingOffset=null,$numCalls=null) {
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

        # Request to get the user information.  The response is either UserGetResponse14sp4
        static public function UserGetRequest14sp9($userId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId
                ]
            ];
        }

        # Get the user's intercept user service settings.
        static public function UserInterceptUserGetRequest($userId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId
                ]
            ];
        }

        # Get the user's intercept user service settings.
        static public function UserInterceptUserGetRequest16($userId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId
                ]
            ];
        }

        # Modify the user's intercept user service settings.
        static public function UserInterceptUserModifyRequest($userId=null,$isActive=null,$announcementSelection=null,$audioFile=null,$videoFile=null,$playNewPhoneNumber=null,$newPhoneNumber=null,$transferOnZeroToPhoneNumber=null,$transferPhoneNumber=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId,
                    'isActive' => $isActive,
                    'announcementSelection' => $announcementSelection,
                    'audioFile' => $audioFile,
                    'videoFile' => $videoFile,
                    'playNewPhoneNumber' => $playNewPhoneNumber,
                    'newPhoneNumber' => $newPhoneNumber,
                    'transferOnZeroToPhoneNumber' => $transferOnZeroToPhoneNumber,
                    'transferPhoneNumber' => $transferPhoneNumber
                ]
            ];
        }

        # Request to modify a user. The response is either
        static public function UserModifyRequest14sp9($userId=null,$lastName=null,$firstName=null,$callingLineIdLastName=null,$callingLineIdFirstName=null,$hiraganaLastName=null,$hiraganaFirstName=null,$phoneNumber=null,$extension=null,$callingLineIdPhoneNumber=null,$oldPassword=null,$newPassword=null,$department=null,$language=null,$timeZone=null,$sipAliasList=null,$endpoint=null,$title=null,$pagerPhoneNumber=null,$mobilePhoneNumber=null,$emailAddress=null,$yahooId=null,$addressLocation=null,$address=null,$networkClassOfService=null) {
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
                    'address' => $address,
                    'networkClassOfService' => $networkClassOfService
                ]
            ];
        }

        # Request the user level data associated with Music On Hold User.
        static public function UserMusicOnHoldUserGetRequest($userId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId
                ]
            ];
        }

        # Modify data for Music On Hold User.
        static public function UserMusicOnHoldUserModifyRequest($userId=null,$source=null,$useAlternateSourceForInternalCalls=null,$internalSource=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId,
                    'source' => $source,
                    'useAlternateSourceForInternalCalls' => $useAlternateSourceForInternalCalls,
                    'internalSource' => $internalSource
                ]
            ];
        }

        # Add a criteria to the user's priority alert service.        
        static public function UserPriorityAlertAddCriteriaRequest($userId=null,$criteriaName=null,$timeSchedule=null,$fromDnCriteria=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId,
                    'criteriaName' => $criteriaName,
                    'timeSchedule' => $timeSchedule,
                    'fromDnCriteria' => $fromDnCriteria
                ]
            ];
        }

        # Get a criteria for the user's priority alert service.        
        static public function UserPriorityAlertGetCriteriaRequest($userId=null,$criteriaName=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId,
                    'criteriaName' => $criteriaName
                ]
            ];
        }

        # Add a criteria to the user's selective call acceptance service.        
        static public function UserSelectiveCallAcceptanceAddCriteriaRequest($userId=null,$criteriaName=null,$timeSchedule=null,$fromDnCriteria=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId,
                    'criteriaName' => $criteriaName,
                    'timeSchedule' => $timeSchedule,
                    'fromDnCriteria' => $fromDnCriteria
                ]
            ];
        }

        # Get a criteria for the user's selective call acceptance service.        
        static public function UserSelectiveCallAcceptanceGetCriteriaRequest($userId=null,$criteriaName=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId,
                    'criteriaName' => $criteriaName
                ]
            ];
        }

        # Add a criteria to the user's selective call rejection service.
        static public function UserSelectiveCallRejectionAddCriteriaRequest($userId=null,$criteriaName=null,$timeSchedule=null,$fromDnCriteria=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId,
                    'criteriaName' => $criteriaName,
                    'timeSchedule' => $timeSchedule,
                    'fromDnCriteria' => $fromDnCriteria
                ]
            ];
        }

        # Get a criteria for the user's selective call rejection service.
        static public function UserSelectiveCallRejectionGetCriteriaRequest($userId=null,$criteriaName=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId,
                    'criteriaName' => $criteriaName
                ]
            ];
        }

        # Modify a criteria for the user's selective call rejection service.
        static public function UserSelectiveCallRejectionModifyCriteriaRequest($userId=null,$criteriaName=null,$newCriteriaName=null,$timeSchedule=null,$fromDnCriteria=null,$holidaySchedule=null,$blacklisted=null) {
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

        # Add a criteria to the user's sequential ring service.        
        static public function UserSequentialRingAddCriteriaRequest($userId=null,$criteriaName=null,$timeSchedule=null,$fromDnCriteria=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId,
                    'criteriaName' => $criteriaName,
                    'timeSchedule' => $timeSchedule,
                    'fromDnCriteria' => $fromDnCriteria
                ]
            ];
        }

        # Get a criteria for the user's sequential ring service.        
        static public function UserSequentialRingGetCriteriaRequest($userId=null,$criteriaName=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId,
                    'criteriaName' => $criteriaName
                ]
            ];
        }

        # Get the user's voice messaging greeting information.
        static public function UserVoiceMessagingUserGetGreetingRequest13mp16($userId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId
                ]
            ];
        }

        # Get the user's voice messaging voice portal settings.
        static public function UserVoiceMessagingUserGetVoicePortalRequest($userId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId
                ]
            ];
        }

        # Modify the user's voice messaging greeting.
        static public function UserVoiceMessagingUserModifyGreetingRequest($userId=null,$busyAnnouncementSelection=null,$busyPersonalAudioFile=null,$busyPersonalVideoFile=null,$noAnswerAnnouncementSelection=null,$noAnswerPersonalAudioFile=null,$noAnswerPersonalVideoFile=null,$noAnswerAlternateGreeting01=null,$noAnswerAlternateGreeting02=null,$noAnswerAlternateGreeting03=null,$noAnswerNumberOfRings=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId,
                    'busyAnnouncementSelection' => $busyAnnouncementSelection,
                    'busyPersonalAudioFile' => $busyPersonalAudioFile,
                    'busyPersonalVideoFile' => $busyPersonalVideoFile,
                    'noAnswerAnnouncementSelection' => $noAnswerAnnouncementSelection,
                    'noAnswerPersonalAudioFile' => $noAnswerPersonalAudioFile,
                    'noAnswerPersonalVideoFile' => $noAnswerPersonalVideoFile,
                    'noAnswerAlternateGreeting01' => $noAnswerAlternateGreeting01,
                    'noAnswerAlternateGreeting02' => $noAnswerAlternateGreeting02,
                    'noAnswerAlternateGreeting03' => $noAnswerAlternateGreeting03,
                    'noAnswerNumberOfRings' => $noAnswerNumberOfRings
                ]
            ];
        }

        # Modify the user's voice messaging voice portal settings.
        static public function UserVoiceMessagingUserModifyVoicePortalRequest($userId=null,$usePersonalizedName=null,$voicePortalAutoLogin=null,$personalizedNameAudioFile=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId,
                    'usePersonalizedName' => $usePersonalizedName,
                    'voicePortalAutoLogin' => $voicePortalAutoLogin,
                    'personalizedNameAudioFile' => $personalizedNameAudioFile
                ]
            ];
        }

}