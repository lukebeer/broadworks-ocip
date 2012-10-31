<?php
class OCISchemaServiceLDAPIntegration {
        # Get the LDAP directory attributes for a group.
        static public function GroupLDAPIntegrationGetDirectoryRequest($serviceProviderId=null,$groupId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId
                ]
            ];
        }

        # Modify the LDAP directory attributes for a group.
        static public function GroupLDAPIntegrationModifyDirectoryRequest($serviceProviderId=null,$groupId=null,$useLevel=null,$serverNetAddress=null,$serverPort=null,$searchBase=null,$useSSL=null,$requireAuthentication=null,$authenticatedDN=null,$authenticatedPassword=null,$isSortEnabled=null,$isPagedResultEnabled=null,$searchFilter=null,$includeSearchAttributeInSearchFilter=null,$column1AttributeName=null,$column2AttributeName=null,$column3AttributeName=null,$column4AttributeName=null,$column1Label=null,$column2Label=null,$column3Label=null,$column4Label=null,$searchColumn=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId,
                    'useLevel' => $useLevel,
                    'serverNetAddress' => $serverNetAddress,
                    'serverPort' => $serverPort,
                    'searchBase' => $searchBase,
                    'useSSL' => $useSSL,
                    'requireAuthentication' => $requireAuthentication,
                    'authenticatedDN' => $authenticatedDN,
                    'authenticatedPassword' => $authenticatedPassword,
                    'isSortEnabled' => $isSortEnabled,
                    'isPagedResultEnabled' => $isPagedResultEnabled,
                    'searchFilter' => $searchFilter,
                    'includeSearchAttributeInSearchFilter' => $includeSearchAttributeInSearchFilter,
                    'column1AttributeName' => $column1AttributeName,
                    'column2AttributeName' => $column2AttributeName,
                    'column3AttributeName' => $column3AttributeName,
                    'column4AttributeName' => $column4AttributeName,
                    'column1Label' => $column1Label,
                    'column2Label' => $column2Label,
                    'column3Label' => $column3Label,
                    'column4Label' => $column4Label,
                    'searchColumn' => $searchColumn
                ]
            ];
        }

        # Request the group level data associated with LDAP Integration.
        static public function GroupLDAPIntegrationGetRequest($serviceProviderId=null,$groupId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId
                ]
            ];
        }

        # Modify the group level data associated with LDAP Integration.
        static public function GroupLDAPIntegrationModifyRequest($serviceProviderId=null,$groupId=null,$isActive=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId,
                    'isActive' => $isActive
                ]
            ];
        }

        # Get the LDAP directory attributes for a service provider.
        static public function ServiceProviderLDAPIntegrationGetDirectoryRequest($serviceProviderId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId
                ]
            ];
        }

        # Modify the LDAP directory attributes for a service provider.
        static public function ServiceProviderLDAPIntegrationModifyDirectoryRequest($serviceProviderId=null,$serverNetAddress=null,$serverPort=null,$searchBase=null,$useSSL=null,$requireAuthentication=null,$authenticatedDN=null,$authenticatedPassword=null,$isSortEnabled=null,$isPagedResultEnabled=null,$searchFilter=null,$includeSearchAttributeInSearchFilter=null,$column1AttributeName=null,$column2AttributeName=null,$column3AttributeName=null,$column4AttributeName=null,$column1Label=null,$column2Label=null,$column3Label=null,$column4Label=null,$searchColumn=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'serverNetAddress' => $serverNetAddress,
                    'serverPort' => $serverPort,
                    'searchBase' => $searchBase,
                    'useSSL' => $useSSL,
                    'requireAuthentication' => $requireAuthentication,
                    'authenticatedDN' => $authenticatedDN,
                    'authenticatedPassword' => $authenticatedPassword,
                    'isSortEnabled' => $isSortEnabled,
                    'isPagedResultEnabled' => $isPagedResultEnabled,
                    'searchFilter' => $searchFilter,
                    'includeSearchAttributeInSearchFilter' => $includeSearchAttributeInSearchFilter,
                    'column1AttributeName' => $column1AttributeName,
                    'column2AttributeName' => $column2AttributeName,
                    'column3AttributeName' => $column3AttributeName,
                    'column4AttributeName' => $column4AttributeName,
                    'column1Label' => $column1Label,
                    'column2Label' => $column2Label,
                    'column3Label' => $column3Label,
                    'column4Label' => $column4Label,
                    'searchColumn' => $searchColumn
                ]
            ];
        }

        # Request the system level data associated with LDAP Integration.
        static public function SystemLDAPIntegrationGetDirectoryRequest() {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => null
            ];
        }

        # Modify the system level data associated with LDAP Integration.
        static public function SystemLDAPIntegrationModifyDirectoryRequest($serverNetAddress=null,$serverPort=null,$searchBase=null,$useSSL=null,$requireAuthentication=null,$authenticatedDN=null,$authenticatedPassword=null,$isSortEnabled=null,$isPagedResultEnabled=null,$searchFilter=null,$includeSearchAttributeInSearchFilter=null,$column1AttributeName=null,$column2AttributeName=null,$column3AttributeName=null,$column4AttributeName=null,$column1Label=null,$column2Label=null,$column3Label=null,$column4Label=null,$searchColumn=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serverNetAddress' => $serverNetAddress,
                    'serverPort' => $serverPort,
                    'searchBase' => $searchBase,
                    'useSSL' => $useSSL,
                    'requireAuthentication' => $requireAuthentication,
                    'authenticatedDN' => $authenticatedDN,
                    'authenticatedPassword' => $authenticatedPassword,
                    'isSortEnabled' => $isSortEnabled,
                    'isPagedResultEnabled' => $isPagedResultEnabled,
                    'searchFilter' => $searchFilter,
                    'includeSearchAttributeInSearchFilter' => $includeSearchAttributeInSearchFilter,
                    'column1AttributeName' => $column1AttributeName,
                    'column2AttributeName' => $column2AttributeName,
                    'column3AttributeName' => $column3AttributeName,
                    'column4AttributeName' => $column4AttributeName,
                    'column1Label' => $column1Label,
                    'column2Label' => $column2Label,
                    'column3Label' => $column3Label,
                    'column4Label' => $column4Label,
                    'searchColumn' => $searchColumn
                ]
            ];
        }

        # Request the LDAP entry lists for a user.
        static public function UserLDAPIntegrationGetDirectoryListRequest($userId=null,$searchKey=null,$page=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId,
                    'searchKey' => $searchKey,
                    'page' => $page
                ]
            ];
        }

        # Request one LDAP entry for a user.
        static public function UserLDAPIntegrationGetDirectoryEntryRequest($userId=null,$entryName=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId,
                    'entryName' => $entryName
                ]
            ];
        }

}