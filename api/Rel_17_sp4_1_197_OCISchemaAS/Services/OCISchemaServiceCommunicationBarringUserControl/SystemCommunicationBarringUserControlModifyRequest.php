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
 * Modifies the system's Communication Barring User-Control settings.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class SystemCommunicationBarringUserControlModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name                       = __CLASS__;
    protected $enableLockout              = null;
    protected $maxNumberOfFailedAttempts  = null;
    protected $lockoutMinutes             = null;

    public function __construct(
         $enableLockout = null,
         $maxNumberOfFailedAttempts = null,
         $lockoutMinutes = null
    ) {
        $this->setEnableLockout($enableLockout);
        $this->setMaxNumberOfFailedAttempts($maxNumberOfFailedAttempts);
        $this->setLockoutMinutes($lockoutMinutes);
    }

    public function setEnableLockout(xs:boolean $enableLockout = null)
    {
    }

    public function getEnableLockout()
    {
        return (!$this->enableLockout) ?: $this->enableLockout->value();
    }

    public function setMaxNumberOfFailedAttempts($maxNumberOfFailedAttempts = null)
    {
        $this->maxNumberOfFailedAttempts = ($maxNumberOfFailedAttempts InstanceOf CommunicationBarringUserControlNumberOfAttempts)
             ? $maxNumberOfFailedAttempts
             : new CommunicationBarringUserControlNumberOfAttempts($maxNumberOfFailedAttempts);
    }

    public function getMaxNumberOfFailedAttempts()
    {
        return (!$this->maxNumberOfFailedAttempts) ?: $this->maxNumberOfFailedAttempts->value();
    }

    public function setLockoutMinutes($lockoutMinutes = null)
    {
        $this->lockoutMinutes = ($lockoutMinutes InstanceOf CommunicationBarringUserControlLockoutMinutes)
             ? $lockoutMinutes
             : new CommunicationBarringUserControlLockoutMinutes($lockoutMinutes);
    }

    public function getLockoutMinutes()
    {
        return (!$this->lockoutMinutes) ?: $this->lockoutMinutes->value();
    }
}
