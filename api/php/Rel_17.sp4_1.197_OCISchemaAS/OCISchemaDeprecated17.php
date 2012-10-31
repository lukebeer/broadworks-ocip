<?php
class OCISchemaDeprecated17 {
        # Requests the Group administrator's policy settings.
        static public function GroupAdminGetPolicyRequest16sp2($userId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId
                ]
            ];
        }

        # Requests the Group administrator's policy settings.
        static public function GroupAdminGetPolicyRequest17($userId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId
                ]
            ];
        }

        # Add a Auto Attendant instance to a group.
        static public function GroupAutoAttendantAddInstanceRequest16($serviceProviderId=null,$groupId=null,$serviceUserId=null,$serviceInstanceProfile=null,$enableVideo=null,$businessHours=null,$holidayScheduleName=null,$extensionDialingScope=null,$nameDialingScope=null,$nameDialingEntries=null,$businessHoursMenu=null,$afterHoursMenu=null) {
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
        static public function GroupAutoAttendantGetInstanceRequest17($serviceUserId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceUserId' => $serviceUserId
                ]
            ];
        }

        # Request to modify an Auto Attendant instance.
        static public function GroupAutoAttendantModifyInstanceRequest16($serviceUserId=null,$serviceInstanceProfile=null,$enableVideo=null,$businessHours=null,$holidayScheduleName=null,$extensionDialingScope=null,$nameDialingScope=null,$nameDialingEntries=null,$businessHoursMenu=null,$afterHoursMenu=null) {
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
        static public function GroupCallCenterAddInstanceRequest17($serviceProviderId=null,$groupId=null,$serviceUserId=null,$serviceInstanceProfile=null,$type=null,$policy=null,$enableVideo=null,$queueLength=null,$reportingServerName=null,$allowCallerToDialEscapeDigit=null,$escapeDigit=null,$resetCallStatisticsUponEntryInQueue=null,$allowAgentLogoff=null,$allowCallWaitingForAgents=null,$allowCallsToAgentsInWrapUp=null,$overrideAgentWrapUpTime=null,$wrapUpSeconds=null,$forceDeliveryOfCalls=null,$forceDeliveryWaitTimeSeconds=null,$enableAutomaticStateChangeForAgents=null,$agentStateAfterCall=null,$agentUnavailableCode=null,$externalPreferredAudioCodec=null,$internalPreferredAudioCodec=null,$playRingingWhenOfferingCall=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId,
                    'serviceUserId' => $serviceUserId,
                    'serviceInstanceProfile' => $serviceInstanceProfile,
                    'type' => $type,
                    'policy' => $policy,
                    'enableVideo' => $enableVideo,
                    'queueLength' => $queueLength,
                    'reportingServerName' => $reportingServerName,
                    'allowCallerToDialEscapeDigit' => $allowCallerToDialEscapeDigit,
                    'escapeDigit' => $escapeDigit,
                    'resetCallStatisticsUponEntryInQueue' => $resetCallStatisticsUponEntryInQueue,
                    'allowAgentLogoff' => $allowAgentLogoff,
                    'allowCallWaitingForAgents' => $allowCallWaitingForAgents,
                    'allowCallsToAgentsInWrapUp' => $allowCallsToAgentsInWrapUp,
                    'overrideAgentWrapUpTime' => $overrideAgentWrapUpTime,
                    'wrapUpSeconds' => $wrapUpSeconds,
                    'forceDeliveryOfCalls' => $forceDeliveryOfCalls,
                    'forceDeliveryWaitTimeSeconds' => $forceDeliveryWaitTimeSeconds,
                    'enableAutomaticStateChangeForAgents' => $enableAutomaticStateChangeForAgents,
                    'agentStateAfterCall' => $agentStateAfterCall,
                    'agentUnavailableCode' => $agentUnavailableCode,
                    'externalPreferredAudioCodec' => $externalPreferredAudioCodec,
                    'internalPreferredAudioCodec' => $internalPreferredAudioCodec,
                    'playRingingWhenOfferingCall' => $playRingingWhenOfferingCall
                ]
            ];
        }

        # Add a Call Center instance to a group.
        static public function GroupCallCenterAddInstanceRequest17sp1($serviceProviderId=null,$groupId=null,$serviceUserId=null,$serviceInstanceProfile=null,$type=null,$policy=null,$enableVideo=null,$queueLength=null,$enableReporting=null,$reportingServerName=null,$allowCallerToDialEscapeDigit=null,$escapeDigit=null,$resetCallStatisticsUponEntryInQueue=null,$allowAgentLogoff=null,$allowCallWaitingForAgents=null,$allowCallsToAgentsInWrapUp=null,$overrideAgentWrapUpTime=null,$wrapUpSeconds=null,$forceDeliveryOfCalls=null,$forceDeliveryWaitTimeSeconds=null,$enableAutomaticStateChangeForAgents=null,$agentStateAfterCall=null,$agentUnavailableCode=null,$externalPreferredAudioCodec=null,$internalPreferredAudioCodec=null,$playRingingWhenOfferingCall=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId,
                    'serviceUserId' => $serviceUserId,
                    'serviceInstanceProfile' => $serviceInstanceProfile,
                    'type' => $type,
                    'policy' => $policy,
                    'enableVideo' => $enableVideo,
                    'queueLength' => $queueLength,
                    'enableReporting' => $enableReporting,
                    'reportingServerName' => $reportingServerName,
                    'allowCallerToDialEscapeDigit' => $allowCallerToDialEscapeDigit,
                    'escapeDigit' => $escapeDigit,
                    'resetCallStatisticsUponEntryInQueue' => $resetCallStatisticsUponEntryInQueue,
                    'allowAgentLogoff' => $allowAgentLogoff,
                    'allowCallWaitingForAgents' => $allowCallWaitingForAgents,
                    'allowCallsToAgentsInWrapUp' => $allowCallsToAgentsInWrapUp,
                    'overrideAgentWrapUpTime' => $overrideAgentWrapUpTime,
                    'wrapUpSeconds' => $wrapUpSeconds,
                    'forceDeliveryOfCalls' => $forceDeliveryOfCalls,
                    'forceDeliveryWaitTimeSeconds' => $forceDeliveryWaitTimeSeconds,
                    'enableAutomaticStateChangeForAgents' => $enableAutomaticStateChangeForAgents,
                    'agentStateAfterCall' => $agentStateAfterCall,
                    'agentUnavailableCode' => $agentUnavailableCode,
                    'externalPreferredAudioCodec' => $externalPreferredAudioCodec,
                    'internalPreferredAudioCodec' => $internalPreferredAudioCodec,
                    'playRingingWhenOfferingCall' => $playRingingWhenOfferingCall
                ]
            ];
        }

        # Request to get all the information of a Call Center instance.
        static public function GroupCallCenterGetInstanceRequest17($serviceUserId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceUserId' => $serviceUserId
                ]
            ];
        }

        # Request to get all the information of a Call Center instance.
        static public function GroupCallCenterGetInstanceRequest17sp1($serviceUserId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceUserId' => $serviceUserId
                ]
            ];
        }

        # Request to get the call center statistics reporting settings.
        static public function GroupCallCenterGetInstanceStatisticsReportingRequest16($serviceUserId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceUserId' => $serviceUserId
                ]
            ];
        }

        # Get a call center's holiday service settings.
        static public function GroupCallCenterHolidayServiceGetRequest17($serviceUserId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceUserId' => $serviceUserId
                ]
            ];
        }

        # Modify a call center's holiday service settings.
        static public function GroupCallCenterHolidayServiceModifyRequest17($serviceUserId=null,$action=null,$holidaySchedule=null,$transferPhoneNumber=null,$playAnnouncementBeforeAction=null,$audioMessageSelection=null,$audioUrlList=null,$audioFileList=null,$videoMessageSelection=null,$videoUrlList=null,$videoFileList=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceUserId' => $serviceUserId,
                    'action' => $action,
                    'holidaySchedule' => $holidaySchedule,
                    'transferPhoneNumber' => $transferPhoneNumber,
                    'playAnnouncementBeforeAction' => $playAnnouncementBeforeAction,
                    'audioMessageSelection' => $audioMessageSelection,
                    'audioUrlList' => $audioUrlList,
                    'audioFileList' => $audioFileList,
                    'videoMessageSelection' => $videoMessageSelection,
                    'videoUrlList' => $videoUrlList,
                    'videoFileList' => $videoFileList
                ]
            ];
        }

        # Request to modify a Call Center instance.
        static public function GroupCallCenterModifyInstanceRequest16($serviceUserId=null,$serviceInstanceProfile=null,$type=null,$policy=null,$enableVideo=null,$queueLength=null,$reportingServerName=null,$allowCallerToDialEscapeDigit=null,$escapeDigit=null,$resetCallStatisticsUponEntryInQueue=null,$allowAgentLogoff=null,$allowCallWaitingForAgents=null,$allowCallsToAgentsInWrapUp=null,$overrideAgentWrapUpTime=null,$wrapUpSeconds=null,$forceDeliveryOfCalls=null,$forceDeliveryWaitTimeSeconds=null,$enableAutomaticStateChangeForAgents=null,$agentStateAfterCall=null,$agentUnavailableCode=null,$externalPreferredAudioCodec=null,$internalPreferredAudioCodec=null,$playRingingWhenOfferingCall=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceUserId' => $serviceUserId,
                    'serviceInstanceProfile' => $serviceInstanceProfile,
                    'type' => $type,
                    'policy' => $policy,
                    'enableVideo' => $enableVideo,
                    'queueLength' => $queueLength,
                    'reportingServerName' => $reportingServerName,
                    'allowCallerToDialEscapeDigit' => $allowCallerToDialEscapeDigit,
                    'escapeDigit' => $escapeDigit,
                    'resetCallStatisticsUponEntryInQueue' => $resetCallStatisticsUponEntryInQueue,
                    'allowAgentLogoff' => $allowAgentLogoff,
                    'allowCallWaitingForAgents' => $allowCallWaitingForAgents,
                    'allowCallsToAgentsInWrapUp' => $allowCallsToAgentsInWrapUp,
                    'overrideAgentWrapUpTime' => $overrideAgentWrapUpTime,
                    'wrapUpSeconds' => $wrapUpSeconds,
                    'forceDeliveryOfCalls' => $forceDeliveryOfCalls,
                    'forceDeliveryWaitTimeSeconds' => $forceDeliveryWaitTimeSeconds,
                    'enableAutomaticStateChangeForAgents' => $enableAutomaticStateChangeForAgents,
                    'agentStateAfterCall' => $agentStateAfterCall,
                    'agentUnavailableCode' => $agentUnavailableCode,
                    'externalPreferredAudioCodec' => $externalPreferredAudioCodec,
                    'internalPreferredAudioCodec' => $internalPreferredAudioCodec,
                    'playRingingWhenOfferingCall' => $playRingingWhenOfferingCall
                ]
            ];
        }

        # Modify the Call Center statistics reporting frequency and destination.
        static public function GroupCallCenterModifyInstanceStatisticsReportingRequest14sp9($serviceUserId=null,$generateDailyReport=null,$collectionPeriodMinutes=null,$reportingEmailAddress1=null,$reportingEmailAddress2=null,$statisticsSource=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceUserId' => $serviceUserId,
                    'generateDailyReport' => $generateDailyReport,
                    'collectionPeriodMinutes' => $collectionPeriodMinutes,
                    'reportingEmailAddress1' => $reportingEmailAddress1,
                    'reportingEmailAddress2' => $reportingEmailAddress2,
                    'statisticsSource' => $statisticsSource
                ]
            ];
        }

        # Get a call center's night service settings.
        static public function GroupCallCenterNightServiceGetRequest17($serviceUserId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceUserId' => $serviceUserId
                ]
            ];
        }

        # Modify a call center's night service settings.
        static public function GroupCallCenterNightServiceModifyRequest17($serviceUserId=null,$action=null,$businessHours=null,$forceNightService=null,$allowManualOverrideViaFAC=null,$transferPhoneNumber=null,$playAnnouncementBeforeAction=null,$audioMessageSelection=null,$audioUrlList=null,$audioFileList=null,$videoMessageSelection=null,$videoUrlList=null,$videoFileList=null,$manualAnnouncementMode=null,$manualAudioMessageSelection=null,$manualAudioUrlList=null,$manualAudioFileList=null,$manualVideoMessageSelection=null,$manualVideoUrlList=null,$manualVideoFileList=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceUserId' => $serviceUserId,
                    'action' => $action,
                    'businessHours' => $businessHours,
                    'forceNightService' => $forceNightService,
                    'allowManualOverrideViaFAC' => $allowManualOverrideViaFAC,
                    'transferPhoneNumber' => $transferPhoneNumber,
                    'playAnnouncementBeforeAction' => $playAnnouncementBeforeAction,
                    'audioMessageSelection' => $audioMessageSelection,
                    'audioUrlList' => $audioUrlList,
                    'audioFileList' => $audioFileList,
                    'videoMessageSelection' => $videoMessageSelection,
                    'videoUrlList' => $videoUrlList,
                    'videoFileList' => $videoFileList,
                    'manualAnnouncementMode' => $manualAnnouncementMode,
                    'manualAudioMessageSelection' => $manualAudioMessageSelection,
                    'manualAudioUrlList' => $manualAudioUrlList,
                    'manualAudioFileList' => $manualAudioFileList,
                    'manualVideoMessageSelection' => $manualVideoMessageSelection,
                    'manualVideoUrlList' => $manualVideoUrlList,
                    'manualVideoFileList' => $manualVideoFileList
                ]
            ];
        }

        # Adds a Call Park group.
        static public function GroupCallParkAddInstanceRequest($serviceProviderId=null,$groupId=null,$name=null,$userId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId,
                    'name' => $name,
                    'userId' => $userId
                ]
            ];
        }

        # Gets a Call Park group.
        static public function GroupCallParkGetInstanceRequest($serviceProviderId=null,$groupId=null,$name=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId,
                    'name' => $name
                ]
            ];
        }

        # Gets the Call Park Group settings.
        static public function GroupCallParkGetRequest($serviceProviderId=null,$groupId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId
                ]
            ];
        }

        # Request the group level data associated with Call Processing Policy.
        static public function GroupCallProcessingGetPolicyRequest16sp2($serviceProviderId=null,$groupId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId
                ]
            ];
        }

        # Request the group level data associated with Call Processing Policy.
        static public function GroupCallProcessingGetPolicyRequest17($serviceProviderId=null,$groupId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId
                ]
            ];
        }

        # Request the group level data associated with Call Processing Policy.
        static public function GroupCallProcessingGetPolicyRequest17sp3($serviceProviderId=null,$groupId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId
                ]
            ];
        }

        # Replaced by: GroupGroupPagingGetInstanceRequest17sp3
        static public function GroupGroupPagingGetInstanceRequest($serviceUserId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceUserId' => $serviceUserId
                ]
            ];
        }

        # Add a Hunt Group instance to a group.
        static public function GroupHuntGroupAddInstanceRequest14($serviceProviderId=null,$groupId=null,$serviceUserId=null,$serviceInstanceProfile=null,$policy=null,$huntAfterNoAnswer=null,$noAnswerNumberOfRings=null,$forwardAfterTimeout=null,$forwardTimeoutSeconds=null,$forwardToPhoneNumber=null,$agentUserId=null,$allowCallWaitingForAgents=null) {
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
                    'agentUserId' => $agentUserId,
                    'allowCallWaitingForAgents' => $allowCallWaitingForAgents
                ]
            ];
        }

        # Add a Hunt Group instance to a group.
        static public function GroupHuntGroupAddInstanceRequest17sp3($serviceProviderId=null,$groupId=null,$serviceUserId=null,$serviceInstanceProfile=null,$policy=null,$huntAfterNoAnswer=null,$noAnswerNumberOfRings=null,$forwardAfterTimeout=null,$forwardTimeoutSeconds=null,$forwardToPhoneNumber=null,$agentUserId=null,$allowCallWaitingForAgents=null,$useSystemHuntGroupCLIDSetting=null,$includeHuntGroupNameInCLID=null) {
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
                    'agentUserId' => $agentUserId,
                    'allowCallWaitingForAgents' => $allowCallWaitingForAgents,
                    'useSystemHuntGroupCLIDSetting' => $useSystemHuntGroupCLIDSetting,
                    'includeHuntGroupNameInCLID' => $includeHuntGroupNameInCLID
                ]
            ];
        }

        # Request to get all the information of a Hunt Group instance.
        static public function GroupHuntGroupGetInstanceRequest17($serviceUserId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceUserId' => $serviceUserId
                ]
            ];
        }

        # Request to get all the information of a Hunt Group instance.
        static public function GroupHuntGroupGetInstanceRequest17sp3($serviceUserId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceUserId' => $serviceUserId
                ]
            ];
        }

        # Request to get all the information of a Meet-Me Conferencing bridge.
        static public function GroupMeetMeConferencingGetInstanceRequest($serviceUserId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceUserId' => $serviceUserId
                ]
            ];
        }

        # Get a route point's holiday service settings.
        static public function GroupRoutePointHolidayServiceGetRequest($serviceUserId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceUserId' => $serviceUserId
                ]
            ];
        }

        # Modify a route point's holiday service settings.
        static public function GroupRoutePointHolidayServiceModifyRequest($serviceUserId=null,$action=null,$holidaySchedule=null,$transferPhoneNumber=null,$playAnnouncementBeforeAction=null,$audioMessageSelection=null,$audioUrlList=null,$audioFileList=null,$videoMessageSelection=null,$videoUrlList=null,$videoFileList=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceUserId' => $serviceUserId,
                    'action' => $action,
                    'holidaySchedule' => $holidaySchedule,
                    'transferPhoneNumber' => $transferPhoneNumber,
                    'playAnnouncementBeforeAction' => $playAnnouncementBeforeAction,
                    'audioMessageSelection' => $audioMessageSelection,
                    'audioUrlList' => $audioUrlList,
                    'audioFileList' => $audioFileList,
                    'videoMessageSelection' => $videoMessageSelection,
                    'videoUrlList' => $videoUrlList,
                    'videoFileList' => $videoFileList
                ]
            ];
        }

        # Get a route point's night service settings.
        static public function GroupRoutePointNightServiceGetRequest($serviceUserId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceUserId' => $serviceUserId
                ]
            ];
        }

        # Modify a route point's night service settings.
        static public function GroupRoutePointNightServiceModifyRequest($serviceUserId=null,$action=null,$businessHours=null,$forceNightService=null,$transferPhoneNumber=null,$playAnnouncementBeforeAction=null,$audioMessageSelection=null,$audioUrlList=null,$audioFileList=null,$videoMessageSelection=null,$videoUrlList=null,$videoFileList=null,$manualAnnouncementMode=null,$manualAudioMessageSelection=null,$manualAudioUrlList=null,$manualAudioFileList=null,$manualVideoMessageSelection=null,$manualVideoUrlList=null,$manualVideoFileList=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceUserId' => $serviceUserId,
                    'action' => $action,
                    'businessHours' => $businessHours,
                    'forceNightService' => $forceNightService,
                    'transferPhoneNumber' => $transferPhoneNumber,
                    'playAnnouncementBeforeAction' => $playAnnouncementBeforeAction,
                    'audioMessageSelection' => $audioMessageSelection,
                    'audioUrlList' => $audioUrlList,
                    'audioFileList' => $audioFileList,
                    'videoMessageSelection' => $videoMessageSelection,
                    'videoUrlList' => $videoUrlList,
                    'videoFileList' => $videoFileList,
                    'manualAnnouncementMode' => $manualAnnouncementMode,
                    'manualAudioMessageSelection' => $manualAudioMessageSelection,
                    'manualAudioUrlList' => $manualAudioUrlList,
                    'manualAudioFileList' => $manualAudioFileList,
                    'manualVideoMessageSelection' => $manualVideoMessageSelection,
                    'manualVideoUrlList' => $manualVideoUrlList,
                    'manualVideoFileList' => $manualVideoFileList
                ]
            ];
        }

        # Get the list of a group schedules. The list can be filtered by schedule type.
        static public function GroupScheduleGetListRequest($serviceProviderId=null,$groupId=null,$scheduleType=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId,
                    'scheduleType' => $scheduleType
                ]
            ];
        }

        # Request the data associated with Privacy for a service instance.
        static public function GroupServiceInstancePrivacyGetRequest($serviceUserId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceUserId' => $serviceUserId
                ]
            ];
        }

        # Get the speed dial 100 service settings for a group.
        static public function GroupSpeedDial100GetRequest($serviceProviderId=null,$groupId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId
                ]
            ];
        }

        # Replaced by: GroupTrunkGroupAddInstanceRequest17sp4
        static public function GroupTrunkGroupAddInstanceRequest17($serviceProviderId=null,$groupId=null,$name=null,$pilotUser=null,$department=null,$accessDevice=null,$maxActiveCalls=null,$maxIncomingCalls=null,$maxOutgoingCalls=null,$enableBursting=null,$burstingMaxActiveCalls=null,$burstingMaxIncomingCalls=null,$burstingMaxOutgoingCalls=null,$capacityExceededAction=null,$capacityExceededForwardAddress=null,$capacityExceededRerouteTrunkGroupKey=null,$capacityExceededTrapInitialCalls=null,$capacityExceededTrapOffsetCalls=null,$unreachableDestinationAction=null,$unreachableDestinationForwardAddress=null,$unreachableDestinationRerouteTrunkGroupKey=null,$invitationTimeout=null,$requireAuthentication=null,$sipAuthenticationUserName=null,$sipAuthenticationPassword=null,$hostedUserId=null,$trunkGroupIdentity=null,$otgDtgIdentity=null,$includeTrunkGroupIdentity=null,$includeDtgIdentity=null,$enableNetworkAddressIdentity=null,$allowUnscreenedCalls=null,$allowUnscreenedEmergencyCalls=null,$pilotUserCallingLineIdentityPolicy=null,$pilotUserChargeNumberPolicy=null,$callForwardingAlwaysAction=null,$callForwardingAlwaysForwardAddress=null,$callForwardingAlwaysRerouteTrunkGroupKey=null,$peeringDomain=null,$routeToPeeringDomain=null) {
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
                    'callForwardingAlwaysRerouteTrunkGroupKey' => $callForwardingAlwaysRerouteTrunkGroupKey,
                    'peeringDomain' => $peeringDomain,
                    'routeToPeeringDomain' => $routeToPeeringDomain
                ]
            ];
        }

        # Add a Trunk Group instance to a group.
        static public function GroupTrunkGroupAddInstanceRequest17sp3($serviceProviderId=null,$groupId=null,$name=null,$pilotUser=null,$department=null,$accessDevice=null,$maxActiveCalls=null,$maxIncomingCalls=null,$maxOutgoingCalls=null,$enableBursting=null,$burstingMaxActiveCalls=null,$burstingMaxIncomingCalls=null,$burstingMaxOutgoingCalls=null,$capacityExceededAction=null,$capacityExceededForwardAddress=null,$capacityExceededRerouteTrunkGroupKey=null,$capacityExceededTrapInitialCalls=null,$capacityExceededTrapOffsetCalls=null,$unreachableDestinationAction=null,$unreachableDestinationForwardAddress=null,$unreachableDestinationRerouteTrunkGroupKey=null,$invitationTimeout=null,$requireAuthentication=null,$sipAuthenticationUserName=null,$sipAuthenticationPassword=null,$hostedUserId=null,$trunkGroupIdentity=null,$otgDtgIdentity=null,$includeTrunkGroupIdentity=null,$includeDtgIdentity=null,$enableNetworkAddressIdentity=null,$allowUnscreenedCalls=null,$allowUnscreenedEmergencyCalls=null,$pilotUserCallingLineIdentityPolicy=null,$pilotUserChargeNumberPolicy=null,$callForwardingAlwaysAction=null,$callForwardingAlwaysForwardAddress=null,$callForwardingAlwaysRerouteTrunkGroupKey=null,$peeringDomain=null,$routeToPeeringDomain=null,$prefixEnabled=null,$prefix=null,$statefulReroutingEnabled=null,$sendContinuousOptionsMessage=null,$continuousOptionsSendingIntervalSeconds=null,$failureOptionsSendingIntervalSeconds=null,$failureThresholdCounter=null,$successThresholdCounter=null,$inviteFailureThresholdCounter=null,$inviteFailureThresholdWindowSeconds=null) {
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
                    'callForwardingAlwaysRerouteTrunkGroupKey' => $callForwardingAlwaysRerouteTrunkGroupKey,
                    'peeringDomain' => $peeringDomain,
                    'routeToPeeringDomain' => $routeToPeeringDomain,
                    'prefixEnabled' => $prefixEnabled,
                    'prefix' => $prefix,
                    'statefulReroutingEnabled' => $statefulReroutingEnabled,
                    'sendContinuousOptionsMessage' => $sendContinuousOptionsMessage,
                    'continuousOptionsSendingIntervalSeconds' => $continuousOptionsSendingIntervalSeconds,
                    'failureOptionsSendingIntervalSeconds' => $failureOptionsSendingIntervalSeconds,
                    'failureThresholdCounter' => $failureThresholdCounter,
                    'successThresholdCounter' => $successThresholdCounter,
                    'inviteFailureThresholdCounter' => $inviteFailureThresholdCounter,
                    'inviteFailureThresholdWindowSeconds' => $inviteFailureThresholdWindowSeconds
                ]
            ];
        }

        # Get a Trunk Group Instance's profile.
        static public function GroupTrunkGroupGetInstanceRequest17($trunkGroupKey=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'trunkGroupKey' => $trunkGroupKey
                ]
            ];
        }

        # Get a Trunk Group Instance's profile.
        static public function GroupTrunkGroupGetInstanceRequest17sp3($trunkGroupKey=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'trunkGroupKey' => $trunkGroupKey
                ]
            ];
        }

        # Requests the service provider administrator's policy settings.
        static public function ServiceProviderAdminGetPolicyRequest16sp2($userId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId
                ]
            ];
        }

        # Requests the service provider administrator's policy settings.
        static public function ServiceProviderAdminGetPolicyRequest17($userId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId
                ]
            ];
        }

        # Requests the service provider administrator's policy settings.
        static public function ServiceProviderAdminGetPolicyRequest17sp1($userId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId
                ]
            ];
        }

        # Add a new Communication Barring Profile.
        static public function ServiceProviderCommunicationBarringProfileAddRequest($serviceProviderId=null,$name=null,$description=null,$originatingDefaultAction=null,$originatingDefaultTreatmentId=null,$originatingDefaultTransferNumber=null,$originatingDefaultCallTimeout=null,$originatingRule=null,$redirectingDefaultAction=null,$redirectingDefaultCallTimeout=null,$redirectingRule=null,$incomingDefaultAction=null,$incomingDefaultCallTimeout=null,$incomingRule=null,$becomeDefault=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'name' => $name,
                    'description' => $description,
                    'originatingDefaultAction' => $originatingDefaultAction,
                    'originatingDefaultTreatmentId' => $originatingDefaultTreatmentId,
                    'originatingDefaultTransferNumber' => $originatingDefaultTransferNumber,
                    'originatingDefaultCallTimeout' => $originatingDefaultCallTimeout,
                    'originatingRule' => $originatingRule,
                    'redirectingDefaultAction' => $redirectingDefaultAction,
                    'redirectingDefaultCallTimeout' => $redirectingDefaultCallTimeout,
                    'redirectingRule' => $redirectingRule,
                    'incomingDefaultAction' => $incomingDefaultAction,
                    'incomingDefaultCallTimeout' => $incomingDefaultCallTimeout,
                    'incomingRule' => $incomingRule,
                    'becomeDefault' => $becomeDefault
                ]
            ];
        }

        # Get an existing Communication Barring Profile.
        static public function ServiceProviderCommunicationBarringProfileGetRequest($serviceProviderId=null,$name=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'name' => $name
                ]
            ];
        }

        # Requests the list of System Diameter base parameters.
        static public function SystemBwDiameterBaseDataGetRequest() {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => null
            ];
        }

        # Request the system's calling name retrieval attributes.
        static public function SystemCallingNameRetrievalGetRequest16sp1() {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => null
            ];
        }

        # Request the system level data associated with Call Processing Policy.
        static public function SystemCallProcessingGetPolicyRequest16sp2() {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => null
            ];
        }

        # Request the system level data associated with Call Processing Policy.
        static public function SystemCallProcessingGetPolicyRequest17() {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => null
            ];
        }

        # The response is either a SystemCallProcessingGetPolicyResponse17sp3 or an
        static public function SystemCallProcessingGetPolicyRequest17sp3() {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => null
            ];
        }

        # Add a new Communication Barring Profile.
        static public function SystemCommunicationBarringProfileAddRequest($name=null,$description=null,$originatingDefaultAction=null,$originatingDefaultTreatmentId=null,$originatingDefaultTransferNumber=null,$originatingDefaultCallTimeout=null,$originatingRule=null,$redirectingDefaultAction=null,$redirectingDefaultCallTimeout=null,$redirectingRule=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'name' => $name,
                    'description' => $description,
                    'originatingDefaultAction' => $originatingDefaultAction,
                    'originatingDefaultTreatmentId' => $originatingDefaultTreatmentId,
                    'originatingDefaultTransferNumber' => $originatingDefaultTransferNumber,
                    'originatingDefaultCallTimeout' => $originatingDefaultCallTimeout,
                    'originatingRule' => $originatingRule,
                    'redirectingDefaultAction' => $redirectingDefaultAction,
                    'redirectingDefaultCallTimeout' => $redirectingDefaultCallTimeout,
                    'redirectingRule' => $redirectingRule
                ]
            ];
        }

        # Add a new Communication Barring Profile.
        static public function SystemCommunicationBarringProfileAddRequest17sp1($name=null,$description=null,$originatingDefaultAction=null,$originatingDefaultTreatmentId=null,$originatingDefaultTransferNumber=null,$originatingDefaultCallTimeout=null,$originatingRule=null,$redirectingDefaultAction=null,$redirectingDefaultCallTimeout=null,$redirectingRule=null,$incomingDefaultAction=null,$incomingDefaultCallTimeout=null,$incomingRule=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'name' => $name,
                    'description' => $description,
                    'originatingDefaultAction' => $originatingDefaultAction,
                    'originatingDefaultTreatmentId' => $originatingDefaultTreatmentId,
                    'originatingDefaultTransferNumber' => $originatingDefaultTransferNumber,
                    'originatingDefaultCallTimeout' => $originatingDefaultCallTimeout,
                    'originatingRule' => $originatingRule,
                    'redirectingDefaultAction' => $redirectingDefaultAction,
                    'redirectingDefaultCallTimeout' => $redirectingDefaultCallTimeout,
                    'redirectingRule' => $redirectingRule,
                    'incomingDefaultAction' => $incomingDefaultAction,
                    'incomingDefaultCallTimeout' => $incomingDefaultCallTimeout,
                    'incomingRule' => $incomingRule
                ]
            ];
        }

        # Get an existing Communication Barring Profile.
        static public function SystemCommunicationBarringProfileGetRequest16($name=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'name' => $name
                ]
            ];
        }

        # Get an existing Communication Barring Profile.
        static public function SystemCommunicationBarringProfileGetRequest17sp1($name=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'name' => $name
                ]
            ];
        }

        # Request the system level data associated with Enhanced Call Logs.
        static public function SystemEnhancedCallLogsGetRequest() {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => null
            ];
        }

        # Gets system level the Location Based Calling Restrictions attributes.
        static public function SystemLocationBasedCallingRestrictionsGetRequest() {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => null
            ];
        }

        # Request the system level data associated with Meet-Me Conferencing functions.
        static public function SystemMeetMeConferencingGetRequest() {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => null
            ];
        }

        # Request to get the list of Network Server Sync system parameters.
        static public function SystemNetworkServerSyncParametersGetRequest16() {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => null
            ];
        }

        # Request the system level data associated with Outgoing Calling Plan.
        static public function SystemOutgoingCallingPlanGetRequest() {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => null
            ];
        }

        # Requests the system's default policy settings.
        static public function SystemPolicyGetDefaultRequest16sp2() {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => null
            ];
        }

        # Requests the system's default policy settings.
        static public function SystemPolicyGetDefaultRequest17() {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => null
            ];
        }

        # Requests the system's default policy settings.
        static public function SystemPolicyGetDefaultRequest17sp1() {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => null
            ];
        }

        # Replaced by: SystemRedundancyParametersGetRequest16sp2
        static public function SystemRedundancyParametersGetRequest() {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => null
            ];
        }

        # Request the system level data associated with Voice Messaging.
        static public function SystemVoiceMessagingGroupGetRequest16() {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => null
            ];
        }

        # Get the system call processing configuration for all subscribers
        static public function SystemSubscriberGetCallProcessingParametersRequest17() {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => null
            ];
        }

        # Get the system call processing configuration for all subscribers
        static public function SystemSubscriberGetCallProcessingParametersRequest17sp3() {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => null
            ];
        }

        # Request the service provider level data associated with Call Processing
        static public function ServiceProviderCallProcessingGetPolicyRequest16sp2($serviceProviderId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId
                ]
            ];
        }

        # Request the service provider level data associated with Call Processing
        static public function ServiceProviderCallProcessingGetPolicyRequest17($serviceProviderId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId
                ]
            ];
        }

        # Request the service provider level data associated with Call Processing
        static public function ServiceProviderCallProcessingGetPolicyRequest17sp3($serviceProviderId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId
                ]
            ];
        }

        # Get the service provider's enhanced call log settings.
        static public function ServiceProviderEnhancedCallLogsGetRequest($serviceProviderId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId
                ]
            ];
        }

        # Get the profile for a service provider or enterprise.
        static public function ServiceProviderGetRequest13mp2($serviceProviderId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId
                ]
            ];
        }

        # Request the system level data associated with session audit.
        static public function SystemSessionAuditGetRequest14sp3() {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => null
            ];
        }

        # Request to add a sip device type.
        static public function SystemSIPDeviceTypeAddRequest17($deviceType=null,$numberOfPorts=null,$profile=null,$registrationCapable=null,$isConferenceDevice=null,$isMobilityManagerDevice=null,$isMusicOnHoldDevice=null,$RFC3264Hold=null,$isTrusted=null,$E164Capable=null,$routeAdvance=null,$forwardingOverride=null,$wirelessIntegration=null,$webBasedConfigURL=null,$isVideoCapable=null,$PBXIntegration=null,$staticRegistrationCapable=null,$cpeDeviceOptions=null,$earlyMediaSupport=null,$authenticateRefer=null,$autoConfigSoftClient=null,$authenticationMode=null,$requiresBroadWorksDigitCollection=null,$requiresBroadWorksCallWaitingTone=null,$requiresMWISubscription=null,$useHistoryInfoHeaderOnAccessSide=null,$adviceOfChargeCapable=null,$resetEvent=null,$supportCallCenterMIMEType=null,$trunkMode=null,$addPCalledPartyId=null) {
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
                    'staticRegistrationCapable' => $staticRegistrationCapable,
                    'cpeDeviceOptions' => $cpeDeviceOptions,
                    'earlyMediaSupport' => $earlyMediaSupport,
                    'authenticateRefer' => $authenticateRefer,
                    'autoConfigSoftClient' => $autoConfigSoftClient,
                    'authenticationMode' => $authenticationMode,
                    'requiresBroadWorksDigitCollection' => $requiresBroadWorksDigitCollection,
                    'requiresBroadWorksCallWaitingTone' => $requiresBroadWorksCallWaitingTone,
                    'requiresMWISubscription' => $requiresMWISubscription,
                    'useHistoryInfoHeaderOnAccessSide' => $useHistoryInfoHeaderOnAccessSide,
                    'adviceOfChargeCapable' => $adviceOfChargeCapable,
                    'resetEvent' => $resetEvent,
                    'supportCallCenterMIMEType' => $supportCallCenterMIMEType,
                    'trunkMode' => $trunkMode,
                    'addPCalledPartyId' => $addPCalledPartyId
                ]
            ];
        }

        # Request to get a sip device type.
        static public function SystemSIPDeviceTypeGetRequest17($deviceType=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'deviceType' => $deviceType
                ]
            ];
        }

        # Get the speed dial 100 system-wide default setting.
        static public function SystemSpeedDial100GetRequest() {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => null
            ];
        }

        # Replaced by: UserAddRequest17sp4
        static public function UserAddRequest14sp9($serviceProviderId=null,$groupId=null,$userId=null,$lastName=null,$firstName=null,$callingLineIdLastName=null,$callingLineIdFirstName=null,$hiraganaLastName=null,$hiraganaFirstName=null,$phoneNumber=null,$extension=null,$callingLineIdPhoneNumber=null,$password=null,$department=null,$language=null,$timeZone=null,$alias=null,$title=null,$pagerPhoneNumber=null,$mobilePhoneNumber=null,$emailAddress=null,$yahooId=null,$addressLocation=null,$address=null,$networkClassOfService=null,$officeZoneName=null,$primaryZoneName=null) {
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
                    'address' => $address,
                    'networkClassOfService' => $networkClassOfService,
                    'officeZoneName' => $officeZoneName,
                    'primaryZoneName' => $primaryZoneName
                ]
            ];
        }

        # Request the settings for the busy lamp field service.
        static public function UserBusyLampFieldGetRequest($userId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId
                ]
            ];
        }

        # Request user's call logs.
        static public function UserEnhancedCallLogsGetListRequest16($userId=null,$callLogType=null,$responsePagingControl=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId,
                    'callLogType' => $callLogType,
                    'responsePagingControl' => $responsePagingControl
                ]
            ];
        }

        # Request the user level data associated with Call Processing Policy.
        static public function UserCallProcessingGetPolicyRequest16sp2($userId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId
                ]
            ];
        }

        # Request the user level data associated with Call Processing Policy.
        static public function UserCallProcessingGetPolicyRequest17($userId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId
                ]
            ];
        }

        # Request the user level data associated with Call Processing Policy.
        static public function UserCallProcessingGetPolicyRequest17sp3($userId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId
                ]
            ];
        }

        # Request the user level data associated with Call Waiting.
        static public function UserCallWaitingGetRequest($userId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId
                ]
            ];
        }

        # Replaced by: UserFaxMessagingGetRequest17sp1
        static public function UserFaxMessagingGetRequest17($userId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId
                ]
            ];
        }

        # Replaced by: UserGetRequest17sp4
        static public function UserGetRequest17($userId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId
                ]
            ];
        }

        # Replaced by: UserModifyRequest17sp4
        static public function UserModifyRequest16($userId=null,$lastName=null,$firstName=null,$callingLineIdLastName=null,$callingLineIdFirstName=null,$hiraganaLastName=null,$hiraganaFirstName=null,$phoneNumber=null,$extension=null,$callingLineIdPhoneNumber=null,$oldPassword=null,$newPassword=null,$department=null,$language=null,$timeZone=null,$sipAliasList=null,$endpoint=null,$title=null,$pagerPhoneNumber=null,$mobilePhoneNumber=null,$emailAddress=null,$yahooId=null,$addressLocation=null,$address=null,$networkClassOfService=null,$officeZoneName=null,$primaryZoneName=null) {
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
                    'networkClassOfService' => $networkClassOfService,
                    'officeZoneName' => $officeZoneName,
                    'primaryZoneName' => $primaryZoneName
                ]
            ];
        }

        # Get the list of a user schedules. The list can be filtered by schedule type.
        static public function UserScheduleGetListRequest($userId=null,$scheduleType=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId,
                    'scheduleType' => $scheduleType
                ]
            ];
        }

        # Get the user's Shared Call Appearance service setting.
        static public function UserSharedCallAppearanceGetRequest14sp2($userId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId
                ]
            ];
        }

        # Get the speed dial 100 settings for a user.
        static public function UserSpeedDial100GetListRequest($userId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId
                ]
            ];
        }

}