<?php
class OCISchemaUser {
    static public function UserGetListInGroupRequest($serviceProviderId=null, $GroupId=null) {
        return [
            OCIDataTypes::OCI_NAME   => __FUNCTION__,
            OCIDataTypes::OCI_PARAMS => [
                'serviceProviderId' => $serviceProviderId,
                'GroupId'           => $GroupId
            ]
        ];
    }
}