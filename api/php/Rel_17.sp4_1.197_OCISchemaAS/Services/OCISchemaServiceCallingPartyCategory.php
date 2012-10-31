<?php
class OCISchemaServiceCallingPartyCategory {
        # Add a Calling Party Category to system.
        static public function SystemCallingPartyCategoryAddRequest($category=null,$cpcValue=null,$isupOliValue=null,$gtdOliValue=null,$userCategory=null,$payPhone=null,$operator=null,$default=null,$collectCall=null,$webDisplayKey=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'category' => $category,
                    'cpcValue' => $cpcValue,
                    'isupOliValue' => $isupOliValue,
                    'gtdOliValue' => $gtdOliValue,
                    'userCategory' => $userCategory,
                    'payPhone' => $payPhone,
                    'operator' => $operator,
                    'default' => $default,
                    'collectCall' => $collectCall,
                    'webDisplayKey' => $webDisplayKey
                ]
            ];
        }

        # Delete a Calling Party Category from system. The category cannot be deleted if it is the default or is in use by any users.
        static public function SystemCallingPartyCategoryDeleteRequest($category=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'category' => $category
                ]
            ];
        }

        # Get the list of all Calling Party Category in system.
        static public function SystemCallingPartyCategoryGetListRequest() {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => null
            ];
        }

        # Get an existing Calling Party Category in system.
        static public function SystemCallingPartyCategoryGetRequest($category=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'category' => $category
                ]
            ];
        }

        # Modify a Calling Party Category in system.
        static public function SystemCallingPartyCategoryModifyRequest($category=null,$cpcValue=null,$isupOliValue=null,$gtdOliValue=null,$userCategory=null,$payPhone=null,$operator=null,$becomeDefault=null,$collectCall=null,$webDisplayKey=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'category' => $category,
                    'cpcValue' => $cpcValue,
                    'isupOliValue' => $isupOliValue,
                    'gtdOliValue' => $gtdOliValue,
                    'userCategory' => $userCategory,
                    'payPhone' => $payPhone,
                    'operator' => $operator,
                    'becomeDefault' => $becomeDefault,
                    'collectCall' => $collectCall,
                    'webDisplayKey' => $webDisplayKey
                ]
            ];
        }

        # Request the user level data associated with Calling Party Category.
        static public function UserCallingPartyCategoryGetRequest16($userId=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId
                ]
            ];
        }

        # Modify the user level data associated with Calling Party Category.
        static public function UserCallingPartyCategoryModifyRequest16($userId=null,$category=null) {
            return [
                OCIDataTypes::OCI_NAME   => __FUNCTION__,
                OCIDataTypes::OCI_PARAMS => [
                    'userId' => $userId,
                    'category' => $category
                ]
            ];
        }

}