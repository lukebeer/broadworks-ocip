<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceCallNotify; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\EmailAddress;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceCallNotify\UserCallNotifyGetResponse;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to the UserCallNotifyGetRequest. The criteria table's column headings are: "Is Active", 
 *         "Criteria Name", "Time Schedule", "Calls From", "Blacklisted" and "Holiday Schedule".
 */
class UserCallNotifyGetResponse extends ComplexType implements ComplexInterface
{
    public    $name                   = __CLASS__;
    protected $callNotifyEmailAddress = null;
    protected $criteriaTable          = null;

    /**
     * @return UserCallNotifyGetResponse
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * Email Address
     */
    public function setCallNotifyEmailAddress($callNotifyEmailAddress = null)
    {
        $this->callNotifyEmailAddress = ($callNotifyEmailAddress InstanceOf EmailAddress)
             ? $callNotifyEmailAddress
             : new EmailAddress($callNotifyEmailAddress);
    }

    /**
     * Email Address
     */
    public function getCallNotifyEmailAddress()
    {
        return (!$this->callNotifyEmailAddress) ?: $this->callNotifyEmailAddress->getValue();
    }

    /**
     * 
     */
    public function setCriteriaTable(core:OCITable $criteriaTable = null)
    {
        $this->criteriaTable =  $criteriaTable;
    }

    /**
     * 
     */
    public function getCriteriaTable()
    {
        return (!$this->criteriaTable) ?: $this->criteriaTable->getValue();
    }
}
