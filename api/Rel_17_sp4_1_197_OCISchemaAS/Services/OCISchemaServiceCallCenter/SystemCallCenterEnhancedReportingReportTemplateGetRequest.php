<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallCenterReportTemplateName;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Request to get a system level call center report template.
 *         The response is either a SystemCallCenterEnhancedReportingReportTemplateGetResponse or an ErrorResponse.
 */
class SystemCallCenterEnhancedReportingReportTemplateGetRequest extends ComplexType implements ComplexInterface
{
    public    $responseType = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\SystemCallCenterEnhancedReportingReportTemplateGetResponse';
    public    $name = 'SystemCallCenterEnhancedReportingReportTemplateGetRequest';
    protected $name;

    public function __construct(
         $name = ''
    ) {
        $this->setName($name);
    }

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\SystemCallCenterEnhancedReportingReportTemplateGetResponse $response
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
        $this->name->setName('name');
        return $this;
    }

    /**
     * 
     * @return CallCenterReportTemplateName $name
     */
    public function getName()
    {
        return ($this->name) ? $this->name->getValue() : null;
    }
}
