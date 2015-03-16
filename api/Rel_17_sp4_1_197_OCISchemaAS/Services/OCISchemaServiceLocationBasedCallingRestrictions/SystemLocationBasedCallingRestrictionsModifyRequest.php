<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceLocationBasedCallingRestrictions; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceLocationBasedCallingRestrictions\PhysicalLocationIndicator;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Modifies the system level Location Based Calling Restriction attributes.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemLocationBasedCallingRestrictionsModifyRequest extends ComplexType implements ComplexInterface
{
    public    $elementName = 'SystemLocationBasedCallingRestrictionsModifyRequest';
    protected $physicalLocationIndicator;
    protected $enforceMscValidation;
    protected $enableOfficeZoneAnnouncement;
    protected $enhanceOfficeZone;

    public function __construct(
         $physicalLocationIndicator = null,
         $enforceMscValidation = null,
         $enableOfficeZoneAnnouncement = null,
         $enhanceOfficeZone = null
    ) {
        $this->setPhysicalLocationIndicator($physicalLocationIndicator);
        $this->setEnforceMscValidation($enforceMscValidation);
        $this->setEnableOfficeZoneAnnouncement($enableOfficeZoneAnnouncement);
        $this->setEnhanceOfficeZone($enhanceOfficeZone);
    }

    /**
     * @return mixed $response
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
