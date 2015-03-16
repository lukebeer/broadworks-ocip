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
 * Response to SystemLocationBasedCallingRestrictionsGetRequest17sp3.
 */
class SystemLocationBasedCallingRestrictionsGetResponse17sp3 extends ComplexType implements ComplexInterface
{
    public    $name = 'SystemLocationBasedCallingRestrictionsGetResponse17sp3';
    protected $physicalLocationIndicator;
    protected $enforceMscValidation;
    protected $enableOfficeZoneAnnouncement;
    protected $enhanceOfficeZone;

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceLocationBasedCallingRestrictions\SystemLocationBasedCallingRestrictionsGetResponse17sp3 $response
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
        $this->physicalLocationIndicator->setName('physicalLocationIndicator');
        return $this;
    }

    /**
     * 
     * @return PhysicalLocationIndicator $physicalLocationIndicator
     */
    public function getPhysicalLocationIndicator()
    {
        return ($this->physicalLocationIndicator) ? $this->physicalLocationIndicator->getValue() : null;
    }

    /**
     * 
     */
    public function setEnforceMscValidation($enforceMscValidation = null)
    {
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
        return ($this->enforceMscValidation) ? $this->enforceMscValidation->getValue() : null;
    }

    /**
     * 
     */
    public function setEnableOfficeZoneAnnouncement($enableOfficeZoneAnnouncement = null)
    {
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
        return ($this->enableOfficeZoneAnnouncement) ? $this->enableOfficeZoneAnnouncement->getValue() : null;
    }

    /**
     * 
     */
    public function setEnhanceOfficeZone($enhanceOfficeZone = null)
    {
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
        return ($this->enhanceOfficeZone) ? $this->enhanceOfficeZone->getValue() : null;
    }
}
