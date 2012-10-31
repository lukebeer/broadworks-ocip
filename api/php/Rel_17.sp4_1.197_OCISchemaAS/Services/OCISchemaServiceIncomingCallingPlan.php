<?php
class OCISchemaServiceIncomingCallingPlan {
        # Request the group's incoming calling plan settings.
        static public function GroupIncomingCallingPlanGetListRequest($serviceProviderId=null,$groupId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId
                ]
            ];
        }

        # Change the group's incoming calling plan settings.
        static public function GroupIncomingCallingPlanModifyListRequest($serviceProviderId=null,$groupId=null,$groupPermissions=null,$departmentPermissions=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId,
                    'groupPermissions' => $groupPermissions,
                    'departmentPermissions' => $departmentPermissions
                ]
            ];
        }

        # Request the user's incoming calling plan settings.
        static public function UserIncomingCallingPlanGetRequest($userId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId
                ]
            ];
        }

        # Change the user's incoming calling plan settings.
        static public function UserIncomingCallingPlanModifyRequest($userId=null,$useCustomSettings=null,$userPermissions=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId,
                    'useCustomSettings' => $useCustomSettings,
                    'userPermissions' => $userPermissions
                ]
            ];
        }

}