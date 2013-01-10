<?php
require_once '../Broadworks_OCI-P/common.php';
ini_set("max_execution_time", 0);

class ValidateCustomCLI {

    public $numbers = [];
    public $structure = false;

    public function __construct($user=null, $pass=null, $host='http://example/webservice/services/ProvisioningService') {
        $this->client = CoreFactory::getOCIClient($host);
        Factory::getOCISchemaServiceProvider();
        Factory::getOCISchemaGroup();
        if (!$this->client->login($user, $pass)) {
            throw new Exception("Unable to login");
        }
    }

    // Returns array of Service Providers in system
    public function getServiceProviders() {
        $msg = OCISchemaServiceProvider::ServiceProviderGetListRequest();
        $this->client->send($msg);
        if ($response = $this->client->getResponse()) {
            foreach ($response->serviceProviderTable['row'] as $row) {
                $this->serviceProviders[] = $row['col'][0];
            }
            return $this->serviceProviders;
        }
        return false;
    }

    // Returns array of Groups in a Service Provider
    public function getGroupsInServiceProvider($serviceProvider) {
        $msg = OCISchemaGroup::GroupGetListInServiceProviderRequest($serviceProvider);
        $this->client->send($msg);
        $groups = null;
        if ($response = $this->client->getResponse()) {
            if (isset($response->groupTable['row'])) {
                foreach ($response->groupTable['row'] as $row) {
                    $groups[] = isset($row['col']) ? $row['col'][0] : $row[0];
                }
            }
            return $groups;
        }
        return false;
    }

    // Returns array of user list in Group.
    public function getUsersInGroup($serviceProvider, $group) {
        $msg = OCISchemaUser::UserGetListInGroupRequest($serviceProvider, $group);
        $this->client->send($msg);
        $users = null;
        if ($response = $this->client->getResponse()) {
            foreach ($response->userTable['row'] as $row) {
                $users[] = isset($row['col']) ? $row['col'][0] : $row[0];
            }
        }
        return $users;
    }

    // Return DN configured on user profile or false
    public function checkUserCallingLineID($user) {
        $msg = OCISchemaUser::UserGetRequest17sp4($user);
        $this->client->send($msg);
        if ($response = $this->client->getResponse()) {
            return (isset($response->callingLineIdPhoneNumber)) ? $response->callingLineIdPhoneNumber : false;
        }
        return false;
    }

    // Get scope of Group Configurable CLID and check setting, return Boolean.
    public function checkCLIDConfig($serviceProvider, $group) {
        $msg = OCISchemaGroup::GroupCallProcessingGetPolicyRequest17sp4($serviceProvider, $group);
        $this->client->send($msg);
        if ($response = $this->client->getResponse()) {
            if ($response->useGroupCLIDSetting) {
                return ($response->clidPolicy == "Use Configurable CLID") ? true : false;
            } else {
                return ($response->emergencyClidPolicy == "Use Configurable CLID") ? true : false;
            }
        }
        return false;
    }

    // Validates if the number exists in the Service Provider
    public function validateNumber($clid, $serviceProvider) {
        $numbers = $this->getNumbersInServiceProvider($serviceProvider);
        if ((substr($clid, 0, 1) == 0) && (substr($clid, 0, 2) != 00)) {
            $clidNoPrefix = substr($clid, 1);
            $len = strlen($clidNoPrefix);
            $found = false;
            foreach ($numbers as $number) {
                if ((substr($number, -$len) == $clidNoPrefix)) {
                    $found = true;
                }
            }
            return $found;
        }
    }

    // Return array of numbers in Service Provider, expanded, NOT ranges.
    public function getNumbersInServiceProvider($serviceProvider) {
        $numbers = null;
        $msg = OCISchemaServiceProvider::ServiceProviderDnGetSummaryListRequest($serviceProvider);
        $this->client->send($msg);
        if ($response = $this->client->getResponse()) {
            foreach($response->dnSummaryTable['row'] as $row) {
                $row = isset($row['col']) ? $row['col'][0] : $row[0];
                if (preg_match('/ - /', $row)) {
                    $item = str_replace(['-', '+'], null, $row);
                    preg_match('/(\d+)\s+(\d+)/', $item, $range);
                    while ($range[1] <= $range[2]) {
                        $this->numbers[] = $range[1];
                        $range[1]++;
                    }
                }
            }
        }
        return $this->numbers;
    }

    public function run() {
        foreach ($this->getServiceProviders() as $serviceProvider) {
            $this->structure[$serviceProvider] = $this->getGroupsInServiceProvider($serviceProvider);
        }
        foreach ($this->structure as $sp => $grps) {
            if (isset($grps)) {
                foreach ($grps as $grp) {
                    if ($this->checkCLIDConfig($sp, $grp)) {
                        echo "$sp - $grp uses configurable CLID, checking users.....\n";
                        foreach ($this->getUsersInGroup($sp, $grp) as $user) {
                            if ($clid = $this->checkUserCallingLineID($user)) {
                                if (!$this->validateNumber($clid, $sp)) {
                                    echo "\tWarning: $user - $clid Does not match any assigned numbers\n";
                                }
                            }
                        }
                    }
                }
            }
        }
        return $this->structure;
    }
}

$validator = new ValidateCustomCLI('username', 'password');
$validator->run();
