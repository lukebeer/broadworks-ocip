<?php
class OCISchemaServiceBasicCallLogs {
        # Request user's call logs.
        static public function UserBasicCallLogsGetListRequest14sp4($userId=null,$callLogType=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId,
                    'callLogType' => $callLogType
                ]
            ];
        }

}