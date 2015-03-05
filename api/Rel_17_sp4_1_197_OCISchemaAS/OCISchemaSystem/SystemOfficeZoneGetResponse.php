<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\OfficeZoneDescription;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ZoneName;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to the SystemOfficeZoneGetRequest.
 *         The response contains the Office Zone information.
 */
class SystemOfficeZoneGetResponse extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $description=null,
             $zoneName=null,
             $primaryZoneName
    ) {
        $this->description     = $description;
        $this->zoneName        = new ZoneName($zoneName);
        $this->primaryZoneName = new ZoneName($primaryZoneName);
        $this->args            = func_get_args();
    }

    public function setDescription($description)
    {
        $description and $this->description = new OfficeZoneDescription($description);
    }

    public function getDescription()
    {
        return (!$this->description) ?: $this->description->value();
    }

    public function setZoneName($zoneName)
    {
        $zoneName and $this->zoneName = new ZoneName($zoneName);
    }

    public function getZoneName()
    {
        return (!$this->zoneName) ?: $this->zoneName->value();
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
