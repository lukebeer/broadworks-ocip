<?php
class OCISchemaServiceCallingPlan {
        # Add a new calling plan digit string.
        static public function GroupCallingPlanAddDigitPatternRequest($serviceProviderId=null,$groupId=null,$name=null,$digitPattern=null) {
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

        # Delete one or more calling plan digit strings.
        static public function GroupCallingPlanDeleteDigitPatternListRequest($serviceProviderId=null,$groupId=null,$name=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId,
                    'name' => $name
                ]
            ];
        }

        # Get the list of calling plan digit strings for a group.
        static public function GroupCallingPlanGetDigitPatternListRequest($serviceProviderId=null,$groupId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId
                ]
            ];
        }

        # Modify a calling plan digit string. The name is a key; it cannot be changed.
        static public function GroupCallingPlanModifyDigitPatternRequest($serviceProviderId=null,$groupId=null,$name=null,$digitPattern=null) {
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

}