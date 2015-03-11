<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated16; 

use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to the UserBroadWorksAnywhereGetRequest.
 *         The phoneNumberTable contains columns: "Phone Number", "Description"
 *         Replaced by: UserBroadWorksAnywhereGetResponse16sp2
 */
class UserBroadWorksAnywhereGetResponse extends ComplexType implements ComplexInterface
{
    public    $name                                 = 'UserBroadWorksAnywhereGetResponse';
    protected $alertAllLocationsForClickToDialCalls = null;
    protected $phoneNumberTable                     = null;

    /**
     * @return UserBroadWorksAnywhereGetResponse
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
        if (!$alertAllLocationsForClickToDialCalls) return $this;
        $this->alertAllLocationsForClickToDialCalls = new PrimitiveType($alertAllLocationsForClickToDialCalls);
        $this->alertAllLocationsForClickToDialCalls->setName('alertAllLocationsForClickToDialCalls');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getAlertAllLocationsForClickToDialCalls()
    {
        return $this->alertAllLocationsForClickToDialCalls->getValue();
    }

    /**
     * 
     */
    public function setPhoneNumberTable(core:OCITable $phoneNumberTable = null)
    {
        if (!$phoneNumberTable) return $this;
        $this->phoneNumberTable->setName('phoneNumberTable');
        return $this;
    }

    /**
     * 
     * @return core:OCITable
     */
    public function getPhoneNumberTable()
    {
        return $this->phoneNumberTable->getValue();
    }
}
