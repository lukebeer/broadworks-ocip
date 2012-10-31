<?php
class OCISchemaServiceAlternateNumbers {
        # Request the user level data associated with Alternate Numbers.
        static public function UserAlternateNumbersGetRequest17($userId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId
                ]
            ];
        }

        # Modify the user level data associated with Alternate Numbers.
        static public function UserAlternateNumbersModifyRequest($userId=null,$distinctiveRing=null,$alternateEntry01=null,$alternateEntry02=null,$alternateEntry03=null,$alternateEntry04=null,$alternateEntry05=null,$alternateEntry06=null,$alternateEntry07=null,$alternateEntry08=null,$alternateEntry09=null,$alternateEntry10=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId,
                    'distinctiveRing' => $distinctiveRing,
                    'alternateEntry01' => $alternateEntry01,
                    'alternateEntry02' => $alternateEntry02,
                    'alternateEntry03' => $alternateEntry03,
                    'alternateEntry04' => $alternateEntry04,
                    'alternateEntry05' => $alternateEntry05,
                    'alternateEntry06' => $alternateEntry06,
                    'alternateEntry07' => $alternateEntry07,
                    'alternateEntry08' => $alternateEntry08,
                    'alternateEntry09' => $alternateEntry09,
                    'alternateEntry10' => $alternateEntry10
                ]
            ];
        }

}