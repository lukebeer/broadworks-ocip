<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated17; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\RedundancyRollBackTimerMinutes;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Replaced by: SystemRedundancyParametersGetResponse16sp2
 *       
 *         Response to SystemRedundancyParametersGetRequest.
 *         Contains a list of system Redundancy parameters.
 */
class SystemRedundancyParametersGetResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'SystemRedundancyParametersGetResponse';
    protected $rollBackTimerMinutes;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated17\SystemRedundancyParametersGetResponse $response
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
}
