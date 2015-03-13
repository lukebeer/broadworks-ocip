<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated17; 

use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to UserEnhancedCallLogsGetListRequest16.
 *         Total numbers of rows is:
 *         - the total number of retrievable logs of the call log type that was specified in the UserEnhancedCallLogsGetListRequest16, 
 *           if a call log type was specified in the request.
 *         - the total number of retrievable logs, if no call log type was specified in the request.
 */
class UserEnhancedCallLogsGetListResponse16 extends ComplexType implements ComplexInterface
{
    public    $name              = 'UserEnhancedCallLogsGetListResponse16';
    protected $totalNumberOfRows = null;
    protected $callLog           = null;

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated17\UserEnhancedCallLogsGetListResponse16 $response
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
     * @return int $totalNumberOfRows
     */
    public function getTotalNumberOfRows()
    {
        return $this->totalNumberOfRows->getValue();
    }

    /**
     * 
     */
    public function setCallLog(MixedCallLogsEntry $callLog = null)
    {
        if (!$callLog) return $this;
        $this->callLog = $callLog;
        $this->callLog->setName('callLog');
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
