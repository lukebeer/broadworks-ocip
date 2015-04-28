<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceEnhancedCallLogs; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceEnhancedCallLogs\ExtendedMixedCallLogsEntry;
use BroadworksOCIP\Builder\Types\PrimitiveType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Response to EnterpriseEnhancedCallLogsGetListRequest.
 *         Total numbers of rows is:
 *         - the total number of retrievable logs of the call log type that was specified in the EnterpriseEnhancedCallLogsGetListRequest, 
 *           if a call log type was specified in the request.
 *         - the total number of retrievable logs, if no call log type was specified in the request.
 *         A list of ExtendedMixedCallLogsEntry will be returned if the call logs are stored on DBS. Otherwise, an error response will be returned.
 *         The result is sorted by date/time of the call.
 */
class EnterpriseEnhancedCallLogsGetListResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'EnterpriseEnhancedCallLogsGetListResponse';
    protected $totalNumberOfRows;
    protected $extendedCallLog;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceEnhancedCallLogs\EnterpriseEnhancedCallLogsGetListResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setTotalNumberOfRows($totalNumberOfRows = null)
    {
        $this->totalNumberOfRows = new PrimitiveType($totalNumberOfRows);
        $this->totalNumberOfRows->setElementName('totalNumberOfRows');
        return $this;
    }

    /**
     * 
     * @return int $totalNumberOfRows
     */
    public function getTotalNumberOfRows()
    {
        return ($this->totalNumberOfRows)
            ? $this->totalNumberOfRows->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setExtendedCallLog(ExtendedMixedCallLogsEntry $extendedCallLog = null)
    {
        $this->extendedCallLog = ($extendedCallLog InstanceOf ExtendedMixedCallLogsEntry)
             ? $extendedCallLog
             : new ExtendedMixedCallLogsEntry($extendedCallLog);
        $this->extendedCallLog->setElementName('extendedCallLog');
        return $this;
    }

    /**
     * 
     * @return ExtendedMixedCallLogsEntry $extendedCallLog
     */
    public function getExtendedCallLog()
    {
        return $this->extendedCallLog;
    }
}
