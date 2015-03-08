<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceCommunicationBarringUserControl; 


use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Response to the UserCommunicationBarringUserControlGetRequest.
 *         Identifies the profiles available to the user and which one if any
 *         is active as well as the lockout status.
 *         Contains a table with column headings: "Name", "Code", "Activated" and "Primary".
 */
class UserCommunicationBarringUserControlGetResponse extends ComplexType implements ComplexInterface
{
    const     RESPONSE_TYPE  = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceCommunicationBarringUserControl\UserCommunicationBarringUserControlGetResponse';
    public    $name          = __CLASS__;
    protected $lockoutStatus = null;
    protected $profileTable  = null;


    /**
     * 
     */
    public function setLockoutStatus($lockoutStatus = null)
    {
        $this->lockoutStatus = (boolean) $lockoutStatus;
    }

    /**
     * 
     */
    public function getLockoutStatus()
    {
        return (!$this->lockoutStatus) ?: $this->lockoutStatus->getValue();
    }

    /**
     * 
     */
    public function setProfileTable(core:OCITable $profileTable = null)
    {
        $this->profileTable = core:OCITable $profileTable;
    }

    /**
     * 
     */
    public function getProfileTable()
    {
        return (!$this->profileTable) ?: $this->profileTable->getValue();
    }
}
