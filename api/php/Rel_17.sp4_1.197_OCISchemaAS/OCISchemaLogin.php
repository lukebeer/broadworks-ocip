<?php
class OCISchemaLogin {
        # AuthenticationRequest is 1st stage of the 2 stage OCI login process.
        static public function AuthenticationRequest($userId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId
                ]
            ];
        }

        # AuthenticationVerifyRequest14sp8 is used to authenticate a user either by userId/password or dn/passcode. 
        static public function AuthenticationVerifyRequest14sp8() {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => null
            ];
        }

        # AvailabilityTestRequest is for high-availability support. Response is either SuccessResponse
        static public function AvailabilityTestRequest() {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => null
            ];
        }

        # Get the address and credentials of the File Repository hosting the requested access device file. 
        static public function DeviceManagementFileAuthLocationGetRequest17($deviceAccessProtocol=null,$deviceAccessMethod=null,$deviceAccessURI=null,$accessDeviceUserName=null,$accessDeviceUserPassword=null,$signedPassword=null,$macAddress=null,$realmName=null,$digestHa1Complement=null,$digestResponse=null) {
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

        # Informs BroadWorks that a file was uploaded to the repository. The response is always a SuccessResponse.
        static public function DeviceManagementPutFileRequest($deviceAccessURI=null,$ipAddress=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'deviceAccessURI' => $deviceAccessURI,
                    'ipAddress' => $ipAddress
                ]
            ];
        }

        # This command is part of the Portal API.
        static public function ExternalAuthenticationAuthorizeTokenRequest($userId=null,$password=null,$loginToken=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId,
                    'password' => $password,
                    'loginToken' => $loginToken
                ]
            ];
        }

        # LoginRequest14sp4 is 2nd stage of the 2 stage OCI login process.
        static public function LoginRequest14sp4($userId=null,$signedPassword=null,$plainTextPassword=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId,
                    'signedPassword' => $signedPassword,
                    'plainTextPassword' => $plainTextPassword
                ]
            ];
        }

        # LogoutRequest is sent when an OCI user logs out or when connection is lost.
        static public function LogoutRequest($userId=null,$reason=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId,
                    'reason' => $reason
                ]
            ];
        }

        # Modify the password for a user/administrator.
        static public function PasswordModifyRequest($userId=null,$oldPassword=null,$newPassword=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId,
                    'oldPassword' => $oldPassword,
                    'newPassword' => $newPassword
                ]
            ];
        }

        # Requests information about the primary server for high-availability support.
        static public function PrimaryInfoGetRequest($isPrivate=null,$isAddressInfoRequested=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'isPrivate' => $isPrivate,
                    'isAddressInfoRequested' => $isAddressInfoRequested
                ]
            ];
        }

        # Get the public cluster fully qualified domain name (FQDN).
        static public function PublicClusterGetFullyQualifiedDomainNameRequest() {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => null
            ];
        }

        # Get the tutorial flag setting for a user or admin.
        static public function TutorialFlagGetRequest($userId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId
                ]
            ];
        }

        # Modify the tutorial flag setting for a user or admin.
        static public function TutorialFlagModifyRequest($userId=null,$enableTutorial=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId,
                    'enableTutorial' => $enableTutorial
                ]
            ];
        }

        # UserGetLoginInfoRequest is used to access login information for a user
        static public function UserGetLoginInfoRequest($userId=null, $phoneNumber=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId,
                    'phoneNumber' => $phoneNumber
                ]
            ];
        }

        # Query the provisioning server to verify the session is authorized. Most
        static public function VerifySessionIsValidRequest() {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => null
            ];
        }

}