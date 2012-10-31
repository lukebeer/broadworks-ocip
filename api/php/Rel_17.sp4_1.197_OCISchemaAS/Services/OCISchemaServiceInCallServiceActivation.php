<?php
class OCISchemaServiceInCallServiceActivation {
        # Request the user level data associated with In-Call Service Activation.
        static public function UserInCallServiceActivationGetRequest($userId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId
                ]
            ];
        }

        # Modify the user level data associated with In-Call Service Activation.
        static public function UserInCallServiceActivationModifyRequest($userId=null,$isActive=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId,
                    'isActive' => $isActive
                ]
            ];
        }

        # Request the service provider's DTMF based in-call service activation trigger attributes.The response is either a ServiceProviderInCallServiceActivationGetResponse17 or an ErrorResponse.
        static public function ServiceProviderInCallServiceActivationGetRequest17($serviceProviderId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId
                ]
            ];
        }

        # Modifies the service provider's DTMF based in-call service activation trigger attributes.The response is either a SuccessResponse or an ErrorResponse.
        static public function ServiceProviderInCallServiceActivationModifyRequest17($serviceProviderId=null,$flashActivationDigits=null,$callTransferActivationDigits=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'flashActivationDigits' => $flashActivationDigits,
                    'callTransferActivationDigits' => $callTransferActivationDigits
                ]
            ];
        }

        # Request the system's DTMF based in-call service activation trigger attributes. The response is either a SystemInCallServiceActivationGetResponse17 or an ErrorResponse.
        static public function SystemInCallServiceActivationGetRequest17() {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => null
            ];
        }

        # Modifies the system's DTMF based in-call service activation trigger  attributes.The response is either a SuccessResponse or an ErrorResponse.
        static public function SystemInCallServiceActivationModifyRequest17($defaultFlashActivationDigits=null,$defaultCallTransferActivationDigits=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'defaultFlashActivationDigits' => $defaultFlashActivationDigits,
                    'defaultCallTransferActivationDigits' => $defaultCallTransferActivationDigits
                ]
            ];
        }

}