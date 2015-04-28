<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use BroadworksOCIP\Builder\Types\SimpleContent;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Communication Barring Redirecting Rule
 */
class CommunicationBarringRedirectingRule extends ComplexType implements ComplexInterface
{
    public    $elementName = 'CommunicationBarringRedirectingRule';
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
        $this->criteria->setElementName('criteria');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $criteria
     */
    public function getCriteria()
    {
        return ($this->criteria)
            ? $this->criteria->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setAction($action = null)
    {
        $this->action = new SimpleContent($action);
        $this->action->setElementName('action');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $action
     */
    public function getAction()
    {
        return ($this->action)
            ? $this->action->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setCallTimeoutSeconds($callTimeoutSeconds = null)
    {
        $this->callTimeoutSeconds = new SimpleContent($callTimeoutSeconds);
        $this->callTimeoutSeconds->setElementName('callTimeoutSeconds');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $callTimeoutSeconds
     */
    public function getCallTimeoutSeconds()
    {
        return ($this->callTimeoutSeconds)
            ? $this->callTimeoutSeconds->getElementValue()
            : null;
    }
}
