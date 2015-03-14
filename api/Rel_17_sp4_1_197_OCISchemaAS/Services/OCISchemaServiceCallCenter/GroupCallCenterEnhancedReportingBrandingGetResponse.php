<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\CallCenterEnhancedReportingBrandingChoice;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\FileDescription;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to the GroupCallCenterEnhancedReportingBrandingGetRequest.
 */
class GroupCallCenterEnhancedReportingBrandingGetResponse extends ComplexType implements ComplexInterface
{
    public    $name                    = 'GroupCallCenterEnhancedReportingBrandingGetResponse';
    protected $brandingChoice          = null;
    protected $brandingFileDescription = null;

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\GroupCallCenterEnhancedReportingBrandingGetResponse $response
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
        if (!$brandingChoice) return $this;
        $this->brandingChoice = ($brandingChoice InstanceOf CallCenterEnhancedReportingBrandingChoice)
             ? $brandingChoice
             : new CallCenterEnhancedReportingBrandingChoice($brandingChoice);
        $this->brandingChoice->setName('brandingChoice');
        return $this;
    }

    /**
     * 
     * @return CallCenterEnhancedReportingBrandingChoice $brandingChoice
     */
    public function getBrandingChoice()
    {
        return $this->brandingChoice->getValue();
    }

    /**
     * 
     */
    public function setBrandingFileDescription($brandingFileDescription = null)
    {
        if (!$brandingFileDescription) return $this;
        $this->brandingFileDescription = ($brandingFileDescription InstanceOf FileDescription)
             ? $brandingFileDescription
             : new FileDescription($brandingFileDescription);
        $this->brandingFileDescription->setName('brandingFileDescription');
        return $this;
    }

    /**
     * 
     * @return FileDescription $brandingFileDescription
     */
    public function getBrandingFileDescription()
    {
        return $this->brandingFileDescription->getValue();
    }
}
