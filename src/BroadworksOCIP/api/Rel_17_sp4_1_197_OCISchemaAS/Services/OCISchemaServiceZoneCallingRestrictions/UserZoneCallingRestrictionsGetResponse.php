<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceZoneCallingRestrictions; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ZoneName;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Gets the home zone for a user
 *         Response to a UserZoneCallingRestrictionsGetRequest
 */
class UserZoneCallingRestrictionsGetResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'UserZoneCallingRestrictionsGetResponse';
    protected $homeZoneName;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceZoneCallingRestrictions\UserZoneCallingRestrictionsGetResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setHomeZoneName($homeZoneName = null)
    {
        $this->homeZoneName = ($homeZoneName InstanceOf ZoneName)
             ? $homeZoneName
             : new ZoneName($homeZoneName);
        $this->homeZoneName->setElementName('homeZoneName');
        return $this;
    }

    /**
     * 
     * @return ZoneName $homeZoneName
     */
    public function getHomeZoneName()
    {
        return ($this->homeZoneName)
            ? $this->homeZoneName->getElementValue()
            : null;
    }
}
