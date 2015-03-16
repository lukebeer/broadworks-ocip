<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCommunicationBarringUserControl; 

use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\TableType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to the UserCommunicationBarringUserControlGetRequest.
 *         Identifies the profiles available to the user and which one if any
 *         is active as well as the lockout status.
 *         Contains a table with column headings: "Name", "Code", "Activated" and "Primary".
 */
class UserCommunicationBarringUserControlGetResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'UserCommunicationBarringUserControlGetResponse';
    protected $lockoutStatus;
    protected $profileTable;

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCommunicationBarringUserControl\UserCommunicationBarringUserControlGetResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setLockoutStatus($lockoutStatus = null)
    {
        $this->lockoutStatus = new PrimitiveType($lockoutStatus);
        $this->lockoutStatus->setElementName('lockoutStatus');
        return $this;
    }

    /**
     * 
     * @return boolean $lockoutStatus
     */
    public function getLockoutStatus()
    {
        return ($this->lockoutStatus)
            ? $this->lockoutStatus->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setProfileTable(TableType $profileTable = null)
    {
        $this->profileTable = $profileTable;
        $this->profileTable->setElementName('profileTable');
        return $this;
    }

    /**
     * 
     * @return TableType
     */
    public function getProfileTable()
    {
        return $this->profileTable;
    }
}
