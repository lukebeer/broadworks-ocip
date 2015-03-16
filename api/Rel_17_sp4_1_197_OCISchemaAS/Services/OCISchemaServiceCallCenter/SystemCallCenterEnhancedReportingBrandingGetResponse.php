<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\CallCenterEnhancedReportingSystemBrandingChoice;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\FileDescription;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to the SystemCallCenterEnhancedReportingBrandingGetRequest.
 */
class SystemCallCenterEnhancedReportingBrandingGetResponse extends ComplexType implements ComplexInterface
{
    public    $name = 'SystemCallCenterEnhancedReportingBrandingGetResponse';
    protected $brandingChoice;
    protected $customBrandingFileDescription;

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\SystemCallCenterEnhancedReportingBrandingGetResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setBrandingChoice($brandingChoice = null)
    {
        $this->brandingChoice = ($brandingChoice InstanceOf CallCenterEnhancedReportingSystemBrandingChoice)
             ? $brandingChoice
             : new CallCenterEnhancedReportingSystemBrandingChoice($brandingChoice);
        $this->brandingChoice->setName('brandingChoice');
        return $this;
    }

    /**
     * 
     * @return CallCenterEnhancedReportingSystemBrandingChoice $brandingChoice
     */
    public function getBrandingChoice()
    {
        return ($this->brandingChoice) ? $this->brandingChoice->getValue() : null;
    }

    /**
     * 
     */
    public function setCustomBrandingFileDescription($customBrandingFileDescription = null)
    {
        $this->customBrandingFileDescription = ($customBrandingFileDescription InstanceOf FileDescription)
             ? $customBrandingFileDescription
             : new FileDescription($customBrandingFileDescription);
        $this->customBrandingFileDescription->setName('customBrandingFileDescription');
        return $this;
    }

    /**
     * 
     * @return FileDescription $customBrandingFileDescription
     */
    public function getCustomBrandingFileDescription()
    {
        return ($this->customBrandingFileDescription) ? $this->customBrandingFileDescription->getValue() : null;
    }
}
