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
 * Response to SystemPerformanceMeasurementReportingGetFileServerListRequest. The table columns are:
 *         "FTP Host Net Address", "FTP User Id", "Passive FTP".
 */
class SystemPerformanceMeasurementReportingGetFileServerListResponse extends ComplexType implements ComplexInterface
{
    public    $name            = 'SystemPerformanceMeasurementReportingGetFileServerListResponse';
    protected $fileServerTable = null;

    /**
     * @return SystemPerformanceMeasurementReportingGetFileServerListResponse
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setFileServerTable(TableType $fileServerTable = null)
    {
        if (!$fileServerTable) return $this;
        $this->fileServerTable = $fileServerTable;
        $this->fileServerTable->setName('fileServerTable');
        return $this;
    }

    /**
     * 
     * @return TableType
     */
    public function getFileServerTable()
    {
        return $this->fileServerTable->getValue();
    }
}
