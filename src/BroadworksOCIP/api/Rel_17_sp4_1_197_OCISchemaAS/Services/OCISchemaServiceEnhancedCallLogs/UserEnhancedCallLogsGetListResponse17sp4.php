<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceEnhancedCallLogs; 

use BroadworksOCIP\Builder\Types\PrimitiveType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Response to UserEnhancedCallLogsGetListRequest17sp4.
 *         Total numbers of rows is:
 *         - the total number of retrievable logs of the call log type that was specified in the UserEnhancedCallLogsGetListRequest17sp4, 
 *           if a call log type was specified in the request.
 *         - the total number of retrievable logs, if no call log type was specified in the request.
 *         A list of MixedCallLogsEntry will be returned if the call logs are stored on CDS
 *         A list of ExtendedMixedCallLogsEntry will be returned if the call logs are stored on DBS
 *         The logs are sorted by date/time of the call.
 */
class UserEnhancedCallLogsGetListResponse17sp4 extends ComplexType implements ComplexInterface
{
    public    $elementName = 'UserEnhancedCallLogsGetListResponse17sp4';
    protected $totalNumberOfRows;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceEnhancedCallLogs\UserEnhancedCallLogsGetListResponse17sp4 $response
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
}
