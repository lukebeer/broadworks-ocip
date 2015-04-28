<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\CallCenterReportDataTemplateInfo;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Response to SystemCallCenterEnhancedReportingDataTemplateGetListRequest.
 */
class SystemCallCenterEnhancedReportingDataTemplateGetListResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'SystemCallCenterEnhancedReportingDataTemplateGetListResponse';
    protected $info;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\SystemCallCenterEnhancedReportingDataTemplateGetListResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setInfo(CallCenterReportDataTemplateInfo $info = null)
    {
        $this->info = ($info InstanceOf CallCenterReportDataTemplateInfo)
             ? $info
             : new CallCenterReportDataTemplateInfo($info);
        $this->info->setElementName('info');
        return $this;
    }

    /**
     * 
     * @return CallCenterReportDataTemplateInfo $info
     */
    public function getInfo()
    {
        return $this->info;
    }
}
