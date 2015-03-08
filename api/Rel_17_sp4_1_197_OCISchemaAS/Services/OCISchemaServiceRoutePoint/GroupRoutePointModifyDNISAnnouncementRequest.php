<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceRoutePoint; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallCenterMediaOnHoldSourceModify17;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DNISKey;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Modify a route point DNIS announcement settings.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class GroupRoutePointModifyDNISAnnouncementRequest extends ComplexType implements ComplexInterface
{
    public    $name              = __CLASS__;
    protected $dnisKey           = null;
    protected $mediaOnHoldSource = null;

    public function __construct(
          $dnisKey,
          $mediaOnHoldSource = null
    ) {
        $this->setDnisKey($dnisKey);
        $this->setMediaOnHoldSource($mediaOnHoldSource);
    }

    /**
     * Uniquely identifies a Call Center DNIS.
     */
    public function setDnisKey(DNISKey $dnisKey = null)
    {
        $this->dnisKey =  $dnisKey;
    }

    /**
     * Uniquely identifies a Call Center DNIS.
     */
    public function getDnisKey()
    {
        return (!$this->dnisKey) ?: $this->dnisKey->getValue();
    }

    /**
     * Contains the call center media on hold source configuration.
     */
    public function setMediaOnHoldSource(CallCenterMediaOnHoldSourceModify17 $mediaOnHoldSource = null)
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
