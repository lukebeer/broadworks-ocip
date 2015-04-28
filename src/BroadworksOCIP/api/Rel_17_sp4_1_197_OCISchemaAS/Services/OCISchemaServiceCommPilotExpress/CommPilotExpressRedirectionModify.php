<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCommPilotExpress; 

use BroadworksOCIP\Builder\Types\SimpleContent;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * CommPilot Express type to transfer to voice Mail or forward to a number
 *         used in the context of a modify.
 */
class CommPilotExpressRedirectionModify extends ComplexType implements ComplexInterface
{
    public    $elementName = 'CommPilotExpressRedirectionModify';
    protected $action;
    protected $forwardingPhoneNumber;

    public function __construct(
         $action = null,
         $forwardingPhoneNumber = null
    ) {
        $this->setAction($action);
        $this->setForwardingPhoneNumber($forwardingPhoneNumber);
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
    public function setForwardingPhoneNumber($forwardingPhoneNumber = null)
    {
        $this->forwardingPhoneNumber = new SimpleContent($forwardingPhoneNumber);
        $this->forwardingPhoneNumber->setElementName('forwardingPhoneNumber');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $forwardingPhoneNumber
     */
    public function getForwardingPhoneNumber()
    {
        return ($this->forwardingPhoneNumber)
            ? $this->forwardingPhoneNumber->getElementValue()
            : null;
    }
}
