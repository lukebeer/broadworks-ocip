<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallCenterReportTemplateName;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Request to get all the call center reporting scheduled report in the system that uses a 
 *         given system level report template. 
 *         The response is either a SystemCallCenterEnhancedReportingScheduledReportGetReportTemplateUsageListResponse
 *         or an ErrorResponse.
 */
class SystemCallCenterEnhancedReportingScheduledReportGetReportTemplateUsageListRequest extends ComplexType implements ComplexInterface
{
    public    $responseType = 'BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\SystemCallCenterEnhancedReportingScheduledReportGetReportTemplateUsageListResponse';
    public    $elementName = 'SystemCallCenterEnhancedReportingScheduledReportGetReportTemplateUsageListRequest';
    protected $name;

    public function __construct(
         $name = ''
    ) {
        $this->setName($name);
    }

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\SystemCallCenterEnhancedReportingScheduledReportGetReportTemplateUsageListResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setName($name = null)
    {
        $this->name = ($name InstanceOf CallCenterReportTemplateName)
             ? $name
             : new CallCenterReportTemplateName($name);
        $this->name->setElementName('name');
        return $this;
    }

    /**
     * 
     * @return CallCenterReportTemplateName $name
     */
    public function getName()
    {
        return ($this->name)
            ? $this->name->getElementValue()
            : null;
    }
}
