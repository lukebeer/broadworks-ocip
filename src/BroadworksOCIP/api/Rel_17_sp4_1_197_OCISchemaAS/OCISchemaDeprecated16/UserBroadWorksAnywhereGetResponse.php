<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated16; 

use BroadworksOCIP\Builder\Types\PrimitiveType;
use BroadworksOCIP\Builder\Types\TableType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Response to the UserBroadWorksAnywhereGetRequest.
 *         The phoneNumberTable contains columns: "Phone Number", "Description"
 *         Replaced by: UserBroadWorksAnywhereGetResponse16sp2
 */
class UserBroadWorksAnywhereGetResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'UserBroadWorksAnywhereGetResponse';
    protected $alertAllLocationsForClickToDialCalls;
    protected $phoneNumberTable;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated16\UserBroadWorksAnywhereGetResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setAlertAllLocationsForClickToDialCalls($alertAllLocationsForClickToDialCalls = null)
    {
        $this->alertAllLocationsForClickToDialCalls = new PrimitiveType($alertAllLocationsForClickToDialCalls);
        $this->alertAllLocationsForClickToDialCalls->setElementName('alertAllLocationsForClickToDialCalls');
        return $this;
    }

    /**
     * 
     * @return boolean $alertAllLocationsForClickToDialCalls
     */
    public function getAlertAllLocationsForClickToDialCalls()
    {
        return ($this->alertAllLocationsForClickToDialCalls)
            ? $this->alertAllLocationsForClickToDialCalls->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setPhoneNumberTable(TableType $phoneNumberTable = null)
    {
        $this->phoneNumberTable = $phoneNumberTable;
        $this->phoneNumberTable->setElementName('phoneNumberTable');
        return $this;
    }

    /**
     * 
     * @return TableType
     */
    public function getPhoneNumberTable()
    {
        return $this->phoneNumberTable;
    }
}
