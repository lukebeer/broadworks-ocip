<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\CallCenterEnhancedReportingBrandingChoice;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\FileDescription;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Response to the GroupCallCenterEnhancedReportingBrandingGetRequest.
 */
class GroupCallCenterEnhancedReportingBrandingGetResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'GroupCallCenterEnhancedReportingBrandingGetResponse';
    protected $brandingChoice;
    protected $brandingFileDescription;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\GroupCallCenterEnhancedReportingBrandingGetResponse $response
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
        $this->brandingChoice = ($brandingChoice InstanceOf CallCenterEnhancedReportingBrandingChoice)
             ? $brandingChoice
             : new CallCenterEnhancedReportingBrandingChoice($brandingChoice);
        $this->brandingChoice->setElementName('brandingChoice');
        return $this;
    }

    /**
     * 
     * @return CallCenterEnhancedReportingBrandingChoice $brandingChoice
     */
    public function getBrandingChoice()
    {
        return ($this->brandingChoice)
            ? $this->brandingChoice->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setBrandingFileDescription($brandingFileDescription = null)
    {
        $this->brandingFileDescription = ($brandingFileDescription InstanceOf FileDescription)
             ? $brandingFileDescription
             : new FileDescription($brandingFileDescription);
        $this->brandingFileDescription->setElementName('brandingFileDescription');
        return $this;
    }

    /**
     * 
     * @return FileDescription $brandingFileDescription
     */
    public function getBrandingFileDescription()
    {
        return ($this->brandingFileDescription)
            ? $this->brandingFileDescription->getElementValue()
            : null;
    }
}
