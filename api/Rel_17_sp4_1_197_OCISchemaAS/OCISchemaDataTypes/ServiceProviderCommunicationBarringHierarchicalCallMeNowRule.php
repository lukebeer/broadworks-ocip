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
 * Service Provider Communication Barring Hierarchical Call Me Now Rule
 */
class ServiceProviderCommunicationBarringHierarchicalCallMeNowRule extends ComplexType implements ComplexInterface
{
    public    $name               = 'ServiceProviderCommunicationBarringHierarchicalCallMeNowRule';
    protected $action             = null;
    protected $callTimeoutSeconds = null;
    protected $timeSchedule       = null;
    protected $holidaySchedule    = null;
    protected $priority           = null;

    public function __construct(
         $action,
         $callTimeoutSeconds = null,
         $timeSchedule = null,
         $holidaySchedule = null,
         $priority
    ) {
        $this->setAction($action);
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
        if (!$action) return $this;
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
        return $this->action->getValue();
    }

    /**
     * 
     */
    public function setCallTimeoutSeconds($callTimeoutSeconds = null)
    {
        if (!$callTimeoutSeconds) return $this;
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
        return $this->callTimeoutSeconds->getValue();
    }

    /**
     * 
     */
    public function setTimeSchedule($timeSchedule = null)
    {
        if (!$timeSchedule) return $this;
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
        return $this->timeSchedule->getValue();
    }

    /**
     * 
     */
    public function setHolidaySchedule($holidaySchedule = null)
    {
        if (!$holidaySchedule) return $this;
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
        return $this->holidaySchedule->getValue();
    }

    /**
     * 
     */
    public function setPriority($priority = null)
    {
        if (!$priority) return $this;
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
        return $this->priority->getValue();
    }
}
