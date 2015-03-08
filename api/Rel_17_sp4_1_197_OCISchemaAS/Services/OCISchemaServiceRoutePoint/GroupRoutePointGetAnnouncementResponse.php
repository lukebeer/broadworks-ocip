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
     * Response to the GroupRoutePointGetAnnouncementRequest.
 */
class GroupRoutePointGetAnnouncementResponse extends ComplexType implements ComplexInterface
{
    public    $name              = __CLASS__;
    protected $mediaOnHoldSource = null;


    /**
     * Contains the call center media on hold source configuration.
     */
    public function setMediaOnHoldSource(CallCenterMediaOnHoldSourceRead17 $mediaOnHoldSource = null)
    {
        $this->mediaOnHoldSource =  $mediaOnHoldSource;
    }

    /**
     * Contains the call center media on hold source configuration.
     */
    public function getMediaOnHoldSource()
    {
        return (!$this->mediaOnHoldSource) ?: $this->mediaOnHoldSource->getValue();
    }
}
