<?php
class OCISchemaServiceVirtualOnNetEnterpriseExtensions {
        # Request the list of Virtual On-Net users in an Enterprise.
        static public function EnterpriseVirtualOnNetEnterpriseExtensionsGetUserListRequest($serviceProviderId=null,$responseSizeLimit=null,$searchCriteriaUserLastName=null,$searchCriteriaUserFirstName=null,$searchCriteriaDn=null,$searchCriteriaGroupLocationCode=null,$searchCriteriaExtension=null,$searchCriteriaExactVirtualOnNetCallTypeName=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'responseSizeLimit' => $responseSizeLimit,
                    'searchCriteriaUserLastName' => $searchCriteriaUserLastName,
                    'searchCriteriaUserFirstName' => $searchCriteriaUserFirstName,
                    'searchCriteriaDn' => $searchCriteriaDn,
                    'searchCriteriaGroupLocationCode' => $searchCriteriaGroupLocationCode,
                    'searchCriteriaExtension' => $searchCriteriaExtension,
                    'searchCriteriaExactVirtualOnNetCallTypeName' => $searchCriteriaExactVirtualOnNetCallTypeName
                ]
            ];
        }

        # Adds Virtual On-Net users to a Group. It is possible to add 
        static public function GroupVirtualOnNetEnterpriseExtensionsAddUserRequest($serviceProviderId=null,$groupId=null,$virtualOnNetUser=null,$virtualOnNetUserRange=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId,
                    'virtualOnNetUser' => $virtualOnNetUser,
                    'virtualOnNetUserRange' => $virtualOnNetUserRange
                ]
            ];
        }

        # Delete an existing Virtual On-Net user from a Group.
        static public function GroupVirtualOnNetEnterpriseExtensionsDeleteUserRequest($serviceProviderId=null,$groupId=null,$phoneNumber=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId,
                    'phoneNumber' => $phoneNumber
                ]
            ];
        }

        # Request the list of Virtual On-Net users in a Group.
        static public function GroupVirtualOnNetEnterpriseExtensionsGetUserListRequest($serviceProviderId=null,$groupId=null,$responseSizeLimit=null,$searchCriteriaUserLastName=null,$searchCriteriaUserFirstName=null,$searchCriteriaDn=null,$searchCriteriaExtension=null,$searchCriteriaExactVirtualOnNetCallTypeName=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId,
                    'responseSizeLimit' => $responseSizeLimit,
                    'searchCriteriaUserLastName' => $searchCriteriaUserLastName,
                    'searchCriteriaUserFirstName' => $searchCriteriaUserFirstName,
                    'searchCriteriaDn' => $searchCriteriaDn,
                    'searchCriteriaExtension' => $searchCriteriaExtension,
                    'searchCriteriaExactVirtualOnNetCallTypeName' => $searchCriteriaExactVirtualOnNetCallTypeName
                ]
            ];
        }

        # Get an existing Virtual On-Net user from a Group.
        static public function GroupVirtualOnNetEnterpriseExtensionsGetUserRequest($serviceProviderId=null,$groupId=null,$phoneNumber=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId,
                    'phoneNumber' => $phoneNumber
                ]
            ];
        }

        # Modify an existing Virtual On-Net user of a Group.
        static public function GroupVirtualOnNetEnterpriseExtensionsModifyUserRequest($serviceProviderId=null,$groupId=null,$phoneNumber=null,$extension=null,$firstName=null,$lastName=null,$callingLineIdFirstName=null,$callingLineIdLastName=null,$virtualOnNetCallTypeName=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId,
                    'phoneNumber' => $phoneNumber,
                    'extension' => $extension,
                    'firstName' => $firstName,
                    'lastName' => $lastName,
                    'callingLineIdFirstName' => $callingLineIdFirstName,
                    'callingLineIdLastName' => $callingLineIdLastName,
                    'virtualOnNetCallTypeName' => $virtualOnNetCallTypeName
                ]
            ];
        }

        # Add a Virtual On-Net Call Type.
        static public function SystemVirtualOnNetCallTypeAddRequest($virtualOnNetCallTypeName=null,$virtualOnNetCallTypeCdrValue=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'virtualOnNetCallTypeName' => $virtualOnNetCallTypeName,
                    'virtualOnNetCallTypeCdrValue' => $virtualOnNetCallTypeCdrValue
                ]
            ];
        }

        # Delete a Virtual On-Net Call Type.
        static public function SystemVirtualOnNetCallTypeDeleteRequest($virtualOnNetCallTypeName=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'virtualOnNetCallTypeName' => $virtualOnNetCallTypeName
                ]
            ];
        }

        # Get the list Virtual On-Net Call Types in the system.
        static public function SystemVirtualOnNetCallTypeGetListRequest() {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => null
            ];
        }

        # Modify a Virtual On-Net Call Type.
        static public function SystemVirtualOnNetCallTypeModifyRequest($virtualOnNetCallTypeName=null,$virtualOnNetCallTypeCdrValue=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'virtualOnNetCallTypeName' => $virtualOnNetCallTypeName,
                    'virtualOnNetCallTypeCdrValue' => $virtualOnNetCallTypeCdrValue
                ]
            ];
        }

}