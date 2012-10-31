<?php
class OCISchemaServiceGroupPaging {
        # Add a Group Paging instance to a group.
        static public function GroupGroupPagingAddInstanceRequest($serviceProviderId=null,$groupId=null,$serviceUserId=null,$serviceInstanceProfile=null,$confirmationToneTimeoutSeconds=null,$deliverOriginatorCLIDInstead=null,$originatorCLIDPrefix=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId,
                    'serviceUserId' => $serviceUserId,
                    'serviceInstanceProfile' => $serviceInstanceProfile,
                    'confirmationToneTimeoutSeconds' => $confirmationToneTimeoutSeconds,
                    'deliverOriginatorCLIDInstead' => $deliverOriginatorCLIDInstead,
                    'originatorCLIDPrefix' => $originatorCLIDPrefix
                ]
            ];
        }

        # Add originator(s) to a paging group.
        static public function GroupGroupPagingAddOriginatorListRequest($serviceUserId=null,$originatorUserId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceUserId' => $serviceUserId,
                    'originatorUserId' => $originatorUserId
                ]
            ];
        }

        # Add target(s) to a paging group.
        static public function GroupGroupPagingAddTargetListRequest($serviceUserId=null,$targetUserId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceUserId' => $serviceUserId,
                    'targetUserId' => $targetUserId
                ]
            ];
        }

        # Delete a Group Paging instance from a group.
        static public function GroupGroupPagingDeleteInstanceRequest($serviceUserId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceUserId' => $serviceUserId
                ]
            ];
        }

        # Delete originator(s) from a paging group.
        static public function GroupGroupPagingDeleteOriginatorListRequest($serviceUserId=null,$originatorUserId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceUserId' => $serviceUserId,
                    'originatorUserId' => $originatorUserId
                ]
            ];
        }

        # Delete target(s) from a paging group.
        static public function GroupGroupPagingDeleteTargetListRequest($serviceUserId=null,$targetUserId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceUserId' => $serviceUserId,
                    'targetUserId' => $targetUserId
                ]
            ];
        }

        # Get a list of users that can be assigned as originators to a given paging group.
        static public function GroupGroupPagingGetAvailableOriginatorListRequest($serviceProviderId=null,$groupId=null,$responseSizeLimit=null,$searchCriteriaUserLastName=null,$searchCriteriaUserFirstName=null,$searchCriteriaExactUserDepartment=null,$searchCriteriaExactUserGroup=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId,
                    'responseSizeLimit' => $responseSizeLimit,
                    'searchCriteriaUserLastName' => $searchCriteriaUserLastName,
                    'searchCriteriaUserFirstName' => $searchCriteriaUserFirstName,
                    'searchCriteriaExactUserDepartment' => $searchCriteriaExactUserDepartment,
                    'searchCriteriaExactUserGroup' => $searchCriteriaExactUserGroup
                ]
            ];
        }

        # Get a list of users that can be assigned as targets to a given paging group.
        static public function GroupGroupPagingGetAvailableTargetListRequest($serviceUserId=null,$responseSizeLimit=null,$searchCriteriaUserLastName=null,$searchCriteriaUserFirstName=null,$searchCriteriaExactUserDepartment=null,$searchCriteriaExactUserGroup=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceUserId' => $serviceUserId,
                    'responseSizeLimit' => $responseSizeLimit,
                    'searchCriteriaUserLastName' => $searchCriteriaUserLastName,
                    'searchCriteriaUserFirstName' => $searchCriteriaUserFirstName,
                    'searchCriteriaExactUserDepartment' => $searchCriteriaExactUserDepartment,
                    'searchCriteriaExactUserGroup' => $searchCriteriaExactUserGroup
                ]
            ];
        }

        # Get a list of Paging Groups instances within a group.
        static public function GroupGroupPagingGetInstanceListRequest($serviceProviderId=null,$groupId=null,$groupDepartmentName=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId,
                    'groupDepartmentName' => $groupDepartmentName
                ]
            ];
        }

        # Request to get all the information of a Group Paging instance.
        static public function GroupGroupPagingGetInstanceRequest17sp3($serviceUserId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceUserId' => $serviceUserId
                ]
            ];
        }

        # Get a list of originators assigned to a paging group.
        static public function GroupGroupPagingGetOriginatorListRequest($serviceUserId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceUserId' => $serviceUserId
                ]
            ];
        }

        # Get a list of targets assigned to a paging group.
        static public function GroupGroupPagingGetTargetListRequest($serviceUserId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceUserId' => $serviceUserId
                ]
            ];
        }

        # Request to set the active status of Group Paging instances.
        static public function GroupGroupPagingModifyActiveInstanceListRequest($serviceActivation=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceActivation' => $serviceActivation
                ]
            ];
        }

        # Request to modify a Group Paging instance.
        static public function GroupGroupPagingModifyInstanceRequest($serviceUserId=null,$serviceInstanceProfile=null,$confirmationToneTimeoutSeconds=null,$deliverOriginatorCLIDInstead=null,$originatorCLIDPrefix=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceUserId' => $serviceUserId,
                    'serviceInstanceProfile' => $serviceInstanceProfile,
                    'confirmationToneTimeoutSeconds' => $confirmationToneTimeoutSeconds,
                    'deliverOriginatorCLIDInstead' => $deliverOriginatorCLIDInstead,
                    'originatorCLIDPrefix' => $originatorCLIDPrefix
                ]
            ];
        }

        # Request to modify the originator list for a paging group.
        static public function GroupGroupPagingModifyOriginatorListRequest($serviceUserId=null,$originatorUserIdList=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceUserId' => $serviceUserId,
                    'originatorUserIdList' => $originatorUserIdList
                ]
            ];
        }

        # Request to modify the target list for a paging group.
        static public function GroupGroupPagingModifyTargetListRequest($serviceUserId=null,$targetUserIdList=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceUserId' => $serviceUserId,
                    'targetUserIdList' => $targetUserIdList
                ]
            ];
        }

        # Request the maximum number of target users per paging group configured for a group.
        static public function GroupGroupPagingTargetsCapacityGetRequest($serviceProviderId=null,$groupId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId
                ]
            ];
        }

        # Modify the maximum number of target users per paging group configured for a group.
        static public function GroupGroupPagingTargetsCapacityModifyRequest($serviceProviderId=null,$groupId=null,$maximumTargetUsers=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId,
                    'maximumTargetUsers' => $maximumTargetUsers
                ]
            ];
        }

        # Request the maximum number of target users per paging group configured for a service provider.
        static public function ServiceProviderGroupPagingTargetsCapacityGetRequest($serviceProviderId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId
                ]
            ];
        }

        # Modify the maximum number of target users per paging group configured for a service provider.
        static public function ServiceProviderGroupPagingTargetsCapacityModifyRequest($serviceProviderId=null,$maximumTargetUsers=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'maximumTargetUsers' => $maximumTargetUsers
                ]
            ];
        }

        # Get the list of all the Paging Groups a user was assigned as an originator.
        static public function UserGroupPagingGetListRequest($userId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId
                ]
            ];
        }

}