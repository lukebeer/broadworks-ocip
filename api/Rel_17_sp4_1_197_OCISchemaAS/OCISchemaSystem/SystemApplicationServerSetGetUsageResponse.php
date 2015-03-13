<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\core\Builder\Types\TableType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to SystemApplicationServerSetGetUsageRequest.
 *         The response contains a 3 column table with column headings "Organization Id" (the enterprise or service provider name), 
 *         "Organization Type" (either 'enterprise' or 'service provider'), "Group Id".
 */
class SystemApplicationServerSetGetUsageResponse extends ComplexType implements ComplexInterface
{
    public    $name                                = 'SystemApplicationServerSetGetUsageResponse';
    protected $applicationServerSetSubscriberTable = null;

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SystemApplicationServerSetGetUsageResponse $response
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
        if (!$applicationServerSetSubscriberTable) return $this;
        $this->applicationServerSetSubscriberTable = $applicationServerSetSubscriberTable;
        $this->applicationServerSetSubscriberTable->setName('applicationServerSetSubscriberTable');
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
