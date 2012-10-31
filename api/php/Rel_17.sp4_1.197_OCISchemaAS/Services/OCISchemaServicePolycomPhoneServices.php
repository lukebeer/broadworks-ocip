<?php
class OCISchemaServicePolycomPhoneServices {
        # Request the group's Polycom Phone Services attributes.
        static public function GroupPolycomPhoneServicesGetRequest($serviceProviderId=null,$groupId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId
                ]
            ];
        }

        # Modify the group's Polycom Phone Services attributes.
        static public function GroupPolycomPhoneServicesModifyRequest($serviceProviderId=null,$groupId=null,$includeGroupCommonPhoneListInDirectory=null,$includeGroupCustomContactDirectoryInDirectory=null,$groupCustomContactDirectory=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId,
                    'includeGroupCommonPhoneListInDirectory' => $includeGroupCommonPhoneListInDirectory,
                    'includeGroupCustomContactDirectoryInDirectory' => $includeGroupCustomContactDirectoryInDirectory,
                    'groupCustomContactDirectory' => $groupCustomContactDirectory
                ]
            ];
        }

        # Request the user's Polycom Phone Services attributes.
        static public function UserPolycomPhoneServicesGetRequest($userId=null,$accessDevice=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId,
                    'accessDevice' => $accessDevice
                ]
            ];
        }

        # Modify the user's Polycom Phone Services attributes.
        static public function UserPolycomPhoneServicesModifyRequest($userId=null,$accessDevice=null,$integratePhoneDirectoryWithBroadWorks=null,$includeUserPersonalPhoneListInDirectory=null,$includeGroupCustomContactDirectoryInDirectory=null,$groupCustomContactDirectory=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId,
                    'accessDevice' => $accessDevice,
                    'integratePhoneDirectoryWithBroadWorks' => $integratePhoneDirectoryWithBroadWorks,
                    'includeUserPersonalPhoneListInDirectory' => $includeUserPersonalPhoneListInDirectory,
                    'includeGroupCustomContactDirectoryInDirectory' => $includeGroupCustomContactDirectoryInDirectory,
                    'groupCustomContactDirectory' => $groupCustomContactDirectory
                ]
            ];
        }

        # Request the user's list of device profiles on which the user is the primary user.
        static public function UserPolycomPhoneServicesGetPrimaryEndpointListRequest($userId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId
                ]
            ];
        }

}