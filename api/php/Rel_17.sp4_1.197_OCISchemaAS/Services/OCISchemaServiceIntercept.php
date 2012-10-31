<?php
class OCISchemaServiceIntercept {
        # Get the group's intercept group service settings.
        static public function GroupInterceptGroupGetRequest16sp1($serviceProviderId=null,$groupId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId
                ]
            ];
        }

        # Modify the group's intercept group service settings.
        static public function GroupInterceptGroupModifyRequest16($serviceProviderId=null,$groupId=null,$isActive=null,$announcementSelection=null,$audioFile=null,$videoFile=null,$playNewPhoneNumber=null,$newPhoneNumber=null,$transferOnZeroToPhoneNumber=null,$transferPhoneNumber=null,$rerouteOutboundCalls=null,$outboundReroutePhoneNumber=null,$allowOutboundLocalCalls=null,$inboundCallMode=null,$alternateBlockingAnnouncement=null,$routeToVoiceMail=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId,
                    'isActive' => $isActive,
                    'announcementSelection' => $announcementSelection,
                    'audioFile' => $audioFile,
                    'videoFile' => $videoFile,
                    'playNewPhoneNumber' => $playNewPhoneNumber,
                    'newPhoneNumber' => $newPhoneNumber,
                    'transferOnZeroToPhoneNumber' => $transferOnZeroToPhoneNumber,
                    'transferPhoneNumber' => $transferPhoneNumber,
                    'rerouteOutboundCalls' => $rerouteOutboundCalls,
                    'outboundReroutePhoneNumber' => $outboundReroutePhoneNumber,
                    'allowOutboundLocalCalls' => $allowOutboundLocalCalls,
                    'inboundCallMode' => $inboundCallMode,
                    'alternateBlockingAnnouncement' => $alternateBlockingAnnouncement,
                    'routeToVoiceMail' => $routeToVoiceMail
                ]
            ];
        }

        # Request to add an Intercept User number(s) to the system.
        static public function SystemInterceptUserAddDnListRequest($interceptDNList=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'interceptDNList' => $interceptDNList
                ]
            ];
        }

        # Request to delete an Intercept User number(s) from the system.
        static public function SystemInterceptUserDeleteDnListRequest($phoneNumbers=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'phoneNumbers' => $phoneNumbers
                ]
            ];
        }

        # Request to get a list of Intercept User dns defined in the system.
        static public function SystemInterceptUserGetDnListRequest() {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => null
            ];
        }

        # Get the system-level intercept user service settings.
        static public function SystemInterceptUserGetRequest() {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => null
            ];
        }

        # Request to modify a Intercept User number's description in the system.
        static public function SystemInterceptUserModifyDnRequest($phoneNumber=null,$description=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'phoneNumber' => $phoneNumber,
                    'description' => $description
                ]
            ];
        }

        # Modify the system-level intercept user service settings.
        static public function SystemInterceptUserModifyRequest($emergencyAndRepairIntercept=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'emergencyAndRepairIntercept' => $emergencyAndRepairIntercept
                ]
            ];
        }

        # Get the user's intercept user service settings.
        static public function UserInterceptUserGetRequest16sp1($userId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId
                ]
            ];
        }

        # Modify the user's intercept user service settings.
        static public function UserInterceptUserModifyRequest16($userId=null,$isActive=null,$announcementSelection=null,$audioFile=null,$videoFile=null,$playNewPhoneNumber=null,$newPhoneNumber=null,$transferOnZeroToPhoneNumber=null,$transferPhoneNumber=null,$rerouteOutboundCalls=null,$outboundReroutePhoneNumber=null,$allowOutboundLocalCalls=null,$inboundCallMode=null,$alternateBlockingAnnouncement=null,$routeToVoiceMail=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId,
                    'isActive' => $isActive,
                    'announcementSelection' => $announcementSelection,
                    'audioFile' => $audioFile,
                    'videoFile' => $videoFile,
                    'playNewPhoneNumber' => $playNewPhoneNumber,
                    'newPhoneNumber' => $newPhoneNumber,
                    'transferOnZeroToPhoneNumber' => $transferOnZeroToPhoneNumber,
                    'transferPhoneNumber' => $transferPhoneNumber,
                    'rerouteOutboundCalls' => $rerouteOutboundCalls,
                    'outboundReroutePhoneNumber' => $outboundReroutePhoneNumber,
                    'allowOutboundLocalCalls' => $allowOutboundLocalCalls,
                    'inboundCallMode' => $inboundCallMode,
                    'alternateBlockingAnnouncement' => $alternateBlockingAnnouncement,
                    'routeToVoiceMail' => $routeToVoiceMail
                ]
            ];
        }

}