<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated17; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\MixedCallLogsEntry;
use BroadworksOCIP\Builder\Types\PrimitiveType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Response to UserEnhancedCallLogsGetListRequest16.
 *         Total numbers of rows is:
 *         - the total number of retrievable logs of the call log type that was specified in the UserEnhancedCallLogsGetListRequest16, 
 *           if a call log type was specified in the request.
 *         - the total number of retrievable logs, if no call log type was specified in the request.
 */
class UserEnhancedCallLogsGetListResponse16 extends ComplexType implements ComplexInterface
{
    public    $elementName = 'UserEnhancedCallLogsGetListResponse16';
    protected $totalNumberOfRows;
    protected $callLog;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated17\UserEnhancedCallLogsGetListResponse16 $response
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
    public function setCallLog(MixedCallLogsEntry $callLog = null)
    {
        $this->callLog = ($callLog InstanceOf MixedCallLogsEntry)
             ? $callLog
             : new MixedCallLogsEntry($callLog);
        $this->callLog->setElementName('callLog');
        return $this;
    }

    /**
     * 
     * @return MixedCallLogsEntry $callLog
     */
    public function getCallLog()
    {
        return $this->callLog;
    }
}
