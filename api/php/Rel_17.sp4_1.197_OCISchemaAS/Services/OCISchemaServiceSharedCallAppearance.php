<?php
class OCISchemaServiceSharedCallAppearance {
        # Associate an access device instance to the user's Shared Call Appearance.
        static public function UserSharedCallAppearanceAddEndpointRequest14sp2($userId=null,$accessDeviceEndpoint=null,$isActive=null,$allowOrigination=null,$allowTermination=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId,
                    'accessDeviceEndpoint' => $accessDeviceEndpoint,
                    'isActive' => $isActive,
                    'allowOrigination' => $allowOrigination,
                    'allowTermination' => $allowTermination
                ]
            ];
        }

        # Disassociate one or more of a user's Shared Call Appearance endpoints.
        static public function UserSharedCallAppearanceDeleteEndpointListRequest14($userId=null,$accessDeviceEndpoint=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId,
                    'accessDeviceEndpoint' => $accessDeviceEndpoint
                ]
            ];
        }

        # Get the user's Shared Call Appearance endpoint setting.
        static public function UserSharedCallAppearanceGetEndpointRequest($userId=null,$accessDeviceEndpoint=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId,
                    'accessDeviceEndpoint' => $accessDeviceEndpoint
                ]
            ];
        }

        # Get the user's Shared Call Appearance service setting.
        static public function UserSharedCallAppearanceGetRequest16sp2($userId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId
                ]
            ];
        }

        # Associate/Disassociate an access device instance to the user's Shared Call Appearance.
        static public function UserSharedCallAppearanceModifyEndpointRequest($userId=null,$accessDeviceEndpoint=null,$isActive=null,$allowOrigination=null,$allowTermination=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId,
                    'accessDeviceEndpoint' => $accessDeviceEndpoint,
                    'isActive' => $isActive,
                    'allowOrigination' => $allowOrigination,
                    'allowTermination' => $allowTermination
                ]
            ];
        }

        # Modify the user's Shared Call Appearance service setting.
        static public function UserSharedCallAppearanceModifyRequest($userId=null,$alertAllAppearancesForClickToDialCalls=null,$alertAllAppearancesForGroupPagingCalls=null,$allowSCACallRetrieve=null,$multipleCallArrangementIsActive=null,$allowBridgingBetweenLocations=null,$bridgeWarningTone=null,$enableCallParkNotification=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId,
                    'alertAllAppearancesForClickToDialCalls' => $alertAllAppearancesForClickToDialCalls,
                    'alertAllAppearancesForGroupPagingCalls' => $alertAllAppearancesForGroupPagingCalls,
                    'allowSCACallRetrieve' => $allowSCACallRetrieve,
                    'multipleCallArrangementIsActive' => $multipleCallArrangementIsActive,
                    'allowBridgingBetweenLocations' => $allowBridgingBetweenLocations,
                    'bridgeWarningTone' => $bridgeWarningTone,
                    'enableCallParkNotification' => $enableCallParkNotification
                ]
            ];
        }

}