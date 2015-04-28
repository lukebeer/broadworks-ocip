<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated15; 

use BroadworksOCIP\Builder\Types\SimpleContent;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Communication Barring Redirecting Rule
 */
class CommunicationBarringRedirectingRule15sp2 extends ComplexType implements ComplexInterface
{
    public    $elementName = 'CommunicationBarringRedirectingRule15sp2';
    protected $criteria;
    protected $action;

    public function __construct(
         $criteria = '',
         $action = ''
    ) {
        $this->setCriteria($criteria);
        $this->setAction($action);
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
}
