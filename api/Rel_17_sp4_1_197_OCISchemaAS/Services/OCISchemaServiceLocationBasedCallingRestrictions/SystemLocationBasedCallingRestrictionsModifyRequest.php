<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceLocationBasedCallingRestrictions; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceLocationBasedCallingRestrictions\PhysicalLocationIndicator;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Modifies the system level Location Based Calling Restriction attributes.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemLocationBasedCallingRestrictionsModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name                          = __CLASS__;
    protected $physicalLocationIndicator     = null;
    protected $enforceMscValidation          = null;
    protected $enableOfficeZoneAnnouncement  = null;
    protected $enhanceOfficeZone             = null;

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

    public function setPhysicalLocationIndicator($physicalLocationIndicator = null)
    {
        $this->physicalLocationIndicator = ($physicalLocationIndicator InstanceOf PhysicalLocationIndicator)
             ? $physicalLocationIndicator
             : new PhysicalLocationIndicator($physicalLocationIndicator);
    }

    public function getPhysicalLocationIndicator()
    {
        return (!$this->physicalLocationIndicator) ?: $this->physicalLocationIndicator->value();
    }

    public function setEnforceMscValidation(xs:boolean $enforceMscValidation = null)
    {
    }

    public function getEnforceMscValidation()
    {
        return (!$this->enforceMscValidation) ?: $this->enforceMscValidation->value();
    }

    public function setEnableOfficeZoneAnnouncement(xs:boolean $enableOfficeZoneAnnouncement = null)
    {
    }

    public function getEnableOfficeZoneAnnouncement()
    {
        return (!$this->enableOfficeZoneAnnouncement) ?: $this->enableOfficeZoneAnnouncement->value();
    }

    public function setEnhanceOfficeZone(xs:boolean $enhanceOfficeZone = null)
    {
    }

    public function getEnhanceOfficeZone()
    {
        return (!$this->enhanceOfficeZone) ?: $this->enhanceOfficeZone->value();
    }
}
