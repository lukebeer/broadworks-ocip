<?php
class OCISchemaServiceCallCenter {
        # Add a Call Center Agent Unavailable Code.
        static public function EnterpriseCallCenterAgentUnavailableCodeAddRequest($serviceProviderId=null,$isActive=null,$code=null,$description=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'isActive' => $isActive,
                    'code' => $code,
                    'description' => $description
                ]
            ];
        }

        # Delete a Call Center Agent Unavailable Code.
        static public function EnterpriseCallCenterAgentUnavailableCodeDeleteRequest($serviceProviderId=null,$code=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'code' => $code
                ]
            ];
        }

        # Get the list of Call Center Agent Unavailable Codes.
        static public function EnterpriseCallCenterAgentUnavailableCodeGetListRequest($serviceProviderId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId
                ]
            ];
        }

        # Get a Call Center Agent Unavailable Code.
        static public function EnterpriseCallCenterAgentUnavailableCodeGetRequest($serviceProviderId=null,$code=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'code' => $code
                ]
            ];
        }

        # Modify a Call Center Agent Unavailable Code.
        static public function EnterpriseCallCenterAgentUnavailableCodeModifyRequest($serviceProviderId=null,$code=null,$isActive=null,$description=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'code' => $code,
                    'isActive' => $isActive,
                    'description' => $description
                ]
            ];
        }

        # Request the enterprise level data associated with Call Center Agents Unavailable Code Settings.
        static public function EnterpriseCallCenterAgentUnavailableCodeSettingsGetRequest($serviceProviderId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId
                ]
            ];
        }

        # Modify the enterprise level data associated with Call Center Agents Unavailable Code Settings.
        static public function EnterpriseCallCenterAgentUnavailableCodeSettingsModifyRequest($serviceProviderId=null,$enableAgentUnavailableCodes=null,$defaultAgentUnavailableCodeOnDND=null,$defaultAgentUnavailableCodeOnPersonalCalls=null,$defaultAgentUnavailableCodeOnConsecutiveBounces=null,$forceUseOfAgentUnavailableCodes=null,$defaultAgentUnavailableCode=null,$codeStateList=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'enableAgentUnavailableCodes' => $enableAgentUnavailableCodes,
                    'defaultAgentUnavailableCodeOnDND' => $defaultAgentUnavailableCodeOnDND,
                    'defaultAgentUnavailableCodeOnPersonalCalls' => $defaultAgentUnavailableCodeOnPersonalCalls,
                    'defaultAgentUnavailableCodeOnConsecutiveBounces' => $defaultAgentUnavailableCodeOnConsecutiveBounces,
                    'forceUseOfAgentUnavailableCodes' => $forceUseOfAgentUnavailableCodes,
                    'defaultAgentUnavailableCode' => $defaultAgentUnavailableCode,
                    'codeStateList' => $codeStateList
                ]
            ];
        }

        # Add a Call Center Call Disposition Code.
        static public function EnterpriseCallCenterCallDispositionCodeAddRequest($serviceProviderId=null,$code=null,$isActive=null,$description=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'code' => $code,
                    'isActive' => $isActive,
                    'description' => $description
                ]
            ];
        }

        # Delete a Call Center Call Disposition Code.
        static public function EnterpriseCallCenterCallDispositionCodeDeleteRequest($serviceProviderId=null,$code=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'code' => $code
                ]
            ];
        }

        # Get the list of Call Center Call Disposition Codes.
        static public function EnterpriseCallCenterCallDispositionCodeGetListRequest($serviceProviderId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId
                ]
            ];
        }

        # Get a Call Center Call Disposition Code.
        static public function EnterpriseCallCenterCallDispositionCodeGetRequest($serviceProviderId=null,$code=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'code' => $code
                ]
            ];
        }

        # Get the list of Call Centers and Route Points using the specified disposition code.
        static public function EnterpriseCallCenterCallDispositionCodeGetUsageListRequest($serviceProviderId=null,$code=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'code' => $code
                ]
            ];
        }

        # Modify a Call Center Call Disposition Code.
        static public function EnterpriseCallCenterCallDispositionCodeModifyRequest($serviceProviderId=null,$code=null,$isActive=null,$description=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'code' => $code,
                    'isActive' => $isActive,
                    'description' => $description
                ]
            ];
        }

        # Request to set the active status of Call Center Call Disposition Codes.      
        static public function EnterpriseCallCenterCallDispositionCodeModifyActiveListRequest($serviceProviderId=null,$callDispositionCodeActivation=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'callDispositionCodeActivation' => $callDispositionCodeActivation
                ]
            ];
        }

        # Request to all the current and past agents in the enterprise.
        static public function EnterpriseCallCenterCurrentAndPastAgentGetListRequest($serviceProviderId=null,$responseSizeLimit=null,$searchCriteriaUserLastName=null,$searchCriteriaUserFirstName=null,$searchCriteriaExactUserGroup=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'responseSizeLimit' => $responseSizeLimit,
                    'searchCriteriaUserLastName' => $searchCriteriaUserLastName,
                    'searchCriteriaUserFirstName' => $searchCriteriaUserFirstName,
                    'searchCriteriaExactUserGroup' => $searchCriteriaExactUserGroup
                ]
            ];
        }

        # Request to get all the current and past call centers for the enterprise.
        static public function EnterpriseCallCenterCurrentAndPastCallCenterGetListRequest($serviceProviderId=null,$isPremiumOnly=null,$responseSizeLimit=null,$searchCriteriaExactUserGroup=null,$searchCriteriaCallCenterName=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'isPremiumOnly' => $isPremiumOnly,
                    'responseSizeLimit' => $responseSizeLimit,
                    'searchCriteriaExactUserGroup' => $searchCriteriaExactUserGroup,
                    'searchCriteriaCallCenterName' => $searchCriteriaCallCenterName
                ]
            ];
        }

        # Request to get all the past and current DNIS for the Call Center for the enterprise.
        static public function EnterpriseCallCenterCurrentAndPastDNISGetListRequest($serviceProviderId=null,$serviceUserId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'serviceUserId' => $serviceUserId
                ]
            ];
        }

        # Request to get the enterprise branding information.
        static public function EnterpriseCallCenterEnhancedReportingBrandingGetRequest($serviceProviderId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId
                ]
            ];
        }

        # Request to modify the enterprise branding configuration.
        static public function EnterpriseCallCenterEnhancedReportingBrandingModifyRequest($serviceProviderId=null,$brandingChoice=null,$brandingFile=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'brandingChoice' => $brandingChoice,
                    'brandingFile' => $brandingFile
                ]
            ];
        }

        # Request to get all enabled call center report template for an enterprise.
        static public function EnterpriseCallCenterEnhancedReportingGetAvailableReportTemplateListRequest($serviceProviderId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId
                ]
            ];
        }

        # Request to get an enterprise level call center enhanced reporting setting.
        static public function EnterpriseCallCenterEnhancedReportingGetRequest($serviceProviderId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId
                ]
            ];
        }

        # Request to modify enterprise level call center enhanced reporting settings.
        static public function EnterpriseCallCenterEnhancedReportingModifyRequest($serviceProviderId=null,$reportingServer=null,$webStatisticSource=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'reportingServer' => $reportingServer,
                    'webStatisticSource' => $webStatisticSource
                ]
            ];
        }

        # Request to add an Enterprise level call center report template.
        static public function EnterpriseCallCenterEnhancedReportingReportTemplateAddRequest($serviceProviderId=null,$name=null,$description=null,$dataTemplate=null,$filterNumber=null,$xsltTemplate=null,$scope=null,$isEnabled=null,$isRealtimeReport=null,$callCompletionThresholdParam=null,$shortDurationThresholdParam=null,$serviceLevelThresholdParam=null,$serviceLevelInclusionsParam=null,$serviceLevelObjectiveThresholdParam=null,$abandonedCallThresholdParam=null,$serviceLevelThresholdParamNumber=null,$abandonedCallThresholdParamNumber=null,$filterValue=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'name' => $name,
                    'description' => $description,
                    'dataTemplate' => $dataTemplate,
                    'filterNumber' => $filterNumber,
                    'xsltTemplate' => $xsltTemplate,
                    'scope' => $scope,
                    'isEnabled' => $isEnabled,
                    'isRealtimeReport' => $isRealtimeReport,
                    'callCompletionThresholdParam' => $callCompletionThresholdParam,
                    'shortDurationThresholdParam' => $shortDurationThresholdParam,
                    'serviceLevelThresholdParam' => $serviceLevelThresholdParam,
                    'serviceLevelInclusionsParam' => $serviceLevelInclusionsParam,
                    'serviceLevelObjectiveThresholdParam' => $serviceLevelObjectiveThresholdParam,
                    'abandonedCallThresholdParam' => $abandonedCallThresholdParam,
                    'serviceLevelThresholdParamNumber' => $serviceLevelThresholdParamNumber,
                    'abandonedCallThresholdParamNumber' => $abandonedCallThresholdParamNumber,
                    'filterValue' => $filterValue
                ]
            ];
        }

        # Request to delete an enterprise level call center report template.
        static public function EnterpriseCallCenterEnhancedReportingReportTemplateDeleteRequest($serviceProviderId=null,$name=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'name' => $name
                ]
            ];
        }

        # Request to get enterprise level call center report template list.
        static public function EnterpriseCallCenterEnhancedReportingReportTemplateGetListRequest($serviceProviderId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId
                ]
            ];
        }

        # Request to get an enterprise level call center report template.
        static public function EnterpriseCallCenterEnhancedReportingReportTemplateGetRequest($serviceProviderId=null,$name=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'name' => $name
                ]
            ];
        }

        # Request to modify an enterprise level call center report template.
        static public function EnterpriseCallCenterEnhancedReportingReportTemplateModifyRequest($serviceProviderId=null,$name=null,$newName=null,$description=null,$xsltTemplate=null,$scope=null,$isEnabled=null,$isRealtimeReport=null,$filterNumber=null,$filterValue=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'name' => $name,
                    'newName' => $newName,
                    'description' => $description,
                    'xsltTemplate' => $xsltTemplate,
                    'scope' => $scope,
                    'isEnabled' => $isEnabled,
                    'isRealtimeReport' => $isRealtimeReport,
                    'filterNumber' => $filterNumber,
                    'filterValue' => $filterValue
                ]
            ];
        }

        # Request to add an enterprise level call center reporting scheduled report.
        static public function EnterpriseCallCenterEnhancedReportingScheduledReportAddRequest($serviceProviderId=null,$name=null,$description=null,$reportTemplate=null,$schedule=null,$samplingPeriod=null,$startDayOfWeek=null,$reportTimeZone=null,$reportDateFormat=null,$reportTimeFormat=null,$reportInterval=null,$reportFormat=null,$agent=null,$callCompletionThresholdSeconds=null,$shortDurationThresholdSeconds=null,$serviceLevelThresholdSeconds=null,$serviceLevelInclusions=null,$serviceLevelObjectivePercentage=null,$abandonedCallThresholdSeconds=null,$emailAddress=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'name' => $name,
                    'description' => $description,
                    'reportTemplate' => $reportTemplate,
                    'schedule' => $schedule,
                    'samplingPeriod' => $samplingPeriod,
                    'startDayOfWeek' => $startDayOfWeek,
                    'reportTimeZone' => $reportTimeZone,
                    'reportDateFormat' => $reportDateFormat,
                    'reportTimeFormat' => $reportTimeFormat,
                    'reportInterval' => $reportInterval,
                    'reportFormat' => $reportFormat,
                    'agent' => $agent,
                    'callCompletionThresholdSeconds' => $callCompletionThresholdSeconds,
                    'shortDurationThresholdSeconds' => $shortDurationThresholdSeconds,
                    'serviceLevelThresholdSeconds' => $serviceLevelThresholdSeconds,
                    'serviceLevelInclusions' => $serviceLevelInclusions,
                    'serviceLevelObjectivePercentage' => $serviceLevelObjectivePercentage,
                    'abandonedCallThresholdSeconds' => $abandonedCallThresholdSeconds,
                    'emailAddress' => $emailAddress
                ]
            ];
        }

        # Request to delete an enterprise level call center reporting scheduled report.
        static public function EnterpriseCallCenterEnhancedReportingScheduledReportDeleteRequest($serviceProviderId=null,$name=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'name' => $name
                ]
            ];
        }

        # Request to get a list of active enterprise level call center reporting scheduled reports.
        static public function EnterpriseCallCenterEnhancedReportingScheduledReportGetActiveListRequest($serviceProviderId=null,$responseSizeLimit=null,$searchCriteriaCallCenterScheduledReportName=null,$searchCriteriaExactCallCenterScheduledReportCreatedBySupervisor=null,$searchCriteriaExactCallCenterReportTemplateKey=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'responseSizeLimit' => $responseSizeLimit,
                    'searchCriteriaCallCenterScheduledReportName' => $searchCriteriaCallCenterScheduledReportName,
                    'searchCriteriaExactCallCenterScheduledReportCreatedBySupervisor' => $searchCriteriaExactCallCenterScheduledReportCreatedBySupervisor,
                    'searchCriteriaExactCallCenterReportTemplateKey' => $searchCriteriaExactCallCenterReportTemplateKey
                ]
            ];
        }

        # Request to get a list of completed enterprise level call center reporting scheduled reports.
        static public function EnterpriseCallCenterEnhancedReportingScheduledReportGetCompletedListRequest($serviceProviderId=null,$responseSizeLimit=null,$searchCriteriaCallCenterScheduledReportName=null,$searchCriteriaExactCallCenterScheduledReportCreatedBySupervisor=null,$searchCriteriaExactCallCenterReportTemplateKey=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'responseSizeLimit' => $responseSizeLimit,
                    'searchCriteriaCallCenterScheduledReportName' => $searchCriteriaCallCenterScheduledReportName,
                    'searchCriteriaExactCallCenterScheduledReportCreatedBySupervisor' => $searchCriteriaExactCallCenterScheduledReportCreatedBySupervisor,
                    'searchCriteriaExactCallCenterReportTemplateKey' => $searchCriteriaExactCallCenterReportTemplateKey
                ]
            ];
        }

        # Request to get a list of enterprise level call center reporting scheduled reports.
        static public function EnterpriseCallCenterEnhancedReportingScheduledReportGetListRequest($serviceProviderId=null,$responseSizeLimit=null,$searchCriteriaCallCenterScheduledReportName=null,$searchCriteriaExactCallCenterScheduledReportCreatedBySupervisor=null,$searchCriteriaExactCallCenterReportTemplateKey=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'responseSizeLimit' => $responseSizeLimit,
                    'searchCriteriaCallCenterScheduledReportName' => $searchCriteriaCallCenterScheduledReportName,
                    'searchCriteriaExactCallCenterScheduledReportCreatedBySupervisor' => $searchCriteriaExactCallCenterScheduledReportCreatedBySupervisor,
                    'searchCriteriaExactCallCenterReportTemplateKey' => $searchCriteriaExactCallCenterReportTemplateKey
                ]
            ];
        }

        # Request to get an enterprise level call center reporting scheduled report.
        static public function EnterpriseCallCenterEnhancedReportingScheduledReportGetRequest($serviceProviderId=null,$name=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'name' => $name
                ]
            ];
        }

        # Request to get all the call center reporting scheduled report in an enterprise that uses a given enterprise level report template.
        static public function EnterpriseCallCenterEnhancedReportingScheduledReportGetReportTemplateUsageListRequest($serviceProviderId=null,$name=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'name' => $name
                ]
            ];
        }

        # Request to modify an enterprise level call center reporting scheduled report.
        static public function EnterpriseCallCenterEnhancedReportingScheduledReportModifyRequest($serviceProviderId=null,$name=null,$newName=null,$description=null,$schedule=null,$samplingPeriod=null,$startDayOfWeek=null,$reportTimeZone=null,$reportDateFormat=null,$reportTimeFormat=null,$reportInterval=null,$reportFormat=null,$agent=null,$callCompletionThresholdSeconds=null,$shortDurationThresholdSeconds=null,$serviceLevelThresholdSeconds=null,$serviceLevelInclusions=null,$serviceLevelObjectivePercentage=null,$abandonedCallThresholdSeconds=null,$emailAddress=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'name' => $name,
                    'newName' => $newName,
                    'description' => $description,
                    'schedule' => $schedule,
                    'samplingPeriod' => $samplingPeriod,
                    'startDayOfWeek' => $startDayOfWeek,
                    'reportTimeZone' => $reportTimeZone,
                    'reportDateFormat' => $reportDateFormat,
                    'reportTimeFormat' => $reportTimeFormat,
                    'reportInterval' => $reportInterval,
                    'reportFormat' => $reportFormat,
                    'agent' => $agent,
                    'callCompletionThresholdSeconds' => $callCompletionThresholdSeconds,
                    'shortDurationThresholdSeconds' => $shortDurationThresholdSeconds,
                    'serviceLevelThresholdSeconds' => $serviceLevelThresholdSeconds,
                    'serviceLevelInclusions' => $serviceLevelInclusions,
                    'serviceLevelObjectivePercentage' => $serviceLevelObjectivePercentage,
                    'abandonedCallThresholdSeconds' => $abandonedCallThresholdSeconds,
                    'emailAddress' => $emailAddress
                ]
            ];
        }

        # Request the enterprise level data associated with Call Center.
        static public function EnterpriseCallCenterGetRequest($serviceProviderId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId
                ]
            ];
        }

        # Request the enterprise call center routing policy.
        static public function EnterpriseCallCenterGetRoutingPolicyRequest($serviceProviderId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId
                ]
            ];
        }

        # Modify the enterprise level data associated with Call Center
        static public function EnterpriseCallCenterModifyRequest($serviceProviderId=null,$useSystemDefaultGuardTimer=null,$enableGuardTimer=null,$guardTimerSeconds=null,$useSystemDefaultUnavailableSettings=null,$forceAgentUnavailableOnDNDActivation=null,$forceAgentUnavailableOnPersonalCalls=null,$forceAgentUnavailableOnBouncedCallLimit=null,$numberConsecutiveBouncedCallsToForceAgentUnavailable=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'useSystemDefaultGuardTimer' => $useSystemDefaultGuardTimer,
                    'enableGuardTimer' => $enableGuardTimer,
                    'guardTimerSeconds' => $guardTimerSeconds,
                    'useSystemDefaultUnavailableSettings' => $useSystemDefaultUnavailableSettings,
                    'forceAgentUnavailableOnDNDActivation' => $forceAgentUnavailableOnDNDActivation,
                    'forceAgentUnavailableOnPersonalCalls' => $forceAgentUnavailableOnPersonalCalls,
                    'forceAgentUnavailableOnBouncedCallLimit' => $forceAgentUnavailableOnBouncedCallLimit,
                    'numberConsecutiveBouncedCallsToForceAgentUnavailable' => $numberConsecutiveBouncedCallsToForceAgentUnavailable
                ]
            ];
        }

        # Modify the enterprise call center routing policy.
        static public function EnterpriseCallCenterModifyRoutingPolicyRequest($serviceProviderId=null,$routingPolicy=null,$routingPriorityOrder=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'routingPolicy' => $routingPolicy,
                    'routingPriorityOrder' => $routingPriorityOrder
                ]
            ];
        }

        # Add agent(s) to a call center.
        static public function GroupCallCenterAddAgentListRequest($serviceUserId=null,$agentUserId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceUserId' => $serviceUserId,
                    'agentUserId' => $agentUserId
                ]
            ];
        }

        # Add a Call Center instance to a group.
        static public function GroupCallCenterAddInstanceRequest17sp3($serviceProviderId=null,$groupId=null,$serviceUserId=null,$serviceInstanceProfile=null,$type=null,$policy=null,$enableVideo=null,$queueLength=null,$enableReporting=null,$reportingServerName=null,$allowCallerToDialEscapeDigit=null,$escapeDigit=null,$resetCallStatisticsUponEntryInQueue=null,$allowAgentLogoff=null,$allowCallWaitingForAgents=null,$allowCallsToAgentsInWrapUp=null,$overrideAgentWrapUpTime=null,$wrapUpSeconds=null,$forceDeliveryOfCalls=null,$forceDeliveryWaitTimeSeconds=null,$enableAutomaticStateChangeForAgents=null,$agentStateAfterCall=null,$agentUnavailableCode=null,$externalPreferredAudioCodec=null,$internalPreferredAudioCodec=null,$playRingingWhenOfferingCall=null) {
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

        # Add a Call Center DNIS
        static public function GroupCallCenterAddDNISRequest($dnisKey=null,$dnisPhoneNumber=null,$extension=null,$useCustomCLIDSettings=null,$callingLineIdPhoneNumber=null,$callingLineIdLastName=null,$callingLineIdFirstName=null,$useCustomDnisAnnouncementSettings=null,$priority=null,$allowOutgoingACDCall=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'dnisKey' => $dnisKey,
                    'dnisPhoneNumber' => $dnisPhoneNumber,
                    'extension' => $extension,
                    'useCustomCLIDSettings' => $useCustomCLIDSettings,
                    'callingLineIdPhoneNumber' => $callingLineIdPhoneNumber,
                    'callingLineIdLastName' => $callingLineIdLastName,
                    'callingLineIdFirstName' => $callingLineIdFirstName,
                    'useCustomDnisAnnouncementSettings' => $useCustomDnisAnnouncementSettings,
                    'priority' => $priority,
                    'allowOutgoingACDCall' => $allowOutgoingACDCall
                ]
            ];
        }

        # Add supervisor(s) to a call center.
        static public function GroupCallCenterAddSupervisorListRequest($serviceUserId=null,$supervisorUserId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceUserId' => $serviceUserId,
                    'supervisorUserId' => $supervisorUserId
                ]
            ];
        }

        # Add a Call Center Agent Unavailable Code.
        static public function GroupCallCenterAgentUnavailableCodeAddRequest($serviceProviderId=null,$groupId=null,$isActive=null,$code=null,$description=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId,
                    'isActive' => $isActive,
                    'code' => $code,
                    'description' => $description
                ]
            ];
        }

        # Delete a Call Center Agent Unavailable Code.
        static public function GroupCallCenterAgentUnavailableCodeDeleteRequest($serviceProviderId=null,$groupId=null,$code=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId,
                    'code' => $code
                ]
            ];
        }

        # Get the list of Call Center Agent Unavailable Codes.
        static public function GroupCallCenterAgentUnavailableCodeGetListRequest($serviceProviderId=null,$groupId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId
                ]
            ];
        }

        # Get a Call Center Agent Unavailable Code.
        static public function GroupCallCenterAgentUnavailableCodeGetRequest($serviceProviderId=null,$groupId=null,$code=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId,
                    'code' => $code
                ]
            ];
        }

        # Modify a Call Center Agent Unavailable Code.
        static public function GroupCallCenterAgentUnavailableCodeModifyRequest($serviceProviderId=null,$groupId=null,$code=null,$isActive=null,$description=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId,
                    'code' => $code,
                    'isActive' => $isActive,
                    'description' => $description
                ]
            ];
        }

        # Request the group level data associated with Call Center Agents Unavailable Code Settings.
        static public function GroupCallCenterAgentUnavailableCodeSettingsGetRequest($serviceProviderId=null,$groupId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId
                ]
            ];
        }

        # Modify the group level data associated with Call Center Agents Unavailable Code Settings.
        static public function GroupCallCenterAgentUnavailableCodeSettingsModifyRequest($serviceProviderId=null,$groupId=null,$enableAgentUnavailableCodes=null,$defaultAgentUnavailableCodeOnDND=null,$defaultAgentUnavailableCodeOnPersonalCalls=null,$defaultAgentUnavailableCodeOnConsecutiveBounces=null,$forceUseOfAgentUnavailableCodes=null,$defaultAgentUnavailableCode=null,$codeStateList=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId,
                    'enableAgentUnavailableCodes' => $enableAgentUnavailableCodes,
                    'defaultAgentUnavailableCodeOnDND' => $defaultAgentUnavailableCodeOnDND,
                    'defaultAgentUnavailableCodeOnPersonalCalls' => $defaultAgentUnavailableCodeOnPersonalCalls,
                    'defaultAgentUnavailableCodeOnConsecutiveBounces' => $defaultAgentUnavailableCodeOnConsecutiveBounces,
                    'forceUseOfAgentUnavailableCodes' => $forceUseOfAgentUnavailableCodes,
                    'defaultAgentUnavailableCode' => $defaultAgentUnavailableCode,
                    'codeStateList' => $codeStateList
                ]
            ];
        }

        # Get a call center's bounced call settings.
        static public function GroupCallCenterBouncedCallGetRequest17($serviceUserId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceUserId' => $serviceUserId
                ]
            ];
        }

        # Modify a call center's bounced call settings.
        static public function GroupCallCenterBouncedCallModifyRequest($serviceUserId=null,$isActive=null,$numberOfRingsBeforeBouncingCall=null,$enableTransfer=null,$transferPhoneNumber=null,$bounceCallWhenAgentUnavailable=null,$alertCallCenterCallOnHold=null,$alertCallCenterCallOnHoldSeconds=null,$bounceCallCenterCallOnHold=null,$bounceCallCenterCallOnHoldSeconds=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceUserId' => $serviceUserId,
                    'isActive' => $isActive,
                    'numberOfRingsBeforeBouncingCall' => $numberOfRingsBeforeBouncingCall,
                    'enableTransfer' => $enableTransfer,
                    'transferPhoneNumber' => $transferPhoneNumber,
                    'bounceCallWhenAgentUnavailable' => $bounceCallWhenAgentUnavailable,
                    'alertCallCenterCallOnHold' => $alertCallCenterCallOnHold,
                    'alertCallCenterCallOnHoldSeconds' => $alertCallCenterCallOnHoldSeconds,
                    'bounceCallCenterCallOnHold' => $bounceCallCenterCallOnHold,
                    'bounceCallCenterCallOnHoldSeconds' => $bounceCallCenterCallOnHoldSeconds
                ]
            ];
        }

        # Add a Call Center Call Disposition Code.
        static public function GroupCallCenterCallDispositionCodeAddRequest($serviceProviderId=null,$groupId=null,$code=null,$isActive=null,$description=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId,
                    'code' => $code,
                    'isActive' => $isActive,
                    'description' => $description
                ]
            ];
        }

        # Delete a Call Center Call Disposition Code.
        static public function GroupCallCenterCallDispositionCodeDeleteRequest($serviceProviderId=null,$groupId=null,$code=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId,
                    'code' => $code
                ]
            ];
        }

        # Get the list of Call Center Call Disposition  Codes.
        static public function GroupCallCenterCallDispositionCodeGetListRequest($serviceProviderId=null,$groupId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId
                ]
            ];
        }

        # Get a Call Center Call Disposition Code.
        static public function GroupCallCenterCallDispositionCodeGetRequest($serviceProviderId=null,$groupId=null,$code=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId,
                    'code' => $code
                ]
            ];
        }

        # Get the list of Call Centers and Route Points using the specified disposition code.
        static public function GroupCallCenterCallDispositionCodeGetUsageListRequest($serviceProviderId=null,$groupId=null,$code=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId,
                    'code' => $code
                ]
            ];
        }

        # Modify a Call Center Call Disposition Code.
        static public function GroupCallCenterCallDispositionCodeModifyRequest($serviceProviderId=null,$groupId=null,$code=null,$isActive=null,$description=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId,
                    'code' => $code,
                    'isActive' => $isActive,
                    'description' => $description
                ]
            ];
        }

        # Request to set the active status of Call Center Call Disposition Codes.      
        static public function GroupCallCenterCallDispositionCodeModifyActiveListRequest($serviceProviderId=null,$groupId=null,$callDispositionCodeActivation=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId,
                    'callDispositionCodeActivation' => $callDispositionCodeActivation
                ]
            ];
        }

        # Get a call center's comfort message bypass settings.
        static public function GroupCallCenterComfortMessageBypassGetRequest17($serviceUserId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceUserId' => $serviceUserId
                ]
            ];
        }

        # Modify a call center's comfort message bypass settings.
        static public function GroupCallCenterComfortMessageBypassModifyRequest17($serviceUserId=null,$isActive=null,$callWaitingAgeThresholdSeconds=null,$playAnnouncementAfterRinging=null,$ringTimeBeforePlayingAnnouncementSeconds=null,$audioMessageSelection=null,$audioUrlList=null,$audioFileList=null,$videoMessageSelection=null,$videoUrlList=null,$videoFileList=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceUserId' => $serviceUserId,
                    'isActive' => $isActive,
                    'callWaitingAgeThresholdSeconds' => $callWaitingAgeThresholdSeconds,
                    'playAnnouncementAfterRinging' => $playAnnouncementAfterRinging,
                    'ringTimeBeforePlayingAnnouncementSeconds' => $ringTimeBeforePlayingAnnouncementSeconds,
                    'audioMessageSelection' => $audioMessageSelection,
                    'audioUrlList' => $audioUrlList,
                    'audioFileList' => $audioFileList,
                    'videoMessageSelection' => $videoMessageSelection,
                    'videoUrlList' => $videoUrlList,
                    'videoFileList' => $videoFileList
                ]
            ];
        }

        # Request to get all the current and past agents for the group.
        static public function GroupCallCenterCurrentAndPastAgentGetListRequest($serviceProviderId=null,$groupId=null,$responseSizeLimit=null,$searchCriteriaUserLastName=null,$searchCriteriaUserFirstName=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId,
                    'responseSizeLimit' => $responseSizeLimit,
                    'searchCriteriaUserLastName' => $searchCriteriaUserLastName,
                    'searchCriteriaUserFirstName' => $searchCriteriaUserFirstName
                ]
            ];
        }

        # Request to get all the current and past call centers for the group.
        static public function GroupCallCenterCurrentAndPastCallCenterGetListRequest($serviceProviderId=null,$isPremiumOnly=null,$groupId=null,$responseSizeLimit=null,$searchCriteriaCallCenterName=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'isPremiumOnly' => $isPremiumOnly,
                    'groupId' => $groupId,
                    'responseSizeLimit' => $responseSizeLimit,
                    'searchCriteriaCallCenterName' => $searchCriteriaCallCenterName
                ]
            ];
        }

        # Request to get all the past and current DNIS for the Call Center for the group.
        static public function GroupCallCenterCurrentAndPastDNISGetListRequest($serviceProviderId=null,$groupId=null,$serviceUserId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId,
                    'serviceUserId' => $serviceUserId
                ]
            ];
        }

        # Delete agent(s) from a call center.
        static public function GroupCallCenterDeleteAgentListRequest($serviceUserId=null,$agentUserId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceUserId' => $serviceUserId,
                    'agentUserId' => $agentUserId
                ]
            ];
        }

        # Delete a call center's DNIS.
        static public function GroupCallCenterDeleteDNISRequest($dnisKey=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'dnisKey' => $dnisKey
                ]
            ];
        }

        # Delete a Call Center instance from a group.
        static public function GroupCallCenterDeleteInstanceRequest($serviceUserId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceUserId' => $serviceUserId
                ]
            ];
        }

        # Delete supervisor(s) from a call center.
        static public function GroupCallCenterDeleteSupervisorListRequest($serviceUserId=null,$supervisorUserId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceUserId' => $serviceUserId,
                    'supervisorUserId' => $supervisorUserId
                ]
            ];
        }

        # Get the distinctive ringing configuration values for call center.
        static public function GroupCallCenterDistinctiveRingingGetRequest($serviceUserId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceUserId' => $serviceUserId
                ]
            ];
        }

        # Modify the distinctive ringing configuration values for call center.
        static public function GroupCallCenterDistinctiveRingingModifyRequest($serviceUserId=null,$distinctiveRingingCallCenterCalls=null,$distinctiveRingingRingPatternForCallCenter=null,$distinctiveRingingForceDeliveryRingPattern=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceUserId' => $serviceUserId,
                    'distinctiveRingingCallCenterCalls' => $distinctiveRingingCallCenterCalls,
                    'distinctiveRingingRingPatternForCallCenter' => $distinctiveRingingRingPatternForCallCenter,
                    'distinctiveRingingForceDeliveryRingPattern' => $distinctiveRingingForceDeliveryRingPattern
                ]
            ];
        }

        # Request to get the group branding information.
        static public function GroupCallCenterEnhancedReportingBrandingGetRequest($serviceProviderId=null,$groupId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId
                ]
            ];
        }

        # Request to modify the group branding configuration.
        static public function GroupCallCenterEnhancedReportingBrandingModifyRequest($serviceProviderId=null,$groupId=null,$brandingChoice=null,$brandingFile=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId,
                    'brandingChoice' => $brandingChoice,
                    'brandingFile' => $brandingFile
                ]
            ];
        }

        # Request to get all enabled call center report template for a group.
        static public function GroupCallCenterEnhancedReportingGetAvailableReportTemplateListRequest($serviceProviderId=null,$groupId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId
                ]
            ];
        }

        # Request to get a group level call center enhanced reporting setting.
        static public function GroupCallCenterEnhancedReportingGetRequest($serviceProviderId=null,$groupId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId
                ]
            ];
        }

        # Request to modify group level call center enhanced reporting settings.
        static public function GroupCallCenterEnhancedReportingModifyRequest($serviceProviderId=null,$groupId=null,$reportingServer=null,$webStatisticSource=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId,
                    'reportingServer' => $reportingServer,
                    'webStatisticSource' => $webStatisticSource
                ]
            ];
        }

        # Request to add a group level call center report template.
        static public function GroupCallCenterEnhancedReportingReportTemplateAddRequest($serviceProviderId=null,$groupId=null,$name=null,$description=null,$dataTemplate=null,$filterNumber=null,$xsltTemplate=null,$scope=null,$isEnabled=null,$isRealtimeReport=null,$callCompletionThresholdParam=null,$shortDurationThresholdParam=null,$serviceLevelThresholdParam=null,$serviceLevelInclusionsParam=null,$serviceLevelObjectiveThresholdParam=null,$abandonedCallThresholdParam=null,$serviceLevelThresholdParamNumber=null,$abandonedCallThresholdParamNumber=null,$filterValue=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId,
                    'name' => $name,
                    'description' => $description,
                    'dataTemplate' => $dataTemplate,
                    'filterNumber' => $filterNumber,
                    'xsltTemplate' => $xsltTemplate,
                    'scope' => $scope,
                    'isEnabled' => $isEnabled,
                    'isRealtimeReport' => $isRealtimeReport,
                    'callCompletionThresholdParam' => $callCompletionThresholdParam,
                    'shortDurationThresholdParam' => $shortDurationThresholdParam,
                    'serviceLevelThresholdParam' => $serviceLevelThresholdParam,
                    'serviceLevelInclusionsParam' => $serviceLevelInclusionsParam,
                    'serviceLevelObjectiveThresholdParam' => $serviceLevelObjectiveThresholdParam,
                    'abandonedCallThresholdParam' => $abandonedCallThresholdParam,
                    'serviceLevelThresholdParamNumber' => $serviceLevelThresholdParamNumber,
                    'abandonedCallThresholdParamNumber' => $abandonedCallThresholdParamNumber,
                    'filterValue' => $filterValue
                ]
            ];
        }

        # Request to delete a group level call center report template.
        static public function GroupCallCenterEnhancedReportingReportTemplateDeleteRequest($serviceProviderId=null,$groupId=null,$name=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId,
                    'name' => $name
                ]
            ];
        }

        # Request to get group level call center report template list.
        static public function GroupCallCenterEnhancedReportingReportTemplateGetListRequest($serviceProviderId=null,$groupId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId
                ]
            ];
        }

        # Request to get a group level call center report template.
        static public function GroupCallCenterEnhancedReportingReportTemplateGetRequest($serviceProviderId=null,$groupId=null,$name=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId,
                    'name' => $name
                ]
            ];
        }

        # Request to modify a group level call center report template.
        static public function GroupCallCenterEnhancedReportingReportTemplateModifyRequest($serviceProviderId=null,$groupId=null,$name=null,$newName=null,$description=null,$xsltTemplate=null,$scope=null,$isEnabled=null,$isRealtimeReport=null,$filterNumber=null,$filterValue=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId,
                    'name' => $name,
                    'newName' => $newName,
                    'description' => $description,
                    'xsltTemplate' => $xsltTemplate,
                    'scope' => $scope,
                    'isEnabled' => $isEnabled,
                    'isRealtimeReport' => $isRealtimeReport,
                    'filterNumber' => $filterNumber,
                    'filterValue' => $filterValue
                ]
            ];
        }

        # Request to add a group level call center reporting scheduled report.
        static public function GroupCallCenterEnhancedReportingScheduledReportAddRequest($serviceProviderId=null,$groupId=null,$name=null,$description=null,$reportTemplate=null,$schedule=null,$samplingPeriod=null,$startDayOfWeek=null,$reportTimeZone=null,$reportDateFormat=null,$reportTimeFormat=null,$reportInterval=null,$reportFormat=null,$agent=null,$callCompletionThresholdSeconds=null,$shortDurationThresholdSeconds=null,$serviceLevelThresholdSeconds=null,$serviceLevelInclusions=null,$serviceLevelObjectivePercentage=null,$abandonedCallThresholdSeconds=null,$emailAddress=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId,
                    'name' => $name,
                    'description' => $description,
                    'reportTemplate' => $reportTemplate,
                    'schedule' => $schedule,
                    'samplingPeriod' => $samplingPeriod,
                    'startDayOfWeek' => $startDayOfWeek,
                    'reportTimeZone' => $reportTimeZone,
                    'reportDateFormat' => $reportDateFormat,
                    'reportTimeFormat' => $reportTimeFormat,
                    'reportInterval' => $reportInterval,
                    'reportFormat' => $reportFormat,
                    'agent' => $agent,
                    'callCompletionThresholdSeconds' => $callCompletionThresholdSeconds,
                    'shortDurationThresholdSeconds' => $shortDurationThresholdSeconds,
                    'serviceLevelThresholdSeconds' => $serviceLevelThresholdSeconds,
                    'serviceLevelInclusions' => $serviceLevelInclusions,
                    'serviceLevelObjectivePercentage' => $serviceLevelObjectivePercentage,
                    'abandonedCallThresholdSeconds' => $abandonedCallThresholdSeconds,
                    'emailAddress' => $emailAddress
                ]
            ];
        }

        # Request to delete a group level call center reporting scheduled report.
        static public function GroupCallCenterEnhancedReportingScheduledReportDeleteRequest($serviceProviderId=null,$groupId=null,$name=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId,
                    'name' => $name
                ]
            ];
        }

        # Request to get a list of active group level call center reporting scheduled reports.
        static public function GroupCallCenterEnhancedReportingScheduledReportGetActiveListRequest($serviceProviderId=null,$groupId=null,$responseSizeLimit=null,$searchCriteriaCallCenterScheduledReportName=null,$searchCriteriaExactCallCenterScheduledReportCreatedBySupervisor=null,$searchCriteriaExactCallCenterReportTemplateKey=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId,
                    'responseSizeLimit' => $responseSizeLimit,
                    'searchCriteriaCallCenterScheduledReportName' => $searchCriteriaCallCenterScheduledReportName,
                    'searchCriteriaExactCallCenterScheduledReportCreatedBySupervisor' => $searchCriteriaExactCallCenterScheduledReportCreatedBySupervisor,
                    'searchCriteriaExactCallCenterReportTemplateKey' => $searchCriteriaExactCallCenterReportTemplateKey
                ]
            ];
        }

        # Request to get a list of completed group level call center reporting scheduled reports.
        static public function GroupCallCenterEnhancedReportingScheduledReportGetCompletedListRequest($serviceProviderId=null,$groupId=null,$responseSizeLimit=null,$searchCriteriaCallCenterScheduledReportName=null,$searchCriteriaExactCallCenterScheduledReportCreatedBySupervisor=null,$searchCriteriaExactCallCenterReportTemplateKey=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId,
                    'responseSizeLimit' => $responseSizeLimit,
                    'searchCriteriaCallCenterScheduledReportName' => $searchCriteriaCallCenterScheduledReportName,
                    'searchCriteriaExactCallCenterScheduledReportCreatedBySupervisor' => $searchCriteriaExactCallCenterScheduledReportCreatedBySupervisor,
                    'searchCriteriaExactCallCenterReportTemplateKey' => $searchCriteriaExactCallCenterReportTemplateKey
                ]
            ];
        }

        # Request to get a list of group level call center reporting scheduled reports.
        static public function GroupCallCenterEnhancedReportingScheduledReportGetListRequest($serviceProviderId=null,$groupId=null,$responseSizeLimit=null,$searchCriteriaCallCenterScheduledReportName=null,$searchCriteriaExactCallCenterScheduledReportCreatedBySupervisor=null,$searchCriteriaExactCallCenterReportTemplateKey=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId,
                    'responseSizeLimit' => $responseSizeLimit,
                    'searchCriteriaCallCenterScheduledReportName' => $searchCriteriaCallCenterScheduledReportName,
                    'searchCriteriaExactCallCenterScheduledReportCreatedBySupervisor' => $searchCriteriaExactCallCenterScheduledReportCreatedBySupervisor,
                    'searchCriteriaExactCallCenterReportTemplateKey' => $searchCriteriaExactCallCenterReportTemplateKey
                ]
            ];
        }

        # Request to get all the call center reporting scheduled report in a group that uses a given group level report template.
        static public function GroupCallCenterEnhancedReportingScheduledReportGetReportTemplateUsageListRequest($serviceProviderId=null,$groupId=null,$name=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId,
                    'name' => $name
                ]
            ];
        }

        # Request to get a group level call center reporting scheduled report.
        static public function GroupCallCenterEnhancedReportingScheduledReportGetRequest($serviceProviderId=null,$groupId=null,$name=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId,
                    'name' => $name
                ]
            ];
        }

        # Request to modify a group level call center reporting scheduled report.
        static public function GroupCallCenterEnhancedReportingScheduledReportModifyRequest($serviceProviderId=null,$groupId=null,$name=null,$newName=null,$description=null,$schedule=null,$samplingPeriod=null,$startDayOfWeek=null,$reportTimeZone=null,$reportDateFormat=null,$reportTimeFormat=null,$reportInterval=null,$reportFormat=null,$agent=null,$callCompletionThresholdSeconds=null,$shortDurationThresholdSeconds=null,$serviceLevelThresholdSeconds=null,$serviceLevelInclusions=null,$serviceLevelObjectivePercentage=null,$abandonedCallThresholdSeconds=null,$emailAddress=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId,
                    'name' => $name,
                    'newName' => $newName,
                    'description' => $description,
                    'schedule' => $schedule,
                    'samplingPeriod' => $samplingPeriod,
                    'startDayOfWeek' => $startDayOfWeek,
                    'reportTimeZone' => $reportTimeZone,
                    'reportDateFormat' => $reportDateFormat,
                    'reportTimeFormat' => $reportTimeFormat,
                    'reportInterval' => $reportInterval,
                    'reportFormat' => $reportFormat,
                    'agent' => $agent,
                    'callCompletionThresholdSeconds' => $callCompletionThresholdSeconds,
                    'shortDurationThresholdSeconds' => $shortDurationThresholdSeconds,
                    'serviceLevelThresholdSeconds' => $serviceLevelThresholdSeconds,
                    'serviceLevelInclusions' => $serviceLevelInclusions,
                    'serviceLevelObjectivePercentage' => $serviceLevelObjectivePercentage,
                    'abandonedCallThresholdSeconds' => $abandonedCallThresholdSeconds,
                    'emailAddress' => $emailAddress
                ]
            ];
        }

        # Get a call center's forced forwarding settings.
        static public function GroupCallCenterForcedForwardingGetRequest17($serviceUserId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceUserId' => $serviceUserId
                ]
            ];
        }

        # Modify a call center's forced forwarding settings.
        static public function GroupCallCenterForcedForwardingModifyRequest17($serviceUserId=null,$isActive=null,$forwardToPhoneNumber=null,$allowEnableViaFAC=null,$playAnnouncementBeforeForwarding=null,$audioMessageSelection=null,$audioUrlList=null,$audioFileList=null,$videoMessageSelection=null,$videoUrlList=null,$videoFileList=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceUserId' => $serviceUserId,
                    'isActive' => $isActive,
                    'forwardToPhoneNumber' => $forwardToPhoneNumber,
                    'allowEnableViaFAC' => $allowEnableViaFAC,
                    'playAnnouncementBeforeForwarding' => $playAnnouncementBeforeForwarding,
                    'audioMessageSelection' => $audioMessageSelection,
                    'audioUrlList' => $audioUrlList,
                    'audioFileList' => $audioFileList,
                    'videoMessageSelection' => $videoMessageSelection,
                    'videoUrlList' => $videoUrlList,
                    'videoFileList' => $videoFileList
                ]
            ];
        }

        # Get a list of agents assigned to a call center.
        static public function GroupCallCenterGetAgentListRequest($serviceUserId=null,$responseSizeLimit=null,$searchCriteriaUserLastName=null,$searchCriteriaUserFirstName=null,$searchCriteriaExactUserDepartment=null,$searchCriteriaExactUserGroup=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceUserId' => $serviceUserId,
                    'responseSizeLimit' => $responseSizeLimit,
                    'searchCriteriaUserLastName' => $searchCriteriaUserLastName,
                    'searchCriteriaUserFirstName' => $searchCriteriaUserFirstName,
                    'searchCriteriaExactUserDepartment' => $searchCriteriaExactUserDepartment,
                    'searchCriteriaExactUserGroup' => $searchCriteriaExactUserGroup
                ]
            ];
        }

        # Get a call center's announcement settings.
        static public function GroupCallCenterGetAnnouncementRequest17($serviceUserId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceUserId' => $serviceUserId
                ]
            ];
        }

        # Get a list of users that can be assigned as agents to a given type of Call Center.
        static public function GroupCallCenterGetAvailableAgentListRequest($serviceProviderId=null,$groupId=null,$callCenterType=null,$responseSizeLimit=null,$searchCriteriaUserLastName=null,$searchCriteriaUserFirstName=null,$searchCriteriaExactUserDepartment=null,$searchCriteriaExactUserGroup=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId,
                    'callCenterType' => $callCenterType,
                    'responseSizeLimit' => $responseSizeLimit,
                    'searchCriteriaUserLastName' => $searchCriteriaUserLastName,
                    'searchCriteriaUserFirstName' => $searchCriteriaUserFirstName,
                    'searchCriteriaExactUserDepartment' => $searchCriteriaExactUserDepartment,
                    'searchCriteriaExactUserGroup' => $searchCriteriaExactUserGroup
                ]
            ];
        }

        # Get a list of users that can be assigned as supervisors to a Call Center.
        static public function GroupCallCenterGetAvailableSupervisorListRequest($serviceProviderId=null,$groupId=null,$responseSizeLimit=null,$searchCriteriaUserLastName=null,$searchCriteriaUserFirstName=null,$searchCriteriaExactUserDepartment=null,$searchCriteriaExactUserGroup=null) {
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

        # Get a list of agent who selected the DNIS as the outgoing call.
        static public function GroupCallCenterGetDNISAgentListRequest($dnisKey=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'dnisKey' => $dnisKey
                ]
            ];
        }

        # Get a call center's DNIS Annoucements
        static public function GroupCallCenterGetDNISAnnouncementRequest($dnisKey=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'dnisKey' => $dnisKey
                ]
            ];
        }

        # Get a list of DNIS that are configured for a Call Center.
        static public function GroupCallCenterGetDNISListRequest($serviceUserId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceUserId' => $serviceUserId
                ]
            ];
        }

        # Get a call center's DNIS.
        static public function GroupCallCenterGetDNISRequest($dnisKey=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'dnisKey' => $dnisKey
                ]
            ];
        }

        # Get a list of Call Center instances within a group.
        static public function GroupCallCenterGetInstanceListRequest($serviceProviderId=null,$groupId=null,$groupDepartmentName=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId,
                    'groupDepartmentName' => $groupDepartmentName
                ]
            ];
        }

        # Get the distinctive ringing configuration values for call center.
        static public function GroupCallCenterGetDistinctiveRingingRequest($serviceUserId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceUserId' => $serviceUserId
                ]
            ];
        }

        # Request to get all the information of a Call Center instance.
        static public function GroupCallCenterGetInstanceRequest17sp3($serviceUserId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceUserId' => $serviceUserId
                ]
            ];
        }

        # Request to get the call center statistics reporting settings.
        static public function GroupCallCenterGetInstanceStatisticsReportingRequest17sp1($serviceUserId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceUserId' => $serviceUserId
                ]
            ];
        }

        # Get Call Center queue and agent statistics.
        static public function GroupCallCenterGetInstanceStatisticsRequest14sp9($serviceUserId=null,$statisticsRange=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceUserId' => $serviceUserId,
                    'statisticsRange' => $statisticsRange
                ]
            ];
        }

        # Get Call Center queue status.
        static public function GroupCallCenterGetInstanceQueueStatusRequest($serviceUserId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceUserId' => $serviceUserId
                ]
            ];
        }

        # Request the Group level data associated with Call Center.
        static public function GroupCallCenterGetRequest($serviceProviderId=null,$groupId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId
                ]
            ];
        }

        # Request the group call center routing policy.
        static public function GroupCallCenterGetRoutingPolicyRequest($serviceProviderId=null,$groupId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId
                ]
            ];
        }

        # Get a list of supervisors assigned to a call center.
        static public function GroupCallCenterGetSupervisorListRequest16($serviceUserId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceUserId' => $serviceUserId
                ]
            ];
        }

        # Get a list of unlicensed users who are preventing the Call Center from upgrading to another type.
        static public function GroupCallCenterGetUnlicensedAgentListRequest($serviceUserId=null,$callCenterType=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceUserId' => $serviceUserId,
                    'callCenterType' => $callCenterType
                ]
            ];
        }

        # Get a call center's holiday service settings.
        static public function GroupCallCenterHolidayServiceGetRequest17sp1($serviceUserId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceUserId' => $serviceUserId
                ]
            ];
        }

        # Modify a call center's holiday service settings.
        static public function GroupCallCenterHolidayServiceModifyRequest17sp1($serviceUserId=null,$action=null,$holidaySchedule=null,$transferPhoneNumber=null,$playAnnouncementBeforeAction=null,$audioMessageSelection=null,$audioUrlList=null,$audioFileList=null,$videoMessageSelection=null,$videoUrlList=null,$videoFileList=null) {
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

        # Request to set the active status of Call Center instances.
        static public function GroupCallCenterModifyActiveInstanceListRequest($serviceActivation=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceActivation' => $serviceActivation
                ]
            ];
        }

        # Request to modify the agent list for a call center.
        static public function GroupCallCenterModifyAgentListRequest($serviceUserId=null,$agentUserIdList=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceUserId' => $serviceUserId,
                    'agentUserIdList' => $agentUserIdList
                ]
            ];
        }

        # Modify a call center's announcement settings.
        static public function GroupCallCenterModifyAnnouncementRequest17($serviceUserId=null,$playEntranceMessage=null,$mandatoryEntranceMessage=null,$entranceAudioMessageSelection=null,$entranceMessageAudioUrlList=null,$entranceMessageAudioFileList=null,$entranceVideoMessageSelection=null,$entranceMessageVideoUrlList=null,$entranceMessageVideoFileList=null,$playPeriodicComfortMessage=null,$timeBetweenComfortMessagesSeconds=null,$periodicComfortAudioMessageSelection=null,$periodicComfortMessageAudioUrlList=null,$periodicComfortMessageAudioFileList=null,$periodicComfortVideoMessageSelection=null,$periodicComfortMessageVideoUrlList=null,$periodicComfortMessageVideoFileList=null,$enableMediaOnHoldForQueuedCalls=null,$mediaOnHoldSource=null,$mediaOnHoldUseAlternateSourceForInternalCalls=null,$mediaOnHoldInternalSource=null,$playWhisperMessage=null,$whisperAudioMessageSelection=null,$whisperMessageAudioUrlList=null,$whisperMessageAudioFileList=null,$whisperVideoMessageSelection=null,$whisperMessageVideoUrlList=null,$whisperMessageVideoFileList=null,$estimatedWaitMessageOptionsModify=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceUserId' => $serviceUserId,
                    'playEntranceMessage' => $playEntranceMessage,
                    'mandatoryEntranceMessage' => $mandatoryEntranceMessage,
                    'entranceAudioMessageSelection' => $entranceAudioMessageSelection,
                    'entranceMessageAudioUrlList' => $entranceMessageAudioUrlList,
                    'entranceMessageAudioFileList' => $entranceMessageAudioFileList,
                    'entranceVideoMessageSelection' => $entranceVideoMessageSelection,
                    'entranceMessageVideoUrlList' => $entranceMessageVideoUrlList,
                    'entranceMessageVideoFileList' => $entranceMessageVideoFileList,
                    'playPeriodicComfortMessage' => $playPeriodicComfortMessage,
                    'timeBetweenComfortMessagesSeconds' => $timeBetweenComfortMessagesSeconds,
                    'periodicComfortAudioMessageSelection' => $periodicComfortAudioMessageSelection,
                    'periodicComfortMessageAudioUrlList' => $periodicComfortMessageAudioUrlList,
                    'periodicComfortMessageAudioFileList' => $periodicComfortMessageAudioFileList,
                    'periodicComfortVideoMessageSelection' => $periodicComfortVideoMessageSelection,
                    'periodicComfortMessageVideoUrlList' => $periodicComfortMessageVideoUrlList,
                    'periodicComfortMessageVideoFileList' => $periodicComfortMessageVideoFileList,
                    'enableMediaOnHoldForQueuedCalls' => $enableMediaOnHoldForQueuedCalls,
                    'mediaOnHoldSource' => $mediaOnHoldSource,
                    'mediaOnHoldUseAlternateSourceForInternalCalls' => $mediaOnHoldUseAlternateSourceForInternalCalls,
                    'mediaOnHoldInternalSource' => $mediaOnHoldInternalSource,
                    'playWhisperMessage' => $playWhisperMessage,
                    'whisperAudioMessageSelection' => $whisperAudioMessageSelection,
                    'whisperMessageAudioUrlList' => $whisperMessageAudioUrlList,
                    'whisperMessageAudioFileList' => $whisperMessageAudioFileList,
                    'whisperVideoMessageSelection' => $whisperVideoMessageSelection,
                    'whisperMessageVideoUrlList' => $whisperMessageVideoUrlList,
                    'whisperMessageVideoFileList' => $whisperMessageVideoFileList,
                    'estimatedWaitMessageOptionsModify' => $estimatedWaitMessageOptionsModify
                ]
            ];
        }

        # Modify a call center DNIS announcement settings.
        static public function GroupCallCenterModifyDNISAnnouncementRequest($dnisKey=null,$playEntranceMessage=null,$mandatoryEntranceMessage=null,$entranceAudioMessageSelection=null,$entranceMessageAudioUrlList=null,$entranceMessageAudioFileList=null,$entranceVideoMessageSelection=null,$entranceMessageVideoUrlList=null,$entranceMessageVideoFileList=null,$playPeriodicComfortMessage=null,$timeBetweenComfortMessagesSeconds=null,$periodicComfortAudioMessageSelection=null,$periodicComfortMessageAudioUrlList=null,$periodicComfortMessageAudioFileList=null,$periodicComfortVideoMessageSelection=null,$periodicComfortMessageVideoUrlList=null,$periodicComfortMessageVideoFileList=null,$enableMediaOnHoldForQueuedCalls=null,$mediaOnHoldSource=null,$playWhisperMessage=null,$whisperAudioMessageSelection=null,$whisperMessageAudioUrlList=null,$whisperMessageAudioFileList=null,$whisperVideoMessageSelection=null,$whisperMessageVideoUrlList=null,$whisperMessageVideoFileList=null,$estimatedWaitMessageOptionsModify=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'dnisKey' => $dnisKey,
                    'playEntranceMessage' => $playEntranceMessage,
                    'mandatoryEntranceMessage' => $mandatoryEntranceMessage,
                    'entranceAudioMessageSelection' => $entranceAudioMessageSelection,
                    'entranceMessageAudioUrlList' => $entranceMessageAudioUrlList,
                    'entranceMessageAudioFileList' => $entranceMessageAudioFileList,
                    'entranceVideoMessageSelection' => $entranceVideoMessageSelection,
                    'entranceMessageVideoUrlList' => $entranceMessageVideoUrlList,
                    'entranceMessageVideoFileList' => $entranceMessageVideoFileList,
                    'playPeriodicComfortMessage' => $playPeriodicComfortMessage,
                    'timeBetweenComfortMessagesSeconds' => $timeBetweenComfortMessagesSeconds,
                    'periodicComfortAudioMessageSelection' => $periodicComfortAudioMessageSelection,
                    'periodicComfortMessageAudioUrlList' => $periodicComfortMessageAudioUrlList,
                    'periodicComfortMessageAudioFileList' => $periodicComfortMessageAudioFileList,
                    'periodicComfortVideoMessageSelection' => $periodicComfortVideoMessageSelection,
                    'periodicComfortMessageVideoUrlList' => $periodicComfortMessageVideoUrlList,
                    'periodicComfortMessageVideoFileList' => $periodicComfortMessageVideoFileList,
                    'enableMediaOnHoldForQueuedCalls' => $enableMediaOnHoldForQueuedCalls,
                    'mediaOnHoldSource' => $mediaOnHoldSource,
                    'playWhisperMessage' => $playWhisperMessage,
                    'whisperAudioMessageSelection' => $whisperAudioMessageSelection,
                    'whisperMessageAudioUrlList' => $whisperMessageAudioUrlList,
                    'whisperMessageAudioFileList' => $whisperMessageAudioFileList,
                    'whisperVideoMessageSelection' => $whisperVideoMessageSelection,
                    'whisperMessageVideoUrlList' => $whisperMessageVideoUrlList,
                    'whisperMessageVideoFileList' => $whisperMessageVideoFileList,
                    'estimatedWaitMessageOptionsModify' => $estimatedWaitMessageOptionsModify
                ]
            ];
        }

        # Modify the distinctive ringing configuration values for call center.
        static public function GroupCallCenterModifyDistinctiveRingingRequest($serviceUserId=null,$distinctiveRingingCallCenterCalls=null,$distinctiveRingingRingPatternForCallCenter=null,$distinctiveRingingForceDeliveryRingPattern=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceUserId' => $serviceUserId,
                    'distinctiveRingingCallCenterCalls' => $distinctiveRingingCallCenterCalls,
                    'distinctiveRingingRingPatternForCallCenter' => $distinctiveRingingRingPatternForCallCenter,
                    'distinctiveRingingForceDeliveryRingPattern' => $distinctiveRingingForceDeliveryRingPattern
                ]
            ];
        }

        # Modify the setting that are configured for all the DNIS in a Call Center.
        static public function GroupCallCenterModifyDNISParametersRequest($serviceUserId=null,$displayDNISNumber=null,$displayDNISName=null,$promoteCallsFromPriority1to0=null,$promoteCallsFromPriority2to1=null,$promoteCallsFromPriority3to2=null,$promoteCallsFromPriority1to0Seconds=null,$promoteCallsFromPriority2to1Seconds=null,$promoteCallsFromPriority3to2Seconds=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceUserId' => $serviceUserId,
                    'displayDNISNumber' => $displayDNISNumber,
                    'displayDNISName' => $displayDNISName,
                    'promoteCallsFromPriority1to0' => $promoteCallsFromPriority1to0,
                    'promoteCallsFromPriority2to1' => $promoteCallsFromPriority2to1,
                    'promoteCallsFromPriority3to2' => $promoteCallsFromPriority3to2,
                    'promoteCallsFromPriority1to0Seconds' => $promoteCallsFromPriority1to0Seconds,
                    'promoteCallsFromPriority2to1Seconds' => $promoteCallsFromPriority2to1Seconds,
                    'promoteCallsFromPriority3to2Seconds' => $promoteCallsFromPriority3to2Seconds
                ]
            ];
        }

        # Modify a call center's DNIS settings.
        static public function GroupCallCenterModifyDNISRequest($dnisKey=null,$newDNISName=null,$dnisPhoneNumber=null,$extension=null,$useCustomCLIDSettings=null,$callingLineIdPhoneNumber=null,$callingLineIdLastName=null,$callingLineIdFirstName=null,$useCustomDnisAnnouncementSettings=null,$priority=null,$allowOutgoingACDCall=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'dnisKey' => $dnisKey,
                    'newDNISName' => $newDNISName,
                    'dnisPhoneNumber' => $dnisPhoneNumber,
                    'extension' => $extension,
                    'useCustomCLIDSettings' => $useCustomCLIDSettings,
                    'callingLineIdPhoneNumber' => $callingLineIdPhoneNumber,
                    'callingLineIdLastName' => $callingLineIdLastName,
                    'callingLineIdFirstName' => $callingLineIdFirstName,
                    'useCustomDnisAnnouncementSettings' => $useCustomDnisAnnouncementSettings,
                    'priority' => $priority,
                    'allowOutgoingACDCall' => $allowOutgoingACDCall
                ]
            ];
        }

        # Request to modify a Call Center instance.
        static public function GroupCallCenterModifyInstanceRequest17sp1($serviceUserId=null,$serviceInstanceProfile=null,$type=null,$policy=null,$enableVideo=null,$queueLength=null,$enableReporting=null,$reportingServerName=null,$allowCallerToDialEscapeDigit=null,$escapeDigit=null,$resetCallStatisticsUponEntryInQueue=null,$allowAgentLogoff=null,$allowCallWaitingForAgents=null,$allowCallsToAgentsInWrapUp=null,$overrideAgentWrapUpTime=null,$wrapUpSeconds=null,$forceDeliveryOfCalls=null,$forceDeliveryWaitTimeSeconds=null,$enableAutomaticStateChangeForAgents=null,$agentStateAfterCall=null,$agentUnavailableCode=null,$externalPreferredAudioCodec=null,$internalPreferredAudioCodec=null,$playRingingWhenOfferingCall=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
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

        # Modify the Call Center statistics reporting frequency and destination.
        static public function GroupCallCenterModifyInstanceStatisticsReportingRequest17sp1($serviceUserId=null,$generateDailyReport=null,$collectionPeriodMinutes=null,$reportingEmailAddress1=null,$reportingEmailAddress2=null,$statisticsSource=null) {
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

        # Request to modify the weighted call distribution of a Call Center instance.
        static public function GroupCallCenterModifyInstanceWeightedCallDistributionRequest($serviceUserId=null,$agentWeight=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceUserId' => $serviceUserId,
                    'agentWeight' => $agentWeight
                ]
            ];
        }

        # Modify the group level data associated with Call Center and
        static public function GroupCallCenterModifyRequest($serviceProviderId=null,$groupId=null,$useSystemDefaultGuardTimer=null,$enableGuardTimer=null,$guardTimerSeconds=null,$useSystemDefaultUnavailableSettings=null,$forceAgentUnavailableOnDNDActivation=null,$forceAgentUnavailableOnPersonalCalls=null,$forceAgentUnavailableOnBouncedCallLimit=null,$numberConsecutiveBouncedCallsToForceAgentUnavailable=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId,
                    'useSystemDefaultGuardTimer' => $useSystemDefaultGuardTimer,
                    'enableGuardTimer' => $enableGuardTimer,
                    'guardTimerSeconds' => $guardTimerSeconds,
                    'useSystemDefaultUnavailableSettings' => $useSystemDefaultUnavailableSettings,
                    'forceAgentUnavailableOnDNDActivation' => $forceAgentUnavailableOnDNDActivation,
                    'forceAgentUnavailableOnPersonalCalls' => $forceAgentUnavailableOnPersonalCalls,
                    'forceAgentUnavailableOnBouncedCallLimit' => $forceAgentUnavailableOnBouncedCallLimit,
                    'numberConsecutiveBouncedCallsToForceAgentUnavailable' => $numberConsecutiveBouncedCallsToForceAgentUnavailable
                ]
            ];
        }

        # Modify the group call center routing policy.
        static public function GroupCallCenterModifyRoutingPolicyRequest($serviceProviderId=null,$groupId=null,$routingPolicy=null,$routingPriorityOrder=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId,
                    'routingPolicy' => $routingPolicy,
                    'routingPriorityOrder' => $routingPriorityOrder
                ]
            ];
        }

        # Request to modify the supervisor list for a call center.
        static public function GroupCallCenterModifySupervisorListRequest16($serviceUserId=null,$supervisorUserIdList=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceUserId' => $serviceUserId,
                    'supervisorUserIdList' => $supervisorUserIdList
                ]
            ];
        }

        # Get a call center's night service settings.
        static public function GroupCallCenterNightServiceGetRequest17sp1($serviceUserId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceUserId' => $serviceUserId
                ]
            ];
        }

        # Modify a call center's night service settings.
        static public function GroupCallCenterNightServiceModifyRequest17sp1($serviceUserId=null,$action=null,$businessHours=null,$forceNightService=null,$allowManualOverrideViaFAC=null,$transferPhoneNumber=null,$playAnnouncementBeforeAction=null,$audioMessageSelection=null,$audioUrlList=null,$audioFileList=null,$videoMessageSelection=null,$videoUrlList=null,$videoFileList=null,$manualAnnouncementMode=null,$manualAudioMessageSelection=null,$manualAudioUrlList=null,$manualAudioFileList=null,$manualVideoMessageSelection=null,$manualVideoUrlList=null,$manualVideoFileList=null) {
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

        # Get a call center's overflow settings.
        static public function GroupCallCenterOverflowGetRequest17($serviceUserId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceUserId' => $serviceUserId
                ]
            ];
        }

        # Modify a call center's overflow settings.
        static public function GroupCallCenterOverflowModifyRequest17($serviceUserId=null,$action=null,$transferPhoneNumber=null,$overflowAfterTimeout=null,$timeoutSeconds=null,$playAnnouncementBeforeOverflowProcessing=null,$audioMessageSelection=null,$audioUrlList=null,$audioFileList=null,$videoMessageSelection=null,$videoUrlList=null,$videoFileList=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceUserId' => $serviceUserId,
                    'action' => $action,
                    'transferPhoneNumber' => $transferPhoneNumber,
                    'overflowAfterTimeout' => $overflowAfterTimeout,
                    'timeoutSeconds' => $timeoutSeconds,
                    'playAnnouncementBeforeOverflowProcessing' => $playAnnouncementBeforeOverflowProcessing,
                    'audioMessageSelection' => $audioMessageSelection,
                    'audioUrlList' => $audioUrlList,
                    'audioFileList' => $audioFileList,
                    'videoMessageSelection' => $videoMessageSelection,
                    'videoUrlList' => $videoUrlList,
                    'videoFileList' => $videoFileList
                ]
            ];
        }

        # Get the status configuration for a given call center.
        static public function GroupCallCenterQueueStatusNotificationGetRequest($serviceUserId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceUserId' => $serviceUserId
                ]
            ];
        }

        # Set the status configuration for a given call center.
        static public function GroupCallCenterQueueStatusNotificationModifyRequest($serviceUserId=null,$enableQueueStatusNotification=null,$enableQueueDepthThreshold=null,$enableWaitingTimeThreshold=null,$numberOfCallsThreshold=null,$waitingTimeOfCallsThreshold=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceUserId' => $serviceUserId,
                    'enableQueueStatusNotification' => $enableQueueStatusNotification,
                    'enableQueueDepthThreshold' => $enableQueueDepthThreshold,
                    'enableWaitingTimeThreshold' => $enableWaitingTimeThreshold,
                    'numberOfCallsThreshold' => $numberOfCallsThreshold,
                    'waitingTimeOfCallsThreshold' => $waitingTimeOfCallsThreshold
                ]
            ];
        }

        # Add a Call Center Call Disposition Code.
        static public function GroupCallCenterQueueCallDispositionCodeAddRequest($serviceUserId=null,$code=null,$isActive=null,$description=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceUserId' => $serviceUserId,
                    'code' => $code,
                    'isActive' => $isActive,
                    'description' => $description
                ]
            ];
        }

        # Delete a Call Center Call Disposition Code.
        static public function GroupCallCenterQueueCallDispositionCodeDeleteRequest($serviceUserId=null,$code=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceUserId' => $serviceUserId,
                    'code' => $code
                ]
            ];
        }

        # Get the list of Call Center Level and Organization Level Call Disposition Codes.
        static public function GroupCallCenterQueueCallDispositionCodeGetListRequest($serviceUserId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceUserId' => $serviceUserId
                ]
            ];
        }

        # Get a Call Center Call Disposition Code.
        static public function GroupCallCenterQueueCallDispositionCodeGetRequest($serviceUserId=null,$code=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceUserId' => $serviceUserId,
                    'code' => $code
                ]
            ];
        }

        # Modify a Call Center Call Disposition Code.
        static public function GroupCallCenterQueueCallDispositionCodeModifyRequest($serviceUserId=null,$code=null,$isActive=null,$description=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceUserId' => $serviceUserId,
                    'code' => $code,
                    'isActive' => $isActive,
                    'description' => $description
                ]
            ];
        }

        # Request the user level data associated with Call Center Call Disposition Code Settings.
        static public function GroupCallCenterQueueCallDispositionCodeSettingsGetRequest($serviceUserId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceUserId' => $serviceUserId
                ]
            ];
        }

        # Modify the enterprise level data associated with Call Center Agents Unavailable Code Settings.
        static public function GroupCallCenterQueueCallDispositionCodeSettingsModifyRequest($serviceUserId=null,$enableCallDispositionCodes=null,$includeOrganizationCodes=null,$forceUseOfCallDispositionCodes=null,$defaultCallDispositionCode=null,$callDispositionCodeActivation=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceUserId' => $serviceUserId,
                    'enableCallDispositionCodes' => $enableCallDispositionCodes,
                    'includeOrganizationCodes' => $includeOrganizationCodes,
                    'forceUseOfCallDispositionCodes' => $forceUseOfCallDispositionCodes,
                    'defaultCallDispositionCode' => $defaultCallDispositionCode,
                    'callDispositionCodeActivation' => $callDispositionCodeActivation
                ]
            ];
        }

        # Get a call center's stranded call settings.
        static public function GroupCallCenterStrandedCallGetRequest17($serviceUserId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceUserId' => $serviceUserId
                ]
            ];
        }

        # Modify a call center's stranded call settings.
        static public function GroupCallCenterStrandedCallModifyRequest17($serviceUserId=null,$action=null,$transferPhoneNumber=null,$audioMessageSelection=null,$audioUrlList=null,$audioFileList=null,$videoMessageSelection=null,$videoUrlList=null,$videoFileList=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceUserId' => $serviceUserId,
                    'action' => $action,
                    'transferPhoneNumber' => $transferPhoneNumber,
                    'audioMessageSelection' => $audioMessageSelection,
                    'audioUrlList' => $audioUrlList,
                    'audioFileList' => $audioFileList,
                    'videoMessageSelection' => $videoMessageSelection,
                    'videoUrlList' => $videoUrlList,
                    'videoFileList' => $videoFileList
                ]
            ];
        }

        # Request to get the system branding information.
        static public function SystemCallCenterEnhancedReportingBrandingGetRequest() {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => null
            ];
        }

        # Request to modify the system branding configuration.
        static public function SystemCallCenterEnhancedReportingBrandingModifyRequest($brandingChoice=null,$customBrandingFile=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'brandingChoice' => $brandingChoice,
                    'customBrandingFile' => $customBrandingFile
                ]
            ];
        }

        # Request to get the list of data template and the corresponding information in the system.
        static public function SystemCallCenterEnhancedReportingDataTemplateGetListRequest() {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => null
            ];
        }

        # Request to get the call center enhanced reporting system settings.
        static public function SystemCallCenterEnhancedReportingGetRequest() {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => null
            ];
        }

        # Modify the system settings for call center enhanced reporting.
        static public function SystemCallCenterEnhancedReportingModifyRequest($archiveReports=null,$reportApplicationURL=null,$repositoryApplicationURL=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'archiveReports' => $archiveReports,
                    'reportApplicationURL' => $reportApplicationURL,
                    'repositoryApplicationURL' => $repositoryApplicationURL
                ]
            ];
        }

        # Request to add a system level call center report template.
        static public function SystemCallCenterEnhancedReportingReportTemplateAddRequest($name=null,$description=null,$dataTemplate=null,$filterNumber=null,$xsltTemplate=null,$scope=null,$isEnabled=null,$isRealtimeReport=null,$callCompletionThresholdParam=null,$shortDurationThresholdParam=null,$serviceLevelThresholdParam=null,$serviceLevelInclusionsParam=null,$serviceLevelObjectiveThresholdParam=null,$abandonedCallThresholdParam=null,$serviceLevelThresholdParamNumber=null,$abandonedCallThresholdParamNumber=null,$filterValue=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'name' => $name,
                    'description' => $description,
                    'dataTemplate' => $dataTemplate,
                    'filterNumber' => $filterNumber,
                    'xsltTemplate' => $xsltTemplate,
                    'scope' => $scope,
                    'isEnabled' => $isEnabled,
                    'isRealtimeReport' => $isRealtimeReport,
                    'callCompletionThresholdParam' => $callCompletionThresholdParam,
                    'shortDurationThresholdParam' => $shortDurationThresholdParam,
                    'serviceLevelThresholdParam' => $serviceLevelThresholdParam,
                    'serviceLevelInclusionsParam' => $serviceLevelInclusionsParam,
                    'serviceLevelObjectiveThresholdParam' => $serviceLevelObjectiveThresholdParam,
                    'abandonedCallThresholdParam' => $abandonedCallThresholdParam,
                    'serviceLevelThresholdParamNumber' => $serviceLevelThresholdParamNumber,
                    'abandonedCallThresholdParamNumber' => $abandonedCallThresholdParamNumber,
                    'filterValue' => $filterValue
                ]
            ];
        }

        # Request to delete a system level call center report template.
        static public function SystemCallCenterEnhancedReportingReportTemplateDeleteRequest($name=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'name' => $name
                ]
            ];
        }

        # Request to get system level call center report template list.
        static public function SystemCallCenterEnhancedReportingReportTemplateGetListRequest() {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => null
            ];
        }

        # Request to get a system level call center report template.
        static public function SystemCallCenterEnhancedReportingReportTemplateGetRequest($name=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'name' => $name
                ]
            ];
        }

        # Request to modify a system level call center report template.
        static public function SystemCallCenterEnhancedReportingReportTemplateModifyRequest($name=null,$newName=null,$description=null,$xsltTemplate=null,$scope=null,$isEnabled=null,$isRealtimeReport=null,$filterNumber=null,$filterValue=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'name' => $name,
                    'newName' => $newName,
                    'description' => $description,
                    'xsltTemplate' => $xsltTemplate,
                    'scope' => $scope,
                    'isEnabled' => $isEnabled,
                    'isRealtimeReport' => $isRealtimeReport,
                    'filterNumber' => $filterNumber,
                    'filterValue' => $filterValue
                ]
            ];
        }

        # Request to get the list of all active call center reporting scheduled reports in the system.
        static public function SystemCallCenterEnhancedReportingScheduledReportGetActiveListRequest($responseSizeLimit=null,$searchCriteriaCallCenterScheduledReportName=null,$searchCriteriaGroupId=null,$searchCriteriaExactCallCenterScheduledReportServiceProvider=null,$searchCriteriaExactCallCenterScheduledReportCreatedBySupervisor=null,$searchCriteriaCallCenterReportTemplateName=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'responseSizeLimit' => $responseSizeLimit,
                    'searchCriteriaCallCenterScheduledReportName' => $searchCriteriaCallCenterScheduledReportName,
                    'searchCriteriaGroupId' => $searchCriteriaGroupId,
                    'searchCriteriaExactCallCenterScheduledReportServiceProvider' => $searchCriteriaExactCallCenterScheduledReportServiceProvider,
                    'searchCriteriaExactCallCenterScheduledReportCreatedBySupervisor' => $searchCriteriaExactCallCenterScheduledReportCreatedBySupervisor,
                    'searchCriteriaCallCenterReportTemplateName' => $searchCriteriaCallCenterReportTemplateName
                ]
            ];
        }

        # Request to get the list of all completed call center reporting scheduled reports in the system.
        static public function SystemCallCenterEnhancedReportingScheduledReportGetCompletedListRequest($responseSizeLimit=null,$searchCriteriaCallCenterScheduledReportName=null,$searchCriteriaGroupId=null,$searchCriteriaExactCallCenterScheduledReportServiceProvider=null,$searchCriteriaExactCallCenterScheduledReportCreatedBySupervisor=null,$searchCriteriaCallCenterReportTemplateName=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'responseSizeLimit' => $responseSizeLimit,
                    'searchCriteriaCallCenterScheduledReportName' => $searchCriteriaCallCenterScheduledReportName,
                    'searchCriteriaGroupId' => $searchCriteriaGroupId,
                    'searchCriteriaExactCallCenterScheduledReportServiceProvider' => $searchCriteriaExactCallCenterScheduledReportServiceProvider,
                    'searchCriteriaExactCallCenterScheduledReportCreatedBySupervisor' => $searchCriteriaExactCallCenterScheduledReportCreatedBySupervisor,
                    'searchCriteriaCallCenterReportTemplateName' => $searchCriteriaCallCenterReportTemplateName
                ]
            ];
        }

        # Request to get the list of all call center reporting scheduled reports in the system.
        static public function SystemCallCenterEnhancedReportingScheduledReportGetListRequest($responseSizeLimit=null,$searchCriteriaCallCenterScheduledReportName=null,$searchCriteriaGroupId=null,$searchCriteriaExactCallCenterScheduledReportServiceProvider=null,$searchCriteriaExactCallCenterScheduledReportCreatedBySupervisor=null,$searchCriteriaCallCenterReportTemplateName=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'responseSizeLimit' => $responseSizeLimit,
                    'searchCriteriaCallCenterScheduledReportName' => $searchCriteriaCallCenterScheduledReportName,
                    'searchCriteriaGroupId' => $searchCriteriaGroupId,
                    'searchCriteriaExactCallCenterScheduledReportServiceProvider' => $searchCriteriaExactCallCenterScheduledReportServiceProvider,
                    'searchCriteriaExactCallCenterScheduledReportCreatedBySupervisor' => $searchCriteriaExactCallCenterScheduledReportCreatedBySupervisor,
                    'searchCriteriaCallCenterReportTemplateName' => $searchCriteriaCallCenterReportTemplateName
                ]
            ];
        }

        # Request to get all the call center reporting scheduled report in the system that uses a 
        static public function SystemCallCenterEnhancedReportingScheduledReportGetReportTemplateUsageListRequest($name=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'name' => $name
                ]
            ];
        }

        # Request to get the system settings for the call center enhanced reporting scheduling tasks.
        static public function SystemCallCenterEnhancedReportingScheduledTaskParametersGetRequest() {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => null
            ];
        }

        # Modify the system settings for the call center enhanced reporting scheduling tasks.
        static public function SystemCallCenterEnhancedReportingScheduledTaskParametersModifyRequest($scheduledReportSearchIntervalMinutes=null,$maximumScheduledReportsPerInterval=null,$deleteScheduledReportDaysAfterCompletion=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'scheduledReportSearchIntervalMinutes' => $scheduledReportSearchIntervalMinutes,
                    'maximumScheduledReportsPerInterval' => $maximumScheduledReportsPerInterval,
                    'deleteScheduledReportDaysAfterCompletion' => $deleteScheduledReportDaysAfterCompletion
                ]
            ];
        }

        # Request the system level data associated with Call Center.
        static public function SystemCallCenterGetRequest17() {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => null
            ];
        }

        # Modify the system level data associated with Call Center.
        static public function SystemCallCenterModifyRequest($defaultFromAddress=null,$statisticsSamplingPeriodMinutes=null,$defaultEnableGuardTimer=null,$defaultGuardTimerSeconds=null,$forceAgentUnavailableOnDNDActivation=null,$forceAgentUnavailableOnPersonalCalls=null,$forceAgentUnavailableOnBouncedCallLimit=null,$numberConsecutiveBouncedCallsToForceAgentUnavailable=null,$defaultPlayRingWhenOfferCall=null,$uniformCallDistributionPolicyScope=null,$callHandlingSamplingPeriodMinutes=null,$callHandlingMinimumSamplingSize=null,$playToneToAgentForEmergencyCall=null,$emergencyCallCLIDPrefix=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'defaultFromAddress' => $defaultFromAddress,
                    'statisticsSamplingPeriodMinutes' => $statisticsSamplingPeriodMinutes,
                    'defaultEnableGuardTimer' => $defaultEnableGuardTimer,
                    'defaultGuardTimerSeconds' => $defaultGuardTimerSeconds,
                    'forceAgentUnavailableOnDNDActivation' => $forceAgentUnavailableOnDNDActivation,
                    'forceAgentUnavailableOnPersonalCalls' => $forceAgentUnavailableOnPersonalCalls,
                    'forceAgentUnavailableOnBouncedCallLimit' => $forceAgentUnavailableOnBouncedCallLimit,
                    'numberConsecutiveBouncedCallsToForceAgentUnavailable' => $numberConsecutiveBouncedCallsToForceAgentUnavailable,
                    'defaultPlayRingWhenOfferCall' => $defaultPlayRingWhenOfferCall,
                    'uniformCallDistributionPolicyScope' => $uniformCallDistributionPolicyScope,
                    'callHandlingSamplingPeriodMinutes' => $callHandlingSamplingPeriodMinutes,
                    'callHandlingMinimumSamplingSize' => $callHandlingMinimumSamplingSize,
                    'playToneToAgentForEmergencyCall' => $playToneToAgentForEmergencyCall,
                    'emergencyCallCLIDPrefix' => $emergencyCallCLIDPrefix
                ]
            ];
        }

        # Add a call center reporting server.
        static public function SystemCallCenterReportingServerAddRequest($name=null,$url=null,$netAddress=null,$description=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'name' => $name,
                    'url' => $url,
                    'netAddress' => $netAddress,
                    'description' => $description
                ]
            ];
        }

        # Delete a Call Center Reporting Server.
        static public function SystemCallCenterReportingServerDeleteRequest($name=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'name' => $name
                ]
            ];
        }

        # Get a list of Call Centers that are using the specified reporting
        static public function SystemCallCenterReportingServerGetCallCenterListRequest($reportingServerName=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'reportingServerName' => $reportingServerName
                ]
            ];
        }

        # Request to get a list of Call Center Reporting Server.
        static public function SystemCallCenterReportingServerGetListRequest() {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => null
            ];
        }

        # Modify a call center reporting server.
        static public function SystemCallCenterReportingServerModifyRequest($name=null,$newName=null,$url=null,$netAddress=null,$description=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'name' => $name,
                    'newName' => $newName,
                    'url' => $url,
                    'netAddress' => $netAddress,
                    'description' => $description
                ]
            ];
        }

        # Assign agent(s) to a call center supervisor.
        static public function UserCallCenterAddSupervisedAgentListRequest($supervisorUserId=null,$serviceUserId=null,$agentUserId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'supervisorUserId' => $supervisorUserId,
                    'serviceUserId' => $serviceUserId,
                    'agentUserId' => $agentUserId
                ]
            ];
        }

        # This request signs-out a call center agent. Administrator, supervisor and agent itself can sign-out an agent. 
        static public function UserCallCenterAgentSignOutRequest($agentUserId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'agentUserId' => $agentUserId
                ]
            ];
        }

        # Request to get the detail information of a Call Center Agent. Administrator, supervisor and agent
        static public function UserCallCenterAgentDetailsGetRequest($agentUserId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'agentUserId' => $agentUserId
                ]
            ];
        }

        # Get the list of available Call Center Call Disposition Codes to be used by a client.
        static public function UserCallCenterCallDispositionCodeGetAvailableListRequest($serviceUserId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceUserId' => $serviceUserId
                ]
            ];
        }

        # Delete agent(s) from a call center supervisor.
        static public function UserCallCenterDeleteSupervisedAgentListRequest($supervisorUserId=null,$serviceUserId=null,$agentUserId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'supervisorUserId' => $supervisorUserId,
                    'serviceUserId' => $serviceUserId,
                    'agentUserId' => $agentUserId
                ]
            ];
        }

        # Request to get the input parameter info for a call center report template.
        static public function UserCallCenterEnhancedReportingReportTemplateParamInfoGetRequest($reportTemplate=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'reportTemplate' => $reportTemplate
                ]
            ];
        }

        # Request to delete a call center reporting scheduled report created by a supervisor.
        static public function UserCallCenterEnhancedReportingScheduledReportDeleteRequest($supervisorUserId=null,$name=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'supervisorUserId' => $supervisorUserId,
                    'name' => $name
                ]
            ];
        }

        # Request to get a call center reporting scheduled report created by supervisor.
        static public function UserCallCenterEnhancedReportingScheduledReportGetRequest($supervisorUserId=null,$name=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'supervisorUserId' => $supervisorUserId,
                    'name' => $name
                ]
            ];
        }

        # Request to modify a call center reporting scheduled report created by a supervisor.
        static public function UserCallCenterEnhancedReportingScheduledReportModifyRequest($supervisorUserId=null,$name=null,$newName=null,$description=null,$schedule=null,$samplingPeriod=null,$startDayOfWeek=null,$reportTimeZone=null,$reportDateFormat=null,$reportTimeFormat=null,$reportInterval=null,$reportFormat=null,$agent=null,$callCompletionThresholdSeconds=null,$shortDurationThresholdSeconds=null,$serviceLevelThresholdSeconds=null,$serviceLevelInclusions=null,$serviceLevelObjectivePercentage=null,$abandonedCallThresholdSeconds=null,$emailAddress=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'supervisorUserId' => $supervisorUserId,
                    'name' => $name,
                    'newName' => $newName,
                    'description' => $description,
                    'schedule' => $schedule,
                    'samplingPeriod' => $samplingPeriod,
                    'startDayOfWeek' => $startDayOfWeek,
                    'reportTimeZone' => $reportTimeZone,
                    'reportDateFormat' => $reportDateFormat,
                    'reportTimeFormat' => $reportTimeFormat,
                    'reportInterval' => $reportInterval,
                    'reportFormat' => $reportFormat,
                    'agent' => $agent,
                    'callCompletionThresholdSeconds' => $callCompletionThresholdSeconds,
                    'shortDurationThresholdSeconds' => $shortDurationThresholdSeconds,
                    'serviceLevelThresholdSeconds' => $serviceLevelThresholdSeconds,
                    'serviceLevelInclusions' => $serviceLevelInclusions,
                    'serviceLevelObjectivePercentage' => $serviceLevelObjectivePercentage,
                    'abandonedCallThresholdSeconds' => $abandonedCallThresholdSeconds,
                    'emailAddress' => $emailAddress
                ]
            ];
        }

        # Get a list of supervisors for an agent on a given call center.
        static public function UserCallCenterGetAgentSupervisorListRequest($agentUserId=null,$serviceUserId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'agentUserId' => $agentUserId,
                    'serviceUserId' => $serviceUserId
                ]
            ];
        }

        # This request gets a list of all call centers which the user can be assigned to as an agent. 
        static public function UserCallCenterGetAvailableCallCenterListRequest($userId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId
                ]
            ];
        }

        # Request a list of available DNIS for agent to select.
        static public function UserCallCenterGetAvailableDNISListRequest($agentUserId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'agentUserId' => $agentUserId
                ]
            ];
        }

        # Get the user's call center settings and the list of call centers the specified user belongs to.
        static public function UserCallCenterGetRequest17($userId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId
                ]
            ];
        }

        # Get a list of agents supervised by a supervisor on a given call
        static public function UserCallCenterGetSupervisedAgentListRequest($supervisorUserId=null,$serviceUserId=null,$responseSizeLimit=null,$searchCriteriaModeOr=null,$searchCriteriaUserLastName=null,$searchCriteriaUserFirstName=null,$searchCriteriaDn=null,$searchCriteriaExtension=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'supervisorUserId' => $supervisorUserId,
                    'serviceUserId' => $serviceUserId,
                    'responseSizeLimit' => $responseSizeLimit,
                    'searchCriteriaModeOr' => $searchCriteriaModeOr,
                    'searchCriteriaUserLastName' => $searchCriteriaUserLastName,
                    'searchCriteriaUserFirstName' => $searchCriteriaUserFirstName,
                    'searchCriteriaDn' => $searchCriteriaDn,
                    'searchCriteriaExtension' => $searchCriteriaExtension
                ]
            ];
        }

        # Get a list of call centers the user is assigned to as a supervisor.
        static public function UserCallCenterGetSupervisorCallCenterListRequest($supervisorUserId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'supervisorUserId' => $supervisorUserId
                ]
            ];
        }

        # Request to modify the call center list for an agent.
        static public function UserCallCenterModifyCallCenterListRequest($agentUserId=null,$serviceUserIdList=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'agentUserId' => $agentUserId,
                    'serviceUserIdList' => $serviceUserIdList
                ]
            ];
        }

        # Modifies the agents call center settings and the availability for an agent in one or more Call Centers.
        static public function UserCallCenterModifyRequest($userId=null,$agentACDState=null,$agentUnavailableCode=null,$useDefaultGuardTimer=null,$enableGuardTimer=null,$guardTimerSeconds=null,$useSystemDefaultUnavailableSettings=null,$forceAgentUnavailableOnDNDActivation=null,$forceUnavailableOnPersonalCalls=null,$forceAgentUnavailableOnBouncedCallLimit=null,$numberConsecutiveBouncedCallsToForceAgentUnavailable=null,$makeOutgoingCallsAsCallCenter=null,$outgoingCallDNIS=null,$callCenterAvailability=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId,
                    'agentACDState' => $agentACDState,
                    'agentUnavailableCode' => $agentUnavailableCode,
                    'useDefaultGuardTimer' => $useDefaultGuardTimer,
                    'enableGuardTimer' => $enableGuardTimer,
                    'guardTimerSeconds' => $guardTimerSeconds,
                    'useSystemDefaultUnavailableSettings' => $useSystemDefaultUnavailableSettings,
                    'forceAgentUnavailableOnDNDActivation' => $forceAgentUnavailableOnDNDActivation,
                    'forceUnavailableOnPersonalCalls' => $forceUnavailableOnPersonalCalls,
                    'forceAgentUnavailableOnBouncedCallLimit' => $forceAgentUnavailableOnBouncedCallLimit,
                    'numberConsecutiveBouncedCallsToForceAgentUnavailable' => $numberConsecutiveBouncedCallsToForceAgentUnavailable,
                    'makeOutgoingCallsAsCallCenter' => $makeOutgoingCallsAsCallCenter,
                    'outgoingCallDNIS' => $outgoingCallDNIS,
                    'callCenterAvailability' => $callCenterAvailability
                ]
            ];
        }

        # Modifies a list of users to be supervised by a supervisor on a call center.
        static public function UserCallCenterModifySupervisedAgentListRequest($supervisorUserId=null,$serviceUserId=null,$agentUserIdList=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'supervisorUserId' => $supervisorUserId,
                    'serviceUserId' => $serviceUserId,
                    'agentUserIdList' => $agentUserIdList
                ]
            ];
        }

}