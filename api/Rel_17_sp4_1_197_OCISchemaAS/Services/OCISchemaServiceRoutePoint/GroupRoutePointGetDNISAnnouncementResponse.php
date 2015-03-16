<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceRoutePoint; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallCenterMediaOnHoldSourceRead17;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to the GroupRoutePointGetDNISAnnouncementRequest.
 */
class GroupRoutePointGetDNISAnnouncementResponse extends ComplexType implements ComplexInterface
{
    public    $name = 'GroupRoutePointGetDNISAnnouncementResponse';
    protected $mediaOnHoldSource;

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceRoutePoint\GroupRoutePointGetDNISAnnouncementResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setMediaOnHoldSource(CallCenterMediaOnHoldSourceRead17 $mediaOnHoldSource = null)
    {
        $this->mediaOnHoldSource = ($mediaOnHoldSource InstanceOf CallCenterMediaOnHoldSourceRead17)
             ? $mediaOnHoldSource
             : new CallCenterMediaOnHoldSourceRead17($mediaOnHoldSource);
        $this->mediaOnHoldSource->setName('mediaOnHoldSource');
        return $this;
    }

    /**
     * 
     * @return CallCenterMediaOnHoldSourceRead17 $mediaOnHoldSource
     */
    public function getMediaOnHoldSource()
    {
        return $this->mediaOnHoldSource;
    }
}
