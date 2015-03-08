<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\OfficeZoneDescription;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\OfficeZoneName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ZoneName;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Add a new Office Zone.  The zoneList is an ordered list with the first member being of the highest priority. 
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemOfficeZoneAddRequest extends ComplexType implements ComplexInterface
{
    public    $name            = __CLASS__;
    protected $officeZoneName  = null;
    protected $description     = null;
    protected $zoneName        = null;
    protected $primaryZoneName = null;

    public function __construct(
         $officeZoneName,
         $description = null,
         $zoneName = null,
         $primaryZoneName
    ) {
        $this->setOfficeZoneName($officeZoneName);
        $this->setDescription($description);
        $this->setZoneName($zoneName);
        $this->setPrimaryZoneName($primaryZoneName);
    }

    /**
     * Office Zone name.
     */
    public function setOfficeZoneName($officeZoneName = null)
    {
        $this->officeZoneName = ($officeZoneName InstanceOf OfficeZoneName)
             ? $officeZoneName
             : new OfficeZoneName($officeZoneName);
    }

    /**
     * Office Zone name.
     */
    public function getOfficeZoneName()
    {
        return (!$this->officeZoneName) ?: $this->officeZoneName->getValue();
    }

    /**
     * Office Zone description.
     */
    public function setDescription($description = null)
    {
        $this->description = ($description InstanceOf OfficeZoneDescription)
             ? $description
             : new OfficeZoneDescription($description);
    }

    /**
     * Office Zone description.
     */
    public function getDescription()
    {
        return (!$this->description) ?: $this->description->getValue();
    }

    /**
     * Zone Name.
     */
    public function setZoneName($zoneName = null)
    {
        $this->zoneName = ($zoneName InstanceOf ZoneName)
             ? $zoneName
             : new ZoneName($zoneName);
    }

    /**
     * Zone Name.
     */
    public function getZoneName()
    {
        return (!$this->zoneName) ?: $this->zoneName->getValue();
    }

    /**
     * Zone Name.
     */
    public function setPrimaryZoneName($primaryZoneName = null)
    {
        $this->primaryZoneName = ($primaryZoneName InstanceOf ZoneName)
             ? $primaryZoneName
             : new ZoneName($primaryZoneName);
    }

    /**
     * Zone Name.
     */
    public function getPrimaryZoneName()
    {
        return (!$this->primaryZoneName) ?: $this->primaryZoneName->getValue();
    }
}
