<?php
class OCISchemaServiceVoiceMessaging {
        # Requests the group's Voice Messaging settings.
        static public function GroupVoiceMessagingGroupGetRequest($serviceProviderId=null,$groupId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId
                ]
            ];
        }

        # Get the group's voice portal branding settings.
        static public function GroupVoiceMessagingGroupGetVoicePortalBrandingRequest16($serviceProviderId=null,$groupId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId
                ]
            ];
        }

        # Request to get the group voice portal information for a voice messaging group.
        static public function GroupVoiceMessagingGroupGetVoicePortalRequest17($serviceProviderId=null,$groupId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId
                ]
            ];
        }

        # Request to modify the group's voice messaging settings.
        static public function GroupVoiceMessagingGroupModifyRequest($serviceProviderId=null,$groupId=null,$useMailServerSetting=null,$warnCallerBeforeRecordingVoiceMessage=null,$allowUsersConfiguringAdvancedSettings=null,$allowComposeOrForwardMessageToEntireGroup=null,$mailServerNetAddress=null,$mailServerProtocol=null,$realDeleteForImap=null,$maxMailboxLengthMinutes=null,$doesMessageAge=null,$holdPeriodDays=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId,
                    'useMailServerSetting' => $useMailServerSetting,
                    'warnCallerBeforeRecordingVoiceMessage' => $warnCallerBeforeRecordingVoiceMessage,
                    'allowUsersConfiguringAdvancedSettings' => $allowUsersConfiguringAdvancedSettings,
                    'allowComposeOrForwardMessageToEntireGroup' => $allowComposeOrForwardMessageToEntireGroup,
                    'mailServerNetAddress' => $mailServerNetAddress,
                    'mailServerProtocol' => $mailServerProtocol,
                    'realDeleteForImap' => $realDeleteForImap,
                    'maxMailboxLengthMinutes' => $maxMailboxLengthMinutes,
                    'doesMessageAge' => $doesMessageAge,
                    'holdPeriodDays' => $holdPeriodDays
                ]
            ];
        }

        # Modify the group's voice portal branding settings.
        static public function GroupVoiceMessagingGroupModifyVoicePortalBrandingRequest16($serviceProviderId=null,$groupId=null,$voicePortalGreetingSelection=null,$voicePortalGreetingFile=null,$voiceMessagingGreetingSelection=null,$voiceMessagingGreetingFile=null) {
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

        # Request to modify the group voice portal information for a voice messaging group.
        static public function GroupVoiceMessagingGroupModifyVoicePortalRequest($serviceProviderId=null,$groupId=null,$serviceInstanceProfile=null,$isActive=null,$allowIdentificationByPhoneNumberOrVoiceMailAliasesOnLogin=null,$useVoicePortalWizard=null,$voicePortalExternalRoutingScope=null,$useExternalRouting=null,$externalRoutingAddress=null,$homeZoneName=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId,
                    'serviceInstanceProfile' => $serviceInstanceProfile,
                    'isActive' => $isActive,
                    'allowIdentificationByPhoneNumberOrVoiceMailAliasesOnLogin' => $allowIdentificationByPhoneNumberOrVoiceMailAliasesOnLogin,
                    'useVoicePortalWizard' => $useVoicePortalWizard,
                    'voicePortalExternalRoutingScope' => $voicePortalExternalRoutingScope,
                    'useExternalRouting' => $useExternalRouting,
                    'externalRoutingAddress' => $externalRoutingAddress,
                    'homeZoneName' => $homeZoneName
                ]
            ];
        }

        # Requests the service provider's or enterprise's voice messaging settings.
        static public function ServiceProviderVoiceMessagingGroupGetRequest($serviceProviderId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId
                ]
            ];
        }

        # Get the service provider's voice portal branding settings.
        static public function ServiceProviderVoiceMessagingGroupGetVoicePortalBrandingRequest16($serviceProviderId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId
                ]
            ];
        }

        # Requests the service provider's or enterprise's voice portal settings.
        static public function ServiceProviderVoiceMessagingGroupGetVoicePortalRequest($serviceProviderId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId
                ]
            ];
        }

        # Request to modify a service provider's or enterprise's voice messaging settings.
        static public function ServiceProviderVoiceMessagingGroupModifyRequest($serviceProviderId=null,$deliveryFromAddress=null,$notificationFromAddress=null,$voicePortalLockoutFromAddress=null,$useSystemDefaultDeliveryFromAddress=null,$useSystemDefaultNotificationFromAddress=null,$useSystemDefaultVoicePortalLockoutFromAddress=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'deliveryFromAddress' => $deliveryFromAddress,
                    'notificationFromAddress' => $notificationFromAddress,
                    'voicePortalLockoutFromAddress' => $voicePortalLockoutFromAddress,
                    'useSystemDefaultDeliveryFromAddress' => $useSystemDefaultDeliveryFromAddress,
                    'useSystemDefaultNotificationFromAddress' => $useSystemDefaultNotificationFromAddress,
                    'useSystemDefaultVoicePortalLockoutFromAddress' => $useSystemDefaultVoicePortalLockoutFromAddress
                ]
            ];
        }

        # Modify the service provider's voice portal branding settings.
        static public function ServiceProviderVoiceMessagingGroupModifyVoicePortalBrandingRequest16($serviceProviderId=null,$voicePortalGreetingSelection=null,$voicePortalGreetingFile=null,$voiceMessagingGreetingSelection=null,$voiceMessagingGreetingFile=null) {
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

        # Request to change the service provider's or enterprise's voice portal settings.
        static public function ServiceProviderVoiceMessagingGroupModifyVoicePortalRequest($serviceProviderId=null,$voicePortalScope=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'voicePortalScope' => $voicePortalScope
                ]
            ];
        }

        # Requests system voice mail message summary update parameter settings.
        static public function SystemVoiceMessageSummaryUpdateGetRequest() {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => null
            ];
        }

        # Modify the system level data associated with Voice Messaging.
        static public function SystemVoiceMessageSummaryUpdateModifyRequest($sendSavedAndUrgentMWIOnNotification=null,$sendMessageSummaryUpdateOnRegister=null,$minTimeBetweenMWIOnRegister=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'sendSavedAndUrgentMWIOnNotification' => $sendSavedAndUrgentMWIOnNotification,
                    'sendMessageSummaryUpdateOnRegister' => $sendMessageSummaryUpdateOnRegister,
                    'minTimeBetweenMWIOnRegister' => $minTimeBetweenMWIOnRegister
                ]
            ];
        }

        # Request the system level data associated with Voice Messaging.
        static public function SystemVoiceMessagingGroupGetRequest16sp2() {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => null
            ];
        }

        # Requests the system voice portal Menus setting.
        static public function SystemVoiceMessagingGroupGetVoicePortalMenusRequest14($getDefaultMenuKeys=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'getDefaultMenuKeys' => $getDefaultMenuKeys
                ]
            ];
        }

        # Modify the system level data associated with Voice Messaging.
        static public function SystemVoiceMessagingGroupModifyRequest16($realDeleteForImap=null,$useDnInMailBody=null,$useShortSubjectLine=null,$maxMessageLengthMinutes=null,$maxMailboxLengthMinutes=null,$doesMessageAge=null,$holdPeriodDays=null,$mailServerNetAddress=null,$mailServerProtocol=null,$defaultDeliveryFromAddress=null,$defaultNotificationFromAddress=null,$defaultVoicePortalLockoutFromAddress=null,$useOutgoingMWIOnSMDI=null,$mwiDelayInSeconds=null,$voicePortalScope=null,$networkWideMessaging=null,$useExternalRouting=null,$defaultExternalRoutingAddress=null,$vmOnlySystem=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'realDeleteForImap' => $realDeleteForImap,
                    'useDnInMailBody' => $useDnInMailBody,
                    'useShortSubjectLine' => $useShortSubjectLine,
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
                    'defaultExternalRoutingAddress' => $defaultExternalRoutingAddress,
                    'vmOnlySystem' => $vmOnlySystem
                ]
            ];
        }

        # Request to modify the system voice portal menus setting.
        static public function SystemVoiceMessagingGroupModifyVoicePortalMenusRequest($useVoicePortalCustomization=null,$voicePortalMainMenuKeys=null,$voiceMessagingMenuKeys=null,$changeBusyOrNoAnswerGreetingMenuKeys=null,$recordNewGreetingOrPersonalizedNameMenuKeys=null,$deleteAllMessagesMenuKeys=null,$commPilotExpressProfileMenuKeys=null,$personalizedNameMenuKeys=null,$callForwardingOptionsMenuKeys=null,$changeCallForwardingDestinationMenuKeys=null,$voicePortalCallingMenuKeys=null,$hotelingMenuKeys=null,$passcodeMenuKeys=null,$playMessagesMenuKeys=null,$playMessageMenuKeys=null,$additionalMessageOptionsMenuKeys=null,$forwardOrComposeMessageMenuKeys=null,$replyMessageMenuKeys=null,$sendToDistributionListMenuKeys=null,$selectDistributionListMenuKeys=null,$reviewSelectedDistributionListMenuKeys=null,$sendMessageToSelectedDistributionListMenuKeys=null,$sendToAllGroupMembersMenuKeys=null,$sendToPersonMenuKeys=null,$changeCurrentIntroductionOrMessageOrReplyMenuKeys=null,$voicePortalLoginMenuKeys=null,$faxMessagingMenuKeys=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'useVoicePortalCustomization' => $useVoicePortalCustomization,
                    'voicePortalMainMenuKeys' => $voicePortalMainMenuKeys,
                    'voiceMessagingMenuKeys' => $voiceMessagingMenuKeys,
                    'changeBusyOrNoAnswerGreetingMenuKeys' => $changeBusyOrNoAnswerGreetingMenuKeys,
                    'recordNewGreetingOrPersonalizedNameMenuKeys' => $recordNewGreetingOrPersonalizedNameMenuKeys,
                    'deleteAllMessagesMenuKeys' => $deleteAllMessagesMenuKeys,
                    'commPilotExpressProfileMenuKeys' => $commPilotExpressProfileMenuKeys,
                    'personalizedNameMenuKeys' => $personalizedNameMenuKeys,
                    'callForwardingOptionsMenuKeys' => $callForwardingOptionsMenuKeys,
                    'changeCallForwardingDestinationMenuKeys' => $changeCallForwardingDestinationMenuKeys,
                    'voicePortalCallingMenuKeys' => $voicePortalCallingMenuKeys,
                    'hotelingMenuKeys' => $hotelingMenuKeys,
                    'passcodeMenuKeys' => $passcodeMenuKeys,
                    'playMessagesMenuKeys' => $playMessagesMenuKeys,
                    'playMessageMenuKeys' => $playMessageMenuKeys,
                    'additionalMessageOptionsMenuKeys' => $additionalMessageOptionsMenuKeys,
                    'forwardOrComposeMessageMenuKeys' => $forwardOrComposeMessageMenuKeys,
                    'replyMessageMenuKeys' => $replyMessageMenuKeys,
                    'sendToDistributionListMenuKeys' => $sendToDistributionListMenuKeys,
                    'selectDistributionListMenuKeys' => $selectDistributionListMenuKeys,
                    'reviewSelectedDistributionListMenuKeys' => $reviewSelectedDistributionListMenuKeys,
                    'sendMessageToSelectedDistributionListMenuKeys' => $sendMessageToSelectedDistributionListMenuKeys,
                    'sendToAllGroupMembersMenuKeys' => $sendToAllGroupMembersMenuKeys,
                    'sendToPersonMenuKeys' => $sendToPersonMenuKeys,
                    'changeCurrentIntroductionOrMessageOrReplyMenuKeys' => $changeCurrentIntroductionOrMessageOrReplyMenuKeys,
                    'voicePortalLoginMenuKeys' => $voicePortalLoginMenuKeys,
                    'faxMessagingMenuKeys' => $faxMessagingMenuKeys
                ]
            ];
        }

        # Add one or more voice mail aliases to a users voice message.
        static public function UserVoiceMessagingUserAddAliasListRequest($userId=null,$phoneNumber=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId,
                    'phoneNumber' => $phoneNumber
                ]
            ];
        }

        # Delete one or more voice mail aliases from a users voice message.
        static public function UserVoiceMessagingUserDeleteAliasListRequest($userId=null,$phoneNumber=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId,
                    'phoneNumber' => $phoneNumber
                ]
            ];
        }

        # Get the user's voice messaging advanced voice management service setting.
        static public function UserVoiceMessagingUserGetAdvancedVoiceManagementRequest14sp3($userId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId
                ]
            ];
        }

        # Get the voice mail aliases for a users voice message.
        static public function UserVoiceMessagingUserGetAliasListRequest($userId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId
                ]
            ];
        }

        # Get a voice mail distribution list for a users voice message.
        static public function UserVoiceMessagingUserGetDistributionListRequest($userId=null,$listId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId,
                    'listId' => $listId
                ]
            ];
        }

        # Get the user's voice messaging greeting information.
        static public function UserVoiceMessagingUserGetGreetingRequest16($userId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId
                ]
            ];
        }

        # Get the user's voice messaging outgoing SMDI message waiting indicator service setting.
        static public function UserVoiceMessagingUserGetOutgoingSMDIMWIRequest($userId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId
                ]
            ];
        }

        # Get the user's voice messaging voice management service settings.
        static public function UserVoiceMessagingUserGetVoiceManagementRequest17($userId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId
                ]
            ];
        }

        # Get the user's voice messaging voice portal settings.
        static public function UserVoiceMessagingUserGetVoicePortalRequest16($userId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId
                ]
            ];
        }

        # Modify the user's voice messaging advanced voice management service setting.
        static public function UserVoiceMessagingUserModifyAdvancedVoiceManagementRequest($userId=null,$mailServerSelection=null,$groupMailServerEmailAddress=null,$groupMailServerUserId=null,$groupMailServerPassword=null,$personalMailServerNetAddress=null,$personalMailServerProtocol=null,$personalMailServerRealDeleteForImap=null,$personalMailServerEmailAddress=null,$personalMailServerUserId=null,$personalMailServerPassword=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId,
                    'mailServerSelection' => $mailServerSelection,
                    'groupMailServerEmailAddress' => $groupMailServerEmailAddress,
                    'groupMailServerUserId' => $groupMailServerUserId,
                    'groupMailServerPassword' => $groupMailServerPassword,
                    'personalMailServerNetAddress' => $personalMailServerNetAddress,
                    'personalMailServerProtocol' => $personalMailServerProtocol,
                    'personalMailServerRealDeleteForImap' => $personalMailServerRealDeleteForImap,
                    'personalMailServerEmailAddress' => $personalMailServerEmailAddress,
                    'personalMailServerUserId' => $personalMailServerUserId,
                    'personalMailServerPassword' => $personalMailServerPassword
                ]
            ];
        }

        # Modify a voice mail distribution list for a users voice message.
        static public function UserVoiceMessagingUserModifyDistributionListRequest($userId=null,$listId=null,$description=null,$phoneNumberList=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId,
                    'listId' => $listId,
                    'description' => $description,
                    'phoneNumberList' => $phoneNumberList
                ]
            ];
        }

        # Modify the user's voice messaging greeting.
        static public function UserVoiceMessagingUserModifyGreetingRequest16($userId=null,$busyAnnouncementSelection=null,$busyPersonalAudioFile=null,$busyPersonalVideoFile=null,$noAnswerAnnouncementSelection=null,$noAnswerPersonalAudioFile=null,$noAnswerPersonalVideoFile=null,$noAnswerAlternateGreeting01=null,$noAnswerAlternateGreeting02=null,$noAnswerAlternateGreeting03=null,$noAnswerNumberOfRings=null) {
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

        # Modify the user's voice messaging outgoing message waiting indicator service setting.
        static public function UserVoiceMessagingUserModifyOutgoingSMDIMWIRequest($userId=null,$isActive=null,$outgoingSMDIMWIPhoneNumberList=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId,
                    'isActive' => $isActive,
                    'outgoingSMDIMWIPhoneNumberList' => $outgoingSMDIMWIPhoneNumberList
                ]
            ];
        }

        # Modify the user's voice messaging voice management service setting.
        static public function UserVoiceMessagingUserModifyVoiceManagementRequest($userId=null,$isActive=null,$processing=null,$voiceMessageDeliveryEmailAddress=null,$usePhoneMessageWaitingIndicator=null,$sendVoiceMessageNotifyEmail=null,$voiceMessageNotifyEmailAddress=null,$sendCarbonCopyVoiceMessage=null,$voiceMessageCarbonCopyEmailAddress=null,$transferOnZeroToPhoneNumber=null,$transferPhoneNumber=null,$alwaysRedirectToVoiceMail=null,$busyRedirectToVoiceMail=null,$noAnswerRedirectToVoiceMail=null,$outOfPrimaryZoneRedirectToVoiceMail=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId,
                    'isActive' => $isActive,
                    'processing' => $processing,
                    'voiceMessageDeliveryEmailAddress' => $voiceMessageDeliveryEmailAddress,
                    'usePhoneMessageWaitingIndicator' => $usePhoneMessageWaitingIndicator,
                    'sendVoiceMessageNotifyEmail' => $sendVoiceMessageNotifyEmail,
                    'voiceMessageNotifyEmailAddress' => $voiceMessageNotifyEmailAddress,
                    'sendCarbonCopyVoiceMessage' => $sendCarbonCopyVoiceMessage,
                    'voiceMessageCarbonCopyEmailAddress' => $voiceMessageCarbonCopyEmailAddress,
                    'transferOnZeroToPhoneNumber' => $transferOnZeroToPhoneNumber,
                    'transferPhoneNumber' => $transferPhoneNumber,
                    'alwaysRedirectToVoiceMail' => $alwaysRedirectToVoiceMail,
                    'busyRedirectToVoiceMail' => $busyRedirectToVoiceMail,
                    'noAnswerRedirectToVoiceMail' => $noAnswerRedirectToVoiceMail,
                    'outOfPrimaryZoneRedirectToVoiceMail' => $outOfPrimaryZoneRedirectToVoiceMail
                ]
            ];
        }

        # Modify the user's voice messaging voice portal settings.
        static public function UserVoiceMessagingUserModifyVoicePortalRequest16($userId=null,$usePersonalizedName=null,$voicePortalAutoLogin=null,$personalizedNameAudioFile=null) {
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