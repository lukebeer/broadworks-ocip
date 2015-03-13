<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated17; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\RedundancyRollBackTimerMinutes;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Replaced by: SystemRedundancyParametersGetResponse16sp2
 *       
 *         Response to SystemRedundancyParametersGetRequest.
 *         Contains a list of system Redundancy parameters.
 */
class SystemRedundancyParametersGetResponse extends ComplexType implements ComplexInterface
{
    public    $name                 = 'SystemRedundancyParametersGetResponse';
    protected $rollBackTimerMinutes = null;

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated17\SystemRedundancyParametersGetResponse $response
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
     * @return RedundancyRollBackTimerMinutes $rollBackTimerMinutes
     */
    public function getRollBackTimerMinutes()
    {
        return $this->rollBackTimerMinutes->getValue();
    }
}
