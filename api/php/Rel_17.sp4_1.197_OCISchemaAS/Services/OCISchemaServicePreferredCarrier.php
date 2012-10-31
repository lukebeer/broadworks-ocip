<?php
class OCISchemaServicePreferredCarrier {
        # Requests the currently configured carriers for a group.
        static public function GroupPreferredCarrierGroupGetRequest($serviceProviderId=null,$groupId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId
                ]
            ];
        }

        # Modifies the currently configured carriers for a group.
        static public function GroupPreferredCarrierGroupModifyRequest($serviceProviderId=null,$groupId=null,$intraLataCarrier=null,$interLataCarrier=null,$internationalCarrier=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId,
                    'intraLataCarrier' => $intraLataCarrier,
                    'interLataCarrier' => $interLataCarrier,
                    'internationalCarrier' => $internationalCarrier
                ]
            ];
        }

        # Add the country code preferred carriers for a service provider or enterprise. For each
        static public function ServiceProviderPreferredCarrierAddRequest($serviceProviderId=null,$countryCode=null,$intraLataCarrier=null,$interLataCarrier=null,$internationalCarrier=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'countryCode' => $countryCode,
                    'intraLataCarrier' => $intraLataCarrier,
                    'interLataCarrier' => $interLataCarrier,
                    'internationalCarrier' => $internationalCarrier
                ]
            ];
        }

        # Delete the country code preferred carriers for a service provider or enterprise.
        static public function ServiceProviderPreferredCarrierDeleteRequest($serviceProviderId=null,$countryCode=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'countryCode' => $countryCode
                ]
            ];
        }

        # Requests the default country code and the list of unused country codes for a service provider / enterprise.
        static public function ServiceProviderPreferredCarrierGetAvailableCountryCodeListRequest($serviceProviderId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId
                ]
            ];
        }

        # Requests the lists of carriers for a specified country code for a service provider / enterprise.
        static public function ServiceProviderPreferredCarrierGetCarrierListRequest($serviceProviderId=null,$countryCode=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'countryCode' => $countryCode
                ]
            ];
        }

        # Requests a table of all the carriers defined in a specified service provider or enterprise.
        static public function ServiceProviderPreferredCarrierGetListRequest($serviceProviderId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId
                ]
            ];
        }

        # Requests the currently configured carriers for a specified country code for a service provider / enterprise.
        static public function ServiceProviderPreferredCarrierGetRequest($serviceProviderId=null,$countryCode=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'countryCode' => $countryCode
                ]
            ];
        }

        # Modify the country code preferred carriers for a service provider or enterprise. For each
        static public function ServiceProviderPreferredCarrierModifyRequest($serviceProviderId=null,$countryCode=null,$intraLataCarrier=null,$interLataCarrier=null,$internationalCarrier=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'countryCode' => $countryCode,
                    'intraLataCarrier' => $intraLataCarrier,
                    'interLataCarrier' => $interLataCarrier,
                    'internationalCarrier' => $internationalCarrier
                ]
            ];
        }

        # Add a carrier to the system.
        static public function SystemPreferredCarrierAddRequest($carrier=null,$cic=null,$countryCode=null,$isIntraLata=null,$isInterLata=null,$isInternational=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'carrier' => $carrier,
                    'cic' => $cic,
                    'countryCode' => $countryCode,
                    'isIntraLata' => $isIntraLata,
                    'isInterLata' => $isInterLata,
                    'isInternational' => $isInternational
                ]
            ];
        }

        # Delete a carrier from the system.
        static public function SystemPreferredCarrierDeleteRequest($carrier=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'carrier' => $carrier
                ]
            ];
        }

        # Requests a list of groups using the specified carrier.  It is possible to restrict the
        static public function SystemPreferredCarrierGetGroupListRequest($carrier=null,$responseSizeLimit=null,$searchCriteriaGroupId=null,$searchCriteriaGroupName=null,$searchCriteriaExactServiceProvider=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'carrier' => $carrier,
                    'responseSizeLimit' => $responseSizeLimit,
                    'searchCriteriaGroupId' => $searchCriteriaGroupId,
                    'searchCriteriaGroupName' => $searchCriteriaGroupName,
                    'searchCriteriaExactServiceProvider' => $searchCriteriaExactServiceProvider
                ]
            ];
        }

        # Requests a table of all the carriers defined in the system.
        static public function SystemPreferredCarrierGetListRequest() {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => null
            ];
        }

        # Requests the attributes of carrier.
        static public function SystemPreferredCarrierGetRequest($carrier=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'carrier' => $carrier
                ]
            ];
        }

        # Requests a list of users using the specified carrier.  It is possible to restrict the
        static public function SystemPreferredCarrierGetUserListRequest($carrier=null,$responseSizeLimit=null,$searchCriteriaUserLastName=null,$searchCriteriaUserFirstName=null,$searchCriteriaDn=null,$searchCriteriaEmailAddress=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'carrier' => $carrier,
                    'responseSizeLimit' => $responseSizeLimit,
                    'searchCriteriaUserLastName' => $searchCriteriaUserLastName,
                    'searchCriteriaUserFirstName' => $searchCriteriaUserFirstName,
                    'searchCriteriaDn' => $searchCriteriaDn,
                    'searchCriteriaEmailAddress' => $searchCriteriaEmailAddress
                ]
            ];
        }

        # Modify the attributes of a carrier.
        static public function SystemPreferredCarrierModifyRequest($carrier=null,$cic=null,$countryCode=null,$isIntraLata=null,$isInterLata=null,$isInternational=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'carrier' => $carrier,
                    'cic' => $cic,
                    'countryCode' => $countryCode,
                    'isIntraLata' => $isIntraLata,
                    'isInterLata' => $isInterLata,
                    'isInternational' => $isInternational
                ]
            ];
        }

        # Requests the currently configured preferred carriers for a user.
        static public function UserPreferredCarrierUserGetRequest($userId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId
                ]
            ];
        }

        # Modifies the currently configured preferred carriers for a user.
        static public function UserPreferredCarrierUserModifyRequest($userId=null,$intraLataCarrier=null,$interLataCarrier=null,$internationalCarrier=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId,
                    'intraLataCarrier' => $intraLataCarrier,
                    'interLataCarrier' => $interLataCarrier,
                    'internationalCarrier' => $internationalCarrier
                ]
            ];
        }

}