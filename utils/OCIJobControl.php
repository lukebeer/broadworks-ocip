<?php
require_once '../common.php';
require_once(OCI_PATH . "/core/OCIClient.php");
ini_set("max_execution_time", 0);

class OCIPJobControl extends OCIClient {

    private $jobs          = [];
    private $success       = [];
    private $success_count = 0;
    private $failed        = [];
    private $failed_count  = 0;

    public function __construct($user=null, $pass=null, $host='http://xsp.host/webservice/services/ProvisioningService') {
        parent::__construct($host, false);
        if (!$this->login($user, $pass)) {
            die($this->errorControl->getLastError());
        }
    }

    private function getRequired($schema) {
        $method = new ReflectionMethod('Factory', "get$schema");
        $method->invoke(null);
    }

    public function getJobByString($cmd) {
        $cmd = str_replace('"', '', $cmd);
        $params = explode(",", $cmd);
        $cmd = array_shift($params);
        $cmd_split = explode("::", $cmd);
	$this->getRequired($cmd_split[0]);
        $method = new ReflectionMethod($cmd_split[0], $cmd_split[1]);
        $job = $method->invokeArgs(null, $params);
        return $job;
    }

    public function addJob($job) {
        $this->jobs[] = $job;
    }

    public function getJobs() {
        $names = [];
        foreach ($this->jobs as $job) {
            $job_names[] = $job['Name'];
            $names[] = $job['Name'];
        }
        return $names;
    }

    public function addJobsCSV($file) {
        foreach (file($file, FILE_IGNORE_NEW_LINES) as $line) {
            if (!preg_match('/^#/', $line)) {
                $this->addJob($this->getJobByString($line));
            }
        }
    }

    public function getSuccess() {
        return $this->success;
    }

    public function getFailed() {
        return $this->failed;
    }

    public function getDetail($cmd) {
        return $this->jobs[$cmd];
    }

    public function getResults() {
        $msg = "Completed: {$this->success_count}\n";
        foreach ($this->getSuccess() as $name => $param) $msg .= "\t$name\n";
        $msg .= "Failed: {$this->failed_count}\n";
        foreach ($this->getFailed() as $name => $param) $msg .= "\t$name --> $param\n";
        return $msg;
    }

    public function run() {
        foreach ($this->jobs as $job) {
            $this->send($job);
            if ($response = $this->getResponse()) {
                $this->success["{$this->success_count}: {$job['Name']}"] = ($response == true) ? $job : $response;
                $this->success_count++;
            } else {
                $this->failed["{$this->failed_count}: {$job['Name']}"] = (string) $this->errorControl->getLastError();
                $this->failed_count++;
            }
        }
    }
}
