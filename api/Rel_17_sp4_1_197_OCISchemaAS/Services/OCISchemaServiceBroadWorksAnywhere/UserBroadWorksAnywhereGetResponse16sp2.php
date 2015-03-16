<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceBroadWorksAnywhere; 

use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\TableType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to the UserBroadWorksAnywhereGetRequest16sp2.
 *         The phoneNumberTable contains columns: "Phone Number", "Description"
 */
class UserBroadWorksAnywhereGetResponse16sp2 extends ComplexType implements ComplexInterface
{
    public    $elementName = 'UserBroadWorksAnywhereGetResponse16sp2';
    protected $alertAllLocationsForClickToDialCalls;
    protected $alertAllLocationsForGroupPagingCalls;
    protected $phoneNumberTable;

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceBroadWorksAnywhere\UserBroadWorksAnywhereGetResponse16sp2 $response
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
    public function setAlertAllLocationsForGroupPagingCalls($alertAllLocationsForGroupPagingCalls = null)
    {
        $this->alertAllLocationsForGroupPagingCalls = new PrimitiveType($alertAllLocationsForGroupPagingCalls);
        $this->alertAllLocationsForGroupPagingCalls->setElementName('alertAllLocationsForGroupPagingCalls');
        return $this;
    }

    /**
     * 
     * @return boolean $alertAllLocationsForGroupPagingCalls
     */
    public function getAlertAllLocationsForGroupPagingCalls()
    {
        return ($this->alertAllLocationsForGroupPagingCalls)
            ? $this->alertAllLocationsForGroupPagingCalls->getElementValue()
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
