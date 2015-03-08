<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceCallCenter; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\CallCenterReportWebStatisticsSource;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\CallCenterReportServerChoice;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Request to modify enterprise level call center enhanced reporting settings.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class EnterpriseCallCenterEnhancedReportingModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name               = __CLASS__;
    protected $serviceProviderId  = null;
    protected $reportingServer    = null;
    protected $webStatisticSource = null;

    public function __construct(
         $serviceProviderId,
         $reportingServer = null,
         $webStatisticSource = null
    ) {
        $this->setServiceProviderId($serviceProviderId);
        $this->setReportingServer($reportingServer);
        $this->setWebStatisticSource($webStatisticSource);
    }

    /**
     * Service Provider Id uniquely identifies a service provider.
     *         NOTE: The service provider id has a maximum length of 30 bytes, not 30 characters.
     */
    public function setServiceProviderId($serviceProviderId = null)
    {
        $this->serviceProviderId = ($serviceProviderId InstanceOf ServiceProviderId)
             ? $serviceProviderId
             : new ServiceProviderId($serviceProviderId);
    }

    /**
     * Service Provider Id uniquely identifies a service provider.
     *         NOTE: The service provider id has a maximum length of 30 bytes, not 30 characters.
     */
    public function getServiceProviderId()
    {
        return (!$this->serviceProviderId) ?: $this->serviceProviderId->getValue();
    }

    /**
     * Call center report server choice.
     */
    public function setReportingServer($reportingServer = null)
    {
        $this->reportingServer = ($reportingServer InstanceOf CallCenterReportServerChoice)
             ? $reportingServer
             : new CallCenterReportServerChoice($reportingServer);
    }

    /**
     * Call center report server choice.
     */
    public function getReportingServer()
    {
        return (!$this->reportingServer) ?: $this->reportingServer->getValue();
    }

    /**
     * Call center report web statistics source.
     */
    public function setWebStatisticSource($webStatisticSource = null)
    {
        $this->webStatisticSource = ($webStatisticSource InstanceOf CallCenterReportWebStatisticsSource)
             ? $webStatisticSource
             : new CallCenterReportWebStatisticsSource($webStatisticSource);
    }

    /**
     * Call center report web statistics source.
     */
    public function getWebStatisticSource()
    {
        return (!$this->webStatisticSource) ?: $this->webStatisticSource->getValue();
    }
}