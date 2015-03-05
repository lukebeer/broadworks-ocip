<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\OfficeZoneName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\OfficeZoneDescription;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ReplacementZoneList;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ZoneName;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Modify an existing Office Zone.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemOfficeZoneModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $officeZoneName,
             $newOfficeZoneName=null,
             $description=null,
             $replacementZoneList=null,
             $primaryZoneName=null
    ) {
        $this->officeZoneName      = new OfficeZoneName($officeZoneName);
        $this->newOfficeZoneName   = new OfficeZoneName($newOfficeZoneName);
        $this->description         = $description;
        $this->replacementZoneList = $replacementZoneList;
        $this->primaryZoneName     = new ZoneName($primaryZoneName);
        $this->args                = func_get_args();
    }

    public function setOfficeZoneName($officeZoneName)
    {
        $officeZoneName and $this->officeZoneName = new OfficeZoneName($officeZoneName);
    }

    public function getOfficeZoneName()
    {
        return (!$this->officeZoneName) ?: $this->officeZoneName->value();
    }

    public function setNewOfficeZoneName($newOfficeZoneName)
    {
        $newOfficeZoneName and $this->newOfficeZoneName = new OfficeZoneName($newOfficeZoneName);
    }

    public function getNewOfficeZoneName()
    {
        return (!$this->newOfficeZoneName) ?: $this->newOfficeZoneName->value();
    }

    public function setDescription($description)
    {
        $description and $this->description = new OfficeZoneDescription($description);
    }

    public function getDescription()
    {
        return (!$this->description) ?: $this->description->value();
    }

    public function setReplacementZoneList($replacementZoneList)
    {
        $replacementZoneList and $this->replacementZoneList = new ReplacementZoneList($replacementZoneList);
    }

    public function getReplacementZoneList()
    {
        return (!$this->replacementZoneList) ?: $this->replacementZoneList->value();
    }

    public function setPrimaryZoneName($primaryZoneName)
    {
        $primaryZoneName and $this->primaryZoneName = new ZoneName($primaryZoneName);
    }

    public function getPrimaryZoneName()
    {
        return (!$this->primaryZoneName) ?: $this->primaryZoneName->value();
    }
}
