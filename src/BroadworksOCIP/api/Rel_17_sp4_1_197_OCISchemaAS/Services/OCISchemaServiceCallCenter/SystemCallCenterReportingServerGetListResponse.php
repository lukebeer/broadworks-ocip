<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter; 

use BroadworksOCIP\Builder\Types\TableType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Response to SystemCallCenterReportingServerGetListRequest.  The table columns are:
 *         "Name", "URL", "Net Address", and "Description".
 */
class SystemCallCenterReportingServerGetListResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'SystemCallCenterReportingServerGetListResponse';
    protected $reportingServerTable;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\SystemCallCenterReportingServerGetListResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setReportingServerTable(TableType $reportingServerTable = null)
    {
        $this->reportingServerTable = $reportingServerTable;
        $this->reportingServerTable->setElementName('reportingServerTable');
        return $this;
    }

    /**
     * 
     * @return TableType
     */
    public function getReportingServerTable()
    {
        return $this->reportingServerTable;
    }
}
