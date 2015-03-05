<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\RedundancyRollBackTimerMinutes;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\xs:boolean;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to SystemRedundancyParametersGetRequest16sp2.
 *         Contains a list of system Redundancy parameters.
 */
class SystemRedundancyParametersGetResponse16sp2 extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $rollBackTimerMinutes,
             $sendSipOptionMessageUponMigration
    ) {
        $this->rollBackTimerMinutes              = $rollBackTimerMinutes;
        $this->sendSipOptionMessageUponMigration = $sendSipOptionMessageUponMigration;
        $this->args                              = func_get_args();
    }

    public function setRollBackTimerMinutes($rollBackTimerMinutes)
    {
        $rollBackTimerMinutes and $this->rollBackTimerMinutes = new RedundancyRollBackTimerMinutes($rollBackTimerMinutes);
    }

    public function getRollBackTimerMinutes()
    {
        return (!$this->rollBackTimerMinutes) ?: $this->rollBackTimerMinutes->value();
    }

    public function setSendSipOptionMessageUponMigration($sendSipOptionMessageUponMigration)
    {
        $sendSipOptionMessageUponMigration and $this->sendSipOptionMessageUponMigration = new xs:boolean($sendSipOptionMessageUponMigration);
    }

    public function getSendSipOptionMessageUponMigration()
    {
        return (!$this->sendSipOptionMessageUponMigration) ?: $this->sendSipOptionMessageUponMigration->value();
    }
}
