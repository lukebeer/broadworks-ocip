<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\RedundancyRollBackTimerMinutes;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Request to modify Redundancy system parameters.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class SystemRedundancyParametersModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name                              = __CLASS__;
    protected $rollBackTimerMinutes              = null;
    protected $sendSipOptionMessageUponMigration = null;

    public function __construct(
         $rollBackTimerMinutes = null,
         $sendSipOptionMessageUponMigration = null
    ) {
        $this->setRollBackTimerMinutes($rollBackTimerMinutes);
        $this->setSendSipOptionMessageUponMigration($sendSipOptionMessageUponMigration);
    }

    /**
     * Redundancy rollback timer in minutes.
     */
    public function setRollBackTimerMinutes($rollBackTimerMinutes = null)
    {
        $this->rollBackTimerMinutes = ($rollBackTimerMinutes InstanceOf RedundancyRollBackTimerMinutes)
             ? $rollBackTimerMinutes
             : new RedundancyRollBackTimerMinutes($rollBackTimerMinutes);
    }

    /**
     * Redundancy rollback timer in minutes.
     */
    public function getRollBackTimerMinutes()
    {
        return (!$this->rollBackTimerMinutes) ?: $this->rollBackTimerMinutes->getValue();
    }

    /**
     * 
     */
    public function setSendSipOptionMessageUponMigration($sendSipOptionMessageUponMigration = null)
    {
        $this->sendSipOptionMessageUponMigration = (boolean) $sendSipOptionMessageUponMigration;
    }

    /**
     * 
     */
    public function getSendSipOptionMessageUponMigration()
    {
        return (!$this->sendSipOptionMessageUponMigration) ?: $this->sendSipOptionMessageUponMigration->getValue();
    }
}
