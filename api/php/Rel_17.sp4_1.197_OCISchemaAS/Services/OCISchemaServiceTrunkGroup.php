<?php
class OCISchemaServiceTrunkGroup {
        # Request to add an enterprise trunk in an enterprise.
        static public function EnterpriseEnterpriseTrunkAddRequest($serviceProviderId=null,$enterpriseTrunkName=null,$maximumRerouteAttempts=null,$routeExhaustionAction=null,$routeExhaustionForwardAddress=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'enterpriseTrunkName' => $enterpriseTrunkName,
                    'maximumRerouteAttempts' => $maximumRerouteAttempts,
                    'routeExhaustionAction' => $routeExhaustionAction,
                    'routeExhaustionForwardAddress' => $routeExhaustionForwardAddress
                ]
            ];
        }

        # Request to add users to an enterprise trunk in an enterprise.
        static public function EnterpriseEnterpriseTrunkAddUserListRequest($serviceProviderId=null,$enterpriseTrunkName=null,$userId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'enterpriseTrunkName' => $enterpriseTrunkName,
                    'userId' => $userId
                ]
            ];
        }

        # Request to delete an enterprise trunk in an enterprise.
        static public function EnterpriseEnterpriseTrunkDeleteRequest($serviceProviderId=null,$enterpriseTrunkName=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'enterpriseTrunkName' => $enterpriseTrunkName
                ]
            ];
        }

        # Request to delete users from an enterprise trunk in an enterprise.
        static public function EnterpriseEnterpriseTrunkDeleteUserListRequest($serviceProviderId=null,$enterpriseTrunkName=null,$userId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'enterpriseTrunkName' => $enterpriseTrunkName,
                    'userId' => $userId
                ]
            ];
        }

        # Request to get the list of all available trunk groups defined in an enterprise.  It is possible to search by various criteria to restrict the number of rows returned.
        static public function EnterpriseEnterpriseTrunkGetAvailableTrunkGroupListRequest($serviceProviderId=null,$responseSizeLimit=null,$searchCriteriaTrunkGroupName=null,$searchCriteriaGroupId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'responseSizeLimit' => $responseSizeLimit,
                    'searchCriteriaTrunkGroupName' => $searchCriteriaTrunkGroupName,
                    'searchCriteriaGroupId' => $searchCriteriaGroupId
                ]
            ];
        }

        # Request the list of users that are available to be added to an enterprise trunk.  This list contains users in the enterprise that are trunk users and not already assigned to an enterprise trunk.
        static public function EnterpriseEnterpriseTrunkGetAvailableUserListRequest($serviceProviderId=null,$responseSizeLimit=null,$searchCriteriaUserLastName=null,$searchCriteriaUserFirstName=null,$searchCriteriaDn=null,$searchCriteriaUserId=null,$searchCriteriaGroupId=null,$searchCriteriaAlternateTrunkIdentity=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'responseSizeLimit' => $responseSizeLimit,
                    'searchCriteriaUserLastName' => $searchCriteriaUserLastName,
                    'searchCriteriaUserFirstName' => $searchCriteriaUserFirstName,
                    'searchCriteriaDn' => $searchCriteriaDn,
                    'searchCriteriaUserId' => $searchCriteriaUserId,
                    'searchCriteriaGroupId' => $searchCriteriaGroupId,
                    'searchCriteriaAlternateTrunkIdentity' => $searchCriteriaAlternateTrunkIdentity
                ]
            ];
        }

        # Request to get the list of all enterprise trunks defined in an enterprise.
        static public function EnterpriseEnterpriseTrunkGetListRequest($serviceProviderId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId
                ]
            ];
        }

        # Request to get an enterprise trunk
        static public function EnterpriseEnterpriseTrunkGetRequest($serviceProviderId=null,$enterpriseTrunkName=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'enterpriseTrunkName' => $enterpriseTrunkName
                ]
            ];
        }

        # Request the list of users in an enterprise trunk.
        static public function EnterpriseEnterpriseTrunkGetUserListRequest($serviceProviderId=null,$enterpriseTrunkName=null,$responseSizeLimit=null,$searchCriteriaUserLastName=null,$searchCriteriaUserFirstName=null,$searchCriteriaDn=null,$searchCriteriaUserId=null,$searchCriteriaGroupId=null,$searchCriteriaAlternateTrunkIdentity=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'enterpriseTrunkName' => $enterpriseTrunkName,
                    'responseSizeLimit' => $responseSizeLimit,
                    'searchCriteriaUserLastName' => $searchCriteriaUserLastName,
                    'searchCriteriaUserFirstName' => $searchCriteriaUserFirstName,
                    'searchCriteriaDn' => $searchCriteriaDn,
                    'searchCriteriaUserId' => $searchCriteriaUserId,
                    'searchCriteriaGroupId' => $searchCriteriaGroupId,
                    'searchCriteriaAlternateTrunkIdentity' => $searchCriteriaAlternateTrunkIdentity
                ]
            ];
        }

        # Request to modify an enterprise trunk in an enterprise.
        static public function EnterpriseEnterpriseTrunkModifyRequest($serviceProviderId=null,$enterpriseTrunkName=null,$newEnterpriseTrunkName=null,$maximumRerouteAttempts=null,$routeExhaustionAction=null,$routeExhaustionForwardAddress=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'enterpriseTrunkName' => $enterpriseTrunkName,
                    'newEnterpriseTrunkName' => $newEnterpriseTrunkName,
                    'maximumRerouteAttempts' => $maximumRerouteAttempts,
                    'routeExhaustionAction' => $routeExhaustionAction,
                    'routeExhaustionForwardAddress' => $routeExhaustionForwardAddress
                ]
            ];
        }

        # Request to add an enterprise trunk in a group.
        static public function GroupEnterpriseTrunkAddRequest($serviceProviderId=null,$groupId=null,$enterpriseTrunkName=null,$maximumRerouteAttempts=null,$routeExhaustionAction=null,$routeExhaustionForwardAddress=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId,
                    'enterpriseTrunkName' => $enterpriseTrunkName,
                    'maximumRerouteAttempts' => $maximumRerouteAttempts,
                    'routeExhaustionAction' => $routeExhaustionAction,
                    'routeExhaustionForwardAddress' => $routeExhaustionForwardAddress
                ]
            ];
        }

        # Request to add users to an enterprise trunk in a group.
        static public function GroupEnterpriseTrunkAddUserListRequest($serviceProviderId=null,$groupId=null,$enterpriseTrunkName=null,$userId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId,
                    'enterpriseTrunkName' => $enterpriseTrunkName,
                    'userId' => $userId
                ]
            ];
        }

        # Request to delete an enterprise trunk in a group.
        static public function GroupEnterpriseTrunkDeleteRequest($serviceProviderId=null,$groupId=null,$enterpriseTrunkName=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId,
                    'enterpriseTrunkName' => $enterpriseTrunkName
                ]
            ];
        }

        # Request to delete users from an enterprise trunk in a group.
        static public function GroupEnterpriseTrunkDeleteUserListRequest($serviceProviderId=null,$groupId=null,$enterpriseTrunkName=null,$userId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId,
                    'enterpriseTrunkName' => $enterpriseTrunkName,
                    'userId' => $userId
                ]
            ];
        }

        # Request to get the list of all available trunk groups defined in a group.
        static public function GroupEnterpriseTrunkGetAvailableTrunkGroupListRequest($serviceProviderId=null,$groupId=null,$responseSizeLimit=null,$searchCriteriaTrunkGroupName=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId,
                    'responseSizeLimit' => $responseSizeLimit,
                    'searchCriteriaTrunkGroupName' => $searchCriteriaTrunkGroupName
                ]
            ];
        }

        # Request the list of users that are available to be added to an enterprise trunk.  This list contains users in the group that are trunk users and not already assigned to an enterprise trunk.
        static public function GroupEnterpriseTrunkGetAvailableUserListRequest($serviceProviderId=null,$groupId=null,$responseSizeLimit=null,$searchCriteriaUserLastName=null,$searchCriteriaUserFirstName=null,$searchCriteriaDn=null,$searchCriteriaUserId=null,$searchCriteriaAlternateTrunkIdentity=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId,
                    'responseSizeLimit' => $responseSizeLimit,
                    'searchCriteriaUserLastName' => $searchCriteriaUserLastName,
                    'searchCriteriaUserFirstName' => $searchCriteriaUserFirstName,
                    'searchCriteriaDn' => $searchCriteriaDn,
                    'searchCriteriaUserId' => $searchCriteriaUserId,
                    'searchCriteriaAlternateTrunkIdentity' => $searchCriteriaAlternateTrunkIdentity
                ]
            ];
        }

        # Request to get the list of all enterprise trunks defined in a group.
        static public function GroupEnterpriseTrunkGetListRequest($serviceProviderId=null,$groupId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId
                ]
            ];
        }

        # Request to get an enterprise trunk
        static public function GroupEnterpriseTrunkGetRequest($serviceProviderId=null,$groupId=null,$enterpriseTrunkName=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId,
                    'enterpriseTrunkName' => $enterpriseTrunkName
                ]
            ];
        }

        # Request the list of users in an enterprise trunk.
        static public function GroupEnterpriseTrunkGetUserListRequest($serviceProviderId=null,$groupId=null,$enterpriseTrunkName=null,$responseSizeLimit=null,$searchCriteriaUserLastName=null,$searchCriteriaUserFirstName=null,$searchCriteriaDn=null,$searchCriteriaUserId=null,$searchCriteriaGroupId=null,$searchCriteriaAlternateTrunkIdentity=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId,
                    'enterpriseTrunkName' => $enterpriseTrunkName,
                    'responseSizeLimit' => $responseSizeLimit,
                    'searchCriteriaUserLastName' => $searchCriteriaUserLastName,
                    'searchCriteriaUserFirstName' => $searchCriteriaUserFirstName,
                    'searchCriteriaDn' => $searchCriteriaDn,
                    'searchCriteriaUserId' => $searchCriteriaUserId,
                    'searchCriteriaGroupId' => $searchCriteriaGroupId,
                    'searchCriteriaAlternateTrunkIdentity' => $searchCriteriaAlternateTrunkIdentity
                ]
            ];
        }

        # Request to modify an enterprise trunk in a group.
        static public function GroupEnterpriseTrunkModifyRequest($serviceProviderId=null,$groupId=null,$enterpriseTrunkName=null,$newEnterpriseTrunkName=null,$maximumRerouteAttempts=null,$routeExhaustionAction=null,$routeExhaustionForwardAddress=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId,
                    'enterpriseTrunkName' => $enterpriseTrunkName,
                    'newEnterpriseTrunkName' => $newEnterpriseTrunkName,
                    'maximumRerouteAttempts' => $maximumRerouteAttempts,
                    'routeExhaustionAction' => $routeExhaustionAction,
                    'routeExhaustionForwardAddress' => $routeExhaustionForwardAddress
                ]
            ];
        }

        # Add a Trunk Group instance to a group.
        static public function GroupTrunkGroupAddInstanceRequest17sp4($serviceProviderId=null,$groupId=null,$name=null,$pilotUser=null,$department=null,$accessDevice=null,$maxActiveCalls=null,$maxIncomingCalls=null,$maxOutgoingCalls=null,$enableBursting=null,$burstingMaxActiveCalls=null,$burstingMaxIncomingCalls=null,$burstingMaxOutgoingCalls=null,$capacityExceededAction=null,$capacityExceededForwardAddress=null,$capacityExceededRerouteTrunkGroupKey=null,$capacityExceededTrapInitialCalls=null,$capacityExceededTrapOffsetCalls=null,$unreachableDestinationAction=null,$unreachableDestinationForwardAddress=null,$unreachableDestinationRerouteTrunkGroupKey=null,$invitationTimeout=null,$requireAuthentication=null,$sipAuthenticationUserName=null,$sipAuthenticationPassword=null,$hostedUserId=null,$trunkGroupIdentity=null,$otgDtgIdentity=null,$allowTerminationToTrunkGroupIdentity=null,$allowTerminationToDtgIdentity=null,$includeTrunkGroupIdentity=null,$includeDtgIdentity=null,$includeTrunkGroupIdentityForNetworkCalls=null,$includeOtgIdentityForNetworkCalls=null,$enableNetworkAddressIdentity=null,$allowUnscreenedCalls=null,$allowUnscreenedEmergencyCalls=null,$pilotUserCallingLineIdentityPolicy=null,$pilotUserChargeNumberPolicy=null,$callForwardingAlwaysAction=null,$callForwardingAlwaysForwardAddress=null,$callForwardingAlwaysRerouteTrunkGroupKey=null,$peeringDomain=null,$routeToPeeringDomain=null,$prefixEnabled=null,$prefix=null,$statefulReroutingEnabled=null,$sendContinuousOptionsMessage=null,$continuousOptionsSendingIntervalSeconds=null,$failureOptionsSendingIntervalSeconds=null,$failureThresholdCounter=null,$successThresholdCounter=null,$inviteFailureThresholdCounter=null,$inviteFailureThresholdWindowSeconds=null,$pilotUserCallingLineAssertedIdentityPolicy=null,$useSystemCallingLineAssertedIdentityPolicy=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId,
                    'name' => $name,
                    'pilotUser' => $pilotUser,
                    'department' => $department,
                    'accessDevice' => $accessDevice,
                    'maxActiveCalls' => $maxActiveCalls,
                    'maxIncomingCalls' => $maxIncomingCalls,
                    'maxOutgoingCalls' => $maxOutgoingCalls,
                    'enableBursting' => $enableBursting,
                    'burstingMaxActiveCalls' => $burstingMaxActiveCalls,
                    'burstingMaxIncomingCalls' => $burstingMaxIncomingCalls,
                    'burstingMaxOutgoingCalls' => $burstingMaxOutgoingCalls,
                    'capacityExceededAction' => $capacityExceededAction,
                    'capacityExceededForwardAddress' => $capacityExceededForwardAddress,
                    'capacityExceededRerouteTrunkGroupKey' => $capacityExceededRerouteTrunkGroupKey,
                    'capacityExceededTrapInitialCalls' => $capacityExceededTrapInitialCalls,
                    'capacityExceededTrapOffsetCalls' => $capacityExceededTrapOffsetCalls,
                    'unreachableDestinationAction' => $unreachableDestinationAction,
                    'unreachableDestinationForwardAddress' => $unreachableDestinationForwardAddress,
                    'unreachableDestinationRerouteTrunkGroupKey' => $unreachableDestinationRerouteTrunkGroupKey,
                    'invitationTimeout' => $invitationTimeout,
                    'requireAuthentication' => $requireAuthentication,
                    'sipAuthenticationUserName' => $sipAuthenticationUserName,
                    'sipAuthenticationPassword' => $sipAuthenticationPassword,
                    'hostedUserId' => $hostedUserId,
                    'trunkGroupIdentity' => $trunkGroupIdentity,
                    'otgDtgIdentity' => $otgDtgIdentity,
                    'allowTerminationToTrunkGroupIdentity' => $allowTerminationToTrunkGroupIdentity,
                    'allowTerminationToDtgIdentity' => $allowTerminationToDtgIdentity,
                    'includeTrunkGroupIdentity' => $includeTrunkGroupIdentity,
                    'includeDtgIdentity' => $includeDtgIdentity,
                    'includeTrunkGroupIdentityForNetworkCalls' => $includeTrunkGroupIdentityForNetworkCalls,
                    'includeOtgIdentityForNetworkCalls' => $includeOtgIdentityForNetworkCalls,
                    'enableNetworkAddressIdentity' => $enableNetworkAddressIdentity,
                    'allowUnscreenedCalls' => $allowUnscreenedCalls,
                    'allowUnscreenedEmergencyCalls' => $allowUnscreenedEmergencyCalls,
                    'pilotUserCallingLineIdentityPolicy' => $pilotUserCallingLineIdentityPolicy,
                    'pilotUserChargeNumberPolicy' => $pilotUserChargeNumberPolicy,
                    'callForwardingAlwaysAction' => $callForwardingAlwaysAction,
                    'callForwardingAlwaysForwardAddress' => $callForwardingAlwaysForwardAddress,
                    'callForwardingAlwaysRerouteTrunkGroupKey' => $callForwardingAlwaysRerouteTrunkGroupKey,
                    'peeringDomain' => $peeringDomain,
                    'routeToPeeringDomain' => $routeToPeeringDomain,
                    'prefixEnabled' => $prefixEnabled,
                    'prefix' => $prefix,
                    'statefulReroutingEnabled' => $statefulReroutingEnabled,
                    'sendContinuousOptionsMessage' => $sendContinuousOptionsMessage,
                    'continuousOptionsSendingIntervalSeconds' => $continuousOptionsSendingIntervalSeconds,
                    'failureOptionsSendingIntervalSeconds' => $failureOptionsSendingIntervalSeconds,
                    'failureThresholdCounter' => $failureThresholdCounter,
                    'successThresholdCounter' => $successThresholdCounter,
                    'inviteFailureThresholdCounter' => $inviteFailureThresholdCounter,
                    'inviteFailureThresholdWindowSeconds' => $inviteFailureThresholdWindowSeconds,
                    'pilotUserCallingLineAssertedIdentityPolicy' => $pilotUserCallingLineAssertedIdentityPolicy,
                    'useSystemCallingLineAssertedIdentityPolicy' => $useSystemCallingLineAssertedIdentityPolicy
                ]
            ];
        }

        # Delete a Trunk Group Instance from a group.
        static public function GroupTrunkGroupDeleteInstanceRequest14sp4($trunkGroupKey=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'trunkGroupKey' => $trunkGroupKey
                ]
            ];
        }

        # Get a list of Trunk Groups for the group or enterprise.
        static public function GroupTrunkGroupGetInstanceListRequest14sp4($serviceProviderId=null,$groupId=null,$onlyTrunkGroupsWithDevice=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId,
                    'onlyTrunkGroupsWithDevice' => $onlyTrunkGroupsWithDevice
                ]
            ];
        }

        # Get a Trunk Group Instance's profile.
        static public function GroupTrunkGroupGetInstanceRequest17sp4($trunkGroupKey=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'trunkGroupKey' => $trunkGroupKey
                ]
            ];
        }

        # Get a list of hosted users that can be assigned to a Trunk Group.
        static public function GroupTrunkGroupGetAvailableHostedUserListRequest($trunkGroupKey=null,$responseSizeLimit=null,$searchCriteriaUserLastName=null,$searchCriteriaUserFirstName=null,$searchCriteriaExactUserDepartment=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'trunkGroupKey' => $trunkGroupKey,
                    'responseSizeLimit' => $responseSizeLimit,
                    'searchCriteriaUserLastName' => $searchCriteriaUserLastName,
                    'searchCriteriaUserFirstName' => $searchCriteriaUserFirstName,
                    'searchCriteriaExactUserDepartment' => $searchCriteriaExactUserDepartment
                ]
            ];
        }

        # Get a list of user's on a Trunk Group Instance.
        static public function GroupTrunkGroupGetInstanceUserListRequest14sp4($trunkGroupKey=null,$responseSizeLimit=null,$searchCriteriaUserLastName=null,$searchCriteriaUserFirstName=null,$searchCriteriaDn=null,$searchCriteriaExactUserDepartment=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'trunkGroupKey' => $trunkGroupKey,
                    'responseSizeLimit' => $responseSizeLimit,
                    'searchCriteriaUserLastName' => $searchCriteriaUserLastName,
                    'searchCriteriaUserFirstName' => $searchCriteriaUserFirstName,
                    'searchCriteriaDn' => $searchCriteriaDn,
                    'searchCriteriaExactUserDepartment' => $searchCriteriaExactUserDepartment
                ]
            ];
        }

        # Get the maximum and bursting maximum permissible active trunk group calls for the group.
        static public function GroupTrunkGroupGetRequest14sp9($serviceProviderId=null,$groupId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId
                ]
            ];
        }

        # Modify a Trunk Group Instance in a group.
        static public function GroupTrunkGroupModifyInstanceRequest15($trunkGroupKey=null,$newName=null,$pilotUserId=null,$department=null,$accessDevice=null,$maxActiveCalls=null,$maxIncomingCalls=null,$maxOutgoingCalls=null,$enableBursting=null,$burstingMaxActiveCalls=null,$burstingMaxIncomingCalls=null,$burstingMaxOutgoingCalls=null,$capacityExceededAction=null,$capacityExceededForwardAddress=null,$capacityExceededRerouteTrunkGroupKey=null,$capacityExceededTrapInitialCalls=null,$capacityExceededTrapOffsetCalls=null,$unreachableDestinationAction=null,$unreachableDestinationForwardAddress=null,$unreachableDestinationRerouteTrunkGroupKey=null,$invitationTimeout=null,$requireAuthentication=null,$sipAuthenticationUserName=null,$sipAuthenticationPassword=null,$hostedUserIdList=null,$trunkGroupIdentity=null,$otgDtgIdentity=null,$allowTerminationToTrunkGroupIdentity=null,$allowTerminationToDtgIdentity=null,$includeTrunkGroupIdentity=null,$includeDtgIdentity=null,$includeTrunkGroupIdentityForNetworkCalls=null,$includeOtgIdentityForNetworkCalls=null,$enableNetworkAddressIdentity=null,$allowUnscreenedCalls=null,$allowUnscreenedEmergencyCalls=null,$pilotUserCallingLineIdentityPolicy=null,$pilotUserChargeNumberPolicy=null,$callForwardingAlwaysAction=null,$callForwardingAlwaysForwardAddress=null,$callForwardingAlwaysRerouteTrunkGroupKey=null,$peeringDomain=null,$routeToPeeringDomain=null,$prefixEnabled=null,$prefix=null,$statefulReroutingEnabled=null,$sendContinuousOptionsMessage=null,$continuousOptionsSendingIntervalSeconds=null,$failureOptionsSendingIntervalSeconds=null,$failureThresholdCounter=null,$successThresholdCounter=null,$inviteFailureThresholdCounter=null,$inviteFailureThresholdWindowSeconds=null,$pilotUserCallingLineAssertedIdentityPolicy=null,$useSystemCallingLineAssertedIdentityPolicy=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'trunkGroupKey' => $trunkGroupKey,
                    'newName' => $newName,
                    'pilotUserId' => $pilotUserId,
                    'department' => $department,
                    'accessDevice' => $accessDevice,
                    'maxActiveCalls' => $maxActiveCalls,
                    'maxIncomingCalls' => $maxIncomingCalls,
                    'maxOutgoingCalls' => $maxOutgoingCalls,
                    'enableBursting' => $enableBursting,
                    'burstingMaxActiveCalls' => $burstingMaxActiveCalls,
                    'burstingMaxIncomingCalls' => $burstingMaxIncomingCalls,
                    'burstingMaxOutgoingCalls' => $burstingMaxOutgoingCalls,
                    'capacityExceededAction' => $capacityExceededAction,
                    'capacityExceededForwardAddress' => $capacityExceededForwardAddress,
                    'capacityExceededRerouteTrunkGroupKey' => $capacityExceededRerouteTrunkGroupKey,
                    'capacityExceededTrapInitialCalls' => $capacityExceededTrapInitialCalls,
                    'capacityExceededTrapOffsetCalls' => $capacityExceededTrapOffsetCalls,
                    'unreachableDestinationAction' => $unreachableDestinationAction,
                    'unreachableDestinationForwardAddress' => $unreachableDestinationForwardAddress,
                    'unreachableDestinationRerouteTrunkGroupKey' => $unreachableDestinationRerouteTrunkGroupKey,
                    'invitationTimeout' => $invitationTimeout,
                    'requireAuthentication' => $requireAuthentication,
                    'sipAuthenticationUserName' => $sipAuthenticationUserName,
                    'sipAuthenticationPassword' => $sipAuthenticationPassword,
                    'hostedUserIdList' => $hostedUserIdList,
                    'trunkGroupIdentity' => $trunkGroupIdentity,
                    'otgDtgIdentity' => $otgDtgIdentity,
                    'allowTerminationToTrunkGroupIdentity' => $allowTerminationToTrunkGroupIdentity,
                    'allowTerminationToDtgIdentity' => $allowTerminationToDtgIdentity,
                    'includeTrunkGroupIdentity' => $includeTrunkGroupIdentity,
                    'includeDtgIdentity' => $includeDtgIdentity,
                    'includeTrunkGroupIdentityForNetworkCalls' => $includeTrunkGroupIdentityForNetworkCalls,
                    'includeOtgIdentityForNetworkCalls' => $includeOtgIdentityForNetworkCalls,
                    'enableNetworkAddressIdentity' => $enableNetworkAddressIdentity,
                    'allowUnscreenedCalls' => $allowUnscreenedCalls,
                    'allowUnscreenedEmergencyCalls' => $allowUnscreenedEmergencyCalls,
                    'pilotUserCallingLineIdentityPolicy' => $pilotUserCallingLineIdentityPolicy,
                    'pilotUserChargeNumberPolicy' => $pilotUserChargeNumberPolicy,
                    'callForwardingAlwaysAction' => $callForwardingAlwaysAction,
                    'callForwardingAlwaysForwardAddress' => $callForwardingAlwaysForwardAddress,
                    'callForwardingAlwaysRerouteTrunkGroupKey' => $callForwardingAlwaysRerouteTrunkGroupKey,
                    'peeringDomain' => $peeringDomain,
                    'routeToPeeringDomain' => $routeToPeeringDomain,
                    'prefixEnabled' => $prefixEnabled,
                    'prefix' => $prefix,
                    'statefulReroutingEnabled' => $statefulReroutingEnabled,
                    'sendContinuousOptionsMessage' => $sendContinuousOptionsMessage,
                    'continuousOptionsSendingIntervalSeconds' => $continuousOptionsSendingIntervalSeconds,
                    'failureOptionsSendingIntervalSeconds' => $failureOptionsSendingIntervalSeconds,
                    'failureThresholdCounter' => $failureThresholdCounter,
                    'successThresholdCounter' => $successThresholdCounter,
                    'inviteFailureThresholdCounter' => $inviteFailureThresholdCounter,
                    'inviteFailureThresholdWindowSeconds' => $inviteFailureThresholdWindowSeconds,
                    'pilotUserCallingLineAssertedIdentityPolicy' => $pilotUserCallingLineAssertedIdentityPolicy,
                    'useSystemCallingLineAssertedIdentityPolicy' => $useSystemCallingLineAssertedIdentityPolicy
                ]
            ];
        }

        # Modify the maximum and bursting maximum permissible active Trunk Group calls for the group.
        static public function GroupTrunkGroupModifyRequest14sp9($serviceProviderId=null,$groupId=null,$maxActiveCalls=null,$burstingMaxActiveCalls=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId,
                    'maxActiveCalls' => $maxActiveCalls,
                    'burstingMaxActiveCalls' => $burstingMaxActiveCalls
                ]
            ];
        }

        # Add a user creation task for a trunk group.
        static public function GroupTrunkGroupUserCreationTaskAddRequest14sp4($trunkGroupKey=null,$taskName=null,$userIdFormat=null,$userIdDomain=null,$populateExtension=null,$linePortFormat=null,$linePortDomain=null,$populateContact=null,$contactFormat=null,$contactDomain=null,$servicePackName=null,$userService=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'trunkGroupKey' => $trunkGroupKey,
                    'taskName' => $taskName,
                    'userIdFormat' => $userIdFormat,
                    'userIdDomain' => $userIdDomain,
                    'populateExtension' => $populateExtension,
                    'linePortFormat' => $linePortFormat,
                    'linePortDomain' => $linePortDomain,
                    'populateContact' => $populateContact,
                    'contactFormat' => $contactFormat,
                    'contactDomain' => $contactDomain,
                    'servicePackName' => $servicePackName,
                    'userService' => $userService
                ]
            ];
        }

        # Delete a user creation task for a trunk group.
        static public function GroupTrunkGroupUserCreationTaskDeleteRequest14sp4($trunkGroupKey=null,$taskName=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'trunkGroupKey' => $trunkGroupKey,
                    'taskName' => $taskName
                ]
            ];
        }

        # Get the list of user creation tasks for a trunk group.
        static public function GroupTrunkGroupUserCreationTaskGetListRequest14sp4($trunkGroupKey=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'trunkGroupKey' => $trunkGroupKey
                ]
            ];
        }

        # Request the details of a specified user creation task for a trunk group.
        static public function GroupTrunkGroupUserCreationTaskGetRequest14sp4($trunkGroupKey=null,$taskName=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'trunkGroupKey' => $trunkGroupKey,
                    'taskName' => $taskName
                ]
            ];
        }

        # Get the maximum and bursting maximum permissible active Trunk Group calls for the service provider.
        static public function ServiceProviderTrunkGroupGetRequest14sp1($serviceProviderId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId
                ]
            ];
        }

        # Modify the maximum and bursting maximum permissible active Trunk Group calls for the service provider.
        static public function ServiceProviderTrunkGroupModifyRequest($serviceProviderId=null,$maxActiveCalls=null,$burstingMaxActiveCalls=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'maxActiveCalls' => $maxActiveCalls,
                    'burstingMaxActiveCalls' => $burstingMaxActiveCalls
                ]
            ];
        }

        # Get the list of user creation tasks in the system.
        static public function SystemTrunkGroupUserCreationTaskGetListRequest14sp4() {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => null
            ];
        }

}