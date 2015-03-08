<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceCallCenter; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\CallCenterReportDataTemplateInfo;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Response to SystemCallCenterEnhancedReportingDataTemplateGetListRequest.
 */
class SystemCallCenterEnhancedReportingDataTemplateGetListResponse extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;
    protected $info = null;


    /**
     * Call center reporting data template info.
     */
    public function setInfo(CallCenterReportDataTemplateInfo $info = null)
    {
        $this->info =  $info;
    }

    /**
     * Call center reporting data template info.
     */
    public function getInfo()
    {
        return (!$this->info) ?: $this->info->getValue();
    }
}
