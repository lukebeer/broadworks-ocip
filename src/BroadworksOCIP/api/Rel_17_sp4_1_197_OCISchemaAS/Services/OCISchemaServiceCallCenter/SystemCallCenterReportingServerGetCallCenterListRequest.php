<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallCenterReportingServerName;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Get a list of Call Centers that are using the specified reporting
 *         server.  The response is either a
 *         SystemCallCenterReportingServerGetCallCenterListResponse or an
 *         ErrorResponse.
 */
class SystemCallCenterReportingServerGetCallCenterListRequest extends ComplexType implements ComplexInterface
{
    public    $responseType = 'BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\SystemCallCenterReportingServerGetCallCenterListResponse';
    public    $elementName = 'SystemCallCenterReportingServerGetCallCenterListRequest';
    protected $reportingServerName;

    public function __construct(
         $reportingServerName = ''
    ) {
        $this->setReportingServerName($reportingServerName);
    }

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\SystemCallCenterReportingServerGetCallCenterListResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setReportingServerName($reportingServerName = null)
    {
        $this->reportingServerName = ($reportingServerName InstanceOf CallCenterReportingServerName)
             ? $reportingServerName
             : new CallCenterReportingServerName($reportingServerName);
        $this->reportingServerName->setElementName('reportingServerName');
        return $this;
    }

    /**
     * 
     * @return CallCenterReportingServerName $reportingServerName
     */
    public function getReportingServerName()
    {
        return ($this->reportingServerName)
            ? $this->reportingServerName->getElementValue()
            : null;
    }
}
