<?php
class OCISchemaServiceRoutePoint {
        # Add a Route Point DNIS.        
        static public function GroupRoutePointAddDNISRequest($dnisKey=null,$dnisPhoneNumber=null,$extension=null,$useCustomCLIDSettings=null,$callingLineIdPhoneNumber=null,$callingLineIdLastName=null,$callingLineIdFirstName=null,$useCustomDnisAnnouncementSettings=null,$allowOutgoingACDCall=null) {
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
                    'allowOutgoingACDCall' => $allowOutgoingACDCall
                ]
            ];
        }

        # Add a Route Point instance to a group.
        static public function GroupRoutePointAddInstanceRequest($serviceProviderId=null,$groupId=null,$serviceUserId=null,$serviceInstanceProfile=null,$networkClassOfService=null,$externalPreferredAudioCodec=null,$internalPreferredAudioCodec=null,$queueLength=null,$noAnswerTimeoutRings=null,$enableVideo=null,$playRingingWhenOfferingCall=null,$overrideAgentWrapUpTime=null,$wrapUpSeconds=null,$enableAutomaticStateChangeForAgents=null,$agentStateAfterCall=null,$agentUnavailableCode=null,$forceDeliveryOfCalls=null,$forceDeliveryWaitTimeSeconds=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId,
                    'serviceUserId' => $serviceUserId,
                    'serviceInstanceProfile' => $serviceInstanceProfile,
                    'networkClassOfService' => $networkClassOfService,
                    'externalPreferredAudioCodec' => $externalPreferredAudioCodec,
                    'internalPreferredAudioCodec' => $internalPreferredAudioCodec,
                    'queueLength' => $queueLength,
                    'noAnswerTimeoutRings' => $noAnswerTimeoutRings,
                    'enableVideo' => $enableVideo,
                    'playRingingWhenOfferingCall' => $playRingingWhenOfferingCall,
                    'overrideAgentWrapUpTime' => $overrideAgentWrapUpTime,
                    'wrapUpSeconds' => $wrapUpSeconds,
                    'enableAutomaticStateChangeForAgents' => $enableAutomaticStateChangeForAgents,
                    'agentStateAfterCall' => $agentStateAfterCall,
                    'agentUnavailableCode' => $agentUnavailableCode,
                    'forceDeliveryOfCalls' => $forceDeliveryOfCalls,
                    'forceDeliveryWaitTimeSeconds' => $forceDeliveryWaitTimeSeconds
                ]
            ];
        }

        # Get a route point's bounced call settings.
        static public function GroupRoutePointBouncedCallGetRequest($serviceUserId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceUserId' => $serviceUserId
                ]
            ];
        }

        # Modify a route point's bounced call settings.
        static public function GroupRoutePointBouncedCallModifyRequest($serviceUserId=null,$isActive=null,$numberOfRingsBeforeBouncingCall=null,$enableTransfer=null,$transferPhoneNumber=null,$bounceCallWhenAgentUnavailable=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceUserId' => $serviceUserId,
                    'isActive' => $isActive,
                    'numberOfRingsBeforeBouncingCall' => $numberOfRingsBeforeBouncingCall,
                    'enableTransfer' => $enableTransfer,
                    'transferPhoneNumber' => $transferPhoneNumber,
                    'bounceCallWhenAgentUnavailable' => $bounceCallWhenAgentUnavailable
                ]
            ];
        }

        # Delete a route point's DNIS.
        static public function GroupRoutePointDeleteDNISRequest($dnisKey=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'dnisKey' => $dnisKey
                ]
            ];
        }

        # Delete a Route Point instance from a group.
        static public function GroupRoutePointDeleteInstanceRequest($serviceUserId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceUserId' => $serviceUserId
                ]
            ];
        }

        # Get the distinctive ringing configuration values for route point.
        static public function GroupRoutePointDistinctiveRingingGetRequest($serviceUserId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceUserId' => $serviceUserId
                ]
            ];
        }

        # Modify the distinctive ringing configuration values for route point.
        static public function GroupRoutePointDistinctiveRingingModifyRequest($serviceUserId=null,$enableDistinctiveRinging=null,$distinctiveRingingRingPattern=null,$distinctiveRingingForceDeliveryRingPattern=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceUserId' => $serviceUserId,
                    'enableDistinctiveRinging' => $enableDistinctiveRinging,
                    'distinctiveRingingRingPattern' => $distinctiveRingingRingPattern,
                    'distinctiveRingingForceDeliveryRingPattern' => $distinctiveRingingForceDeliveryRingPattern
                ]
            ];
        }

        # Get a route point's announcement settings.
        static public function GroupRoutePointGetAnnouncementRequest($serviceUserId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceUserId' => $serviceUserId
                ]
            ];
        }

        # Get a list of agent who selected the DNIS as the outgoing call.
        static public function GroupRoutePointGetDNISAgentListRequest($dnisKey=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'dnisKey' => $dnisKey
                ]
            ];
        }

        # Get a route point's DNIS Announcements
        static public function GroupRoutePointGetDNISAnnouncementRequest($dnisKey=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'dnisKey' => $dnisKey
                ]
            ];
        }

        # Get a list of DNIS that are configured for a Route Point.
        static public function GroupRoutePointGetDNISListRequest($serviceUserId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceUserId' => $serviceUserId
                ]
            ];
        }

        # Get a route point's DNIS.
        static public function GroupRoutePointGetDNISRequest($dnisKey=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'dnisKey' => $dnisKey
                ]
            ];
        }

        # Get the route point failover policy. 
        static public function GroupRoutePointGetFailoverPolicyRequest($serviceUserId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceUserId' => $serviceUserId
                ]
            ];
        }

        # Get a list of Route Point instances within a group. 
        static public function GroupRoutePointGetInstanceListRequest($serviceProviderId=null,$groupId=null,$groupDepartmentName=null,$responseSizeLimit=null,$searchCriteriaRoutePointName=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId,
                    'groupDepartmentName' => $groupDepartmentName,
                    'responseSizeLimit' => $responseSizeLimit,
                    'searchCriteriaRoutePointName' => $searchCriteriaRoutePointName
                ]
            ];
        }

        # Request to get all the information of a Route Point instance.
        static public function GroupRoutePointGetInstanceRequest($serviceUserId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceUserId' => $serviceUserId
                ]
            ];
        }

        # Get a route point's forced forwarding settings.
        static public function GroupRoutePointForcedForwardingGetRequest($serviceUserId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceUserId' => $serviceUserId
                ]
            ];
        }

        # Modify a route point's forced forwarding settings.
        static public function GroupRoutePointForcedForwardingModifyRequest($serviceUserId=null,$isActive=null,$forwardToPhoneNumber=null,$playAnnouncementBeforeForwarding=null,$audioMessageSelection=null,$audioUrlList=null,$audioFileList=null,$videoMessageSelection=null,$videoUrlList=null,$videoFileList=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceUserId' => $serviceUserId,
                    'isActive' => $isActive,
                    'forwardToPhoneNumber' => $forwardToPhoneNumber,
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

        # Get a route point's holiday service settings.
        static public function GroupRoutePointHolidayServiceGetRequest17sp1($serviceUserId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceUserId' => $serviceUserId
                ]
            ];
        }

        # Modify a route point's holiday service settings.
        static public function GroupRoutePointHolidayServiceModifyRequest17sp1($serviceUserId=null,$action=null,$holidaySchedule=null,$transferPhoneNumber=null,$playAnnouncementBeforeAction=null,$audioMessageSelection=null,$audioUrlList=null,$audioFileList=null,$videoMessageSelection=null,$videoUrlList=null,$videoFileList=null) {
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

        # Request to set the active status of Route Point instances.
        static public function GroupRoutePointModifyActiveInstanceListRequest($serviceActivation=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceActivation' => $serviceActivation
                ]
            ];
        }

        # Modify a route point's announcement settings.
        static public function GroupRoutePointModifyAnnouncementRequest($serviceUserId=null,$mediaOnHoldSource=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceUserId' => $serviceUserId,
                    'mediaOnHoldSource' => $mediaOnHoldSource
                ]
            ];
        }

        # Modify a route point DNIS announcement settings.
        static public function GroupRoutePointModifyDNISAnnouncementRequest($dnisKey=null,$mediaOnHoldSource=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'dnisKey' => $dnisKey,
                    'mediaOnHoldSource' => $mediaOnHoldSource
                ]
            ];
        }

        # Modify the setting that are configured for all the DNIS in a Route Point.
        static public function GroupRoutePointModifyDNISParametersRequest($serviceUserId=null,$displayDNISNumber=null,$displayDNISName=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceUserId' => $serviceUserId,
                    'displayDNISNumber' => $displayDNISNumber,
                    'displayDNISName' => $displayDNISName
                ]
            ];
        }

        # Modify a route point's DNIS settings.
        static public function GroupRoutePointModifyDNISRequest($dnisKey=null,$newDNISName=null,$dnisPhoneNumber=null,$extension=null,$useCustomCLIDSettings=null,$callingLineIdPhoneNumber=null,$callingLineIdLastName=null,$callingLineIdFirstName=null,$useCustomDnisAnnouncementSettings=null,$allowOutgoingACDCall=null) {
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
                    'allowOutgoingACDCall' => $allowOutgoingACDCall
                ]
            ];
        }

        # Initiate manual failover for the Route Point.
        static public function GroupRoutePointManualFailoverRequest($serviceUserId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceUserId' => $serviceUserId
                ]
            ];
        }

        # Modify the route point failover policy. 
        static public function GroupRoutePointModifyFailoverPolicyRequest($serviceUserId=null,$enableFailoverSupport=null,$externalSystem=null,$failoverPhoneNumber=null,$perCallEnableFailoverSupport=null,$perCallCallFailureTimeoutSeconds=null,$perCallOutboundCallFailureTimeoutSeconds=null,$perCallFailoverPhoneNumber=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceUserId' => $serviceUserId,
                    'enableFailoverSupport' => $enableFailoverSupport,
                    'externalSystem' => $externalSystem,
                    'failoverPhoneNumber' => $failoverPhoneNumber,
                    'perCallEnableFailoverSupport' => $perCallEnableFailoverSupport,
                    'perCallCallFailureTimeoutSeconds' => $perCallCallFailureTimeoutSeconds,
                    'perCallOutboundCallFailureTimeoutSeconds' => $perCallOutboundCallFailureTimeoutSeconds,
                    'perCallFailoverPhoneNumber' => $perCallFailoverPhoneNumber
                ]
            ];
        }

        # Request to modify a Route Point instance.
        static public function GroupRoutePointModifyInstanceRequest($serviceUserId=null,$serviceInstanceProfile=null,$networkClassOfService=null,$externalPreferredAudioCodec=null,$internalPreferredAudioCodec=null,$queueLength=null,$noAnswerTimeoutRings=null,$enableVideo=null,$playRingingWhenOfferingCall=null,$overrideAgentWrapUpTime=null,$wrapUpSeconds=null,$enableAutomaticStateChangeForAgents=null,$agentStateAfterCall=null,$agentUnavailableCode=null,$forceDeliveryOfCalls=null,$forceDeliveryWaitTimeSeconds=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceUserId' => $serviceUserId,
                    'serviceInstanceProfile' => $serviceInstanceProfile,
                    'networkClassOfService' => $networkClassOfService,
                    'externalPreferredAudioCodec' => $externalPreferredAudioCodec,
                    'internalPreferredAudioCodec' => $internalPreferredAudioCodec,
                    'queueLength' => $queueLength,
                    'noAnswerTimeoutRings' => $noAnswerTimeoutRings,
                    'enableVideo' => $enableVideo,
                    'playRingingWhenOfferingCall' => $playRingingWhenOfferingCall,
                    'overrideAgentWrapUpTime' => $overrideAgentWrapUpTime,
                    'wrapUpSeconds' => $wrapUpSeconds,
                    'enableAutomaticStateChangeForAgents' => $enableAutomaticStateChangeForAgents,
                    'agentStateAfterCall' => $agentStateAfterCall,
                    'agentUnavailableCode' => $agentUnavailableCode,
                    'forceDeliveryOfCalls' => $forceDeliveryOfCalls,
                    'forceDeliveryWaitTimeSeconds' => $forceDeliveryWaitTimeSeconds
                ]
            ];
        }

        # Get a route point's night service settings.
        static public function GroupRoutePointNightServiceGetRequest17sp1($serviceUserId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceUserId' => $serviceUserId
                ]
            ];
        }

        # Modify a route point's night service settings.
        static public function GroupRoutePointNightServiceModifyRequest17sp1($serviceUserId=null,$action=null,$businessHours=null,$forceNightService=null,$transferPhoneNumber=null,$playAnnouncementBeforeAction=null,$audioMessageSelection=null,$audioUrlList=null,$audioFileList=null,$videoMessageSelection=null,$videoUrlList=null,$videoFileList=null,$manualAnnouncementMode=null,$manualAudioMessageSelection=null,$manualAudioUrlList=null,$manualAudioFileList=null,$manualVideoMessageSelection=null,$manualVideoUrlList=null,$manualVideoFileList=null) {
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

        # Get a route point's overflow settings.
        static public function GroupRoutePointOverflowGetRequest($serviceUserId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceUserId' => $serviceUserId
                ]
            ];
        }

        # Modify a route point's overflow settings.
        static public function GroupRoutePointOverflowModifyRequest($serviceUserId=null,$action=null,$transferPhoneNumber=null,$overflowAfterTimeout=null,$timeoutSeconds=null,$playAnnouncementBeforeOverflowProcessing=null,$audioMessageSelection=null,$audioUrlList=null,$audioFileList=null,$videoMessageSelection=null,$videoUrlList=null,$videoFileList=null) {
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

        # Add a Route Point Call Disposition Code.
        static public function GroupRoutePointQueueCallDispositionCodeAddRequest($serviceUserId=null,$code=null,$isActive=null,$description=null) {
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

        # Delete a Route Point Call Disposition Code.
        static public function GroupRoutePointQueueCallDispositionCodeDeleteRequest($serviceUserId=null,$code=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceUserId' => $serviceUserId,
                    'code' => $code
                ]
            ];
        }

        # Get the list of Route Point Level and Organization Level Call Disposition Codes.
        static public function GroupRoutePointQueueCallDispositionCodeGetListRequest($serviceUserId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceUserId' => $serviceUserId
                ]
            ];
        }

        # Get a Route Point Call Disposition Code.
        static public function GroupRoutePointQueueCallDispositionCodeGetRequest($serviceUserId=null,$code=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceUserId' => $serviceUserId,
                    'code' => $code
                ]
            ];
        }

        # Modify a Route Point Call Disposition Code.
        static public function GroupRoutePointQueueCallDispositionCodeModifyRequest($serviceUserId=null,$code=null,$isActive=null,$description=null) {
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

        # Request the queue level data associated with Route Point Call Disposition Code Settings.
        static public function GroupRoutePointQueueCallDispositionCodeSettingsGetRequest($serviceUserId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceUserId' => $serviceUserId
                ]
            ];
        }

        # Modify the queue level data associated with Route Point Agents Unavailable Code Settings.
        static public function GroupRoutePointQueueCallDispositionCodeSettingsModifyRequest($serviceUserId=null,$enableCallDispositionCodes=null,$includeOrganizationCodes=null,$forceUseOfCallDispositionCodes=null,$defaultCallDispositionCode=null,$callDispositionCodeActivation=null) {
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

        # Get the list of available Route Point Call Disposition Codes to be used by a client.
        static public function UserRoutePointCallDispositionCodeGetAvailableListRequest($serviceUserId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceUserId' => $serviceUserId
                ]
            ];
        }

        # Get a list of Route Point supervisors assigned to a user.
        static public function UserRoutePointSupervisorGetListRequest($userId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId
                ]
            ];
        }

        # Request to modify the Route Point supervisor list for a user.
        static public function UserRoutePointSupervisorModifyListRequest($userId=null,$supervisorUserIdList=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId,
                    'supervisorUserIdList' => $supervisorUserIdList
                ]
            ];
        }

}