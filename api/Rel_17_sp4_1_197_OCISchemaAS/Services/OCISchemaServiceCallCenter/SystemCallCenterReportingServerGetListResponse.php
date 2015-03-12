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
 * Response to SystemCallCenterReportingServerGetListRequest.  The table columns are:
 *         "Name", "URL", "Net Address", and "Description".
 */
class SystemCallCenterReportingServerGetListResponse extends ComplexType implements ComplexInterface
{
    public    $name                 = 'SystemCallCenterReportingServerGetListResponse';
    protected $reportingServerTable = null;

    /**
     * @return SystemCallCenterReportingServerGetListResponse
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
        if (!$reportingServerTable) return $this;
        $this->reportingServerTable = $reportingServerTable;
        $this->reportingServerTable->setName('reportingServerTable');
        return $this;
    }

    /**
     * 
     * @return TableType
     */
    public function getReportingServerTable()
    {
        return $this->reportingServerTable->getValue();
    }
}
