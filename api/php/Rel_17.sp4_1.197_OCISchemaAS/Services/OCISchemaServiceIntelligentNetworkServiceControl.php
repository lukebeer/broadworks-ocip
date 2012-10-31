<?php
class OCISchemaServiceIntelligentNetworkServiceControl {
        # Request the system level data associated with Intelligent Network Service Control.
        static public function SystemIntelligentNetworkServiceControlGetRequest14() {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => null
            ];
        }

        # Modify the system level data associated with Intelligent Network Service Control.
        static public function SystemIntelligentNetworkServiceControlModifyRequest($preAnswerActionTimeoutSeconds=null,$msgRejectNoVoiceMail=null,$msgRejectVoiceMail=null,$msgPreAnswerWait=null,$msgBusy=null,$msgRelease=null,$msgNoAnswer=null,$msgOCPReject=null,$msgForwardLoop=null,$msgTemporarilyUnavailable=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'preAnswerActionTimeoutSeconds' => $preAnswerActionTimeoutSeconds,
                    'msgRejectNoVoiceMail' => $msgRejectNoVoiceMail,
                    'msgRejectVoiceMail' => $msgRejectVoiceMail,
                    'msgPreAnswerWait' => $msgPreAnswerWait,
                    'msgBusy' => $msgBusy,
                    'msgRelease' => $msgRelease,
                    'msgNoAnswer' => $msgNoAnswer,
                    'msgOCPReject' => $msgOCPReject,
                    'msgForwardLoop' => $msgForwardLoop,
                    'msgTemporarilyUnavailable' => $msgTemporarilyUnavailable
                ]
            ];
        }

        # Request the user level data associated with Intelligent Network Service Control.
        static public function UserIntelligentNetworkServiceControlGetRequest($userId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId
                ]
            ];
        }

        # Modify the user level data associated with Intelligent Network Service Control.
        static public function UserIntelligentNetworkServiceControlModifyRequest($userId=null,$preAnswerActionsEnabled=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId,
                    'preAnswerActionsEnabled' => $preAnswerActionsEnabled
                ]
            ];
        }

}