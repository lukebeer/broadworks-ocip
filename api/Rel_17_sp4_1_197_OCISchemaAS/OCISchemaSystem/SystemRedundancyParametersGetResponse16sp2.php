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
    public    $elementName = 'SystemRedundancyParametersGetResponse16sp2';
    protected $rollBackTimerMinutes;
    protected $sendSipOptionMessageUponMigration;

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SystemRedundancyParametersGetResponse16sp2 $response
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
        $this->rollBackTimerMinutes = ($rollBackTimerMinutes InstanceOf RedundancyRollBackTimerMinutes)
             ? $rollBackTimerMinutes
             : new RedundancyRollBackTimerMinutes($rollBackTimerMinutes);
        $this->rollBackTimerMinutes->setElementName('rollBackTimerMinutes');
        return $this;
    }

    /**
     * 
     * @return RedundancyRollBackTimerMinutes $rollBackTimerMinutes
     */
    public function getRollBackTimerMinutes()
    {
        return ($this->rollBackTimerMinutes)
            ? $this->rollBackTimerMinutes->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setSendSipOptionMessageUponMigration($sendSipOptionMessageUponMigration = null)
    {
        $this->sendSipOptionMessageUponMigration = new PrimitiveType($sendSipOptionMessageUponMigration);
        $this->sendSipOptionMessageUponMigration->setElementName('sendSipOptionMessageUponMigration');
        return $this;
    }

    /**
     * 
     * @return boolean $sendSipOptionMessageUponMigration
     */
    public function getSendSipOptionMessageUponMigration()
    {
        return ($this->sendSipOptionMessageUponMigration)
            ? $this->sendSipOptionMessageUponMigration->getElementValue()
            : null;
    }
}
