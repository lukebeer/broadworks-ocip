<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallCenterReportTemplateKey;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Request to get the input parameter info for a call center report template.
 *         The response is either a UserCallCenterEnhancedReportingReportTemplateParamInfoGetResponse or an ErrorResponse.
 */
class UserCallCenterEnhancedReportingReportTemplateParamInfoGetRequest extends ComplexType implements ComplexInterface
{
    public    $responseType = 'BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\UserCallCenterEnhancedReportingReportTemplateParamInfoGetResponse';
    public    $elementName = 'UserCallCenterEnhancedReportingReportTemplateParamInfoGetRequest';
    protected $reportTemplate;

    public function __construct(
         $reportTemplate = ''
    ) {
        $this->setReportTemplate($reportTemplate);
    }

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\UserCallCenterEnhancedReportingReportTemplateParamInfoGetResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setReportTemplate(CallCenterReportTemplateKey $reportTemplate = null)
    {
        $this->reportTemplate = ($reportTemplate InstanceOf CallCenterReportTemplateKey)
             ? $reportTemplate
             : new CallCenterReportTemplateKey($reportTemplate);
        $this->reportTemplate->setElementName('reportTemplate');
        return $this;
    }

    /**
     * 
     * @return CallCenterReportTemplateKey $reportTemplate
     */
    public function getReportTemplate()
    {
        return $this->reportTemplate;
    }
}
