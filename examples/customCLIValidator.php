<?php
require_once '../common.php';

class ValidateCustomCLI {

    public $numbers = false;
    public $structure = false;

    public function __construct($user=null, $pass=null, $host='http://example.com/webservice/services/ProvisioningService') {
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

    // Get scope of Group Configurable CLID and check setting, return Boolean.
    public function getCLIDConfig($serviceProvider, $group) {
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

    // Return array of numbers in Service Provider, expanded, NOT ranges.
    public function getNumbersInServiceProvider($serviceProvider) {
        $numbers = null;
        $msg = OCISchemaServiceProvider::ServiceProviderDnGetSummaryListRequest($serviceProvider);
        $this->client->send($msg);
        if ($response = $this->client->getResponse()) {
            foreach($response->dnSummaryTable['row'] as $row) {
                if (preg_match('/ - /', $row['col'][0])) {
                    $item = str_replace(['-', '+'], null, $row['col'][0]);
                    preg_match('/(\d+)\s+(\d+)/', $item, $range);
                    while ($range[1] <= $range[2]) {
                        $this->numbers[] = $range[1];
                        $range[1]++;
                    }
                }
            }
            return $this->numbers;
        }
        return false;
    }

    public function run() {
        foreach ($this->getServiceProviders() as $serviceProvider) {
            $this->structure[$serviceProvider] = $this->getGroupsInServiceProvider($serviceProvider);
        }
        foreach ($this->structure as $sp => $grps) {
            foreach ($grps as $grp) {
                if ($this->getCLIDConfig($sp, $grp)) {
                    echo "$sp - $grp uses configurable CLID\n";
                }
            }
        }
        return $this->structure;
    }
}

$validator = new ValidateCustomCLI('username', 'password');
$validator->run();
