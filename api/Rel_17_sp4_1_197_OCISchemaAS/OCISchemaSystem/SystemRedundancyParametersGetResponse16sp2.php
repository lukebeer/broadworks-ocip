<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\RedundancyRollBackTimerMinutes;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to SystemRedundancyParametersGetRequest16sp2.
 *         Contains a list of system Redundancy parameters.
 */
class SystemRedundancyParametersGetResponse16sp2 extends ComplexType implements ComplexInterface
{
    public    $name                              = 'SystemRedundancyParametersGetResponse16sp2';
    protected $rollBackTimerMinutes              = null;
    protected $sendSipOptionMessageUponMigration = null;

    /**
     * @return SystemRedundancyParametersGetResponse16sp2
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setRollBackTimerMinutes($rollBackTimerMinutes = null)
    {
        if (!$rollBackTimerMinutes) return $this;
        $this->rollBackTimerMinutes = ($rollBackTimerMinutes InstanceOf RedundancyRollBackTimerMinutes)
             ? $rollBackTimerMinutes
             : new RedundancyRollBackTimerMinutes($rollBackTimerMinutes);
        $this->rollBackTimerMinutes->setName('rollBackTimerMinutes');
        return $this;
    }

    /**
     * 
     * @return RedundancyRollBackTimerMinutes
     */
    public function getRollBackTimerMinutes()
    {
        return $this->rollBackTimerMinutes->getValue();
    }

    /**
     * 
     */
    public function setSendSipOptionMessageUponMigration($sendSipOptionMessageUponMigration = null)
    {
        if (!$sendSipOptionMessageUponMigration) return $this;
        $this->sendSipOptionMessageUponMigration = new PrimitiveType($sendSipOptionMessageUponMigration);
        $this->sendSipOptionMessageUponMigration->setName('sendSipOptionMessageUponMigration');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getSendSipOptionMessageUponMigration()
    {
        return $this->sendSipOptionMessageUponMigration->getValue();
    }
}
