<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\OfficeZoneDescription;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\ReplacementZoneList;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\OfficeZoneName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ZoneName;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Modify an existing Office Zone.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemOfficeZoneModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name                = __CLASS__;
    protected $officeZoneName      = null;
    protected $newOfficeZoneName   = null;
    protected $description         = null;
    protected $replacementZoneList = null;
    protected $primaryZoneName     = null;

    public function __construct(
         $officeZoneName,
         $newOfficeZoneName = null,
         $description = null,
         ReplacementZoneList $replacementZoneList = null,
         $primaryZoneName = null
    ) {
        $this->setOfficeZoneName($officeZoneName);
        $this->setNewOfficeZoneName($newOfficeZoneName);
        $this->setDescription($description);
        $this->setReplacementZoneList($replacementZoneList);
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
     * Office Zone name.
     */
    public function setNewOfficeZoneName($newOfficeZoneName = null)
    {
        $this->newOfficeZoneName = ($newOfficeZoneName InstanceOf OfficeZoneName)
             ? $newOfficeZoneName
             : new OfficeZoneName($newOfficeZoneName);
    }

    /**
     * Office Zone name.
     */
    public function getNewOfficeZoneName()
    {
        return (!$this->newOfficeZoneName) ?: $this->newOfficeZoneName->getValue();
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
     * Contains an ordered list of zones to use to replace the current list of zones in an Office Zone.
     */
    public function setReplacementZoneList(ReplacementZoneList $replacementZoneList = null)
    {
        $this->replacementZoneList = ReplacementZoneList $replacementZoneList;
    }

    /**
     * Contains an ordered list of zones to use to replace the current list of zones in an Office Zone.
     */
    public function getReplacementZoneList()
    {
        return (!$this->replacementZoneList) ?: $this->replacementZoneList->getValue();
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
