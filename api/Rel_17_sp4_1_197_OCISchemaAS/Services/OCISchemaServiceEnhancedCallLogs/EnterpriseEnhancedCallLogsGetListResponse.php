<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceEnhancedCallLogs; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceEnhancedCallLogs\ExtendedMixedCallLogsEntry;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


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
    public    $name              = 'EnterpriseEnhancedCallLogsGetListResponse';
    protected $totalNumberOfRows = null;
    protected $extendedCallLog   = null;

    /**
     * @return EnterpriseEnhancedCallLogsGetListResponse
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
        if (!$totalNumberOfRows) return $this;
        $this->totalNumberOfRows = new PrimitiveType($totalNumberOfRows);
        $this->totalNumberOfRows->setName('totalNumberOfRows');
        return $this;
    }

    /**
     * 
     * @return xs:int
     */
    public function getTotalNumberOfRows()
    {
        return $this->totalNumberOfRows->getValue();
    }

    /**
     * 
     */
    public function setExtendedCallLog(ExtendedMixedCallLogsEntry $extendedCallLog = null)
    {
        if (!$extendedCallLog) return $this;
        $this->extendedCallLog = $extendedCallLog;
        $this->extendedCallLog->setName('extendedCallLog');
        return $this;
    }

    /**
     * 
     * @return ExtendedMixedCallLogsEntry
     */
    public function getExtendedCallLog()
    {
        return $this->extendedCallLog;
    }
}
