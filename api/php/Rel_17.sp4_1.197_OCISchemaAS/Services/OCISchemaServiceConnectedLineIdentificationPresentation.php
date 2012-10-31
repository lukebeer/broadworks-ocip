<?php
class OCISchemaServiceConnectedLineIdentificationPresentation {
        # Request the system level data associated with the COLP service.
        static public function SystemConnectedLineIdentificationPresentationGetRequest() {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => null
            ];
        }

        # Modify the system level data associated with the COLP Service.
        static public function SystemConnectedLineIdentificationPresentationModifyRequest($enforceUserServiceAssignment=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'enforceUserServiceAssignment' => $enforceUserServiceAssignment
                ]
            ];
        }

}