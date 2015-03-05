<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceRoutePoint; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallCenterMediaOnHoldSourceRead17;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to the GroupRoutePointGetDNISAnnouncementRequest.
 */
class GroupRoutePointGetDNISAnnouncementResponse extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             CallCenterMediaOnHoldSourceRead17 $mediaOnHoldSource
    ) {
        $this->mediaOnHoldSource = $mediaOnHoldSource;
        $this->args              = func_get_args();
    }

    public function setMediaOnHoldSource($mediaOnHoldSource)
    {
        $mediaOnHoldSource and $this->mediaOnHoldSource = new CallCenterMediaOnHoldSourceRead17($mediaOnHoldSource);
    }

    public function getMediaOnHoldSource()
    {
        return (!$this->mediaOnHoldSource) ?: $this->mediaOnHoldSource->value();
    }
}
