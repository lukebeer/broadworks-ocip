<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceRoutePoint; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallCenterMediaOnHoldSourceModify17;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DNISKey;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Modify a route point DNIS announcement settings.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class GroupRoutePointModifyDNISAnnouncementRequest extends ComplexType implements ComplexInterface
{
    public    $elementName = 'GroupRoutePointModifyDNISAnnouncementRequest';
    protected $dnisKey;
    protected $mediaOnHoldSource;

    public function __construct(
         $dnisKey = '',
         $mediaOnHoldSource = null
    ) {
        $this->setDnisKey($dnisKey);
        $this->setMediaOnHoldSource($mediaOnHoldSource);
    }

    /**
     * @return mixed $response
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
        $this->dnisKey = ($dnisKey InstanceOf DNISKey)
             ? $dnisKey
             : new DNISKey($dnisKey);
        $this->dnisKey->setElementName('dnisKey');
        return $this;
    }

    /**
     * 
     * @return DNISKey $dnisKey
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
        $this->mediaOnHoldSource = ($mediaOnHoldSource InstanceOf CallCenterMediaOnHoldSourceModify17)
             ? $mediaOnHoldSource
             : new CallCenterMediaOnHoldSourceModify17($mediaOnHoldSource);
        $this->mediaOnHoldSource->setElementName('mediaOnHoldSource');
        return $this;
    }

    /**
     * 
     * @return CallCenterMediaOnHoldSourceModify17 $mediaOnHoldSource
     */
    public function getMediaOnHoldSource()
    {
        return $this->mediaOnHoldSource;
    }
}
