<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallCenterReportingServerName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\SystemCallCenterReportingServerGetCallCenterListResponse;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Get a list of Call Centers that are using the specified reporting
 *         server.  The response is either a
 *         SystemCallCenterReportingServerGetCallCenterListResponse or an
 *         ErrorResponse.
 */
class SystemCallCenterReportingServerGetCallCenterListRequest extends ComplexType implements ComplexInterface
{
    public    $responseType        = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\SystemCallCenterReportingServerGetCallCenterListResponse';
    public    $name                = 'SystemCallCenterReportingServerGetCallCenterListRequest';
    protected $reportingServerName = null;

    public function __construct(
         $reportingServerName
    ) {
        $this->setReportingServerName($reportingServerName);
    }

    /**
     * @return SystemCallCenterReportingServerGetCallCenterListResponse
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
        if (!$reportingServerName) return $this;
        $this->reportingServerName = ($reportingServerName InstanceOf CallCenterReportingServerName)
             ? $reportingServerName
             : new CallCenterReportingServerName($reportingServerName);
        $this->reportingServerName->setName('reportingServerName');
        return $this;
    }

    /**
     * 
     * @return CallCenterReportingServerName
     */
    public function getReportingServerName()
    {
        return $this->reportingServerName->getValue();
    }
}
