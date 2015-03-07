<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceLegacyAutomaticCallback; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceLegacyAutomaticCallback\LegacyAutomaticCallbackMaxMonitorsPerOriginator;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceLegacyAutomaticCallback\LegacyAutomaticCallbackMaxMonitorsPerTerminator;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceLegacyAutomaticCallback\LegacyAutomaticCallbackTRingSeconds;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceLegacyAutomaticCallback\LegacyAutomaticCallbackT10TMinutes;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceLegacyAutomaticCallback\LegacyAutomaticCallbackT10OMinutes;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceLegacyAutomaticCallback\LegacyAutomaticCallbackT8Seconds;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceLegacyAutomaticCallback\LegacyAutomaticCallbackT6Minutes;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceLegacyAutomaticCallback\LegacyAutomaticCallbackT2Minutes;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceLegacyAutomaticCallback\LegacyAutomaticCallbackT4Seconds;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceLegacyAutomaticCallback\LegacyAutomaticCallbackT5Seconds;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceLegacyAutomaticCallback\LegacyAutomaticCallbackT7Minutes;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Modifies the system's legacy automatic callback attributes.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemLegacyAutomaticCallbackModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name                      = __CLASS__;
    protected $maxMonitorsPerOriginator  = null;
    protected $maxMonitorsPerTerminator  = null;
    protected $t2Minutes                 = null;
    protected $t4Seconds                 = null;
    protected $t5Seconds                 = null;
    protected $t6Minutes                 = null;
    protected $t7Minutes                 = null;
    protected $t8Seconds                 = null;
    protected $tRingSeconds              = null;
    protected $t10OMinutes               = null;
    protected $t10TMinutes               = null;

    public function __construct(
         $maxMonitorsPerOriginator = null,
         $maxMonitorsPerTerminator = null,
         $t2Minutes = null,
         $t4Seconds = null,
         $t5Seconds = null,
         $t6Minutes = null,
         $t7Minutes = null,
         $t8Seconds = null,
         $tRingSeconds = null,
         $t10OMinutes = null,
         $t10TMinutes = null
    ) {
        $this->setMaxMonitorsPerOriginator($maxMonitorsPerOriginator);
        $this->setMaxMonitorsPerTerminator($maxMonitorsPerTerminator);
        $this->setT2Minutes($t2Minutes);
        $this->setT4Seconds($t4Seconds);
        $this->setT5Seconds($t5Seconds);
        $this->setT6Minutes($t6Minutes);
        $this->setT7Minutes($t7Minutes);
        $this->setT8Seconds($t8Seconds);
        $this->setTRingSeconds($tRingSeconds);
        $this->setT10OMinutes($t10OMinutes);
        $this->setT10TMinutes($t10TMinutes);
    }

    public function setMaxMonitorsPerOriginator($maxMonitorsPerOriginator = null)
    {
        $this->maxMonitorsPerOriginator = ($maxMonitorsPerOriginator InstanceOf LegacyAutomaticCallbackMaxMonitorsPerOriginator)
             ? $maxMonitorsPerOriginator
             : new LegacyAutomaticCallbackMaxMonitorsPerOriginator($maxMonitorsPerOriginator);
    }

    public function getMaxMonitorsPerOriginator()
    {
        return (!$this->maxMonitorsPerOriginator) ?: $this->maxMonitorsPerOriginator->value();
    }

    public function setMaxMonitorsPerTerminator($maxMonitorsPerTerminator = null)
    {
        $this->maxMonitorsPerTerminator = ($maxMonitorsPerTerminator InstanceOf LegacyAutomaticCallbackMaxMonitorsPerTerminator)
             ? $maxMonitorsPerTerminator
             : new LegacyAutomaticCallbackMaxMonitorsPerTerminator($maxMonitorsPerTerminator);
    }

    public function getMaxMonitorsPerTerminator()
    {
        return (!$this->maxMonitorsPerTerminator) ?: $this->maxMonitorsPerTerminator->value();
    }

    public function setT2Minutes($t2Minutes = null)
    {
        $this->t2Minutes = ($t2Minutes InstanceOf LegacyAutomaticCallbackT2Minutes)
             ? $t2Minutes
             : new LegacyAutomaticCallbackT2Minutes($t2Minutes);
    }

    public function getT2Minutes()
    {
        return (!$this->t2Minutes) ?: $this->t2Minutes->value();
    }

    public function setT4Seconds($t4Seconds = null)
    {
        $this->t4Seconds = ($t4Seconds InstanceOf LegacyAutomaticCallbackT4Seconds)
             ? $t4Seconds
             : new LegacyAutomaticCallbackT4Seconds($t4Seconds);
    }

    public function getT4Seconds()
    {
        return (!$this->t4Seconds) ?: $this->t4Seconds->value();
    }

    public function setT5Seconds($t5Seconds = null)
    {
        $this->t5Seconds = ($t5Seconds InstanceOf LegacyAutomaticCallbackT5Seconds)
             ? $t5Seconds
             : new LegacyAutomaticCallbackT5Seconds($t5Seconds);
    }

    public function getT5Seconds()
    {
        return (!$this->t5Seconds) ?: $this->t5Seconds->value();
    }

    public function setT6Minutes($t6Minutes = null)
    {
        $this->t6Minutes = ($t6Minutes InstanceOf LegacyAutomaticCallbackT6Minutes)
             ? $t6Minutes
             : new LegacyAutomaticCallbackT6Minutes($t6Minutes);
    }

    public function getT6Minutes()
    {
        return (!$this->t6Minutes) ?: $this->t6Minutes->value();
    }

    public function setT7Minutes($t7Minutes = null)
    {
        $this->t7Minutes = ($t7Minutes InstanceOf LegacyAutomaticCallbackT7Minutes)
             ? $t7Minutes
             : new LegacyAutomaticCallbackT7Minutes($t7Minutes);
    }

    public function getT7Minutes()
    {
        return (!$this->t7Minutes) ?: $this->t7Minutes->value();
    }

    public function setT8Seconds($t8Seconds = null)
    {
        $this->t8Seconds = ($t8Seconds InstanceOf LegacyAutomaticCallbackT8Seconds)
             ? $t8Seconds
             : new LegacyAutomaticCallbackT8Seconds($t8Seconds);
    }

    public function getT8Seconds()
    {
        return (!$this->t8Seconds) ?: $this->t8Seconds->value();
    }

    public function setTRingSeconds($tRingSeconds = null)
    {
        $this->tRingSeconds = ($tRingSeconds InstanceOf LegacyAutomaticCallbackTRingSeconds)
             ? $tRingSeconds
             : new LegacyAutomaticCallbackTRingSeconds($tRingSeconds);
    }

    public function getTRingSeconds()
    {
        return (!$this->tRingSeconds) ?: $this->tRingSeconds->value();
    }

    public function setT10OMinutes($t10OMinutes = null)
    {
        $this->t10OMinutes = ($t10OMinutes InstanceOf LegacyAutomaticCallbackT10OMinutes)
             ? $t10OMinutes
             : new LegacyAutomaticCallbackT10OMinutes($t10OMinutes);
    }

    public function getT10OMinutes()
    {
        return (!$this->t10OMinutes) ?: $this->t10OMinutes->value();
    }

    public function setT10TMinutes($t10TMinutes = null)
    {
        $this->t10TMinutes = ($t10TMinutes InstanceOf LegacyAutomaticCallbackT10TMinutes)
             ? $t10TMinutes
             : new LegacyAutomaticCallbackT10TMinutes($t10TMinutes);
    }

    public function getT10TMinutes()
    {
        return (!$this->t10TMinutes) ?: $this->t10TMinutes->value();
    }
}
