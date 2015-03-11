<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceRoutePoint; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallCenterMediaOnHoldSourceModify17;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DNISKey;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Modify a route point DNIS announcement settings.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class GroupRoutePointModifyDNISAnnouncementRequest extends ComplexType implements ComplexInterface
{
    public    $name              = 'GroupRoutePointModifyDNISAnnouncementRequest';
    protected $dnisKey           = null;
    protected $mediaOnHoldSource = null;

    public function __construct(
         DNISKey $dnisKey,
         CallCenterMediaOnHoldSourceModify17 $mediaOnHoldSource = null
    ) {
        $this->setDnisKey($dnisKey);
        $this->setMediaOnHoldSource($mediaOnHoldSource);
    }

    /**
     * @return 
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setDnisKey(DNISKey $dnisKey = null)
    {
        if (!$dnisKey) return $this;
        $this->dnisKey = $dnisKey;
        $this->dnisKey->setName('dnisKey');
        return $this;
    }

    /**
     * 
     * @return DNISKey
     */
    public function getDnisKey()
    {
        return $this->dnisKey;
    }

    /**
     * 
     */
    public function setMediaOnHoldSource(CallCenterMediaOnHoldSourceModify17 $mediaOnHoldSource = null)
    {
        if (!$mediaOnHoldSource) return $this;
        $this->mediaOnHoldSource = $mediaOnHoldSource;
        $this->mediaOnHoldSource->setName('mediaOnHoldSource');
        return $this;
    }

    /**
     * 
     * @return CallCenterMediaOnHoldSourceModify17
     */
    public function getMediaOnHoldSource()
    {
        return $this->mediaOnHoldSource;
    }
}
