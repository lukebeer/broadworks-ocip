<?php
class OCISchemaServiceCommunicationBarringUserControl {
        # Gets the Communication Barring system level settings.
        static public function SystemCommunicationBarringUserControlGetRequest() {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => null
            ];
        }

        # Modifies the system's Communication Barring User-Control settings.
        static public function SystemCommunicationBarringUserControlModifyRequest($enableLockout=null,$maxNumberOfFailedAttempts=null,$lockoutMinutes=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'enableLockout' => $enableLockout,
                    'maxNumberOfFailedAttempts' => $maxNumberOfFailedAttempts,
                    'lockoutMinutes' => $lockoutMinutes
                ]
            ];
        }

        # Lists the Communication Barring profiles available to a user and
        static public function UserCommunicationBarringUserControlGetRequest($userId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId
                ]
            ];
        }

        # Enabling a profile automatically disables the currently active profile.
        static public function UserCommunicationBarringUserControlModifyRequest($userId=null,$enableProfile=null,$oldPasscode=null,$newPasscode=null,$resetLockout=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId,
                    'enableProfile' => $enableProfile,
                    'oldPasscode' => $oldPasscode,
                    'newPasscode' => $newPasscode,
                    'resetLockout' => $resetLockout
                ]
            ];
        }

}