<?php
class OCISchemaLogin {
    static public function AuthenticationRequest($userId=null) {
        return [
            OCIDataTypes::OCI_NAME   => __FUNCTION__,
            OCIDataTypes::OCI_PARAMS => ['userId' => $userId]
        ];
    }

    static public function LoginRequest14sp4($userId=null, $signedPassword=null) {
        return [
            OCIDataTypes::OCI_NAME   => __FUNCTION__,
            OCIDataTypes::OCI_PARAMS => [
                'userId'         => $userId,
                'signedPassword' => $signedPassword
            ]
        ];
    }
}