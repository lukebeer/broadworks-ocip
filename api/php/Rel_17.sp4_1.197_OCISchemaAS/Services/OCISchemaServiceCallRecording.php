<?php
class OCISchemaServiceCallRecording {
        # Get the Call Recording platform for a group.
        static public function GroupCallRecordingGetRequest($serviceProviderId=null,$groupId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId
                ]
            ];
        }

        # Modify the Call Recording platform assignment for a group.
        static public function GroupCallRecordingModifyRequest($serviceProviderId=null,$groupId=null,$name=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId,
                    'name' => $name
                ]
            ];
        }

        # Add a Call Recording platform.
        static public function SystemCallRecordingAddPlatformRequest($name=null,$netAddress=null,$port=null,$mediaStream=null,$transportType=null,$description=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'name' => $name,
                    'netAddress' => $netAddress,
                    'port' => $port,
                    'mediaStream' => $mediaStream,
                    'transportType' => $transportType,
                    'description' => $description
                ]
            ];
        }

        # Delete a Call Recording platform.
        static public function SystemCallRecordingDeletePlatformRequest($name=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'name' => $name
                ]
            ];
        }

        # Get list of Call Recording platforms.
        static public function SystemCallRecordingGetPlatformListRequest() {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => null
            ];
        }

        # Get the list of groups currently associated to the specified Call Recording platform.
        static public function SystemCallRecordingGetPlatformUsageRequest($name=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'name' => $name
                ]
            ];
        }

        # Modify the specified Call Recording platform.
        static public function SystemCallRecordingModifyPlatformRequest($name=null,$netAddress=null,$port=null,$mediaStream=null,$becomeSystemDefault=null,$transportType=null,$description=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'name' => $name,
                    'netAddress' => $netAddress,
                    'port' => $port,
                    'mediaStream' => $mediaStream,
                    'becomeSystemDefault' => $becomeSystemDefault,
                    'transportType' => $transportType,
                    'description' => $description
                ]
            ];
        }

        # Get the Call Recording attributes for a user.
        static public function UserCallRecordingGetRequest($userId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId
                ]
            ];
        }

        # Modify the Call Recording attributes for a user. The recording option "On Demand" is not accepted for service instances.
        static public function UserCallRecordingModifyRequest($userId=null,$recordingOption=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId,
                    'recordingOption' => $recordingOption
                ]
            ];
        }

}