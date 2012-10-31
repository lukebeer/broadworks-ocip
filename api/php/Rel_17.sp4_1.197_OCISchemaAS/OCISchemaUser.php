<?php
class OCISchemaUser {
        # Request to get the list of Device Management user modifiable files.
        static public function UserAccessDeviceFileGetListRequest($userId=null,$accessDevice=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId,
                    'accessDevice' => $accessDevice
                ]
            ];
        }

        # Request to get a user modifiable file.
        static public function UserAccessDeviceFileGetRequest($userId=null,$accessDevice=null,$fileFormat=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId,
                    'accessDevice' => $accessDevice,
                    'fileFormat' => $fileFormat
                ]
            ];
        }

        # Request to modify a user modifiable access device file.
        static public function UserAccessDeviceFileModifyRequest($userId=null,$accessDevice=null,$fileFormat=null,$uploadFile=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId,
                    'accessDevice' => $accessDevice,
                    'fileFormat' => $fileFormat,
                    'uploadFile' => $uploadFile
                ]
            ];
        }

        # Reset a specific user SIP device that supports the reset operation.
        static public function UserAccessDeviceResetRequest($userId=null,$accessDevice=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId,
                    'accessDevice' => $accessDevice
                ]
            ];
        }

        # Request to get all the device tag names and values for a specific device. The resolved tags are returned only if the device is the main device for this user.
        static public function UserAccessDeviceTagsGetRequest($userId=null,$accessDevice=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId,
                    'accessDevice' => $accessDevice
                ]
            ];
        }

        # Request to add a user.
        static public function UserAddRequest17sp4($serviceProviderId=null,$groupId=null,$userId=null,$lastName=null,$firstName=null,$callingLineIdLastName=null,$callingLineIdFirstName=null,$hiraganaLastName=null,$hiraganaFirstName=null,$phoneNumber=null,$extension=null,$callingLineIdPhoneNumber=null,$password=null,$department=null,$language=null,$timeZone=null,$alias=null,$title=null,$pagerPhoneNumber=null,$mobilePhoneNumber=null,$emailAddress=null,$yahooId=null,$addressLocation=null,$address=null,$networkClassOfService=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId,
                    'userId' => $userId,
                    'lastName' => $lastName,
                    'firstName' => $firstName,
                    'callingLineIdLastName' => $callingLineIdLastName,
                    'callingLineIdFirstName' => $callingLineIdFirstName,
                    'hiraganaLastName' => $hiraganaLastName,
                    'hiraganaFirstName' => $hiraganaFirstName,
                    'phoneNumber' => $phoneNumber,
                    'extension' => $extension,
                    'callingLineIdPhoneNumber' => $callingLineIdPhoneNumber,
                    'password' => $password,
                    'department' => $department,
                    'language' => $language,
                    'timeZone' => $timeZone,
                    'alias' => $alias,
                    'title' => $title,
                    'pagerPhoneNumber' => $pagerPhoneNumber,
                    'mobilePhoneNumber' => $mobilePhoneNumber,
                    'emailAddress' => $emailAddress,
                    'yahooId' => $yahooId,
                    'addressLocation' => $addressLocation,
                    'address' => $address,
                    'networkClassOfService' => $networkClassOfService
                ]
            ];
        }

        # Get the list of assigned User and Group Services for the specified user.
        static public function UserAssignedServicesGetListRequest($userId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId
                ]
            ];
        }

        # Request to delete a user.  The response is either SuccessResponse or ErrorResponse.
        static public function UserDeleteRequest($userId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId
                ]
            ];
        }

        # Request to get a list of DNs associated with a user and their activation state.
        static public function UserDnGetActivationListRequest($userId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId
                ]
            ];
        }

        # Request to get the user information.  The response is either 
        static public function UserGetRequest17sp4($userId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId
                ]
            ];
        }

        # Request to get a list of registrations for a user.
        static public function UserGetRegistrationListRequest($userId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId
                ]
            ];
        }

        # Request to modify a user. 
        static public function UserModifyRequest17sp4($userId=null,$lastName=null,$firstName=null,$callingLineIdLastName=null,$callingLineIdFirstName=null,$hiraganaLastName=null,$hiraganaFirstName=null,$phoneNumber=null,$extension=null,$callingLineIdPhoneNumber=null,$oldPassword=null,$newPassword=null,$department=null,$language=null,$timeZone=null,$sipAliasList=null,$endpoint=null,$title=null,$pagerPhoneNumber=null,$mobilePhoneNumber=null,$emailAddress=null,$yahooId=null,$addressLocation=null,$address=null,$networkClassOfService=null,$officeZoneName=null,$primaryZoneName=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId,
                    'lastName' => $lastName,
                    'firstName' => $firstName,
                    'callingLineIdLastName' => $callingLineIdLastName,
                    'callingLineIdFirstName' => $callingLineIdFirstName,
                    'hiraganaLastName' => $hiraganaLastName,
                    'hiraganaFirstName' => $hiraganaFirstName,
                    'phoneNumber' => $phoneNumber,
                    'extension' => $extension,
                    'callingLineIdPhoneNumber' => $callingLineIdPhoneNumber,
                    'oldPassword' => $oldPassword,
                    'newPassword' => $newPassword,
                    'department' => $department,
                    'language' => $language,
                    'timeZone' => $timeZone,
                    'sipAliasList' => $sipAliasList,
                    'endpoint' => $endpoint,
                    'title' => $title,
                    'pagerPhoneNumber' => $pagerPhoneNumber,
                    'mobilePhoneNumber' => $mobilePhoneNumber,
                    'emailAddress' => $emailAddress,
                    'yahooId' => $yahooId,
                    'addressLocation' => $addressLocation,
                    'address' => $address,
                    'networkClassOfService' => $networkClassOfService,
                    'officeZoneName' => $officeZoneName,
                    'primaryZoneName' => $primaryZoneName
                ]
            ];
        }

        # Clear a user's call logs associated with Basic Call Logs and Enhanced
        static public function UserCallLogsClearRequest14sp4($userId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId
                ]
            ];
        }

        # Request the user level data associated with Call Policies.
        static public function UserCallPoliciesGetRequest17($userId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId
                ]
            ];
        }

        # Modify the user level data associated with Call Policies.
        static public function UserCallPoliciesModifyRequest($userId=null,$redirectedCallsCOLPPrivacy=null,$callBeingForwardedResponseCallType=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId,
                    'redirectedCallsCOLPPrivacy' => $redirectedCallsCOLPPrivacy,
                    'callBeingForwardedResponseCallType' => $callBeingForwardedResponseCallType
                ]
            ];
        }

        # Request the user level data associated with Call Processing Policy.
        static public function UserCallProcessingGetPolicyRequest17sp4($userId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId
                ]
            ];
        }

        # Modify the user level data associated with Call Procesing Policy.
        static public function UserCallProcessingModifyPolicyRequest14sp7($userId=null,$useUserCLIDSetting=null,$useUserMediaSetting=null,$useUserCallLimitsSetting=null,$useUserDCLIDSetting=null,$useMaxSimultaneousCalls=null,$maxSimultaneousCalls=null,$useMaxSimultaneousVideoCalls=null,$maxSimultaneousVideoCalls=null,$useMaxCallTimeForAnsweredCalls=null,$maxCallTimeForAnsweredCallsMinutes=null,$useMaxCallTimeForUnansweredCalls=null,$maxCallTimeForUnansweredCallsMinutes=null,$mediaPolicySelection=null,$supportedMediaSetName=null,$useMaxConcurrentRedirectedCalls=null,$maxConcurrentRedirectedCalls=null,$useMaxFindMeFollowMeDepth=null,$maxFindMeFollowMeDepth=null,$maxRedirectionDepth=null,$useMaxConcurrentFindMeFollowMeInvocations=null,$maxConcurrentFindMeFollowMeInvocations=null,$clidPolicy=null,$emergencyClidPolicy=null,$allowAlternateNumbersForRedirectingIdentity=null,$useGroupName=null,$enableDialableCallerID=null,$blockCallingNameForExternalCalls=null,$allowConfigurableCLIDForRedirectingIdentity=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId,
                    'useUserCLIDSetting' => $useUserCLIDSetting,
                    'useUserMediaSetting' => $useUserMediaSetting,
                    'useUserCallLimitsSetting' => $useUserCallLimitsSetting,
                    'useUserDCLIDSetting' => $useUserDCLIDSetting,
                    'useMaxSimultaneousCalls' => $useMaxSimultaneousCalls,
                    'maxSimultaneousCalls' => $maxSimultaneousCalls,
                    'useMaxSimultaneousVideoCalls' => $useMaxSimultaneousVideoCalls,
                    'maxSimultaneousVideoCalls' => $maxSimultaneousVideoCalls,
                    'useMaxCallTimeForAnsweredCalls' => $useMaxCallTimeForAnsweredCalls,
                    'maxCallTimeForAnsweredCallsMinutes' => $maxCallTimeForAnsweredCallsMinutes,
                    'useMaxCallTimeForUnansweredCalls' => $useMaxCallTimeForUnansweredCalls,
                    'maxCallTimeForUnansweredCallsMinutes' => $maxCallTimeForUnansweredCallsMinutes,
                    'mediaPolicySelection' => $mediaPolicySelection,
                    'supportedMediaSetName' => $supportedMediaSetName,
                    'useMaxConcurrentRedirectedCalls' => $useMaxConcurrentRedirectedCalls,
                    'maxConcurrentRedirectedCalls' => $maxConcurrentRedirectedCalls,
                    'useMaxFindMeFollowMeDepth' => $useMaxFindMeFollowMeDepth,
                    'maxFindMeFollowMeDepth' => $maxFindMeFollowMeDepth,
                    'maxRedirectionDepth' => $maxRedirectionDepth,
                    'useMaxConcurrentFindMeFollowMeInvocations' => $useMaxConcurrentFindMeFollowMeInvocations,
                    'maxConcurrentFindMeFollowMeInvocations' => $maxConcurrentFindMeFollowMeInvocations,
                    'clidPolicy' => $clidPolicy,
                    'emergencyClidPolicy' => $emergencyClidPolicy,
                    'allowAlternateNumbersForRedirectingIdentity' => $allowAlternateNumbersForRedirectingIdentity,
                    'useGroupName' => $useGroupName,
                    'enableDialableCallerID' => $enableDialableCallerID,
                    'blockCallingNameForExternalCalls' => $blockCallingNameForExternalCalls,
                    'allowConfigurableCLIDForRedirectingIdentity' => $allowConfigurableCLIDForRedirectingIdentity
                ]
            ];
        }

        # Add a list of Communication Barring Authorization codes to a user.
        static public function UserCommunicationBarringAuthorizationCodeAddListRequest($userId=null,$code=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId,
                    'code' => $code
                ]
            ];
        }

        # Delete a list of Communication Barring Authorization codes from a user.
        static public function UserCommunicationBarringAuthorizationCodeDeleteListRequest($userId=null,$code=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId,
                    'code' => $code
                ]
            ];
        }

        # Get a list of Communication Barring Authorization Code for a user.
        static public function UserCommunicationBarringAuthorizationCodeGetListRequest($userId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId
                ]
            ];
        }

        # Get the list of feature access codes for a user.
        static public function UserFeatureAccessCodeGetListRequest($userId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId
                ]
            ];
        }

        # Request the list of users in a group.
        static public function UserGetListInGroupRequest($serviceProviderId=null,$GroupId=null,$responseSizeLimit=null,$searchCriteriaUserLastName=null,$searchCriteriaUserFirstName=null,$searchCriteriaDn=null,$searchCriteriaEmailAddress=null,$searchCriteriaExactUserDepartment=null,$searchCriteriaExactUserInTrunkGroup=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'GroupId' => $GroupId,
                    'responseSizeLimit' => $responseSizeLimit,
                    'searchCriteriaUserLastName' => $searchCriteriaUserLastName,
                    'searchCriteriaUserFirstName' => $searchCriteriaUserFirstName,
                    'searchCriteriaDn' => $searchCriteriaDn,
                    'searchCriteriaEmailAddress' => $searchCriteriaEmailAddress,
                    'searchCriteriaExactUserDepartment' => $searchCriteriaExactUserDepartment,
                    'searchCriteriaExactUserInTrunkGroup' => $searchCriteriaExactUserInTrunkGroup
                ]
            ];
        }

        # Request the list of users in a service provider or enterprise.
        static public function UserGetListInServiceProviderRequest($serviceProviderId=null,$responseSizeLimit=null,$searchCriteriaUserLastName=null,$searchCriteriaUserFirstName=null,$searchCriteriaDn=null,$searchCriteriaEmailAddress=null,$searchCriteriaExactUserInTrunkGroup=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'responseSizeLimit' => $responseSizeLimit,
                    'searchCriteriaUserLastName' => $searchCriteriaUserLastName,
                    'searchCriteriaUserFirstName' => $searchCriteriaUserFirstName,
                    'searchCriteriaDn' => $searchCriteriaDn,
                    'searchCriteriaEmailAddress' => $searchCriteriaEmailAddress,
                    'searchCriteriaExactUserInTrunkGroup' => $searchCriteriaExactUserInTrunkGroup
                ]
            ];
        }

        # Request the list of users in the system.
        static public function UserGetListInSystemRequest($responseSizeLimit=null,$searchCriteriaUserLastName=null,$searchCriteriaUserFirstName=null,$searchCriteriaDn=null,$searchCriteriaEmailAddress=null,$searchCriteriaGroupId=null,$searchCriteriaExactServiceProvider=null,$searchCriteriaExactUserInTrunkGroup=null,$searchCriteriaExactUserNetworkClassOfService=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'responseSizeLimit' => $responseSizeLimit,
                    'searchCriteriaUserLastName' => $searchCriteriaUserLastName,
                    'searchCriteriaUserFirstName' => $searchCriteriaUserFirstName,
                    'searchCriteriaDn' => $searchCriteriaDn,
                    'searchCriteriaEmailAddress' => $searchCriteriaEmailAddress,
                    'searchCriteriaGroupId' => $searchCriteriaGroupId,
                    'searchCriteriaExactServiceProvider' => $searchCriteriaExactServiceProvider,
                    'searchCriteriaExactUserInTrunkGroup' => $searchCriteriaExactUserInTrunkGroup,
                    'searchCriteriaExactUserNetworkClassOfService' => $searchCriteriaExactUserNetworkClassOfService
                ]
            ];
        }

        # Request the list of Service Instances in a service provider or an enterprise.
        static public function UserGetServiceInstanceListInServiceProviderRequest($serviceProviderId=null,$responseSizeLimit=null,$SearchCriteriaGroupId=null,$SearchCriteriaExactServiceType=null,$searchCriteriaUserId=null,$searchCriteriaUserLastName=null,$searchCriteriaDn=null,$searchCriteriaExtension=null,$searchCriteriaExactUserDepartment=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'responseSizeLimit' => $responseSizeLimit,
                    'SearchCriteriaGroupId' => $SearchCriteriaGroupId,
                    'SearchCriteriaExactServiceType' => $SearchCriteriaExactServiceType,
                    'searchCriteriaUserId' => $searchCriteriaUserId,
                    'searchCriteriaUserLastName' => $searchCriteriaUserLastName,
                    'searchCriteriaDn' => $searchCriteriaDn,
                    'searchCriteriaExtension' => $searchCriteriaExtension,
                    'searchCriteriaExactUserDepartment' => $searchCriteriaExactUserDepartment
                ]
            ];
        }

        # Request the list of Service Instances in the system.
        static public function UserGetServiceInstanceListInSystemRequest($responseSizeLimit=null,$searchCriteriaExactServiceType=null,$searchCriteriaUserId=null,$searchCriteriaUserLastName=null,$searchCriteriaDn=null,$searchCriteriaExtension=null,$searchCriteriaGroupId=null,$searchCriteriaExactServiceProvider=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'responseSizeLimit' => $responseSizeLimit,
                    'searchCriteriaExactServiceType' => $searchCriteriaExactServiceType,
                    'searchCriteriaUserId' => $searchCriteriaUserId,
                    'searchCriteriaUserLastName' => $searchCriteriaUserLastName,
                    'searchCriteriaDn' => $searchCriteriaDn,
                    'searchCriteriaExtension' => $searchCriteriaExtension,
                    'searchCriteriaGroupId' => $searchCriteriaGroupId,
                    'searchCriteriaExactServiceProvider' => $searchCriteriaExactServiceProvider
                ]
            ];
        }

        # Request to get all user's configured line ports.
        static public function UserLinePortGetListRequest($userId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId
                ]
            ];
        }

        # Modify the user id of a real or virtual user.
        static public function UserModifyUserIdRequest($userId=null,$newUserId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId,
                    'newUserId' => $newUserId
                ]
            ];
        }

        # Request the Network-Based Conferencing data for a specified user.
        static public function UserNetworkConferencingGetRequest($userId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId
                ]
            ];
        }

        # Get the OCI call control application list that can be used by the user.
        static public function UserOCICallControlApplicationGetListRequest($userId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId
                ]
            ];
        }

        # Modify which OCI Call Control Applications are enabled on a user
        static public function UserOCICallControlApplicationModifyRequest($userId=null,$applicationIdList=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId,
                    'applicationIdList' => $applicationIdList
                ]
            ];
        }

        # Request the user's Web password information.
        static public function UserPasswordInfoGetRequest($userId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId
                ]
            ];
        }

        # Add one or more entries to a user's personal phone list.
        static public function UserPersonalPhoneListAddListRequest($userId=null,$entry=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId,
                    'entry' => $entry
                ]
            ];
        }

        # Delete one or more entries from a user's personal phone list.
        static public function UserPersonalPhoneListDeleteListRequest($userId=null,$entryName=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId,
                    'entryName' => $entryName
                ]
            ];
        }

        # Get a user's personal phone list.
        static public function UserPersonalPhoneListGetListRequest($userId=null,$responseSizeLimit=null,$searchCriteriaModeOr=null,$searchCriteriaUserPersonalPhoneListName=null,$searchCriteriaUserPersonalPhoneListNumber=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId,
                    'responseSizeLimit' => $responseSizeLimit,
                    'searchCriteriaModeOr' => $searchCriteriaModeOr,
                    'searchCriteriaUserPersonalPhoneListName' => $searchCriteriaUserPersonalPhoneListName,
                    'searchCriteriaUserPersonalPhoneListNumber' => $searchCriteriaUserPersonalPhoneListNumber
                ]
            ];
        }

        # Modify an entry in a user's personal phone list.
        static public function UserPersonalPhoneListModifyRequest($userId=null,$entryName=null,$newEntryName=null,$phoneNumber=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId,
                    'entryName' => $entryName,
                    'newEntryName' => $newEntryName,
                    'phoneNumber' => $phoneNumber
                ]
            ];
        }

        # Request a table containing the phone directory for a user's group.
        static public function UserPhoneDirectoryGetListRequest($userId=null,$includeCommonPhoneList=null,$responseSizeLimit=null,$searchCriteriaModeOr=null,$searchCriteriaUserLastName=null,$searchCriteriaUserFirstName=null,$searchCriteriaDn=null,$searchCriteriaExtension=null,$searchCriteriaMobilePhoneNumber=null,$searchCriteriaEmailAddress=null,$searchCriteriaExactUserDepartment=null,$searchCriteriaExactUserGroup=null,$searchCriteriaExactCustomContactDirectory=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId,
                    'includeCommonPhoneList' => $includeCommonPhoneList,
                    'responseSizeLimit' => $responseSizeLimit,
                    'searchCriteriaModeOr' => $searchCriteriaModeOr,
                    'searchCriteriaUserLastName' => $searchCriteriaUserLastName,
                    'searchCriteriaUserFirstName' => $searchCriteriaUserFirstName,
                    'searchCriteriaDn' => $searchCriteriaDn,
                    'searchCriteriaExtension' => $searchCriteriaExtension,
                    'searchCriteriaMobilePhoneNumber' => $searchCriteriaMobilePhoneNumber,
                    'searchCriteriaEmailAddress' => $searchCriteriaEmailAddress,
                    'searchCriteriaExactUserDepartment' => $searchCriteriaExactUserDepartment,
                    'searchCriteriaExactUserGroup' => $searchCriteriaExactUserGroup,
                    'searchCriteriaExactCustomContactDirectory' => $searchCriteriaExactCustomContactDirectory
                ]
            ];
        }

        # Request a table containing the phone directory for a user.  
        static public function UserPhoneDirectoryGetPagedListRequest($userId=null,$isEnterpriseInfoRequested=null,$responsePagingControl=null,$searchCriteriaModeOr=null,$searchCriteriaUserLastName=null,$searchCriteriaUserFirstName=null,$searchCriteriaDn=null,$searchCriteriaGroupLocationCode=null,$searchCriteriaExtension=null,$searchCriteriaMobilePhoneNumber=null,$searchCriteriaEmailAddress=null,$searchCriteriaYahooId=null,$searchCriteriaExactUserGroup=null,$searchCriteriaExactUserDepartment=null,$searchCriteriaUserId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId,
                    'isEnterpriseInfoRequested' => $isEnterpriseInfoRequested,
                    'responsePagingControl' => $responsePagingControl,
                    'searchCriteriaModeOr' => $searchCriteriaModeOr,
                    'searchCriteriaUserLastName' => $searchCriteriaUserLastName,
                    'searchCriteriaUserFirstName' => $searchCriteriaUserFirstName,
                    'searchCriteriaDn' => $searchCriteriaDn,
                    'searchCriteriaGroupLocationCode' => $searchCriteriaGroupLocationCode,
                    'searchCriteriaExtension' => $searchCriteriaExtension,
                    'searchCriteriaMobilePhoneNumber' => $searchCriteriaMobilePhoneNumber,
                    'searchCriteriaEmailAddress' => $searchCriteriaEmailAddress,
                    'searchCriteriaYahooId' => $searchCriteriaYahooId,
                    'searchCriteriaExactUserGroup' => $searchCriteriaExactUserGroup,
                    'searchCriteriaExactUserDepartment' => $searchCriteriaExactUserDepartment,
                    'searchCriteriaUserId' => $searchCriteriaUserId
                ]
            ];
        }

        # Request a table containing the phone directory for a user.
        static public function UserPhoneDirectoryGetSearchedListRequest($userId=null,$nameSearchString=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId,
                    'nameSearchString' => $nameSearchString
                ]
            ];
        }

        # Request the user's portal passcode information.
        static public function UserPortalPasscodeGetInfoRequest($userId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId
                ]
            ];
        }

        # Modify the user's Portal passcode
        static public function UserPortalPasscodeModifyRequest($userId=null,$oldPasscode=null,$newPasscode=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId,
                    'oldPasscode' => $oldPasscode,
                    'newPasscode' => $newPasscode
                ]
            ];
        }

        # Add an event to user schedule. 
        static public function UserScheduleAddEventRequest($userId=null,$scheduleKey=null,$eventName=null,$startDate=null,$endDate=null,$recurrence=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId,
                    'scheduleKey' => $scheduleKey,
                    'eventName' => $eventName,
                    'startDate' => $startDate,
                    'endDate' => $endDate,
                    'recurrence' => $recurrence
                ]
            ];
        }

        # Add a user schedule.
        static public function UserScheduleAddRequest($userId=null,$scheduleName=null,$scheduleType=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId,
                    'scheduleName' => $scheduleName,
                    'scheduleType' => $scheduleType
                ]
            ];
        }

        # Delete a list of events from a user schedule.
        static public function UserScheduleDeleteEventListRequest($userId=null,$scheduleKey=null,$eventName=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId,
                    'scheduleKey' => $scheduleKey,
                    'eventName' => $eventName
                ]
            ];
        }

        # Delete a list of user schedule.
        static public function UserScheduleDeleteListRequest($userId=null,$scheduleKey=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId,
                    'scheduleKey' => $scheduleKey
                ]
            ];
        }

        # Get the list of events of a user schedule.
        static public function UserScheduleGetEventListRequest($userId=null,$scheduleKey=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId,
                    'scheduleKey' => $scheduleKey
                ]
            ];
        }

        # Get an event from a user schedule.
        static public function UserScheduleGetEventRequest($userId=null,$scheduleKey=null,$eventName=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId,
                    'scheduleKey' => $scheduleKey,
                    'eventName' => $eventName
                ]
            ];
        }

        # Get the list of schedules viewable by a User. The list can be filtered by schedule type.
        static public function UserScheduleGetListRequest17sp1($userId=null,$scheduleType=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId,
                    'scheduleType' => $scheduleType
                ]
            ];
        }

        # Modify an event of a user schedule.
        static public function UserScheduleModifyEventRequest($userId=null,$scheduleKey=null,$eventName=null,$newEventName=null,$startDate=null,$endDate=null,$recurrence=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId,
                    'scheduleKey' => $scheduleKey,
                    'eventName' => $eventName,
                    'newEventName' => $newEventName,
                    'startDate' => $startDate,
                    'endDate' => $endDate,
                    'recurrence' => $recurrence
                ]
            ];
        }

        # Modify a user schedule.
        static public function UserScheduleModifyRequest($userId=null,$scheduleKey=null,$newScheduleName=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId,
                    'scheduleKey' => $scheduleKey,
                    'newScheduleName' => $newScheduleName
                ]
            ];
        }

        # Request to assign the user services and service packs for a user.
        static public function UserServiceAssignListRequest($userId=null,$serviceName=null,$servicePackName=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId,
                    'serviceName' => $serviceName,
                    'servicePackName' => $servicePackName
                ]
            ];
        }

        # Requests the user's service and service pack assignment list with status.
        static public function UserServiceGetAssignmentListRequest($userId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId
                ]
            ];
        }

        # Request to determine if a UserService or service pack is assigned to the user.
        static public function UserServiceIsAssignedRequest($userId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId
                ]
            ];
        }

        # Requests to unassign the user services and service packs for a user.
        static public function UserServiceUnassignListRequest($userId=null,$serviceName=null,$servicePackName=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId,
                    'serviceName' => $serviceName,
                    'servicePackName' => $servicePackName
                ]
            ];
        }

        # Returns the Sh non-transparent data stored against a Public User Identity (a SIP URI
        static public function UserShInterfaceGetPublicIdDataRequest($publicUserIdentity=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'publicUserIdentity' => $publicUserIdentity
                ]
            ];
        }

        # Returns the Sh non-transparent data stored against a userId.
        static public function UserShInterfaceGetUserIdDataRequest($userId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId
                ]
            ];
        }

        # Modifies the Sh Interface non-transparent data associated with a Public User Identity.
        static public function UserShInterfaceModifyRequest($publicUserIdentity=null,$SCSCFName=null,$IMSUserState=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'publicUserIdentity' => $publicUserIdentity,
                    'SCSCFName' => $SCSCFName,
                    'IMSUserState' => $IMSUserState
                ]
            ];
        }

        # Dispatches a Public Identity refresh task on the local Application Server node for the specified public identity.
        static public function UserShInterfacePublicIdentityRefreshTaskStartRequest($publicUserIdentity=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'publicUserIdentity' => $publicUserIdentity
                ]
            ];
        }

}