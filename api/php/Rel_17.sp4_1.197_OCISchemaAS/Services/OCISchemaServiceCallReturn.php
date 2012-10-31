<?php
class OCISchemaServiceCallReturn {
        # Request the system level data associated with Call Return.
        static public function SystemCallReturnGetRequest() {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => null
            ];
        }

        # Modify the system level data associated with Call Return.
        static public function SystemCallReturnModifyRequest($twoLevelActivation=null,$provideDate=null,$lastUnansweredCallOnly=null,$confirmationKey=null,$allowRestrictedNumber=null,$deleteNumberAfterAnsweredCallReturn=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'twoLevelActivation' => $twoLevelActivation,
                    'provideDate' => $provideDate,
                    'lastUnansweredCallOnly' => $lastUnansweredCallOnly,
                    'confirmationKey' => $confirmationKey,
                    'allowRestrictedNumber' => $allowRestrictedNumber,
                    'deleteNumberAfterAnsweredCallReturn' => $deleteNumberAfterAnsweredCallReturn
                ]
            ];
        }

}