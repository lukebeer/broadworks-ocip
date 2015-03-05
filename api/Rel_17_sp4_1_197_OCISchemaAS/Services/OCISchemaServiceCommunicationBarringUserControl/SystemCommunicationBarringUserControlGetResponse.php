<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceCommunicationBarringUserControl; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\xs:boolean;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CommunicationBarringUserControlNumberOfAttempts;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CommunicationBarringUserControlLockoutMinutes;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to the SystemCommunicationBarringUserControlGetRequest.
 *         Contains the settings to whole system for Communication Barring User-Control
 */
class SystemCommunicationBarringUserControlGetResponse extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $enableLockout,
             $maxNumberOfFailedAttempts,
             $lockoutMinutes
    ) {
        $this->enableLockout             = $enableLockout;
        $this->maxNumberOfFailedAttempts = $maxNumberOfFailedAttempts;
        $this->lockoutMinutes            = $lockoutMinutes;
        $this->args                      = func_get_args();
    }

    public function setEnableLockout($enableLockout)
    {
        $enableLockout and $this->enableLockout = new xs:boolean($enableLockout);
    }

    public function getEnableLockout()
    {
        return (!$this->enableLockout) ?: $this->enableLockout->value();
    }

    public function setMaxNumberOfFailedAttempts($maxNumberOfFailedAttempts)
    {
        $maxNumberOfFailedAttempts and $this->maxNumberOfFailedAttempts = new CommunicationBarringUserControlNumberOfAttempts($maxNumberOfFailedAttempts);
    }

    public function getMaxNumberOfFailedAttempts()
    {
        return (!$this->maxNumberOfFailedAttempts) ?: $this->maxNumberOfFailedAttempts->value();
    }

    public function setLockoutMinutes($lockoutMinutes)
    {
        $lockoutMinutes and $this->lockoutMinutes = new CommunicationBarringUserControlLockoutMinutes($lockoutMinutes);
    }

    public function getLockoutMinutes()
    {
        return (!$this->lockoutMinutes) ?: $this->lockoutMinutes->value();
    }
}
