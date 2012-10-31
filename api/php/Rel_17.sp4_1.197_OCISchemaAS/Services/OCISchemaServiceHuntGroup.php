<?php
class OCISchemaServiceHuntGroup {
        # Add a Hunt Group instance to a group.
        static public function GroupHuntGroupAddInstanceRequest17sp4($serviceProviderId=null,$groupId=null,$serviceUserId=null,$serviceInstanceProfile=null,$policy=null,$huntAfterNoAnswer=null,$noAnswerNumberOfRings=null,$forwardAfterTimeout=null,$forwardTimeoutSeconds=null,$forwardToPhoneNumber=null,$agentUserId=null,$allowCallWaitingForAgents=null,$useSystemHuntGroupCLIDSetting=null,$includeHuntGroupNameInCLID=null,$enableNotReachableForwarding=null,$notReachableForwardToPhoneNumber=null,$makeBusyWhenNotReachable=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId,
                    'serviceUserId' => $serviceUserId,
                    'serviceInstanceProfile' => $serviceInstanceProfile,
                    'policy' => $policy,
                    'huntAfterNoAnswer' => $huntAfterNoAnswer,
                    'noAnswerNumberOfRings' => $noAnswerNumberOfRings,
                    'forwardAfterTimeout' => $forwardAfterTimeout,
                    'forwardTimeoutSeconds' => $forwardTimeoutSeconds,
                    'forwardToPhoneNumber' => $forwardToPhoneNumber,
                    'agentUserId' => $agentUserId,
                    'allowCallWaitingForAgents' => $allowCallWaitingForAgents,
                    'useSystemHuntGroupCLIDSetting' => $useSystemHuntGroupCLIDSetting,
                    'includeHuntGroupNameInCLID' => $includeHuntGroupNameInCLID,
                    'enableNotReachableForwarding' => $enableNotReachableForwarding,
                    'notReachableForwardToPhoneNumber' => $notReachableForwardToPhoneNumber,
                    'makeBusyWhenNotReachable' => $makeBusyWhenNotReachable
                ]
            ];
        }

        # Delete a Hunt Group instance from a group.
        static public function GroupHuntGroupDeleteInstanceRequest($serviceUserId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceUserId' => $serviceUserId
                ]
            ];
        }

        # Get a list of users that can be assigned to a Hunt Group group.
        static public function GroupHuntGroupGetAvailableUserListRequest($serviceProviderId=null,$groupId=null,$responseSizeLimit=null,$searchCriteriaUserLastName=null,$searchCriteriaUserFirstName=null,$searchCriteriaExactUserDepartment=null,$searchCriteriaExactUserGroup=null) {
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

        # Get a list of Hunt Group instances within a group.
        static public function GroupHuntGroupGetInstanceListRequest($serviceProviderId=null,$groupId=null,$groupDepartmentName=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId,
                    'groupDepartmentName' => $groupDepartmentName
                ]
            ];
        }

        # Request to get all the information of a Hunt Group instance.
        static public function GroupHuntGroupGetInstanceRequest17sp4($serviceUserId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceUserId' => $serviceUserId
                ]
            ];
        }

        # Request to set the active status of Hunt Group instances.
        static public function GroupHuntGroupModifyActiveInstanceListRequest($serviceActivation=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceActivation' => $serviceActivation
                ]
            ];
        }

        # Request to modify a Hunt Group instance.
        static public function GroupHuntGroupModifyInstanceRequest($serviceUserId=null,$serviceInstanceProfile=null,$policy=null,$huntAfterNoAnswer=null,$noAnswerNumberOfRings=null,$forwardAfterTimeout=null,$forwardTimeoutSeconds=null,$forwardToPhoneNumber=null,$agentUserIdList=null,$allowCallWaitingForAgents=null,$useSystemHuntGroupCLIDSetting=null,$includeHuntGroupNameInCLID=null,$enableNotReachableForwarding=null,$notReachableForwardToPhoneNumber=null,$makeBusyWhenNotReachable=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceUserId' => $serviceUserId,
                    'serviceInstanceProfile' => $serviceInstanceProfile,
                    'policy' => $policy,
                    'huntAfterNoAnswer' => $huntAfterNoAnswer,
                    'noAnswerNumberOfRings' => $noAnswerNumberOfRings,
                    'forwardAfterTimeout' => $forwardAfterTimeout,
                    'forwardTimeoutSeconds' => $forwardTimeoutSeconds,
                    'forwardToPhoneNumber' => $forwardToPhoneNumber,
                    'agentUserIdList' => $agentUserIdList,
                    'allowCallWaitingForAgents' => $allowCallWaitingForAgents,
                    'useSystemHuntGroupCLIDSetting' => $useSystemHuntGroupCLIDSetting,
                    'includeHuntGroupNameInCLID' => $includeHuntGroupNameInCLID,
                    'enableNotReachableForwarding' => $enableNotReachableForwarding,
                    'notReachableForwardToPhoneNumber' => $notReachableForwardToPhoneNumber,
                    'makeBusyWhenNotReachable' => $makeBusyWhenNotReachable
                ]
            ];
        }

        # Request to modify the weighted call distribution of a Hunt Group instance.
        static public function GroupHuntGroupModifyInstanceWeightedCallDistributionRequest($serviceUserId=null,$agentWeight=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceUserId' => $serviceUserId,
                    'agentWeight' => $agentWeight
                ]
            ];
        }

        # Request the system level data associated with Hunt Group.
        static public function SystemHuntGroupGetRequest17() {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => null
            ];
        }

        # Modify the system level data associated with Hunt Group.
        static public function SystemHuntGroupModifyRequest($anonymousInsteadOfPrivateCLID=null,$removeHuntGroupNameFromCLID=null,$uniformCallDistributionPolicyScope=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'anonymousInsteadOfPrivateCLID' => $anonymousInsteadOfPrivateCLID,
                    'removeHuntGroupNameFromCLID' => $removeHuntGroupNameFromCLID,
                    'uniformCallDistributionPolicyScope' => $uniformCallDistributionPolicyScope
                ]
            ];
        }

}