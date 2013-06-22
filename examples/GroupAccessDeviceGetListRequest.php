<?php
require_once '../common.php';
Factory::getOCISchemaSystem();
$client = CoreFactory::getOCIClient('http://example.com/webservice/services/ProvisioningService');
$client->setTimeout(20);
$filename = 'SystemAccessDeviceGetAllRequest_'.date('m-d-Y_H:m:s').'.csv';
$count = 0;
if ($client->login('username', 'password')) {
    $client->send(OCISchemaSystem::SystemAccessDeviceGetAllRequest());
    if ($response = $client->getResponse()) {
        $fh = fopen($filename, 'w');
        fputcsv($fh, $response->accessDeviceTable['colHeading']);
        foreach ($response->accessDeviceTable['row'] as $accessDevice) {
            # Shorthand Ternary operator for loop to avoid "PHP Notice:  Array to string conversion"
            foreach ($accessDevice['col'] as $k => $v) $accessDevice['col'][$k] = (is_array($v)) ? '' : $v;
            fputcsv($fh, $accessDevice['col']);
            $count++;
        }
        fclose($fh);
        echo "Wrote $count items into $filename\n";
    }
}
if ($errorControl->hasErrors()) print_r($errorControl->getErrors());