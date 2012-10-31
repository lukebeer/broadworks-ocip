<?php
class OCISchemaDeprecated16 {
        # Get the address and credentials of the File Repository hosting the requested access device file. Also get the file name and path on the File Repository. The response is either a DeviceManagementFileAuthLocationGetResponse or an ErrorResponse.
        static public function DeviceManagementFileAuthLocationGetRequest($deviceAccessProtocol=null,$deviceAccessMethod=null,$deviceAccessURI=null,$accessDeviceUserName=null,$accessDeviceUserPassword=null,$signedPassword=null,$macAddress=null,$realmName=null,$digestHa1Complement=null,$digestResponse=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'deviceAccessProtocol' => $deviceAccessProtocol,
                    'deviceAccessMethod' => $deviceAccessMethod,
                    'deviceAccessURI' => $deviceAccessURI,
                    'accessDeviceUserName' => $accessDeviceUserName,
                    'accessDeviceUserPassword' => $accessDeviceUserPassword,
                    'signedPassword' => $signedPassword,
                    'macAddress' => $macAddress,
                    'realmName' => $realmName,
                    'digestHa1Complement' => $digestHa1Complement,
                    'digestResponse' => $digestResponse
                ]
            ];
        }

        # Request a table containing the phone directory for an enterprise.
        static public function EnterprisePhoneDirectoryGetListRequest($enterpriseId=null,$isExtendedInfoRequested=null,$responseSizeLimit=null,$searchCriteriaUserLastName=null,$searchCriteriaUserFirstName=null,$searchCriteriaDn=null,$searchCriteriaGroupLocationCode=null,$searchCriteriaExtension=null,$searchCriteriaMobilePhoneNumber=null,$searchCriteriaEmailAddress=null,$searchCriteriaYahooId=null,$searchCriteriaExactUserGroup=null,$searchCriteriaExactUserDepartment=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'enterpriseId' => $enterpriseId,
                    'isExtendedInfoRequested' => $isExtendedInfoRequested,
                    'responseSizeLimit' => $responseSizeLimit,
                    'searchCriteriaUserLastName' => $searchCriteriaUserLastName,
                    'searchCriteriaUserFirstName' => $searchCriteriaUserFirstName,
                    'searchCriteriaDn' => $searchCriteriaDn,
                    'searchCriteriaGroupLocationCode' => $searchCriteriaGroupLocationCode,
                    'searchCriteriaExtension' => $searchCriteriaExtension,
                    'searchCriteriaMobilePhoneNumber' => $searchCriteriaMobilePhoneNumber,
                    'searchCriteriaEmailAddress' => $searchCriteriaEmailAddress,
                    'searchCriteriaYahooId' => $searchCriteriaYahooId,
                    'searchCriteriaExactUserGroup' => $searchCriteriaExactUserGroup,
                    'searchCriteriaExactUserDepartment' => $searchCriteriaExactUserDepartment
                ]
            ];
        }

        # Requests the Group administrator's policy settings.
        static public function GroupAdminGetPolicyRequest14sp1($userId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId
                ]
            ];
        }

        # Add a Call Center instance to a group.
        static public function GroupCallCenterAddInstanceRequest16($serviceProviderId=null,$groupId=null,$serviceUserId=null,$serviceInstanceProfile=null,$type=null,$policy=null,$enableVideo=null,$queueLength=null,$reportingServerName=null,$allowCallerToDialEscapeDigit=null,$escapeDigit=null,$resetCallStatisticsUponEntryInQueue=null,$allowAgentLogoff=null,$allowCallWaitingForAgents=null,$allowCallsToAgentsInWrapUp=null,$overrideAgentWrapUpTime=null,$wrapUpSeconds=null,$forceDeliveryOfCalls=null,$forceDeliveryWaitTimeSeconds=null,$externalPreferredAudioCodec=null,$internalPreferredAudioCodec=null,$playRingingWhenOfferingCall=null) {
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
                    'externalPreferredAudioCodec' => $externalPreferredAudioCodec,
                    'internalPreferredAudioCodec' => $internalPreferredAudioCodec,
                    'playRingingWhenOfferingCall' => $playRingingWhenOfferingCall
                ]
            ];
        }

        # Get a call center's bounced call settings.
        static public function GroupCallCenterBouncedCallGetRequest($serviceUserId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceUserId' => $serviceUserId
                ]
            ];
        }

        # Get a call center's comfort message bypass settings.
        static public function GroupCallCenterComfortMessageBypassGetRequest($serviceUserId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceUserId' => $serviceUserId
                ]
            ];
        }

        # Modify a call center's comfort message bypass settings.
        static public function GroupCallCenterComfortMessageBypassModifyRequest($serviceUserId=null,$isActive=null,$callWaitingAgeThresholdSeconds=null,$playAnnouncementAfterRinging=null,$ringTimeBeforePlayingAnnouncementSeconds=null,$audioMessageSelection=null,$audioFile=null,$videoMessageSelection=null,$videoFile=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceUserId' => $serviceUserId,
                    'isActive' => $isActive,
                    'callWaitingAgeThresholdSeconds' => $callWaitingAgeThresholdSeconds,
                    'playAnnouncementAfterRinging' => $playAnnouncementAfterRinging,
                    'ringTimeBeforePlayingAnnouncementSeconds' => $ringTimeBeforePlayingAnnouncementSeconds,
                    'audioMessageSelection' => $audioMessageSelection,
                    'audioFile' => $audioFile,
                    'videoMessageSelection' => $videoMessageSelection,
                    'videoFile' => $videoFile
                ]
            ];
        }

        # Get a call center's forced forwarding settings.
        static public function GroupCallCenterForcedForwardingGetRequest($serviceUserId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceUserId' => $serviceUserId
                ]
            ];
        }

        # Modify a call center's forced forwarding settings.
        static public function GroupCallCenterForcedForwardingModifyRequest($serviceUserId=null,$isActive=null,$forwardToPhoneNumber=null,$allowEnableViaFAC=null,$playAnnouncementBeforeForwarding=null,$audioMessageSelection=null,$audioFile=null,$videoMessageSelection=null,$videoFile=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceUserId' => $serviceUserId,
                    'isActive' => $isActive,
                    'forwardToPhoneNumber' => $forwardToPhoneNumber,
                    'allowEnableViaFAC' => $allowEnableViaFAC,
                    'playAnnouncementBeforeForwarding' => $playAnnouncementBeforeForwarding,
                    'audioMessageSelection' => $audioMessageSelection,
                    'audioFile' => $audioFile,
                    'videoMessageSelection' => $videoMessageSelection,
                    'videoFile' => $videoFile
                ]
            ];
        }

        # Get a call center's announcement settings.
        static public function GroupCallCenterGetAnnouncementRequest16($serviceUserId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceUserId' => $serviceUserId
                ]
            ];
        }

        # Get a call center's holiday service settings.
        static public function GroupCallCenterHolidayServiceGetRequest($serviceUserId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceUserId' => $serviceUserId
                ]
            ];
        }

        # Modify a call center's holiday service settings.
        static public function GroupCallCenterHolidayServiceModifyRequest($serviceUserId=null,$action=null,$holidaySchedule=null,$transferPhoneNumber=null,$playAnnouncementBeforeAction=null,$audioMessageSelection=null,$audioFile=null,$videoMessageSelection=null,$videoFile=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceUserId' => $serviceUserId,
                    'action' => $action,
                    'holidaySchedule' => $holidaySchedule,
                    'transferPhoneNumber' => $transferPhoneNumber,
                    'playAnnouncementBeforeAction' => $playAnnouncementBeforeAction,
                    'audioMessageSelection' => $audioMessageSelection,
                    'audioFile' => $audioFile,
                    'videoMessageSelection' => $videoMessageSelection,
                    'videoFile' => $videoFile
                ]
            ];
        }

        # Modify a call center's announcement settings.
        static public function GroupCallCenterModifyAnnouncementRequest16($serviceUserId=null,$playEntranceMessage=null,$mandatoryEntranceMessage=null,$entranceAudioMessageSelection=null,$entranceMessageAudioFile=null,$entranceVideoMessageSelection=null,$entranceMessageVideoFile=null,$playPeriodicComfortMessage=null,$timeBetweenComfortMessagesSeconds=null,$periodicComfortAudioMessageSelection=null,$periodicComfortMessageAudioFile=null,$periodicComfortVideoMessageSelection=null,$periodicComfortMessageVideoFile=null,$enableMediaOnHoldForQueuedCalls=null,$mediaOnHoldSource=null,$mediaOnHoldUseAlternateSourceForInternalCalls=null,$mediaOnHoldInternalSource=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceUserId' => $serviceUserId,
                    'playEntranceMessage' => $playEntranceMessage,
                    'mandatoryEntranceMessage' => $mandatoryEntranceMessage,
                    'entranceAudioMessageSelection' => $entranceAudioMessageSelection,
                    'entranceMessageAudioFile' => $entranceMessageAudioFile,
                    'entranceVideoMessageSelection' => $entranceVideoMessageSelection,
                    'entranceMessageVideoFile' => $entranceMessageVideoFile,
                    'playPeriodicComfortMessage' => $playPeriodicComfortMessage,
                    'timeBetweenComfortMessagesSeconds' => $timeBetweenComfortMessagesSeconds,
                    'periodicComfortAudioMessageSelection' => $periodicComfortAudioMessageSelection,
                    'periodicComfortMessageAudioFile' => $periodicComfortMessageAudioFile,
                    'periodicComfortVideoMessageSelection' => $periodicComfortVideoMessageSelection,
                    'periodicComfortMessageVideoFile' => $periodicComfortMessageVideoFile,
                    'enableMediaOnHoldForQueuedCalls' => $enableMediaOnHoldForQueuedCalls,
                    'mediaOnHoldSource' => $mediaOnHoldSource,
                    'mediaOnHoldUseAlternateSourceForInternalCalls' => $mediaOnHoldUseAlternateSourceForInternalCalls,
                    'mediaOnHoldInternalSource' => $mediaOnHoldInternalSource
                ]
            ];
        }

        # Get a call center's night service settings.
        static public function GroupCallCenterNightServiceGetRequest($serviceUserId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceUserId' => $serviceUserId
                ]
            ];
        }

        # Modify a call center's night service settings.
        static public function GroupCallCenterNightServiceModifyRequest($serviceUserId=null,$action=null,$businessHours=null,$forceNightService=null,$allowManualOverrideViaFAC=null,$transferPhoneNumber=null,$playAnnouncementBeforeAction=null,$audioMessageSelection=null,$audioFile=null,$videoMessageSelection=null,$videoFile=null,$manualAnnouncementMode=null,$manualAudioMessageSelection=null,$manualAudioFile=null,$manualVideoMessageSelection=null,$manualVideoFile=null) {
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
                    'audioFile' => $audioFile,
                    'videoMessageSelection' => $videoMessageSelection,
                    'videoFile' => $videoFile,
                    'manualAnnouncementMode' => $manualAnnouncementMode,
                    'manualAudioMessageSelection' => $manualAudioMessageSelection,
                    'manualAudioFile' => $manualAudioFile,
                    'manualVideoMessageSelection' => $manualVideoMessageSelection,
                    'manualVideoFile' => $manualVideoFile
                ]
            ];
        }

        # Get a call center's overflow settings.
        static public function GroupCallCenterOverflowGetRequest($serviceUserId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceUserId' => $serviceUserId
                ]
            ];
        }

        # Modify a call center's overflow settings.
        static public function GroupCallCenterOverflowModifyRequest($serviceUserId=null,$action=null,$transferPhoneNumber=null,$overflowAfterTimeout=null,$timeoutSeconds=null,$playAnnouncementBeforeOverflowProcessing=null,$audioMessageSelection=null,$audioFile=null,$videoMessageSelection=null,$videoFile=null) {
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
                    'audioFile' => $audioFile,
                    'videoMessageSelection' => $videoMessageSelection,
                    'videoFile' => $videoFile
                ]
            ];
        }

        # Get a call center's stranded call settings.
        static public function GroupCallCenterStrandedCallGetRequest($serviceUserId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceUserId' => $serviceUserId
                ]
            ];
        }

        # Modify a call center's stranded call settings.
        static public function GroupCallCenterStrandedCallModifyRequest($serviceUserId=null,$action=null,$transferPhoneNumber=null,$audioMessageSelection=null,$audioFile=null,$videoMessageSelection=null,$videoFile=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceUserId' => $serviceUserId,
                    'action' => $action,
                    'transferPhoneNumber' => $transferPhoneNumber,
                    'audioMessageSelection' => $audioMessageSelection,
                    'audioFile' => $audioFile,
                    'videoMessageSelection' => $videoMessageSelection,
                    'videoFile' => $videoFile
                ]
            ];
        }

        # Adds a Custom Contact Directory to a group.
        static public function GroupCustomContactDirectoryAddRequest($serviceProviderId=null,$groupId=null,$name=null,$userId=null) {
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

        # Get a list of users that can be part of a custom contact directory.
        static public function GroupCustomContactDirectoryGetAvailableUserListRequest($serviceProviderId=null,$groupId=null,$responseSizeLimit=null,$searchCriteriaUserLastName=null,$searchCriteriaUserFirstName=null,$searchCriteriaExactUserDepartment=null,$searchCriteriaExactUserGroup=null) {
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

        # Gets a Custom Contact Directory in a group.
        static public function GroupCustomContactDirectoryGetRequest($serviceProviderId=null,$groupId=null,$name=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId,
                    'name' => $name
                ]
            ];
        }

        # Adds a Custom Contact Directory to a group.
        static public function GroupCustomContactDirectoryModifyRequest($serviceProviderId=null,$groupId=null,$name=null,$newName=null,$userIdList=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId,
                    'name' => $name,
                    'newName' => $newName,
                    'userIdList' => $userIdList
                ]
            ];
        }

        # Request the group level data associated with Call Processing Policy.
        static public function GroupCallProcessingGetPolicyRequest16($serviceProviderId=null,$groupId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId
                ]
            ];
        }

        # Add a holiday schedule to a group.
        static public function GroupHolidayScheduleAddRequest($serviceProviderId=null,$groupId=null,$holidayScheduleName=null,$holiday01=null,$holiday02=null,$holiday03=null,$holiday04=null,$holiday05=null,$holiday06=null,$holiday07=null,$holiday08=null,$holiday09=null,$holiday10=null,$holiday11=null,$holiday12=null,$holiday13=null,$holiday14=null,$holiday15=null,$holiday16=null,$holiday17=null,$holiday18=null,$holiday19=null,$holiday20=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId,
                    'holidayScheduleName' => $holidayScheduleName,
                    'holiday01' => $holiday01,
                    'holiday02' => $holiday02,
                    'holiday03' => $holiday03,
                    'holiday04' => $holiday04,
                    'holiday05' => $holiday05,
                    'holiday06' => $holiday06,
                    'holiday07' => $holiday07,
                    'holiday08' => $holiday08,
                    'holiday09' => $holiday09,
                    'holiday10' => $holiday10,
                    'holiday11' => $holiday11,
                    'holiday12' => $holiday12,
                    'holiday13' => $holiday13,
                    'holiday14' => $holiday14,
                    'holiday15' => $holiday15,
                    'holiday16' => $holiday16,
                    'holiday17' => $holiday17,
                    'holiday18' => $holiday18,
                    'holiday19' => $holiday19,
                    'holiday20' => $holiday20
                ]
            ];
        }

        # Delete a holiday schedule from a group.
        static public function GroupHolidayScheduleDeleteRequest($serviceProviderId=null,$groupId=null,$holidayScheduleName=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId,
                    'holidayScheduleName' => $holidayScheduleName
                ]
            ];
        }

        # Get a holiday schedule in a group.
        static public function GroupHolidayScheduleGetRequest($serviceProviderId=null,$groupId=null,$holidayScheduleName=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId,
                    'holidayScheduleName' => $holidayScheduleName
                ]
            ];
        }

        # Get a holiday schedule in a group.
        static public function GroupHolidayScheduleGetListRequest($serviceProviderId=null,$groupId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId
                ]
            ];
        }

        # Modify a holiday schedule in a group.
        static public function GroupHolidayScheduleModifyRequest($serviceProviderId=null,$groupId=null,$holidayScheduleName=null,$newHolidayScheduleName=null,$holiday01=null,$holiday02=null,$holiday03=null,$holiday04=null,$holiday05=null,$holiday06=null,$holiday07=null,$holiday08=null,$holiday09=null,$holiday10=null,$holiday11=null,$holiday12=null,$holiday13=null,$holiday14=null,$holiday15=null,$holiday16=null,$holiday17=null,$holiday18=null,$holiday19=null,$holiday20=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId,
                    'holidayScheduleName' => $holidayScheduleName,
                    'newHolidayScheduleName' => $newHolidayScheduleName,
                    'holiday01' => $holiday01,
                    'holiday02' => $holiday02,
                    'holiday03' => $holiday03,
                    'holiday04' => $holiday04,
                    'holiday05' => $holiday05,
                    'holiday06' => $holiday06,
                    'holiday07' => $holiday07,
                    'holiday08' => $holiday08,
                    'holiday09' => $holiday09,
                    'holiday10' => $holiday10,
                    'holiday11' => $holiday11,
                    'holiday12' => $holiday12,
                    'holiday13' => $holiday13,
                    'holiday14' => $holiday14,
                    'holiday15' => $holiday15,
                    'holiday16' => $holiday16,
                    'holiday17' => $holiday17,
                    'holiday18' => $holiday18,
                    'holiday19' => $holiday19,
                    'holiday20' => $holiday20
                ]
            ];
        }

        # Requests the Group's policy settings.
        static public function GroupPolicyGetRequest14sp4($serviceProviderId=null,$groupId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId
                ]
            ];
        }

        # Request a table containing the phone directory for a group.
        static public function GroupPhoneDirectoryGetListRequest($serviceProviderId=null,$groupId=null,$isExtendedInfoRequested=null,$responseSizeLimit=null,$searchCriteriaUserLastName=null,$searchCriteriaUserFirstName=null,$searchCriteriaDn=null,$searchCriteriaGroupLocationCode=null,$searchCriteriaExtension=null,$searchCriteriaMobilePhoneNumber=null,$searchCriteriaEmailAddress=null,$searchCriteriaYahooId=null,$searchCriteriaExactUserGroup=null,$searchCriteriaExactUserDepartment=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId,
                    'isExtendedInfoRequested' => $isExtendedInfoRequested,
                    'responseSizeLimit' => $responseSizeLimit,
                    'searchCriteriaUserLastName' => $searchCriteriaUserLastName,
                    'searchCriteriaUserFirstName' => $searchCriteriaUserFirstName,
                    'searchCriteriaDn' => $searchCriteriaDn,
                    'searchCriteriaGroupLocationCode' => $searchCriteriaGroupLocationCode,
                    'searchCriteriaExtension' => $searchCriteriaExtension,
                    'searchCriteriaMobilePhoneNumber' => $searchCriteriaMobilePhoneNumber,
                    'searchCriteriaEmailAddress' => $searchCriteriaEmailAddress,
                    'searchCriteriaYahooId' => $searchCriteriaYahooId,
                    'searchCriteriaExactUserGroup' => $searchCriteriaExactUserGroup,
                    'searchCriteriaExactUserDepartment' => $searchCriteriaExactUserDepartment
                ]
            ];
        }

        # Add a time schedule to a group.
        static public function GroupTimeScheduleAddRequest($serviceProviderId=null,$groupId=null,$timeScheduleName=null,$timeInterval01=null,$timeInterval02=null,$timeInterval03=null,$timeInterval04=null,$timeInterval05=null,$timeInterval06=null,$timeInterval07=null,$timeInterval08=null,$timeInterval09=null,$timeInterval10=null,$timeInterval11=null,$timeInterval12=null,$timeInterval13=null,$timeInterval14=null,$timeInterval15=null,$timeInterval16=null,$timeInterval17=null,$timeInterval18=null,$timeInterval19=null,$timeInterval20=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId,
                    'timeScheduleName' => $timeScheduleName,
                    'timeInterval01' => $timeInterval01,
                    'timeInterval02' => $timeInterval02,
                    'timeInterval03' => $timeInterval03,
                    'timeInterval04' => $timeInterval04,
                    'timeInterval05' => $timeInterval05,
                    'timeInterval06' => $timeInterval06,
                    'timeInterval07' => $timeInterval07,
                    'timeInterval08' => $timeInterval08,
                    'timeInterval09' => $timeInterval09,
                    'timeInterval10' => $timeInterval10,
                    'timeInterval11' => $timeInterval11,
                    'timeInterval12' => $timeInterval12,
                    'timeInterval13' => $timeInterval13,
                    'timeInterval14' => $timeInterval14,
                    'timeInterval15' => $timeInterval15,
                    'timeInterval16' => $timeInterval16,
                    'timeInterval17' => $timeInterval17,
                    'timeInterval18' => $timeInterval18,
                    'timeInterval19' => $timeInterval19,
                    'timeInterval20' => $timeInterval20
                ]
            ];
        }

        # Delete a time schedule from a group.
        static public function GroupTimeScheduleDeleteRequest($serviceProviderId=null,$groupId=null,$timeScheduleName=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId,
                    'timeScheduleName' => $timeScheduleName
                ]
            ];
        }

        # Request a list of all time schedules in a group.
        static public function GroupTimeScheduleGetListRequest($serviceProviderId=null,$groupId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId
                ]
            ];
        }

        # Request to get a group time schedule.
        static public function GroupTimeScheduleGetRequest($serviceProviderId=null,$groupId=null,$timeScheduleName=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId,
                    'timeScheduleName' => $timeScheduleName
                ]
            ];
        }

        # Modify a specified time schedule in a group.
        static public function GroupTimeScheduleModifyRequest($serviceProviderId=null,$groupId=null,$timeScheduleName=null,$newTimeScheduleName=null,$timeInterval01=null,$timeInterval02=null,$timeInterval03=null,$timeInterval04=null,$timeInterval05=null,$timeInterval06=null,$timeInterval07=null,$timeInterval08=null,$timeInterval09=null,$timeInterval10=null,$timeInterval11=null,$timeInterval12=null,$timeInterval13=null,$timeInterval14=null,$timeInterval15=null,$timeInterval16=null,$timeInterval17=null,$timeInterval18=null,$timeInterval19=null,$timeInterval20=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId,
                    'timeScheduleName' => $timeScheduleName,
                    'newTimeScheduleName' => $newTimeScheduleName,
                    'timeInterval01' => $timeInterval01,
                    'timeInterval02' => $timeInterval02,
                    'timeInterval03' => $timeInterval03,
                    'timeInterval04' => $timeInterval04,
                    'timeInterval05' => $timeInterval05,
                    'timeInterval06' => $timeInterval06,
                    'timeInterval07' => $timeInterval07,
                    'timeInterval08' => $timeInterval08,
                    'timeInterval09' => $timeInterval09,
                    'timeInterval10' => $timeInterval10,
                    'timeInterval11' => $timeInterval11,
                    'timeInterval12' => $timeInterval12,
                    'timeInterval13' => $timeInterval13,
                    'timeInterval14' => $timeInterval14,
                    'timeInterval15' => $timeInterval15,
                    'timeInterval16' => $timeInterval16,
                    'timeInterval17' => $timeInterval17,
                    'timeInterval18' => $timeInterval18,
                    'timeInterval19' => $timeInterval19,
                    'timeInterval20' => $timeInterval20
                ]
            ];
        }

        # Add a Trunk Group instance to a group.
        static public function GroupTrunkGroupAddInstanceRequest15sp2($serviceProviderId=null,$groupId=null,$name=null,$pilotUser=null,$department=null,$accessDevice=null,$maxActiveCalls=null,$maxIncomingCalls=null,$maxOutgoingCalls=null,$enableBursting=null,$burstingMaxActiveCalls=null,$burstingMaxIncomingCalls=null,$burstingMaxOutgoingCalls=null,$capacityExceededAction=null,$capacityExceededForwardAddress=null,$capacityExceededRerouteTrunkGroupKey=null,$capacityExceededTrapInitialCalls=null,$capacityExceededTrapOffsetCalls=null,$unreachableDestinationAction=null,$unreachableDestinationForwardAddress=null,$unreachableDestinationRerouteTrunkGroupKey=null,$invitationTimeout=null,$requireAuthentication=null,$sipAuthenticationUserName=null,$sipAuthenticationPassword=null,$hostedUserId=null,$trunkGroupIdentity=null,$otgDtgIdentity=null,$includeTrunkGroupIdentity=null,$includeDtgIdentity=null,$enableNetworkAddressIdentity=null,$allowUnscreenedCalls=null,$allowUnscreenedEmergencyCalls=null,$pilotUserCallingLineIdentityPolicy=null,$pilotUserChargeNumberPolicy=null,$callForwardingAlwaysAction=null,$callForwardingAlwaysForwardAddress=null,$callForwardingAlwaysRerouteTrunkGroupKey=null) {
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
                    'callForwardingAlwaysRerouteTrunkGroupKey' => $callForwardingAlwaysRerouteTrunkGroupKey
                ]
            ];
        }

        # Get a Trunk Group Instance's profile.
        static public function GroupTrunkGroupGetInstanceRequest15sp2($trunkGroupKey=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'trunkGroupKey' => $trunkGroupKey
                ]
            ];
        }

        # Request to get the group voice portal information for a voice messaging group.
        static public function GroupVoiceMessagingGroupGetVoicePortalRequest15($serviceProviderId=null,$groupId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId
                ]
            ];
        }

        # Request to get a group device profile file.
        static public function GroupAccessDeviceFileGetRequest14sp8($serviceProviderId=null,$groupId=null,$deviceName=null,$fileFormat=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId,
                    'deviceName' => $deviceName,
                    'fileFormat' => $fileFormat
                ]
            ];
        }

        # Request to get a group device type file.
        static public function GroupDeviceTypeFileGetRequest14sp8($serviceProviderId=null,$groupId=null,$deviceType=null,$fileFormat=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId,
                    'deviceType' => $deviceType,
                    'fileFormat' => $fileFormat
                ]
            ];
        }

        # Request the Group level data associated with Dial Plan Policy.
        static public function GroupDialPlanPolicyGetRequest($serviceProviderId=null,$groupId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId
                ]
            ];
        }

        # Request to get a service provider device profile file.
        static public function ServiceProviderAccessDeviceFileGetRequest14sp8($serviceProviderId=null,$deviceName=null,$fileFormat=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'deviceName' => $deviceName,
                    'fileFormat' => $fileFormat
                ]
            ];
        }

        # Request the Service Provider level data associated with Dial Plan Policy.
        static public function ServiceProviderDialPlanPolicyGetRequest($serviceProviderId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId
                ]
            ];
        }

        # Request the service provider's DTMF based in-call service activation trigger attributes.The response is either a ServiceProviderInCallServiceActivationGetResponse or an ErrorResponse.
        static public function ServiceProviderInCallServiceActivationGetRequest($serviceProviderId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId
                ]
            ];
        }

        # Modifies the service provider's DTMF based in-call service activation trigger attributes.The response is either a SuccessResponse or an ErrorResponse.
        static public function ServiceProviderInCallServiceActivationModifyRequest($serviceProviderId=null,$activationDigits=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'activationDigits' => $activationDigits
                ]
            ];
        }

        # Request to get a device profile file.
        static public function SystemAccessDeviceFileGetRequest14sp8($deviceName=null,$fileFormat=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'deviceName' => $deviceName,
                    'fileFormat' => $fileFormat
                ]
            ];
        }

        # Request the system's automatic callback attributes.
        static public function SystemAutomaticCallbackGetRequest15sp2() {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => null
            ];
        }

        # Requests the information about the specified device type without regard to whether the
        static public function SystemDeviceTypeGetRequest16($deviceType=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'deviceType' => $deviceType
                ]
            ];
        }

        # Request the system level data associated with Dial Plan Policy.
        static public function SystemDialPlanPolicyGetRequest() {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => null
            ];
        }

        # Request the system's DTMF based in-call service activation trigger attributes. The response is either a SystemInCallServiceActivationGetResponse or an ErrorResponse.
        static public function SystemInCallServiceActivationGetRequest() {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => null
            ];
        }

        # Modifies the system's DTMF based in-call service activation trigger  attributes.The response is either a SuccessResponse or an ErrorResponse.
        static public function SystemInCallServiceActivationModifyRequest($defaultActivationDigits=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'defaultActivationDigits' => $defaultActivationDigits
                ]
            ];
        }

        # Request the list of users that use the Malicious Call Trace feature.
        static public function SystemMaliciousCallTraceGetUserListRequest() {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => null
            ];
        }

        # Request to add a sip device type.
        static public function SystemSIPDeviceTypeAddRequest16($deviceType=null,$numberOfPorts=null,$profile=null,$registrationCapable=null,$isConferenceDevice=null,$isMobilityManagerDevice=null,$isMusicOnHoldDevice=null,$RFC3264Hold=null,$isTrusted=null,$E164Capable=null,$routeAdvance=null,$forwardingOverride=null,$wirelessIntegration=null,$webBasedConfigURL=null,$isVideoCapable=null,$PBXIntegration=null,$useBusinessTrunkingContact=null,$staticRegistrationCapable=null,$cpeDeviceOptions=null,$earlyMediaSupport=null,$authenticateRefer=null,$autoConfigSoftClient=null,$authenticationMode=null,$requiresBroadWorksDigitCollection=null,$requiresBroadWorksCallWaitingTone=null,$requiresMWISubscription=null,$useHistoryInfoHeaderOnAccessSide=null,$adviceOfChargeCapable=null) {
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
                    'requiresBroadWorksDigitCollection' => $requiresBroadWorksDigitCollection,
                    'requiresBroadWorksCallWaitingTone' => $requiresBroadWorksCallWaitingTone,
                    'requiresMWISubscription' => $requiresMWISubscription,
                    'useHistoryInfoHeaderOnAccessSide' => $useHistoryInfoHeaderOnAccessSide,
                    'adviceOfChargeCapable' => $adviceOfChargeCapable
                ]
            ];
        }

        # Request to add a sip device type.
        static public function SystemSIPDeviceTypeAddRequest16sp1($deviceType=null,$numberOfPorts=null,$profile=null,$registrationCapable=null,$isConferenceDevice=null,$isMobilityManagerDevice=null,$isMusicOnHoldDevice=null,$RFC3264Hold=null,$isTrusted=null,$E164Capable=null,$routeAdvance=null,$forwardingOverride=null,$wirelessIntegration=null,$webBasedConfigURL=null,$isVideoCapable=null,$PBXIntegration=null,$useBusinessTrunkingContact=null,$staticRegistrationCapable=null,$cpeDeviceOptions=null,$earlyMediaSupport=null,$authenticateRefer=null,$autoConfigSoftClient=null,$authenticationMode=null,$requiresBroadWorksDigitCollection=null,$requiresBroadWorksCallWaitingTone=null,$requiresMWISubscription=null,$useHistoryInfoHeaderOnAccessSide=null,$adviceOfChargeCapable=null,$resetEvent=null) {
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
                    'requiresBroadWorksDigitCollection' => $requiresBroadWorksDigitCollection,
                    'requiresBroadWorksCallWaitingTone' => $requiresBroadWorksCallWaitingTone,
                    'requiresMWISubscription' => $requiresMWISubscription,
                    'useHistoryInfoHeaderOnAccessSide' => $useHistoryInfoHeaderOnAccessSide,
                    'adviceOfChargeCapable' => $adviceOfChargeCapable,
                    'resetEvent' => $resetEvent
                ]
            ];
        }

        # Request to add a sip device type file.
        static public function SystemSIPDeviceTypeFileAddRequest14sp8($deviceType=null,$fileFormat=null,$remoteFileFormat=null,$fileCategory=null,$allowFileCustomization=null,$fileSource=null,$uploadFile=null,$useHttpDigestAuthentication=null,$macBasedFileAuthentication=null,$userNamePasswordFileAuthentication=null,$macInNonRequestURI=null,$macFormatInNonRequestURI=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'deviceType' => $deviceType,
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

        # Request to modify a sip device type file.
        static public function SystemSIPDeviceTypeFileModifyRequest14sp8($deviceType=null,$fileFormat=null,$allowFileCustomization=null,$fileSource=null,$uploadFile=null,$useHttpDigestAuthentication=null,$macBasedFileAuthentication=null,$userNamePasswordFileAuthentication=null,$macInNonRequestURI=null,$macFormatInNonRequestURI=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'deviceType' => $deviceType,
                    'fileFormat' => $fileFormat,
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

        # Request to get a sip device type file.
        static public function SystemSIPDeviceTypeFileGetRequest14sp8($deviceType=null,$fileFormat=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'deviceType' => $deviceType,
                    'fileFormat' => $fileFormat
                ]
            ];
        }

        # Request to get a sip device type.
        static public function SystemSIPDeviceTypeGetRequest16($deviceType=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'deviceType' => $deviceType
                ]
            ];
        }

        # Request to get a sip device type.
        static public function SystemSIPDeviceTypeGetRequest16sp1($deviceType=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'deviceType' => $deviceType
                ]
            ];
        }

        # Request to modify a sip device type.
        static public function SystemSIPDeviceTypeModifyRequest16($deviceType=null,$isObsolete=null,$registrationCapable=null,$RFC3264Hold=null,$isTrusted=null,$E164Capable=null,$routeAdvance=null,$forwardingOverride=null,$wirelessIntegration=null,$webBasedConfigURL=null,$isVideoCapable=null,$PBXIntegration=null,$useBusinessTrunkingContact=null,$staticRegistrationCapable=null,$cpeDeviceOptions=null,$earlyMediaSupport=null,$authenticateRefer=null,$autoConfigSoftClient=null,$authenticationMode=null,$requiresBroadWorksDigitCollection=null,$requiresBroadWorksCallWaitingTone=null,$requiresMWISubscription=null,$useHistoryInfoHeaderOnAccessSide=null,$adviceOfChargeCapable=null) {
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
                    'requiresBroadWorksDigitCollection' => $requiresBroadWorksDigitCollection,
                    'requiresBroadWorksCallWaitingTone' => $requiresBroadWorksCallWaitingTone,
                    'requiresMWISubscription' => $requiresMWISubscription,
                    'useHistoryInfoHeaderOnAccessSide' => $useHistoryInfoHeaderOnAccessSide,
                    'adviceOfChargeCapable' => $adviceOfChargeCapable
                ]
            ];
        }

        # Request to modify a sip device type.
        static public function SystemSIPDeviceTypeModifyRequest16sp1($deviceType=null,$isObsolete=null,$registrationCapable=null,$RFC3264Hold=null,$isTrusted=null,$E164Capable=null,$routeAdvance=null,$forwardingOverride=null,$wirelessIntegration=null,$webBasedConfigURL=null,$isVideoCapable=null,$PBXIntegration=null,$useBusinessTrunkingContact=null,$staticRegistrationCapable=null,$cpeDeviceOptions=null,$earlyMediaSupport=null,$authenticateRefer=null,$autoConfigSoftClient=null,$authenticationMode=null,$requiresBroadWorksDigitCollection=null,$requiresBroadWorksCallWaitingTone=null,$requiresMWISubscription=null,$useHistoryInfoHeaderOnAccessSide=null,$adviceOfChargeCapable=null,$resetEvent=null,$supportCallCenterMIMEType=null) {
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
                    'requiresBroadWorksDigitCollection' => $requiresBroadWorksDigitCollection,
                    'requiresBroadWorksCallWaitingTone' => $requiresBroadWorksCallWaitingTone,
                    'requiresMWISubscription' => $requiresMWISubscription,
                    'useHistoryInfoHeaderOnAccessSide' => $useHistoryInfoHeaderOnAccessSide,
                    'adviceOfChargeCapable' => $adviceOfChargeCapable,
                    'resetEvent' => $resetEvent,
                    'supportCallCenterMIMEType' => $supportCallCenterMIMEType
                ]
            ];
        }

        # Request the system level data associated with Call Center.
        static public function SystemCallCenterGetRequest16() {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => null
            ];
        }

        # Request the system's calling name retrieval attributes.
        static public function SystemCallingNameRetrievalGetRequest14() {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => null
            ];
        }

        # Modifies the system's calling name retrieval attributes.
        static public function SystemCallingNameRetrievalModifyRequest($queryTimerMilliSeconds=null,$serverNetAddress=null,$serverPort=null,$serverTransportProtocol=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'queryTimerMilliSeconds' => $queryTimerMilliSeconds,
                    'serverNetAddress' => $serverNetAddress,
                    'serverPort' => $serverPort,
                    'serverTransportProtocol' => $serverTransportProtocol
                ]
            ];
        }

        # Add a new Communication Barring Criteria.
        static public function SystemCommunicationBarringCriteriaAddRequest($name=null,$description=null,$matchCallType=null,$matchAlternateCallIndicator=null,$matchVirtualOnNetCallType=null,$matchPublicNetwork=null,$matchPrivateNetwork=null,$matchLocalCategory=null,$matchNationalCategory=null,$matchInterlataCategory=null,$matchIntralataCategory=null,$matchInternationalCategory=null,$matchPrivateCategory=null,$matchEmergencyCategory=null,$matchOtherCategory=null,$matchInterNetwork=null,$matchInterHostingNE=null,$matchInterAS=null,$matchIntraAS=null,$matchChargeCalls=null,$matchNoChargeCalls=null,$matchGroupCalls=null,$matchEnterpriseCalls=null,$matchNetworkCalls=null,$matchNetworkURLCalls=null,$matchRepairCalls=null,$matchEmergencyCalls=null,$matchInternalCalls=null,$timeSchedule=null,$holidaySchedule=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'name' => $name,
                    'description' => $description,
                    'matchCallType' => $matchCallType,
                    'matchAlternateCallIndicator' => $matchAlternateCallIndicator,
                    'matchVirtualOnNetCallType' => $matchVirtualOnNetCallType,
                    'matchPublicNetwork' => $matchPublicNetwork,
                    'matchPrivateNetwork' => $matchPrivateNetwork,
                    'matchLocalCategory' => $matchLocalCategory,
                    'matchNationalCategory' => $matchNationalCategory,
                    'matchInterlataCategory' => $matchInterlataCategory,
                    'matchIntralataCategory' => $matchIntralataCategory,
                    'matchInternationalCategory' => $matchInternationalCategory,
                    'matchPrivateCategory' => $matchPrivateCategory,
                    'matchEmergencyCategory' => $matchEmergencyCategory,
                    'matchOtherCategory' => $matchOtherCategory,
                    'matchInterNetwork' => $matchInterNetwork,
                    'matchInterHostingNE' => $matchInterHostingNE,
                    'matchInterAS' => $matchInterAS,
                    'matchIntraAS' => $matchIntraAS,
                    'matchChargeCalls' => $matchChargeCalls,
                    'matchNoChargeCalls' => $matchNoChargeCalls,
                    'matchGroupCalls' => $matchGroupCalls,
                    'matchEnterpriseCalls' => $matchEnterpriseCalls,
                    'matchNetworkCalls' => $matchNetworkCalls,
                    'matchNetworkURLCalls' => $matchNetworkURLCalls,
                    'matchRepairCalls' => $matchRepairCalls,
                    'matchEmergencyCalls' => $matchEmergencyCalls,
                    'matchInternalCalls' => $matchInternalCalls,
                    'timeSchedule' => $timeSchedule,
                    'holidaySchedule' => $holidaySchedule
                ]
            ];
        }

        # Get an existing Communication Barring Criteria.
        static public function SystemCommunicationBarringCriteriaGetRequest($name=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'name' => $name
                ]
            ];
        }

        # Request to get the list of expensive alternate call indicators in the system.
        static public function SystemExpensiveCallTypeGetListRequest() {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => null
            ];
        }

        # Add an application to the OCI call control application list.
        static public function SystemOCICallControlApplicationAddRequest14sp9($applicationId=null,$enableSystemWide=null,$notificationTimeoutSeconds=null,$description=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'applicationId' => $applicationId,
                    'enableSystemWide' => $enableSystemWide,
                    'notificationTimeoutSeconds' => $notificationTimeoutSeconds,
                    'description' => $description
                ]
            ];
        }

        # Requests the system's default policy settings.
        static public function SystemPolicyGetDefaultRequest14sp4() {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => null
            ];
        }

        # Requests the system's default policy settings.
        static public function SystemPolicyGetDefaultRequest16sp1() {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => null
            ];
        }

        # Retrieves the Sh Interface system parameters.
        static public function SystemShInterfaceParametersGetRequest() {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => null
            ];
        }

        # Modifies the Sh Interface system parameters.  This request must be submitted on both nodes in the redundant Application Server cluster in order for the changes to take effect on each node without requiring a restart.
        static public function SystemShInterfaceParametersModifyRequest($hssRealm=null,$requestTimeoutSeconds=null,$publicIdentityRefreshDelaySeconds=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'hssRealm' => $hssRealm,
                    'requestTimeoutSeconds' => $requestTimeoutSeconds,
                    'publicIdentityRefreshDelaySeconds' => $publicIdentityRefreshDelaySeconds
                ]
            ];
        }

        # Requests the service provider administrator's policy settings.
        static public function ServiceProviderAdminGetPolicyRequest14($userId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId
                ]
            ];
        }

        # Request to get all the information of a Auto Attendant instance.
        static public function GroupAutoAttendantGetInstanceRequest16($serviceUserId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceUserId' => $serviceUserId
                ]
            ];
        }

        # Request to get all the information of a Call Center instance.
        static public function GroupCallCenterGetInstanceRequest16($serviceUserId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceUserId' => $serviceUserId
                ]
            ];
        }

        # Request to get all the information of a BroadWorks Anywhere instance.
        static public function GroupBroadWorksAnywhereGetInstanceRequest($serviceUserId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceUserId' => $serviceUserId
                ]
            ];
        }

        # Request the group's extension length.
        static public function GroupExtensionLengthGetRequest($serviceProviderId=null,$groupId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId
                ]
            ];
        }

        # Modify the group's extension length.
        static public function GroupExtensionLengthModifyRequest($serviceProviderId=null,$groupId=null,$extensionLength=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId,
                    'extensionLength' => $extensionLength
                ]
            ];
        }

        # Requests the service provider administrator's policy settings.
        static public function ServiceProviderAdminGetPolicyRequest16sp1($userId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId
                ]
            ];
        }

        # Requests the Group administrator's policy settings.
        static public function GroupAdminGetPolicyRequest16sp1($userId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId
                ]
            ];
        }

        # Request to get all the information of a Hunt Group instance.
        static public function GroupHuntGroupGetInstanceRequest14($serviceUserId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceUserId' => $serviceUserId
                ]
            ];
        }

        # Request to get all the information of an Instant Conferencing instance.
        static public function GroupInstantConferencingGetInstanceRequest15sp2($serviceUserId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceUserId' => $serviceUserId
                ]
            ];
        }

        # Request to get all the information of an Instant Group Call service instance.
        static public function GroupInstantGroupCallGetInstanceRequest14($serviceUserId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceUserId' => $serviceUserId
                ]
            ];
        }

        # Request the service provider level data associated with Call Processing
        static public function ServiceProviderCallProcessingGetPolicyRequest16($serviceProviderId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId
                ]
            ];
        }

        # Request the system level data associated with Call Processing Policy.
        static public function SystemCallProcessingGetPolicyRequest16() {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => null
            ];
        }

        # Add a system holiday schedule.
        static public function SystemHolidayScheduleAddRequest($holidayScheduleName=null,$holiday01=null,$holiday02=null,$holiday03=null,$holiday04=null,$holiday05=null,$holiday06=null,$holiday07=null,$holiday08=null,$holiday09=null,$holiday10=null,$holiday11=null,$holiday12=null,$holiday13=null,$holiday14=null,$holiday15=null,$holiday16=null,$holiday17=null,$holiday18=null,$holiday19=null,$holiday20=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'holidayScheduleName' => $holidayScheduleName,
                    'holiday01' => $holiday01,
                    'holiday02' => $holiday02,
                    'holiday03' => $holiday03,
                    'holiday04' => $holiday04,
                    'holiday05' => $holiday05,
                    'holiday06' => $holiday06,
                    'holiday07' => $holiday07,
                    'holiday08' => $holiday08,
                    'holiday09' => $holiday09,
                    'holiday10' => $holiday10,
                    'holiday11' => $holiday11,
                    'holiday12' => $holiday12,
                    'holiday13' => $holiday13,
                    'holiday14' => $holiday14,
                    'holiday15' => $holiday15,
                    'holiday16' => $holiday16,
                    'holiday17' => $holiday17,
                    'holiday18' => $holiday18,
                    'holiday19' => $holiday19,
                    'holiday20' => $holiday20
                ]
            ];
        }

        # Delete a system holiday schedule.
        static public function SystemHolidayScheduleDeleteRequest($holidayScheduleName=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'holidayScheduleName' => $holidayScheduleName
                ]
            ];
        }

        # Get a system holiday schedule.
        static public function SystemHolidayScheduleGetRequest($holidayScheduleName=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'holidayScheduleName' => $holidayScheduleName
                ]
            ];
        }

        # Request a list of all system holiday schedules.
        static public function SystemHolidayScheduleGetListRequest() {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => null
            ];
        }

        # Modify a system holiday schedule.
        static public function SystemHolidayScheduleModifyRequest($holidayScheduleName=null,$newHolidayScheduleName=null,$holiday01=null,$holiday02=null,$holiday03=null,$holiday04=null,$holiday05=null,$holiday06=null,$holiday07=null,$holiday08=null,$holiday09=null,$holiday10=null,$holiday11=null,$holiday12=null,$holiday13=null,$holiday14=null,$holiday15=null,$holiday16=null,$holiday17=null,$holiday18=null,$holiday19=null,$holiday20=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'holidayScheduleName' => $holidayScheduleName,
                    'newHolidayScheduleName' => $newHolidayScheduleName,
                    'holiday01' => $holiday01,
                    'holiday02' => $holiday02,
                    'holiday03' => $holiday03,
                    'holiday04' => $holiday04,
                    'holiday05' => $holiday05,
                    'holiday06' => $holiday06,
                    'holiday07' => $holiday07,
                    'holiday08' => $holiday08,
                    'holiday09' => $holiday09,
                    'holiday10' => $holiday10,
                    'holiday11' => $holiday11,
                    'holiday12' => $holiday12,
                    'holiday13' => $holiday13,
                    'holiday14' => $holiday14,
                    'holiday15' => $holiday15,
                    'holiday16' => $holiday16,
                    'holiday17' => $holiday17,
                    'holiday18' => $holiday18,
                    'holiday19' => $holiday19,
                    'holiday20' => $holiday20
                ]
            ];
        }

        # Request the system level data associated with Hunt Group.
        static public function SystemHuntGroupGetRequest() {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => null
            ];
        }

        # Get an existing Network Class of Service.
        static public function SystemNetworkClassOfServiceGetRequest($name=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'name' => $name
                ]
            ];
        }

        # Adds a list of IP addresses to a zone
        static public function SystemZoneCallingRestrictionsNetAddressAddListRequest($zoneName=null,$netAddress=null,$netAddressRange=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'zoneName' => $zoneName,
                    'netAddress' => $netAddress,
                    'netAddressRange' => $netAddressRange
                ]
            ];
        }

        # Deletes a list of IP addresses from a zone
        static public function SystemZoneCallingRestrictionsNetAddressDeleteListRequest($zoneName=null,$netAddress=null,$netAddressRange=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'zoneName' => $zoneName,
                    'netAddress' => $netAddress,
                    'netAddressRange' => $netAddressRange
                ]
            ];
        }

        # Gets a list of IP Addresses and/or Ranges assigned to a zone
        static public function SystemZoneCallingRestrictionsNetAddressGetListRequest($zoneName=null,$responseSizeLimit=null,$searchCriteriaZoneIPAddress=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'zoneName' => $zoneName,
                    'responseSizeLimit' => $responseSizeLimit,
                    'searchCriteriaZoneIPAddress' => $searchCriteriaZoneIPAddress
                ]
            ];
        }

        # Add a zone.
        static public function SystemZoneCallingRestrictionsZoneAddRequest($zoneName=null,$physicalLocation=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'zoneName' => $zoneName,
                    'physicalLocation' => $physicalLocation
                ]
            ];
        }

        # Deletes a zone from the system
        static public function SystemZoneCallingRestrictionsZoneDeleteRequest($zoneName=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'zoneName' => $zoneName
                ]
            ];
        }

        # Gets a list of all zones defined in the system
        static public function SystemZoneCallingRestrictionsZoneGetListRequest() {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => null
            ];
        }

        # Modifies attributes of a zone in the system.
        static public function SystemZoneCallingRestrictionsZoneModifyRequest($zoneName=null,$physicalLocation=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'zoneName' => $zoneName,
                    'physicalLocation' => $physicalLocation
                ]
            ];
        }

        # Request the user level data associated with Alternate Numbers.
        static public function UserAlternateNumbersGetRequest($userId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId
                ]
            ];
        }

        # Get the list of all the BroadWorks Anywhere phone numbers for the user.
        static public function UserBroadWorksAnywhereGetRequest($userId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId
                ]
            ];
        }

        # Request the user level data associated with Call Processing Policy.
        static public function UserCallProcessingGetPolicyRequest16($userId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId
                ]
            ];
        }

        # Request the user level data associated with Fax Messaging.
        static public function UserFaxMessagingGetRequest($userId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId
                ]
            ];
        }

        # Request to get the user information.  The response is either 
        static public function UserGetRequest15sp2($userId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId
                ]
            ];
        }

        # Get the user's call center settings and the list of call centers the specified user belongs to.
        static public function UserCallCenterGetRequest16($userId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId
                ]
            ];
        }

        # Add a holiday schedule to a user.
        static public function UserHolidayScheduleAddRequest($userId=null,$holidayScheduleName=null,$holiday01=null,$holiday02=null,$holiday03=null,$holiday04=null,$holiday05=null,$holiday06=null,$holiday07=null,$holiday08=null,$holiday09=null,$holiday10=null,$holiday11=null,$holiday12=null,$holiday13=null,$holiday14=null,$holiday15=null,$holiday16=null,$holiday17=null,$holiday18=null,$holiday19=null,$holiday20=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId,
                    'holidayScheduleName' => $holidayScheduleName,
                    'holiday01' => $holiday01,
                    'holiday02' => $holiday02,
                    'holiday03' => $holiday03,
                    'holiday04' => $holiday04,
                    'holiday05' => $holiday05,
                    'holiday06' => $holiday06,
                    'holiday07' => $holiday07,
                    'holiday08' => $holiday08,
                    'holiday09' => $holiday09,
                    'holiday10' => $holiday10,
                    'holiday11' => $holiday11,
                    'holiday12' => $holiday12,
                    'holiday13' => $holiday13,
                    'holiday14' => $holiday14,
                    'holiday15' => $holiday15,
                    'holiday16' => $holiday16,
                    'holiday17' => $holiday17,
                    'holiday18' => $holiday18,
                    'holiday19' => $holiday19,
                    'holiday20' => $holiday20
                ]
            ];
        }

        # Delete a holiday schedule from a user.
        static public function UserHolidayScheduleDeleteRequest($userId=null,$holidayScheduleName=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId,
                    'holidayScheduleName' => $holidayScheduleName
                ]
            ];
        }

        # Get a holiday schedule list for a user.
        static public function UserHolidayScheduleGetListRequest($userId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId
                ]
            ];
        }

        # Get a holiday schedule a user.
        static public function UserHolidayScheduleGetRequest($userId=null,$holidayScheduleName=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId,
                    'holidayScheduleName' => $holidayScheduleName
                ]
            ];
        }

        # Modify a holiday schedule for a user.
        static public function UserHolidayScheduleModifyRequest($userId=null,$holidayScheduleName=null,$newHolidayScheduleName=null,$holiday01=null,$holiday02=null,$holiday03=null,$holiday04=null,$holiday05=null,$holiday06=null,$holiday07=null,$holiday08=null,$holiday09=null,$holiday10=null,$holiday11=null,$holiday12=null,$holiday13=null,$holiday14=null,$holiday15=null,$holiday16=null,$holiday17=null,$holiday18=null,$holiday19=null,$holiday20=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId,
                    'holidayScheduleName' => $holidayScheduleName,
                    'newHolidayScheduleName' => $newHolidayScheduleName,
                    'holiday01' => $holiday01,
                    'holiday02' => $holiday02,
                    'holiday03' => $holiday03,
                    'holiday04' => $holiday04,
                    'holiday05' => $holiday05,
                    'holiday06' => $holiday06,
                    'holiday07' => $holiday07,
                    'holiday08' => $holiday08,
                    'holiday09' => $holiday09,
                    'holiday10' => $holiday10,
                    'holiday11' => $holiday11,
                    'holiday12' => $holiday12,
                    'holiday13' => $holiday13,
                    'holiday14' => $holiday14,
                    'holiday15' => $holiday15,
                    'holiday16' => $holiday16,
                    'holiday17' => $holiday17,
                    'holiday18' => $holiday18,
                    'holiday19' => $holiday19,
                    'holiday20' => $holiday20
                ]
            ];
        }

        # Request the user level data associated with Hoteling Host.
        static public function UserHotelingHostGetRequest14sp4($userId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId
                ]
            ];
        }

        # Add a new phone number and set the answer confirmation setting.
        static public function UserSimultaneousRingFamilyAddPhoneNumberRequest($userId=null,$phoneNumber=null,$answerConfirmationRequired=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId,
                    'phoneNumber' => $phoneNumber,
                    'answerConfirmationRequired' => $answerConfirmationRequired
                ]
            ];
        }

        # Request the user level data associated with Third-Party Voice Mail Support.
        static public function UserThirdPartyVoiceMailSupportGetRequest13mp16($userId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId
                ]
            ];
        }

        # Delete the phone number specified.
        static public function UserSimultaneousRingFamilyDeletePhoneNumberRequest($userId=null,$phoneNumber=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId,
                    'phoneNumber' => $phoneNumber
                ]
            ];
        }

        # Get the answer confirmation setting for the phone number specified.
        static public function UserSimultaneousRingFamilyGetPhoneNumberRequest($userId=null,$phoneNumber=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId,
                    'phoneNumber' => $phoneNumber
                ]
            ];
        }

        # Get the user's simultaneous ring service Family setting.
        static public function UserSimultaneousRingFamilyGetRequest14sp4($userId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId
                ]
            ];
        }

        # Modify the require confirmation setting for the destination.
        static public function UserSimultaneousRingFamilyModifyPhoneNumberRequest($userId=null,$phoneNumber=null,$answerConfirmationRequired=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId,
                    'phoneNumber' => $phoneNumber,
                    'answerConfirmationRequired' => $answerConfirmationRequired
                ]
            ];
        }

        # Modify the user's simultaneous ring family service setting.
        static public function UserSimultaneousRingFamilyModifyRequest14sp4($userId=null,$isActive=null,$incomingCalls=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId,
                    'isActive' => $isActive,
                    'incomingCalls' => $incomingCalls
                ]
            ];
        }

        # Add a new phone number and set the answer confirmation setting.
        static public function UserSimultaneousRingPersonalAddPhoneNumberRequest($userId=null,$phoneNumber=null,$answerConfirmationRequired=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId,
                    'phoneNumber' => $phoneNumber,
                    'answerConfirmationRequired' => $answerConfirmationRequired
                ]
            ];
        }

        # Delete the phone number specified.
        static public function UserSimultaneousRingPersonalDeletePhoneNumberRequest($userId=null,$phoneNumber=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId,
                    'phoneNumber' => $phoneNumber
                ]
            ];
        }

        # Get the answer confirmation setting for the phone number specified.
        static public function UserSimultaneousRingPersonalGetPhoneNumberRequest($userId=null,$phoneNumber=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId,
                    'phoneNumber' => $phoneNumber
                ]
            ];
        }

        # Get the user's simultaneous ring service personal setting.
        static public function UserSimultaneousRingPersonalGetRequest14sp4($userId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId
                ]
            ];
        }

        # Modify the require confirmation setting for the destination.
        static public function UserSimultaneousRingPersonalModifyPhoneNumberRequest($userId=null,$phoneNumber=null,$answerConfirmationRequired=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId,
                    'phoneNumber' => $phoneNumber,
                    'answerConfirmationRequired' => $answerConfirmationRequired
                ]
            ];
        }

        # Modify the user's simultaneous ring personal service setting.
        static public function UserSimultaneousRingPersonalModifyRequest14sp4($userId=null,$isActive=null,$incomingCalls=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId,
                    'isActive' => $isActive,
                    'incomingCalls' => $incomingCalls
                ]
            ];
        }

        # Get the user's voice messaging voice management service settings.
        static public function UserVoiceMessagingUserGetVoiceManagementRequest13mp8($userId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId
                ]
            ];
        }

        # Get a criteria for the user's selective call rejection service.
        static public function UserSelectiveCallRejectionGetCriteriaRequest16($userId=null,$criteriaName=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId,
                    'criteriaName' => $criteriaName
                ]
            ];
        }

        # Add a time schedule for a user.
        static public function UserTimeScheduleAddRequest($userId=null,$timeScheduleName=null,$timeInterval01=null,$timeInterval02=null,$timeInterval03=null,$timeInterval04=null,$timeInterval05=null,$timeInterval06=null,$timeInterval07=null,$timeInterval08=null,$timeInterval09=null,$timeInterval10=null,$timeInterval11=null,$timeInterval12=null,$timeInterval13=null,$timeInterval14=null,$timeInterval15=null,$timeInterval16=null,$timeInterval17=null,$timeInterval18=null,$timeInterval19=null,$timeInterval20=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId,
                    'timeScheduleName' => $timeScheduleName,
                    'timeInterval01' => $timeInterval01,
                    'timeInterval02' => $timeInterval02,
                    'timeInterval03' => $timeInterval03,
                    'timeInterval04' => $timeInterval04,
                    'timeInterval05' => $timeInterval05,
                    'timeInterval06' => $timeInterval06,
                    'timeInterval07' => $timeInterval07,
                    'timeInterval08' => $timeInterval08,
                    'timeInterval09' => $timeInterval09,
                    'timeInterval10' => $timeInterval10,
                    'timeInterval11' => $timeInterval11,
                    'timeInterval12' => $timeInterval12,
                    'timeInterval13' => $timeInterval13,
                    'timeInterval14' => $timeInterval14,
                    'timeInterval15' => $timeInterval15,
                    'timeInterval16' => $timeInterval16,
                    'timeInterval17' => $timeInterval17,
                    'timeInterval18' => $timeInterval18,
                    'timeInterval19' => $timeInterval19,
                    'timeInterval20' => $timeInterval20
                ]
            ];
        }

        # Delete a user time schedule.
        static public function UserTimeScheduleDeleteRequest($userId=null,$timeScheduleName=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId,
                    'timeScheduleName' => $timeScheduleName
                ]
            ];
        }

        # Get all time schedules for a user. This includes the user's personal schedules and user's group's
        static public function UserTimeScheduleGetListRequest($userId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId
                ]
            ];
        }

        # Request to get a user time schedule.
        static public function UserTimeScheduleGetRequest($userId=null,$timeScheduleName=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId,
                    'timeScheduleName' => $timeScheduleName
                ]
            ];
        }

        # Modify a user time schedule.
        static public function UserTimeScheduleModifyRequest($userId=null,$timeScheduleName=null,$newTimeScheduleName=null,$timeInterval01=null,$timeInterval02=null,$timeInterval03=null,$timeInterval04=null,$timeInterval05=null,$timeInterval06=null,$timeInterval07=null,$timeInterval08=null,$timeInterval09=null,$timeInterval10=null,$timeInterval11=null,$timeInterval12=null,$timeInterval13=null,$timeInterval14=null,$timeInterval15=null,$timeInterval16=null,$timeInterval17=null,$timeInterval18=null,$timeInterval19=null,$timeInterval20=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId,
                    'timeScheduleName' => $timeScheduleName,
                    'newTimeScheduleName' => $newTimeScheduleName,
                    'timeInterval01' => $timeInterval01,
                    'timeInterval02' => $timeInterval02,
                    'timeInterval03' => $timeInterval03,
                    'timeInterval04' => $timeInterval04,
                    'timeInterval05' => $timeInterval05,
                    'timeInterval06' => $timeInterval06,
                    'timeInterval07' => $timeInterval07,
                    'timeInterval08' => $timeInterval08,
                    'timeInterval09' => $timeInterval09,
                    'timeInterval10' => $timeInterval10,
                    'timeInterval11' => $timeInterval11,
                    'timeInterval12' => $timeInterval12,
                    'timeInterval13' => $timeInterval13,
                    'timeInterval14' => $timeInterval14,
                    'timeInterval15' => $timeInterval15,
                    'timeInterval16' => $timeInterval16,
                    'timeInterval17' => $timeInterval17,
                    'timeInterval18' => $timeInterval18,
                    'timeInterval19' => $timeInterval19,
                    'timeInterval20' => $timeInterval20
                ]
            ];
        }

        # Request the user level data associated with Call Policies.
        static public function UserCallPoliciesGetRequest($userId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId
                ]
            ];
        }

        # Get the system call processing configuration for all subscribers
        static public function SystemSubscriberGetCallProcessingParametersRequest15sp2() {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => null
            ];
        }

        # Add a system time schedule.
        static public function SystemTimeScheduleAddRequest($timeScheduleName=null,$timeInterval01=null,$timeInterval02=null,$timeInterval03=null,$timeInterval04=null,$timeInterval05=null,$timeInterval06=null,$timeInterval07=null,$timeInterval08=null,$timeInterval09=null,$timeInterval10=null,$timeInterval11=null,$timeInterval12=null,$timeInterval13=null,$timeInterval14=null,$timeInterval15=null,$timeInterval16=null,$timeInterval17=null,$timeInterval18=null,$timeInterval19=null,$timeInterval20=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'timeScheduleName' => $timeScheduleName,
                    'timeInterval01' => $timeInterval01,
                    'timeInterval02' => $timeInterval02,
                    'timeInterval03' => $timeInterval03,
                    'timeInterval04' => $timeInterval04,
                    'timeInterval05' => $timeInterval05,
                    'timeInterval06' => $timeInterval06,
                    'timeInterval07' => $timeInterval07,
                    'timeInterval08' => $timeInterval08,
                    'timeInterval09' => $timeInterval09,
                    'timeInterval10' => $timeInterval10,
                    'timeInterval11' => $timeInterval11,
                    'timeInterval12' => $timeInterval12,
                    'timeInterval13' => $timeInterval13,
                    'timeInterval14' => $timeInterval14,
                    'timeInterval15' => $timeInterval15,
                    'timeInterval16' => $timeInterval16,
                    'timeInterval17' => $timeInterval17,
                    'timeInterval18' => $timeInterval18,
                    'timeInterval19' => $timeInterval19,
                    'timeInterval20' => $timeInterval20
                ]
            ];
        }

        # Delete a system time schedule.
        static public function SystemTimeScheduleDeleteRequest($timeScheduleName=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'timeScheduleName' => $timeScheduleName
                ]
            ];
        }

        # Request to get a system time schedule.
        static public function SystemTimeScheduleGetRequest($timeScheduleName=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'timeScheduleName' => $timeScheduleName
                ]
            ];
        }

        # Request a list of all system time schedules.
        static public function SystemTimeScheduleGetListRequest() {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => null
            ];
        }

        # Modify a specified system time schedule.
        static public function SystemTimeScheduleModifyRequest($timeScheduleName=null,$newTimeScheduleName=null,$timeInterval01=null,$timeInterval02=null,$timeInterval03=null,$timeInterval04=null,$timeInterval05=null,$timeInterval06=null,$timeInterval07=null,$timeInterval08=null,$timeInterval09=null,$timeInterval10=null,$timeInterval11=null,$timeInterval12=null,$timeInterval13=null,$timeInterval14=null,$timeInterval15=null,$timeInterval16=null,$timeInterval17=null,$timeInterval18=null,$timeInterval19=null,$timeInterval20=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'timeScheduleName' => $timeScheduleName,
                    'newTimeScheduleName' => $newTimeScheduleName,
                    'timeInterval01' => $timeInterval01,
                    'timeInterval02' => $timeInterval02,
                    'timeInterval03' => $timeInterval03,
                    'timeInterval04' => $timeInterval04,
                    'timeInterval05' => $timeInterval05,
                    'timeInterval06' => $timeInterval06,
                    'timeInterval07' => $timeInterval07,
                    'timeInterval08' => $timeInterval08,
                    'timeInterval09' => $timeInterval09,
                    'timeInterval10' => $timeInterval10,
                    'timeInterval11' => $timeInterval11,
                    'timeInterval12' => $timeInterval12,
                    'timeInterval13' => $timeInterval13,
                    'timeInterval14' => $timeInterval14,
                    'timeInterval15' => $timeInterval15,
                    'timeInterval16' => $timeInterval16,
                    'timeInterval17' => $timeInterval17,
                    'timeInterval18' => $timeInterval18,
                    'timeInterval19' => $timeInterval19,
                    'timeInterval20' => $timeInterval20
                ]
            ];
        }

}