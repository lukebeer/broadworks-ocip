<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceCallCenter; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallCenterReportTemplateName;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Request to get all the call center reporting scheduled report in the system that uses a 
 *         given system level report template. 
 *         The response is either a SystemCallCenterEnhancedReportingScheduledReportGetReportTemplateUsageListResponse
 *         or an ErrorResponse.
 */
class SystemCallCenterEnhancedReportingScheduledReportGetReportTemplateUsageListRequest extends ComplexType implements ComplexInterface
{
    const     RESPONSE_TYPE = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceCallCenter\SystemCallCenterEnhancedReportingScheduledReportGetReportTemplateUsageListResponse';
    public    $name = __CLASS__;
    protected $name = null;

    public function __construct(
         $name
    ) {
        $this->setName($name);
    }

    /**
     * The call center enhanced reporting report template name.
     */
    public function setName($name = null)
    {
        $this->name = ($name InstanceOf CallCenterReportTemplateName)
             ? $name
             : new CallCenterReportTemplateName($name);
    }

    /**
     * The call center enhanced reporting report template name.
     */
    public function getName()
    {
        return (!$this->name) ?: $this->name->getValue();
    }
}
