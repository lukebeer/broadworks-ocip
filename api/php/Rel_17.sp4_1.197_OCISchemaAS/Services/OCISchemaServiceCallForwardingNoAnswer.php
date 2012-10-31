<?php
class OCISchemaServiceCallForwardingNoAnswer {
        # Request the user level data associated with Call Forwarding No Answer.
        static public function UserCallForwardingNoAnswerGetRequest13mp16($userId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId
                ]
            ];
        }

        # Modify the user level data associated with Call Forwarding No Answer.
        static public function UserCallForwardingNoAnswerModifyRequest($userId=null,$isActive=null,$forwardToPhoneNumber=null,$numberOfRings=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId,
                    'isActive' => $isActive,
                    'forwardToPhoneNumber' => $forwardToPhoneNumber,
                    'numberOfRings' => $numberOfRings
                ]
            ];
        }

}