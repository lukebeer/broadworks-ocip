<?php
class OCISchemaServiceMWIDeliveryToMobileEndpoint {
        # Request the user level data associated with MWI Delivery to Mobile Endpoint service.
        static public function UserMWIDeliveryToMobileEndpointGetRequest($userId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId
                ]
            ];
        }

        # Request to modify the user level data associated with MWI Delivery to Mobile Endpoint service.
        static public function UserMWIDeliveryToMobileEndpointModifyRequest($userId=null,$isActive=null,$mobilePhoneNumber=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId,
                    'isActive' => $isActive,
                    'mobilePhoneNumber' => $mobilePhoneNumber
                ]
            ];
        }

}