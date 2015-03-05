<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceRoutePoint; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DNISKey;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallCenterMediaOnHoldSourceModify17;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Modify a route point DNIS announcement settings.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class GroupRoutePointModifyDNISAnnouncementRequest extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             DNISKey $dnisKey,
             CallCenterMediaOnHoldSourceModify17 $mediaOnHoldSource=null
    ) {
        $this->dnisKey           = $dnisKey;
        $this->mediaOnHoldSource = $mediaOnHoldSource;
        $this->args              = func_get_args();
    }

    public function setDnisKey($dnisKey)
    {
        $dnisKey and $this->dnisKey = new DNISKey($dnisKey);
    }

    public function getDnisKey()
    {
        return (!$this->dnisKey) ?: $this->dnisKey->value();
    }

    public function setMediaOnHoldSource($mediaOnHoldSource)
    {
        $mediaOnHoldSource and $this->mediaOnHoldSource = new CallCenterMediaOnHoldSourceModify17($mediaOnHoldSource);
    }

    public function getMediaOnHoldSource()
    {
        return (!$this->mediaOnHoldSource) ?: $this->mediaOnHoldSource->value();
    }
}
