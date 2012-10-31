<?php
class OCISchemaServiceInstantGroupCall {
        # Request to add an Instant Group Call service instance to a group.
        static public function GroupInstantGroupCallAddInstanceRequest14($serviceProviderId=null,$groupId=null,$serviceUserId=null,$serviceInstanceProfile=null,$destinationPhoneNumber=null,$isAnswerTimeoutEnabled=null,$answerTimeoutMinutes=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId,
                    'serviceUserId' => $serviceUserId,
                    'serviceInstanceProfile' => $serviceInstanceProfile,
                    'destinationPhoneNumber' => $destinationPhoneNumber,
                    'isAnswerTimeoutEnabled' => $isAnswerTimeoutEnabled,
                    'answerTimeoutMinutes' => $answerTimeoutMinutes
                ]
            ];
        }

        # Request to delete an Instant Group Call service instance from a group.
        static public function GroupInstantGroupCallDeleteInstanceRequest($serviceUserId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceUserId' => $serviceUserId
                ]
            ];
        }

        # Request to get a list of Instant Group Call service instances within a group.
        static public function GroupInstantGroupCallGetInstanceListRequest($serviceProviderId=null,$groupId=null,$groupDepartmentName=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId,
                    'groupDepartmentName' => $groupDepartmentName
                ]
            ];
        }

        # Request to get all the information of an Instant Group Call service instance.
        static public function GroupInstantGroupCallGetInstanceRequest17($serviceUserId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceUserId' => $serviceUserId
                ]
            ];
        }

        # Request to set the active status of Instant Group Call service instances.
        static public function GroupInstantGroupCallModifyActiveInstanceListRequest($serviceActivation=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceActivation' => $serviceActivation
                ]
            ];
        }

        # Request to modify an Instant Group Call service instance.
        static public function GroupInstantGroupCallModifyInstanceRequest($serviceUserId=null,$serviceInstanceProfile=null,$destinationPhoneNumberList=null,$isAnswerTimeoutEnabled=null,$answerTimeoutMinutes=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceUserId' => $serviceUserId,
                    'serviceInstanceProfile' => $serviceInstanceProfile,
                    'destinationPhoneNumberList' => $destinationPhoneNumberList,
                    'isAnswerTimeoutEnabled' => $isAnswerTimeoutEnabled,
                    'answerTimeoutMinutes' => $answerTimeoutMinutes
                ]
            ];
        }

}