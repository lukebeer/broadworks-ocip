<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter; 

use Broadworks_OCIP\core\Builder\Types\TableType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to the EnterpriseCallCenterCallDispositionCodeGetUsageListRequest.
 *         The Type column contains either "Call Center" or "Route Point".
 *         Contains a table with column headings: "Group Id", "Id", "Name" and "Type".
 */
class EnterpriseCallCenterCallDispositionCodeGetUsageListResponse extends ComplexType implements ComplexInterface
{
    public    $name = 'EnterpriseCallCenterCallDispositionCodeGetUsageListResponse';
    protected $callCenterTable;

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\EnterpriseCallCenterCallDispositionCodeGetUsageListResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setCallCenterTable(TableType $callCenterTable = null)
    {
        $this->callCenterTable = $callCenterTable;
        $this->callCenterTable->setName('callCenterTable');
        return $this;
    }

    /**
     * 
     * @return TableType
     */
    public function getCallCenterTable()
    {
        return $this->callCenterTable;
    }
}
