<?php
class OCISchemaServiceLocationBasedCallingRestrictions {
        # Gets system level the Location Based Calling Restrictions attributes.
        static public function SystemLocationBasedCallingRestrictionsGetRequest17sp3() {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => null
            ];
        }

        # Modifies the system level Location Based Calling Restriction attributes.
        static public function SystemLocationBasedCallingRestrictionsModifyRequest($physicalLocationIndicator=null,$enforceMscValidation=null,$enableOfficeZoneAnnouncement=null,$enhanceOfficeZone=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'physicalLocationIndicator' => $physicalLocationIndicator,
                    'enforceMscValidation' => $enforceMscValidation,
                    'enableOfficeZoneAnnouncement' => $enableOfficeZoneAnnouncement,
                    'enhanceOfficeZone' => $enhanceOfficeZone
                ]
            ];
        }

}