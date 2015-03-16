<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes; 

use Broadworks_OCIP\core\Builder\Types\SimpleContent;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Service Provider Communication Barring Hierarchical Originating Rule
 */
class ServiceProviderCommunicationBarringHierarchicalOriginatingRule extends ComplexType implements ComplexInterface
{
    public    $name = 'ServiceProviderCommunicationBarringHierarchicalOriginatingRule';
    protected $action;
    protected $treatmentId;
    protected $transferNumber;
    protected $callTimeoutSeconds;
    protected $timeSchedule;
    protected $holidaySchedule;
    protected $priority;

    public function __construct(
         $action = '',
         $treatmentId = null,
         $transferNumber = null,
         $callTimeoutSeconds = null,
         $timeSchedule = null,
         $holidaySchedule = null,
         $priority = ''
    ) {
        $this->setAction($action);
        $this->setTreatmentId($treatmentId);
        $this->setTransferNumber($transferNumber);
        $this->setCallTimeoutSeconds($callTimeoutSeconds);
        $this->setTimeSchedule($timeSchedule);
        $this->setHolidaySchedule($holidaySchedule);
        $this->setPriority($priority);
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
    public function setAction($action = null)
    {
        $this->action = new SimpleContent($action);
        $this->action->setName('action');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $action
     */
    public function getAction()
    {
        return ($this->action) ? $this->action->getValue() : null;
    }

    /**
     * 
     */
    public function setTreatmentId($treatmentId = null)
    {
        $this->treatmentId = new SimpleContent($treatmentId);
        $this->treatmentId->setName('treatmentId');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $treatmentId
     */
    public function getTreatmentId()
    {
        return ($this->treatmentId) ? $this->treatmentId->getValue() : null;
    }

    /**
     * 
     */
    public function setTransferNumber($transferNumber = null)
    {
        $this->transferNumber = new SimpleContent($transferNumber);
        $this->transferNumber->setName('transferNumber');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $transferNumber
     */
    public function getTransferNumber()
    {
        return ($this->transferNumber) ? $this->transferNumber->getValue() : null;
    }

    /**
     * 
     */
    public function setCallTimeoutSeconds($callTimeoutSeconds = null)
    {
        $this->callTimeoutSeconds = new SimpleContent($callTimeoutSeconds);
        $this->callTimeoutSeconds->setName('callTimeoutSeconds');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $callTimeoutSeconds
     */
    public function getCallTimeoutSeconds()
    {
        return ($this->callTimeoutSeconds) ? $this->callTimeoutSeconds->getValue() : null;
    }

    /**
     * 
     */
    public function setTimeSchedule($timeSchedule = null)
    {
        $this->timeSchedule = new SimpleContent($timeSchedule);
        $this->timeSchedule->setName('timeSchedule');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $timeSchedule
     */
    public function getTimeSchedule()
    {
        return ($this->timeSchedule) ? $this->timeSchedule->getValue() : null;
    }

    /**
     * 
     */
    public function setHolidaySchedule($holidaySchedule = null)
    {
        $this->holidaySchedule = new SimpleContent($holidaySchedule);
        $this->holidaySchedule->setName('holidaySchedule');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $holidaySchedule
     */
    public function getHolidaySchedule()
    {
        return ($this->holidaySchedule) ? $this->holidaySchedule->getValue() : null;
    }

    /**
     * 
     */
    public function setPriority($priority = null)
    {
        $this->priority = new SimpleContent($priority);
        $this->priority->setName('priority');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $priority
     */
    public function getPriority()
    {
        return ($this->priority) ? $this->priority->getValue() : null;
    }
}
