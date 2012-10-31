<?php
class OCISchemaServiceBroadWorksAnywhere {
        # Add a BroadWorks Anywhere instance to a group.
        static public function GroupBroadWorksAnywhereAddInstanceRequest($serviceProviderId=null,$groupId=null,$serviceUserId=null,$serviceInstanceProfile=null,$broadWorksAnywhereScope=null,$promptForCLID=null,$silentPromptMode=null,$promptForPasscode=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId,
                    'serviceUserId' => $serviceUserId,
                    'serviceInstanceProfile' => $serviceInstanceProfile,
                    'broadWorksAnywhereScope' => $broadWorksAnywhereScope,
                    'promptForCLID' => $promptForCLID,
                    'silentPromptMode' => $silentPromptMode,
                    'promptForPasscode' => $promptForPasscode
                ]
            ];
        }

        # Delete a BroadWorks Anywhere instance from a group.
        static public function GroupBroadWorksAnywhereDeleteInstanceRequest($serviceUserId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceUserId' => $serviceUserId
                ]
            ];
        }

        # Get a list of BroadWorks Anywhere instances within a group.
        static public function GroupBroadWorksAnywhereGetInstanceListRequest($serviceProviderId=null,$groupId=null,$groupDepartmentName=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId,
                    'groupDepartmentName' => $groupDepartmentName
                ]
            ];
        }

        # Request to get all the information of a BroadWorks Anywhere instance.
        static public function GroupBroadWorksAnywhereGetInstanceRequest17($serviceUserId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceUserId' => $serviceUserId
                ]
            ];
        }

        # Request to set the active status of BroadWorks Anywhere instances.
        static public function GroupBroadWorksAnywhereModifyActiveInstanceListRequest($serviceActivation=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceActivation' => $serviceActivation
                ]
            ];
        }

        # Request to modify a BroadWorks Anywhere instance.
        static public function GroupBroadWorksAnywhereModifyInstanceRequest($serviceUserId=null,$serviceInstanceProfile=null,$broadWorksAnywhereScope=null,$promptForCLID=null,$silentPromptMode=null,$promptForPasscode=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceUserId' => $serviceUserId,
                    'serviceInstanceProfile' => $serviceInstanceProfile,
                    'broadWorksAnywhereScope' => $broadWorksAnywhereScope,
                    'promptForCLID' => $promptForCLID,
                    'silentPromptMode' => $silentPromptMode,
                    'promptForPasscode' => $promptForPasscode
                ]
            ];
        }

        # Add a broadworks Anywhere phone number.
        static public function UserBroadWorksAnywhereAddPhoneNumberRequest($userId=null,$phoneNumber=null,$description=null,$isActive=null,$outboundAlternateNumber=null,$broadworksCallControl=null,$useDiversionInhibitor=null,$answerConfirmationRequired=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId,
                    'phoneNumber' => $phoneNumber,
                    'description' => $description,
                    'isActive' => $isActive,
                    'outboundAlternateNumber' => $outboundAlternateNumber,
                    'broadworksCallControl' => $broadworksCallControl,
                    'useDiversionInhibitor' => $useDiversionInhibitor,
                    'answerConfirmationRequired' => $answerConfirmationRequired
                ]
            ];
        }

        # Add a criteria to the user's BroadWorks Anywhere phone number.
        static public function UserBroadWorksAnywhereAddSelectiveCriteriaRequest16($userId=null,$phoneNumber=null,$criteriaName=null,$timeSchedule=null,$holidaySchedule=null,$blacklisted=null,$fromDnCriteria=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId,
                    'phoneNumber' => $phoneNumber,
                    'criteriaName' => $criteriaName,
                    'timeSchedule' => $timeSchedule,
                    'holidaySchedule' => $holidaySchedule,
                    'blacklisted' => $blacklisted,
                    'fromDnCriteria' => $fromDnCriteria
                ]
            ];
        }

        # Delete a broadworks anywhere phone number. Also deletes all the selective criteria for the phone number.
        static public function UserBroadWorksAnywhereDeletePhoneNumberRequest($userId=null,$phoneNumber=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId,
                    'phoneNumber' => $phoneNumber
                ]
            ];
        }

        # Delete a criteria from the user's BroadWorks Anywhere phone number.
        static public function UserBroadWorksAnywhereDeleteSelectiveCriteriaRequest($userId=null,$phoneNumber=null,$criteriaName=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId,
                    'phoneNumber' => $phoneNumber,
                    'criteriaName' => $criteriaName
                ]
            ];
        }

        # Get a list of all the available BroadWorks Anywhere portal instances for a specific user
        static public function UserBroadWorksAnywhereGetAvailablePortalListRequest($userId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId
                ]
            ];
        }

        # Get a broadworks anywhere phone number
        static public function UserBroadWorksAnywhereGetPhoneNumberRequest($userId=null,$phoneNumber=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId,
                    'phoneNumber' => $phoneNumber
                ]
            ];
        }

        # Get the list of all the BroadWorks Anywhere phone numbers for the user.
        static public function UserBroadWorksAnywhereGetRequest16sp2($userId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId
                ]
            ];
        }

        # Get a criteria for the user's BroadWorks Anywhere phone number.
        static public function UserBroadWorksAnywhereGetSelectiveCriteriaRequest16($userId=null,$phoneNumber=null,$criteriaName=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId,
                    'phoneNumber' => $phoneNumber,
                    'criteriaName' => $criteriaName
                ]
            ];
        }

        # Modify a BroadWorks Anywhere phone number
        static public function UserBroadWorksAnywhereModifyPhoneNumberRequest($userId=null,$phoneNumber=null,$newPhoneNumber=null,$description=null,$isActive=null,$outboundAlternateNumber=null,$broadworksCallControl=null,$useDiversionInhibitor=null,$answerConfirmationRequired=null,$criteriaActivation=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId,
                    'phoneNumber' => $phoneNumber,
                    'newPhoneNumber' => $newPhoneNumber,
                    'description' => $description,
                    'isActive' => $isActive,
                    'outboundAlternateNumber' => $outboundAlternateNumber,
                    'broadworksCallControl' => $broadworksCallControl,
                    'useDiversionInhibitor' => $useDiversionInhibitor,
                    'answerConfirmationRequired' => $answerConfirmationRequired,
                    'criteriaActivation' => $criteriaActivation
                ]
            ];
        }

        # Request to modify the user-level settings for the BroadWorks Anywhere service for a specified user.
        static public function UserBroadWorksAnywhereModifyRequest($userId=null,$alertAllLocationsForClickToDialCalls=null,$alertAllLocationsForGroupPagingCalls=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId,
                    'alertAllLocationsForClickToDialCalls' => $alertAllLocationsForClickToDialCalls,
                    'alertAllLocationsForGroupPagingCalls' => $alertAllLocationsForGroupPagingCalls
                ]
            ];
        }

        # Modify selective criteria for the user's BroadWorks Anywhere phone number.
        static public function UserBroadWorksAnywhereModifySelectiveCriteriaRequest($userId=null,$phoneNumber=null,$criteriaName=null,$newCriteriaName=null,$timeSchedule=null,$fromDnCriteria=null,$holidaySchedule=null,$blacklisted=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId,
                    'phoneNumber' => $phoneNumber,
                    'criteriaName' => $criteriaName,
                    'newCriteriaName' => $newCriteriaName,
                    'timeSchedule' => $timeSchedule,
                    'fromDnCriteria' => $fromDnCriteria,
                    'holidaySchedule' => $holidaySchedule,
                    'blacklisted' => $blacklisted
                ]
            ];
        }

}