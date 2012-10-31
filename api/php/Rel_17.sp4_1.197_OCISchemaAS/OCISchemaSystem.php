<?php
class OCISchemaSystem {
        # Request to add a system-level access device.
        static public function SystemAccessDeviceAddRequest($deviceName=null,$deviceType=null,$protocol=null,$netAddress=null,$port=null,$outboundProxyServerNetAddress=null,$stunServerNetAddress=null,$macAddress=null,$serialNumber=null,$description=null,$physicalLocation=null,$transportProtocol=null,$mobilityManagerProvisioningURL=null,$mobilityManagerProvisioningUserName=null,$mobilityManagerProvisioningPassword=null,$mobilityManagerDefaultOriginatingServiceKey=null,$mobilityManagerDefaultTerminatingServiceKey=null,$useCustomUserNamePassword=null,$accessDeviceCredentials=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'deviceName' => $deviceName,
                    'deviceType' => $deviceType,
                    'protocol' => $protocol,
                    'netAddress' => $netAddress,
                    'port' => $port,
                    'outboundProxyServerNetAddress' => $outboundProxyServerNetAddress,
                    'stunServerNetAddress' => $stunServerNetAddress,
                    'macAddress' => $macAddress,
                    'serialNumber' => $serialNumber,
                    'description' => $description,
                    'physicalLocation' => $physicalLocation,
                    'transportProtocol' => $transportProtocol,
                    'mobilityManagerProvisioningURL' => $mobilityManagerProvisioningURL,
                    'mobilityManagerProvisioningUserName' => $mobilityManagerProvisioningUserName,
                    'mobilityManagerProvisioningPassword' => $mobilityManagerProvisioningPassword,
                    'mobilityManagerDefaultOriginatingServiceKey' => $mobilityManagerDefaultOriginatingServiceKey,
                    'mobilityManagerDefaultTerminatingServiceKey' => $mobilityManagerDefaultTerminatingServiceKey,
                    'useCustomUserNamePassword' => $useCustomUserNamePassword,
                    'accessDeviceCredentials' => $accessDeviceCredentials
                ]
            ];
        }

        # Request to add a static configuration tag for a system access device.
        static public function SystemAccessDeviceCustomTagAddRequest($deviceName=null,$tagName=null,$tagValue=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'deviceName' => $deviceName,
                    'tagName' => $tagName,
                    'tagValue' => $tagValue
                ]
            ];
        }

        # Request to delete static configuration tags for a system access device.
        static public function SystemAccessDeviceCustomTagDeleteListRequest($deviceName=null,$tagName=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'deviceName' => $deviceName,
                    'tagName' => $tagName
                ]
            ];
        }

        # Request to get the list of custom configuration tags managed by the Device Management System, on a per-device profile basis.
        static public function SystemAccessDeviceCustomTagGetListRequest($deviceName=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'deviceName' => $deviceName
                ]
            ];
        }

        # Request to modify a static configuration tag for a system access device.
        static public function SystemAccessDeviceCustomTagModifyRequest($deviceName=null,$tagName=null,$tagValue=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'deviceName' => $deviceName,
                    'tagName' => $tagName,
                    'tagValue' => $tagValue
                ]
            ];
        }

        # Request to delete a specified system access device.
        static public function SystemAccessDeviceDeleteRequest($deviceName=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'deviceName' => $deviceName
                ]
            ];
        }

        # Request to modify a specified system access device file.
        static public function SystemAccessDeviceFileModifyRequest14sp8($deviceName=null,$fileFormat=null,$fileSource=null,$uploadFile=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'deviceName' => $deviceName,
                    'fileFormat' => $fileFormat,
                    'fileSource' => $fileSource,
                    'uploadFile' => $uploadFile
                ]
            ];
        }

        # Request to get the list of device files managed by the Device Management System, on a per-device profile basis.
        static public function SystemAccessDeviceFileGetListRequest14sp8($deviceName=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'deviceName' => $deviceName
                ]
            ];
        }

        # Request to get a device profile file.
        static public function SystemAccessDeviceFileGetRequest16sp1($deviceName=null,$fileFormat=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'deviceName' => $deviceName,
                    'fileFormat' => $fileFormat
                ]
            ];
        }

        # Requests the list of all access devices in the entire system.
        static public function SystemAccessDeviceGetAllRequest($responseSizeLimit=null,$searchCriteriaDeviceName=null,$searchCriteriaDeviceMACAddress=null,$searchCriteriaDeviceNetAddress=null,$searchCriteriaGroupId=null,$searchCriteriaExactDeviceType=null,$searchCriteriaExactDeviceServiceProvider=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'responseSizeLimit' => $responseSizeLimit,
                    'searchCriteriaDeviceName' => $searchCriteriaDeviceName,
                    'searchCriteriaDeviceMACAddress' => $searchCriteriaDeviceMACAddress,
                    'searchCriteriaDeviceNetAddress' => $searchCriteriaDeviceNetAddress,
                    'searchCriteriaGroupId' => $searchCriteriaGroupId,
                    'searchCriteriaExactDeviceType' => $searchCriteriaExactDeviceType,
                    'searchCriteriaExactDeviceServiceProvider' => $searchCriteriaExactDeviceServiceProvider
                ]
            ];
        }

        # Requests the list of access devices defined at the System-level.
        static public function SystemAccessDeviceGetListRequest14($responseSizeLimit=null,$searchCriteriaDeviceName=null,$searchCriteriaDeviceMACAddress=null,$searchCriteriaDeviceNetAddress=null,$searchCriteriaExactDeviceType=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'responseSizeLimit' => $responseSizeLimit,
                    'searchCriteriaDeviceName' => $searchCriteriaDeviceName,
                    'searchCriteriaDeviceMACAddress' => $searchCriteriaDeviceMACAddress,
                    'searchCriteriaDeviceNetAddress' => $searchCriteriaDeviceNetAddress,
                    'searchCriteriaExactDeviceType' => $searchCriteriaExactDeviceType
                ]
            ];
        }

        # Requests the configuration of a specified system access device.
        static public function SystemAccessDeviceGetRequest16($deviceName=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'deviceName' => $deviceName
                ]
            ];
        }

        # Requests the users associated with a specified system access device.
        static public function SystemAccessDeviceGetUserListRequest($deviceName=null,$responseSizeLimit=null,$searchCriteriaLinePortUserPart=null,$searchCriteriaLinePortDomain=null,$searchCriteriaUserLastName=null,$searchCriteriaUserFirstName=null,$searchCriteriaDn=null,$searchCriteriaUserId=null,$searchCriteriaGroupId=null,$searchCriteriaExactServiceProvider=null,$searchCriteriaExactEndpointType=null,$searchCriteriaExactUserType=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'deviceName' => $deviceName,
                    'responseSizeLimit' => $responseSizeLimit,
                    'searchCriteriaLinePortUserPart' => $searchCriteriaLinePortUserPart,
                    'searchCriteriaLinePortDomain' => $searchCriteriaLinePortDomain,
                    'searchCriteriaUserLastName' => $searchCriteriaUserLastName,
                    'searchCriteriaUserFirstName' => $searchCriteriaUserFirstName,
                    'searchCriteriaDn' => $searchCriteriaDn,
                    'searchCriteriaUserId' => $searchCriteriaUserId,
                    'searchCriteriaGroupId' => $searchCriteriaGroupId,
                    'searchCriteriaExactServiceProvider' => $searchCriteriaExactServiceProvider,
                    'searchCriteriaExactEndpointType' => $searchCriteriaExactEndpointType,
                    'searchCriteriaExactUserType' => $searchCriteriaExactUserType
                ]
            ];
        }

        # Request to modify a specified system access device.
        static public function SystemAccessDeviceModifyRequest($deviceName=null,$protocol=null,$netAddress=null,$port=null,$outboundProxyServerNetAddress=null,$stunServerNetAddress=null,$macAddress=null,$serialNumber=null,$description=null,$physicalLocation=null,$transportProtocol=null,$mobilityManagerProvisioningURL=null,$mobilityManagerProvisioningUserName=null,$mobilityManagerProvisioningPassword=null,$mobilityManagerDefaultOriginatingServiceKey=null,$mobilityManagerDefaultTerminatingServiceKey=null,$useCustomUserNamePassword=null,$accessDeviceCredentials=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'deviceName' => $deviceName,
                    'protocol' => $protocol,
                    'netAddress' => $netAddress,
                    'port' => $port,
                    'outboundProxyServerNetAddress' => $outboundProxyServerNetAddress,
                    'stunServerNetAddress' => $stunServerNetAddress,
                    'macAddress' => $macAddress,
                    'serialNumber' => $serialNumber,
                    'description' => $description,
                    'physicalLocation' => $physicalLocation,
                    'transportProtocol' => $transportProtocol,
                    'mobilityManagerProvisioningURL' => $mobilityManagerProvisioningURL,
                    'mobilityManagerProvisioningUserName' => $mobilityManagerProvisioningUserName,
                    'mobilityManagerProvisioningPassword' => $mobilityManagerProvisioningPassword,
                    'mobilityManagerDefaultOriginatingServiceKey' => $mobilityManagerDefaultOriginatingServiceKey,
                    'mobilityManagerDefaultTerminatingServiceKey' => $mobilityManagerDefaultTerminatingServiceKey,
                    'useCustomUserNamePassword' => $useCustomUserNamePassword,
                    'accessDeviceCredentials' => $accessDeviceCredentials
                ]
            ];
        }

        # Request to modify attributes for line/ports assigned on the system device profile.
        static public function SystemAccessDeviceModifyUserRequest($deviceName=null,$linePort=null,$isPrimaryLinePort=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'deviceName' => $deviceName,
                    'linePort' => $linePort,
                    'isPrimaryLinePort' => $isPrimaryLinePort
                ]
            ];
        }

        # Add a device type to be monitored.
        static public function SystemAccessDeviceMonitorAddDeviceTypeRequest() {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => null
            ];
        }

        # Remove a device type to be monitored.
        static public function SystemAccessDeviceMonitorDeleteDeviceTypeRequest() {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => null
            ];
        }

        # Get a list of monitored device types.
        static public function SystemAccessDeviceMonitorGetDeviceTypeListRequest() {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => null
            ];
        }

        # Request to get the list of Access Device Monitor system parameters.
        static public function SystemAccessDeviceMonitorParametersGetRequest() {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => null
            ];
        }

        # Request to modify Access Device Monitor system parameters.
        static public function SystemAccessDeviceMonitorParametersModifyRequest($pollingIntervalMinutes=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'pollingIntervalMinutes' => $pollingIntervalMinutes
                ]
            ];
        }

        # Reset a specific system SIP device that supports the reset operation.
        static public function SystemAccessDeviceResetRequest($deviceName=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'deviceName' => $deviceName
                ]
            ];
        }

        # Requests the list of device types supporting enhanced configuration.
        static public function SystemAccessDeviceTypeGetEnhancedConfigurableListRequest() {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => null
            ];
        }

        # Requests the list of access device types.
        static public function SystemAccessDeviceTypeGetListRequest() {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => null
            ];
        }

        # Request to add a ChargingFunctionElement Server to the system.
        static public function SystemAccountingAddChargingFunctionElementServerRequest($address=null,$isNetAddressExtended=null,$type=null,$description=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'address' => $address,
                    'isNetAddressExtended' => $isNetAddressExtended,
                    'type' => $type,
                    'description' => $description
                ]
            ];
        }

        # Request to add a Radius Server to the system.
        static public function SystemAccountingAddRadiusServerRequest($netAddress=null,$port=null,$description=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'netAddress' => $netAddress,
                    'port' => $port,
                    'description' => $description
                ]
            ];
        }

        # Request to delete a ChargingFunctionElementServer from the system.
        static public function SystemAccountingDeleteChargingFunctionElementServerRequest($address=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'address' => $address
                ]
            ];
        }

        # Request to delete a Radius Server from the system.
        static public function SystemAccountingDeleteRadiusServerRequest($netAddress=null,$port=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'netAddress' => $netAddress,
                    'port' => $port
                ]
            ];
        }

        # Request to get a list of ChargingFunctionElementServers defined in the system.
        static public function SystemAccountingGetChargingFunctionElementServerListRequest() {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => null
            ];
        }

        # Request to get a list of Radius Servers defined in the system.
        static public function SystemAccountingGetRadiusServerListRequest() {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => null
            ];
        }

        # Request to modify a ChargingFunctionElementServer in the system.
        static public function SystemAccountingModifyChargingFunctionElementServerRequest($address=null,$type=null,$description=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'address' => $address,
                    'type' => $type,
                    'description' => $description
                ]
            ];
        }

        # Request to modify a Radius Server in the system.
        static public function SystemAccountingModifyRadiusServerRequest($netAddress=null,$port=null,$description=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'netAddress' => $netAddress,
                    'port' => $port,
                    'description' => $description
                ]
            ];
        }

        # Reorder the charging function element servers. You can not add or delete addresses,
        static public function SystemAccountingReorderChargingFunctionElementServerRequest($orderedAddressList=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'orderedAddressList' => $orderedAddressList
                ]
            ];
        }

        # Add a system or provisioning administrator.
        static public function SystemAdminAddRequest($userId=null,$firstName=null,$lastName=null,$password=null,$language=null,$adminType=null,$readOnly=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId,
                    'firstName' => $firstName,
                    'lastName' => $lastName,
                    'password' => $password,
                    'language' => $language,
                    'adminType' => $adminType,
                    'readOnly' => $readOnly
                ]
            ];
        }

        # Delete a system or provisioning administrator.
        static public function SystemAdminDeleteRequest($userId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId
                ]
            ];
        }

        # Get a list of system administrators.
        static public function SystemAdminGetListRequest() {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => null
            ];
        }

        # Get a system or provisioning administrators profile.
        static public function SystemAdminGetRequest($userId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId
                ]
            ];
        }

        # Modify a system or provisioning administrator.
        static public function SystemAdminModifyRequest($userId=null,$firstName=null,$lastName=null,$password=null,$language=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId,
                    'firstName' => $firstName,
                    'lastName' => $lastName,
                    'password' => $password,
                    'language' => $language
                ]
            ];
        }

        # Add a system-level Application Server alias to the system.
        static public function SystemAliasAddRequest($aliasNetAddress=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'aliasNetAddress' => $aliasNetAddress
                ]
            ];
        }

        # Delete a system-level Application Server alias from the system.
        static public function SystemAliasDeleteRequest($aliasNetAddress=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'aliasNetAddress' => $aliasNetAddress
                ]
            ];
        }

        # Requests the list of all system-level Application Server aliases.
        static public function SystemAliasGetListRequest() {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => null
            ];
        }

        # Add an application controller, which is a server where remote 
        static public function SystemApplicationControllerAddRequest($name=null,$subscriberId=null,$channelSetId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'name' => $name,
                    'subscriberId' => $subscriberId,
                    'channelSetId' => $channelSetId
                ]
            ];
        }

        # Delete an application controller.
        static public function SystemApplicationControllerDeleteRequest($name=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'name' => $name
                ]
            ];
        }

        # Get a list of application controllers that are configured for the system.
        static public function SystemApplicationControllerGetListRequest() {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => null
            ];
        }

        # Delete an Application Server set.
        static public function SystemApplicationServerSetDeleteRequest($name=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'name' => $name
                ]
            ];
        }

        # Get list of Application Server sets.
        static public function SystemApplicationServerSetGetListRequest() {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => null
            ];
        }

        # Get list of enterprises, service providers, and service provider groups currently associated to the specified Application Server set.
        static public function SystemApplicationServerSetGetUsageRequest($name=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'name' => $name
                ]
            ];
        }

        # Request to get the list of Application Server Registration system parameters.
        static public function SystemASRParametersGetRequest14sp7() {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => null
            ];
        }

        # Request to modify Application Server Registration system parameters.
        static public function SystemASRParametersModifyRequest14sp7($maxTransmissions=null,$retransmissionDelayMilliSeconds=null,$listeningPort=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'maxTransmissions' => $maxTransmissions,
                    'retransmissionDelayMilliSeconds' => $retransmissionDelayMilliSeconds,
                    'listeningPort' => $listeningPort
                ]
            ];
        }

        # Get the BroadWorks Mobile Manager service system settings.
        static public function SystemBroadWorksMobileManagerGetRequest() {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => null
            ];
        }

        # Modify the BroadWorks Mobile Manager service system settings.
        static public function SystemBroadWorksMobileManagerModifyRequest($scfApiNetAddress1=null,$scfApiNetAddress2=null,$userName=null,$password=null,$emailFromAddress=null,$scfIMSOnly=null,$signalingIPAddress=null,$signalingPort=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'scfApiNetAddress1' => $scfApiNetAddress1,
                    'scfApiNetAddress2' => $scfApiNetAddress2,
                    'userName' => $userName,
                    'password' => $password,
                    'emailFromAddress' => $emailFromAddress,
                    'scfIMSOnly' => $scfIMSOnly,
                    'signalingIPAddress' => $signalingIPAddress,
                    'signalingPort' => $signalingPort
                ]
            ];
        }

        # Requests the list of System Diameter base parameters.
        static public function SystemBwDiameterBaseDataGetRequest17sp3() {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => null
            ];
        }

        # Modifies the System Diameter base parameters.
        static public function SystemBwDiameterBaseDataModifyRequest($xsRealm=null,$xsListeningPort=null,$psRealm=null,$psListeningPort=null,$psRelayThroughXs=null,$xsRelayListeningPort=null,$tcTimerSeconds=null,$twTimerSeconds=null,$requestTimerSeconds=null,$busyPeerDetectionOutstandingTxnCount=null,$busyPeerRestoreOutstandingTxnCount=null,$dynamicEntryInactivityTimerHours=null,$advertisedOfflineBillingApplication=null,$advertisedOnlineBillingApplication=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'xsRealm' => $xsRealm,
                    'xsListeningPort' => $xsListeningPort,
                    'psRealm' => $psRealm,
                    'psListeningPort' => $psListeningPort,
                    'psRelayThroughXs' => $psRelayThroughXs,
                    'xsRelayListeningPort' => $xsRelayListeningPort,
                    'tcTimerSeconds' => $tcTimerSeconds,
                    'twTimerSeconds' => $twTimerSeconds,
                    'requestTimerSeconds' => $requestTimerSeconds,
                    'busyPeerDetectionOutstandingTxnCount' => $busyPeerDetectionOutstandingTxnCount,
                    'busyPeerRestoreOutstandingTxnCount' => $busyPeerRestoreOutstandingTxnCount,
                    'dynamicEntryInactivityTimerHours' => $dynamicEntryInactivityTimerHours,
                    'advertisedOfflineBillingApplication' => $advertisedOfflineBillingApplication,
                    'advertisedOnlineBillingApplication' => $advertisedOnlineBillingApplication
                ]
            ];
        }

        # Add a static entry in the Diameter Peer Table.
        static public function SystemBwDiameterPeerAddRequest($instance=null,$identity=null,$ipAddress=null,$port=null,$enabled=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'instance' => $instance,
                    'identity' => $identity,
                    'ipAddress' => $ipAddress,
                    'port' => $port,
                    'enabled' => $enabled
                ]
            ];
        }

        # Remove a Diameter peer.  A peer cannot be removed if is referenced by a Realm Routing Table entry.
        static public function SystemBwDiameterPeerDeleteRequest($instance=null,$identity=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'instance' => $instance,
                    'identity' => $identity
                ]
            ];
        }

        # Requests the list of Diameter peers.
        static public function SystemBwDiameterPeerGetListRequest() {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => null
            ];
        }

        # Modifies the attributes of an entry in the Diameter Peer Table.
        static public function SystemBwDiameterPeerModifyRequest($instance=null,$identity=null,$ipAddress=null,$port=null,$enabled=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'instance' => $instance,
                    'identity' => $identity,
                    'ipAddress' => $ipAddress,
                    'port' => $port,
                    'enabled' => $enabled
                ]
            ];
        }

        # Add a static entry in the Realm Routing Table.
        static public function SystemBwDiameterRoutingRealmAddRequest($instance=null,$realm=null,$applicationId=null,$default=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'instance' => $instance,
                    'realm' => $realm,
                    'applicationId' => $applicationId,
                    'default' => $default
                ]
            ];
        }

        # Delete a static entry in the Realm Routing Table.
        static public function SystemBwDiameterRoutingRealmDeleteRequest($instance=null,$realm=null,$applicationId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'instance' => $instance,
                    'realm' => $realm,
                    'applicationId' => $applicationId
                ]
            ];
        }

        # Requests the list of Diameter routing realms.
        static public function SystemBwDiameterRoutingRealmGetListRequest() {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => null
            ];
        }

        # Modify a static entry in the Realm Routing Table.
        static public function SystemBwDiameterRoutingRealmModifyRequest($instance=null,$realm=null,$applicationId=null,$default=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'instance' => $instance,
                    'realm' => $realm,
                    'applicationId' => $applicationId,
                    'default' => $default
                ]
            ];
        }

        # Add a Diameter routing peer.  The realm must refer to a Diameter routing realm whose action is relay.  The destinationPeerIdentity must refer to an existing Diameter peer whose mode is active.
        static public function SystemBwDiameterRoutingPeerAddRequest($instance=null,$realm=null,$applicationId=null,$identity=null,$priority=null,$weight=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'instance' => $instance,
                    'realm' => $realm,
                    'applicationId' => $applicationId,
                    'identity' => $identity,
                    'priority' => $priority,
                    'weight' => $weight
                ]
            ];
        }

        # Remove a Diameter routing peer.
        static public function SystemBwDiameterRoutingPeerDeleteRequest($instance=null,$realm=null,$applicationId=null,$identity=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'instance' => $instance,
                    'realm' => $realm,
                    'applicationId' => $applicationId,
                    'identity' => $identity
                ]
            ];
        }

        # Requests the list of Diameter routing peers associated with the specified realm. The response is either SystemBwDiameterRoutingPeerGetListResponse or  ErrorResponse.
        static public function SystemBwDiameterRoutingPeerGetListRequest() {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => null
            ];
        }

        # Modify a Diameter routing peer.  The realm must refer to a Diameter routing realm whose action is relay.  The destinationPeerIdentity must refer to an existing Diameter peer whose mode is active.
        static public function SystemBwDiameterRoutingPeerModifyRequest($instance=null,$realm=null,$applicationId=null,$identity=null,$priority=null,$weight=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'instance' => $instance,
                    'realm' => $realm,
                    'applicationId' => $applicationId,
                    'identity' => $identity,
                    'priority' => $priority,
                    'weight' => $weight
                ]
            ];
        }

        # The response is either a SystemCallProcessingGetPolicyResponse17sp4 or an
        static public function SystemCallProcessingGetPolicyRequest17sp4() {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => null
            ];
        }

        # Modify the system level data associated with Call Processing Policy.
        static public function SystemCallProcessingModifyPolicyRequest15($useMaxSimultaneousCalls=null,$maxSimultaneousCalls=null,$useMaxSimultaneousVideoCalls=null,$maxSimultaneousVideoCalls=null,$useMaxCallTimeForAnsweredCalls=null,$maxCallTimeForAnsweredCallsMinutes=null,$useMaxCallTimeForUnansweredCalls=null,$maxCallTimeForUnansweredCallsMinutes=null,$mediaPolicySelection=null,$supportedMediaSetName=null,$networkUsageSelection=null,$enforceGroupCallingLineIdentityRestriction=null,$enforceEnterpriseCallingLineIdentityRestriction=null,$allowEnterpriseGroupCallTypingForPrivateDialingPlan=null,$allowEnterpriseGroupCallTypingForPublicDialingPlan=null,$overrideCLIDRestrictionForPrivateCallCategory=null,$useEnterpriseCLIDForPrivateCallCategory=null,$enableEnterpriseExtensionDialing=null,$conferenceURI=null,$maxConferenceParties=null,$useMaxConcurrentRedirectedCalls=null,$maxConcurrentRedirectedCalls=null,$useMaxFindMeFollowMeDepth=null,$maxFindMeFollowMeDepth=null,$maxRedirectionDepth=null,$useMaxConcurrentFindMeFollowMeInvocations=null,$maxConcurrentFindMeFollowMeInvocations=null,$clidPolicy=null,$emergencyClidPolicy=null,$allowAlternateNumbersForRedirectingIdentity=null,$enableDialableCallerID=null,$blockCallingNameForExternalCalls=null,$allowConfigurableCLIDForRedirectingIdentity=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
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
                    'networkUsageSelection' => $networkUsageSelection,
                    'enforceGroupCallingLineIdentityRestriction' => $enforceGroupCallingLineIdentityRestriction,
                    'enforceEnterpriseCallingLineIdentityRestriction' => $enforceEnterpriseCallingLineIdentityRestriction,
                    'allowEnterpriseGroupCallTypingForPrivateDialingPlan' => $allowEnterpriseGroupCallTypingForPrivateDialingPlan,
                    'allowEnterpriseGroupCallTypingForPublicDialingPlan' => $allowEnterpriseGroupCallTypingForPublicDialingPlan,
                    'overrideCLIDRestrictionForPrivateCallCategory' => $overrideCLIDRestrictionForPrivateCallCategory,
                    'useEnterpriseCLIDForPrivateCallCategory' => $useEnterpriseCLIDForPrivateCallCategory,
                    'enableEnterpriseExtensionDialing' => $enableEnterpriseExtensionDialing,
                    'conferenceURI' => $conferenceURI,
                    'maxConferenceParties' => $maxConferenceParties,
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
                    'enableDialableCallerID' => $enableDialableCallerID,
                    'blockCallingNameForExternalCalls' => $blockCallingNameForExternalCalls,
                    'allowConfigurableCLIDForRedirectingIdentity' => $allowConfigurableCLIDForRedirectingIdentity
                ]
            ];
        }

        # Add an entry to the CAP access control list.
        static public function SystemCAPAddACLEntryRequest14($netAddress=null,$description=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'netAddress' => $netAddress,
                    'description' => $description
                ]
            ];
        }

        # Delete an entry from the CAP access control list.
        static public function SystemCAPDeleteACLEntryRequest($netAddress=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'netAddress' => $netAddress
                ]
            ];
        }

        # Get the CAP access control list.
        static public function SystemCAPGetACLListRequest14() {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => null
            ];
        }

        # Modify an entry from the CAP access control list.
        static public function SystemCAPModifyACLEntryRequest14($netAddress=null,$description=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'netAddress' => $netAddress,
                    'description' => $description
                ]
            ];
        }

        # Request to get the list of CAP system parameters.
        static public function SystemCAPParametersGetRequest14sp3() {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => null
            ];
        }

        # Request to modify CAP system parameters.
        static public function SystemCAPParametersModifyRequest($serverPort=null,$maxClientConnections=null,$enableConnectionPing=null,$connectionPingIntervalMinutes=null,$CCC2ServerPort=null,$CCC2MaxClientConnections=null,$capServerCallCenterPort=null,$capServerCallCenterMaxClientConnections=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serverPort' => $serverPort,
                    'maxClientConnections' => $maxClientConnections,
                    'enableConnectionPing' => $enableConnectionPing,
                    'connectionPingIntervalMinutes' => $connectionPingIntervalMinutes,
                    'CCC2ServerPort' => $CCC2ServerPort,
                    'CCC2MaxClientConnections' => $CCC2MaxClientConnections,
                    'capServerCallCenterPort' => $capServerCallCenterPort,
                    'capServerCallCenterMaxClientConnections' => $capServerCallCenterMaxClientConnections
                ]
            ];
        }

        # Request to get the list of Client Session (web and CLI) system parameters.
        static public function SystemClientSessionParametersGetRequest() {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => null
            ];
        }

        # Request to modify Client Session (web and CLI) system parameters.
        static public function SystemClientSessionParametersModifyRequest($enableInactivityTimeout=null,$inactivityTimeoutMinutes=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'enableInactivityTimeout' => $enableInactivityTimeout,
                    'inactivityTimeoutMinutes' => $inactivityTimeoutMinutes
                ]
            ];
        }

        # Request to add a codec to the ordered list of codecs supported by the system.
        static public function SystemCodecAddRequest($codec=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'codec' => $codec
                ]
            ];
        }

        # Request to delete a supported codec from the system.
        static public function SystemCodecDeleteRequest($codec=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'codec' => $codec
                ]
            ];
        }

        # Request to get the ordered list of supported codecs in the system.
        static public function SystemCodecGetListRequest() {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => null
            ];
        }

        # Add a Communication Barring Alternate Call Indicator.
        static public function SystemCommunicationBarringAlternateCallIndicatorAddRequest($alternateCallIndicator=null,$networkServerAlternateCallIndicator=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'alternateCallIndicator' => $alternateCallIndicator,
                    'networkServerAlternateCallIndicator' => $networkServerAlternateCallIndicator
                ]
            ];
        }

        # Delete a Communication Barring Alternate Call Indicator.
        static public function SystemCommunicationBarringAlternateCallIndicatorDeleteRequest($alternateCallIndicator=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'alternateCallIndicator' => $alternateCallIndicator
                ]
            ];
        }

        # Get all the Communication Barring Alternate Call Indicator defined
        static public function SystemCommunicationBarringAlternateCallIndicatorGetListRequest() {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => null
            ];
        }

        # Modify a Communication Barring Alternate Call Indicator.
        static public function SystemCommunicationBarringAlternateCallIndicatorModifyRequest($alternateCallIndicator=null,$networkServerAlternateCallIndicator=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'alternateCallIndicator' => $alternateCallIndicator,
                    'networkServerAlternateCallIndicator' => $networkServerAlternateCallIndicator
                ]
            ];
        }

        # Add a Communication Barring Call Type.
        static public function SystemCommunicationBarringCallTypeAddRequest($callType=null,$networkServerCallType=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'callType' => $callType,
                    'networkServerCallType' => $networkServerCallType
                ]
            ];
        }

        # Delete a Communication Barring Call Type.
        static public function SystemCommunicationBarringCallTypeDeleteRequest($callType=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'callType' => $callType
                ]
            ];
        }

        # Get all the Communication Barring Call Types defined in the system.
        static public function SystemCommunicationBarringCallTypeGetListRequest() {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => null
            ];
        }

        # Modify a Communication Barring Call Type.
        static public function SystemCommunicationBarringCallTypeModifyRequest($callType=null,$networkServerCallType=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'callType' => $callType,
                    'networkServerCallType' => $networkServerCallType
                ]
            ];
        }

        # Add a new Communication Barring Criteria.
        static public function SystemCommunicationBarringCriteriaAddRequest17($name=null,$description=null,$matchCallType=null,$matchAlternateCallIndicator=null,$matchVirtualOnNetCallType=null,$matchPublicNetwork=null,$matchPrivateNetwork=null,$matchLocalCategory=null,$matchNationalCategory=null,$matchInterlataCategory=null,$matchIntralataCategory=null,$matchInternationalCategory=null,$matchPrivateCategory=null,$matchEmergencyCategory=null,$matchOtherCategory=null,$matchInterNetwork=null,$matchInterHostingNE=null,$matchInterAS=null,$matchIntraAS=null,$matchChargeCalls=null,$matchNoChargeCalls=null,$matchGroupCalls=null,$matchEnterpriseCalls=null,$matchNetworkCalls=null,$matchNetworkURLCalls=null,$matchRepairCalls=null,$matchEmergencyCalls=null,$matchInternalCalls=null,$matchLocation=null,$matchRoaming=null,$timeSchedule=null,$holidaySchedule=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'name' => $name,
                    'description' => $description,
                    'matchCallType' => $matchCallType,
                    'matchAlternateCallIndicator' => $matchAlternateCallIndicator,
                    'matchVirtualOnNetCallType' => $matchVirtualOnNetCallType,
                    'matchPublicNetwork' => $matchPublicNetwork,
                    'matchPrivateNetwork' => $matchPrivateNetwork,
                    'matchLocalCategory' => $matchLocalCategory,
                    'matchNationalCategory' => $matchNationalCategory,
                    'matchInterlataCategory' => $matchInterlataCategory,
                    'matchIntralataCategory' => $matchIntralataCategory,
                    'matchInternationalCategory' => $matchInternationalCategory,
                    'matchPrivateCategory' => $matchPrivateCategory,
                    'matchEmergencyCategory' => $matchEmergencyCategory,
                    'matchOtherCategory' => $matchOtherCategory,
                    'matchInterNetwork' => $matchInterNetwork,
                    'matchInterHostingNE' => $matchInterHostingNE,
                    'matchInterAS' => $matchInterAS,
                    'matchIntraAS' => $matchIntraAS,
                    'matchChargeCalls' => $matchChargeCalls,
                    'matchNoChargeCalls' => $matchNoChargeCalls,
                    'matchGroupCalls' => $matchGroupCalls,
                    'matchEnterpriseCalls' => $matchEnterpriseCalls,
                    'matchNetworkCalls' => $matchNetworkCalls,
                    'matchNetworkURLCalls' => $matchNetworkURLCalls,
                    'matchRepairCalls' => $matchRepairCalls,
                    'matchEmergencyCalls' => $matchEmergencyCalls,
                    'matchInternalCalls' => $matchInternalCalls,
                    'matchLocation' => $matchLocation,
                    'matchRoaming' => $matchRoaming,
                    'timeSchedule' => $timeSchedule,
                    'holidaySchedule' => $holidaySchedule
                ]
            ];
        }

        # Delete an existing Communication Barring Criteria.
        static public function SystemCommunicationBarringCriteriaDeleteRequest($name=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'name' => $name
                ]
            ];
        }

        # Get an existing Communication Barring Criteria.
        static public function SystemCommunicationBarringCriteriaGetRequest17($name=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'name' => $name
                ]
            ];
        }

        # Get the list of all Communication Barring Criteria.
        static public function SystemCommunicationBarringCriteriaGetListRequest() {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => null
            ];
        }

        # Modify an existing Communication Barring Criteria.
        static public function SystemCommunicationBarringCriteriaModifyRequest($name=null,$newName=null,$description=null,$matchCallType=null,$matchAlternateCallIndicator=null,$matchVirtualOnNetCallType=null,$matchPublicNetwork=null,$matchPrivateNetwork=null,$matchLocalCategory=null,$matchNationalCategory=null,$matchInterlataCategory=null,$matchIntralataCategory=null,$matchInternationalCategory=null,$matchPrivateCategory=null,$matchEmergencyCategory=null,$matchOtherCategory=null,$matchInterNetwork=null,$matchInterHostingNE=null,$matchInterAS=null,$matchIntraAS=null,$matchChargeCalls=null,$matchNoChargeCalls=null,$matchGroupCalls=null,$matchEnterpriseCalls=null,$matchNetworkCalls=null,$matchNetworkURLCalls=null,$matchRepairCalls=null,$matchEmergencyCalls=null,$matchInternalCalls=null,$matchLocation=null,$matchRoaming=null,$timeSchedule=null,$holidaySchedule=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'name' => $name,
                    'newName' => $newName,
                    'description' => $description,
                    'matchCallType' => $matchCallType,
                    'matchAlternateCallIndicator' => $matchAlternateCallIndicator,
                    'matchVirtualOnNetCallType' => $matchVirtualOnNetCallType,
                    'matchPublicNetwork' => $matchPublicNetwork,
                    'matchPrivateNetwork' => $matchPrivateNetwork,
                    'matchLocalCategory' => $matchLocalCategory,
                    'matchNationalCategory' => $matchNationalCategory,
                    'matchInterlataCategory' => $matchInterlataCategory,
                    'matchIntralataCategory' => $matchIntralataCategory,
                    'matchInternationalCategory' => $matchInternationalCategory,
                    'matchPrivateCategory' => $matchPrivateCategory,
                    'matchEmergencyCategory' => $matchEmergencyCategory,
                    'matchOtherCategory' => $matchOtherCategory,
                    'matchInterNetwork' => $matchInterNetwork,
                    'matchInterHostingNE' => $matchInterHostingNE,
                    'matchInterAS' => $matchInterAS,
                    'matchIntraAS' => $matchIntraAS,
                    'matchChargeCalls' => $matchChargeCalls,
                    'matchNoChargeCalls' => $matchNoChargeCalls,
                    'matchGroupCalls' => $matchGroupCalls,
                    'matchEnterpriseCalls' => $matchEnterpriseCalls,
                    'matchNetworkCalls' => $matchNetworkCalls,
                    'matchNetworkURLCalls' => $matchNetworkURLCalls,
                    'matchRepairCalls' => $matchRepairCalls,
                    'matchEmergencyCalls' => $matchEmergencyCalls,
                    'matchInternalCalls' => $matchInternalCalls,
                    'matchLocation' => $matchLocation,
                    'matchRoaming' => $matchRoaming,
                    'timeSchedule' => $timeSchedule,
                    'holidaySchedule' => $holidaySchedule
                ]
            ];
        }

        # Add a new Communication Barring Digit Pattern Criteria.
        static public function SystemCommunicationBarringDigitPatternCriteriaAddRequest($name=null,$description=null,$matchDigitPattern=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'name' => $name,
                    'description' => $description,
                    'matchDigitPattern' => $matchDigitPattern
                ]
            ];
        }

        # Delete an existing Communication Barring Digit Pattern Criteria.
        static public function SystemCommunicationBarringDigitPatternCriteriaDeleteRequest($name=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'name' => $name
                ]
            ];
        }

        # Get the list of all Digit Pattern Criteria defined at the system level.
        static public function SystemCommunicationBarringDigitPatternCriteriaGetListRequest() {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => null
            ];
        }

        # Get an existing Digit Pattern Criteria.
        static public function SystemCommunicationBarringDigitPatternCriteriaGetPatternListRequest($name=null,$responseSizeLimit=null,$searchCriteriaDigitPattern=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'name' => $name,
                    'responseSizeLimit' => $responseSizeLimit,
                    'searchCriteriaDigitPattern' => $searchCriteriaDigitPattern
                ]
            ];
        }

        # Get an existing Communication Barring Digit Pattern Criteria.
        static public function SystemCommunicationBarringDigitPatternCriteriaGetRequest($name=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'name' => $name
                ]
            ];
        }

        # Modify an existing Communication Barring Digit Pattern Criteria.
        static public function SystemCommunicationBarringDigitPatternCriteriaModifyRequest($name=null,$newName=null,$description=null,$addMatchDigitPattern=null,$deleteMatchDigitPattern=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'name' => $name,
                    'newName' => $newName,
                    'description' => $description,
                    'addMatchDigitPattern' => $addMatchDigitPattern,
                    'deleteMatchDigitPattern' => $deleteMatchDigitPattern
                ]
            ];
        }

        # Request the system level data associated with Communication Barring.
        static public function SystemCommunicationBarringGetRequest() {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => null
            ];
        }

        # Modify the system level data associated with Communication Barring.
        static public function SystemCommunicationBarringModifyRequest($directTransferScreening=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'directTransferScreening' => $directTransferScreening
                ]
            ];
        }

        # Add a new Communication Barring Profile.
        static public function SystemCommunicationBarringProfileAddRequest17sp3($name=null,$description=null,$originatingDefaultAction=null,$originatingDefaultTreatmentId=null,$originatingDefaultTransferNumber=null,$originatingDefaultCallTimeout=null,$originatingRule=null,$redirectingDefaultAction=null,$redirectingDefaultCallTimeout=null,$redirectingRule=null,$incomingDefaultAction=null,$incomingDefaultCallTimeout=null,$incomingRule=null,$callMeNowDefaultAction=null,$callMeNowDefaultCallTimeout=null,$callMeNowRule=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'name' => $name,
                    'description' => $description,
                    'originatingDefaultAction' => $originatingDefaultAction,
                    'originatingDefaultTreatmentId' => $originatingDefaultTreatmentId,
                    'originatingDefaultTransferNumber' => $originatingDefaultTransferNumber,
                    'originatingDefaultCallTimeout' => $originatingDefaultCallTimeout,
                    'originatingRule' => $originatingRule,
                    'redirectingDefaultAction' => $redirectingDefaultAction,
                    'redirectingDefaultCallTimeout' => $redirectingDefaultCallTimeout,
                    'redirectingRule' => $redirectingRule,
                    'incomingDefaultAction' => $incomingDefaultAction,
                    'incomingDefaultCallTimeout' => $incomingDefaultCallTimeout,
                    'incomingRule' => $incomingRule,
                    'callMeNowDefaultAction' => $callMeNowDefaultAction,
                    'callMeNowDefaultCallTimeout' => $callMeNowDefaultCallTimeout,
                    'callMeNowRule' => $callMeNowRule
                ]
            ];
        }

        # Delete an existing Communication Barring Profile.
        static public function SystemCommunicationBarringProfileDeleteRequest($name=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'name' => $name
                ]
            ];
        }

        # Get the list of Communication Barring Proifles that uses a specific
        static public function SystemCommunicationBarringProfileGetCriteriaUsageListRequest($name=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'name' => $name
                ]
            ];
        }

        # Get the list of Profiles that use a specific Digit Pattern Criteria.
        static public function SystemCommunicationBarringProfileGetDigitPatternCriteriaUsageListRequest($name=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'name' => $name
                ]
            ];
        }

        # Get the list of all Communication Barring Profiles.
        static public function SystemCommunicationBarringProfileGetListRequest() {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => null
            ];
        }

        # Get an existing Communication Barring Profile.
        static public function SystemCommunicationBarringProfileGetRequest17sp3($name=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'name' => $name
                ]
            ];
        }

        # Modify an existing Communication Barring Profile.
        static public function SystemCommunicationBarringProfileModifyRequest($name=null,$newName=null,$description=null,$originatingDefaultAction=null,$originatingDefaultTreatmentId=null,$originatingDefaultTransferNumber=null,$originatingDefaultCallTimeout=null,$originatingRule=null,$redirectingDefaultAction=null,$redirectingDefaultCallTimeout=null,$redirectingRule=null,$incomingDefaultAction=null,$incomingDefaultCallTimeout=null,$incomingRule=null,$callMeNowDefaultAction=null,$callMeNowDefaultCallTimeout=null,$callMeNowRule=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'name' => $name,
                    'newName' => $newName,
                    'description' => $description,
                    'originatingDefaultAction' => $originatingDefaultAction,
                    'originatingDefaultTreatmentId' => $originatingDefaultTreatmentId,
                    'originatingDefaultTransferNumber' => $originatingDefaultTransferNumber,
                    'originatingDefaultCallTimeout' => $originatingDefaultCallTimeout,
                    'originatingRule' => $originatingRule,
                    'redirectingDefaultAction' => $redirectingDefaultAction,
                    'redirectingDefaultCallTimeout' => $redirectingDefaultCallTimeout,
                    'redirectingRule' => $redirectingRule,
                    'incomingDefaultAction' => $incomingDefaultAction,
                    'incomingDefaultCallTimeout' => $incomingDefaultCallTimeout,
                    'incomingRule' => $incomingRule,
                    'callMeNowDefaultAction' => $callMeNowDefaultAction,
                    'callMeNowDefaultCallTimeout' => $callMeNowDefaultCallTimeout,
                    'callMeNowRule' => $callMeNowRule
                ]
            ];
        }

        # Get the list of Service Providers that use a specific
        static public function SystemCommunicationBarringServiceProviderGetCriteriaUsageListRequest($name=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'name' => $name
                ]
            ];
        }

        # Request to get the File System parameters.
        static public function SystemConfigurableFileSystemGetRequest() {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => null
            ];
        }

        # Request to modify File System parameters.
        static public function SystemConfigurableFileSystemModifyRequest($mediaDirectory=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'mediaDirectory' => $mediaDirectory
                ]
            ];
        }

        # Add a configurable treatment.
        static public function SystemConfigurableTreatmentAddRequest($treatmentId=null,$chargeIndicator=null,$description=null,$accessSIPStatusCode=null,$accessSIPStatusMessage=null,$networkSIPStatusCode=null,$networkSIPStatusMessage=null,$q850CauseValue=null,$q850Text=null,$accessTreatmentAudioFile=null,$accessTreatmentVideoFile=null,$networkTreatmentAudioFile=null,$networkTreatmentVideoFile=null,$cdrTerminationCause=null,$routeAdvance=null,$internalReleaseCause=null,$accessSendReasonHeader=null,$networkSendReasonHeader=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'treatmentId' => $treatmentId,
                    'chargeIndicator' => $chargeIndicator,
                    'description' => $description,
                    'accessSIPStatusCode' => $accessSIPStatusCode,
                    'accessSIPStatusMessage' => $accessSIPStatusMessage,
                    'networkSIPStatusCode' => $networkSIPStatusCode,
                    'networkSIPStatusMessage' => $networkSIPStatusMessage,
                    'q850CauseValue' => $q850CauseValue,
                    'q850Text' => $q850Text,
                    'accessTreatmentAudioFile' => $accessTreatmentAudioFile,
                    'accessTreatmentVideoFile' => $accessTreatmentVideoFile,
                    'networkTreatmentAudioFile' => $networkTreatmentAudioFile,
                    'networkTreatmentVideoFile' => $networkTreatmentVideoFile,
                    'cdrTerminationCause' => $cdrTerminationCause,
                    'routeAdvance' => $routeAdvance,
                    'internalReleaseCause' => $internalReleaseCause,
                    'accessSendReasonHeader' => $accessSendReasonHeader,
                    'networkSendReasonHeader' => $networkSendReasonHeader
                ]
            ];
        }

        # Delete a configurable treatment.
        static public function SystemConfigurableTreatmentDeleteRequest($treatmentId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'treatmentId' => $treatmentId
                ]
            ];
        }

        # Get a list of configurable treatments.
        static public function SystemConfigurableTreatmentGetListRequest() {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => null
            ];
        }

        # Get all the attributes of a configurable treatment.
        static public function SystemConfigurableTreatmentGetRequest16($treatmentId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'treatmentId' => $treatmentId
                ]
            ];
        }

        # Modify the fields for a configurable treatment.
        static public function SystemConfigurableTreatmentModifyRequest($treatmentId=null,$chargeIndicator=null,$description=null,$accessSIPStatusCode=null,$accessSIPStatusMessage=null,$networkSIPStatusCode=null,$networkSIPStatusMessage=null,$q850CauseValue=null,$q850Text=null,$accessTreatmentAudioFile=null,$accessTreatmentVideoFile=null,$networkTreatmentAudioFile=null,$networkTreatmentVideoFile=null,$cdrTerminationCause=null,$routeAdvance=null,$internalReleaseCause=null,$accessSendReasonHeader=null,$networkSendReasonHeader=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'treatmentId' => $treatmentId,
                    'chargeIndicator' => $chargeIndicator,
                    'description' => $description,
                    'accessSIPStatusCode' => $accessSIPStatusCode,
                    'accessSIPStatusMessage' => $accessSIPStatusMessage,
                    'networkSIPStatusCode' => $networkSIPStatusCode,
                    'networkSIPStatusMessage' => $networkSIPStatusMessage,
                    'q850CauseValue' => $q850CauseValue,
                    'q850Text' => $q850Text,
                    'accessTreatmentAudioFile' => $accessTreatmentAudioFile,
                    'accessTreatmentVideoFile' => $accessTreatmentVideoFile,
                    'networkTreatmentAudioFile' => $networkTreatmentAudioFile,
                    'networkTreatmentVideoFile' => $networkTreatmentVideoFile,
                    'cdrTerminationCause' => $cdrTerminationCause,
                    'routeAdvance' => $routeAdvance,
                    'internalReleaseCause' => $internalReleaseCause,
                    'accessSendReasonHeader' => $accessSendReasonHeader,
                    'networkSendReasonHeader' => $networkSendReasonHeader
                ]
            ];
        }

        # Add an Access SIP Status Code Mapping.
        static public function SystemTreatmentMappingAccessSIPStatusAddRequest($sipStatusCode=null,$treatmentId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'sipStatusCode' => $sipStatusCode,
                    'treatmentId' => $treatmentId
                ]
            ];
        }

        # Delete an Access SIP Status Code mapping.
        static public function SystemTreatmentMappingAccessSIPStatusDeleteRequest($sipStatusCode=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'sipStatusCode' => $sipStatusCode
                ]
            ];
        }

        # Requests a table of all the existing Access Side SIP Status Code Mappings in the system.
        static public function SystemTreatmentMappingAccessSIPStatusGetListRequest() {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => null
            ];
        }

        # Modify the fields for an Access SIP Status Code mapping.
        static public function SystemTreatmentMappingAccessSIPStatusModifyRequest($sipStatusCode=null,$treatmentId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'sipStatusCode' => $sipStatusCode,
                    'treatmentId' => $treatmentId
                ]
            ];
        }

        # Add a Call Blocking Service mapping.
        static public function SystemTreatmentMappingCallBlockingServiceAddRequest($callBlockingService=null,$treatmentId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'callBlockingService' => $callBlockingService,
                    'treatmentId' => $treatmentId
                ]
            ];
        }

        # Delete a Call Blocking Service mapping.
        static public function SystemTreatmentMappingCallBlockingServiceDeleteRequest($callBlockingService=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'callBlockingService' => $callBlockingService
                ]
            ];
        }

        # Requests a table of all the existing Call Blocking Service Mappings in the system.
        static public function SystemTreatmentMappingCallBlockingServiceGetListRequest() {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => null
            ];
        }

        # Modify the fields for a Call Blocking Service mapping.
        static public function SystemTreatmentMappingCallBlockingServiceModifyRequest($callBlockingService=null,$treatmentId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'callBlockingService' => $callBlockingService,
                    'treatmentId' => $treatmentId
                ]
            ];
        }

        # Add an Internal Release Cause mapping.
        static public function SystemTreatmentMappingInternalReleaseCauseAddRequest($internalReleaseCause=null,$treatmentId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'internalReleaseCause' => $internalReleaseCause,
                    'treatmentId' => $treatmentId
                ]
            ];
        }

        # Delete an Internal Release Cause mapping.
        static public function SystemTreatmentMappingInternalReleaseCauseDeleteRequest($internalReleaseCause=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'internalReleaseCause' => $internalReleaseCause
                ]
            ];
        }

        # Requests a table of all the Internal Release Cause mappings in the system.
        static public function SystemTreatmentMappingInternalReleaseCauseGetListRequest() {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => null
            ];
        }

        # Modify the fields for an Internal Release Cause mapping.
        static public function SystemTreatmentMappingInternalReleaseCauseModifyRequest($internalReleaseCause=null,$treatmentId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'internalReleaseCause' => $internalReleaseCause,
                    'treatmentId' => $treatmentId
                ]
            ];
        }

        # Add a Network Server Treatment mapping.
        static public function SystemTreatmentMappingNetworkServerTreatmentAddRequest($nsTreatment=null,$treatmentId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'nsTreatment' => $nsTreatment,
                    'treatmentId' => $treatmentId
                ]
            ];
        }

        # Delete a NS Treatment mapping.
        static public function SystemTreatmentMappingNetworkServerTreatmentDeleteRequest($nsTreatment=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'nsTreatment' => $nsTreatment
                ]
            ];
        }

        # Requests a table of all the existing NS Treatment Mappings in the system.
        static public function SystemTreatmentMappingNetworkServerTreatmentGetListRequest() {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => null
            ];
        }

        # Modify the fields for a Network Server Treatment mapping.
        static public function SystemTreatmentMappingNetworkServerTreatmentModifyRequest($nsTreatment=null,$treatmentId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'nsTreatment' => $nsTreatment,
                    'treatmentId' => $treatmentId
                ]
            ];
        }

        # Add a Network SIP Status Code mapping.
        static public function SystemTreatmentMappingNetworkSIPStatusAddRequest($sipStatusCode=null,$treatmentId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'sipStatusCode' => $sipStatusCode,
                    'treatmentId' => $treatmentId
                ]
            ];
        }

        # Delete a Network SIP Status Code mapping.
        static public function SystemTreatmentMappingNetworkSIPStatusDeleteRequest($sipStatusCode=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'sipStatusCode' => $sipStatusCode
                ]
            ];
        }

        # Requests a table of all the existing Network SIP Status Code Mappings in the system.
        static public function SystemTreatmentMappingNetworkSIPStatusGetListRequest() {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => null
            ];
        }

        # Modify the fields for a Network SIP Status Code mapping.
        static public function SystemTreatmentMappingNetworkSIPStatusModifyRequest($sipStatusCode=null,$treatmentId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'sipStatusCode' => $sipStatusCode,
                    'treatmentId' => $treatmentId
                ]
            ];
        }

        # Add a Q850 Cause Value mapping.
        static public function SystemTreatmentMappingQ850CauseAddRequest($q850CauseValue=null,$treatmentId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'q850CauseValue' => $q850CauseValue,
                    'treatmentId' => $treatmentId
                ]
            ];
        }

        # Delete a Q850 Cause Value mapping.
        static public function SystemTreatmentMappingQ850CauseDeleteRequest($q850CauseValue=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'q850CauseValue' => $q850CauseValue
                ]
            ];
        }

        # Requests a table of all the existing Q850 Cause Value Mappings in the system.
        static public function SystemTreatmentMappingQ850CauseGetListRequest() {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => null
            ];
        }

        # Modify the fields for a Q850CauseValue mapping.
        static public function SystemTreatmentMappingQ850CauseModifyRequest($q850CauseValue=null,$treatmentId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'q850CauseValue' => $q850CauseValue,
                    'treatmentId' => $treatmentId
                ]
            ];
        }

        # Add a country code to the system.
        static public function SystemCountryCodeAddRequest($countryCode=null,$countryName=null,$ringPeriodMilliseconds=null,$offHookWarningTimerSeconds=null,$enableNationalPrefix=null,$nationalPrefix=null,$maxCallWaitingTones=null,$timeBetweenCallWaitingTonesMilliseconds=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'countryCode' => $countryCode,
                    'countryName' => $countryName,
                    'ringPeriodMilliseconds' => $ringPeriodMilliseconds,
                    'offHookWarningTimerSeconds' => $offHookWarningTimerSeconds,
                    'enableNationalPrefix' => $enableNationalPrefix,
                    'nationalPrefix' => $nationalPrefix,
                    'maxCallWaitingTones' => $maxCallWaitingTones,
                    'timeBetweenCallWaitingTonesMilliseconds' => $timeBetweenCallWaitingTonesMilliseconds
                ]
            ];
        }

        # Delete a country code from the system.
        static public function SystemCountryCodeDeleteRequest($countryCode=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'countryCode' => $countryCode
                ]
            ];
        }

        # Request data for all country codes.
        static public function SystemCountryCodeGetListRequest() {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => null
            ];
        }

        # Modify the attributes of a country code.
        static public function SystemCountryCodeModifyRequest($countryCode=null,$ringPeriodMilliseconds=null,$offHookWarningTimerSeconds=null,$enableNationalPrefix=null,$nationalPrefix=null,$becomeDefaultCountryCode=null,$maxCallWaitingTones=null,$timeBetweenCallWaitingTonesMilliseconds=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'countryCode' => $countryCode,
                    'ringPeriodMilliseconds' => $ringPeriodMilliseconds,
                    'offHookWarningTimerSeconds' => $offHookWarningTimerSeconds,
                    'enableNationalPrefix' => $enableNationalPrefix,
                    'nationalPrefix' => $nationalPrefix,
                    'becomeDefaultCountryCode' => $becomeDefaultCountryCode,
                    'maxCallWaitingTones' => $maxCallWaitingTones,
                    'timeBetweenCallWaitingTonesMilliseconds' => $timeBetweenCallWaitingTonesMilliseconds
                ]
            ];
        }

        # Add a system call type mapping.
        static public function SystemCallTypeAddMappingRequest($countryCode=null,$digitMap=null,$callType=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'countryCode' => $countryCode,
                    'digitMap' => $digitMap,
                    'callType' => $callType
                ]
            ];
        }

        # Delete a system call type mapping.
        static public function SystemCallTypeDeleteMappingRequest($countryCode=null,$digitMap=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'countryCode' => $countryCode,
                    'digitMap' => $digitMap
                ]
            ];
        }

        # Get a list of system call types.
        static public function SystemCallTypeGetListRequest() {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => null
            ];
        }

        # Get a list of system call type mappings.
        static public function SystemCallTypeGetMappingListRequest($countryCode=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'countryCode' => $countryCode
                ]
            ];
        }

        # Add a device CPE config file server.
        static public function SystemCPEConfigAddFileServerRequest14sp6($deviceType=null,$fileRepositoryName=null,$cpeFileDirectory=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'deviceType' => $deviceType,
                    'fileRepositoryName' => $fileRepositoryName,
                    'cpeFileDirectory' => $cpeFileDirectory
                ]
            ];
        }

        # Delete a device CPE config file server.
        static public function SystemCPEConfigDeleteFileServerRequest($deviceType=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'deviceType' => $deviceType
                ]
            ];
        }

        # Requests the list of device CPE config file servers.
        static public function SystemCPEConfigGetFileServerListRequest14sp6() {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => null
            ];
        }

        # Modify a device CPE config file server.
        static public function SystemCPEConfigModifyFileServerRequest14sp6($deviceType=null,$fileRepositoryName=null,$cpeFileDirectory=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'deviceType' => $deviceType,
                    'fileRepositoryName' => $fileRepositoryName,
                    'cpeFileDirectory' => $cpeFileDirectory
                ]
            ];
        }

        # Request to get the list of CPE Config system parameters.
        static public function SystemCPEConfigParametersGetRequest14sp6() {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => null
            ];
        }

        # Request to modify CPE Config system parameters.
        static public function SystemCPEConfigParametersModifyRequest($enableIPDeviceManagement=null,$ftpConnectTimeoutSeconds=null,$ftpFileTransferTimeoutSeconds=null,$pauseBetweenFileRebuildMilliseconds=null,$maxBusyTimeMinutes=null,$deviceAccessAppServerClusterName=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'enableIPDeviceManagement' => $enableIPDeviceManagement,
                    'ftpConnectTimeoutSeconds' => $ftpConnectTimeoutSeconds,
                    'ftpFileTransferTimeoutSeconds' => $ftpFileTransferTimeoutSeconds,
                    'pauseBetweenFileRebuildMilliseconds' => $pauseBetweenFileRebuildMilliseconds,
                    'maxBusyTimeMinutes' => $maxBusyTimeMinutes,
                    'deviceAccessAppServerClusterName' => $deviceAccessAppServerClusterName
                ]
            ];
        }

        # Rebuild the system default config file for the specified device type.
        static public function SystemCPEConfigRebuildConfigFileRequest($deviceType=null,$rebuildType=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'deviceType' => $deviceType,
                    'rebuildType' => $rebuildType
                ]
            ];
        }

        # Rebuild the config file for a specified device.
        static public function SystemCPEConfigRebuildDeviceConfigFileRequest($deviceName=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'deviceName' => $deviceName
                ]
            ];
        }

        # Reset a specific system device.
        static public function SystemCPEConfigResetDeviceRequest($deviceName=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'deviceName' => $deviceName
                ]
            ];
        }

        # Reset all the devices of the specified device type in the system.
        static public function SystemCPEConfigResetDeviceTypeRequest($deviceType=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'deviceType' => $deviceType
                ]
            ];
        }

        # Reorder the lines of a System device. You can not add or delete line ports, only
        static public function SystemCPEConfigReorderDeviceLinePortsRequest($deviceName=null,$orderedLinePortList=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'deviceName' => $deviceName,
                    'orderedLinePortList' => $orderedLinePortList
                ]
            ];
        }

        # Request to set a new system default configuration file for a device type.
        static public function SystemCPEConfigSetConfigFileRequest($deviceType=null,$configFile=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'deviceType' => $deviceType,
                    'configFile' => $configFile
                ]
            ];
        }

        # Request to add a static configuration tag.
        static public function SystemDeviceManagementTagAddRequest($tagName=null,$tagValue=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'tagName' => $tagName,
                    'tagValue' => $tagValue
                ]
            ];
        }

        # Request to delete static configuration tags.
        static public function SystemDeviceManagementTagDeleteListRequest($tagName=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'tagName' => $tagName
                ]
            ];
        }

        # Request to get the list of custom configuration tags managed by the Device Management System.
        static public function SystemDeviceManagementTagGetListRequest() {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => null
            ];
        }

        # Request to modify a static configuration tag.
        static public function SystemDeviceManagementTagModifyRequest($tagName=null,$tagValue=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'tagName' => $tagName,
                    'tagValue' => $tagValue
                ]
            ];
        }

        # Request to add a static configuration tag set.
        static public function SystemDeviceManagementTagSetAddRequest($tagSetName=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'tagSetName' => $tagSetName
                ]
            ];
        }

        # Request to modify a static configuration tag set.
        static public function SystemDeviceManagementTagSetModifyRequest($tagSetName=null,$newTagSetName=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'tagSetName' => $tagSetName,
                    'newTagSetName' => $newTagSetName
                ]
            ];
        }

        # Request to delete a static configuration tag set.
        static public function SystemDeviceManagementTagSetDeleteRequest($tagSetName=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'tagSetName' => $tagSetName
                ]
            ];
        }

        # Request to get the list of custom configuration tag sets managed by the Device Management System.
        static public function SystemDeviceManagementTagSetGetListRequest() {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => null
            ];
        }

        # Request to export an existing Device Type to a Device Type Archive File (DTAF).
        static public function SystemDeviceTypeExportRequest($deviceType=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'deviceType' => $deviceType
                ]
            ];
        }

        # Request to import a Device Type Archive File (DTAF) as a new Device Type.  The URL supports the HTTP and the FILE protocols.
        static public function SystemDeviceTypeImportRequest($file=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'file' => $file
                ]
            ];
        }

        # Requests a list of non-obsolete Identity/device profile types defined in the system. It is possible
        static public function SystemDeviceTypeGetAvailableListRequest14sp3($allowConference=null,$allowMusicOnHold=null,$onlyConference=null,$onlyVideoCapable=null,$onlyOptionalIpAddress=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'allowConference' => $allowConference,
                    'allowMusicOnHold' => $allowMusicOnHold,
                    'onlyConference' => $onlyConference,
                    'onlyVideoCapable' => $onlyVideoCapable,
                    'onlyOptionalIpAddress' => $onlyOptionalIpAddress
                ]
            ];
        }

        # Requests the information about the specified device type without regard to whether the
        static public function SystemDeviceTypeGetRequest16sp1($deviceType=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'deviceType' => $deviceType
                ]
            ];
        }

        # Add a new Dialable Caller ID Criteria. Criteria are added at the bottom of the list with the lowest priority. The response is either a SuccessResponse or an ErrorResponse.
        static public function SystemDialableCallerIDCriteriaAddRequest($name=null,$description=null,$prefixDigits=null,$matchCallType=null,$matchAlternateCallIndicator=null,$matchLocalCategory=null,$matchNationalCategory=null,$matchInterlataCategory=null,$matchIntralataCategory=null,$matchInternationalCategory=null,$matchPrivateCategory=null,$matchEmergencyCategory=null,$matchOtherCategory=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'name' => $name,
                    'description' => $description,
                    'prefixDigits' => $prefixDigits,
                    'matchCallType' => $matchCallType,
                    'matchAlternateCallIndicator' => $matchAlternateCallIndicator,
                    'matchLocalCategory' => $matchLocalCategory,
                    'matchNationalCategory' => $matchNationalCategory,
                    'matchInterlataCategory' => $matchInterlataCategory,
                    'matchIntralataCategory' => $matchIntralataCategory,
                    'matchInternationalCategory' => $matchInternationalCategory,
                    'matchPrivateCategory' => $matchPrivateCategory,
                    'matchEmergencyCategory' => $matchEmergencyCategory,
                    'matchOtherCategory' => $matchOtherCategory
                ]
            ];
        }

        # Delete a Dialable Caller ID Criteria.
        static public function SystemDialableCallerIDCriteriaDeleteRequest($name=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'name' => $name
                ]
            ];
        }

        # Get an existing Dialable Caller ID Criteria.
        static public function SystemDialableCallerIDCriteriaGetRequest($name=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'name' => $name
                ]
            ];
        }

        # Modify a Dialable Caller ID Criteria.
        static public function SystemDialableCallerIDCriteriaModifyRequest($name=null,$newName=null,$description=null,$prefixDigits=null,$matchCallType=null,$matchAlternateCallIndicator=null,$matchLocalCategory=null,$matchNationalCategory=null,$matchInterlataCategory=null,$matchIntralataCategory=null,$matchInternationalCategory=null,$matchPrivateCategory=null,$matchEmergencyCategory=null,$matchOtherCategory=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'name' => $name,
                    'newName' => $newName,
                    'description' => $description,
                    'prefixDigits' => $prefixDigits,
                    'matchCallType' => $matchCallType,
                    'matchAlternateCallIndicator' => $matchAlternateCallIndicator,
                    'matchLocalCategory' => $matchLocalCategory,
                    'matchNationalCategory' => $matchNationalCategory,
                    'matchInterlataCategory' => $matchInterlataCategory,
                    'matchIntralataCategory' => $matchIntralataCategory,
                    'matchInternationalCategory' => $matchInternationalCategory,
                    'matchPrivateCategory' => $matchPrivateCategory,
                    'matchEmergencyCategory' => $matchEmergencyCategory,
                    'matchOtherCategory' => $matchOtherCategory
                ]
            ];
        }

        # Get the system level Dialable Caller ID criteria list.
        static public function SystemDialableCallerIDGetRequest() {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => null
            ];
        }

        # Modify the system level Dialable Caller ID criteria list.
        static public function SystemDialableCallerIDModifyRequest($criteriaPriorityOrder=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'criteriaPriorityOrder' => $criteriaPriorityOrder
                ]
            ];
        }

        # Request the system level data associated with Dial Plan Policy.
        static public function SystemDialPlanPolicyGetRequest17() {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => null
            ];
        }

        # Modify the system level data associated with Dial Plan Policy.
        static public function SystemDialPlanPolicyModifyRequest($requiresAccessCodeForPublicCalls=null,$allowE164PublicCalls=null,$preferE164NumberFormatForCallbackServices=null,$publicDigitMap=null,$privateDigitMap=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'requiresAccessCodeForPublicCalls' => $requiresAccessCodeForPublicCalls,
                    'allowE164PublicCalls' => $allowE164PublicCalls,
                    'preferE164NumberFormatForCallbackServices' => $preferE164NumberFormatForCallbackServices,
                    'publicDigitMap' => $publicDigitMap,
                    'privateDigitMap' => $privateDigitMap
                ]
            ];
        }

        # Request the system level Access Codes data associated with Dial Plan Policy.
        static public function SystemDialPlanPolicyGetAccessCodeListRequest() {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => null
            ];
        }

        # Request access code data associated with system level Dial Plan Policy access codes.
        static public function SystemDialPlanPolicyGetAccessCodeRequest($accessCode=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'accessCode' => $accessCode
                ]
            ];
        }

        # Request to add a system-level Dial Plan Access Code and its all attribues.
        static public function SystemDialPlanPolicyAddAccessCodeRequest($accessCode=null,$includeCodeForNetworkTranslationsAndRouting=null,$includeCodeForScreeningServices=null,$enableSecondaryDialTone=null,$description=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'accessCode' => $accessCode,
                    'includeCodeForNetworkTranslationsAndRouting' => $includeCodeForNetworkTranslationsAndRouting,
                    'includeCodeForScreeningServices' => $includeCodeForScreeningServices,
                    'enableSecondaryDialTone' => $enableSecondaryDialTone,
                    'description' => $description
                ]
            ];
        }

        # Request to delete a system-level Dial Plan Access Code and its all attribues.
        static public function SystemDialPlanPolicyDeleteAccessCodeRequest($accessCode=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'accessCode' => $accessCode
                ]
            ];
        }

        # Request to modify a system-level Dial Plan Access Code and its attribues.
        static public function SystemDialPlanPolicyModifyAccessCodeRequest($accessCode=null,$includeCodeForNetworkTranslationsAndRouting=null,$includeCodeForScreeningServices=null,$enableSecondaryDialTone=null,$description=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'accessCode' => $accessCode,
                    'includeCodeForNetworkTranslationsAndRouting' => $includeCodeForNetworkTranslationsAndRouting,
                    'includeCodeForScreeningServices' => $includeCodeForScreeningServices,
                    'enableSecondaryDialTone' => $enableSecondaryDialTone,
                    'description' => $description
                ]
            ];
        }

        # Request the system's digit collection attributes.
        static public function SystemDigitCollectionGetRequest13mp4() {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => null
            ];
        }

        # Modifies the system's digit collection attributes.
        static public function SystemDigitCollectionModifyRequest($accessCode=null,$publicDigitMap=null,$privateDigitMap=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'accessCode' => $accessCode,
                    'publicDigitMap' => $publicDigitMap,
                    'privateDigitMap' => $privateDigitMap
                ]
            ];
        }

        # Request a summary table of all DNs in the system.
        static public function SystemDnGetSummaryListRequest() {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => null
            ];
        }

        # Request a list of DN utilizations by service providers.
        static public function SystemDnGetUtilizationListRequest() {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => null
            ];
        }

        # Get the utilization of a single DN.
        static public function SystemDnGetUtilizationRequest14sp3($phoneNumber=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'phoneNumber' => $phoneNumber
                ]
            ];
        }

        # Add a system domain to the system.
        static public function SystemDomainAddRequest($domain=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'domain' => $domain
                ]
            ];
        }

        # Delete a system domain from the system.
        static public function SystemDomainDeleteRequest($domain=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'domain' => $domain
                ]
            ];
        }

        # Request a list of service providers that have a given domain assigned.
        static public function SystemDomainGetAssignedServiceProviderListRequest($domain=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'domain' => $domain
                ]
            ];
        }

        # Requests the list of all system-level domain names.
        static public function SystemDomainGetListRequest() {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => null
            ];
        }

        # Request to get the list of system Domain parameters.
        static public function SystemDomainParametersGetRequest() {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => null
            ];
        }

        # Request to modify system Domain parameters.
        static public function SystemDomainParametersModifyRequest($useAliasForDomain=null,$defaultDomain=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'useAliasForDomain' => $useAliasForDomain,
                    'defaultDomain' => $defaultDomain
                ]
            ];
        }

        # Get the system DTMF transmission configurations.
        static public function SystemDTMFTransmissionGetRequest() {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => null
            ];
        }

        # Modify the DTMF transmission settings.
        static public function SystemDTMFTransmissionModifyRequest($transmissionMethod=null,$signalingContentType=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'transmissionMethod' => $transmissionMethod,
                    'signalingContentType' => $signalingContentType
                ]
            ];
        }

        # Request to search endpoints in the system.
        static public function SystemEndpointGetListRequest($responseSizeLimit=null,$searchCriteriaServiceProviderId=null,$searchCriteriaExactOrganizationType=null,$searchCriteriaGroupId=null,$searchCriteriaLinePortUserPart=null,$searchCriteriaLinePortDomain=null,$searchCriteriaUserLastName=null,$searchCriteriaUserFirstName=null,$searchCriteriaUserId=null,$searchCriteriaDn=null,$searchCriteriaExtension=null,$searchCriteriaDeviceType=null,$searchCriteriaDeviceName=null,$searchCriteriaDeviceMACAddress=null,$searchCriteriaDeviceNetAddress=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'responseSizeLimit' => $responseSizeLimit,
                    'searchCriteriaServiceProviderId' => $searchCriteriaServiceProviderId,
                    'searchCriteriaExactOrganizationType' => $searchCriteriaExactOrganizationType,
                    'searchCriteriaGroupId' => $searchCriteriaGroupId,
                    'searchCriteriaLinePortUserPart' => $searchCriteriaLinePortUserPart,
                    'searchCriteriaLinePortDomain' => $searchCriteriaLinePortDomain,
                    'searchCriteriaUserLastName' => $searchCriteriaUserLastName,
                    'searchCriteriaUserFirstName' => $searchCriteriaUserFirstName,
                    'searchCriteriaUserId' => $searchCriteriaUserId,
                    'searchCriteriaDn' => $searchCriteriaDn,
                    'searchCriteriaExtension' => $searchCriteriaExtension,
                    'searchCriteriaDeviceType' => $searchCriteriaDeviceType,
                    'searchCriteriaDeviceName' => $searchCriteriaDeviceName,
                    'searchCriteriaDeviceMACAddress' => $searchCriteriaDeviceMACAddress,
                    'searchCriteriaDeviceNetAddress' => $searchCriteriaDeviceNetAddress
                ]
            ];
        }

        # Request to get the expensive call notification service parameters.
        static public function SystemExpensiveCallNotificationGetRequest() {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => null
            ];
        }

        # Modify the expensive call notification service parameters.
        static public function SystemExpensiveCallNotificationModifyRequest($enablePostAnnouncementDelayTimer=null,$postAnnouncementDelaySeconds=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'enablePostAnnouncementDelayTimer' => $enablePostAnnouncementDelayTimer,
                    'postAnnouncementDelaySeconds' => $postAnnouncementDelaySeconds
                ]
            ];
        }

        # Add an alternate call indicator to the list of expensive alternate call indicators.
        static public function SystemExpensiveCallTypeAddRequest($alternateCallIndicator=null,$treatmentAudioFile=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'alternateCallIndicator' => $alternateCallIndicator,
                    'treatmentAudioFile' => $treatmentAudioFile
                ]
            ];
        }

        # Delete an alternate call indicator from the list of expensive alternate call indicators.
        static public function SystemExpensiveCallTypeDeleteRequest($alternateCallIndicator=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'alternateCallIndicator' => $alternateCallIndicator
                ]
            ];
        }

        # Request to get the list of expensive alternate call indicators in the system.
        static public function SystemExpensiveCallTypeGetListRequest16sp1() {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => null
            ];
        }

        # Modify an existing call indicator in the list of expensive alternate call indicators.
        static public function SystemExpensiveCallTypeModifyRequest($alternateCallIndicator=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'alternateCallIndicator' => $alternateCallIndicator
                ]
            ];
        }

        # Request to export Application Server addressing data, such as DNs, extensions, alias and user ids
        static public function SystemExportAddressingDataRequest($fileName=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'fileName' => $fileName
                ]
            ];
        }

        # Request the system's extension range.
        static public function SystemExtensionLengthGetRequest() {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => null
            ];
        }

        # Modify the group's extension length range.
        static public function SystemExtensionLengthModifyRequest($minExtensionLength=null,$maxExtensionLength=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'minExtensionLength' => $minExtensionLength,
                    'maxExtensionLength' => $maxExtensionLength
                ]
            ];
        }

        # Add an entry to the external authentication access control list.
        static public function SystemExternalAuthenticationAddACLEntryRequest14sp2($netAddress=null,$description=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'netAddress' => $netAddress,
                    'description' => $description
                ]
            ];
        }

        # Delete an entry from the external authentication access control list.
        static public function SystemExternalAuthenticationDeleteACLEntryRequest14sp2($netAddress=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'netAddress' => $netAddress
                ]
            ];
        }

        # Get the external authentication access control list.
        static public function SystemExternalAuthenticationGetACLListRequest() {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => null
            ];
        }

        # Modify an entry from the external authentication access control list.
        static public function SystemExternalAuthenticationModifyACLEntryRequest14sp2($netAddress=null,$description=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'netAddress' => $netAddress,
                    'description' => $description
                ]
            ];
        }

        # Request to get the list of External Emergency Routing system parameters.
        static public function SystemExternalEmergencyRoutingParametersGetRequest13mp13() {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => null
            ];
        }

        # Request to modify Call External Emergency Routing system parameters.
        static public function SystemExternalEmergencyRoutingParametersModifyRequest13mp13($serviceURI=null,$defaultEmergencyNumber=null,$isActive=null,$supportsDNSSRV=null,$connectionTimeoutSeconds=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceURI' => $serviceURI,
                    'defaultEmergencyNumber' => $defaultEmergencyNumber,
                    'isActive' => $isActive,
                    'supportsDNSSRV' => $supportsDNSSRV,
                    'connectionTimeoutSeconds' => $connectionTimeoutSeconds
                ]
            ];
        }

        # Request to get list of default Feature Access Codes defined on system level.
        static public function SystemFeatureAccessCodeGetListRequest() {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => null
            ];
        }

        # Modify default Feature Access Codes.
        static public function SystemFeatureAccessCodeModifyListRequest($featureAccessCode=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'featureAccessCode' => $featureAccessCode
                ]
            ];
        }

        # Requests the contents of a file.
        static public function SystemFileGetContentRequest($fileName=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'fileName' => $fileName
                ]
            ];
        }

        # Add a new file repository.
        static public function SystemFileRepositoryDeviceAddRequest16($name=null,$rootDirectory=null,$port=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'name' => $name,
                    'rootDirectory' => $rootDirectory,
                    'port' => $port
                ]
            ];
        }

        # Delete a file repository.
        static public function SystemFileRepositoryDeviceDeleteRequest($name=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'name' => $name
                ]
            ];
        }

        # Modify a file repository.
        static public function SystemFileRepositoryDeviceModifyRequest($name=null,$rootDirectory=null,$secure=null,$netAddress=null,$ftpPassive=null,$protocol=null,$port=null,$ftpRemoteVerification=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'name' => $name,
                    'rootDirectory' => $rootDirectory,
                    'secure' => $secure,
                    'netAddress' => $netAddress,
                    'ftpPassive' => $ftpPassive,
                    'protocol' => $protocol,
                    'port' => $port,
                    'ftpRemoteVerification' => $ftpRemoteVerification
                ]
            ];
        }

        # Request to get the file repository information.  The response is either SystemFileRepositoryDeviceGetResponse16 or ErrorResponse.
        static public function SystemFileRepositoryDeviceGetRequest16($name=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'name' => $name
                ]
            ];
        }

        # Request the list of file repositories in the system.
        static public function SystemFileRepositoryDeviceGetListRequest() {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => null
            ];
        }

        # Add a new file repository user.
        static public function SystemFileRepositoryDeviceUserAddRequest($fileRepositoryName=null,$userName=null,$password=null,$allowPut=null,$allowDelete=null,$allowGet=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'fileRepositoryName' => $fileRepositoryName,
                    'userName' => $userName,
                    'password' => $password,
                    'allowPut' => $allowPut,
                    'allowDelete' => $allowDelete,
                    'allowGet' => $allowGet
                ]
            ];
        }

        # Delete a file repository user.
        static public function SystemFileRepositoryDeviceUserDeleteRequest($fileRepositoryName=null,$userName=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'fileRepositoryName' => $fileRepositoryName,
                    'userName' => $userName
                ]
            ];
        }

        # Modify a file repository user.
        static public function SystemFileRepositoryDeviceUserModifyRequest($fileRepositoryName=null,$userName=null,$password=null,$allowPut=null,$allowDelete=null,$allowGet=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'fileRepositoryName' => $fileRepositoryName,
                    'userName' => $userName,
                    'password' => $password,
                    'allowPut' => $allowPut,
                    'allowDelete' => $allowDelete,
                    'allowGet' => $allowGet
                ]
            ];
        }

        # Request a user of a file repository in the system.
        static public function SystemFileRepositoryDeviceUserGetRequest($fileRepositoryName=null,$userName=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'fileRepositoryName' => $fileRepositoryName,
                    'userName' => $userName
                ]
            ];
        }

        # Request the list of users for a file repository in the system.
        static public function SystemFileRepositoryDeviceUserGetListRequest($fileRepositoryName=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'fileRepositoryName' => $fileRepositoryName
                ]
            ];
        }

        # Get the list of registration contacts.
        static public function SystemGetRegistrationContactListRequest($deviceLevel=null,$deviceName=null,$deviceType=null,$searchCriteriaRegistrationURI=null,$searchCriteriaSIPContact=null,$endpointType=null,$expired=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'deviceLevel' => $deviceLevel,
                    'deviceName' => $deviceName,
                    'deviceType' => $deviceType,
                    'searchCriteriaRegistrationURI' => $searchCriteriaRegistrationURI,
                    'searchCriteriaSIPContact' => $searchCriteriaSIPContact,
                    'endpointType' => $endpointType,
                    'expired' => $expired
                ]
            ];
        }

        # Add a Home Network.
        static public function SystemHomeNetworkAddRequest($mscAddress=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'mscAddress' => $mscAddress
                ]
            ];
        }

        # Delete a Home Network.
        static public function SystemHomeNetworkDeleteRequest($mscAddress=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'mscAddress' => $mscAddress
                ]
            ];
        }

        # Get the list of all Home Networks.
        static public function SystemHomeNetworkGetListRequest($responseSizeLimit=null,$searchCriteriaHomeMscAddress=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'responseSizeLimit' => $responseSizeLimit,
                    'searchCriteriaHomeMscAddress' => $searchCriteriaHomeMscAddress
                ]
            ];
        }

        # Request to add a language to the system.
        static public function SystemLanguageAddRequest($language=null,$locale=null,$encoding=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'language' => $language,
                    'locale' => $locale,
                    'encoding' => $encoding
                ]
            ];
        }

        # Request to delete a language from the system.
        static public function SystemLanguageDeleteRequest($language=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'language' => $language
                ]
            ];
        }

        # Request the defined languages in the system.
        static public function SystemLanguageGetListRequest() {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => null
            ];
        }

        # Request to modify a language properties in the system.
        static public function SystemLanguageModifyRequest($language=null,$becomeDefaultLanguage=null,$locale=null,$encoding=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'language' => $language,
                    'becomeDefaultLanguage' => $becomeDefaultLanguage,
                    'locale' => $locale,
                    'encoding' => $encoding
                ]
            ];
        }

        # Get all the licensing information.
        static public function SystemLicensingGetRequest14sp3() {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => null
            ];
        }

        # Request to get the list of system licenses in the system.
        static public function SystemLicensingGetSystemLicenseListRequest() {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => null
            ];
        }

        # Load a new license file.
        static public function SystemLicensingReloadRequest() {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => null
            ];
        }

        # Modify the log configuration file.
        static public function SystemLogConfigModifyRequest($configFile=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'configFile' => $configFile
                ]
            ];
        }

        # Request to get the list of Mail system parameters.
        static public function SystemMailParametersGetRequest() {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => null
            ];
        }

        # Request to modify Mail system parameters.
        static public function SystemMailParametersModifyRequest($primaryServerNetAddress=null,$secondaryServerNetAddress=null,$defaultFromAddress=null,$defaultSubject=null,$supportDNSSRVForMailServerAccess=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'primaryServerNetAddress' => $primaryServerNetAddress,
                    'secondaryServerNetAddress' => $secondaryServerNetAddress,
                    'defaultFromAddress' => $defaultFromAddress,
                    'defaultSubject' => $defaultSubject,
                    'supportDNSSRVForMailServerAccess' => $supportDNSSRVForMailServerAccess
                ]
            ];
        }

        # Request to add a Media to the system.
        static public function SystemMediaAddRequest16($mediaName=null,$codecName=null,$mediaType=null,$bandwidthEnforcementType=null,$mediaBandwidth=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'mediaName' => $mediaName,
                    'codecName' => $codecName,
                    'mediaType' => $mediaType,
                    'bandwidthEnforcementType' => $bandwidthEnforcementType,
                    'mediaBandwidth' => $mediaBandwidth
                ]
            ];
        }

        # Request to delete a Media from the system.
        static public function SystemMediaDeleteRequest($mediaName=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'mediaName' => $mediaName
                ]
            ];
        }

        # Request to get a list of media in the system.
        static public function SystemMediaGetListRequest() {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => null
            ];
        }

        # Request to modify a media.
        static public function SystemMediaModifyRequest($mediaName=null,$codecName=null,$bandwidthEnforcementType=null,$mediaBandwidth=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'mediaName' => $mediaName,
                    'codecName' => $codecName,
                    'bandwidthEnforcementType' => $bandwidthEnforcementType,
                    'mediaBandwidth' => $mediaBandwidth
                ]
            ];
        }

        # Request to add a Media Server to the system.
        static public function SystemMediaServerAddRequest14($netAddress=null,$port=null,$transportProtocol=null,$description=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'netAddress' => $netAddress,
                    'port' => $port,
                    'transportProtocol' => $transportProtocol,
                    'description' => $description
                ]
            ];
        }

        # Request to delete a Media Server from the system.
        static public function SystemMediaServerDeleteRequest($netAddress=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'netAddress' => $netAddress
                ]
            ];
        }

        # Request to get a list of Media Servers defined in the system.
        static public function SystemMediaServerGetListRequest() {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => null
            ];
        }

        # Request to modify a Media Server in the system.
        static public function SystemMediaServerModifyRequest($netAddress=null,$port=null,$transportProtocol=null,$description=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'netAddress' => $netAddress,
                    'port' => $port,
                    'transportProtocol' => $transportProtocol,
                    'description' => $description
                ]
            ];
        }

        # Request to get the list of Media Server system parameters.
        static public function SystemMediaServerParametersGetRequest() {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => null
            ];
        }

        # Request to modify Media Server system parameters.
        static public function SystemMediaServerParametersModifyRequest($mediaServerResponseTimerMilliseconds=null,$mediaServerSelectionRouteTimerMilliseconds=null,$useStaticMediaServerDevice=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'mediaServerResponseTimerMilliseconds' => $mediaServerResponseTimerMilliseconds,
                    'mediaServerSelectionRouteTimerMilliseconds' => $mediaServerSelectionRouteTimerMilliseconds,
                    'useStaticMediaServerDevice' => $useStaticMediaServerDevice
                ]
            ];
        }

        # Request to add a Media Set.
        static public function SystemMediaSetAddRequest($setName=null,$mediaName=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'setName' => $setName,
                    'mediaName' => $mediaName
                ]
            ];
        }

        # Request to delete a Media Set.
        static public function SystemMediaSetDeleteRequest($setName=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'setName' => $setName
                ]
            ];
        }

        # Request to get the list of Media Sets in the system.
        static public function SystemMediaSetGetListRequest() {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => null
            ];
        }

        # Request to get a Media Set.
        static public function SystemMediaSetGetRequest($setName=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'setName' => $setName
                ]
            ];
        }

        # Request to modify a Media Set.
        static public function SystemMediaSetModifyRequest($setName=null,$mediaNameList=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'setName' => $setName,
                    'mediaNameList' => $mediaNameList
                ]
            ];
        }

        # Request to get the list of mgcp device types in the system.
        static public function SystemMGCPDeviceTypeGetListRequest() {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => null
            ];
        }

        # Request to get a mgcp device type.
        static public function SystemMGCPDeviceTypeGetRequest($deviceType=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'deviceType' => $deviceType
                ]
            ];
        }

        # Request to modify a mgcp device type. In release 14, this is limited to changing the obsolete flag.
        static public function SystemMGCPDeviceTypeModifyRequest($deviceType=null,$isObsolete=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'deviceType' => $deviceType,
                    'isObsolete' => $isObsolete
                ]
            ];
        }

        # Get a list of migrated users.
        static public function SystemMigratedUsersGetListRequest() {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => null
            ];
        }

        # Request the system level data associated with Multimedia Policy.
        static public function SystemMultimediaPolicyGetRequest() {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => null
            ];
        }

        # Modify the system level data associated with Multimedia Policy.
        static public function SystemMultimediaPolicyModifyRequest($restrictNonAudioVideoMediaTypes=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'restrictNonAudioVideoMediaTypes' => $restrictNonAudioVideoMediaTypes
                ]
            ];
        }

        # Add a new Network Class of Service.
        static public function SystemNetworkClassOfServiceAddRequest($name=null,$description=null,$communicationBarringProfile0=null,$communicationBarringProfile1=null,$communicationBarringProfile2=null,$communicationBarringProfile3=null,$communicationBarringProfile4=null,$communicationBarringProfile5=null,$communicationBarringProfile6=null,$communicationBarringProfile7=null,$communicationBarringProfile8=null,$communicationBarringProfile9=null,$networkTranslationIndex=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'name' => $name,
                    'description' => $description,
                    'communicationBarringProfile0' => $communicationBarringProfile0,
                    'communicationBarringProfile1' => $communicationBarringProfile1,
                    'communicationBarringProfile2' => $communicationBarringProfile2,
                    'communicationBarringProfile3' => $communicationBarringProfile3,
                    'communicationBarringProfile4' => $communicationBarringProfile4,
                    'communicationBarringProfile5' => $communicationBarringProfile5,
                    'communicationBarringProfile6' => $communicationBarringProfile6,
                    'communicationBarringProfile7' => $communicationBarringProfile7,
                    'communicationBarringProfile8' => $communicationBarringProfile8,
                    'communicationBarringProfile9' => $communicationBarringProfile9,
                    'networkTranslationIndex' => $networkTranslationIndex
                ]
            ];
        }

        # Delete a Network Class of Service.
        static public function SystemNetworkClassOfServiceDeleteRequest($name=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'name' => $name
                ]
            ];
        }

        # Get an existing Network Class of Service.
        static public function SystemNetworkClassOfServiceGetRequest17($name=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'name' => $name
                ]
            ];
        }

        # Request a list of service providers that have a given Network Class
        static public function SystemNetworkClassOfServiceGetAssignedServiceProviderListRequest($name=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'name' => $name
                ]
            ];
        }

        # Get the list of Network Classes of Service that contain a specific
        static public function SystemNetworkClassOfServiceGetCommunicationBarringProfileUsageListRequest($name=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'name' => $name
                ]
            ];
        }

        # Get the list of all Network Classes of Service.
        static public function SystemNetworkClassOfServiceGetListRequest() {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => null
            ];
        }

        # Modify an existing Network Class of Service.
        static public function SystemNetworkClassOfServiceModifyRequest($name=null,$newName=null,$description=null,$communicationBarringProfile0=null,$communicationBarringProfile1=null,$communicationBarringProfile2=null,$communicationBarringProfile3=null,$communicationBarringProfile4=null,$communicationBarringProfile5=null,$communicationBarringProfile6=null,$communicationBarringProfile7=null,$communicationBarringProfile8=null,$communicationBarringProfile9=null,$networkTranslationIndex=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'name' => $name,
                    'newName' => $newName,
                    'description' => $description,
                    'communicationBarringProfile0' => $communicationBarringProfile0,
                    'communicationBarringProfile1' => $communicationBarringProfile1,
                    'communicationBarringProfile2' => $communicationBarringProfile2,
                    'communicationBarringProfile3' => $communicationBarringProfile3,
                    'communicationBarringProfile4' => $communicationBarringProfile4,
                    'communicationBarringProfile5' => $communicationBarringProfile5,
                    'communicationBarringProfile6' => $communicationBarringProfile6,
                    'communicationBarringProfile7' => $communicationBarringProfile7,
                    'communicationBarringProfile8' => $communicationBarringProfile8,
                    'communicationBarringProfile9' => $communicationBarringProfile9,
                    'networkTranslationIndex' => $networkTranslationIndex
                ]
            ];
        }

        # Request to get the list of Network Device Polling system parameters.
        static public function SystemNetworkDeviceMonitorParametersGetRequest() {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => null
            ];
        }

        # Request to modify Network Device Polling system parameters.
        static public function SystemNetworkDeviceMonitorParametersModifyRequest($pollingIntervalMinutes=null,$failedPollingIntervalMinutes=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'pollingIntervalMinutes' => $pollingIntervalMinutes,
                    'failedPollingIntervalMinutes' => $failedPollingIntervalMinutes
                ]
            ];
        }

        # Request the system level data associated with network progression.
        static public function SystemNetworkProgressionGetRequest() {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => null
            ];
        }

        # Modify the system level data associated with network progression.
        static public function SystemNetworkProgressionModifyRequest($isActive=null,$waitPeriodSeconds=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'isActive' => $isActive,
                    'waitPeriodSeconds' => $waitPeriodSeconds
                ]
            ];
        }

        # Request to add a routing Network Server to the system.
        static public function SystemNetworkRoutingServerAddRequest($netAddress=null,$port=null,$transportProtocol=null,$poll=null,$description=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'netAddress' => $netAddress,
                    'port' => $port,
                    'transportProtocol' => $transportProtocol,
                    'poll' => $poll,
                    'description' => $description
                ]
            ];
        }

        # Request to delete a routing Network Server from the system.
        static public function SystemNetworkRoutingServerDeleteRequest($netAddress=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'netAddress' => $netAddress
                ]
            ];
        }

        # Request to get a list of routing Network Servers defined in the system.
        static public function SystemNetworkRoutingServerGetListRequest() {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => null
            ];
        }

        # Request to modify a routing Network Server in the system.
        static public function SystemNetworkRoutingServerModifyRequest($netAddress=null,$port=null,$transportProtocol=null,$poll=null,$description=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'netAddress' => $netAddress,
                    'port' => $port,
                    'transportProtocol' => $transportProtocol,
                    'poll' => $poll,
                    'description' => $description
                ]
            ];
        }

        # Request to get the list of Network Server Sync system parameters.
        static public function SystemNetworkServerSyncParametersGetRequest17sp4() {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => null
            ];
        }

        # Request to modify Network Server Sync system parameters.
        static public function SystemNetworkServerSyncParametersModifyRequest($enableSync=null,$syncLinePorts=null,$syncDeviceManagementInfo=null,$syncTrunkGroups=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'enableSync' => $enableSync,
                    'syncLinePorts' => $syncLinePorts,
                    'syncDeviceManagementInfo' => $syncDeviceManagementInfo,
                    'syncTrunkGroups' => $syncTrunkGroups
                ]
            ];
        }

        # Request to add a Network Server to the system.
        static public function SystemNetworkSynchingServerAddRequest($netAddress=null,$port=null,$description=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'netAddress' => $netAddress,
                    'port' => $port,
                    'description' => $description
                ]
            ];
        }

        # Request to delete a Network Server from the system.
        static public function SystemNetworkSynchingServerDeleteRequest($netAddress=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'netAddress' => $netAddress
                ]
            ];
        }

        # Request to get a list of Network Servers defined in the system.
        static public function SystemNetworkSynchingServerGetListRequest() {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => null
            ];
        }

        # Request to modify a Network Server in the system.
        static public function SystemNetworkSynchingServerModifyRequest($netAddress=null,$port=null,$description=null,$becomePreferred=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'netAddress' => $netAddress,
                    'port' => $port,
                    'description' => $description,
                    'becomePreferred' => $becomePreferred
                ]
            ];
        }

        # Request to get the Number Activation state.
        static public function SystemNumberActivationGetRequest() {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => null
            ];
        }

        # Request to modify system number activation setting.
        static public function SystemNumberActivationModifyRequest($useNumberActivation=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'useNumberActivation' => $useNumberActivation
                ]
            ];
        }

        # Add an entry to the OCI access control list.
        static public function SystemOCIAddACLEntryRequest($netAddress=null,$description=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'netAddress' => $netAddress,
                    'description' => $description
                ]
            ];
        }

        # Delete an entry from the OCI access control list.
        static public function SystemOCIDeleteACLEntryRequest($netAddress=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'netAddress' => $netAddress
                ]
            ];
        }

        # Get the OCI access control list.
        static public function SystemOCIGetACLListRequest() {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => null
            ];
        }

        # Modify an entry in the OCI access control list.
        static public function SystemOCIModifyACLEntryRequest($netAddress=null,$description=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'netAddress' => $netAddress,
                    'description' => $description
                ]
            ];
        }

        # Add an entry to the OCI call control access control list.
        static public function SystemOCICallControlAddACLEntryRequest($netAddress=null,$description=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'netAddress' => $netAddress,
                    'description' => $description
                ]
            ];
        }

        # Delete an entry from the OCI call control access control list.
        static public function SystemOCICallControlDeleteACLEntryRequest($netAddress=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'netAddress' => $netAddress
                ]
            ];
        }

        # Get the OCI call control access control list.
        static public function SystemOCICallControlGetACLListRequest() {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => null
            ];
        }

        # Modify an entry from the call control access control list.
        static public function SystemOCICallControlModifyACLEntryRequest($netAddress=null,$description=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'netAddress' => $netAddress,
                    'description' => $description
                ]
            ];
        }

        # Add an application to the OCI call control application list.
        static public function SystemOCICallControlApplicationAddRequest17($applicationId=null,$enableSystemWide=null,$notificationTimeoutSeconds=null,$description=null,$maxEventChannelsPerSet=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'applicationId' => $applicationId,
                    'enableSystemWide' => $enableSystemWide,
                    'notificationTimeoutSeconds' => $notificationTimeoutSeconds,
                    'description' => $description,
                    'maxEventChannelsPerSet' => $maxEventChannelsPerSet
                ]
            ];
        }

        # Delete an entry from the OCI call control application list.
        static public function SystemOCICallControlApplicationDeleteRequest($applicationId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'applicationId' => $applicationId
                ]
            ];
        }

        # Get the OCI call control application list.
        static public function SystemOCICallControlApplicationGetListRequest() {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => null
            ];
        }

        # Modify an application from the OCI call control application list.
        static public function SystemOCICallControlApplicationModifyRequest($applicationId=null,$enableSystemWide=null,$notificationTimeoutSeconds=null,$description=null,$maxEventChannelsPerSet=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'applicationId' => $applicationId,
                    'enableSystemWide' => $enableSystemWide,
                    'notificationTimeoutSeconds' => $notificationTimeoutSeconds,
                    'description' => $description,
                    'maxEventChannelsPerSet' => $maxEventChannelsPerSet
                ]
            ];
        }

        # Add an entry to the OCI call control application access control list.
        static public function SystemOCICallControlApplicationAddACLEntryRequest($applicationId=null,$netAddress=null,$description=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'applicationId' => $applicationId,
                    'netAddress' => $netAddress,
                    'description' => $description
                ]
            ];
        }

        # Delete an entry from the OCI call control application access control list.
        static public function SystemOCICallControlApplicationDeleteACLEntryRequest($applicationId=null,$netAddress=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'applicationId' => $applicationId,
                    'netAddress' => $netAddress
                ]
            ];
        }

        # Get the OCI call control access control list.
        static public function SystemOCICallControlApplicationGetACLListRequest($applicationId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'applicationId' => $applicationId
                ]
            ];
        }

        # Modify an entry from the call control access control list.
        static public function SystemOCICallControlApplicationModifyACLEntryRequest($applicationId=null,$netAddress=null,$description=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'applicationId' => $applicationId,
                    'netAddress' => $netAddress,
                    'description' => $description
                ]
            ];
        }

        # Add an entry to the OCI Reporting Access Control List.
        static public function SystemOCIReportingAddACLEntryRequest13mp9($netAddress=null,$description=null,$restrictMessages=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'netAddress' => $netAddress,
                    'description' => $description,
                    'restrictMessages' => $restrictMessages
                ]
            ];
        }

        # Add a list of reported messages for a host in the OCI Reporting
        static public function SystemOCIReportingAddMessageNameListRequest($netAddress=null,$messageNameStartsWith=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'netAddress' => $netAddress,
                    'messageNameStartsWith' => $messageNameStartsWith
                ]
            ];
        }

        # Delete an entry from the OCI Reporting Access Control List.
        static public function SystemOCIReportingDeleteACLEntryRequest($netAddress=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'netAddress' => $netAddress
                ]
            ];
        }

        # Delete a list of reported messages from a host in the OCI Reporting
        static public function SystemOCIReportingDeleteMessageNameListRequest($netAddress=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'netAddress' => $netAddress
                ]
            ];
        }

        # Get the OCI Reporting Access Control List.
        static public function SystemOCIReportingGetACLListRequest() {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => null
            ];
        }

        # Get a list of restricted messages from a host in the OCI Reporting
        static public function SystemOCIReportingGetMessageNameListRequest($netAddress=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'netAddress' => $netAddress
                ]
            ];
        }

        # Modify the description on an entry in the OCI Reporting Access Control List.
        static public function SystemOCIReportingModifyACLEntryRequest($netAddress=null,$description=null,$restrictMessages=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'netAddress' => $netAddress,
                    'description' => $description,
                    'restrictMessages' => $restrictMessages
                ]
            ];
        }

        # Request to get the list of OCIReporting system parameters.
        static public function SystemOCIReportingParametersGetRequest14sp1() {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => null
            ];
        }

        # Request to modify OCI Reporting system parameters.
        static public function SystemOCIReportingParametersModifyRequest($serverPort=null,$enableConnectionPing=null,$connectionPingIntervalSeconds=null,$alterPasswords=null,$enablePublicIdentityReporting=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serverPort' => $serverPort,
                    'enableConnectionPing' => $enableConnectionPing,
                    'connectionPingIntervalSeconds' => $connectionPingIntervalSeconds,
                    'alterPasswords' => $alterPasswords,
                    'enablePublicIdentityReporting' => $enablePublicIdentityReporting
                ]
            ];
        }

        # Add a new Office Zone.  The zoneList is an ordered list with the first member being of the highest priority. 
        static public function SystemOfficeZoneAddRequest($officeZoneName=null,$description=null,$zoneName=null,$primaryZoneName=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'officeZoneName' => $officeZoneName,
                    'description' => $description,
                    'zoneName' => $zoneName,
                    'primaryZoneName' => $primaryZoneName
                ]
            ];
        }

        # Delete an Office Zone.
        static public function SystemOfficeZoneDeleteRequest($officeZoneName=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'officeZoneName' => $officeZoneName
                ]
            ];
        }

        # Get an existing Office Zone.
        static public function SystemOfficeZoneGetRequest($officeZoneName=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'officeZoneName' => $officeZoneName
                ]
            ];
        }

        # Request a list of service providers that have a given Office Zone assigned.  The response is either a SystemOfficeZoneGetAssignedServiceProviderListResponse or ErrorResponse.
        static public function SystemOfficeZoneGetAssignedServiceProviderListRequest($officeZoneName=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'officeZoneName' => $officeZoneName
                ]
            ];
        }

        # Get the list of all Office Zones.
        static public function SystemOfficeZoneGetListRequest() {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => null
            ];
        }

        # Get the list of Office Zones that contain a specific
        static public function SystemOfficeZoneGetZoneUsageListRequest($zoneName=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'zoneName' => $zoneName
                ]
            ];
        }

        # Modify an existing Office Zone.
        static public function SystemOfficeZoneModifyRequest($officeZoneName=null,$newOfficeZoneName=null,$description=null,$replacementZoneList=null,$primaryZoneName=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'officeZoneName' => $officeZoneName,
                    'newOfficeZoneName' => $newOfficeZoneName,
                    'description' => $description,
                    'replacementZoneList' => $replacementZoneList,
                    'primaryZoneName' => $primaryZoneName
                ]
            ];
        }

        # Requests the system's password rules setting applicable to
        static public function SystemPasswordRulesGetRequest16() {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => null
            ];
        }

        # Request to modify the system providers password rule
        static public function SystemPasswordRulesModifyRequest14sp3($rulesApplyTo=null,$allowWebAddExternalAuthenticationUsers=null,$disallowUserId=null,$disallowOldPassword=null,$disallowReversedOldPassword=null,$restrictMinDigits=null,$minDigits=null,$restrictMinUpperCaseLetters=null,$minUpperCaseLetters=null,$restrictMinLowerCaseLetters=null,$minLowerCaseLetters=null,$restrictMinNonAlphanumericCharacters=null,$minNonAlphanumericCharacters=null,$minLength=null,$maxFailedLoginAttempts=null,$passwordExpiresDays=null,$sendLoginDisabledNotifyEmail=null,$loginDisabledNotifyEmailAddress=null,$disallowPreviousPasswords=null,$numberOfPreviousPasswords=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'rulesApplyTo' => $rulesApplyTo,
                    'allowWebAddExternalAuthenticationUsers' => $allowWebAddExternalAuthenticationUsers,
                    'disallowUserId' => $disallowUserId,
                    'disallowOldPassword' => $disallowOldPassword,
                    'disallowReversedOldPassword' => $disallowReversedOldPassword,
                    'restrictMinDigits' => $restrictMinDigits,
                    'minDigits' => $minDigits,
                    'restrictMinUpperCaseLetters' => $restrictMinUpperCaseLetters,
                    'minUpperCaseLetters' => $minUpperCaseLetters,
                    'restrictMinLowerCaseLetters' => $restrictMinLowerCaseLetters,
                    'minLowerCaseLetters' => $minLowerCaseLetters,
                    'restrictMinNonAlphanumericCharacters' => $restrictMinNonAlphanumericCharacters,
                    'minNonAlphanumericCharacters' => $minNonAlphanumericCharacters,
                    'minLength' => $minLength,
                    'maxFailedLoginAttempts' => $maxFailedLoginAttempts,
                    'passwordExpiresDays' => $passwordExpiresDays,
                    'sendLoginDisabledNotifyEmail' => $sendLoginDisabledNotifyEmail,
                    'loginDisabledNotifyEmailAddress' => $loginDisabledNotifyEmailAddress,
                    'disallowPreviousPasswords' => $disallowPreviousPasswords,
                    'numberOfPreviousPasswords' => $numberOfPreviousPasswords
                ]
            ];
        }

        # Add a performance measurements reporting ftp server.
        static public function SystemPerformanceMeasurementReportingAddFileServerRequest($ftpHostNetAddress=null,$ftpUserId=null,$ftpUserPassword=null,$passiveFTP=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'ftpHostNetAddress' => $ftpHostNetAddress,
                    'ftpUserId' => $ftpUserId,
                    'ftpUserPassword' => $ftpUserPassword,
                    'passiveFTP' => $passiveFTP
                ]
            ];
        }

        # Delete a performance measurements reporting ftp server.
        static public function SystemPerformanceMeasurementReportingDeleteFileServerRequest($ftpHostNetAddress=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'ftpHostNetAddress' => $ftpHostNetAddress
                ]
            ];
        }

        # Generate a performance measurements report.
        static public function SystemPerformanceMeasurementGenerateReportRequest() {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => null
            ];
        }

        # Requests the list performance measurements reporting ftp servers.
        static public function SystemPerformanceMeasurementReportingGetFileServerListRequest() {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => null
            ];
        }

        # Requests the performance measurements reporting settings.
        static public function SystemPerformanceMeasurementReportingGetRequest() {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => null
            ];
        }

        # Modify a performance measurements reporting ftp server.
        static public function SystemPerformanceMeasurementReportingModifyFileServerRequest($ftpHostNetAddress=null,$passiveFTP=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'ftpHostNetAddress' => $ftpHostNetAddress,
                    'passiveFTP' => $passiveFTP
                ]
            ];
        }

        # Modify the performance measurements reporting settings.
        static public function SystemPerformanceMeasurementReportingModifyRequest($isActive=null,$reportingInterval=null,$resetMeasurementsAfterEachReport=null,$reportEnterprise=null,$reportServiceProvider=null,$reportDevice=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'isActive' => $isActive,
                    'reportingInterval' => $reportingInterval,
                    'resetMeasurementsAfterEachReport' => $resetMeasurementsAfterEachReport,
                    'reportEnterprise' => $reportEnterprise,
                    'reportServiceProvider' => $reportServiceProvider,
                    'reportDevice' => $reportDevice
                ]
            ];
        }

        # Requests the system's default policy settings.
        static public function SystemPolicyGetDefaultRequest17sp3() {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => null
            ];
        }

        # Request to modify the system's default policy settings.
        static public function SystemPolicyModifyDefaultRequest14($groupCallingPlanAccess=null,$groupExtensionAccess=null,$groupLDAPIntegrationAccess=null,$groupVoiceMessagingAccess=null,$groupDepartmentAdminUserAccess=null,$groupDepartmentAdminTrunkGroupAccess=null,$groupDepartmentAdminPhoneNumberExtensionAccess=null,$groupDepartmentAdminCallingLineIdNumberAccess=null,$groupUserAuthenticationAccess=null,$groupUserGroupDirectoryAccess=null,$groupUserProfileAccess=null,$groupUserEnhancedCallLogsAccess=null,$groupAdminProfileAccess=null,$groupAdminUserAccess=null,$groupAdminAdminAccess=null,$groupAdminDepartmentAccess=null,$groupAdminAccessDeviceAccess=null,$groupAdminEnhancedServiceInstanceAccess=null,$groupAdminFeatureAccessCodeAccess=null,$groupAdminPhoneNumberExtensionAccess=null,$groupAdminCallingLineIdNumberAccess=null,$groupAdminServiceAccess=null,$groupAdminTrunkGroupAccess=null,$groupAdminSessionAdmissionControlAccess=null,$groupAdminDialableCallerIDAccess=null,$groupAdminOfficeZoneAccess=null,$serviceProviderAdminProfileAccess=null,$serviceProviderAdminGroupAccess=null,$serviceProviderAdminUserAccess=null,$serviceProviderAdminAdminAccess=null,$ServiceProviderAdminDepartmentAccess=null,$serviceProviderAdminAccessDeviceAccess=null,$serviceProviderAdminPhoneNumberExtensionAccess=null,$serviceProviderAdminCallingLineIdNumberAccess=null,$serviceProviderAdminServiceAccess=null,$serviceProviderAdminServicePackAccess=null,$serviceProviderAdminSessionAdmissionControlAccess=null,$serviceProviderAdminWebBrandingAccess=null,$serviceProviderAdminOfficeZoneAccess=null,$serviceProviderAdminCommunicationBarringAccess=null,$enterpriseAdminNetworkPolicyAccess=null,$serviceProviderAdminDialableCallerIDAccess=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'groupCallingPlanAccess' => $groupCallingPlanAccess,
                    'groupExtensionAccess' => $groupExtensionAccess,
                    'groupLDAPIntegrationAccess' => $groupLDAPIntegrationAccess,
                    'groupVoiceMessagingAccess' => $groupVoiceMessagingAccess,
                    'groupDepartmentAdminUserAccess' => $groupDepartmentAdminUserAccess,
                    'groupDepartmentAdminTrunkGroupAccess' => $groupDepartmentAdminTrunkGroupAccess,
                    'groupDepartmentAdminPhoneNumberExtensionAccess' => $groupDepartmentAdminPhoneNumberExtensionAccess,
                    'groupDepartmentAdminCallingLineIdNumberAccess' => $groupDepartmentAdminCallingLineIdNumberAccess,
                    'groupUserAuthenticationAccess' => $groupUserAuthenticationAccess,
                    'groupUserGroupDirectoryAccess' => $groupUserGroupDirectoryAccess,
                    'groupUserProfileAccess' => $groupUserProfileAccess,
                    'groupUserEnhancedCallLogsAccess' => $groupUserEnhancedCallLogsAccess,
                    'groupAdminProfileAccess' => $groupAdminProfileAccess,
                    'groupAdminUserAccess' => $groupAdminUserAccess,
                    'groupAdminAdminAccess' => $groupAdminAdminAccess,
                    'groupAdminDepartmentAccess' => $groupAdminDepartmentAccess,
                    'groupAdminAccessDeviceAccess' => $groupAdminAccessDeviceAccess,
                    'groupAdminEnhancedServiceInstanceAccess' => $groupAdminEnhancedServiceInstanceAccess,
                    'groupAdminFeatureAccessCodeAccess' => $groupAdminFeatureAccessCodeAccess,
                    'groupAdminPhoneNumberExtensionAccess' => $groupAdminPhoneNumberExtensionAccess,
                    'groupAdminCallingLineIdNumberAccess' => $groupAdminCallingLineIdNumberAccess,
                    'groupAdminServiceAccess' => $groupAdminServiceAccess,
                    'groupAdminTrunkGroupAccess' => $groupAdminTrunkGroupAccess,
                    'groupAdminSessionAdmissionControlAccess' => $groupAdminSessionAdmissionControlAccess,
                    'groupAdminDialableCallerIDAccess' => $groupAdminDialableCallerIDAccess,
                    'groupAdminOfficeZoneAccess' => $groupAdminOfficeZoneAccess,
                    'serviceProviderAdminProfileAccess' => $serviceProviderAdminProfileAccess,
                    'serviceProviderAdminGroupAccess' => $serviceProviderAdminGroupAccess,
                    'serviceProviderAdminUserAccess' => $serviceProviderAdminUserAccess,
                    'serviceProviderAdminAdminAccess' => $serviceProviderAdminAdminAccess,
                    'ServiceProviderAdminDepartmentAccess' => $ServiceProviderAdminDepartmentAccess,
                    'serviceProviderAdminAccessDeviceAccess' => $serviceProviderAdminAccessDeviceAccess,
                    'serviceProviderAdminPhoneNumberExtensionAccess' => $serviceProviderAdminPhoneNumberExtensionAccess,
                    'serviceProviderAdminCallingLineIdNumberAccess' => $serviceProviderAdminCallingLineIdNumberAccess,
                    'serviceProviderAdminServiceAccess' => $serviceProviderAdminServiceAccess,
                    'serviceProviderAdminServicePackAccess' => $serviceProviderAdminServicePackAccess,
                    'serviceProviderAdminSessionAdmissionControlAccess' => $serviceProviderAdminSessionAdmissionControlAccess,
                    'serviceProviderAdminWebBrandingAccess' => $serviceProviderAdminWebBrandingAccess,
                    'serviceProviderAdminOfficeZoneAccess' => $serviceProviderAdminOfficeZoneAccess,
                    'serviceProviderAdminCommunicationBarringAccess' => $serviceProviderAdminCommunicationBarringAccess,
                    'enterpriseAdminNetworkPolicyAccess' => $enterpriseAdminNetworkPolicyAccess,
                    'serviceProviderAdminDialableCallerIDAccess' => $serviceProviderAdminDialableCallerIDAccess
                ]
            ];
        }

        # Add an entry to the Portal API access control list.
        static public function SystemPortalAPIAddACLEntryRequest($netAddress=null,$description=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'netAddress' => $netAddress,
                    'description' => $description
                ]
            ];
        }

        # Delete an entry from the Portal API access control list.
        static public function SystemPortalAPIDeleteACLEntryRequest($netAddress=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'netAddress' => $netAddress
                ]
            ];
        }

        # Get the Portal API access control list.
        static public function SystemPortalAPIGetACLListRequest() {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => null
            ];
        }

        # Modify an entry within the Portal API access control list.
        static public function SystemPortalAPIModifyACLEntryRequest($netAddress=null,$description=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'netAddress' => $netAddress,
                    'description' => $description
                ]
            ];
        }

        # Requests the system passcode rules setting.
        static public function SystemPortalPasscodeRulesGetRequest() {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => null
            ];
        }

        # Request to modify the system passcode rules setting.
        static public function SystemPortalPasscodeRulesModifyRequest($disallowRepeatedDigits=null,$disallowUserNumber=null,$disallowReversedUserNumber=null,$disallowOldPasscode=null,$disallowReversedOldPasscode=null,$minCodeLength=null,$maxCodeLength=null,$disableLoginAfterMaxFailedLoginAttempts=null,$maxFailedLoginAttempts=null,$expirePassword=null,$passcodeExpiresDays=null,$sendLoginDisabledNotifyEmail=null,$loginDisabledNotifyEmailAddress=null,$defaultPassword=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'disallowRepeatedDigits' => $disallowRepeatedDigits,
                    'disallowUserNumber' => $disallowUserNumber,
                    'disallowReversedUserNumber' => $disallowReversedUserNumber,
                    'disallowOldPasscode' => $disallowOldPasscode,
                    'disallowReversedOldPasscode' => $disallowReversedOldPasscode,
                    'minCodeLength' => $minCodeLength,
                    'maxCodeLength' => $maxCodeLength,
                    'disableLoginAfterMaxFailedLoginAttempts' => $disableLoginAfterMaxFailedLoginAttempts,
                    'maxFailedLoginAttempts' => $maxFailedLoginAttempts,
                    'expirePassword' => $expirePassword,
                    'passcodeExpiresDays' => $passcodeExpiresDays,
                    'sendLoginDisabledNotifyEmail' => $sendLoginDisabledNotifyEmail,
                    'loginDisabledNotifyEmailAddress' => $loginDisabledNotifyEmailAddress,
                    'defaultPassword' => $defaultPassword
                ]
            ];
        }

        # Request to get the system's provisioning validation attributes.
        static public function SystemProvisioningValidationGetRequest14sp2() {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => null
            ];
        }

        # Request to modify the system's provisioning validation attributes.
        static public function SystemProvisioningValidationModifyRequest($isActive=null,$isNetworkServerQueryActive=null,$timeoutSeconds=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'isActive' => $isActive,
                    'isNetworkServerQueryActive' => $isNetworkServerQueryActive,
                    'timeoutSeconds' => $timeoutSeconds
                ]
            ];
        }

        # Request to get the list of Redundancy system parameters.
        static public function SystemRedundancyParametersGetRequest16sp2() {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => null
            ];
        }

        # Request to modify Redundancy system parameters.
        static public function SystemRedundancyParametersModifyRequest($rollBackTimerMinutes=null,$sendSipOptionMessageUponMigration=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'rollBackTimerMinutes' => $rollBackTimerMinutes,
                    'sendSipOptionMessageUponMigration' => $sendSipOptionMessageUponMigration
                ]
            ];
        }

        # Add a Roaming Network.
        static public function SystemRoamingNetworkAddRequest($mscAddress=null,$networkTranslationIndex=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'mscAddress' => $mscAddress,
                    'networkTranslationIndex' => $networkTranslationIndex
                ]
            ];
        }

        # Delete a Roaming Network.
        static public function SystemRoamingNetworkDeleteRequest($mscAddress=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'mscAddress' => $mscAddress
                ]
            ];
        }

        # Get the list of all Roaming Networks.
        static public function SystemRoamingNetworkGetListRequest($responseSizeLimit=null,$searchCriteriaRoamingMscAddress=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'responseSizeLimit' => $responseSizeLimit,
                    'searchCriteriaRoamingMscAddress' => $searchCriteriaRoamingMscAddress
                ]
            ];
        }

        # Modify a Roaming Network.
        static public function SystemRoamingNetworkModifyRequest($mscAddress=null,$networkTranslationIndex=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'mscAddress' => $mscAddress,
                    'networkTranslationIndex' => $networkTranslationIndex
                ]
            ];
        }

        # Add an Route Point External System, which is a cluster of Application 
        static public function SystemRoutePointExternalSystemAddRequest($name=null,$description=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'name' => $name,
                    'description' => $description
                ]
            ];
        }

        # Delete an Route Point External System.
        static public function SystemRoutePointExternalSystemDeleteRequest($name=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'name' => $name
                ]
            ];
        }

        # Get a list of Route Point External Systems that are configured for the system.
        static public function SystemRoutePointExternalSystemGetListRequest() {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => null
            ];
        }

        # Modify an Route Point External System.
        static public function SystemRoutePointExternalSystemModifyRequest($name=null,$newName=null,$description=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'name' => $name,
                    'newName' => $newName,
                    'description' => $description
                ]
            ];
        }

        # Get a list of Route Points that are using the specified Route Point External System.  
        static public function SystemRoutePointExternalSystemGetRoutePointListRequest($routePointExternalSystem=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'routePointExternalSystem' => $routePointExternalSystem
                ]
            ];
        }

        # Add an application controller to Route Point External System.
        static public function SystemRoutePointExternalSystemApplicationControllerAddListRequest($name=null,$applicationController=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'name' => $name,
                    'applicationController' => $applicationController
                ]
            ];
        }

        # Delete an application controller for Route Point External System.
        static public function SystemRoutePointExternalSystemApplicationControllerDeleteListRequest($name=null,$applicationController=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'name' => $name,
                    'applicationController' => $applicationController
                ]
            ];
        }

        # Get a list of Application Controllers assigned to the Route Point External Systems specified.
        static public function SystemRoutePointExternalSystemApplicationControllerGetRequest($externalSystem=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'externalSystem' => $externalSystem
                ]
            ];
        }

        # Request to add a routing device to a route.
        static public function SystemRoutingAddRouteDeviceRequest14($routeName=null,$netAddress=null,$port=null,$transportProtocol=null,$description=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'routeName' => $routeName,
                    'netAddress' => $netAddress,
                    'port' => $port,
                    'transportProtocol' => $transportProtocol,
                    'description' => $description
                ]
            ];
        }

        # Request to add a route to the system.
        static public function SystemRoutingAddRouteRequest($routeName=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'routeName' => $routeName
                ]
            ];
        }

        # Request to add a digit routing table entry to the system.
        static public function SystemRoutingAddTranslationRequest($digits=null,$routeName=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'digits' => $digits,
                    'routeName' => $routeName
                ]
            ];
        }

        # Request to delete a routing device from a route.
        static public function SystemRoutingDeleteRouteDeviceRequest($routeName=null,$netAddress=null,$port=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'routeName' => $routeName,
                    'netAddress' => $netAddress,
                    'port' => $port
                ]
            ];
        }

        # Request to delete a route from the system.
        static public function SystemRoutingDeleteRouteRequest($routeName=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'routeName' => $routeName
                ]
            ];
        }

        # Request to delete a digit routing table entry from the system.
        static public function SystemRoutingDeleteTranslationRequest($digits=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'digits' => $digits
                ]
            ];
        }

        # Request the system's general routing attributes.
        static public function SystemRoutingGetRequest() {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => null
            ];
        }

        # Request to get a list of devices for a route.
        static public function SystemRoutingGetRouteDeviceListRequest($routeName=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'routeName' => $routeName
                ]
            ];
        }

        # Request to get a list of routes in the system.
        static public function SystemRoutingGetRouteListRequest() {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => null
            ];
        }

        # Request to get the system digit routing table.
        static public function SystemRoutingGetTranslationListRequest() {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => null
            ];
        }

        # Modifies the system's general routing attributes.
        static public function SystemRoutingModifyRequest($isRouteRoundRobin=null,$routeTimerSeconds=null,$dnsResolvedAddressSelectionPolicy=null,$statefulExpirationMinutes=null,$maxAddressesPerHostname=null,$maxAddressesDuringSetup=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'isRouteRoundRobin' => $isRouteRoundRobin,
                    'routeTimerSeconds' => $routeTimerSeconds,
                    'dnsResolvedAddressSelectionPolicy' => $dnsResolvedAddressSelectionPolicy,
                    'statefulExpirationMinutes' => $statefulExpirationMinutes,
                    'maxAddressesPerHostname' => $maxAddressesPerHostname,
                    'maxAddressesDuringSetup' => $maxAddressesDuringSetup
                ]
            ];
        }

        # Request to modify a routing device.
        static public function SystemRoutingModifyRouteDeviceRequest($routeName=null,$netAddress=null,$port=null,$transportProtocol=null,$description=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'routeName' => $routeName,
                    'netAddress' => $netAddress,
                    'port' => $port,
                    'transportProtocol' => $transportProtocol,
                    'description' => $description
                ]
            ];
        }

        # Request to modify a digit routing table entry in the system.
        static public function SystemRoutingModifyTranslationRequest($digits=null,$routeName=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'digits' => $digits,
                    'routeName' => $routeName
                ]
            ];
        }

        # Request to get the list of system routing profiles.
        static public function SystemRoutingProfileGetListRequest() {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => null
            ];
        }

        # Add an event to system schedule.
        static public function SystemScheduleAddEventRequest($scheduleKey=null,$eventName=null,$startDate=null,$endDate=null,$recurrence=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'scheduleKey' => $scheduleKey,
                    'eventName' => $eventName,
                    'startDate' => $startDate,
                    'endDate' => $endDate,
                    'recurrence' => $recurrence
                ]
            ];
        }

        # Add a system schedule.
        static public function SystemScheduleAddRequest($scheduleName=null,$scheduleType=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'scheduleName' => $scheduleName,
                    'scheduleType' => $scheduleType
                ]
            ];
        }

        # Delete a list of events from a system schedule.
        static public function SystemScheduleDeleteEventListRequest($scheduleKey=null,$eventName=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'scheduleKey' => $scheduleKey,
                    'eventName' => $eventName
                ]
            ];
        }

        # Delete a list of system schedule.
        static public function SystemScheduleDeleteListRequest($scheduleKey=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'scheduleKey' => $scheduleKey
                ]
            ];
        }

        # Get the list of events of a system schedule.
        static public function SystemScheduleGetEventListRequest($scheduleKey=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'scheduleKey' => $scheduleKey
                ]
            ];
        }

        # Get an event from a system schedule.
        static public function SystemScheduleGetEventRequest($scheduleKey=null,$eventName=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'scheduleKey' => $scheduleKey,
                    'eventName' => $eventName
                ]
            ];
        }

        # Get the list of a system schedules. The list can be filtered by schedule type.
        static public function SystemScheduleGetListRequest($scheduleType=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'scheduleType' => $scheduleType
                ]
            ];
        }

        # Modify an event of a system schedule.
        static public function SystemScheduleModifyEventRequest($scheduleKey=null,$eventName=null,$newEventName=null,$startDate=null,$endDate=null,$recurrence=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'scheduleKey' => $scheduleKey,
                    'eventName' => $eventName,
                    'newEventName' => $newEventName,
                    'startDate' => $startDate,
                    'endDate' => $endDate,
                    'recurrence' => $recurrence
                ]
            ];
        }

        # Modify a system schedule.
        static public function SystemScheduleModifyRequest($scheduleKey=null,$newScheduleName=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'scheduleKey' => $scheduleKey,
                    'newScheduleName' => $newScheduleName
                ]
            ];
        }

        # Request to get the list of Server Addresses.
        static public function SystemServerAddressesGetRequest() {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => null
            ];
        }

        # Request to modify Server Addresses.
        static public function SystemServerAddressesModifyRequest($webServerClusterPublicFQDN=null,$applicationServerClusterPrimaryPublicFQDN=null,$applicationServerClusterSecondaryPublicFQDN=null,$applicationServerClusterPrimaryPrivateFQDN=null,$applicationServerClusterSecondaryPrivateFQDN=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'webServerClusterPublicFQDN' => $webServerClusterPublicFQDN,
                    'applicationServerClusterPrimaryPublicFQDN' => $applicationServerClusterPrimaryPublicFQDN,
                    'applicationServerClusterSecondaryPublicFQDN' => $applicationServerClusterSecondaryPublicFQDN,
                    'applicationServerClusterPrimaryPrivateFQDN' => $applicationServerClusterPrimaryPrivateFQDN,
                    'applicationServerClusterSecondaryPrivateFQDN' => $applicationServerClusterSecondaryPrivateFQDN
                ]
            ];
        }

        # Get the Service Activation Access Code system parameters.
        static public function SystemServiceActivationAccessCodeGetRequest() {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => null
            ];
        }

        # Request to modify Service Activation Access Code system parameters.
        static public function SystemServiceActivationAccessCodeModifyRequest($isActive=null,$terminatingAccessCode=null,$redirectingAccessCode=null,$clickToDialAccessCode=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'isActive' => $isActive,
                    'terminatingAccessCode' => $terminatingAccessCode,
                    'redirectingAccessCode' => $redirectingAccessCode,
                    'clickToDialAccessCode' => $clickToDialAccessCode
                ]
            ];
        }

        # Request to add a service code for the purpose of providing free format routable strings for dialing
        static public function SystemServiceCodeAddRequest($serviceCode=null,$description=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceCode' => $serviceCode,
                    'description' => $description
                ]
            ];
        }

        # Request to delete a service code for the purpose of providing free format routable strings for dialing
        static public function SystemServiceCodeDeleteRequest($serviceCode=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceCode' => $serviceCode
                ]
            ];
        }

        # Request to get all service codes that have been defined in the system.
        static public function SystemServiceCodeGetListRequest($responseSizeLimit=null,$searchCriteriaServiceCode=null,$searchCriteriaServiceCodeDescription=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'responseSizeLimit' => $responseSizeLimit,
                    'searchCriteriaServiceCode' => $searchCriteriaServiceCode,
                    'searchCriteriaServiceCodeDescription' => $searchCriteriaServiceCodeDescription
                ]
            ];
        }

        # Request to modify service code.
        static public function SystemServiceCodeModifyRequest($serviceCode=null,$description=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceCode' => $serviceCode,
                    'description' => $description
                ]
            ];
        }

        # Request to get the list of Service Control system parameters.
        static public function SystemServiceControlParametersGetRequest() {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => null
            ];
        }

        # Request to modify Service Control system parameters.
        static public function SystemServiceControlParametersModifyRequest($serverPort=null,$maxClientConnections=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serverPort' => $serverPort,
                    'maxClientConnections' => $maxClientConnections
                ]
            ];
        }

        # Request the system level data associated with session audit.
        static public function SystemSessionAuditGetRequest17sp3() {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => null
            ];
        }

        # Modify the system level data associated with session audit.
        static public function SystemSessionAuditModifyRequest14sp3($isAuditActive=null,$auditIntervalSeconds=null,$auditTimeoutSeconds=null,$releaseCallOnAuditFailure=null,$isSIPRefreshAllowedOnAudit=null,$allowUpdateForSIPRefresh=null,$isSIPSessionTimerActive=null,$sipSessionExpiresMinimumSeconds=null,$enforceSIPSessionExpiresMaximum=null,$sipSessionExpiresMaximumSeconds=null,$sipSessionExpiresTimerSeconds=null,$alwaysUseSessionTimerWhenSupported=null,$preferredSessionTimerRefresher=null,$enableEmergencyCallAlarmTimer=null,$emergencyCallAlarmMinutes=null,$enableEmergencyCallCleanupTimer=null,$emergencyCallCleanupMinutes=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'isAuditActive' => $isAuditActive,
                    'auditIntervalSeconds' => $auditIntervalSeconds,
                    'auditTimeoutSeconds' => $auditTimeoutSeconds,
                    'releaseCallOnAuditFailure' => $releaseCallOnAuditFailure,
                    'isSIPRefreshAllowedOnAudit' => $isSIPRefreshAllowedOnAudit,
                    'allowUpdateForSIPRefresh' => $allowUpdateForSIPRefresh,
                    'isSIPSessionTimerActive' => $isSIPSessionTimerActive,
                    'sipSessionExpiresMinimumSeconds' => $sipSessionExpiresMinimumSeconds,
                    'enforceSIPSessionExpiresMaximum' => $enforceSIPSessionExpiresMaximum,
                    'sipSessionExpiresMaximumSeconds' => $sipSessionExpiresMaximumSeconds,
                    'sipSessionExpiresTimerSeconds' => $sipSessionExpiresTimerSeconds,
                    'alwaysUseSessionTimerWhenSupported' => $alwaysUseSessionTimerWhenSupported,
                    'preferredSessionTimerRefresher' => $preferredSessionTimerRefresher,
                    'enableEmergencyCallAlarmTimer' => $enableEmergencyCallAlarmTimer,
                    'emergencyCallAlarmMinutes' => $emergencyCallAlarmMinutes,
                    'enableEmergencyCallCleanupTimer' => $enableEmergencyCallCleanupTimer,
                    'emergencyCallCleanupMinutes' => $emergencyCallCleanupMinutes
                ]
            ];
        }

        # Retrieves the Sh Interface system parameters.
        static public function SystemShInterfaceParametersGetRequest17() {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => null
            ];
        }

        # Modifies the Sh Interface system parameters.  This request must be submitted on both nodes in the redundant Application Server cluster in order for the changes to take effect on each node without requiring a restart.
        static public function SystemShInterfaceParametersModifyRequest17($hssRealm=null,$publicIdentityRefreshDelaySeconds=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'hssRealm' => $hssRealm,
                    'publicIdentityRefreshDelaySeconds' => $publicIdentityRefreshDelaySeconds
                ]
            ];
        }

        # Dispatches the system refresh task on the local Application Server node.  At most one instance of the system refresh task may run on an Application Server node at a given point in time.  If the system refresh task is already running when this request is made, an ErrorResponse is returned.
        static public function SystemShInterfaceRefreshTaskStartRequest() {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => null
            ];
        }

        # Retrieves the status of the system refresh task on the local Application Server node.
        static public function SystemShInterfaceRefreshTaskGetRequest() {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => null
            ];
        }

        # Terminates the system refresh task in progress on the local Application Server node.
        static public function SystemShInterfaceRefreshTaskTerminateRequest() {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => null
            ];
        }

        # Add an entry to the SIP access control list.
        static public function SystemSIPAddACLEntryRequest14sp2($netAddress=null,$transportProtocol=null,$description=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'netAddress' => $netAddress,
                    'transportProtocol' => $transportProtocol,
                    'description' => $description
                ]
            ];
        }

        # Add a content type for the SIP interface.
        static public function SystemSIPAddContentTypeRequest($contentType=null,$interface=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'contentType' => $contentType,
                    'interface' => $interface
                ]
            ];
        }

        # Delete an entry from the SIP access control list.
        static public function SystemSIPDeleteACLEntryRequest14sp2($netAddress=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'netAddress' => $netAddress
                ]
            ];
        }

        # Delete a content type for the SIP interface.
        static public function SystemSIPDeleteContentTypeRequest($contentType=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'contentType' => $contentType
                ]
            ];
        }

        # Request to add a sip device type.
        static public function SystemSIPDeviceTypeAddRequest17sp4($deviceType=null,$numberOfPorts=null,$profile=null,$registrationCapable=null,$isConferenceDevice=null,$isMobilityManagerDevice=null,$isMusicOnHoldDevice=null,$RFC3264Hold=null,$isTrusted=null,$E164Capable=null,$routeAdvance=null,$forwardingOverride=null,$wirelessIntegration=null,$webBasedConfigURL=null,$isVideoCapable=null,$PBXIntegration=null,$staticRegistrationCapable=null,$cpeDeviceOptions=null,$earlyMediaSupport=null,$authenticateRefer=null,$autoConfigSoftClient=null,$authenticationMode=null,$requiresBroadWorksDigitCollection=null,$requiresBroadWorksCallWaitingTone=null,$requiresMWISubscription=null,$useHistoryInfoHeaderOnAccessSide=null,$adviceOfChargeCapable=null,$resetEvent=null,$supportCallCenterMIMEType=null,$trunkMode=null,$addPCalledPartyId=null,$supportIdentityInUpdateAndReInvite=null,$unscreenedPresentationIdentityPolicy=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'deviceType' => $deviceType,
                    'numberOfPorts' => $numberOfPorts,
                    'profile' => $profile,
                    'registrationCapable' => $registrationCapable,
                    'isConferenceDevice' => $isConferenceDevice,
                    'isMobilityManagerDevice' => $isMobilityManagerDevice,
                    'isMusicOnHoldDevice' => $isMusicOnHoldDevice,
                    'RFC3264Hold' => $RFC3264Hold,
                    'isTrusted' => $isTrusted,
                    'E164Capable' => $E164Capable,
                    'routeAdvance' => $routeAdvance,
                    'forwardingOverride' => $forwardingOverride,
                    'wirelessIntegration' => $wirelessIntegration,
                    'webBasedConfigURL' => $webBasedConfigURL,
                    'isVideoCapable' => $isVideoCapable,
                    'PBXIntegration' => $PBXIntegration,
                    'staticRegistrationCapable' => $staticRegistrationCapable,
                    'cpeDeviceOptions' => $cpeDeviceOptions,
                    'earlyMediaSupport' => $earlyMediaSupport,
                    'authenticateRefer' => $authenticateRefer,
                    'autoConfigSoftClient' => $autoConfigSoftClient,
                    'authenticationMode' => $authenticationMode,
                    'requiresBroadWorksDigitCollection' => $requiresBroadWorksDigitCollection,
                    'requiresBroadWorksCallWaitingTone' => $requiresBroadWorksCallWaitingTone,
                    'requiresMWISubscription' => $requiresMWISubscription,
                    'useHistoryInfoHeaderOnAccessSide' => $useHistoryInfoHeaderOnAccessSide,
                    'adviceOfChargeCapable' => $adviceOfChargeCapable,
                    'resetEvent' => $resetEvent,
                    'supportCallCenterMIMEType' => $supportCallCenterMIMEType,
                    'trunkMode' => $trunkMode,
                    'addPCalledPartyId' => $addPCalledPartyId,
                    'supportIdentityInUpdateAndReInvite' => $supportIdentityInUpdateAndReInvite,
                    'unscreenedPresentationIdentityPolicy' => $unscreenedPresentationIdentityPolicy
                ]
            ];
        }

        # Request to add a sip device type file.
        static public function SystemSIPDeviceTypeFileAddRequest16sp1($deviceType=null,$fileFormat=null,$remoteFileFormat=null,$fileCategory=null,$fileCustomization=null,$fileSource=null,$uploadFile=null,$useHttpDigestAuthentication=null,$macBasedFileAuthentication=null,$userNamePasswordFileAuthentication=null,$macInNonRequestURI=null,$macFormatInNonRequestURI=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'deviceType' => $deviceType,
                    'fileFormat' => $fileFormat,
                    'remoteFileFormat' => $remoteFileFormat,
                    'fileCategory' => $fileCategory,
                    'fileCustomization' => $fileCustomization,
                    'fileSource' => $fileSource,
                    'uploadFile' => $uploadFile,
                    'useHttpDigestAuthentication' => $useHttpDigestAuthentication,
                    'macBasedFileAuthentication' => $macBasedFileAuthentication,
                    'userNamePasswordFileAuthentication' => $userNamePasswordFileAuthentication,
                    'macInNonRequestURI' => $macInNonRequestURI,
                    'macFormatInNonRequestURI' => $macFormatInNonRequestURI
                ]
            ];
        }

        # Request to delete a sip device type.
        static public function SystemSIPDeviceTypeDeleteRequest($deviceType=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'deviceType' => $deviceType
                ]
            ];
        }

        # Request to get the list of sip device types in the system.
        static public function SystemSIPDeviceTypeGetListRequest($responseSizeLimit=null,$searchCriteriaDeviceType=null,$searchCriteriaExactSignalingAddressType=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'responseSizeLimit' => $responseSizeLimit,
                    'searchCriteriaDeviceType' => $searchCriteriaDeviceType,
                    'searchCriteriaExactSignalingAddressType' => $searchCriteriaExactSignalingAddressType
                ]
            ];
        }

        # Request to get a sip device type.
        static public function SystemSIPDeviceTypeGetRequest17sp4($deviceType=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'deviceType' => $deviceType
                ]
            ];
        }

        # Request to modify a sip device type.
        static public function SystemSIPDeviceTypeModifyRequest17($deviceType=null,$isObsolete=null,$registrationCapable=null,$RFC3264Hold=null,$isTrusted=null,$E164Capable=null,$routeAdvance=null,$forwardingOverride=null,$wirelessIntegration=null,$webBasedConfigURL=null,$isVideoCapable=null,$PBXIntegration=null,$staticRegistrationCapable=null,$cpeDeviceOptions=null,$earlyMediaSupport=null,$authenticateRefer=null,$autoConfigSoftClient=null,$authenticationMode=null,$requiresBroadWorksDigitCollection=null,$requiresBroadWorksCallWaitingTone=null,$requiresMWISubscription=null,$useHistoryInfoHeaderOnAccessSide=null,$adviceOfChargeCapable=null,$resetEvent=null,$supportCallCenterMIMEType=null,$trunkMode=null,$addPCalledPartyId=null,$supportIdentityInUpdateAndReInvite=null,$unscreenedPresentationIdentityPolicy=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'deviceType' => $deviceType,
                    'isObsolete' => $isObsolete,
                    'registrationCapable' => $registrationCapable,
                    'RFC3264Hold' => $RFC3264Hold,
                    'isTrusted' => $isTrusted,
                    'E164Capable' => $E164Capable,
                    'routeAdvance' => $routeAdvance,
                    'forwardingOverride' => $forwardingOverride,
                    'wirelessIntegration' => $wirelessIntegration,
                    'webBasedConfigURL' => $webBasedConfigURL,
                    'isVideoCapable' => $isVideoCapable,
                    'PBXIntegration' => $PBXIntegration,
                    'staticRegistrationCapable' => $staticRegistrationCapable,
                    'cpeDeviceOptions' => $cpeDeviceOptions,
                    'earlyMediaSupport' => $earlyMediaSupport,
                    'authenticateRefer' => $authenticateRefer,
                    'autoConfigSoftClient' => $autoConfigSoftClient,
                    'authenticationMode' => $authenticationMode,
                    'requiresBroadWorksDigitCollection' => $requiresBroadWorksDigitCollection,
                    'requiresBroadWorksCallWaitingTone' => $requiresBroadWorksCallWaitingTone,
                    'requiresMWISubscription' => $requiresMWISubscription,
                    'useHistoryInfoHeaderOnAccessSide' => $useHistoryInfoHeaderOnAccessSide,
                    'adviceOfChargeCapable' => $adviceOfChargeCapable,
                    'resetEvent' => $resetEvent,
                    'supportCallCenterMIMEType' => $supportCallCenterMIMEType,
                    'trunkMode' => $trunkMode,
                    'addPCalledPartyId' => $addPCalledPartyId,
                    'supportIdentityInUpdateAndReInvite' => $supportIdentityInUpdateAndReInvite,
                    'unscreenedPresentationIdentityPolicy' => $unscreenedPresentationIdentityPolicy
                ]
            ];
        }

        # Get the SIP access control list.
        static public function SystemSIPGetACLListRequest() {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => null
            ];
        }

        # Get the content type list for the SIP interface.
        static public function SystemSIPGetContentTypeListRequest() {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => null
            ];
        }

        # Modify an entry from the SIP access control list.
        static public function SystemSIPModifyACLEntryRequest14sp2($netAddress=null,$transportProtocol=null,$description=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'netAddress' => $netAddress,
                    'transportProtocol' => $transportProtocol,
                    'description' => $description
                ]
            ];
        }

        # Modify an content type for the SIP interface.
        static public function SystemSIPModifyContentTypeRequest($contentType=null,$interface=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'contentType' => $contentType,
                    'interface' => $interface
                ]
            ];
        }

        # Add an entry to the SMDI access control list.
        static public function SystemSMDIAddACLEntryRequest14sp2($netAddress=null,$description=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'netAddress' => $netAddress,
                    'description' => $description
                ]
            ];
        }

        # Delete an entry from the SMDI access control list.
        static public function SystemSMDIDeleteACLEntryRequest14sp2($netAddress=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'netAddress' => $netAddress
                ]
            ];
        }

        # Get the SMDI access control list.
        static public function SystemSMDIGetACLListRequest() {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => null
            ];
        }

        # Modify an entry from the SMDI access control list.
        static public function SystemSMDIModifyACLEntryRequest14sp2($netAddress=null,$description=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'netAddress' => $netAddress,
                    'description' => $description
                ]
            ];
        }

        # Request to get the list of SMDI system parameters.
        static public function SystemSMDIParametersGetRequest() {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => null
            ];
        }

        # Request to modify SMDI system parameters.
        static public function SystemSMDIParametersModifyRequest($enableSMDI=null,$listeningPort=null,$maxConnections=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'enableSMDI' => $enableSMDI,
                    'listeningPort' => $listeningPort,
                    'maxConnections' => $maxConnections
                ]
            ];
        }

        # Request the system level data associated with SMPP external interface.
        static public function SystemSMPPGetRequest14sp5() {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => null
            ];
        }

        # Request to modify the system level data associated with the SMPP external interface.
        static public function SystemSMPPModifyRequest($primarySMPPServerNetAddress=null,$primarySMPPPort=null,$secondarySMPPServerNetAddress=null,$secondarySMPPPort=null,$systemId=null,$password=null,$version=null,$systemType=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'primarySMPPServerNetAddress' => $primarySMPPServerNetAddress,
                    'primarySMPPPort' => $primarySMPPPort,
                    'secondarySMPPServerNetAddress' => $secondarySMPPServerNetAddress,
                    'secondarySMPPPort' => $secondarySMPPPort,
                    'systemId' => $systemId,
                    'password' => $password,
                    'version' => $version,
                    'systemType' => $systemType
                ]
            ];
        }

        # Requests the software version of the Application Server.
        static public function SystemSoftwareVersionGetRequest() {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => null
            ];
        }

        # Requests the list of state and province names.
        static public function SystemStateOrProvinceGetListRequest() {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => null
            ];
        }

        # Get the system login configuration for all subscribers.
        static public function SystemSubscriberGetLoginParametersRequest() {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => null
            ];
        }

        # Modify the system login configuration for all subscribers
        static public function SystemSubscriberModifyLoginParametersRequest($maxFailedLoginAttempts=null,$minLoginIdLength=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'maxFailedLoginAttempts' => $maxFailedLoginAttempts,
                    'minLoginIdLength' => $minLoginIdLength
                ]
            ];
        }

        # Modify the system call processing configuration for all subscribers.
        static public function SystemSubscriberModifyCallProcessingParametersRequest14sp7($isExtendedCallingLineIdActive=null,$isRingTimeOutActive=null,$ringTimeoutSeconds=null,$allowEmergencyRemoteOfficeOriginations=null,$maxNoAnswerNumberOfRings=null,$incomingCallToUserAliasMode=null,$bypassTerminationLoopDetection=null,$honorCLIDBlockingForEmergencyCalls=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'isExtendedCallingLineIdActive' => $isExtendedCallingLineIdActive,
                    'isRingTimeOutActive' => $isRingTimeOutActive,
                    'ringTimeoutSeconds' => $ringTimeoutSeconds,
                    'allowEmergencyRemoteOfficeOriginations' => $allowEmergencyRemoteOfficeOriginations,
                    'maxNoAnswerNumberOfRings' => $maxNoAnswerNumberOfRings,
                    'incomingCallToUserAliasMode' => $incomingCallToUserAliasMode,
                    'bypassTerminationLoopDetection' => $bypassTerminationLoopDetection,
                    'honorCLIDBlockingForEmergencyCalls' => $honorCLIDBlockingForEmergencyCalls
                ]
            ];
        }

        # Get the system call processing configuration for all subscribers
        static public function SystemSubscriberGetCallProcessingParametersRequest17sp4() {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => null
            ];
        }

        # Requests the list of time zone names.
        static public function SystemTimeZoneGetListRequest() {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => null
            ];
        }

        # Request to modify the device language name that is mapped to a BroadWorks language name. The request can be used to map many languages.
        static public function SystemSIPDeviceTypeLanguageMappingModifyRequest($deviceType=null,$languageMapping=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'deviceType' => $deviceType,
                    'languageMapping' => $languageMapping
                ]
            ];
        }

        # Request to get the list of device language names mapped to BroadWorks language names, per-device type.
        static public function SystemSIPDeviceTypeLanguageMappingGetListRequest($deviceType=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'deviceType' => $deviceType
                ]
            ];
        }

        # Request to delete a sip device type file.
        static public function SystemSIPDeviceTypeFileDeleteRequest14sp8($deviceType=null,$fileFormat=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'deviceType' => $deviceType,
                    'fileFormat' => $fileFormat
                ]
            ];
        }

        # Request to modify a sip device type file.
        static public function SystemSIPDeviceTypeFileModifyRequest16sp1($deviceType=null,$fileFormat=null,$fileCustomization=null,$fileSource=null,$uploadFile=null,$useHttpDigestAuthentication=null,$macBasedFileAuthentication=null,$userNamePasswordFileAuthentication=null,$macInNonRequestURI=null,$macFormatInNonRequestURI=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'deviceType' => $deviceType,
                    'fileFormat' => $fileFormat,
                    'fileCustomization' => $fileCustomization,
                    'fileSource' => $fileSource,
                    'uploadFile' => $uploadFile,
                    'useHttpDigestAuthentication' => $useHttpDigestAuthentication,
                    'macBasedFileAuthentication' => $macBasedFileAuthentication,
                    'userNamePasswordFileAuthentication' => $userNamePasswordFileAuthentication,
                    'macInNonRequestURI' => $macInNonRequestURI,
                    'macFormatInNonRequestURI' => $macFormatInNonRequestURI
                ]
            ];
        }

        # Request to get the list of device files managed by the Device Management System, on a per-device type basis.
        static public function SystemSIPDeviceTypeFileGetListRequest14sp8($deviceType=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'deviceType' => $deviceType
                ]
            ];
        }

        # Request to get a sip device type file.
        static public function SystemSIPDeviceTypeFileGetRequest16sp1($deviceType=null,$fileFormat=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'deviceType' => $deviceType,
                    'fileFormat' => $fileFormat
                ]
            ];
        }

        # Request to set the level of integration that a device type has in relation to BroadWorks services.
        static public function SystemSIPDeviceTypeServiceModifyRequest($deviceType=null,$supportsPolycomPhoneServices=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'deviceType' => $deviceType,
                    'supportsPolycomPhoneServices' => $supportsPolycomPhoneServices
                ]
            ];
        }

        # Request to get the list of BroadWorks services that can be integrated to a device type and the level of integration for this device type.
        static public function SystemSIPDeviceTypeServiceGetRequest($deviceType=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'deviceType' => $deviceType
                ]
            ];
        }

        # Add a Zone and optional Net Addresses and Physical Locations.
        static public function SystemZoneAddRequest($zoneName=null,$netAddress=null,$netAddressRange=null,$locationBasedPhysicalLocation=null,$callingZonePhysicalLocation=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'zoneName' => $zoneName,
                    'netAddress' => $netAddress,
                    'netAddressRange' => $netAddressRange,
                    'locationBasedPhysicalLocation' => $locationBasedPhysicalLocation,
                    'callingZonePhysicalLocation' => $callingZonePhysicalLocation
                ]
            ];
        }

        # Delete a Zone.
        static public function SystemZoneDeleteRequest($zoneName=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'zoneName' => $zoneName
                ]
            ];
        }

        # Get the list of all Zones.
        static public function SystemZoneGetListRequest() {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => null
            ];
        }

        # Returns a zone calling physical location for a given zone.
        static public function SystemZoneCallingZonePhysicalLocationGetRequest($zoneName=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'zoneName' => $zoneName
                ]
            ];
        }

        # Modifies a zone calling physical location for a given zone.
        static public function SystemZoneCallingZonePhysicalLocationModifyRequest($zoneName=null,$physicalLocation=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'zoneName' => $zoneName,
                    'physicalLocation' => $physicalLocation
                ]
            ];
        }

        # Adds a list of physical locations to a zone
        static public function SystemZoneLocationBasedPhysicalLocationAddListRequest($zoneName=null,$physicalLocation=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'zoneName' => $zoneName,
                    'physicalLocation' => $physicalLocation
                ]
            ];
        }

        # Deletes a list of physical addresses from a zone
        static public function SystemZoneLocationBasedPhysicalLocationDeleteListRequest($zoneName=null,$physicalLocation=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'zoneName' => $zoneName,
                    'physicalLocation' => $physicalLocation
                ]
            ];
        }

        # Gets a list of physical locations assigned to a zone.
        static public function SystemZoneLocationBasedPhysicalLocationGetListRequest($zoneName=null,$responseSizeLimit=null,$searchCriteriaPhysicalLocation=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'zoneName' => $zoneName,
                    'responseSizeLimit' => $responseSizeLimit,
                    'searchCriteriaPhysicalLocation' => $searchCriteriaPhysicalLocation
                ]
            ];
        }

        # Adds a list of IP addresses to a zone
        static public function SystemZoneNetAddressAddListRequest($zoneName=null,$netAddress=null,$netAddressRange=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'zoneName' => $zoneName,
                    'netAddress' => $netAddress,
                    'netAddressRange' => $netAddressRange
                ]
            ];
        }

        # Deletes a list of IP addresses from a zone
        static public function SystemZoneNetAddressDeleteListRequest($zoneName=null,$netAddress=null,$netAddressRange=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'zoneName' => $zoneName,
                    'netAddress' => $netAddress,
                    'netAddressRange' => $netAddressRange
                ]
            ];
        }

        # Gets a list of IP Addresses and/or Ranges assigned to a zone.
        static public function SystemZoneNetAddressGetListRequest($zoneName=null,$responseSizeLimit=null,$searchCriteriaZoneIPAddress=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'zoneName' => $zoneName,
                    'responseSizeLimit' => $responseSizeLimit,
                    'searchCriteriaZoneIPAddress' => $searchCriteriaZoneIPAddress
                ]
            ];
        }

        # Request the system level data associated with Selective Services.
        static public function SystemSelectiveServicesGetRequest() {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => null
            ];
        }

        # Modify the system level data associated with SystemSelectiveServicesRequest.
        static public function SystemSelectiveServicesModifyRequest($scheduleCombination=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'scheduleCombination' => $scheduleCombination
                ]
            ];
        }

}