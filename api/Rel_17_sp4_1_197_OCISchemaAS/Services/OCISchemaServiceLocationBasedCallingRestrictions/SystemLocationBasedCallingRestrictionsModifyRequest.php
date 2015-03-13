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
    public    $name                         = 'SystemLocationBasedCallingRestrictionsModifyRequest';
    protected $physicalLocationIndicator    = null;
    protected $enforceMscValidation         = null;
    protected $enableOfficeZoneAnnouncement = null;
    protected $enhanceOfficeZone            = null;

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
        if (!$physicalLocationIndicator) return $this;
        $this->physicalLocationIndicator = ($physicalLocationIndicator InstanceOf PhysicalLocationIndicator)
             ? $physicalLocationIndicator
             : new PhysicalLocationIndicator($physicalLocationIndicator);
        $this->physicalLocationIndicator->setName('physicalLocationIndicator');
        return $this;
    }

    /**
     * 
     * @return PhysicalLocationIndicator $physicalLocationIndicator
     */
    public function getPhysicalLocationIndicator()
    {
        return $this->physicalLocationIndicator->getValue();
    }

    /**
     * 
     */
    public function setEnforceMscValidation($enforceMscValidation = null)
    {
        if (!$enforceMscValidation) return $this;
        $this->enforceMscValidation = new PrimitiveType($enforceMscValidation);
        $this->enforceMscValidation->setName('enforceMscValidation');
        return $this;
    }

    /**
     * 
     * @return boolean $enforceMscValidation
     */
    public function getEnforceMscValidation()
    {
        return $this->enforceMscValidation->getValue();
    }

    /**
     * 
     */
    public function setEnableOfficeZoneAnnouncement($enableOfficeZoneAnnouncement = null)
    {
        if (!$enableOfficeZoneAnnouncement) return $this;
        $this->enableOfficeZoneAnnouncement = new PrimitiveType($enableOfficeZoneAnnouncement);
        $this->enableOfficeZoneAnnouncement->setName('enableOfficeZoneAnnouncement');
        return $this;
    }

    /**
     * 
     * @return boolean $enableOfficeZoneAnnouncement
     */
    public function getEnableOfficeZoneAnnouncement()
    {
        return $this->enableOfficeZoneAnnouncement->getValue();
    }

    /**
     * 
     */
    public function setEnhanceOfficeZone($enhanceOfficeZone = null)
    {
        if (!$enhanceOfficeZone) return $this;
        $this->enhanceOfficeZone = new PrimitiveType($enhanceOfficeZone);
        $this->enhanceOfficeZone->setName('enhanceOfficeZone');
        return $this;
    }

    /**
     * 
     * @return boolean $enhanceOfficeZone
     */
    public function getEnhanceOfficeZone()
    {
        return $this->enhanceOfficeZone->getValue();
    }
}
