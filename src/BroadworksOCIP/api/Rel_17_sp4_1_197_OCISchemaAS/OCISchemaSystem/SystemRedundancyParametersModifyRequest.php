<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\RedundancyRollBackTimerMinutes;
use BroadworksOCIP\Builder\Types\PrimitiveType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Request to modify Redundancy system parameters.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class SystemRedundancyParametersModifyRequest extends ComplexType implements ComplexInterface
{
    public    $elementName = 'SystemRedundancyParametersModifyRequest';
    protected $rollBackTimerMinutes;
    protected $sendSipOptionMessageUponMigration;

    public function __construct(
         $rollBackTimerMinutes = null,
         $sendSipOptionMessageUponMigration = null
    ) {
        $this->setRollBackTimerMinutes($rollBackTimerMinutes);
        $this->setSendSipOptionMessageUponMigration($sendSipOptionMessageUponMigration);
    }

    /**
     * @return mixed $response
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
