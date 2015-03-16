<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\core\Builder\Types\SimpleContent;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Communication Barring Call Me Now Rule
 */
class CommunicationBarringCallMeNowRule extends ComplexType implements ComplexInterface
{
    public    $name = 'CommunicationBarringCallMeNowRule';
    protected $criteria;
    protected $action;
    protected $callTimeoutSeconds;

    public function __construct(
         $criteria = '',
         $action = '',
         $callTimeoutSeconds = null
    ) {
        $this->setCriteria($criteria);
        $this->setAction($action);
        $this->setCallTimeoutSeconds($callTimeoutSeconds);
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
    public function setCriteria($criteria = null)
    {
        $this->criteria = new SimpleContent($criteria);
        $this->criteria->setName('criteria');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $criteria
     */
    public function getCriteria()
    {
        return ($this->criteria) ? $this->criteria->getValue() : null;
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
}
