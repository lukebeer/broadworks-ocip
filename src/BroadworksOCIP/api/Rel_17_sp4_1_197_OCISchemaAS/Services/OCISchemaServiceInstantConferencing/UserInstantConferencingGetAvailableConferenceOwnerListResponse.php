<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantConferencing; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantConferencing\InstantConferencingBridgeOwnerList;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Response to the UserInstantConferencingGetAvailableConferenceOwnerListRequest.
 */
class UserInstantConferencingGetAvailableConferenceOwnerListResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'UserInstantConferencingGetAvailableConferenceOwnerListResponse';
    protected $bridge;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantConferencing\UserInstantConferencingGetAvailableConferenceOwnerListResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setBridge(InstantConferencingBridgeOwnerList $bridge = null)
    {
        $this->bridge = ($bridge InstanceOf InstantConferencingBridgeOwnerList)
             ? $bridge
             : new InstantConferencingBridgeOwnerList($bridge);
        $this->bridge->setElementName('bridge');
        return $this;
    }

    /**
     * 
     * @return InstantConferencingBridgeOwnerList $bridge
     */
    public function getBridge()
    {
        return $this->bridge;
    }
}
