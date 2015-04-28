<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallNotify; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\EmailAddress;
use BroadworksOCIP\Builder\Types\TableType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Response to the UserCallNotifyGetRequest. The criteria table's column headings are: "Is Active", 
 *         "Criteria Name", "Time Schedule", "Calls From", "Blacklisted" and "Holiday Schedule".
 */
class UserCallNotifyGetResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'UserCallNotifyGetResponse';
    protected $callNotifyEmailAddress;
    protected $criteriaTable;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallNotify\UserCallNotifyGetResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setCallNotifyEmailAddress($callNotifyEmailAddress = null)
    {
        $this->callNotifyEmailAddress = ($callNotifyEmailAddress InstanceOf EmailAddress)
             ? $callNotifyEmailAddress
             : new EmailAddress($callNotifyEmailAddress);
        $this->callNotifyEmailAddress->setElementName('callNotifyEmailAddress');
        return $this;
    }

    /**
     * 
     * @return EmailAddress $callNotifyEmailAddress
     */
    public function getCallNotifyEmailAddress()
    {
        return ($this->callNotifyEmailAddress)
            ? $this->callNotifyEmailAddress->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setCriteriaTable(TableType $criteriaTable = null)
    {
        $this->criteriaTable = $criteriaTable;
        $this->criteriaTable->setElementName('criteriaTable');
        return $this;
    }

    /**
     * 
     * @return TableType
     */
    public function getCriteriaTable()
    {
        return $this->criteriaTable;
    }
}
