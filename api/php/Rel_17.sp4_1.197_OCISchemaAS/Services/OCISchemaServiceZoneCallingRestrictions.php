<?php
class OCISchemaServiceZoneCallingRestrictions {
        # Gets the Service Provider/Enterprise level Zone Calling Restrictions Policies.
        static public function ServiceProviderZoneCallingRestrictionsGetRequest($serviceProviderId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId
                ]
            ];
        }

        # Modifies the Service Provider/Enterprise level Zone Calling Restrictions Policies.
        static public function ServiceProviderZoneCallingRestrictionsModifyRequest($serviceProviderId=null,$enableZoneCallingRestrictions=null,$enableOriginationRoamingRestrictions=null,$enableEmergencyOriginationRoamingRestrictions=null,$enableTerminationRoamingRestrictions=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'enableZoneCallingRestrictions' => $enableZoneCallingRestrictions,
                    'enableOriginationRoamingRestrictions' => $enableOriginationRoamingRestrictions,
                    'enableEmergencyOriginationRoamingRestrictions' => $enableEmergencyOriginationRoamingRestrictions,
                    'enableTerminationRoamingRestrictions' => $enableTerminationRoamingRestrictions
                ]
            ];
        }

        # Gets the home zone for a user
        static public function UserZoneCallingRestrictionsGetRequest($userId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId
                ]
            ];
        }

        # Modify the home zone for a user
        static public function UserZoneCallingRestrictionsModifyRequest($userId=null,$homeZoneName=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId,
                    'homeZoneName' => $homeZoneName
                ]
            ];
        }

}