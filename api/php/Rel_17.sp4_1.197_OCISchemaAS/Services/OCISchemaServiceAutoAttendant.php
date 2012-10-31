<?php
class OCISchemaServiceAutoAttendant {
        # Add a Auto Attendant instance to a group.
        static public function GroupAutoAttendantAddInstanceRequest17sp1($serviceProviderId=null,$groupId=null,$serviceUserId=null,$serviceInstanceProfile=null,$enableVideo=null,$businessHours=null,$holidaySchedule=null,$extensionDialingScope=null,$nameDialingScope=null,$nameDialingEntries=null,$businessHoursMenu=null,$afterHoursMenu=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId,
                    'serviceUserId' => $serviceUserId,
                    'serviceInstanceProfile' => $serviceInstanceProfile,
                    'enableVideo' => $enableVideo,
                    'businessHours' => $businessHours,
                    'holidaySchedule' => $holidaySchedule,
                    'extensionDialingScope' => $extensionDialingScope,
                    'nameDialingScope' => $nameDialingScope,
                    'nameDialingEntries' => $nameDialingEntries,
                    'businessHoursMenu' => $businessHoursMenu,
                    'afterHoursMenu' => $afterHoursMenu
                ]
            ];
        }

        # Delete a Auto Attendant instance from a group.
        static public function GroupAutoAttendantDeleteInstanceRequest($serviceUserId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceUserId' => $serviceUserId
                ]
            ];
        }

        # Get a list of Auto Attendant instances within a group.
        static public function GroupAutoAttendantGetInstanceListRequest($serviceProviderId=null,$groupId=null,$groupDepartmentName=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceProviderId' => $serviceProviderId,
                    'groupId' => $groupId,
                    'groupDepartmentName' => $groupDepartmentName
                ]
            ];
        }

        # Request to get all the information of a Auto Attendant instance.
        static public function GroupAutoAttendantGetInstanceRequest17sp1($serviceUserId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceUserId' => $serviceUserId
                ]
            ];
        }

        # Request to set the active status of Auto Attendant instances.
        static public function GroupAutoAttendantModifyActiveInstanceListRequest($serviceActivation=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceActivation' => $serviceActivation
                ]
            ];
        }

        # Request to modify an Auto Attendant instance.
        static public function GroupAutoAttendantModifyInstanceRequest17sp1($serviceUserId=null,$serviceInstanceProfile=null,$enableVideo=null,$businessHours=null,$holidaySchedule=null,$extensionDialingScope=null,$nameDialingScope=null,$nameDialingEntries=null,$businessHoursMenu=null,$afterHoursMenu=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'serviceUserId' => $serviceUserId,
                    'serviceInstanceProfile' => $serviceInstanceProfile,
                    'enableVideo' => $enableVideo,
                    'businessHours' => $businessHours,
                    'holidaySchedule' => $holidaySchedule,
                    'extensionDialingScope' => $extensionDialingScope,
                    'nameDialingScope' => $nameDialingScope,
                    'nameDialingEntries' => $nameDialingEntries,
                    'businessHoursMenu' => $businessHoursMenu,
                    'afterHoursMenu' => $afterHoursMenu
                ]
            ];
        }

}