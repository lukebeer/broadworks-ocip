<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use BroadworksOCIP\Builder\Types\TableType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Response to SystemApplicationServerSetGetUsageRequest.
 *         The response contains a 3 column table with column headings "Organization Id" (the enterprise or service provider name), 
 *         "Organization Type" (either 'enterprise' or 'service provider'), "Group Id".
 */
class SystemApplicationServerSetGetUsageResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'SystemApplicationServerSetGetUsageResponse';
    protected $applicationServerSetSubscriberTable;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SystemApplicationServerSetGetUsageResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setApplicationServerSetSubscriberTable(TableType $applicationServerSetSubscriberTable = null)
    {
        $this->applicationServerSetSubscriberTable = $applicationServerSetSubscriberTable;
        $this->applicationServerSetSubscriberTable->setElementName('applicationServerSetSubscriberTable');
        return $this;
    }

    /**
     * 
     * @return TableType
     */
    public function getApplicationServerSetSubscriberTable()
    {
        return $this->applicationServerSetSubscriberTable;
    }
}
