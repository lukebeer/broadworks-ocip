<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceCommunicationBarringUserControl; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCommunicationBarringUserControl\CommunicationBarringUserControlNumberOfAttempts;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCommunicationBarringUserControl\CommunicationBarringUserControlLockoutMinutes;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Response to the SystemCommunicationBarringUserControlGetRequest.
 *         Contains the settings to whole system for Communication Barring User-Control
 */
class SystemCommunicationBarringUserControlGetResponse extends ComplexType implements ComplexInterface
{
    const     RESPONSE_TYPE              = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceCommunicationBarringUserControl\SystemCommunicationBarringUserControlGetResponse';
    public    $name                      = __CLASS__;
    protected $enableLockout             = null;
    protected $maxNumberOfFailedAttempts = null;
    protected $lockoutMinutes            = null;


    /**
     * 
     */
    public function setEnableLockout($enableLockout = null)
    {
        $this->enableLockout = (boolean) $enableLockout;
    }

    /**
     * 
     */
    public function getEnableLockout()
    {
        return (!$this->enableLockout) ?: $this->enableLockout->getValue();
    }

    /**
     * Communication Barring User-Control number of attempts to get pin code correct.
     */
    public function setMaxNumberOfFailedAttempts($maxNumberOfFailedAttempts = null)
    {
        $this->maxNumberOfFailedAttempts = ($maxNumberOfFailedAttempts InstanceOf CommunicationBarringUserControlNumberOfAttempts)
             ? $maxNumberOfFailedAttempts
             : new CommunicationBarringUserControlNumberOfAttempts($maxNumberOfFailedAttempts);
    }

    /**
     * Communication Barring User-Control number of attempts to get pin code correct.
     */
    public function getMaxNumberOfFailedAttempts()
    {
        return (!$this->maxNumberOfFailedAttempts) ?: $this->maxNumberOfFailedAttempts->getValue();
    }

    /**
     * Communication Barring User-Control lockout time in minutes.
     */
    public function setLockoutMinutes($lockoutMinutes = null)
    {
        $this->lockoutMinutes = ($lockoutMinutes InstanceOf CommunicationBarringUserControlLockoutMinutes)
             ? $lockoutMinutes
             : new CommunicationBarringUserControlLockoutMinutes($lockoutMinutes);
    }

    /**
     * Communication Barring User-Control lockout time in minutes.
     */
    public function getLockoutMinutes()
    {
        return (!$this->lockoutMinutes) ?: $this->lockoutMinutes->getValue();
    }
}
