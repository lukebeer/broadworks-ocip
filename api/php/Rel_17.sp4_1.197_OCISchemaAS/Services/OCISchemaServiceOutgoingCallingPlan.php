<?php
class OCISchemaServiceOutgoingCallingPlan {
        # Request the list of authorization codes for a group default and it's departments.
        static public function GroupOutgoingCallingPlanAuthorizationCodeGetListRequest($serviceProviderId=null,$groupId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId
                ]
            ];
        }

        # Request the Call Me Now call permissions for a group default and it's departments.
        static public function GroupOutgoingCallingPlanCallMeNowGetListRequest($serviceProviderId=null,$groupId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId
                ]
            ];
        }

        # Modify the Call Me Now call permissions for a group default and it's departments.
        static public function GroupOutgoingCallingPlanCallMeNowModifyListRequest($serviceProviderId=null,$groupId=null,$groupPermissions=null,$departmentPermissions=null) {
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

        # Add a list of authorization codes to the group's default or a department. When department is not
        static public function GroupOutgoingCallingPlanDepartmentAuthorizationCodeAddListRequest($serviceProviderId=null,$groupId=null,$departmentKey=null,$codeEntry=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId,
                    'departmentKey' => $departmentKey,
                    'codeEntry' => $codeEntry
                ]
            ];
        }

        # Delete a list of authorization codes from the group's default or a department. When department is not
        static public function GroupOutgoingCallingPlanDepartmentAuthorizationCodeDeleteListRequest($serviceProviderId=null,$groupId=null,$departmentKey=null,$code=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId,
                    'departmentKey' => $departmentKey,
                    'code' => $code
                ]
            ];
        }

        # Request the list of authorization codes for a group default or a department.  When department is not
        static public function GroupOutgoingCallingPlanDepartmentAuthorizationCodeGetListRequest($serviceProviderId=null,$groupId=null,$departmentKey=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId,
                    'departmentKey' => $departmentKey
                ]
            ];
        }

        # Request the Call Me Now call permissions for digit patterns for a group default and it's departments.
        static public function GroupOutgoingCallingPlanDigitPlanCallMeNowGetListRequest($serviceProviderId=null,$groupId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId
                ]
            ];
        }

        # Modify the Call Me Now call permissions for digit patterns for a group default and it's departments.
        static public function GroupOutgoingCallingPlanDigitPlanCallMeNowModifyListRequest($serviceProviderId=null,$groupId=null,$groupPermissions=null,$departmentPermissions=null) {
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

        # Request the originating permissions for digit patterns for a group default and it's departments.
        static public function GroupOutgoingCallingPlanDigitPlanOriginatingGetListRequest($serviceProviderId=null,$groupId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId
                ]
            ];
        }

        # Modify the originating permissions for digit patterns for a group default and it's departments.
        static public function GroupOutgoingCallingPlanDigitPlanOriginatingModifyListRequest($serviceProviderId=null,$groupId=null,$groupPermissions=null,$departmentPermissions=null) {
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

        # Request the redirecting permissions for digit patterns for a group default and it's departments.
        static public function GroupOutgoingCallingPlanDigitPlanRedirectingGetListRequest($serviceProviderId=null,$groupId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId
                ]
            ];
        }

        # Modify the redirecting permissions for digit patterns for a group default and it's departments.
        static public function GroupOutgoingCallingPlanDigitPlanRedirectingModifyListRequest($serviceProviderId=null,$groupId=null,$groupPermissions=null,$departmentPermissions=null) {
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

        # Request the originating permissions for a group default and it's departments.
        static public function GroupOutgoingCallingPlanOriginatingGetListRequest($serviceProviderId=null,$groupId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId
                ]
            ];
        }

        # Modify the originating permissions for a group default and it's departments.
        static public function GroupOutgoingCallingPlanOriginatingModifyListRequest($serviceProviderId=null,$groupId=null,$groupPermissions=null,$departmentPermissions=null) {
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

        # Add a new calling plan Pinhole digit string.
        static public function GroupOutgoingCallingPlanPinholeDigitPatternAddRequest($serviceProviderId=null,$groupId=null,$name=null,$digitPattern=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId,
                    'name' => $name,
                    'digitPattern' => $digitPattern
                ]
            ];
        }

        # Delete one or more calling plan Pinhole digit strings.
        static public function GroupOutgoingCallingPlanPinholeDigitPatternDeleteListRequest($serviceProviderId=null,$groupId=null,$name=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId,
                    'name' => $name
                ]
            ];
        }

        # Get the list of calling plan Pinhole digit strings for a group.
        static public function GroupOutgoingCallingPlanPinholeDigitPatternGetListRequest($serviceProviderId=null,$groupId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId
                ]
            ];
        }

        # Modify a calling plan Pinhole digit string. The name is a key; it cannot be changed.
        static public function GroupOutgoingCallingPlanPinholeDigitPatternModifyRequest($serviceProviderId=null,$groupId=null,$name=null,$digitPattern=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId,
                    'name' => $name,
                    'digitPattern' => $digitPattern
                ]
            ];
        }

        # Request the Call Me Now permissions for Pinhole digit patterns for a group default and its departments.
        static public function GroupOutgoingCallingPlanPinholeDigitPlanCallMeNowGetListRequest($serviceProviderId=null,$groupId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId
                ]
            ];
        }

        # Modify the Call Me Now permissions for Pinhole digit patterns for a group default and its departments.
        static public function GroupOutgoingCallingPlanPinholeDigitPlanCallMeNowModifyListRequest($serviceProviderId=null,$groupId=null,$groupPermissions=null,$departmentPermissions=null) {
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

        # Request the originating permissions for Pinhole digit patterns for a group default and its departments.
        static public function GroupOutgoingCallingPlanPinholeDigitPlanOriginatingGetListRequest($serviceProviderId=null,$groupId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId
                ]
            ];
        }

        # Modify the originating permissions for Pinhole digit patterns for a group default and its departments.
        static public function GroupOutgoingCallingPlanPinholeDigitPlanOriginatingModifyListRequest($serviceProviderId=null,$groupId=null,$groupPermissions=null,$departmentPermissions=null) {
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

        # Request the redirecting permissions for Pinhole digit patterns for a group default and its departments.
        static public function GroupOutgoingCallingPlanPinholeDigitPlanRedirectingGetListRequest($serviceProviderId=null,$groupId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId
                ]
            ];
        }

        # Modify the redirecting permissions for Pinhole digit patterns for a group default and its departments.
        static public function GroupOutgoingCallingPlanPinholeDigitPlanRedirectingModifyListRequest($serviceProviderId=null,$groupId=null,$groupPermissions=null,$departmentPermissions=null) {
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

        # Request the initiating call forwards/transfer permissions for a group default and it's departments.
        static public function GroupOutgoingCallingPlanRedirectingGetListRequest($serviceProviderId=null,$groupId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId
                ]
            ];
        }

        # Modify the initiating call forwards/transfer permissions for a group default and it's departments.
        static public function GroupOutgoingCallingPlanRedirectingModifyListRequest($serviceProviderId=null,$groupId=null,$groupPermissions=null,$departmentPermissions=null) {
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

        # Request the call forwarded/transferred permissions for a group default and it's departments.
        static public function GroupOutgoingCallingPlanRedirectedGetListRequest($serviceProviderId=null,$groupId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId
                ]
            ];
        }

        # Modify the call forwarded/transferred permissions for a group default and it's departments.
        static public function GroupOutgoingCallingPlanRedirectedModifyListRequest($serviceProviderId=null,$groupId=null,$groupPermissions=null,$departmentPermissions=null) {
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

        # Request the list of transfer numbers for a group default and it's departments.
        static public function GroupOutgoingCallingPlanTransferNumbersGetListRequest($serviceProviderId=null,$groupId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId
                ]
            ];
        }

        # Modify the list of transfer numbers for a group default and it's departments.
        static public function GroupOutgoingCallingPlanTransferNumbersModifyListRequest($serviceProviderId=null,$groupId=null,$groupNumbers=null,$departmentNumbers=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId,
                    'groupNumbers' => $groupNumbers,
                    'departmentNumbers' => $departmentNumbers
                ]
            ];
        }

        # Add a system outgoing calling plan call type mapping.
        static public function SystemOutgoingCallingPlanCallTypeAddMappingRequest($countryCode=null,$digitMap=null,$callType=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'countryCode' => $countryCode,
                    'digitMap' => $digitMap,
                    'callType' => $callType
                ]
            ];
        }

        # Delete a system outgoing calling plan call type mapping.
        static public function SystemOutgoingCallingPlanCallTypeDeleteMappingRequest($countryCode=null,$digitMap=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'countryCode' => $countryCode,
                    'digitMap' => $digitMap
                ]
            ];
        }

        # Request to get the list of call types of outgoing calling plan
        static public function SystemOutgoingCallingPlanCallTypeGetListRequest() {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => null
            ];
        }

        # Get a list of system outgoing calling plan call type mappings.
        static public function SystemOutgoingCallingPlanCallTypeGetMappingListRequest($countryCode=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'countryCode' => $countryCode
                ]
            ];
        }

        # Request the system level data associated with Outgoing Calling Plan.
        static public function SystemOutgoingCallingPlanGetRequest17sp3() {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => null
            ];
        }

        # Modify the system level data associated with Outgoing Calling Plan.
        static public function SystemOutgoingCallingPlanModifyRequest($directTransferScreening=null,$enableEnhancedTollCallTyping=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'directTransferScreening' => $directTransferScreening,
                    'enableEnhancedTollCallTyping' => $enableEnhancedTollCallTyping
                ]
            ];
        }

        # Add a list of authorization codes to a user.
        static public function UserOutgoingCallingPlanAuthorizationCodeAddListRequest($userId=null,$codeEntry=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId,
                    'codeEntry' => $codeEntry
                ]
            ];
        }

        # Delete a list of authorization codes from a user.
        static public function UserOutgoingCallingPlanAuthorizationCodeDeleteListRequest($userId=null,$code=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId,
                    'code' => $code
                ]
            ];
        }

        # Request the list of authorization codes for a user.
        static public function UserOutgoingCallingPlanAuthorizationCodeGetListRequest($userId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId
                ]
            ];
        }

        # Request the authorization code setting for a user.
        static public function UserOutgoingCallingPlanAuthorizationCodeGetRequest($userId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId
                ]
            ];
        }

        # Modify the authorization setting for a user.
        static public function UserOutgoingCallingPlanAuthorizationCodeModifyRequest($userId=null,$useCustomSettings=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId,
                    'useCustomSettings' => $useCustomSettings
                ]
            ];
        }

        # Request the Call Me Now call permissions for a user.
        static public function UserOutgoingCallingPlanCallMeNowGetRequest($userId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId
                ]
            ];
        }

        # Modify the Call Me Now call permissions for a user.
        static public function UserOutgoingCallingPlanCallMeNowModifyRequest($userId=null,$useCustomSettings=null,$userPermissions=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId,
                    'useCustomSettings' => $useCustomSettings,
                    'userPermissions' => $userPermissions
                ]
            ];
        }

        # Request the Call Me Now call permissions for digit patterns for a user.
        static public function UserOutgoingCallingPlanDigitPlanCallMeNowGetRequest($userId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId
                ]
            ];
        }

        # Modify the Call Me Now call permissions for digit patterns for a user.
        static public function UserOutgoingCallingPlanDigitPlanCallMeNowModifyRequest($userId=null,$useCustomSettings=null,$userPermissions=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId,
                    'useCustomSettings' => $useCustomSettings,
                    'userPermissions' => $userPermissions
                ]
            ];
        }

        # Request the originating permissions for digit patterns for a user.
        static public function UserOutgoingCallingPlanDigitPlanOriginatingGetRequest($userId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId
                ]
            ];
        }

        # Modify the originating permissions for digit patterns for a user.
        static public function UserOutgoingCallingPlanDigitPlanOriginatingModifyRequest($userId=null,$useCustomSettings=null,$userPermissions=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId,
                    'useCustomSettings' => $useCustomSettings,
                    'userPermissions' => $userPermissions
                ]
            ];
        }

        # Request the redirecting permissions for digit patterns for a user.
        static public function UserOutgoingCallingPlanDigitPlanRedirectingGetRequest($userId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId
                ]
            ];
        }

        # Modify the redirecting permissions for digit patterns for a user.
        static public function UserOutgoingCallingPlanDigitPlanRedirectingModifyRequest($userId=null,$useCustomSettings=null,$userPermissions=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId,
                    'useCustomSettings' => $useCustomSettings,
                    'userPermissions' => $userPermissions
                ]
            ];
        }

        # Request the originating permissions for a user.
        static public function UserOutgoingCallingPlanOriginatingGetRequest($userId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId
                ]
            ];
        }

        # Modify the originating permissions for a user.
        static public function UserOutgoingCallingPlanOriginatingModifyRequest($userId=null,$useCustomSettings=null,$userPermissions=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId,
                    'useCustomSettings' => $useCustomSettings,
                    'userPermissions' => $userPermissions
                ]
            ];
        }

        # Request the Call Me Now permissions for Pinhole digit patterns for a user.
        static public function UserOutgoingCallingPlanPinholeDigitPlanCallMeNowGetRequest($userId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId
                ]
            ];
        }

        # Modify the Call Me Now permissions for Pinhole digit patterns for a user.
        static public function UserOutgoingCallingPlanPinholeDigitPlanCallMeNowModifyRequest($userId=null,$useCustomSettings=null,$userPermissions=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId,
                    'useCustomSettings' => $useCustomSettings,
                    'userPermissions' => $userPermissions
                ]
            ];
        }

        # Request the originating permissions for Pinhole digit patterns for a user.
        static public function UserOutgoingCallingPlanPinholeDigitPlanOriginatingGetRequest($userId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId
                ]
            ];
        }

        # Modify the originating permissions for Pinhole digit patterns for a user.
        static public function UserOutgoingCallingPlanPinholeDigitPlanOriginatingModifyRequest($userId=null,$useCustomSettings=null,$userPermissions=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId,
                    'useCustomSettings' => $useCustomSettings,
                    'userPermissions' => $userPermissions
                ]
            ];
        }

        # Request the redirecting permissions for Pinhole digit patterns for a user.
        static public function UserOutgoingCallingPlanPinholeDigitPlanRedirectingGetRequest($userId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId
                ]
            ];
        }

        # Modify the redirecting permissions for Pinhole digit patterns for a user.
        static public function UserOutgoingCallingPlanPinholeDigitPlanRedirectingModifyRequest($userId=null,$useCustomSettings=null,$userPermissions=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId,
                    'useCustomSettings' => $useCustomSettings,
                    'userPermissions' => $userPermissions
                ]
            ];
        }

        # Request the initiating call forwards/transfer permissions for a user.
        static public function UserOutgoingCallingPlanRedirectingGetRequest($userId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId
                ]
            ];
        }

        # Modify the initiating call forwards/transfer permissions for a user.
        static public function UserOutgoingCallingPlanRedirectingModifyRequest($userId=null,$useCustomSettings=null,$userPermissions=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId,
                    'useCustomSettings' => $useCustomSettings,
                    'userPermissions' => $userPermissions
                ]
            ];
        }

        # Request the call forwarded/transferred permissions for a user.
        static public function UserOutgoingCallingPlanRedirectedGetRequest($userId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId
                ]
            ];
        }

        # Modify the call forwarded/transferred permissions for a user.
        static public function UserOutgoingCallingPlanRedirectedModifyRequest($userId=null,$useCustomSettings=null,$userPermissions=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId,
                    'useCustomSettings' => $useCustomSettings,
                    'userPermissions' => $userPermissions
                ]
            ];
        }

        # Request the sustained authorization code setting for a user.
        static public function UserOutgoingCallingPlanSustainedAuthorizationCodeGetRequest($userId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId
                ]
            ];
        }

        # Modify or clear the sustained authorization code for a user.
        static public function UserOutgoingCallingPlanSustainedAuthorizationCodeModifyRequest($userId=null,$code=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId,
                    'code' => $code
                ]
            ];
        }

        # Request the transfer numbers for a user.
        static public function UserOutgoingCallingPlanTransferNumbersGetRequest($userId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId
                ]
            ];
        }

        # Modify the transfer numbers for a user.
        static public function UserOutgoingCallingPlanTransferNumbersModifyRequest($userId=null,$useCustomSettings=null,$userNumbers=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId,
                    'useCustomSettings' => $useCustomSettings,
                    'userNumbers' => $userNumbers
                ]
            ];
        }

}