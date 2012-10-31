<?php
class OCISchemaServiceInventoryReport {
        # Request the group's inventory report.
        static public function GroupInventoryReportGetRequest($serviceProviderId=null,$groupId=null,$includeUsers=null,$includeServices=null,$includeDns=null,$includeAccessDevices=null,$includeDepartments=null,$reportDeliveryEmailAddress=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId,
                    'includeUsers' => $includeUsers,
                    'includeServices' => $includeServices,
                    'includeDns' => $includeDns,
                    'includeAccessDevices' => $includeAccessDevices,
                    'includeDepartments' => $includeDepartments,
                    'reportDeliveryEmailAddress' => $reportDeliveryEmailAddress
                ]
            ];
        }

        # Request the system level data associated with Inventory Report.
        static public function SystemInventoryReportGetRequest() {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => null
            ];
        }

        # Modify the system level data associated with Inventory Report.
        static public function SystemInventoryReportModifyRequest($defaultFromAddress=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'defaultFromAddress' => $defaultFromAddress
                ]
            ];
        }

}