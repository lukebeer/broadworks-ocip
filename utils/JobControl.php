<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 *
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

require_once str_replace('utils', 'common.php', realpath(dirname(__FILE__)));
require_once(OCI_PATH . "/core/OCIClient.php");
ini_set("max_execution_time", 0);

class OCIPJobControl extends OCIClient {

    private $jobs          = [];
    private $current       = 0;
    private $success       = [];
    private $success_count = 0;
    private $failed        = [];
    private $failed_count  = 0;

    public function __construct($user=null, $pass=null, $host='http://xsp.host/webservice/services/ProvisioningService', $session=null) {
        parent::__construct($host, false);
        if ($session) {
            $this->setSession($session);
            $this->ociBuilder = CoreFactory::getOCIBuilder($this->getSessionId());
            $this->send(OCISchemaLogin::VerifySessionIsValidRequest());
            if (!$this->getResponse()) {
                die($this->errorControl->getLastError());
            }
        } else {
            if (!$this->login($user, $pass)) {
                die($this->errorControl->getLastError());
            }
        }
    }

    public function createConfigCSV($request=['schema' => null, 'command' => null]) {
        $output = $request['schema'].'::'.$request['command'][OCIDataTypes::OCI_NAME];
        foreach ($request['command'][OCIDataTypes::OCI_PARAMS] as $k => $v) {
            $output .= (empty($v)) ? ',' : ",$v";
        }
        return $output;
    }

    private function getRequired($schema) {
        $method = new ReflectionMethod('Factory', "get$schema");
        $method->invoke(null);
    }

    public function getJobByString($cmd) {
        $cmd = str_replace('"', '', $cmd);
        $params = array_map(function($elt) { return $elt === "" ? null : $elt; }, explode(",", $cmd));
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
        foreach (file(realpath($file), FILE_IGNORE_NEW_LINES) as $line) {
            if (preg_match('/^OCISchema/', $line)) {
                $this->addJob($this->getJobByString($line));
            }
        }
        return $this->getTotal();
    }

    public function getTotal() {
        return count($this->jobs);
    }

    public function getCurrent() {
        return $this->current;
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
        return ['completed' => $this->getSuccess(), 'failed' => $this->getFailed()];
    }

    public function getNext() {
        if (count($this->jobs) == $this->current) {
            return null;
        }
        $job = $this->jobs[$this->current];
        $this->current++;
        return $job;
    }

    public function execute($job) {
        $this->send($job);
        return $this->getResponse();
    }

    public function run() {
        foreach ($this->jobs as $job) {
            echo ".";
            $this->send($job);
            if ($response = $this->getResponse()) {
                $this->success["{$this->success_count}: {$job['Name']}"] = ($response == true) ? $job : $response;
                $this->success_count++;
            } else {
                $detail = print_r($job, true);
                $this->failed["{$this->failed_count}: {$job['Name']}"] = (string) $this->errorControl->getLastError() . "\n$detail";
                $this->failed_count++;
            }
        }
        echo "done\n\n";
    }
}
