<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceBroadWorksMobility; 

use Broadworks_OCIP\core\Builder\Types\TableType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to SystemBroadWorksMobilityServiceAccessCodeGetListRequest.
 *         Contains a table with column headings: "Country Code", "Service Access Code", "Description"
 */
class SystemBroadWorksMobilityServiceAccessCodeGetListResponse extends ComplexType implements ComplexInterface
{
    public    $name                   = 'SystemBroadWorksMobilityServiceAccessCodeGetListResponse';
    protected $serviceAccessCodeTable = null;

    /**
     * @return SystemBroadWorksMobilityServiceAccessCodeGetListResponse
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setServiceAccessCodeTable(TableType $serviceAccessCodeTable = null)
    {
        if (!$serviceAccessCodeTable) return $this;
        $this->serviceAccessCodeTable = $serviceAccessCodeTable;
        $this->serviceAccessCodeTable->setName('serviceAccessCodeTable');
        return $this;
    }

    /**
     * 
     * @return TableType
     */
    public function getServiceAccessCodeTable()
    {
        return $this->serviceAccessCodeTable;
    }
}
