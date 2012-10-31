<?php
class OCISchemaServiceSMDIMessageDesk {
        # Request to add a SMDI Server to the system.
        static public function SystemSMDIMessageDeskAddServerRequest($deviceName=null,$netAddress=null,$port=null,$description=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'deviceName' => $deviceName,
                    'netAddress' => $netAddress,
                    'port' => $port,
                    'description' => $description
                ]
            ];
        }

        # Request to delete a SMDI Server from the system.
        static public function SystemSMDIMessageDeskDeleteServerRequest($deviceName=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'deviceName' => $deviceName
                ]
            ];
        }

        # Request to get a list of SMDI Servers defined in the system.
        static public function SystemSMDIMessageDeskGetServerListRequest() {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => null
            ];
        }

        # Request to modify a SMDI Server in the system.
        static public function SystemSMDIMessageDeskModifyServerRequest($deviceName=null,$netAddress=null,$port=null,$description=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'deviceName' => $deviceName,
                    'netAddress' => $netAddress,
                    'port' => $port,
                    'description' => $description
                ]
            ];
        }

        # Request to add a SMDI Server route to the system.
        static public function SystemSMDIMessageDeskAddServerRouteRequest($routeDestination=null,$deviceName=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'routeDestination' => $routeDestination,
                    'deviceName' => $deviceName
                ]
            ];
        }

        # Request to delete a SMDI Server route from the system.
        static public function SystemSMDIMessageDeskDeleteServerRouteRequest($routeDestination=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'routeDestination' => $routeDestination
                ]
            ];
        }

        # Request to get a list of SMDI Servers routes in the system.
        static public function SystemSMDIMessageDeskGetServerRouteListRequest() {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => null
            ];
        }

        # Replace the list of devices associated with a SMDI server route destination.
        static public function SystemSMDIMessageDeskModifyServerRouteRequest($routeDestination=null,$deviceNameList=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'routeDestination' => $routeDestination,
                    'deviceNameList' => $deviceNameList
                ]
            ];
        }

        # Request to add a SMDI Server for a user.
        static public function UserSMDIMessageDeskAddServerRequest($userId=null,$deviceName=null,$netAddress=null,$port=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId,
                    'deviceName' => $deviceName,
                    'netAddress' => $netAddress,
                    'port' => $port
                ]
            ];
        }

        # Request to delete a list of SMDI Servers for a user.
        static public function UserSMDIMessageDeskDeleteServerListRequest($userId=null,$deviceName=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId,
                    'deviceName' => $deviceName
                ]
            ];
        }

        # Get the user's SMDI Message Desk service personal setting.
        static public function UserSMDIMessageDeskGetRequest($userId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId
                ]
            ];
        }

        # Request to get a list of SMDI Servers defined for a user.
        static public function UserSMDIMessageDeskGetServerListRequest($userId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId
                ]
            ];
        }

        # Modify the user's SMDI Message Desk service setting.
        static public function UserSMDIMessageDeskModifyRequest($userId=null,$isActive=null,$messageDeskNumber=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId,
                    'isActive' => $isActive,
                    'messageDeskNumber' => $messageDeskNumber
                ]
            ];
        }

}