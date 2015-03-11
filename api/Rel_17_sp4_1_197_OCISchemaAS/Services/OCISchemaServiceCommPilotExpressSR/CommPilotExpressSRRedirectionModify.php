<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCommPilotExpressSR; 

use Broadworks_OCIP\core\Builder\Types\SimpleContent;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCommPilotExpressSR\CommPilotExpressSRRedirectionModify;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * CommPilot Express SR type to transfer to voice Mail or forward to a number
 *         used in the context of a modify.
 */
class CommPilotExpressSRRedirectionModify extends ComplexType implements ComplexInterface
{
    public    $responseType          = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCommPilotExpressSR\CommPilotExpressSRRedirectionModify';
    public    $name                  = 'CommPilotExpressSRRedirectionModify';
    protected $action                = null;
    protected $forwardingPhoneNumber = null;

    public function __construct(
         $action = null,
         $forwardingPhoneNumber = null
    ) {
        $this->setAction($action);
        $this->setForwardingPhoneNumber($forwardingPhoneNumber);
    }

    /**
     * @return CommPilotExpressSRRedirectionModify
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
     * @return SimpleContent
     */
    public function getAction()
    {
        return $this->action->getValue();
    }

    /**
     * 
     */
    public function setForwardingPhoneNumber($forwardingPhoneNumber = null)
    {
        if (!$forwardingPhoneNumber) return $this;
        $this->forwardingPhoneNumber = new SimpleContent($forwardingPhoneNumber);
        $this->forwardingPhoneNumber->setName('forwardingPhoneNumber');
        return $this;
    }

    /**
     * 
     * @return SimpleContent
     */
    public function getForwardingPhoneNumber()
    {
        return $this->forwardingPhoneNumber->getValue();
    }
}
