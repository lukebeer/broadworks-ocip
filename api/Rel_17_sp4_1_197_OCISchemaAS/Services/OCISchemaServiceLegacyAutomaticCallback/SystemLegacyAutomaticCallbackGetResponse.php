<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceLegacyAutomaticCallback; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\LegacyAutomaticCallbackMaxMonitorsPerOriginator;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\LegacyAutomaticCallbackMaxMonitorsPerTerminator;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\LegacyAutomaticCallbackT2Minutes;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\LegacyAutomaticCallbackT4Seconds;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\LegacyAutomaticCallbackT5Seconds;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\LegacyAutomaticCallbackT6Minutes;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\LegacyAutomaticCallbackT7Minutes;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\LegacyAutomaticCallbackT8Seconds;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\LegacyAutomaticCallbackTRingSeconds;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\LegacyAutomaticCallbackT10OMinutes;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\LegacyAutomaticCallbackT10TMinutes;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to SystemLegacyAutomaticCallbackGetRequest.
 */
class SystemLegacyAutomaticCallbackGetResponse extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $maxMonitorsPerOriginator,
             $maxMonitorsPerTerminator,
             $t2Minutes,
             $t4Seconds,
             $t5Seconds,
             $t6Minutes,
             $t7Minutes,
             $t8Seconds,
             $tRingSeconds,
             $t10OMinutes,
             $t10TMinutes
    ) {
        $this->maxMonitorsPerOriginator = $maxMonitorsPerOriginator;
        $this->maxMonitorsPerTerminator = $maxMonitorsPerTerminator;
        $this->t2Minutes                = $t2Minutes;
        $this->t4Seconds                = $t4Seconds;
        $this->t5Seconds                = $t5Seconds;
        $this->t6Minutes                = $t6Minutes;
        $this->t7Minutes                = $t7Minutes;
        $this->t8Seconds                = $t8Seconds;
        $this->tRingSeconds             = $tRingSeconds;
        $this->t10OMinutes              = $t10OMinutes;
        $this->t10TMinutes              = $t10TMinutes;
        $this->args                     = func_get_args();
    }

    public function setMaxMonitorsPerOriginator($maxMonitorsPerOriginator)
    {
        $maxMonitorsPerOriginator and $this->maxMonitorsPerOriginator = new LegacyAutomaticCallbackMaxMonitorsPerOriginator($maxMonitorsPerOriginator);
    }

    public function getMaxMonitorsPerOriginator()
    {
        return (!$this->maxMonitorsPerOriginator) ?: $this->maxMonitorsPerOriginator->value();
    }

    public function setMaxMonitorsPerTerminator($maxMonitorsPerTerminator)
    {
        $maxMonitorsPerTerminator and $this->maxMonitorsPerTerminator = new LegacyAutomaticCallbackMaxMonitorsPerTerminator($maxMonitorsPerTerminator);
    }

    public function getMaxMonitorsPerTerminator()
    {
        return (!$this->maxMonitorsPerTerminator) ?: $this->maxMonitorsPerTerminator->value();
    }

    public function setT2Minutes($t2Minutes)
    {
        $t2Minutes and $this->t2Minutes = new LegacyAutomaticCallbackT2Minutes($t2Minutes);
    }

    public function getT2Minutes()
    {
        return (!$this->t2Minutes) ?: $this->t2Minutes->value();
    }

    public function setT4Seconds($t4Seconds)
    {
        $t4Seconds and $this->t4Seconds = new LegacyAutomaticCallbackT4Seconds($t4Seconds);
    }

    public function getT4Seconds()
    {
        return (!$this->t4Seconds) ?: $this->t4Seconds->value();
    }

    public function setT5Seconds($t5Seconds)
    {
        $t5Seconds and $this->t5Seconds = new LegacyAutomaticCallbackT5Seconds($t5Seconds);
    }

    public function getT5Seconds()
    {
        return (!$this->t5Seconds) ?: $this->t5Seconds->value();
    }

    public function setT6Minutes($t6Minutes)
    {
        $t6Minutes and $this->t6Minutes = new LegacyAutomaticCallbackT6Minutes($t6Minutes);
    }

    public function getT6Minutes()
    {
        return (!$this->t6Minutes) ?: $this->t6Minutes->value();
    }

    public function setT7Minutes($t7Minutes)
    {
        $t7Minutes and $this->t7Minutes = new LegacyAutomaticCallbackT7Minutes($t7Minutes);
    }

    public function getT7Minutes()
    {
        return (!$this->t7Minutes) ?: $this->t7Minutes->value();
    }

    public function setT8Seconds($t8Seconds)
    {
        $t8Seconds and $this->t8Seconds = new LegacyAutomaticCallbackT8Seconds($t8Seconds);
    }

    public function getT8Seconds()
    {
        return (!$this->t8Seconds) ?: $this->t8Seconds->value();
    }

    public function setTRingSeconds($tRingSeconds)
    {
        $tRingSeconds and $this->tRingSeconds = new LegacyAutomaticCallbackTRingSeconds($tRingSeconds);
    }

    public function getTRingSeconds()
    {
        return (!$this->tRingSeconds) ?: $this->tRingSeconds->value();
    }

    public function setT10OMinutes($t10OMinutes)
    {
        $t10OMinutes and $this->t10OMinutes = new LegacyAutomaticCallbackT10OMinutes($t10OMinutes);
    }

    public function getT10OMinutes()
    {
        return (!$this->t10OMinutes) ?: $this->t10OMinutes->value();
    }

    public function setT10TMinutes($t10TMinutes)
    {
        $t10TMinutes and $this->t10TMinutes = new LegacyAutomaticCallbackT10TMinutes($t10TMinutes);
    }

    public function getT10TMinutes()
    {
        return (!$this->t10TMinutes) ?: $this->t10TMinutes->value();
    }
}
