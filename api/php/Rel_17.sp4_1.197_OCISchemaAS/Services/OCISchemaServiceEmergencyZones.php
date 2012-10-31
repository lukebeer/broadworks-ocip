<?php
class OCISchemaServiceEmergencyZones {
        # Add a list of home zones and/or home zone ranges to the the group.
        static public function GroupEmergencyZonesAddHomeZoneListRequest($serviceProviderId=null,$groupId=null,$homeZoneIpAddress=null,$homeZoneIpAddressRange=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId,
                    'homeZoneIpAddress' => $homeZoneIpAddress,
                    'homeZoneIpAddressRange' => $homeZoneIpAddressRange
                ]
            ];
        }

        # Delete a list of home zones and/or home zone ranges to the the group.
        static public function GroupEmergencyZonesDeleteHomeZoneListRequest($serviceProviderId=null,$groupId=null,$homeZoneIpAddress=null,$homeZoneIpAddressRange=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId,
                    'homeZoneIpAddress' => $homeZoneIpAddress,
                    'homeZoneIpAddressRange' => $homeZoneIpAddressRange
                ]
            ];
        }

        # Request the group level data associated with Emergency Zones.
        static public function GroupEmergencyZonesGetHomeZoneListRequest($serviceProviderId=null,$groupId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId
                ]
            ];
        }

        # Request the group level data associated with Emergency Zones.
        static public function GroupEmergencyZonesGetRequest($serviceProviderId=null,$groupId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId
                ]
            ];
        }

        # Modify a list of home zones and/or home zone ranges.
        static public function GroupEmergencyZonesModifyHomeZoneListRequest($serviceProviderId=null,$groupId=null,$homeZoneIpAddressList=null,$homeZoneIpAddressRangeList=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId,
                    'homeZoneIpAddressList' => $homeZoneIpAddressList,
                    'homeZoneIpAddressRangeList' => $homeZoneIpAddressRangeList
                ]
            ];
        }

        # Modify the group level data associated with Emergency Zones.
        static public function GroupEmergencyZonesModifyRequest($serviceProviderId=null,$groupId=null,$isActive=null,$emergencyZonesProhibition=null,$sendEmergencyCallNotifyEmail=null,$emergencyCallNotifyEmailAddress=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId,
                    'isActive' => $isActive,
                    'emergencyZonesProhibition' => $emergencyZonesProhibition,
                    'sendEmergencyCallNotifyEmail' => $sendEmergencyCallNotifyEmail,
                    'emergencyCallNotifyEmailAddress' => $emergencyCallNotifyEmailAddress
                ]
            ];
        }

        # Request the system level data associated with Emergency Zones.
        static public function SystemEmergencyZonesGetRequest() {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => null
            ];
        }

        # Modify the system level data associated with Emergency Zones.
        static public function SystemEmergencyZonesModifyRequest($defaultFromAddress=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'defaultFromAddress' => $defaultFromAddress
                ]
            ];
        }

}