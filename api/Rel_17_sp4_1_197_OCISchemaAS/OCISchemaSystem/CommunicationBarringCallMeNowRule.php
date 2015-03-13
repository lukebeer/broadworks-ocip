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
    public    $name               = 'CommunicationBarringCallMeNowRule';
    protected $criteria           = null;
    protected $action             = null;
    protected $callTimeoutSeconds = null;

    public function __construct(
         $criteria,
         $action,
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
        if (!$criteria) return $this;
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
        return $this->criteria->getValue();
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
}
