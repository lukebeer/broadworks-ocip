<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceLocationBasedCallingRestrictions; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\PhysicalLocationIndicator;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\xs:boolean;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to SystemLocationBasedCallingRestrictionsGetRequest17sp3.
 */
class SystemLocationBasedCallingRestrictionsGetResponse17sp3 extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $physicalLocationIndicator,
             $enforceMscValidation,
             $enableOfficeZoneAnnouncement,
             $enhanceOfficeZone
    ) {
        $this->physicalLocationIndicator    = $physicalLocationIndicator;
        $this->enforceMscValidation         = $enforceMscValidation;
        $this->enableOfficeZoneAnnouncement = $enableOfficeZoneAnnouncement;
        $this->enhanceOfficeZone            = $enhanceOfficeZone;
        $this->args                         = func_get_args();
    }

    public function setPhysicalLocationIndicator($physicalLocationIndicator)
    {
        $physicalLocationIndicator and $this->physicalLocationIndicator = new PhysicalLocationIndicator($physicalLocationIndicator);
    }

    public function getPhysicalLocationIndicator()
    {
        return (!$this->physicalLocationIndicator) ?: $this->physicalLocationIndicator->value();
    }

    public function setEnforceMscValidation($enforceMscValidation)
    {
        $enforceMscValidation and $this->enforceMscValidation = new xs:boolean($enforceMscValidation);
    }

    public function getEnforceMscValidation()
    {
        return (!$this->enforceMscValidation) ?: $this->enforceMscValidation->value();
    }

    public function setEnableOfficeZoneAnnouncement($enableOfficeZoneAnnouncement)
    {
        $enableOfficeZoneAnnouncement and $this->enableOfficeZoneAnnouncement = new xs:boolean($enableOfficeZoneAnnouncement);
    }

    public function getEnableOfficeZoneAnnouncement()
    {
        return (!$this->enableOfficeZoneAnnouncement) ?: $this->enableOfficeZoneAnnouncement->value();
    }

    public function setEnhanceOfficeZone($enhanceOfficeZone)
    {
        $enhanceOfficeZone and $this->enhanceOfficeZone = new xs:boolean($enhanceOfficeZone);
    }

    public function getEnhanceOfficeZone()
    {
        return (!$this->enhanceOfficeZone) ?: $this->enhanceOfficeZone->value();
    }
}
