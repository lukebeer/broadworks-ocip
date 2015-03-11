<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\CallCenterReportDataTemplateInfo;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to SystemCallCenterEnhancedReportingDataTemplateGetListRequest.
 */
class SystemCallCenterEnhancedReportingDataTemplateGetListResponse extends ComplexType implements ComplexInterface
{
    public    $name = 'SystemCallCenterEnhancedReportingDataTemplateGetListResponse';
    protected $info = null;

    /**
     * @return SystemCallCenterEnhancedReportingDataTemplateGetListResponse
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
        if (!$info) return $this;
        $this->info = $info;
        $this->info->setName('info');
        return $this;
    }

    /**
     * 
     * @return CallCenterReportDataTemplateInfo
     */
    public function getInfo()
    {
        return $this->info;
    }
}
