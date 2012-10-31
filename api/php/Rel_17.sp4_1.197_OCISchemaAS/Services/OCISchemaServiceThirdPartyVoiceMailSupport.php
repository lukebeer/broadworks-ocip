<?php
class OCISchemaServiceThirdPartyVoiceMailSupport {
        # Request the user level data associated with Third-Party Voice Mail Support.
        static public function UserThirdPartyVoiceMailSupportGetRequest17($userId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId
                ]
            ];
        }

        # Modify the Third Party Voice Mail Support settings for a user.
        static public function UserThirdPartyVoiceMailSupportModifyRequest($userId=null,$isActive=null,$busyRedirectToVoiceMail=null,$noAnswerRedirectToVoiceMail=null,$serverSelection=null,$userServer=null,$mailboxIdType=null,$mailboxURL=null,$noAnswerNumberOfRings=null,$alwaysRedirectToVoiceMail=null,$outOfPrimaryZoneRedirectToVoiceMail=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId,
                    'isActive' => $isActive,
                    'busyRedirectToVoiceMail' => $busyRedirectToVoiceMail,
                    'noAnswerRedirectToVoiceMail' => $noAnswerRedirectToVoiceMail,
                    'serverSelection' => $serverSelection,
                    'userServer' => $userServer,
                    'mailboxIdType' => $mailboxIdType,
                    'mailboxURL' => $mailboxURL,
                    'noAnswerNumberOfRings' => $noAnswerNumberOfRings,
                    'alwaysRedirectToVoiceMail' => $alwaysRedirectToVoiceMail,
                    'outOfPrimaryZoneRedirectToVoiceMail' => $outOfPrimaryZoneRedirectToVoiceMail
                ]
            ];
        }

        # Request the group level data associated with Third-Party Voice Mail Support.
        static public function GroupThirdPartyVoiceMailSupportGetRequest($serviceProviderId=null,$groupId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId
                ]
            ];
        }

        # Modify the Third Party Voice Mail Support settings for a group.
        static public function GroupThirdPartyVoiceMailSupportModifyRequest($serviceProviderId=null,$groupId=null,$isActive=null,$groupServer=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId,
                    'isActive' => $isActive,
                    'groupServer' => $groupServer
                ]
            ];
        }

        # Request the system level data associated with Third-party Voice Mail Support.
        static public function SystemThirdPartyVoiceMailSupportGetRequest() {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => null
            ];
        }

        # Modify the system level data associated with Third-party Voice Mail Support.
        static public function SystemThirdPartyVoiceMailSupportModifyRequest($overrideAltCallerIdForVMRetrieval=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'overrideAltCallerIdForVMRetrieval' => $overrideAltCallerIdForVMRetrieval
                ]
            ];
        }

}