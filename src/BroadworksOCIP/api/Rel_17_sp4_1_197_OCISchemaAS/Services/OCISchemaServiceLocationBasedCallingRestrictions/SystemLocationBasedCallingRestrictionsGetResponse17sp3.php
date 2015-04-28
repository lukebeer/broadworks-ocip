<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceLocationBasedCallingRestrictions; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceLocationBasedCallingRestrictions\PhysicalLocationIndicator;
use BroadworksOCIP\Builder\Types\PrimitiveType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Response to SystemLocationBasedCallingRestrictionsGetRequest17sp3.
 */
class SystemLocationBasedCallingRestrictionsGetResponse17sp3 extends ComplexType implements ComplexInterface
{
    public    $elementName = 'SystemLocationBasedCallingRestrictionsGetResponse17sp3';
    protected $physicalLocationIndicator;
    protected $enforceMscValidation;
    protected $enableOfficeZoneAnnouncement;
    protected $enhanceOfficeZone;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceLocationBasedCallingRestrictions\SystemLocationBasedCallingRestrictionsGetResponse17sp3 $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setPhysicalLocationIndicator($physicalLocationIndicator = null)
    {
        $this->physicalLocationIndicator = ($physicalLocationIndicator InstanceOf PhysicalLocationIndicator)
             ? $physicalLocationIndicator
             : new PhysicalLocationIndicator($physicalLocationIndicator);
        $this->physicalLocationIndicator->setElementName('physicalLocationIndicator');
        return $this;
    }

    /**
     * 
     * @return PhysicalLocationIndicator $physicalLocationIndicator
     */
    public function getPhysicalLocationIndicator()
    {
        return ($this->physicalLocationIndicator)
            ? $this->physicalLocationIndicator->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setEnforceMscValidation($enforceMscValidation = null)
    {
        $this->enforceMscValidation = new PrimitiveType($enforceMscValidation);
        $this->enforceMscValidation->setElementName('enforceMscValidation');
        return $this;
    }

    /**
     * 
     * @return boolean $enforceMscValidation
     */
    public function getEnforceMscValidation()
    {
        return ($this->enforceMscValidation)
            ? $this->enforceMscValidation->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setEnableOfficeZoneAnnouncement($enableOfficeZoneAnnouncement = null)
    {
        $this->enableOfficeZoneAnnouncement = new PrimitiveType($enableOfficeZoneAnnouncement);
        $this->enableOfficeZoneAnnouncement->setElementName('enableOfficeZoneAnnouncement');
        return $this;
    }

    /**
     * 
     * @return boolean $enableOfficeZoneAnnouncement
     */
    public function getEnableOfficeZoneAnnouncement()
    {
        return ($this->enableOfficeZoneAnnouncement)
            ? $this->enableOfficeZoneAnnouncement->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setEnhanceOfficeZone($enhanceOfficeZone = null)
    {
        $this->enhanceOfficeZone = new PrimitiveType($enhanceOfficeZone);
        $this->enhanceOfficeZone->setElementName('enhanceOfficeZone');
        return $this;
    }

    /**
     * 
     * @return boolean $enhanceOfficeZone
     */
    public function getEnhanceOfficeZone()
    {
        return ($this->enhanceOfficeZone)
            ? $this->enhanceOfficeZone->getElementValue()
            : null;
    }
}
